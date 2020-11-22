<?php

// Sign In
$ch = curl_init();
$user = ["login" => "login1", "password" => "1"];
curl_setopt($ch, CURLOPT_URL, 'http://beetroot/homework15/index.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $user);
$output = curl_exec($ch);
curl_close($ch);

var_dump($output);