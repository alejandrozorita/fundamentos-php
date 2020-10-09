<?php

/*
$greet = function ($name)
{
  return "Hola $name";
};

echo $greet('Alejandro');
*/

function greet(Closure  $lang, $name)
{
    return $lang($name);
}

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hi, $name";
};

echo greet($en, 'Alejandro');

