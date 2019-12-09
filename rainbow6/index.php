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
  </head>

  <body style="background-image: url('Imagens/wallpaper.jpg'); background-attachment: fixed; background-size:cover;">
    <div class="container m-4 mx-auto">
        <div class='col view zoom'>
            <img class="mx-auto d-block view zoom" src="Imagens/titulor6.png" width="600" height="350"/>
        </div>
            <!-- Button trigger modal -->
        <div id="conteudo" class="container m-4 mx-auto">
            <p id="textoindex">
                Tom Clancy's Rainbow Six Siege é um videojogo do gênero first person shooter produzido pela <a id="linkubi" href="https://www.ubisoft.com/en-US/studio/montreal.aspx" target="_blank"> Ubisoft Montreal </a>. Foi anunciado pela Ubisoft a 9 de Junho de 2014 na Electronic Entertainment Expo 2014 onde foi muito aplaudido pela crítica. Foi lançado para Xbox One, PlayStation 4 e para Microsoft Windows em 1 de Dezembro de 2015.
            </p>
        </div>
        
        <div id="parte" class="container m-4 mx-auto" style="padding:0;">
            <div id="partegif">
                    <img id="gif" src="Imagens/rapel.gif" width="400" height="250"/>
            </div>
            <div id="conteudo">
                <p id="textoindex">
                    Siege usa o motor AnvilNext, propriedade da Ubisoft, e é considerado o sucessor de Tom Clancy's Rainbow 6: Patriots, que foi cancelado. Como os outros títulos da série, foca-se sobretudo no trabalho em equipe e realismo.
                </p>
            </div>
        </div>
        
        <br/>
        <button id="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Ver mais
        </button>

        <!-- Modal -->
        <form action="apresentacao.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <p id="textoformulario">Selecione a opção desejada:</p><select id="escolha" name="escolha" required>
                                        <option value="" disabled selected="selected">Selecione...</option>
                                        <option value="dev">Desenvolvimento</option>
                                        <option value="sport">e-Sports</option>
                                        <option value="operacao">Operações e personagens</option>
                                    </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Voltar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </div>
        </div>
        </form>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div id="links">
        <ul id="links">
            <li id="github"><a id="link" href="https://github.com/rodrigogeraldes" target="_blank">Github</a></li>
            <li id="if"><a id="link" href="http://portal.ifspguarulhos.edu.br/" target="_blank">IFSP</a>
        </ul>
    </div>
  </body>
</html>