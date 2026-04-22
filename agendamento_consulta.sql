-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/04/2026 às 01:48
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
-- Banco de dados: `agendamento_consulta`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id_agendamento` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `data_consulta` date DEFAULT NULL,
  `hora` time NOT NULL,
  `status` enum('Agendada','Realizada') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamento`
--

INSERT INTO `agendamento` (`id_agendamento`, `id_paciente`, `id_medico`, `data_consulta`, `hora`, `status`) VALUES
(1, 3, 1, '2025-11-28', '11:00:00', 'Agendada'),
(2, 4, 2, '2025-11-28', '13:00:00', 'Agendada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `id_agendamento` int(11) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `encaminhamento` varchar(100) DEFAULT NULL,
  `observacoes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `id_agendamento`, `status`, `encaminhamento`, `observacoes`) VALUES
(1, 2, 'R', '20 sessões de psicologia ', 'Apresenta dificuldades de falar em publico');

-- --------------------------------------------------------

--
-- Estrutura para tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `id_especialidade` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `especialidade`
--

INSERT INTO `especialidade` (`id_especialidade`, `nome`, `descricao`) VALUES
(1, 'Educação', 'O programa foca no desenvolvimento pleno de crianças de 0 a 5 anos, nos âmbitos físico, psicológico, social e cultural.'),
(2, 'Fisioterapia', 'A Fisioterapia é a ciência que previne, diagnostica e trata disfunções do movimento e da função corporal.'),
(3, 'Fonoaudiologia', 'A Fonoaudiologia cuida da voz e audição, promovendo saúde e melhorando a interação em atendimentos individuais ou em grupo.'),
(4, 'Nutrição', 'O serviço de Nutrição proporciona refeições equilibradas, ajustadas às necessidades de condições congênitas e adquiridas.'),
(5, 'Odontologia', 'A APAE de Criciúma oferece atendimento odontológico especializado para pacientes com necessidades especiais.'),
(6, 'Psicologia', 'O setor de Psicologia da APAE de Criciúma realiza atendimentos e avaliações que promovem o bem-estar emocional e social.'),
(7, 'Serviço Médico', 'O setor médico foca no atendimento às áreas neurológicas e psiquiátricas, enfatizando a prevenção e tratamento de distúrbios.'),
(8, 'Serviço Social', 'Ciência que estuda a deficiência');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `nome_medico` varchar(100) NOT NULL,
  `id_especialidade` int(11) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `rqe` int(20) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `medico`
--

INSERT INTO `medico` (`id_medico`, `nome_medico`, `id_especialidade`, `crm`, `rqe`, `telefone`, `endereco`) VALUES
(1, 'Alice Carvalho', 1, '12345/SC', 123454, '(48) 99948219', 'Avenida Centenario'),
(2, 'Vitória Costa do Nascimento', 6, '12345/SC', 123454, '48 99610-2041', 'Avenida Centenario');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `nome_mae` varchar(100) DEFAULT NULL,
  `telefone_mae` varchar(15) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `laudo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome`, `sexo`, `nome_mae`, `telefone_mae`, `data_nasc`, `endereco`, `cpf`, `telefone`, `email`, `laudo`) VALUES
(2, '', '', '', '', '0000-00-00', '', '', '', '', ''),
(3, 'Yasmin Ferrari Dias', 'F', 'Roselaine Candel Ferrari', '48 99605-7992', '2008-03-05', 'Avenida Centenario', '129.552.679-45', '48 99910-2008', 'yasminferraridi', 0x6c6175646f312e6a7067),
(4, 'Gabriele Medeiros Arns', 'F', 'Patricia Correa Medeiros Arns', '(48)99596128', '2008-03-19', 'Rua Carlos Scavone, 199', '116.955.729-55', '(48)996761434', 'gabrielemedeiro', 0x6c6175646f332e6a7067);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `tipo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`, `tipo`) VALUES
(1, 'alicec.fabris@gmail.com', 'df5b3bd4b2731b9244131591cf1f8a2b', 'P'),
(2, 'marialauramfernandes@gmail.com', '2b146a3cd923d7ba9d5dd97760bf50f6', 'P'),
(3, 'julianopereirarns@gmail.com', 'fa0db60e4c0c13a294a55797b4b5c5e5', 'A'),
(4, 'alicec.fabris@gmail.com', 'cb65934eaa9c6a88b9b6a9fe12093fd8', 'M'),
(5, 'lucasfigueiredo@gmail.com', 'e43cd0accf486c12c174442fed3448c2', 'A'),
(6, 'gabrielemedeirosarns@gmail.com', '0f5e69d23b32616dca53c156e3e50969', 'P'),
(7, 'vitoriacostanascimentoeu@gmail.com', 'f5a9b85168ca26dfd25ad58175051e76', 'M');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id_agendamento`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_medico` (`id_medico`);

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `fk_consulta_agendamento` (`id_agendamento`);

--
-- Índices de tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id_especialidade`);

--
-- Índices de tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`),
  ADD KEY `fk_medico_especialidade` (`id_especialidade`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id_agendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id_especialidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `agendamento_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`),
  ADD CONSTRAINT `agendamento_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`),
  ADD CONSTRAINT `fk_agendamento_medico` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`),
  ADD CONSTRAINT `fk_agendamento_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Restrições para tabelas `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_consulta_agendamento` FOREIGN KEY (`id_agendamento`) REFERENCES `agendamento` (`id_agendamento`);

--
-- Restrições para tabelas `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_medico_especialidade` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidade` (`id_especialidade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
