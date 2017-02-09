<?php

require_once('Conta.php');

$conta = new Conta(12345);

$conta->saldo = 15000;
$conta->limite = 5000;
$conta->saca(300);
$conta->deposita(500);
$conta->consultaSaldoDisponivel();
