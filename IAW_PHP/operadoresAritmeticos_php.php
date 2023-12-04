<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - ARITMÉTICOS - PHP</title>
</head>

    <body>

        <h1>Concepto variables</h1>

        <?php //Etiqueta de apertura php

           echo "<br> Empieza nuestro código php";

           echo "<br> <h1> Operadores </h1>";
           echo "<br> <h2> Aritméticos </h2>";



            echo "<br> SUMA: (+)";

            echo "<br>";
            echo "<br>";
            $suma = 4 + 3; //Operador suma nos permite realizar la operación de suma
            echo $suma; //Aquí dará 7
            echo "<br>";


            $valor1 = 3; //Definición de una variable y asignación
            $valor2 = 13; //Definición de una variable y asignación
            $suma = $valor1 + $valor2;
            echo "<br>";
            echo $suma; //Aquí dará 16
            echo "<br>";
            echo "<br>";
            echo "<br>";



            
            echo "<br> RESTA: (-)";

            echo "<br>";
            echo "<br>";
            $resta = 4 - 3; //Operador resta nos permite realizar la operación de restar
            echo $resta; //Aquí dará 1
            echo "<br>";


            $valor1 = 3; //Definición de una variable y asignación
            $valor2 = 13; //Definición de una variable y asignación
            $resta = $valor2 - $valor1;
            echo "<br>";
            echo $resta; //Aquí dará 10
            echo "<br>";


            $resta = $valor1 - $valor2; /*AQUÍ NOS DARÁ EL RRESULTADO NEGATIVO ! */
            echo "<br>";
            echo $resta; //Aquí dará -10
            echo "<br>";
            echo "<br>";




            echo "<br> MULTIPLICACIÓN: (*)";

            echo "<br>";
            echo "<br>";
            $multiplicacion = 4 * 3; //Operador multiplicación nos permite realizar la operación de multiplicar
            echo $multiplicacion; //Aquí dará 12
            echo "<br>";


            $valor1 = 3; //Definición de una variable y asignación
            $valor2 = 13; //Definición de una variable y asignación
            $multiplicacion = $valor2 * $valor1;
            echo "<br>";
            echo $multiplicacion; //Aquí dará 39
            echo "<br>";


            $multiplicacion = $valor1 * $valor2;
            echo "<br>";
            echo $multiplicacion; //Aquí dará 39
            echo "<br>";
            echo "<br>";




            echo "<br> DIVISIÓN: (/)";

            echo "<br>";
            echo "<br>";
            $division = 3 / 3; //Operador división nos permite realizar la operación de dividir
            echo $division; //Aquí dará 1
            echo "<br>";


            $valor1 = 2; //Definición de una variable y asignación
            $valor2 = 10; //Definición de una variable y asignación
            $division = $valor2 / $valor1;
            echo "<br>";
            echo $division; //Aquí dará 5
            echo "<br>";


            $division = $valor1 / $valor2;
            echo "<br>";
            echo $division; //Aquí dará 0,2
            echo "<br>";
            echo "<br>";




            echo "<br> MÓDULO O RESTO: (%)"; //es útil si queremos ver que un nº es múltiplo de otro, divisor... si es par, impar...

            echo "<br>";
            echo "<br>";
            $resto = 4 % 2; //Operador resto nos permite saber el resto de la división
            echo $resto; 
            echo "<br>";

            
            echo "<br>";
            $resto = 5 % 2; //Operador resto nos permite saber el resto de la división
            echo $resto; 
            echo "<br>";

            
            echo "<br>";
            $resto = 5 % 3; //Operador resto nos permite saber el resto de la división
            echo $resto; 
            echo "<br>";

            
            echo "<br>";
            $resto = 3 % 3; //Operador resto nos permite saber el resto de la división
            echo $resto; 
            echo "<br>";


            echo "<br>";
            $resto = 2 % 3; //Operador resto nos permite saber el resto de la división
            echo $resto; //como no se puede dividir y aquí no opera con decimales, nos dará de resto el número más pequeño
            echo "<br>";


            echo "<br>";
            $resto = 5 % 7; //Operador resto nos permite saber el resto de la división
            echo $resto; //igual que el anterior
            echo "<br>";




            echo "<br> POTENCIA: (**)";

            echo "<br>";
            echo "<br>";
            $potencia = 4 ** 2; //Operador resto nos permite saber el resto de la división
            echo $potencia; 
            echo "<br>";




           echo "<br>Termina nuestro código php";

        ?> <!-- Cierre de código php -->
        

    </body>

</html>