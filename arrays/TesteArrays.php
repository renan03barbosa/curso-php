<?php

$cursos = array("CUR003" => "Python", "Ruby", "Matemágica com Gubi");

$cursos[] = "Lógica de Programação com Java"; //Adicionando

$cursos[] = "HTML, CSS E JS"; //Adicionando

#foreach ($cursos as $key => $value) {
#  echo "\nChave: $key, Valor: $value\n";
#}

foreach ($cursos as $curso) {
  echo "Curso: $curso";
}

echo "\n\n----------------------------------\n\n";
for($i = 0; $i < count($cursos); $i++){
  echo "\nCurso na posição $i: $cursos[$i]\n";
}

echo "\n\n";

echo count($cursos);

# var_dump($cursos);
