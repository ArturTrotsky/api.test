<?php

// Create new record in users.json
$ch = curl_init();
$user = ["login" => "test000000000000000000000000000000000000", "password" => "123"];
curl_setopt($ch, CURLOPT_POSTFIELDS, $user);
curl_setopt($ch, CURLOPT_URL, 'http://beetroot/homework15/register.php');
$output = curl_exec($ch);
curl_close($ch);
