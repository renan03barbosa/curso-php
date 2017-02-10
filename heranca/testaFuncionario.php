<?php

require_once 'Gerente.php';
require_once 'Secretaria.php';
require_once 'Telefonista.php';

$gerente = new Gerente;
$gerente->nome = "Renan Barbosa";
$gerente->salario = 2000;
$gerente->usuario = "renan.barbosa";
$gerente->senha = 12345;
$bonus = $gerente->calculaBonus();

$telefonista = new Telefonista;
$telefonista->nome = "Carolina";
$telefonista->salario = 1000;
$telefonista->estacaoDeTrabalho = 13;

$secretaria = new Secretaria;
$secretaria->nome = "Tatiane";
$secretaria->salario = 1500;
$secretaria->ramal = 197;

echo "\nNome do gerente: $gerente->nome\n";
echo "Salário do gerente: $gerente->salario\n";
echo "Usuário: $gerente->usuario\n";
echo "Senha: $gerente->senha\n";
echo "Bonificação de 10%: {$gerente->calculaBonus()}\n\n";

echo "Nome da telefonista: $telefonista->nome\n";
echo "Salário da telefonista: $telefonista->salario\n";
echo "Estação de trabalho Telefonista: $telefonista->estacaoDeTrabalho\n";
echo "Bonificação de 10%: {$telefonista->calculaBonus()}\n\n";

echo "Nome da secretária: $secretaria->nome\n";
echo "Salário da secretária: $secretaria->salario\n";
echo "Ramal da secretária: $secretaria->ramal\n";
echo "Bonificação de 10%: {$secretaria->calculaBonus()}\n\n";
