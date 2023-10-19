<?php

include_once("../data.trait.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$service = new Service();

$result = $service->Cadastrar($nome, $email, $senha, $cpf, $usuario);

if (!$result["resultado"]) {
  http_response_code(400);
}

echo json_encode($result);
