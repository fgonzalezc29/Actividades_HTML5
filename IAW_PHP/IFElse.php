<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>
<form action="IF.php" method="post"> 

<label for="entrada">Introduzca un numero: </label>
<input type="number" id="entrada" name="entrada">
<input type="submit" value="enviar">
<input type="reset" value="limpiar">

</form>

    <body>

        <h1>if-Else</h1>

        <?php //Etiqueta de apertura php

          $a = $_POST["entrada"];
          #condition = $a > 0
          echo "Antes del if-else<br>";
          if($a > 0)
          {
            echo "numero positivo";#se ha cumplido la condicion
          }
          else
          {
            echo "El numero no es positivo";#no se ha cumplido la condicion
          }
          echo "Despues del if-else";

        ?> <!-- Cierre de código php -->
        
    </body>

</html>