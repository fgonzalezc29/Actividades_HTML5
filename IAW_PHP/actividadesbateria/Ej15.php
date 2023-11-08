<head>
    <title>Ej15</title>
</head>

<body >

<form action="Ej15.php" method="post">

<label for="kilobytes"> Introduzca kilobytes</label>
<input type="number" id="kilobytes" name="kilobytes">

<br>

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //15. Realiza un programa similar al anterior, pero con Kilobytes, es decir, dados unos kilobytes, los pasarás a megabytes y terabytes.

    $kilobytes = $_POST["kilobytes"];

    $megabytes = $kilobytes / 1024;
    $terabytes = $megabytes / 1024;

    echo "Esto son kilobytes:".$kilobytes;
    echo "<br>";
    echo "Esto son megabytes:".$megabytes;
    echo "<br>";
    echo "Esto son terabytes:".$terabytes;

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>