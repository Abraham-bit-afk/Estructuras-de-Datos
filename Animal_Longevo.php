<?php

$animales = array("Perro", "Gato", "Elefante", "Tortuga", "Caballo", 
"Ballena", "Leon", "Aguila", "Tiburon", "Cocodrilo");

$edades = array(13,15,70,190,30,90,14,25,50,100);


$pila = array();


for ($i = 0; $i < 10; $i++) 
    {
    array_push($pila, $animales[$i]);
    }


$mayor_edad = $edades[0];
$animal_mas_longevo = $animales[0];

for ($i = 0; $i < 10; $i++) 
    {
    if ($edades[$i] > $mayor_edad) 
        {
        $mayor_edad = $edades[$i];
        $animal_mas_longevo = $animales[$i];
        }
    }


echo " El animal msa longevo es: $animal_mas_longevo";
echo " Con una edad de: ",$mayor_edad," años";
?>