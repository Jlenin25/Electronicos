-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 04:06:11
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `electronicos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacens`
--

CREATE TABLE `almacens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_minimo` int(11) NOT NULL,
  `stock_maximo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `derivado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `derivado`, `created_at`, `updated_at`) VALUES
(1, 'Gerencia', '2021-10-23 09:28:07', '2021-10-23 09:28:07'),
(2, 'Logística', '2021-10-23 09:28:10', '2021-10-23 09:28:10'),
(3, 'Almacén', '2021-10-23 09:28:15', '2021-10-23 09:28:15'),
(4, 'Sistemas', '2021-10-23 09:28:19', '2021-10-23 09:28:19'),
(5, 'Ventas', '2021-10-23 09:28:25', '2021-10-23 09:28:25'),
(6, 'Operaciones', '2021-10-23 09:28:30', '2021-10-23 09:28:30'),
(7, 'Planeamiento', '2021-10-23 09:28:38', '2021-10-23 09:28:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Televisor', '2021-10-23 09:01:33', '2021-10-23 09:01:33'),
(2, 'Celular', '2021-10-23 09:01:33', '2021-10-23 09:01:49'),
(3, 'Laptop', '2021-10-23 09:02:04', '2021-10-23 09:02:04'),
(4, 'Impresora', '2021-10-23 09:02:15', '2021-10-23 09:02:15'),
(5, 'Parlante', '2021-10-23 09:02:56', '2021-10-23 09:02:56'),
(6, 'Audífono', '2021-10-23 09:03:13', '2021-10-23 09:03:13'),
(7, 'Mouse', '2021-10-23 09:04:21', '2021-10-23 09:04:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paginaweb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_estadocliente` bigint(20) UNSIGNED DEFAULT NULL,
  `razonsocial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_area` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `ruc`, `direccion`, `celular1`, `email1`, `paginaweb`, `id_estadocliente`, `razonsocial`, `contacto`, `celular2`, `email2`, `id_area`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '10586325681', 'AV INDUSTRIAL 518 LIMA', '987654321', 'WCURO@SENATI.PE', 'Pagina ejemplo', 1, 'JOSE AGUILAR PALMA', 'JOSE AGUILAR PALMA', '987654321', 'WCURO@SENATI.PE', 2, 4, '2021-10-23 09:43:52', '2021-10-23 09:43:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicions`
--

CREATE TABLE `condicions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `condicionesgenerales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `condicions`
--

INSERT INTO `condicions` (`id`, `condicionesgenerales`, `created_at`, `updated_at`) VALUES
(1, 'No se aceptan devoluciones después de 7 días.', '2021-10-23 09:19:10', '2021-10-23 09:19:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotis`
--

CREATE TABLE `cotis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cliente` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_expira` bigint(20) UNSIGNED DEFAULT NULL,
  `id_moneda` bigint(20) UNSIGNED DEFAULT NULL,
  `id_tiempoentrega` bigint(20) UNSIGNED DEFAULT NULL,
  `id_formapago` bigint(20) UNSIGNED DEFAULT NULL,
  `id_estado` bigint(20) UNSIGNED DEFAULT NULL,
  `id_piepagina` bigint(20) UNSIGNED DEFAULT NULL,
  `id_condicions` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cotis`
--

INSERT INTO `cotis` (`id`, `id_cliente`, `id_user`, `id_expira`, `id_moneda`, `id_tiempoentrega`, `id_formapago`, `id_estado`, `id_piepagina`, `id_condicions`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 2, 1, 1, 1, 2, 1, 1, '2021-10-23 23:27:23', '2021-10-23 23:27:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_das` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoclientes`
--

CREATE TABLE `estadoclientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `situacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estadoclientes`
--

INSERT INTO `estadoclientes` (`id`, `situacion`, `created_at`, `updated_at`) VALUES
(1, 'Activo', '2021-10-23 09:15:21', '2021-10-23 09:15:21'),
(2, 'Potencial', '2021-10-23 09:15:28', '2021-10-23 09:15:28'),
(3, 'Neutro', '2021-10-23 09:15:35', '2021-10-23 09:15:35'),
(4, 'Descartado', '2021-10-23 09:15:44', '2021-10-23 09:15:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `situacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `situacion`, `created_at`, `updated_at`) VALUES
(1, 'Abierto', '2021-10-23 09:11:23', '2021-10-23 09:11:23'),
(2, 'Pendiente', '2021-10-23 09:11:28', '2021-10-23 09:11:28'),
(3, 'Cerrado', '2021-10-23 09:11:35', '2021-10-23 09:11:35'),
(4, 'Proceso', '2021-10-23 09:11:44', '2021-10-23 09:11:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expiras`
--

CREATE TABLE `expiras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `expiras`
--

INSERT INTO `expiras` (`id`, `dias`, `created_at`, `updated_at`) VALUES
(1, '10 días', '2021-10-23 09:20:22', '2021-10-23 09:20:22'),
(2, '15 días', '2021-10-23 09:20:26', '2021-10-23 09:20:26'),
(3, '20 días', '2021-10-23 09:20:29', '2021-10-23 09:20:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapagos`
--

CREATE TABLE `formapagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pago` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `formapagos`
--

INSERT INTO `formapagos` (`id`, `pago`, `created_at`, `updated_at`) VALUES
(1, 'Efectivo', '2021-10-23 09:18:13', '2021-10-23 09:18:13'),
(2, '10 días', '2021-10-23 09:18:16', '2021-10-23 09:18:16'),
(3, '15 días', '2021-10-23 09:18:19', '2021-10-23 09:18:19'),
(4, '20 días', '2021-10-23 09:18:23', '2021-10-23 09:18:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_inci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_emp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_clie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logisticas`
--

CREATE TABLE `logisticas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_log` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_emp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_estado` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_10_01_040127_create_categorias_table', 1),
(5, '2021_10_01_200721_create_permission_tables', 1),
(6, '2021_10_05_161445_create_almacens_table', 1),
(7, '2021_10_05_184236_create_logisticas_table', 1),
(8, '2021_10_05_222058_create_incidencias_table', 1),
(9, '2021_10_05_222353_create_operaciones_table', 1),
(10, '2021_10_06_014330_create_dashboards_table', 1),
(11, '2021_10_14_005633_create_users_table', 1),
(12, '2021_10_17_215012_create_expiras_table', 1),
(13, '2021_10_17_220505_create_monedas_table', 1),
(14, '2021_10_17_221116_create_tiempoentregas_table', 1),
(15, '2021_10_17_221137_create_formapagos_table', 1),
(16, '2021_10_17_221154_create_estados_table', 1),
(17, '2021_10_18_021724_create_piepaginas_table', 1),
(18, '2021_10_20_011822_create_condicions_table', 1),
(19, '2021_10_22_004825_create_areas_table', 1),
(20, '2021_10_22_151600_create_estadoclientes_table', 1),
(21, '2021_10_22_151705_create_clientes_table', 1),
(22, '2021_10_23_004041_create_proveedors_table', 1),
(23, '2021_10_23_004137_create_productos_table', 1),
(24, '2021_10_23_011851_create_cotis_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monedas`
--

CREATE TABLE `monedas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `monedas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `monedas`
--

INSERT INTO `monedas` (`id`, `monedas`, `created_at`, `updated_at`) VALUES
(1, 'Euros', '2021-10-23 09:20:35', '2021-10-23 09:20:35'),
(2, 'Soles', '2021-10-23 09:20:40', '2021-10-23 09:20:40'),
(3, 'Dólares', '2021-10-23 09:20:43', '2021-10-23 09:20:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operaciones`
--

CREATE TABLE `operaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_oper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_emp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.index', 'ver lista de dashboard', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(2, 'dashboard.create', 'crear dashboard', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(3, 'dashboard.edit', 'editar dashboard', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(4, 'dashboard.destroy', 'eliminar dashboard', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(5, 'users.index', 'ver lista de usuarios', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(6, 'users.create', 'crear usuarios', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(7, 'users.edit', 'editar usuarios', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(8, 'users.destroy', 'eliminar usuarios', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(9, 'proveedores.index', 'ver lista de proveedores', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(10, 'proveedores.create', 'crear proveedores', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(11, 'proveedores.edit', 'editar proveedores', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(12, 'proveedores.destroy', 'eliminar proveedores', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(13, 'logistica.index', 'ver lista de logistica', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(14, 'logistica.create', 'crear logistica', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(15, 'logistica.edit', 'editar logistica', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(16, 'logistica.destroy', 'eliminar logistica', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(17, 'almacen.index', 'ver lista de almacen', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(18, 'almacen.create', 'crear almacen', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(19, 'almacen.edit', 'editar almacen', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(20, 'almacen.destroy', 'eliminar almacen', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(21, 'operaciones.index', 'ver lista de operaciones', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(22, 'operaciones.create', 'crear operaciones', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(23, 'operaciones.edit', 'editar operaciones', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(24, 'operaciones.destroy', 'eliminar operaciones', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(25, 'categorias.index', 'ver catergorias', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(26, 'categorias.create', 'crear categorias', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(27, 'categorias.edit', 'editar categorias', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(28, 'categorias.destroy', 'eliminar categorias', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(29, 'productos.index', 'ver productos', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(30, 'productos.create', 'crear productos', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(31, 'productos.edit', 'editar productos', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(32, 'productos.destroy', 'eliminar productos', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(33, 'incidencias.index', 'ver incidencias', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(34, 'incidencias.create', 'crear incidencias', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(35, 'incidencias.edit', 'editar incidencias', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(36, 'incidencias.destroy', 'eliminar incidencias', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(37, 'roles.index', 'ver roles', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(38, 'roles.create', 'crear roles', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(39, 'roles.edit', 'editar roles', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(40, 'roles.destroy', 'eliminar roles', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(41, 'clientes.index', 'Ver Cliente', 'web', NULL, NULL),
(42, 'clientes.edit', 'Editar Cliente', 'web', NULL, NULL),
(43, 'clientes.create', 'Crear Cliente', 'web', NULL, NULL),
(44, 'clientes.destroy', 'Eliminar Cliente', 'web', NULL, NULL),
(45, 'estados.index', 'Ver Estado Cotización', 'web', NULL, NULL),
(46, 'estados.create', 'Crear Estado Cotización', 'web', NULL, NULL),
(47, 'estados.edit', 'Editar Estado Cotización', 'web', NULL, NULL),
(48, 'estados.destroy', 'Eliminar Estado Cotización', 'web', NULL, NULL),
(49, 'expiras.index', 'Ver Expira', 'web', NULL, NULL),
(50, 'expiras.create', 'Crear expira', 'web', NULL, NULL),
(51, 'expiras.edit', 'Editar expira', 'web', NULL, NULL),
(52, 'expiras.destroy', 'Eliminar expira', 'web', NULL, NULL),
(53, 'monedas.index', 'Ver monedas', 'web', NULL, NULL),
(54, 'monedas.create', 'Crear moneda', 'web', NULL, NULL),
(55, 'monedas.edit', 'Editar Moneda', 'web', NULL, NULL),
(56, 'monedas.destroy', 'Eliminar Moneda', 'web', NULL, NULL),
(57, 'tiempoentregas.index', 'Ver Tiempo de entrega', 'web', NULL, NULL),
(58, 'tiempoentregas.create', 'Crear tiempo de entrega', 'web', NULL, NULL),
(59, 'tiempoentregas.edit', 'Editar tiempo de entrega', 'web', NULL, NULL),
(60, 'tiempoentregas.destroy', 'Eliminar tiempo de entrega', 'web', NULL, NULL),
(61, 'piepaginas.index', 'Ver pie de página', 'web', NULL, NULL),
(62, 'piepaginas.create', 'Crear pie de página', 'web', NULL, NULL),
(63, 'piepaginas.edit', 'Editar pie de página', 'web', NULL, NULL),
(64, 'piepaginas.destroy', 'Eliminar pie de página', 'web', NULL, NULL),
(65, 'condicions.index', 'Ver condiciones generales', 'web', NULL, NULL),
(66, 'condicions.create', 'Crear Condiciones generales', 'web', NULL, NULL),
(67, 'condicions.edit', 'Editar condiciones generales', 'web', NULL, NULL),
(68, 'condicions.destroy', 'Eliminar condiciones generales', 'web', NULL, NULL),
(69, 'formapagos.index', 'Ver forma de pago', 'web', NULL, NULL),
(70, 'formapagos.create', 'Crear forma de pago', 'web', NULL, NULL),
(71, 'formapagos.edit', 'Editar forma de pago', 'web', NULL, NULL),
(72, 'formapagos.destroy', 'Eliminar forma de pago', 'web', NULL, NULL),
(73, 'cotis.index', 'Ver cotización', 'web', NULL, NULL),
(74, 'cotis.create', 'Crear cotización', 'web', NULL, NULL),
(75, 'cotis.edit', 'Editar cotización', 'web', NULL, NULL),
(76, 'cotis.destroy', 'Eliminar cotización', 'web', NULL, NULL),
(77, 'areas.index', 'Ver área', 'web', NULL, NULL),
(78, 'areas.create', 'Crear área', 'web', NULL, NULL),
(79, 'areas.edit', 'Editar área', 'web', NULL, NULL),
(80, 'areas.destroy', 'Elminar área', 'web', NULL, NULL),
(81, 'estadoclientes.index', 'Ver estado cliente-proveedor', 'web', NULL, NULL),
(82, 'estadoclientes.create', 'Crear estado cliente-proveedor', 'web', NULL, NULL),
(83, 'estadoclientes.edit', 'Editar estado cliente-proveedor', 'web', NULL, NULL),
(84, 'estadoclientes.destroy', 'Eliminar estado cliente-proveedor', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piepaginas`
--

CREATE TABLE `piepaginas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `piedepagina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `piepaginas`
--

INSERT INTO `piepaginas` (`id`, `piedepagina`, `created_at`, `updated_at`) VALUES
(1, 'Ejemplo 1', '2021-10-23 09:19:17', '2021-10-23 09:19:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preciocosto` double NOT NULL,
  `detalle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibles` int(11) NOT NULL,
  `id_categoria` bigint(20) UNSIGNED DEFAULT NULL,
  `id_proveedor` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fabricante` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precioventa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `preciocosto`, `detalle`, `descripcion`, `disponibles`, `id_categoria`, `id_proveedor`, `created_at`, `updated_at`, `fabricante`, `precioventa`) VALUES
(1, 'LG XBOOM GO PM5', 549, 'PARLANTE PORTÁTIL BLUETOOTH SPEAKER CON DTS STEREO LG XBOOM GO PM5', '¡Disfruta de un sonido balanceado en cualquier lugar! Con la exclusiva línea LG Xboom Go PM5 es fácil de transportar y su acabado mate suave al tacto proporciona un agarre adicional para que no se te escape de la mano. Mientras que gracias a la Tecnología Meridian podrás disfrutar de un sonido de alta calidad superior. Desde 1977, Meridian ha brindado soluciones de audio innovadoras y elegantes de alto rendimiento. Derribaron las fronteras, rompieron las reglas y crearon productos que redefinieron la forma en que la gente disfruta de su música y películas, dondequiera que estén. ¡No esperes más! Miles de productos, a los mejores precios, esperan por ti en el catálogo virtual de EFE.', 3, 5, 1, '2021-10-23 09:50:01', '2021-10-23 10:32:12', '', 0),
(3, 'TV LG UHD 55\"', 2699, 'TV LG UHD 55\" 4K SMART THINQ AI 55UP7750PSB (2021)', '¡Disfruta de un sonido balanceado en cualquier lugar! Con la exclusiva línea LG Xboom Go PM5 es fácil de transportar y su acabado mate suave al tacto proporciona un agarre adicional para que no se te escape de la mano. Mientras que gracias a la Tecnología Meridian podrás disfrutar de un sonido de alta calidad superior. Desde 1977, Meridian ha brindado soluciones de audio innovadoras y elegantes de alto rendimiento. Derribaron las fronteras, rompieron las reglas y crearon productos que redefinieron la forma en que la gente disfruta de su música y películas, dondequiera que estén. ¡No esperes más! Miles de productos, a los mejores precios, esperan por ti en el catálogo virtual de EFE.', 4, 1, 1, '2021-10-23 10:28:24', '2021-10-23 10:28:24', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedors`
--

CREATE TABLE `proveedors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paginaweb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_estadocliente` bigint(20) UNSIGNED DEFAULT NULL,
  `razonsocial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contaco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular2` int(11) DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_area` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedors`
--

INSERT INTO `proveedors` (`id`, `ruc`, `direccion`, `celular1`, `email1`, `paginaweb`, `id_estadocliente`, `razonsocial`, `contaco`, `celular2`, `email2`, `id_area`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '10586325681', 'AV INDUSTRIAL 518 LIMA', '987654321', 'WCURO@SENATI.PE', 'Pagina ejemplo', 3, 'JOSE AGUILAR PALMA', 'JOSE AGUILAR PALMA', 987654321, 'WCURO@SENATI.PE', 5, 2, '2021-10-23 09:40:49', '2021-10-23 09:40:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(2, 'Trabajador', 'web', '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(3, 'Vendedor', 'web', '2021-10-23 08:53:54', '2021-10-23 08:53:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 2),
(11, 3),
(12, 1),
(12, 2),
(12, 3),
(13, 1),
(13, 2),
(13, 3),
(14, 1),
(14, 2),
(14, 3),
(15, 1),
(15, 2),
(15, 3),
(16, 1),
(16, 2),
(16, 3),
(17, 1),
(17, 2),
(17, 3),
(18, 1),
(18, 2),
(18, 3),
(19, 1),
(19, 2),
(19, 3),
(20, 1),
(20, 2),
(20, 3),
(21, 1),
(21, 2),
(21, 3),
(22, 1),
(22, 2),
(22, 3),
(23, 1),
(23, 2),
(23, 3),
(24, 1),
(24, 2),
(24, 3),
(25, 1),
(25, 2),
(25, 3),
(26, 1),
(26, 2),
(26, 3),
(27, 1),
(27, 2),
(27, 3),
(28, 1),
(28, 2),
(28, 3),
(29, 1),
(29, 2),
(29, 3),
(30, 1),
(30, 2),
(30, 3),
(31, 1),
(31, 2),
(31, 3),
(32, 1),
(32, 2),
(32, 3),
(33, 1),
(33, 2),
(33, 3),
(34, 1),
(34, 2),
(34, 3),
(35, 1),
(35, 2),
(35, 3),
(36, 1),
(36, 2),
(36, 3),
(37, 1),
(38, 1),
(39, 1),
(40, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempoentregas`
--

CREATE TABLE `tiempoentregas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tiempoentregas`
--

INSERT INTO `tiempoentregas` (`id`, `dias`, `created_at`, `updated_at`) VALUES
(1, '10 días', '2021-10-23 09:18:31', '2021-10-23 09:18:31'),
(2, '15 días', '2021-10-23 09:18:34', '2021-10-23 09:18:34'),
(3, '20 días', '2021-10-23 09:18:37', '2021-10-23 09:18:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `docu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `id_rol` bigint(20) UNSIGNED DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `docu`, `direccion`, `estado`, `email`, `email_verified_at`, `id_rol`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mauro', 'Benancio', '12345678', 'Los Olivos, Rosales de pro', 'activo', 'mauro@gmail.com', NULL, NULL, '$2y$10$1ANUnUxmKnAM8yDabmzl6uLEFYj7./mUG3OQVyA9jZRtao2Ywx3v2', NULL, '2021-10-23 08:51:39', '2021-10-23 08:51:39'),
(2, 'Lenin', 'Monrroy Vasquez', '72329223', 'jr. 2 de mayo', 'activo', 'lenin@gmail.com', NULL, NULL, '$2y$10$tm1aaDUt.XVQyxpjBSMsSO6xMPpXtI1ndXaJ7EnOYUm2E2QQaM1Ha', NULL, '2021-10-23 08:52:47', '2021-10-23 08:52:47'),
(3, 'Nicole', 'Pareja Gutierrez', '12345679', 'jr. no se', 'activo', 'nicole@gmail.com', NULL, NULL, '$2y$10$AaW60xwFjtuA7Bvkgsn.nO7vPvfU2iuUp5Io/RR37ggJrkWj3XwKy', NULL, '2021-10-23 08:57:07', '2021-10-23 08:57:07'),
(4, 'Alexis', 'Campos Alvarado', '87564231', 'jr. no se', 'activo', 'alexis@gmail.com', NULL, NULL, '$2y$10$I2KqsE.LYV1MMDpFAXPPZeShD5SX/N5cQWQYaQhy2HzD7.VC4Kxse', NULL, '2021-10-23 08:58:05', '2021-10-23 08:58:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacens`
--
ALTER TABLE `almacens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_id_estadocliente_foreign` (`id_estadocliente`),
  ADD KEY `clientes_id_area_foreign` (`id_area`),
  ADD KEY `clientes_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `condicions`
--
ALTER TABLE `condicions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotis`
--
ALTER TABLE `cotis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cotis_id_cliente_foreign` (`id_cliente`),
  ADD KEY `cotis_id_user_foreign` (`id_user`),
  ADD KEY `cotis_id_expira_foreign` (`id_expira`),
  ADD KEY `cotis_id_moneda_foreign` (`id_moneda`),
  ADD KEY `cotis_id_tiempoentrega_foreign` (`id_tiempoentrega`),
  ADD KEY `cotis_id_formapago_foreign` (`id_formapago`),
  ADD KEY `cotis_id_estado_foreign` (`id_estado`),
  ADD KEY `cotis_id_piepagina_foreign` (`id_piepagina`),
  ADD KEY `cotis_id_condicions_foreign` (`id_condicions`);

--
-- Indices de la tabla `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadoclientes`
--
ALTER TABLE `estadoclientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expiras`
--
ALTER TABLE `expiras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `formapagos`
--
ALTER TABLE `formapagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logisticas`
--
ALTER TABLE `logisticas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `monedas`
--
ALTER TABLE `monedas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `piepaginas`
--
ALTER TABLE `piepaginas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id_categoria_foreign` (`id_categoria`),
  ADD KEY `productos_id_proveedor_foreign` (`id_proveedor`);

--
-- Indices de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proveedors_id_estadocliente_foreign` (`id_estadocliente`),
  ADD KEY `proveedors_id_area_foreign` (`id_area`),
  ADD KEY `proveedors_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `tiempoentregas`
--
ALTER TABLE `tiempoentregas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_docu_unique` (`docu`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_rol_foreign` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacens`
--
ALTER TABLE `almacens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `condicions`
--
ALTER TABLE `condicions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cotis`
--
ALTER TABLE `cotis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadoclientes`
--
ALTER TABLE `estadoclientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `expiras`
--
ALTER TABLE `expiras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formapagos`
--
ALTER TABLE `formapagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logisticas`
--
ALTER TABLE `logisticas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `monedas`
--
ALTER TABLE `monedas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `piepaginas`
--
ALTER TABLE `piepaginas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tiempoentregas`
--
ALTER TABLE `tiempoentregas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_id_area_foreign` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_id_estadocliente_foreign` FOREIGN KEY (`id_estadocliente`) REFERENCES `estadoclientes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `cotis`
--
ALTER TABLE `cotis`
  ADD CONSTRAINT `cotis_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cotis_id_condicions_foreign` FOREIGN KEY (`id_condicions`) REFERENCES `condicions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cotis_id_estado_foreign` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cotis_id_expira_foreign` FOREIGN KEY (`id_expira`) REFERENCES `expiras` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cotis_id_formapago_foreign` FOREIGN KEY (`id_formapago`) REFERENCES `formapagos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cotis_id_moneda_foreign` FOREIGN KEY (`id_moneda`) REFERENCES `monedas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cotis_id_piepagina_foreign` FOREIGN KEY (`id_piepagina`) REFERENCES `piepaginas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cotis_id_tiempoentrega_foreign` FOREIGN KEY (`id_tiempoentrega`) REFERENCES `tiempoentregas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cotis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_id_proveedor_foreign` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedors` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedors`
--
ALTER TABLE `proveedors`
  ADD CONSTRAINT `proveedors_id_area_foreign` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedors_id_estadocliente_foreign` FOREIGN KEY (`id_estadocliente`) REFERENCES `estadoclientes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedors_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_rol_foreign` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
