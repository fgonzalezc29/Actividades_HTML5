<head>
    <title>Ej19</title>
</head>

<body >

<p><h1>Area cuadrado</h1></p>

<form action="Ej19.php" method="post">

<label for="lado"> Introduzca la longitud del lado</label>
<input type="number" id="lado" name="lado">

<br>

<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //19. Calcular el área de un cuadrado. El valor del lado será dado.


    $lado = $_POST["lado"];

    $area = $lado * $lado;

    echo "El area del cuadrado es ".$area;
    

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>