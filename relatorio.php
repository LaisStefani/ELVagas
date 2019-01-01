<?php
if(($_SERVER['REQUEST_METHOD']) == "POST"){
  $usuario = $_POST ['usuario']; 
  $senha = $_POST ['senha']; 
  if ($usuario == "admin" && $senha == "admin") {
    session_start();
    $_SESSION['usuario'] = $usuario;
      Header('location:relatorio.php');
      exit();
  } else{
      Header('location:login.php');
  }
}
?>
<?php 
    session_start([
    'cookie_lifetime' => 1000,
    ]);
    if(!isset($_SESSION['usuario'])){
        Header('location:login.php');
    }
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Relatório</title>
        <meta charset="UTF-8">
        <link rel="icon" href="imagens/guia.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/bootstrap3.min.css">

        <link rel="stylesheet" href="css/bootstrap-table.min.css">

        <script src="js/jquery.min.js"></script>

    </head>

    <body class="fundo">
        <nav class="navbar navbar-inverse navbar-static-top ">
            <a class="navbar-brand" href="index.php">Voltar</a>
        </nav>
      
            <div class="quadro">

                <h3 class= "text-center">Relatório</h3>

                <table>
                    <thead>
                                                    
                        <?php
                            require_once 'Conexao.php';
                            require_once 'CRUDCandidato.php';
                            $crud = new CRUDCandidato(Conexao::getInstance());
                        ?>
                        <div id="table" class="table-editable">
                        <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                        <tr>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Nasc</th>
                        <th class="text-center">Civil</th>
                        <th class="text-center">Tel</th>
                        <th class="text-center">Celular</th>
                        <th class="text-center">CPG</th>
                        <th class="text-center">RG</th>
                        <th class="text-center">CPF</th>
                        <th class="text-center">Cidade</th>
                        <th class="text-center">Logradouro</th>
                        <th class="text-center">Bairro</th>
                        <th class="text-center">Número</th>
                        <th class="text-center">Complemento</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Deletar</th>
                        </tr>

                        <?php
                            $dados = $crud->selecionar();
                            foreach($dados as $reg){
                        ?>

                        <tr>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->nome?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->nasc?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->estado_civil?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->telefone?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->celular?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->cpf?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->RG?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->CEP?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->cidade?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->logradouro?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->bairro?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->numero?></td>
                        <td class="pt-3-half" contenteditable="true"><?php echo $reg->complemento?></td>
                        <td>
                        <a href="formAlterar.php?cod=<?php echo $reg->id_candidato?>">ALTERAR</a></td>
                        <td>
                        <a class="btn btn-warning btn-rounded btn-sm my-0" href="processaExclusao.php?cod=<?php echo $reg->id_candidato?>">EXCLUIR</a> <!-- Passa dado via get com a ? no link -->
                        </td>
                        <?php } ?>             
                        </tr>
                        </tr>
                    </thead>            
                </table>


            </div>

        <script src="js/bootstrap3.min.js"></script>
        <script src="js/bootstrap-table.min.js"></script>
        <script src="js/bootstrap-table-pt-BR.min.js"></script>
        <script src="js/extensions/export/bootstrap-table-export.min.js"></script>
        <script src="js/tableExport.js"></script>
    </body>
</html>
