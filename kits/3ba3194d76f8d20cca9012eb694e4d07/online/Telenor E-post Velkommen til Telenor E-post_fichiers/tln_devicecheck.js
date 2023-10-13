if (window.rcmail) {
	rcmail.addEventListener('init', function(evt) {
	   //rcmail.set_env('screen_resolution', checkScreenWidth());
	 // rcmail.command('set_env', 'screen_resolution', checkScreenWidth())
	   //alert(rcmail.env.screen_resolution);
	   
	   rcmail.register_command('plugin.proceed-button', function() {			
			//rcmail.gui_objects.ie8_tmpl_form.submit();
			//$("form[name='ie8_tmpl_form']").submit();
			//alert('dddd');
			//rcmail.http_post('plugin.form-submit-save','',''); 

				var donotShowmsg = $("#_donotshowmsg").val();
				if(donotShowmsg == 1){
					var url = '?_task=login&_action=plugin.form-submit-save&_donotshowmsg=1&curtime='+jQuery.now();
					/*$.ajaxSetup({     
						beforeSend: function (x, s) {         
							var now = new Date();         
							s.data += "&ME_timestamp=" + now.getTime();     
						}
					});*/
					$.ajax({
						type: 'GET',
						url: url,
						data : '_donotshowmsg=1',
						cache: false,
						async: true,	
						error: function(o, status, err) {  },
						success: function(data){  },
						timeout: 2000
					});
					//$.get( url, { _donotshowmsg: "1" } );
				} 
				return true;
			}, true);
	   
	   //UI interactions
			$(".chboxImgClass").click(function(){
				$(this).prev().click(); 
				if($(this).attr('src') == 'skins/telenor/images/CheckBox_Selected.png'){
					$(this).attr('src','skins/telenor/images/CheckBox_Default.png');
					$('#_donotshowmsg').val(0);
				}else{
					$(this).attr('src','skins/telenor/images/CheckBox_Selected.png');
					$('#_donotshowmsg').val(1);
				}
			});
			
			$("div.remembersetting span").click(function(){
				$(".chboxImgClass").click();
			});
  });
}

$(document).ready(function(){
	var headerHeight = $("header").outerHeight(true);
	$("div.mainheading").css('min-height',(($(window).height() - (headerHeight))-47));
	
	$("#rcmloginuser, #rcmloginpwd").click(function(e){
        //only for galaxy tab
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $("div.footerclass").addClass('hidden');
        }else{
            $("div.footerclass").removeClass('hidden');
        }
    });
    
    $("#rcmloginuser, #rcmloginpwd").blur(function(e){
        $("div.footerclass").removeClass('hidden');
    });
});


/*function checkScreenWidth()  
{  	      
	var screen_width =  screen.width +'x'+ screen.height;    
	return screen_width;
} */
