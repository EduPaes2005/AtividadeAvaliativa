<?php
session_start();

require_once('classes/Usuario.php');
require_once('conexao/conexao.php');

$database = new Conexao();
$db = $database->getConnection();
$usuario = new Usuario($db);

if(isset($_POST['logar'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if($usuario->logar($nome, $senha)){
        $_SESSION['nome'] = $nome;
        header("Location: dashboard.php");
        exit();
    }else{
        print "<script>alert('Credenciais Inválidas')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://db.onlinewebfonts.com/s/14936bb7a4b6575fd2eee80a3ab52cc2?family=Feather+Bold"></script>
    <title>Tela de Login</title>
    <style>
        a{
            color: #1CB0F6;
            font-size: 15px;
            font-family: "Feather Bold";
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
            padding: 12px 20px;
            margin: 20px;
            margin-left: 900px;
            align-items: center;
            border: 2px solid #E5E5E5;
            border-radius: 16px;
            background-color: #FFFFFF;
        }
        
        form{
            max-width: 400px;
            margin: 0 auto;
        }

         h1{
            color: #3C3C3C;
            margin: 10px;
            font-size: 26px;
            text-align: center;
            font-family: "Feather Bold";
         }

         .login{
            display: flex;
            align-content: center;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            border-radius: 5px;
         }

         label{
            display: flex;
            margin-top: 10px;
            font-family: "Feather Bold";
         }

         input[type=text]{
            color: #000000;
            font-size: 15px;
            font-family: Georgia;
            border: 2px solid #E5E5E5;
            box-sizing: border-box;
            border-radius: 10px;
            width: 100%;
            margin: 8px 0;
            display: inline-block;
            padding: 12px 20px;
            background: #F7F7F7;
         }

         input[type=password]{
            color: #000000;
            font-size: 15px;
            font-family: Georgia;
            border: 2px solid #E5E5E5;
            box-sizing: border-box;
            border-radius: 10px;
            width: 100%;
            margin: 8px 0;
            display: inline-block;
            padding: 12px 20px;
            background: #F7F7F7;
         }

         button{
            color: #FFFFFF;
            font-size: 15px;
            font-family: "Feather Bold";
            letter-spacing: .8px;
            text-transform: uppercase;
            width: 100%;
            border: none;
            padding: 12px 20px;
            margin-top: 10px;
            border-radius: 12px;
            background-color: #1CB0F6;
         }
    </style>
</head>

<body>
    
<a href="cadastrar.php">Criar conta</a>

<form class="login"; method="POST">
    <h1>Entrar</h1>

    <label for="nome">Nome de usuário</label>
    <input type="text" name="nome" placeholder="Coloque seu nome">
    <label for="Senha">Senha</label>
    <input type="password" name="senha" placeholder="Coloque sua senha">

    <button type="submit" name="logar">Entrar</button>
</form>
</body>
</html>