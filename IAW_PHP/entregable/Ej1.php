<head>
    <title>Ej1</title>
</head>

<body >

<form action="Ej1.php" method="post">

<label for="segundos"> Introduzca segundos</label>
<input type="number" id="segundos" name="segundos">

<br>

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //Crea un formulario que reciba una hora expresada en segundos. Se debe convertir en horas, minutos y segundos. Por último, visualizar la hora convertida.

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