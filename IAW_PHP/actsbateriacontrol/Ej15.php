<head>
    <title>Ej15</title>
</head>

<body >

<p><h1> programa que lea dos números y diga cual es el mayor y cual el menor </h1></p>

<form action="Ej15.php" method="post">

<label for="numero1"> Introduzca un numero</label>
<input type="number" id="numero1" name="numero1" step="any" >

<br>

<label for="numero2"> Introduzca otro numero</label>
<input type="number" id="numero2" name="numero2" step="any">

<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //15. Escribir un programa que lea dos números y diga cual es el mayor y cual el menor.

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

  if($numero1 > $numero2)
  {
    echo $numero1."es mayor que".$numero2;
  }
  elseif($numero1 < $numero2)
  {
    echo $numero2."es mayor que".$numero1;
  }
  else
  {
    echo "Los numeros son iguales";
  }

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>