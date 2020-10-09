<?php
$courses = [
  'frontend' => 'javascript',
  'framework' => 'laravel',
  'backend' => 'php'
];
ksort($courses); // Ordena ascendente
krsort($courses); // Ordena descendente

echo "<pre>";
//var_dump($courses);

//var_dump(array_slice($courses, 1));// quita el primer elemento
//var_dump(array_chunk($courses, 2));// rompe el array en arrays de tamaño X
//var_dump(array_shift($courses));// Devuelve el primer elemento y lo elimina
var_dump(array_pop($courses));// Devuelve el ultimo elemento y lo elimina
var_dump(array_unshift());// Devuelve y agrega en la primera posicion
var_dump(array_push());// Devuelve el ultimo elemento y lo agrega al final
var_dump(array_flip($courses));// Cambia las keys por values