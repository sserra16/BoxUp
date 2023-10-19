<?php

try {
    $PDO = new PDO('mysql:host=localhost;dbname=boxup;', 'root', '');
} catch (PDOException $erro) {
    echo 'Erro ao conectar com o MySQL: ' . $erro->getMessage();
};

