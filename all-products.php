<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgJCHDcoeBD5k2VhD9IyFoieWixUFRZ6264yGzBqbU8pED2k7dNqEIVWKNkqOJD36GK9O084TAbeTpXOgwYaMDd00MEgIZIJw'
);  
$result = $stripe->products->all(['limit' => 3]);
var_dump($result);