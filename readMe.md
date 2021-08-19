Para funcionar é necessario o XAMPP instalado na maquina e do banco de dados feito no SQL.

Código do banco de dados:

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/

-- Versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdemail`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdescemail`
--

CREATE TABLE `tbdescemail` (
  `idEmail` int(11) NOT NULL,
  `emailName` varchar(200) NOT NULL,
  `emailDestiny` varchar(200) NOT NULL,
  `emailChat` varchar(200) NOT NULL,
  `emailMensage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbdescemail`
--

INSERT INTO `tbdescemail` (`idEmail`, `emailName`, `emailDestiny`, `emailChat`, `emailMensage`) VALUES
(10, 'Bruno', 'bruno@gmail.com', 'Teste', 'Testando para ver se funciona');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbdescemail`
--
ALTER TABLE `tbdescemail`
  ADD PRIMARY KEY (`idEmail`);
