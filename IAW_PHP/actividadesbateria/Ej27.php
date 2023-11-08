<head>
    <title>Ej27</title>
</head>

<body >

<p><h1>Suma, resa, div y multi </h1></p>

<form action="Ej27.php" method="post">

<label for="num1"> Introduzca un numero</label>
<input type="number" id="num1" name="num1">

<br>

<label for="num2"> Introduzca otro numero</label>
<input type="number" id="num2" name="num2">



<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //27.Algoritmo que dados dos números, calculando y escribiendo el valor de su suma, resta, producto y división.


    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $division = $num1 / $num2;
    $multi = $num1 * $num2;

    
    echo "La suma de los dos numeros es ".$suma;
    echo "<br>";
    echo "La resta de los dos numeros es ".$resta;
    echo "<br>";
    echo "La division de los dos numeros es ".$division;
    echo "<br>";
    echo "La multiplicacion de los dos numeros es ".$multi;

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>