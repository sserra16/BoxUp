<?php
session_start();
include_once("../data.trait.php");

$idUsuario = $_POST["idUsuario"];
$objetos = $_POST["objetos"];
$enderecoInicial = $_POST["enderecoInicial"];
$enderecoFinal = $_POST["enderecoFinal"];
$observacoes = $_POST["observacoes"];

$service = new Service();

$result = $service->CriarMudanca($idUsuario, $objetos, $enderecoInicial, $enderecoFinal, $observacoes);

if (!$result["resultado"]) {
  http_response_code(400);
}

if (!empty($result["data"])) {
  $_SESSION["user"] = $result["data"];
}

echo json_encode($result);
