-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 179.188.16.96
-- Generation Time: 13-Mar-2020 às 14:04
-- Versão do servidor: 5.6.35-81.0-log
-- PHP Version: 5.6.40-0+deb8u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigmaplast`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` smallint(5) UNSIGNED NOT NULL,
  `nome` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `cpf` varchar(14) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nome`, `cpf`, `email`, `telefone`, `status`) VALUES
(1, 'Marco Miranda', '554.554.554-45', 'm.miranda2015@outlook.com', '+5511971815817', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem`
--

CREATE TABLE `ordem` (
  `ordem_id` smallint(5) UNSIGNED NOT NULL,
  `data_troca` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `prox_data_troca` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `oleo` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `observacao` varchar(300) COLLATE latin1_general_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `cliente_id` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` smallint(5) UNSIGNED NOT NULL,
  `usuario` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `status`) VALUES
(1, 'marco', 'f5888d0bb58d611107e11f7cbc41c97a', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `veiculo_id` smallint(5) UNSIGNED NOT NULL,
  `modelo` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ano` varchar(8) COLLATE latin1_general_ci DEFAULT NULL,
  `quilometragem` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ordem_id` smallint(5) UNSIGNED NOT NULL,
  `cliente_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indexes for table `ordem`
--
ALTER TABLE `ordem`
  ADD PRIMARY KEY (`ordem_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`veiculo_id`),
  ADD KEY `ordem_id` (`ordem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ordem`
--
ALTER TABLE `ordem`
  MODIFY `ordem_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `veiculo_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ordem`
--
ALTER TABLE `ordem`
  ADD CONSTRAINT `ordem_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`);

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `veiculo_ibfk_1` FOREIGN KEY (`ordem_id`) REFERENCES `ordem` (`ordem_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
