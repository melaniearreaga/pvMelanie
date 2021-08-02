<?php
$num1_POST['n1'];
$num2=$_POST['num2'];
$opc=$_POST["operaciones"];
$resultado=$_post["resultado"];
if(isset($_GET["enviar"])){
    switch ($opc){
        case '$suma';
            $resultado=$num1+num2;
            echo "la suma de ".$num1."+".$num2."="==$resultado;
            break;
           case '$resta';
            $resultado=$num1-num2;
            echo "la suma de ".$num1."-".$num2."="==$resultado;
            break;  
             case '$multiplicacion';
            $resultado=$num1*num2;
            echo "la suma de ".$num1."*".$num2."="==$resultado;
            break;  
             case '$division';
            $resultado=$num1/num2;
            echo "la suma de ".$num1."/".$num2."="==$resultado;
            break;  
}
}
