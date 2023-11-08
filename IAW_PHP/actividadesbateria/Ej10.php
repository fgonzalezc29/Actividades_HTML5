<head>
    <title>Ej10</title>
</head>

<body >

<form action="Ej10.php" method="post">

<label for="cadena">Cadena de carácteres</label>
<input type="text" id="cadena" name="cadena">

<br>

<label for="numero">Numero</label>
<input type="number" id="numero" name="numero">

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //10.Modifica el programa anterior para solamente defina una variable, la cual cargue un valor en ella y lo muestre.

    $cadena = $_POST["cadena"];
    $numero = $_POST["numero"];
    $resultado = $cadena.$numero;

    echo "<br>".$resultado;
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>