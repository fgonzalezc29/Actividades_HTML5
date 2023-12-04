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

    <h3>GET</h3>

    <p>
        Con el siguiente formulario, vamos a pedir un dato y, tras hacer click en el submit, nos enviaremos ese mismo dato a este documento (puede ser otro)
    </p>

    <form action="get.php" method="get"> <!-- action documento destino, method tipo método-->

        <label for="valor1">Introduzca un número</label>
        <input type="text" id="valor1" name="valor1"> <!--Claramente, aquí podemos pedir más valores-->
        <input type="submit">

    </form>


    <?php

        echo "<br> Vamos a obtener el valor del formulario anterior";

        $valor1 = $_GET ["valor1"]; 
        /*Si tenemos más valores podemos pedirlos aquí*/

        //Con la línea anterior le estamos diciendo a PHP que obtenga del formulario el campo valor1 (name).
        #Utilizamos la "súper variable" GET porque hemos indicado que el método es tipo get (línea 20)

        echo "<br> Mostramos el valor1: {$valor1}";

    ?>







        
    </body>
</html>