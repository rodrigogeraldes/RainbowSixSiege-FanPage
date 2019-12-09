<div class="container">
        <div class="card">
            <h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Buscar livros no acervo</h3>
            <div id='expo'>
                <div id='left'>
                    <p id='texto_breve'> Esta página é destinada para busca de livros existentes dentro de nossa biblioteca. 
                    Caso o livro desejado não seja encontrado, você é convidado a adiciona-lo em nossa biblioteca, selecionando a opção 'Adicionar livros' em nosso menu!</p>
                </div>
                <img id ='right' src='Imagens/leitura.png' width='300' height='250'/>
            </div>
            <p class='m-2  text-left'>
	           <button id='bttn' type="button" class="btn btn-outline-primary" onclick=location.replace('Index.php?opc=B&acao=B')>Buscar</button>
            </p>
        </div>
</div>
<br/><br/><br/><br/>
<?php
    if ( isset($_GET['acao'])) {
	   $acao = $_GET['acao'];

        if ( $acao == "B" )	{	# BUSCAR LIVROS
?>
<div class="container">
    <div class='card'>
        <h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Buscar Livros</h3>
        <br/>
        <form action='Index.php?opc=B&acao=L' method='post'>
            <br/>
            <h6 class='text-center text-primary' style="margin-right: 8%;"> Nome do livro: 
                <input type='text' name='nome' size='40' maxlength='40' />
            </h6>
            <br/>
            <h6 class='text-center'> <input class='btn btn-primary text-white' style='margin-right:3%;' type='submit' value='Buscar' /><input class='btn btn-primary text-white' type='reset' value='Limpar' /></h6>
        </form>
    </div>
</div>
<?php
        }
	elseif ( $acao == "L" )	{	# LISTAR 
        $argumentos = " WHERE 1 = 1 ";

        if ( $_POST['nome'] != '' ) {
            $nome = $_POST['nome'];
            $argumentos = $argumentos . " AND NOME LIKE '%$nome%' ";
        }
        $argumentos = $argumentos . " ORDER BY NOME ";

        $tabela = funSelect('tb_livros', '*', $argumentos);
	
		?>
<div class="container">
    <div class='card'>
		<h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Livros Encontrados</h3>
		
		<table class='m-0 w-80 mx-auto table table-white text-primary'>
			<thead class='text-center'>
				<tr>
		 			<th scope='col'>Nome</th>
		 			<th scope='col'>Autor</th>
			 		<th scope='col'>Editora</th>
			 		<th scope='col'>Quantidade</th>
		 			<th scope='col'>Preço</th>
                    <th scope='col'>Descrição</th>
                    <th scope='col'>Carrinho</th>
				</tr>
			</thead>
		<?php			
            for ($i=0; $i<count($tabela);$i++) {
				echo "<tr class='text-center'>
						<td scope='col'>". $tabela[$i]['NOME'] ."</td>
						<td scope='col'>". $tabela[$i]['AUTOR'] ."</td>
						<td scope='col'>". $tabela[$i]['EDITORA'] ."</td>
						<td scope='col'>". $tabela[$i]['QTD'] ."</td>
						<td scope='col'>R$ ". number_format($tabela[$i]['PRECO'],2,',','.') ."</td>
                        <td scope='col'><a href='Index.php?opc=B&acao=D&cod=". $tabela[$i]['CODIGO'] ."' ><img src='Imagens/desc.png' alt='Descrição' /></a></td>
                        <td scope='col'><a href='Index.php?opc=C&acao=PI&cod=". $tabela[$i]['CODIGO'] ."' ><img src='Imagens/carrinho_ico.png' width='24' alt='Descrição' /></a></td>
					</tr>";
            }
        ?>   
		</table>
		<p class='m-2'><input class='btn btn-primary text-white' type='submit' value='Voltar'  style='margin-left:2%;' onclick=location.replace('Index.php?opc=B&acao=B') /></p>
    </div>
</div>
		<?php
	}
    
    if ( $acao == "D" ) {	
        
    echo"<div class='container'>";
        echo"<div class='card'>";
                                                    # DESCRIÇÃO
            $cod = $_GET['cod'];
            
            $argumentos = " WHERE CODIGO = '$cod' ";
            $tabela = funSelect('tb_livros', '*', $argumentos);
        
            echo "<h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>".$tabela[0]['NOME']."</h3>";
            echo "<p class='card-text' id='texto_breve1'>".$tabela[0]['DESCRI']."</p>";
        
            echo "<p class='m-2'><input class='btn btn-primary text-white' style='margin-left:2%;' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=B') /></p>";
        echo"</div>";
    echo"</div>"; 
        
    }
           
}
?>
