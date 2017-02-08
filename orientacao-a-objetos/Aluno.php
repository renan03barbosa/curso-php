<?php

require_once('Turma.php');

Class Aluno {

  public $nome;
  public $rg;
  public $dataNascimento;
  public $turma;
}

$Aluno1 = new Aluno;
$Aluno1->nome = "Renan Barbosa";
$Aluno1->rg = 465875243;
$Aluno1->dataNascimento = "16/12/1995";
$Aluno1->turma = $Turma1;

$Aluno2 = new Aluno;
$Aluno2->nome = "Michael Jackson";
$Aluno2->rg = 135971359;
$Aluno2->dataNascimento = "17/01/1993";
$Aluno2->turma = $Turma2;

echo "\n-------------------------------------------------------\nNome do Aluno: $Aluno1->nome\t\t";
echo "RG: $Aluno1->rg\n";
echo "Data de Nascimento: $Aluno1->dataNascimento";

echo "\nPeriodo: {$Aluno1->turma->periodo}";
echo "\n{$Aluno1->turma->serie} série {$Aluno1->turma->sigla} - Ensino {$Aluno1->turma->TipoDeEnsino}\n\n";

echo "\n-------------------------------------------------------\nNome do Aluno: $Aluno2->nome\t\t";
echo "RG: $Aluno2->rg\n";
echo "Data de Nascimento: $Aluno2->dataNascimento";

echo "\nPeriodo: {$Aluno2->turma->periodo}";
echo "\n{$Aluno2->turma->serie} série {$Aluno2->turma->sigla} - Ensino {$Aluno2->turma->TipoDeEnsino}\n\n";
