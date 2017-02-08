<?php

Class Aluno {

  public $nome;
  public $rg;
  public $dataNascimento;
}

$Aluno1 = new Aluno;
$Aluno1->nome = "Renan Barbosa";
$Aluno1->rg = 465875243;
$Aluno1->dataNascimento = "16/12/1995";

$Aluno2 = new Aluno;
$Aluno2->nome = "Michael Jackson";
$Aluno2->rg = 135971359;
$Aluno2->dataNascimento = "17/01/1993";

echo "\nNome do Aluno: $Aluno1->nome\n";
echo "RG:: $Aluno1->rg\n";
echo "Data de Nascimento: $Aluno1->dataNascimento\n\n";

echo "Nome do Aluno: $Aluno2->nome\n";
echo "RG: $Aluno2->rg\n";
echo "Data de Nascimento: $Aluno2->dataNascimento\n\n";
