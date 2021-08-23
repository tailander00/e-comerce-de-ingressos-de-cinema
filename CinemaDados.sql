-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jul-2021 às 04:38
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cinema`
--

--
-- Extraindo dados da tabela `atores`
--

INSERT INTO `atores` (`id_ator`, `nome`, `nacionalidade`) VALUES
(123789, 'Angelina Jolie', 'Americana'),
(134679, 'Jack Chan', 'Chines'),
(147852, 'Criss Evans', 'Americano'),
(963852, 'Leonardo de Cabrio', 'Americano'),
(976431, 'Wagner Moura', 'Brasileiro');

--
-- Extraindo dados da tabela `atua`
--

INSERT INTO `atua` (`id_filme`, `id_ator`) VALUES
(257558, 123789),
(277527, 134679),
(419473, 147852),
(474029, 963852);

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cpf`, `nome`, `idade`) VALUES
(214894, '93068124000', 'Joao', 50),
(347968, '46815076016', 'Maria', 15),
(415753, '2733180045', 'Creonice', 75),
(569677, '56151860039', 'Enzo', 7);

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `nome`, `genero`, `classificacao`) VALUES
(257558, 'Anabelle', 'terror', '18'),
(277527, 'Velozes e Furiosos 3', 'acao', '14'),
(419473, 'American Pie', 'comedia', '18'),
(474029, 'Rei Leao', 'animacao', 'livre');

--
-- Extraindo dados da tabela `filme_horario`
--

INSERT INTO `filme_horario` (`id_filme`, `id_horario`) VALUES
(257558, 162976),
(277527, 562908),
(419473, 790331),
(474029, 943513);

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id_horario`, `data`, `horarios`, `linguagem`, `id_ingresso`) VALUES
(162976, '2021-10-15', '18:00:00', 'legendado', 0),
(562908, '2021-07-14', '20:00:00', 'dublado', 0),
(790331, '2021-07-19', '14:00:00', 'legendado', 0),
(943513, '2021-07-09', '16:00:00', 'dublado', 0);

--
-- Extraindo dados da tabela `ingressos`
--

INSERT INTO `ingressos` (`id_ingresso`, `numero_poltrona`, `preco`, `estado_venda`, `metodo_de_pagamento`, `tipo`, `id_cliente`, `id_horario`) VALUES
(189637, 25, 11, 1, 'credito', 0, 347968, 162976),
(426807, 5, 11, 1, 'debito', 0, 415753, 562908),
(563119, 21, 22, 1, 'dinheiro', 1, 214894, 162976),
(967031, 10, 22, 1, 'dinheiro', 1, 569677, 562908);

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`id_sala`, `poltronas`) VALUES
(2, 30),
(3, 45),
(4, 35),
(5, 40);

--
-- Extraindo dados da tabela `sala_horario`
--

INSERT INTO `sala_horario` (`id_sala`, `id_horario`) VALUES
(2, 562908),
(3, 790331),
(2, 790331),
(4, 943513);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
