SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `medico` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_cita` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `pacientes` (`id`, `nombres`, `apellidos`, `medico`, `telefono`, `correo_electronico`, `fecha_cita`, `activo`) VALUES
(2, 'Juan', 'Perez', 'juan pablo gomez', '34045068', 'jperez@gmail.com', '16/11/2022', 1),
(3, 'Sebastian', 'Gomez', 'jorge benedetto', '57813625', 'sebas123@gmail.com', '5/11/2022', 1),
(4, 'Steven', 'Alzate', 'julio ocampo', '3009845', 'alzate3467@gmail.com', '17/11/2022', 1),
(5, 'Jorge', 'Ortega', 'yeferson ospina', '24057632', 'orte2022@gmail.com', '8/12/2022', 1);
COMMIT;
