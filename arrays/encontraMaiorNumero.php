<?php


$vetor = array(7, 1, 5, 3);

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

$contador -= 1;

echo "O maior número é: $vetor[$contador]";
echo "\n----------------------------------\n\n";
