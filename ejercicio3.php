<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $precioPantalon = 29.99;
    $numeroPantalonesComprados = 3;
    $precioCamisa = 25.99;
    $numeroCamisasCompradas = 2;
    
    define("DESCUENTO" , 8);
    echo "El precio de un pantalon es $precioPantalon";
    echo '<br>';
    echo "El precio de una camisa es $precioCamisa";
    echo '<br>';
    $total = ($precioCamisa * 2) + ($precioPantalon * 3);
    $totalDescuento = $total - DESCUENTO;


    echo "El total sin el descuento es: $total";
    echo '<br>';
    echo "El total sin el descuento es: $totalDescuento";
    echo '<br>';

    
?>
<body>
    
</body>
</html>