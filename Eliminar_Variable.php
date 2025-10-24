<?php

$marcas_comidas = array("KFC", "Dominos", "Frisby", "McDonals", "Dunkin Donuts");

$eliminar_comida = "Dunkin Donuts";
$valor = array_search($eliminar_comida, $marcas_comidas);

if ($valor !== false) {
unset($marcas_comidas[$valor]); 
}

print_r($marcas_comidas);

?>