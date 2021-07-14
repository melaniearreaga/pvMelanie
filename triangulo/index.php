<?php
include 'include/class.triangulo';
$triangulo = new triangulo();
echo $triangulo->get_formulario();

if (isset($_post['guardar'])){
    echo "el resultado del area es igual a <strong>".$triangulo->area($_post['base'],$_post['altura'])
            . "</strong> el resultado del perimetro es igual a <strong>".$triangulo->perimetro($_post['base'],$_post['altura'])."</strong>";
}


