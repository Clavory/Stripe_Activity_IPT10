<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIaPH2kNChhr3duoSKKwU9SwDwO1HOchCc2ZnoGcrXg5QeafFpFSV7OUM6N5RaI8MjBWpxRbyhrNvEHFbyhHPU00NrF5361u'
);
$result = $stripe->products->all(['limit' => 3]);

var_dump($result); 