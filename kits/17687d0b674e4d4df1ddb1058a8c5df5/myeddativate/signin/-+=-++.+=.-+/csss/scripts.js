/*
State of California
Version 2013.xx.xx
*/

var serpLocation = "/serp.htm"; // Location of your search engine results page (SERP)

// addLoadEvent by Simon Willison
// Adds a handler to an event without over-riding other handlers
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}

/* http://www.dustindiaz.com/getelementsbyclass/ */
function getElementsByClass(searchClass,node,tag) {
	var classElements = new Array();
	if ( node == null )
		node = document;
	if ( tag == null )
		tag = '*';
	var els = node.getElementsByTagName(tag);
	var elsLen = els.length;
	var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
	for (i = 0, j = 0; i < elsLen; i++) {
		if ( pattern.test(els[i].className) ) {
			classElements[j] = els[i];
			j++;
		}
	}
	return classElements;
}

var counterC = 0;
var navRoot;

initNavigation = function() {

	var useNavFolderMatch = true; // Use new folder matching method to highlight the current navigation tab?
	var disableNavFade = false; // Disable navigation fade effects?
	var ignoreNavMouseover = false;
	setTimeout(function(){ignoreNavMouseover = false;},500); // Prevent nav from opening on page load if mouse is already positioned over nav
	navRoot = document.getElementById("nav_list");

	// Add event handlers to phone nav buttons
	var menuButton = document.getElementById("p_h_menu");
	if (menuButton) menuButton.onclick = function(){toggle_menu()};
	var searchButton = document.getElementById("p_h_search");
	if (searchButton) searchButton.onclick = function(){toggle_search()};

	// Add event handler to subpage search form
	var searchFormContainer = document.getElementById("head_search");
	if (searchFormContainer) searchFormContainer.onclick = function(){document.getElementById('head_search').className += " search_freeze_width";};

	// Touchscreens - If user taps outside of nav, close nav panels
	if (Modernizr.touch){
		document.body.addEventListener('touchstart', function(ev) {
			navRoot.className = "";
			closeAllPanels();
		}, false);
	}
	
	if (document.querySelectorAll) { // Does the browser support the querySelectorAll method?

		var arrCurrentURL=location.href.split("/");
		var arrNavLink;

		var arrayNavLI = document.querySelectorAll(".nav_level1_link");
		//var arrayNavLI = document.querySelectorAll("#nav_list > li");

		var reMainNav = "";
		if (typeof defaultMainList!="undefined")
			reMainNav = new RegExp("^" + defaultMainList + "$", "i"); // Regex for finding the index of the default main list item
		

		for (var i=0; i<arrayNavLI.length; i++) { // Loop over main list items
			var node = arrayNavLI[i];

			// Improve spacing between nav items. Breaks IE.
			if (navigator.appVersion.indexOf("MSIE") == -1) {
				node.className += " correctspacing";
			}

			////// Highlight the default main nav item //////
			if (reMainNav) {
				if (node.firstChild.innerHTML.match(reMainNav)) { // Found default main nav item
					node.className += " highlighted_nav_item"; // add class to this li
				}
			} else if (useNavFolderMatch && node.childNodes[0] && node.childNodes[0].href) {
				arrNavLink = node.childNodes[0].href.split("/");
				if ((arrNavLink.length > 4) && (arrCurrentURL[3] == arrNavLink[3])) { // folder of current URL matches this nav link
					node.className += " highlighted_nav_item"; // add class to this li
				}
			}


			if (Modernizr.touch) {
				if (node.querySelector(".nav_panel")) {
					node.querySelector(".nav_level1_link").level1Link = node.querySelector(".nav_level1_link").href;
					node.querySelector(".nav_level1_link").removeAttribute("href");

					node.addEventListener('touchstart', function(ev) {
						// keeps tabpanel from closing when clicking inside of it
						ev.stopPropagation();
					},false);
				}


			    //node.querySelector(".nav_level1_link").addEventListener('click', function(ev) {
				node.addEventListener('click', function (ev) {
					ev.stopPropagation();
					counterC++;

					var navigPanel = this.parentNode.querySelector(".nav_panel");

					if ((navigPanel && navigPanel.className.match(/mo_display/)) || (this.offsetWidth == navRoot.offsetWidth)) {// is panel already open, or mobile layout

						window.location = this.level1Link;
	
					} else {

						closeAllPanels(); // hide all other panels
						
						// show panel
						navRoot.className = "unhighlight_nav_item";
		
						if (!ignoreNavMouseover && navigPanel) { // does this nav item have a navpanel?
							if (!disableNavFade) {
								if (navigPanel.outTimerID) // are we fading after a mouseout?
									clearTimeout(navigPanel.outTimerID); // cancel it
								
								navigPanel.className += " mo_display"; // display:block
								navigPanel.overOTimerID = setTimeout(function(){navigPanel.className += " mo_opacity";},10); // set opacity:1
								
							} else {
								navigPanel.style.display = "block";
							}
							// set position of down arrow
							var arrayDownArrow = getElementsByClass("nav_d_arrow_container",this.parentNode);
							if (arrayDownArrow.length == 1) {
								arrayDownArrow[0].style.left = this.offsetLeft + this.offsetWidth / 2 + "px";
							}
						}
	
					}
				},false);

			}
			// Removed "else". Fixes issue in FF and Chrome where user has both touchscreen and mouse.
			{

				////// Apply onmouseover and onmouseout event handlers to each main list item //////
				if (!Modernizr.touch) node.onmouseover = function(e) {
					if (!e) var e = window.event;
	
					var reltg = (e.relatedTarget) ? e.relatedTarget : e.fromElement;
					while (reltg && reltg != this && reltg.nodeName != 'BODY')
						reltg = reltg.parentNode;
					if (reltg == this) return; // mouse was already inside li
					
					navRoot.className = "unhighlight_nav_item";
	
					var arrayNavPanel = getElementsByClass("nav_panel", this);
					if (!ignoreNavMouseover && (arrayNavPanel.length == 1) && this.offsetWidth < navRoot.offsetWidth) { // does this nav item have a navpanel, and desktop layout?
						if (!disableNavFade) {
							if (arrayNavPanel[0].outTimerID) // are we fading after a mouseout?
								clearTimeout(arrayNavPanel[0].outTimerID); // cancel it
	
							arrayNavPanel[0].overDTimerID = setTimeout(function(){arrayNavPanel[0].className += " mo_display";},100);
							arrayNavPanel[0].overOTimerID = setTimeout(function(){arrayNavPanel[0].className += " mo_opacity";},120);
							
						} else {
							arrayNavPanel[0].style.display = "block";
						}
						// set position of down arrow
						var arrayDownArrow = getElementsByClass("nav_d_arrow_container",this);
						if (arrayDownArrow.length == 1) {
							arrayDownArrow[0].style.left = this.offsetLeft + this.offsetWidth / 2 + "px";
						}
					}
				}
				node.onmouseout = function(e) {
	
					if (!e) var e = window.event;
	
					// We're not sure if the mouse left the layer or entered a link within the layer.
					// Therefore we're going to check the relatedTarget/toElement of the event, ie. the element the mouse moved to.
					var reltg = (e.relatedTarget) ? e.relatedTarget : e.toElement;
	
					//We read out this element, and then we're going to move upwards through the DOM tree
					//until we either encounter the target of the event (ie. the LI), or the body element.
					//If we encounter the target the mouse moves towards a child element of the layer,
					//so the mouse has not actually left the layer. We stop the function.
					while (reltg && reltg != this && reltg.nodeName != 'BODY')
						reltg = reltg.parentNode;
					if (reltg == this) return; // mouse is still inside li
	
					navRoot.className = "";
	
					var arrayNavPanel = getElementsByClass("nav_panel", this);
					if (arrayNavPanel.length == 1) {
						if (!disableNavFade) {
							if (arrayNavPanel[0].overDTimerID) // pausing for a mouseover? cancel it.
								clearTimeout(arrayNavPanel[0].overDTimerID);
							if (arrayNavPanel[0].overOTimerID)
								clearTimeout(arrayNavPanel[0].overOTimerID);
	
							arrayNavPanel[0].outTimerID = setTimeout(function(){arrayNavPanel[0].className = arrayNavPanel[0].className.replace(/mo_display/g, "");},300);
							arrayNavPanel[0].className = arrayNavPanel[0].className.replace(/mo_opacity/g, "");
													
						} else {
							arrayNavPanel[0].style.display = "none";
						}
					}
				}
			}
		}

		// Create styles for phone nav
		var dynStylesheet = document.createElement('style');
		dynStylesheet.type="text/css";
		dynStylesheet.media="";
		var dynSSRules = "#navigation.phone_show_nav {	height:" + (arrayNavLI[0].offsetHeight + 2) * (arrayNavLI.length-1) + "px;}";

		document.getElementsByTagName('head')[0].appendChild(dynStylesheet);
		if (dynStylesheet.styleSheet) { // IE
			dynStylesheet.styleSheet.cssText = dynSSRules;
		} else { // proper browsers
			var dynSSTextNode = document.createTextNode(dynSSRules);
			dynStylesheet.appendChild(dynSSTextNode);
		}
	}
}

function closeAllPanels() {
	var arrayPanel = document.getElementById("nav_list").querySelectorAll(".mo_display, .mo_opacity");
	for (var counterA = 0; counterA < arrayPanel.length; counterA++) {
		arrayPanel[counterA].className = arrayPanel[counterA].className.replace(/mo_opacity/g, "");
		arrayPanel[counterA].outTimerID = setTimeout(removeDisplay,200,arrayPanel[counterA]);
	}
}

function removeDisplay(obj) {
	obj.className = obj.className.replace(/mo_display/g, "");
}

function toggle_menu() {
	var searchContainer = document.getElementById("head_search");
	var navContainer = document.getElementById("navigation");
	var menuButton = document.getElementById("p_h_menu");
	var searchButton = document.getElementById("p_h_search");

	if (navContainer.className.indexOf("phone_show_nav") < 0) { // is nav hidden?
		// apply class "phone_show_nav" to nav
		navContainer.className += " phone_show_nav"; // show nav
		searchContainer.className = searchContainer.className.replace("phone_show_search",""); // hide search
		if (menuButton) menuButton.className += " p_h_btn_highlight"; // hightlight menu button
		if (searchButton) searchButton.className = searchButton.className.replace("p_h_btn_highlight",""); // unhighlight search button
	} else {
		// remove class
		navContainer.className = navContainer.className.replace("phone_show_nav",""); // hide nav
		if (menuButton) menuButton.className = menuButton.className.replace("p_h_btn_highlight",""); // unhighlight menu button
	}
}

function toggle_search() {
	var searchContainer = document.getElementById("head_search");
	var navContainer = document.getElementById("navigation");
	var menuButton = document.getElementById("p_h_menu");
	var searchButton = document.getElementById("p_h_search");

	if (searchContainer.className.indexOf("phone_show_search") < 0) { // is search form hidden?
		// apply class "phone_show_search" to nav
		searchContainer.className += " phone_show_search"; // show search
		document.getElementById("search_local_textfield").focus();
		navContainer.className = navContainer.className.replace("phone_show_nav",""); // hide nav
		if (searchButton) searchButton.className += " p_h_btn_highlight"; // highlight search button
		if (menuButton) menuButton.className = menuButton.className.replace("p_h_btn_highlight",""); // unhighlight menu button
	} else {
		// remove class
		searchContainer.className = searchContainer.className.replace("phone_show_search",""); // hide search
		if (searchButton) searchButton.className = searchButton.className.replace("p_h_btn_highlight",""); // unhighlight search button
	}
}

var prepareSearchForm = {
	init: function() {
		var elemSearchForm = document.getElementById("local_form");
		if (elemSearchForm) {
			elemSearchForm.action = serpLocation;
			elemSearchForm.cof.value = "FORID:10";
		}

		if ((navigator.appVersion.indexOf("MSIE 7.") != -1)||(navigator.appVersion.indexOf("MSIE 8.") != -1)) { /* Fix Google Autocomplete and IE7/8 issue where default text doesn't clear */
			document.getElementById("search_local_textfield").value="";
		}

	}
}

// Begin gatag.js

//	This javascript tags file downloads and external links in Google Analytics.
//	All outbound links and links to non-html files should now be automatically tracked.

// Original script: http://www.goodwebpractices.com/roi/track-downloads-in-google-analytics-automatically.html
// 5/16/11 Updated for asynchronous GA code.
// 7/14/14 Added Office 2010 file extensions. Changed "click" to "mousedown". Added support for 2 dashboards.

function addGAToDownloadLinks() {
	if (document.getElementsByTagName) {
		// Initialize external link handlers
		var hrefs = document.getElementsByTagName("a");
		for (var l = 0; l < hrefs.length; l++) {
			// try {} catch{} block added by erikvold VKI
			try{
				//protocol, host, hostname, port, pathname, search, hash
				if (hrefs[l].protocol == "mailto:") {
					startListening(hrefs[l],"mousedown",trackMailto);
				} else if (hrefs[l].protocol == "tel:") {
					startListening(hrefs[l],"mousedown",trackTelto);
				} else if (hrefs[l].hostname == location.host) {
					var path = hrefs[l].pathname + hrefs[l].search;
					var isDoc = path.match(/\.(?:doc|docx|eps|jpg|png|svg|xls|xlsx|ppt|pptx|pdf|zip|txt|vsd|vxd|js|css|rar|exe|wma|mov|avi|wmv|mp3)($|\&|\?)/);
					if (isDoc) {
						startListening(hrefs[l],"mousedown",trackExternalLinks);
					}
				} else if (!hrefs[l].href.match(/^javascript:/)) {
					startListening(hrefs[l],"mousedown",trackExternalLinks);
				}
			}
			catch(e){
				continue;
			}
		}
	}
}

function startListening (obj,evnt,func) {
	if (obj.addEventListener) {
		obj.addEventListener(evnt,func,false);
	} else if (obj.attachEvent) {
		obj.attachEvent("on" + evnt,func);
	}
}

function trackMailto (evnt) {
	var href = (evnt.srcElement) ? evnt.srcElement.href : this.href;
	var mailto = "/mailto/" + href.substring(7);
	_gaq.push(['_trackPageview', mailto]);
	_gaq.push(['b._trackPageview', mailto]);
}

function trackTelto (evnt) {
	var href = (evnt.srcElement) ? evnt.srcElement.href : this.href;
	var telto = "/telto/" + href.substring(4);
	_gaq.push(['_trackPageview', telto]);
	_gaq.push(['b._trackPageview', telto]);
}

function trackExternalLinks (evnt) {
	var e = (evnt.srcElement) ? evnt.srcElement : this;
	while (e.tagName != "A") {
		e = e.parentNode;
	}
	var lnk = (e.pathname.charAt(0) == "/") ? e.pathname : "/" + e.pathname;
	if (e.search && e.pathname.indexOf(e.search) == -1) lnk += e.search;
	if (e.hostname != location.host) lnk = "/external/" + e.hostname + lnk;
	_gaq.push(['_trackPageview', lnk]);
	_gaq.push(['b._trackPageview', lnk]);
}

// End gatag.js

function initPage() {
	initNavigation();
	prepareSearchForm.init();
	addGAToDownloadLinks();
}
addLoadEvent(initPage);

// Tabpanel
// Version 2014.05.16

var CAGOVTabpanel = {
	arrayUL: new Object(),

	initTabpanel:function() {
		arrayUL = getElementsByClass("tabpanel_list");
		for (counterC = 0; counterC < arrayUL.length; counterC++) { // loop over each tabpanel UL
			arrayUL[counterC].arrayLI = [];
			arrayChildren = arrayUL[counterC].childNodes;
			// create array of LI elements
			for(counterD = 0; counterD < arrayChildren.length; counterD++) {
				if(arrayChildren[counterD].nodeName == "LI") {
					arrayUL[counterC].arrayLI.push(arrayChildren[counterD]);
				}
			}
			for(counterE = 0; counterE < arrayUL[counterC].arrayLI.length; counterE++) { // loop over each tab LI
				elemSpan = arrayUL[counterC].arrayLI[counterE].getElementsByTagName("span")[0];
				elemSpan.indexUL = counterC;
				elemSpan.indexLI = counterE;
				// add event handlers
				elemSpan.onclick = function() {
					CAGOVTabpanel.tabpanelClick(this);
				}
				elemSpan.onfocus = function() {
					CAGOVTabpanel.tabpanelClick(this);
				}
			}

			// Add the line and arrow container
			newLiNode = document.createElement('li');
			newLiNode.setAttribute('class','tabpanel_line_and_arrow');

			newLineDivNode = document.createElement('div');
			newLineDivNode.setAttribute('class','tabpanel_line_container');
			newLiNode.appendChild(newLineDivNode);

			newArrowDivNode = document.createElement('div');
			newArrowDivNode.setAttribute('class','tabpanel_d_arrow_container');

			tabWidth = arrayUL[counterC].arrayLI[0].getElementsByTagName("span")[0].offsetWidth;
			if (arrayUL[counterC].arrayLI[0].getElementsByTagName("span")[0].className.match(/add_icon_/)) tabWidth -= 40;
			newArrowDivNode.setAttribute('style','left:' + tabWidth/2 + 'px');
			newLiNode.appendChild(newArrowDivNode);
			arrayUL[counterC].elemArrow = newArrowDivNode;

			arrayUL[counterC].appendChild(newLiNode);
			arrayUL[counterC].elemLineAndArrow = newLiNode;

			// set vertical position of panel
			getElementsByClass("tabpanel_panel", arrayUL[counterC].arrayLI[0])[0].style.top = arrayUL[counterC].elemLineAndArrow.offsetTop + "px";
			//arrayUL[counterC].arrayLI[0].querySelector(".tabpanel_panel").style.top = arrayUL[counterC].elemLineAndArrow.offsetTop + "px";

		}
	},

	tabpanelClick:function(elSpan) {
		for (counterF = 0; counterF < arrayUL[elSpan.indexUL].arrayLI.length; counterF++) {
			//elementPanel = arrayUL[elSpan.indexUL].arrayLI[counterF].querySelector(".tabpanel_panel");
			elementPanel = getElementsByClass("tabpanel_panel", arrayUL[elSpan.indexUL].arrayLI[counterF])[0]
			if (counterF == elSpan.indexLI) {
				elementPanel.style.display = "block"; // display this panel
				arrayUL[elSpan.indexUL].arrayLI[counterF].getElementsByTagName("span")[0].style.color = "#1f70a7"; // color of tab text

				// set position of down arrow
				tabWidth = elSpan.offsetWidth;
				if (counterF == 0 && elSpan.className.match(/add_icon_/)) tabWidth -= 40;
				arrayUL[elSpan.indexUL].elemArrow.style.left = arrayUL[elSpan.indexUL].arrayLI[counterF].offsetLeft + tabWidth/2 + "px";
				elementPanel.style.top = arrayUL[elSpan.indexUL].elemLineAndArrow.offsetTop + "px"; // set vertical position of panel
				elementPanel.style.height = arrayUL[elSpan.indexUL].offsetHeight - arrayUL[elSpan.indexUL].elemLineAndArrow.offsetTop  + "px"; // set height of panel
			} else {
				elementPanel.style.display = "none"; // hide all other panels
				arrayUL[elSpan.indexUL].arrayLI[counterF].getElementsByTagName("span")[0].style.color = "#505050";
			}
		}
	}
}

addLoadEvent(CAGOVTabpanel.initTabpanel);
