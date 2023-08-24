<?php
    require_once('classes/Usuario.php');
    require_once('conexao/conexao.php');

    $database = new Conexao();
    $db = $database->getConnection();
    $usuario = new Usuario($db);

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confSenha'];

        if($usuario->cadastrar($nome, $email, $senha, $confSenha)){
            echo "Cadastro efetuado com sucesso!";
        }else{
            echo "Erro ao cadastrar!";
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://db.onlinewebfonts.com/s/14936bb7a4b6575fd2eee80a3ab52cc2?family=Feather+Bold"></script>
    <title>Document</title>
    <style>
        form{
            max-width: 400px;
            margin: 0 auto;
        }

        h1{
            font-size: 33px;
            text-align: center;
            color: #3C3C3C;
            font-family: "Feather Bold";
        }

        label{
            display: flex;
            margin-top: 10px;
            font-family: "Feather Bold";
        }

        input[type=text]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            font-family: Georgia;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=email]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            font-family: Georgia;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=password]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            font-family: Georgia;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
         }
        
         button {
            background-color: #1CB0F6;
            color: white;
            padding: 12px 20px;
            border: none;
            font-size: 15px;
            text-transform: uppercase;
            font-family: "Feather Bold";
            margin-top: 20px;
            margin-right: 140px;
            border-radius: 4px;
            left: 0;
            cursor: pointer;
            float: right;
         }
        
         a{
            display: inline-block;
            padding: 12px 20px;
            background-color: #FFFFFF;
            color: #1CB0F6;
            align-items: center;
            text-decoration: none;
            font-size: 15px;
            font-family: "Feather Bold";
            border-radius: 4px;
            margin-top: 20px;
            margin-left: 518px;
        }

    </style>
</head>
<body>

<form method="POST">
    <h1>Crie seu Perfil</h1>
    <label for="">Nome de usúario</label>
    <input type="text" name="nome">
    <label for="">E-mail</label>
    <input type="email" name="email">
    <label for="">Senha</label>
    <input type="password" name="senha" maxlength="8">
    <label for="">Confirmar senha</label>
    <input type="password" name="confSenha" maxlength="8">

    <button type="submit" name="cadastrar">Cadastrar</button>
</form>

    <a href="index.php">Voltar para tela de login</a>

</body>
</html>