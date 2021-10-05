<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $base = 4;
    $altura = 8;
    $diagonalMayor = 30;
    $diagonalMenor = 12;
    $r = 4;
    define("PI" , 3.14159);
    
    $triangulo = ($base * $altura) /2;
    echo "El triangulo de base $base y altura $altura tiene un area de: $triangulo ";
    echo '<br>';
    $cuadrado = $base * $altura;
    printf( "El cuadrado de base $base y altura $altura tiene un area de: $cuadrado ");
    echo '<br>';
    $rombo = $diagonalMayor * $diagonalMenor /2;
    printf( "El rombo de base $base y altura $altura tiene un area de: $rombo ");
    echo '<br>';
    $circulo = PI * $r * $r;
    echo "El circulo de radio $r tiene un area de: $circulo ";
    



?>
<body>
    
</body>
</html>