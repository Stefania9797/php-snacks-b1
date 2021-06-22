<?php 
//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
$random_number_array = range(0, 100);
shuffle($random_number_array );
$random_number_array = array_slice($random_number_array ,0,15);
echo "<pre>";
var_dump($random_number_array);
echo "</pre>";
?>