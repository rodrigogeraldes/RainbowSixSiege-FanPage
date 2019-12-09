<!DOCTYPE html>
<html>
    <head>
      <title>Rainbow Six Siege</title>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="style.css"/>
      <link rel="shortcut icon" type="image/x-icon" href="Imagens/favicon.png"/>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>

    <body style="background-image: url('Imagens/wallpaper1.jpg'); background-attachment: fixed; background-size:cover;">
        <?php
            $escolha = $_POST["escolha"];
        
            include "matriz_operadores.inc";
            include "matriz_times.inc";
        
            if($escolha == "dev"){
                echo("
                    <p id='font' style='font-size:3rem; font-family:rainbow; letter-spacing: .3rem; text-align:center; color:white; font-size:7rem; text-shadow: 2px 2px 20px black;'> DESEVOLVIMENTO </p>
                    <div id='conteudo1' class='container border m-4 mx-auto'>
                    <div id='flex'>
                        <div id='left'>
                            <div class='col view zoom'>
                                <img style='margin-top:25%; margin-left:18%;' src='Imagens/ubi.png'/>
                            </div>
                        </div>
                        <div id='right'>
                            <p style='color:white; text-align:center; margin-right:15%; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'> UBISOFT </p>
                            <p style='text-align:justify; font-size:1.5rem; margin-right:5%;'> A Ubisoft afirma ser o terceiro maior publicador de video-games independente do mundo, eles possuem 30 estúdios em 19 países, além de subsidiárias em 26 países. O maior estúdio de desenvolvimento da empresa é a Ubisoft Montreal, no Canadá, que atualmente emprega cerca de 2.100 pessoas. Yves Guillemot é o presidente e CEO da Ubisoft.</p>
                        </div>
                    </div>
                    <div id='flex' style='margin-top:15%;'>
                        <div id='left'>
                            <p style='color:white; text-align:center; margin-right:15%; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>Rainbow 6</p>
                            <p style='text-align:justify; font-size:1.5rem; margin-right:5%;'> Tom Clancy's Rainbow Six Siege é um jogo de tiro na primeira pessoa táctico, em que os jogadores assumem o papel de um dos membros da equipe Rainbow, uma unidade contra-terrorista. Os membros têm diferentes nacionalidades, habilidades e equipamentos. Por exemplo, um deles com o nome Twitch tem um drone que pode dar choques aos inimigos com uma descarga eléctrica, enquanto que Smoke tem a habilidade de colocar gases venenosos, fazendo decrescer a energia dos inimigos nas áreas afectadas.</p>
                        </div>
                        <div id='right' style='margin-top:13%;'>
                                <div id='obj_carousel4' class='carousel slide mx-auto' data-ride='carousel'>");
                                    printf("<ol class='carousel-indicators'>");
                                        for($j = 0; $j < 3; $j++){
                                            if($j == 0){
                                                echo("<li data-target='#obj_carousel' data-slide-to='0' class='active'></li>");
                                            }
                                            else{
                                                echo("<li data-target='#obj_carousel' data-slide-to='$j'></li>");
                                            }
                                        }
                                    printf("</ol>");


                                    echo("<div class='carousel-inner'>");
                                        for($j = 1; $j <=3; $j++){
                                            if($j == 1){
                                                echo("<div class='carousel-item active'>");
                                            }
                                            else{
                                                echo("<div class='carousel-item'>");
                                            }

                                                    echo("<img class='img-thumbnail'
                                                     src='Imagens/rainbow6$j.jpg' alt='Imagem do Invitational' width='700' height='300'/>");

                                                echo("</div>");
                                        }    

                                    echo("</div>");


                                    echo("<a class='carousel-control-prev' href='#obj_carousel4' role='button' data-slide='prev'>
                                            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                            <span class='sr-only'>Anterior</span>
                                        </a>
                                        <a class='carousel-control-next' href='#obj_carousel4' role='button' data-slide='next'>
                                            <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                            <span class='sr-only'>Próximo</span>
                                        </a> 
                                </div>
                        </div>
                    </div>
                        <p style='text-align:justify; font-size:1.5rem; margin-right:5%;'> Como resultado, o jogo tem uma estrutura assimétrica. 
                        O trabalho em equipe e as comunicações entre jogadores são pontos encorajados em Siege, e é pedido aos jogadores para integrar as suas habilidades para eliminar os inimigos.</p>
                        <iframe style='margin-left:0; margin-top:5%; border: thick  groove  rgba(192,192,192);' width='560'  height='315' src='https://www.youtube.com/embed/oclXCkCopmk' frameborder='1' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        
                        
                        <p id='font' style='font-size:2rem; margin-top:10%; font-family:rainbow; letter-spacing: .3rem; text-align:center; color:white; font-size:7rem; text-shadow: 2px 2px 20px black;'> TEMPORADAS DO RAINBOW SIX SIEGE </p>
                        <div class='operacoes'>
                            <div class='imgop'>
                            <br/><br/>
                                <div class='row'>");
                                    for($i = 1; $i <= 5; $i++){
                                        echo "<div class='col view zoom'>";
                                        echo "<img class='img-thumbnail' width='200' height='100'
                                                src='Imagens/op$i.jpg'
                                                title=".$matriz_times[1][$i]."
                                                alt='Operações do Rainbow Six Siege'/>
                                        ";
                                        echo "</div>";
                                     }
                                echo "</div>";
                            echo "</div>";
                                    echo("
                                        <table id='nomesoperacao'>
                                            <tr>
                                                <td style='padding-left:15px;'><p id='nomesoperacao'>".$matriz_times[2][1]."</p></td>
                                                <td style='padding-left:100px;'><p id='nomesoperacao'>".$matriz_times[2][2]."</p></td>
                                                <td style='padding-left:90px;'><p id='nomesoperacao'>".$matriz_times[2][3]."</p></td>
                                                <td style='padding-left:95px;'><p id='nomesoperacao'>".$matriz_times[2][4]."</p></td>
                                                <td style='padding-left:80px;'><p id='nomesoperacao'>".$matriz_times[2][5]."</p></td>
                                            </tr>
                                        </table>
                                    ");
                                    echo("
                                        <br/>
                                        <br/>
                                        <div class='imgop'>
                                            <div class='row'>");
                                                for($i = 6; $i <= 10; $i++){
                                                    echo "<div class='col view zoom'>";
                                                        echo "<img class='img-thumbnail' width='200' height='100'
                                                                src='Imagens/op$i.jpg'
                                                                title=".$matriz_times[1][$i]."
                                                                alt='Operações do Rainbow Six Siege'/>
                                                        ";

                                                    echo "</div>";
                                                }
                                         echo "</div>";
                                echo "</div>";
                                echo("<table id='nomesoperacao'>
                                            <tr>
                                                <td style='padding-left:10px;'><p id='nomesoperacao'>".$matriz_times[2][6]."</p></td>
                                                <td style='padding-left:45px;'><p id='nomesoperacao'>".$matriz_times[2][7]."</p></td>
                                                <td style='padding-left:60px;'><p id='nomesoperacao'>".$matriz_times[2][8]."</p></td>
                                                <td style='padding-left:78px;'><p id='nomesoperacao'>".$matriz_times[2][9]."</p></td>
                                                <td style='padding-left:100px;'><p id='nomesoperacao'>".$matriz_times[2][10]."</p></td>
                                            </tr>
                                    </table>");
                        echo"<br/><br/>";
                    echo("
                            <button id='button' type='button' class='btn btn-warning' onclick='history.go(-1)'>
                                Voltar
                            </button>
                        </div>
                    </div>
                ");
            }
        
        if($escolha == "sport"){
            echo("
            <p id='font' style='font-size:3rem; font-family:rainbow; letter-spacing: .3rem; text-align:center; color:white; font-size:7rem; text-shadow: 2px 2px 20px black;'> e-Sports </p>
            <div id='conteudo2' class='container border m-4 mx-auto'>
            <br/>
            <div id='flex'>
                <div id='left'>
                    <p style='font-family:rainbow; font-size:4rem; letter-spacing:.2rem; color:white; text-shadow: 2px 2px 5px black; text-align:center;'>INVITATIONAL</p>
                    <p style='font-size:1.5rem; color:white; text-align:justify; margin-right:5%; text-shadow:2px 2px 5px black;'>O Six Invitational 2019 é o primeiro grande torneio Rainbow Six de 2019 e a terceira iteração do Six Invitational, com 16 equipes de todo o mundo lutando por uma parte do prêmio total de US $ 2.000.000 em Montreal.</p>
                </div>
                
                <div id='right'>
                    <div id='obj_carousel' class='carousel slide mx-auto' data-ride='carousel'>");
                    printf("<ol class='carousel-indicators'>");
                        for($j = 0; $j < 3; $j++){
                            if($j == 0){
                                echo("<li data-target='#obj_carousel' data-slide-to='0' class='active'></li>");
                            }
                            else{
                                echo("<li data-target='#obj_carousel' data-slide-to='$j'></li>");
                            }
                        }
                    printf("</ol>");


                    echo("<div class='carousel-inner'>");
                        for($j = 1; $j <=3; $j++){
                            if($j == 1){
                                echo("<div class='carousel-item active'>");
                            }
                            else{
                                echo("<div class='carousel-item'>");
                            }

                                    echo("<img class='img-thumbnail'
                                     src='Imagens/invitational$j.jpg' alt='Imagem do Invitational' width='700' height='300'/>");
                            
                                echo("</div>");
                        }    

                    echo("</div>");


                    echo("<a class='carousel-control-prev' href='#obj_carousel' role='button' data-slide='prev'>
                            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                            <span class='sr-only'>Anterior</span>
                        </a>
                        <a class='carousel-control-next' href='#obj_carousel' role='button' data-slide='next'>
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>
                            <span class='sr-only'>Próximo</span>
                        </a> 
                    </div>
                </div>
            </div>
            <br/><br/>
            <div id='flex'>
                <div id='left'>
                    <div id='obj_carousel1' class='carousel slide mx-auto' data-ride='carousel'>");
                    printf("<ol class='carousel-indicators'>");
                        for($j = 4; $j < 7; $j++){
                            if($j == 4){
                                echo("<li data-target='#obj_carousel' data-slide-to='0' class='active'></li>");
                            }
                            else{
                                echo("<li data-target='#obj_carousel' data-slide-to='$j'></li>");
                            }
                        }
                    printf("</ol>");


                    echo("<div class='carousel-inner'>");
                        for($j = 5; $j <=7; $j++){
                            if($j == 5){
                                echo("<div class='carousel-item active'>");
                            }
                            else{
                                echo("<div class='carousel-item'>");
                            }

                                    echo("<img class='img-thumbnail'
                                     src='Imagens/proleague$j.jpg' alt='Imagem da Pro League' width='700' height='300'/>");
                            
                                echo("</div>");
                        }    

                    echo("</div>");


                    echo("<a class='carousel-control-prev' href='#obj_carousel1' role='button' data-slide='prev'>
                            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                            <span class='sr-only'>Anterior</span>
                        </a>
                        <a class='carousel-control-next' href='#obj_carousel1' role='button' data-slide='next'>
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>
                            <span class='sr-only'>Próximo</span>
                        </a> 
                    </div>
                </div>
                <div id='right'>
                    <p style='font-family:rainbow; font-size:4rem; letter-spacing:.2rem; color:white; text-shadow: 2px 2px 5px black; text-align:center;'>PRO LEAGUE</p>
                    <p style='margin-left:5%; text-align:justify; font-size:1.5rem; color:white; text-shadow:2px 2px 5px black;'>A Pro League é uma liga de esports profissional para Rainbow Six Siege, organizada e organizada pela ESL em associação com a Ubisoft. A liga foi anunciada em janeiro de 2016 e começou na 1ª temporada do ano 1 em 4 de março de 2017.</p>
                </div>
            </div>
            <div id='flex'>
                <div id='left'>
                    <p style='font-family:rainbow; font-size:4rem; letter-spacing:.2rem; color:white; text-shadow: 2px 2px 5px black; text-align:center;'>MAJOR</p>
                    <p style='margin-right:5%; text-align:justify; font-size:1.5rem; color:white; text-shadow:2px 2px 5px black;'>O Six Major Raleigh 2019 é o segundo grande torneio Rainbow Six de 2019, com 16 equipes de todo o mundo. O Six Major Raleigh 2019 marca o ponto intermediário da 10ª temporada da temporada regular da Pro League.</p>
                </div>
                
                <div id='right'>
                    <div id='obj_carousel2' class='carousel slide mx-auto' data-ride='carousel'>");
                    printf("<ol class='carousel-indicators'>");
                        for($j = 0; $j < 3; $j++){
                            if($j == 0){
                                echo("<li data-target='#obj_carousel' data-slide-to='0' class='active'></li>");
                            }
                            else{
                                echo("<li data-target='#obj_carousel' data-slide-to='$j'></li>");
                            }
                        }
                    printf("</ol>");


                    echo("<div class='carousel-inner'>");
                        for($j = 1; $j <=3; $j++){
                            if($j == 1){
                                echo("<div class='carousel-item active'>");
                            }
                            else{
                                echo("<div class='carousel-item'>");
                            }

                                    echo("<img class='img-thumbnail'
                                     src='Imagens/major$j.jpg' alt='Imagem do Major' width='700' height='300'/>");
                            
                                echo("</div>");
                        }    

                    echo("</div>");


                    echo("<a class='carousel-control-prev' href='#obj_carousel2' role='button' data-slide='prev'>
                            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                            <span class='sr-only'>Anterior</span>
                        </a>
                        <a class='carousel-control-next' href='#obj_carousel2' role='button' data-slide='next'>
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>
                            <span class='sr-only'>Próximo</span>
                        </a> 
                    </div>
                </div>
            </div>
            <br/><br/><br/><br/>
            <p style='text-align:center; font-size:4rem; text-shadow:2px 2px 5px black; color:white; font-family:rainbow; letter-spacing: .1rem;'> PRINCIPAIS EQUIPES </p>
            <div id='flex'>
                <table id='times' style='background-color:rgba(105,105,105, 0.75); width=500px; margin-left:1%; border-radius:10px 20px;'>
                        <td style='padding-left:10px;  padding-top:30px;'><p style='font-size:2rem; color:white; text-shadow:2px 2px 5px black;'>Team Liquid</p></td>
                        <td style='padding-left:240px;  padding-top:20px; padding-right:10px; padding-bottom:10px;''><div class='col view zoom'><img src=".$matriz_times[0][0]." width='100' height='100'/></div></td>
                    </tr>
                    <tr>
                        <td style='padding-left:10px;  padding-top:30px;'><p style='font-size:2rem; color:white; text-shadow:2px 2px 5px black;'>Faze Clan</p></td>
                        <td style='padding-left:240px; padding-top:20px; padding-right:10px; padding-bottom:10px;''><div class='col view zoom'><img src=".$matriz_times[0][1]." width='100' height='100'/></div></td>
                    </tr>
                    <tr>
                        <td style='padding-left:10px;  padding-top:30px;'><p style='font-size:2rem; color:white; text-shadow:2px 2px 5px black;'>Team Empire</p></td>
                        <td style='padding-left:240px; padding-top:20px; padding-bottom:10px;''><div class='col view zoom'><img src=".$matriz_times[0][2]." width='100' height='100'/></div></td>
                    </tr>
                    <tr>
                        <td style='padding-left:10px; padding-top:30px;'><p style='font-size:2rem; color:white; text-shadow:2px 2px 5px black;'>Fnatic</p></td>
                        <td style='padding-left:240px; padding-top:20px; padding-right:10px; padding-bottom:18px;'><div class='col view zoom'><img src=".$matriz_times[0][3]." width='100' height='100'/></div></td>
                    </tr>
                </table>
                <table id='times' style='background-color:rgba(105,105,105, 0.75); width=500px; margin-left:1%; margin-right:1%; border-radius:10px 20px;'>
                        <td style='padding-left:10px;  padding-top:30px;'><p style='font-size:2rem; color:white; text-shadow:2px 2px 5px black;'>Team SoloMid</p></td>
                        <td style='padding-left:250px;  padding-top:20px; padding-right:10px; padding-bottom:10px;''><div class='col view zoom'><img src=".$matriz_times[0][4]." width='100' height='100'/></div></td>
                    </tr>
                    <tr>
                        <td style='padding-left:10px;  padding-top:30px;'><p style='font-size:2rem; color:white; text-shadow:2px 2px 5px black;'>MiBR</p></td>
                        <td style='padding-left:250px; padding-top:20px; padding-right:10px; padding-bottom:10px;''><div class='col view zoom'><img src=".$matriz_times[0][5]." width='100' height='100'/></div></td>
                    </tr>
                    <tr>
                        <td style='padding-left:10px;  padding-top:30px;'><p style='font-size:2rem; color:white; text-shadow:2px 2px 5px black;'>Team Rogue</p></td>
                        <td style='padding-left:250px; padding-top:20px; padding-right:10px; padding-bottom:10px;''><div class='col view zoom'><img src=".$matriz_times[0][6]." width='100' height='100'/></div></td>
                    </tr>
                    <tr>
                        <td style='padding-left:10px; padding-top:30px;'><p style='font-size:2rem; color:white; text-shadow:2px 2px 5px black;'>Penta</p></td>
                        <td style='padding-left:250px; padding-top:20px; padding-right:10px; padding-bottom:30px;'><div class='col view zoom'><img src=".$matriz_times[0][7]." width='100' height='100'/></div></td>
                    </tr>
                </table>
            </div>
                
                <br/><br/>
                <button id='button' type='button' class='btn btn-warning' onclick='history.go(-1)'>
                    Voltar
                </button>
            </div>
            
            
            
            
            
            ");
        }
        
        if($escolha == "operacao"){
            echo("
            <p id='font' style='font-size:3rem; font-family:rainbow; letter-spacing: .3rem; text-align:center; color:white; font-size:7rem; text-shadow: 2px 2px 20px black;'>  EQUIPES E PERSONAGENS </p>
                <div id='conteudo1' class='container border m-4 mx-auto'>
                    <div id='flex'>
                        <div id='left'>
                            <div class='col view zoom'>
                                <img src='Imagens/fbi.jpg' id='imagemoperacao' class='img-thumbnail' width='400' height='200'/>
                            </div>  
                        </div>
                        <div id='right'>
                            <table id='tabelaoperacao'>
                            <tr>
                            <td><a <a id='link' href='detalhar.php?assunto=0' style='color:orange; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[0][0]."</a></td>
                            <td id='img'><div class='col view zoom'><img src=".$matriz_operadores[0][1]." width='100' height='100'/></div></td>
                            </tr>
                            </table>
                            <p id='textooperacao' style='color:black; font-family:arial; font-size:1rem;'>
                                As equipes especiais de armas e táticas do FBI (SWAT) são equipes táticas especializadas do Federal Bureau of Investigation (FBI). Os agentes da SWAT são treinados especialmente para intervir em eventos de alto risco, como situações de reféns e barricadas. O FBI mantém equipes da SWAT em cada um de seus 56 escritórios de campo em todo o país, variando em tamanho até 42 membros. No caso de um problema em grande escala que a polícia local não tenha os recursos necessários, as equipes do FBI SWAT do escritório de campo local, bem como fora da região local, poderão ser despachadas para ajudar as autoridades locais.
                            </p>
                        </div>
                    </div>
                    <div id='flex'>
                        <div id='left'>
                            <table id='tabelaoperacao'>
                            <tr>
                            <td><a <a id='link' href='detalhar.php?assunto=1' style='color:MediumSlateBlue; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[1][0]."</a></td>
                            <td id='img'><div class='col view zoom'><img src=".$matriz_operadores[1][1]." width='100' height='100'/></div></td>
                            </tr>
                            </table>
                            <p id='textooperacao' style='color:black; font-family:arial; font-size:1rem;'>
                                O Serviço Aéreo Especial, comumente abreviado para SAS, é um regimento de forças especiais do Exército Britânico, ativo primeiro de 1941 a 1945, depois a partir de 1947. Eles conduzem diversas guerras não convencionais. Antes de entrar, os soldados passam por um difícil treinamento chamado 'Seleção'. Se um soldado passa, ele é transferido para a unidade aérea, de barco ou de mobilidade. Além disso, todos os três regimentos que formam o Serviço Aéreo Especial possuem uma unidade principal e reserva de combate ao terrorismo.
                            </p>
                        </div>
                        <div id='right'>
                            <div class='col view zoom'>
                                <img id='right' id='imagemoperacao' class='img-thumbnail' src='Imagens/sas.jpg' width='400' height='200'/>
                            </div>
                        </div>
                    </div>
                    <div id='flex'>
                        <div id='left'>
                            <div class='col view zoom'>
                                <img id='imagemoperacao' src='Imagens/gsg9.jpg' class='img-thumbnail' width='400' height='200'/>  
                            </div>
                        </div>
                        <div id='right'>
                            <table id='tabelaoperacao'>
                            <tr>
                            <td><a <a id='link' href='detalhar.php?assunto=2' style='color:yellow; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[2][0]."</a></td>
                            <td id='img'><div class='col view zoom'><img src=".$matriz_operadores[2][1]." width='100' height='100'/></div></td>
                            </tr>
                            </table>
                            <p id='textooperacao' style='color:black; font-family:arial; font-size:1rem;'>
                                O Grenzschutzgruppe 9 der Bundespolizei (Grupo de Proteção de Fronteiras 9 da Polícia Federal), comumente abreviado GSG 9, é uma unidade alemã de combate ao terrorismo e operações especiais. Foi criado como resultado do Massacre de Munique, onde as autoridades da Alemanha se viram severamente comprometidas devido ao fracasso em resgatar os reféns e impedir os terroristas, bem como o histórico relacionamento do país com judeus e Israel.
                            </p>
                        </div>
                    </div>
                    <div id='flex'>
                        <div id='left'>
                            <table id='tabelaoperacao'>
                            <tr>
                            <td><a <a id='link' href='detalhar.php?assunto=3' style='color:RoyalBlue; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[3][0]."</a></td>
                            <td id='img'><div class='col view zoom'><img src=".$matriz_operadores[3][1]." width='100' height='100'/></div></td>
                            </tr>
                            </table>
                            <p id='textooperacao' style='color:black; font-family:arial; font-size:1rem;'>
                                O Grupo Nacional de Intervenção da Gendarmaria, comumente abreviado GIGN (francês: Grupo de Intervenção da Gendarmeria Nacional), é uma unidade de operações especiais das Forças Armadas Francesas. Faz parte da Gendarmaria Nacional e é treinado para realizar missões de combate ao terrorismo e resgate de reféns na França ou em qualquer outro lugar do mundo.
                            </p>
                        </div>
                        <div id='right'>
                            <div class='col view zoom'>
                                <img id='right' id='imagemoperacao' class='img-thumbnail' src='Imagens/gign.jpg' width='400' height='200'/>
                            </div>
                        </div>
                    </div>
                    <div id='flex'>
                        <div id='left'>
                            <div class='col view zoom'>
                                <img class='img-thumbnail' id='imagemoperacao' src='Imagens/spetsnas.jpg' width='400' height='200'/>
                            </div>
                        </div>
                        <div id='right'>
                            <table id='tabelaoperacao'>
                            <tr>
                            <td><a <a id='link' href='detalhar.php?assunto=4' style='color:red; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[4][0]."</a></td>
                            <td id='img'><div class='col view zoom'><img src=".$matriz_operadores[4][1]." width='100' height='100'/></div></td>
                            </tr>
                            </table>
                            <p id='textooperacao' style='color:black; font-family:arial; font-size:1rem;'>
                                Criada em 1974, a Spetsnaz é membro de unidades russas dedicadas ao combate ao terrorismo, operações paramilitares e secretas. Eles têm a tarefa de proteger as instalações estratégicas da Rússia, tanto nacionais quanto internacionais, embora pouco se saiba sobre a natureza exata de sua missão.
                            </p>
                        </div>
                    </div>
                    <br/><br/>
                    <button id='button' type='button' class='btn btn-warning' onclick='history.go(-1)'>
                        Voltar
                    </button>
                </div>
        
            ");
        }
        ?>
    <div id="links">
        <ul id="links">
            <li id="github"><a id="link" href="https://github.com/rodrigogeraldes" target="_blank">Github</a></li>
            <li id="if"><a id="link" href="http://portal.ifspguarulhos.edu.br/" target="_blank">IFSP</a>
        </ul>
    </div>
    </body>
</html>