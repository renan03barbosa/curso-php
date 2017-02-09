<?php


$vetor = array(10, 15, 1, 5);

echo "\n----------------------------------\n";
$soma = 0;
$contador = count($vetor);

foreach ($vetor as $key) {
  $soma += $key;
}
echo "Vetor: ";
foreach ($vetor as $key) {
  echo "$key, ";
}

$media = $soma/$contador;

echo "\nA média é: $media";
echo "\n----------------------------------\n\n";
