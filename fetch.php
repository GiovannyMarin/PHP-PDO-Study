<?php

$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$user = 'root';
$password = '';

//                   DSN


try {
    $conexao = new PDO($dsn, $user, $password);

    $query = 'select * from tb_usuarios where id = 6';

    $conexao = $conexao->query($query);
    $usuario =  $conexao->fetch(PDO::FETCH_OBJ); // pega apenas um dos registros
    // PDO::FETCH_ASSOC = valores associativos
    // PDO::FETCH_NUM = valor numericos
    //PDO::FETCH_OBJ = retorna objeto


    echo "<pre>";
    print_r($usuario);


    echo $usuario[6]->nome . "<br>";
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getCode() . " " . $e->getMessage();
}
?><!-->