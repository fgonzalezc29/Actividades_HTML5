<head>
    <title>Ej23</title>
</head>

<body >

<p><h1> lea temperaturas expresadas en grados Fahrenheit y las convierta a grados Celsius</h1></p>

<form action="Ej23.php" method="post">

<label for="farenheit"> Introduzca en grados farenheit</label>
<input type="number" id="farenheit" name="farenheit" >


<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //23. Escriba un programa que lea temperaturas expresadas en grados Fahrenheit y las convierta a grados Celsius mostrándola. El programa finalizará cuando lea un valor de temperatura igual a 999. La conversión de grados Farenheit (F) a Celsius (C) está dada por C = 5/9*(F − 32

    $farenheit = $_POST["farenheit"];
    
    $celsius = 5/9 * ($farenheit - 32);
    
    if($farenheit > 999)
    {
        echo "cago"; 
    }
    else
    {
      echo $celsius;
    }
  
 
    
        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>