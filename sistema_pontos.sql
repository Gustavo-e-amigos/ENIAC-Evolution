-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/07/2025 às 07:15
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
-- Banco de dados: `sistema_pontos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `beneficios_resgatados`
--

CREATE TABLE `beneficios_resgatados` (
  `id` int(11) NOT NULL,
  `ra` varchar(20) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `beneficio` varchar(100) DEFAULT NULL,
  `pontos_gastos` int(11) DEFAULT NULL,
  `data_resgate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `beneficios_resgatados`
--

INSERT INTO `beneficios_resgatados` (`id`, `ra`, `nome`, `email`, `beneficio`, `pontos_gastos`, `data_resgate`) VALUES
(1, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Mystery box ', 3800, '2025-07-18 04:16:31'),
(2, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Certificado de 10h Complementar', 1000, '2025-07-18 04:16:55'),
(3, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Mystery box ', 3800, '2025-07-18 12:32:52'),
(4, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Certificado de 10h Complementar', 1000, '2025-07-18 12:33:03'),
(5, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Ganha uma garrafa', 1500, '2025-07-18 12:34:48'),
(6, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Vale Café e Lanche', 1500, '2025-07-18 12:35:14'),
(7, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Ganha uma camisa', 2000, '2025-07-18 12:35:15'),
(8, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Certificado de 10h Complementar', 1000, '2025-07-18 12:35:20'),
(9, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Certificado de 10h Complementar', 1000, '2025-07-21 13:22:32'),
(10, '210822023', 'Kauan Gabriel dos Santos Freitas', '210822023@eniac.edu.br', 'Vale Café e Lanche', 1500, '2025-07-23 12:57:53'),
(11, '123452025', 'Pedro Gabriel dos Santos', '123452025@eniac.edu.br', 'Vale Café e Lanche', 1500, '2025-07-24 04:01:05'),
(12, '123452025', 'Pedro Gabriel dos Santos', '123452025@eniac.edu.br', 'Ganha uma camisa', 2000, '2025-07-24 04:01:09'),
(13, '123452025', 'Pedro Gabriel dos Santos', '123452025@eniac.edu.br', 'Ganha uma garrafa', 1500, '2025-07-24 04:01:51');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `RA` varchar(9) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `Pontos` int(11) NOT NULL,
  `Data_Cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nome`, `RA`, `Email`, `CPF`, `senha`, `Pontos`, `Data_Cadastro`) VALUES
(4, 'Kauan Gabriel dos Santos Freitas', '210822023', '210822023@eniac.edu.br', '44697021886', '1qaz2wsx3edc', 1500, '2025-07-23 12:57:53'),
(5, 'Teste da Silva', '222222222', 'teste@teste.com.br', '22222222222', '123456', 100, '2025-07-14 04:22:52'),
(6, 'Deborah Cristina dos Santos Freitas', '211111111', '2111111@eniac.edu.br', '12345678910', '1qaz2wsx3edc', 100, '2025-07-14 12:25:38'),
(10, 'Kauan - Teste', '210822022', 'kauan@gmail.com', '11111111111', '1qaz2wsx', 100, '2025-07-15 14:27:53'),
(12, 'Kauan - Teste 2', '333333333', 'kauan@teste.2.br', '65454547457', '3edc4rfv', 100, '2025-07-16 13:22:20'),
(13, 'Pedro Gabriel dos Santos', '123452025', '123452025@eniac.edu.br', '23456789077', '1qaz2wsx3edc', 5000, '2025-07-24 04:01:51');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `beneficios_resgatados`
--
ALTER TABLE `beneficios_resgatados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `RA` (`RA`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `beneficios_resgatados`
--
ALTER TABLE `beneficios_resgatados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
