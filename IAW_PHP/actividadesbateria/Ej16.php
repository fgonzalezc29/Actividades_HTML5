<head>
    <title>Ej16</title>
</head>

<body >

<p><h1>Programa para saludar</h1></p>

<form action="Ej16.php" method="post">

<label for="nombre"> Introduzca un nombre</label>
<input type="text" id="nombre" name="nombre">

<br>

<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //16. Se pide un Algoritmo que muestre “Programa para saludar”. Posteriormente dados un nombre y muestra “Hola nombre” por pantalla.


    $saludo = $_POST["nombre"];

    echo "<br>";
    echo "Un saludo ".$saludo;

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>