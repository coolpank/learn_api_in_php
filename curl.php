<?php

// $ch = curl_init("https://randomuser.me/api"); //Returns a handle to the curl session
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Response to be return as a string

// curl_setopt_array($ch, [
//     CURLOPT_URL => "https://randomuser.me/api",
//     CURLOPT_RETURNTRANSFER => true
// ]);

$response = curl_exec($ch); //execute the request

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); //Returns status code

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";
?>