-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2020 a las 00:59:07
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `debi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accions`
--

CREATE TABLE `accions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_accion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `accions`
--

INSERT INTO `accions` (`id`, `nom_accion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ACCESO', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidads`
--

CREATE TABLE `especialidads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `especialidads`
--

INSERT INTO `especialidads` (`id`, `nombre`, `descripcion`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Odontologia', 'Especialidad de la Medicina que se ocupa de la prevención, el diagnóstico y tratamiento de las enfermedades que afectan a cualquier parte de la estructura mandibular: Dientes. Encías.', 1, '2020-02-04 01:27:32', '2020-02-04 01:54:56', NULL),
(2, 'Medicina General', 'Medicina en general', 1, '2020-02-04 01:45:23', '2020-02-04 01:46:09', NULL),
(3, 'Pediatra', 'Pediatria', 1, '2020-02-04 01:59:03', '2020-02-04 01:59:10', NULL),
(4, 'Laboratorista', 'Laboratorista', 1, '2020-02-04 02:00:07', '2020-02-04 02:00:10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_odon`
--

CREATE TABLE `form_odon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paciente_id` bigint(20) UNSIGNED NOT NULL,
  `agenda_id` bigint(20) UNSIGNED NOT NULL,
  `motivo_consulta` text DEFAULT NULL,
  `enfer_probl_actual` text DEFAULT NULL,
  `ap_alergia_antibiotico` text DEFAULT NULL,
  `ap_alergia_anestecia` text DEFAULT NULL,
  `ap_vih` varchar(50) DEFAULT NULL,
  `ap_tuberculosis` varchar(50) DEFAULT NULL,
  `ap_asma` varchar(50) DEFAULT NULL,
  `ap_diabetes` varchar(50) DEFAULT NULL,
  `ap_hipertension` varchar(50) DEFAULT NULL,
  `ap_enf_cardiaca` text DEFAULT NULL,
  `ap_otros` text DEFAULT NULL,
  `sv_presion_arterial` varchar(50) DEFAULT NULL,
  `sv_frecuencia_cardiaca` varchar(50) DEFAULT NULL,
  `sv_temperatura` varchar(50) DEFAULT NULL,
  `sv_frecuencia_respiratoria` varchar(50) DEFAULT NULL,
  `ese_labios` text DEFAULT NULL,
  `ese_mejilla` text DEFAULT NULL,
  `ese_maxilar_superior` text DEFAULT NULL,
  `ese_maxilar_inferior` text DEFAULT NULL,
  `ese_lengua` text DEFAULT NULL,
  `ese_paladar` text DEFAULT NULL,
  `ese_piso` text DEFAULT NULL,
  `ese_orofaringe` text DEFAULT NULL,
  `ese_carrillos` text DEFAULT NULL,
  `ese_gland_salivales` text DEFAULT NULL,
  `ese_oro_faringe` text DEFAULT NULL,
  `ese_atm` text DEFAULT NULL,
  `ese_ganglios` text DEFAULT NULL,
  `ip_creacion` varchar(40) DEFAULT NULL,
  `ip_modificacion` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `form_odon`
--

INSERT INTO `form_odon` (`id`, `paciente_id`, `agenda_id`, `motivo_consulta`, `enfer_probl_actual`, `ap_alergia_antibiotico`, `ap_alergia_anestecia`, `ap_vih`, `ap_tuberculosis`, `ap_asma`, `ap_diabetes`, `ap_hipertension`, `ap_enf_cardiaca`, `ap_otros`, `sv_presion_arterial`, `sv_frecuencia_cardiaca`, `sv_temperatura`, `sv_frecuencia_respiratoria`, `ese_labios`, `ese_mejilla`, `ese_maxilar_superior`, `ese_maxilar_inferior`, `ese_lengua`, `ese_paladar`, `ese_piso`, `ese_orofaringe`, `ese_carrillos`, `ese_gland_salivales`, `ese_oro_faringe`, `ese_atm`, `ese_ganglios`, `ip_creacion`, `ip_modificacion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 18, 'Limpieza', '<p>No posee<br></p>', '<p>Ninguna<br></p>', '<p>Niinguna<br></p>', 'no', 'no', 'no', 'no', 'no', '<p>Ninguna<br></p>', '<p>Ninguna<br></p>', '120', '100', '30', '120', '<p>Nada<br></p>', '<p>Nada<br></p>', '<p>Nada<br></p>', '<p>Nada<br></p>', '<p>Lengua nada<br></p>', '<p>Nada<br></p>', '<p>Nada<br></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-26 05:44:56', '2020-05-26 23:42:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_odon_diag_paci`
--

CREATE TABLE `form_odon_diag_paci` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_odon_id` bigint(20) UNSIGNED NOT NULL,
  `paciente_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_diag_id` bigint(20) UNSIGNED NOT NULL,
  `diagnostico` text NOT NULL,
  `usuariocrea_id` bigint(20) UNSIGNED NOT NULL,
  `usuariomod_id` bigint(20) UNSIGNED NOT NULL,
  `ip_creacion` varchar(40) DEFAULT NULL,
  `ip_modificacion` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `form_odon_diag_paci`
--

INSERT INTO `form_odon_diag_paci` (`id`, `form_odon_id`, `paciente_id`, `tipo_diag_id`, `diagnostico`, `usuariocrea_id`, `usuariomod_id`, `ip_creacion`, `ip_modificacion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 1, 'No se aprecia nada anormal en la biometria x1000', 1, 1, NULL, NULL, '2020-05-29 18:20:32', '2020-06-04 16:06:20', '2020-06-04 16:06:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `from_odon_tipo_diag`
--

CREATE TABLE `from_odon_tipo_diag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_diagnostico` varchar(40) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `from_odon_tipo_diag`
--

INSERT INTO `from_odon_tipo_diag` (`id`, `tipo_diagnostico`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'BIOMETRIA', '1', '2020-05-29 18:14:13', '2020-05-29 18:14:13'),
(2, 'QUIMICA SANGUINEA', '1', '2020-05-29 18:14:13', '2020-05-29 18:14:13'),
(3, 'RAYOS X', '1', '2020-05-29 18:14:26', '2020-05-29 18:14:26'),
(4, 'OTROS', '1', '2020-05-29 18:14:26', '2020-05-29 18:14:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2020_01_27_061457_create_categorias_table', 2),
(22, '2020_01_28_012029_create_products_table', 2),
(23, '2019_08_19_000000_create_failed_jobs_table', 3),
(26, '2020_01_30_032609_create_perfils_table', 4),
(32, '2020_01_30_035601_create_modulos_table', 9),
(33, '2020_01_30_035912_create_submodulos_table', 10),
(34, '2020_01_30_040736_create_submodulo2s_table', 11),
(35, '2020_01_30_042119_create_accions_table', 12),
(36, '2020_01_30_042447_create_perfil_accions_table', 13),
(37, '2020_02_03_175550_create_especialidads_table', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sistema_id` bigint(20) UNSIGNED NOT NULL,
  `nom_modulo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icono` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `sistema_id`, `nom_modulo`, `icono`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'CONFIGURACIONES', 'pli-gear', 3, 1, NULL, NULL),
(3, 1, 'MANTENIMIENTOS', 'pli-books', 2, 1, NULL, NULL),
(4, 1, 'ATENCIÓN', 'pli-hospital', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_canton`
--

CREATE TABLE `m_canton` (
  `id_m_canton` bigint(20) UNSIGNED NOT NULL,
  `codigo_provincia` varchar(2) NOT NULL,
  `codigo_m_canton` varchar(4) NOT NULL,
  `nombre_m_canton` varchar(150) NOT NULL,
  `codigo_nombre` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `m_canton`
--

INSERT INTO `m_canton` (`id_m_canton`, `codigo_provincia`, `codigo_m_canton`, `nombre_m_canton`, `codigo_nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '01', '0101', 'CUENCA', '0101 - CUENCA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(2, '01', '0102', 'GIRÓN', '0102 - GIRÓN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(3, '01', '0103', 'GUALACEO', '0103 - GUALACEO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(4, '01', '0104', 'NABÓN', '0104 - NABÓN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(5, '01', '0105', 'PAUTE', '0105 - PAUTE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(6, '01', '0106', 'PUCARA', '0106 - PUCARA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(7, '01', '0107', 'SAN FERNANDO', '0107 - SAN FERNANDO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(8, '01', '0108', 'SANTA ISABEL', '0108 - SANTA ISABEL', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(9, '01', '0109', 'SIGSIG', '0109 - SIGSIG', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(10, '01', '0110', 'OÑA', '0110 - OÑA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(11, '01', '0111', 'CHORDELEG', '0111 - CHORDELEG', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(12, '01', '0112', 'EL PAN', '0112 - EL PAN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(13, '01', '0113', 'SEVILLA DE ORO', '0113 - SEVILLA DE ORO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(14, '01', '0114', 'GUACHAPALA', '0114 - GUACHAPALA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(15, '01', '0115', 'CAMILO PONCE ENRÍQUEZ', '0115 - CAMILO PONCE ENRÍQUEZ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(16, '02', '0201', 'GUARANDA', '0201 - GUARANDA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(17, '02', '0202', 'CHILLANES', '0202 - CHILLANES', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(18, '02', '0203', 'CHIMBO', '0203 - CHIMBO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(19, '02', '0204', 'ECHEANDÍA', '0204 - ECHEANDÍA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(20, '02', '0205', 'SAN MIGUEL', '0205 - SAN MIGUEL', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(21, '02', '0206', 'CALUMA', '0206 - CALUMA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(22, '02', '0207', 'LAS NAVES', '0207 - LAS NAVES', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(23, '03', '0301', 'AZOGUES', '0301 - AZOGUES', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(24, '03', '0302', 'BIBLIÁN', '0302 - BIBLIÁN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(25, '03', '0303', 'CAÑAR', '0303 - CAÑAR', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(26, '03', '0304', 'LA TRONCAL', '0304 - LA TRONCAL', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(27, '03', '0305', 'EL TAMBO', '0305 - EL TAMBO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(28, '03', '0306', 'DÉLEG', '0306 - DÉLEG', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(29, '03', '0307', 'SUSCAL', '0307 - SUSCAL', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(30, '04', '0401', 'TULCÁN', '0401 - TULCÁN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(31, '04', '0402', 'BOLÍVAR', '0402 - BOLÍVAR', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(32, '04', '0403', 'ESPEJO', '0403 - ESPEJO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(33, '04', '0404', 'MIRA', '0404 - MIRA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(34, '04', '0405', 'MONTÚFAR', '0405 - MONTÚFAR', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(35, '04', '0406', 'SAN PEDRO DE HUACA', '0406 - SAN PEDRO DE HUACA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(36, '05', '0501', 'LATACUNGA', '0501 - LATACUNGA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(37, '05', '0502', 'LA MANÁ', '0502 - LA MANÁ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(38, '05', '0503', 'PANGUA', '0503 - PANGUA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(39, '05', '0504', 'PUJILI', '0504 - PUJILI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(40, '05', '0505', 'SALCEDO', '0505 - SALCEDO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(41, '05', '0506', 'SAQUISILÍ', '0506 - SAQUISILÍ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(42, '05', '0507', 'SIGCHOS', '0507 - SIGCHOS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(43, '06', '0601', 'RIOBAMBA', '0601 - RIOBAMBA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(44, '06', '0602', 'ALAUSI', '0602 - ALAUSI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(45, '06', '0603', 'COLTA', '0603 - COLTA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(46, '06', '0604', 'CHAMBO', '0604 - CHAMBO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(47, '06', '0605', 'CHUNCHI', '0605 - CHUNCHI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(48, '06', '0606', 'GUAMOTE', '0606 - GUAMOTE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(49, '06', '0607', 'GUANO', '0607 - GUANO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(50, '06', '0608', 'PALLATANGA', '0608 - PALLATANGA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(51, '06', '0609', 'PENIPE', '0609 - PENIPE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(52, '06', '0610', 'CUMANDÁ', '0610 - CUMANDÁ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(53, '07', '0701', 'MACHALA', '0701 - MACHALA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(54, '07', '0702', 'ARENILLAS', '0702 - ARENILLAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(55, '07', '0703', 'ATAHUALPA', '0703 - ATAHUALPA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(56, '07', '0704', 'BALSAS', '0704 - BALSAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(57, '07', '0705', 'CHILLA', '0705 - CHILLA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(58, '07', '0706', 'EL GUABO', '0706 - EL GUABO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(59, '07', '0707', 'HUAQUILLAS', '0707 - HUAQUILLAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(60, '07', '0708', 'MARCABELÍ', '0708 - MARCABELÍ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(61, '07', '0709', 'PASAJE', '0709 - PASAJE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(62, '07', '0710', 'PIÑAS', '0710 - PIÑAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(63, '07', '0711', 'PORTOVELO', '0711 - PORTOVELO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(64, '07', '0712', 'SANTA ROSA', '0712 - SANTA ROSA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(65, '07', '0713', 'ZARUMA', '0713 - ZARUMA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(66, '07', '0714', 'LAS LAJAS', '0714 - LAS LAJAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(67, '08', '0801', 'ESMERALDAS', '0801 - ESMERALDAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(68, '08', '0802', 'ELOY ALFARO', '0802 - ELOY ALFARO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(69, '08', '0803', 'MUISNE', '0803 - MUISNE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(70, '08', '0804', 'QUININDÉ', '0804 - QUININDÉ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(71, '08', '0805', 'SAN LORENZO', '0805 - SAN LORENZO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(72, '08', '0806', 'ATACAMES', '0806 - ATACAMES', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(73, '08', '0807', 'RIOVERDE', '0807 - RIOVERDE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(74, '08', '0808', 'LA CONCORDIA', '0808 - LA CONCORDIA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(75, '09', '0901', 'GUAYAQUIL', '0901 - GUAYAQUIL', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(76, '09', '0902', 'ALFREDO BAQUERIZO MORENO (JUJÁN)', '0902 - ALFREDO BAQUERIZO MORENO (JUJÁN)', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(77, '09', '0903', 'BALAO', '0903 - BALAO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(78, '09', '0904', 'BALZAR', '0904 - BALZAR', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(79, '09', '0905', 'COLIMES', '0905 - COLIMES', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(80, '09', '0906', 'DAULE', '0906 - DAULE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(81, '09', '0907', 'DURÁN', '0907 - DURÁN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(82, '09', '0908', 'EL EMPALME', '0908 - EL EMPALME', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(83, '09', '0909', 'EL TRIUNFO', '0909 - EL TRIUNFO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(84, '09', '0910', 'MILAGRO', '0910 - MILAGRO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(85, '09', '0911', 'NARANJAL', '0911 - NARANJAL', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(86, '09', '0912', 'NARANJITO', '0912 - NARANJITO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(87, '09', '0913', 'PALESTINA', '0913 - PALESTINA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(88, '09', '0914', 'PEDRO CARBO', '0914 - PEDRO CARBO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(89, '09', '0916', 'SAMBORONDÓN', '0916 - SAMBORONDÓN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(90, '09', '0918', 'SANTA LUCÍA', '0918 - SANTA LUCÍA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(91, '09', '0919', 'SALITRE (URBINA JADO)', '0919 - SALITRE (URBINA JADO)', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(92, '09', '0920', 'SAN JACINTO DE YAGUACHI', '0920 - SAN JACINTO DE YAGUACHI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(93, '09', '0921', 'PLAYAS', '0921 - PLAYAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(94, '09', '0922', 'SIMÓN BOLÍVAR', '0922 - SIMÓN BOLÍVAR', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(95, '09', '0923', 'CORONEL MARCELINO MARIDUEÑA', '0923 - CORONEL MARCELINO MARIDUEÑA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(96, '09', '0924', 'LOMAS DE SARGENTILLO', '0924 - LOMAS DE SARGENTILLO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(97, '09', '0925', 'NOBOL', '0925 - NOBOL', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(98, '09', '0927', 'GENERAL ANTONIO ELIZALDE', '0927 - GENERAL ANTONIO ELIZALDE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(99, '09', '0928', 'ISIDRO AYORA', '0928 - ISIDRO AYORA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(100, '10', '1001', 'IBARRA', '1001 - IBARRA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(101, '10', '1002', 'ANTONIO ANTE', '1002 - ANTONIO ANTE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(102, '10', '1003', 'COTACACHI', '1003 - COTACACHI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(103, '10', '1004', 'OTAVALO', '1004 - OTAVALO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(104, '10', '1005', 'PIMAMPIRO', '1005 - PIMAMPIRO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(105, '10', '1006', 'SAN MIGUEL DE URCUQUÍ', '1006 - SAN MIGUEL DE URCUQUÍ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(106, '11', '1101', 'LOJA', '1101 - LOJA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(107, '11', '1102', 'CALVAS', '1102 - CALVAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(108, '11', '1103', 'CATAMAYO', '1103 - CATAMAYO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(109, '11', '1104', 'CELICA', '1104 - CELICA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(110, '11', '1105', 'CHAGUARPAMBA', '1105 - CHAGUARPAMBA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(111, '11', '1106', 'ESPÍNDOLA', '1106 - ESPÍNDOLA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(112, '11', '1107', 'GONZANAMÁ', '1107 - GONZANAMÁ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(113, '11', '1108', 'MACARÁ', '1108 - MACARÁ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(114, '11', '1109', 'PALTAS', '1109 - PALTAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(115, '11', '1110', 'PUYANGO', '1110 - PUYANGO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(116, '11', '1111', 'SARAGURO', '1111 - SARAGURO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(117, '11', '1112', 'SOZORANGA', '1112 - SOZORANGA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(118, '11', '1113', 'ZAPOTILLO', '1113 - ZAPOTILLO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(119, '11', '1114', 'PINDAL', '1114 - PINDAL', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(120, '11', '1115', 'QUILANGA', '1115 - QUILANGA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(121, '11', '1116', 'OLMEDO', '1116 - OLMEDO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(122, '12', '1201', 'BABAHOYO', '1201 - BABAHOYO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(123, '12', '1202', 'BABA', '1202 - BABA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(124, '12', '1203', 'MONTALVO', '1203 - MONTALVO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(125, '12', '1204', 'PUEBLOVIEJO', '1204 - PUEBLOVIEJO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(126, '12', '1205', 'QUEVEDO', '1205 - QUEVEDO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(127, '12', '1206', 'URDANETA', '1206 - URDANETA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(128, '12', '1207', 'VENTANAS', '1207 - VENTANAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(129, '12', '1208', 'VÍNCES', '1208 - VÍNCES', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(130, '12', '1209', 'PALENQUE', '1209 - PALENQUE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(131, '12', '1210', 'BUENA FÉ', '1210 - BUENA FÉ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(132, '12', '1211', 'VALENCIA', '1211 - VALENCIA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(133, '12', '1212', 'MOCACHE', '1212 - MOCACHE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(134, '12', '1213', 'QUINSALOMA', '1213 - QUINSALOMA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(135, '13', '1301', 'PORTOVIEJO', '1301 - PORTOVIEJO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(136, '13', '1302', 'BOLÍVAR', '1302 - BOLÍVAR', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(137, '13', '1303', 'CHONE', '1303 - CHONE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(138, '13', '1304', 'EL CARMEN', '1304 - EL CARMEN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(139, '13', '1305', 'FLAVIO ALFARO', '1305 - FLAVIO ALFARO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(140, '13', '1306', 'JIPIJAPA', '1306 - JIPIJAPA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(141, '13', '1307', 'JUNÍN', '1307 - JUNÍN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(142, '13', '1308', 'MANTA', '1308 - MANTA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(143, '13', '1309', 'MONTECRISTI', '1309 - MONTECRISTI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(144, '13', '1310', 'PAJÁN', '1310 - PAJÁN', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(145, '13', '1311', 'PICHINCHA', '1311 - PICHINCHA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(146, '13', '1312', 'ROCAFUERTE', '1312 - ROCAFUERTE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(147, '13', '1313', 'SANTA ANA', '1313 - SANTA ANA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(148, '13', '1314', 'SUCRE', '1314 - SUCRE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(149, '13', '1315', 'TOSAGUA', '1315 - TOSAGUA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(150, '13', '1316', '24 DE MAYO', '1316 - 24 DE MAYO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(151, '13', '1317', 'PEDERNALES', '1317 - PEDERNALES', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(152, '13', '1318', 'OLMEDO', '1318 - OLMEDO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(153, '13', '1319', 'PUERTO LÓPEZ', '1319 - PUERTO LÓPEZ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(154, '13', '1320', 'JAMA', '1320 - JAMA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(155, '13', '1321', 'JARAMIJÓ', '1321 - JARAMIJÓ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(156, '13', '1322', 'SAN VICENTE', '1322 - SAN VICENTE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(157, '14', '1401', 'MORONA', '1401 - MORONA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(158, '14', '1402', 'GUALAQUIZA', '1402 - GUALAQUIZA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(159, '14', '1403', 'LIMÓN INDANZA', '1403 - LIMÓN INDANZA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(160, '14', '1404', 'PALORA', '1404 - PALORA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(161, '14', '1405', 'SANTIAGO', '1405 - SANTIAGO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(162, '14', '1406', 'SUCÚA', '1406 - SUCÚA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(163, '14', '1407', 'HUAMBOYA', '1407 - HUAMBOYA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(164, '14', '1408', 'SAN JUAN BOSCO', '1408 - SAN JUAN BOSCO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(165, '14', '1409', 'TAISHA', '1409 - TAISHA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(166, '14', '1410', 'LOGROÑO', '1410 - LOGROÑO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(167, '14', '1411', 'PABLO SEXTO', '1411 - PABLO SEXTO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(168, '14', '1412', 'TIWINTZA', '1412 - TIWINTZA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(169, '15', '1501', 'TENA', '1501 - TENA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(170, '15', '1503', 'ARCHIDONA', '1503 - ARCHIDONA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(171, '15', '1504', 'EL CHACO', '1504 - EL CHACO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(172, '15', '1507', 'QUIJOS', '1507 - QUIJOS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(173, '15', '1509', 'CARLOS JULIO AROSEMENA TOLA', '1509 - CARLOS JULIO AROSEMENA TOLA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(174, '16', '1601', 'PASTAZA', '1601 - PASTAZA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(175, '16', '1602', 'MERA', '1602 - MERA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(176, '16', '1603', 'SANTA CLARA', '1603 - SANTA CLARA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(177, '16', '1604', 'ARAJUNO', '1604 - ARAJUNO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(178, '17', '1701', 'QUITO', '1701 - QUITO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(179, '17', '1702', 'CAYAMBE', '1702 - CAYAMBE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(180, '17', '1703', 'MEJIA', '1703 - MEJIA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(181, '17', '1704', 'PEDRO MONCAYO', '1704 - PEDRO MONCAYO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(182, '17', '1705', 'RUMIÑAHUI', '1705 - RUMIÑAHUI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(183, '17', '1707', 'SAN MIGUEL DE LOS BANCOS', '1707 - SAN MIGUEL DE LOS BANCOS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(184, '17', '1708', 'PEDRO VICENTE MALDONADO', '1708 - PEDRO VICENTE MALDONADO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(185, '17', '1709', 'PUERTO QUITO', '1709 - PUERTO QUITO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(186, '18', '1801', 'AMBATO', '1801 - AMBATO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(187, '18', '1802', 'BAÑOS DE AGUA SANTA', '1802 - BAÑOS DE AGUA SANTA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(188, '18', '1803', 'CEVALLOS', '1803 - CEVALLOS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(189, '18', '1804', 'MOCHA', '1804 - MOCHA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(190, '18', '1805', 'PATATE', '1805 - PATATE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(191, '18', '1806', 'QUERO', '1806 - QUERO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(192, '18', '1807', 'SAN PEDRO DE PELILEO', '1807 - SAN PEDRO DE PELILEO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(193, '18', '1808', 'SANTIAGO DE PÍLLARO', '1808 - SANTIAGO DE PÍLLARO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(194, '18', '1809', 'TISALEO', '1809 - TISALEO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(195, '19', '1901', 'ZAMORA', '1901 - ZAMORA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(196, '19', '1902', 'CHINCHIPE', '1902 - CHINCHIPE', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(197, '19', '1903', 'NANGARITZA', '1903 - NANGARITZA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(198, '19', '1904', 'YACUAMBI', '1904 - YACUAMBI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(199, '19', '1905', 'YANTZAZA (YANZATZA)', '1905 - YANTZAZA (YANZATZA)', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(200, '19', '1906', 'EL PANGUI', '1906 - EL PANGUI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(201, '19', '1907', 'CENTINELA DEL CÓNDOR', '1907 - CENTINELA DEL CÓNDOR', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(202, '19', '1908', 'PALANDA', '1908 - PALANDA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(203, '19', '1909', 'PAQUISHA', '1909 - PAQUISHA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(204, '20', '2001', 'SAN CRISTÓBAL', '2001 - SAN CRISTÓBAL', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(205, '20', '2002', 'ISABELA', '2002 - ISABELA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(206, '20', '2003', 'SANTA CRUZ', '2003 - SANTA CRUZ', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(207, '21', '2101', 'LAGO AGRIO', '2101 - LAGO AGRIO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(208, '21', '2102', 'GONZALO PIZARRO', '2102 - GONZALO PIZARRO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(209, '21', '2103', 'PUTUMAYO', '2103 - PUTUMAYO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(210, '21', '2104', 'SHUSHUFINDI', '2104 - SHUSHUFINDI', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(211, '21', '2105', 'SUCUMBÍOS', '2105 - SUCUMBÍOS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(212, '21', '2106', 'CASCALES', '2106 - CASCALES', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(213, '21', '2107', 'CUYABENO', '2107 - CUYABENO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(214, '22', '2201', 'ORELLANA', '2201 - ORELLANA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(215, '22', '2202', 'AGUARICO', '2202 - AGUARICO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(216, '22', '2203', 'LA JOYA DE LOS SACHAS', '2203 - LA JOYA DE LOS SACHAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(217, '22', '2204', 'LORETO', '2204 - LORETO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(218, '23', '2301', 'SANTO DOMINGO', '2301 - SANTO DOMINGO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(219, '24', '2401', 'SANTA ELENA', '2401 - SANTA ELENA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(220, '24', '2402', 'LA LIBERTAD', '2402 - LA LIBERTAD', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(221, '24', '2403', 'SALINAS', '2403 - SALINAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(222, '90', '9001', 'LAS GOLONDRINAS', '9001 - LAS GOLONDRINAS', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(223, '90', '9003', 'MANGA DEL CURA', '9003 - MANGA DEL CURA', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL),
(224, '90', '9004', 'EL PIEDRERO', '9004 - EL PIEDRERO', '2020-02-08 19:02:59', '2020-02-08 19:02:59', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_categoria`
--

CREATE TABLE `m_categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_categoria` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_clinica`
--

CREATE TABLE `m_clinica` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruc` varchar(13) NOT NULL,
  `razonsocial` varchar(255) NOT NULL,
  `nombrecomercial` varchar(255) NOT NULL,
  `nombre_corto` varchar(255) DEFAULT NULL,
  `codigo_provincia` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `telefono1` varchar(15) DEFAULT NULL,
  `telefono2` varchar(15) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `m_clinica`
--

INSERT INTO `m_clinica` (`id`, `ruc`, `razonsocial`, `nombrecomercial`, `nombre_corto`, `codigo_provincia`, `direccion`, `email`, `telefono1`, `telefono2`, `logo`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0924383631001', 'ROBOTO', 'ROBOTO', 'BOT', '09', 'mucho lote', 'carlosmeraleon@gmail.com', '0992259591', '0992259591', 'http://localhost:8000/photos_clinica/aE6K6EJo4rrOyrJfsmVIqolpkW32oRXzpgfzGcxh.png', 1, '2020-02-10 21:01:25', '2020-02-10 21:45:23', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_consultorio`
--

CREATE TABLE `m_consultorio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `clinica_id` bigint(20) UNSIGNED DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `m_consultorio`
--

INSERT INTO `m_consultorio` (`id`, `nombre`, `clinica_id`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Consultorio 1', 1, 1, '2020-02-18 15:24:27', '2020-02-18 15:24:27', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_medico`
--

CREATE TABLE `m_medico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `especialidad_id` bigint(20) UNSIGNED NOT NULL,
  `registrosanitario` varchar(25) DEFAULT NULL,
  `registromedico` varchar(25) DEFAULT NULL,
  `registrosenecyt` varchar(25) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `m_medico`
--

INSERT INTO `m_medico` (`id`, `usuario_id`, `especialidad_id`, `registrosanitario`, `registromedico`, `registrosenecyt`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '12345', '54321', '20120810', 1, '2020-02-11 17:05:07', '2020-02-11 17:05:07', NULL),
(2, 2, 1, '111111', '222222', '333333', 1, '2020-02-11 17:15:47', '2020-02-11 17:15:47', NULL),
(3, 5, 1, '4444444', '5555555', NULL, 1, '2020-02-11 17:17:06', '2020-02-11 17:17:06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_paciente`
--

CREATE TABLE `m_paciente` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tipo_identificacion` bigint(20) UNSIGNED DEFAULT NULL,
  `cedula` varchar(10) NOT NULL,
  `pais_id` bigint(20) UNSIGNED NOT NULL,
  `primernombre` varchar(300) NOT NULL,
  `segundonombre` varchar(300) DEFAULT NULL,
  `primerapellido` varchar(300) NOT NULL,
  `segundoapellido` varchar(300) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` varchar(300) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` bigint(20) UNSIGNED NOT NULL,
  `lugar_inscripcion` varchar(300) NOT NULL,
  `nombres_madre` varchar(300) NOT NULL,
  `nombres_padre` varchar(300) NOT NULL,
  `direccion` text NOT NULL,
  `localidad` text NOT NULL,
  `codigo_canton` varchar(4) NOT NULL,
  `codigo_provincia` varchar(2) NOT NULL,
  `codigo_parroquia` varchar(6) NOT NULL,
  `observaciones` text DEFAULT NULL,
  `telefono` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `m_paciente`
--

INSERT INTO `m_paciente` (`id`, `id_tipo_identificacion`, `cedula`, `pais_id`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `fecha_nacimiento`, `lugar_nacimiento`, `edad`, `sexo`, `lugar_inscripcion`, `nombres_madre`, `nombres_padre`, `direccion`, `localidad`, `codigo_canton`, `codigo_provincia`, `codigo_parroquia`, `observaciones`, `telefono`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, '0924383631', 57, 'Carlos', 'Antonio', 'Mera', 'Leon', '1985-06-05', 'Guayaquil', 34, 1, 'Guayas', 'Lupe Leon', 'Carlos Mera', 'Mucho lote', 'Guayaquil', '0901', '09', '090112', NULL, '0992259591', 'carlosmeraleon@gmail.com', '2020-02-09 00:35:32', '2020-02-09 00:35:32', NULL),
(7, 1, '0929478196', 57, 'Jazmin', 'Elizabeth', 'Calero', 'Chala', '1990-10-08', 'Guayaquil', NULL, 1, 'Guayaquil', 'Bella Chala', 'Leonardo Calero', 'Mucho lote', 'Norte Guayaquil', '0901', '09', '090112', NULL, '0992259591', 'jazmincalerodm@gmail.com', '2020-02-11 20:36:19', '2020-02-11 20:36:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_pais`
--

CREATE TABLE `m_pais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `iso2` varchar(2) NOT NULL,
  `iso3` varchar(3) NOT NULL,
  `phone_code` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `m_pais`
--

INSERT INTO `m_pais` (`id`, `nombre`, `name`, `nom`, `iso2`, `iso3`, `phone_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Afganistán', 'Afghanistan', 'Afghanistan', 'AF', 'AFG', '93', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(2, 'Albania', 'Albania', 'Albanie', 'AL', 'ALB', '355', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(3, 'Alemania', 'Germany', 'Allemagne', 'DE', 'DEU', '49', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(4, 'Algeria', 'Algeria', 'Algérie', 'DZ', 'DZA', '213', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(5, 'Andorra', 'Andorra', 'Andorra', 'AD', 'AND', '376', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(6, 'Angola', 'Angola', 'Angola', 'AO', 'AGO', '244', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(7, 'Anguila', 'Anguilla', 'Anguilla', 'AI', 'AIA', '1 264', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(8, 'Antártida', 'Antarctica', 'L\'Antarctique', 'AQ', 'ATA', '672', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(9, 'Antigua y Barbuda', 'Antigua and Barbuda', 'Antigua et Barbuda', 'AG', 'ATG', '1 268', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(10, 'Antillas Neerlandesas', 'Netherlands Antilles', 'Antilles Néerlandaises', 'AN', 'ANT', '599', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(11, 'Arabia Saudita', 'Saudi Arabia', 'Arabie Saoudite', 'SA', 'SAU', '966', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(12, 'Argentina', 'Argentina', 'Argentine', 'AR', 'ARG', '54', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(13, 'Armenia', 'Armenia', 'L\'Arménie', 'AM', 'ARM', '374', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(14, 'Aruba', 'Aruba', 'Aruba', 'AW', 'ABW', '297', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(15, 'Australia', 'Australia', 'Australie', 'AU', 'AUS', '61', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(16, 'Austria', 'Austria', 'Autriche', 'AT', 'AUT', '43', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(17, 'Azerbayán', 'Azerbaijan', 'L\'Azerbaïdjan', 'AZ', 'AZE', '994', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(18, 'Bélgica', 'Belgium', 'Belgique', 'BE', 'BEL', '32', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(19, 'Bahamas', 'Bahamas', 'Bahamas', 'BS', 'BHS', '1 242', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(20, 'Bahrein', 'Bahrain', 'Bahreïn', 'BH', 'BHR', '973', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(21, 'Bangladesh', 'Bangladesh', 'Bangladesh', 'BD', 'BGD', '880', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(22, 'Barbados', 'Barbados', 'Barbade', 'BB', 'BRB', '1 246', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(23, 'Belice', 'Belize', 'Belize', 'BZ', 'BLZ', '501', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(24, 'Benín', 'Benin', 'Bénin', 'BJ', 'BEN', '229', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(25, 'Bhután', 'Bhutan', 'Le Bhoutan', 'BT', 'BTN', '975', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(26, 'Bielorrusia', 'Belarus', 'Biélorussie', 'BY', 'BLR', '375', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(27, 'Birmania', 'Myanmar', 'Myanmar', 'MM', 'MMR', '95', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(28, 'Bolivia', 'Bolivia', 'Bolivie', 'BO', 'BOL', '591', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(29, 'Bosnia y Herzegovina', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine', 'BA', 'BIH', '387', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(30, 'Botsuana', 'Botswana', 'Botswana', 'BW', 'BWA', '267', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(31, 'Brasil', 'Brazil', 'Brésil', 'BR', 'BRA', '55', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(32, 'Brunéi', 'Brunei', 'Brunei', 'BN', 'BRN', '673', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(33, 'Bulgaria', 'Bulgaria', 'Bulgarie', 'BG', 'BGR', '359', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(34, 'Burkina Faso', 'Burkina Faso', 'Burkina Faso', 'BF', 'BFA', '226', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(35, 'Burundi', 'Burundi', 'Burundi', 'BI', 'BDI', '257', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(36, 'Cabo Verde', 'Cape Verde', 'Cap-Vert', 'CV', 'CPV', '238', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(37, 'Camboya', 'Cambodia', 'Cambodge', 'KH', 'KHM', '855', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(38, 'Camerún', 'Cameroon', 'Cameroun', 'CM', 'CMR', '237', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(39, 'Canadá', 'Canada', 'Canada', 'CA', 'CAN', '1', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(40, 'Chad', 'Chad', 'Tchad', 'TD', 'TCD', '235', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(41, 'Chile', 'Chile', 'Chili', 'CL', 'CHL', '56', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(42, 'China', 'China', 'Chine', 'CN', 'CHN', '86', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(43, 'Chipre', 'Cyprus', 'Chypre', 'CY', 'CYP', '357', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(44, 'Ciudad del Vaticano', 'Vatican City State', 'Cité du Vatican', 'VA', 'VAT', '39', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(45, 'Colombia', 'Colombia', 'Colombie', 'CO', 'COL', '57', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(46, 'Comoras', 'Comoros', 'Comores', 'KM', 'COM', '269', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(47, 'Congo', 'Congo', 'Congo', 'CG', 'COG', '242', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(48, 'Congo', 'Congo', 'Congo', 'CD', 'COD', '243', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(49, 'Corea del Norte', 'North Korea', 'Corée du Nord', 'KP', 'PRK', '850', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(50, 'Corea del Sur', 'South Korea', 'Corée du Sud', 'KR', 'KOR', '82', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(51, 'Costa de Marfil', 'Ivory Coast', 'Côte-d\'Ivoire', 'CI', 'CIV', '225', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(52, 'Costa Rica', 'Costa Rica', 'Costa Rica', 'CR', 'CRI', '506', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(53, 'Croacia', 'Croatia', 'Croatie', 'HR', 'HRV', '385', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(54, 'Cuba', 'Cuba', 'Cuba', 'CU', 'CUB', '53', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(55, 'Dinamarca', 'Denmark', 'Danemark', 'DK', 'DNK', '45', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(56, 'Dominica', 'Dominica', 'Dominique', 'DM', 'DMA', '1 767', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(57, 'Ecuador', 'Ecuador', 'Equateur', 'EC', 'ECU', '593', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(58, 'Egipto', 'Egypt', 'Egypte', 'EG', 'EGY', '20', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(59, 'El Salvador', 'El Salvador', 'El Salvador', 'SV', 'SLV', '503', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(60, 'Emiratos Árabes Unidos', 'United Arab Emirates', 'Emirats Arabes Unis', 'AE', 'ARE', '971', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(61, 'Eritrea', 'Eritrea', 'Erythrée', 'ER', 'ERI', '291', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(62, 'Eslovaquia', 'Slovakia', 'Slovaquie', 'SK', 'SVK', '421', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(63, 'Eslovenia', 'Slovenia', 'Slovénie', 'SI', 'SVN', '386', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(64, 'España', 'Spain', 'Espagne', 'ES', 'ESP', '34', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(65, 'Estados Unidos de América', 'United States of America', 'États-Unis d\'Amérique', 'US', 'USA', '1', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(66, 'Estonia', 'Estonia', 'L\'Estonie', 'EE', 'EST', '372', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(67, 'Etiopía', 'Ethiopia', 'Ethiopie', 'ET', 'ETH', '251', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(68, 'Filipinas', 'Philippines', 'Philippines', 'PH', 'PHL', '63', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(69, 'Finlandia', 'Finland', 'Finlande', 'FI', 'FIN', '358', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(70, 'Fiyi', 'Fiji', 'Fidji', 'FJ', 'FJI', '679', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(71, 'Francia', 'France', 'France', 'FR', 'FRA', '33', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(72, 'Gabón', 'Gabon', 'Gabon', 'GA', 'GAB', '241', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(73, 'Gambia', 'Gambia', 'Gambie', 'GM', 'GMB', '220', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(74, 'Georgia', 'Georgia', 'Géorgie', 'GE', 'GEO', '995', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(75, 'Ghana', 'Ghana', 'Ghana', 'GH', 'GHA', '233', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(76, 'Gibraltar', 'Gibraltar', 'Gibraltar', 'GI', 'GIB', '350', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(77, 'Granada', 'Grenada', 'Grenade', 'GD', 'GRD', '1 473', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(78, 'Grecia', 'Greece', 'Grèce', 'GR', 'GRC', '30', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(79, 'Groenlandia', 'Greenland', 'Groenland', 'GL', 'GRL', '299', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(80, 'Guadalupe', 'Guadeloupe', 'Guadeloupe', 'GP', 'GLP', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(81, 'Guam', 'Guam', 'Guam', 'GU', 'GUM', '1 671', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(82, 'Guatemala', 'Guatemala', 'Guatemala', 'GT', 'GTM', '502', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(83, 'Guayana Francesa', 'French Guiana', 'Guyane française', 'GF', 'GUF', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(84, 'Guernsey', 'Guernsey', 'Guernesey', 'GG', 'GGY', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(85, 'Guinea', 'Guinea', 'Guinée', 'GN', 'GIN', '224', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(86, 'Guinea Ecuatorial', 'Equatorial Guinea', 'Guinée Equatoriale', 'GQ', 'GNQ', '240', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(87, 'Guinea-Bissau', 'Guinea-Bissau', 'Guinée-Bissau', 'GW', 'GNB', '245', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(88, 'Guyana', 'Guyana', 'Guyane', 'GY', 'GUY', '592', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(89, 'Haití', 'Haiti', 'Haïti', 'HT', 'HTI', '509', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(90, 'Honduras', 'Honduras', 'Honduras', 'HN', 'HND', '504', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(91, 'Hong kong', 'Hong Kong', 'Hong Kong', 'HK', 'HKG', '852', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(92, 'Hungría', 'Hungary', 'Hongrie', 'HU', 'HUN', '36', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(93, 'India', 'India', 'Inde', 'IN', 'IND', '91', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(94, 'Indonesia', 'Indonesia', 'Indonésie', 'ID', 'IDN', '62', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(95, 'Irán', 'Iran', 'Iran', 'IR', 'IRN', '98', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(96, 'Irak', 'Iraq', 'Irak', 'IQ', 'IRQ', '964', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(97, 'Irlanda', 'Ireland', 'Irlande', 'IE', 'IRL', '353', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(98, 'Isla Bouvet', 'Bouvet Island', 'Bouvet Island', 'BV', 'BVT', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(99, 'Isla de Man', 'Isle of Man', 'Ile de Man', 'IM', 'IMN', '44', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(100, 'Isla de Navidad', 'Christmas Island', 'Christmas Island', 'CX', 'CXR', '61', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(101, 'Isla Norfolk', 'Norfolk Island', 'Île de Norfolk', 'NF', 'NFK', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(102, 'Islandia', 'Iceland', 'Islande', 'IS', 'ISL', '354', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(103, 'Islas Bermudas', 'Bermuda Islands', 'Bermudes', 'BM', 'BMU', '1 441', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(104, 'Islas Caimán', 'Cayman Islands', 'Iles Caïmans', 'KY', 'CYM', '1 345', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(105, 'Islas Cocos (Keeling)', 'Cocos (Keeling) Islands', 'Cocos (Keeling', 'CC', 'CCK', '61', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(106, 'Islas Cook', 'Cook Islands', 'Iles Cook', 'CK', 'COK', '682', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(107, 'Islas de Åland', 'Åland Islands', 'Îles Åland', 'AX', 'ALA', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(108, 'Islas Feroe', 'Faroe Islands', 'Iles Féro', 'FO', 'FRO', '298', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(109, 'Islas Georgias del Sur y Sandwich del Sur', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les Îles Sandwich du Sud', 'GS', 'SGS', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(110, 'Islas Heard y McDonald', 'Heard Island and McDonald Islands', 'Les îles Heard et McDonald', 'HM', 'HMD', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(111, 'Islas Maldivas', 'Maldives', 'Maldives', 'MV', 'MDV', '960', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(112, 'Islas Malvinas', 'Falkland Islands (Malvinas)', 'Iles Falkland (Malvinas', 'FK', 'FLK', '500', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(113, 'Islas Marianas del Norte', 'Northern Mariana Islands', 'Iles Mariannes du Nord', 'MP', 'MNP', '1 670', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(114, 'Islas Marshall', 'Marshall Islands', 'Iles Marshall', 'MH', 'MHL', '692', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(115, 'Islas Pitcairn', 'Pitcairn Islands', 'Iles Pitcairn', 'PN', 'PCN', '870', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(116, 'Islas Salomón', 'Solomon Islands', 'Iles Salomon', 'SB', 'SLB', '677', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(117, 'Islas Turcas y Caicos', 'Turks and Caicos Islands', 'Iles Turques et Caïques', 'TC', 'TCA', '1 649', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(118, 'Islas Ultramarinas Menores de Estados Unidos', 'United States Minor Outlying Islands', 'États-Unis Îles mineures éloignées', 'UM', 'UMI', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(119, 'Islas Vírgenes Británicas', 'Virgin Islands', 'Iles Vierges', 'VG', 'VG', '1 284', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(120, 'Islas Vírgenes de los Estados Unidos', 'United States Virgin Islands', 'Îles Vierges américaines', 'VI', 'VIR', '1 340', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(121, 'Israel', 'Israel', 'Israël', 'IL', 'ISR', '972', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(122, 'Italia', 'Italy', 'Italie', 'IT', 'ITA', '39', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(123, 'Jamaica', 'Jamaica', 'Jamaïque', 'JM', 'JAM', '1 876', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(124, 'Japón', 'Japan', 'Japon', 'JP', 'JPN', '81', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(125, 'Jersey', 'Jersey', 'Maillot', 'JE', 'JEY', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(126, 'Jordania', 'Jordan', 'Jordan', 'JO', 'JOR', '962', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(127, 'Kazajistán', 'Kazakhstan', 'Le Kazakhstan', 'KZ', 'KAZ', '7', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(128, 'Kenia', 'Kenya', 'Kenya', 'KE', 'KEN', '254', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(129, 'Kirgizstán', 'Kyrgyzstan', 'Kirghizstan', 'KG', 'KGZ', '996', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(130, 'Kiribati', 'Kiribati', 'Kiribati', 'KI', 'KIR', '686', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(131, 'Kuwait', 'Kuwait', 'Koweït', 'KW', 'KWT', '965', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(132, 'Líbano', 'Lebanon', 'Liban', 'LB', 'LBN', '961', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(133, 'Laos', 'Laos', 'Laos', 'LA', 'LAO', '856', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(134, 'Lesoto', 'Lesotho', 'Lesotho', 'LS', 'LSO', '266', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(135, 'Letonia', 'Latvia', 'La Lettonie', 'LV', 'LVA', '371', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(136, 'Liberia', 'Liberia', 'Liberia', 'LR', 'LBR', '231', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(137, 'Libia', 'Libya', 'Libye', 'LY', 'LBY', '218', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(138, 'Liechtenstein', 'Liechtenstein', 'Liechtenstein', 'LI', 'LIE', '423', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(139, 'Lituania', 'Lithuania', 'La Lituanie', 'LT', 'LTU', '370', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(140, 'Luxemburgo', 'Luxembourg', 'Luxembourg', 'LU', 'LUX', '352', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(141, 'México', 'Mexico', 'Mexique', 'MX', 'MEX', '52', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(142, 'Mónaco', 'Monaco', 'Monaco', 'MC', 'MCO', '377', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(143, 'Macao', 'Macao', 'Macao', 'MO', 'MAC', '853', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(144, 'Macedônia', 'Macedonia', 'Macédoine', 'MK', 'MKD', '389', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(145, 'Madagascar', 'Madagascar', 'Madagascar', 'MG', 'MDG', '261', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(146, 'Malasia', 'Malaysia', 'Malaisie', 'MY', 'MYS', '60', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(147, 'Malawi', 'Malawi', 'Malawi', 'MW', 'MWI', '265', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(148, 'Mali', 'Mali', 'Mali', 'ML', 'MLI', '223', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(149, 'Malta', 'Malta', 'Malte', 'MT', 'MLT', '356', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(150, 'Marruecos', 'Morocco', 'Maroc', 'MA', 'MAR', '212', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(151, 'Martinica', 'Martinique', 'Martinique', 'MQ', 'MTQ', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(152, 'Mauricio', 'Mauritius', 'Iles Maurice', 'MU', 'MUS', '230', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(153, 'Mauritania', 'Mauritania', 'Mauritanie', 'MR', 'MRT', '222', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(154, 'Mayotte', 'Mayotte', 'Mayotte', 'YT', 'MYT', '262', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(155, 'Micronesia', 'Estados Federados de', 'Federados Estados de', 'FM', 'FSM', '691', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(156, 'Moldavia', 'Moldova', 'Moldavie', 'MD', 'MDA', '373', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(157, 'Mongolia', 'Mongolia', 'Mongolie', 'MN', 'MNG', '976', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(158, 'Montenegro', 'Montenegro', 'Monténégro', 'ME', 'MNE', '382', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(159, 'Montserrat', 'Montserrat', 'Montserrat', 'MS', 'MSR', '1 664', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(160, 'Mozambique', 'Mozambique', 'Mozambique', 'MZ', 'MOZ', '258', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(161, 'Namibia', 'Namibia', 'Namibie', 'NA', 'NAM', '264', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(162, 'Nauru', 'Nauru', 'Nauru', 'NR', 'NRU', '674', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(163, 'Nepal', 'Nepal', 'Népal', 'NP', 'NPL', '977', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(164, 'Nicaragua', 'Nicaragua', 'Nicaragua', 'NI', 'NIC', '505', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(165, 'Niger', 'Niger', 'Niger', 'NE', 'NER', '227', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(166, 'Nigeria', 'Nigeria', 'Nigeria', 'NG', 'NGA', '234', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(167, 'Niue', 'Niue', 'Niou', 'NU', 'NIU', '683', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(168, 'Noruega', 'Norway', 'Norvège', 'NO', 'NOR', '47', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(169, 'Nueva Caledonia', 'New Caledonia', 'Nouvelle-Calédonie', 'NC', 'NCL', '687', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(170, 'Nueva Zelanda', 'New Zealand', 'Nouvelle-Zélande', 'NZ', 'NZL', '64', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(171, 'Omán', 'Oman', 'Oman', 'OM', 'OMN', '968', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(172, 'Países Bajos', 'Netherlands', 'Pays-Bas', 'NL', 'NLD', '31', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(173, 'Pakistán', 'Pakistan', 'Pakistan', 'PK', 'PAK', '92', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(174, 'Palau', 'Palau', 'Palau', 'PW', 'PLW', '680', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(175, 'Palestina', 'Palestine', 'La Palestine', 'PS', 'PSE', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(176, 'Panamá', 'Panama', 'Panama', 'PA', 'PAN', '507', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(177, 'Papúa Nueva Guinea', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée', 'PG', 'PNG', '675', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(178, 'Paraguay', 'Paraguay', 'Paraguay', 'PY', 'PRY', '595', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(179, 'Perú', 'Peru', 'Pérou', 'PE', 'PER', '51', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(180, 'Polinesia Francesa', 'French Polynesia', 'Polynésie française', 'PF', 'PYF', '689', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(181, 'Polonia', 'Poland', 'Pologne', 'PL', 'POL', '48', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(182, 'Portugal', 'Portugal', 'Portugal', 'PT', 'PRT', '351', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(183, 'Puerto Rico', 'Puerto Rico', 'Porto Rico', 'PR', 'PRI', '1', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(184, 'Qatar', 'Qatar', 'Qatar', 'QA', 'QAT', '974', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(185, 'Reino Unido', 'United Kingdom', 'Royaume-Uni', 'GB', 'GBR', '44', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(186, 'República Centroafricana', 'Central African Republic', 'République Centrafricaine', 'CF', 'CAF', '236', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(187, 'República Checa', 'Czech Republic', 'République Tchèque', 'CZ', 'CZE', '420', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(188, 'República Dominicana', 'Dominican Republic', 'République Dominicaine', 'DO', 'DOM', '1 809', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(189, 'Reunión', 'Réunion', 'Réunion', 'RE', 'REU', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(190, 'Ruanda', 'Rwanda', 'Rwanda', 'RW', 'RWA', '250', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(191, 'Rumanía', 'Romania', 'Roumanie', 'RO', 'ROU', '40', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(192, 'Rusia', 'Russia', 'La Russie', 'RU', 'RUS', '7', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(193, 'Sahara Occidental', 'Western Sahara', 'Sahara Occidental', 'EH', 'ESH', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(194, 'Samoa', 'Samoa', 'Samoa', 'WS', 'WSM', '685', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(195, 'Samoa Americana', 'American Samoa', 'Les Samoa américaines', 'AS', 'ASM', '1 684', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(196, 'San Bartolomé', 'Saint Barthélemy', 'Saint-Barthélemy', 'BL', 'BLM', '590', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(197, 'San Cristóbal y Nieves', 'Saint Kitts and Nevis', 'Saint Kitts et Nevis', 'KN', 'KNA', '1 869', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(198, 'San Marino', 'San Marino', 'San Marino', 'SM', 'SMR', '378', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(199, 'San Martín (Francia)', 'Saint Martin (French part)', 'Saint-Martin (partie française)', 'MF', 'MAF', '1 599', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(200, 'San Pedro y Miquelón', 'Saint Pierre and Miquelon', 'Saint-Pierre-et-Miquelon', 'PM', 'SPM', '508', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(201, 'San Vicente y las Granadinas', 'Saint Vincent and the Grenadines', 'Saint-Vincent et Grenadines', 'VC', 'VCT', '1 784', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(202, 'Santa Elena', 'Ascensión y Tristán de Acuña', 'Ascensión y Tristan de Acuña', 'SH', 'SHN', '290', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(203, 'Santa Lucía', 'Saint Lucia', 'Sainte-Lucie', 'LC', 'LCA', '1 758', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(204, 'Santo Tomé y Príncipe', 'Sao Tome and Principe', 'Sao Tomé et Principe', 'ST', 'STP', '239', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(205, 'Senegal', 'Senegal', 'Sénégal', 'SN', 'SEN', '221', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(206, 'Serbia', 'Serbia', 'Serbie', 'RS', 'SRB', '381', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(207, 'Seychelles', 'Seychelles', 'Les Seychelles', 'SC', 'SYC', '248', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(208, 'Sierra Leona', 'Sierra Leone', 'Sierra Leone', 'SL', 'SLE', '232', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(209, 'Singapur', 'Singapore', 'Singapour', 'SG', 'SGP', '65', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(210, 'Siria', 'Syria', 'Syrie', 'SY', 'SYR', '963', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(211, 'Somalia', 'Somalia', 'Somalie', 'SO', 'SOM', '252', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(212, 'Sri lanka', 'Sri Lanka', 'Sri Lanka', 'LK', 'LKA', '94', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(213, 'Sudáfrica', 'South Africa', 'Afrique du Sud', 'ZA', 'ZAF', '27', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(214, 'Sudán', 'Sudan', 'Soudan', 'SD', 'SDN', '249', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(215, 'Suecia', 'Sweden', 'Suède', 'SE', 'SWE', '46', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(216, 'Suiza', 'Switzerland', 'Suisse', 'CH', 'CHE', '41', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(217, 'Surinám', 'Suriname', 'Surinam', 'SR', 'SUR', '597', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(218, 'Svalbard y Jan Mayen', 'Svalbard and Jan Mayen', 'Svalbard et Jan Mayen', 'SJ', 'SJM', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(219, 'Swazilandia', 'Swaziland', 'Swaziland', 'SZ', 'SWZ', '268', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(220, 'Tadjikistán', 'Tajikistan', 'Le Tadjikistan', 'TJ', 'TJK', '992', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(221, 'Tailandia', 'Thailand', 'Thaïlande', 'TH', 'THA', '66', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(222, 'Taiwán', 'Taiwan', 'Taiwan', 'TW', 'TWN', '886', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(223, 'Tanzania', 'Tanzania', 'Tanzanie', 'TZ', 'TZA', '255', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(224, 'Territorio Británico del Océano Índico', 'British Indian Ocean Territory', 'Territoire britannique de l\'océan Indien', 'IO', 'IOT', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(225, 'Territorios Australes y Antárticas Franceses', 'French Southern Territories', 'Terres australes françaises', 'TF', 'ATF', '', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(226, 'Timor Oriental', 'East Timor', 'Timor-Oriental', 'TL', 'TLS', '670', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(227, 'Togo', 'Togo', 'Togo', 'TG', 'TGO', '228', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(228, 'Tokelau', 'Tokelau', 'Tokélaou', 'TK', 'TKL', '690', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(229, 'Tonga', 'Tonga', 'Tonga', 'TO', 'TON', '676', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(230, 'Trinidad y Tobago', 'Trinidad and Tobago', 'Trinidad et Tobago', 'TT', 'TTO', '1 868', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(231, 'Tunez', 'Tunisia', 'Tunisie', 'TN', 'TUN', '216', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(232, 'Turkmenistán', 'Turkmenistan', 'Le Turkménistan', 'TM', 'TKM', '993', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(233, 'Turquía', 'Turkey', 'Turquie', 'TR', 'TUR', '90', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(234, 'Tuvalu', 'Tuvalu', 'Tuvalu', 'TV', 'TUV', '688', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(235, 'Ucrania', 'Ukraine', 'L\'Ukraine', 'UA', 'UKR', '380', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(236, 'Uganda', 'Uganda', 'Ouganda', 'UG', 'UGA', '256', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(237, 'Uruguay', 'Uruguay', 'Uruguay', 'UY', 'URY', '598', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(238, 'Uzbekistán', 'Uzbekistan', 'L\'Ouzbékistan', 'UZ', 'UZB', '998', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(239, 'Vanuatu', 'Vanuatu', 'Vanuatu', 'VU', 'VUT', '678', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(240, 'Venezuela', 'Venezuela', 'Venezuela', 'VE', 'VEN', '58', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(241, 'Vietnam', 'Vietnam', 'Vietnam', 'VN', 'VNM', '84', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(242, 'Wallis y Futuna', 'Wallis and Futuna', 'Wallis et Futuna', 'WF', 'WLF', '681', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(243, 'Yemen', 'Yemen', 'Yémen', 'YE', 'YEM', '967', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(244, 'Yibuti', 'Djibouti', 'Djibouti', 'DJ', 'DJI', '253', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(245, 'Zambia', 'Zambia', 'Zambie', 'ZM', 'ZMB', '260', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL),
(246, 'Zimbabue', 'Zimbabwe', 'Zimbabwe', 'ZW', 'ZWE', '263', '2020-02-08 18:12:01', '2020-02-08 18:12:01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_parroquia`
--

CREATE TABLE `m_parroquia` (
  `id_m_parroquia` bigint(20) UNSIGNED NOT NULL,
  `codigo_canton` varchar(4) NOT NULL,
  `codigo_m_parroquia` varchar(6) NOT NULL,
  `nombre_m_parroquia` varchar(250) NOT NULL,
  `codigo_nombre` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `m_parroquia`
--

INSERT INTO `m_parroquia` (`id_m_parroquia`, `codigo_canton`, `codigo_m_parroquia`, `nombre_m_parroquia`, `codigo_nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0101', '010101', 'BELLAVISTA', '010101 - BELLAVISTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(2, '0101', '010102', 'CAÑARIBAMBA', '010102 - CAÑARIBAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(3, '0101', '010103', 'EL BATÁN', '010103 - EL BATÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(4, '0101', '010104', 'EL SAGRARIO', '010104 - EL SAGRARIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(5, '0101', '010105', 'EL VECINO', '010105 - EL VECINO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(6, '0101', '010106', 'GIL RAMÍREZ DÁVALOS', '010106 - GIL RAMÍREZ DÁVALOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(7, '0101', '010107', 'HUAYNACÁPAC', '010107 - HUAYNACÁPAC', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(8, '0101', '010108', 'MACHÁNGARA', '010108 - MACHÁNGARA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(9, '0101', '010109', 'MONAY', '010109 - MONAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(10, '0101', '010110', 'SAN BLAS', '010110 - SAN BLAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(11, '0101', '010111', 'SAN SEBASTIÁN', '010111 - SAN SEBASTIÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(12, '0101', '010112', 'SUCRE', '010112 - SUCRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(13, '0101', '010113', 'TOTORACOCHA', '010113 - TOTORACOCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(14, '0101', '010114', 'YANUNCAY', '010114 - YANUNCAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(15, '0101', '010115', 'HERMANO MIGUEL', '010115 - HERMANO MIGUEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(16, '0101', '010150', 'CUENCA', '010150 - CUENCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(17, '0101', '010151', 'BAÑOS', '010151 - BAÑOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(18, '0101', '010152', 'CUMBE', '010152 - CUMBE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(19, '0101', '010153', 'CHAUCHA', '010153 - CHAUCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(20, '0101', '010154', 'CHECA (JIDCAY)', '010154 - CHECA (JIDCAY)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(21, '0101', '010155', 'CHIQUINTAD', '010155 - CHIQUINTAD', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(22, '0101', '010156', 'LLACAO', '010156 - LLACAO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(23, '0101', '010157', 'MOLLETURO', '010157 - MOLLETURO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(24, '0101', '010158', 'NULTI', '010158 - NULTI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(25, '0101', '010159', 'OCTAVIO CORDERO PALACIOS (SANTA ROSA)', '010159 - OCTAVIO CORDERO PALACIOS (SANTA ROSA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(26, '0101', '010160', 'PACCHA', '010160 - PACCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(27, '0101', '010161', 'QUINGEO', '010161 - QUINGEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(28, '0101', '010162', 'RICAURTE', '010162 - RICAURTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(29, '0101', '010163', 'SAN JOAQUÍN', '010163 - SAN JOAQUÍN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(30, '0101', '010164', 'SANTA ANA', '010164 - SANTA ANA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(31, '0101', '010165', 'SAYAUSÍ', '010165 - SAYAUSÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(32, '0101', '010166', 'SIDCAY', '010166 - SIDCAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(33, '0101', '010167', 'SININCAY', '010167 - SININCAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(34, '0101', '010168', 'TARQUI', '010168 - TARQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(35, '0101', '010169', 'TURI', '010169 - TURI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(36, '0101', '010170', 'VALLE', '010170 - VALLE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(37, '0101', '010171', 'VICTORIA DEL PORTETE (IRQUIS)', '010171 - VICTORIA DEL PORTETE (IRQUIS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(38, '0102', '010250', 'GIRÓN', '010250 - GIRÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(39, '0102', '010251', 'ASUNCIÓN', '010251 - ASUNCIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(40, '0102', '010252', 'SAN GERARDO', '010252 - SAN GERARDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(41, '0103', '010350', 'GUALACEO', '010350 - GUALACEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(42, '0103', '010351', 'CHORDELEG', '010351 - CHORDELEG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(43, '0103', '010352', 'DANIEL CÓRDOVA TORAL (EL ORIENTE)', '010352 - DANIEL CÓRDOVA TORAL (EL ORIENTE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(44, '0103', '010353', 'JADÁN', '010353 - JADÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(45, '0103', '010354', 'MARIANO MORENO', '010354 - MARIANO MORENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(46, '0103', '010355', 'PRINCIPAL', '010355 - PRINCIPAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(47, '0103', '010356', 'REMIGIO CRESPO TORAL (GÚLAG)', '010356 - REMIGIO CRESPO TORAL (GÚLAG)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(48, '0103', '010357', 'SAN JUAN', '010357 - SAN JUAN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(49, '0103', '010358', 'ZHIDMAD', '010358 - ZHIDMAD', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(50, '0103', '010359', 'LUIS CORDERO VEGA', '010359 - LUIS CORDERO VEGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(51, '0103', '010360', 'SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)', '010360 - SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(52, '0104', '010450', 'NABÓN', '010450 - NABÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(53, '0104', '010451', 'COCHAPATA', '010451 - COCHAPATA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(54, '0104', '010452', 'EL PROGRESO (CAB.EN ZHOTA)', '010452 - EL PROGRESO (CAB.EN ZHOTA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(55, '0104', '010453', 'LAS NIEVES (CHAYA)', '010453 - LAS NIEVES (CHAYA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(56, '0104', '010454', 'OÑA', '010454 - OÑA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(57, '0105', '010550', 'PAUTE', '010550 - PAUTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(58, '0105', '010551', 'AMALUZA', '010551 - AMALUZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(59, '0105', '010552', 'BULÁN (JOSÉ VÍCTOR IZQUIERDO)', '010552 - BULÁN (JOSÉ VÍCTOR IZQUIERDO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(60, '0105', '010553', 'CHICÁN (GUILLERMO ORTEGA)', '010553 - CHICÁN (GUILLERMO ORTEGA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(61, '0105', '010554', 'EL CABO', '010554 - EL CABO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(62, '0105', '010555', 'GUACHAPALA', '010555 - GUACHAPALA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(63, '0105', '010556', 'GUARAINAG', '010556 - GUARAINAG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(64, '0105', '010557', 'PALMAS', '010557 - PALMAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(65, '0105', '010558', 'PAN', '010558 - PAN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(66, '0105', '010559', 'SAN CRISTÓBAL (CARLOS ORDÓÑEZ LAZO)', '010559 - SAN CRISTÓBAL (CARLOS ORDÓÑEZ LAZO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(67, '0105', '010560', 'SEVILLA DE ORO', '010560 - SEVILLA DE ORO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(68, '0105', '010561', 'TOMEBAMBA', '010561 - TOMEBAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(69, '0105', '010562', 'DUG DUG', '010562 - DUG DUG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(70, '0106', '010650', 'PUCARÁ', '010650 - PUCARÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(71, '0106', '010651', 'CAMILO PONCE ENRÍQUEZ (CAB. EN RÍO 7 DE MOLLEPONGO)', '010651 - CAMILO PONCE ENRÍQUEZ (CAB. EN RÍO 7 DE MOLLEPONGO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(72, '0106', '010652', 'SAN RAFAEL DE SHARUG', '010652 - SAN RAFAEL DE SHARUG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(73, '0107', '010750', 'SAN FERNANDO', '010750 - SAN FERNANDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(74, '0107', '010751', 'CHUMBLÍN', '010751 - CHUMBLÍN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(75, '0108', '010850', 'SANTA ISABEL (CHAGUARURCO)', '010850 - SANTA ISABEL (CHAGUARURCO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(76, '0108', '010851', 'ABDÓN CALDERÓN (LA UNIÓN)', '010851 - ABDÓN CALDERÓN (LA UNIÓN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(77, '0108', '010852', 'EL CARMEN DE PIJILÍ', '010852 - EL CARMEN DE PIJILÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(78, '0108', '010853', 'ZHAGLLI (SHAGLLI)', '010853 - ZHAGLLI (SHAGLLI)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(79, '0108', '010854', 'SAN SALVADOR DE CAÑARIBAMBA', '010854 - SAN SALVADOR DE CAÑARIBAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(80, '0109', '010950', 'SIGSIG', '010950 - SIGSIG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(81, '0109', '010951', 'CUCHIL (CUTCHIL)', '010951 - CUCHIL (CUTCHIL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(82, '0109', '010952', 'GIMA', '010952 - GIMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(83, '0109', '010953', 'GUEL', '010953 - GUEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(84, '0109', '010954', 'LUDO', '010954 - LUDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(85, '0109', '010955', 'SAN BARTOLOMÉ', '010955 - SAN BARTOLOMÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(86, '0109', '010956', 'SAN JOSÉ DE RARANGA', '010956 - SAN JOSÉ DE RARANGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(87, '0110', '011050', 'SAN FELIPE DE OÑA CABECERA CANTONAL', '011050 - SAN FELIPE DE OÑA CABECERA CANTONAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(88, '0110', '011051', 'SUSUDEL', '011051 - SUSUDEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(89, '0111', '011150', 'CHORDELEG', '011150 - CHORDELEG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(90, '0111', '011151', 'PRINCIPAL', '011151 - PRINCIPAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(91, '0111', '011152', 'LA UNIÓN', '011152 - LA UNIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(92, '0111', '011153', 'LUIS GALARZA ORELLANA (CAB.EN DELEGSOL)', '011153 - LUIS GALARZA ORELLANA (CAB.EN DELEGSOL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(93, '0111', '011154', 'SAN MARTÍN DE PUZHIO', '011154 - SAN MARTÍN DE PUZHIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(94, '0112', '011250', 'EL PAN', '011250 - EL PAN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(95, '0112', '011251', 'AMALUZA', '011251 - AMALUZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(96, '0112', '011252', 'PALMAS', '011252 - PALMAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(97, '0112', '011253', 'SAN VICENTE', '011253 - SAN VICENTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(98, '0113', '011350', 'SEVILLA DE ORO', '011350 - SEVILLA DE ORO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(99, '0113', '011351', 'AMALUZA', '011351 - AMALUZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(100, '0113', '011352', 'PALMAS', '011352 - PALMAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(101, '0114', '011450', 'GUACHAPALA', '011450 - GUACHAPALA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(102, '0115', '011550', 'CAMILO PONCE ENRÍQUEZ', '011550 - CAMILO PONCE ENRÍQUEZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(103, '0115', '011551', 'EL CARMEN DE PIJILÍ', '011551 - EL CARMEN DE PIJILÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(104, '0201', '020101', 'ÁNGEL POLIBIO CHÁVES', '020101 - ÁNGEL POLIBIO CHÁVES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(105, '0201', '020102', 'GABRIEL IGNACIO VEINTIMILLA', '020102 - GABRIEL IGNACIO VEINTIMILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(106, '0201', '020103', 'GUANUJO', '020103 - GUANUJO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(107, '0201', '020150', 'GUARANDA', '020150 - GUARANDA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(108, '0201', '020151', 'FACUNDO VELA', '020151 - FACUNDO VELA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(109, '0201', '020152', 'GUANUJO', '020152 - GUANUJO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(110, '0201', '020153', 'JULIO E. MORENO (CATANAHUÁN GRANDE)', '020153 - JULIO E. MORENO (CATANAHUÁN GRANDE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(111, '0201', '020154', 'LAS NAVES', '020154 - LAS NAVES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(112, '0201', '020155', 'SALINAS', '020155 - SALINAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(113, '0201', '020156', 'SAN LORENZO', '020156 - SAN LORENZO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(114, '0201', '020157', 'SAN SIMÓN (YACOTO)', '020157 - SAN SIMÓN (YACOTO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(115, '0201', '020158', 'SANTA FÉ (SANTA FÉ)', '020158 - SANTA FÉ (SANTA FÉ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(116, '0201', '020159', 'SIMIÁTUG', '020159 - SIMIÁTUG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(117, '0201', '020160', 'SAN LUIS DE PAMBIL', '020160 - SAN LUIS DE PAMBIL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(118, '0202', '020250', 'CHILLANES', '020250 - CHILLANES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(119, '0202', '020251', 'SAN JOSÉ DEL TAMBO (TAMBOPAMBA)', '020251 - SAN JOSÉ DEL TAMBO (TAMBOPAMBA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(120, '0203', '020350', 'SAN JOSÉ DE CHIMBO', '020350 - SAN JOSÉ DE CHIMBO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(121, '0203', '020351', 'ASUNCIÓN (ASANCOTO)', '020351 - ASUNCIÓN (ASANCOTO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(122, '0203', '020352', 'CALUMA', '020352 - CALUMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(123, '0203', '020353', 'MAGDALENA (CHAPACOTO)', '020353 - MAGDALENA (CHAPACOTO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(124, '0203', '020354', 'SAN SEBASTIÁN', '020354 - SAN SEBASTIÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(125, '0203', '020355', 'TELIMBELA', '020355 - TELIMBELA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(126, '0204', '020450', 'ECHEANDÍA', '020450 - ECHEANDÍA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(127, '0205', '020550', 'SAN MIGUEL', '020550 - SAN MIGUEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(128, '0205', '020551', 'BALSAPAMBA', '020551 - BALSAPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(129, '0205', '020552', 'BILOVÁN', '020552 - BILOVÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(130, '0205', '020553', 'RÉGULO DE MORA', '020553 - RÉGULO DE MORA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(131, '0205', '020554', 'SAN PABLO (SAN PABLO DE ATENAS)', '020554 - SAN PABLO (SAN PABLO DE ATENAS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(132, '0205', '020555', 'SANTIAGO', '020555 - SANTIAGO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(133, '0205', '020556', 'SAN VICENTE', '020556 - SAN VICENTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(134, '0206', '020650', 'CALUMA', '020650 - CALUMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(135, '0207', '020701', 'LAS MERCEDES', '020701 - LAS MERCEDES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(136, '0207', '020702', 'LAS NAVES', '020702 - LAS NAVES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(137, '0207', '020750', 'LAS NAVES', '020750 - LAS NAVES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(138, '0301', '030101', 'AURELIO BAYAS MARTÍNEZ', '030101 - AURELIO BAYAS MARTÍNEZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(139, '0301', '030102', 'AZOGUES', '030102 - AZOGUES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(140, '0301', '030103', 'BORRERO', '030103 - BORRERO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(141, '0301', '030104', 'SAN FRANCISCO', '030104 - SAN FRANCISCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(142, '0301', '030150', 'AZOGUES', '030150 - AZOGUES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(143, '0301', '030151', 'COJITAMBO', '030151 - COJITAMBO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(144, '0301', '030152', 'DÉLEG', '030152 - DÉLEG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(145, '0301', '030153', 'GUAPÁN', '030153 - GUAPÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(146, '0301', '030154', 'JAVIER LOYOLA (CHUQUIPATA)', '030154 - JAVIER LOYOLA (CHUQUIPATA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(147, '0301', '030155', 'LUIS CORDERO', '030155 - LUIS CORDERO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(148, '0301', '030156', 'PINDILIG', '030156 - PINDILIG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(149, '0301', '030157', 'RIVERA', '030157 - RIVERA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(150, '0301', '030158', 'SAN MIGUEL', '030158 - SAN MIGUEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(151, '0301', '030159', 'SOLANO', '030159 - SOLANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(152, '0301', '030160', 'TADAY', '030160 - TADAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(153, '0302', '030250', 'BIBLIÁN', '030250 - BIBLIÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(154, '0302', '030251', 'NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)', '030251 - NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(155, '0302', '030252', 'SAN FRANCISCO DE SAGEO', '030252 - SAN FRANCISCO DE SAGEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(156, '0302', '030253', 'TURUPAMBA', '030253 - TURUPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(157, '0302', '030254', 'JERUSALÉN', '030254 - JERUSALÉN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(158, '0303', '030350', 'CAÑAR', '030350 - CAÑAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(159, '0303', '030351', 'CHONTAMARCA', '030351 - CHONTAMARCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(160, '0303', '030352', 'CHOROCOPTE', '030352 - CHOROCOPTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(161, '0303', '030353', 'GENERAL MORALES (SOCARTE)', '030353 - GENERAL MORALES (SOCARTE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(162, '0303', '030354', 'GUALLETURO', '030354 - GUALLETURO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(163, '0303', '030355', 'HONORATO VÁSQUEZ (TAMBO VIEJO)', '030355 - HONORATO VÁSQUEZ (TAMBO VIEJO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(164, '0303', '030356', 'INGAPIRCA', '030356 - INGAPIRCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(165, '0303', '030357', 'JUNCAL', '030357 - JUNCAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(166, '0303', '030358', 'SAN ANTONIO', '030358 - SAN ANTONIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(167, '0303', '030359', 'SUSCAL', '030359 - SUSCAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(168, '0303', '030360', 'TAMBO', '030360 - TAMBO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(169, '0303', '030361', 'ZHUD', '030361 - ZHUD', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(170, '0303', '030362', 'VENTURA', '030362 - VENTURA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(171, '0303', '030363', 'DUCUR', '030363 - DUCUR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(172, '0304', '030450', 'LA TRONCAL', '030450 - LA TRONCAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(173, '0304', '030451', 'MANUEL J. CALLE', '030451 - MANUEL J. CALLE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(174, '0304', '030452', 'PANCHO NEGRO', '030452 - PANCHO NEGRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(175, '0305', '030550', 'EL TAMBO', '030550 - EL TAMBO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(176, '0306', '030650', 'DÉLEG', '030650 - DÉLEG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(177, '0306', '030651', 'SOLANO', '030651 - SOLANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(178, '0307', '030750', 'SUSCAL', '030750 - SUSCAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(179, '0401', '040101', 'GONZÁLEZ SUÁREZ', '040101 - GONZÁLEZ SUÁREZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(180, '0401', '040102', 'TULCÁN', '040102 - TULCÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(181, '0401', '040150', 'TULCÁN', '040150 - TULCÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(182, '0401', '040151', 'EL CARMELO (EL PUN)', '040151 - EL CARMELO (EL PUN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(183, '0401', '040152', 'HUACA', '040152 - HUACA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(184, '0401', '040153', 'JULIO ANDRADE (OREJUELA)', '040153 - JULIO ANDRADE (OREJUELA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(185, '0401', '040154', 'MALDONADO', '040154 - MALDONADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(186, '0401', '040155', 'PIOTER', '040155 - PIOTER', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(187, '0401', '040156', 'TOBAR DONOSO (LA BOCANA DE CAMUMBÍ)', '040156 - TOBAR DONOSO (LA BOCANA DE CAMUMBÍ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(188, '0401', '040157', 'TUFIÑO', '040157 - TUFIÑO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(189, '0401', '040158', 'URBINA (TAYA)', '040158 - URBINA (TAYA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(190, '0401', '040159', 'EL CHICAL', '040159 - EL CHICAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(191, '0401', '040160', 'MARISCAL SUCRE', '040160 - MARISCAL SUCRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(192, '0401', '040161', 'SANTA MARTHA DE CUBA', '040161 - SANTA MARTHA DE CUBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(193, '0402', '040250', 'BOLÍVAR', '040250 - BOLÍVAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(194, '0402', '040251', 'GARCÍA MORENO', '040251 - GARCÍA MORENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(195, '0402', '040252', 'LOS ANDES', '040252 - LOS ANDES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(196, '0402', '040253', 'MONTE OLIVO', '040253 - MONTE OLIVO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(197, '0402', '040254', 'SAN VICENTE DE PUSIR', '040254 - SAN VICENTE DE PUSIR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(198, '0402', '040255', 'SAN RAFAEL', '040255 - SAN RAFAEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(199, '0403', '040301', 'EL ÁNGEL', '040301 - EL ÁNGEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(200, '0403', '040302', '27 DE SEPTIEMBRE', '040302 - 27 DE SEPTIEMBRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(201, '0403', '040350', 'EL ANGEL', '040350 - EL ANGEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(202, '0403', '040351', 'EL GOALTAL', '040351 - EL GOALTAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(203, '0403', '040352', 'LA LIBERTAD (ALIZO)', '040352 - LA LIBERTAD (ALIZO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(204, '0403', '040353', 'SAN ISIDRO', '040353 - SAN ISIDRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(205, '0404', '040450', 'MIRA (CHONTAHUASI)', '040450 - MIRA (CHONTAHUASI)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(206, '0404', '040451', 'CONCEPCIÓN', '040451 - CONCEPCIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(207, '0404', '040452', 'JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)', '040452 - JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(208, '0404', '040453', 'JUAN MONTALVO (SAN IGNACIO DE QUIL)', '040453 - JUAN MONTALVO (SAN IGNACIO DE QUIL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(209, '0405', '040501', 'GONZÁLEZ SUÁREZ', '040501 - GONZÁLEZ SUÁREZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(210, '0405', '040502', 'SAN JOSÉ', '040502 - SAN JOSÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(211, '0405', '040550', 'SAN GABRIEL', '040550 - SAN GABRIEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(212, '0405', '040551', 'CRISTÓBAL COLÓN', '040551 - CRISTÓBAL COLÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(213, '0405', '040552', 'CHITÁN DE NAVARRETE', '040552 - CHITÁN DE NAVARRETE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(214, '0405', '040553', 'FERNÁNDEZ SALVADOR', '040553 - FERNÁNDEZ SALVADOR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(215, '0405', '040554', 'LA PAZ', '040554 - LA PAZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(216, '0405', '040555', 'PIARTAL', '040555 - PIARTAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(217, '0406', '040650', 'HUACA', '040650 - HUACA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(218, '0406', '040651', 'MARISCAL SUCRE', '040651 - MARISCAL SUCRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(219, '0501', '050101', 'ELOY ALFARO (SAN FELIPE)', '050101 - ELOY ALFARO (SAN FELIPE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(220, '0501', '050102', 'IGNACIO FLORES (PARQUE FLORES)', '050102 - IGNACIO FLORES (PARQUE FLORES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(221, '0501', '050103', 'JUAN MONTALVO (SAN SEBASTIÁN)', '050103 - JUAN MONTALVO (SAN SEBASTIÁN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(222, '0501', '050104', 'LA MATRIZ', '050104 - LA MATRIZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(223, '0501', '050105', 'SAN BUENAVENTURA', '050105 - SAN BUENAVENTURA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(224, '0501', '050150', 'LATACUNGA', '050150 - LATACUNGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(225, '0501', '050151', 'ALAQUES (ALÁQUEZ)', '050151 - ALAQUES (ALÁQUEZ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(226, '0501', '050152', 'BELISARIO QUEVEDO (GUANAILÍN)', '050152 - BELISARIO QUEVEDO (GUANAILÍN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(227, '0501', '050153', 'GUAITACAMA (GUAYTACAMA)', '050153 - GUAITACAMA (GUAYTACAMA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(228, '0501', '050154', 'JOSEGUANGO BAJO', '050154 - JOSEGUANGO BAJO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(229, '0501', '050155', 'LAS PAMPAS', '050155 - LAS PAMPAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(230, '0501', '050156', 'MULALÓ', '050156 - MULALÓ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(231, '0501', '050157', '11 DE NOVIEMBRE (ILINCHISI)', '050157 - 11 DE NOVIEMBRE (ILINCHISI)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(232, '0501', '050158', 'POALÓ', '050158 - POALÓ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(233, '0501', '050159', 'SAN JUAN DE PASTOCALLE', '050159 - SAN JUAN DE PASTOCALLE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(234, '0501', '050160', 'SIGCHOS', '050160 - SIGCHOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(235, '0501', '050161', 'TANICUCHÍ', '050161 - TANICUCHÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(236, '0501', '050162', 'TOACASO', '050162 - TOACASO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(237, '0501', '050163', 'PALO QUEMADO', '050163 - PALO QUEMADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(238, '0502', '050201', 'EL CARMEN', '050201 - EL CARMEN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(239, '0502', '050202', 'LA MANÁ', '050202 - LA MANÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(240, '0502', '050203', 'EL TRIUNFO', '050203 - EL TRIUNFO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(241, '0502', '050250', 'LA MANÁ', '050250 - LA MANÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(242, '0502', '050251', 'GUASAGANDA (CAB.EN GUASAGANDA', '050251 - GUASAGANDA (CAB.EN GUASAGANDA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(243, '0502', '050252', 'PUCAYACU', '050252 - PUCAYACU', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(244, '0503', '050350', 'EL CORAZÓN', '050350 - EL CORAZÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(245, '0503', '050351', 'MORASPUNGO', '050351 - MORASPUNGO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(246, '0503', '050352', 'PINLLOPATA', '050352 - PINLLOPATA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(247, '0503', '050353', 'RAMÓN CAMPAÑA', '050353 - RAMÓN CAMPAÑA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(248, '0504', '050450', 'PUJILÍ', '050450 - PUJILÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(249, '0504', '050451', 'ANGAMARCA', '050451 - ANGAMARCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(250, '0504', '050452', 'CHUCCHILÁN (CHUGCHILÁN)', '050452 - CHUCCHILÁN (CHUGCHILÁN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(251, '0504', '050453', 'GUANGAJE', '050453 - GUANGAJE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(252, '0504', '050454', 'ISINLIBÍ (ISINLIVÍ)', '050454 - ISINLIBÍ (ISINLIVÍ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(253, '0504', '050455', 'LA VICTORIA', '050455 - LA VICTORIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(254, '0504', '050456', 'PILALÓ', '050456 - PILALÓ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(255, '0504', '050457', 'TINGO', '050457 - TINGO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(256, '0504', '050458', 'ZUMBAHUA', '050458 - ZUMBAHUA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(257, '0505', '050550', 'SAN MIGUEL', '050550 - SAN MIGUEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(258, '0505', '050551', 'ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)', '050551 - ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(259, '0505', '050552', 'CUSUBAMBA', '050552 - CUSUBAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(260, '0505', '050553', 'MULALILLO', '050553 - MULALILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(261, '0505', '050554', 'MULLIQUINDIL (SANTA ANA)', '050554 - MULLIQUINDIL (SANTA ANA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(262, '0505', '050555', 'PANSALEO', '050555 - PANSALEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(263, '0506', '050650', 'SAQUISILÍ', '050650 - SAQUISILÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(264, '0506', '050651', 'CANCHAGUA', '050651 - CANCHAGUA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(265, '0506', '050652', 'CHANTILÍN', '050652 - CHANTILÍN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(266, '0506', '050653', 'COCHAPAMBA', '050653 - COCHAPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(267, '0507', '050750', 'SIGCHOS', '050750 - SIGCHOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(268, '0507', '050751', 'CHUGCHILLÁN', '050751 - CHUGCHILLÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(269, '0507', '050752', 'ISINLIVÍ', '050752 - ISINLIVÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(270, '0507', '050753', 'LAS PAMPAS', '050753 - LAS PAMPAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(271, '0507', '050754', 'PALO QUEMADO', '050754 - PALO QUEMADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(272, '0601', '060101', 'LIZARZABURU', '060101 - LIZARZABURU', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(273, '0601', '060102', 'MALDONADO', '060102 - MALDONADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(274, '0601', '060103', 'VELASCO', '060103 - VELASCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(275, '0601', '060104', 'VELOZ', '060104 - VELOZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(276, '0601', '060105', 'YARUQUÍES', '060105 - YARUQUÍES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(277, '0601', '060150', 'RIOBAMBA', '060150 - RIOBAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(278, '0601', '060151', 'CACHA (CAB. EN MACHÁNGARA)', '060151 - CACHA (CAB. EN MACHÁNGARA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(279, '0601', '060152', 'CALPI', '060152 - CALPI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(280, '0601', '060153', 'CUBIJÍES', '060153 - CUBIJÍES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(281, '0601', '060154', 'FLORES', '060154 - FLORES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(282, '0601', '060155', 'LICÁN', '060155 - LICÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(283, '0601', '060156', 'LICTO', '060156 - LICTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(284, '0601', '060157', 'PUNGALÁ', '060157 - PUNGALÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(285, '0601', '060158', 'PUNÍN', '060158 - PUNÍN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(286, '0601', '060159', 'QUIMIAG', '060159 - QUIMIAG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(287, '0601', '060160', 'SAN JUAN', '060160 - SAN JUAN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(288, '0601', '060161', 'SAN LUIS', '060161 - SAN LUIS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(289, '0602', '060250', 'ALAUSÍ', '060250 - ALAUSÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(290, '0602', '060251', 'ACHUPALLAS', '060251 - ACHUPALLAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(291, '0602', '060252', 'CUMANDÁ', '060252 - CUMANDÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(292, '0602', '060253', 'GUASUNTOS', '060253 - GUASUNTOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(293, '0602', '060254', 'HUIGRA', '060254 - HUIGRA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(294, '0602', '060255', 'MULTITUD', '060255 - MULTITUD', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(295, '0602', '060256', 'PISTISHÍ (NARIZ DEL DIABLO)', '060256 - PISTISHÍ (NARIZ DEL DIABLO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(296, '0602', '060257', 'PUMALLACTA', '060257 - PUMALLACTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(297, '0602', '060258', 'SEVILLA', '060258 - SEVILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(298, '0602', '060259', 'SIBAMBE', '060259 - SIBAMBE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(299, '0602', '060260', 'TIXÁN', '060260 - TIXÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(300, '0603', '060301', 'CAJABAMBA', '060301 - CAJABAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(301, '0603', '060302', 'SICALPA', '060302 - SICALPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(302, '0603', '060350', 'VILLA LA UNIÓN (CAJABAMBA)', '060350 - VILLA LA UNIÓN (CAJABAMBA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(303, '0603', '060351', 'CAÑI', '060351 - CAÑI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(304, '0603', '060352', 'COLUMBE', '060352 - COLUMBE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(305, '0603', '060353', 'JUAN DE VELASCO (PANGOR)', '060353 - JUAN DE VELASCO (PANGOR)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(306, '0603', '060354', 'SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)', '060354 - SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(307, '0604', '060450', 'CHAMBO', '060450 - CHAMBO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(308, '0605', '060550', 'CHUNCHI', '060550 - CHUNCHI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(309, '0605', '060551', 'CAPZOL', '060551 - CAPZOL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(310, '0605', '060552', 'COMPUD', '060552 - COMPUD', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(311, '0605', '060553', 'GONZOL', '060553 - GONZOL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(312, '0605', '060554', 'LLAGOS', '060554 - LLAGOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(313, '0606', '060650', 'GUAMOTE', '060650 - GUAMOTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(314, '0606', '060651', 'CEBADAS', '060651 - CEBADAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(315, '0606', '060652', 'PALMIRA', '060652 - PALMIRA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(316, '0607', '060701', 'EL ROSARIO', '060701 - EL ROSARIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(317, '0607', '060702', 'LA MATRIZ', '060702 - LA MATRIZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(318, '0607', '060750', 'GUANO', '060750 - GUANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(319, '0607', '060751', 'GUANANDO', '060751 - GUANANDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(320, '0607', '060752', 'ILAPO', '060752 - ILAPO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(321, '0607', '060753', 'LA PROVIDENCIA', '060753 - LA PROVIDENCIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(322, '0607', '060754', 'SAN ANDRÉS', '060754 - SAN ANDRÉS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(323, '0607', '060755', 'SAN GERARDO DE PACAICAGUÁN', '060755 - SAN GERARDO DE PACAICAGUÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(324, '0607', '060756', 'SAN ISIDRO DE PATULÚ', '060756 - SAN ISIDRO DE PATULÚ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(325, '0607', '060757', 'SAN JOSÉ DEL CHAZO', '060757 - SAN JOSÉ DEL CHAZO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(326, '0607', '060758', 'SANTA FÉ DE GALÁN', '060758 - SANTA FÉ DE GALÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(327, '0607', '060759', 'VALPARAÍSO', '060759 - VALPARAÍSO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(328, '0608', '060850', 'PALLATANGA', '060850 - PALLATANGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(329, '0609', '060950', 'PENIPE', '060950 - PENIPE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(330, '0609', '060951', 'EL ALTAR', '060951 - EL ALTAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(331, '0609', '060952', 'MATUS', '060952 - MATUS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(332, '0609', '060953', 'PUELA', '060953 - PUELA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(333, '0609', '060954', 'SAN ANTONIO DE BAYUSHIG', '060954 - SAN ANTONIO DE BAYUSHIG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(334, '0609', '060955', 'LA CANDELARIA', '060955 - LA CANDELARIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(335, '0609', '060956', 'BILBAO (CAB.EN QUILLUYACU)', '060956 - BILBAO (CAB.EN QUILLUYACU)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(336, '0610', '061050', 'CUMANDÁ', '061050 - CUMANDÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(337, '0701', '070101', 'LA PROVIDENCIA', '070101 - LA PROVIDENCIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(338, '0701', '070102', 'MACHALA', '070102 - MACHALA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(339, '0701', '070103', 'PUERTO BOLÍVAR', '070103 - PUERTO BOLÍVAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(340, '0701', '070104', 'NUEVE DE MAYO', '070104 - NUEVE DE MAYO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(341, '0701', '070105', 'EL CAMBIO', '070105 - EL CAMBIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(342, '0701', '070150', 'MACHALA', '070150 - MACHALA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(343, '0701', '070151', 'EL CAMBIO', '070151 - EL CAMBIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(344, '0701', '070152', 'EL RETIRO', '070152 - EL RETIRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(345, '0702', '070250', 'ARENILLAS', '070250 - ARENILLAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(346, '0702', '070251', 'CHACRAS', '070251 - CHACRAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(347, '0702', '070252', 'LA LIBERTAD', '070252 - LA LIBERTAD', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(348, '0702', '070253', 'LAS LAJAS (CAB. EN LA VICTORIA)', '070253 - LAS LAJAS (CAB. EN LA VICTORIA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(349, '0702', '070254', 'PALMALES', '070254 - PALMALES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(350, '0702', '070255', 'CARCABÓN', '070255 - CARCABÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(351, '0703', '070350', 'PACCHA', '070350 - PACCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(352, '0703', '070351', 'AYAPAMBA', '070351 - AYAPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(353, '0703', '070352', 'CORDONCILLO', '070352 - CORDONCILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(354, '0703', '070353', 'MILAGRO', '070353 - MILAGRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(355, '0703', '070354', 'SAN JOSÉ', '070354 - SAN JOSÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(356, '0703', '070355', 'SAN JUAN DE CERRO AZUL', '070355 - SAN JUAN DE CERRO AZUL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(357, '0704', '070450', 'BALSAS', '070450 - BALSAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(358, '0704', '070451', 'BELLAMARÍA', '070451 - BELLAMARÍA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(359, '0705', '070550', 'CHILLA', '070550 - CHILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(360, '0706', '070650', 'EL GUABO', '070650 - EL GUABO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(361, '0706', '070651', 'BARBONES (SUCRE)', '070651 - BARBONES (SUCRE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(362, '0706', '070652', 'LA IBERIA', '070652 - LA IBERIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(363, '0706', '070653', 'TENDALES (CAB.EN PUERTO TENDALES)', '070653 - TENDALES (CAB.EN PUERTO TENDALES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(364, '0706', '070654', 'RÍO BONITO', '070654 - RÍO BONITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(365, '0707', '070701', 'ECUADOR', '070701 - ECUADOR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(366, '0707', '070702', 'EL PARAÍSO', '070702 - EL PARAÍSO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(367, '0707', '070703', 'HUALTACO', '070703 - HUALTACO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(368, '0707', '070704', 'MILTON REYES', '070704 - MILTON REYES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(369, '0707', '070705', 'UNIÓN LOJANA', '070705 - UNIÓN LOJANA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(370, '0707', '070750', 'HUAQUILLAS', '070750 - HUAQUILLAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(371, '0708', '070850', 'MARCABELÍ', '070850 - MARCABELÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(372, '0708', '070851', 'EL INGENIO', '070851 - EL INGENIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(373, '0709', '070901', 'BOLÍVAR', '070901 - BOLÍVAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(374, '0709', '070902', 'LOMA DE FRANCO', '070902 - LOMA DE FRANCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(375, '0709', '070903', 'OCHOA LEÓN (MATRIZ)', '070903 - OCHOA LEÓN (MATRIZ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(376, '0709', '070904', 'TRES CERRITOS', '070904 - TRES CERRITOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(377, '0709', '070950', 'PASAJE', '070950 - PASAJE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(378, '0709', '070951', 'BUENAVISTA', '070951 - BUENAVISTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(379, '0709', '070952', 'CASACAY', '070952 - CASACAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(380, '0709', '070953', 'LA PEAÑA', '070953 - LA PEAÑA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(381, '0709', '070954', 'PROGRESO', '070954 - PROGRESO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(382, '0709', '070955', 'UZHCURRUMI', '070955 - UZHCURRUMI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(383, '0709', '070956', 'CAÑAQUEMADA', '070956 - CAÑAQUEMADA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(384, '0710', '071001', 'LA MATRIZ', '071001 - LA MATRIZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(385, '0710', '071002', 'LA SUSAYA', '071002 - LA SUSAYA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(386, '0710', '071003', 'PIÑAS GRANDE', '071003 - PIÑAS GRANDE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(387, '0710', '071050', 'PIÑAS', '071050 - PIÑAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(388, '0710', '071051', 'CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)', '071051 - CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(389, '0710', '071052', 'LA BOCANA', '071052 - LA BOCANA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(390, '0710', '071053', 'MOROMORO (CAB. EN EL VADO)', '071053 - MOROMORO (CAB. EN EL VADO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(391, '0710', '071054', 'PIEDRAS', '071054 - PIEDRAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(392, '0710', '071055', 'SAN ROQUE (AMBROSIO MALDONADO)', '071055 - SAN ROQUE (AMBROSIO MALDONADO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(393, '0710', '071056', 'SARACAY', '071056 - SARACAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(394, '0711', '071150', 'PORTOVELO', '071150 - PORTOVELO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(395, '0711', '071151', 'CURTINCAPA', '071151 - CURTINCAPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(396, '0711', '071152', 'MORALES', '071152 - MORALES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(397, '0711', '071153', 'SALATÍ', '071153 - SALATÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(398, '0712', '071201', 'SANTA ROSA', '071201 - SANTA ROSA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(399, '0712', '071202', 'PUERTO JELÍ', '071202 - PUERTO JELÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(400, '0712', '071203', 'BALNEARIO JAMBELÍ (SATÉLITE)', '071203 - BALNEARIO JAMBELÍ (SATÉLITE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(401, '0712', '071204', 'JUMÓN (SATÉLITE)', '071204 - JUMÓN (SATÉLITE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(402, '0712', '071205', 'NUEVO SANTA ROSA', '071205 - NUEVO SANTA ROSA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(403, '0712', '071250', 'SANTA ROSA', '071250 - SANTA ROSA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(404, '0712', '071251', 'BELLAVISTA', '071251 - BELLAVISTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(405, '0712', '071252', 'JAMBELÍ', '071252 - JAMBELÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(406, '0712', '071253', 'LA AVANZADA', '071253 - LA AVANZADA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(407, '0712', '071254', 'SAN ANTONIO', '071254 - SAN ANTONIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(408, '0712', '071255', 'TORATA', '071255 - TORATA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(409, '0712', '071256', 'VICTORIA', '071256 - VICTORIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(410, '0712', '071257', 'BELLAMARÍA', '071257 - BELLAMARÍA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(411, '0713', '071350', 'ZARUMA', '071350 - ZARUMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(412, '0713', '071351', 'ABAÑÍN', '071351 - ABAÑÍN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(413, '0713', '071352', 'ARCAPAMBA', '071352 - ARCAPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(414, '0713', '071353', 'GUANAZÁN', '071353 - GUANAZÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(415, '0713', '071354', 'GUIZHAGUIÑA', '071354 - GUIZHAGUIÑA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(416, '0713', '071355', 'HUERTAS', '071355 - HUERTAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(417, '0713', '071356', 'MALVAS', '071356 - MALVAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(418, '0713', '071357', 'MULUNCAY GRANDE', '071357 - MULUNCAY GRANDE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(419, '0713', '071358', 'SINSAO', '071358 - SINSAO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(420, '0713', '071359', 'SALVIAS', '071359 - SALVIAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(421, '0714', '071401', 'LA VICTORIA', '071401 - LA VICTORIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(422, '0714', '071402', 'PLATANILLOS', '071402 - PLATANILLOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(423, '0714', '071403', 'VALLE HERMOSO', '071403 - VALLE HERMOSO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(424, '0714', '071450', 'LA VICTORIA', '071450 - LA VICTORIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(425, '0714', '071451', 'LA LIBERTAD', '071451 - LA LIBERTAD', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(426, '0714', '071452', 'EL PARAÍSO', '071452 - EL PARAÍSO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(427, '0714', '071453', 'SAN ISIDRO', '071453 - SAN ISIDRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(428, '0801', '080101', 'BARTOLOMÉ RUIZ (CÉSAR FRANCO CARRIÓN)', '080101 - BARTOLOMÉ RUIZ (CÉSAR FRANCO CARRIÓN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(429, '0801', '080102', '5 DE AGOSTO', '080102 - 5 DE AGOSTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(430, '0801', '080103', 'ESMERALDAS', '080103 - ESMERALDAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL);
INSERT INTO `m_parroquia` (`id_m_parroquia`, `codigo_canton`, `codigo_m_parroquia`, `nombre_m_parroquia`, `codigo_nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(431, '0801', '080104', 'LUIS TELLO (LAS PALMAS)', '080104 - LUIS TELLO (LAS PALMAS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(432, '0801', '080105', 'SIMÓN PLATA TORRES', '080105 - SIMÓN PLATA TORRES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(433, '0801', '080150', 'ESMERALDAS', '080150 - ESMERALDAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(434, '0801', '080151', 'ATACAMES', '080151 - ATACAMES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(435, '0801', '080152', 'CAMARONES (CAB. EN SAN VICENTE)', '080152 - CAMARONES (CAB. EN SAN VICENTE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(436, '0801', '080153', 'CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)', '080153 - CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(437, '0801', '080154', 'CHINCA', '080154 - CHINCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(438, '0801', '080155', 'CHONTADURO', '080155 - CHONTADURO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(439, '0801', '080156', 'CHUMUNDÉ', '080156 - CHUMUNDÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(440, '0801', '080157', 'LAGARTO', '080157 - LAGARTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(441, '0801', '080158', 'LA UNIÓN', '080158 - LA UNIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(442, '0801', '080159', 'MAJUA', '080159 - MAJUA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(443, '0801', '080160', 'MONTALVO (CAB. EN HORQUETA)', '080160 - MONTALVO (CAB. EN HORQUETA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(444, '0801', '080161', 'RÍO VERDE', '080161 - RÍO VERDE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(445, '0801', '080162', 'ROCAFUERTE', '080162 - ROCAFUERTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(446, '0801', '080163', 'SAN MATEO', '080163 - SAN MATEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(447, '0801', '080164', 'SÚA (CAB. EN LA BOCANA)', '080164 - SÚA (CAB. EN LA BOCANA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(448, '0801', '080165', 'TABIAZO', '080165 - TABIAZO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(449, '0801', '080166', 'TACHINA', '080166 - TACHINA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(450, '0801', '080167', 'TONCHIGÜE', '080167 - TONCHIGÜE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(451, '0801', '080168', 'VUELTA LARGA', '080168 - VUELTA LARGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(452, '0802', '080250', 'VALDEZ (LIMONES)', '080250 - VALDEZ (LIMONES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(453, '0802', '080251', 'ANCHAYACU', '080251 - ANCHAYACU', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(454, '0802', '080252', 'ATAHUALPA (CAB. EN CAMARONES)', '080252 - ATAHUALPA (CAB. EN CAMARONES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(455, '0802', '080253', 'BORBÓN', '080253 - BORBÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(456, '0802', '080254', 'LA TOLA', '080254 - LA TOLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(457, '0802', '080255', 'LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)', '080255 - LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(458, '0802', '080256', 'MALDONADO', '080256 - MALDONADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(459, '0802', '080257', 'PAMPANAL DE BOLÍVAR', '080257 - PAMPANAL DE BOLÍVAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(460, '0802', '080258', 'SAN FRANCISCO DE ONZOLE', '080258 - SAN FRANCISCO DE ONZOLE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(461, '0802', '080259', 'SANTO DOMINGO DE ONZOLE', '080259 - SANTO DOMINGO DE ONZOLE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(462, '0802', '080260', 'SELVA ALEGRE', '080260 - SELVA ALEGRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(463, '0802', '080261', 'TELEMBÍ', '080261 - TELEMBÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(464, '0802', '080262', 'COLÓN ELOY DEL MARÍA', '080262 - COLÓN ELOY DEL MARÍA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(465, '0802', '080263', 'SAN JOSÉ DE CAYAPAS', '080263 - SAN JOSÉ DE CAYAPAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(466, '0802', '080264', 'TIMBIRÉ', '080264 - TIMBIRÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(467, '0803', '080350', 'MUISNE', '080350 - MUISNE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(468, '0803', '080351', 'BOLÍVAR', '080351 - BOLÍVAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(469, '0803', '080352', 'DAULE', '080352 - DAULE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(470, '0803', '080353', 'GALERA', '080353 - GALERA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(471, '0803', '080354', 'QUINGUE (OLMEDO PERDOMO FRANCO)', '080354 - QUINGUE (OLMEDO PERDOMO FRANCO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(472, '0803', '080355', 'SALIMA', '080355 - SALIMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(473, '0803', '080356', 'SAN FRANCISCO', '080356 - SAN FRANCISCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(474, '0803', '080357', 'SAN GREGORIO', '080357 - SAN GREGORIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(475, '0803', '080358', 'SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA)', '080358 - SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(476, '0804', '080450', 'ROSA ZÁRATE (QUININDÉ)', '080450 - ROSA ZÁRATE (QUININDÉ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(477, '0804', '080451', 'CUBE', '080451 - CUBE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(478, '0804', '080452', 'CHURA (CHANCAMA) (CAB. EN EL YERBERO)', '080452 - CHURA (CHANCAMA) (CAB. EN EL YERBERO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(479, '0804', '080453', 'MALIMPIA', '080453 - MALIMPIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(480, '0804', '080454', 'VICHE', '080454 - VICHE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(481, '0804', '080455', 'LA UNIÓN', '080455 - LA UNIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(482, '0805', '080550', 'SAN LORENZO', '080550 - SAN LORENZO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(483, '0805', '080551', 'ALTO TAMBO (CAB. EN GUADUAL)', '080551 - ALTO TAMBO (CAB. EN GUADUAL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(484, '0805', '080552', 'ANCÓN (PICHANGAL) (CAB. EN PALMA REAL)', '080552 - ANCÓN (PICHANGAL) (CAB. EN PALMA REAL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(485, '0805', '080553', 'CALDERÓN', '080553 - CALDERÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(486, '0805', '080554', 'CARONDELET', '080554 - CARONDELET', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(487, '0805', '080555', '5 DE JUNIO (CAB. EN UIMBI)', '080555 - 5 DE JUNIO (CAB. EN UIMBI)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(488, '0805', '080556', 'CONCEPCIÓN', '080556 - CONCEPCIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(489, '0805', '080557', 'MATAJE (CAB. EN SANTANDER)', '080557 - MATAJE (CAB. EN SANTANDER)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(490, '0805', '080558', 'SAN JAVIER DE CACHAVÍ (CAB. EN SAN JAVIER)', '080558 - SAN JAVIER DE CACHAVÍ (CAB. EN SAN JAVIER)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(491, '0805', '080559', 'SANTA RITA', '080559 - SANTA RITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(492, '0805', '080560', 'TAMBILLO', '080560 - TAMBILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(493, '0805', '080561', 'TULULBÍ (CAB. EN RICAURTE)', '080561 - TULULBÍ (CAB. EN RICAURTE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(494, '0805', '080562', 'URBINA', '080562 - URBINA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(495, '0806', '080650', 'ATACAMES', '080650 - ATACAMES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(496, '0806', '080651', 'LA UNIÓN', '080651 - LA UNIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(497, '0806', '080652', 'SÚA (CAB. EN LA BOCANA)', '080652 - SÚA (CAB. EN LA BOCANA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(498, '0806', '080653', 'TONCHIGÜE', '080653 - TONCHIGÜE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(499, '0806', '080654', 'TONSUPA', '080654 - TONSUPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(500, '0807', '080750', 'RIOVERDE', '080750 - RIOVERDE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(501, '0807', '080751', 'CHONTADURO', '080751 - CHONTADURO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(502, '0807', '080752', 'CHUMUNDÉ', '080752 - CHUMUNDÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(503, '0807', '080753', 'LAGARTO', '080753 - LAGARTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(504, '0807', '080754', 'MONTALVO (CAB. EN HORQUETA)', '080754 - MONTALVO (CAB. EN HORQUETA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(505, '0807', '080755', 'ROCAFUERTE', '080755 - ROCAFUERTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(506, '0808', '080850', 'LA CONCORDIA', '080850 - LA CONCORDIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(507, '0808', '080851', 'MONTERREY', '080851 - MONTERREY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(508, '0808', '080852', 'LA VILLEGAS', '080852 - LA VILLEGAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(509, '0808', '080853', 'PLAN PILOTO', '080853 - PLAN PILOTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(510, '0901', '090101', 'AYACUCHO', '090101 - AYACUCHO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(511, '0901', '090102', 'BOLÍVAR (SAGRARIO)', '090102 - BOLÍVAR (SAGRARIO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(512, '0901', '090103', 'CARBO (CONCEPCIÓN)', '090103 - CARBO (CONCEPCIÓN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(513, '0901', '090104', 'FEBRES CORDERO', '090104 - FEBRES CORDERO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(514, '0901', '090105', 'GARCÍA MORENO', '090105 - GARCÍA MORENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(515, '0901', '090106', 'LETAMENDI', '090106 - LETAMENDI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(516, '0901', '090107', 'NUEVE DE OCTUBRE', '090107 - NUEVE DE OCTUBRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(517, '0901', '090108', 'OLMEDO (SAN ALEJO)', '090108 - OLMEDO (SAN ALEJO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(518, '0901', '090109', 'ROCA', '090109 - ROCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(519, '0901', '090110', 'ROCAFUERTE', '090110 - ROCAFUERTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(520, '0901', '090111', 'SUCRE', '090111 - SUCRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(521, '0901', '090112', 'TARQUI', '090112 - TARQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(522, '0901', '090113', 'URDANETA', '090113 - URDANETA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(523, '0901', '090114', 'XIMENA', '090114 - XIMENA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(524, '0901', '090115', 'PASCUALES', '090115 - PASCUALES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(525, '0901', '090150', 'GUAYAQUIL', '090150 - GUAYAQUIL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(526, '0901', '090151', 'CHONGÓN', '090151 - CHONGÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(527, '0901', '090152', 'JUAN GÓMEZ RENDÓN (PROGRESO)', '090152 - JUAN GÓMEZ RENDÓN (PROGRESO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(528, '0901', '090153', 'MORRO', '090153 - MORRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(529, '0901', '090154', 'PASCUALES', '090154 - PASCUALES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(530, '0901', '090155', 'PLAYAS (GRAL. VILLAMIL)', '090155 - PLAYAS (GRAL. VILLAMIL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(531, '0901', '090156', 'POSORJA', '090156 - POSORJA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(532, '0901', '090157', 'PUNÁ', '090157 - PUNÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(533, '0901', '090158', 'TENGUEL', '090158 - TENGUEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(534, '0902', '090250', 'ALFREDO BAQUERIZO MORENO (JUJÁN)', '090250 - ALFREDO BAQUERIZO MORENO (JUJÁN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(535, '0903', '090350', 'BALAO', '090350 - BALAO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(536, '0904', '090450', 'BALZAR', '090450 - BALZAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(537, '0905', '090550', 'COLIMES', '090550 - COLIMES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(538, '0905', '090551', 'SAN JACINTO', '090551 - SAN JACINTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(539, '0906', '090601', 'DAULE', '090601 - DAULE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(540, '0906', '090602', 'LA AURORA (SATÉLITE)', '090602 - LA AURORA (SATÉLITE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(541, '0906', '090603', 'BANIFE', '090603 - BANIFE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(542, '0906', '090604', 'EMILIANO CAICEDO MARCOS', '090604 - EMILIANO CAICEDO MARCOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(543, '0906', '090605', 'MAGRO', '090605 - MAGRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(544, '0906', '090606', 'PADRE JUAN BAUTISTA AGUIRRE', '090606 - PADRE JUAN BAUTISTA AGUIRRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(545, '0906', '090607', 'SANTA CLARA', '090607 - SANTA CLARA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(546, '0906', '090608', 'VICENTE PIEDRAHITA', '090608 - VICENTE PIEDRAHITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(547, '0906', '090650', 'DAULE', '090650 - DAULE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(548, '0906', '090651', 'ISIDRO AYORA (SOLEDAD)', '090651 - ISIDRO AYORA (SOLEDAD)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(549, '0906', '090652', 'JUAN BAUTISTA AGUIRRE (LOS TINTOS)', '090652 - JUAN BAUTISTA AGUIRRE (LOS TINTOS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(550, '0906', '090653', 'LAUREL', '090653 - LAUREL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(551, '0906', '090654', 'LIMONAL', '090654 - LIMONAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(552, '0906', '090655', 'LOMAS DE SARGENTILLO', '090655 - LOMAS DE SARGENTILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(553, '0906', '090656', 'LOS LOJAS (ENRIQUE BAQUERIZO MORENO)', '090656 - LOS LOJAS (ENRIQUE BAQUERIZO MORENO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(554, '0906', '090657', 'PIEDRAHITA (NOBOL)', '090657 - PIEDRAHITA (NOBOL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(555, '0907', '090701', 'ELOY ALFARO (DURÁN)', '090701 - ELOY ALFARO (DURÁN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(556, '0907', '090702', 'EL RECREO', '090702 - EL RECREO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(557, '0907', '090750', 'ELOY ALFARO (DURÁN)', '090750 - ELOY ALFARO (DURÁN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(558, '0908', '090850', 'VELASCO IBARRA (EL EMPALME)', '090850 - VELASCO IBARRA (EL EMPALME)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(559, '0908', '090851', 'GUAYAS (PUEBLO NUEVO)', '090851 - GUAYAS (PUEBLO NUEVO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(560, '0908', '090852', 'EL ROSARIO', '090852 - EL ROSARIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(561, '0909', '090950', 'EL TRIUNFO', '090950 - EL TRIUNFO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(562, '0910', '091050', 'MILAGRO', '091050 - MILAGRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(563, '0910', '091051', 'CHOBO', '091051 - CHOBO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(564, '0910', '091052', 'GENERAL ELIZALDE (BUCAY)', '091052 - GENERAL ELIZALDE (BUCAY)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(565, '0910', '091053', 'MARISCAL SUCRE (HUAQUES)', '091053 - MARISCAL SUCRE (HUAQUES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(566, '0910', '091054', 'ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)', '091054 - ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(567, '0911', '091150', 'NARANJAL', '091150 - NARANJAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(568, '0911', '091151', 'JESÚS MARÍA', '091151 - JESÚS MARÍA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(569, '0911', '091152', 'SAN CARLOS', '091152 - SAN CARLOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(570, '0911', '091153', 'SANTA ROSA DE FLANDES', '091153 - SANTA ROSA DE FLANDES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(571, '0911', '091154', 'TAURA', '091154 - TAURA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(572, '0912', '091250', 'NARANJITO', '091250 - NARANJITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(573, '0913', '091350', 'PALESTINA', '091350 - PALESTINA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(574, '0914', '091450', 'PEDRO CARBO', '091450 - PEDRO CARBO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(575, '0914', '091451', 'VALLE DE LA VIRGEN', '091451 - VALLE DE LA VIRGEN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(576, '0914', '091452', 'SABANILLA', '091452 - SABANILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(577, '0916', '091601', 'SAMBORONDÓN', '091601 - SAMBORONDÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(578, '0916', '091602', 'LA PUNTILLA (SATÉLITE)', '091602 - LA PUNTILLA (SATÉLITE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(579, '0916', '091650', 'SAMBORONDÓN', '091650 - SAMBORONDÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(580, '0916', '091651', 'TARIFA', '091651 - TARIFA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(581, '0918', '091850', 'SANTA LUCÍA', '091850 - SANTA LUCÍA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(582, '0919', '091901', 'BOCANA', '091901 - BOCANA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(583, '0919', '091902', 'CANDILEJOS', '091902 - CANDILEJOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(584, '0919', '091903', 'CENTRAL', '091903 - CENTRAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(585, '0919', '091904', 'PARAÍSO', '091904 - PARAÍSO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(586, '0919', '091905', 'SAN MATEO', '091905 - SAN MATEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(587, '0919', '091950', 'EL SALITRE (LAS RAMAS)', '091950 - EL SALITRE (LAS RAMAS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(588, '0919', '091951', 'GRAL. VERNAZA (DOS ESTEROS)', '091951 - GRAL. VERNAZA (DOS ESTEROS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(589, '0919', '091952', 'LA VICTORIA (ÑAUZA)', '091952 - LA VICTORIA (ÑAUZA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(590, '0919', '091953', 'JUNQUILLAL', '091953 - JUNQUILLAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(591, '0920', '092050', 'SAN JACINTO DE YAGUACHI', '092050 - SAN JACINTO DE YAGUACHI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(592, '0920', '092051', 'CRNEL. LORENZO DE GARAICOA (PEDREGAL)', '092051 - CRNEL. LORENZO DE GARAICOA (PEDREGAL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(593, '0920', '092052', 'CRNEL. MARCELINO MARIDUEÑA (SAN CARLOS)', '092052 - CRNEL. MARCELINO MARIDUEÑA (SAN CARLOS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(594, '0920', '092053', 'GRAL. PEDRO J. MONTERO (BOLICHE)', '092053 - GRAL. PEDRO J. MONTERO (BOLICHE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(595, '0920', '092054', 'SIMÓN BOLÍVAR', '092054 - SIMÓN BOLÍVAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(596, '0920', '092055', 'YAGUACHI VIEJO (CONE)', '092055 - YAGUACHI VIEJO (CONE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(597, '0920', '092056', 'VIRGEN DE FÁTIMA', '092056 - VIRGEN DE FÁTIMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(598, '0921', '092150', 'GENERAL VILLAMIL (PLAYAS)', '092150 - GENERAL VILLAMIL (PLAYAS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(599, '0922', '092250', 'SIMÓN BOLÍVAR', '092250 - SIMÓN BOLÍVAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(600, '0922', '092251', 'CRNEL.LORENZO DE GARAICOA (PEDREGAL)', '092251 - CRNEL.LORENZO DE GARAICOA (PEDREGAL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(601, '0923', '092350', 'CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)', '092350 - CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(602, '0924', '092450', 'LOMAS DE SARGENTILLO', '092450 - LOMAS DE SARGENTILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(603, '0924', '092451', 'ISIDRO AYORA (SOLEDAD)', '092451 - ISIDRO AYORA (SOLEDAD)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(604, '0925', '092550', 'NARCISA DE JESÚS', '092550 - NARCISA DE JESÚS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(605, '0927', '092750', 'GENERAL ANTONIO ELIZALDE (BUCAY)', '092750 - GENERAL ANTONIO ELIZALDE (BUCAY)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(606, '0928', '092850', 'ISIDRO AYORA', '092850 - ISIDRO AYORA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(607, '1001', '100101', 'CARANQUI', '100101 - CARANQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(608, '1001', '100102', 'GUAYAQUIL DE ALPACHACA', '100102 - GUAYAQUIL DE ALPACHACA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(609, '1001', '100103', 'SAGRARIO', '100103 - SAGRARIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(610, '1001', '100104', 'SAN FRANCISCO', '100104 - SAN FRANCISCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(611, '1001', '100105', 'LA DOLOROSA DEL PRIORATO', '100105 - LA DOLOROSA DEL PRIORATO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(612, '1001', '100150', 'SAN MIGUEL DE IBARRA', '100150 - SAN MIGUEL DE IBARRA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(613, '1001', '100151', 'AMBUQUÍ', '100151 - AMBUQUÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(614, '1001', '100152', 'ANGOCHAGUA', '100152 - ANGOCHAGUA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(615, '1001', '100153', 'CAROLINA', '100153 - CAROLINA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(616, '1001', '100154', 'LA ESPERANZA', '100154 - LA ESPERANZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(617, '1001', '100155', 'LITA', '100155 - LITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(618, '1001', '100156', 'SALINAS', '100156 - SALINAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(619, '1001', '100157', 'SAN ANTONIO', '100157 - SAN ANTONIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(620, '1002', '100201', 'ANDRADE MARÍN (LOURDES)', '100201 - ANDRADE MARÍN (LOURDES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(621, '1002', '100202', 'ATUNTAQUI', '100202 - ATUNTAQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(622, '1002', '100250', 'ATUNTAQUI', '100250 - ATUNTAQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(623, '1002', '100251', 'IMBAYA (SAN LUIS DE COBUENDO)', '100251 - IMBAYA (SAN LUIS DE COBUENDO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(624, '1002', '100252', 'SAN FRANCISCO DE NATABUELA', '100252 - SAN FRANCISCO DE NATABUELA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(625, '1002', '100253', 'SAN JOSÉ DE CHALTURA', '100253 - SAN JOSÉ DE CHALTURA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(626, '1002', '100254', 'SAN ROQUE', '100254 - SAN ROQUE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(627, '1003', '100301', 'SAGRARIO', '100301 - SAGRARIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(628, '1003', '100302', 'SAN FRANCISCO', '100302 - SAN FRANCISCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(629, '1003', '100350', 'COTACACHI', '100350 - COTACACHI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(630, '1003', '100351', 'APUELA', '100351 - APUELA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(631, '1003', '100352', 'GARCÍA MORENO (LLURIMAGUA)', '100352 - GARCÍA MORENO (LLURIMAGUA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(632, '1003', '100353', 'IMANTAG', '100353 - IMANTAG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(633, '1003', '100354', 'PEÑAHERRERA', '100354 - PEÑAHERRERA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(634, '1003', '100355', 'PLAZA GUTIÉRREZ (CALVARIO)', '100355 - PLAZA GUTIÉRREZ (CALVARIO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(635, '1003', '100356', 'QUIROGA', '100356 - QUIROGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(636, '1003', '100357', '6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)', '100357 - 6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(637, '1003', '100358', 'VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO', '100358 - VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(638, '1004', '100401', 'JORDÁN', '100401 - JORDÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(639, '1004', '100402', 'SAN LUIS', '100402 - SAN LUIS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(640, '1004', '100450', 'OTAVALO', '100450 - OTAVALO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(641, '1004', '100451', 'DR. MIGUEL EGAS CABEZAS (PEGUCHE)', '100451 - DR. MIGUEL EGAS CABEZAS (PEGUCHE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(642, '1004', '100452', 'EUGENIO ESPEJO (CALPAQUÍ)', '100452 - EUGENIO ESPEJO (CALPAQUÍ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(643, '1004', '100453', 'GONZÁLEZ SUÁREZ', '100453 - GONZÁLEZ SUÁREZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(644, '1004', '100454', 'PATAQUÍ', '100454 - PATAQUÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(645, '1004', '100455', 'SAN JOSÉ DE QUICHINCHE', '100455 - SAN JOSÉ DE QUICHINCHE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(646, '1004', '100456', 'SAN JUAN DE ILUMÁN', '100456 - SAN JUAN DE ILUMÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(647, '1004', '100457', 'SAN PABLO', '100457 - SAN PABLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(648, '1004', '100458', 'SAN RAFAEL', '100458 - SAN RAFAEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(649, '1004', '100459', 'SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)', '100459 - SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(650, '1005', '100550', 'PIMAMPIRO', '100550 - PIMAMPIRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(651, '1005', '100551', 'CHUGÁ', '100551 - CHUGÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(652, '1005', '100552', 'MARIANO ACOSTA', '100552 - MARIANO ACOSTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(653, '1005', '100553', 'SAN FRANCISCO DE SIGSIPAMBA', '100553 - SAN FRANCISCO DE SIGSIPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(654, '1006', '100650', 'URCUQUÍ CABECERA CANTONAL', '100650 - URCUQUÍ CABECERA CANTONAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(655, '1006', '100651', 'CAHUASQUÍ', '100651 - CAHUASQUÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(656, '1006', '100652', 'LA MERCED DE BUENOS AIRES', '100652 - LA MERCED DE BUENOS AIRES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(657, '1006', '100653', 'PABLO ARENAS', '100653 - PABLO ARENAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(658, '1006', '100654', 'SAN BLAS', '100654 - SAN BLAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(659, '1006', '100655', 'TUMBABIRO', '100655 - TUMBABIRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(660, '1101', '110101', 'EL SAGRARIO', '110101 - EL SAGRARIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(661, '1101', '110102', 'SAN SEBASTIÁN', '110102 - SAN SEBASTIÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(662, '1101', '110103', 'SUCRE', '110103 - SUCRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(663, '1101', '110104', 'VALLE', '110104 - VALLE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(664, '1101', '110150', 'LOJA', '110150 - LOJA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(665, '1101', '110151', 'CHANTACO', '110151 - CHANTACO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(666, '1101', '110152', 'CHUQUIRIBAMBA', '110152 - CHUQUIRIBAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(667, '1101', '110153', 'EL CISNE', '110153 - EL CISNE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(668, '1101', '110154', 'GUALEL', '110154 - GUALEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(669, '1101', '110155', 'JIMBILLA', '110155 - JIMBILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(670, '1101', '110156', 'MALACATOS (VALLADOLID)', '110156 - MALACATOS (VALLADOLID)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(671, '1101', '110157', 'SAN LUCAS', '110157 - SAN LUCAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(672, '1101', '110158', 'SAN PEDRO DE VILCABAMBA', '110158 - SAN PEDRO DE VILCABAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(673, '1101', '110159', 'SANTIAGO', '110159 - SANTIAGO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(674, '1101', '110160', 'TAQUIL (MIGUEL RIOFRÍO)', '110160 - TAQUIL (MIGUEL RIOFRÍO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(675, '1101', '110161', 'VILCABAMBA (VICTORIA)', '110161 - VILCABAMBA (VICTORIA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(676, '1101', '110162', 'YANGANA (ARSENIO CASTILLO)', '110162 - YANGANA (ARSENIO CASTILLO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(677, '1101', '110163', 'QUINARA', '110163 - QUINARA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(678, '1102', '110201', 'CARIAMANGA', '110201 - CARIAMANGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(679, '1102', '110202', 'CHILE', '110202 - CHILE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(680, '1102', '110203', 'SAN VICENTE', '110203 - SAN VICENTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(681, '1102', '110250', 'CARIAMANGA', '110250 - CARIAMANGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(682, '1102', '110251', 'COLAISACA', '110251 - COLAISACA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(683, '1102', '110252', 'EL LUCERO', '110252 - EL LUCERO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(684, '1102', '110253', 'UTUANA', '110253 - UTUANA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(685, '1102', '110254', 'SANGUILLÍN', '110254 - SANGUILLÍN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(686, '1103', '110301', 'CATAMAYO', '110301 - CATAMAYO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(687, '1103', '110302', 'SAN JOSÉ', '110302 - SAN JOSÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(688, '1103', '110350', 'CATAMAYO (LA TOMA)', '110350 - CATAMAYO (LA TOMA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(689, '1103', '110351', 'EL TAMBO', '110351 - EL TAMBO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(690, '1103', '110352', 'GUAYQUICHUMA', '110352 - GUAYQUICHUMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(691, '1103', '110353', 'SAN PEDRO DE LA BENDITA', '110353 - SAN PEDRO DE LA BENDITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(692, '1103', '110354', 'ZAMBI', '110354 - ZAMBI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(693, '1104', '110450', 'CELICA', '110450 - CELICA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(694, '1104', '110451', 'CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)', '110451 - CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(695, '1104', '110452', 'CHAQUINAL', '110452 - CHAQUINAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(696, '1104', '110453', '12 DE DICIEMBRE (CAB. EN ACHIOTES)', '110453 - 12 DE DICIEMBRE (CAB. EN ACHIOTES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(697, '1104', '110454', 'PINDAL (FEDERICO PÁEZ)', '110454 - PINDAL (FEDERICO PÁEZ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(698, '1104', '110455', 'POZUL (SAN JUAN DE POZUL)', '110455 - POZUL (SAN JUAN DE POZUL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(699, '1104', '110456', 'SABANILLA', '110456 - SABANILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(700, '1104', '110457', 'TNTE. MAXIMILIANO RODRÍGUEZ LOAIZA', '110457 - TNTE. MAXIMILIANO RODRÍGUEZ LOAIZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(701, '1105', '110550', 'CHAGUARPAMBA', '110550 - CHAGUARPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(702, '1105', '110551', 'BUENAVISTA', '110551 - BUENAVISTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(703, '1105', '110552', 'EL ROSARIO', '110552 - EL ROSARIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(704, '1105', '110553', 'SANTA RUFINA', '110553 - SANTA RUFINA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(705, '1105', '110554', 'AMARILLOS', '110554 - AMARILLOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(706, '1106', '110650', 'AMALUZA', '110650 - AMALUZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(707, '1106', '110651', 'BELLAVISTA', '110651 - BELLAVISTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(708, '1106', '110652', 'JIMBURA', '110652 - JIMBURA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(709, '1106', '110653', 'SANTA TERESITA', '110653 - SANTA TERESITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(710, '1106', '110654', '27 DE ABRIL (CAB. EN LA NARANJA)', '110654 - 27 DE ABRIL (CAB. EN LA NARANJA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(711, '1106', '110655', 'EL INGENIO', '110655 - EL INGENIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(712, '1106', '110656', 'EL AIRO', '110656 - EL AIRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(713, '1107', '110750', 'GONZANAMÁ', '110750 - GONZANAMÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(714, '1107', '110751', 'CHANGAIMINA (LA LIBERTAD)', '110751 - CHANGAIMINA (LA LIBERTAD)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(715, '1107', '110752', 'FUNDOCHAMBA', '110752 - FUNDOCHAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(716, '1107', '110753', 'NAMBACOLA', '110753 - NAMBACOLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(717, '1107', '110754', 'PURUNUMA (EGUIGUREN)', '110754 - PURUNUMA (EGUIGUREN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(718, '1107', '110755', 'QUILANGA (LA PAZ)', '110755 - QUILANGA (LA PAZ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(719, '1107', '110756', 'SACAPALCA', '110756 - SACAPALCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(720, '1107', '110757', 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)', '110757 - SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(721, '1108', '110801', 'GENERAL ELOY ALFARO (SAN SEBASTIÁN)', '110801 - GENERAL ELOY ALFARO (SAN SEBASTIÁN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(722, '1108', '110802', 'MACARÁ (MANUEL ENRIQUE RENGEL SUQUILANDA)', '110802 - MACARÁ (MANUEL ENRIQUE RENGEL SUQUILANDA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(723, '1108', '110850', 'MACARÁ', '110850 - MACARÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(724, '1108', '110851', 'LARAMA', '110851 - LARAMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(725, '1108', '110852', 'LA VICTORIA', '110852 - LA VICTORIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(726, '1108', '110853', 'SABIANGO (LA CAPILLA)', '110853 - SABIANGO (LA CAPILLA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(727, '1109', '110901', 'CATACOCHA', '110901 - CATACOCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(728, '1109', '110902', 'LOURDES', '110902 - LOURDES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(729, '1109', '110950', 'CATACOCHA', '110950 - CATACOCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(730, '1109', '110951', 'CANGONAMÁ', '110951 - CANGONAMÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(731, '1109', '110952', 'GUACHANAMÁ', '110952 - GUACHANAMÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(732, '1109', '110953', 'LA TINGUE', '110953 - LA TINGUE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(733, '1109', '110954', 'LAURO GUERRERO', '110954 - LAURO GUERRERO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(734, '1109', '110955', 'OLMEDO (SANTA BÁRBARA)', '110955 - OLMEDO (SANTA BÁRBARA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(735, '1109', '110956', 'ORIANGA', '110956 - ORIANGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(736, '1109', '110957', 'SAN ANTONIO', '110957 - SAN ANTONIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(737, '1109', '110958', 'CASANGA', '110958 - CASANGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(738, '1109', '110959', 'YAMANA', '110959 - YAMANA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(739, '1110', '111050', 'ALAMOR', '111050 - ALAMOR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(740, '1110', '111051', 'CIANO', '111051 - CIANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(741, '1110', '111052', 'EL ARENAL', '111052 - EL ARENAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(742, '1110', '111053', 'EL LIMO (MARIANA DE JESÚS)', '111053 - EL LIMO (MARIANA DE JESÚS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(743, '1110', '111054', 'MERCADILLO', '111054 - MERCADILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(744, '1110', '111055', 'VICENTINO', '111055 - VICENTINO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(745, '1111', '111150', 'SARAGURO', '111150 - SARAGURO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(746, '1111', '111151', 'EL PARAÍSO DE CELÉN', '111151 - EL PARAÍSO DE CELÉN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(747, '1111', '111152', 'EL TABLÓN', '111152 - EL TABLÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(748, '1111', '111153', 'LLUZHAPA', '111153 - LLUZHAPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(749, '1111', '111154', 'MANÚ', '111154 - MANÚ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(750, '1111', '111155', 'SAN ANTONIO DE QUMBE (CUMBE)', '111155 - SAN ANTONIO DE QUMBE (CUMBE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(751, '1111', '111156', 'SAN PABLO DE TENTA', '111156 - SAN PABLO DE TENTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(752, '1111', '111157', 'SAN SEBASTIÁN DE YÚLUC', '111157 - SAN SEBASTIÁN DE YÚLUC', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(753, '1111', '111158', 'SELVA ALEGRE', '111158 - SELVA ALEGRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(754, '1111', '111159', 'URDANETA (PAQUISHAPA)', '111159 - URDANETA (PAQUISHAPA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(755, '1111', '111160', 'SUMAYPAMBA', '111160 - SUMAYPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(756, '1112', '111250', 'SOZORANGA', '111250 - SOZORANGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(757, '1112', '111251', 'NUEVA FÁTIMA', '111251 - NUEVA FÁTIMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(758, '1112', '111252', 'TACAMOROS', '111252 - TACAMOROS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(759, '1113', '111350', 'ZAPOTILLO', '111350 - ZAPOTILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(760, '1113', '111351', 'MANGAHURCO (CAZADEROS)', '111351 - MANGAHURCO (CAZADEROS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(761, '1113', '111352', 'GARZAREAL', '111352 - GARZAREAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(762, '1113', '111353', 'LIMONES', '111353 - LIMONES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(763, '1113', '111354', 'PALETILLAS', '111354 - PALETILLAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(764, '1113', '111355', 'BOLASPAMBA', '111355 - BOLASPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(765, '1114', '111450', 'PINDAL', '111450 - PINDAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(766, '1114', '111451', 'CHAQUINAL', '111451 - CHAQUINAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(767, '1114', '111452', '12 DE DICIEMBRE (CAB.EN ACHIOTES)', '111452 - 12 DE DICIEMBRE (CAB.EN ACHIOTES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(768, '1114', '111453', 'MILAGROS', '111453 - MILAGROS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(769, '1115', '111550', 'QUILANGA', '111550 - QUILANGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(770, '1115', '111551', 'FUNDOCHAMBA', '111551 - FUNDOCHAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(771, '1115', '111552', 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)', '111552 - SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(772, '1116', '111650', 'OLMEDO', '111650 - OLMEDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(773, '1116', '111651', 'LA TINGUE', '111651 - LA TINGUE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(774, '1201', '120101', 'CLEMENTE BAQUERIZO', '120101 - CLEMENTE BAQUERIZO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(775, '1201', '120102', 'DR. CAMILO PONCE', '120102 - DR. CAMILO PONCE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(776, '1201', '120103', 'BARREIRO', '120103 - BARREIRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(777, '1201', '120104', 'EL SALTO', '120104 - EL SALTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(778, '1201', '120150', 'BABAHOYO', '120150 - BABAHOYO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(779, '1201', '120151', 'BARREIRO (SANTA RITA)', '120151 - BARREIRO (SANTA RITA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(780, '1201', '120152', 'CARACOL', '120152 - CARACOL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(781, '1201', '120153', 'FEBRES CORDERO (LAS JUNTAS)', '120153 - FEBRES CORDERO (LAS JUNTAS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(782, '1201', '120154', 'PIMOCHA', '120154 - PIMOCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(783, '1201', '120155', 'LA UNIÓN', '120155 - LA UNIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(784, '1202', '120250', 'BABA', '120250 - BABA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(785, '1202', '120251', 'GUARE', '120251 - GUARE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(786, '1202', '120252', 'ISLA DE BEJUCAL', '120252 - ISLA DE BEJUCAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(787, '1203', '120350', 'MONTALVO', '120350 - MONTALVO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(788, '1204', '120450', 'PUEBLOVIEJO', '120450 - PUEBLOVIEJO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(789, '1204', '120451', 'PUERTO PECHICHE', '120451 - PUERTO PECHICHE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(790, '1204', '120452', 'SAN JUAN', '120452 - SAN JUAN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(791, '1205', '120501', 'QUEVEDO', '120501 - QUEVEDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(792, '1205', '120502', 'SAN CAMILO', '120502 - SAN CAMILO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(793, '1205', '120503', 'SAN JOSÉ', '120503 - SAN JOSÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(794, '1205', '120504', 'GUAYACÁN', '120504 - GUAYACÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(795, '1205', '120505', 'NICOLÁS INFANTE DÍAZ', '120505 - NICOLÁS INFANTE DÍAZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(796, '1205', '120506', 'SAN CRISTÓBAL', '120506 - SAN CRISTÓBAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(797, '1205', '120507', 'SIETE DE OCTUBRE', '120507 - SIETE DE OCTUBRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(798, '1205', '120508', '24 DE MAYO', '120508 - 24 DE MAYO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(799, '1205', '120509', 'VENUS DEL RÍO QUEVEDO', '120509 - VENUS DEL RÍO QUEVEDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(800, '1205', '120510', 'VIVA ALFARO', '120510 - VIVA ALFARO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(801, '1205', '120550', 'QUEVEDO', '120550 - QUEVEDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(802, '1205', '120551', 'BUENA FÉ', '120551 - BUENA FÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(803, '1205', '120552', 'MOCACHE', '120552 - MOCACHE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(804, '1205', '120553', 'SAN CARLOS', '120553 - SAN CARLOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(805, '1205', '120554', 'VALENCIA', '120554 - VALENCIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(806, '1205', '120555', 'LA ESPERANZA', '120555 - LA ESPERANZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(807, '1206', '120650', 'CATARAMA', '120650 - CATARAMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(808, '1206', '120651', 'RICAURTE', '120651 - RICAURTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(809, '1207', '120701', '10 DE NOVIEMBRE', '120701 - 10 DE NOVIEMBRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(810, '1207', '120750', 'VENTANAS', '120750 - VENTANAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(811, '1207', '120751', 'QUINSALOMA', '120751 - QUINSALOMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(812, '1207', '120752', 'ZAPOTAL', '120752 - ZAPOTAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(813, '1207', '120753', 'CHACARITA', '120753 - CHACARITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(814, '1207', '120754', 'LOS ÁNGELES', '120754 - LOS ÁNGELES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(815, '1208', '120850', 'VINCES', '120850 - VINCES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(816, '1208', '120851', 'ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)', '120851 - ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(817, '1208', '120852', 'PALENQUE', '120852 - PALENQUE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(818, '1209', '120950', 'PALENQUE', '120950 - PALENQUE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(819, '1210', '121001', 'SAN JACINTO DE BUENA FÉ', '121001 - SAN JACINTO DE BUENA FÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(820, '1210', '121002', '7 DE AGOSTO', '121002 - 7 DE AGOSTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(821, '1210', '121003', '11 DE OCTUBRE', '121003 - 11 DE OCTUBRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(822, '1210', '121050', 'SAN JACINTO DE BUENA FÉ', '121050 - SAN JACINTO DE BUENA FÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(823, '1210', '121051', 'PATRICIA PILAR', '121051 - PATRICIA PILAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(824, '1211', '121150', 'VALENCIA', '121150 - VALENCIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(825, '1212', '121250', 'MOCACHE', '121250 - MOCACHE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(826, '1213', '121350', 'QUINSALOMA', '121350 - QUINSALOMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(827, '1301', '130101', 'PORTOVIEJO', '130101 - PORTOVIEJO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(828, '1301', '130102', '12 DE MARZO', '130102 - 12 DE MARZO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(829, '1301', '130103', 'COLÓN', '130103 - COLÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(830, '1301', '130104', 'PICOAZÁ', '130104 - PICOAZÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(831, '1301', '130105', 'SAN PABLO', '130105 - SAN PABLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(832, '1301', '130106', 'ANDRÉS DE VERA', '130106 - ANDRÉS DE VERA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(833, '1301', '130107', 'FRANCISCO PACHECO', '130107 - FRANCISCO PACHECO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(834, '1301', '130108', '18 DE OCTUBRE', '130108 - 18 DE OCTUBRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(835, '1301', '130109', 'SIMÓN BOLÍVAR', '130109 - SIMÓN BOLÍVAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(836, '1301', '130150', 'PORTOVIEJO', '130150 - PORTOVIEJO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(837, '1301', '130151', 'ABDÓN CALDERÓN (SAN FRANCISCO)', '130151 - ABDÓN CALDERÓN (SAN FRANCISCO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(838, '1301', '130152', 'ALHAJUELA (BAJO GRANDE)', '130152 - ALHAJUELA (BAJO GRANDE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(839, '1301', '130153', 'CRUCITA', '130153 - CRUCITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(840, '1301', '130154', 'PUEBLO NUEVO', '130154 - PUEBLO NUEVO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(841, '1301', '130155', 'RIOCHICO (RÍO CHICO)', '130155 - RIOCHICO (RÍO CHICO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(842, '1301', '130156', 'SAN PLÁCIDO', '130156 - SAN PLÁCIDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(843, '1301', '130157', 'CHIRIJOS', '130157 - CHIRIJOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(844, '1302', '130250', 'CALCETA', '130250 - CALCETA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL);
INSERT INTO `m_parroquia` (`id_m_parroquia`, `codigo_canton`, `codigo_m_parroquia`, `nombre_m_parroquia`, `codigo_nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(845, '1302', '130251', 'MEMBRILLO', '130251 - MEMBRILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(846, '1302', '130252', 'QUIROGA', '130252 - QUIROGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(847, '1303', '130301', 'CHONE', '130301 - CHONE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(848, '1303', '130302', 'SANTA RITA', '130302 - SANTA RITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(849, '1303', '130350', 'CHONE', '130350 - CHONE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(850, '1303', '130351', 'BOYACÁ', '130351 - BOYACÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(851, '1303', '130352', 'CANUTO', '130352 - CANUTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(852, '1303', '130353', 'CONVENTO', '130353 - CONVENTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(853, '1303', '130354', 'CHIBUNGA', '130354 - CHIBUNGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(854, '1303', '130355', 'ELOY ALFARO', '130355 - ELOY ALFARO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(855, '1303', '130356', 'RICAURTE', '130356 - RICAURTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(856, '1303', '130357', 'SAN ANTONIO', '130357 - SAN ANTONIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(857, '1304', '130401', 'EL CARMEN', '130401 - EL CARMEN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(858, '1304', '130402', '4 DE DICIEMBRE', '130402 - 4 DE DICIEMBRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(859, '1304', '130450', 'EL CARMEN', '130450 - EL CARMEN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(860, '1304', '130451', 'WILFRIDO LOOR MOREIRA (MAICITO)', '130451 - WILFRIDO LOOR MOREIRA (MAICITO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(861, '1304', '130452', 'SAN PEDRO DE SUMA', '130452 - SAN PEDRO DE SUMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(862, '1305', '130550', 'FLAVIO ALFARO', '130550 - FLAVIO ALFARO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(863, '1305', '130551', 'SAN FRANCISCO DE NOVILLO (CAB. EN', '130551 - SAN FRANCISCO DE NOVILLO (CAB. EN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(864, '1305', '130552', 'ZAPALLO', '130552 - ZAPALLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(865, '1306', '130601', 'DR. MIGUEL MORÁN LUCIO', '130601 - DR. MIGUEL MORÁN LUCIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(866, '1306', '130602', 'MANUEL INOCENCIO PARRALES Y GUALE', '130602 - MANUEL INOCENCIO PARRALES Y GUALE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(867, '1306', '130603', 'SAN LORENZO DE JIPIJAPA', '130603 - SAN LORENZO DE JIPIJAPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(868, '1306', '130650', 'JIPIJAPA', '130650 - JIPIJAPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(869, '1306', '130651', 'AMÉRICA', '130651 - AMÉRICA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(870, '1306', '130652', 'EL ANEGADO (CAB. EN ELOY ALFARO)', '130652 - EL ANEGADO (CAB. EN ELOY ALFARO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(871, '1306', '130653', 'JULCUY', '130653 - JULCUY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(872, '1306', '130654', 'LA UNIÓN', '130654 - LA UNIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(873, '1306', '130655', 'MACHALILLA', '130655 - MACHALILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(874, '1306', '130656', 'MEMBRILLAL', '130656 - MEMBRILLAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(875, '1306', '130657', 'PEDRO PABLO GÓMEZ', '130657 - PEDRO PABLO GÓMEZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(876, '1306', '130658', 'PUERTO DE CAYO', '130658 - PUERTO DE CAYO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(877, '1306', '130659', 'PUERTO LÓPEZ', '130659 - PUERTO LÓPEZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(878, '1307', '130750', 'JUNÍN', '130750 - JUNÍN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(879, '1308', '130801', 'LOS ESTEROS', '130801 - LOS ESTEROS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(880, '1308', '130802', 'MANTA', '130802 - MANTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(881, '1308', '130803', 'SAN MATEO', '130803 - SAN MATEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(882, '1308', '130804', 'TARQUI', '130804 - TARQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(883, '1308', '130805', 'ELOY ALFARO', '130805 - ELOY ALFARO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(884, '1308', '130850', 'MANTA', '130850 - MANTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(885, '1308', '130851', 'SAN LORENZO', '130851 - SAN LORENZO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(886, '1308', '130852', 'SANTA MARIANITA (BOCA DE PACOCHE)', '130852 - SANTA MARIANITA (BOCA DE PACOCHE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(887, '1309', '130901', 'ANIBAL SAN ANDRÉS', '130901 - ANIBAL SAN ANDRÉS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(888, '1309', '130902', 'MONTECRISTI', '130902 - MONTECRISTI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(889, '1309', '130903', 'EL COLORADO', '130903 - EL COLORADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(890, '1309', '130904', 'GENERAL ELOY ALFARO', '130904 - GENERAL ELOY ALFARO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(891, '1309', '130905', 'LEONIDAS PROAÑO', '130905 - LEONIDAS PROAÑO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(892, '1309', '130950', 'MONTECRISTI', '130950 - MONTECRISTI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(893, '1309', '130951', 'JARAMIJÓ', '130951 - JARAMIJÓ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(894, '1309', '130952', 'LA PILA', '130952 - LA PILA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(895, '1310', '131050', 'PAJÁN', '131050 - PAJÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(896, '1310', '131051', 'CAMPOZANO (LA PALMA DE PAJÁN)', '131051 - CAMPOZANO (LA PALMA DE PAJÁN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(897, '1310', '131052', 'CASCOL', '131052 - CASCOL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(898, '1310', '131053', 'GUALE', '131053 - GUALE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(899, '1310', '131054', 'LASCANO', '131054 - LASCANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(900, '1311', '131150', 'PICHINCHA', '131150 - PICHINCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(901, '1311', '131151', 'BARRAGANETE', '131151 - BARRAGANETE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(902, '1311', '131152', 'SAN SEBASTIÁN', '131152 - SAN SEBASTIÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(903, '1312', '131250', 'ROCAFUERTE', '131250 - ROCAFUERTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(904, '1313', '131301', 'SANTA ANA', '131301 - SANTA ANA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(905, '1313', '131302', 'LODANA', '131302 - LODANA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(906, '1313', '131350', 'SANTA ANA DE VUELTA LARGA', '131350 - SANTA ANA DE VUELTA LARGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(907, '1313', '131351', 'AYACUCHO', '131351 - AYACUCHO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(908, '1313', '131352', 'HONORATO VÁSQUEZ (CAB. EN VÁSQUEZ)', '131352 - HONORATO VÁSQUEZ (CAB. EN VÁSQUEZ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(909, '1313', '131353', 'LA UNIÓN', '131353 - LA UNIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(910, '1313', '131354', 'OLMEDO', '131354 - OLMEDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(911, '1313', '131355', 'SAN PABLO (CAB. EN PUEBLO NUEVO)', '131355 - SAN PABLO (CAB. EN PUEBLO NUEVO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(912, '1314', '131401', 'BAHÍA DE CARÁQUEZ', '131401 - BAHÍA DE CARÁQUEZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(913, '1314', '131402', 'LEONIDAS PLAZA GUTIÉRREZ', '131402 - LEONIDAS PLAZA GUTIÉRREZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(914, '1314', '131450', 'BAHÍA DE CARÁQUEZ', '131450 - BAHÍA DE CARÁQUEZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(915, '1314', '131451', 'CANOA', '131451 - CANOA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(916, '1314', '131452', 'COJIMÍES', '131452 - COJIMÍES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(917, '1314', '131453', 'CHARAPOTÓ', '131453 - CHARAPOTÓ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(918, '1314', '131454', '10 DE AGOSTO', '131454 - 10 DE AGOSTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(919, '1314', '131455', 'JAMA', '131455 - JAMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(920, '1314', '131456', 'PEDERNALES', '131456 - PEDERNALES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(921, '1314', '131457', 'SAN ISIDRO', '131457 - SAN ISIDRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(922, '1314', '131458', 'SAN VICENTE', '131458 - SAN VICENTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(923, '1315', '131550', 'TOSAGUA', '131550 - TOSAGUA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(924, '1315', '131551', 'BACHILLERO', '131551 - BACHILLERO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(925, '1315', '131552', 'ANGEL PEDRO GILER (LA ESTANCILLA)', '131552 - ANGEL PEDRO GILER (LA ESTANCILLA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(926, '1316', '131650', 'SUCRE', '131650 - SUCRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(927, '1316', '131651', 'BELLAVISTA', '131651 - BELLAVISTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(928, '1316', '131652', 'NOBOA', '131652 - NOBOA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(929, '1316', '131653', 'ARQ. SIXTO DURÁN BALLÉN', '131653 - ARQ. SIXTO DURÁN BALLÉN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(930, '1317', '131750', 'PEDERNALES', '131750 - PEDERNALES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(931, '1317', '131751', 'COJIMÍES', '131751 - COJIMÍES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(932, '1317', '131752', '10 DE AGOSTO', '131752 - 10 DE AGOSTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(933, '1317', '131753', 'ATAHUALPA', '131753 - ATAHUALPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(934, '1318', '131850', 'OLMEDO', '131850 - OLMEDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(935, '1319', '131950', 'PUERTO LÓPEZ', '131950 - PUERTO LÓPEZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(936, '1319', '131951', 'MACHALILLA', '131951 - MACHALILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(937, '1319', '131952', 'SALANGO', '131952 - SALANGO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(938, '1320', '132050', 'JAMA', '132050 - JAMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(939, '1321', '132150', 'JARAMIJÓ', '132150 - JARAMIJÓ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(940, '1322', '132250', 'SAN VICENTE', '132250 - SAN VICENTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(941, '1322', '132251', 'CANOA', '132251 - CANOA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(942, '1401', '140150', 'MACAS', '140150 - MACAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(943, '1401', '140151', 'ALSHI (CAB. EN 9 DE OCTUBRE)', '140151 - ALSHI (CAB. EN 9 DE OCTUBRE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(944, '1401', '140152', 'CHIGUAZA', '140152 - CHIGUAZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(945, '1401', '140153', 'GENERAL PROAÑO', '140153 - GENERAL PROAÑO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(946, '1401', '140154', 'HUASAGA (CAB.EN WAMPUIK)', '140154 - HUASAGA (CAB.EN WAMPUIK)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(947, '1401', '140155', 'MACUMA', '140155 - MACUMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(948, '1401', '140156', 'SAN ISIDRO', '140156 - SAN ISIDRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(949, '1401', '140157', 'SEVILLA DON BOSCO', '140157 - SEVILLA DON BOSCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(950, '1401', '140158', 'SINAÍ', '140158 - SINAÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(951, '1401', '140159', 'TAISHA', '140159 - TAISHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(952, '1401', '140160', 'ZUÑA (ZÚÑAC)', '140160 - ZUÑA (ZÚÑAC)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(953, '1401', '140161', 'TUUTINENTZA', '140161 - TUUTINENTZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(954, '1401', '140162', 'CUCHAENTZA', '140162 - CUCHAENTZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(955, '1401', '140163', 'SAN JOSÉ DE MORONA', '140163 - SAN JOSÉ DE MORONA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(956, '1401', '140164', 'RÍO BLANCO', '140164 - RÍO BLANCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(957, '1402', '140201', 'GUALAQUIZA', '140201 - GUALAQUIZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(958, '1402', '140202', 'MERCEDES MOLINA', '140202 - MERCEDES MOLINA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(959, '1402', '140250', 'GUALAQUIZA', '140250 - GUALAQUIZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(960, '1402', '140251', 'AMAZONAS (ROSARIO DE CUYES)', '140251 - AMAZONAS (ROSARIO DE CUYES)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(961, '1402', '140252', 'BERMEJOS', '140252 - BERMEJOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(962, '1402', '140253', 'BOMBOIZA', '140253 - BOMBOIZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(963, '1402', '140254', 'CHIGÜINDA', '140254 - CHIGÜINDA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(964, '1402', '140255', 'EL ROSARIO', '140255 - EL ROSARIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(965, '1402', '140256', 'NUEVA TARQUI', '140256 - NUEVA TARQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(966, '1402', '140257', 'SAN MIGUEL DE CUYES', '140257 - SAN MIGUEL DE CUYES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(967, '1402', '140258', 'EL IDEAL', '140258 - EL IDEAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(968, '1403', '140350', 'GENERAL LEONIDAS PLAZA GUTIÉRREZ (LIMÓN)', '140350 - GENERAL LEONIDAS PLAZA GUTIÉRREZ (LIMÓN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(969, '1403', '140351', 'INDANZA', '140351 - INDANZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(970, '1403', '140352', 'PAN DE AZÚCAR', '140352 - PAN DE AZÚCAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(971, '1403', '140353', 'SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO', '140353 - SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(972, '1403', '140354', 'SAN CARLOS DE LIMÓN (SAN CARLOS DEL', '140354 - SAN CARLOS DE LIMÓN (SAN CARLOS DEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(973, '1403', '140355', 'SAN JUAN BOSCO', '140355 - SAN JUAN BOSCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(974, '1403', '140356', 'SAN MIGUEL DE CONCHAY', '140356 - SAN MIGUEL DE CONCHAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(975, '1403', '140357', 'SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)', '140357 - SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(976, '1403', '140358', 'YUNGANZA (CAB. EN EL ROSARIO)', '140358 - YUNGANZA (CAB. EN EL ROSARIO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(977, '1404', '140450', 'PALORA (METZERA)', '140450 - PALORA (METZERA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(978, '1404', '140451', 'ARAPICOS', '140451 - ARAPICOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(979, '1404', '140452', 'CUMANDÁ (CAB. EN COLONIA AGRÍCOLA SEVILLA DEL ORO)', '140452 - CUMANDÁ (CAB. EN COLONIA AGRÍCOLA SEVILLA DEL ORO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(980, '1404', '140453', 'HUAMBOYA', '140453 - HUAMBOYA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(981, '1404', '140454', 'SANGAY (CAB. EN NAYAMANACA)', '140454 - SANGAY (CAB. EN NAYAMANACA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(982, '1405', '140550', 'SANTIAGO DE MÉNDEZ', '140550 - SANTIAGO DE MÉNDEZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(983, '1405', '140551', 'COPAL', '140551 - COPAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(984, '1405', '140552', 'CHUPIANZA', '140552 - CHUPIANZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(985, '1405', '140553', 'PATUCA', '140553 - PATUCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(986, '1405', '140554', 'SAN LUIS DE EL ACHO (CAB. EN EL ACHO)', '140554 - SAN LUIS DE EL ACHO (CAB. EN EL ACHO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(987, '1405', '140555', 'SANTIAGO', '140555 - SANTIAGO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(988, '1405', '140556', 'TAYUZA', '140556 - TAYUZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(989, '1405', '140557', 'SAN FRANCISCO DE CHINIMBIMI', '140557 - SAN FRANCISCO DE CHINIMBIMI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(990, '1406', '140650', 'SUCÚA', '140650 - SUCÚA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(991, '1406', '140651', 'ASUNCIÓN', '140651 - ASUNCIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(992, '1406', '140652', 'HUAMBI', '140652 - HUAMBI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(993, '1406', '140653', 'LOGROÑO', '140653 - LOGROÑO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(994, '1406', '140654', 'YAUPI', '140654 - YAUPI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(995, '1406', '140655', 'SANTA MARIANITA DE JESÚS', '140655 - SANTA MARIANITA DE JESÚS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(996, '1407', '140750', 'HUAMBOYA', '140750 - HUAMBOYA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(997, '1407', '140751', 'CHIGUAZA', '140751 - CHIGUAZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(998, '1407', '140752', 'PABLO SEXTO', '140752 - PABLO SEXTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(999, '1408', '140850', 'SAN JUAN BOSCO', '140850 - SAN JUAN BOSCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1000, '1408', '140851', 'PAN DE AZÚCAR', '140851 - PAN DE AZÚCAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1001, '1408', '140852', 'SAN CARLOS DE LIMÓN', '140852 - SAN CARLOS DE LIMÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1002, '1408', '140853', 'SAN JACINTO DE WAKAMBEIS', '140853 - SAN JACINTO DE WAKAMBEIS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1003, '1408', '140854', 'SANTIAGO DE PANANZA', '140854 - SANTIAGO DE PANANZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1004, '1409', '140950', 'TAISHA', '140950 - TAISHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1005, '1409', '140951', 'HUASAGA (CAB. EN WAMPUIK)', '140951 - HUASAGA (CAB. EN WAMPUIK)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1006, '1409', '140952', 'MACUMA', '140952 - MACUMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1007, '1409', '140953', 'TUUTINENTZA', '140953 - TUUTINENTZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1008, '1409', '140954', 'PUMPUENTSA', '140954 - PUMPUENTSA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1009, '1410', '141050', 'LOGROÑO', '141050 - LOGROÑO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1010, '1410', '141051', 'YAUPI', '141051 - YAUPI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1011, '1410', '141052', 'SHIMPIS', '141052 - SHIMPIS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1012, '1411', '141150', 'PABLO SEXTO', '141150 - PABLO SEXTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1013, '1412', '141250', 'SANTIAGO', '141250 - SANTIAGO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1014, '1412', '141251', 'SAN JOSÉ DE MORONA', '141251 - SAN JOSÉ DE MORONA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1015, '1501', '150150', 'TENA', '150150 - TENA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1016, '1501', '150151', 'AHUANO', '150151 - AHUANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1017, '1501', '150152', 'CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)', '150152 - CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1018, '1501', '150153', 'CHONTAPUNTA', '150153 - CHONTAPUNTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1019, '1501', '150154', 'PANO', '150154 - PANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1020, '1501', '150155', 'PUERTO MISAHUALLI', '150155 - PUERTO MISAHUALLI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1021, '1501', '150156', 'PUERTO NAPO', '150156 - PUERTO NAPO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1022, '1501', '150157', 'TÁLAG', '150157 - TÁLAG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1023, '1501', '150158', 'SAN JUAN DE MUYUNA', '150158 - SAN JUAN DE MUYUNA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1024, '1503', '150350', 'ARCHIDONA', '150350 - ARCHIDONA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1025, '1503', '150351', 'AVILA', '150351 - AVILA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1026, '1503', '150352', 'COTUNDO', '150352 - COTUNDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1027, '1503', '150353', 'LORETO', '150353 - LORETO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1028, '1503', '150354', 'SAN PABLO DE USHPAYACU', '150354 - SAN PABLO DE USHPAYACU', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1029, '1503', '150355', 'PUERTO MURIALDO', '150355 - PUERTO MURIALDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1030, '1504', '150450', 'EL CHACO', '150450 - EL CHACO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1031, '1504', '150451', 'GONZALO DíAZ DE PINEDA (EL BOMBÓN)', '150451 - GONZALO DíAZ DE PINEDA (EL BOMBÓN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1032, '1504', '150452', 'LINARES', '150452 - LINARES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1033, '1504', '150453', 'OYACACHI', '150453 - OYACACHI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1034, '1504', '150454', 'SANTA ROSA', '150454 - SANTA ROSA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1035, '1504', '150455', 'SARDINAS', '150455 - SARDINAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1036, '1507', '150750', 'BAEZA', '150750 - BAEZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1037, '1507', '150751', 'COSANGA', '150751 - COSANGA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1038, '1507', '150752', 'CUYUJA', '150752 - CUYUJA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1039, '1507', '150753', 'PAPALLACTA', '150753 - PAPALLACTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1040, '1507', '150754', 'SAN FRANCISCO DE BORJA (VIRGILIO DÁVILA)', '150754 - SAN FRANCISCO DE BORJA (VIRGILIO DÁVILA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1041, '1507', '150755', 'SAN JOSÉ DEL PAYAMINO', '150755 - SAN JOSÉ DEL PAYAMINO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1042, '1507', '150756', 'SUMACO', '150756 - SUMACO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1043, '1509', '150950', 'CARLOS JULIO AROSEMENA TOLA', '150950 - CARLOS JULIO AROSEMENA TOLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1044, '1601', '160150', 'PUYO', '160150 - PUYO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1045, '1601', '160151', 'ARAJUNO', '160151 - ARAJUNO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1046, '1601', '160152', 'CANELOS', '160152 - CANELOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1047, '1601', '160153', 'CURARAY', '160153 - CURARAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1048, '1601', '160154', 'DIEZ DE AGOSTO', '160154 - DIEZ DE AGOSTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1049, '1601', '160155', 'FÁTIMA', '160155 - FÁTIMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1050, '1601', '160156', 'MONTALVO (ANDOAS)', '160156 - MONTALVO (ANDOAS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1051, '1601', '160157', 'POMONA', '160157 - POMONA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1052, '1601', '160158', 'RÍO CORRIENTES', '160158 - RÍO CORRIENTES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1053, '1601', '160159', 'RÍO TIGRE', '160159 - RÍO TIGRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1054, '1601', '160160', 'SANTA CLARA', '160160 - SANTA CLARA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1055, '1601', '160161', 'SARAYACU', '160161 - SARAYACU', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1056, '1601', '160162', 'SIMÓN BOLÍVAR (CAB. EN MUSHULLACTA)', '160162 - SIMÓN BOLÍVAR (CAB. EN MUSHULLACTA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1057, '1601', '160163', 'TARQUI', '160163 - TARQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1058, '1601', '160164', 'TENIENTE HUGO ORTIZ', '160164 - TENIENTE HUGO ORTIZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1059, '1601', '160165', 'VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)', '160165 - VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1060, '1601', '160166', 'EL TRIUNFO', '160166 - EL TRIUNFO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1061, '1602', '160250', 'MERA', '160250 - MERA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1062, '1602', '160251', 'MADRE TIERRA', '160251 - MADRE TIERRA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1063, '1602', '160252', 'SHELL', '160252 - SHELL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1064, '1603', '160350', 'SANTA CLARA', '160350 - SANTA CLARA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1065, '1603', '160351', 'SAN JOSÉ', '160351 - SAN JOSÉ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1066, '1604', '160450', 'ARAJUNO', '160450 - ARAJUNO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1067, '1604', '160451', 'CURARAY', '160451 - CURARAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1068, '1701', '170101', 'BELISARIO QUEVEDO', '170101 - BELISARIO QUEVEDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1069, '1701', '170102', 'CARCELÉN', '170102 - CARCELÉN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1070, '1701', '170103', 'CENTRO HISTÓRICO', '170103 - CENTRO HISTÓRICO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1071, '1701', '170104', 'COCHAPAMBA', '170104 - COCHAPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1072, '1701', '170105', 'COMITÉ DEL PUEBLO', '170105 - COMITÉ DEL PUEBLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1073, '1701', '170106', 'COTOCOLLAO', '170106 - COTOCOLLAO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1074, '1701', '170107', 'CHILIBULO', '170107 - CHILIBULO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1075, '1701', '170108', 'CHILLOGALLO', '170108 - CHILLOGALLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1076, '1701', '170109', 'CHIMBACALLE', '170109 - CHIMBACALLE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1077, '1701', '170110', 'EL CONDADO', '170110 - EL CONDADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1078, '1701', '170111', 'GUAMANÍ', '170111 - GUAMANÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1079, '1701', '170112', 'IÑAQUITO', '170112 - IÑAQUITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1080, '1701', '170113', 'ITCHIMBÍA', '170113 - ITCHIMBÍA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1081, '1701', '170114', 'JIPIJAPA', '170114 - JIPIJAPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1082, '1701', '170115', 'KENNEDY', '170115 - KENNEDY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1083, '1701', '170116', 'LA ARGELIA', '170116 - LA ARGELIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1084, '1701', '170117', 'LA CONCEPCIÓN', '170117 - LA CONCEPCIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1085, '1701', '170118', 'LA ECUATORIANA', '170118 - LA ECUATORIANA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1086, '1701', '170119', 'LA FERROVIARIA', '170119 - LA FERROVIARIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1087, '1701', '170120', 'LA LIBERTAD', '170120 - LA LIBERTAD', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1088, '1701', '170121', 'LA MAGDALENA', '170121 - LA MAGDALENA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1089, '1701', '170122', 'LA MENA', '170122 - LA MENA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1090, '1701', '170123', 'MARISCAL SUCRE', '170123 - MARISCAL SUCRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1091, '1701', '170124', 'PONCEANO', '170124 - PONCEANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1092, '1701', '170125', 'PUENGASÍ', '170125 - PUENGASÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1093, '1701', '170126', 'QUITUMBE', '170126 - QUITUMBE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1094, '1701', '170127', 'RUMIPAMBA', '170127 - RUMIPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1095, '1701', '170128', 'SAN BARTOLO', '170128 - SAN BARTOLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1096, '1701', '170129', 'SAN ISIDRO DEL INCA', '170129 - SAN ISIDRO DEL INCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1097, '1701', '170130', 'SAN JUAN', '170130 - SAN JUAN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1098, '1701', '170131', 'SOLANDA', '170131 - SOLANDA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1099, '1701', '170132', 'TURUBAMBA', '170132 - TURUBAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1100, '1701', '170150', 'QUITO DISTRITO METROPOLITANO', '170150 - QUITO DISTRITO METROPOLITANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1101, '1701', '170151', 'ALANGASÍ', '170151 - ALANGASÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1102, '1701', '170152', 'AMAGUAÑA', '170152 - AMAGUAÑA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1103, '1701', '170153', 'ATAHUALPA', '170153 - ATAHUALPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1104, '1701', '170154', 'CALACALÍ', '170154 - CALACALÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1105, '1701', '170155', 'CALDERÓN', '170155 - CALDERÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1106, '1701', '170156', 'CONOCOTO', '170156 - CONOCOTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1107, '1701', '170157', 'CUMBAYÁ', '170157 - CUMBAYÁ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1108, '1701', '170158', 'CHAVEZPAMBA', '170158 - CHAVEZPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1109, '1701', '170159', 'CHECA', '170159 - CHECA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1110, '1701', '170160', 'EL QUINCHE', '170160 - EL QUINCHE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1111, '1701', '170161', 'GUALEA', '170161 - GUALEA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1112, '1701', '170162', 'GUANGOPOLO', '170162 - GUANGOPOLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1113, '1701', '170163', 'GUAYLLABAMBA', '170163 - GUAYLLABAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1114, '1701', '170164', 'LA MERCED', '170164 - LA MERCED', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1115, '1701', '170165', 'LLANO CHICO', '170165 - LLANO CHICO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1116, '1701', '170166', 'LLOA', '170166 - LLOA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1117, '1701', '170167', 'MINDO', '170167 - MINDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1118, '1701', '170168', 'NANEGAL', '170168 - NANEGAL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1119, '1701', '170169', 'NANEGALITO', '170169 - NANEGALITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1120, '1701', '170170', 'NAYÓN', '170170 - NAYÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1121, '1701', '170171', 'NONO', '170171 - NONO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1122, '1701', '170172', 'PACTO', '170172 - PACTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1123, '1701', '170173', 'PEDRO VICENTE MALDONADO', '170173 - PEDRO VICENTE MALDONADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1124, '1701', '170174', 'PERUCHO', '170174 - PERUCHO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1125, '1701', '170175', 'PIFO', '170175 - PIFO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1126, '1701', '170176', 'PÍNTAG', '170176 - PÍNTAG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1127, '1701', '170177', 'POMASQUI', '170177 - POMASQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1128, '1701', '170178', 'PUÉLLARO', '170178 - PUÉLLARO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1129, '1701', '170179', 'PUEMBO', '170179 - PUEMBO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1130, '1701', '170180', 'SAN ANTONIO', '170180 - SAN ANTONIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1131, '1701', '170181', 'SAN JOSÉ DE MINAS', '170181 - SAN JOSÉ DE MINAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1132, '1701', '170182', 'SAN MIGUEL DE LOS BANCOS', '170182 - SAN MIGUEL DE LOS BANCOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1133, '1701', '170183', 'TABABELA', '170183 - TABABELA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1134, '1701', '170184', 'TUMBACO', '170184 - TUMBACO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1135, '1701', '170185', 'YARUQUÍ', '170185 - YARUQUÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1136, '1701', '170186', 'ZAMBIZA', '170186 - ZAMBIZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1137, '1701', '170187', 'PUERTO QUITO', '170187 - PUERTO QUITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1138, '1702', '170201', 'AYORA', '170201 - AYORA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1139, '1702', '170202', 'CAYAMBE', '170202 - CAYAMBE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1140, '1702', '170203', 'JUAN MONTALVO', '170203 - JUAN MONTALVO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1141, '1702', '170250', 'CAYAMBE', '170250 - CAYAMBE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1142, '1702', '170251', 'ASCÁZUBI', '170251 - ASCÁZUBI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1143, '1702', '170252', 'CANGAHUA', '170252 - CANGAHUA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1144, '1702', '170253', 'OLMEDO (PESILLO)', '170253 - OLMEDO (PESILLO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1145, '1702', '170254', 'OTÓN', '170254 - OTÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1146, '1702', '170255', 'SANTA ROSA DE CUZUBAMBA', '170255 - SANTA ROSA DE CUZUBAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1147, '1703', '170350', 'MACHACHI', '170350 - MACHACHI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1148, '1703', '170351', 'ALÓAG', '170351 - ALÓAG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1149, '1703', '170352', 'ALOASÍ', '170352 - ALOASÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1150, '1703', '170353', 'CUTUGLAHUA', '170353 - CUTUGLAHUA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1151, '1703', '170354', 'EL CHAUPI', '170354 - EL CHAUPI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1152, '1703', '170355', 'MANUEL CORNEJO ASTORGA (TANDAPI)', '170355 - MANUEL CORNEJO ASTORGA (TANDAPI)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1153, '1703', '170356', 'TAMBILLO', '170356 - TAMBILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1154, '1703', '170357', 'UYUMBICHO', '170357 - UYUMBICHO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1155, '1704', '170450', 'TABACUNDO', '170450 - TABACUNDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1156, '1704', '170451', 'LA ESPERANZA', '170451 - LA ESPERANZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1157, '1704', '170452', 'MALCHINGUÍ', '170452 - MALCHINGUÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1158, '1704', '170453', 'TOCACHI', '170453 - TOCACHI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1159, '1704', '170454', 'TUPIGACHI', '170454 - TUPIGACHI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1160, '1705', '170501', 'SANGOLQUÍ', '170501 - SANGOLQUÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1161, '1705', '170502', 'SAN PEDRO DE TABOADA', '170502 - SAN PEDRO DE TABOADA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1162, '1705', '170503', 'SAN RAFAEL', '170503 - SAN RAFAEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1163, '1705', '170550', 'SANGOLQUI', '170550 - SANGOLQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1164, '1705', '170551', 'COTOGCHOA', '170551 - COTOGCHOA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1165, '1705', '170552', 'RUMIPAMBA', '170552 - RUMIPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1166, '1707', '170750', 'SAN MIGUEL DE LOS BANCOS', '170750 - SAN MIGUEL DE LOS BANCOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1167, '1707', '170751', 'MINDO', '170751 - MINDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1168, '1707', '170752', 'PEDRO VICENTE MALDONADO', '170752 - PEDRO VICENTE MALDONADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1169, '1707', '170753', 'PUERTO QUITO', '170753 - PUERTO QUITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1170, '1708', '170850', 'PEDRO VICENTE MALDONADO', '170850 - PEDRO VICENTE MALDONADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1171, '1709', '170950', 'PUERTO QUITO', '170950 - PUERTO QUITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1172, '1801', '180101', 'ATOCHA ? FICOA', '180101 - ATOCHA ? FICOA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1173, '1801', '180102', 'CELIANO MONGE', '180102 - CELIANO MONGE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1174, '1801', '180103', 'HUACHI CHICO', '180103 - HUACHI CHICO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1175, '1801', '180104', 'HUACHI LORETO', '180104 - HUACHI LORETO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1176, '1801', '180105', 'LA MERCED', '180105 - LA MERCED', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1177, '1801', '180106', 'LA PENÍNSULA', '180106 - LA PENÍNSULA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1178, '1801', '180107', 'MATRIZ', '180107 - MATRIZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1179, '1801', '180108', 'PISHILATA', '180108 - PISHILATA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1180, '1801', '180109', 'SAN FRANCISCO', '180109 - SAN FRANCISCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1181, '1801', '180150', 'AMBATO', '180150 - AMBATO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1182, '1801', '180151', 'AMBATILLO', '180151 - AMBATILLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1183, '1801', '180152', 'ATAHUALPA (CHISALATA)', '180152 - ATAHUALPA (CHISALATA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1184, '1801', '180153', 'AUGUSTO N. MARTÍNEZ (MUNDUGLEO)', '180153 - AUGUSTO N. MARTÍNEZ (MUNDUGLEO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1185, '1801', '180154', 'CONSTANTINO FERNÁNDEZ (CAB. EN CULLITAHUA)', '180154 - CONSTANTINO FERNÁNDEZ (CAB. EN CULLITAHUA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1186, '1801', '180155', 'HUACHI GRANDE', '180155 - HUACHI GRANDE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1187, '1801', '180156', 'IZAMBA', '180156 - IZAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1188, '1801', '180157', 'JUAN BENIGNO VELA', '180157 - JUAN BENIGNO VELA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1189, '1801', '180158', 'MONTALVO', '180158 - MONTALVO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1190, '1801', '180159', 'PASA', '180159 - PASA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1191, '1801', '180160', 'PICAIGUA', '180160 - PICAIGUA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1192, '1801', '180161', 'PILAGÜÍN (PILAHÜÍN)', '180161 - PILAGÜÍN (PILAHÜÍN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1193, '1801', '180162', 'QUISAPINCHA (QUIZAPINCHA)', '180162 - QUISAPINCHA (QUIZAPINCHA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1194, '1801', '180163', 'SAN BARTOLOMÉ DE PINLLOG', '180163 - SAN BARTOLOMÉ DE PINLLOG', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1195, '1801', '180164', 'SAN FERNANDO (PASA SAN FERNANDO)', '180164 - SAN FERNANDO (PASA SAN FERNANDO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1196, '1801', '180165', 'SANTA ROSA', '180165 - SANTA ROSA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1197, '1801', '180166', 'TOTORAS', '180166 - TOTORAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1198, '1801', '180167', 'CUNCHIBAMBA', '180167 - CUNCHIBAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1199, '1801', '180168', 'UNAMUNCHO', '180168 - UNAMUNCHO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1200, '1802', '180250', 'BAÑOS DE AGUA SANTA', '180250 - BAÑOS DE AGUA SANTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1201, '1802', '180251', 'LLIGUA', '180251 - LLIGUA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1202, '1802', '180252', 'RÍO NEGRO', '180252 - RÍO NEGRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1203, '1802', '180253', 'RÍO VERDE', '180253 - RÍO VERDE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1204, '1802', '180254', 'ULBA', '180254 - ULBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1205, '1803', '180350', 'CEVALLOS', '180350 - CEVALLOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1206, '1804', '180450', 'MOCHA', '180450 - MOCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1207, '1804', '180451', 'PINGUILÍ', '180451 - PINGUILÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1208, '1805', '180550', 'PATATE', '180550 - PATATE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1209, '1805', '180551', 'EL TRIUNFO', '180551 - EL TRIUNFO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1210, '1805', '180552', 'LOS ANDES (CAB. EN POATUG)', '180552 - LOS ANDES (CAB. EN POATUG)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1211, '1805', '180553', 'SUCRE (CAB. EN SUCRE-PATATE URCU)', '180553 - SUCRE (CAB. EN SUCRE-PATATE URCU)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1212, '1806', '180650', 'QUERO', '180650 - QUERO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1213, '1806', '180651', 'RUMIPAMBA', '180651 - RUMIPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1214, '1806', '180652', 'YANAYACU - MOCHAPATA (CAB. EN YANAYACU)', '180652 - YANAYACU - MOCHAPATA (CAB. EN YANAYACU)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1215, '1807', '180701', 'PELILEO', '180701 - PELILEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1216, '1807', '180702', 'PELILEO GRANDE', '180702 - PELILEO GRANDE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1217, '1807', '180750', 'PELILEO', '180750 - PELILEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1218, '1807', '180751', 'BENÍTEZ (PACHANLICA)', '180751 - BENÍTEZ (PACHANLICA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1219, '1807', '180752', 'BOLÍVAR', '180752 - BOLÍVAR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1220, '1807', '180753', 'COTALÓ', '180753 - COTALÓ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1221, '1807', '180754', 'CHIQUICHA (CAB. EN CHIQUICHA GRANDE)', '180754 - CHIQUICHA (CAB. EN CHIQUICHA GRANDE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1222, '1807', '180755', 'EL ROSARIO (RUMICHACA)', '180755 - EL ROSARIO (RUMICHACA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1223, '1807', '180756', 'GARCÍA MORENO (CHUMAQUI)', '180756 - GARCÍA MORENO (CHUMAQUI)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1224, '1807', '180757', 'GUAMBALÓ (HUAMBALÓ)', '180757 - GUAMBALÓ (HUAMBALÓ)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1225, '1807', '180758', 'SALASACA', '180758 - SALASACA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1226, '1808', '180801', 'CIUDAD NUEVA', '180801 - CIUDAD NUEVA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1227, '1808', '180802', 'PÍLLARO', '180802 - PÍLLARO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1228, '1808', '180850', 'PÍLLARO', '180850 - PÍLLARO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1229, '1808', '180851', 'BAQUERIZO MORENO', '180851 - BAQUERIZO MORENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1230, '1808', '180852', 'EMILIO MARÍA TERÁN (RUMIPAMBA)', '180852 - EMILIO MARÍA TERÁN (RUMIPAMBA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1231, '1808', '180853', 'MARCOS ESPINEL (CHACATA)', '180853 - MARCOS ESPINEL (CHACATA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1232, '1808', '180854', 'PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)', '180854 - PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1233, '1808', '180855', 'SAN ANDRÉS', '180855 - SAN ANDRÉS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1234, '1808', '180856', 'SAN JOSÉ DE POALÓ', '180856 - SAN JOSÉ DE POALÓ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1235, '1808', '180857', 'SAN MIGUELITO', '180857 - SAN MIGUELITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1236, '1809', '180950', 'TISALEO', '180950 - TISALEO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1237, '1809', '180951', 'QUINCHICOTO', '180951 - QUINCHICOTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1238, '1901', '190101', 'EL LIMÓN', '190101 - EL LIMÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1239, '1901', '190102', 'ZAMORA', '190102 - ZAMORA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1240, '1901', '190150', 'ZAMORA', '190150 - ZAMORA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1241, '1901', '190151', 'CUMBARATZA', '190151 - CUMBARATZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1242, '1901', '190152', 'GUADALUPE', '190152 - GUADALUPE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1243, '1901', '190153', 'IMBANA (LA VICTORIA DE IMBANA)', '190153 - IMBANA (LA VICTORIA DE IMBANA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1244, '1901', '190154', 'PAQUISHA', '190154 - PAQUISHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1245, '1901', '190155', 'SABANILLA', '190155 - SABANILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1246, '1901', '190156', 'TIMBARA', '190156 - TIMBARA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1247, '1901', '190157', 'ZUMBI', '190157 - ZUMBI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1248, '1901', '190158', 'SAN CARLOS DE LAS MINAS', '190158 - SAN CARLOS DE LAS MINAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1249, '1902', '190250', 'ZUMBA', '190250 - ZUMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1250, '1902', '190251', 'CHITO', '190251 - CHITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1251, '1902', '190252', 'EL CHORRO', '190252 - EL CHORRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1252, '1902', '190253', 'EL PORVENIR DEL CARMEN', '190253 - EL PORVENIR DEL CARMEN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1253, '1902', '190254', 'LA CHONTA', '190254 - LA CHONTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1254, '1902', '190255', 'PALANDA', '190255 - PALANDA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1255, '1902', '190256', 'PUCAPAMBA', '190256 - PUCAPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1256, '1902', '190257', 'SAN FRANCISCO DEL VERGEL', '190257 - SAN FRANCISCO DEL VERGEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1257, '1902', '190258', 'VALLADOLID', '190258 - VALLADOLID', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1258, '1902', '190259', 'SAN ANDRÉS', '190259 - SAN ANDRÉS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1259, '1903', '190350', 'GUAYZIMI', '190350 - GUAYZIMI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1260, '1903', '190351', 'ZURMI', '190351 - ZURMI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1261, '1903', '190352', 'NUEVO PARAÍSO', '190352 - NUEVO PARAÍSO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1262, '1904', '190450', '28 DE MAYO (SAN JOSÉ DE YACUAMBI)', '190450 - 28 DE MAYO (SAN JOSÉ DE YACUAMBI)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1263, '1904', '190451', 'LA PAZ', '190451 - LA PAZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1264, '1904', '190452', 'TUTUPALI', '190452 - TUTUPALI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1265, '1905', '190550', 'YANTZAZA (YANZATZA)', '190550 - YANTZAZA (YANZATZA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1266, '1905', '190551', 'CHICAÑA', '190551 - CHICAÑA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1267, '1905', '190552', 'EL PANGUI', '190552 - EL PANGUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL);
INSERT INTO `m_parroquia` (`id_m_parroquia`, `codigo_canton`, `codigo_m_parroquia`, `nombre_m_parroquia`, `codigo_nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1268, '1905', '190553', 'LOS ENCUENTROS', '190553 - LOS ENCUENTROS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1269, '1906', '190650', 'EL PANGUI', '190650 - EL PANGUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1270, '1906', '190651', 'EL GUISME', '190651 - EL GUISME', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1271, '1906', '190652', 'PACHICUTZA', '190652 - PACHICUTZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1272, '1906', '190653', 'TUNDAYME', '190653 - TUNDAYME', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1273, '1907', '190750', 'ZUMBI', '190750 - ZUMBI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1274, '1907', '190751', 'PAQUISHA', '190751 - PAQUISHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1275, '1907', '190752', 'TRIUNFO-DORADO', '190752 - TRIUNFO-DORADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1276, '1907', '190753', 'PANGUINTZA', '190753 - PANGUINTZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1277, '1908', '190850', 'PALANDA', '190850 - PALANDA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1278, '1908', '190851', 'EL PORVENIR DEL CARMEN', '190851 - EL PORVENIR DEL CARMEN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1279, '1908', '190852', 'SAN FRANCISCO DEL VERGEL', '190852 - SAN FRANCISCO DEL VERGEL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1280, '1908', '190853', 'VALLADOLID', '190853 - VALLADOLID', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1281, '1908', '190854', 'LA CANELA', '190854 - LA CANELA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1282, '1909', '190950', 'PAQUISHA', '190950 - PAQUISHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1283, '1909', '190951', 'BELLAVISTA', '190951 - BELLAVISTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1284, '1909', '190952', 'NUEVO QUITO', '190952 - NUEVO QUITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1285, '2001', '200150', 'PUERTO BAQUERIZO MORENO', '200150 - PUERTO BAQUERIZO MORENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1286, '2001', '200151', 'EL PROGRESO', '200151 - EL PROGRESO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1287, '2001', '200152', 'ISLA SANTA MARÍA (FLOREANA) (CAB. EN PTO. VELASCO IBARRA)', '200152 - ISLA SANTA MARÍA (FLOREANA) (CAB. EN PTO. VELASCO IBARRA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1288, '2002', '200250', 'PUERTO VILLAMIL', '200250 - PUERTO VILLAMIL', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1289, '2002', '200251', 'TOMÁS DE BERLANGA (SANTO TOMÁS)', '200251 - TOMÁS DE BERLANGA (SANTO TOMÁS)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1290, '2003', '200350', 'PUERTO AYORA', '200350 - PUERTO AYORA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1291, '2003', '200351', 'BELLAVISTA', '200351 - BELLAVISTA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1292, '2003', '200352', 'SANTA ROSA (INCLUYE LA ISLA BALTRA)', '200352 - SANTA ROSA (INCLUYE LA ISLA BALTRA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1293, '2101', '210150', 'NUEVA LOJA', '210150 - NUEVA LOJA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1294, '2101', '210151', 'CUYABENO', '210151 - CUYABENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1295, '2101', '210152', 'DURENO', '210152 - DURENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1296, '2101', '210153', 'GENERAL FARFÁN', '210153 - GENERAL FARFÁN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1297, '2101', '210154', 'TARAPOA', '210154 - TARAPOA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1298, '2101', '210155', 'EL ENO', '210155 - EL ENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1299, '2101', '210156', 'PACAYACU', '210156 - PACAYACU', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1300, '2101', '210157', 'JAMBELÍ', '210157 - JAMBELÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1301, '2101', '210158', 'SANTA CECILIA', '210158 - SANTA CECILIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1302, '2101', '210159', 'AGUAS NEGRAS', '210159 - AGUAS NEGRAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1303, '2102', '210250', 'EL DORADO DE CASCALES', '210250 - EL DORADO DE CASCALES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1304, '2102', '210251', 'EL REVENTADOR', '210251 - EL REVENTADOR', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1305, '2102', '210252', 'GONZALO PIZARRO', '210252 - GONZALO PIZARRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1306, '2102', '210253', 'LUMBAQUÍ', '210253 - LUMBAQUÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1307, '2102', '210254', 'PUERTO LIBRE', '210254 - PUERTO LIBRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1308, '2102', '210255', 'SANTA ROSA DE SUCUMBÍOS', '210255 - SANTA ROSA DE SUCUMBÍOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1309, '2103', '210350', 'PUERTO EL CARMEN DEL PUTUMAYO', '210350 - PUERTO EL CARMEN DEL PUTUMAYO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1310, '2103', '210351', 'PALMA ROJA', '210351 - PALMA ROJA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1311, '2103', '210352', 'PUERTO BOLÍVAR (PUERTO MONTÚFAR)', '210352 - PUERTO BOLÍVAR (PUERTO MONTÚFAR)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1312, '2103', '210353', 'PUERTO RODRÍGUEZ', '210353 - PUERTO RODRÍGUEZ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1313, '2103', '210354', 'SANTA ELENA', '210354 - SANTA ELENA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1314, '2104', '210450', 'SHUSHUFINDI', '210450 - SHUSHUFINDI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1315, '2104', '210451', 'LIMONCOCHA', '210451 - LIMONCOCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1316, '2104', '210452', 'PAÑACOCHA', '210452 - PAÑACOCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1317, '2104', '210453', 'SAN ROQUE (CAB. EN SAN VICENTE)', '210453 - SAN ROQUE (CAB. EN SAN VICENTE)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1318, '2104', '210454', 'SAN PEDRO DE LOS COFANES', '210454 - SAN PEDRO DE LOS COFANES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1319, '2104', '210455', 'SIETE DE JULIO', '210455 - SIETE DE JULIO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1320, '2105', '210550', 'LA BONITA', '210550 - LA BONITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1321, '2105', '210551', 'EL PLAYÓN DE SAN FRANCISCO', '210551 - EL PLAYÓN DE SAN FRANCISCO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1322, '2105', '210552', 'LA SOFÍA', '210552 - LA SOFÍA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1323, '2105', '210553', 'ROSA FLORIDA', '210553 - ROSA FLORIDA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1324, '2105', '210554', 'SANTA BÁRBARA', '210554 - SANTA BÁRBARA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1325, '2106', '210650', 'EL DORADO DE CASCALES', '210650 - EL DORADO DE CASCALES', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1326, '2106', '210651', 'SANTA ROSA DE SUCUMBÍOS', '210651 - SANTA ROSA DE SUCUMBÍOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1327, '2106', '210652', 'SEVILLA', '210652 - SEVILLA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1328, '2107', '210750', 'TARAPOA', '210750 - TARAPOA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1329, '2107', '210751', 'CUYABENO', '210751 - CUYABENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1330, '2107', '210752', 'AGUAS NEGRAS', '210752 - AGUAS NEGRAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1331, '2201', '220150', 'PUERTO FRANCISCO DE ORELLANA (EL COCA)', '220150 - PUERTO FRANCISCO DE ORELLANA (EL COCA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1332, '2201', '220151', 'DAYUMA', '220151 - DAYUMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1333, '2201', '220152', 'TARACOA (NUEVA ESPERANZA: YUCA)', '220152 - TARACOA (NUEVA ESPERANZA: YUCA)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1334, '2201', '220153', 'ALEJANDRO LABAKA', '220153 - ALEJANDRO LABAKA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1335, '2201', '220154', 'EL DORADO', '220154 - EL DORADO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1336, '2201', '220155', 'EL EDÉN', '220155 - EL EDÉN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1337, '2201', '220156', 'GARCÍA MORENO', '220156 - GARCÍA MORENO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1338, '2201', '220157', 'INÉS ARANGO (CAB. EN WESTERN)', '220157 - INÉS ARANGO (CAB. EN WESTERN)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1339, '2201', '220158', 'LA BELLEZA', '220158 - LA BELLEZA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1340, '2201', '220159', 'NUEVO PARAÍSO (CAB. EN UNIÓN', '220159 - NUEVO PARAÍSO (CAB. EN UNIÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1341, '2201', '220160', 'SAN JOSÉ DE GUAYUSA', '220160 - SAN JOSÉ DE GUAYUSA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1342, '2201', '220161', 'SAN LUIS DE ARMENIA', '220161 - SAN LUIS DE ARMENIA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1343, '2202', '220201', 'TIPITINI', '220201 - TIPITINI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1344, '2202', '220250', 'NUEVO ROCAFUERTE', '220250 - NUEVO ROCAFUERTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1345, '2202', '220251', 'CAPITÁN AUGUSTO RIVADENEYRA', '220251 - CAPITÁN AUGUSTO RIVADENEYRA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1346, '2202', '220252', 'CONONACO', '220252 - CONONACO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1347, '2202', '220253', 'SANTA MARÍA DE HUIRIRIMA', '220253 - SANTA MARÍA DE HUIRIRIMA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1348, '2202', '220254', 'TIPUTINI', '220254 - TIPUTINI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1349, '2202', '220255', 'YASUNÍ', '220255 - YASUNÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1350, '2203', '220350', 'LA JOYA DE LOS SACHAS', '220350 - LA JOYA DE LOS SACHAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1351, '2203', '220351', 'ENOKANQUI', '220351 - ENOKANQUI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1352, '2203', '220352', 'POMPEYA', '220352 - POMPEYA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1353, '2203', '220353', 'SAN CARLOS', '220353 - SAN CARLOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1354, '2203', '220354', 'SAN SEBASTIÁN DEL COCA', '220354 - SAN SEBASTIÁN DEL COCA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1355, '2203', '220355', 'LAGO SAN PEDRO', '220355 - LAGO SAN PEDRO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1356, '2203', '220356', 'RUMIPAMBA', '220356 - RUMIPAMBA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1357, '2203', '220357', 'TRES DE NOVIEMBRE', '220357 - TRES DE NOVIEMBRE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1358, '2203', '220358', 'UNIÓN MILAGREÑA', '220358 - UNIÓN MILAGREÑA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1359, '2204', '220450', 'LORETO', '220450 - LORETO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1360, '2204', '220451', 'AVILA (CAB. EN HUIRUNO)', '220451 - AVILA (CAB. EN HUIRUNO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1361, '2204', '220452', 'PUERTO MURIALDO', '220452 - PUERTO MURIALDO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1362, '2204', '220453', 'SAN JOSÉ DE PAYAMINO', '220453 - SAN JOSÉ DE PAYAMINO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1363, '2204', '220454', 'SAN JOSÉ DE DAHUANO', '220454 - SAN JOSÉ DE DAHUANO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1364, '2204', '220455', 'SAN VICENTE DE HUATICOCHA', '220455 - SAN VICENTE DE HUATICOCHA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1365, '2301', '230101', 'ABRAHAM CALAZACÓN', '230101 - ABRAHAM CALAZACÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1366, '2301', '230102', 'BOMBOLÍ', '230102 - BOMBOLÍ', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1367, '2301', '230103', 'CHIGUILPE', '230103 - CHIGUILPE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1368, '2301', '230104', 'RÍO TOACHI', '230104 - RÍO TOACHI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1369, '2301', '230105', 'RÍO VERDE', '230105 - RÍO VERDE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1370, '2301', '230106', 'SANTO DOMINGO DE LOS COLORADOS', '230106 - SANTO DOMINGO DE LOS COLORADOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1371, '2301', '230107', 'ZARACAY', '230107 - ZARACAY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1372, '2301', '230150', 'SANTO DOMINGO DE LOS COLORADOS', '230150 - SANTO DOMINGO DE LOS COLORADOS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1373, '2301', '230151', 'ALLURIQUÍN', '230151 - ALLURIQUÍN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1374, '2301', '230152', 'PUERTO LIMÓN', '230152 - PUERTO LIMÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1375, '2301', '230153', 'LUZ DE AMÉRICA', '230153 - LUZ DE AMÉRICA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1376, '2301', '230154', 'SAN JACINTO DEL BÚA', '230154 - SAN JACINTO DEL BÚA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1377, '2301', '230155', 'VALLE HERMOSO', '230155 - VALLE HERMOSO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1378, '2301', '230156', 'EL ESFUERZO', '230156 - EL ESFUERZO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1379, '2301', '230157', 'SANTA MARÍA DEL TOACHI', '230157 - SANTA MARÍA DEL TOACHI', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1380, '2401', '240101', 'BALLENITA', '240101 - BALLENITA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1381, '2401', '240102', 'SANTA ELENA', '240102 - SANTA ELENA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1382, '2401', '240150', 'SANTA ELENA', '240150 - SANTA ELENA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1383, '2401', '240151', 'ATAHUALPA', '240151 - ATAHUALPA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1384, '2401', '240152', 'COLONCHE', '240152 - COLONCHE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1385, '2401', '240153', 'CHANDUY', '240153 - CHANDUY', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1386, '2401', '240154', 'MANGLARALTO', '240154 - MANGLARALTO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1387, '2401', '240155', 'SIMÓN BOLÍVAR (JULIO MORENO)', '240155 - SIMÓN BOLÍVAR (JULIO MORENO)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1388, '2401', '240156', 'SAN JOSÉ DE ANCÓN', '240156 - SAN JOSÉ DE ANCÓN', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1389, '2402', '240250', 'LA LIBERTAD', '240250 - LA LIBERTAD', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1390, '2403', '240301', 'CARLOS ESPINOZA LARREA', '240301 - CARLOS ESPINOZA LARREA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1391, '2403', '240302', 'GRAL. ALBERTO ENRÍQUEZ GALLO', '240302 - GRAL. ALBERTO ENRÍQUEZ GALLO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1392, '2403', '240303', 'VICENTE ROCAFUERTE', '240303 - VICENTE ROCAFUERTE', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1393, '2403', '240304', 'SANTA ROSA', '240304 - SANTA ROSA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1394, '2403', '240350', 'SALINAS', '240350 - SALINAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1395, '2403', '240351', 'ANCONCITO', '240351 - ANCONCITO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1396, '2403', '240352', 'JOSÉ LUIS TAMAYO (MUEY)', '240352 - JOSÉ LUIS TAMAYO (MUEY)', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1397, '9001', '900151', 'LAS GOLONDRINAS', '900151 - LAS GOLONDRINAS', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1398, '9003', '900351', 'MANGA DEL CURA', '900351 - MANGA DEL CURA', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL),
(1399, '9004', '900451', 'EL PIEDRERO', '900451 - EL PIEDRERO', '2020-02-08 19:19:12', '2020-02-08 19:19:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_procedimiento`
--

CREATE TABLE `m_procedimiento` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `observacion` text NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `m_procedimiento`
--

INSERT INTO `m_procedimiento` (`id`, `nombre`, `observacion`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Limpieza bucal', 'Limpieza bucal', 1, '2020-02-18 15:26:11', '2020-02-18 15:26:11', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_producto`
--

CREATE TABLE `m_producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_provincia`
--

CREATE TABLE `m_provincia` (
  `id_m_provincia` bigint(20) UNSIGNED NOT NULL,
  `codigo_m_provincia` varchar(2) NOT NULL,
  `nombre_m_provincia` varchar(100) NOT NULL,
  `codigo_nombre` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `m_provincia`
--

INSERT INTO `m_provincia` (`id_m_provincia`, `codigo_m_provincia`, `nombre_m_provincia`, `codigo_nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '01', 'AZUAY', '01 - AZUAY', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(3, '02', 'BOLIVAR', '02 - BOLIVAR', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(4, '03', 'CANAR', '03 - CANAR', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(5, '04', 'CARCHI', '04 - CARCHI', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(6, '05', 'COTOPAXI', '05 - COTOPAXI', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(7, '06', 'CHIMBORAZO', '06 - CHIMBORAZO', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(8, '07', 'EL ORO', '07 - EL ORO', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(9, '08', 'ESMERALDAS', '08 - ESMERALDAS', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(10, '09', 'GUAYAS', '09 - GUAYAS', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(11, '10', 'IMBABURA', '10 - IMBABURA', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(12, '11', 'LOJA', '11 - LOJA', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(13, '12', 'LOS RIOS', '12 - LOS RIOS', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(14, '13', 'MANABI', '13 - MANABI', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(15, '14', 'MORONA SANTIAGO', '14 - MORONA SANTIAGO', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(16, '15', 'NAPO', '15 - NAPO', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(17, '16', 'PASTAZA', '16 - PASTAZA', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(18, '17', 'PICHINCHA', '17 - PICHINCHA', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(19, '18', 'TUNGURAHUA', '18 - TUNGURAHUA', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(20, '19', 'ZAMORA CHINCHIPE', '19 - ZAMORA CHINCHIPE', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(21, '20', 'GALAPAGOS', '20 - GALAPAGOS', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(22, '21', 'SUCUMBIOS', '21 - SUCUMBIOS', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(23, '22', 'ORELLANA', '22 - ORELLANA', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(24, '23', 'SANTO DOMINGO DE LOS TSACHILAS', '23 - SANTO DOMINGO DE LOS TSACHILAS', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(25, '24', 'SANTA ELENA', '24 - SANTA ELENA', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL),
(26, '90', 'ZONAS NO DELIMITADAS', '90 - ZONAS NO DELIMITADAS', '2020-02-08 18:19:56', '2020-02-08 18:19:56', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_sexo`
--

CREATE TABLE `m_sexo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `m_sexo`
--

INSERT INTO `m_sexo` (`id`, `sexo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hombre', '2020-02-08 19:42:25', '2020-02-08 19:42:25', NULL),
(2, 'Mujer', '2020-02-08 19:42:25', '2020-02-08 19:42:25', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_tipo_identificacion`
--

CREATE TABLE `m_tipo_identificacion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_identificacion` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `m_tipo_identificacion`
--

INSERT INTO `m_tipo_identificacion` (`id`, `tipo_identificacion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cedula', '2020-02-08 16:24:29', '2020-02-08 16:24:29', NULL),
(2, 'Pasaporte', '2020-02-08 16:24:29', '2020-02-08 16:24:29', NULL),
(3, 'Otro', '2020-02-08 16:24:43', '2020-02-08 16:24:43', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfils`
--

CREATE TABLE `perfils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sistema_id` bigint(20) UNSIGNED NOT NULL,
  `nom_perfil` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `abr_perfil` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfils`
--

INSERT INTO `perfils` (`id`, `sistema_id`, `nom_perfil`, `abr_perfil`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 'Administrador', 'ADM', 1, '2020-02-05 12:15:13', '2020-02-05 08:53:07', NULL),
(3, 1, 'Doctor', 'DOC', 1, '2020-02-05 08:53:07', '2020-02-05 08:53:07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_accions`
--

CREATE TABLE `perfil_accions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perfil_id` bigint(20) UNSIGNED NOT NULL,
  `accion_id` bigint(20) UNSIGNED NOT NULL,
  `modulo_id` bigint(20) UNSIGNED NOT NULL,
  `submodulo_id` bigint(20) UNSIGNED NOT NULL,
  `submodulo2_id` bigint(20) UNSIGNED DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfil_accions`
--

INSERT INTO `perfil_accions` (`id`, `perfil_id`, `accion_id`, `modulo_id`, `submodulo_id`, `submodulo2_id`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 2, 1, 1, 1, NULL, 1, NULL, NULL, NULL),
(4, 2, 1, 1, 2, 2, 1, NULL, NULL, NULL),
(5, 2, 1, 1, 2, 3, 1, NULL, NULL, NULL),
(6, 2, 1, 1, 2, 4, 1, NULL, NULL, NULL),
(7, 2, 1, 3, 3, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(8, 2, 1, 3, 5, 5, 1, '2020-02-10 19:57:34', '2020-02-10 19:57:34', NULL),
(10, 2, 1, 3, 6, NULL, 1, '2020-02-11 16:37:26', '2020-02-11 16:37:26', NULL),
(11, 2, 1, 3, 5, 6, 1, NULL, NULL, NULL),
(12, 2, 1, 3, 5, 7, 1, NULL, NULL, NULL),
(13, 2, 1, 3, 5, 8, 1, NULL, NULL, NULL),
(14, 2, 1, 4, 13, 9, 1, NULL, NULL, NULL),
(15, 2, 1, 4, 13, 10, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_usuarios`
--

CREATE TABLE `perfil_usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perfil_id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfil_usuarios`
--

INSERT INTO `perfil_usuarios` (`id`, `perfil_id`, `usuario_id`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, 1, 1, NULL, NULL, NULL),
(4, 2, 1, 1, '2020-02-05 23:36:14', '2020-02-05 23:36:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_agenda`
--

CREATE TABLE `p_agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fechaini` date NOT NULL,
  `horaini` varchar(8) NOT NULL,
  `fechafin` date NOT NULL,
  `horafin` varchar(8) NOT NULL,
  `paciente_id` bigint(20) UNSIGNED NOT NULL,
  `medico_id` bigint(20) UNSIGNED NOT NULL,
  `proc_consul` tinyint(4) DEFAULT NULL COMMENT '0: consulta, 1: procedimientos, 2:evoluciones',
  `consultorio_id` bigint(20) UNSIGNED NOT NULL,
  `procedimiento_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tipo_cita` tinyint(4) DEFAULT NULL COMMENT '0: primera vez, 1: consecutivo',
  `estado_cita` tinyint(4) DEFAULT NULL COMMENT '0: por confirmar,  1: confirmada, 2: reagendado, 3:suspendido, 4:admisionado',
  `clinica_id` bigint(20) UNSIGNED NOT NULL,
  `reagenda_id` bigint(20) DEFAULT 0,
  `observaciones` text DEFAULT NULL,
  `usuarioconfirma_id` bigint(20) UNSIGNED DEFAULT NULL,
  `especialidad_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seguro_id` bigint(20) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'para saber si esta activa o inactiva',
  `usuariocrea_id` bigint(20) UNSIGNED NOT NULL,
  `usuariomod_id` bigint(20) UNSIGNED NOT NULL,
  `ip_creacion` varchar(40) DEFAULT NULL,
  `ip_modificacion` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `observacion_proc` varchar(255) DEFAULT NULL,
  `diagnostico_proc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `p_agenda`
--

INSERT INTO `p_agenda` (`id`, `fechaini`, `horaini`, `fechafin`, `horafin`, `paciente_id`, `medico_id`, `proc_consul`, `consultorio_id`, `procedimiento_id`, `tipo_cita`, `estado_cita`, `clinica_id`, `reagenda_id`, `observaciones`, `usuarioconfirma_id`, `especialidad_id`, `seguro_id`, `estado`, `usuariocrea_id`, `usuariomod_id`, `ip_creacion`, `ip_modificacion`, `created_at`, `updated_at`, `deleted_at`, `observacion_proc`, `diagnostico_proc`) VALUES
(8, '2020-02-18', '10:30', '2020-02-18', '13:30', 7, 1, 1, 1, 1, 1, 1, 1, 0, 'Limpieza bucal de rutina', 1, 1, NULL, 1, 1, 1, NULL, NULL, '2020-02-18 15:30:01', '2020-02-26 17:17:36', NULL, NULL, NULL),
(9, '2020-04-06', '10:00', '2020-04-06', '10:30', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'Prueba de agendar citas', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-04 23:45:01', '2020-04-05 00:15:36', NULL, 'observacion ninguna', 'Diagnostico ninguno'),
(10, '2020-04-06', '11:00', '2020-04-06', '11:30', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'Segundo elemento creado como efecto de pruebas', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-05 04:40:50', '2020-04-05 04:40:50', NULL, 'ninguna observacion segunda prueba', 'segundo diagnostico'),
(11, '2020-04-06', '12:00', '2020-04-06', '12:30', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'Tercera prueba', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-05 04:48:48', '2020-04-05 04:48:48', NULL, 'tecera observacion de prueba', 'Tercer diagnostico de prueba'),
(12, '2020-04-06', '16:00', '2020-04-06', '18:30', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'cuarta prueba', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-05 04:50:00', '2020-04-09 23:36:48', NULL, 'cuarta observacion', 'cuarto diag'),
(13, '2020-04-06', '13:04', '2020-04-06', '13:30', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'cuarta prueba', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-05 05:03:04', '2020-04-06 04:20:31', NULL, 'cuarta observacion', 'cuarto diag'),
(14, '2020-04-06', '14:04', '2020-04-06', '15:30', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'observacion', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-05 05:19:50', '2020-04-06 04:36:39', NULL, 'procedimiento', 'diag'),
(15, '2020-04-09', '19:30', '2020-04-09', '20:00', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'prueba de agendamiento', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-10 00:10:00', '2020-04-10 00:10:00', NULL, 'procedimiento', 'diagnostico'),
(16, '2020-04-09', '19:30', '2020-04-09', '20:00', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'prueba de agendamiento', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-10 00:15:53', '2020-04-10 00:15:53', NULL, 'procedimiento', 'diagnostico'),
(17, '2020-04-09', '19:30', '2020-04-09', '20:00', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'prueba de agendamiento', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-10 00:26:44', '2020-04-10 00:26:44', NULL, 'procedimiento', 'diagnostico'),
(18, '2020-05-27', '19:30', '2020-05-27', '20:00', 3, 1, 0, 1, 1, 0, 0, 1, NULL, 'prueba de agendamiento', NULL, 1, NULL, 1, 1, 1, NULL, NULL, '2020-04-10 00:32:47', '2020-05-26 05:43:51', NULL, 'procedimiento', 'diagnostico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_horario_medico`
--

CREATE TABLE `p_horario_medico` (
  `id` int(11) UNSIGNED NOT NULL,
  `medico_id` bigint(20) NOT NULL,
  `ndia` tinyint(4) NOT NULL,
  `dia` varchar(4) NOT NULL,
  `horaini` time NOT NULL,
  `horafin` time NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT 1 COMMENT '1: Normal, 2: Lunch',
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `usuariocrea_id` varchar(13) NOT NULL,
  `usuariomod_id` varchar(13) NOT NULL,
  `ip_creacion` varchar(40) NOT NULL,
  `ip_modificacion` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `p_horario_medico`
--

INSERT INTO `p_horario_medico` (`id`, `medico_id`, `ndia`, `dia`, `horaini`, `horafin`, `tipo`, `estado`, `usuariocrea_id`, `usuariomod_id`, `ip_creacion`, `ip_modificacion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Lun.', '08:30:00', '12:30:00', 1, 1, '1', '1', '', '', '2020-03-03 17:54:59', '2020-04-16 06:23:47', NULL),
(2, 1, 1, 'Lun.', '12:30:00', '13:30:00', 2, 1, '1', '1', '', '', '2020-03-06 16:28:33', '2020-04-16 06:26:33', NULL),
(3, 1, 1, 'Lun.', '13:30:00', '20:00:00', 1, 1, '1', '1', '', '', '2020-04-16 06:27:34', '2020-04-16 06:28:24', NULL),
(4, 1, 2, 'Mar.', '08:30:00', '14:00:00', 1, 1, '', '', '', '', '2020-04-21 05:38:08', '2020-05-03 04:45:12', NULL),
(5, 1, 2, 'Mar.', '14:00:00', '15:00:00', 2, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 22:32:42', '2020-05-03 04:45:22', NULL),
(6, 1, 2, 'Mar.', '15:00:00', '19:00:00', 1, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 22:35:31', '2020-05-03 04:45:35', NULL),
(7, 1, 3, 'Mie.', '08:30:00', '12:00:00', 1, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 22:40:31', '2020-05-01 22:40:31', NULL),
(8, 1, 3, 'Mie.', '12:00:00', '13:00:00', 2, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 22:41:56', '2020-05-01 22:46:00', NULL),
(9, 1, 3, 'Mie.', '13:00:00', '18:00:00', 1, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 22:46:23', '2020-05-01 22:46:23', NULL),
(10, 1, 4, 'Jue.', '08:30:00', '12:00:00', 1, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 22:54:18', '2020-05-01 22:54:18', NULL),
(11, 1, 4, 'Jue.', '12:00:00', '12:30:00', 2, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 22:54:36', '2020-05-01 23:03:30', NULL),
(12, 1, 4, 'Jue.', '12:30:00', '18:00:00', 1, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 23:01:06', '2020-05-01 23:01:06', NULL),
(13, 1, 5, 'Vie.', '08:30:00', '12:00:00', 1, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 23:02:45', '2020-05-01 23:02:45', NULL),
(14, 1, 5, 'Vie.', '12:00:00', '12:00:00', 2, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 23:02:56', '2020-05-01 23:02:56', NULL),
(15, 1, 5, 'Vie.', '14:00:00', '18:00:00', 1, 1, '1', '1', '127.0.0.1', '127.0.0.1', '2020-05-01 23:03:09', '2020-05-05 02:28:38', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_sistema` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `des_sistema` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `icono` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`id`, `nom_sistema`, `des_sistema`, `orden`, `icono`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'BOT', 'Control de citas medicas', 1, '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `submodulo2s`
--

CREATE TABLE `submodulo2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submodulo_id` bigint(20) UNSIGNED NOT NULL,
  `nom_submodulo2` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icono` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `submodulo2s`
--

INSERT INTO `submodulo2s` (`id`, `submodulo_id`, `nom_submodulo2`, `icono`, `orden`, `link`, `estado`, `created_at`, `updated_at`) VALUES
(2, 2, 'Perfiles', NULL, 1, 'perfils.index', 1, NULL, NULL),
(3, 2, 'Perfil por usuario', NULL, 2, 'permisos.index', 1, NULL, NULL),
(4, 2, 'Acciones por perfil', NULL, 3, 'perfilaccions.index', 1, NULL, NULL),
(5, 5, 'Especialidades', NULL, 1, 'especialidads.index', 1, NULL, NULL),
(6, 5, 'Clinica', '', 2, 'mClinicas.index', 1, NULL, NULL),
(7, 5, 'Consultorios', NULL, 3, 'mConsultorios.index', 1, NULL, NULL),
(8, 5, 'Procedimientos', NULL, 4, 'mProcedimientos.index', 1, NULL, NULL),
(9, 13, 'Consulta', 'pli-first-aid', 2, 'agendas.index', 1, NULL, NULL),
(10, 13, 'Agenda', 'pli-calendar-4', 1, 'agendaDia', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `submodulos`
--

CREATE TABLE `submodulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `modulo_id` bigint(20) UNSIGNED NOT NULL,
  `nom_submodulo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icono` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `submodulos`
--

INSERT INTO `submodulos` (`id`, `modulo_id`, `nom_submodulo`, `icono`, `orden`, `link`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'Usuarios', NULL, 1, 'usuarios.index', 1, NULL, NULL),
(2, 1, 'Permisos', NULL, 3, '', 1, NULL, NULL),
(3, 3, 'Pacientes', 'pli-male', 1, 'mPacientes.index', 1, NULL, NULL),
(5, 3, 'Administración del sistema', NULL, 3, '', 1, NULL, NULL),
(6, 3, 'Medico', NULL, 2, 'mMedicos.index', 1, NULL, NULL),
(7, 3, 'Clínica', NULL, 4, NULL, 1, NULL, NULL),
(13, 4, 'Odontología', 'pli-tooth', 1, 'mMedicos.index', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `identificacion` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primernombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `segundonombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primerapellido` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `segundoapellido` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `identificacion`, `name`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `email`, `password`, `remember_token`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0924383631', 'CARLOS MERA', 'CARLOS', 'ANTONIO', 'MERA', 'LEON', 'carlosmeraleon@gmail.com', '$2y$10$3s6piYYC9.1jwUCylRNSBuEqyMtuYZS8n2S7.uTo5teDd9ppbISWm', 'OnzQcUBhLIwhYtooPgT2KYwiq80oIwtqKsGqtypWIwHRwXWRJvEglN4Oorno', NULL, '2020-01-30 08:12:22', '2020-02-11 19:39:39', NULL),
(2, '0924383632', 'DEBORA GUERRERO', 'DEBORA', 'ELIZABETH', 'GUERRERO', 'ARIAS', 'lujomera10@gmail.com', '$2y$10$QCfn.6iYAXPclQDNEVIk4.7fq4M0g/cZXr9UhwjgR4TxqK8v924F.', NULL, 'http://localhost:8000/photos/a6AZtAfSFrx3NKMbFcqDF7CNpscbg836ERNcaSa1.png', '2020-02-04 21:12:48', '2020-02-11 17:14:35', NULL),
(3, NULL, 'jose', NULL, NULL, NULL, NULL, 'jose@josep.com', '$2y$10$bj6g7xqgeUDGQw4fFLtC8.9hWPkTHiJ1o4/Z6MATsXITfPLMHeHHe', NULL, NULL, '2020-02-04 22:34:55', '2020-02-05 06:55:45', '2020-02-05 06:55:45'),
(5, '0924383632', 'CESAR AREAS', 'CESAR', '', 'AREAS', 'GUERRERO', 'josepato@josep.com', '$2y$10$IQ.RIr8dVdZYMnQk4EcEB.ihPMjLb4hnfCfnGY4QFGfQla88jVzri', NULL, NULL, '2020-02-06 02:21:58', '2020-02-11 20:50:46', NULL),
(7, '0924383631', 'CARLOS MERA', 'CARLOS', 'ANTONIO', 'MERA', 'LEON', 'carlosmera@gmail.com', '$2y$10$j8TLyqoqAFdsmw4R98siFOyycLlxovYs1q5hs83Tnez1JuqlT3yJ.', NULL, NULL, '2020-02-06 02:24:16', '2020-02-11 17:03:32', '2020-02-11 17:03:32'),
(8, '0924383631', 'CARLOS MERA', 'CARLOS', 'LUIS', 'MERA', 'LEON', 'carlosm@gmail.com', '$2y$10$E5m00smynFGQNghOlwirIOcSpNppz4JQzWxxHgSyl3ObJZfzvaFTe', NULL, NULL, '2020-02-06 02:33:57', '2020-02-11 17:03:25', '2020-02-11 17:03:25'),
(9, '0924383632', 'CARLOS MERA', 'CARLOS', 'ANTONIO', 'MERA', 'LEON', 'carlosme@gmail.com', '$2y$10$H7Uzp3qLd/xIC5W71cSxX.doBeE/rFD1JuB3J2rq1Hjv.p5QwtCRK', NULL, 'http://localhost:8000/photos/KnQuV2qhDExtQyHR00AZYnojLeMfzYkrjlvXkRD9.png', '2020-02-06 02:39:52', '2020-02-11 17:03:21', '2020-02-11 17:03:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accions`
--
ALTER TABLE `accions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidads`
--
ALTER TABLE `especialidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form_odon`
--
ALTER TABLE `form_odon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_frmod_paciente_id` (`paciente_id`),
  ADD KEY `fk_frmod_agenda_id` (`agenda_id`);

--
-- Indices de la tabla `form_odon_diag_paci`
--
ALTER TABLE `form_odon_diag_paci`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_fo_tipo_diag` (`tipo_diag_id`),
  ADD KEY `fk_fo_form_odon` (`form_odon_id`),
  ADD KEY `fk_fo_usucrea` (`usuariocrea_id`),
  ADD KEY `fk_fo_usumod` (`usuariomod_id`),
  ADD KEY `fk_fo_paciente` (`paciente_id`);

--
-- Indices de la tabla `from_odon_tipo_diag`
--
ALTER TABLE `from_odon_tipo_diag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modulos_sistema_id_index` (`sistema_id`);

--
-- Indices de la tabla `m_canton`
--
ALTER TABLE `m_canton`
  ADD PRIMARY KEY (`id_m_canton`),
  ADD UNIQUE KEY `id_m_canton` (`id_m_canton`),
  ADD UNIQUE KEY `codigo_m_canton` (`codigo_m_canton`),
  ADD KEY `codigo_provincia` (`codigo_provincia`);

--
-- Indices de la tabla `m_categoria`
--
ALTER TABLE `m_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_clinica`
--
ALTER TABLE `m_clinica`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `ruc` (`ruc`),
  ADD KEY `provincia_id` (`codigo_provincia`);

--
-- Indices de la tabla `m_consultorio`
--
ALTER TABLE `m_consultorio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `clinica_id` (`clinica_id`);

--
-- Indices de la tabla `m_medico`
--
ALTER TABLE `m_medico`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `especialidad_id` (`especialidad_id`);

--
-- Indices de la tabla `m_paciente`
--
ALTER TABLE `m_paciente`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`) USING BTREE,
  ADD KEY `codigo_canton` (`codigo_canton`),
  ADD KEY `codigo_provincia` (`codigo_provincia`),
  ADD KEY `codigo_parroquia` (`codigo_parroquia`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `id_tipo_identificacion` (`id_tipo_identificacion`) USING BTREE,
  ADD KEY `pais_id` (`pais_id`) USING BTREE;

--
-- Indices de la tabla `m_pais`
--
ALTER TABLE `m_pais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_m_pais` (`id`);

--
-- Indices de la tabla `m_parroquia`
--
ALTER TABLE `m_parroquia`
  ADD PRIMARY KEY (`id_m_parroquia`),
  ADD UNIQUE KEY `id_m_parroquia` (`id_m_parroquia`),
  ADD UNIQUE KEY `codigo_m_parroquia` (`codigo_m_parroquia`),
  ADD KEY `codigo_canton` (`codigo_canton`);

--
-- Indices de la tabla `m_procedimiento`
--
ALTER TABLE `m_procedimiento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `m_producto`
--
ALTER TABLE `m_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_categoria_index` (`id_categoria`);

--
-- Indices de la tabla `m_provincia`
--
ALTER TABLE `m_provincia`
  ADD PRIMARY KEY (`id_m_provincia`),
  ADD UNIQUE KEY `id_m_provincia` (`id_m_provincia`),
  ADD UNIQUE KEY `codigo_m_provincia` (`codigo_m_provincia`);

--
-- Indices de la tabla `m_sexo`
--
ALTER TABLE `m_sexo`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `m_tipo_identificacion`
--
ALTER TABLE `m_tipo_identificacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `perfils`
--
ALTER TABLE `perfils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfils_sistema_id_index` (`sistema_id`);

--
-- Indices de la tabla `perfil_accions`
--
ALTER TABLE `perfil_accions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_accions_perfil_id_index` (`perfil_id`),
  ADD KEY `perfil_accions_accion_id_index` (`accion_id`),
  ADD KEY `perfil_accions_submodulo_id_index` (`submodulo_id`),
  ADD KEY `perfil_accions_submodulo2_id_index` (`submodulo2_id`),
  ADD KEY `perfil_accions_modulo_id_foreign` (`modulo_id`);

--
-- Indices de la tabla `perfil_usuarios`
--
ALTER TABLE `perfil_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_usuarios_perfil_id_index` (`perfil_id`),
  ADD KEY `perfil_usuarios_usuario_id_index` (`usuario_id`);

--
-- Indices de la tabla `p_agenda`
--
ALTER TABLE `p_agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_id` (`paciente_id`),
  ADD KEY `clinica_id` (`clinica_id`),
  ADD KEY `consultorio_id` (`consultorio_id`),
  ADD KEY `medico_id` (`medico_id`),
  ADD KEY `especialidad_id` (`especialidad_id`),
  ADD KEY `procedimiento_id` (`procedimiento_id`),
  ADD KEY `usuarioconfirma_id` (`usuarioconfirma_id`),
  ADD KEY `usuariocrea_id` (`usuariocrea_id`),
  ADD KEY `usuariomod_id` (`usuariomod_id`);

--
-- Indices de la tabla `p_horario_medico`
--
ALTER TABLE `p_horario_medico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `submodulo2s`
--
ALTER TABLE `submodulo2s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submodulo2s_submodulo_id_index` (`submodulo_id`);

--
-- Indices de la tabla `submodulos`
--
ALTER TABLE `submodulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submodulos_modulo_id_index` (`modulo_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accions`
--
ALTER TABLE `accions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `especialidads`
--
ALTER TABLE `especialidads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `form_odon`
--
ALTER TABLE `form_odon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `form_odon_diag_paci`
--
ALTER TABLE `form_odon_diag_paci`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `from_odon_tipo_diag`
--
ALTER TABLE `from_odon_tipo_diag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `m_canton`
--
ALTER TABLE `m_canton`
  MODIFY `id_m_canton` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT de la tabla `m_categoria`
--
ALTER TABLE `m_categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_clinica`
--
ALTER TABLE `m_clinica`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `m_consultorio`
--
ALTER TABLE `m_consultorio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `m_medico`
--
ALTER TABLE `m_medico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `m_paciente`
--
ALTER TABLE `m_paciente`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `m_pais`
--
ALTER TABLE `m_pais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT de la tabla `m_parroquia`
--
ALTER TABLE `m_parroquia`
  MODIFY `id_m_parroquia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1400;

--
-- AUTO_INCREMENT de la tabla `m_procedimiento`
--
ALTER TABLE `m_procedimiento`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `m_producto`
--
ALTER TABLE `m_producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_provincia`
--
ALTER TABLE `m_provincia`
  MODIFY `id_m_provincia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `m_sexo`
--
ALTER TABLE `m_sexo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `m_tipo_identificacion`
--
ALTER TABLE `m_tipo_identificacion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfils`
--
ALTER TABLE `perfils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfil_accions`
--
ALTER TABLE `perfil_accions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `perfil_usuarios`
--
ALTER TABLE `perfil_usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `p_agenda`
--
ALTER TABLE `p_agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `p_horario_medico`
--
ALTER TABLE `p_horario_medico`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `submodulo2s`
--
ALTER TABLE `submodulo2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `submodulos`
--
ALTER TABLE `submodulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `form_odon`
--
ALTER TABLE `form_odon`
  ADD CONSTRAINT `fk_frmod_agenda_id` FOREIGN KEY (`agenda_id`) REFERENCES `p_agenda` (`id`),
  ADD CONSTRAINT `fk_frmod_paciente_id` FOREIGN KEY (`paciente_id`) REFERENCES `m_paciente` (`id`);

--
-- Filtros para la tabla `form_odon_diag_paci`
--
ALTER TABLE `form_odon_diag_paci`
  ADD CONSTRAINT `fk_fo_form_odon` FOREIGN KEY (`form_odon_id`) REFERENCES `form_odon` (`id`),
  ADD CONSTRAINT `fk_fo_paciente` FOREIGN KEY (`paciente_id`) REFERENCES `m_paciente` (`id`),
  ADD CONSTRAINT `fk_fo_tipo_diag` FOREIGN KEY (`tipo_diag_id`) REFERENCES `from_odon_tipo_diag` (`id`),
  ADD CONSTRAINT `fk_fo_usucrea` FOREIGN KEY (`usuariocrea_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_fo_usumod` FOREIGN KEY (`usuariomod_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_sistema_id_foreign` FOREIGN KEY (`sistema_id`) REFERENCES `sistemas` (`id`);

--
-- Filtros para la tabla `m_canton`
--
ALTER TABLE `m_canton`
  ADD CONSTRAINT `m_canton_ibfk_1` FOREIGN KEY (`codigo_provincia`) REFERENCES `m_provincia` (`codigo_m_provincia`);

--
-- Filtros para la tabla `m_clinica`
--
ALTER TABLE `m_clinica`
  ADD CONSTRAINT `m_clinica_ibfk_1` FOREIGN KEY (`codigo_provincia`) REFERENCES `m_provincia` (`codigo_m_provincia`);

--
-- Filtros para la tabla `m_consultorio`
--
ALTER TABLE `m_consultorio`
  ADD CONSTRAINT `m_consultorio_ibfk_1` FOREIGN KEY (`clinica_id`) REFERENCES `m_clinica` (`id`);

--
-- Filtros para la tabla `m_medico`
--
ALTER TABLE `m_medico`
  ADD CONSTRAINT `m_medico_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `m_medico_ibfk_2` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidads` (`id`);

--
-- Filtros para la tabla `m_paciente`
--
ALTER TABLE `m_paciente`
  ADD CONSTRAINT `m_paciente_ibfk_1` FOREIGN KEY (`id_tipo_identificacion`) REFERENCES `m_tipo_identificacion` (`id`),
  ADD CONSTRAINT `m_paciente_ibfk_2` FOREIGN KEY (`pais_id`) REFERENCES `m_pais` (`id`),
  ADD CONSTRAINT `m_paciente_ibfk_3` FOREIGN KEY (`codigo_canton`) REFERENCES `m_canton` (`codigo_m_canton`),
  ADD CONSTRAINT `m_paciente_ibfk_4` FOREIGN KEY (`codigo_provincia`) REFERENCES `m_provincia` (`codigo_m_provincia`),
  ADD CONSTRAINT `m_paciente_ibfk_5` FOREIGN KEY (`codigo_parroquia`) REFERENCES `m_parroquia` (`codigo_m_parroquia`),
  ADD CONSTRAINT `m_paciente_ibfk_6` FOREIGN KEY (`sexo`) REFERENCES `m_sexo` (`id`);

--
-- Filtros para la tabla `m_parroquia`
--
ALTER TABLE `m_parroquia`
  ADD CONSTRAINT `m_parroquia_ibfk_1` FOREIGN KEY (`codigo_canton`) REFERENCES `m_canton` (`codigo_m_canton`);

--
-- Filtros para la tabla `m_producto`
--
ALTER TABLE `m_producto`
  ADD CONSTRAINT `products_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `m_categoria` (`id`);

--
-- Filtros para la tabla `perfils`
--
ALTER TABLE `perfils`
  ADD CONSTRAINT `perfils_sistema_id_foreign` FOREIGN KEY (`sistema_id`) REFERENCES `sistemas` (`id`);

--
-- Filtros para la tabla `perfil_accions`
--
ALTER TABLE `perfil_accions`
  ADD CONSTRAINT `perfil_accions_accion_id_foreign` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`),
  ADD CONSTRAINT `perfil_accions_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`),
  ADD CONSTRAINT `perfil_accions_perfil_id_foreign` FOREIGN KEY (`perfil_id`) REFERENCES `perfils` (`id`),
  ADD CONSTRAINT `perfil_accions_submodulo2_id_foreign` FOREIGN KEY (`submodulo2_id`) REFERENCES `submodulo2s` (`id`),
  ADD CONSTRAINT `perfil_accions_submodulo_id_foreign` FOREIGN KEY (`submodulo_id`) REFERENCES `submodulos` (`id`);

--
-- Filtros para la tabla `perfil_usuarios`
--
ALTER TABLE `perfil_usuarios`
  ADD CONSTRAINT `perfil_usuarios_perfil_id_foreign` FOREIGN KEY (`perfil_id`) REFERENCES `perfils` (`id`),
  ADD CONSTRAINT `perfil_usuarios_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `p_agenda`
--
ALTER TABLE `p_agenda`
  ADD CONSTRAINT `p_agenda_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `m_paciente` (`id`),
  ADD CONSTRAINT `p_agenda_ibfk_2` FOREIGN KEY (`clinica_id`) REFERENCES `m_clinica` (`id`),
  ADD CONSTRAINT `p_agenda_ibfk_3` FOREIGN KEY (`consultorio_id`) REFERENCES `m_consultorio` (`id`),
  ADD CONSTRAINT `p_agenda_ibfk_4` FOREIGN KEY (`medico_id`) REFERENCES `m_medico` (`id`),
  ADD CONSTRAINT `p_agenda_ibfk_5` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidads` (`id`),
  ADD CONSTRAINT `p_agenda_ibfk_6` FOREIGN KEY (`procedimiento_id`) REFERENCES `m_procedimiento` (`id`),
  ADD CONSTRAINT `p_agenda_ibfk_7` FOREIGN KEY (`usuarioconfirma_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `p_agenda_ibfk_8` FOREIGN KEY (`usuariocrea_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `p_agenda_ibfk_9` FOREIGN KEY (`usuariomod_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `submodulo2s`
--
ALTER TABLE `submodulo2s`
  ADD CONSTRAINT `submodulo2s_submodulo_id_foreign` FOREIGN KEY (`submodulo_id`) REFERENCES `submodulos` (`id`);

--
-- Filtros para la tabla `submodulos`
--
ALTER TABLE `submodulos`
  ADD CONSTRAINT `submodulos_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
