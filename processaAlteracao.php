<?php

  require_once 'Conexao.php';
  require_once 'CRUDCandidato.php';

  $crud = new CRUDCandidato(Conexao::getInstance());

  $nome = $_POST['nome'];
  $nasc = $_POST['nasc'];
  $estado_civil = $_POST['estado_civil'];
  $telefone = $_POST['telefone'];
  $celular = $_POST['celular'];
  $cpf = $_POST ['cpf'];
  $RG = $_POST ['RG'];
  $CEP = $_POST ['CEP'];
  $cidade = $_POST['cidade'];
  $logradouro = $_POST['logradouro'];
  $bairro = $_POST ['bairro'];
  $numero = $_POST['numero'];
  $complemento = $_POST['complemento'];
  $objetivo = $_POST ['objetivo'];
  $salario = $_POST ['salario'];
  $codigo = $_POST['codigo'];



  $crud->alterar($nome, $nasc, $estado_civil, $telefone, $celular, $cpf, $RG, $CEP, $cidade, $logradouro, $bairro, $numero, $complemento, $objetivo, $salario,$codigo);

header('location:exibir1.php');

 ?>
