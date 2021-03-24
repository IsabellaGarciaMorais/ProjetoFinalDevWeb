-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Mar-2021 às 20:08
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rappers`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `rapper`
--

CREATE TABLE `rapper` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `Referência` varchar(50) NOT NULL,
  `Fotografia` varchar(300) NOT NULL,
  `votos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `rapper`
--

INSERT INTO `rapper` (`id`, `nome`, `Referência`, `Fotografia`, `votos`) VALUES
(3, 'Emicida', 'Music', 'images/emicida.jpg', 3),
(4, 'Baco Exu do Blues', 'Music', 'images/Baco.jpeg', 9),
(5, 'Mano Brown', 'Music', 'images/Mano.jpg', 12),
(6, 'Sabotage', 'Music', 'images/Sabotage.jpg', 2),
(7, 'Mariana Mello', 'Music', 'images/Mariana.png', 0),
(8, 'Djonga', 'Music', 'images/Djonga.jpg', 0),
(9, 'Drik Barbosa', 'Rosas', 'images/drik.jpg', 0),
(11, 'Amora', 'Amorinha', 'images/AmoraLinda.jpeg', 0),
(12, 'Isa', 'Formando', 'images/AmoraLinda.jpeg', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `rapper`
--
ALTER TABLE `rapper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `rapper`
--
ALTER TABLE `rapper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
