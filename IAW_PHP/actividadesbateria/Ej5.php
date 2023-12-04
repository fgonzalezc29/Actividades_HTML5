<head>
    <title>Ej5</title>
</head>

<body >



<form action="Ej5.php" method="post">

<label for="valor1" >Introduzca un numero</label>
<input type="text" id="valor1" name="valor1">
<br>
<label for="valor2" >Introduzca otro numero</label>
<input type="text" id="valor2" name="valor2">

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //5. Crea un programa que dados dos números y muestre su suma.
        
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    $suma = $valor1 + $valor2;
    echo "$suma";

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>