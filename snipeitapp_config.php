<?php
header('Content-Type: application/json');

define("API_KEY", "Enter your api key here!!");

$data['api_key'] = API_KEY;

echo json_encode($data);