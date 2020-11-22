<?php

// Get all users data

$usersFile = '../beetroot/homework15/users.json'; // почему-то если вставить http://beetroot/homework15/users.json
// то не работает

if (!file_exists($usersFile)) {
    echo 'Error connect to users data';
    die();
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://beetroot/homework15/users.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);

$users = json_decode($output, true);
echo '<pre>';
print_r($users);
echo '</pre>';