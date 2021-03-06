--
-- Script was generated by Devart dbForge Studio 2019 for MySQL, Version 8.1.45.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 23/4/2022 9:46:31 a.m.
-- Server version: 5.7.24
-- Client version: 4.1
--

-- 
-- Disable foreign keys
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Set SQL mode
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

--
-- Set default database
--
USE laboratorio2;

--
-- Drop table `automovil`
--
DROP TABLE IF EXISTS automovil;

--
-- Drop table `usuarios`
--
DROP TABLE IF EXISTS usuarios;

--
-- Set default database
--
USE laboratorio2;

--
-- Create table `usuarios`
--
CREATE TABLE usuarios (
  id INT(11) NOT NULL,
  username VARCHAR(25) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL
)
ENGINE = INNODB,
AVG_ROW_LENGTH = 16384,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

--
-- Create table `automovil`
--
CREATE TABLE automovil (
  autoId INT(11) NOT NULL AUTO_INCREMENT,
  matricula VARCHAR(20) DEFAULT NULL,
  marca VARCHAR(30) DEFAULT NULL,
  modelo VARCHAR(30) DEFAULT NULL,
  color VARCHAR(30) DEFAULT NULL,
  precio DECIMAL(10, 2) DEFAULT NULL,
  PRIMARY KEY (autoId)
)
ENGINE = INNODB,
AUTO_INCREMENT = 4,
AVG_ROW_LENGTH = 5461,
CHARACTER SET latin1,
COLLATE latin1_general_ci;

-- 
-- Dumping data for table usuarios
--
INSERT INTO usuarios VALUES
(4, 'admin', '$2y$10$VHYsccgyOwQAkZVYzl7JkeqGhpicoci5O5C5K29vzY0ZHYinPWmN.', 'admin@admin.com');

-- 
-- Dumping data for table automovil
--
INSERT INTO automovil VALUES
(1, '1234-5', 'TOYOTA1', 'COROLLA', 'BLANCO', 7500.00),
(2, '3344-5', 'HONDA', 'civic', 'blanco', 9000.00),
(3, '3344-99', 'HONDA', 'civic', 'blanco III', 8000.00);

-- 
-- Restore previous SQL mode
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Enable foreign keys
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;