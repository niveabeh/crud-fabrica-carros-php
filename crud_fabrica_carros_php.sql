-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/03/2026 às 15:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_fabrica_carros_php`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `modelo`, `cor`) VALUES
(1, 'Duster', 'Branco'),
(2, 'Carro1', 'azul'),
(3, 'Carro2', 'preto'),
(4, 'Carro 3', 'Vermelho'),
(5, 'Carro 5 ', 'Amarelo'),
(6, 'Carro cinza', 'lilas'),
(7, 'Fiat Argo', 'Preto'),
(8, 'Fiat Mobi', 'Branco'),
(9, 'Fiat Cronos', 'Vermelho'),
(10, 'Volkswagen Polo', 'Azul'),
(11, 'Volkswagen T-Cross', 'Prata'),
(12, 'Volkswagen Gol', 'Cinza'),
(13, 'Chevrolet Onix', 'Verde'), 
(14, 'Chevrolet Tracker', 'Preto'),
(15, 'Chevrolet Montana', 'Branco'),
(16, 'Hyundai HB20', 'Azul'),
(17, 'Hyundai Creta', 'Prata'),
(18, 'Toyota Corolla', 'Branco'),
(19, 'Toyota Corolla Cross', 'Cinza'),
(20, 'Toyota Yaris', 'Vermelho'),
(21, 'Honda Civic', 'Preto'),
(22, 'Honda City', 'Azul'),
(23, 'Honda HR-V', 'Prata'),
(24, 'Renault Kwid', 'Amarelo'),
(25, 'Renault Sandero', 'Verde'),
(26, 'Renault Duster', 'Laranja'),
(27, 'Nissan Kicks', 'Branco'),
(28, 'Nissan Versa', 'Preto'),
(29, 'Jeep Renegade', 'Verde'),
(30, 'Jeep Compass', 'Cinza'),
(31, 'Peugeot 208', 'Azul'),
(32, 'Peugeot 2008', 'Branco'),
(33, 'Caoa Chery Tiggo 5X', 'Prata'),
(34, 'Caoa Chery Tiggo 7', 'Preto'),
(36, 'Ford Territory', 'Lilás');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
