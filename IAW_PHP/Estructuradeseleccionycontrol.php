<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de seleccion y control</title>
</head>

    <body>

        <h1>if</h1>

        <?php //Etiqueta de apertura php

          $a = $_POST["entrada"];
          if($a > 0)
          {
            echo "numero positivo";
          }
          else
          {
            echo "El numero es menor o igual que 0";
          }

        ?> <!-- Cierre de código php -->
        

        <h1>switch</h1>

        <?php //Etiqueta de apertura php

        $a = $_POST["entrada"];
        switch($a)
        {
            case 1; echo "Has introducido el numero 1"; break;
            case 2; echo "Has introducido el numero 2"; break;
            case 3; echo "Has introducido el numero 3"; break;
            default; echo "Has introducido el nº"; break;
        }
        
        ?> <!-- Cierre de código php -->

        <h1>while</h1>

        <?php //Etiqueta de apertura php

        
        while($a < 20)
        {
            echo "<br>{$a}";
            $a++;#$a=$a+1;

        }

        ?> <!-- Cierre de código php -->


        <h1>do-while</h1>

        <?php //Etiqueta de apertura php

        do
        {
          echo "<br>{$a}";
          $a++;#$a=$a+1;
        }
        while($a < 10)
        

        ?> <!-- Cierre de código php -->


        <h1>do-while</h1>

        <?php //Etiqueta de apertura php

        do
        {
          echo "<br>{$a}";
          $a++;#$a=$a+1;
        }
        while($a < 10)
        

        ?> <!-- Cierre de código php -->


      <h1>for</h1>

        <?php //Etiqueta de apertura php

        for ($a=0; $a < 10; $a++)
        {
          echo "<br>{$a}";
        }
        

        ?> <!-- Cierre de código php -->
    </body>

</html>