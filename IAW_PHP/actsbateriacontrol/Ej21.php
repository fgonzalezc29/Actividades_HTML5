<head>
    <title>Ej21</title>
</head>

<body >

<p><h1> programa que lea los coeficientes a, b y c de una ecuación de segundo, y estudie si tiene o no solución. En caso positivo, las soluciones se calcularán e imprimirán en pantalla </h1></p>

<form action="Ej21.php" method="post">

<label for="numero1"> Introduzca un numero</label>
<input type="number" id="numero1" name="numero1" >

<br>

<label for="numero2"> Introduzca un numero</label>
<input type="number" id="numero2" name="numero2" >

<br>

<label for="numero3"> Introduzca un numero</label>
<input type="number" id="numero3" name="numero3" >

<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //21. Escriba un programa que lea los coeficientes a, b y c de una ecuación de segundo, y estudie si tiene o no solución. En caso positivo, las soluciones se calcularán e imprimirán en pantalla.

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];
    $inraiz= $numero2 * $numero2 - 4 * $numero1 * $numero3;

  if ($inraiz > 0)
  {
    $sol1 = (-$numero2 + sqrt($inraiz))/2 * $numero1 ;
    $sol2 = (-$numero2 - sqrt($inraiz))/2 * $numero1 ;
    echo "Las dos soluciones son:.$sol1.y.$sol2";
  }
  elseif($inraiz == 0)
  {
    $sol3 = -$numero2 / (2 * $numero1);
    echo "La solucion es: ".$sol3;
  }
  else
  {
    echo "No tiene soluciones";
  }
 
        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>