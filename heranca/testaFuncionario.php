<?php

require_once 'Gerente.php';
require_once 'Secretario.php';

$gerente = new Gerente;
$gerente->nome = "Joelma";
$gerente->salario = 12000;
$gerente->senha = 1223;

$secretario = new Secretario;
$secretario->nome = "João";
$secretario->salario = 2500;
$secretario->ramal = 5337;

echo "\nNome do gerente: $gerente->nome\n";
echo "Salário do gerente: $gerente->salario\n";
echo "Senha: $gerente->senha\n\n";
