rubicon_cb = Math.random(); rubicon_rurl = document.referrer; if(top.location==document.location){rubicon_rurl = document.location;} rubicon_rurl = escape(rubicon_rurl);
window.rubicon_ad = "4056138" + "." + "js"; window.rubicon_creative = "4431768" + "." + "js"; document.write("\n\n"); rubicon_tag_code = "<!-- ###### START COMPONENT ad.standard ###### -->\n<!-- quantcast logic begins -->\n<script type=\"text/javascript\">\nquantSegs=\'\';\nfunction qc_results(result) {\nfor (var i = 0; i < result.segments.length; i++) {\nquantSegs += \"&qsg=\" + result.segments[i].id; //added \n}\n}\n<\/script>\n<script type=\"text/javascript\" src=\"https://pixel.quantserve.com/api/segments.json?a=p-9eJ8k4iSzux46&callback=qc_results&ttl=86400\"><\/script>\n<!-- quantcast logic ends -->\n<script type=\"text/javascript\">\n(function() {\nvar unknown_zip = \"US:UNKNOWN\",\nunknown_cid = \"NONE\";\nfunction matchKeys(keys) {\nvar re = new RegExp(\'(?:\' + keys.join(\'|\') + \')=(?:\\\\\"|%22)(.*?)(?:\\\\\"|%22)\');\nvar matches = document.cookie.match(re);\nif (!matches) return null;\nreturn matches[1];\n}\nvar flag_matches = document.cookie.match(/(?:adt_optout_flag)=(true|false)/);\nvar optout = (flag_matches && flag_matches[1] == \"true\");\nwindow.f_ADTARGET_ZIP = (function() {\nif (optout) return unknown_zip;\nvar zip = matchKeys([\'adt_zip\']);\nif (!zip) return unknown_zip;\nreturn \"US:\" + zip;\n})();\nwindow.f_AM_CID = (function() {\nif (optout) return unknown_cid;\nvar cid = matchKeys([\'amcid\']);\nif (!cid) return unknown_cid;\ncid = unescape(cid);\nreturn cid.replace(\",\",\"&am=\");\n})();\nwindow.f_ENABLE_ADTARGETING = true;\n})();\n<\/script>\n\n<script type=\"text/javascript\">\n// <![CDATA[\n//document.write((function() {\n//(function() {\nvar opts = [];\nif (typeof f_ADTARGET_ZIP != \'undefined\')\nopts.push(\'_OAS_GEO_OVERRIDE_=\' + f_ADTARGET_ZIP);\nif (typeof f_AM_CID != \'undefined\')\nopts.push(\'am=\' + f_AM_CID.split(\',\').join(\'&am=\'));\nif (typeof quantSegs != \'undefined\')\nopts.push(quantSegs.slice(1));\nif (location.search.indexOf(\'AdParam\') != -1) {\nopts.push(\'AdParam=\'+location.search.slice(9));\n}\nOAS_query = opts.join(\'&\');\nOAS_rn = new String (Math.random()); OAS_rns = OAS_rn.substring (2, 11);\n// ]]>\n<\/script>\n<!-- ###### END COMPONENT ad.standard ###### -->\n<!-- anything above this comment could reside in a .js file in the head of each page -->\n\n<script type=\"text/javascript\">\nOAS_type = \'jx\'; //jx or mjx\nOAS_sitepage = \'comcast.net/RubiconSIPassback\';\nOAS_listpos = \'x32\';\n\ndocument.write(\'<script type=\"text/javascript\" src=\\\"https://oascentral.comcast.net/RealMedia/ads/adstream_\' + OAS_type + \'.ads/\' + OAS_sitepage + \'/1\' + OAS_rns +\'@\' + OAS_listpos + \'?\' + OAS_query + \'&kw=noloopback_smr\\\" ></scr\' + \'ipt>\');\n\n<\/script>"; rubicon_tag_code = rubicon_tag_code.replace(/##RUBICON_CB##/g,rubicon_cb); document.write(rubicon_tag_code); document.write("");