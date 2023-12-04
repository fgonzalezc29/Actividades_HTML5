<head>
    <title>Ej22</title>
</head>

<body >

<p><h1>Area y longitud del circulo</h1></p>

<form action="Ej22.php" method="post">

<label for="radio"> Introduzca el radio del circulo</label>
<input type="number" id="radio" name="radio">



<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //22. Calcula la longitud (2*PI*R) y el área de un círculo (PI*R2) a partir de un radio dado.

    $radio = $_POST["radio"];
   

    $longitud = 2 * 3.14 * $radio;
    $area = 3.14 * ($radio*$radio);

    echo "La longitud del circulo es ".$longitud;
    echo "<br>";
    echo "El area del circulo es ".$area;

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>