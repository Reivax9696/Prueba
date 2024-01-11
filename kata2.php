<?php


$estudiants = ["Xavier", "Anna", "Jose", "Jordi"];

$activitats = ["Presentar Masterclass", "Shortcut de la setmana"];


foreach ($estudiants as $estudiant){
    echo "Al estudiant " . $estudiants[(array_rand($estudiants))] . " li toca ". $activitats[(array_rand($activitats))]  . "<br>";
}

?>