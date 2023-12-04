<head>
    <title>Ej18</title>
</head>

<body >

<p><h1>Horas de trabajo, sueldo  </h1></p>

<form action="Ej18.php" method="post">

<label for="horas"> Introduzca las horas de trabajo</label>
<input type="number" id="horas" name="horas">

<br>

<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //18. Dada las horas trabajadas de una persona y el sueldo por hora, calcular su salario e imprimirlo.


    $horas = $_POST["horas"];

    $sueldo = $horas * 10;

    echo "Su sueldo a 10 euros la hora es ".$sueldo;
    

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>