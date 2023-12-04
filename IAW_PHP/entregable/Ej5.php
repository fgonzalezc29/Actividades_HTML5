<head>
    <title>Ej5</title>
</head>

<body >

<form action="Ej5.php" method="post">

<label for="numero1"> Introduce el primer numero</label>
<input type="numero1" id="numero1" name="numero1">

<br>

<label for="numero2"> Introduce el segundo numero</label>
<input type="numero2" id="numero2" name="numero2">

<br>

<label for="numero3"> Introduce el tercer numero</label>
<input type="numero3" id="numero3" name="numero3">

<input type="submit">

</form>

<?php //Etiqueta de apertura php

    //

    $a = $_POST["numero1"];
    $b = $_POST["numero2"];
    $c = $_POST["numero3"];
    
    $i=1;

    if($a == $b || $a = $c || $b == $c)
    {
        echo "Son iguales no puede se";
    }
    elseif($a > $b && $a > $b)
    {
        echo "$a > ";
        if($b > $c)
        {
            echo "$b > ".$c;
        }
        else
        {
            echo "$c > ".$b;
        }
        
    }
    elseif($b > $a && $b > $c)
    {
        echo "$b > ";
        if($a > $c)
        {
            echo "$a > ".$c;
        }
        else
        {
            echo "$c > ".$a;
        }
    }
    elseif($c > $a && $c > $b)
    {
        echo "$c > ";
        if($a > $b)
        {
            echo "$a > ".$b;
        }
        else
        {
            echo "$b > ".$a;
        }
    }

    

        #Etiqueta de cierre PHP
?> <!-- Cierre de código php -->

</body>