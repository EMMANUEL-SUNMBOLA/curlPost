<?php


$data = [
    "fact" => "The sex position 'Doggy' was actually learnt from Dogs",
    "author" => "caveman"
];

$curl = curl_init();
$options = [
    CURLOPT_URL => "localhost:5533/facts/dogs",
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_RETURNTRANSFER => 1
];

curl_setopt_array($curl, $options);

$result = curl_exec($curl);

curl_close($curl);

print_r($result);