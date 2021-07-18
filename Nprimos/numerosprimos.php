<?php

//presentar los numeros primos entre 1 y 60.
$i=1;
$num=60;

echo"<h1>tabla de los numeros primos entre 1 y 60</h1>";
    for($i = 1; $i <= $num; $i++){
        if(getprimos($i)){
            echo" El numero: ".  $i  . "  Es primo". "<br/>";
        }else{
             echo" El numero: ".  $i  . "  No es primo". "<br/>";
        }
    }
function getprimos($num){
    $contador=0;
    for($i=1; $i<=$num; $i++){
    if ($num%$i==0){
        $contador = $contador+1;
    }
    }
    if ($contador==2){
        return true;
    }else{
        return false;
    }
}
