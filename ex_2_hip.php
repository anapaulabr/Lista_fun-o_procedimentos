<?php

function hipo ($cat1,$cat2)
{
    $quadrado = pow ($cat1, 2);
    $quadrado2 = pow ($cat2, 2);

    $hip = sqrt ($quadrado + $quadrado2);

return $hip;  

}

print "Digite o primeiro cateto: ";
$cat1 = (float) fgets (STDIN);


print "Digite o primeiro cateto: ";
$cat2 = (float) fgets (STDIN);

$hip = hipo ($cat1, $cat2);

print "\n O valor da hipotenusa é  $hip \n ";

