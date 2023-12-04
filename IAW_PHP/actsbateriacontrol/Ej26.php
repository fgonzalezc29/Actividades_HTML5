<head>
    <title>Ej26</title>
</head>

<body >

<p><h1> Leer una letra que corresponda a un número romano (carácter) y encontrar su valor en números decimales, en caso contrario, decir que no es un número romano válido.</h1></p>

<form action="Ej26.php" method="post">

<label for="numero"> Elige un numero romano: </label>
<input type="text" id="numero" name="numero" >


<input type="submit">

</form>




<?php //Etiqueta de apertura php

    //26. Leer una letra que corresponda a un número romano (carácter) y encontrar su valor en números decimales, en caso contrario, decir que no es un número romano válido.

    $numero=$_POST["numero"];
    $numero=ucfirst(strtolower($numero));
    switch($numero)
    {

        case "I": echo "El valor decimal es 1<br>"; break;
        case "V": echo "El valor decimal es 5<br>"; break;
        case "X": echo "El valor decimal es 10<br>"; break;
        case "L": echo "El valor decimal es 50<br>"; break;
        case "C": echo "El valor decimal es 100<br>"; break;
        case "D": echo "El valor decimal es 500<br>"; break;
        case "M": echo "El valor decimal es 1000<br>"; break;
        default: echo "Eso no vale"; break;
    }

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>