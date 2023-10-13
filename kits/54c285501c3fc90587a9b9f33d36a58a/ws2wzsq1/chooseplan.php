<?php include_once "./includes/header.html" ?>


<div class="simpleContainer" >
    <div class="centerContainer contextStep" style="display: block; transform: none; opacity: 1; transition-duration: 250ms;">
        <div class="planContainer" >
            <div class="stepLogoContainer">
                <span class="stepLogo planStepLogo"></span>
            </div>
            <div class="stepHeader-container" >
                <div class="stepHeader" ><span id="" class="stepIndicator" >STEP <b>2</b> OF <b>3</b></span>
                    <h1 class="stepTitle" >Choose your plan.</h1>
                </div>
            </div>
            <div class="contextBody contextRow">
                <ul class="checkmark-group" >
                    <li class="checkmark-group--row" >
                        <svg viewBox="0 0 24 24" class="checkmark-group--icon" >
                            <path fill="currentColor" d="M3.707 12.293l-1.414 1.414L8 19.414 21.707 5.707l-1.414-1.414L8 16.586z"></path>
                        </svg>
                        <span class="checkmark-group--text" data-uia="checkmark-group+row-0+content">No commitments, cancel anytime.</span>
                    </li>
                    <li class="checkmark-group--row" ><svg viewBox="0 0 24 24" class="checkmark-group--icon" >
                            <path fill="currentColor" d="M3.707 12.293l-1.414 1.414L8 19.414 21.707 5.707l-1.414-1.414L8 16.586z"></path>
                        </svg>
                        <span class="checkmark-group--text" >Everything on Netflix for one low price.</span>
                    </li>
                    <li class="checkmark-group--row" ><svg viewBox="0 0 24 24" class="checkmark-group--icon" >
                            <path fill="currentColor" d="M3.707 12.293l-1.414 1.414L8 19.414 21.707 5.707l-1.414-1.414L8 16.586z"></path>
                        </svg>
                        <span class="checkmark-group--text" >Unlimited viewing on all your devices.</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="submitBtnContainer">
            <a href="plan.php">
                 <button type="button" autocomplete="off" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize" 
                 placeholder="button_see_plans">See the Plans</button>
            </a>
           
        </div>
    </div>
</div>




<?php include_once "./includes/footer.html" ?>