<?php

require_once('Funcionario.php');

$Funcionario = new Funcionario;
$Funcionario->nome = "Renan Barbosa";
$Funcionario->salario = 1000;

$Funcionario->aumentaSalario(100);
echo "\nNome: $Funcionario->nome\n";
echo "Salário: $Funcionario->salario\n\n";
