<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/parsley.min.js"></script>
    <script src="https://kit.fontawesome.com/5ae85dff3f.js" crossorigin="anonymous"></script>
    <title>Formulário</title>
</head>

<body>

    <div class="container border rounded p-5 mt-5 shadow">

        <?php
        // MOSTRAR OS ERROS DO PHP NA TELA
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        if ($_POST) {

            $nome = $email = $genero = '';

            if (isset($_POST['nome']))
                $nome = $_POST['nome'];

            if (isset($_POST['email']))
                $email = trim($_POST['email']);

            if (isset($_POST['genero']))
                $genero = trim($_POST['genero']);

            // VERIFICA SE O NOME E O EMAIL ESTÁ PREENCHIDO
            if (empty($nome)) {
                echo '<script>alert("Preencha o nome");history.back();</script>';
                exit;
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo '<script>alert("Preencha com um e-mail válido");history.back();</script>';
                exit;
            }

            //incluir o arquivo para conectar
            require 'conexao.php';

            //sql para gravar no banco
            $sql = "insert into cliente (nome, email, genero) values (?, ?, ?)";

            //preparar para execução
            $consulta = $pdo->prepare($sql);

            //passar os parametros
            $consulta->bindParam(1, $nome);
            $consulta->bindParam(2, $email);
            $consulta->bindParam(3, $genero);

            //executar
            if ($consulta->execute()) {
                echo '<script>alert("Sucesso! ' . $nome . ', ' . $email . '");history.back();</script>';
            } else {
                echo '<script>alert("Erro ao gravar dados!");history.back();</script>';
                //mostrar erro de execução
                echo $consulta->errorInfo()[2];
            }
        } else {
            header('location: form1.php');
        }

        ?>

    </div>

</body>

</html>