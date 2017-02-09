<?php


$vetor = array(2, 3, 4, 5);
$multiplicado = array();

echo "\n----------------------------------\n";

$contador = count($vetor);
$produto = 1;

for($i = 0; $i < $contador; $i++){
  for($a = 0; $a < $contador; $a++){
    if($i != $a){
        $produto = ($vetor[$a]*$produto);
    }
  }
  $multiplicado[$i] = $produto;
  $produto = 1;
}

foreach ($vetor as $key) {
  echo "$key, ";
}
echo "\n\n";
foreach ($multiplicado as $key) {
  echo "$key, ";
}
echo "\n----------------------------------\n\n";
