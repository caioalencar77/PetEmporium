-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21/02/2025 às 12:24
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `inserir`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `migo`
--

DROP TABLE IF EXISTS `migo`;
CREATE TABLE IF NOT EXISTS `migo` (
  `nome` varchar(50) NOT NULL,
  `nomemae` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `migo`
--

INSERT INTO `migo` (`nome`, `nomemae`, `sobrenome`) VALUES
('qwqw', 'qwqw', 'qwqw'),
('ssd', 'sdsd', 'sdsd'),
('ssdetesayets', 'sdsd', 'sdsd'),
('Raul', 'Daiana', 'Pinheiro'),
('Bernardo', 'Adriana', 'Miros'),
('Erick', 'LIliane', 'Souza'),
('Henrique', 'Nancy', 'Barroso'),
('Victor', 'Tatiane', 'Oliveira'),
('Caio', 'Tatiane', 'Oliveira');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
