<?php

Class Funcionario {

  public $nome;
  public $salario;
  public $dataNascimento;
}

$Funcionario1 = new Funcionario;
$Funcionario1->nome = "Renan Barbosa";
$Funcionario1->salario = 9.000;

$Funcionario2 = new Funcionario;
$Funcionario2->nome = "Michael Jackson";
$Funcionario2->salario = 7.000;

echo "\nFuncionário: $Funcionario1->nome\n";
echo "Salário: $Funcionario1->salario mil\n\n";

echo "Funcionário: $Funcionario2->nome\n";
echo "Salário: $Funcionario2->salario mil\n\n";
