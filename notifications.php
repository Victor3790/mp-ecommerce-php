<?php

http_response_code(200);

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181');

$json = file_get_contents('php://input');

$fichero = 'payments.txt';
$actual = file_get_contents($fichero);
$actual .= $json;
file_put_contents($fichero, $actual);

?>