<?php
   $teste = [10,'oi',1.6,true];
   //$teste = array(10,'oi';1.6,true);
   //echo $teste[1];

   $qtde = count($teste);
   echo "Numero de ELEMENTOS do vetores: $qtde";
   echo "<hr>";

   for    ($i=0;$i<$qtde;$i++){
       echo "Valor do i = $i - Valor: $teste[$i] <br>" ;
   }
   
   echo "<hr>";

   $numero_qualquer = rand(1,10);
   $resultado = $numero_qualquer / 10;
   echo " Numero sorteado:  $resultado <br>";

 
   $numero_qualquer = (rand(1,10))/10;

   echo " Numero sorteado:  $numero_qualquer";
   
 echo"<hr>";

   $vetor = [1,5,8,10];
   $n = count($vetor);
   $soma = 0;

   for ($a=0; $a<$n;$a++){

    $soma = $soma + $vetor[$a];
   }
   echo " O resultado da soma é: $soma <br>";


   $media = $soma / $n;
   echo " O resultado da media é: $media";

   echo "<hr>";


   
   
?>