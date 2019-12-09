<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8' />
     <title>Livraria</title>
     <link rel='icon' href='Imagens/network.png' />
     <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' />
     <link rel='stylesheet' type='text/css' href='style.css'/>
     <link rel='shotcut icon' type='image/x-icon' href='Imagens/ico.ico'/>
	 <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' ></script>
	 <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' ></script>
	 <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' ></script>
     <meta name='viewport' content='width=device-width, initial-scale=1' />
  </head>
<body style="background-image: url('Imagens/soft_bg.jpg');">
  	<div id='main'>	
        <a id='titulo_fixo' href='Index.php?opc=H'> <h1 id='main' class=' m-0 p-2 text-white text-center' style='font-size:3rem; background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Livraria Online</h1></a>
        <div id='menu'>
            <ul>
                <li><a href='Index.php?opc=H'>HOME</a></li>	
                <li><a href='Index.php?opc=CA'>COMPRAR / ALUGAR</a></li>
                <li><a href='Index.php?opc=B'>BUSCAR</a></li>
                <li><a href='Index.php?opc=A'>ADICIONAR</a></li>
                <li><a href='Index.php?opc=C&acao=EC'>CARRINHO</a></li>
                <li><a href='Index.php?opc=R'>RESTRITO</a></li>
            </ul>
        </div>
        <br/><br/><br/><br/><br/><br/><br/>
		<?php 	 
			include "DB.php";
			
			if ( isset($_GET['opc'])) {
				$opc = $_GET['opc'];
			} 
			else {
				$opc = "H";				# SE NÃO FOI INFORMADA A OPÇÃO DO MENU, CARREGA A OPÇÃO "HOME"
			}

		  	if ( $opc == "H" ) { 		# HOME
		  		?>
                <div>
                    <div id="expo">
                        <div id="expo">
                            <div id='2'>
                                <div class="card p-1" style="width: 80%; height: 100%;">
                                  <img src="Imagens/comprar.png" class="card-img-top" alt="Comprar livros">
                                  <div class="card-body">
                                    <h5 class="card-title" style='font-family:Arial; font-weight:bold;'>Comprar ou alugar livros</h5>
                                    <p class="card-text" style='font-family:Arial;'>Consultar o mercado e inserir itens ao carrinho.</p>
                                    <a href="Index.php?opc=CA" class="btn btn-primary text-white">Comprar</a>
                                  </div>
                                </div>
                            </div>
                            <div id='2'> 
                                <div class="card p-1" style="width: 80%; height: 100%;">
                                  <img src="Imagens/buscar.png" class="card-img-top" alt="Buscar livros">   
                                  <div class="card-body">
                                    <h5 class="card-title" style='font-family:Arial; font-weight:bold;'>Buscar livros</h5>
                                    <p class="card-text" style='font-family:Arial;'>Buscar livros existentes no acervo da biblioteca.
                                    </p>
                                    <a href="Index.php?opc=B" class="btn btn-primary text-white">Buscar</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div id="expo1">
                            <div id='2'> 
                                <div class="card p-1" style="width: 80%; height: 100%;">
                                  <img src="Imagens/adicionar.png" class="card-img-top" alt="Adicionar livros">
                                  <div class="card-body">
                                    <h5 class="card-title" style='font-family:Arial; font-weight:bold;'>Adicionar livros</h5>
                                    <p class="card-text" style='font-family:Arial;'>Adicionar novos livros à nossa biblioteca.</p>
                                    <a href="Index.php?opc=A" class="btn btn-primary text-white">Adicionar</a>
                                  </div>
                                </div>
                            </div>
                            <div id='2'> 
                                <div class="card p-1" style="width: 80%; height: 100%;">
                                  <img src="Imagens/carrinho.png" class="card-img-top" alt="Carrinho">
                                  <div class="card-body">
                                    <h5 class="card-title" style='font-family:Arial; font-weight:bold;'>Carrinho</h5>
                                    <p class="card-text" style='font-family:Arial;'>Consultar, remover e editar itens do carrinho.</p>
                                    <a href="Index.php?opc=C&acao=EC" class="btn btn-primary text-white">Carrinho</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                
		  		<?php
			}

			elseif ( $opc == "A" ) {	# ADICIONAR
			     include "Adicionar.php";			 		
			}
        
            elseif ( $opc == "R" ) {	# ACESSO RESTRITO
			     include "Restrito.php";			 		
			}
        
            elseif( $opc == "B"){       # BUSCAR 
                include "Buscar.php";
            }
        
            elseif( $opc == "C"){       # CARRINHO 
                    include "Carrinho.php";
                }
            elseif( $opc == "CA"){       # CARRINHO 
                    include "Comprar.php";
                }
        ?>	
        <br/><br/><br/><br/><br/><br/><br/><br/>
    </div>
    <h5 id='footer' class=' m-0 p-2  text-white text-right' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'> © Desenvolvido por Rodrigo de Olivera Geraldes <a id="link" href="https://github.com/rodrigogeraldes" target="_blank"><img style='margin-left: 1%;'src='Imagens/git.png'/></a><a id="link" href="http://portal.ifspguarulhos.edu.br/" target="_blank"><img style='margin-left: 1%;'src='Imagens/if.png'/></a></h5>
	</body>
</html>