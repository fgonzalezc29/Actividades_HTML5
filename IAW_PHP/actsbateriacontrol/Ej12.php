<head>
    <title>Ej12</title>
</head>

<body >

<p><h1> programa que lea un número entero y realiza la suma de los 100 número siguientes</h1></p>

<form action="Ej12.php" method="post">

<label for="numero"> Introduzca un numero</label>
<input type="number" id="numero" name="numero">


<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //12. Escribir un programa que lea un número entero y realiza la suma de los 100 número siguientes, mostrando el resultado.

    $numero = $_POST["numero"];

    $suma = 0;

    for ($i=$numero + 1; $i <=$numero+100 ; $i++) { 
        
       $suma += $i ;


    }

    echo "El resultado es: ".$suma;
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>