<head>
    <title>Ej29</title>
</head>

<body >

<p><h1>intercambie los valores de ambas variables</h1></p>

<form action="Ej29.php" method="post">

<label for="mes"> Introduzca un mes</label>
<input type="text" id="mes" name="mes">

<br>

<label for="precio"> Introduzca el precio</label>
<input type="number" id="precio" name="precio">



<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //29.Una tienda ofrece un descuento del 15% sobre el total de la compra durante el mes de octubre. Dado un mes y un importe, calcular cuál es la cantidad que se debe cobrar al cliente.


    $mes = $_POST["mes"];
    $precio = $_POST["precio"];
    
    if ($mes == "octubre") {
        echo "El precio rebajado es: ".$precio * 0.85;

    }else{
        echo "El precio es: ".$precio;
    }

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>