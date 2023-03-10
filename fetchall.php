<?php

$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$user = 'root';
$password = '';

//                   DSN


try {
    $conexao = new PDO($dsn, $user, $password);

    $query = 'select * from tb_usuarios';

    $conexao = $conexao->query($query);
    $lista =  $conexao->fetchAll(PDO::FETCH_OBJ); // pega oq tem la no banco de transforma em array
    // PDO::FETCH_ASSOC = valores associativos
    // PDO::FETCH_NUM = valor numericos
    //PDO::FETCH_OBJ = retorna objeto


    echo "<pre>";
    print_r($lista);

    for ($cont = 0; $cont <= 2; $cont++) {
        echo $lista[$cont]->nome . "<br>";
    }
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getCode() . " " . $e->getMessage();
}
?><!-->