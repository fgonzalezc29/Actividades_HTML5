<head>
    <title>Ej19</title>
</head>

<body >

<p><h1> Según la edad de una persona, lo clasificaremos en las siguientes etapas: Infancia (menor de catorce años), Juventud (entre catorce y 26 años), Adultez (entre 27 y 59 años) y personas mayores (igual o superiores a 60 años)</h1></p>

<form action="Ej19.php" method="post">

<label for="edad"> Introduzca la edad</label>
<input type="number" id="edad" name="edad" >



<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //19. Según la edad de una persona, lo clasificaremos en las siguientes etapas: Infancia (menor de catorce años), Juventud (entre catorce y 26 años), Adultez (entre 27 y 59 años) y personas mayores (igual o superiores a 60 años)
    
    
    $edad = $_POST["edad"];
    
    

      switch($edad)
      {
        case $edad < 14: echo "Esta en la infancia"; break;
        case $edad <=26: echo "Esta en la juventud"; break;
        case $edad <= 59: echo "Esta en la adultez"; break;
        case $edad >= 60: echo "Es una persona mayor"; break;

        default: echo "Introduce un numero valido";
      }
 
        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>