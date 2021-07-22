-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2021 at 07:06 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemasweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_fechas`
--

CREATE TABLE `t_fechas` (
  `id_fecha` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_fechas`
--

INSERT INTO `t_fechas` (`id_fecha`, `fecha`, `fechaInsert`) VALUES
(3, '2021-07-21', '2021-07-21 13:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `t_tareas`
--

CREATE TABLE `t_tareas` (
  `id_tarea` int(11) NOT NULL,
  `id_fecha` int(11) NOT NULL,
  `tarea` text NOT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_fechas`
--
ALTER TABLE `t_fechas`
  ADD PRIMARY KEY (`id_fecha`);

--
-- Indexes for table `t_tareas`
--
ALTER TABLE `t_tareas`
  ADD PRIMARY KEY (`id_tarea`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_fechas`
--
ALTER TABLE `t_fechas`
  MODIFY `id_fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_tareas`
--
ALTER TABLE `t_tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

ALTER TABLE `sistemasweb`.`t_tareas`
ADD COLUMN `estado` INT NOT NULL AFTER `tarea`;

ALTER TABLE `sistemasweb`.`t_tareas` 
ADD INDEX `fktareasFechas_idx` (`id_fecha` ASC);
;
ALTER TABLE `sistemasweb`.`t_tareas` 
ADD CONSTRAINT `fktareasFechas`
  FOREIGN KEY (`id_fecha`)
  REFERENCES `sistemasweb`.`t_fechas` (`id_fecha`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
