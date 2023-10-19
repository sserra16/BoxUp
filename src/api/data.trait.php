<?php
class Service
{
  protected $con;

  public function __construct()
  {
    try {
      $this->con = new PDO('mysql:host=localhost;dbname=boxup;', 'root', '');
    } catch (PDOException $erro) {
      echo 'Erro ao conectar com o MySQL: ' . $erro->getMessage();
    };
  }

  public function Cadastrar($nome, $email, $senha, $cpf, $usuario): array
  {
    $retorno = [];

    try {
      $senhaCripto = md5($senha);
      $sql = "INSERT INTO usuario (nome, senha, usuario, cpf, email) VALUES ($nome, $senhaCripto, $usuario, $cpf, $email)";

      $stmt = $this->con->prepare($sql);
      $stmt->execute();

      $retorno["data"] = "";
      $retorno["message"] = "Usuário cadastrado";
    } catch (PDOException $e) {
      $retorno["message"] = $e->getMessage();
      $retorno["data"] = "";
    }

    return $retorno;
  }
}
