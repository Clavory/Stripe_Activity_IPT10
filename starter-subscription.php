<?php
require_once('vendor/autoload.php');

$stripe = new \Stripe\StripeClient("sk_test_51LgIaPH2kNChhr3duoSKKwU9SwDwO1HOchCc2ZnoGcrXg5QeafFpFSV7OUM6N5RaI8MjBWpxRbyhrNvEHFbyhHPU00NrF5361u");

$product = $stripe->products->create([
  'name' => 'Starter Subscription',
  'description' => '$10/Month subscription',
]);
echo "Success! Here is your starter subscription product id: " . $product->id . "\n";

$price = $stripe->prices->create([
  'unit_amount' => 1200,
  'currency' => 'usd',
  'recurring' => ['interval' => 'month'],
  'product' => $product['id'],
]);
echo "Success! Here is your premium subscription price id: " . $price->id . "\n";

?>