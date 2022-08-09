<?php

require __DIR__ . '/vendor/autoload.php';

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

// Lê o arquivo json com suas credenciais
$file = file_get_contents(__DIR__ . '/credentials.json');
$options = json_decode($file, true);

var_dump($_POST);

if (isset($_POST)) {
   
     $repass_1 = [
        'payee_code' => "431f766eb8ea7eed2eb91b35926972c1", // identificador da conta Gerencianet (repasse 1)
        'percentage' => 2500 // porcentagem de repasse (5000 = 50%)
      ];
       
      $repass_2 = [
        'payee_code' => "9135ffa0abb9233003c783b99199b36b", // identificador da conta Gerencianet (repasse 2)
        'percentage' => 5000 // porcentagem de repasse (5000 = 50%)
      ];
       
      $repasses = [
        $repass_1,
        $repass_2
      ];

    $item_1 = [
        'name' => $_POST["descricao"],
        'amount' => (int) $_POST["quantidade"],
        'value' => (int) $_POST["valor"]
    ];

    $items = [
        $item_1
    ];


    $customer = [
        'name' => $_POST["nome_cliente"],
        'cpf' => $_POST["cpf"],
        'phone_number' => $_POST["telefone"],
        'email' => $_POST["email"],
        'birth' => $_POST["nascimento"]
    ];

    $paymentToken = $_POST["payment_token"];

    $billingAddress = [
        'street' => $_POST["rua"],
        'number' => $_POST["numero"],
        'neighborhood' => $_POST["bairro"],
        'zipcode' => $_POST["cep"],
        'city' => $_POST["cidade"],
        'state' => $_POST["estado"],
    ];

    $creditCard = [
        'installments' => (int) $_POST["installments"],
        'billing_address' => $billingAddress,
        'payment_token' => $paymentToken,
        'customer' => $customer
    ];

    $payment = [
        'credit_card' => $creditCard
    ];

    $body = [
        'items' => $items,
        'payment' => $payment
    ];

    try {
        $api = new Gerencianet($options);
        $charge = $api->oneStep([], $body);

        echo json_encode($charge);
    } catch (GerencianetException $e) {
        print_r($e->code);
        print_r($e->error);
        print_r($e->errorDescription);
    } catch (Exception $e) {
        print_r($e->getMessage()); //para chamar a chamada de vide, apenas chamar o link
    }
}
