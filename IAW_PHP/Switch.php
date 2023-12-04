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

        <h1>Elseif</h1>

        <?php //Etiqueta de apertura php

          $a = $_POST["entrada"];
          #condition = $a > 0
          echo "Antes del switch<br>";
          switch($a)
          {
            case 1:
                echo "Lunes<br>";
            break;

            case 2: echo "Martes<br>"; break;
            case 3: echo "Miercoles<br>"; break;
            case 4: echo "Jueves<br>"; break;
            case 5: echo "Viernes<br>"; break;
            case 6: echo "Sabado<br>"; break;
            case 7: echo "Domingo<br>"; break;

            default:
                echo "Ha introducido el numero incorrecto";
            break;

          }
          echo "Despues del switch";

        ?> <!-- Cierre de código php -->
        
    </body>

</html>