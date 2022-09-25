<?php

require_once "vendor/autoload.php"; 
use Twilio\Rest\Client;

$account_sid = "YOUR_TWILIO_ACCOUNT_SID";
$auth_token = "YOUR_TWILIO_AUTH_TOKEN";
$twilio_phone_number = "YOUR_TWILIO_PHONE_NUMBER";

$client = new Client($account_sid, $auth_token);

$client->messages->create(
    'DESTINATION_PHONE_NUMBER',
    array(
        "from" => $twilio_phone_number,
        "body" => "Alert! 
1. Maria's average sad this week = 84% over 13 hours, 4 days. Her learning time spent this week has fallen by 47%
2. Narula's average happiness this week = 71% over 22 hours, 4 days. Her learning time spent this week has increased by 34%"
    )
);
