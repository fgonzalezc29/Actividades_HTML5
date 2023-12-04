<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - ASIGNACIÓN - PHP</title>
</head>

    <body>

        <h1>Concepto variables</h1>

        <?php //Etiqueta de apertura php

           echo "<h1> Operadores de asignación </h1>";

                $doritos = 3;   //Le asignamos a la variable doritos el valor
                echo "<br>";
                echo $doritos;

                $doritos = 13;   //Le asignamos a la variable doritos el valor
                echo "<br>";
                echo $doritos;


           echo "<h3> Operador += </h3>";

                $doritos = 3;   //Le asignamos a la variable doritos el valor
                echo "<br>";
                echo $doritos;

                $doritos += 10;   //$doritos = $doritos +10, básicamente es sumar las dos variables ahorrando espacio
                                #$doritos = 3 + 10
                                /*$doritos = 13 */
                echo "<br>";
                echo $doritos;



           echo "<h3> Operador -= </h3>";

                $doritos = 13;   //Le asignamos a la variable doritos el valor
                echo "<br>". $doritos; //Concatenación => añadimos a "<br>"
                                        #el valor de $doritos

                $doritos -= 10;   //$doritos = $doritos -10, básicamente es restar las dos variables ahorrando espacio
                                #$doritos = 13 - 10
                                /*$doritos = 3 */
                echo "<br>". $doritos;



           echo "<h3> Operador *= </h3>";

                $doritos = 13;   //Le asignamos a la variable doritos el valor
                echo "<br>". $doritos; //Concatenación => añadimos a "<br>"
                                        #el valor de $doritos

                $doritos *= 10;   //$doritos = $doritos *10, básicamente es multiplicar las dos variables ahorrando espacio
                                #$doritos = 13 * 10
                                /*$doritos = 130 */
                echo "<br>". $doritos;



           echo "<h3> Operador /= </h3>";

                $doritos = 100;   //Le asignamos a la variable doritos el valor
                echo "<br> {$doritos}" ; //ahora añadimos el valor de doritos
                                        #a lo que está entre comillas

                $doritos /= 50;   //$doritos = $doritos /50, básicamente es dividir las dos variables ahorrando espacio
                                #$doritos = 100 / 50
                                /*$doritos = 2 */
                echo "<br>"."Resultado de /= ".$doritos; #se puede hacer con el punto



           echo "<h3> Operador %= </h3>";

                $doritos = 5;   //Le asignamos a la variable doritos el valor
                echo "<br> {$doritos}" ; //ahora añadimos el valor de doritos
                                        #a lo que está entre comillas

                $doritos %= 2;   //$doritos = $doritos %2, básicamente es para calcular el resto
                                #$doritos = 5 % 2
                                /*$doritos = 1 */
                echo "<br>"."Resultado de %= {$doritos}"; #se puede hacer dentro de las comillas "" con las llaves {}




    
            echo "<h3> Operador .= </h3>";

                $doritos = "Hola clase";   //Le asignamos a la variable doritos el valor
                echo "<br> {$doritos}" ; //ahora añadimos el valor de doritos
                                        #a lo que está entre comillas

                $doritos .= "¿Qué tal?";   //$doritos = $doritos . "¿Qué tal?", básicamente es para calcular el resto
                                        #$doritos = "Hola clase" . "¿Qué tal?"
                                        /*$doritos = "Hola clase ¿Qué tal?" */
                echo "<br>"."Resultado de .= {$doritos}";



            echo "<h3> Operador ++ o -- </h3>";

                $a = 3;

                    $a ++; // $a = $a + 1
                            // $a = 3 + 1
                    echo "<br> {$a}";


                    $a --; // $a = $a - 1
                            // aquí partirías de 4 porque es el nuevo valor al sumarle 1
                    echo "<br> {$a}";
            

            
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "Programación estructurada en PHP";

           

        ?> <!-- Cierre de código php -->
        

    </body>

</html>