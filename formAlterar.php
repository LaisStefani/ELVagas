<!DOCTYPE html>
<html>

<head>

	 <meta charset="UTF-8">
	 <meta name="author" content="Eduardo Freitas e Lais Stefani">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/estilos.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atualização de cadastro</title>

</head>


<body class="fundo">
      <div class="container">
        <div class="quadro">
          <form class="col-md-12 mb-4" name="processaAlteracao.php" action="processaAlteracao.php" method="POST">
            <img class="mg" src="img/guia.jpg"><br>
		<?php

			require_once 'Conexao.php';
			require_once 'CRUDCandidato.php';

			$codigo = $_GET['cod'];
			$crud = new CRUDCandidato(Conexao::getInstance());
			$candidato = $crud->selecionarCriterio($codigo);

			foreach ($candidato as $dado) {

		?>


			<div class="content">

					<input type="hidden" name="codigo" value="<?php echo $dado->id_candidato; ?>">
          
						<h2 class="text-center">Atualização de Cadastro</h2>
              <label for="nome">Nome:</label>
              <input type="nome" class="form-control" id="nome" placeholder="Nome" name="nome" value="<?php echo $dado->nome; ?>">
              <div class="form-row">
              <div class="col">
              <label for="dt_nascimento">Data de Nascimento:</label>
              <input type="Date" class="form-control" id="nasc" name="nasc" value="<?php echo $dado->nasc; ?>" >
              </div>
              <div class="col">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Estado Civil:</label>
                <select class="custom-select my-1 mr-sm-2" name="estado_civil" >
                  <option  selec0ed ><?php echo $dado->estado_civil; ?></option>  
                  <option value="1">Casado(a)</option>
                  <option  value="2">Divorciado(a)</option>
                  <option  value="3">Viúvo(a)</option>
                  <option  value="4">Solteiro(a)</option>
                </select>
               </div>
              </div>
              <div class="form-row">
              <div class="col">
              <label for="telefone">Telefone:</label>
              <input type="tel" class="form-control" name="telefone" id="telefone" value="<?php echo $dado->telefone; ?>">
              </div>
              <div class="col">
                <label for="txt_celular">Celular:</label>
              <input type="tel" class="form-control" name="celular" id="celular" value="<?php echo $dado->celular; ?>" >             
              </div>
              </div>
              <div class="form-row">
                <div class="col">
                <label for="txt_celular">E-mail:</label>
                  <input type="text" class="form-control" placeholder="E-mail" name="email" value="<?php echo $dado->email; ?>">
                </div>
                <div class="col">
                <label for="txt_celular">Senha:</label>
                  <input type="password" class="form-control" placeholder="Senha" name="senha"value="<?php echo $dado->senha; ?>" >
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                <label for="txt_celular">RG:</label>
                  <input type="text" class="form-control" placeholder="RG" name="RG" value="<?php echo $dado->RG; ?>">
                </div>
                <div class="col">
                <label for="cpf">CPF:</label>
                  <input type="text" class="form-control" placeholder="CPF" name="cpf" value="<?php echo $dado->cpf; ?>">
                </div>
              </div>

            <!--Dados de endereço: -->
              <label for="frmCEP">CEP:</label>
              <input class="form-control" type="CEP" name="CEP" value="<?php echo $dado->CEP; ?>" id="CEP" tabindex="1" data-mask="00000-000"/>
              <label for="frmLogradouro">Cidade:</label>
              <input class="form-control" type="text" name="cidade" value="<?php echo $dado->cidade; ?>" id="cidade" placeholder="Cidade" />
              <label for="frmLogradouro">Logradouro:</label>
              <input class="form-control" type="text" name="logradouro" value="<?php echo $dado->logradouro; ?>" id="logradouro" tabindex="2" />
              <label for="frmLogradouro">Bairro:</label>
              <input class="form-control" type="text" name="bairro" id="bairro" value="<?php echo $dado->bairro; ?>" />
              <div class="form-row">
                <div class="col">
                <label for="numero">Número:</label>
                <input type="numero" class="form-control" id="numero" placeholder="Número" name="numero" value="<?php echo $dado->numero; ?>">
                </div>
                <div class="col">
                <label for="frmLogradouro">Complemento:</label>
                <input class="form-control" type="text" name="complemento" value="<?php echo $dado->complemento; ?>" id="complemento" />
                </div>
              </div>
            </br>
            <!--Experiencias: -->
            <div class="form-row">
              <div class="col">
                <label for="text">Objetivo profissional:</label>
                <input type="text" class="form-control" id="objetivo" placeholder="Objetivo profissional" name="objetivo" value="<?php echo $dado->objetivo; ?>">
              </div>
              <div class="col">
                <label for="text">Pretensão salarial:</label>
                <input type="text" class="form-control" id="salario" name="salario" value="<?php echo $dado->salario; ?>">
              </div>
            </div>
              <!-- essa parte fiquei em duvida, após clicar direciono pra onde -->
              <div class="text-right">
                <a href="index.php"> <input class="btn btn-dark botao" type="button" value="Tela Inicial"></a>
                <input class="btn btn-dark botao" type="submit" value="Atualizar">

                <!-- OU deixo esse qual acha melhor ?
					<input type="submit" value="ALTERAR">
					-->
				</form>

				<?php } ?>

			</div>

	</div>

</body>

</html>
