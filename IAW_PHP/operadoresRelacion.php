<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores PHP</title>
</head>

    <body>

        <?php
    
            echo "<h1> Operadores relacionales o lógicos </h1>";

            echo  "Vamos a ver condiciones individuales de <br>" 
                    ."<h3> Operador > </h3>";

                    $valor1 = 3;
                    $valor2 = 5;

                    $resultado = $valor2 > $valor1; // Resultado => true o verdadero
                                                    # 5 > 3 , Esto es verdad
                    echo "<br> {$resultado}";// verdadero es 1


                    $resultado = $valor1 > $valor2; // Resultado => false o falso
                                                    # 3 > 5 , Esto es falso
                    echo "<br>".$resultado;  # => falso, nos dará 0 (y no aparece en la página ya que es 0)


                    echo "<br>";
                    echo "Hacerlo EN CLASE nosotros, probar los operadores <   >=   <= ";
                    echo "<br>";
                    echo "Posteriormente veremos JUNTOS (con el profesor) estos:  ==   !=   ===   !==   &&   ||   ! ";



                    echo "<h3> Operador < </h3>";
                    $resultado = $valor2 < $valor1; // Resultado => false o falso
                                                    # 5 < 3 => falso
                    echo "<br> {$resultado}";// # => falso, nos dará 0 (y no aparece en la página ya que es 0)

                    
                    echo "<br>";


                    echo "<h3> Operador >= </h3>";
                    $resultado = $valor2 >= $valor1; // Resultado => true o verdadero
                                                    # 5 >= 3 , Esto es verdad
                    echo "<br> {$resultado}";// verdadero, nos dará 1


                    echo "<br>";


                    echo "<h3> Operador <= </h3>";
                    $resultado = $valor2 <= $valor1; // // Resultado => false o falso
                                                    # 5 <= 3 , falso
                    echo "<br> {$resultado}";// falso, nos dará 0




                    #a partir de aquí lo hemos hecho jUNTOS

                    echo "Posteriormente veremos JUNTOS (con el profesor) estos:  ==   !=   ===   !==   &&   ||   ! ";




                    echo "<br>";




                    echo "<h3> Operador == </h3>";
                        $valor1 = 3;
                        $valor1 = 5;

                        $resultado = $valor2 == $valor1; #Resultado si el valor de valor1 y valor2 son iguales => true o verdadero
                        #si no, sería false
                        echo "<br>".$resultado; #resultado => false



                        #otro ejemplo

                        $valor1 = 3;
                        $valor1 = 3;

                        $resultado = $valor2 == $valor1; #Resultado si el valor de valor1 y valor2 son iguales => true o verdadero
                        #si no, sería false
                        echo "<br>".$resultado; #resultado => true





                    echo "<br>";




                    echo "<h3> Operador != </h3>";
                        $valor1 = 3;
                        $valor1 = 5;

                        $resultado = $valor2 != $valor1; #Resultado si el valor de valor1 y valor2 son distintos => true o verdadero
                        #si no, sería false
                        echo "<br>".$resultado; #resultado => true



                        #otro ejemplo

                        $valor1 = 3;
                        $valor1 = 3;

                        $resultado = $valor2 != $valor1; #Resultado si el valor de valor1 y valor2 son distintos => true o verdadero
                        #si no, sería false
                        echo "<br>".$resultado; #resultado => false



                    echo "<br>";




                    echo "<h3> Operador === </h3> <br> compara valor y tipo de dato";
                        $valor1 = 3;
                        $valor1 = "3";

                        $resultado = $valor2 === $valor1; #los valores son los mismos pero uno es una cadena y el otro es un entero
                        echo "<br>".$resultado; #resultado => false


                        #otro ejemplo

                        $valor1 = 3;
                        $valor1 = 3;

                        $resultado = $valor2 === $valor1; #Ahora sí, mismo valor y mismo tipo de datos
                        echo "<br>".$resultado; #resultado => true



                    echo "<br>";





                    echo "<h3> Operador !== </h3> <br> compara valor y tipo de dato";
                        $valor1 = 3;
                        $valor1 = "3";

                        $resultado = $valor2 !== $valor1; #los valores son los mismos pero uno es una cadena y el otro es un entero
                        echo "<br>".$resultado; #resultado => true


                        #otro ejemplo

                        $valor1 = 3;
                        $valor1 = 3;
                        $resultado = $valor2 !== $valor1; #Ahora sí, mismo valor y mismo tipo de datos
                        
                        echo "<br>".$resultado; #resultado => false





                    echo "<br>";




                    echo "<h3> Operador && </h3> <br>"
                        . "<br> condicion1 && condicion2" //Condición1, ejemplo => condicion1 = 5 > 3    , es verdadero
                                                        //Condición2, ejemplo => condicion1 = 3 != 3   , es verdadero
                        . "<br> true && true"
                        . "<br>         true";

                        $condicion1 = 5 > 3;
                        $condicion2 = 3 != 1;
                        #caso sensitive => php es sensible a las letras, es decir, diferencia entre mayúscula y minúscula
                        // Ejemplo => $condicion1 != $condicion1

                        $resultado = $condicion1 && $condicion2; 
                        echo "<br>".$resultado; #resultado => true


                        #otro ejemplo

                        $valor1 = 3;
                        $valor1 = 3;
                        $resultado = $valor2 && $valor1; #Ahora sí, mismo valor y mismo tipo de datos
                        
                        echo "<br>".$resultado; #resultado => false





                    echo "<br>";



                    echo "<h3> Operador || </h3> <br>"
                        . "<br> condicion1 || condicion2" //Condición1, ejemplo => condicion1 = 5 > 3    , es verdadero
                                                        //Condición2, ejemplo => condicion2 = 3 != 3   , es verdadero
                        . "<br> true && true"
                        . "<br>         true";
                        $condicion1 = 5 > 3;
                        $condicion2 = 3 != 1;
                        #caso sensitive => php es sensible a las letras, es decir, diferencia entre mayúscula y minúscula
                        // Ejemplo => $condicion1 != $condicion1

                        $resultado = $condicion1 || $condicion2; 
                        echo "<br>".$resultado; #resultado => true



                    #otro ejemplo: true false

                    echo "<h3>Operador || </h3>"
                        . " <br> condicion1 || condicion2"
                                ." <br> true || false" // solo evaluamos la primera, al ser verdadera
                                ." <br>         true";
                        $condicion1 = 5 > 3;
                        $condicion2 = 3 == 1;

                        $resultado = $condicion1 || $condicion2;
                        echo "<br>" .$resultado; // resultado -> true



                    #otro ejemplo: false true

                    echo "<br> condicion1 || condicion2" //Condición1, ejemplo => condicion1 = 5 < 3    , es falso
                                                      //Condición2, ejemplo => condicion2 = 3 != 1   , es true
                        . "<br> false && true"
                        . "<br>         true";  #en este caso, la primera condicion es falsa, por tanto evaluamos la segunda
                        $condicion1 = 5 < 3;
                        $condicion2 = 3 != 1;

                        // Ejemplo => $condicion1 != $condicion1

                        $resultado = $condicion1 || $condicion2; 
                        echo "<br>".$resultado; #resultado => true





                    echo "<h3> Operador ! negación lógica </h3>"; //Imvierte el valor de la condición, es decir, verdadero sería falso y falso sería verdadero
                        $condicion1 = 5 > 3; #resultado sería verdadero 
                        echo "<br>".$resultado; //resltado => true


                        $condicion1 = !$condicion1; #es lo mismo que $condicion1 = !(5>3) igual que en matemáticas con repecto ()
                        #lo cambiamos a falso
                        echo "<br>".$resultado; //resultado => false

        ?>
        

    </body>

</html>