<?php


Class Funcionario{

  public $nome;
  public $salario;

  public function calculaBonus(){
    return $this->salario * 0.10;
  }
}
