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
    // PDO::FETCH_ASSOC = valores associativos para array
    // PDO::FETCH_NUM = valor numericos para array
    //PDO::FETCH_OBJ = retorna objeto


    //echo "<pre>";
    //print_r($lista);
    //            obj      indi     valor do indice
    foreach ($lista as $key => $value) {
        echo $value->nome . " " . $value->email . " " . $value->senha;
        echo '<hr>';
    }

    //for ($cont = 0; $cont <= 2; $cont++) {
    //   echo $lista[$cont]->nome . "<br>";
    //}
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getCode() . " " . $e->getMessage();
}
?><!-->