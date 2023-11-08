<head>
    <title>Ej11</title>
</head>

<body >

<form action="Ej11.php" method="post">

<label for="nota1">nota1</label>
<input type="number" id="nota1" name="nota1">

<br>

<label for="nota2">nota2</label>
<input type="number" id="nota2" name="nota2">

<br>

<label for="nota3">nota3</label>
<input type="number" id="nota3" name="nota3">

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //11. Este módulo está dividido en tres bloques. Dadas tres notas de un alumno, calcula su media

    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $media = ($nota1 + $nota2 + $nota3)/3;
   

    echo "<br>".$media;
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>