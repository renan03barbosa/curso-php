<?php


Class Funcionario{

  public $nome;
  public $salario;


  public function aumentaSalario($valor){
    $this->salario += $valor;
  }

}
