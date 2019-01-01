<?php

  require_once 'Conexao.php';
  require_once 'CRUDCandidato.php';

  $crud = new CRUDCandidato(Conexao::getInstance());

  $codigo = $_GET['cod'];

  $crud->excluir($codigo);

  header('location:relatorio.php');

 ?>
