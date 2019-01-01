<?php

  require_once 'Conexao.php';
  require_once 'CRUDCandidato.php';


  $crud = new CRUDCandidato(Conexao::getInstance());
  // referenco a variavel do cdru com a do form, a parte do name
  $nome = $_POST['nome'];
  $nasc = $_POST['nasc'];
  $estado_civil = $_POST['estado_civil'];
  $telefone = $_POST['telefone'];
  $celular = $_POST['celular'];
  $email = $_POST ['email'];
  $senha = $_POST ['senha'];
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
  $resumo = $_POST ['resumo'];
  $qualificação = $_POST ['qualificação'];
  $experiencia = $_POST ['experiencia'];

  $crud->inserir ($nome, $nasc, $estado_civil, $telefone, $celular, $email, $senha, $cpf, $RG, $CEP, $cidade, $logradouro, $bairro, $numero, $complemento, $objetivo, $salario, $resumo, $resumo, $qualificação, $experiencia);

  header('location:exibir2.php');

 ?>
