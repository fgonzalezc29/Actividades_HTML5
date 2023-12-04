<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
    <body>

    <h1>Datos usuario</h1>

    <p>Vamos a pedir datos para nuestros ejercicios, haciéndolos así, más "reales"</p>

    <h3>POST</h3>

    <p>
        Con el siguiente formulario, vamos a pedir un dato y, tras hacer click en el submit, nos enviaremos ese mismo dato a este documento (puede ser otro)
    </p>

    <form action="post.php" method="post"> <!-- action documento destino, method tipo método-->

        <label for="valor1">Introduzca un número</label>
        <input type="text" id="valor1" name="valor1"> <!--Claramente, aquí podemos pedir más valores-->
        <input type="submit">

    </form>


    <?php

        echo "<br> Vamos a obtener el valor del formulario anterior";

        $valor1 = $_POST ["valor1"]; 
        /*Si tenemos más valores podemos pedirlos aquí*/

        //Con la línea anterior le estamos diciendo a PHP que obtenga del formulario el campo valor1 (name).
        #Utilizamos la "súper variable" POST porque hemos indicado que el método es tipo post (línea 20)

        echo "<br> Mostramos el valor1: {$valor1}";

    ?>

 <!--La única diferencia entre el GET y el POST es que el GET cuando vas a la url sí que aparece el valor que hemos introducido , y en el POST no aparece en la url-->






        
    </body>
</html>