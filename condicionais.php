<?php

//IF
$idade = 17;
$idade++;

if($idade >= 18){
    echo "Ele tem $idade anos e é maior de idade".'<br>';
}else{
    echo "Ele tem $idade anos e é menor de idade".'<br>';
};

//CONDICIONAL TERNARIO

echo ($idade <= 18)? "menor de idade".'<br>' : "maior de idade".'<br>';

$resultado = ($idade <= 18)? "menor de idade".'<br>' : "maior de idade".'<br>';

echo $resultado;