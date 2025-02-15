-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2025 at 05:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zene`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandas`
--

CREATE TABLE `bandas` (
  `idBanda` int(11) NOT NULL,
  `nomeBanda` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idSocial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bandas`
--

INSERT INTO `bandas` (`idBanda`, `nomeBanda`, `cidade`, `uf`, `idCategoria`, `idSocial`) VALUES
(1, 'Free Lance', NULL, NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `generoMusical` varchar(150) DEFAULT NULL,
  `foto` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `generoMusical`, `foto`) VALUES
(1, 'Samba', 'https://img.freepik.com/free-photo/front-view-woman-having-fun-outdoors_23-2150725833.jpg?t=st=1739633512~exp=1739637112~hmac=35f858dcf64b09d0041aec152e6b6ec8d98889374519afe35963a55778f68cba&w=1380'),
(2, 'Sertanejo', 'https://img.freepik.com/free-photo/3d-music-related-scene_23-2151125009.jpg?t=st=1739633573~exp=1739637173~hmac=9b3a00aab8d0a927d40cd2fb19481ef952de101bd25d30770cff734cc6e7a8eb&w=1380'),
(3, 'Rock', 'https://img.freepik.com/free-photo/woman-playing-guitar-local-event_23-2149188125.jpg?t=st=1739631009~exp=1739634609~hmac=79812958b1f1705f6eefabb8b9b49c37b561b9ba07a823df859f799b1774529c&w=1380'),
(4, 'Reggae', 'https://img.freepik.com/free-photo/man-with-dreads-representing-rastafari-movement_23-2151532034.jpg?t=st=1739636124~exp=1739639724~hmac=5424158774086ff8940fe833334d6cff162fb5aa4197c614292cd0cae3e3a9e8&w=1380');

-- --------------------------------------------------------

--
-- Table structure for table `instrumentos`
--

CREATE TABLE `instrumentos` (
  `idInstrumento` int(11) NOT NULL,
  `nomeInstrumento` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instrumentos`
--

INSERT INTO `instrumentos` (`idInstrumento`, `nomeInstrumento`) VALUES
(1, 'Violão'),
(2, 'Cavaco'),
(3, 'Guitarra'),
(4, 'Bateria'),
(5, 'Vocalista');

-- --------------------------------------------------------

--
-- Table structure for table `redesocial`
--

CREATE TABLE `redesocial` (
  `idSocial` int(11) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `tiktok` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `redesocial`
--

INSERT INTO `redesocial` (`idSocial`, `facebook`, `instagram`, `youtube`, `tiktok`) VALUES
(1, NULL, 'erickpradofc', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `idInstrumento` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idBanda` int(11) DEFAULT NULL,
  `idSocial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `nome`, `foto`, `preco`, `idade`, `descricao`, `email`, `senha`, `cidade`, `uf`, `telefone`, `idInstrumento`, `idCategoria`, `idBanda`, `idSocial`) VALUES
(1, 'pradis', 'Erick Prado', 'https://img.freepik.com/fotos-premium/retrato-de-avatar-de-desenho-animado-3d-de-artista-masculino_839035-198034.jpg?uid=P5833346&ga=GA1.1.609488637.1728646664&semt=ais_hybrid', 200, 23, '      *Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, sequi iusto. Veritatis ea ducimus modi! Ab totam ducimus, corrupti consectetur optio, delectus minima voluptas magni labore qui minus, sunt asperiores.', 'erick.p436@gmail.com', '$2y$10$v42j.20fhxlxdyMuOMZm0.hODDJXhD6dloL4tuh/aYl1/2eNhc.Ke', 'Limeira', 'São Paulo', '(19) 98911-1857', NULL, NULL, NULL, NULL),
(2, 'john', 'John Legend', 'https://img.freepik.com/fotos-premium/ilustracao-de-retrato-de-homem-bonito_691560-799.jpg?uid=P5833346&ga=GA1.1.609488637.1728646664&semt=ais_hybrid', 180, 33, '', 'lennon@gmail.com', '$2y$10$VOdAp7QnGT/ftbhhJdTsPeEjtiCbICFOGk005.xB9A9/ts9oSYL/y', 'Americana', 'São Paulo', NULL, NULL, NULL, NULL, NULL),
(3, 'john', 'John Legend', 'https://img.freepik.com/fotos-premium/ilustracao-de-retrato-de-homem-bonito_691560-799.jpg?uid=P5833346&ga=GA1.1.609488637.1728646664&semt=ais_hybrid', 0, NULL, NULL, NULL, '$2y$10$VOdAp7QnGT/ftbhhJdTsPeEjtiCbICFOGk005.xB9A9/ts9oSYL/y', NULL, NULL, NULL, NULL, 3, NULL, NULL),
(4, 'pradis', 'Erick Prado', 'https://img.freepik.com/fotos-premium/retrato-de-avatar-de-desenho-animado-3d-de-artista-masculino_839035-198034.jpg?uid=P5833346&ga=GA1.1.609488637.1728646664&semt=ais_hybrid', 0, 23, NULL, NULL, '$2y$10$v42j.20fhxlxdyMuOMZm0.hODDJXhD6dloL4tuh/aYl1/2eNhc.Ke', 'Limeira', 'São Paulo', NULL, NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandas`
--
ALTER TABLE `bandas`
  ADD PRIMARY KEY (`idBanda`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idSocial` (`idSocial`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `instrumentos`
--
ALTER TABLE `instrumentos`
  ADD PRIMARY KEY (`idInstrumento`);

--
-- Indexes for table `redesocial`
--
ALTER TABLE `redesocial`
  ADD PRIMARY KEY (`idSocial`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idBanda` (`idBanda`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idInstrumento` (`idInstrumento`),
  ADD KEY `idSocial` (`idSocial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bandas`
--
ALTER TABLE `bandas`
  MODIFY `idBanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instrumentos`
--
ALTER TABLE `instrumentos`
  MODIFY `idInstrumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `redesocial`
--
ALTER TABLE `redesocial`
  MODIFY `idSocial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bandas`
--
ALTER TABLE `bandas`
  ADD CONSTRAINT `bandas_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`),
  ADD CONSTRAINT `bandas_ibfk_2` FOREIGN KEY (`idSocial`) REFERENCES `redesocial` (`idSocial`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idBanda`) REFERENCES `bandas` (`idBanda`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`idInstrumento`) REFERENCES `instrumentos` (`idInstrumento`),
  ADD CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`idSocial`) REFERENCES `redesocial` (`idSocial`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
