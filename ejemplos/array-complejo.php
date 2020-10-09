<?php

$courses = [
  'frontend' => 'javascript',
  'framework' => 'laravel',
  'backend' => 'php'
];

array_walk($courses, 'upperCase');

function upperCase($course, $key)
{
    echo strtoupper($course) . " - $key ,";
}

/**
 * array_key_exists('frontend', $courses) // verifica si existe la key
 * in_array('javascript', $courses) // verifica si esiste la variable en el array
 * array_keys($courses) // Muestra todos los keys
 * array_values($courses) // Muestra todos los valores
 */