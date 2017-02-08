<?php

require_once('Agencia.php');

class Conta {

  public $numero;
  public $saldo;
  public $limite;
  public $ag;
}

$Conta1 = new Conta;
$Conta1->numero = 12345;
$Conta1->saldo = "R$ 15.000,00";
$Conta1->limite = "R$ 5.000,00";
$Conta1->ag = $Agencia1;

$Conta2 = new Conta;
$Conta2->numero = 54321;
$Conta2->saldo = "R$ 13.000,00";
$Conta2->limite = "R$ 7.000,00";
$Conta2->ag = $Agencia2;

echo "\nAgência: {$Conta1->ag->numero}\n";
echo "Número da conta: $Conta1->numero\n";
echo "Saldo da conta: $Conta1->saldo\n";
echo "Limite da conta: $Conta1->limite\n\n";

echo "\nAgência: {$Conta2->ag->numero}\n";
echo "Número da conta: $Conta2->numero\n";
echo "Saldo da conta: $Conta2->saldo\n";
echo "Limite da conta: $Conta2->limite\n\n";
