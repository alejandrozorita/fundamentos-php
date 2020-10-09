<?php

$data = 'Texto';
//echo $data{0};

$post = '<br>texto mucho más largo';
$extract = substr($post, 0, 10);
//echo "$extract...[ver más]";
$cursos1 = 'javascript, PHP, laravel';
$cursos = explode(', ', $cursos1);
//var_dump($cursos);
$cursos2 = ['javascript', 'PHP', 'laravel'];
//echo implode(', ', $cursos2);

$cursoEspacio = '   texto  otro    ';
echo "<pre>";
//echo $cursoEspacio;
echo trim($cursoEspacio); // Quita espacios
echo ltrim($cursoEspacio); // quita espacios lado IZQ
echo rtrim($cursoEspacio); // Quita espacios lado DER
