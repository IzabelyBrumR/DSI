-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Out-2023 às 12:41
-- Versão do servidor: 8.0.30
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `netflix`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `filme_id` int NOT NULL,
  PRIMARY KEY (`id`,`filme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE IF NOT EXISTS `filme` (
  `id` int NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `img` varchar(45) NOT NULL,
  `perfis_id` int NOT NULL,
  `infantil` int DEFAULT '0',
  `categoria_id` int NOT NULL,
  PRIMARY KEY (`id`,`perfis_id`,`categoria_id`),
  KEY `fk_filme_perfis1_idx` (`perfis_id`),
  KEY `fk_filme_categoria1_idx` (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis`
--

DROP TABLE IF EXISTS `perfis`;
CREATE TABLE IF NOT EXISTS `perfis` (
  `id` int NOT NULL,
  `nomeperfis` varchar(45) NOT NULL,
  `usuarios_id` int NOT NULL,
  PRIMARY KEY (`id`,`usuarios_id`),
  KEY `fk_perfis_usuarios_idx` (`usuarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

DROP TABLE IF EXISTS `series`;
CREATE TABLE IF NOT EXISTS `series` (
  `id` int NOT NULL,
  `nomes` varchar(45) NOT NULL,
  `imgs` varchar(45) NOT NULL,
  `perfis_id` int NOT NULL,
  `infantil` int DEFAULT '0',
  `categoria_id` int NOT NULL,
  PRIMARY KEY (`id`,`perfis_id`,`categoria_id`),
  KEY `fk_series_perfis1_idx` (`perfis_id`),
  KEY `fk_series_categoria1_idx` (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `fk_filme_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fk_filme_perfis1` FOREIGN KEY (`perfis_id`) REFERENCES `perfis` (`id`);

--
-- Limitadores para a tabela `perfis`
--
ALTER TABLE `perfis`
  ADD CONSTRAINT `fk_perfis_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `fk_series_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fk_series_perfis1` FOREIGN KEY (`perfis_id`) REFERENCES `perfis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
