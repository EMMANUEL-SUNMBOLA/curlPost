<?php
 
  $curl = curl_init("http://localhost:5533/facts/dogs/100");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  if(curl_exec($curl)){
    print_r(curl_exec($curl) . "\n");
  }else{
    echo "error " . curl_errno($curl) . ": " . curl_error($curl) . "\n";
  }