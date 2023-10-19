<?php

include_once("../data.trait.php");

$idUsuario = $_POST["idUsuario"];

$service = new Service();

$result = $service->BuscarMudancas($idUsuario);

if (!$result["resultado"]) {
  http_response_code(400);
}

echo json_encode($result);
