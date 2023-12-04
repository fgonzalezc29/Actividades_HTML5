<head>
    <title>Ej22</title>
</head>

<body >

<p><h1> calcule el factorial de n</h1></p>

<form action="Ej22.php" method="post">

<label for="numero1"> Introduzca un numero</label>
<input type="number" id="numero1" name="numero1" >


<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //22. Escribe un programa que calcule el factorial de n.

    $numero1 = $_POST["numero1"];
    $factorial = 1;
  

  for ($i=1; $i <= $numero1; $i++)
  {
     $factorial *= $i;
  }
 
    echo $factorial;
        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>