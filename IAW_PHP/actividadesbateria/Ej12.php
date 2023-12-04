<head>
    <title>Ej12</title>
</head>

<body >

<form action="Ej12.php" method="post">

<label for="cadena">Cadena de carácteres</label>
<input type="text" id="cadena" name="cadena">

<br>

<label for="numero">Numero</label>
<input type="number" id="numero" name="numero">

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //12.Algoritmo que dados dos valores uno real y otro de tipo cadena, muestre el contenido de cada una de las variables

    $cadena = $_POST["cadena"];
    $numero = $_POST["numero"];

    echo "<br>".$cadena;
    echo "<br>".$numero;

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>