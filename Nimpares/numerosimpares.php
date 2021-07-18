<?php

//presentar los numeros impares entre 1 y 60.

echo"<h1>tabla de los numeros impares entre 1 y 60</h1>";
    for($i = 1; $i <= 60; $i++){
        if($i%2==0){
            echo" El numero: ".  $i  . "  Es par". "<br/>";
        }else{
             echo" El numero: ".  $i  . "  Es impar". "<br/>";
    }
}
