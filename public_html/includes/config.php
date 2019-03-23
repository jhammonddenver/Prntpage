<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_KlaSXPamc404mmz3BXyi0Qd1",
  "publishable_key" => "pk_test_iLlHxQo8DPeT3s5oD4RUlgV6",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>