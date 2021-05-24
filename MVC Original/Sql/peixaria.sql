-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jun-2019 às 02:16
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peixaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `frutosdomar`
--

CREATE TABLE `frutosdomar` (
  `id_Frutos` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `precokg` float NOT NULL,
  `tipo` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `peixes`
--

CREATE TABLE `peixes` (
  `id_Peixe` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `precokg` float NOT NULL,
  `habitat` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_Usuario` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `senha` varchar(55) NOT NULL,
  `nivelAcesso` varchar(55) NOT NULL,
  `telefone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_Usuario`, `nome`, `email`, `senha`, `nivelAcesso`, `telefone`) VALUES
(1, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(2, 'matheus', 'matheus', 'e10adc3949ba59abbe56e057f20f883e', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frutosdomar`
--
ALTER TABLE `frutosdomar`
  ADD PRIMARY KEY (`id_Frutos`);

--
-- Indexes for table `peixes`
--
ALTER TABLE `peixes`
  ADD PRIMARY KEY (`id_Peixe`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frutosdomar`
--
ALTER TABLE `frutosdomar`
  MODIFY `id_Frutos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peixes`
--
ALTER TABLE `peixes`
  MODIFY `id_Peixe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
