<?php

$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = 'Henrique';
$idade = 28;



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