<head>
    <title>Ej25</title>
</head>

<body >

<p><h1>Dinero tras aplicarse el interes</h1></p>

<form action="Ej25.php" method="post">

<label for="dinero"> Introduzca cantidad de dinero</label>
<input type="number" id="dinero" name="dinero">


<input type="submit">

</form>


<?php //Etiqueta de apertura php

    //25.El nuevo banco nacional, va a aplicarle un 20% de interés a todos sus usuarios. Calcula cuál será la cantidad final de dinero que tendrás tras aplicarse este interés.


    $dinero = $_POST["dinero"];
    
    $interes = $dinero * 1.2;

    
    echo "El dinero con el interes es ".$interes."€";
    
    
    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>