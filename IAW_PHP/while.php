<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>
<form action="while.php" method="post"> 

<label for="entrada">Introduzca un numero: </label>
<input type="number" id="entrada" name="entrada">
<input type="submit" value="enviar">
<input type="reset" value="limpiar">

</form>

    <body>

        <h1>while</h1>

        <?php //Etiqueta de apertura php

          $a = $_POST["entrada"];
          #condition = $a > 0
          echo "Antes del switch<br>";
          echo "Calculamos la tabla del numero: ".$a;
          $b = 0;
          while($b <= 10)
          {
            echo $a."x".$b." = ".($a*$b)."<br>";
            $b = $b + 1;
          }
          echo "Despues del while";

        ?> <!-- Cierre de código php -->
        
    </body>

</html>