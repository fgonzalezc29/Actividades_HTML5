<head>
    <title>Ej31</title>
</head>

<body >

<p><h1>tabla de multiplicar</h1></p>

<form action="Ej31.php" method="post">


<label for="numero"> Introduzca un numero</label>
<input type="number" id="numero" name="numero">



<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //31.Calcular la tabla de multiplicar (de 0 a 10) de un número dado.


    $numero = $_POST["numero"];

   
    for ($i=0; $i <=10 ; $i++) { 
        
        $multi = $numero * $i;

        echo "$numero multiplicado por $i : ".$multi."<br>";
    }

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>