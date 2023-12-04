<head>
    <title>Ej28</title>
</head>

<body >

<p><h1>intercambie los valores de ambas variables</h1></p>

<form action="Ej28.php" method="post">

<label for="num1"> Introduzca un numero</label>
<input type="number" id="num1" name="num1">

<br>

<label for="num2"> Introduzca otro numero</label>
<input type="number" id="num2" name="num2">



<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //28.Dadas dos variables numéricas A y B, que el usuario debe teclear, se pide realizar un algoritmo que intercambie los valores de ambas variables y muestre cuánto valen al final las dos variables


    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    
    $cambio = $num1;
    $num1 = $num2;
    $num2 = $cambio;

    
    echo "Esto es la segunda variable".$num1;
    echo "<br>";
    echo "Esto es la primera variable".$num2;

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>