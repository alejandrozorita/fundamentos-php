<?php

$text = "<h2>PHP es un Lenguajes programación</h2>";

//echo strtolower($text); // minuscula
//echo strtoupper($text); // mayuscula
//echo ucfirst($text); // mayuscula primera
//echo lcfirst($text); // minuscula primera


$code = 30;
//echo str_pad($code, 10, '#');
//echo str_pad($code, 10, '#', STR_PAD_BOTH);
//echo str_pad($code, 10, '#', STR_PAD_LEFT);
//echo str_pad($code, 10, '#', STR_PAD_RIGHT);

//echo strip_tags($text); // Limpia HTML

//echo strtoupper($text); // monobyte, no pone el acento en mayúscula
echo mb_strtoupper($text); // multibyte,  pone el acento en mayúscula