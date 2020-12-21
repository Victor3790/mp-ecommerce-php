<?php

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-d81f7be9-ee11-4ff0-bf4e-20c36981d7bf');

http_response_code(200);

$fichero = 'payments.txt';
$actual = file_get_contents($fichero);
$actual .= $_POST['data'];
file_put_contents($fichero, $actual);

?>