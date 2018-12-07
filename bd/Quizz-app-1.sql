-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.34-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para quizz_app
CREATE DATABASE IF NOT EXISTS `quizz_app` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `quizz_app`;

-- Volcando estructura para tabla quizz_app.ejercicio
CREATE TABLE IF NOT EXISTS `ejercicio` (
  `idejercicio` varchar(36) COLLATE utf8_spanish2_ci NOT NULL,
  `id_etapa` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `audio` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idejercicio`),
  KEY `fk_ejercicio_pk_etapa` (`id_etapa`),
  CONSTRAINT `fk_ejercicio_pk_etapa` FOREIGN KEY (`id_etapa`) REFERENCES `etapa` (`idetapa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla quizz_app.ejercicio: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `ejercicio` DISABLE KEYS */;
INSERT INTO `ejercicio` (`idejercicio`, `id_etapa`, `audio`, `nombre`) VALUES
	('265e0a08-fb2e-5ea1-b877-a1f3730f439e', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', 'Cafe.wav', 'Cafe'),
	('30a98b5d-fddb-5b62-b0b6-a493c361e92f', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', 'Pollo.wav', 'Pollo'),
	('549ca6cc-94cb-5e4a-b1b7-87214076c825', '7a999784-1456-562c-a833-30b93cddcbbe', 'Zapatos.wav', 'Zapatos'),
	('57372db7-2332-5b14-845d-d03fbdb11b69', '7a999784-1456-562c-a833-30b93cddcbbe', 'Llaves.wav', 'Llaves'),
	('6d0985d3-0151-5b6c-8269-2bae5020e56d', '4e34ed32-ae20-598f-97b7-cf9ee30ca492', 'Polera.wav', 'Polera'),
	('6dc5cc40-d407-552f-9709-dee5366447c5', '46b3821f-5717-5ba7-ad27-8f350e954f9d', 'Cigarro.wav', 'Cigarro'),
	('6f02ea0b-06dd-5a7e-aca4-da22f740eb2b', '7a999784-1456-562c-a833-30b93cddcbbe', 'Lapiz.wav', 'Lapiz'),
	('722895bb-a48e-5bce-979b-b7e4be08d0ad', '4e34ed32-ae20-598f-97b7-cf9ee30ca492', 'Blusa.wav', 'Blusa'),
	('74a919a8-04bc-5c8b-a8da-b221f277ac9d', '46b3821f-5717-5ba7-ad27-8f350e954f9d', 'Enchufe.wav', 'Enchufe'),
	('9fabeb78-4825-5670-b9e8-05ab370da7ba', '4e34ed32-ae20-598f-97b7-cf9ee30ca492', 'Pantalon.wav', 'Pantalon'),
	('a8065827-d7b9-5769-aefe-ebf3cda7d8f4', '7a999784-1456-562c-a833-30b93cddcbbe', 'Dinero.wav', 'Dinero'),
	('c035aca4-9e27-55c4-a412-f27fd2f56c6e', '4e34ed32-ae20-598f-97b7-cf9ee30ca492', 'Falda.wav', 'Falda'),
	('ce16a5a7-b873-58f7-9fe5-809128834f1a', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', 'Rosquilla.wav', 'Rosquilla'),
	('d8eec10a-b351-5dec-b49b-e60978ed69c2', '46b3821f-5717-5ba7-ad27-8f350e954f9d', 'Martillo.wav', 'Martillo'),
	('e03ca22b-1232-5dc2-8385-e15484b1651a', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', 'Manzana.wav', 'Manzana'),
	('e5d39d3c-45aa-5f13-9a47-2d9574267bad', '46b3821f-5717-5ba7-ad27-8f350e954f9d', 'Cuchillo.wav', 'Cuchillo');
/*!40000 ALTER TABLE `ejercicio` ENABLE KEYS */;

-- Volcando estructura para tabla quizz_app.etapa
CREATE TABLE IF NOT EXISTS `etapa` (
  `idetapa` varchar(36) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `fa_icon` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idetapa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla quizz_app.etapa: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `etapa` DISABLE KEYS */;
INSERT INTO `etapa` (`idetapa`, `nombre`, `descripcion`, `nivel`, `fa_icon`) VALUES
	('46b3821f-5717-5ba7-ad27-8f350e954f9d', 'Objetos Peligrosos', 'El usuarios deberá elegir la imagen correcta segun lo que diga el audio sobre objetos peligrosos', NULL, 'skull-crossbones'),
	('4e34ed32-ae20-598f-97b7-cf9ee30ca492', 'Ropa', 'El usuarios deberá elegir la imagen correcta segun lo que diga el audio sobre Ropa', NULL, 'tshirt'),
	('7a999784-1456-562c-a833-30b93cddcbbe', 'Cosas', 'El usuarios deberá elegir la imagen correcta segun lo que diga el audio sobre cosas', NULL, 'cut'),
	('bd1d04a7-9042-515f-9c50-8669e6c2bbff', 'Alimentos', 'El usuarios deberá elegir la imagen correcta segun lo que diga el audio sobre alimentos', NULL, 'utensils');
/*!40000 ALTER TABLE `etapa` ENABLE KEYS */;

-- Volcando estructura para tabla quizz_app.marcado
CREATE TABLE IF NOT EXISTS `marcado` (
  `idmarcado` int(11) NOT NULL AUTO_INCREMENT,
  `id_resultado` varchar(8) COLLATE utf8_spanish2_ci DEFAULT '0',
  `id_respuesta` varchar(36) COLLATE utf8_spanish2_ci DEFAULT '0',
  PRIMARY KEY (`idmarcado`),
  KEY `fk_marcado_pk_resultado` (`id_resultado`),
  KEY `fk_marcado_pk_respuesta` (`id_respuesta`),
  CONSTRAINT `fk_marcado_pk_respuesta` FOREIGN KEY (`id_respuesta`) REFERENCES `respuesta` (`idrespuesta`),
  CONSTRAINT `fk_marcado_pk_resultado` FOREIGN KEY (`id_resultado`) REFERENCES `resultado` (`idresultado`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla quizz_app.marcado: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `marcado` DISABLE KEYS */;
INSERT INTO `marcado` (`idmarcado`, `id_resultado`, `id_respuesta`) VALUES
	(1, '314ecd49', 'bfbce24e-cf26-5582-91ad-ff438c649317'),
	(2, '314ecd49', '27c4929a-cab1-581e-b331-2fff2c97de2c'),
	(3, '314ecd49', '766fb941-dba5-5c6a-95f3-4926d9ce54d1'),
	(4, '314ecd49', '360e201d-d891-5944-9ba5-f82bce9b54af'),
	(5, 'dea07120', '293f700a-f230-5302-ae2b-585fa163c49e'),
	(6, 'dea07120', 'e04af21f-d9fc-5c6f-9ae4-80215a7b6e02'),
	(7, 'dea07120', '67ab3b18-5e5e-5084-b658-2f937e676a83'),
	(8, 'dea07120', '360e201d-d891-5944-9ba5-f82bce9b54af'),
	(9, '44e2309b', NULL),
	(10, '44e2309b', NULL),
	(11, '44e2309b', NULL),
	(12, '44e2309b', NULL),
	(13, '1cf68265', '298f618c-5ae4-501c-bba8-0f2d4d1bd283'),
	(14, '1cf68265', 'e04af21f-d9fc-5c6f-9ae4-80215a7b6e02'),
	(15, '1cf68265', '766fb941-dba5-5c6a-95f3-4926d9ce54d1'),
	(16, '1cf68265', '7402fb20-2394-517c-9644-04a6319d40c6');
/*!40000 ALTER TABLE `marcado` ENABLE KEYS */;

-- Volcando estructura para tabla quizz_app.respuesta
CREATE TABLE IF NOT EXISTS `respuesta` (
  `idrespuesta` varchar(36) COLLATE utf8_spanish2_ci NOT NULL,
  `id_ejercicio` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_sugerencia` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `respuesta` enum('1','0') COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idrespuesta`),
  KEY `fk_respuesta_pk_ejercicio` (`id_ejercicio`),
  KEY `fk_respuesta_pk_sugerencia` (`id_sugerencia`),
  CONSTRAINT `fk_respuesta_pk_ejercicio` FOREIGN KEY (`id_ejercicio`) REFERENCES `ejercicio` (`idejercicio`),
  CONSTRAINT `fk_respuesta_pk_sugerencia` FOREIGN KEY (`id_sugerencia`) REFERENCES `sugerencia` (`idsugerencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla quizz_app.respuesta: ~67 rows (aproximadamente)
/*!40000 ALTER TABLE `respuesta` DISABLE KEYS */;
INSERT INTO `respuesta` (`idrespuesta`, `id_ejercicio`, `id_sugerencia`, `respuesta`) VALUES
	('029a9156-3692-5e39-9316-e73430a34c21', '30a98b5d-fddb-5b62-b0b6-a493c361e92f', '3e6bcfa6-524c-504f-ae13-85bf6ff596d4', '0'),
	('05499088-725a-5a2f-b5fc-71f879dd1bd6', '549ca6cc-94cb-5e4a-b1b7-87214076c825', '8b69a233-b4bf-5760-8b1e-a767308b6df9', '1'),
	('081f963a-b09a-51bc-968f-19186709d580', '549ca6cc-94cb-5e4a-b1b7-87214076c825', '710b8bfa-fa73-5c0f-a2d8-b287f5cbd84a', '0'),
	('0adb6419-d5c9-52ac-a28f-dd15816cfa68', 'ce16a5a7-b873-58f7-9fe5-809128834f1a', '71822b51-c459-57cf-9eb6-bfa39cbdf29a', '0'),
	('0c767279-5d36-5681-aaad-45d0e5867335', 'c035aca4-9e27-55c4-a412-f27fd2f56c6e', '65c1e758-d3c3-5511-892b-326bc65194ea', '0'),
	('144a55d2-e13b-53fc-916a-ba1dc20ee069', 'e03ca22b-1232-5dc2-8385-e15484b1651a', 'd3475036-1213-54ce-a97f-60a1c7c3cf8a', '1'),
	('146c5a6b-b139-5068-b97e-257e94aefa43', '6f02ea0b-06dd-5a7e-aca4-da22f740eb2b', 'a6aa8d72-7a43-5baa-9cba-a311bc3af7ba', '1'),
	('14a3822a-0b06-56e4-826a-8e325e8ff558', '57372db7-2332-5b14-845d-d03fbdb11b69', '34d74e1e-b3b0-526b-8a54-629df0ea4ea4', '1'),
	('16b5c27d-6272-5d53-b74b-c19f934354e4', 'c035aca4-9e27-55c4-a412-f27fd2f56c6e', '8b69a233-b4bf-5760-8b1e-a767308b6df9', '0'),
	('190c337a-42bf-5ad0-a861-f2ba1d15706d', '9fabeb78-4825-5670-b9e8-05ab370da7ba', '5d50724d-cffa-5ea8-9505-b76459939527', '0'),
	('1e6e64a0-7fda-544a-8126-63b867846261', 'e5d39d3c-45aa-5f13-9a47-2d9574267bad', '9dc9b7ec-8b11-526b-a831-a3583f08a18c', '0'),
	('230e3792-a297-5f56-972b-d4f1e8635b78', '9fabeb78-4825-5670-b9e8-05ab370da7ba', 'f5127e04-c2ab-554a-bf7a-7fd9cfa741cd', '0'),
	('27c4929a-cab1-581e-b331-2fff2c97de2c', '74a919a8-04bc-5c8b-a8da-b221f277ac9d', 'e77fe1e8-48dc-5085-b3d9-93aea72666c1', '1'),
	('293f700a-f230-5302-ae2b-585fa163c49e', '6dc5cc40-d407-552f-9709-dee5366447c5', '5d50724d-cffa-5ea8-9505-b76459939527', '0'),
	('298f618c-5ae4-501c-bba8-0f2d4d1bd283', '6dc5cc40-d407-552f-9709-dee5366447c5', 'e77fe1e8-48dc-5085-b3d9-93aea72666c1', '0'),
	('308e1c7e-ccfa-55f2-adef-1e73c738ff1d', 'a8065827-d7b9-5769-aefe-ebf3cda7d8f4', '9dc9b7ec-8b11-526b-a831-a3583f08a18c', '0'),
	('31ce7829-0a83-56c1-8563-d16afac39420', '265e0a08-fb2e-5ea1-b877-a1f3730f439e', '1d0fcb7d-3feb-5518-81d5-f5d308db4e4a', '0'),
	('3577c585-2076-5fbe-831a-0eb46c49958a', '74a919a8-04bc-5c8b-a8da-b221f277ac9d', '710b8bfa-fa73-5c0f-a2d8-b287f5cbd84a', '0'),
	('360e201d-d891-5944-9ba5-f82bce9b54af', 'e5d39d3c-45aa-5f13-9a47-2d9574267bad', '6a515de4-75b7-53c8-b437-2e6c405f9e61', '1'),
	('38f49e2a-40bd-5f5b-802e-55b57470fdfd', '722895bb-a48e-5bce-979b-b7e4be08d0ad', '71822b51-c459-57cf-9eb6-bfa39cbdf29a', '0'),
	('39f4a915-fd8e-5217-86ba-0c523d626c69', '6f02ea0b-06dd-5a7e-aca4-da22f740eb2b', 'cf64f706-9147-5194-a9ca-f85d48c82417', '0'),
	('3f4c175e-0b48-5a38-94ce-4ef09bd7e294', '6d0985d3-0151-5b6c-8269-2bae5020e56d', '65c1e758-d3c3-5511-892b-326bc65194ea', '0'),
	('41b88506-07af-51a0-ac18-b8e062005ae7', 'c035aca4-9e27-55c4-a412-f27fd2f56c6e', 'e9b72221-51a1-55f3-9f4e-6b5092c01d48', '0'),
	('516367b9-5c6a-57a1-bb48-5a2c9daff40d', '6d0985d3-0151-5b6c-8269-2bae5020e56d', 'd797eb20-c804-50de-9d4d-0dfa695dfe5f', '0'),
	('6231f5b4-c1f6-5a37-96c8-597538e169e7', 'ce16a5a7-b873-58f7-9fe5-809128834f1a', 'cf64f706-9147-5194-a9ca-f85d48c82417', '0'),
	('64fde5ba-bfae-523b-9be2-f40735ef325f', '74a919a8-04bc-5c8b-a8da-b221f277ac9d', '8b69a233-b4bf-5760-8b1e-a767308b6df9', '0'),
	('6653ec4d-7b82-52a3-8e2e-7928e86216e1', 'ce16a5a7-b873-58f7-9fe5-809128834f1a', '293196d0-48ab-5102-96c5-22b5b47c719a', '1'),
	('67ab3b18-5e5e-5084-b658-2f937e676a83', 'd8eec10a-b351-5dec-b49b-e60978ed69c2', '527aad60-6e52-5540-b6ab-10fe7e73ca30', '0'),
	('6cdd02b1-fb16-55a6-a94a-4446afbe8584', 'e5d39d3c-45aa-5f13-9a47-2d9574267bad', 'fb6e6c0d-4dd6-5155-a176-7e017ef45ca5', '0'),
	('6e93c52a-d3c2-5895-a72e-b23fa0581738', '549ca6cc-94cb-5e4a-b1b7-87214076c825', '293196d0-48ab-5102-96c5-22b5b47c719a', '0'),
	('72e328ea-6235-514e-8c2b-77ad3571103a', 'a8065827-d7b9-5769-aefe-ebf3cda7d8f4', 'd797eb20-c804-50de-9d4d-0dfa695dfe5f', '0'),
	('72ed175b-dc67-5ef1-91c7-3d5feca78a90', '30a98b5d-fddb-5b62-b0b6-a493c361e92f', 'ee888afc-90fd-50e1-aa23-bfdeca9c4b80', '1'),
	('7402fb20-2394-517c-9644-04a6319d40c6', 'e5d39d3c-45aa-5f13-9a47-2d9574267bad', '710b8bfa-fa73-5c0f-a2d8-b287f5cbd84a', '0'),
	('746a445d-84ff-5751-b1e4-a5c0caf70851', 'a8065827-d7b9-5769-aefe-ebf3cda7d8f4', 'd3475036-1213-54ce-a97f-60a1c7c3cf8a', '0'),
	('7668639b-a115-57b0-b372-7df4542f576f', '6f02ea0b-06dd-5a7e-aca4-da22f740eb2b', 'd797eb20-c804-50de-9d4d-0dfa695dfe5f', '0'),
	('766fb941-dba5-5c6a-95f3-4926d9ce54d1', 'd8eec10a-b351-5dec-b49b-e60978ed69c2', '1d0fcb7d-3feb-5518-81d5-f5d308db4e4a', '1'),
	('78265631-f716-5b23-bc4e-5f866f4f9f4c', '6dc5cc40-d407-552f-9709-dee5366447c5', '710b8bfa-fa73-5c0f-a2d8-b287f5cbd84a', '0'),
	('7b724b54-6230-5966-99f4-d23f1bef574e', '57372db7-2332-5b14-845d-d03fbdb11b69', 'e77fe1e8-48dc-5085-b3d9-93aea72666c1', '0'),
	('827af998-6e85-55e7-b2c7-1851f5b59632', 'e03ca22b-1232-5dc2-8385-e15484b1651a', '3e6bcfa6-524c-504f-ae13-85bf6ff596d4', '0'),
	('86e0823c-1896-5392-9eb7-cf55680840b4', '30a98b5d-fddb-5b62-b0b6-a493c361e92f', 'd3475036-1213-54ce-a97f-60a1c7c3cf8a', '0'),
	('8ba0dc62-3da7-5878-852c-35cf02c86f5e', '722895bb-a48e-5bce-979b-b7e4be08d0ad', 'd797eb20-c804-50de-9d4d-0dfa695dfe5f', '0'),
	('8bff9c42-1140-5f39-9f88-62ac5670cc80', 'e03ca22b-1232-5dc2-8385-e15484b1651a', 'f375ac76-da6c-5744-9ad5-d884fa4046ec', '0'),
	('8c6013be-3e91-5626-9644-aeba5d8f40ee', 'e03ca22b-1232-5dc2-8385-e15484b1651a', '293196d0-48ab-5102-96c5-22b5b47c719a', '0'),
	('912857c4-cf07-547c-903c-0d14a58bafea', '6d0985d3-0151-5b6c-8269-2bae5020e56d', '9dc9b7ec-8b11-526b-a831-a3583f08a18c', '1'),
	('96ec4dfd-b385-5ab4-89d6-ad15f025f6bd', 'd8eec10a-b351-5dec-b49b-e60978ed69c2', 'd3475036-1213-54ce-a97f-60a1c7c3cf8a', '0'),
	('97c6a9f4-3f85-5c96-8b03-f1405f696d08', 'd8eec10a-b351-5dec-b49b-e60978ed69c2', 'fb6e6c0d-4dd6-5155-a176-7e017ef45ca5', '0'),
	('9ef7eb4a-76c2-51d8-b513-903d972bc5ad', '57372db7-2332-5b14-845d-d03fbdb11b69', 'a6aa8d72-7a43-5baa-9cba-a311bc3af7ba', '0'),
	('a327a985-30fd-5717-92d0-aff03763f749', 'c035aca4-9e27-55c4-a412-f27fd2f56c6e', 'd797eb20-c804-50de-9d4d-0dfa695dfe5f', '1'),
	('a8985169-d7b7-5f48-87c0-e660ed8e842a', '549ca6cc-94cb-5e4a-b1b7-87214076c825', 'cf64f706-9147-5194-a9ca-f85d48c82417', '0'),
	('ab52cbe0-5f15-57dc-8ebd-916317421d8f', '9fabeb78-4825-5670-b9e8-05ab370da7ba', '34d74e1e-b3b0-526b-8a54-629df0ea4ea4', '0'),
	('b04a12b4-33e3-5640-851a-b28105fb2da8', 'a8065827-d7b9-5769-aefe-ebf3cda7d8f4', 'cf64f706-9147-5194-a9ca-f85d48c82417', '1'),
	('b087947a-aecf-5065-8962-5560e020f64f', '265e0a08-fb2e-5ea1-b877-a1f3730f439e', 'e9b72221-51a1-55f3-9f4e-6b5092c01d48', '0'),
	('bfbce24e-cf26-5582-91ad-ff438c649317', '6dc5cc40-d407-552f-9709-dee5366447c5', '3e6bcfa6-524c-504f-ae13-85bf6ff596d4', '1'),
	('c0747713-cbd8-58c6-b750-93e8b7cd7c67', '30a98b5d-fddb-5b62-b0b6-a493c361e92f', '6a515de4-75b7-53c8-b437-2e6c405f9e61', '0'),
	('c27d7fe8-81b5-583f-b958-99334a4c66d8', '722895bb-a48e-5bce-979b-b7e4be08d0ad', 'e9b72221-51a1-55f3-9f4e-6b5092c01d48', '0'),
	('c9469bc3-6977-5fd4-920d-5e622bb0c608', '265e0a08-fb2e-5ea1-b877-a1f3730f439e', 'f5127e04-c2ab-554a-bf7a-7fd9cfa741cd', '1'),
	('cbec2e1a-30f5-5a98-bef4-72955f580aae', '57372db7-2332-5b14-845d-d03fbdb11b69', '1d0fcb7d-3feb-5518-81d5-f5d308db4e4a', '0'),
	('d0f27061-d006-5c31-be35-18ae95d3471c', '6d0985d3-0151-5b6c-8269-2bae5020e56d', 'fb6e6c0d-4dd6-5155-a176-7e017ef45ca5', '0'),
	('d135822f-b803-5f40-b73f-0362bc9c81b8', '6f02ea0b-06dd-5a7e-aca4-da22f740eb2b', 'd3475036-1213-54ce-a97f-60a1c7c3cf8a', '0'),
	('e04af21f-d9fc-5c6f-9ae4-80215a7b6e02', '74a919a8-04bc-5c8b-a8da-b221f277ac9d', '527aad60-6e52-5540-b6ab-10fe7e73ca30', '0'),
	('e05ca0d3-de52-5c1b-aeac-47123cbafd96', 'ce16a5a7-b873-58f7-9fe5-809128834f1a', '6a515de4-75b7-53c8-b437-2e6c405f9e61', '0'),
	('e6a9d5d0-70cf-5aff-949c-f899321ba396', '265e0a08-fb2e-5ea1-b877-a1f3730f439e', '71822b51-c459-57cf-9eb6-bfa39cbdf29a', '0'),
	('ecf947ba-0d9b-5f34-8cae-ce801050c19e', '722895bb-a48e-5bce-979b-b7e4be08d0ad', '3f9a455f-3c56-5c23-a74d-ea3a48a02414', '1'),
	('efbd82d8-e0f5-51cc-8de0-ae27a6dbcf69', '9fabeb78-4825-5670-b9e8-05ab370da7ba', '65c1e758-d3c3-5511-892b-326bc65194ea', '1');
/*!40000 ALTER TABLE `respuesta` ENABLE KEYS */;

-- Volcando estructura para tabla quizz_app.resultado
CREATE TABLE IF NOT EXISTS `resultado` (
  `idresultado` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `id_etapa` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_usuario` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `resultado` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`idresultado`),
  KEY `fk_resultado_pk_etapa` (`id_etapa`),
  KEY `fk_resultado_pk_usuario` (`id_usuario`),
  CONSTRAINT `fk_resultado_pk_etapa` FOREIGN KEY (`id_etapa`) REFERENCES `etapa` (`idetapa`),
  CONSTRAINT `fk_resultado_pk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla quizz_app.resultado: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `resultado` DISABLE KEYS */;
INSERT INTO `resultado` (`idresultado`, `id_etapa`, `id_usuario`, `resultado`, `fecha`) VALUES
	('1cf68265', '46b3821f-5717-5ba7-ad27-8f350e954f9d', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 2, '2018-12-07 02:34:54'),
	('314ecd49', '46b3821f-5717-5ba7-ad27-8f350e954f9d', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 8, '2018-12-06 23:55:13'),
	('44e2309b', '46b3821f-5717-5ba7-ad27-8f350e954f9d', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 0, '2018-12-07 01:39:28'),
	('dea07120', '46b3821f-5717-5ba7-ad27-8f350e954f9d', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 2, '2018-12-07 01:02:30');
/*!40000 ALTER TABLE `resultado` ENABLE KEYS */;

-- Volcando estructura para tabla quizz_app.sugerencia
CREATE TABLE IF NOT EXISTS `sugerencia` (
  `idsugerencia` varchar(36) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idsugerencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla quizz_app.sugerencia: ~21 rows (aproximadamente)
/*!40000 ALTER TABLE `sugerencia` DISABLE KEYS */;
INSERT INTO `sugerencia` (`idsugerencia`, `imagen`, `nombre`) VALUES
	('1d0fcb7d-3feb-5518-81d5-f5d308db4e4a', 'Martillo.png', 'Martillo'),
	('293196d0-48ab-5102-96c5-22b5b47c719a', 'Rosquilla.png', 'Rosquilla'),
	('34d74e1e-b3b0-526b-8a54-629df0ea4ea4', 'Llaves.png', 'Llaves'),
	('3e6bcfa6-524c-504f-ae13-85bf6ff596d4', 'Cigarro.png', 'Cigarro'),
	('3f9a455f-3c56-5c23-a74d-ea3a48a02414', 'Blusa.png', 'Blusa'),
	('527aad60-6e52-5540-b6ab-10fe7e73ca30', 'Helado.png', 'Helado'),
	('5d50724d-cffa-5ea8-9505-b76459939527', 'Torta_de_chocolate.png', 'Torta de chocolate'),
	('65c1e758-d3c3-5511-892b-326bc65194ea', 'Pantalon.png', 'Pantalon'),
	('6a515de4-75b7-53c8-b437-2e6c405f9e61', 'Cuchillo.png', 'Cuchillo'),
	('710b8bfa-fa73-5c0f-a2d8-b287f5cbd84a', 'Almohada.png', 'Almohada'),
	('71822b51-c459-57cf-9eb6-bfa39cbdf29a', 'Alitas_de_Pollo.png', 'Alitas de Pollo'),
	('8b69a233-b4bf-5760-8b1e-a767308b6df9', 'Zapatos.png', 'Zapatos'),
	('9dc9b7ec-8b11-526b-a831-a3583f08a18c', 'Polera.png', 'Polera'),
	('a6aa8d72-7a43-5baa-9cba-a311bc3af7ba', 'Lapiz.png', 'Lapiz'),
	('cf64f706-9147-5194-a9ca-f85d48c82417', 'Dinero.png', 'Dinero'),
	('d3475036-1213-54ce-a97f-60a1c7c3cf8a', 'Manzana.png', 'Manzana'),
	('d797eb20-c804-50de-9d4d-0dfa695dfe5f', 'Falda.png', 'Falda'),
	('e77fe1e8-48dc-5085-b3d9-93aea72666c1', 'Enchufe.png', 'Enchufe'),
	('e9b72221-51a1-55f3-9f4e-6b5092c01d48', 'Crayones.png', 'Crayones'),
	('ee888afc-90fd-50e1-aa23-bfdeca9c4b80', 'Pollo.png', 'Pollo'),
	('f375ac76-da6c-5744-9ad5-d884fa4046ec', 'Hamburguesa.png', 'Hamburguesa'),
	('f5127e04-c2ab-554a-bf7a-7fd9cfa741cd', 'Cafe.png', 'Cafe'),
	('fb6e6c0d-4dd6-5155-a176-7e017ef45ca5', 'Estilete.png', 'Estilete');
/*!40000 ALTER TABLE `sugerencia` ENABLE KEYS */;

-- Volcando estructura para tabla quizz_app.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` varchar(36) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `creado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_spanish2_ci NOT NULL,
  `rol` enum('adm','tut','pac') COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla quizz_app.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `email`, `password`, `fecha_nacimiento`, `creado`, `modificado`, `status`, `rol`) VALUES
	('834709ea-d983-5f5e-a902-86ce3e57ecbf', 'Alexandro', 'Arce Zeballos', 'alexandro.arce@outlook.com', 'ce7f0e1a73e41fcca649c5c8195d85c02608a58d386d403ab2b93a55d7c061f53bddc342830c5d17d7f5d2dea852943f7e8a5d2dcc27c54d1d4494d07ca3a292rj8PyaSTAeGlQIcwBTr49dG4herCyw22tQDMwpGLbbQ=', '1994-04-11', '2018-12-03 23:34:41', '0000-00-00 00:00:00', '1', 'adm');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
