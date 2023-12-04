<head>
    <title>Ej21</title>
</head>

<body >

<p><h1>Area triangulo</h1></p>

<form action="Ej21.php" method="post">

<label for="altura"> Introduzca la longitud del lado largo</label>
<input type="number" id="altura" name="altura">

<br>

<label for="base"> Introduzca la longitud del lado corto</label>
<input type="number" id="base" name="base">

<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //21. Calcular el área de un triángulo. Los valores serán dados.


    $altura = $_POST["altura"];
    $base = $_POST["base"];

    $area = $altura * $base / 2;

    echo "El area del triangulo es ".$area;
    

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>