<head>
    <title>Ej3</title>
</head>

<body >

<form action="Ej3.php" method="post">

<label for="minutos"> minutos de duracion</label>
<input type="number" id="minutos" name="minutos">


<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //

    $minutos = $_POST["minutos"];
    

    if ($minutos <= 3)
    {
        $inicial=10;
        echo "la llamada cuesta ".$inicial." centimos";
    }
    else
    {
        $inicial=10;
        $adicional=5;
        $minad=$minutos-3;
        $mas3min=$inicial+($adicional*$minad);

        echo "La llamada cuesta ".$mas3min." centimos";
        

    }


    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>