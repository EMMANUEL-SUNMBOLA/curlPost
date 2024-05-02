<?php


$data = [
    "fact" => "Dogs can't injure you if you injure them first",
    "author" => "caveman"
];

$json_data = json_encode($data);

$curl = curl_init();
$options = [
    CURLOPT_URL => "http://localhost:5533/receiver.php",
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $json_data,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/caveman',
        'CaveKey:cavemansolos$$'
    ]
];

curl_setopt_array($curl, $options);

$result = curl_exec($curl);

curl_close($curl);

print_r($result);