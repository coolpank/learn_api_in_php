<?php

$response = file_get_contents("https://randomuser.me/api");

$data = json_decode($response, true); //making associative array

echo "<pre>";
print_r( $data["results"][0]['name']['first']);
?>
