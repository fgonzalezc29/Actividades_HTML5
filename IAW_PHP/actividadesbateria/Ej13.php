<head>
    <title>Ej13</title>
</head>

<body >

<form action="Ej13.php" method="post">

<label for="numero">Numero</label>
<input type="number" id="numero" name="numero">

<br>

<label for="numero2">Numero2</label>
<input type="number" id="numero2" name="numero2">

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //13.Algoritmo que dado dos valores reales y los sume mostrando la suma por pantalla.

    $numero = $_POST["numero"];
    $numero2 = $_POST["numero2"];

    $resultado = $numero + $numero2;

    echo "<br>".$resultado;

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>