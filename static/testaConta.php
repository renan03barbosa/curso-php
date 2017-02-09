<?php

require_once ('conta.php');

echo "\n\nContador inicial: " . Conta::$contador . PHP_EOL;

$x = new Conta;
$x->numero = 11;
$x->saldo = 500;

echo "\n\nConta1: " . Conta::$contador . PHP_EOL;

$y = new Conta;
$y->numero = 9;
$y->saldo = 300;

echo "\n\nConta2: " . Conta::$contador . PHP_EOL;

Conta::zeraContador();

echo "\n\nContador após zeraContador: " . Conta::$contador . PHP_EOL;
echo "\n\n";
