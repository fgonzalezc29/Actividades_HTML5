<head>
    <title>Ej17</title>
</head>

<body >

<p><h1> pida por teclado tres números; si el primero es negativo, debe imprimir el producto de los tres y si no lo es, imprimirá la suma. </h1></p>

<form action="Ej17.php" method="post">

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

    //17. Diseña un algoritmo que pida por teclado tres números; si el primero es negativo, debe imprimir el producto de los tres y si no lo es, imprimirá la suma.

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

  if ($numero1 < 0)
  {
    $mult=$numero1*$numero2*$numero3;
    echo "La multiplicacion es: ".$mult;
  }
  else
  {
    $sum=$numero1+$numero2+$numero3;
    echo "La suma es: ".$numero1+$numero2+$numero3;
  }
 
        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>