<?php

// Confedential Configuration Variables / Mandatory Variables
$email = "your email";
$key = "your key";
$mask = "your mask";
$to = "92xxxxxxxxx";
$message = "Test Message";
// Preparing Data to POST Request / DO NOT TOUCH BELOW
$mask = urlencode($mask);
$message = urlencode($message);
$data = "email=".$email."&key=".$key."&mask=".$mask."&to=".$to."&message=".$message;
// Sending the POST Request with cURL to Branded SMS Pakistan Server
$ch = curl_init('https://secure.h3techs.com/sms/api/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // Result from Branded SMS Pakistan including Return ID
curl_close($ch);