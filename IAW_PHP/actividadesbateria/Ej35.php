<head>
    <title>Ej35</title>
</head>

<body >

<p><h1> calcule la nota final de un alumno.</h1></p>

<form action="Ej35.php" method="post">

<label for="nota1"> nota1tri</label>
<input type="number" id="nota1" name="nota1">

<br>

<label for="nota2"> nota2tri</label>
<input type="number" id="nota2" name="nota2">

<br>

<label for="nota3"> nota3tri</label>
<input type="number" id="nota3" name="nota3">





<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //35.Los porcentajes de cada uno de los trimestres de matemáticas para este nuevo curso serán 20%, 50% y 30% respectivamente. Realiza un programa que calcule la nota final de un alumno, aplicando estos porcentajes, a partir de sus notas parciales

    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $media = ($nota1*0.2 + $nota2*0.5 + $nota3*0.3);

   echo "La media de estas 3 notas es: ".$media;

   
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>