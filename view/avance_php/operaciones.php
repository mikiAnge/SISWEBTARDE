<?php
$numero = 0;

if ($numero > 0) {
    //Podemos imprimir en pantalla con echo
    echo "El número es positivo"."<br>";
} else {
    //Podemos imprimir en pantalla con print
    print "El número es negativo o cero."."<br>";
}
//Podemos incluir html en php, y tambien hacer un simplificado del if else
echo "<h1>"."El número es ".($numero > 0 ? "positivo":"negativo o cero")."</h1>";
//Funciones en php
function saludar($nombre) {
    return "hola, ".$nombre."🤗";
}

echo saludar("Miguel");
?>