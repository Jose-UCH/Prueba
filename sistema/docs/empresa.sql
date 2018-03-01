-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2018 a las 09:58:22
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` varchar(120) NOT NULL,
  `isOnline` tinyint(1) DEFAULT NULL,
  `salary` varchar(20) DEFAULT NULL,
  `age` varchar(3) DEFAULT NULL,
  `position` varchar(120) DEFAULT NULL,
  `name` varchar(180) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(120) DEFAULT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`id`, `isOnline`, `salary`, `age`, `position`, `name`, `gender`, `email`, `phone`, `address`) VALUES
('574daa370866cd66710f5519', 0, '$1,393.47', '22', 'developer', 'Greta Mcfadden', 'female', 'gretamcfadden@fanfare.com', '+0511 (917) 441-3834', '497 Milford Street, Grimsley, Alaska, 9648'),
('574daa37114b923fcb959533', 1, '$1,788.16', '70', 'developer', 'Bradley Kirk', 'male', 'bradleykirk@fanfare.com', '+0511 (971) 547-3430', '781 Randolph Street, Eagleville, Wisconsin, 3923'),
('574daa3731aafea412b01231', 1, '$3,485.72', '23', 'developer', 'Brandy Everett', 'female', 'brandyeverett@fanfare.com', '+0511 (910) 414-2740', '895 Union Avenue, Catharine, Indiana, 3975'),
('574daa3735fce3f5e9b0bdd9', 1, '$2,046.78', '51', 'developer', 'Dean Ramirez', 'male', 'deanramirez@fanfare.com', '+0511 (894) 463-3263', '184 Bleecker Street, Hannasville, Connecticut, 4908'),
('574daa374124bc8ac066e65e', 0, '$2,787.84', '43', 'developer', 'Casey Lang', 'male', 'caseylang@fanfare.com', '+0511 (839) 417-3910', '165 Tabor Court, Kidder, Louisiana, 1670'),
('574daa3788291a030a564e54', 0, '$3,872.94', '42', 'developer', 'Hayes Macias', 'male', 'hayesmacias@fanfare.com', '+0511 (815) 442-3884', '883 Pine Street, Zortman, Maryland, 9701'),
('574daa378cb97f935a5c8e2e', 1, '$1,314.06', '21', 'developer', 'Chasity Carver', 'female', 'chasitycarver@fanfare.com', '+0511 (833) 412-3736', '218 Bulwer Place, Maybell, Utah, 4847'),
('574daa379545e9af101c2731', 1, '$1,191.57', '63', 'developer', 'Foley Day', 'male', 'foleyday@fanfare.com', '+0511 (895) 577-2157', '850 Clara Street, Westmoreland, Kansas, 6963'),
('574daa37b6b60c495de67280', 1, '$1,282.14', '50', 'developer', 'Mckee Summers', 'male', 'mckeesummers@fanfare.com', '+0511 (873) 578-3997', '733 Everett Avenue, Centerville, Colorado, 6706'),
('574daa37bc4712260e3415d5', 0, '$3,848.90', '65', 'developer', 'Alfreda Ortiz', 'female', 'alfredaortiz@fanfare.com', '+0511 (874) 515-3829', '921 Rutledge Street, Hampstead, Northern Mariana Islands, 9259'),
('574daa37c0e6294de5987cb5', 1, '$2,893.52', '27', 'developer', 'Regina Berg', 'female', 'reginaberg@fanfare.com', '+0511 (843) 417-2788', '674 Claver Place, Dennard, Pennsylvania, 3998'),
('574daa37c66e1e38eb4e05c2', 1, '$2,374.26', '43', 'developer', 'Miranda Gross', 'female', 'mirandagross@fanfare.com', '+0511 (986) 446-2789', '727 Pooles Lane, Boomer, Marshall Islands, 6052'),
('574daa37d0ef76e417a4571b', 1, '$1,495.46', '51', 'developer', 'Joseph Calhoun', 'male', 'josephcalhoun@fanfare.com', '+0511 (886) 493-3295', '129 Tompkins Place, Succasunna, South Dakota, 603');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `employee_id` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `skill`
--

INSERT INTO `skill` (`id`, `skill`, `employee_id`) VALUES
(1, 'Python', '574daa379545e9af101c2731'),
(2, 'CSS', '574daa379545e9af101c2731'),
(3, 'C#', '574daa379545e9af101c2731'),
(4, 'JS', '574daa379545e9af101c2731'),
(5, 'Lisp', '574daa379545e9af101c2731'),
(6, 'C#', '574daa378cb97f935a5c8e2e'),
(7, 'C#', '574daa378cb97f935a5c8e2e'),
(8, 'NoSQL', '574daa378cb97f935a5c8e2e'),
(9, 'Java', '574daa378cb97f935a5c8e2e'),
(10, 'C#', '574daa378cb97f935a5c8e2e'),
(11, 'Ruby', '574daa3735fce3f5e9b0bdd9'),
(12, 'JS', '574daa3735fce3f5e9b0bdd9'),
(13, 'NoSQL', '574daa3735fce3f5e9b0bdd9'),
(14, 'HTML', '574daa3735fce3f5e9b0bdd9'),
(15, 'C#', '574daa3735fce3f5e9b0bdd9'),
(16, 'C#', '574daa370866cd66710f5519'),
(17, 'Ruby', '574daa370866cd66710f5519'),
(18, 'PHP', '574daa370866cd66710f5519'),
(19, 'PHP', '574daa370866cd66710f5519'),
(20, 'JS', '574daa370866cd66710f5519'),
(21, 'NoSQL', '574daa37114b923fcb959533'),
(22, 'Python', '574daa37114b923fcb959533'),
(23, 'Python', '574daa37114b923fcb959533'),
(24, 'CSS', '574daa37114b923fcb959533'),
(25, 'PHP', '574daa37114b923fcb959533'),
(26, 'Java', '574daa37bc4712260e3415d5'),
(27, 'JS', '574daa37bc4712260e3415d5'),
(28, 'Ruby', '574daa37bc4712260e3415d5'),
(29, 'PHP', '574daa37bc4712260e3415d5'),
(30, 'JS', '574daa37bc4712260e3415d5'),
(31, 'Lisp', '574daa37b6b60c495de67280'),
(32, 'Python', '574daa37b6b60c495de67280'),
(33, 'Python', '574daa37b6b60c495de67280'),
(34, 'JS', '574daa37b6b60c495de67280'),
(35, 'Java', '574daa37b6b60c495de67280'),
(36, 'PHP', '574daa37d0ef76e417a4571b'),
(37, 'HTML', '574daa37d0ef76e417a4571b'),
(38, 'SQL', '574daa37d0ef76e417a4571b'),
(39, 'SQL', '574daa37d0ef76e417a4571b'),
(40, 'C#', '574daa37d0ef76e417a4571b'),
(41, 'HTML', '574daa3788291a030a564e54'),
(42, 'C#', '574daa3788291a030a564e54'),
(43, 'NoSQL', '574daa3788291a030a564e54'),
(44, 'Lisp', '574daa3788291a030a564e54'),
(45, 'NoSQL', '574daa3788291a030a564e54'),
(46, 'Java', '574daa37c0e6294de5987cb5'),
(47, 'HTML', '574daa37c0e6294de5987cb5'),
(48, 'PHP', '574daa37c0e6294de5987cb5'),
(49, 'C#', '574daa37c0e6294de5987cb5'),
(50, 'JS', '574daa37c0e6294de5987cb5'),
(51, 'Python', '574daa37c66e1e38eb4e05c2'),
(52, 'HTML', '574daa37c66e1e38eb4e05c2'),
(53, 'Ruby', '574daa37c66e1e38eb4e05c2'),
(54, 'PHP', '574daa37c66e1e38eb4e05c2'),
(55, 'Lisp', '574daa37c66e1e38eb4e05c2'),
(56, 'SQL', '574daa374124bc8ac066e65e'),
(57, 'Java', '574daa374124bc8ac066e65e'),
(58, 'Lisp', '574daa374124bc8ac066e65e'),
(59, 'Java', '574daa374124bc8ac066e65e'),
(60, 'CSS', '574daa374124bc8ac066e65e'),
(61, 'JS', '574daa3731aafea412b01231'),
(62, 'Java', '574daa3731aafea412b01231'),
(63, 'Python', '574daa3731aafea412b01231'),
(64, 'PHP', '574daa3731aafea412b01231'),
(65, 'SQL', '574daa3731aafea412b01231');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
