<?php

$hora = date("H");

// Determinar el saludo según la hora
if ($hora >= 6 && $hora < 12) {
    $saludo = "¡Buenos días!";
} elseif ($hora >= 12 && $hora < 18) {
    $saludo = "¡Buenas tardes!";
} elseif ($hora >= 18 && $hora < 24) {
    $saludo = "¡Buenas noches!";
} 
echo $saludo;
?>
