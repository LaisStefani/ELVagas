<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>EL Vagas</title>
        <meta name="author" content="Eduardo Freitas e Lais Stefani">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body class="fundo">
      <div class="container">
        <div class="quadro">
          <form class="col-md-12 mb-4" name="processaCadastro.php" action="processaCadastro.php" method="POST">
            <img class="mg" src="img/guia.jpg"><br>

            <!--Dados pessoais: -->
              <h2 class="text-center">Cadastro de Novo Usuário</h2>
              <label for="nome">Nome:</label>
              <input type="nome" class="form-control" id="nome" placeholder="Nome" name="nome" required autofocus>
              <div class="form-row">
              <div class="col">
              <label for="dt_nascimento">Data de Nascimento:</label>
              <input type="Date" class="form-control" id="nasc" placeholder="Data de nascimento" name="nasc" required autofocus>
              </div>
              <div class="col">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Estado Civil:</label>
                <select class="custom-select my-1 mr-sm-2" name="estado_civil" id="inlineFormCustomSelectPref">
                  <option  selected>Estado Civil</option>  
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
              <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(00) 0000-0000" maxlength="14" data-mask="(00) 0000-0000">
              </div>
              <div class="col">
                <label for="txt_celular">Celular:</label>
              <input type="tel" class="form-control" name="celular" id="celular" placeholder="(00) 00000-0000" maxlength="15" required autofocus data-mask="(00) 00000-0000">             
              </div>
              </div>
              <div class="form-row">
                <div class="col">
                <label for="txt_celular">E-mail:</label>
                  <input type="text" class="form-control" placeholder="E-mail" name="email">
                </div>
                <div class="col">
                <label for="txt_celular">Senha:</label>
                  <input type="password" class="form-control" placeholder="Senha" name="senha">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                <label for="txt_celular">RG:</label>
                  <input type="text" class="form-control" placeholder="RG" name="RG">
                </div>
                <div class="col">
                <label for="cpf">CPF:</label>
                  <input type="text" class="form-control" placeholder="CPF" name="cpf">
                </div>
              </div>

            </br>
            <!--Dados de endereço: -->
              <label for="frmCEP">CEP:</label>
              <input class="form-control" type="CEP" name="CEP" id="CEP" tabindex="1" data-mask="00000-000" placeholder="00000-000"/>
              <label for="frmLogradouro">Cidade:</label>
              <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade" />
              <label for="frmLogradouro">Logradouro:</label>
              <input class="form-control" type="text" name="logradouro" id="logradouro" tabindex="2" placeholder="Logradouro" />
              <label for="frmLogradouro">Bairro:</label>
              <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro" />
              <div class="form-row">
                <div class="col">
                <label for="numero">Número:</label>
                <input type="numero" class="form-control" id="numero" placeholder="Número" name="numero"  required autofocus>
                </div>
                <div class="col">
                <label for="frmLogradouro">Complemento:</label>
                <input class="form-control" type="text" name="complemento" id="complemento" placeholder="Complemento"/>
                </div>
              </div>
            </br>
            <!--Experiencias: -->
            <div class="form-row">
              <div class="col">
                <label for="text">Objetivo profissional:</label>
                <input type="text" class="form-control" id="objetivo" placeholder="Objetivo profissional" name="objetivo" required autofocus>
              </div>
              <div class="col">
                <label for="text">Pretensão salarial:</label>
                <input type="text" class="form-control" id="salario" name="salario" placeholder="R$ 000.000,00">
              </div>
            </div>
              <label for="text">Resumo Profissional:</label>
              <div class="form-group">
                <textarea class="form-control" rows="5" name="resumo"  id="resumo"></textarea>
              </div>
              <label for="text">Qualificação:</label>
              <div class="form-group">
                <textarea class="form-control" rows="5" name='qualificação' id="qualificação"></textarea>
              </div>
              <label for="text">Experiência:</label>
              <div class="form-group">
                <textarea class="form-control" rows="5" name='experiencia' id="experiência"></textarea>
              </div>
              <div class="text-right">
                <a href="index.php"> <input class="btn btn-dark botao" type="button" value="Tela Principal"></a>
                <input class="btn btn-dark botao" type="submit" value="Cadastrar">
                
              </div>
            </div>  
          </form>
        </div>
      </div>
    </body>
</html>
