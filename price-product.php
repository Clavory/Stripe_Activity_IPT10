<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIaPH2kNChhr3duoSKKwU9SwDwO1HOchCc2ZnoGcrXg5QeafFpFSV7OUM6N5RaI8MjBWpxRbyhrNvEHFbyhHPU00NrF5361u'
);
$result = $stripe->prices->retrieve(
  'price_1LgJtRH2kNChhr3d0ItDgSU0',
  []
);
var_dump($result);
