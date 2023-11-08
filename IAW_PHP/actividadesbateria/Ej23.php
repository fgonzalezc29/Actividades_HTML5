<head>
    <title>Ej23</title>
</head>

<body >

<p><h1>Area y longitud del circulo</h1></p>

<form action="Ej23.php" method="post">

<label for="sinrebaja"> Introduzca el precio sin rebaja</label>
<input type="number" id="sinrebaja" name="sinrebaja">



<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //23.Debido a la nueva situación excepcional, una farmacia va a aplicar un descuento a sus productos del 10%. Realizar un programa que muestre el nuevo precio de un artículo dado.


    $sinrebaja = $_POST["sinrebaja"];
   

    $conrebaja = $sinrebaja * 0.9;
   

    echo "El precio rebajado es ".$conrebaja."€";
    

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>