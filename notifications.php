<?php
require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-d81f7be9-ee11-4ff0-bf4e-20c36981d7bf');

//http_response_code(200);

switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
        break;
    case "plan":
        $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
        break;
    case "subscription":
        $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
        break;
    case "invoice":
        $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
        break;
}

/*$fichero = './payments.php';
// Abre el fichero para obtener el contenido existente
$actual = file_get_contents($fichero);
// Añade una nueva persona al fichero
$actual .= "John Smith\n";
// Escribe el contenido al fichero
file_put_contents($fichero, $actual);*/

?>