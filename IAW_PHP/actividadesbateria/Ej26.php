<head>
    <title>Ej26</title>
</head>

<body >

<p><h1>Incentivo sueldos </h1></p>

<form action="Ej26.php" method="post">

<label for="sueldo1"> Introduzca el sueldo del primer</label>
<input type="number" id="sueldo1" name="sueldo1">

<br>

<label for="sueldo2"> Introduzca el segundo sueldo</label>
<input type="number" id="sueldo2" name="sueldo2">

<br>

<label for="sueldo3"> Introduzca el tercer sueldo</label>
<input type="number" id="sueldo3" name="sueldo3">

<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //26.Tres empleados de una empresa de programación, han tenido la suerte de recibir un incentivo (incremento de su sueldo) en relación a su producción, respectivamente: 13%, 26% y 39%. Realiza un programa que calcule los nuevos sueldos.


    $sueldo1 = $_POST["sueldo1"];
    $sueldo2 = $_POST["sueldo2"];
    $sueldo3 = $_POST["sueldo3"];
    
    $incent1 = $sueldo1 * 1.13;
    $incent2 = $sueldo2 * 1.26;
    $incent3 = $sueldo3 * 1.39;

    
    echo "El primer sueldo con incentivo de 13% es ".$incent1."€";
    echo "<br>";
    echo "El primer sueldo con incentivo de 26% es ".$incent2."€";
    echo "<br>";
    echo "El primer sueldo con incentivo de 39% es ".$incent3."€";
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>