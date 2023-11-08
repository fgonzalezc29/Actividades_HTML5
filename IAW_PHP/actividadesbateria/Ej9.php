<head>
    <title>Ej9</title>
</head>

<body >

<form action="Ej9.php" method="post">

<label for="cadena">Cadena de carácteres</label>
<input type="text" id="cadena" name="cadena">

<br>

<label for="numero">Numero</label>
<input type="number" id="numero" name="numero">

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //9. Crea un programa que imprima/escriba/muestre una cadena de caracteres y un numero

    $cadena = $_POST["cadena"];
    $numero = $_POST["numero"];

    echo "<br>".$cadena;
    echo "<br>".$numero;

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>