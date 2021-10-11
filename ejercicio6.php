<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 para un hospital que quiere comparar elementos, para ello requiere:
        // Dos variables:
        //Número de operaciones diarias de tipo string (valor que quieras).
        //Número de operaciones semanales de tipo entero (valor que quieras).
        //Dos constantes:
        //Máximo de operaciones diarias de tipo entero, con valor 6.
        //Máximo de operaciones semanales de tipo entero, con valor 30.
        //El resultado de la ejecución deberá mostrar:
        //Si el valor de operaciones diarias es mayor o igual que el máximo.
        //Si el valor de operaciones semanales es mayor o igual que el máximo.
        //Si el valor de operaciones diarias es idéntico al máximo.
        //Si el valor de operaciones diarias es distinto al de operaciones semanales.
        //NO USAR ESTRUCTURAS DE CONTROL, SOLO MOSTRAR EL RESULTADO DE LA OPERACIÓN.
        //Guárdalo como ejercicio6.php

        $opeD = 7;
        $opeS = 15;

        define('maxD' , 6);
        define('maxS' , 30);


        intval($opeD);

        echo $opeD;
        echo '<br>';
        echo $opeS;








    ?>
</body>
</html>