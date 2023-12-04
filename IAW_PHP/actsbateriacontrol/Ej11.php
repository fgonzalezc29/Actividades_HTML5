<head>
    <title>Ej11</title>
</head>

<body >

<p><h1> programa que sume los cuadrados de los cien primeros números naturales</h1></p>




<?php //Etiqueta de apertura php

    //11. Escribir un programa que sume los cuadrados de los cien primeros números naturales, mostrando el resultado en pantalla.

    $numero = 0;

    for ($i=1; $i <=100 ; $i++) { 
        
       $numero += $i * $i;


    }

    echo "El resultado es: ".$numero;
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>