<?php
if ( isset($_GET['acao']) ) {
    $acao = $_GET['acao'];
    if($acao == 'EC'){
        ?>
<div class="container">
    <div class="card">
            <h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Carrinho</h3>
            <div>
                    <?php
                        if (isset($_COOKIE['ck_carr']))	{
                            $carr = $_COOKIE['ck_carr']; // atribui o conteúdo do cookie para uma variável
                            $carr = unserialize($carr); // converte de literal (texto) para array
                            $total = 0;
                            echo "
                                <div class='container'>
                                     <div class='row'>
                                         <div class='col text-center font-weight-bold text-primary'>Nome</div>
                                         <div class='col text-center font-weight-bold text-primary'>Autor</div>
                                         <div class='col text-center font-weight-bold text-primary'>Preço</div>
                                         <div class='col text-center font-weight-bold text-primary'>Remover</div>
                                    </div>";			
                            for ($i = 0; $i < count($carr); $i++) {
                                $cod = $carr[$i][0];	

                                $argumentos = " WHERE CODIGO = '$cod' ";			
                                        //funSelect($tabela, $campos, $argumentos) 		
                                        $tabela = funSelect('tb_livros', '*', $argumentos);		
                                        echo "<div class='row'>
                                                <div class='col text-center '>". $tabela[0]['NOME'] ."</div>
                                                <div class='col text-center '>". $tabela[0]['AUTOR'] ."</div>
                                                <div class='col text-center'>R$ ". number_format($tabela[0]['PRECO'],2,',','.') ."</div>
                                                <div class='col text-center'><a href='Index.php?opc=C&acao=PR&i=$i'><img src='Imagens/excluir.jpg' alt='Remover' /></a></div>
                                            </div>";
                                        $total = $total + ( $tabela[0]['PRECO'] * $carr[$i][1] );
                            }

                                    echo "<div class='row'>
                                            <div class='col text-center'></div>
                                            <div class='col text-right font-weight-bold text-primary'>Total:</div>
                                            <div class='col text-center font-weight-bold'> R$ ".number_format($total,2,',','.')."</div>
                                            <div class='col text-center'></div>
                                            <div class='col text-center'></div>
                                        </div>";
                            echo "</div>";

                        }
                        else {
                            echo "<h3 class='p-2 m-2 bg-primary text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),red);'>Carrinho Vazio!</h3>";
                            echo "<p class='m-2'><input class='btn btn-primary text-white' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=H') /></p>";
                        }
                        
                        if(isset($_COOKIE['ck_carr'])){
                        echo "<p class='m-2  text-left'>";
                            echo "<button id='bttn' type='button' class='btn btn-outline-primary' onClick=location.replace('Index.php?opc=CA') />Continuar comprando</button>";
                            echo "<button id='bttn' type='button' class='btn btn-outline-primary' onClick=location.replace('Index.php?opc=C&acao=PX') />Esvaziar carrinho</button>";
                            echo"<button id='bttn' type='button' class='btn btn-outline-primary' onclick=location.replace('Index.php?&opc=C&total=$total&acao=CO')>Comprar</button>";
                            echo"<button id='bttn' type='button' type='button' class='btn btn-outline-primary' data-toggle='modal' data-target='#tempo'>Alugar</button>";
                        echo"</p>";}
                    ?>
            </div>
            
        </div>
</div>

<br/><br/><br/><br/><br/><br/>

<!-- Modal -->
<?php 
        if(isset($_COOKIE['ck_carr']))
    echo "<form action='Index.php?opc=C&acao=AL&total=$total' method='post'>";
?>
    <div class="modal fade" id="tempo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title p-2 m-1  text-primary text-center" id="tempo">Tempo de aluguel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <h5 class='text-center text-primary'> 
                    <input type="radio" name="tempo" value="25" /> 07 dias - (25% do valor total) <br/>
                    <input type="radio" name="tempo" value="50" /> 14 dias - (50% do valor total) <br/>
                    <input type="radio" name="tempo" value="65" /> 21 dias - (65% do valor total) <br/>
                    <input type="radio" name="tempo" value="80" /> 31 dias - (80% do valor total) <br/> 
                </h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </div>
    <?php
        echo "</form>";
    ?>

        <?php        
        
    }

    
     elseif ( $acao == "PI" ) {	# PEDIDO_INCLUIR	
                $qtd = 0;  
                $cod = $_GET['cod'];
         
                if (isset($_COOKIE['ck_carr'])) {
                    $carr = $_COOKIE['ck_carr']; // Atribui o conteúdo do cookie para uma variável
                    $carr = unserialize($carr); // Converte de literal (texto) para array
                    $i = count($carr); // Obtém a última posição do array
                    // Verifica se o produto já está no Carrinho
                    for ( $j = 0; $j < $i; $j++  ) {
                        if ( $cod == $carr[$j][0] ) {
                            echo "<script>alert('Aviso: Produto já existia no Carrinho!');</script>";
                            $i = $j;	//Substitui por ele mesmo
                            $qtd = $carr[$j][1];
                        }
                    }
                }
                else {
                    $i = 0;
                }
                $qtd++;                 
                $carr[$i][0] = $cod;		
                $carr[$i][1] = $qtd;		
                $carr = serialize($carr);	
                setcookie('ck_carr', $carr);	

                echo "<script>alert('Produto incluído no Carrinho!');</script>";

                echo "<script>location.replace('Index.php?opc=C&acao=EC');</script>";
	       }
    
    elseif ( $acao == "PX" ) {	# PEDIDO_ESVAZIAR
			//Limpar Cookie Carrinho:
			setcookie('ck_carr', '', time()-1);
			//unset($_COOKIE['ck_carr']);	// Outra opção para limpar o carrinho
			echo "<script>alert('Carrinho Esvaziado!');</script>";
			echo "<script>location.replace('Index.php?opc=C&acao=EC');</script>";			

	}
    
    elseif ( $acao == "PR" ) {	# PEDIDO_REMOVER	
            $i = $_GET['i'];	

            $carr = $_COOKIE['ck_carr'];
            $carr = unserialize($carr);

            //Remove item
			unset($carr[$i]);	

			//Reorganiza Vetor
			$carr = array_values($carr);
        
			$carr = serialize($carr); // Converte de array para literal (texto)
			setcookie('ck_carr', $carr); //Recarrega array no cookie

			echo "<script>alert('Produto excluído do Carrinho!');</script>";
			
			echo "<script>location.replace('Index.php?opc=C&acao=EC');</script>";			

	}
    
    elseif ( $acao == "BUY" ) {	# PEDIDO_ESVAZIAR
			//Limpar Cookie Carrinho:
			setcookie('ck_carr', '', time()-1);
			//unset($_COOKIE['ck_carr']);	// Outra opção para limpar o carrinho
			echo "<script>alert('Compra efetuada com sucesso!');</script>";
			echo "<script>location.replace('Index.php?opc=H');</script>";			

	}
    
    elseif ( $acao == "RENT" ) {	# PEDIDO_ESVAZIAR
			//Limpar Cookie Carrinho:
			setcookie('ck_carr', '', time()-1);
			//unset($_COOKIE['ck_carr']);	// Outra opção para limpar o carrinho
			echo "<script>alert('Locação efetuada com sucesso!');</script>";
			echo "<script>location.replace('Index.php?opc=H');</script>";			

	}
            
    elseif ( $acao == "AL" ) {
        $tempo = $_POST['tempo'];
        $total = $_GET['total'];
        echo"<div class='container'>";
            echo"<div class='card'>";
                echo "<h3 class='p-2 m-1 text-white text-center' style='background-image: linear-gradient(to right, rgba(0, 123, 255,1),black);'>Pagamento</h3>";
                    
                    if($tempo == '25'){
                         $total_aluguel = $total * 0.25;
                     }
        
                    if($tempo == '50'){
                         $total_aluguel = $total * 0.5;
                     }
        
                    
                    if($tempo == '65'){
                         $total_aluguel = $total * 0.65;
                     }
                    
        
                    if($tempo == '80'){
                         $total_aluguel = $total * 0.8;
                     }
    
                    echo "<form method='post' action='Index.php?opc=C&acao=RENT'>";          
                        echo"<table style='margin-left:5%; margin-top:2%;' id='login'>
                                <tr>
                                    <td>
                                        <h6 class='text-left text-primary'> Número do cartão:  </h6></td><td><input type='text' name='numero_cartao' size='25' maxlength='16' placeholder='XXXX - XXXX - XXXX - XXXX' required /> </td><td><img src='Imagens/numero_cartao.png' width='95' height='35'/> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class='text-left text-primary'> Data de vencimento:  </h6></td><td><input type='text' name='vencimento' size='10' maxlength='4' placeholder='MM/YY' required /> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class='text-left text-primary'> Número de verificação:  </h6></td><td><input type='text' name='verificacao' size='10' maxlength='3' placeholder='XXX' required /> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class='text-left text-primary'> Total a pagar:  </h6></td><td><h6 class='text-left text-dark'> R$$total_aluguel </h6> 
                                    </td>
                                </tr>
                            </table>";
        
                        echo "<p class='m-2'><input class='btn btn-primary text-white' type='submit' value='Efetuar locação'  style='margin-left:4%;'/></form><p class='m-2'><input class='btn btn-primary text-white' style='margin-left:4%;' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=C&acao=EC') /></p>";
                    echo "</form>";
            echo"</div>";
        echo"</div>";
    }
    elseif ( $acao == "CO" ) {
            
         $total = $_GET['total'];
         echo"<div class='container'>";
            echo"<div class='card'>";
                echo "<h3 class='p-2 m-1 bg-primary text-white text-center'>PAGAMENTO</h3>";
        
                echo "<form method='post' action='Index.php?opc=C&acao=BUY'>";          
                        echo"<table style='margin-left:5%; margin-top:2%;' id='login'>
                                <tr>
                                    <td>
                                        <h6 class='text-left text-primary'> Número do cartão:  </h6></td><td><input type='text' name='numero_cartao' size='25' maxlength='16' placeholder='XXXX - XXXX - XXXX - XXXX' required /> </td><td><img src='Imagens/numero_cartao.png' width='95' height='35'/> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class='text-left text-primary'> Data de vencimento:  </h6></td><td><input type='text' name='vencimento' size='10' maxlength='4' placeholder='MM/YY' required /> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class='text-left text-primary'> Número de verificação:  </h6></td><td><input type='text' name='verificacao' size='10' maxlength='3' placeholder='XXX' required /> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class='text-left text-primary'> Total a pagar:  </h6></td><td><h6 class='text-left text-dark'> R$$total</h6> 
                                    </td>
                                </tr>
                            </table>";
        
                        echo "<p class='m-2'><input class='btn btn-primary text-white' type='submit' value='Efetuar compra'  style='margin-left:4%;'/></form><p class='m-2'><input class='btn btn-primary text-white' style='margin-left:4%;' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=C&acao=EC') /></p>";
            echo"</div>";
        echo"</div>";
    }
}
?>
    <br/><br/><br/><br/><br/><br/><br/><br/>