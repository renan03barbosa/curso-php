<?php

require_once('Agencia.php');

class Conta {

  public $numero;
  public $saldo;
  public $limite;
  public $ag;

  public function __construct($numero){
    $this->numero = $numero;
  }

  public function deposita($valor){
      $this->saldo += $valor;
  }

  public function saca($valor){
    if($valor <= $this->saldo){
      $this->saldo -= $valor;
    }
    else{
      echo "\n\n----- Saldo insuficiente -----\n\n";
        }
    }

  public function consultaSaldoDisponivel(){
      echo "\nSaldo da conta: R$ $this->saldo\n\n";
  }
}
