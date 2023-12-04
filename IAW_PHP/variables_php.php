<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concepto de variables - PHP</title>
</head>

    <body>

        <h1>Concepto variables</h1>

        <?php //Etiqueta de apertura php

            #Vamos a ver el concepto de variables en programación
            echo "Instrucción 1";
            echo "<br> Instrucción 2";
            echo "<br> Instrucción 3";
            
            echo " <h2> ¿Qué es una variable en programación? </h2>";
            
            $VARIABLE = 3; //Definimos una variable y le asignamos un valor
            echo "<br>";
            echo $VARIABLE;
            echo "<br>";

            $VARIABLE = 13; //le asignamos un valor
            echo "<br>";
            echo $VARIABLE;
            echo "<br>";

            $patata = 20.5; //número decimal, float o double (ocupan más espacio en memoria)
            echo "<br>";
            echo $patata;
            echo "<br>";

            echo "<br>";
            echo $VARIABLE + $patata;
            echo "<br>";

            $dorito = "Hola clase, ¿Qué tal?"; //esto es una cadena, string
            echo "<br>";
            echo $dorito;
            echo "<br>";

            $verdad = true; //esto es un booleano (valor de verdad)
            #Solamente puede tomar dos valores: true (verdadero) or false (falso)
            echo "<br>";
            echo $verdad;
            echo "<br>";

        ?> <!-- Cierre de código php -->
        

    </body>

</html>