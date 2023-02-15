-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 10/12/2021 às 00h02min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `plug`
--
CREATE DATABASE `plug` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `plug`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(200) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `caminho` varchar(200) NOT NULL DEFAULT 'images/',
  `foto` varchar(200) NOT NULL,
  `token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_produto`, `descricao`, `valor`, `caminho`, `foto`, `token`) VALUES
(1, 'Cabo 1', 'Compra Logo meuu', '25', 'images/', 'cabo1.jpg', '#500'),
(2, 'Cabo 2', 'Disponível viu gatin!', '30', 'images/', 'cabo2.jpg', '#120'),
(3, 'Cabo 3', 'Compra meu cabin', '35', 'images/', 'cabo3.jpg', '#350'),
(4, 'Cabo 4', 'Pode comprar confia!', '15', 'images/', 'cabo4.jpg', '#400'),
(8, 'Carregador Indução', 'Carregador por indução', '150', 'images/', 'carregadorinducao.jpg', '#65');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nivel` int(1) unsigned NOT NULL DEFAULT '1',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `nivel` (`nivel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES
(1, 'Usuário Teste', 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'usuario@demo.com.br', 1, 1, '2021-11-05 10:19:14'),
(2, 'Administrador Teste', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@demo.com.br', 2, 1, '2021-11-05 10:19:14'),
(3, 'matheus pinto dos santos', 'theus', 'b4201df2b7d41851fd3bb724afd1982f0e6aab83', 'matheuspinto193@gmail.com', 1, 1, '2021-11-29 00:00:00'),
(4, 'Eric', 'depaula', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'depaula39@icloud.com', 2, 1, '2021-12-09 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
