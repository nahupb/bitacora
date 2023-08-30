-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2023 a las 22:34:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bitacora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `fecha_creacion` varchar(10) NOT NULL,
  `ticket_proveedor` varchar(20) NOT NULL,
  `llamada_guardias` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `ticket_remedy` varchar(20) NOT NULL,
  `ticket` int(20) NOT NULL,
  `grupo_escalado` varchar(30) NOT NULL,
  `resuelto` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tratamiento`
--

INSERT INTO `tratamiento` (`fecha_creacion`, `ticket_proveedor`, `llamada_guardias`, `descripcion`, `ticket_remedy`, `ticket`, `grupo_escalado`, `resuelto`) VALUES
('07/07/2023', 'N/A', 'N/A', 'Temperatura anómala en tienda esZA01145wct1. Se escala el ticket a los IT para que se revise.', 'INC000019499864', 89, 'N1', 'NO'),
('11/07/2023', 'N/A', 'N/A', 'AP esHQaxZ5pF0ap05 is down. Reportamos el caso con soporte para que revisen el dispositivo. Adjuntamos planos de ubicación de AP y rack. AP averiado debido a humedad. Pendiente de que verifiquen si se va a reemplazar el AP dañado o no.', 'INC000019473718', 90, 'N2 DATACENTERS & CLOUD', 'SI'),
('23/11/2023', '154252', 'N/A', '[ARTEIXO] AP esHQaxZ5pF0ap05 is down. Reportamos el caso con soporte para que revisen el dispositivo. Adjuntamos planos de ubicación de AP y rack. AP averiado debido a humedad. Pendiente de que verifiquen si se va a reemplazar el AP dañado o no. [07/07]', 'INC000014512345', 91, 'N1', 'NO'),
('23/11/2023', 'N/A', 'N/A', '[ARTEIXO] Caída router multihoming VDF. Reportado a VDF. Se realiza reinicio del router sin mejoras. El técnico indica que no hay problemas de línea. Pendiente la sustitución del router. [07/07]', 'INC000014512512', 92, 'N1', 'NO'),
('15/12/2022', 'N/A', 'N/A', '[ARTEIXO] AP esHQaxFl-2ap001 is down. Reportamos el caso con soporte para que revisen el dispositivo. Dispositivo retirado por obras. [07/07]', 'INC000012451254', 93, 'N1', 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`ticket`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `ticket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
