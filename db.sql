-- --------------------------------------------------------
-- Host:                         homerosa.es
-- Versión del servidor:         10.3.39-MariaDB-0ubuntu0.20.04.2 - Ubuntu 20.04
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para admin_domoV9
CREATE DATABASE IF NOT EXISTS `admin_domoV9` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `admin_domoV9`;

-- Volcando estructura para tabla admin_domoV9.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla admin_domoV9.categorias: ~10 rows (aproximadamente)
INSERT INTO `categorias` (`id`, `categoria`, `imagen`) VALUES
	(1, 'Accesorios', 'dedbf6978eb601e6d9b10b99c21983fd.jpg'),
	(2, 'Bocinas', '6a384a05df5810087650349a1cbde930.jpg'),
	(3, 'Barras led', 'ef865027c173f46e01ec06c47d2e7513.jpg'),
	(4, 'Faros', 'b50ea75059859f10c887f523be0d1ace.jpg'),
	(5, 'Luces interior', '14a926b810c93fcac04405be90481e02.jpg'),
	(6, 'Luces exterior', 'e7c1581122dd7acedda2dacbe7d448af.jpg'),
	(7, 'Juegos de luces', '96966e5ec67ec6e3fda8835429666a59.jpg'),
	(8, 'Pilotos', '30593145cf746eeb5bde3b61994cc861.jpg'),
	(10, 'Barras led estroboscópica ', '2617fe9e7bb9271028684caa2e057db8.jpg'),
	(11, 'Cajas controladoras', 'e0684b097f3332c9adf31d455f08ebfe.jpg');

-- Volcando estructura para tabla admin_domoV9.opciones
CREATE TABLE IF NOT EXISTS `opciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `precio_compra` int(11) DEFAULT NULL,
  `envio` int(11) DEFAULT NULL,
  `precio_venta` int(11) DEFAULT NULL,
  `imagen1` varchar(50) DEFAULT NULL,
  `imagen2` varchar(50) DEFAULT NULL,
  `imagen3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_opciones_productos` (`idproducto`),
  CONSTRAINT `FK_opciones_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla admin_domoV9.opciones: ~0 rows (aproximadamente)

-- Volcando estructura para tabla admin_domoV9.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autonumero` int(11) DEFAULT NULL,
  `idcate` int(11) DEFAULT NULL,
  `titulo` char(50) NOT NULL,
  `unidades` int(11) DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `video` varchar(50) DEFAULT NULL,
  `tienda` varchar(50) DEFAULT NULL,
  `enlace` mediumtext DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  `fechafin_novedad` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_productos_cateriasproductos` (`idcate`) USING BTREE,
  KEY `autonumero` (`autonumero`),
  CONSTRAINT `FK_productos_categorias` FOREIGN KEY (`idcate`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla admin_domoV9.productos: ~22 rows (aproximadamente)
INSERT INTO `productos` (`id`, `autonumero`, `idcate`, `titulo`, `unidades`, `descripcion`, `video`, `tienda`, `enlace`, `fecha_entrada`, `fechafin_novedad`) VALUES
	(1, 1, 1, 'Base conector de remolque de empotrar de 7 pines.', 1, 'Conector estándar europeo de aleación de aluminio.', '', 'Shop1102959089 Store', 'https://es.aliexpress.com/item/1005006068538280.html?spm=a2g0o.productlist.main.51.23cc499bM54FnH&algo_pvid=342e775c-c656-4c21-8748-34a8ecb09685&algo_exp_id=342e775c-c656-4c21-8748-34a8ecb09685-25&pdp_npi=4%40dis%21EUR%2114.50%214.75%21%21%21110.76%2136.29%21%40210384b217119110664885004ec41b%2112000035581729056%21sea%21ES%21137523091%21&curPageLogUid=yaEn5BWbQ7x5&utparam-url=scene%3Asearch%7Cquery_from%3A\r\n', '2024-06-03', '2024-06-03'),
	(2, 2, 1, 'Kit conexiones remolque macho y hembra 7 polos.', 2, 'Carcasa de aleación de aluminio y latón.\r\nPin 1 - Cable amarillo (indicador de dirección Izquierda).\r\nPin 2 - Cable azul (luces antiniebla traseras).\r\nPin 3 - Cable blanco (negativo).\r\nPin 4 - Cable verde (indicador de dirección derecha).\r\nPin 5 - Cable marrón (posición derecha).\r\nPin 6 - Cable rojo (luces de freno)\r\nPin 7-Cable negro (Posición izquierda).\r\n\r\n', '', 'AOHEWEI Official Store', 'https://es.aliexpress.com/item/1005006210568730.html?pdp_npi=4%40dis%21EUR%21%E2%82%AC%209%2C02%21%E2%82%AC%208%2C50%21%21%219.55%219.00%21%402103854017122142791098988ee8f4%2112000036370482592%21sh%21ES%21137523091%21&spm=a2g0o.store_pc_allItems_or_groupList.new_all_items_2007607808231.1005006210568730&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(3, 3, 1, 'Cable espiral de 7 polos y 3 metros longitud.', 1, 'Se utiliza para conectar las luces del vehículo al remolque.\r\nConexión de enchufe de 7 pines macho a hembra.\r\nEl cable en espiral se puede extender hasta 2m en condiciones normales de trabajo.\r\nLongitud máxima de trabajo sugerida: 2 m.\r\nLongitud máxima del cable: 3 m.', '', 'LX World Car Parts Store', 'https://es.aliexpress.com/item/1005006057139123.html?spm=a2g0o.productlist.main.45.4aee5203Mo4L9o&algo_pvid=e73134f5-6b86-4334-8a19-9f8a4df0abc3&algo_exp_id=e73134f5-6b86-4334-8a19-9f8a4df0abc3-22&pdp_npi=4%40dis%21EUR%2110.58%2110.58%21%21%2111.14%2111.14%21%40211b801a17119102630428055e59ed%2112000035530596211%21sea%21ES%21137523091%21&curPageLogUid=iREKRNI0a2G0&utparam-url=scene%3Asearch%7Cquery_from%3A\r\n\r\n', '2024-06-03', '2024-06-03'),
	(8, 4, 1, 'Regulador de voltaje de 10A.', 1, 'Reductor de tensión de 24V a 12V.\r\n120W.', '', 'DGXBY Official Store', 'https://es.aliexpress.com/item/1005003512825127.html?spm=a2g0o.productlist.main.35.458ezEzdzEzdjG&algo_pvid=af19156c-03ae-4054-8785-2420cede941c&algo_exp_id=af19156c-03ae-4054-8785-2420cede941c-17&pdp_npi=4%40dis%21EUR%216.53%216.25%21%21%216.91%216.61%21%40211b813b17122161841492450e5de2%2112000026122091056%21sea%21ES%21137523091%21&curPageLogUid=2guGthTxupqS&utparam-url=scene%3Asearch%7Cquery_from%3A\r\n', '2024-06-03', '2024-06-03'),
	(9, 5, 1, 'Regulador de voltaje de 20A.', 1, 'Reductor de tensión de 24V a 12V.\r\n240W.', '', 'DGXBY Official Store', 'https://es.aliexpress.com/item/1005003512825127.html?spm=a2g0o.productlist.main.35.458ezEzdzEzdjG&algo_pvid=af19156c-03ae-4054-8785-2420cede941c&algo_exp_id=af19156c-03ae-4054-8785-2420cede941c-17&pdp_npi=4%40dis%21EUR%216.53%216.25%21%21%216.91%216.61%21%40211b813b17122161841492450e5de2%2112000026122091056%21sea%21ES%21137523091%21&curPageLogUid=2guGthTxupqS&utparam-url=scene%3Asearch%7Cquery_from%3A\r\n', '2024-06-03', '2024-06-03'),
	(10, 6, 1, 'Conector de remolque aéreo de 7 pines.', 1, 'Conector estándar europeo de aleación de aluminio.\r\n', '', 'AOHEWEI Official Store', 'https://es.aliexpress.com/item/1005002223430035.html?pdp_npi=4%40dis%21EUR%21%E2%82%AC%205%2C26%21%E2%82%AC%204%2C96%21%21%215.57%215.25%21%40211b801917122147191051971e8740%2112000019378377509%21sh%21ES%21137523091%21&spm=a2g0o.store_pc_allItems_or_groupList.new_all_items_2007607808231.1005002223430035&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(11, 7, 1, 'Cinta reflectante adhesiva 5 cm x 10 m. (Ancho x L', 1, 'Hecho de película reflectante, es altamente visible a la luz, impermeable, duradero.\r\nAltamente reflectante, lo que ayuda a identificar los vehículos y evita accidentes cuando se conduce de noche.\r\nCon adhesivo de alta resistencia, la cinta reflectante se puede pegar en cualquier superficie, metal, madera, plástico y nailon.\r\n\r\nColor: Amarillo/Rojo/Blanco/Azul/Verde.', '', 'Xin safe tape Store', 'https://es.aliexpress.com/item/1005002143228657.html?spm=a2g0o.productlist.main.31.1f5a4792mGO89z&algo_pvid=9af8b533-3d85-41c2-a1ba-32f3fb66e8ed&algo_exp_id=9af8b533-3d85-41c2-a1ba-32f3fb66e8ed-15&pdp_npi=4%40dis%21EUR%218.58%218.23%21%21%219.09%218.72%21%40210388c917122174794717411ed220%2112000018879923136%21sea%21ES%21137523091%21&curPageLogUid=spSROrXIsyYp&utparam-url=scene%3Asearch%7Cquery_from%3A\r\n', '2024-06-03', '2024-06-03'),
	(12, 8, 1, 'Cinta reflectante adhesiva 5 cm x 30 m (Ancho x La', 1, 'Hecho de película reflectante, es altamente visible a la luz, impermeable, duradero.\r\nAltamente reflectante, lo que ayuda a identificar los vehículos y evita accidentes cuando se conduce de noche.\r\nCon adhesivo de alta resistencia, la cinta reflectante se puede pegar en cualquier superficie, metal, madera, plástico y nailon.\r\n\r\nColor: Amarillo/Rojo/Blanco/Azul/Verde.', '', 'Xin safe tape Store', 'https://es.aliexpress.com/item/4001116122579.html?pdp_npi=4%40dis%21EUR%21%E2%82%AC%2046%2C49%21%E2%82%AC%2026%2C96%21%21%2149.23%2128.55%21%402103892f17122372624212767ecc63%2110000014505338917%21sh%21ES%21137523091%21&spm=a2g0o.store_pc_allItems_or_groupList.new_all_items_2007599340818.4001116122579&gatewayAdapt=glo2esp#nav-specification\r\n', '2024-06-03', '2024-06-03'),
	(13, 9, 1, 'Llavero acrílico con luz.', 1, 'Material: plástico.\r\nColor: negro/blanco.\r\nDiámetro del tablero acrílico: aprox. 55mm/2,16"\r\nFuente de alimentación: Batería CR2025.\r\nPresione una vez para encender y Presione durante 3 segundos para apagar).\r\n7 colores: rojo, verde, azul, amarillo, cian y blanco.\r\n', '', 'S&Z accessories Store', '', '2024-06-03', '2024-06-03'),
	(14, 10, 1, 'Botonera de 2 interruptores.', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.\r\n', '', 'Daiertek Electric Official     //       NICEYARD O', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(15, 11, 1, 'Botonera de 2 interruptores +USB', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.', '', 'Daiertek Electric Official      //      NICEYARD O', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n\r\n\r\n', '2024-06-03', '2024-06-03'),
	(16, 12, 1, 'Botonera de 3 interruptores.', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.', '', 'Daiertek Electric Official   //   NICEYARD Online ', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(17, 13, 1, 'Botonera de 3 interruptores + USB.', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.', '', 'Daiertek Electric Official   //   NICEYARD Online ', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(18, 14, 1, 'Botonera de 4 interruptores.', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.\r\n', '', 'Daiertek Electric Official   //   NICEYARD Online ', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(19, 15, 1, 'Botonera de 4 interruptores + USB', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.\r\n', '', 'Daiertek Electric Official  //  NICEYARD Online St', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n\r\n', '2024-06-03', '2024-06-03'),
	(20, 16, 1, 'Botonera de 5 interruptores', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.', '', 'Daiertek Electric Official   //   NICEYARD Online ', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(21, 17, 1, 'Botonera de 5 interruptores + USB', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.', '', 'Daiertek Electric Official   //   NICEYARD Online ', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(22, 18, 1, 'Botonera de 6 interruptores.', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.', '', 'Daiertek Electric Official   //   NICEYARD Online ', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(23, 19, 1, 'Botonera de 7 interruptores + USB', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.', '', 'Daiertek Electric Official   //   NICEYARD Online ', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(24, 20, 1, 'Botonera de 8 interruptores', 1, 'Colores: Azul, rojo, verde.\r\n\r\nMaterial: Aluminio + ABS + metal\r\nVoltaje de entrada: 12V/24V\r\nCorriente nominal: 12V:20A 24V:10A\r\nNúmero de pines: 5 pines\r\nEste panel de interruptores se puede utilizar en circuitos de 12V y 24V\r\nInterruptores basculantes con luz de posición y de encendido, voltímetro y USB.', '', 'Daiertek Electric Official   //   NICEYARD Online ', 'https://es.aliexpress.com/item/1005004625038035.html?spm=a2g0o.detail.pcDetailTopMoreOtherSeller.6.4e94m45Wm45WfK&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40050.354490.0&scm_id=1007.40050.354490.0&scm-url=1007.40050.354490.0&pvid=bf4f370d-d098-497b-b43e-f7079244bcc2&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40050.354490.0,pvid:bf4f370d-d098-497b-b43e-f7079244bcc2,tpp_buckets:668%232846%238114%231999&pdp_npi=4%40dis%21EUR%218.37%218.37%21%21%218.86%218.86%21%40211b813c17125992348938413ecb0b%2112000029900013500%21rec%21ES%21137523091%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A\r\n\r\nhttps://es.aliexpress.com/item/1005005890582062.html?spm=a2g0o.order_list.order_list_main.163.4b3f194dhW44i8&gatewayAdapt=glo2esp\r\n', '2024-06-03', '2024-06-03'),
	(25, 21, 1, 'Carlin-kit 5.0 - 2AIR conexion inalambrica, carpla', 1, '1. Enchufe el 2air en su coche Existente cable CarPlay o Andorid auto -Puerto USB habilitado\r\n2. Empareje el Bluetooth de su teléfono con el 2air, mantenga el Wi-Fi de su teléfono encendido\r\n3. Disfrute DE SU CarPlay inalámbrico/Android Auto\r\n\r\nModelo: CPC200-2air\r\nMétodo de conexión: wifi y Bluetooth\r\nModelos aplicables: Coche con de fábrica CarPlay o con Android Auto\r\nIPhone :iPhone 6 y superior, iOS 10 y versión superior\r\nTeléfono Android: Android 11,0 y superior\r\n', '', 'Carlinkit Online Store', 'https://es.aliexpress.com/item/1005005402872248.html?spm=a2g0o.detail.1000023.1.5985JcD9JcD95M&gatewayAdapt=glo2esp4itemAdapt\r\n', '2024-06-03', '2024-06-10'),
	(28, 22, 11, 'hgj', 2, 'fgfghjfgj', 'f9546cc4a9e7207b11ea0881c2df584b.mp4', '', '', '2024-06-03', '2024-06-24');

-- Volcando estructura para tabla admin_domoV9.pruebas
CREATE TABLE IF NOT EXISTS `pruebas` (
  `idprueba` int(11) NOT NULL AUTO_INCREMENT,
  `idcate` int(11) NOT NULL DEFAULT 0,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `descripcion` longtext DEFAULT NULL,
  `fecha` date NOT NULL,
  `imagen1` varchar(50) DEFAULT NULL,
  `video` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idprueba`),
  KEY `FK_pruebas_cateriasproductos` (`idcate`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla admin_domoV9.pruebas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla admin_domoV9.trabajos
CREATE TABLE IF NOT EXISTS `trabajos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` longtext DEFAULT NULL,
  `imagen1` varchar(50) DEFAULT NULL,
  `imagen2` varchar(50) DEFAULT NULL,
  `imagen3` varchar(50) DEFAULT NULL,
  `video` varchar(50) DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla admin_domoV9.trabajos: ~4 rows (aproximadamente)
INSERT INTO `trabajos` (`id`, `titulo`, `descripcion`, `imagen1`, `imagen2`, `imagen3`, `video`, `fecha_entrada`) VALUES
	(8, 'Scania Sofia', 'Instalación de cintas led, botonera y pilotos estroboscopicos', '', '', '', '5ba005360c33a84f5aefce2f6d121068.mp4', '2024-06-03'),
	(9, 'Scania Sofia', 'ftuyk', '', '', '', '', '2024-06-03'),
	(10, 'Scania Sofia', 'dcj', '', '', '', 'd7083360fca7b2cf9f573c76b0c2fe68.mp4', '2024-06-03'),
	(11, 'Scania Sofia', 'prueba de guardadao de video', '', '', '', 'f6a35ae04dae55507d231586dab1342a.mp4', '2024-06-05');

-- Volcando estructura para tabla admin_domoV9.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `apellidos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `password` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `creado` date NOT NULL,
  `admin` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla admin_domoV9.usuarios: ~2 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `imagen`, `creado`, `admin`) VALUES
	(1, 'Felix', 'Aparicio Tapiador', 'feapta@gmail.com', '$2y$10$vMj/0HvnwPBqb6GJopjuT.2t6dRKVVLjrhNdN55NQdFW7zBUKjnu.', '0', '2023-11-13', 1),
	(2, 'Maria Rosa', 'Rubio Ros', 'rosarubio1982@gmail.com', '$2y$10$afkCjzAPYNPTp3FtLOQZj.jX9Ti3bqx2H7C0JRaF.9Hh5ofeNxouG', '0', '2023-11-14', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
