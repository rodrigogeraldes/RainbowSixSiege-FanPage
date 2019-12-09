<div class="container">
    <div class="card">
            <h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Comprar ou alugar livros</h3>
            <div id='expo'>
                <div id='left'>
                    <p id='texto_breve'> Nesta página você pode acessar todos os nossos livros disponíveis para compra ou locação, aqui você poderá analisar e escolher os livros de sua preferência! Divirta-se!</p>
                </div>
                <img id ='right' src='Imagens/leitura.png' width='300' height='250'/>
            </div>
            <p class='m-2  text-left'>
	           <button style='margin-left:2%;' type="button" class="btn btn-primary" data-toggle="modal" data-target="#ordem">Ver produtos</button>
            </p>
        </div>
</div>
<br/><br/><br/><br/><br /><br/>


<form action='Index.php?opc=CA&acao=C' method='post'>
    <div class="modal fade" id="ordem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title p-2 m-1  text-primary text-center" id="ordem">Ordenação</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <h5>Ordenar livros por:
                <select name="ordem" required>
                    <option value="" selected disabled>Selecione</option>
                    <option value="NOME">Nome</option>
                    <option value="CODIGO">Código</option>
                    <option value="PRECO">Preço</option>
                </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Ordenar</button>
          </div>
        </div>
      </div>
    </div>
</form>


<?php
    
if ( isset($_GET['acao']) ) {
	$acao = $_GET['acao'];

    if ( $acao == "C" ) {
        if (isset($_POST['ordem']))
            $ordem = $_POST['ordem'];
        else
            $ordem = $_GET['ordem'];
        
        $tabela = funSelect("tb_livros", "*", "ORDER BY $ordem");
        
        echo"<div class='container'>                    
                <div class='card'>";
                echo"<a name='topo'></a>";
                echo "<h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Produtos disponíveis</h3>";
                    for ($i = 0; $i < count($tabela); $i++) {
                                echo "<div id='livros'>
                                        <div id='left1'>
                                            <br/><img style='margin-left:35%; margin-top:5%;' src='Imagens/Livros/". $tabela[$i]['IMAGEM'] ."' width='150' /> <br /><br />
                                        </div>
                                        <div style='margin-top:5%;'>
                                            <span  class='text-dark' style='font-weight:bold;' id='texto_breve2'>". $tabela[$i]['NOME'] ." </span> <br />
                                            <span class='text-primary' id='texto_breve2'> Autor: ". $tabela[$i]['AUTOR'] ." </span> <br />
                                            <span class='text-primary' id='texto_breve2'> Editora: ". $tabela[$i]['EDITORA'] ." </span> <br />
                                            <span class='text-primary' id='texto_breve2'>R$ ". number_format($tabela[$i]['PRECO'],2,",",".") ."</span> <br /><br/>
                                            <p><a href='Index.php?opc=CA&acao=D&cod=". $tabela[$i]['CODIGO'] ."&ordem=$ordem' style='margin-right: 2%;'><button id='bttn' type='button' class='btn btn-outline-primary'>Detalhar</button></a></p><p>
                                            <a href='Index.php?opc=C&acao=PI&cod=". $tabela[$i]['CODIGO'] ."'><button id='bttn' type='button' class='btn btn-outline-primary'>Carrinho</button></a></a> <br /></p>
                                        </div>
                                    </div>";
                            }
                    echo"<a href='#topo'><button id='bttn' type='button' class='btn btn-outline-primary' style='margin-bottom:2%;
                    margin-top:1%;'>Voltar ao topo</button></a>";
            echo"</div>";
        echo"</div>";
    }



    if ( $acao == "D" ) {
        echo"<div class='container'>";
            echo"<div class='card'>";
        # DESCRIÇÃO
                $cod = $_GET['cod'];
                $ordem = $_GET['ordem'];

                $argumentos = " WHERE CODIGO = '$cod' ";
                $tabela = funSelect('tb_livros', '*', $argumentos);

                echo "<h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>".$tabela[0]['NOME']."</h3>";
                echo "<p class='card-text' id='texto_breve1'>".$tabela[0]['DESCRI']."</p>";

                echo "<p class='m-2'><input class='btn btn-primary text-white' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=CA&acao=C&ordem=$ordem')  style='margin-left:2%;'/></p>";
           echo"</div>";
    echo"</div>"; 
    }
}
     

    echo"<br/><br/><br/><br/>";

?>
