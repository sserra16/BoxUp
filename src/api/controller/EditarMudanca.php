<?php
session_start();

include_once("../data.trait.php");

$idUsuario = $_SESSION["user"]["id"];
$status = $_POST["status"];

$service = new Service();

$result = $service->EditarStatus($idUsuario, $status);

if (!$result["resultado"]) {
  http_response_code(400);
}

echo json_encode($result);
