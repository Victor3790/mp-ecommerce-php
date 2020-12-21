<?php

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181');

$fichero = 'payments.txt';
$actual = file_get_contents($fichero);
//$payment_decode = json_decode( $payment, true );

if( isset($_POST['type']) )
    $actual .= $_POST['type'];
else
    $actual .= 'No type available.';

file_put_contents($fichero, $actual);

switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
        $fichero = 'payments.txt';
        $actual = file_get_contents($fichero);
        //$payment_decode = json_decode( $payment, true );
        $actual .= $payment;
        file_put_contents($fichero, $actual);
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

/*$fichero = 'payments.txt';
$actual = file_get_contents($fichero);
$payment_decode = json_decode( $payment, true );
$actual .= 'Payment result: ' . $payment_decode;
file_put_contents($fichero, $actual);*/

?>