<?php

function media ($nota1, $nota2)
{
    $med = ($nota1+$nota2)/2;

    if ($med>6){
        print "\n PARABÉNS, você foi aprovado com média $med \n ";
    }

    else {
        print "\n Você foi reprovado com média $med \n";
    }

return $med;  

}

print "Digite a primeira nota: ";
$nota1 = (float) fgets (STDIN);

print "Digite a segunda nota: ";
$nota2 = (float) fgets (STDIN);

$med = media ($nota1, $nota2);


