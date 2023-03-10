<?php

$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$user = 'root';
$password = '';

//                   DSN


try {
    $conexao = new PDO($dsn, $user, $password);

    $query = 'select * from tb_usuarios';

    //query on the run

    foreach ($conexao = $conexao->query($query) as $key => $valor) {
        print_r($valor);
    };
    $lista =  $conexao->fetchAll(PDO::FETCH_OBJ); // pega oq tem la no banco de transforma em array
    // PDO::FETCH_ASSOC = valores associativos para array
    // PDO::FETCH_NUM = valor numericos para array
    //PDO::FETCH_OBJ = retorna objeto



} catch (PDOException $e) {
    echo 'Erro: ' . $e->getCode() . " " . $e->getMessage();
}
?><!-->