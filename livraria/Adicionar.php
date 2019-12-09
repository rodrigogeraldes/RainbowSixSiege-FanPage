<div class="container">
    <div class="card">
            <h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Adicionar livros ao acervo</h3>
            <div id='expo'>
                <div id='left'>
                    <p id='texto_breve'> Nesta página você pode inserir diversos livros ao nosso acervo, os livros inseridos serão incluídos no banco de dados de nossa biblioteca e ficarão disponíveis para compra.</p>
                </div>
                <img id ='right' src='Imagens/leitura.png' width='300' height='250'/>
            </div>
            <p class='m-2  text-left'>
	           <button id='bttn' type="button" class="btn btn-outline-primary" onclick=location.replace('Index.php?opc=A&acao=A')>Adicionar</button>
            </p>
        </div>
    <br/><br/><br/><br/><br /><br/>
<?php

if ( isset($_GET['acao']) ) {
	$acao = $_GET['acao'];

	if ( $acao == "A" ) {	# ADICIONAR LIVRO
	?>
		
    <div id='fundo adicao' class="card p-1">
        <h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Adicionar livro</h3>
		<form action='Index.php?opc=A&acao=I' method='post'>
        <br/>
        <table border='0' style='margin-left: 10%; border-collapse: separate; border-spacing: 0 10px; margin-top: -8px;'>
                        <div>
                            <tr>
                                <td>
                                   <h6 class='text-center text-primary'> Nome: </h6> </td><td><input type='text' name='nome' size='25' maxlength='55' placeholder='Nome do Livro' required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class='text-center  text-primary'> Autor:</h6> </td><td> <input type='text' name='autor' size='40' maxlength='40' placeholder='Nome do Autor' required /> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class='text-center  text-primary'> Editora: </h6> </td><td><input type='text' name='editora' size='40' maxlength='40' placeholder='Nome da Editora' /> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class='text-center  text-primary'> Imagem:</h6> </td><td> <input type='text' name='imagem' size='40' maxlength='40' placeholder='Exemplo: imagem.jpg' required /> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                 <h6 class='text-center  text-primary'> Quantidade: </h6> </td><td><input type='number' name='qtd' min='1' max='50' value='0' required /> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class='text-center text-primary'> Descrição: </h6></td><td><textarea name='descri' rows='9' cols='60' placeholder='Escreva aqui a descrição do livro!' required> </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class='text-center  text-primary'> Preço: R$ </h6> </td><td><input type='number' name='preco' min='1' max='99999' value='0' required />,00 
                                </td>
                            </tr>
                        </div>
                    </table>
		<h6 class='text-right'> <input class='btn btn-primary text-white' type='submit' value='Adicionar' /> </h6>
        </form>
    </div>
    <?php
	}

	if ( $acao == "I" ) {	# INCLUIR	
		$nome = $_POST['nome'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $imagem = $_POST['imagem'];
        $descri = $_POST['descri'];
        $qtd = $_POST['qtd'];
        $preco = $_POST['preco'];
        
        $campos = " NOME, AUTOR, EDITORA, IMAGEM, DESCRI, QTD, PRECO ";
        $valores = " '$nome', '$autor', '$editora','$imagem','$descri', '$qtd', '$preco' ";
            
		if ( funInsert('tb_livros', $campos, $valores) )
			echo "<script>
                    alert('Livro inserido com sucesso!');
                </script>";	
		else 
			echo "<script>
                    alert('Erro ao inserir livro!');
                </script>";	

	}	
	echo"<br /><br/><br/><br/><br/><br/>";
}
    ?>