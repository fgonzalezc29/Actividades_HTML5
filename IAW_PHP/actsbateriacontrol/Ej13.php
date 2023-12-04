<head>
    <title>Ej13</title>
</head>

<body >

<p><h1> programa que convierta de euros a dólares</h1></p>

<form action="Ej13.php" method="post">

<label for="numero"> Introduzca un numero</label>
<input type="number" id="numero" name="numero" step="any">


<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //13. Escribir un programa que convierta de euros a dólares. Recibirá un número decimal correspondiente a la cantidad en euros y contestará con la cantidad correspondiente en dólares.

    $euro = $_POST["numero"];

    $dolar = $euro * 1.09;


    echo "El resultado en dolares es : ".$dolar;
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>