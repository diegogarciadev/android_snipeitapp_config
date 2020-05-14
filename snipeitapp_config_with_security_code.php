<?php
header('Content-Type: application/json');

/* THIS IS A SECURITY CODE, YOU CAN CHANGE IT IF YOU WANT - YOU WILL NEED TO CHANGE IT IN APP TOO */
define("USE_SECURITY", false); //  true/false SECURITY WILL BE CHECKED IF ENABLED
define("SECURITY_CODE", "95qn6cGO");

define("API_KEY", "Enter your api key here!!");

$data['api_key'] = API_KEY;

$securityCode = isset($_POST['securityCode']) ? $_POST['securityCode'] : null;
if((USE_SECURITY && $securityCode == SECURITY_CODE) || !USE_SECURITY)
{
  echo json_encode($data);
}
else
{
  http_response_code(403);
  die('Forbidden');
}