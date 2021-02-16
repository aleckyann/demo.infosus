-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 15-Fev-2021 às 08:57
-- Versão do servidor: 8.0.23-0ubuntu0.20.04.1
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infosus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_almoxarifado`
--

CREATE TABLE `historico_almoxarifado` (
  `historico_almoxarifado_id` int NOT NULL,
  `h_a_tipo` varchar(255) NOT NULL,
  `h_a_produto_id` int NOT NULL,
  `h_a_estoque_id` int NOT NULL,
  `h_a_produto_quantidade` int NOT NULL,
  `h_a_usuario_id` int NOT NULL,
  `h_a_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `historico_almoxarifado`
--
ALTER TABLE `historico_almoxarifado`
  ADD PRIMARY KEY (`historico_almoxarifado_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `historico_almoxarifado`
--
ALTER TABLE `historico_almoxarifado`
  MODIFY `historico_almoxarifado_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
