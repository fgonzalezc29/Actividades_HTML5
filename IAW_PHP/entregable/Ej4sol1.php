<head>
    <title>Ej4 solucion 1</title>
</head>

<body >

<form action="Ej4sol1.php" method="post">

<label for="numero"> Introduce un numero</label>
<input type="numero" id="numero" name="numero">


<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //

    $numero = $_POST["numero"];
    

    for($i=1; $i <= $numero;$i++)
    {
        echo "El cuadrado de $i es: ".$i*$i."<br> El cubo de $i es: ".$i*$i*$i."<br>";

        

    }


    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>