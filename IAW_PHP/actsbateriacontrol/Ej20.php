<head>
    <title>Ej20</title>
</head>

<body >

<p><h1> Implemente el algoritmo de Euclides para encontrar el mcd de dos número leídos desde steclado </h1></p>

<form action="Ej20.php" method="post">

<label for="numero1"> Introduzca un numero</label>
<input type="number" id="numero1" name="numero1" >

<br>

<label for="numero2"> Introduzca un numero</label>
<input type="number" id="numero2" name="numero2" >



<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //20. Implemente el algoritmo de Euclides para encontrar el mcd de dos número leídos desde steclado.

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $variable = 0;


  if ($numero1 < $numero2)
  {
    $variable=$numero1;
    $numero1=$numero2;
    $numero2=$variable;

  }
  
  while($numero2 != 0)
  {
    $resto=$numero1%$numero2;

    $numero1=$numero2;

    $numero2=$resto;
  }
  echo "El MCD es: ".$numero1;
 
        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>