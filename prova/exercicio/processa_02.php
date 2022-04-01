<?php

    $num01=$_POST['num01'];
    $num02=$_POST['num02'];
    $num03=$_POST['num03'];

    echo "<h1> Você digitou os numeros nessa ordem</h1>";
    echo "<br>";
    echo "$num01";
    echo "<br>";
    echo "$num02";
    echo "<br>";
    echo "$num03";
    echo "<br>";

    echo "<h2> Vamos colocá-los em ordem crescente!</h2>";

    if ($num01<$num02 && $num02<$num03) {
        echo "$num01>$num02>$num03";
    }
    else{
        echo "";
    }

    if ($num01<$num03 && $num03<$num02) {
        echo "$num01>$num03>$num02";
    }
    else{
        echo "";
    }

    if ($num02<$num01 && $num01<$num03) {
        echo "$num02>$num01>$num03";
    }
    else{
        echo "";
    }

    if ($num02<$num03 && $num03<$num01) {
        echo "$num02>$num03>$num01";
    }
    else{
        echo "";
    }

    if ($num03<$num02 && $num02<$num01) {
        echo "$num03>$num02>$num01";
    }
    else{
        echo "";
    }

    if ($num03<$num01 && $num01<$num02) {
        echo "$num03>$num01>$num02";
    }
    else{
        echo "";
    }




?>