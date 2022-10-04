-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Ago-2022 às 22:27
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

CREATE DATABASE dbLaravel;
USE dbLaravel;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dblaravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `categoria`) VALUES
(1, 'Bomba'),
(2, 'Bomba2'),
(3, 'Bomba3'),
(4, 'Bomba4'),
(5, 'Bomba5'),
(6, 'Suplemento'),
(7, 'Agua');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dtNasc` date NOT NULL,
  `estadoCivil` char(1) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `cep` char(8) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` char(2) NOT NULL,
  `rg` char(10) NOT NULL,
  `cpf` char(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fone` varchar(10) NOT NULL,
  `celular` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `nome`, `dtNasc`, `estadoCivil`, `endereco`, `numero`, `complemento`, `cep`, `cidade`, `estado`, `rg`, `cpf`, `email`, `fone`, `celular`) VALUES
(1, 'marcola', '2012-08-01', '', 'bahia 123', 12, 'bagaça', '12312312', 'ovo', 'sp', '1234567891', '12345678911', 'ovo@hot.caudo', '1234567891', '12345678911234'),
(2, 'Toguro', '0000-00-00', 'm', '', 69, NULL, '00000000', 'São Paulo', 'Sã', '0000000000', '000000000', 'toguro@gmail.com', '000000000', '000000000'),
(3, 'ovo', '2012-08-01', 'c', 'ovo123', 12, 'esgoto', '12345678', 'maranhão', 'cv', '1234567891', '12345678911', 'glauber.perez@esgoto.pov.br', '1234567891', '12345678911234'),
(4, 'Athirson neves pereira roberto chaves', '2022-08-01', '', 'ovo das neves 2', 25, 'casa', '12345678', 'bahiano', 'sp', '1234567891', '12345678911', 'athirsonzika@gmail.com', '1234567891', '12345678911234'),
(5, 'Athirson neves pereira roberto chaves', '2022-08-01', 'a', 'ovo das neves 2', 25, 'casa', '12345678', 'bahiano', 'sp', '1234567891', '12345678911', 'athirsonzika@gmail.com', '1234567891', '12345678911234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedido`
--

CREATE TABLE `tbpedido` (
  `idPedido` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor` decimal(13,2) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpedido`
--

INSERT INTO `tbpedido` (`idPedido`, `idProduto`, `idCategoria`, `idCliente`, `descricao`, `valor`, `data`) VALUES
(1, 2, 1, 1, '2 caixa de trembolona', '2.00', '0000-00-00'),
(2, 1, 2, 3, 'Duratexton pra caramba', '0.00', '0000-00-00'),
(3, 3, 3, 2, 'Só Deus sabe', '10.00', '0000-00-00'),
(4, 1, 3, 2, 'produtrores', '200.00', '2022-08-05'),
(5, 1, 3, 2, 'aa', '200.00', '2022-02-05'),
(6, 1, 2, 2, 'ovo', '200.00', '2022-02-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `valor` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `idCategoria`, `produto`, `valor`) VALUES
(1, 1, 'Duratexton', '1.00'),
(2, 2, 'Trebomlona', '0.01'),
(3, 3, 'Bomba foda', '99.99'),
(4, 2, 'codorna grauda ', '10000.00'),
(5, 2, 'guilherme graudo', '5.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  ADD CONSTRAINT `tbpedido_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `tbproduto` (`idProduto`),
  ADD CONSTRAINT `tbpedido_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`),
  ADD CONSTRAINT `tbpedido_ibfk_3` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Limitadores para a tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD CONSTRAINT `tbproduto_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
