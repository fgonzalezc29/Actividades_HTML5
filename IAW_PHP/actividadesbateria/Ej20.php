<head>
    <title>Ej20</title>
</head>

<body >

<p><h1>Area Rectangulo</h1></p>

<form action="Ej20.php" method="post">

<label for="largo"> Introduzca la longitud del lado largo</label>
<input type="number" id="largo" name="largo">

<br>

<label for="corto"> Introduzca la longitud del lado corto</label>
<input type="number" id="corto" name="corto">

<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //20. Calcular el área de un rectángulo. Los valores serán dados.


    $largo = $_POST["largo"];
    $corto = $_POST["corto"];

    $area = $largo * $corto;

    echo "El area del rectangulo es ".$area;
    

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>