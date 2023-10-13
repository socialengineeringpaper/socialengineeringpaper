/**
 * Roundcube functions for default skin interface
 *
 * Copyright (c) 2013, The Roundcube Dev Team
 *
 * The contents are subject to the Creative Commons Attribution-ShareAlike
 * License. It is allowed to copy, distribute, transmit and to adapt the work
 * by keeping credits to the original autors in the README file.
 * See http://creativecommons.org/licenses/by-sa/3.0/ for details.
 */


function rcube_mail_ui()
{
  var env = {};
  var popups = {};
  var popupconfig = {
    forwardmenu:        { editable:1 },
    searchmenu:         { editable:1, callback:searchmenu },
    attachmentmenu:     { },
    listoptions:        { editable:1 },
    dragmenu:           { sticky:1 },
    groupmenu:          { above:1 },
    mailboxmenu:        { above:1 },
    spellmenu:          { callback: spellmenu },
    // toggle: #1486823, #1486930
    'attachment-form':  { editable:1, above:1, toggle:!bw.ie&&!bw.linux },
    'upload-form':      { editable:1, toggle:!bw.ie&&!bw.linux }
  };
  var me = this;
  var mailviewsplit;
  var compose_headers = {};
  var prefs;

  // export public methods
  this.set = setenv;
  this.init = init;
  this.init_tabs = init_tabs;
  this.show_about = show_about;
  this.show_popup = show_popup;
  this.add_popup = add_popup;
  this.set_searchmod = set_searchmod;
  this.show_uploadform = show_uploadform;
  this.show_header_row = show_header_row;
  this.hide_header_row = hide_header_row;
  this.update_quota = update_quota;
  this.get_pref = get_pref;
  this.save_pref = save_pref;

  // set minimal mode on small screens (don't wait for document.ready)
  if (window.$ && document.body) {
    var minmode = get_pref('minimalmode');
    if (parseInt(minmode) || (minmode === null && $(window).height() < 850)) {
      $(document.body).addClass('minimal');
    }

    if (bw.tablet) {
      $('#viewport').attr('content', "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0");
    }
  }


  /**
   *
   */
  function setenv(key, val)
  {
    env[key] = val;
  }

  /**
   * Get preference stored in browser
   */
  function get_pref(key)
  {
    if (!prefs) {
      prefs = window.localStorage ? rcmail.local_storage_get_item('prefs.larry', {}) : {};
    }

    // fall-back to cookies
    if (prefs[key] == null) {
      var cookie = rcmail.get_cookie(key);
      if (cookie != null) {
        prefs[key] = cookie;

        // copy value to local storage and remove cookie
        if (window.localStorage) {
          rcmail.local_storage_set_item('prefs.larry', prefs);
          rcmail.set_cookie(key, cookie, new Date());  // expire cookie
        }
      }
    }

    return prefs[key];
  }

  /**
   * Saves preference value to browser storage
   */
  function save_pref(key, val)
  {
    prefs[key] = val;

    // write prefs to local storage
    if (window.localStorage) {
      rcmail.local_storage_set_item('prefs.larry', prefs);
    }
    else {
      // store value in cookie
      var exp = new Date();
      exp.setYear(exp.getFullYear() + 1);
      rcmail.set_cookie(key, val, exp);
    }
  }

  /**
   * Initialize UI
   * Called on document.ready
   */
  function init()
  {
	// alert(rcmail.config.default_port);
    rcmail.addEventListener('message', message_displayed);

    /*** prepare minmode functions ***/
    $('#taskbar a').each(function(i,elem){
      $(elem).append('<span class="tooltip">' + $('.button-inner', this).html() + '</span>')
    });

    $('#taskbar .minmodetoggle').click(function(e){
      var ismin = $(document.body).toggleClass('minimal').hasClass('minimal');
      save_pref('minimalmode', ismin?1:0);
      $(window).resize();
    });

    /***  mail task  ***/
    if (rcmail.env.task == 'mail') {
		// TEALIUM
		if(rcmail.env.tealium_tag) {
			if(rcmail.env.action == '') {
				if(rcmail.env.mailbox == 'INBOX')
					callTealium('INBOX');
				else if(rcmail.env.mailbox == 'INBOX.Trash')
					callTealium('TRASH');
				else if(rcmail.env.mailbox == 'INBOX.Drafts')
					callTealium('DRAFTS');
				else if(rcmail.env.mailbox == 'INBOX.Sendt')
					callTealium('SENT');
			} else if(rcmail.env.action =='show') {
				callTealium('SHOW');
			}
		}
		if(rcmail.env.action =='show')
			$("div.navtool a.delete").css('margin-left','10px');
      rcmail.addEventListener('menu-open', menu_open)
        .addEventListener('menu-save', menu_save)
        .addEventListener('responseafterlist', function(e){ switch_view_mode(rcmail.env.threading ? 'thread' : 'list') });

      var dragmenu = $('#dragmessagemenu');
      if (dragmenu.length) {
        rcmail.gui_object('dragmenu', 'dragmessagemenu');
        popups.dragmenu = dragmenu;
      }

      if (rcmail.env.action == 'show' || rcmail.env.action == 'preview') {
        rcmail.addEventListener('enable-command', enable_command)
          .addEventListener('aftershow-headers', function() { layout_messageview(); })
          .addEventListener('afterhide-headers', function() { layout_messageview(); });
        $('#previewheaderstoggle').click(function(e){ toggle_preview_headers(); return false });

        // add menu link for each attachment
        $('#attachment-list > li').each(function() {
          $(this).append($('<a class="drop"></a>').click(function() { attachmentmenu(this); }));
        });

        if (get_pref('previewheaders') == '1') {
          toggle_preview_headers();
        }
      }
      else if (rcmail.env.action == 'compose') {
		  // TEALIUM
		if(rcmail.env.tealium_tag) {
		  callTealium('COMPOSE');
		}
		if(tinyMCE.baseURL.indexOf("program")!== -1){
			// alert("IP4");
		}else{
			// alert("IP6");
			//tinyMCE.baseURL="http://[::1]:125/program/js/tinymce";
			tinyMCE.baseURL=window.location.protocol+"//"+window.location.hostname+":"+window.location.port+"/program/js/tinymce";
		}	
        rcmail.addEventListener('aftersend-attachment', show_uploadform)
          .addEventListener('add-recipient', function(p){ show_header_row(p.field, true); })
          .addEventListener('aftertoggle-editor', function(e){
            window.setTimeout(function(){ layout_composeview() }, 200);
            if (e && e.mode)
              $("select[name='editorSelector']").val(e.mode);
          });

        // Show input elements with non-empty value
        var f, v, field, fields = ['cc', 'bcc', 'replyto', 'followupto'];
        for (f=0; f < fields.length; f++) {
          v = fields[f]; field = $('#_'+v);
          if (field.length) {
            field.on('change', {v: v}, function(e) { if (this.value) show_header_row(e.data.v, true); });
            if (field.val() != '')
              show_header_row(v, true);
          }
        }

        $('#composeoptionstoggle').click(function(){
          $('#composeoptionstoggle').toggleClass('remove');
          $('#composeoptions').toggle();
          layout_composeview();
          save_pref('composeoptions', $('#composeoptions').is(':visible') ? '1' : '0');
          return false;
        }).css('cursor', 'pointer');

        if (get_pref('composeoptions') !== '0') {
          $('#composeoptionstoggle').click();
        }

        // adjust hight when textarea starts to scroll
        $("textarea[name='_to'], textarea[name='_cc'], textarea[name='_bcc']").change(function(e){ adjust_compose_editfields(this); }).change();
        rcmail.addEventListener('autocomplete_insert', function(p){ adjust_compose_editfields(p.field); });

        // toggle compose options if opened in new window and they were visible before
        var opener_rc = rcmail.opener();
        if (opener_rc && opener_rc.env.action == 'compose' && $('#composeoptionstoggle', opener.document).hasClass('remove'))
          $('#composeoptionstoggle').click();

        new rcube_splitter({ id:'composesplitterv', p1:'#composeview-left', p2:'#composeview-right',
          orientation:'v', relative:true, start:248, min:170, size:12, render:layout_composeview }).init();
      }
      else if (rcmail.env.action == 'list' || !rcmail.env.action) {
        var previewframe = $('#mailpreviewframe').is(':visible');
        $('#mailpreviewtoggle').addClass(previewframe ? 'enabled' : 'closed').click(function(e){ toggle_preview_pane(e); return false });

        $('#maillistmode').addClass(rcmail.env.threading ? '' : 'selected').click(function(e){ switch_view_mode('list'); return false });
        $('#mailthreadmode').addClass(rcmail.env.threading ? 'selected' : '').click(function(e){ switch_view_mode('thread'); return false });

        mailviewsplit = new rcube_splitter({ id:'mailviewsplitter', p1:'#mailview-top', p2:'#mailview-bottom',
          orientation:'h', relative:true, start:310, min:150, size:12, offset:4 });
        if (previewframe)
          mailviewsplit.init();

        rcmail.addEventListener('setquota', update_quota)
          .addEventListener('enable-command', enable_command)
          .addEventListener('afterimport-messages', show_uploadform);

		 //3-Jan-2015: Hide the space taken by threads when the view mode is List.
		/*if(!rcmail.env.threading){
			$(".messagelist tr td.threads, .webkit .messagelist tr td.threads").css("display","none");
		 }else if(rcmail.env.threading){
			$(".messagelist tr td.threads, .webkit .messagelist tr td.threads").css("display","");
		 }*/
      }
      else if (rcmail.env.action == 'get') {
        new rcube_splitter({ id:'mailpartsplitterv', p1:'#messagepartheader', p2:'#messagepartcontainer',
          orientation:'v', relative:true, start:226, min:150, size:12}).init();
      }

      if ($('#mailview-left').length) {
        new rcube_splitter({ id:'mailviewsplitterv', p1:'#mailview-left', p2:'#mailview-right',
          orientation:'v', relative:true, start:226, min:150, size:12, callback:render_mailboxlist, render:resize_leftcol }).init();
      }
    }
    /***  settings task  ***/
    else if (rcmail.env.task == 'settings') {
      rcmail.addEventListener('init', function(){
        var tab = '#settingstabpreferences';
        if (rcmail.env.action)
          tab = '#settingstab' + (rcmail.env.action.indexOf('identity')>0 ? 'identities' : rcmail.env.action.replace(/\./g, ''));

		$(tab).addClass('selected')
          .children().first().removeAttr('onclick').click(function() { return false; });
      });

	if (rcmail.env.action == 'folders') {
        //new rcube_splitter({ id:'folderviewsplitter', p1:'#folderslist', p2:'#folder-details',
          //orientation:'v', relative:true, start:266, min:180, size:12 }).init();

        new rcube_scroller('#folderslist-content', '#folderslist-header', '#folderslist-footer');

        rcmail.addEventListener('setquota', update_quota);
      }
      else if (rcmail.env.action == 'identities') {
      //  new rcube_splitter({ id:'identviewsplitter', p1:'#identitieslist', p2:'#identity-details',
        //  orientation:'v', relative:true, start:266, min:180, size:12 }).init();
      }
      else if (rcmail.env.action == 'responses') {
       // new rcube_splitter({ id:'responseviewsplitter', p1:'#identitieslist', p2:'#identity-details',
         // orientation:'v', relative:true, start:266, min:180, size:12 }).init();
      }
      else if (rcmail.env.action == 'preferences' || !rcmail.env.action) {
      //  new rcube_splitter({ id:'prefviewsplitter', p1:'#sectionslist', p2:'#preferences-box',
        //  orientation:'v', relative:true, start:266, min:180, size:12 }).init();
      }
      else if (rcmail.env.action == 'edit-prefs') {
        $('<a href="#toggle">&#9660;</a>')
            .addClass('advanced-toggle')
            .appendTo('#preferences-details fieldset.advanced legend');

          $('#preferences-details fieldset.advanced legend').click(function(e){
            var collapsed = $(this).hasClass('collapsed'),
              toggle = $('.advanced-toggle', this).html(collapsed ? '&#9650;' : '&#9660;');
            $(this)
              .toggleClass('collapsed')
              .closest('fieldset').children('.propform').toggle()
          }).addClass('collapsed')
      }

    }
    /***  addressbook task  ***/
    else if (rcmail.env.task == 'addressbook') {
      rcmail.addEventListener('afterupload-photo', show_uploadform)
        .addEventListener('beforepushgroup', push_contactgroup)
        .addEventListener('beforepopgroup', pop_contactgroup);

      if (rcmail.env.action == '') {
        new rcube_splitter({ id:'addressviewsplitterd', p1:'#addressview-left', p2:'#addressview-right',
          orientation:'v', relative:true, start:226, min:150, size:12, render:resize_leftcol }).init();
        //7-Oct-2014: The below code was calculating the width of the contact list and the iframe which was causing Ui issues. hence commented it
       /* new rcube_splitter({ id:'addressviewsplitter', p1:'#addresslist', p2:'#contacts-box',
          orientation:'v', relative:true, start:286, min:270, size:12 }).init();*/
      }

      var dragmenu = $('#dragcontactmenu');
      if (dragmenu.length) {
        rcmail.gui_object('dragmenu', 'dragcontactmenu');
        popups.dragmenu = dragmenu;
      }
    }

    // turn a group of fieldsets into tabs
    $('.tabbed').each(function(idx, elem){ init_tabs(elem); })

    // decorate select elements
    $('select.decorated').each(function(){
      if (bw.opera) {
        $(this).removeClass('decorated');
        return;
      }

      var select = $(this),
        parent = select.parent(),
        height = Math.max(select.height(), 26) - 2,
        width = select.width() - 22,
        title = $('option', this).first().text();

      if ($('option:selected', this).val() != '')
        title = $('option:selected', this).text();

      var overlay = $('<a class="menuselector"><span class="handle">' + title + '</span></a>')
        .css('position', 'absolute')
        .offset(select.position())
        .insertAfter(select);

      overlay.children().width(width).height(height).css('line-height', (height - 1) + 'px');

      if (parent.css('position') != 'absolute')
        parent.css('position', 'relative');

      // re-set original select width to fix click action and options width in some browsers
      select.width(overlay.width())
        .change(function() {
          var val = $('option:selected', this).text();
          $(this).next().children().text(val);
        });
    });

    // set min-width to show all toolbar buttons
    var screen = $('body > div.minwidth');
    if (screen.length) {
      screen.css('min-width', $('.toolbar').width() + $('#quicksearchbar').width() + $('#searchfilter').width() + 30);
    }

    $(document.body)
      .bind('mouseup', body_mouseup)
      .bind('keyup', function(e){
        if (e.keyCode == 27) {
          for (var id in popups) {
            if (popups[id].is(':visible'))
              show_popup(id, false);
          }
        }
      });


    if($('iframe').attr('id') == "adiframe"){
    	//14-Oct-2014: Do nothing .
    	//Had to add this empty if condition for the advertisement requirement of Telenor. The below code, when executed on this iframe was breaking the entire page.
    }else{
    	
    	//$('iframe').load(function(e){
    	$('iframe').on('load',function(e){  
    	// this = iframe
    	      try {
    	        var doc = this.contentDocument ? this.contentDocument : this.contentWindow ? this.contentWindow.document : null;
    	        $(doc).mouseup(body_mouseup);
    	      }
    	      catch (e) {
    	        // catch possible "Permission denied" error in IE
    	      };
    	    })
    	    .contents().mouseup(body_mouseup);
    }

    // don't use $(window).resize() due to some unwanted side-effects
    window.onresize = resize;
    resize();
  }

  /**
   * Handler for mouse-up events on the document body.
   * This will close all open popup menus
   */
  function body_mouseup(e)
  {
    var config, obj, target = e.target;

    if (target.className == 'inner')
        target = e.target.parentNode;

    for (var id in popups) {
      obj = popups[id];
      config = popupconfig[id];
      if (obj.is(':visible')
        && target.id != id+'link'
        && target != obj.get(0)  // check if scroll bar was clicked (#1489832)
        && !config.toggle
        && (!config.editable || !target_overlaps(target, obj.get(0)))
        && (!config.sticky || !rcube_mouse_is_over(e, obj.get(0)))
        && !$(target).is('.folder-selector-link')
      ) {
        var myid = id+'';
        window.setTimeout(function() { show_popupmenu(myid, false); }, 10);
      }
    }
  }

  /**
   * Update UI on window resize
   */
  function resize(e)
  {
    // resize in intervals to prevent lags and double onresize calls in Chrome (#1489005)
    var interval = e ? 10 : 0;

    if (rcmail.resize_timeout)
      window.clearTimeout(rcmail.resize_timeout);

    rcmail.resize_timeout = window.setTimeout(function() {
      if (rcmail.env.task == 'mail') {
        if (rcmail.env.action == 'show' || rcmail.env.action == 'preview')
          layout_messageview();
        else if (rcmail.env.action == 'compose')
          layout_composeview();
      }

      // make iframe footer buttons float if scrolling is active
      $('body.iframe .footerleft').each(function(){
        var footer = $(this),
          body = $(document.body),
          floating = footer.hasClass('floating'),
          overflow = body.outerHeight(true) > $(window).height();

        if (overflow != floating) {
          var action = overflow ? 'addClass' : 'removeClass';
          footer[action]('floating');
          body[action]('floatingbuttons');
        }
      });
    }, interval);
  }

  /**
   * Triggered when a new user message is displayed
   */
  function message_displayed(p)
  {
    var sessiontimeouterr = false;
	//A new block was added for session timeout which uses the roundcube generic message dialog but needs the header and content to be different. hence the below if block and also the title is updated in the dialog code further below.
	if(p.message == 'sessiontimeoutmsg'){
		sessiontimeouterr = true;
		p.message = rcmail.gettext(('sessionTimeoutMessage'), 'tln_localization');
	}
	//session timeout fix ends.
	var siblings = $(p.object).siblings('div');
    if (siblings.length)
      $(p.object).insertBefore(siblings.first());

    // show a popup dialog on errors
    if (p.type == 'error' && rcmail.env.task != 'login') {
      // hide original message object, we don't want both
      rcmail.hide_message(p.object);

      if (me.message_timer) {
        window.clearTimeout(me.message_timer);
      }
      if (!me.messagedialog) {
        me.messagedialog = $('<div>').addClass('popupdialog').hide();
      }

	 var res = p.message.indexOf("Application Error (");
     var newmessage = p.message;
	 if(res == 0)
		 newmessage =rcmail.gettext('technicalissue'), 'tln_localization';
      var msg = newmessage,
        dialog_close = function() {
          // check if dialog is still displayed, to prevent from js error
          me.messagedialog.is(':visible') && me.messagedialog.dialog('destroy').hide();
        };

      if (me.messagedialog.is(':visible'))
        msg = me.messagedialog.html() + '<p>' + newmessage + '</p>';

      me.messagedialog.html(msg)
        .dialog({
          resizable: false,
          closeOnEscape: true,
          dialogClass: 'popupmessage ' + p.type,
          title: (sessiontimeouterr)?rcmail.gettext(('sessionTimeoutHeader'), 'tln_localization'):env.errortitle,
          close: dialog_close,
          position: ['center', 'center'],
          hide: {effect: 'fadeOut'},
          width: 420,
          minHeight: 90
        }).show();

      if (p.timeout > 0)
        me.message_timer = window.setTimeout(dialog_close, p.timeout);
    }
  }


  /**
   * Adjust UI objects of the mail view screen
   */
  function layout_messageview()
  {
    $('#messagecontent').css('top', ($('#messageheader').outerHeight() + 10) + 'px');
    $('#message-objects div a').addClass('button');
    if (!$('#attachment-list li').length) {
      $('div.rightcol').hide();
      $('div.leftcol').css('margin-right', '0');
    }
  }


  function render_mailboxlist(splitter)
  {
    // TODO: implement smart shortening of long folder names
  }


  function resize_leftcol(splitter)
  {
    // STUB
  }

  function adjust_compose_editfields(elem)
  {
    if (elem.nodeName == 'TEXTAREA') {
      var $elem = $(elem), line_height = 20,  // hard-coded because some browsers only provide the outer height in elem.clientHeight
        content_height = elem.scrollHeight,
        rows = elem.value.length > 80 && content_height > line_height*1.5 ? 2 : 1;
      $elem.css('height', (line_height*rows) + 'px');
      layout_composeview();
    }
  }

  function layout_composeview()
  {
	 //Nov, 2014: Note - There are certain commented lines. Let it stay as they are default Roundcube and we require anytime to backout or refer.
	  var body = $('#composebody'),
      form = $('#compose-content'),
      bottom = $('#composeview-bottom'),
      w, h, bh, ovflw, btns = 0,
      minheight = 300,

    bh = ((form.height()) - bottom.position().top);

    ovflw = minheight - bh;
    btns = ovflw > -100 ? 0 : 40;
    bottom.css('height', (Math.max(minheight, bh)-50) + 'px');
    form.css('overflow', ovflw > 0 ? 'auto' : 'hidden');
    //30-Oct: Adding some pixes for form height
	$('#compose-content').height('820px');

    w = body.parent().width() - 5;
    h = body.parent().height() - 16;
    body.width(w).height(h);


    //19-Oct-2014
	$('.compose-headers').width((w+21)+'px');
	$('textarea#composebody').width((w+11)+'px');
    $('#compose-attachments').width((w+20)+'px');
    $('#composebody_tbl').width((w+8)+'px').height('').css('margin-top', '1px');
    /* $('#composebody_ifr').width((w+8)+'px').height((h-40)+'px');*/
    $('#composebody_ifr').width((w+8)+'px').height((h-40)+'px');
    $('#googie_edit_layer').height(h+'px');
    // $('#compose-attachments').height(($('#composeview-bottom').height()));

    // $('#composebodycontainer')[(btns ? 'addClass' : 'removeClass')]('buttons');
    // $('#composeformbuttons')[(btns ? 'show' : 'hide')]();

    var abooks = $('#directorylist');
    $('#compose-contacts .scroller').css('top', abooks.position().top + abooks.outerHeight());
	$('.mailsend').show();

	/******for chrome***********/

	if(navigator.userAgent.search("Chrome") > -1 || navigator.userAgent.search("Safari") > -1){
		$('.compose-headers').width((w+28)+'px');
		$('textarea#composebody').width((w+18)+'px');
	}

	//The below code is to fix GEC 829 - Signature - No support for CR
	var editor = tinyMCE.get(rcmail.env.composebody);
	if(editor != undefined){
		if(editor.dom != undefined){
			if(editor.dom.get('_rc_sig') != null){
				var signature = editor.dom.get('_rc_sig').innerHTML;
				if(signature != undefined && signature != '&nbsp;'){
					signature = "<pre>"+signature+"</pre>";
					editor.dom.get('_rc_sig').innerHTML = signature;
				}
			}
		}
	}
}


  function update_quota(p)
  {
    var step = 24, step_count = 20,
      y = p.total ? Math.ceil(p.percent / 100 * step_count) * step : 0;

    // never show full-circle if quota is close to 100% but below.
    if (p.total && y == step * step_count && p.percent < 100)
      y -= step;

    $('#quotadisplay').css('background-position', '0 -'+y+'px');
  }


  function enable_command(p)
  {
    if (p.command == 'reply-list' && rcmail.env.reply_all_mode == 1) {
      var label = rcmail.gettext(p.status ? 'replylist' : 'replyall');
      if (rcmail.env.action == 'preview')
        $('a.button.replyall').attr('title', label);
      else
        $('a.button.reply-all').text(label).attr('title', label);
    }
  }


  /**
   * Register a popup menu
   */
  function add_popup(popup, config)
  {
    var obj = popups[popup] = $('#'+popup);
    obj.appendTo(document.body);  // move it to top for proper absolute positioning

    if (obj.length)
      popupconfig[popup] = $.extend(popupconfig[popup] || {}, config || {});
  }

  /**
   * Trigger for popup menus
   */
  function show_popup(popup, show, config)
  {
    // auto-register menu object
    if (config || !popupconfig[popup])
      add_popup(popup, config);

    var visible = show_popupmenu(popup, show),
      config = popupconfig[popup];
    if (typeof config.callback == 'function')
      config.callback(visible);
  }

  /**
   * Show/hide a specific popup menu
   */
  function show_popupmenu(popup, show)
  {
    var obj = popups[popup],
      config = popupconfig[popup],
      ref = $(config.link ? config.link : '#'+popup+'link'),
      above = config.above;

    if (!obj) {
      obj = popups[popup] = $('#'+popup);
      obj.appendTo(document.body);  // move them to top for proper absolute positioning
    }

    if (!obj || !obj.length)
      return false;

    if (typeof show == 'undefined')
      show = obj.is(':visible') ? false : true;
    else if (config.toggle && show && obj.is(':visible'))
      show = false;

    if (show && ref.length) {
      var parent = ref.parent(),
        win = $(window),
        pos;

      if (parent.hasClass('dropbutton'))
        ref = parent;

      pos = ref.offset();
      ref.offsetHeight = ref.outerHeight();
      if (!above && pos.top + ref.offsetHeight + obj.height() > win.height())
        above = true;
      if (pos.left + obj.width() > win.width())
        pos.left = win.width() - obj.width() - 12;

      obj.css({ left:pos.left, top:(pos.top + (above ? -obj.height() : ref.offsetHeight)) });
    }

    obj[show?'show':'hide']();

    // hide drop-down elements on buggy browsers
    if (bw.ie6 && config.overlap) {
      $('select').css('visibility', show?'hidden':'inherit');
      $('select', obj).css('visibility', 'inherit');
    }

    return show;
  }

  /**
   *
   */
  function target_overlaps(target, elem)
  {
    while (target.parentNode) {
      if (target.parentNode == elem)
        return true;
      target = target.parentNode;
    }
    return false;
  }


  /**
   * Show/hide the preview pane
   */
  function toggle_preview_pane(e)
  { 
    var button = $(e.target),
      frame = $('#mailpreviewframe'),
      visible = !frame.is(':visible'),
      splitter = mailviewsplit.pos || parseInt(get_pref('mailviewsplitter') || 320),
      topstyles, bottomstyles, uid;

    frame.toggle();
    button.removeClass().addClass(visible ? 'enabled' : 'closed');

    if (visible) {
      $('#mailview-top').removeClass('fullheight').css({ bottom:'auto' });
      $('#mailview-bottom').css({ height:'auto' }).show();

      rcmail.env.contentframe = 'messagecontframe';
      if (uid = rcmail.message_list.get_single_selection())
        rcmail.show_message(uid, false, true);

      // let the splitter set the correct size and position
      if (mailviewsplit.handle) {
        mailviewsplit.handle.show();
        mailviewsplit.resize();
      }
      else
        mailviewsplit.init();
    }
    else {
      rcmail.env.contentframe = null;
      rcmail.show_contentframe(false);

      $('#mailview-top').addClass('fullheight').css({ height:'auto', bottom:'0px' });
      $('#mailview-bottom').css({ top:'auto', height:'0px' }).hide();

      if (mailviewsplit.handle)
        mailviewsplit.handle.hide();
    }

    if (rcmail.message_list) {
      if (visible && uid)
          rcmail.message_list.scrollto(uid);
      rcmail.message_list.resize();
    }

    rcmail.command('save-pref', { name:'preview_pane', value:(visible?1:0) });
  }


  /**
   * Switch between short and full headers display in message preview
   */
  function toggle_preview_headers()
  {
    $('#preview-shortheaders').toggle();
    var full = $('#preview-allheaders').toggle(),
      button = $('a#previewheaderstoggle');

    // add toggle button to full headers table
    if (full.is(':visible'))
      button.attr('href', '#hide').removeClass('add').addClass('remove')
    else
      button.attr('href', '#details').removeClass('remove').addClass('add')

    save_pref('previewheaders', full.is(':visible') ? '1' : '0');
  }


  /**
   *
   */
  function switch_view_mode(mode)
  {

	if (rcmail.env.threading != (mode == 'thread'))
      rcmail.set_list_options(null, undefined, undefined, mode == 'thread' ? 1 : 0);

	//3-Jan-2015: Hide the space taken by threads when the view mode is List.
	/*if(!rcmail.env.threading){
		$(".messagelist tr td.threads, .webkit .messagelist tr td.threads").css("display","none");
	 }else if(rcmail.env.threading){
		$(".messagelist tr td.threads, .webkit .messagelist tr td.threads").css("display","");
	 }*/

    $('#maillistmode, #mailthreadmode').removeClass('selected');
    $('#mail'+mode+'mode').addClass('selected');
  }


  /**** popup callbacks ****/

  function menu_open(p)
  {
    if (p && p.props && p.props.menu == 'attachmentmenu')
      show_popupmenu('attachmentmenu');
    else
      show_listoptions();
  }

  function menu_save(prop)
  {
    save_listoptions();
  }

  function searchmenu(show)
  {
    if (show && rcmail.env.search_mods) {
      var n, all,
        obj = popups['searchmenu'],
        list = $('input:checkbox[name="s_mods[]"]', obj),
        mbox = rcmail.env.mailbox,
        mods = rcmail.env.search_mods;

      if (rcmail.env.task == 'mail') {
        mods = mods[mbox] ? mods[mbox] : mods['*'];
        all = 'text';
      }
      else {
        all = '*';
      }

      if (mods[all])
        list.map(function() {
          this.checked = true;
          this.disabled = this.value != all;
        });
      else {
        list.prop('disabled', false).prop('checked', false);
        for (n in mods)
          $('#s_mod_' + n).prop('checked', true);
      }
    }
  }

  function attachmentmenu(elem)
  {
    var id = elem.parentNode.id.replace(/^attach/, '');

    $('#attachmenuopen').unbind('click').attr('onclick', '').click(function(e) {
      return rcmail.command('open-attachment', id, this);
    });

    $('#attachmenudownload').unbind('click').attr('onclick', '').click(function() {
      rcmail.command('download-attachment', id, this);
    });

    popupconfig.attachmentmenu.link = elem;
    rcmail.command('menu-open', {menu: 'attachmentmenu', id: id});
  }

  function spellmenu(show)
  {
    var link, li,
      lang = rcmail.spellcheck_lang(),
      menu = popups.spellmenu,
      ul = $('ul', menu);

    if (!ul.length) {
      ul = $('<ul class="toolbarmenu selectable">');

      for (i in rcmail.env.spell_langs) {
        li = $('<li>');
        link = $('<a href="#"></a>').text(rcmail.env.spell_langs[i])
          .addClass('active').data('lang', i)
          .click(function() {
            rcmail.spellcheck_lang_set($(this).data('lang'));
          });

        link.appendTo(li);
        li.appendTo(ul);
      }

      ul.appendTo(menu);
    }

    // select current language
    $('li', ul).each(function() {
      var el = $('a', this);
      if (el.data('lang') == lang)
        el.addClass('selected');
      else if (el.hasClass('selected'))
        el.removeClass('selected');
    });
  }


  /**
   *
   */
  function show_listoptions()
  {
    var $dialog = $('#listoptions');

    // close the dialog
    if ($dialog.is(':visible')) {
      $dialog.dialog('close');
      return;
    }

    // set form values
    $('input[name="sort_col"][value="'+rcmail.env.sort_col+'"]').prop('checked', true);
    $('input[name="sort_ord"][value="DESC"]').prop('checked', rcmail.env.sort_order == 'DESC');
    $('input[name="sort_ord"][value="ASC"]').prop('checked', rcmail.env.sort_order != 'DESC');

    // set checkboxes
    $('input[name="list_col[]"]').each(function() {
      $(this).prop('checked', $.inArray(this.value, rcmail.env.coltypes) != -1);
    });

    $dialog.dialog({
      modal: true,
      resizable: false,
      closeOnEscape: true,
      title: null,
      close: function() {
        $dialog.dialog('destroy').hide();
      },
      minWidth: 500,
      width: $dialog.width()+25
    }).show();
  }


  /**
   *
   */
  function save_listoptions()
  {
    $('#listoptions').dialog('close');

    var sort = $('input[name="sort_col"]:checked').val(),
      ord = $('input[name="sort_ord"]:checked').val(),
      cols = $('input[name="list_col[]"]:checked')
        .map(function(){ return this.value; }).get();

    rcmail.set_list_options(cols, sort, ord, rcmail.env.threading);
  }


  /**
   *
   */
  function set_searchmod(elem)
  {
    var all, m, task = rcmail.env.task,
      mods = rcmail.env.search_mods,
      mbox = rcmail.env.mailbox;

    if (!mods)
      mods = {};

    if (task == 'mail') {
      if (!mods[mbox])
        mods[mbox] = rcube_clone_object(mods['*']);
      m = mods[mbox];
      all = 'text';
    }
    else { //addressbook
      m = mods;
      all = '*';
    }

    if (!elem.checked)
      delete(m[elem.value]);
    else
      m[elem.value] = 1;

    // mark all fields
    if (elem.value != all)
      return;

    $('input:checkbox[name="s_mods[]"]').map(function() {
      if (this == elem)
        return;

      this.checked = true;
      if (elem.checked) {
        this.disabled = true;
        delete m[this.value];
      }
      else {
        this.disabled = false;
        m[this.value] = 1;
      }
    });
  }

  function push_contactgroup(p)
  {
    // lets the contacts list swipe to the left, nice!
    var table = $('#contacts-table'),
      scroller = table.parent().css('overflow', 'hidden');

    table.clone()
      .css({ position:'absolute', top:'0', left:'0', width:table.width()+'px', 'z-index':10 })
      .appendTo(scroller)
      .animate({ left: -(table.width()+5) + 'px' }, 300, 'swing', function(){
        $(this).remove();
        scroller.css('overflow', 'auto')
      });
  }

  function pop_contactgroup(p)
  {
    // lets the contacts list swipe to the left, nice!
    var table = $('#contacts-table'),
      scroller = table.parent().css('overflow', 'hidden'),
      clone = table.clone().appendTo(scroller);

      table.css({ position:'absolute', top:'0', left:-(table.width()+5) + 'px', width:table.width()+'px', height:table.height()+'px', 'z-index':10 })
        .animate({ left:'0' }, 300, 'linear', function(){
        clone.remove();
        $(this).css({ position:'relative', left:'0', width:'100%', height:'auto', 'z-index':1 });
        scroller.css('overflow', 'auto')
      });
  }

  function show_uploadform()
  {
    var $dialog = $('#upload-dialog');

    // close the dialog
    if ($dialog.is(':visible')) {
      $dialog.dialog('close');
      return;
    }

    // add icons to clone file input field
    if (rcmail.env.action == 'compose' && !$dialog.data('extended')) {
      $('<a>')
        .addClass('iconlink add')
        .attr('href', '#add')
        .html('Add')
        .appendTo($('input[type="file"]', $dialog).parent())
        .click(add_uploadfile);
      $dialog.data('extended', true);
    }



    $dialog.dialog({
      modal: true,
      resizable: false,
      closeOnEscape: true,
      title: $dialog.attr('title'),
      close: function() {
        try {/* $('#upload-dialog form').get(0).reset();*/ }
        catch(e){ }  // ignore errors

        $dialog.dialog('destroy').hide();
        $('div.addline', $dialog).remove();
      },
      width: 480
    }).show();

    $(".ui-dialog-titlebar-close").css('top',0);
    $(".ui-dialog-titlebar-close").css('right',0);

    if (!document.all)
      $('input[type=file]', $dialog).first().click();
  }

  function add_uploadfile(e)
  {
    var div = $(this).parent();
    var clone = div.clone().addClass('addline').insertAfter(div);
    clone.children('.iconlink').click(add_uploadfile);
    clone.children('input').val('');

    if (!document.all)
      $('input[type=file]', clone).click();
  }


  /**
   *
   */
  function show_header_row(which, updated)
  {
    var row = $('#compose-' + which);
    if (row.is(':visible'))
      return;  // nothing to be done here

    if (compose_headers[which] && !updated)
      $('#_' + which).val(compose_headers[which]);

    row.show();
    $('#' + which + '-link').hide();
    layout_composeview();
    return false;
  }

  /**
   *
   */
  function hide_header_row(which)
  {
    // copy and clear field value
    var field = $('#_' + which);
    compose_headers[which] = field.val();
    field.val('');

    $('#compose-' + which).hide();
    $('#' + which + '-link').show();
    layout_composeview();
    return false;
  }


  /**
   * Fieldsets-to-tabs converter
   */
  function init_tabs(elem, current)
  {
    var content = $(elem),
      id = content.get(0).id,
      fs = content.children('fieldset');

    if (!fs.length)
      return;

    if (!id) {
      id = 'rcmtabcontainer';
      content.attr('id', id);
    }

    // first hide not selected tabs
    current = current || 0;
    fs.each(function(idx) { if (idx != current) $(this).hide(); });

    // create tabs container
    var tabs = $('<div>').addClass('tabsbar').prependTo(content);

    // convert fildsets into tabs
    fs.each(function(idx) {
      var tab, a, elm = $(this), legend = elm.children('legend');

      // create a tab
      a   = $('<a>').text(legend.text()).attr('href', '#');
      tab = $('<span>').attr({'id': 'tab'+idx, 'class': 'tablink'})
        .click(function() { show_tab(id, idx); return false })

      // remove legend
      legend.remove();
      // style fieldset
      elm.addClass('tab');
      // style selected tab
      if (idx == current)
        tab.addClass('selected');

      // add the tab to container
      tab.append(a).appendTo(tabs);
    });
  }

  function show_tab(id, index)
  {
    var fs = $('#'+id).children('fieldset');

    fs.each(function(idx) {
      // Show/hide fieldset (tab content)
      $(this)[index==idx ? 'show' : 'hide']();
      // Select/unselect tab
      $('#tab'+idx).toggleClass('selected', idx==index);
    });

    resize();
  }

  /**
   * Show about page as jquery UI dialog
   */
  function show_about(elem)
  {
    var frame = $('<iframe>').attr('id', 'aboutframe')
      .attr('src', rcmail.url('settings/about'))
      .attr('frameborder', '0')
      .appendTo(document.body);

    var h = Math.floor($(window).height() * 0.75);
    var buttons = {};
    var supportln = $('#supportlink');
    if (supportln.length && (env.supporturl = supportln.attr('href')))
      buttons[supportln.html()] = function(e){ env.supporturl.indexOf('mailto:') < 0 ? window.open(env.supporturl) : location.href = env.supporturl };

    frame.dialog({
      modal: true,
      resizable: false,
      closeOnEscape: true,
      title: elem ? elem.title || elem.innerHTML : null,
      close: function() {
        frame.dialog('destroy').remove();
      },
      buttons: buttons,
      width: 640,
      height: h
    }).width(640);
  }
}


/**
 * Roundcube Scroller class
 */
function rcube_scroller(list, top, bottom)
{
  var ref = this;

  this.list = $(list);
  this.top = $(top);
  this.bottom = $(bottom);
  this.step_size = 6;
  this.step_time = 20;
  this.delay = 500;

  this.top
    .mouseenter(function() { if (rcmail.drag_active) ref.ts = window.setTimeout(function() { ref.scroll('down'); }, ref.delay); })
    .mouseout(function() { if (ref.ts) window.clearTimeout(ref.ts); });

  this.bottom
    .mouseenter(function() { if (rcmail.drag_active) ref.ts = window.setTimeout(function() { ref.scroll('up'); }, ref.delay); })
    .mouseout(function() { if (ref.ts) window.clearTimeout(ref.ts); });

  this.scroll = function(dir)
  {
    var ref = this, size = this.step_size;

    if (!rcmail.drag_active)
      return;

    if (dir == 'down')
      size *= -1;

    this.list.get(0).scrollTop += size;
    this.ts = window.setTimeout(function() { ref.scroll(dir); }, this.step_time);
  };
};


/**
 * Roundcube UI splitter class
 *
 * @constructor
 */
function rcube_splitter(p)
{
  this.p = p;
  this.id = p.id;
  this.horizontal = (p.orientation == 'horizontal' || p.orientation == 'h');
  this.halfsize = (p.size !== undefined ? p.size : 10) / 2;
  this.pos = p.start || 0;
  this.min = p.min || 20;
  this.offset = p.offset || 0;
  this.relative = p.relative ? true : false;
  this.drag_active = false;
  this.render = p.render;
  this.callback = p.callback;

  var me = this;
  rcube_splitter._instances[this.id] = me;

  this.init = function()
  {
    this.p1 = $(this.p.p1);
    this.p2 = $(this.p.p2);

    // check if referenced elements exist, otherwise abort
    if (!this.p1.length || !this.p2.length)
      return;

    // create and position the handle for this splitter
    this.p1pos = this.relative ? this.p1.position() : this.p1.offset();
    this.p2pos = this.relative ? this.p2.position() : this.p2.offset();
    this.handle = $('<div>')
      .attr('id', this.id)
      .attr('unselectable', 'on')
      .addClass('splitter ' + (this.horizontal ? 'splitter-h' : 'splitter-v'))
      .appendTo(this.p1.parent())
      .bind('mousedown', onDragStart);

    if (this.horizontal) {
      var top = this.p1pos.top + this.p1.outerHeight();
      this.handle.css({ left:'0px', top:top+'px' });
    }
    else {
      var left = this.p1pos.left + this.p1.outerWidth();
      this.handle.css({ left:left+'px', top:'0px' });
    }

    // listen to window resize on IE
    if (bw.ie)
      $(window).resize(onResize);

    // read saved position from cookie
    var cookie = this.get_cookie();
    if (cookie && !isNaN(cookie)) {
      this.pos = parseFloat(cookie);
      this.resize();
    }
    else if (this.pos) {
      this.resize();
      this.set_cookie();
    }
  };

  /**
   * Set size and position of all DOM objects
   * according to the saved splitter position
   */
  this.resize = function()
  {
    if (this.horizontal) {
      this.p1.css('height', Math.floor(this.pos - this.p1pos.top - this.halfsize) + 'px');
      this.p2.css('top', Math.ceil(this.pos + this.halfsize + 2) + 'px');
      this.handle.css('top', Math.round(this.pos - this.halfsize + this.offset)+'px');
      if (bw.ie) {
        var new_height = parseInt(this.p2.parent().outerHeight(), 10) - parseInt(this.p2.css('top'), 10) - (bw.ie8 ? 2 : 0);
        this.p2.css('height', (new_height > 0 ? new_height : 0) + 'px');
      }
    }
    else {
      this.p1.css('width', Math.floor(this.pos - this.p1pos.left - this.halfsize) + 'px');
      this.p2.css('left', Math.ceil(this.pos + this.halfsize) + 'px');
      this.handle.css('left', Math.round(this.pos - this.halfsize + this.offset + 3)+'px');
      if (bw.ie) {
        var new_width = parseInt(this.p2.parent().outerWidth(), 10) - parseInt(this.p2.css('left'), 10) ;
        this.p2.css('width', (new_width > 0 ? new_width : 0) + 'px');
      }
    }

    this.p2.resize();
    this.p1.resize();

    // also resize iframe covers
    if (this.drag_active) {
      $('iframe').each(function(i, elem) {
        var pos = $(this).offset();
        $('#iframe-splitter-fix-'+i).css({ top: pos.top+'px', left: pos.left+'px', width:elem.offsetWidth+'px', height: elem.offsetHeight+'px' });
      });
    }

    if (typeof this.render == 'function')
      this.render(this);
  };

  /**
   * Handler for mousedown events
   */
  function onDragStart(e)
  {
    // disable text selection while dragging the splitter
    if (bw.konq || bw.chrome || bw.safari)
      document.body.style.webkitUserSelect = 'none';

    me.p1pos = me.relative ? me.p1.position() : me.p1.offset();
    me.p2pos = me.relative ? me.p2.position() : me.p2.offset();
    me.drag_active = true;

    // start listening to mousemove events
    $(document).bind('mousemove.'+this.id, onDrag).bind('mouseup.'+this.id, onDragStop);

    // enable dragging above iframes
    $('iframe').each(function(i, elem) {
      $('<div>')
        .attr('id', 'iframe-splitter-fix-'+i)
        .addClass('iframe-splitter-fix')
        .css({ background: '#fff',
          width: elem.offsetWidth+'px', height: elem.offsetHeight+'px',
          position: 'absolute', opacity: '0.001', zIndex: 1000
        })
        .css($(this).offset())
        .appendTo('body');
      });
  };

  /**
   * Handler for mousemove events
   */
  function onDrag(e)
  {
    if (!me.drag_active)
      return false;

    // with timing events dragging action is more responsive
    window.clearTimeout(me.ts);
    me.ts = window.setTimeout(function() { onDragAction(e); }, 1);

    return false;
  };

  /**
   * Dragging action (see onDrag())
   */
  function onDragAction(e)
  {
    var pos = rcube_event.get_mouse_pos(e);

    if (me.relative) {
      var parent = me.p1.parent().offset();
      pos.x -= parent.left;
      pos.y -= parent.top;
    }

    if (me.horizontal) {
      if (((pos.y - me.halfsize) > me.p1pos.top) && ((pos.y + me.halfsize) < (me.p2pos.top + me.p2.outerHeight()))) {
        me.pos = Math.max(me.min, pos.y - me.offset);
        me.resize();
      }
    }
    else {
      if (((pos.x - me.halfsize) > me.p1pos.left) && ((pos.x + me.halfsize) < (me.p2pos.left + me.p2.outerWidth()))) {
        me.pos = Math.max(me.min, pos.x - me.offset);
        me.resize();
      }
    }

    me.p1pos = me.relative ? me.p1.position() : me.p1.offset();
    me.p2pos = me.relative ? me.p2.position() : me.p2.offset();
  };

  /**
   * Handler for mouseup events
   */
  function onDragStop(e)
  {
    // resume the ability to highlight text
    if (bw.konq || bw.chrome || bw.safari)
      document.body.style.webkitUserSelect = 'auto';

    // cancel the listening for drag events
    $(document).unbind('.'+me.id);
    me.drag_active = false;

    // remove temp divs
    $('div.iframe-splitter-fix').remove();

    me.set_cookie();

    if (typeof me.callback == 'function')
      me.callback(me);

    return bw.safari ? true : rcube_event.cancel(e);
  };

  /**
   * Handler for window resize events
   */
  function onResize(e)
  {
    if (me.horizontal) {
      var new_height = parseInt(me.p2.parent().outerHeight(), 10) - parseInt(me.p2[0].style.top, 10) - (bw.ie8 ? 2 : 0);
      me.p2.css('height', (new_height > 0 ? new_height : 0) +'px');
    }
    else {
      var new_width = parseInt(me.p2.parent().outerWidth(), 10) - parseInt(me.p2[0].style.left, 10);
      me.p2.css('width', (new_width > 0 ? new_width : 0) + 'px');
    }
  };

  /**
   * Get saved splitter position from cookie
   */
  this.get_cookie = function()
  {
    return window.UI ? UI.get_pref(this.id) : null;
  };

  /**
   * Saves splitter position in cookie
   */
  this.set_cookie = function()
  {
    if (window.UI)
      UI.save_pref(this.id, this.pos);
  };

} // end class rcube_splitter


// static getter for splitter instances
rcube_splitter._instances = {};

rcube_splitter.get_instance = function(id)
{
  return rcube_splitter._instances[id];
};

//Called to get focus on search field.
function focusOnSearch(){
	$("#quicksearchbox").focus();
}

//GEC-1 crq16866 tln_tealium_tag changes
//GEC-1 INC0002816 Tealium fix on Online Webmail
var callTealiumChecker = 0;
function callTealium(type){
	if(callTealiumChecker < 20) {
		try {
			if(utag === undefined || utag.view === undefined) {
				callTealiumChecker++;
				setTimeout(function() {
					callTealium(type);
				}, 50);
				return;
			}
		} catch(exception) {
			callTealiumChecker++;
			setTimeout(function() {
				callTealium(type);
			}, 50);
			return;
		}
	}
	var testmessage = false;

	if(rcmail.env.tealium_tag) {
		try {
			switch(type) {
				case 'INBOX':
				{
					if(testmessage)rcmail.display_message('INBOX', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_inbox, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_inbox});
					break;
				}
				case 'SENT':
				{
					if(testmessage)rcmail.display_message('SENT', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_sendt, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_button_send});
					break;
				}
				case 'TRASH':
				{
					if(testmessage)rcmail.display_message('TRASH', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_slettet, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_slettet});
					break;
				}
				case 'DRAFTS':
				{
					if(testmessage)rcmail.display_message('DRAFTS', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_kladd, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_kladd});
					break;
				}
				case 'SHOW':
				{
					if(testmessage)rcmail.display_message('SHOW', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_view_mail, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_view_mail});
					break;
				}
				case 'COMPOSE':
				{
					if(testmessage)rcmail.display_message('COMPOSE', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_skriv_ny_epost, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_skriv_ny_epost});
					break;
				}
				case 'EPOST_BUTTON':
				{
					if(testmessage)rcmail.display_message('EPOST', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_epost, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_epost});
					break;
				}
				case 'ADDRESSBOOK':
				{
					if(testmessage)rcmail.display_message('ADDRESSBOOK', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_addressbook, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_addressbook});
					break;
				}
				case 'ADDRESSBOOK_VIEW':
				{
					if(testmessage)rcmail.display_message('ADDRESSBOOK_VIEW', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_addressbook_view, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_addressbook_view});
					break;
				}
				case 'TELENOR_EPOST':
				{
					if(testmessage)rcmail.display_message('TELENOR_EPOST', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_telenor_epost, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_telenor_epost});
					break;
				}
				case 'BUTTON_SEND':
				{
					if(testmessage)rcmail.display_message('SEND', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_button_send, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_button_send});
					break;
				}
				case 'FOLDERS':
				{
					if(testmessage)rcmail.display_message('FOLDERS', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_mapper, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_mapper});
					break;
				}
				case 'PLUGIN_FORWARD':
				{
					if(testmessage)rcmail.display_message('MIN PROFIL', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_min_profil, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_min_profil});
					break;
				}
				case 'PLUGIN_EMAIL_SETTINGS':
				{
					if(testmessage)rcmail.display_message('EMAIL SETTINGS', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_e_postinnstillinger, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_e_postinnstillinger});
					break;
				}
				case 'PLUGIN_SECURITY_SETTINGS':
				{
					if(testmessage)rcmail.display_message('SECURITY', 'error', 2000);
					utag.view({'page_name':rcmail.env.utag_data_page_name_sikkerhet, 'page_hierarchy':rcmail.env.utag_data_page_hierarchy_sikkerhet});
					break;
				}
			}
		}
		catch (e) {
			console.log(e);
		};
	}
}

//CRQ16866 : TEALIUM TAG
//Assigning click events on window load because, the settings related list is created dynamically using JS.
//adding click event within normal function will not work as setting optinos list will not be present while page loads.
$(window).load(function(){

	$(".button-settings").click(function(){
		callTealium('FOLDERS');
	});

	$("#settingstabfolders").find("a").click(function(){
		callTealium('FOLDERS');
	});

	$("#settingstabpluginforward").find("a").click(function(){
		callTealium('PLUGIN_FORWARD');
	});

	$("#settingstabpluginemail_settings").find("a").click(function(){
		callTealium('PLUGIN_EMAIL_SETTINGS');
	});

	$("#settingstabpluginsecuirity_settings").find("a").click(function(){
		callTealium('PLUGIN_SECURITY_SETTINGS');
	});

});

function callCustomFunctions(){
	// Initialize placeholder
	$.Placeholder.init();
	if(navigator.userAgent.search("Firefox") > -1  || navigator.userAgent.search("Chrome") > -1 || navigator.userAgent.search("Safari") > -1){
			$("div.screenwidth table tr td.textaligncenter div.userborder").css('margin-left','20px');
	}
	//Fix for GEC 643 - Improvements to the left menu - All links in the left menu should have tooltips.
	//Need to add tooltip via javascript as we cannot modify Roundcube core core.
	addToolltipForLeftMenu();
	
	//20thsept18 - added for list possiblities test for hiding fields
	//$("a.listmenu").hide();
	$("th.status").hide();
	$("th.threads").hide();
	$("th#rcmattachment.attachment").hide();
	
	//alert('todo_upg ui.js 1715 length ' + ' env ' + rcmail.env.uid  +'' +rcmail.env.task + ' '+ rcmail.env.mailbox + ' '+ rcmail.env.action);
	
	//Added code to prevent opening of message after clicking back button(webmail Upgrade)
	$("a.button.back#rcmbtn103").hide();
	$('a#rcmbtn104.button.back.disabled').on('click', function(e){
		    e.preventDefault();
                // window.history.back();
                return rcmail.command('switch-task','',rcmail,event);
		});
	//New code ends
	
	//Code for New contact group (Roundcube upgrade 2018)
	//Move the create group placeholder to top
	$("a.new").click(function (e){
		e.preventDefault();
		add_input_row();
		$("ul.groups > li.contactgroup > input").parent().prependTo($("ul.groups").first());
		var stop =  $("ul.groups").scrollTop($("ul.groups").first().offset().top);
		$("ul.groups").scrollTop(stop);
		setTimeout(function() { $("ul.groups > li.contactgroup > input").focus();}, 10);
	}); 
	
	//function to add new row
	this.add_input_row = function()
	  {
		var input = $('<input>').attr('type', 'text').data('tt','contactgroup');
		
		var input_list = $('<li>').addClass('contactgroup').append(input);
		input.bind('keydown', function(e){ return add_input_keydown(e,input,input_list); });
		var ul, li;

	      // find list (UL) element
	      if ('contactgroup' == 'contactsearch')
	        ul = rcmail.gui_objects.folderlist;
	      else
	        ul = $('ul.groups', rcmail.get_folder_li(rcmail.env.source,'',true));

	      // append to the list
	      li = $('li:last', ul);
	      if (li.length)
	        input_list.insertAfter(li);
	      else {
	        input_list.appendTo(ul);
	        ul.show(); // make sure the list is visible
	      }
		input.select().focus();
	  };
	// handler for keyboard events on the input field
	  this.add_input_keydown = function(e,name_input,input_list)
	  {
	    var key = rcube_event.get_keycode(e),
	    input = $(e.target), itype = input.data('tt');
	    // enter
	    if (key == 13) {
	      var newname = input.val();
	      if (newname) {
	        var lock = rcmail.set_busy(true, 'loading');

	        if (itype == 'contactsearch')
	          rcmail.http_post('search-create', {_search: rcmail.env.search_request, _name: newname}, lock);
	        else if (rcmail.env.group_renaming){
	          rcmail.http_post('group-rename', {_source: rcmail.env.source, _gid: rcmail.env.group, _name: newname}, lock);
	          reset_add_input(name_input,null);
	        }else{
	        	rcmail.http_post('group-create', {_source: rcmail.env.source, _name: newname},lock);
	        	reset_add_input(name_input,input_list);
	        }
	          //rcmail.http_post('group-create', {_source: this.env.source, _name: newname}, lock);
	      }
	      return false;
	    }
	    // escape
	    else if (key == 27)
	      reset_add_input(name_input,input_list);
	    return true;
	  };
	  
	  this.reset_add_input = function(name_input,input_list)
	  {
	    if (name_input) {
	      var li = name_input.parent();
	      if (rcmail.env.group_renaming) {
	        li.children().last().show();
	        rcmail.env.group_renaming = false;
	      }
	      else if ($('li', li.parent()).length == 1)
	        li.parent().hide();

	      name_input.remove();

	      if (input_list)
	        input_list.remove();

	      name_input = input_list = null;
	    }

	    rcmail.enable_command('list', 'listgroup', true);
	  };
	  
	//rename code written 2018
	  $("a.newname").click(function (e){
			e.preventDefault();
			group_rename();
			
			
			$("ul.groups > li.contactgroup > input").parent().prependTo($("ul.groups").first());
			var stop =  $("ul.groups").scrollTop($("ul.groups").first().offset().top);
			$("ul.groups").scrollTop(stop);
			setTimeout(function() { $("ul.groups > li.contactgroup > input").focus();}, 10);
		});
	  
	  this.group_rename = function()
	  {
	    if (!rcmail.env.group || !rcmail.gui_objects.folderlist)
	      return;

	    if (!rcmail.name_input) {
	      rcmail.enable_command('list', 'listgroup', false);
	      var name_input = $('<input>').attr('type', 'text').val(rcmail.env.contactgroups['G'+rcmail.env.source+rcmail.env.group].name);
	      name_input.bind('keydown', function(e){ return add_input_keydown(e,name_input,null); });
	      rcmail.env.group_renaming = true;

	      var link, li = rcmail.get_folder_li('G'+rcmail.env.source+rcmail.env.group,'',true);
	      if (li && (link = li.firstChild)) {
	        $(link).hide().before(name_input);
	      }
	    }

	    name_input.select().focus();
	  };
	  
	  // New Code ends for create new contact and rename group as part of roundcube upgrade.
	

	var defaultText;
	if(rcmail.env.task == 'mail'){

		defaultText =rcmail.gettext('mail_search_text'), 'tln_localization';
		//Calling the placeholder.. method twice as we need it on page load as well as when use clicks ay of the mail options
		placeholderForSearch('mail', defaultText);

		$('.mailbox').click(function(){

			// TEALIUM TAG
			if(rcmail.env.action == '') {
				if($(this).hasClass('sent')){
					callTealium('SENT');
				}else if($(this).hasClass('trash')){
					callTealium('TRASH');
				}else if($(this).hasClass('inbox')){
					callTealium('INBOX');
				}else if($(this).hasClass('drafts')){
					callTealium('DRAFTS');
				}
			}

			placeholderForSearch('mail', defaultText);
			//Added the below block as a fix for issue 452 - Actions to be performed for handling mails in Trash folder.
			//Below block will be executed when the user is clicks on the any folders under the Mail folder.
			if($(this).hasClass('trash') && !$(this).hasClass('empty')){
				$("#emptyTrash").removeClass("hidden");
			}else{
				$("#emptyTrash").addClass("hidden");
			}
		});


		//GEC 551 - Email Settings: Changes to Display remote inline images field
		$("div#remote-objects-message > a").each(function (){
			if($(this).attr("href") == "#alwaysload"){
				$(this).hide();
			}
		});

		//Display tooltips for compose page.
		$("textarea#_to").attr('title',rcmail.gettext('compose_mail_tooltip_to'), 'tln_localization');
		$("textarea#_bcc").attr('title',rcmail.gettext('compose_mail_tooltip_bb'), 'tln_localization');
		$("textarea#_cc").attr('title',rcmail.gettext('compose_mail_tooltip_cc'), 'tln_localization');
		$("input#compose-subject").attr('title',rcmail.gettext('compose_mail_tooltip_subject'), 'tln_localization');

		//GEC 795 - Hide Empty trash folder button if user deletes all messages by clicking on Delete button
		//Delete functionality is in core file, which we are not authorized to update. Hence adding a round-about code to achieve the requested functionality when task is mail.
		//1. Remove the current onclick on delete button.
		//2. Add the fix for 795 and then call the same method on onclick.
		$("a.button.delete").removeAttr("onclick");
		$("a.button.delete").click(function (e){
			//alert('button');
			//Fix for issue 861 - Confirmation dialog missing when deleting mail from Delete/trash folder
			var trashdeletetitle = rcmail.gettext('deletemessage', 'tln_localization');
			var thisdeletetitle = $("a.delete").attr('title');
			var totalRows = $("table#messagelist tbody tr").length;
			var selectedRows = $("table#messagelist tbody tr.selectedy").length;
			if(thisdeletetitle == trashdeletetitle){
				if (!confirm(rcmail.gettext('confirmdeleteMessage', 'tln_localization'))){
					if(totalRows == selectedRows){
						$("input#selectAll").click();
					}
					return false;
				}
			}
			//Fix for issue 861 - ends


			if($(".mailbox.trash").hasClass('selected')){
				if(totalRows == selectedRows){
					$("#emptyTrash").addClass("hidden");
				}else{
					$("#emptyTrash").removeClass("hidden");
				}
			}

			return rcmail.command('delete','',this,e);
		});


	}else if(rcmail.env.task == 'addressbook'){
		defaultText =rcmail.gettext('addressbook_search_text'), 'tln_localization';
		placeholderForSearch('addressbook', defaultText);
		$('.contactgroup').click(function(){
			placeholderForSearch('addressbook', defaultText);
		});
		$('.addressbook').click(function(){
			placeholderForSearch('addressbook', defaultText);
		});

	}
	//fix for - the console is displayed on top of the telenor logo
	if($("#console")){
		$("#console").addClass('hidden');
	}

	//Set the height of the Right panel
	var totalHeight = getTotalHeaderHeight();


	var minheight = ($(window).height() - (totalHeight))-10;
	var leftpanelheight = $("aside.left").outerHeight(true);


	if(leftpanelheight > minheight){
		if(leftpanelheight>($(window).height())){
			$("aside.right, #settings-right").css('min-height',leftpanelheight);
		}else{
			$("aside.right, #settings-right").css('min-height',minheight);
		}
	}else{
		$("aside.right, #settings-right").css('min-height',minheight);
	}


	// TEALIUM
	if(rcmail.env.tealium_tag) {
		$(".button-mail").click(function(){
			callTealium('EPOST_BUTTON');
		});

		$(".button-addressbook").click(function(){
			callTealium('ADDRESSBOOK');
		});
	}

	if(rcmail.env.task == 'addressbook'){

		// TEALIUM
		if(rcmail.env.tealium_tag) {
			$('#contacts-table').click(function(){
				callTealium('ADDRESSBOOK_VIEW');
			});
		}

		$("aside.right").css('min-height',0);
		if($("ul.groups").css('display') == 'none'){
			$("ul.groups").prev().css('padding-bottom','10px');
		}else{
			$("ul.groups").prev().css('padding-bottom','33px');
		}
		//In MAC with 11inch screen, the groups were not visible
		$("ul.groups").css('min-height','35px');
		$("ul.groups").css('height',($(window).height() - (530)));
		//Note: 42px is the height of the footer. Hence 5+42=47. If any change to height of footer, the apply the change here accordingly
		$("div#addresslist div.scroller").css('height',(($(window).height() - (totalHeight))-47));
		
		//Move the create group placeholder to top
		//commented the below old code and calling the same in callCustomFunctions method as part of roundcube upgrade.
		/*$("a.creategroup").click(function (){
			$("ul.groups > li.contactgroup > input").parent().prependTo($("ul.groups").first());
			var stop =  $("ul.groups").scrollTop($("ul.groups").first().offset().top);
			$("ul.groups").scrollTop(stop);
			setTimeout(function() { $("ul.groups > li.contactgroup > input").focus();}, 10);
		});*/

		//merged
		$("h1.boxtitle").hide();
		$('input[value="Rediger kontakt"]').attr( 'title', 'Rediger kontakt' );
		$('input[value="Lagre"]').attr( 'title', 'Lagre' );
		$('input[value="Avbryt"]').attr( 'title', 'Avbryt' );

		$('input[value="Edit contact"]').attr( 'title', 'Edit contact' );
		$('input[value="Save"]').attr( 'title', 'Save' );
		$('input[value="Cancel"]').attr( 'title', 'Cancel' );
		//8-Jan-2015: Changes related to requirement from telenor to replace the + from a link
		$("div.treetoggle").html("+ Vis grupper");
		if($("div.treetoggle").hasClass("collapsed")){
			$("#creategroup").css("display","none");
			$("a.rename, a.delgroup").addClass("hidden");
			$("li.addressbook").addClass("selected");
		}else{
			$("#creategroup").css("display","");
			$("a.rename, a.delgroup").addClass("hidden");
			$("div.treetoggle").html("- Skjul grupper");
			setTimeout(function(){$("li.addressbook").removeClass("selected"), 10});
		}

		//Please see the reverse class added as JS takes sometime for the click event to execute
		$("div.treetoggle").click(function(){
			if($("div.treetoggle").hasClass("collapsed")){
				$("li.addressbook").removeClass("selected");
			}else{
				$("li.addressbook").addClass("selected");
			}
		});

		//20-Jan-2014: GEC 596 - Improvements to the address book in order to simplify and improve the user experience.
		$("form#contact-details #contacttabs div > span#tab1, form#contact-details #contacttabs div > span#tab2").hide();
		$("#contacthead p.addfield, #contactphoto div.formlinks").addClass("hidden");
		hideaddressefields();
	}

	//For Settings - Folder section, hide the elements that are not required for Telenor
	$('label[for="_path"]').parent().parent().remove(); //Need to remove, else the hidden parent value is getting passed along with request which is not correct.
	$('label[for="_foldertype"]').parent().parent().hide();
	$('label[for="_viewmode"]').parent().parent().hide();
	$("#mailboxroot").hide();


	//For Login page, Adding Forgot passowrd to the Roundcube code via javascript.
	var showForgotPwd = "<a href='http://www.online.no/service/glemt-passord.jsp' target='_blank' class='forgotPwd'>Glemt passord</a>";
	$("#rcmloginsubmit").after(showForgotPwd);

	//Reinitialize the Search box.
	$("#searchlink").click(function(){
		if($("#quicksearchbox").val() != 'Søk i mappen' || $("#quicksearchbox").val() != 'Søk i adressebok'){
			$("form[name='rcmqsearchform']").submit();
		}
	});

	// TEALIUM
	if(rcmail.env.tealium_tag) {
		$("#telenorHeader").click(function(){
			callTealium('TELENOR_EPOST');
		});
	}

	//Settings - Hiding the options not required by Telenor.
	$(".preferences, .identities, .responses").hide();

	//Add the url to the Iframe section
	$('#adiframe').attr('data', $('#adframeurl').html());

	//System Message changes
	if( $.cookie('crossbuttonclicked')){
		$("div .systemMsgArea").addClass('hidden');
		$('.systemMsgArea').empty();  //-- check this.. empty the content from the span tag
	}

	//Commenting this code for now. While testing if there is any issue related to login cookie, the below code needs to be uncommented.
	/* if( $.cookie('logincrossbuttonclicked')){
		$("div .systemMsgArea").addClass('hidden');
		$('.systemMsgArea').empty();  //-- check this.. empty the content from the span tag
	} */

	//Computing height for all the absolute positioned elements.
	adjustHeight();

	//3-Nov-2014: Removing the anchor ctags under the li attachments
	if($("li .drop")){
		$("li .drop").remove();
	}

	 $(".crossicon").click(function(){
			$("div .systemMsgArea").addClass('hidden');
			$('.systemMsgArea').empty();  //-- check this.. empty the content from the span tag
			adjustHeight();
			 $.cookie('crossbuttonclicked', true);
		});

	 $(".logincrossicon").click(function(){
			$("div .systemMsgArea").addClass('hidden');
			$('.systemMsgArea').empty();  //-- check this.. empty the content from the span tag
			adjustHeight();
			$.cookie('logincrossbuttonclicked', true);
	});



	$(".logout").click(function(){
		$.removeCookie('crossbuttonclicked');
		$.removeCookie('logincrossbuttonclicked');
	});

	//Custom Styling of select dropdown
	 $(".custom-select, #_listmode, #blockaddrsFromSubect").each(function(){
            $(this).wrap("<span class='select-wrapper'></span>");
            $(this).after("<span class='holder'></span>");
        });
        $(".custom-select, #_listmode, #blockaddrsFromSubect").change(function(){
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".holder").text(selectedOption);
        }).trigger('change');

	//Custom Styling of html dropdown
	 $(".html-select, .addfieldmenu").each(function(){
            $(this).wrap("<span class='select-html-wrapper'></span>");
            $(this).after("<span class='html-holder'></span>");
        });
        $(".html-select, .addfieldmenu").change(function(){
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".html-holder").text(selectedOption);
        }).trigger('change');

	//Custom Styling of html dropdown
	 $(".fontsizeselect, .contactselectsubtype, .ff_gender").each(function(){
            $(this).wrap("<span class='select-font-wrapper'></span>");
            $(this).after("<span class='htmlfont-holder'></span>");
        });
        $(".fontsizeselect, .contactselectsubtype, .ff_gender").change(function(){
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".htmlfont-holder").text(selectedOption);
        }).trigger('change');

	setTimeout(function(){$("select.addfieldmenu").change(function(e) {
	    $(".contactselectsubtype").each(function(){
			if(!$(this).parent().hasClass("select-font-wrapper")){
				$(this).wrap("<span class='select-font-wrapper'></span>");
				$(this).after("<span class='htmlfont-holder'></span>");
			}
		});
        $(".contactselectsubtype").change(function(){
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".htmlfont-holder").text(selectedOption);
        }).trigger('change');
    }), 10});

	$(".boxfooter #rcmcountdisplay").css("display","none");
	$("#contactsectionnotes p.addfield").css("display","none");

	//Provide padding for the select dropdown of font size
	$("#rcmfd_default_font_size").parent().css('margin-left','10px');

	//8-Jan-2015: Requirement from telenor to replace the + from a link
	$("div.treetoggle").click(function(){
		if($(this).hasClass("collapsed")){
			$("div.treetoggle").html("- Skjul grupper");
			$("#creategroup").css("display","");
		}else{
			$("#creategroup").css("display","none");
			$("a.rename, a.delgroup").addClass("hidden");
			$("div.treetoggle").html("+ Vis grupper");
			$("div.treetoggle").prev().click();
		}
	});

	$("li.contactgroup").click(function(){
		$("a.rename, a.delgroup").removeClass("hidden");
	});

	//Below block was added as a fix for 599
	if(rcmail.env.task == 'settings'){
		$("#secuirity-settings-form input[type=button]").each(function() {
			$(this).attr('title',$(this).val());
		});
		$("#forward-form input[type=button]").each(function() {
			$(this).attr('title',$(this).val());
		});
		$(".emailcontent input[type=button]").each(function() {
			$(this).attr('title',$(this).val());
		});

		$("div.formbuttons input[type=button]").each(function() {
			$(this).attr('title',$(this).val());
		});

		$('#secuirity-settings-form').keypress(function (e) {
			var key = e.which;
			if(key == 13)  // enter pressed
			{
				e.preventDefault();
				return false;
			}
		});
		if(navigator.userAgent.search("Firefox") > -1  || navigator.userAgent.search("Chrome") > -1 || navigator.userAgent.search("Safari") > -1){
			$("div.boxcontent table tr td.ssdetails div.blockaddreclass table.blockaddressess tr td").css('margin-right','-120px');
		}
		if(navigator.userAgent.search("Firefox") > -1 ){
			if($("td.inputblock p span.spanblockAddr").html() != undefined){
				$("td.blockaddrsave input[type=button], td.blockaddraction input[type=button]").css('margin-left','-120px');
			}
			$('form#contact-details .contactfieldgroup.contactcontrollerphone legend, form#contact-details .contactfieldgroup.contactcontrolleraddress legend').css('padding-left','8px');
		}
		if(navigator.userAgent.search("Chrome") > -1 ){
			if($("td.inputblock p span.spanblockAddr").html() != undefined){
				$("td.blockaddrsave input[type=button], td.blockaddraction input[type=button]").css('margin-left','-39px');
			}
			$('form#contact-details .contactfieldgroup.contactcontrollerphone legend, form#contact-details .contactfieldgroup.contactcontrolleraddress legend').css('padding-left','8px');
		}
		if(navigator.userAgent.search("Safari") > -1 && !(navigator.userAgent.search("Chrome") > -1 )){
			if($("td.inputblock p span.spanblockAddr").html() != undefined){
				$("td.blockaddrsave input[type=button], td.blockaddraction input[type=button]").css('margin-left','-52px');
			}
		}


		//GEC 551 - Email Settings: Changes to Display remote inline images field
		$("#rcmfd_show_images > option").each(function() {
			if($(this).val() == "2"){
				$(this).remove();
			}
		});

		//Remove title from Folders
		$("span#settingstabfolders > a").removeAttr("title");

		//folders - validation for input field
		$('div.footerleft input.mainaction[type="button"]').removeAttr('onclick');
		$('div.footerleft input.mainaction[type="button"]').click(function(e) {
			if(checkforspecialchar()){
				$(".fwdvaliation").remove();
					$('input[id="_name"]').css("border", "1px solid #ff0000");
					var errormsg = "<span class='fwdvaliation'>"+rcmail.gettext('folderinputerror', 'tln_localization')+"</span>";
					$('input[id="_name"]').after(errormsg);
					return false;
			}else{
				$('input[id="_name"]').css("border", "1px solid #cccccc");
				$(".fwdvaliation").remove();
				return rcmail.command('save','',this,e);
			}
		});
	}

	if(navigator.userAgent.search("Safari") > -1  && !(navigator.userAgent.search("Chrome") > -1)){
			$('fieldset.contactfieldgroup div.contactfieldcontent').css('margin-top','-28px');
			$('div#contactsectioncontact fieldset.contactfieldgroup').css('margin-top','-18px');
			$('div.row div.contactfieldlabel').css('padding-top','17px');
			$('div.row div.contactfieldlabel').css('padding-bottom','10px');
			$('div.row div.contactfieldcontent').css('padding-top','17px');
			$('div.row div.contactfieldcontent').css('padding-bottom','10px');
			$('div#contactphoto').css( 'margin-top','-17px');
			$('form#contact-details div#contactphoto').css( 'margin-top','2px');
			$('.contactfieldgroup.contactcontrolleremail legend, .contactfieldgroup.contactcontrollerphone legend, .contactfieldgroup.contactcontrolleraddress legend').css('padding-top','22px');
			$('form#contact-details .contactfieldgroup.contactcontrolleremail legend, form#contact-details .contactfieldgroup.contactcontrollerphone legend, form#contact-details .contactfieldgroup.contactcontrolleraddress legend').css('padding-top','10px');
			$('form#contact-details .contactfieldgroup.contactcontrollerphone legend, form#contact-details .contactfieldgroup.contactcontrolleraddress legend').css('padding-top','25px');

			$('form#contact-details .contactfieldgroup.contactcontrollerphone legend, form#contact-details .contactfieldgroup.contactcontrolleraddress legend').css('padding-left','6px');

			/* $('fieldset.contactfieldgroup div.contactfieldcontent').css('margin-bottom','10px'); */
	}

	if(navigator.userAgent.search("Firefox") > -1 || navigator.userAgent.search("Safari") > -1 && !(navigator.userAgent.search("Chrome") > -1)){
			if($("div#contacttabs div.tabsbar").hasClass("tabsbar2")){
				$("div#contacttabs div.tabsbar").removeClass("tabsbar2");
			}
			if($("div#contacttabs div.tabsbar").hasClass("tabsbar")){
				$("div#contacttabs div.tabsbar").addClass("tabsbar2");
			}
	}


	if(navigator.userAgent.search("IE") > -1){
			$('form#contact-details .contactfieldgroup.contactcontrollerphone legend, form#contact-details .contactfieldgroup.contactcontrolleraddress legend').css('padding-left','8px');

			if($('input[type="button"][value="Rediger kontakt"]') > -1){
				if($("div#contacttabs div.tabsbar").hasClass("tabsbarforIE")){
					$(" div#contacttabs div.tabsbar").removeClass("tabsbarforIE");
				}
				if($(" div#contacttabs div.tabsbar").hasClass("tabsbar")){
					$("div#contacttabs  div.tabsbar").addClass("tabsbarforIE");
				}
			}

	}


	if(navigator.userAgent.search("Chrome") > -1 || navigator.userAgent.search("Safari") > -1){
		addnooutlineclass("textarea#_to");
		addnooutlineclass("textarea#_cc");
		addnooutlineclass("textarea#_bcc");
		addnooutlineclass("input#compose-subject");
	}
	//GEC-702 solution
	$( ".button-settings" ).prop( "href", "?_task=settings&_action=folders" );
	$( ".button-settings" ).removeAttr("onclick");
	//Added the below block to fix issue GEC 884. The below code is taken from apps.js
	$( ".button-settings" ).click(function(){
		if (rcmail.task == 'mail' && rcmail.env.action == 'compose' && $.inArray('switch-task', rcmail.env.compose_commands) < 0 && !rcmail.env.server_error) {
		  if (rcmail.cmp_hash != rcmail.compose_field_hash() && !confirm(rcmail.get_label('notsentwarning')))
			return false;

		  // remove copy from local storage if compose screen is left intentionally
		  rcmail.remove_compose_data(rcmail.env.compose_id);
		  rcmail.compose_skip_unsavedcheck = true;
		}
	});

	/*$("a.logout").removeAttr( "onclick");
	$("a.logout").prop( "href", "#" );
	//return rcmail.command('switch-task','logout',this,event)
	$("a.logout").click(function(e) {
		if(rcmail.env.trashCount > 0){
			rcmail.env.mailbox = 'INBOX.Trash';
			if (!confirm(rcmail.get_label('purgefolderconfirm')))
			  return false;
			var lock, post_data = {_mbox: rcmail.env.mailbox};
			// lock interface if it's the active mailbox
		    lock = rcmail.set_busy(true, 'loading');
			// send request to server
			http_post1('purge', post_data, lock);
		}else{
			return rcmail.command('switch-task','logout',this);
			$("a.logout").prop( "href", "?_task=logout" );
		}
	});*/

	$("a#emptyTrash").click(function(e) {
	//The below method is exactly copied from apps.js as we need to override the return functionality
	//That is, if user clicks Ok in confirmation popup, hide the empty trash button else display the empty trash button
		if (rcmail.env.exists){
            var lock, post_data = {_mbox: rcmail.env.mailbox};
			if (!confirm(rcmail.get_label('purgefolderconfirm')))
			  return false;
			// lock interface if it's the active mailbox
			//if (mbox == this.env.mailbox) {
			   lock = rcmail.set_busy(true, 'loading');
			   post_data._reload = 1;
			// }
			$("#emptyTrash").addClass("hidden");
			// send request to server
			rcmail.http_post('purge', post_data, lock);
			setTimeout(function(){rcmail.command('checkmail'),100}); //Have to provide timeout for IE, chrome
		}else{
			return false;
		}
	});

	//autocomplete feature needs to be removed as per Robert
	$("#rcmloginuser, #rcmloginpwd").removeAttr('autocomplete');

	$( "a.button.send" ).removeAttr("onclick");
	$( "a.button.send" ).click(function(e){
		// TEALIUM
		if(rcmail.env.tealium_tag) {
			callTealium('BUTTON_SEND');
		}

		//$("[name='_message']").val($("[name='_message']").val().replace(/<p>/g, '<p style="margin:0px">'));
		var editor = tinyMCE.get(rcmail.env.composebody);
		if(null != editor && null != editor.dom && null != editor.dom.get('tinymce')){
			editor.dom.get('tinymce').innerHTML = editor.dom.get('tinymce').innerHTML.replace(/<p>/g, '<p style="margin:0px">');
		}

		return rcmail.command('send','',this,e);
	});


}

//Copied the below method from the core file app.js with few modifications
function http_post1(action, postdata, lock){
    var url = rcmail.url(action);

    if (postdata && typeof postdata === 'object') {
      postdata._remote = 1;
      postdata._unlock = (lock ? lock : 0);
    }
    else
      postdata += (postdata ? '&' : '') + '_remote=1' + (lock ? '&_unlock='+lock : '');

    // trigger plugin hook
    var result = rcmail.triggerEvent('request'+action, postdata);
    if (result !== undefined) {
      // abort if one of the handlers returned false
      if (result === false)
        return false;
      else
        postdata = result;
    }

    // send request
    rcmail.log('HTTP POST: ' + url);

    // reset keep-alive interval
    rcmail.start_keepalive();

    return $.ajax({
      type: 'POST', url: url, data: postdata, dataType: 'json',
      success: function(data){if (data.unlock)rcmail.set_busy(false);rcmail.command('switch-task','logout',this);},
      error: function(o, status, err) { rcmail.http_error(o, status, err, lock, action); }
    });
  }

function hideaddressefields(){
	//20-Jan-2014: GEC 596 - Improvements to the address book in order to simplify and improve the user experience.
	$("input.ff_country, input.ff_region").addClass("hidden");
	$("input.ff_country").prev().remove();
	$(".contactcontrolleraddress div.contactfieldlabel").remove();
	$("fieldset.contactcontrollerwebsite div.contactfieldlabel").hide();
	$("#contactsectioncontact p.addfield select > option").each(function() {
		if($(this).val() == "address" || $(this).val() == "im"){
			$(this).remove();
		}
	});

	$("#contactsectioncontact p.addfield select").change(function(){
		if($("#contactsectioncontact p.addfield select").val() == "website"){
			setTimeout(function(){$("fieldset.contactcontrollerwebsite div.contactfieldlabel").remove(),10});
		}

		if($("#contactsectioncontact p.addfield select").val() == "phone"){
			setTimeout(function(){removeOptsFromTelephon(),10});
		}
	});

	$("fieldset.contactcontrollerphone div.contactfieldlabel select.contactselectsubtype > option").each(function() {
		if($(this).text() == "-"){
			$(this).remove();
		}
	});
}

function removeOptsFromTelephon(){
	$("fieldset.contactcontrollerphone div.contactfieldlabel select.contactselectsubtype").each(function() {
		if($(this).children("option").length>7){
			$(this).children("option").each(function() {
				if($(this).text() == "-"){
					$(this).remove();
				}
			});
		}

	});
}

function addnooutlineclass(inputId){
	$(inputId).on({
		focus: function(){
		$(this).addClass("nooutline");
		}
	});
}
function placeholderForSearch(source, defaultText){

	setTimeout(function(){$("#quicksearchbox").val(defaultText); });

		$('input[name="_q"]').on({
			blur: function(){
				var $this = $(this);
				if($this.val() === '') $this.val(defaultText);
			},
			focus: function(){
				var $this = $(this);
				if($this.val() === defaultText) $this.val('');
			}

		});
}

function getTotalHeaderHeight(){
	var headerHeight = $("header").outerHeight(true);
	var mailToolbarHeight = $("div .header2nd").outerHeight(true);
	var totalHeight = headerHeight + mailToolbarHeight;
	return totalHeight;
}

function adjustHeight(){
	var totalHeight = getTotalHeaderHeight();

	if($('#sysMsgShown').html() == '1'){
		if($('.systemMsgIcon').html() || $('.systemMsgloginIcon').html()){
			$("div .systemMsgArea").removeClass('hidden');
			totalHeight = totalHeight + 50;
		}else{
			$("div .systemMsgArea").addClass('hidden');
		}
	}else{
		$("div .systemMsgArea").addClass('hidden');
	}

	//$("#sectionslist").css('top',totalHeight);
	$("#preferences-box").css('top',totalHeight);

	//$("#pluginbody").css('top',totalHeight-30);
	//$("#settings-right").css('min-height',(($(window).height() - (totalHeight))-5));


}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkforspecialchar(){
	var inputVal = $('input[id="_name"]').val();
	//. $ + / \ % [ ] '
	var re=/[$%+\[\]:'.\/\\]/;
	return re.test(inputVal) ? true : false;
}

function addToolltipForLeftMenu(){
	$("a.button-mail").attr('alt',$('a.button-mail span.button-inner').html());
	$("a.button-mail").attr('title',$('a.button-mail span.button-inner').html());

	$("a.button-addressbook").attr('alt',$('a.button-addressbook span.button-inner').html());
	$("a.button-addressbook").attr('title',$('a.button-addressbook span.button-inner').html());

	$("a.button-settings").attr('alt',$('a.button-settings span.button-inner').html());
	$("a.button-settings").attr('title',$('a.button-settings span.button-inner').html());
}


