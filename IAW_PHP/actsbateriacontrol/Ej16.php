<head>
    <title>Ej16</title>
</head>

<body >

<p><h1> programa que lea tres números enteros positivos, y que calcule e imprima en pantalla el menor y el mayor </h1></p>

<form action="Ej16.php" method="post">

<label for="numero1"> Introduzca un numero</label>
<input type="number" id="numero1" name="numero1" >

<br>

<label for="numero2"> Introduzca un numero</label>
<input type="number" id="numero2" name="numero2" >

<br>

<label for="numero3"> Introduzca un numero</label>
<input type="number" id="numero3" name="numero3">

<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //16. Escriba un programa que lea tres números enteros positivos, y que calcule e imprima en pantalla el menor y el mayor de todos ellos.

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

  if ($numero1 > $numero2 and $numero1 > $numero3)
  {
    echo $numero1." es el mayor de todos<br>";
      if($numero2 > $numero3)
      {
        echo $numero3." es el menor de todos";
      }
      else
      {
        echo $numero2." es el menor de todos"; 
      }
  }
  elseif($numero2 > $numero1 and $numero2 > $numero3)
  {
    echo $numero2." es el mayor de todos<br>";
      if($numero1 > $numero3)
      {
        echo $numero3." es el menor de todos";
      }
      else
      {
        echo $numero1." es el menor de todos"; 
      }
  }
  elseif($numero3 > $numero1 and $numero3 > $numero2)
  {
    echo $numero3." es el mayor de todos<br>";
      if($numero1 > $numero2)
      {
        echo $numero2." es el menor de todos";
      }
      else
      {
        echo $numero1." es el menor de todos"; 
      }
  }
  
        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>