<head>
    <title>Ej18</title>
</head>

<body >

<p><h1> programa que lea un número entero e imprima todos los números impares menores que él </h1></p>

<form action="Ej18.php" method="post">

<label for="numero1"> Introduzca un numero</label>
<input type="number" id="numero1" name="numero1" >



<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //18. Escribir un programa que lea un número entero e imprima todos los números impares menores que él.

    $numero1 = $_POST["numero1"];
    
    echo "Los numeros impares son: ";

      if ($numero1 > 0)
      {
      for ($i=1; $i < $numero1; $i +=2)
      {
        echo $i." ";
      }
      }
 
        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>