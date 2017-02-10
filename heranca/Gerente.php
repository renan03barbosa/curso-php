<?php

require_once 'Funcionario.php';

Class Gerente extends Funcionario{

  public $usuario;
  public $senha;

  public function calculaBonus(){
    return $this->salario * 0.6 + 100;
  }

}
