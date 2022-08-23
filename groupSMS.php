<?php
// Confedential Configuration Variables / Mandatory Variables
$email = "your email";
$key = "your key";
$mask = "registered mask";
$to = "92xxxxxxxx,92xxxxxxxxxx,92xxxxxxxxxxxx";
$message = "Test Message";
// Preparing Data to POST Request / DO NOT TOUCH BELOW
$multiple = "1";
$mask = urlencode($mask);
$message = urlencode($message);
$data = "email=".$email."&key=".$key."&mask=".$mask."&multiple=".$multiple."&to=".$to."&message=".$message;
// Sending the POST Request with cURL to Branded SMS Pakistan Server
$ch = curl_init('https://secure.h3techs.com/sms/api/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // Result from Branded SMS Pakistan including Return ID
curl_close($ch);