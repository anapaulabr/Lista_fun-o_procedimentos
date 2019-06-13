<?php

function intervalo ($n1,$n2)
{ 
   $s = 0;
   for ($i=$n1; $i<=$n2; $i++){
      $s = $s + $i;
   }
return $s;  

}

print "Digite o primeiro número: ";
$n1 = (float) fgets (STDIN);


print "Digite o segundo número: ";
$n2 = (float) fgets (STDIN);

$s = intervalo($n1,$n2);

print "\n O valor da soma dos números inteiros presentes no intervalo entre $n1 e $n2 é $s \n ";

