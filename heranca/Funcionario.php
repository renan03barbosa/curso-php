<?php


Class Funcionario{

  public $nome;
  public $salario;

  const PORCENTAGEM_DO_BONUS = 0.05;

  public function calculaBonus(){
    return $this->salario * 0.10;
  }


}
