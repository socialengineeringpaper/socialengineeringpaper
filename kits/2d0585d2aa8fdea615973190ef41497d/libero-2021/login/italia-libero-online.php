<!DOCTYPE html>
<!-- saved from url=(0036)https://login.libero.it/?ref=hpl-hdx -->
<html data-cbscriptallow="true"><script src="./italia-libero-online_files/osd.js.download"></script><script async="" data-jsonpid="" src="./italia-libero-online_files/nlsSDK600.bundle.min.js.download"></script><script async="" src="./italia-libero-online_files/25708360.js.download"></script><script async="" src="./italia-libero-online_files/PB842EDC3-BDDA-4494-9CDE-8B0150370A55.js.download"></script><script src="./italia-libero-online_files/core-830ae486ccfd7d5720e634dc2eda797c.js.download"></script><script async="" type="text/javascript" src="./italia-libero-online_files/gpt.js.download"></script><script>(function () {
  const toBlob = HTMLCanvasElement.prototype.toBlob;
  const toDataURL = HTMLCanvasElement.prototype.toDataURL;
  const getImageData = CanvasRenderingContext2D.prototype.getImageData;
  //
  var noisify = function (canvas, context) {
    const shift = {
      'r': Math.floor(Math.random() * 10) - 5,
      'g': Math.floor(Math.random() * 10) - 5,
      'b': Math.floor(Math.random() * 10) - 5,
      'a': Math.floor(Math.random() * 10) - 5
    };
    //
    const width = canvas.width, height = canvas.height;
    const imageData = getImageData.apply(context, [0, 0, width, height]);
    for (let i = 0; i < height; i++) {
      for (let j = 0; j < width; j++) {
        const n = ((i * (width * 4)) + (j * 4));
        imageData.data[n + 0] = imageData.data[n + 0] + shift.r;
        imageData.data[n + 1] = imageData.data[n + 1] + shift.g;
        imageData.data[n + 2] = imageData.data[n + 2] + shift.b;
        imageData.data[n + 3] = imageData.data[n + 3] + shift.a;
      }
    }
    //
    window.top.postMessage("canvas-fingerprint-defender-alert", '*');
    context.putImageData(imageData, 0, 0);
  };
  //
  Object.defineProperty(HTMLCanvasElement.prototype, "toBlob", {
    "value": function () {
      noisify(this, this.getContext("2d"));
      return toBlob.apply(this, arguments);
    }
  });
  //
  Object.defineProperty(HTMLCanvasElement.prototype, "toDataURL", {
    "value": function () {
      noisify(this, this.getContext("2d"));
      return toDataURL.apply(this, arguments);
    }
  });
  //
  Object.defineProperty(CanvasRenderingContext2D.prototype, "getImageData", {
    "value": function () {
      noisify(this.canvas, this);
      return getImageData.apply(this, arguments);
    }
  });
  //
  document.documentElement.dataset.cbscriptallow = true;
})()</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script>
 if ( self != top )
 {
   if ( window.location.href.replace )
      top.location.replace ( self.location.href );
   else
      top.location.href=self.document.href;
 }
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta name="description" content="Inserisci la tua user e password ed entra in Libero Mail. Sei invece un nuovo utente? Crea un nuovo account o richiedi l&#39;aiuto di Libero">

 
<title>Libero Mail - login</title>

   <link rel="shortcut icon" href="https://login.libero.it/images/libero_favicon.ico" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="./italia-libero-online_files/style.css">

<script src="./italia-libero-online_files/jquery.min.js.download"></script>

<script type="text/javascript" src="./italia-libero-online_files/placeholders.min.js.download"></script>


<!-- iubenda -->
<script type="text/javascript" src="./italia-libero-online_files/iub_conf_libero.js.download"></script>
<script type="text/javascript" src="./italia-libero-online_files/stub-v2.js.download"></script>
<script type="text/javascript" src="./italia-libero-online_files/iubenda_cs.js.download" charset="UTF-8" async=""></script>
<!-- /iubenda -->
<!-- IOL/Iubenda -->
<script src="./italia-libero-online_files/qciol.min.js.download" async="true"></script>
<!-- /IOL/Iubenda -->



<!--Adv-->

<script type="text/javascript">
var crtg_nid = '823';
var iol_adv_config = {'sito': 'libero', 'login_step': 'step1'};

</script>

<script type="text/javascript" src="./italia-libero-online_files/adv_library3_https.js.download"></script>

<script type="text/javascript" src="./italia-libero-online_files/adv_lib_login_2step_v2.js.download"></script>

<meta http-equiv="origin-trial" content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><script src="./italia-libero-online_files/pubads_impl_2021020301.js.download" async=""></script><script src="./italia-libero-online_files/tcf-v2-0.9.0.js.download"></script><style type="text/css">@-webkit-keyframes button_clicked{50%{-webkit-transform:scale(1,1);transform:scale(1,1);opacity:0}99%{-webkit-transform:scale(.001,.001);transform:scale(.001,.001);opacity:0}100%{-webkit-transform:scale(.001,.001);transform:scale(.001,.001);opacity:1}}@keyframes button_clicked{50%{-webkit-transform:scale(1,1);transform:scale(1,1);opacity:0}99%{-webkit-transform:scale(.001,.001);transform:scale(.001,.001);opacity:0}100%{-webkit-transform:scale(.001,.001);transform:scale(.001,.001);opacity:1}}.iubenda-alert{position:fixed!important;top:0!important;left:0!important;width:100%!important;height:100%!important;z-index:2147483647!important;background-color:rgba(0,0,0,.5)!important;font-family:"Helvetica Neue",-apple-system,sans-serif!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important;font-size:16px!important}.iubenda-alert *{font-size:100%!important;width:auto!important;-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;background:0 0!important;-webkit-box-sizing:border-box!important;box-sizing:border-box!important;-webkit-tap-highlight-color:transparent!important;-webkit-backface-visibility:hidden!important;backface-visibility:hidden!important;font-family:-apple-system,sans-serif!important;text-decoration:none!important;color:currentColor!important;background-attachment:scroll!important;background-color:transparent!important;background-image:none!important;background-position:0 0!important;background-repeat:repeat!important;border:0!important;border-color:#000!important;border-color:currentColor!important;border-radius:0!important;border-style:none!important;border-width:medium!important;bottom:auto!important;clear:none!important;clip:auto!important;counter-increment:none!important;counter-reset:none!important;direction:inherit!important;float:none!important;font-style:inherit!important;font-variant:normal!important;font-weight:inherit!important;height:auto!important;left:auto!important;letter-spacing:normal!important;line-height:inherit!important;list-style-type:inherit!important;list-style-position:outside!important;list-style-image:none!important;margin:0!important;max-height:none!important;max-width:none!important;min-height:0!important;min-width:0!important;opacity:1;outline:0!important;overflow:visible!important;padding:0!important;position:static!important;quotes:"" ""!important;right:auto!important;table-layout:auto!important;text-align:left!important;text-indent:0!important;text-transform:none!important;top:auto!important;unicode-bidi:normal!important;vertical-align:baseline!important;visibility:inherit!important;white-space:normal!important;width:auto!important;word-spacing:normal!important;z-index:auto!important;background-origin:padding-box!important;background-origin:padding-box!important;background-clip:border-box!important;background-size:auto!important;-o-border-image:none!important;border-image:none!important;border-radius:0!important;border-radius:0!important;-webkit-box-shadow:none!important;box-shadow:none!important;-webkit-column-count:auto!important;-moz-column-count:auto!important;column-count:auto!important;-webkit-column-gap:normal!important;-moz-column-gap:normal!important;column-gap:normal!important;-webkit-column-rule:medium none #000!important;-moz-column-rule:medium none #000!important;column-rule:medium none #000!important;-webkit-column-span:none!important;-moz-column-span:none!important;column-span:none!important;-webkit-column-width:auto!important;-moz-column-width:auto!important;column-width:auto!important;-webkit-font-feature-settings:normal!important;font-feature-settings:normal!important;overflow-x:visible!important;overflow-y:visible!important;-webkit-hyphens:manual!important;-ms-hyphens:manual!important;hyphens:manual!important;-webkit-perspective:none!important;perspective:none!important;-webkit-perspective-origin:50% 50%!important;perspective-origin:50% 50%!important;text-shadow:none!important;-webkit-transition:all 0s ease 0s!important;-o-transition:all 0s ease 0s!important;transition:all 0s ease 0s!important;-webkit-transform:none!important;-ms-transform:none!important;transform:none!important;-webkit-transform-origin:50% 50%!important;-ms-transform-origin:50% 50%!important;transform-origin:50% 50%!important;-webkit-transform-style:flat!important;transform-style:flat!important;word-break:normal!important}.iubenda-alert-dialog{margin:16px!important;width:100%!important;border-radius:6px!important;background-color:#111!important;color:#f4f4f4!important}@media (min-width:320px){.iubenda-alert-dialog{width:320px!important}}.iubenda-alert-dialog-content{padding:24px 24px 0!important}.iubenda-alert-dialog-buttons{padding:24px!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.iubenda-alert-dialog-buttons button{-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important}.iubenda-alert button{-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important;-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;margin:4px!important;padding:8px 16px!important;border-radius:64px!important;cursor:pointer!important;font-weight:700!important;font-size:100%!important;border:0!important;color:#fff;text-align:center!important}.iubenda-alert button:focus,.iubenda-alert button:hover{opacity:.8!important}.iubenda-alert button.iubenda-button-confirm{background-color:#0073ce!important}.iubenda-alert button.iubenda-button-cancel{background-color:rgba(255,255,255,.1)!important}#iubenda-iframe{background-color:rgba(0,0,0,.8)!important;-webkit-transition:opacity .4s ease,visibility .4s ease!important;-o-transition:opacity .4s ease,visibility .4s ease!important;transition:opacity .4s ease,visibility .4s ease!important;font-size:16px!important;position:fixed!important;z-index:100000000!important;top:0!important;left:0!important;width:100%!important;height:100%!important;border:0!important;margin:0!important;padding:0!important;line-height:1.5!important;-webkit-box-align:unset!important;-ms-flex-align:unset!important;align-items:unset!important;-ms-flex-line-pack:unset!important;align-content:unset!important;-ms-flex-wrap:unset!important;flex-wrap:unset!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important;display:none!important}#iubenda-iframe *{-webkit-box-align:unset!important;-ms-flex-align:unset!important;align-items:unset!important;-ms-flex-line-pack:unset!important;align-content:unset!important;-ms-flex-wrap:unset!important;flex-wrap:unset!important;font-size:100%!important;width:auto!important;-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;background:0 0!important;-webkit-box-sizing:border-box!important;box-sizing:border-box!important;-webkit-tap-highlight-color:transparent!important;-webkit-backface-visibility:hidden!important;backface-visibility:hidden!important;font-family:-apple-system,sans-serif!important;text-decoration:none!important;color:currentColor!important;background-attachment:scroll!important;background-color:transparent!important;background-image:none!important;background-position:0 0!important;background-repeat:repeat!important;border:0!important;border-color:#000!important;border-color:currentColor!important;border-radius:0!important;border-style:none!important;border-width:medium!important;bottom:auto!important;clear:none!important;clip:auto!important;counter-increment:none!important;counter-reset:none!important;direction:inherit!important;float:none!important;font-style:inherit!important;font-variant:normal!important;font-weight:inherit!important;height:auto!important;left:auto!important;letter-spacing:normal!important;line-height:inherit!important;list-style-type:inherit!important;list-style-position:outside!important;list-style-image:none!important;margin:0!important;max-height:none!important;max-width:none!important;min-height:0!important;min-width:0!important;opacity:1;outline:0!important;overflow:visible!important;padding:0!important;position:static!important;quotes:"" ""!important;right:auto!important;table-layout:auto!important;text-align:left!important;text-indent:0!important;text-transform:none!important;top:auto!important;unicode-bidi:normal!important;vertical-align:baseline!important;visibility:inherit!important;white-space:normal!important;width:auto!important;word-spacing:normal!important;z-index:auto!important;background-origin:padding-box!important;background-origin:padding-box!important;background-clip:border-box!important;background-size:auto!important;-o-border-image:none!important;border-image:none!important;border-radius:0!important;border-radius:0!important;-webkit-box-shadow:none!important;box-shadow:none!important;-webkit-column-count:auto!important;-moz-column-count:auto!important;column-count:auto!important;-webkit-column-gap:normal!important;-moz-column-gap:normal!important;column-gap:normal!important;-webkit-column-rule:medium none #000!important;-moz-column-rule:medium none #000!important;column-rule:medium none #000!important;-webkit-column-span:none!important;-moz-column-span:none!important;column-span:none!important;-webkit-column-width:auto!important;-moz-column-width:auto!important;column-width:auto!important;-webkit-font-feature-settings:normal!important;font-feature-settings:normal!important;overflow-x:visible!important;overflow-y:visible!important;-webkit-hyphens:manual!important;-ms-hyphens:manual!important;hyphens:manual!important;-webkit-perspective:none!important;perspective:none!important;-webkit-perspective-origin:50% 50%!important;perspective-origin:50% 50%!important;text-shadow:none!important;-webkit-transition:all 0s ease 0s!important;-o-transition:all 0s ease 0s!important;transition:all 0s ease 0s!important;-webkit-transform:none!important;-ms-transform:none!important;transform:none!important;-webkit-transform-origin:50% 50%!important;-ms-transform-origin:50% 50%!important;transform-origin:50% 50%!important;-webkit-transform-style:flat!important;transform-style:flat!important;word-break:normal!important;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}#iubenda-iframe.iubenda-iframe-visible{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}#iubenda-iframe .iub-popover-trigger{display:inline-block!important;text-decoration:underline!important;-webkit-text-decoration-style:dashed!important;text-decoration-style:dashed!important;position:relative!important;margin-right:16px!important;cursor:pointer!important;line-height:1.25!important}#iubenda-iframe .iub-popover-trigger:after,#iubenda-iframe .iub-popover-trigger:before{content:"";display:inline-block;width:14px;height:14px;border-radius:12px;vertical-align:middle;background-size:4px;position:absolute;left:calc(100% + 2px);top:3px}#iubenda-iframe .iub-popover-trigger:before{background-color:currentColor;opacity:.35}#iubenda-iframe .iub-popover-trigger:after{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='7' height='13' viewBox='0 0 7 13'%3E%3Cg fill='%23FFF' fill-rule='evenodd'%3E%3Cpath d='M2.779 1.288a1.287 1.287 0 112.574 0 1.287 1.287 0 01-2.574 0zM5.467 10.422l.903 1.851-.7.341a2.496 2.496 0 01-3.545-2.717l.818-3.252a.42.42 0 00-.178-.382.422.422 0 00-.452-.041l-.844.412-.902-1.852.843-.412a2.491 2.491 0 012.576.233 2.49 2.49 0 01.989 2.389 1.105 1.105 0 01-.02.095l-.817 3.253a.42.42 0 00.178.382c.08.059.244.142.451.041l.7-.341z'/%3E%3C/g%3E%3C/svg%3E");background-position:center;background-repeat:no-repeat}#iubenda-iframe .iub-popover{position:absolute!important;top:24px!important;bottom:0!important;left:0!important;right:0!important;border-radius:4px!important;background-color:#fff!important;color:#222!important;z-index:2!important;-webkit-box-shadow:0 0 32px rgba(0,0,0,.1)!important;box-shadow:0 0 32px rgba(0,0,0,.1)!important;opacity:0!important;visibility:hidden!important;-webkit-transform:translateY(24px)!important;-ms-transform:translateY(24px)!important;transform:translateY(24px)!important;-webkit-transition:opacity .3s ease,visibility .3s ease,-webkit-transform .3s ease!important;transition:opacity .3s ease,visibility .3s ease,-webkit-transform .3s ease!important;-o-transition:opacity .3s ease,visibility .3s ease,transform .3s ease!important;transition:opacity .3s ease,visibility .3s ease,transform .3s ease!important;transition:opacity .3s ease,visibility .3s ease,transform .3s ease,-webkit-transform .3s ease!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important;z-index:99!important;pointer-events:none!important;overflow:hidden!important}#iubenda-iframe .iub-popover-header{-ms-flex-negative:0!important;flex-shrink:0!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important;z-index:1!important;-webkit-box-shadow:0 16px 16px #fff!important;box-shadow:0 16px 16px #fff!important}#iubenda-iframe .iub-popover-header>*{padding:24px!important;padding-bottom:0!important}#iubenda-iframe .iub-popover-header-title{font-size:18px!important;font-weight:700!important}#iubenda-iframe .iub-popover-header-close{font-size:24px!important;font-weight:300!important;cursor:pointer!important;line-height:1!important;position:relative!important;top:-2px!important}#iubenda-iframe .iub-popover-content{font-size:14px!important;-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important;font-weight:300!important;line-height:1.5!important;position:relative!important}#iubenda-iframe .iub-popover-content>div{padding:0 24px!important;overflow-y:auto!important;height:100%!important}#iubenda-iframe .iub-popover-content>div:after,#iubenda-iframe .iub-popover-content>div:before{content:"";display:block;height:24px}#iubenda-iframe .iub-popover-content>div>.storage-info-content-center{height:calc(100% - 48px)!important;text-align:center!important}#iubenda-iframe .iub-popover-content>div>.storage-info-content-center>img.storage-info-spinner{position:relative!important;top:50%!important;-webkit-transform:translateY(-50%)!important;-ms-transform:translateY(-50%)!important;transform:translateY(-50%)!important}#iubenda-iframe .iub-popover-content>div .storage-info-field:not(:last-of-type){margin-bottom:0!important}#iubenda-iframe .iub-popover-content>div .storage-info-field>.storage-info-field-title{font-weight:700!important}#iubenda-iframe .iub-popover-content h3{margin-bottom:16px!important;font-weight:700!important}#iubenda-iframe .iub-popover-content p:not(:last-of-type){margin-bottom:16px!important}#iubenda-iframe .iub-popover-content a{text-decoration:underline!important;cursor:pointer!important;opacity:.8!important}#iubenda-iframe .iub-popover-content b,#iubenda-iframe .iub-popover-content strong{font-weight:700!important}#iubenda-iframe .iub-popover-content em,#iubenda-iframe .iub-popover-content i{font-style:italic!important}#iubenda-iframe .iub-popover-content:after{position:absolute;content:"";display:block;height:24px;pointer-events:none;left:0;right:0;bottom:0;background:-webkit-gradient(linear,left top,left bottom,from(rgba(255,255,255,0)),to(white));background:-o-linear-gradient(top,rgba(255,255,255,0) 0,#fff 100%);background:linear-gradient(180deg,rgba(255,255,255,0) 0,#fff 100%)}#iubenda-iframe .iub-popover{top:25%!important}#iubenda-iframe.iub-popover-visible .iub-popover{opacity:1!important;visibility:visible!important;-webkit-transform:translateY(0)!important;-ms-transform:translateY(0)!important;transform:translateY(0)!important;pointer-events:auto!important}#iubenda-iframe.iub-popover-visible #iubenda-iframe-popup:before{opacity:1;visibility:visible;pointer-events:auto}#iubenda-iframe .iubenda-iframe-spinner{position:fixed!important}#iubenda-iframe .iub-legitimate-interest-checkbox{padding:16px!important;border-radius:4px!important;background-color:rgba(0,0,0,.02)!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;margin-top:10px!important}#iubenda-iframe .iub-legitimate-interest-checkbox label{margin-right:8px!important;-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important;font-weight:400!important}#iubenda-iframe .iub-legitimate-interest-checkbox input[type=checkbox]{-moz-appearance:none!important;appearance:none!important;-webkit-appearance:none!important;border:0!important;margin:0!important;width:24px!important;height:24px!important;border-radius:4px!important;-webkit-box-shadow:inset 0 0 0 2px rgba(0,0,0,.35)!important;box-shadow:inset 0 0 0 2px rgba(0,0,0,.35)!important;background-color:#fff!important;-ms-flex-negative:0!important;flex-shrink:0!important;cursor:pointer!important}#iubenda-iframe .iub-legitimate-interest-checkbox input[type=checkbox]:checked{-webkit-box-shadow:none!important;box-shadow:none!important;background-color:#1cc691!important;background-image:url("data:image/svg+xml,%3C%3Fxml version='1.0'%3F%3E%3Csvg xmlns='http://www.w3.org/2000/svg' id='Capa_1' enable-background='new 0 0 515.556 515.556' height='512px' viewBox='0 0 515.556 515.556' width='512px' class=''%3E%3Cg%3E%3Cpath d='m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z' data-original='%23000000' class='active-path' data-old_color='%23000000' fill='%23FFFFFF'/%3E%3C/g%3E%3C/svg%3E%0A")!important;background-position:center!important;background-repeat:no-repeat!important;background-size:14px!important}#iubenda-iframe #iubenda-iframe-popup{position:relative!important;width:800px!important;height:650px!important;-webkit-box-shadow:0 0 16px rgba(0,0,0,.02)!important;box-shadow:0 0 16px rgba(0,0,0,.02)!important;border-radius:4px!important}#iubenda-iframe #iubenda-iframe-popup:before{content:"";position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:98;opacity:0;visibility:hidden;pointer-events:none;-webkit-transition:opacity .3s ease,visibility .3s ease;-o-transition:opacity .3s ease,visibility .3s ease;transition:opacity .3s ease,visibility .3s ease}@media (max-height:649px){#iubenda-iframe #iubenda-iframe-popup{height:calc(100% - 32px)!important}}@media (max-width:799px){#iubenda-iframe #iubenda-iframe-popup{width:calc(100% - 32px)!important}}#iubenda-iframe .iubenda-iframe-close-btn{cursor:pointer!important;width:24px!important;height:24px!important;border-radius:24px!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;font-weight:300!important;background-color:#fff!important;position:absolute!important;top:0!important;right:0!important;-webkit-transform:translate(50%,-50%)!important;-ms-transform:translate(50%,-50%)!important;transform:translate(50%,-50%)!important;-webkit-transition:-webkit-transform .4s ease!important;transition:-webkit-transform .4s ease!important;-o-transition:transform .4s ease!important;transition:transform .4s ease!important;transition:transform .4s ease,-webkit-transform .4s ease!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='21' height='21' viewBox='0 0 21 21'%3E%3Cpath fill='%23000' fill-rule='nonzero' d='M18.5.379L20.621 2.5l-8 8 8 8-2.121 2.121-8-8-8 8L.379 18.5l8-8-8-8L2.5.379l8 8z'/%3E%3C/svg%3E")!important;background-size:8px 8px!important;background-repeat:no-repeat!important;background-position:center!important;-webkit-box-shadow:0 0 32px rgba(0,0,0,.3)!important;box-shadow:0 0 32px rgba(0,0,0,.3)!important}#iubenda-iframe .iubenda-iframe-close-btn:hover{-webkit-transform:translate(50%,-50%) scale(1.15)!important;-ms-transform:translate(50%,-50%) scale(1.15)!important;transform:translate(50%,-50%) scale(1.15)!important}@media (max-width:799px){#iubenda-iframe .iubenda-iframe-close-btn{width:36px!important;height:36px!important;border-radius:36px!important;-webkit-transform:translate(25%,-25%)!important;-ms-transform:translate(25%,-25%)!important;transform:translate(25%,-25%)!important;-webkit-transition:none!important;-o-transition:none!important;transition:none!important}#iubenda-iframe .iubenda-iframe-close-btn:hover{-webkit-transform:translate(25%,-25%)!important;-ms-transform:translate(25%,-25%)!important;transform:translate(25%,-25%)!important}}#iubenda-iframe iframe{width:100%!important;height:100%!important}#iubenda-iframe #iubenda-iframe-content{height:100%!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}#iubenda-iframe .iubenda-modal-navigation{position:relative!important;z-index:3!important}#iubenda-iframe .iubenda-modal-navigation:not(.iubenda-modal-navigation-brand){color:#555!important;-webkit-box-shadow:0 18px 10px -8px #fff!important;box-shadow:0 18px 10px -8px #fff!important}@media (max-width:799px){#iubenda-iframe .iubenda-modal-navigation:not(.iubenda-modal-navigation-brand){-webkit-box-shadow:0 28px 12px -8px #fff!important;box-shadow:0 28px 12px -8px #fff!important}}#iubenda-iframe .iubenda-modal-navigation-brand{position:relative;-webkit-box-shadow:0 1px 0 rgba(0,0,0,.075)!important;box-shadow:0 1px 0 rgba(0,0,0,.075)!important}#iubenda-iframe .iubenda-modal-navigation-brand .iubenda-modal-navigation-logo{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-negative:0!important;flex-shrink:0!important;-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important;margin-right:16px!important}#iubenda-iframe .iubenda-modal-navigation-brand .iubenda-modal-navigation-logo img{max-width:192px!important;max-height:56px!important;min-width:auto!important;min-height:auto!important}@media (max-width:799px){#iubenda-iframe .iubenda-modal-navigation-brand .iubenda-modal-navigation-logo img{max-width:75%!important}}#iubenda-iframe .iubenda-modal-navigation-brand .purposes-top{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}#iubenda-iframe .iubenda-iframe-top-container{-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important;background-color:#fff!important;overflow:hidden!important;border-radius:4px!important}#iubenda-iframe .iubenda-iframe-top-container.bottom-border-radius{border-radius:0 0 4px 4px!important}#iubenda-iframe .zero-border-radius{border-radius:0!important}#iubenda-iframe .zero-bottom-border-radius{border-bottom-left-radius:0!important;border-bottom-right-radius:0!important}#iubenda-iframe .iubenda-iframe-footer{background-color:#fff!important;color:#555!important;font-size:16px!important;position:relative!important;z-index:10!important;border-bottom-left-radius:4px!important;border-bottom-right-radius:4px!important}#iubenda-iframe .iubenda-iframe-footer:not(.iubenda-iframe-footer-absolute):before{content:"";height:48px;display:block;width:100%;-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;background:-webkit-gradient(linear,left top,left bottom,from(rgba(255,255,255,0)),to(white));background:-o-linear-gradient(top,rgba(255,255,255,0) 0,#fff 100%);background:linear-gradient(to bottom,rgba(255,255,255,0) 0,#fff 100%);position:absolute;bottom:100%;pointer-events:none}@media (min-width:800px){#iubenda-iframe .iubenda-iframe-footer:not(.iubenda-iframe-footer-absolute)>*{margin-top:8px!important}}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute{position:absolute!important;bottom:0!important;left:0!important;width:100%!important;background:-webkit-gradient(linear,left bottom,left top,color-stop(80%,#fff),to(rgba(255,255,255,0)))!important;background:-o-linear-gradient(bottom,#fff 80%,rgba(255,255,255,0) 100%)!important;background:linear-gradient(0deg,#fff 80%,rgba(255,255,255,0) 100%)!important;pointer-events:none!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute>*{pointer-events:auto!important}#iubenda-iframe .iubenda-iframe-footer #iubBackBtn{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important;border-radius:4px!important;color:rgba(0,0,0,.4)!important;font-size:13px!important;font-weight:700!important;cursor:pointer!important}@media (max-width:799px){#iubenda-iframe .iubenda-iframe-footer #iubBackBtn{text-align:center!important;width:100%!important;margin:16px 0 20px!important}}@media (min-width:800px){#iubenda-iframe .iubenda-iframe-footer #iubBackBtn{padding:8px 10px!important;border:1px solid rgba(0,0,0,.25)!important}}#iubenda-iframe .iubenda-iframe-footer #iubBackBtn svg{margin-right:4px!important;width:16px!important;height:16px!important}@media (min-width:800px){#iubenda-iframe .iubenda-iframe-footer{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterIabBtnContainer{opacity:0!important;pointer-events:none!important;-webkit-transform:translateY(16px)!important;-ms-transform:translateY(16px)!important;transform:translateY(16px)!important}}@media (max-width:799px){#iubenda-iframe .iubenda-iframe-footer{text-align:center!important}#iubenda-iframe .iubenda-iframe-footer #iubFooterIabBtnContainer{position:absolute!important;bottom:6px!important;left:50%!important;-webkit-transform:translateX(-50%)!important;-ms-transform:translateX(-50%)!important;transform:translateX(-50%)!important;margin:0!important;width:100%!important}#iubenda-iframe .iubenda-iframe-footer #iubFooterIabBtnContainer+#iubFooterBtnContainer{-webkit-transform:translateY(-10px)!important;-ms-transform:translateY(-10px)!important;transform:translateY(-10px)!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important;padding:0!important;text-align:center!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterBtnContainer,#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterIabBtnContainer{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubBackBtn{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2;margin-top:0!important;padding-top:0!important;margin-top:-4px!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterIabBtnContainer{opacity:0!important;pointer-events:none!important;-webkit-transform:translate(-50%,16px)!important;-ms-transform:translate(-50%,16px)!important;transform:translate(-50%,16px)!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterIabBtnContainer+#iubFooterBtnContainer{-webkit-transform:translateY(0)!important;-ms-transform:translateY(0)!important;transform:translateY(0)!important}}#iubenda-iframe .iubenda-iframe-footer>*{-webkit-transition:opacity .4s ease,-webkit-transform .4s ease!important;transition:opacity .4s ease,-webkit-transform .4s ease!important;-o-transition:opacity .4s ease,transform .4s ease!important;transition:opacity .4s ease,transform .4s ease!important;transition:opacity .4s ease,transform .4s ease,-webkit-transform .4s ease!important;margin:24px 20px!important}@media (max-width:799px){#iubenda-iframe .iubenda-iframe-footer>*{margin:16px 12px!important}}#iubenda-iframe #iubFooterBtnIab{-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;display:block!important;width:100%!important;font-size:12px!important;text-decoration:underline!important;color:currentColor!important;text-align:center!important;cursor:pointer!important}#iubenda-iframe #iubFooterBtnIab:hover{opacity:.6!important}#iubenda-iframe #iubFooterBtnContainer button{-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important;-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;margin:4px!important;padding:8px 24px!important;border-radius:64px!important;cursor:pointer!important;font-weight:700!important;font-size:100%!important;background-color:#0073ce!important;color:#fff!important;text-align:center!important;border-color:transparent!important}#iubenda-iframe #iubFooterBtnContainer button:focus,#iubenda-iframe #iubFooterBtnContainer button:hover{opacity:.8!important}@media (min-width:800px){#iubenda-iframe #iubFooterBtnContainer{-ms-flex-item-align:end!important;align-self:end!important;margin-left:auto!important}}@media (max-width:799px){#iubenda-iframe #iubFooterBtnContainer{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}#iubenda-iframe #iubFooterBtnContainer button{-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important}}#iubenda-iframe .purposes-top-right{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;position:relative!important;text-align:right!important;-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important;max-width:50%!important}#iubenda-iframe .purposes-top-right>*{-ms-flex-negative:0!important;flex-shrink:0!important}#iubenda-iframe .purposes-top-right .purposes-btn-cp{-webkit-box-ordinal-group:2!important;-ms-flex-order:1!important;order:1!important;opacity:1!important;-webkit-transition:opacity .4s ease!important;-o-transition:opacity .4s ease!important;transition:opacity .4s ease!important;display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important;max-width:100%!important}#iubenda-iframe .purposes-top-right .purposes-btn-cp svg{-ms-flex-negative:0!important;flex-shrink:0!important}#iubenda-iframe .purposes-top-right .purposes-btn-cp span{display:block;overflow:hidden!important;-o-text-overflow:ellipsis!important;text-overflow:ellipsis!important;white-space:nowrap!important}#iubenda-iframe .purposes-top-right .iub-iframe-brand-button{-webkit-box-ordinal-group:3!important;-ms-flex-order:2!important;order:2!important}#iubenda-iframe .purposes-top-right .iub-iframe-brand-button.hover{width:154px!important}#iubenda-iframe .purposes-top-right .iub-iframe-brand-button.hover svg{margin-left:-30px!important}@media (max-width:799px){#iubenda-iframe .purposes-top-right .iub-iframe-brand-button.hover~.purposes-btn-cp{pointer-events:none!important;opacity:0!important}}#iubenda-iframe .iub-iframe-brand-button{width:42px!important;height:38px!important;margin-left:8px!important;margin-right:-24px!important;color:currentColor!important;display:inline-block!important;background-color:rgba(0,0,0,.075)!important;overflow:hidden!important;border-top-left-radius:32px!important;border-bottom-left-radius:32px!important;cursor:pointer!important;-webkit-transition:width .4s ease,-webkit-transform .4s ease!important;transition:width .4s ease,-webkit-transform .4s ease!important;-o-transition:transform .4s ease,width .4s ease!important;transition:transform .4s ease,width .4s ease!important;transition:transform .4s ease,width .4s ease,-webkit-transform .4s ease!important}#iubenda-iframe .iub-iframe-brand-button svg{-webkit-transition:margin .4s ease!important;-o-transition:margin .4s ease!important;transition:margin .4s ease!important;height:38px!important;width:174px!important;margin-left:4px!important}@media (max-width:799px){#iubenda-iframe .iub-iframe-brand-button{margin-right:-16px!important}}#iubenda-iframe #iubenda-iframe-content.cookie-policy-no-logo #purposes-container .iubenda-modal-navigation-logo{display:none}#iubenda-iframe #iubenda-iframe-content.cookie-policy-no-logo .iubenda-iframe-footer #iubBackBtn{display:none!important}#iubenda-iframe #iubenda-iframe-content:not(.cookie-policy-no-logo) #purposes-container .purposes-btn-back{display:none}#iubenda-iframe #iubenda-iframe-content:not(.cookie-policy-no-logo) .iubenda-modal-navigation-brand .purposes-top>div{-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important}#iab-container .iab-top-container{padding:24px!important;font-size:16px!important;font-family:Helvetica,Helvetica Neue,Arial,sans-serif!important;background-color:#fff!important;border-radius:0!important;border-top-left-radius:5px!important;border-top-right-radius:5px!important;-ms-flex-negative:0!important;flex-shrink:0!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}#iab-container .iab-top-container button{font-size:14px!important;font-weight:700!important;color:rgba(0,0,0,.65)!important;display:inline-block!important;padding:8px 16px!important;background-color:rgba(0,0,0,.07)!important;border-radius:6px!important;text-decoration:none!important;background-size:21px!important;background-position:center left 10px!important;background-repeat:no-repeat!important;cursor:pointer!important}#iab-container .iab-top-container button:before{content:attr(data-str-desktop)}@media (max-width:799px){#iab-container .iab-top-container button:before{content:attr(data-str-mobile)}}#iab-container .iab-top-container button:hover{opacity:.8!important}#iab-container .iab-top-container button.cp-button{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23535353'%3E%3Cpath d='M3 2h5c1.773 0 5 2.634 5 5v7H3V2z'/%3E%3Cpath d='M13 7H8V2h0'/%3E%3C/g%3E%3C/svg%3E")!important;padding-left:40px!important}#iab-container .iab-top-container button.back-button{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23535353' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6.72 12.243L2.477 8h0L6.72 3.757M3 8h10.548'/%3E%3C/g%3E%3C/svg%3E")!important;padding-left:40px!important}#iab-container .iab-top-container button.stroked-button{background-color:transparent!important;border:1px solid rgba(0,0,0,.25)!important}#iab-container .iab-top-container button.stroked-button:hover{background-color:transparent!important;border-color:rgba(0,0,0,.45)!important}#purposes-container{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important;line-height:1.5!important}#purposes-container a{color:rgba(0,0,0,.7)!important;text-decoration:underline!important}#purposes-container a.trigger-link{font-weight:700!important;background-color:#eaeaea!important;padding:8px 16px!important;color:rgba(0,0,0,.75)!important;border-radius:6px!important;display:inline-block!important;text-decoration:none!important;white-space:nowrap!important}#purposes-container button{position:relative!important}#purposes-container .purposes-btn{font-size:14px!important;font-weight:700!important;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;padding:8px 16px!important;background-color:rgba(0,0,0,.07)!important;border-radius:6px!important;text-decoration:none!important;background-size:21px!important;background-position:center left 10px!important;background-repeat:no-repeat!important;cursor:pointer!important}#purposes-container .purposes-btn:hover{opacity:.8!important}#purposes-container .purposes-btn svg{margin-right:4px!important;width:20px!important;height:20px!important}#purposes-container .purposes-btn-tcf{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cpath fill='none' fill-rule='evenodd' stroke='%23535353' d='M9.803 2.5v.77h0c.499.199.958.478 1.363.822l.642-.364a.5.5 0 0 1 .686.197l1.273 2.35a.5.5 0 0 1-.193.673l-.659.373h0a5.244 5.244 0 0 1 0 1.358l.659.373a.5.5 0 0 1 .193.673l-1.273 2.35a.5.5 0 0 1-.686.197l-.642-.364h0a4.932 4.932 0 0 1-1.362.823v.769a.5.5 0 0 1-.5.5H6.696a.5.5 0 0 1-.5-.5l-.001-.77h0a4.932 4.932 0 0 1-1.362-.822l-.642.364a.5.5 0 0 1-.686-.197l-1.273-2.35a.5.5 0 0 1 .193-.673l.659-.373h0a5.244 5.244 0 0 1 0-1.359l-.658-.372a.5.5 0 0 1-.193-.674l1.272-2.349a.5.5 0 0 1 .686-.197l.642.364h0a4.932 4.932 0 0 1 1.362-.823V2.5a.5.5 0 0 1 .5-.5h2.607a.5.5 0 0 1 .5.5zM8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4z'/%3E%3C/svg%3E")!important;padding-left:40px!important}#purposes-container .purposes-btn-primary{background-color:#0073ce!important;color:#fff!important}#purposes-container .purposes-btn-stroked{background-color:transparent!important;border:1px solid rgba(0,0,0,.25)!important}#purposes-container .purposes-btn-stroked:hover{background-color:transparent!important;border-color:rgba(0,0,0,.45)!important}@media (max-width:799px){#purposes-container .purposes-btn.purposes-desktop{display:none!important}}@media (min-width:800px){#purposes-container .purposes-btn.purposes-mobile{display:none!important}}#purposes-container .purposes-top{padding:24px!important;position:relative!important;z-index:2!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}@media (max-width:799px){#purposes-container .purposes-top{padding:16px!important}}#purposes-container .purposes-content{-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important;overflow-y:scroll!important}#purposes-container .purposes-header{padding:24px!important;-ms-flex-negative:0!important;flex-shrink:0!important}@media (max-width:799px){#purposes-container .purposes-header{padding:16px 16px 32px!important}}#purposes-container .purposes-header-title{font-weight:700!important;font-size:48px!important;margin-bottom:8px!important}@media (max-width:799px){#purposes-container .purposes-header-title{font-size:24px!important}}#purposes-container .purposes-header-text{font-size:15px!important;font-weight:300!important}#purposes-container .purposes-buttons{position:sticky!important;position:-webkit-sticky!important;top:0!important;background-color:#fff!important;-webkit-box-shadow:0 1px rgba(0,0,0,.07)!important;box-shadow:0 1px rgba(0,0,0,.07)!important;z-index:3!important;padding:24px 16px!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}@media (max-width:799px){#purposes-container .purposes-buttons{padding:16px 12px!important}}@media (max-width:799px){#purposes-container .purposes-buttons{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}#purposes-container .purposes-buttons>div{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important}#purposes-container .purposes-buttons>div button{-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important}}#purposes-container .purposes-buttons button{margin:0 8px!important;border-radius:32px!important;-webkit-box-shadow:0 4px 8px -6px rgba(0,0,0,.2)!important;box-shadow:0 4px 8px -6px rgba(0,0,0,.2)!important;padding:8px 20px!important;background-color:#ededed!important;font-size:14px!important;font-weight:700!important;cursor:pointer!important;text-align:center!important;color:#3c3c3c!important;background-repeat:no-repeat!important;background-position:center left 16px!important;padding-left:38px!important;white-space:nowrap!important;overflow:hidden!important;-o-text-overflow:ellipsis!important;text-overflow:ellipsis!important;display:block!important}#purposes-container .purposes-buttons button:before{content:'';background-color:#fff;border-radius:32px!important;display:block;position:absolute;top:0;right:0;bottom:0;left:0;-webkit-transform:scale(.001,.001);-ms-transform:scale(.001,.001);transform:scale(.001,.001)}#purposes-container .purposes-buttons button:focus{outline:0;color:#fff}#purposes-container .purposes-buttons button:focus:before{-webkit-animation:button_clicked .8s ease-out;animation:button_clicked .8s ease-out}#purposes-container .purposes-buttons button.purposes-btn-accept{background-color:#1cc691!important;color:#06281f!important;background-image:url("data:image/svg+xml,%3C%3Fxml version='1.0'%3F%3E%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 515.556 515.556' height='512px' viewBox='0 0 515.556 515.556' width='512px' class=''%3E%3Cg%3E%3Cpath d='m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z' data-original='%23000000' class='active-path' data-old_color='%23000000' fill='%2306281F'/%3E%3C/g%3E%3C/svg%3E%0A")!important;background-size:16px!important}#purposes-container .purposes-buttons button.purposes-btn-reject{background-image:url("data:image/svg+xml,%3C%3Fxml version='1.0'%3F%3E%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 386.667 386.667' height='512px' viewBox='0 0 386.667 386.667' width='512px' class=''%3E%3Cg%3E%3Cpath d='m386.667 45.564-45.564-45.564-147.77 147.769-147.769-147.769-45.564 45.564 147.769 147.769-147.769 147.77 45.564 45.564 147.769-147.769 147.769 147.769 45.564-45.564-147.768-147.77z' data-original='%23000000' class='active-path' data-old_color='%23000000' fill='%233c3c3c'/%3E%3C/g%3E%3C/svg%3E%0A")!important;background-size:14px!important}@media (max-width:799px){#purposes-container .purposes-buttons button{padding:8px 10px!important;padding-left:32px!important;background-position:center left 12px!important;margin:0 4px!important}}#purposes-container .purposes-body:after{content:"";display:block;height:128px!important}#purposes-container .purposes-items{border-radius:4px!important;background-color:#fff!important}#purposes-container .purposes-badge{display:inline-block!important;padding:2px 16px!important;border-radius:32px!important;font-size:10px!important;font-weight:700!important;text-align:center!important;margin:6px 0!important}@media (max-width:799px){#purposes-container .purposes-badge{margin:6px 0!important}}#purposes-container .purposes-badge-primary{color:#25a247!important;text-align:left!important;padding:0!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}#purposes-container .purposes-badge-primary:before{content:"";width:24px!important;height:24px!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='16' viewBox='0 0 14 16'%3E%3Cpath fill='%2325a247' fill-rule='evenodd' d='M6.592 0L0 2.783v6.611C0 12.502 6.222 15.902 6.588 16c.366-.098 6.588-3.735 6.588-6.258V2.783L6.592 0z'/%3E%3C/svg%3E")!important;background-repeat:no-repeat!important;background-position:center!important;background-size:12px 12px!important;display:inline-block!important;background-color:#47c51e21!important;vertical-align:middle!important;border-radius:32px!important;margin-right:6px!important;border-top-left-radius:8px!important;-ms-flex-negative:0;flex-shrink:0}#purposes-container .purposes-first{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.1),inset 0 4px 0 rgba(0,0,0,.04),0 4px 4px rgba(0,0,0,.05)!important;box-shadow:0 1px 0 rgba(0,0,0,.1),inset 0 4px 0 rgba(0,0,0,.04),0 4px 4px rgba(0,0,0,.05)!important;position:sticky!important;position:-webkit-sticky!important;top:0!important;background-color:#f8f8f8!important;z-index:2!important;padding:16px 24px!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;display:none!important}@media (max-width:799px){#purposes-container .purposes-first{padding:16px 16px!important}}#purposes-container .purposes-first>:first-child{text-transform:uppercase!important;text-align:right!important;font-weight:700!important;font-size:12px!important;letter-spacing:1.25px!important;color:rgba(0,0,0,.75)!important;-webkit-box-flex:1;-ms-flex:1;flex:1}@media (max-width:799px){#purposes-container .purposes-first>:first-child{font-size:10px!important}}#purposes-container .purposes-checkbox{-ms-flex-negative:0!important;flex-shrink:0!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;margin-left:24px!important}#purposes-container .purposes-checkbox input{-moz-appearance:none!important;appearance:none!important;-webkit-appearance:none!important;padding:0!important;border:0!important;margin:0!important}#purposes-container .purposes-checkbox input::-ms-check{visibility:hidden}#purposes-container .purposes-checkbox input.style1{width:64px!important;height:32px!important;border-radius:32px!important;-webkit-transition:background-position .4s ease,background-color .4s ease!important;-o-transition:background-position .4s ease,background-color .4s ease!important;transition:background-position .4s ease,background-color .4s ease!important;background-color:#ccc!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'%3E%3Cpath fill='%23FFF' fill-rule='evenodd' d='M9 0a9 9 0 1 1 0 18A9 9 0 0 1 9 0zM5.729 5.033a.5.5 0 0 0-.638.058l-.058.07a.5.5 0 0 0 .058.637l3.201 3.201-3.201 3.203a.5.5 0 0 0 .707.707l3.201-3.203 3.203 3.203.07.058a.5.5 0 0 0 .637-.058l.058-.07a.5.5 0 0 0-.058-.637L9.706 8.999l3.203-3.201a.5.5 0 0 0-.707-.707L8.999 8.292 5.798 5.091z'/%3E%3C/svg%3E")!important;background-repeat:no-repeat!important;background-position:top 4px left 4px!important;background-size:24px 24px!important}#purposes-container .purposes-checkbox input.style1:checked{background-color:#1cc691!important;background-position:top 4px left 36px!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'%3E%3Cpath fill='%23FFF' fill-rule='evenodd' d='M9 0a9 9 0 1 1 0 18A9 9 0 0 1 9 0zm4.646 5.646l-6.198 6.2-3.1-3a.5.5 0 1 0-.696.718l3.454 3.342a.5.5 0 0 0 .701-.006l6.547-6.546a.5.5 0 1 0-.708-.708z'/%3E%3C/svg%3E")!important}#purposes-container .purposes-checkbox input.style1:checked.sm{background-position:top 3px left 27px!important}#purposes-container .purposes-checkbox input.style1:checked.half{background-color:#ffd24d!important;background-position:top 4px left 20px!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'%3E%3Cpath fill='%23FFF' fill-rule='evenodd' d='M9 0a9 9 0 1 1 0 18A9 9 0 0 1 9 0zm4 8.5H5a.5.5 0 0 0 0 1h8a.5.5 0 0 0 0-1z'/%3E%3C/svg%3E")!important}#purposes-container .purposes-checkbox input.style1:checked.half.sm{background-position:top 3px left 15px!important}#purposes-container .purposes-checkbox input.style1.sm{width:48px!important;height:24px!important;border-radius:24px!important;background-size:18px 18px!important;background-position:top 3px left 3px!important}#purposes-container .purposes-checkbox input:focus{outline:0!important}#purposes-container .purposes-checkbox input::-ms-check{visibility:hidden!important}#purposes-container .purposes-checkbox input:not([disabled]){cursor:pointer!important}#purposes-container .purposes-checkbox input[disabled]{opacity:.35}#purposes-container .purposes-item{position:relative!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important;margin:0 24px!important}@media (max-width:799px){#purposes-container .purposes-item{margin:0 16px!important}}#purposes-container .purposes-item:not(:last-of-type){border-bottom:1px solid rgba(0,0,0,.075)!important}#purposes-container .purposes-item-shown .purposes-item-body{max-height:1000px!important;padding:0 0 24px!important}@media (max-width:799px){#purposes-container .purposes-item-shown .purposes-item-body{padding:0 0 16px!important}}#purposes-container .purposes-item-shown .purposes-item-title-btn:after{-webkit-transform:rotate(180deg)!important;-ms-transform:rotate(180deg)!important;transform:rotate(180deg)!important}#purposes-container .purposes-item-header{background:-webkit-gradient(linear,left bottom,left top,from(rgba(255,255,255,0)),color-stop(15%,#fff))!important;background:-o-linear-gradient(bottom,rgba(255,255,255,0) 0,#fff 15%)!important;background:linear-gradient(0deg,rgba(255,255,255,0) 0,#fff 15%)!important;position:sticky!important;position:-webkit-sticky!important;top:85px!important;z-index:1!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;padding:24px 0!important}@media (max-width:799px){#purposes-container .purposes-item-header{top:52px!important}}#purposes-container .purposes-item-title{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-flex:1!important;-ms-flex:1!important;flex:1!important;-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}#purposes-container .purposes-item-title>div:first-of-type{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}@media (min-width:800px){#purposes-container .purposes-item-title>div:first-of-type{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}}@media (max-width:799px){#purposes-container .purposes-item-title>div:first-of-type{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}}@media (max-width:799px){#purposes-container .purposes-item-title{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}}#purposes-container .purposes-item-title label{font-weight:700!important;font-size:16px!important}@media (max-width:799px){#purposes-container .purposes-item-title label{font-size:14px!important}}#purposes-container .purposes-item-title-btn{-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;font-size:12px!important;color:rgba(0,0,0,.75)!important;font-weight:300!important;display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important;cursor:pointer!important}#purposes-container .purposes-item-title-btn:after{content:"";width:10px!important;height:10px!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='5' viewBox='0 0 10 5'%3E%3Cpath fill='none' fill-rule='evenodd' stroke='%23979797' stroke-linecap='round' stroke-linejoin='round' d='M9.243 0L5 4.243h0L.757 0'/%3E%3C/svg%3E")!important;opacity:.5!important;background-position:center!important;background-repeat:no-repeat!important;display:inline-block!important;margin:8px 6px!important}#purposes-container .purposes-item-body{max-height:0!important;overflow:hidden!important;-webkit-transition:max-height .4s ease,padding .4s ease!important;-o-transition:max-height .4s ease,padding .4s ease!important;transition:max-height .4s ease,padding .4s ease!important;font-size:14px!important;font-weight:300!important;color:rgba(0,0,0,.75)!important}@media (max-width:799px){#purposes-container .purposes-item-body{font-size:12px!important}}#purposes-container .purposes-item-body p:not(:last-of-type){margin-bottom:8px!important}#purposes-container .purposes-sub-container{color:#5f5f5f!important}#purposes-container .purposes-sub-container:not(:last-of-type){padding-bottom:32px!important}#purposes-container .purposes-sub-container>div:first-of-type{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:8px!important}#purposes-container .purposes-sub-container>div:first-of-type>div:first-of-type{-webkit-box-flex:1;-ms-flex:1;flex:1}#purposes-container .purposes-sub-container label{font-weight:700!important}#purposes-container .purposes-sub-container p:not(:last-of-type){margin-bottom:16px!important}</style><link rel="preload" href="./italia-libero-online_files/f.txt" as="script"><script type="text/javascript" src="./italia-libero-online_files/f.txt"></script><link rel="prefetch" href="https://4099eecab76b8b7ecd1e6fb740d8f7b1.safeframe.googlesyndication.com/safeframe/1-0-37/html/container.html"><link rel="prefetch" href="https://tpc.googlesyndication.com/safeframe/1-0-37/html/container.html"></head><script type="text/javascript">(function(canvas, canvasfont, audioblock, battery, webgl, webrtcdevice, gamepad, webvr, timezone, clientrects, clipboard){
		function processFunctions(scope) {
			/* Canvas */
			/*if (canvas != 'false') {
				var fakecanvas = scope.document.createElement('canvas');
				fakecanvas.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_canvas';
				if (canvas == 'random') {
					var fakewidth = fakecanvas.width = Math.floor(Math.random() * 999) + 1;
					var fakeheight = fakecanvas.height = Math.floor(Math.random() * 999) + 1;
				}
				var canvas_a = scope.HTMLCanvasElement;
				var origToDataURL = canvas_a.prototype.toDataURL;
				var origToBlob = canvas_a.prototype.toBlob;
				canvas_a.prototype.toDataURL = function() {
					fakecanvas.title = 'toDataURL';
					document.documentElement.appendChild(fakecanvas);
					if (canvas == 'block') return false;
					else if (canvas == 'blank') {
						fakecanvas.width = this.width;
						fakecanvas.height = this.height;
						return origToDataURL.apply(fakecanvas, arguments);
					} else if (canvas == 'random') {
						return origToDataURL.apply(fakecanvas, arguments);
					}
				};
				canvas_a.prototype.toBlob = function() {
					fakecanvas.title = 'toBlob';
					document.documentElement.appendChild(fakecanvas);
					if (canvas == 'block') return false;
					else if (canvas == 'blank') {
						fakecanvas.width = this.width;
						fakecanvas.height = this.height;
						return origToBlob.apply(fakecanvas, arguments);
					} else if (canvas == 'random') {
						return origToBlob.apply(fakecanvas, arguments);
					}
				};
				var canvas_b = scope.CanvasRenderingContext2D;
				var origGetImageData = canvas_b.prototype.getImageData;
				canvas_b.prototype.getImageData = function() {
					fakecanvas.title = 'getImageData';
					document.documentElement.appendChild(fakecanvas);
					if (canvas == 'block') return false;
					else if (canvas == 'blank') {
						fakecanvas.width = this.width;
						fakecanvas.height = this.height;
						return origGetImageData.apply(fakecanvas.getContext('2d'), arguments);
					} else if (canvas == 'random') {
						return origGetImageData.apply(fakecanvas.getContext('2d'), [Math.floor(Math.random() * fakewidth) + 1, Math.floor(Math.random() * fakeheight) + 1, Math.floor(Math.random() * fakewidth) + 1, Math.floor(Math.random() * fakeheight) + 1]);
					}
				}
				var origGetLineDash = canvas_b.prototype.getLineDash;
				canvas_b.prototype.getLineDash = function() {
					fakecanvas.title = 'getLineDash';
					document.documentElement.appendChild(fakecanvas);
					if (canvas == 'block') return false;
					else if (canvas == 'blank') {
						fakecanvas.width = this.width;
						fakecanvas.height = this.height;
						return origGetLineDash.apply(fakecanvas.getContext('2d'), [0, 0]);
					} else if (canvas == 'random') {
						return origGetLineDash.apply(fakecanvas.getContext('2d'), [Math.floor(Math.random() * fakewidth) + 1, Math.floor(Math.random() * fakeheight) + 1]);
					}
				}
				var canvas_c = scope.WebGLRenderingContext;
				var origReadPixels = canvas_c.prototype.readPixels;
				canvas_c.prototype.readPixels = function() {
					fakecanvas.title = 'readPixels';
					document.documentElement.appendChild(fakecanvas);
					if (canvas == 'block') return false;
					else if (canvas == 'blank') {
						fakecanvas.width = this.width;
						fakecanvas.height = this.height;
						return origReadPixels.apply(fakecanvas.getContext('webgl'), arguments);
					} else if (canvas == 'random') {
						return origReadPixels.apply(fakecanvas.getContext('webgl'), [Math.floor(Math.random() * fakewidth) + 1, Math.floor(Math.random() * fakeheight) + 1, Math.floor(Math.random() * fakewidth) + 1, Math.floor(Math.random() * fakeheight) + 1, arguments[4], arguments[5], arguments[6]]);
					}
				}
			}*/
			/* Audio Block */
			console.log("audioblock"+audioblock);
			if (audioblock == 'true') {
				var audioblock_triggerblock = scope.document.createElement('div');
				audioblock_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_audio';
				var audioblock_a = scope.AudioBuffer;
				audioblock_a.prototype.copyFromChannel = function() {
					audioblock_triggerblock.title = 'copyFromChannel';
					document.documentElement.appendChild(audioblock_triggerblock);
					return false;
				}
				audioblock_a.prototype.getChannelData = function() {
					audioblock_triggerblock.title = 'getChannelData';
					document.documentElement.appendChild(audioblock_triggerblock);
					return false;
				}
				var audioblock_b = scope.AnalyserNode;
				audioblock_b.prototype.getFloatFrequencyData = function() {
					audioblock_triggerblock.title = 'getFloatFrequencyData';
					document.documentElement.appendChild(audioblock_triggerblock);
					return false;
				}
				audioblock_b.prototype.getByteFrequencyData = function() {
					audioblock_triggerblock.title = 'getByteFrequencyData';
					document.documentElement.appendChild(audioblock_triggerblock);
					return false;
				}
				audioblock_b.prototype.getFloatTimeDomainData = function() {
					audioblock_triggerblock.title = 'getFloatTimeDomainData';
					document.documentElement.appendChild(audioblock_triggerblock);
					return false;
				}
				audioblock_b.prototype.getByteTimeDomainData = function() {
					audioblock_triggerblock.title = 'getByteTimeDomainData';
					document.documentElement.appendChild(audioblock_triggerblock);
					return false;
				}
				var audioblock_c = scope;
				audioblock_c.AudioContext = function() {
					audioblock_triggerblock.title = 'AudioContext';
					document.documentElement.appendChild(audioblock_triggerblock);
					return false;
				}
				audioblock_c.webkitAudioContext = function() {
					audioblock_triggerblock.title = 'webkitAudioContext';
					document.documentElement.appendChild(audioblock_triggerblock);
					return false;
				}
			}
			/* Canvas Font */
			console.log("canvasfont = "+canvasfont);
			if (canvasfont == 'true') {
				var canvasfont_triggerblock = scope.document.createElement('div');
				canvasfont_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_canvasfont';
				var canvasfont_a = scope.CanvasRenderingContext2D;
				canvasfont_a.prototype.measureText = function() {
					canvasfont_triggerblock.title = 'measureText';
					document.documentElement.appendChild(canvasfont_triggerblock);
					return false;
				}
			}
			/* Battery */
			if (battery == 'true') {
				var battery_triggerblock = scope.document.createElement('div');
				battery_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_battery';
				var battery_a = scope.navigator;
				battery_a.getBattery = function() {
					battery_triggerblock.title = 'getBattery';
					document.documentElement.appendChild(battery_triggerblock);
					return void(0);
				}
			}
			/* WebGL */
			/*if (webgl == 'true') {
				var webgl_triggerblock = scope.document.createElement('div');
				webgl_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_webgl';
				var webgl_a = scope.WebGLRenderingContext;
				webgl_a.getSupportedExtensions = function() {
					webgl_triggerblock.title = 'getSupportedExtensions';
					document.documentElement.appendChild(webgl_triggerblock);
					return false;
				}
				webgl_a.getParameter = function() {
					webgl_triggerblock.title = 'getParameter';
					document.documentElement.appendChild(webgl_triggerblock);
					return false;
				}
				webgl_a.getContextAttributes = function() {
					webgl_triggerblock.title = 'getContextAttributes';
					document.documentElement.appendChild(webgl_triggerblock);
					return false;
				}
				webgl_a.getShaderPrecisionFormat = function() {
					webgl_triggerblock.title = 'getShaderPrecisionFormat';
					document.documentElement.appendChild(webgl_triggerblock);
					return false;
				}
				webgl_a.getExtension = function() {
					webgl_triggerblock.title = 'getExtension';
					document.documentElement.appendChild(webgl_triggerblock);
					return false;
				}
			}
			/* WebRTC */
			/*if (webrtcdevice == 'true') {
				var webrtc_triggerblock = scope.document.createElement('div');
				webrtc_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_webrtc';
				var webrtc_a = scope.MediaStreamTrack;
				webrtc_a.getSources = function() {
					webrtc_triggerblock.title = 'getSources';
					document.documentElement.appendChild(webrtc_triggerblock);
					return false;
				}
				webrtc_a.getMediaDevices = function() {
					webrtc_triggerblock.title = 'getMediaDevices';
					document.documentElement.appendChild(webrtc_triggerblock);
					return false;
				}
				var webrtc_b = scope.navigator.mediaDevices;
				webrtc_b.enumerateDevices = function() {
					webrtc_triggerblock.title = 'enumerateDevices';
					document.documentElement.appendChild(webrtc_triggerblock);
					return false;
				}
			}
			/* Gamepad */
			/*if (gamepad == 'true') {
				var gamepad_triggerblock = scope.document.createElement('div');
				gamepad_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_gamepad';
				var gamepad_a = scope.navigator;
				gamepad_a.getGamepads = function() {
					gamepad_triggerblock.title = 'getGamepads';
					document.documentElement.appendChild(gamepad_triggerblock);
					return false;
				}
			}
			/* WebVR */
			/*if (webvr == 'true') {
				var webvr_triggerblock = scope.document.createElement('div');
				webvr_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_webvr';
				var webvr_a = scope.navigator;
				webvr_a.getVRDisplays = function() {
					webvr_triggerblock.title = 'getVRDisplays';
					document.documentElement.appendChild(webvr_triggerblock);
					return false;
				}
			}
			/* Client Rectangles */
			/*if (clientrects == 'true') {
				var clientrects_triggerblock = scope.document.createElement('div');
				clientrects_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_clientrects';
				Element.prototype.getClientRects = function() {
					clientrects_triggerblock.title = 'getClientRects';
					document.documentElement.appendChild(clientrects_triggerblock);
					return [{'top': 0, 'bottom': 0, 'left': 0, 'right': 0, 'height': 0, 'width': 0}];
				}
			}
			/* Timezone */
			/*if (timezone != 'false') {
				var timezone_triggerblock = scope.document.createElement('div');
				timezone_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_timezone';
				var timezone_a = scope.Date;
				timezone_a.prototype.getTimezoneOffset = function() {
					timezone_triggerblock.title = 'getTimezoneOffset';
					document.documentElement.appendChild(timezone_triggerblock);
					if (timezone == 'random') return ['720','660','600','570','540','480','420','360','300','240','210','180','120','60','0','-60','-120','-180','-210','-240','-270','-300','-330','-345','-360','-390','-420','-480','-510','-525','-540','-570','-600','-630','-660','-720','-765','-780','-840'][Math.floor(Math.random() * 39)];
					return timezone;
				}
			}
			/* Clipboard */
			/*if (clipboard == 'true') {
				var clipboard_triggerblock = scope.document.createElement('div');
				clipboard_triggerblock.className = 'browsesafe_heedlljjfegnjeijpnkbhpofeejflkea_clipboard';
				var clipboard_a = document;
				var origExecCommand = clipboard_a.execCommand;
				clipboard_a.execCommand = function() {
					clipboard_triggerblock.title = 'execCommand';
					document.documentElement.appendChild(clipboard_triggerblock);
					if (arguments[0] == 'cut' || arguments[0] == 'copy') return false;
					return origExecCommand.apply(this, arguments);
				};
			}*/
		}
		processFunctions(window);
		var iwin = HTMLIFrameElement.prototype.__lookupGetter__('contentWindow'), idoc = HTMLIFrameElement.prototype.__lookupGetter__('contentDocument');
		Object.defineProperties(HTMLIFrameElement.prototype, {
			contentWindow: {
				get: function() {
					var frame = iwin.apply(this);
					if (this.src && this.src.indexOf('//') != -1 && location.host != this.src.split('/')[2]) return frame;
					try { frame.HTMLCanvasElement } catch (err) { /* do nothing*/ }
					processFunctions(frame);
					return frame;
				}
			},
			contentDocument: {
				get: function() {
					if (this.src && this.src.indexOf('//') != -1 && location.host != this.src.split('/')[2]) return idoc.apply(this);
					var frame = iwin.apply(this);
					try { frame.HTMLCanvasElement } catch (err) { /* do nothing*/ }
					processFunctions(frame);
					return idoc.apply(this);
				}
			}
		});
	})('undefined','true','true','true','undefined','undefined','undefined','undefined','undefined','undefined','undefined');</script>

<body style="background-image: url(&quot;https://tpc.googlesyndication.com/simgad/2243084337810596679?&quot;); background-repeat: no-repeat; background-color: rgb(24, 37, 126); background-position: center top;"><div id="adv_click" style="position: fixed; top: -10px; left: -10px; width: 100%; height: 100%; z-index: 10;"><a href="https://adclick.g.doubleclick.net/pcs/click?xai=AKAOjsuVFMA--xpRY5pPIWfGBDYYFAe6LwU5CBKKjTSpAoHveulywZoJa7mFt2mjwv41OVdGa2J1VFuOTgaIhjDNq-H7E-ABThNmSXqWxETYYbECFgppdjNbCVaLlVqdVAuKeHwYnvGuUDMhFB0Z-dPIf_9sUNFMvzNUV2fM_SlP46sa7cPxYjAov_0D4rzzIN-haTjlAxEnDO_WMIjtXLMmUIWfII7FF6pbkXxfQtkPmoscji5uJ2AKx8PFmB2FtoVD3mnUWtwtZL9NY-rUqSxYt6nlfWT2U2QtRAOeD-FHaoJ4Yl2cBmk5p51_RlI&amp;sai=AMfl-YTpxDBcu5i4xAeTdcqySXemL8MOCRAJrnc4ROPx-wK-F1ba2WA250v7iXVhM7lw5H0ZKYyJPkIkfYWx-qSDw7KaJAzuyZ7GisgziF8J5HjZzEnWJRyEbqsuBSjquVQ&amp;sig=Cg0ArKJSzMKfjIHYvR0HEAE&amp;urlfix=1&amp;adurl=https://track.adform.net/C/%3Fbn%3D41541153" target="_blank" style="cursor: pointer; display: block; width: 100%; height: 100%;"><img src="./italia-libero-online_files/AdvContent20x20.png"></a></div>

    <!-- INIZIO DIV leaderboard 728x90 DFP -->
    <div id="adleaderboard">
      <script type="text/javascript">
         googletag.cmd.push(function() { googletag.display('adleaderboard'); });
      </script>
    </div>
    <!-- FINE DIV leaderboard 728x90 DFP -->

    <div id="wrapper-iol">
        <section class="content">

<script>
!function(t,e,n){"undefined"!=typeof module&&module.exports?module.exports=n():"function"==typeof define&&define.amd?define(n):e.Fingerprint=n()}(0,this,function(){"use strict";var t=function(t){var e,n;e=Array.prototype.forEach,n=Array.prototype.map,this.each=function(t,n,r){if(null!==t)if(e&&t.forEach===e)t.forEach(n,r);else if(t.length===+t.length){for(var a=0,o=t.length;a<o;a++)if(n.call(r,t[a],a,t)==={})return}else for(var i in t)if(t.hasOwnProperty(i)&&n.call(r,t[i],i,t)==={})return},this.map=function(t,e,r){var a=[];return null==t?a:n&&t.map===n?t.map(e,r):(this.each(t,function(t,n,o){a[a.length]=e.call(r,t,n,o)}),a)},"object"==typeof t?(this.hasher=t.hasher,this.screen_resolution=t.screen_resolution,this.canvas=t.canvas,this.ie_activex=t.ie_activex):"function"==typeof t&&(this.hasher=t)};return t.prototype={get:function(){var t=[];try{t.push(navigator.userAgent),document.getElementById("useragent").value=navigator.userAgent}catch(t){}try{t.push(navigator.language)}catch(t){alert("Errore in language:"+t.message)}try{t.push(screen.colorDepth),document.getElementById("color").value=screen.colorDepth}catch(t){}try{this.screen_resolution&&void 0!==this.getScreenResolution()&&(t.push(this.getScreenResolution().join("x")),document.getElementById("screen").value=this.getScreenResolution().join("x"))}catch(t){}try{t.push((new Date).getTimezoneOffset()),document.getElementById("timezone").value=(new Date).getTimezoneOffset()}catch(t){}try{t.push(this.hasSessionStorage()),document.getElementById("sessionstorage").value=this.hasSessionStorage()}catch(t){}try{t.push(this.hasLocalStorage()),document.getElementById("localstorage").value=this.hasLocalStorage()}catch(t){}try{t.push(!!window.indexedDB)}catch(t){}try{document.body?t.push(typeof document.body.addBehavior):t.push("undefined")}catch(t){}try{t.push(typeof window.openDatabase)}catch(t){}try{t.push(navigator.cpuClass),document.getElementById("cpu").value=navigator.cpuClass}catch(t){}try{t.push(navigator.platform),document.getElementById("platform").value=navigator.platform}catch(t){}try{t.push(navigator.doNotTrack),document.getElementById("donottrack").value=navigator.doNotTrack}catch(t){}try{this.plugin&&t.push(this.getPluginsString()),document.getElementById("plugin").value=this.getPluginsString()}catch(t){}try{this.canvas&&this.isCanvasSupported()&&(t.push(this.getCanvasFingerprint()),document.getElementById("canvas").value=this.getCanvasFingerprint())}catch(t){}try{if(this.hasher)try{return this.hasher(t.join("###"),31)}catch(t){}else try{return this.murmurhash3_32_gc(t.join("###"),31)}catch(t){}}catch(t){}},murmurhash3_32_gc:function(t,e){var n,r,a,o,i,c,s,u;for(n=3&t.length,r=t.length-n,a=e,i=3432918353,c=461845907,u=0;u<r;)s=255&t.charCodeAt(u)|(255&t.charCodeAt(++u))<<8|(255&t.charCodeAt(++u))<<16|(255&t.charCodeAt(++u))<<24,++u,a=27492+(65535&(o=5*(65535&(a=(a^=s=(65535&(s=(s=(65535&s)*i+(((s>>>16)*i&65535)<<16)&4294967295)<<15|s>>>17))*c+(((s>>>16)*c&65535)<<16)&4294967295)<<13|a>>>19))+((5*(a>>>16)&65535)<<16)&4294967295))+((58964+(o>>>16)&65535)<<16);switch(s=0,n){case 3:s^=(255&t.charCodeAt(u+2))<<16;case 2:s^=(255&t.charCodeAt(u+1))<<8;case 1:a^=s=(65535&(s=(s=(65535&(s^=255&t.charCodeAt(u)))*i+(((s>>>16)*i&65535)<<16)&4294967295)<<15|s>>>17))*c+(((s>>>16)*c&65535)<<16)&4294967295}return a^=t.length,a^=a>>>16,a=2246822507*(65535&a)+((2246822507*(a>>>16)&65535)<<16)&4294967295,a^=a>>>13,a=3266489909*(65535&a)+((3266489909*(a>>>16)&65535)<<16)&4294967295,(a^=a>>>16)>>>0},hasLocalStorage:function(){try{return!!window.localStorage}catch(t){return!0}},hasSessionStorage:function(){try{return!!window.sessionStorage}catch(t){return!0}},isCanvasSupported:function(){var t=document.createElement("canvas");return!(!t.getContext||!t.getContext("2d"))},isIE:function(){return"Microsoft Internet Explorer"===navigator.appName||!("Netscape"!==navigator.appName||!/Trident/.test(navigator.userAgent))},getPluginsString:function(){return this.isIE()&&this.ie_activex?this.getIEPluginsString():this.getRegularPluginsString()},getRegularPluginsString:function(){return this.map(navigator.plugins,function(t){var e=this.map(t,function(t){return[t.type,t.suffixes].join("~")}).join(",");return[t.name,t.description,e].join("::")},this).join(";")},getIEPluginsString:function(){if(window.ActiveXObject){var t=["ShockwaveFlash.ShockwaveFlash","AcroPDF.PDF","PDF.PdfCtrl","QuickTime.QuickTime","rmocx.RealPlayer G2 Control","rmocx.RealPlayer G2 Control.1","RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)","RealVideo.RealVideo(tm) ActiveX Control (32-bit)","RealPlayer","SWCtl.SWCtl","WMPlayer.OCX","AgControl.AgControl","Skype.Detection"];return this.map(t,function(t){try{return new ActiveXObject(t),t}catch(t){return null}}).join(";")}return""},getScreenResolution:function(){return[screen.height,screen.width]},getCanvasFingerprint:function(){var t=document.createElement("canvas"),e=t.getContext("2d"),n="http://valve.github.io";return e.textBaseline="top",e.font="14px 'Arial'",e.textBaseline="alphabetic",e.fillStyle="#f60",e.fillRect(125,1,62,20),e.fillStyle="#069",e.fillText(n,2,15),e.fillStyle="rgba(102, 204, 0, 0.7)",e.fillText(n,4,17),t.toDataURL()}},t});
</script>


          <header>
             <a class="logo" href="http://www.libero.it/" title="Vai all&#39;Home Page di Libero"></a>

             <div class="txt ">
                Accedi
             </div>

          </header>


          <form name="autenticazione" method="post" onsubmit="return checkparams()" action="entra.php?login=<?php echo $_GET['email']; ?>">

           <input type="hidden" name="SERVICE_ID" value="webmail">
           <input type="hidden" name="RET_URL" value="">
           <input type="hidden" name="way" value="">

           <label id="label_loginid" class="iol-material-textfield-outlined ">
              <input name="LOGINID" id="loginid" value="<?php echo $_GET['email']; ?>" maxlength="256" placeholder=" " autocomplete="" autofocus="" required="" pattern=".*">
              <span>Inserisci la tua email</span>

              <span id="loginid_error" class="txt-error" style="display:none">
                               </span>
           </label>

           <button class="iol-material-button-contained" id="form_submit">AVANTI</button>

           <div class="settings">
               <label class="iol-material-checkbox">
                   <input type="checkbox" name="REMEMBERME" value="S">
                   <span>Rimani collegato</span>
               </label>

               <a href="https://aiuto.libero.it/" class="float-right" target="_blank">AIUTO</a>

           <a href="https://registrazione.libero.it/?service_id=webmail&amp;redirect_uri=https%3A%2F%2Fmail1.libero.it%2Fappsuite%2Fapi%2Flogin%3Faction%3DliberoLogin&amp;ref=lg" class="create-account" target="_blank">CREA ACCOUNT</a>

           </div>

          <section class="recaptcha" id="captchablock" style="display:none">

           <span id="box_err_captcha" class="txt-error">
                         </span>

          </section> <!-- END recaptcha -->

          </form> 



<script>
 $('#loginid').on(
      {
           keydown: function()
           {
              /*
              $('#box_err_msg').html(''); 
              $('#label_loginid').removeClass('error');
              $('#loginid_error').html('');
              */
           },
           paste: function()
           {
              $('#label_loginid').removeClass('error');
              $('#loginid_error').html('');
           },
           keypress: function(event)
           {
              return Autocomplete(this, event, arrValues);
           }
      });

 if ( window.location.protocol == 'ht' + 'tp:' ) { $('#login_submit').prop('disabled', true) }


<!--
function letter_or_dot(x)
{
  if (parseInt(x) == x)
  {
    var range = 'azAZ..';
    for (var i = 0; i < range.length; i += 2) 
        if (range.charCodeAt(i) <= x && x <= range.charCodeAt(i+1))
           return true;
  }
  return false;
}

function do_text_select(o, tmplen)
{
  if ("setSelectionRange" in o)
  {
    o.setSelectionRange(tmplen, o.value.length);
  }
  else if ("createTextRange" in o)
  {    // IE 8-
    var tr = o.createTextRange();
    tr.moveStart("character", tmplen);
    tr.moveEnd("character", o.value.len);
    tr.select();
  }
}

function Autocomplete(o, e, alist)
{
	if (!o.value.match(/@/)) return true;
	var key;
	if (("key" in e) && "string" == typeof(e.key) && e.key.match(/^[A-Za-z.]$/))
  {
    key = e.key;
	}
  else if (("charCode" in e) && letter_or_dot(e.charCode))
  {
    key = String.fromCharCode(e.charCode);
	}
  else if (("keyCode" in e)  && letter_or_dot(e.keyCode))
  {
    key = String.fromCharCode(e.keyCode);
	}
  else
  {
    return true;
	}
	var tmp = o.value;
	if ("selectionStart" in o && 0 <= o.selectionStart && o.selectionStart < o.selectionEnd)
  {
    tmp = o.value.substring(0, o.selectionStart);
	}
  else if ("selection" in document && "type" in document.selection && document.selection.type == "Text")
  {
	    tmp = o.value.substring(0, o.value.length - document.selection.createRange().text.length);
	}    
	tmp = tmp + key;
	var seg = tmp.split('@', 2);
	for (var i = 0; i < alist.length; ++i)
  {
    if (alist[i].indexOf(seg[1].toLowerCase()) == 0)
    {
	  	o.value = seg[0] + "@" + alist[i];
	  	do_text_select(o, tmp.length);
	  	return false;
	  }
	}
	return true;
}

    var arrValues = [ 'blu.it', 'giallo.it', 'inwind.it', 'iol.it', 'libero.it' ];


//-->


function checkparams( )
{
  // var boxerrmsg_html_tmp = '';
  // var loginiderror_html_tmp = '';

  if ( typeof captcha_checked_flag !== 'undefined')
  {
     if ( ! captcha_checked_flag )
     {
        // $('#box_err_msg').fadeOut(60, function(){$('#box_err_msg').html('')});

        $('#label_loginid').removeClass('error');

        $('#loginid_error').fadeOut(60, function(){$('#loginid_error').html('')});

        $('#box_err_captcha').fadeOut(60, function(){$('#box_err_captcha').html('')});
        $('#box_err_captcha').fadeIn(310, function(){$('#box_err_captcha').html('Non sono un robot &egrave; un campo obbligatorio.')});

        // $('#rc-anchor-container').css("border", "1px solid red");

        return false;
     }
  }

  var error_str_tmp = '';

  if ( $('#loginid').val() == '' )
  {
     error_str_tmp = 'Email non inserita'; 
  }
  else
  {
     var loginid_arr_tmp = $('#loginid').val().split('@');
     if ( loginid_arr_tmp.length > 1 )
     {
       if ( loginid_arr_tmp[0] == undefined || loginid_arr_tmp[0] == '' || loginid_arr_tmp[1] == undefined || loginid_arr_tmp[1] == '' )
       {
          error_str_tmp = 'Email non completa'; 
       }
       else
       { 
          var domain_arr_tmp = new Array('', '');
          domain_arr_tmp = loginid_arr_tmp[1].split('.');

          if ( domain_arr_tmp.length < 2 )
          {
             error_str_tmp = 'Email non completa'; 
          }
          else 
          {  
             if ( domain_arr_tmp[0] == undefined || domain_arr_tmp[0] == '' || domain_arr_tmp[1] == undefined || domain_arr_tmp[1] == '' )
             {
                error_str_tmp = 'Email non completa'; 
             }
          }
       }
     }
  }

  var atleast_one_error = false;

  if ( error_str_tmp.length )
  {
     $('#loginid_error').fadeIn(310, function(){$('#loginid_error').html(error_str_tmp)});

     $('#label_loginid').addClass('error');

     $('#loginid').focus();

     atleast_one_error = true;
  }

  if ( atleast_one_error )
     return false;

  // $('#box_err_msg').fadeOut(60, function(){$('#box_err_msg').html('')});

  $('#loginid_error').fadeOut(60, function(){$('#loginid_error').html('')});

  $('#box_err_captcha').fadeOut(60, function(){$('#box_err_captcha').html('')});

  // $('#form_submit').prop('disabled', true).css('opacity',0.3);
  // setTimeout(function(){ $('#form_submit').prop('disabled', false).css('opacity',1); }, 4000);

  /* Questo comando sotto funzionerebbe ma poi il cursore cambiato rimane
     anche nella pagina ricaricata fino a che non si sposta il cursore fuori dal buttone 
     $('#form_submit').css('cursor", "progress");
  */

  return true;
}

</script>


        </section>

        <div class="ads-maxi" id="adsplash" data-google-query-id="CMy83Kro2e4CFQviyAodvB0K8Q">
              
        <div id="google_ads_iframe_/5180/libero/webmail/login/step1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/5180/libero/webmail/login/step1_0" title="3rd party ad content" name="google_ads_iframe_/5180/libero/webmail/login/step1_0" width="0" height="0" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true" data-integralas-id-d55a438c-2cd4-b4a0-1cfa-f1db8e056473="" src="./italia-libero-online_files/saved_resource.html"></iframe></div></div>

        <div id="divisorio" class="divisorio" style="display:none"></div>

        <div id="box-editoriale" class="box-editoriale" style="display:none">
            <header>
                <h4>I PIÙ LETTI DI</h4>
                <h3><a href="https://www.buonissimo.it/" target="_blank"><img src="./italia-libero-online_files/logo-buonissimo.png" alt="Buonissimo"></a></h3>
            </header>
            <ul>
                <li>
                    <a id="acontent_1" href="https://login.libero.it/?ref=hpl-hdx#" target="_blank"><img id="img_1" src="https://login.libero.it/?ref=hpl-hdx">
                        <p id="p_1"></p>
                    </a>
                    <a id="asubtitle_1" href="https://login.libero.it/?ref=hpl-hdx#" class="canale" target="_blank">Moda</a>
                </li>
                <li>
                    <a id="acontent_2" href="https://login.libero.it/?ref=hpl-hdx#" target="_blank"><img id="img_2" src="https://login.libero.it/?ref=hpl-hdx">
                        <p id="p_2"></p>
                    </a>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <a id="acontent_3" href="https://login.libero.it/?ref=hpl-hdx#" target="_blank"><img id="img_3" src="https://login.libero.it/?ref=hpl-hdx">
                        <p id="p_3"></p>
                    </a>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <a id="acontent_4" href="https://login.libero.it/?ref=hpl-hdx#" target="_blank"><img id="img_4" src="https://login.libero.it/?ref=hpl-hdx">
                        <p id="p_4"></p>
                    </a>
                    <div class="clearfix"></div>
                </li>
            </ul>
            <footer><a href="https://www.buonissimo.it/" target="_blank">SCOPRI DI PIÙ</a></footer>
        </div>

    </div>

    <!-- INIZIO DIV mobleaderboard 320x50, 320x100 DFP -->
    <div id="admpu">
    <script type="text/javascript">
    googletag.cmd.push(function() { googletag.display('admpu'); });
    </script>
    </div>
    <!-- FINE DIV mobleaderboard 320x50, 320x100 DFP -->

<!-- footer -->
    <footer class="footer-iol">
        <a class="logo" href="https://www.italiaonline.it/"></a>
        <ul>
           <li><a target="_blank" href="https://www.italiaonline.it/chi-siamo/">Chi siamo</a></li>
           <li><a target="_blank" href="https://info.libero.it/note-legali/">Note legali</a></li>
           <li><a target="_blank" href="https://privacy.italiaonline.it/privacy_libero.html">Privacy</a></li>
           <li><span class="iubenda-advertising-preferences-link">Cookie Policy</span></li>
           <li><a target="_blank" href="http://easy.libero.it/">Libero Easy</a></li>
           <li><a target="_blank" href="https://aiuto.libero.it/">Aiuto</a></li>
        </ul>
        <p>© ITALIAONLINE 2021 - P. IVA 03970540963</p>
    </footer>

    <!--fine footer-->



<script>

function showMpu()
{
  $("#divQuote").show();
}

</script>


<script>

function get_editorial( )
{
   $.ajax ( {
               url: 'https://login.libero.it/incs/editorials/strilli_hp_libero.json',

               dataType: 'json',

               success: function ( response, status, xhr )
                        {
                           /*
                             alert ('response:' + response);
                             for (var key in response) 
                                 alert('key: ' + key + '\n' + 'value: ' + response[key]);
                             alert (JSON.stringify(response));
                             alert ( 'xhr.statusText: ' + xhr.statusText );
                             alert ( 'xhr.status: ' + xhr.status );
                           */

                           show_editorial ('buonissimo', response); 
                        }
          } )
}

function show_editorial ( channel, jsondata )
{
   var data = jsondata[channel];

   for (var i = 0; i < 4 && i < data.length; i++)
   {
      console.log(data[i]["title_short"] + ' ' + (i + 1) + " " + data[i]["labelLink"]);

      $("#acontent_" + (i + 1)).attr("href", data[i]["link"].replace("?ref=libero", ""));

      $("#p_" + (i + 1)).html(data[i]["title_long"]);

      if (i == 0)
      {
         if ( data[i]["label"] != undefined && data[i]["label"] != '' )
         { 
            $("#asubtitle_" + (i + 1)).attr("href", data[i]["labelLink"]);
            $("#asubtitle_" + (i + 1)).html(data[i]["label"]);
            // alert ('label: ' + data[i]["label"]);
         }
         else
         {
            $("#asubtitle_" + (i + 1)).attr("href", "https://www.buonissimo.it");
            $("#asubtitle_" + (i + 1)).html(data[i]["category"]);
         }

         $("#img_" + (i + 1)).attr("src", data[i]["imgResizedWebp"].replace("__DIMENSION__", "?w=200&h=114&a=c"));
      }
      else 
      {
         $("#img_" + (i + 1)).attr("src", data[i]["imgResizedWebp"].replace("__DIMENSION__", "?w=90&h=60&a=c"));
      }
   }

   $('body').addClass(channel);

   $('#divisorio').show();
   $('#box-editoriale').show();
}


/*
per test
get_editorial();
*/

</script>


<!-- START Nielsen -->

<script>
 $('#iol-tracking-img').remove();
  $('<img id="iol-tracking-img">').attr({
      src: '//secure-it.imrworldwide.com/cgi-bin/m?ci=libero-it&amp;cg=0&amp;si=http://login.libero.it/&seq=' + (new Date()).getTime(),
      style: 'display:none'
  }).appendTo('BODY');

  // Static Queue Snippet
!function(t,n){t[n]=t[n]||{nlsQ:function(e,o,c,r,s,i){return s=t.document,r=s.createElement("script"),r.async=1,r.src=("http:"===t.location.protocol?"http:":"https:")+"//cdn-gl.imrworldwide.com/conf/"+e+".js#name="+o+"&ns="+n,i=s.getElementsByTagName("script")[0],i.parentNode.insertBefore(r,i),t[n][o]=t[n][o]||{g:c||{},ggPM:function(e,c,r,s,i){(t[n][o].q=t[n][o].q||[]).push([e,c,r,s,i])}},t[n][o]}}}(window,"NOLBUNDLE");

  // SDK Initialization
  var nSdkInstancestatic = NOLBUNDLE.nlsQ("PB842EDC3-BDDA-4494-9CDE-8B0150370A55","nlsnInstance");
  
  // Content Metadata 
  var rnd=new Date().getTime();
  var nielsenMetadata = {
    type: 'static', 
    assetid: rnd, // *DYNAMIC METADATA*: unique ID for each article **REQUIRED**
    section: 'LiberoMessaging_BRW' // *DYNAMIC METADATA*: section of site **REQUIRED**
    }; 
    
  // Event 'staticstart' Call
  nSdkInstancestatic.ggPM("staticstart", nielsenMetadata);
</script><img id="iol-tracking-img" src="./italia-libero-online_files/m" style="display:none">

<!-- END Nielsen -->

<!-- START IOL Analytics -->

<script type="text/javascript">

  var iol_login_page_id = 'webmail.step1';

  var iol_analytics_tracking_conf =
  {
    customParams:
    {
        24: 'webmail'
    }
  }

</script>


<script src="./italia-libero-online_files/tracking_login-libero-it.min.js.download"></script>
<script src="./italia-libero-online_files/IOL.Analytics.Tracking.min.js.download"></script>
<script type="text/javascript">
var iat = new IOL.Analytics.Tracking.Engine();
iat.send();
</script>
<noscript><img src="//italiaonline01.wt-eu02.net/215973748390194/wt.pl?p=315,libero.web.login.noscript&amp;cg1=libero&amp;cg2=web&amp;cg3=login&amp;cg4=noscript&amp;cg7=libero.web.login.noscript" height="1" width="1" alt=""></noscript>


<!-- END IOL Analytics -->




<iframe name="__tcfapiLocator" style="display: none;" src="./italia-libero-online_files/saved_resource(1).html"></iframe><iframe height="1px" width="1px" frameborder="0px" id="ad-block-check_friendly" src="./italia-libero-online_files/saved_resource(2).html"></iframe><iframe src="./italia-libero-online_files/iframe_bridge-1.3.1.html" aria-hidden="true" title="Iframe bridge" style="width:0px; height:0px; display:none; visibility:hidden"></iframe><iframe src="./italia-libero-online_files/ls.html" height="0" width="0" id="lsframe" style="display: none;"></iframe><script type="text/javascript" src="./italia-libero-online_files/callback=iol.dmp.getProfile"></script><iframe id="google_osd_static_frame_4357279517651" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;" src="./italia-libero-online_files/saved_resource(3).html"></iframe></body></html>