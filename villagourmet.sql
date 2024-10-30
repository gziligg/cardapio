-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 30-Out-2024 às 17:43
-- Versão do servidor: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `villagourmet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `quantped` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `categoria`, `descricao`, `foto`, `quantped`) VALUES
(1, 'CHEDDAR BURGER CREMOSO', '36,90', 'BURGER ARTESANAL', 'Para os amantes do Cheddar, lá vai! No pão com gergelin, 1 Burger Bovino, 2 fatias de cheddar, cheddar cremoso, bacon crispy. Acompanha aproximadamente 100gr fritas..(gramatura corresponde ao alimento in natura, sem passar por cocção)', '../images/CHEDDARBURGUERCREMOSOARTESANAL.jpg', 0),
(2, 'VILLA GORGONZOLA', '41,90', 'BURGER PREMIUM', 'Você é um amante do queijo gorgonzola? Nós também!. Pão com gergelim, creme especial, hambúrguer de carne bovina, queijo gorgonzola, bacon crispy, cebola roxa (crua), tomate e rúcula. Acompanha fritas(gramatura corresponde ao alimento in natura, sem passar por cocção)', '../images/VILLAGORGONZOLA-PREMIUM.jpg', 0),
(3, 'SMALL BURGER', '26,90', 'BURGER SMALL', 'Hoje vai de tradicional, sem medo de errar, é este, para quem não está com muita fome! Pão com gergelim (tamanho menor), creme especial, hambúrguer de carne bovina|(aprox. 100gr), queijo muçarela, cebola roxa (crua), tomate e alface. Acompanha fritas.(gramatura corresponde ao alimento in natura, sem passar por cocção)', '../images/PÃOQUEIJOECARNE(cheeseburger).jpg', 0),
(4, 'CHEDDAR BURGER CREMOSO', '36,90', 'BURGER ARTESANAL', 'Para os amantes do Cheddar, lá vai! No pão com gergelin, 1 Burger Bovino, 2 fatias de cheddar, cheddar cremoso, bacon crispy. Acompanha aproximadamente 100gr fritas..(gramatura corresponde ao alimento in natura, sem passar por cocção)', '../images/CHEDDARBURGUERCREMOSOARTESANAL.jpg', 0),
(5, 'VILLA GORGONZOLA', '41,90', 'BURGER PREMIUM', 'Você é um amante do queijo gorgonzola? Nós também!. Pão com gergelim, creme especial, hambúrguer de carne bovina, queijo gorgonzola, bacon crispy, cebola roxa (crua), tomate e rúcula. Acompanha fritas(gramatura corresponde ao alimento in natura, sem passar por cocção)', '../images/VILLAGORGONZOLA-PREMIUM.jpg', 0),
(6, 'CHEDDAR BURGER CREMOSO', '36,90', 'BURGER ARTESANAL', 'Para os amantes do Cheddar, lá vai! No pão com gergelin, 1 Burger Bovino, 2 fatias de cheddar, cheddar cremoso, bacon crispy. Acompanha aproximadamente 100gr fritas..(gramatura corresponde ao alimento in natura, sem passar por cocção)', '../images/CHEDDARBURGUERCREMOSOARTESANAL.jpg', 0),
(7, 'CHEDDAR BURGER CREMOSO', '36,90', 'BURGER ARTESANAL', 'Para os amantes do Cheddar, lá vai! No pão com gergelin, 1 Burger Bovino, 2 fatias de cheddar, cheddar cremoso, bacon crispy. Acompanha aproximadamente 100gr fritas..(gramatura corresponde ao alimento in natura, sem passar por cocção)', '../images/CHEDDARBURGUERCREMOSOARTESANAL.jpg', 0),
(8, 'SMALL BURGER', '26,90', 'BURGER SMALL', 'Hoje vai de tradicional, sem medo de errar, é este, para quem não está com muita fome! Pão com gergelim (tamanho menor), creme especial, hambúrguer de carne bovina|(aprox. 100gr), queijo muçarela, cebola roxa (crua), tomate e alface. Acompanha fritas.(gramatura corresponde ao alimento in natura, sem passar por cocção)', '../images/PÃOQUEIJOECARNE(cheeseburger).jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
