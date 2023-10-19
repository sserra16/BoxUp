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

  public function Cadastrar($nome, $email, $senha, $cpf, $usuario, $motorista): array
  {
    $retorno = [];

    try {
      $senhaCripto = md5($senha);
      $sql = "INSERT INTO usuario (nome, senha, usuario, cpf, email, motorista) VALUES ('$nome', '$senhaCripto', '$usuario', '$cpf', '$email', $motorista)";

      $stmt = $this->con->prepare($sql);
      $stmt->execute();

      $retorno["data"] = "";
      $retorno["message"] = "Usuário cadastrado";
      $retorno["resultado"] = true;
    } catch (PDOException $e) {
      $retorno["error"] = $e->getMessage();
      $retorno["resultado"] = false;
      $retorno["data"] = "";
    }

    return $retorno;
  }

  public function Logar($email, $senha): array
  {
    $retorno = [];

    try {
      $senhaCripto = md5($senha);
      $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senhaCripto'";

      $query = $this->con->query($sql);

      $usuario = $query->fetch(PDO::FETCH_ASSOC);

      if (!$usuario) {
        $retorno["error"] = "Erro ao logar!";
        $retorno["resultado"] = false;
        $retorno["data"] = "";
      } else {
        $retorno["data"] = $usuario;
        $retorno["message"] = "Usuário Logado";
        $retorno["resultado"] = true;
      }
    } catch (PDOException $e) {
      $retorno["error"] = $e->getMessage();
      $retorno["resultado"] = false;
      $retorno["data"] = "";
    }

    return $retorno;
  }
}
