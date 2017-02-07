<?php

echo "\n";

$var1 = 0;
$var2 = 1;

//echo "$var1, $var1, ";

for ($a = 1; $a <= 15; $a++){
  if ($var1 == 0){
    echo "$var1, ";
  }
  $aux = $var1 + $var2;
  $var1 = $var2;
  $var2 = $aux;

  if ($a == 15){
    echo "$aux.";
  }
  else{
  echo "$aux, ";
  }
}
echo "\n\n";
