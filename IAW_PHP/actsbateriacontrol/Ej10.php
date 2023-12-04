<head>
    <title>Ej10</title>
</head>

<body >

<p><h1> programa que multiplique los 20 primeros número naturales</h1></p>




<?php //Etiqueta de apertura php

    //10. Escribir un programa que multiplique los 20 primeros número naturales (1*2*3*4*5…) y muestre el resultado.

    $numero = 1;

    for ($i=1; $i <=20 ; $i++) { 
        
       $numero *= $i;


    }

    echo "El resultado es: ".$numero;
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>