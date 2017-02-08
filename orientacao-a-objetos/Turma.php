<?php


Class Turma{

  public $periodo;
  public $serie;
  public $sigla;
  public $TipoDeEnsino;
}

$Turma1 = new Turma;
$Turma1->periodo = "Tarde";
$Turma1->serie = "8°";
$Turma1->sigla = "A";
$Turma1->TipoDeEnsino = "Fundamental";

$Turma2 = new Turma;
$Turma2->periodo = "Manhã";
$Turma2->serie = "5°";
$Turma2->sigla = "B";
$Turma2->TipoDeEnsino = "Fundamental";
