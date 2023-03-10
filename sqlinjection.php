<?php

//print_r($_POST);

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $user = 'root';
    $pass = '';

    try {

        $conexao = new PDO($dsn, $user, $pass);

        $query = "select * from tb_usuarios where ";
        $query .= "email = :usuario ";
        $query .= " AND senha = :senha ";
        // {} significa que eh um bloco de codigo php

        echo $query;

        $statement = $conexao->prepare($query);
        //n executa a query.
        //              onde bota o valor,     o valor,     tipo de dado a se considerar
        $statement->bindValue(':usuario', $_POST['usuario'], PDO::PARAM_INT);
        $statement->bindValue(':senha', $_POST['senha']);
        //remove as injecoes de sql

        $statement->execute();

        $usuario = $statement->fetch();

        print_r($usuario);


        //print_r($usuario);
    } catch (PDOException $err) {

        echo 'Erro: ' . $err->getCode() . 'Mensagem: ' . $err->getMessage();
    }
};


?><!---->

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form method='post' action='sqlinjection.php'>
        <input type="text" placeholder="Usuario" name='usuario' />
        <br>
        <input type="password" placeholder="Senha" name='senha' />
        <br>
        <button type="submit" '>Entrar</button>
    </form>

</body>

</html>