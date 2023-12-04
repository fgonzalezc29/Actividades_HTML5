<head>
    <title>Ej14</title>
</head>

<body >

<p><h1> programa que calcule el área de un rectángulo </h1></p>

<form action="Ej14.php" method="post">

<label for="altura"> Introduzca la altura</label>
<input type="number" id="altura" name="altura" step="any" >

<br>

<label for="anchura"> Introduzca la anchura</label>
<input type="number" id="anchura" name="anchura" step="any">

<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //14. Escribir un programa que calcule el área de un rectángulo del cual se le proporcionará por el teclado su altura y anchura (números decimales).

    $altura = $_POST["altura"];
    $anchura = $_POST["anchura"];

    $area = $anchura * $altura;


    echo "El area es : ".$area;
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>