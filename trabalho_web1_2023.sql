DROP DATABASE IF EXISTS trabalho_web1_2023;

CREATE DATABASE trabalho_web1_2023;

USE trabalho_web1_2023;

CREATE TABLE `Respondente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `horas_sono_dia` int(11) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT 'coloque_seu_email_teste@email.com.br'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Respondente` (`id`, `nome`, `cpf`, `data_nasc`, `peso`, `altura`, `horas_sono_dia`, `email`) VALUES
(1, 'Aladdin de Jasmine e Abu', '20972044060', '2000-06-06', 90, 1.7, 6, 'coloque_seu_email_teste@email.com.br'),
(7, 'Rodolfo Pietro Filiberto Raffaelo Guglielm', '41807078027', '1960-02-28', 60, 1.69, 8, 'coloque_seu_email_teste@email.com.br'),
(4, 'Naruto Uzumaki', '62404730061', '2005-05-03', 111, 1.64, 12, 'coloque_seu_email_teste@email.com.br'),
(6, 'Vegeta IV.', '74796616063', '1980-07-02', 78, 1.65, 6, 'coloque_seu_email_teste@email.com.br'),
(5, 'Kakarotto Son Goku', '93899516079', '1984-09-01', 132, 1, 7, 'coloque_seu_email_teste@email.com.br');

-- Índices para tabela `Respondente`
ALTER TABLE `Respondente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

-- AUTO_INCREMENT for dumped tables
-- AUTO_INCREMENT for table `Respondente`

ALTER TABLE `Respondente`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
