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
    header('location: teste.php');

}

if(strlen($nome) <= 3){
    $_SESSION['mensagem de erro'] = 'O nome deve ter mais que dois caracteres.!';
    header('location: teste.php');
}

if(strlen($nome) > 35){

    $_SESSION['mensagem de erro'] = 'O nome está muito extenso.!';
    header('location: teste.php');
}

if(empty($idade)){
    $_SESSION['mensagem de erro'] = 'A idade não pode estar vazio.!';
    header('location: teste.php');
}

if(!is_numeric($idade)){
    $_SESSION['mensagem de erro'] = 'Este campo só aceita números.!';
    header('location: teste.php');
}



if($idade >= 6 && $idade <= 12){

    for($i = 0; $i <= count($categorias); $i++){

        if($categorias[$i] = 'infantil') 
            echo "O nadador ".$nome. " vai competir na categoria: ".$categorias[$i].".";
        break;

        }

}

else if($idade >= 12 && $idade <= 18){

    for($i=0; $i<=count($categorias); $i++){

        if($categorias[$i] = 'adolescente') 
            echo 'O nadador '.$nome. " vai competir na categoria: ".$categorias[$i].'.';
            break;
           
        }

}

else{

    for($i=0; $i<=count($categorias); $i++){

        if($categorias[$i] = 'adulto') 
            echo 'O nadador '.$nome. " vai competir na categoria: ".$categorias[$i].'.';
        
            break;
            
        }


}