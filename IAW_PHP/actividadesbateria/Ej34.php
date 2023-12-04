<head>
    <title>Ej34</title>
</head>

<body >

<p><h1> velocidad de un coche.</h1></p>

<form action="Ej34.php" method="post">

<label for="velocidad"> Velocidad</label>
<input type="number" id="velocidad" name="velocidad">





<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //34. Dada la velocidad de un coche, expresada en km/h, necesitamos saber cuántos metros por segundos recorrer.

    $velocidad = $_POST["velocidad"];

   $metros = $velocidad * 0.28;

   echo "a $velocidad km/h son $metros metros por segundo";

   
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>