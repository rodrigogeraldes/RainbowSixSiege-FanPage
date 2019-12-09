--
-- Base de Dados: `db_livaria`
--
CREATE DATABASE IF NOT EXISTS `db_livraria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_livraria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livros`
--

CREATE TABLE IF NOT EXISTS `tb_livros` (
  `CODIGO` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `AUTOR` varchar(40) NOT NULL,
  `EDITORA` varchar(30) NOT NULL,
  `DESCRI` varchar(900) NOT NULL,
  `IMAGEM` varchar(50) NOT NULL,
  `QTD` int NOT NULL,
  `PRECO` float NOT NULL,
  PRIMARY KEY (`CODIGO`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `CODIGO` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(30) NOT NULL,
  `SENHA` varchar(20) NOT NULL,
  PRIMARY KEY (`CODIGO`)
) DEFAULT CHARSET=utf8;
-- ------------------------


INSERT INTO tb_livros values ('1','A culpa é das estrelas','John Green','Cultura','Hazel Grace Lancaster e Augustus Waters são dois adolescentes que se conhecem em um grupo de apoio                         para pacientes com câncer. Por causa da   doença, Hazel sempre descartou a ideia de se envolver amorosamente, mas acaba cedendo ao se apaixonar por                                 Augustus. Juntos, eles viajam para Amsterdã, onde embarcam em uma jornada inesquecível.','a_culpa_e_das_estrelas.jpg','25','75'),
                             ('2','Sherlock Holmes','Arthur Conan Doyle','Principis','Quando uma série de assassinatos brutais aterroriza Londres, não demora muito para o lendário detetive Sherlock Holmes e seu parceiro solucionador de crimes, o Dr. Watson, encontrar o assassino, Lord Blackwood. Um devoto das artes das trevas, Blackwood tem um esquema maior em mente e sua execução está em seus planos. ','sherlock_holmes.jpg','30','55'),
                             ('3','The boy in the striped pajamas','John Boyne', 'Ember','Durante a Segunda Guerra Mundial, Bruno, um garoto de oito anos, e sua família saem de Berlim para residir próximo a um campo de concentração, onde seu pai acaba de se tornar comandante. Infeliz e solitário, ele vagueia fora de sua casa e certo dia encontra Shmuel, um menino judeu de sua idade. Embora a cerca de arame farpado do campo os separem, os meninos começam uma amizade proibida.','the_boy_in_the_striped_pajamas.jpg','10', '100'),
                             ('4','Em busca do tempo perdido','Proust','Cultura','Proust recria uma série de personagens e ambientes de sua época e, mais do que isso, baseia-se em uma concepção de memória relacionada com uma visão filosófica do tempo, na qual as recordações podem pôr no mesmo plano o passado e o presente.','em_busca_do_tempo_perdido.jpg','20','150'),
                             ('5','O caderno rosa de Lori Lamby','Hilda Hilst','Massao Ohno','Este livro, em grande parte escrito na forma de diário, apresenta uma menina de oito anos que vende seu corpo incentivada por seus pais proxenetas. ... Mas, apesar do impacto inicial causado pelo tema da pedofilia, o livro vai muito além.','o_caderno_rosa_de_lori_lamby.jpg','10','130'),
                             ('6','Por que fazemos o que fazemos?', 'Mario Sergio Cortella','Planeta','O filósofo e escritor Mario Sergio Cortella desvenda em Por que fazemos o que fazemos? as principais preocupações com relação ao trabalho. Dividido em vinte capítulos, ele aborda questões como a importância de ter uma vida com propósito, a motivação em tempos difíceis, os valores e a lealdade a si e ao seu emprego.','porque_fazemos_o_que_fazemos.jpg','40','90'),
                             ('7','It','Stephen King', 'Viking Press','Um grupo de crianças se une para investigar o misterioso desaparecimento de vários jovens em sua cidade. Eles descobrem que o culpado é Pennywise, um palhaço cruel que se alimenta de seus medos e cuja violência teve origem há vários séculos.','it.jpg','10','75');

INSERT INTO tb_usuarios values ('1', 'admin', 'admin');
--
-- Usuário BD
-- 

CREATE USER IF NOT EXISTS 'aluno'@'localhost' IDENTIFIED BY 'aluno';


GRANT ALL PRIVILEGES ON `db_livraria` . * TO 'aluno'@'localhost';