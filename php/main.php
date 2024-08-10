<?php
#sintaxis de PHP
#Tipos de variables

#Enteros
$entero = 10;

#Flotantes4
$decimal = 10.5;

#cadenas
$cadena = "hola mundo";

#booleanos
$verdadero = true;
$falso = false;
#ciclos
#ciclo for
for ($i=0; $i < ; $i++) { 
    echo $i . "<br>";
}
#ciclos
#ciclos while
$i = 0
while ($a <= 10) {
    echo $i . "<br>"; #para concatenar utilizo punto
    "$i++";
}
#ciclos do while
$i = 0;
do {
    echo $i . "<br>"
} while ($a <= 10);
#Estructuras de control
if ($verdadero) {
    echo "verdadero"
}else {
    echo "falso"
}
# if anidado
if ($verdadero) {
    if ($falso) {
        echo "verdadero";
    }else {
        echo "falso"
    }
}else {
    echo "falso";
}
#funciones
function suma($a, $b){
    return $a + $b;
}
#arrays
$array = array(1,2,3,4,5,6,7,8,9,10);
#Array de texto
$array = array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez",);
?>