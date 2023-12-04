<head>
    <title>Ej9</title>
</head>

<body >

<p><h1> calcule la tabla de multiplicar de un número dado.</h1></p>


<form action="Ej9.php" method="post">

<label for="numero"> Introduzca un numero</label>
<input type="number" id="numero" name="numero">


<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //9. Un programa que calcule la tabla de multiplicar de un número dado.

    $numero = $_POST["numero"];

    for ($i=1; $i <=10 ; $i++) { 
        
       $tabla = $numero * $i;

        echo $tabla."<br>";
        

    }

   
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>