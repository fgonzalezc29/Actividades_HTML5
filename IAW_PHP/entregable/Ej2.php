<head>
    <title>Ej2</title>
</head>

<body >

<form action="Ej2.php" method="post">

<label for="numero1"> Introduzca un numero</label>
<input type="number" id="numero1" name="numero1">

<br>

<label for="numero2"> Introduzca otro numero</label>
<input type="number" id="numero2" name="numero2">

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    if ($numero1 > $numero2)
    {
        $suma=$numero1 + $numero2;

        echo $suma;
    }
    elseif($numero1 >=20 && $numero1 <=30 && $numero2 >=20 && $numero2 <=30)
    {
        $doble=$numero1*2;
        $triple=$numero2*3;

        echo "El doble del primer numero es ".$doble."<br>";
        echo "El triple del segundo numero es ".$triple;
    }
    else
    {
        echo "nada";
    }

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>