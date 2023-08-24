<?php
session_start();

if(!isset($_SESSION['nome'])){
    header("Location: index.php");
    exit();
}

$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://db.onlinewebfonts.com/s/14936bb7a4b6575fd2eee80a3ab52cc2?family=Feather+Bold"></script>
    <title>Dashboard</title>
    <style>
        form{
            max-width:400px;
            margin:0 auto;
        }
        h1{
            color: #3C3C3C;
            font-family: "Feather Bold";
        }
    </style>
</head>
<body>
    <h1>Painel de Controle</h1>
    <p>Olá! <?php echo $nome; ?> </p>

    <a href="logout.php">Deslogar</a>
    
</body>
</html>