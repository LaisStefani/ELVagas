<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>EL Vagas</title>
        <meta name="author" content="Eduardo Freitas e Lais Stefani">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/estilos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <!-- Menu -->
        <div class="">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <img class="logoP" src="img/el.png">
                <a href="#">Administração</a>
                <a href="#">Contabilidade</a>
                <a href="#">Ensino Médio</a>
                <a href="#">Informática</a>
                <a href="#">Logística</a>
                <a href="#">Redes</a>
                <a href="login.php">Área Restrita</a>
            </div>
        </div>
        <!-- Parte de cima -->
        <div id="main">
            <nav class="navbar">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

                <input class="btn btn-outline-dark" type="text" name="pesquisa" placeholder="Pesquisar:">

                <button type="button"  class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">Login</button>
            </nav>
            <script>
                $('#myModal').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                })
                ]
            </script>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <!-- Login -->
                            <form action="perfil.php" method="POST">
                                <br>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label" >Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" required >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Senha</label>
                                    <div class="col-sm-10">
                                        <input type="password"  class="form-control" id="colFormLabel1" required >
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- login botões -->
                        <div class="modal-footer">
                            <!--esse comando é pra fechar: data-dismiss="modal" -->
                            <button type="button" class="btn btn-link">Editar Cadastro</button><br>
                            <button type="button" class="btn btn-dark link"><a href="cadastro.php"> Cadastrar</a></button>
                            <button type="submit" class="btn btn-outline-dark">Entrar</button>
                        </div>
                    </div>
                </div>
            </div> 
            <!--Conteudo-->
           <div class="conteudoprincipal"> 
            <div class="tamanhoC container" >
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/vagas3.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/etec3.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/vagas1.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!--Vagas-->
            <div class="container" >
				<?php
					require_once 'arrrays.php';	
				?>
				<?php
					for ($i=0; $i < sizeof($arr_imagens); $i++) { 
				?>
				<div class="containerVagas ">
					<div class="">
					    <img src="<?php echo $arr_imagens[$i];?>">
                    </div>
                    <h4 class="text-center curso"> <?php echo $arr_curso[$i];?> </h4>
					<p class="descricao"><?php echo $arr_descricao[$i];?></p>
					<p class="botao_detalhes"><a href="#=<?php echo $i;?>">Tenho interesse</a></p>
		
				</div>
				<?php
					}
				?>
            </div></div>    
            <!--Rodapé-->
            <div class="rodape">
                <footer> 
                    <p> EL Vagas <br> Copyright © 2018.</p>
                </footer>
            </div>
            
        </div>
    </body>


    <script>
        if (screen.width < 640 || screen.height < 280) {
            function openNav() {
                document.getElementById("mySidenav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        } else {
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        }
    </script>
<html>
