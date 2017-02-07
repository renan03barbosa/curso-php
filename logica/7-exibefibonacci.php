<?php

echo "\n";

$var1 = 0;
$var2 = 0;
$limite = 15;

for ($a = 1; $a <= $limite; $a++){
  if ($var1 == 0){
    echo "$var1, ";
  }
    $aux = $var1 + $var2;
    $var1 = $var2;
    $var2 = $aux;

  if ($a == $limite){
    echo "$aux.";
  }
    else{
      echo "$aux, ";
    }
}
echo "\n\n";
