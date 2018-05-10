<?php
require_once 'lib/unirest-php/src/Unirest.php';

$response = Unirest\Request::post("https://andruxnet-random-famous-quotes.p.mashape.com/?cat=famous&count=10",
  array(
    "X-Mashape-Key" => "GbhOWuS1QSmshWTp6n5AiDyXgS0sp15wl1Tjsnfen49kmLaaXb",
    "Content-Type" => "application/x-www-form-urlencoded",
    "Accept" => "application/json"
  )
);
echo json_encode($response->body);
?>