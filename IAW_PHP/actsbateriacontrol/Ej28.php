<head>
    <title>Ej28</title>
</head>

<body >

<p><h1> Se le indicará al programa el área a calcular</h1></p>

<form action="Ej28.php" method="post">

<label for="cuenta"> Que quieres hacer: </label>
<input type="text" id="cuenta" name="cuenta" >

<br>

<label for="numero1"> Elige un numero </label>
<input type="number" id="numero1" name="numero1" >

<br>

<label for="numero2"> Elige un numero </label>
<input type="number" id="numero2" name="numero2" >

<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //28. Elaborar un programa que permita calcular diferentes tipos de áreas: trapecio, triángulo, cuadrado, rectángulo o círculo, en caso contrario indicar que no es una figura geométrica válida. Se le indicará al programa el área a calcular.
    $cuenta=$_POST["cuenta"];
    $cuenta=ucfirst(strtolower($cuenta));
    $numero1=$_POST["numero1"];
    $numero2=$_POST["numero2"];
    
    switch($cuenta)
    {

        case "Sumar": echo "La suma es: ".$numero1 + $numero2; break;
        case "Restar": echo "La resta es: ".$numero1 - $numero2; break;
        case "Dividir": echo "La division es: ".$numero1 / $numero2; break;
        case "Multiplicar": echo "La suma es: ".$numero1 * $numero2; break;
        default: echo "eeeeeeeee parao"; break;
    }

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>