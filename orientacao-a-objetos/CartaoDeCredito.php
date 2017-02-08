<?php

require_once('Cliente2.php');

class CartaoDeCredito {

  public $numero;
  public $datadeValidade;
  public $cliente;
  }

  $CartaoDeCredito1 = new CartaoDeCredito;
  $CartaoDeCredito1->datadeValidade = '01/01/2013';
  $CartaoDeCredito1->numero = 111111;
  $CartaoDeCredito1->cliente = $cliente1;

  $CartaoDeCredito2 = new CartaoDeCredito;
  $CartaoDeCredito2->datadeValidade = '01/01/2014';
  $CartaoDeCredito2->numero = 222222;
  $CartaoDeCredito2->cliente = $cliente2;

  echo "\nNome do Cliente: {$CartaoDeCredito1->cliente->nome}\n";
  echo "Código: {$CartaoDeCredito1->cliente->codigo}\n";
  echo "Número do cartão: $CartaoDeCredito1->numero\n";
  echo "Data de validade: $CartaoDeCredito1->datadeValidade\n\n";

  echo "\nNome do Cliente: {$CartaoDeCredito2->cliente->nome}\n";
  echo "Código: {$CartaoDeCredito2->cliente->codigo}\n";
  echo "Número do cartão: $CartaoDeCredito2->numero\n";
  echo "Data de validade: $CartaoDeCredito2->datadeValidade\n\n";

  #echo "\nNúmero do cartão: $CartaoDeCredito1->numero\n";
  #echo "Código do cliente: $CartaoDeCredito1->datadeValidade\n\n";
  #echo "\nNúmero do cartão: $CartaoDeCredito2->numero\n";
  #echo "Código do cliente: $CartaoDeCredito2->datadeValidade\n\n";
