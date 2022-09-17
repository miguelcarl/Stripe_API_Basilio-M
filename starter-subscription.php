<?php
require_once "vendor/autoload.php";

$stripe = new \Stripe\StripeClient('sk_test_51LgJCHDcoeBD5k2VhD9IyFoieWixUFRZ6264yGzBqbU8pED2k7dNqEIVWKNkqOJD36GK9O084TAbeTpXOgwYaMDd00MEgIZIJw');  

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

