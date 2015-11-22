<?php
$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

$output = curl_exec($ch);
$output = json_decode($output, true);

curl_close($ch);
?>