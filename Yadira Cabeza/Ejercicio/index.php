<?php
$hora = date("H");

if ($hora < 12) {
    echo "¡Buenos días!";
} elseif ($hora < 18) {
    echo "¡Buenas tardes!";
} else {
    echo "¡Buenas noches!";
}
?>
