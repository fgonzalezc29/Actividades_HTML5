<head>
    <title>Ej24</title>
</head>

<body >

<p><h1> sentencia switch que escriba un mensaje en cada caso dado (por ejemplo días de la semana). Inclúyela en un bucle de prueba for. Utiliza un break tras cada caso y pruébalo. Elimina un break y vea qué ocurre.</h1></p>

<form action="Ej24.php" method="post">

<label for="dia"> Elige un dia de la semana: </label>
<input type="text" id="dia" name="dia" >


<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //23. 24. Implementa una sentencia switch que escriba un mensaje en cada caso dado (por ejemplo días de la semana). Inclúyela en un bucle de prueba for. Utiliza un break tras cada caso y pruébalo. Elimina un break y vea qué ocurre.

    $dia=$_POST["dia"];
    $dia = ucfirst(strtolower($dia));

    for($i=1; $i < 10; $i++)
    {
    switch($dia)
    {

        case "Lunes": echo "Has elegido el Lunes<br>"; break;
        case "Martes": echo "Has elegido el Martes<br>"; break;
        case "Miercoles": echo "Has elegido el Miercoles<br>"; break;
        case "Jueves": echo "Has elegido el Jueves<br>"; break;
        case "Viernes": echo "Has elegido el Viernes<br>"; break;
        case "Sabado": echo "Has elegido el Sabado<br>"; break;
        case "Domingo": echo "Has elegido el Domingo<br>"; break;
        default: echo "Me da ami que no"; break;
    }
}
        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>