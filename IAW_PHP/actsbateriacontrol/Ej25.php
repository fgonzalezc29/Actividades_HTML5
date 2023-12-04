<head>
    <title>Ej25</title>
</head>

<body >

<p><h1> Leer un número de un dígito y escribir su correspondiente en letra según el alfabeto castellano</h1></p>

<form action="Ej25.php" method="post">

<label for="dia"> Elige un numero de un digito: </label>
<input type="number" id="dia" name="dia" >


<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //25. Leer un número de un dígito y escribir su correspondiente en letra según el alfabeto castellano.

    $numero=$_POST["dia"];
    $numero=chr($numero+64);

    echo "la letra del abecedario es : $numero" 


        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>