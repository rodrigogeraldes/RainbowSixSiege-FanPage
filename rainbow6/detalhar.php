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
    </head>
    
    <body style="background-image: url('Imagens/wallpaper1.jpg'); background-attachment: fixed; background-size:cover;">
    
        <?php
            $assunto = $_GET["assunto"];
            
            include "matriz_operadores.inc";
        
            echo("
                <table id='tabela1'>
                    <tr>
                        <td><a <a id='link' style='color:".$matriz_operadores[$assunto][9]."; font-family:rainbow; font-size:8rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[$assunto][0]."</a></td>
                        <td id='img'><div class='col view zoom'><img src=".$matriz_operadores[$assunto][1]." width='200' height='200'/></div></td>
                    </tr>
                </table>
                <div id='conteudo1' class='container border m-4 mx-auto'>
                    <div id='parte'>
                        <div id='left'>
                             <a id='link' style='color:".$matriz_operadores[$assunto][9]."; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[$assunto][3]."</a>
                        </div>
                        <div id='right'>
                            <div class='col view zoom'><img src=".$matriz_operadores[$assunto][4]." width='100' height='100'/></div>
                        </div>
                    </div>
                    <br/><br/>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Nome: </span>".$matriz_operadores[$assunto][5]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Posição: </span>".$matriz_operadores[$assunto][6]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Idade: </span>".$matriz_operadores[$assunto][7]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Biografia: </span>".$matriz_operadores[$assunto][8]."</p>
                    <br/>
                    <div id='parte'>
                        <div id='left'>
                             <a id='link' style='color:".$matriz_operadores[$assunto][9]."; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[$assunto][12]."</a>
                        </div>
                        <div id='right'>
                            <div class='col view zoom'><img src=".$matriz_operadores[$assunto][11]." width='100' height='100'/></div>
                        </div>
                    </div>
                    <br/><br/>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Nome: </span>".$matriz_operadores[$assunto][13]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Posição: </span>".$matriz_operadores[$assunto][14]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Idade: </span>".$matriz_operadores[$assunto][15]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Biografia: </span>".$matriz_operadores[$assunto][16]."</p>
                    <br/>
                    <div id='parte'>
                        <div id='left'>
                             <a id='link' style='color:".$matriz_operadores[$assunto][9]."; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[$assunto][18]."</a>
                        </div>
                        <div id='right'>
                            <div class='col view zoom'><img src=".$matriz_operadores[$assunto][19]." width='100' height='100'/></div>
                        </div>
                    </div>
                    <br/><br/>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Nome: </span>".$matriz_operadores[$assunto][20]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Posição: </span>".$matriz_operadores[$assunto][21]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Idade: </span>".$matriz_operadores[$assunto][22]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Biografia: </span>".$matriz_operadores[$assunto][23]."</p>
                    <div id='parte'>
                        <div id='left'>
                             <a id='link' style='color:".$matriz_operadores[$assunto][9]."; font-family:rainbow; font-size:5rem; text-shadow: 2px 2px 4px black;'>".$matriz_operadores[$assunto][25]."</a>
                        </div>
                        <div id='right'>
                            <div class='col view zoom'><img src=".$matriz_operadores[$assunto][26]." width='100' height='100'/></div>
                        </div>
                    </div>
                    <br/><br/>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Nome: </span>".$matriz_operadores[$assunto][27]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Posição: </span>".$matriz_operadores[$assunto][28]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Idade: </span>".$matriz_operadores[$assunto][29]."</p>
                    <p id='textooperacao' style='color:black; font-family:arial; font-size:1.5rem;'><span style='color:".$matriz_operadores[$assunto][9]."; font-size:2rem; text-shadow: 2px 2px 4px black;'>Biografia: </span>".$matriz_operadores[$assunto][30]."</p>
                    <br/><br/>
                    <button id='button' type='button' class='btn btn-warning' onclick='history.go(-1)'>
                        Voltar
                    </button>
                    <button id='button' type='button' class='btn btn-warning' onclick='history.go(-2)'>
                        MENU
                    </button>
                </div>
            ");
            
        ?>
        
    </body>
</html>