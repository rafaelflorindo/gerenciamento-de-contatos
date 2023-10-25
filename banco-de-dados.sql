-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.1.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para gerenciador_contatos
CREATE DATABASE IF NOT EXISTS `gerenciador_contatos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gerenciador_contatos`;

-- Copiando estrutura para tabela gerenciador_contatos.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `idContato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `apelido` text NOT NULL,
  `telefone` text NOT NULL,
  `email` text NOT NULL,
  `cep` text NOT NULL,
  `bairro` text NOT NULL,
  `rua` text NOT NULL,
  `numero` int(11) NOT NULL,
  `estado` text NOT NULL,
  `cidade` text NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela gerenciador_contatos.contatos: ~2 rows (aproximadamente)
INSERT INTO `contatos` (`idContato`, `nome`, `sobrenome`, `apelido`, `telefone`, `email`, `cep`, `bairro`, `rua`, `numero`, `estado`, `cidade`, `idUsuario`) VALUES
	(1, 'JoÃ£o Marcos', 'Ferlini Bento', 'Gostosinho', '44444', 'joao@ferlini.com.br', '867770-000', 'Centro', 'Rua dos Lindos', 24, 'PR', 'Santa FÃ©', 0);

-- Copiando estrutura para tabela gerenciador_contatos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Tabela dos usuários que usarão a plataforma.';

-- Copiando dados para a tabela gerenciador_contatos.usuarios: ~2 rows (aproximadamente)
INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `email`, `senha`) VALUES
	(1, 'JoÃ£o Marcos Ferlini', 'joao@ferlini.com.br', '123456789'),
	(2, 'Joao', 'joao@joao.com.br', '123456789');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
