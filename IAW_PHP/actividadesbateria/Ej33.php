<head>
    <title>Ej33</title>
</head>

<body >

<p><h1> calcula la hipotenusa.</h1></p>

<form action="Ej33.php" method="post">

<label for="cateto1"> Introduzca un cateto</label>
<input type="number" id="cateto1" name="cateto1">

<br>

<label for="cateto2"> Introduzca otro cateto</label>
<input type="number" id="cateto2" name="cateto2">



<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //33. Dados los catetos de un triángulo, calcula su hipotenusa.


    $cateto1 = $_POST["cateto1"];
    $cateto2 = $_POST["cateto2"];
    
    $hipotenusa = sqrt($cateto1*$cateto1 + $cateto2*$cateto2);

    echo"La hipotenusa con estos catetos es: ".$hipotenusa;
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>