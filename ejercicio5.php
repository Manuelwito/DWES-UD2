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

    // Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 en el que deberás:
    // Crear tres variables con valores booleanos.
    // Mostrar una tabla de verdad para cada una de las operaciones, modificando los valores de las variables para reflejar todo el abanico de posibles combinaciones:
    // AND
    // OR
    // Utiliza la función var_export(mixed variable) para mostrar el valor booleano.
    // Un posible resultado de la ejecución del script para la tabla de verdad del operador AND con todas las variables a falso sería:
    // Guárdalo como ejercicio5.php
    function bool2str($bool)
    {
        if ($bool === false) {
            return 'FALSO';
        } else {
            return 'VERDADERO';
        }
    }
    
        $variable1 = true;
        
        $variable2 = true;
        
        $variable3 = true;

        $resultado = false;

        if ($variable1 == false && $variable2 == false && $variable3 == true)
            $resultado = false;
        else if($variable1 == false && $variable2 == true && $variable3 == true)
            $resultado = false;
        else if($variable1 == true && $variable2 == true && $variable3 == true)
            $resultado = true;
        else if($variable1 == true && $variable2 == true && $variable3 == false)
            $resultado = false;  
        else if($variable1 == true && $variable2 == false && $variable3 == false)
            $resultado = false; 
        else if($variable1 == false && $variable2 == true && $variable3 == false)
            $resultado = false;  
        else if($variable1 == false && $variable2 == false && $variable3 == false)
            $resultado = false; 


        echo "<style>";
        echo "table, tr, th, td{";
        echo "border: 1px solid #000000;";
        echo "text-align: center;}";        
        echo "</style>";

        

        echo "<table>";
        echo "<tr>";
        echo "  <th> Variable 1  </th>";
        echo "  <th> Variable 2 </th>";
        echo "  <th> Variable 3 </th>";
        echo "  <th> Resultado </th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> " . bool2str($variable1) . "</td>";
        echo "<td> " . bool2str($variable2) . "</td>";
        echo "<td> " . bool2str($variable3) . "</td>";
        echo "<td> " . bool2str($resultado) . "</td>";
        echo "</tr>";
        echo "</table>";
        

    ?>
</body>
</html>