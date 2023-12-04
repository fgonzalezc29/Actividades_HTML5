<head>
    <title>Ej30</title>
</head>

<body >

<p><h1>intercambie los valores de ambas variables</h1></p>

<form action="Ej30.php" method="post">

<label for="cobro"> Introduzca cuanto cobras por hora</label>
<input type="number" id="cobro" name="cobro">

<br>

<label for="horas"> Introduzca las horas trabajadas</label>
<input type="number" id="horas" name="horas">



<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //30.A un trabajador le pagan según sus horas trabajadas y la tarifa está a un valor por hora. Si la cantidad de horas trabajadas es mayor a 40 horas, la tarifa por hora se incrementa en un 50% para las horas extras. Calcular el salario del trabajador dadas las horas trabajadas y la tarifa.


    $cobro = $_POST["cobro"];
    $horas = $_POST["horas"];
    $extra = $horas - 40;

    if ($horas > "40") {

        $Total = (40 * $cobro) + ($extra * ($cobro * 1.5));
        echo "Cobra: ".$Total;

    }else{
        echo "El precio es: ".($horas * $cobro);
    }

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>