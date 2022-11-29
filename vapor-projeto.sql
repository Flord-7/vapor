-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 29-Nov-2022 às 01:31
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vapor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `cpf`, `email`, `senha`) VALUES
(1, 'Matheus de Barros Fagionato', '42381546812', 'mdbf42@gmail.com', 'teste1'),
(2, 'Roberto Arnaldo', '80583687091', 'mdbf43@gmail.com', 'teste2'),
(3, 'Arthud Dent', '73030876055', 'mdbf44@gmail.com', 'teste3'),
(4, 'Seu Cebola', '07924654070', 'mdbf45@gmail.com', 'teste4'),
(5, 'Ronaldo Fenômeno', '01547105046', 'mdbf46@gmail.com', 'teste5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(14, 'AÇÃO'),
(26, 'ADI'),
(18, 'AMIZADE'),
(17, 'ARCADE'),
(15, 'AVENTURA'),
(16, 'CORRIDA'),
(19, 'ESPORTES'),
(23, 'FPS'),
(24, 'MOBA'),
(20, 'PESCARIA'),
(25, 'RPG'),
(21, 'SIMULADOR'),
(22, 'SUSPENSE'),
(13, 'TERROR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `idioma`
--

CREATE TABLE `idioma` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `idioma`
--

INSERT INTO `idioma` (`id`, `nome`) VALUES
(25, 'porutgues'),
(26, 'romeno'),
(27, 'ingles');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `descricao` longtext DEFAULT NULL,
  `imagem_url` varchar(200) NOT NULL,
  `video_url` varchar(200) DEFAULT NULL,
  `data_lancamento` date NOT NULL,
  `desenvolvedora` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `nome`, `valor`, `descricao`, `imagem_url`, `video_url`, `data_lancamento`, `desenvolvedora`, `id_categoria`) VALUES
(1, 'Minecraft', 29, 'Jogo Quadrado', 'https://wallsbazar.com/wp-content/uploads/2021/08/Minecraft-Wallpaper-1024x576.jpg', 'https://www.youtube.com/watch?v=jMe3tdyjouM', '2022-09-09', 'Mojang', 15),
(2, 'The Last of Us', 30, 'Jogo de Zumbi', 'https://upload.wikimedia.org/wikipedia/pt/b/be/The_Last_of_Us_capa.png', 'https://www.youtube.com/watch?v=IpjRuuFEPMk', '2022-10-09', 'Naughty Dog', 13),
(5, 'League Of Legends', 0, 'Jogo de Torres e Poderzinho', 'https://s2.glbimg.com/M4Df2YVeiwElmr4cqNv1J_-gVgQ=/800x0/smart/filters:strip_icc()/s.glbimg.com/po/tt2/f/original/2014/04/03/league-of-legends-10.jpg', 'https://www.youtube.com/watch?v=aR-KAldshAE', '2015-05-03', 'Riot', 18),
(7, 'The Legend of Zelda: Breath of the Wild', 300, 'Jogo do Link', 'https://cdn.pocket-lint.com/r/s/970x/assets/images/137952-games-review-the-legend-of-zelda-breath-of-the-wild-review-image1-tbvqza2wel-jpg.webp', 'https://www.youtube.com/watch?v=zw47_q9wbBE', '2017-05-03', 'Nintendo', 15),
(11, 'The Witcher 3: Wild Hunt', 99, 'Jogo brabo de bão', 'https://2.bp.blogspot.com/-Y5nkN2QquFQ/VWkPVfJ-NXI/AAAAAAAAAy8/KkrUR5guuew/s1600/NFR7xCi.jpg', NULL, '2014-03-01', 'CD Projekt RED', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_idioma`
--

CREATE TABLE `jogo_idioma` (
  `id` int(11) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_plataforma`
--

CREATE TABLE `jogo_plataforma` (
  `id` int(11) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo_plataforma`
--

INSERT INTO `jogo_plataforma` (`id`, `id_jogo`, `id_plataforma`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(10, 1, 4),
(11, 2, 4),
(13, 7, 8),
(18, 7, 7),
(19, 7, 8),
(20, 7, 1),
(21, 5, 1),
(35, 11, 1),
(36, 11, 4),
(37, 11, 3),
(38, 11, 5),
(39, 11, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

CREATE TABLE `plataforma` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`id`, `nome`) VALUES
(1, 'PC'),
(2, 'Playstation 2'),
(3, 'Playstation 3'),
(4, 'Playstation 4'),
(5, 'Xbox 360'),
(6, 'Xbox One'),
(7, 'Nintendo Wii'),
(8, 'Nintendo Switch');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_arquivar`
--

CREATE TABLE `tb_arquivar` (
  `id` int(2) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem`
--

CREATE TABLE `tb_mensagem` (
  `id` int(2) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` varchar(1000) NOT NULL,
  `arquivar` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_mensagem`
--

INSERT INTO `tb_mensagem` (`id`, `nome`, `email`, `assunto`, `mensagem`, `arquivar`) VALUES
(15, 'joao', 'joao@gmail.com', 'duvidas', 'Durante o caos do Ragnarök, o sol e a lua, eternamente perseguidos pelos lobos Skoll e Hati, seriam alcançados e devorados por outro lobo chamado Managarm. Após isso, os filhos de Loki marchariam por sobre Midgard (mundo dos homens) e travariam batalha com os deuses. Os filhos de Loki eram o lobo Fenrir, a serpente do mundo chamada Jörmungandr, e a deusa do mundo dos mortos Hel. Todos eram filhos de Loki com uma giganta (Jotun, no nórdico) chamada Angrboda.\r\n\r\nAlém disso, Loki, navegando no Naglfar, o navio feito com os restos de unhas dos mortos, junto de Hymir, o líder do exército de gigantes de gelo, seria encaminhado para o local da batalha. Por fim, Surtur, liderando os gigantes de fogo, destruiria a Bifrost, a ponte que ligava Midgard a Asgard, e, então, todos seriam reunidos em Vígrídr, a grande planície onde ocorreria a batalha final.', b'1'),
(16, 'victor', 'victor@gmail.com', 'outros', 'Os historiadores conhecem os eventos que caracterizam o Ragnarök graças aos registros que foram realizados na Edda em Prosa (particularmente no capítulo chamado Gylfaginning) e em vários poemas da Edda Poética, especialmente o poema Völuspá. Esses são os principais registros que se têm conhecimento sobre os mitos que caracterizavam a religião dos nórdicos.\r\n\r\nA Edda em Prosa foi escrita pelo poeta e historiador islandês Snorri Sturluson, por volta de 1220. Segundo Johnni Langer, essa obra tinha como objetivo “ser um manual de mitologia para os jovens poetas, numa época em que as antigas metáforas poéticas e as narrativas míticas estavam sendo esquecidas”|5|. O principal capítulo dessa obra, conforme mencionado, chama-se Gylfaginning e sistematizou as crenças e mitos dos nórdicos de maneira linear, passando da criação do universo até a catástrofe do Ragnarök.\r\n\r\nJá a Edda Poética é uma coleção de poemas nórdicos que narram diferentes mitos que faziam parte da crença religiosa dos viking', b'0');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `imagem_url` (`imagem_url`),
  ADD UNIQUE KEY `video_url` (`video_url`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Índices para tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_idioma` (`id_idioma`);

--
-- Índices para tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_plataforma` (`id_plataforma`);

--
-- Índices para tabela `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `tb_arquivar`
--
ALTER TABLE `tb_arquivar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_arquivar`
--
ALTER TABLE `tb_arquivar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

--
-- Limitadores para a tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  ADD CONSTRAINT `jogo_idioma_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `jogo_idioma_ibfk_2` FOREIGN KEY (`id_idioma`) REFERENCES `idioma` (`id`);

--
-- Limitadores para a tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  ADD CONSTRAINT `jogo_plataforma_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `jogo_plataforma_ibfk_2` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
