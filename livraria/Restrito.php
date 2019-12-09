<div class="container">
        <div class="card">
            <h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Gerenciamento dos livros do acervo</h3>
            <div id='expo'>
                <div id='left'>
                    <p id='texto_breve'> Esta página é de uso restrito e é destinada somente para funcionários da livraria, aqui é possível realizar alterações dos dados e gerenciar os livros.</p>
                </div>
                <img id ='right' src='Imagens/leitura.png' width='300' height='250'/>
            </div>
            <p class='m-2  text-left'>
	           <button style='margin-left:2%;' type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                 Editar livros
                </button>
            </p>
        </div>
</div>

<!-- Modal -->
<form action='Index.php?opc=R&acao=LO' method='post'>
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title p-2 m-1  text-primary text-center" id="login">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <table style='margin-left:5%;' id='login'>
                    <tr>
                        <td id='login'>
                            <h6 class='text-left text-primary'> Usuário:  </h6></td><td><input type='text' name='usuario' size='25' maxlength='25' placeholder='Digite o nome de usuário' required /> </td>
                    </tr>
                    <td id='login'>
                        <h6 class='text-left text-primary'> Senha: </h6></td><td> <input type='password' name='senha' size='25' maxlength='25' placeholder='Digite a senha' required /> 
                </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
      </div>
    </div>
</form>
    <br/><br/><br/><br/>




<?php

if ( isset($_GET['acao']) ) {
    $acao = $_GET['acao'];
    if ( $acao == "LO" ) {
              
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
        
             $tabela = funSelect('tb_usuarios', '*', 
                "WHERE NOME = '$usuario' ORDER BY CODIGO");
        

            if($senha == $tabela[0]['SENHA']){
                $acao = 'E';
            }
            
            else{
                ?>
                <script>
                    alert('Usuário ou senha incorretos!');
                </script>
                <?php
            }
    }
    if ( $acao == "E" ) {
                # EDITAR LIVROS
                $tabela = funSelect('tb_livros', '*', 
                    ' ORDER BY CODIGO'); 	
                ?>
                <div class="container" style='margin-top:5%;'>
                    <div class='card'>
                        <h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Livros Cadastrados</h3>
                            <table class='m-0 w-80 mx-auto table table-white text-primary'>
                                    <thead class='text-center'>
                                    <tr>
                                        <th scope='col'>Código</th>
                                        <th scope='col'>Nome</th>
                                        <th scope='col'>Autor</th>
                                        <th scope='col'>Editora</th>
                                        <th scope='col'>Quantidade</th>
                                        <th scope='col'>Preço</th>
                                        <th scope='col' colspan="3">Gerenciamento</th>
                                    </tr>
                                </thead>

                        <?php			

                        for ($i = 0; $i < count($tabela); $i++) {			
                                    echo "<tr class='text-center'>
                                            <td scope='col'>". $tabela[$i]['CODIGO'] ."</td>
                                            <td scope='col'>". $tabela[$i]['NOME'] ."</td>
                                            <td scope='col'>". $tabela[$i]['AUTOR'] ."</td>
                                            <td scope='col'>". $tabela[$i]['EDITORA'] ."</td>
                                            <td scope='col'>". $tabela[$i]['QTD'] ."</td>
                                            <td scope='col'>R$ ". number_format($tabela[$i]['PRECO'],2,',','.') ."</td>
                                            <td scope='col'><a href='Index.php?opc=R&acao=D&cod=". $tabela[$i]['CODIGO'] ."' ><img src='Imagens/desc.png' alt='Descrição' /></a></td>
                                            <td scope='col'><a href='Index.php?opc=R&acao=M&cod=". $tabela[$i]['CODIGO'] ."' ><img src='Imagens/alter.png' alt='Alterar' /></a></td>
                                            <td scope='col'><a href='Index.php?opc=R&acao=X&cod=". $tabela[$i]['CODIGO'] ."' ><img src='Imagens/excluir.jpg' alt='Excluir' /></a></td>
                                        </tr>";
                        }
                        echo "</table>";
            }
                if ( $acao == "M" ) {	# MODIFICAR LIVRO
                    $cod = $_GET['cod'];

                    $argumentos = " WHERE CODIGO = '$cod' ";
                    $tabela = funSelect('tb_livros', '*', $argumentos);
            echo"<div class='container' style='margin-top:5%;'>
                    <div class='card'>";
                    
                    echo "<h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Alterar dados do livro</h3>
                    <form action='Index.php?opc=R&acao=U&cod=$cod' method='post'>
                        <table border='0' style='margin-left: 30%; border-collapse: separate; border-spacing: 0 10px; margin-top: -8px;'>
                            <div class='row'>
                                <tr>
                                    <td id='login'>
                                        <h6 class='text-center text-primary'> Nome: </h6></td><td><input type='text' name='nome' size='40' maxlength='40' value='". $tabela[0]['NOME'] ."' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td id='login'>
                                        <h6 class='text-center text-primary'> Autor: </h6></td><td><input type='text' name='autor' size='40' maxlength='40' value='". $tabela[0]['AUTOR'] ."' required /> 
                                    </td>
                                </tr>
                                <tr>
                                    <td id='login'>
                                        <h6 class='text-center text-primary'> Editora: </h6></td><td><input type='text' name='editora' size='40' maxlength='40' value='". $tabela[0]['EDITORA'] ."' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td id='login'>
                                        <h6 class='text-center text-primary'> Imagem: </h6></td><td><input type='text' name='imagem' size='40' maxlength='50' value='". $tabela[0]['IMAGEM'] ."' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td id='login'>
                                     <h6 class='text-center text-primary'> Quantidade: </h6></td><td><input type='number' name='qtd' size='40' maxlength='40' value='". $tabela[0]['QTD'] ."' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td id='login'>
                                        <h6 class='text-center text-primary'> Descrição: </h6></td><td><textarea name='descri' rows='9' cols='60' required>". $tabela[0]['DESCRI'] ." </textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td id='login'>
                                        <h6 class='text-center text-primary'> Preço: R$ </h6></td><td><input type='number' name='preco' min='1' max='99000' value='". $tabela[0]['PRECO'] ."' required />,00
                                    </td>
                                </tr>
                            </div>
                        </table>
                        <h6 class='text-right' id='bttn1'> <input class='btn btn-primary text-white' type='submit' value='Alterar' /> </h6>
                    </form>";
                echo"</div>";
            echo"</div>";
	}
                        if ( $acao == "U" ) {	# UPDATE
                            $cod = $_GET['cod'];

                            $nome = $_POST['nome'];
                            $autor = $_POST['autor'];
                            $editora = $_POST['editora'];
                            $imagem = $_POST['imagem'];
                            $descri = $_POST['descri'];
                            $qtd = $_POST['qtd'];
                            $preco = $_POST['preco'];

                            $alteracoes = "  NOME = '$nome',
                                             AUTOR = '$autor',
                                             EDITORA = '$editora',
                                             IMAGEM = '$imagem',
                                             DESCRI = '$descri',
                                             QTD = '$qtd',
                                             PRECO = '$preco' ";
                            $argumentos = "  WHERE CODIGO = '$cod' ";

                            if (funUpdate('tb_livros', $alteracoes, $argumentos))		 
                                echo "<script>
                                        alert('Livro alterado com sucesso!');
                                        onclick=location.replace('Index.php?opc=R&acao=E');
                                    </script>";
                            else	 
                                echo "<script>
                                        alert('Erro ao alterar livro!');
                                        onclick=location.replace('Index.php?opc=R&acao=E');
                                    </script>";	
                            
                        } 
                        if ( $acao == "X" ) {	# DELETE
                            $cod = $_GET['cod'];

                            $argumentos = " WHERE CODIGO = '$cod' ";
                            if (funDelete('tb_livros', $argumentos) )		
                                echo "<script>
                                        alert('Livro removido com sucesso!');
                                        onclick=location.replace('Index.php?opc=R&acao=E');
                                    </script>";	
                            else 
                                echo "<script>
                                        alert('Erro ao remover livro!');
                                        onclick=location.replace('Index.php?opc=R&acao=E');
                                    </script>";	
                    }
    
    if ( $acao == "D" ) {	# DESCRIÇÃO
            $cod = $_GET['cod'];
            
            $argumentos = " WHERE CODIGO = '$cod' ";
            $tabela = funSelect('tb_livros', '*', $argumentos);
        echo"<div class='container'>";
            echo"<div class='card'>";
                echo "<h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>".$tabela[0]['NOME']."</h3>";
                echo "<p class='card-text' id='texto_breve1'>".$tabela[0]['DESCRI']."</p>";
                echo "<p class='m-2'><input class='btn btn-primary text-white' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=R&acao=E') style='margin-left:2%;'/></p>";
            echo"</div>";
        echo"</div>";
    }

    echo"</div>";
}
            ?>