<?php


$vetor = array("f", "x", "a", "b");

echo "\n----------------------------------\n";

$contador = count($vetor);

for($i = 0; $i < $contador; $i++){
  for($a = 0; $a < $contador; $a++){
    if($vetor[$i] < $vetor[$a]){
        $aux = $vetor[$a];
        $vetor[$a] = $vetor[$i];
        $vetor[$i] = $aux;
    }
  }
}
foreach ($vetor as $key) {
  echo "$key, ";
}
echo "\n----------------------------------\n\n";
