-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Dez-2021 às 18:13
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_chamados_crb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_post`
--

CREATE TABLE `categorias_post` (
  `id` int(11) NOT NULL,
  `nome_categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_categorias_post`
--

CREATE TABLE `sub_categorias_post` (
  `id` int(11) NOT NULL,
  `categorias_post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(100) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `CPF` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`email`, `senha`, `CPF`) VALUES
('leonardo.cangussu@crbconstrutora.com.br', 'Mudar@123', '45469018873');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias_post`
--
ALTER TABLE `categorias_post`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sub_categorias_post`
--
ALTER TABLE `sub_categorias_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_post_id` (`categorias_post_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CPF`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias_post`
--
ALTER TABLE `categorias_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sub_categorias_post`
--
ALTER TABLE `sub_categorias_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `sub_categorias_post`
--
ALTER TABLE `sub_categorias_post`
  ADD CONSTRAINT `sub_categorias_post_ibfk_1` FOREIGN KEY (`categorias_post_id`) REFERENCES `categorias_post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
