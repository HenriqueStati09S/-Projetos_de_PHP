<?php
session_start();

$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    
    $_SESSION['mensagem de erro'] = 'O nome não pode estar vazio.!';
    header('location: index.php');
    return;

}

else if(strlen($nome) <= 3){
    $_SESSION['mensagem de erro'] = 'O nome deve ter mais que dois caracteres.!';
    header('location: index.php');
    return;

}

else if(strlen($nome) > 35){

    $_SESSION['mensagem de erro'] = 'O nome está muito extenso.!';
    header('location: index.php');
    return;

}

else if(empty($idade)){
    $_SESSION['mensagem de erro'] = 'A idade não pode estar vazio.!';
    header('location: index.php');
    return;

}

else if(!is_numeric($idade)){
    $_SESSION['mensagem de erro'] = 'Este campo só aceita números.!';
    header('location: index.php');
    return;

}



if($idade >= 6 && $idade <= 12){

    for($i = 0; $i <= count($categorias); $i++){

        if($categorias[$i] = 'infantil') /*
        $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " vai competir na categoria: ".$categorias[$i].".";
        header('location: index.php'); */
        echo "O nadador ".$nome. " vai competir na categoria: ".$categorias[$i].".";;

        break;

        }

}

else if($idade >= 12 && $idade <= 18){

    for($i=0; $i<=count($categorias); $i++){

        if($categorias[$i] = 'adolescente') 
        /*$_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " vai competir na categoria: ".$categorias[$i].".";
        header('location: index.php');
          */

          echo "O nadador ".$nome. " vai competir na categoria: ".$categorias[$i].".";;
          
          break;
           
        }

}

else{

    for($i=0; $i<=count($categorias); $i++){

        if($categorias[$i] = 'adulto') 
            /*
        $_SESSION['mensagem de sucesso'] = 'O nadador '.$nome. " vai competir na categoria: ".$categorias[$i].'.';
        header('location: index.php');   */
        echo "O nadador ".$nome. " vai competir na categoria: ".$categorias[$i].".";;

        break;
            
        }


}