<head>
    <title>Ej17</title>
</head>

<body >

<p><h1>De centígrados a Fahrenheit  </h1></p>

<form action="Ej17.php" method="post">

<label for="grados"> Introduzca grados Centigrados</label>
<input type="number" id="grados" name="grados">

<br>

<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //17. Un programa, dados los grados centígrados actuales. Tras introducirlos, los pasará a grados Fahrenheit:


    $grados = $_POST["grados"];

    $Fahrenheit = ($grados * 1.8) + 32;

    echo "<br>".$Fahrenheit;
    

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>