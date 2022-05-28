<?php
session_start();
?>

<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuilário de inscrição</title>
</head>
<body>

    <p> Formuário de inscrição </p>
    
    <form action="script.php" method="post">
    
    <p>Seu nome: <input type="text" name="nome"> </p>
    <p>Seu idade: <input type="text" name="idade"> </p>
    <p><input type="submit" value="Enviar dados do competidor"></p>

    <?php
    if(true){
    $mensagemDeSucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
    if(!empty($mensagemDeSucesso)){
        echo $mensagemDeSucesso;
        } 

     }else{
    $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
    if(!empty($mensagemDeErro)){
        echo $mensagemDeErro;
    }   
}
    ?>

    </form>

</body>
</html>