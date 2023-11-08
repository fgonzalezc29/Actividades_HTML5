<head>
    <title>Ej14</title>
</head>

<body >

<form action="Ej14.php" method="post">

<label for="segundos"> Introduzca segundos</label>
<input type="number" id="segundos" name="segundos">

<br>

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //15. Realiza un programa similar al anterior, pero con Kilobytes, es decir, dados unos kilobytes, los pasarás a megabytes y terabytes.

    $segundos = $_POST["segundos"];

    $minutos = $segundos / 60;
    $horas = $minutos / 60;

    echo "Esto son segundos:".$segundos;
    echo "<br>";
    echo "Esto son minutos:".$minutos;
    echo "<br>";
    echo "Esto son horas:".$horas;

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>