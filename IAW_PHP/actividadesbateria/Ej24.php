<head>
    <title>Ej24</title>
</head>

<body >

<p><h1>Averiguar cantidad hombres, mujeres</h1></p>

<form action="Ej24.php" method="post">

<label for="chicos"> Introduzca cantidad de chicos</label>
<input type="number" id="chicos" name="chicos">

<br>

<label for="chicas"> Introduzca cantidad de chicas</label>
<input type="number" id="chicas" name="chicas">

<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //24.Un programa que dados la cantidad de alumnos y de alumnas que hay en tu clase, tras procesarlo, mostrará el porcentaje correspondiente a cada género.


    $chicos = $_POST["chicos"];
    $chicas = $_POST["chicas"];
    
    $total = $chicos + $chicas;

    $porcentajechicos= ($chicos / $total) * 100;

    $porcentajechicas= ($chicas / $total) * 100;
   

    echo "El porcentaje de chicos es ".$porcentajechicos."%";
    
    echo "<br>";

    echo "El porcentaje de chicas es ".$porcentajechicas."%";
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>