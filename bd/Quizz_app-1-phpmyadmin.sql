-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2018 a las 20:10:49
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quizz_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `idejercicio` varchar(36) COLLATE utf8_spanish2_ci NOT NULL,
  `id_etapa` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `audio` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ejercicio`
--

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
('98787d2e-dfab-5db5-9a94-45a32119d2a6', 'a8496f30-0766-5575-bc25-522a646634ff', 'Perros.mp3', 'Perros'),
('9fabeb78-4825-5670-b9e8-05ab370da7ba', '4e34ed32-ae20-598f-97b7-cf9ee30ca492', 'Pantalon.wav', 'Pantalon'),
('a8065827-d7b9-5769-aefe-ebf3cda7d8f4', '7a999784-1456-562c-a833-30b93cddcbbe', 'Dinero.wav', 'Dinero'),
('c035aca4-9e27-55c4-a412-f27fd2f56c6e', '4e34ed32-ae20-598f-97b7-cf9ee30ca492', 'Falda.wav', 'Falda'),
('ce16a5a7-b873-58f7-9fe5-809128834f1a', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', 'Rosquilla.wav', 'Rosquilla'),
('d8eec10a-b351-5dec-b49b-e60978ed69c2', '46b3821f-5717-5ba7-ad27-8f350e954f9d', 'Martillo.wav', 'Martillo'),
('e03ca22b-1232-5dc2-8385-e15484b1651a', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', 'Manzana.wav', 'Manzana'),
('e5d39d3c-45aa-5f13-9a47-2d9574267bad', '46b3821f-5717-5ba7-ad27-8f350e954f9d', 'Cuchillo.wav', 'Cuchillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa`
--

CREATE TABLE `etapa` (
  `idetapa` varchar(36) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `icono` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `etapa`
--

INSERT INTO `etapa` (`idetapa`, `nombre`, `descripcion`, `status`, `icono`) VALUES
('46b3821f-5717-5ba7-ad27-8f350e954f9d', 'Objetos Peligrosos', 'El usuarios deberá elegir la imagen correcta segun lo que diga el audio sobre los objetos peligrosos', '1', 'skull-crossbones'),
('4e34ed32-ae20-598f-97b7-cf9ee30ca492', 'Ropa', 'El usuarios deberá elegir la imagen correcta segun lo que diga el audio sobre Ropa', '1', 'tshirt'),
('7a999784-1456-562c-a833-30b93cddcbbe', 'Cosas', 'El usuarios deberá elegir la imagen correcta segun lo que diga el audio sobre cosas', '1', 'cut'),
('a8496f30-0766-5575-bc25-522a646634ff', 'Memes', 'Selecciona el meme correcto segun el audio', '1', 'ambulance'),
('bd1d04a7-9042-515f-9c50-8669e6c2bbff', 'Alimentos', 'El usuarios deberá elegir la imagen correcta segun lo que diga el audio sobre alimentos', '1', 'utensils');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcado`
--

CREATE TABLE `marcado` (
  `idmarcado` int(11) NOT NULL,
  `id_resultado` varchar(8) COLLATE utf8_spanish2_ci DEFAULT '0',
  `id_respuesta` varchar(36) COLLATE utf8_spanish2_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `marcado`
--

INSERT INTO `marcado` (`idmarcado`, `id_resultado`, `id_respuesta`) VALUES
(1, '16b44f39', 'ba0810f6-78e2-5f04-9368-133f8ef41b9d'),
(2, '16b44f39', '53b61ee8-2ee0-54f3-907b-873098c6994e'),
(3, '16b44f39', '626a4ca4-8f3c-5c52-a544-cc9b54a1acaa'),
(4, '16b44f39', '80500121-8b56-5a22-8d74-4e6958b16dc2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idrespuesta` varchar(36) COLLATE utf8_spanish2_ci NOT NULL,
  `id_ejercicio` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_sugerencia` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `respuesta` enum('1','0') COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idrespuesta`, `id_ejercicio`, `id_sugerencia`, `respuesta`) VALUES
('07e8f2d7-6f26-5928-beec-016f65c3d490', 'e5d39d3c-45aa-5f13-9a47-2d9574267bad', 'b14fdfc3-6d8f-5b6f-a0f1-4575aa32976e', '0'),
('0a41480c-ba4a-595a-824f-c15b8d6c768d', '265e0a08-fb2e-5ea1-b877-a1f3730f439e', '16d274c1-7350-5035-ae2d-c4a58acd019f', '0'),
('0d5f85f4-9968-55b2-a41f-5520a545d72d', 'e03ca22b-1232-5dc2-8385-e15484b1651a', '196af654-6444-5f07-8515-c895f6be7d69', '1'),
('1a778e52-263f-5ccb-9cde-747cbbce0102', 'd8eec10a-b351-5dec-b49b-e60978ed69c2', '11ffef32-c6c3-5524-995a-b80ad71704ba', '0'),
('224f4d71-8544-53ba-ae3d-cac01bfae15b', '6d0985d3-0151-5b6c-8269-2bae5020e56d', 'd46f0ed4-d277-5087-b356-f4cdc80d5a46', '0'),
('23fdbfd4-9998-5ad1-a2e3-f4c66e56391e', '6dc5cc40-d407-552f-9709-dee5366447c5', '16d274c1-7350-5035-ae2d-c4a58acd019f', '0'),
('24a10fe9-815b-5c7d-83ce-e83ec0ac9aae', 'd8eec10a-b351-5dec-b49b-e60978ed69c2', 'd46f0ed4-d277-5087-b356-f4cdc80d5a46', '0'),
('2a024b8c-663f-55b9-82d1-c1c892a2b677', '74a919a8-04bc-5c8b-a8da-b221f277ac9d', 'f022ebb5-a26a-5edd-a15e-7df949c124e1', '0'),
('3027951a-d231-5d3c-99c9-b1a6bf51c603', 'e5d39d3c-45aa-5f13-9a47-2d9574267bad', '839a1f3e-7f7b-5e28-9648-3f9556a1ccc1', '0'),
('33f9931a-5f3d-52b6-8ca2-b5bf6d8d897b', '722895bb-a48e-5bce-979b-b7e4be08d0ad', 'd46f0ed4-d277-5087-b356-f4cdc80d5a46', '1'),
('3831eb7c-3210-5c12-94b7-767c768e2c12', '6d0985d3-0151-5b6c-8269-2bae5020e56d', '11ffef32-c6c3-5524-995a-b80ad71704ba', '0'),
('3d3939ea-3e92-515b-a5a9-9f69b89c23db', '6d0985d3-0151-5b6c-8269-2bae5020e56d', 'f022ebb5-a26a-5edd-a15e-7df949c124e1', '0'),
('432b0107-f854-57c0-bd95-5452dba82187', '57372db7-2332-5b14-845d-d03fbdb11b69', 'b14fdfc3-6d8f-5b6f-a0f1-4575aa32976e', '0'),
('53b61ee8-2ee0-54f3-907b-873098c6994e', '74a919a8-04bc-5c8b-a8da-b221f277ac9d', '11ffef32-c6c3-5524-995a-b80ad71704ba', '1'),
('626a4ca4-8f3c-5c52-a544-cc9b54a1acaa', 'd8eec10a-b351-5dec-b49b-e60978ed69c2', '45a42df1-d24f-563a-835d-933ff970d0e9', '1'),
('62a4969b-e7c0-5c16-8a0d-e18f3d31bb62', '57372db7-2332-5b14-845d-d03fbdb11b69', 'baf369a1-841e-553d-906a-fa9966d55b97', '0'),
('64890ee1-b491-5bf3-b2f7-9e8107c1e368', '74a919a8-04bc-5c8b-a8da-b221f277ac9d', '839a1f3e-7f7b-5e28-9648-3f9556a1ccc1', '0'),
('66a78f06-4786-5c6f-afac-5ae64b22ac49', '57372db7-2332-5b14-845d-d03fbdb11b69', 'bc7ffb92-181f-50ad-b044-96b3d24780ef', '0'),
('6e44b090-6526-5d3b-9b44-d0afeba37e64', '549ca6cc-94cb-5e4a-b1b7-87214076c825', 'aed89953-31af-59ee-a442-3e9d94e018f0', '0'),
('75a32928-1764-56eb-a65d-d2d79182a8e7', '549ca6cc-94cb-5e4a-b1b7-87214076c825', '839a1f3e-7f7b-5e28-9648-3f9556a1ccc1', '0'),
('7c5c39e5-723a-5a25-a3a4-6680276dc0a9', '30a98b5d-fddb-5b62-b0b6-a493c361e92f', '16d274c1-7350-5035-ae2d-c4a58acd019f', '1'),
('7d70ced0-611b-54e0-bc88-e28431d3280a', '549ca6cc-94cb-5e4a-b1b7-87214076c825', '96ba4a31-1e96-5046-982a-3a681d2bfb7e', '1'),
('7e7ac966-8fd4-5bc7-806b-a730f2da7376', '9fabeb78-4825-5670-b9e8-05ab370da7ba', '715fb5f5-07fc-58f0-a074-49d70b1be5e6', '1'),
('80500121-8b56-5a22-8d74-4e6958b16dc2', 'e5d39d3c-45aa-5f13-9a47-2d9574267bad', 'baf369a1-841e-553d-906a-fa9966d55b97', '1'),
('88d4bec9-b1ed-5006-8a74-c8429af70e8a', '30a98b5d-fddb-5b62-b0b6-a493c361e92f', '64380547-6904-5f61-a959-1960dfb8ca13', '0'),
('8f3cce23-ec3c-5ad7-8f2a-932f5effe60b', '6f02ea0b-06dd-5a7e-aca4-da22f740eb2b', '7944d046-8fb8-5133-bb69-54fbd3f782ea', '0'),
('92ab2b9e-60a7-5f7e-a936-811e9dd68da8', '6d0985d3-0151-5b6c-8269-2bae5020e56d', '7944d046-8fb8-5133-bb69-54fbd3f782ea', '1'),
('99ef6d8c-f294-5e4e-9cea-74c390f275e7', '30a98b5d-fddb-5b62-b0b6-a493c361e92f', '45a42df1-d24f-563a-835d-933ff970d0e9', '0'),
('9a41e628-9f9e-545d-939e-fbf02d820a91', '74a919a8-04bc-5c8b-a8da-b221f277ac9d', 'afe75c57-4d04-5fc8-b053-1f03cbb94ce5', '0'),
('a1ec5681-8258-5300-b0f2-b44a3e5501eb', 'ce16a5a7-b873-58f7-9fe5-809128834f1a', 'bc7ffb92-181f-50ad-b044-96b3d24780ef', '1'),
('a5b38687-f6f0-5eca-89fd-45a176f8c463', '6f02ea0b-06dd-5a7e-aca4-da22f740eb2b', '839a1f3e-7f7b-5e28-9648-3f9556a1ccc1', '0'),
('af91e1c6-f84c-5998-ba85-a1b563a5303e', '6f02ea0b-06dd-5a7e-aca4-da22f740eb2b', '715fb5f5-07fc-58f0-a074-49d70b1be5e6', '0'),
('b1c18df7-6d10-5412-a518-fccb4cb7dd24', '6dc5cc40-d407-552f-9709-dee5366447c5', '196af654-6444-5f07-8515-c895f6be7d69', '0'),
('ba0810f6-78e2-5f04-9368-133f8ef41b9d', '6dc5cc40-d407-552f-9709-dee5366447c5', 'f022ebb5-a26a-5edd-a15e-7df949c124e1', '1'),
('bc1f17de-3b55-5363-bca8-f260279bfe34', '265e0a08-fb2e-5ea1-b877-a1f3730f439e', '11ffef32-c6c3-5524-995a-b80ad71704ba', '0'),
('c0d348a4-46a2-5642-ad2e-4cffc0f41e3a', 'c035aca4-9e27-55c4-a412-f27fd2f56c6e', 'b14fdfc3-6d8f-5b6f-a0f1-4575aa32976e', '1'),
('c32b1400-fcc2-580c-a9a0-da3489620e76', '30a98b5d-fddb-5b62-b0b6-a493c361e92f', '715fb5f5-07fc-58f0-a074-49d70b1be5e6', '0'),
('d253913f-324b-51b1-9695-0619e6b66b52', '265e0a08-fb2e-5ea1-b877-a1f3730f439e', '196af654-6444-5f07-8515-c895f6be7d69', '0'),
('d3c4e76d-7752-5233-b3d8-4aac868cb3f4', '6dc5cc40-d407-552f-9709-dee5366447c5', '45a42df1-d24f-563a-835d-933ff970d0e9', '0'),
('e3d7bf40-1fd9-57e9-8709-849d5a070aeb', '57372db7-2332-5b14-845d-d03fbdb11b69', 'afe75c57-4d04-5fc8-b053-1f03cbb94ce5', '1'),
('e8896758-a33e-58c4-bdff-7eea775ba6ce', '549ca6cc-94cb-5e4a-b1b7-87214076c825', '7944d046-8fb8-5133-bb69-54fbd3f782ea', '0'),
('ed339670-fac7-5efd-b426-29049b5e854f', 'd8eec10a-b351-5dec-b49b-e60978ed69c2', 'aed89953-31af-59ee-a442-3e9d94e018f0', '0'),
('eddf5116-4059-5120-b396-bfed8f7bb538', 'a8065827-d7b9-5769-aefe-ebf3cda7d8f4', 'aed89953-31af-59ee-a442-3e9d94e018f0', '1'),
('ef56ee96-2b57-5abc-9d99-bc5c998b9c50', '6f02ea0b-06dd-5a7e-aca4-da22f740eb2b', '64380547-6904-5f61-a959-1960dfb8ca13', '1'),
('f273659e-1f5c-51f7-aff2-dfbb28a19de1', '265e0a08-fb2e-5ea1-b877-a1f3730f439e', '839a1f3e-7f7b-5e28-9648-3f9556a1ccc1', '1'),
('fc318a5a-6960-5a8d-85c5-deab8ed7d40c', 'e5d39d3c-45aa-5f13-9a47-2d9574267bad', 'afe75c57-4d04-5fc8-b053-1f03cbb94ce5', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `idresultado` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `id_etapa` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_usuario` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `resultado` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `resultado`
--

INSERT INTO `resultado` (`idresultado`, `id_etapa`, `id_usuario`, `resultado`, `fecha`) VALUES
('16b44f39', '46b3821f-5717-5ba7-ad27-8f350e954f9d', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 8, '2018-12-11 06:53:04'),
('16bbc7ff', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 0, '2018-12-07 07:55:38'),
('1ed3df60', '46b3821f-5717-5ba7-ad27-8f350e954f9d', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 8, '2018-12-07 07:33:59'),
('2a918d3c', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 0, '2018-12-07 07:54:02'),
('319a9da3', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 0, '2018-12-07 07:52:33'),
('46783733', '7a999784-1456-562c-a833-30b93cddcbbe', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 4, '2018-12-07 07:51:33'),
('4f6a2951', '7a999784-1456-562c-a833-30b93cddcbbe', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 4, '2018-12-07 10:22:46'),
('673699bd', 'a8496f30-0766-5575-bc25-522a646634ff', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 2, '2018-12-07 18:54:48'),
('7173939b', '7a999784-1456-562c-a833-30b93cddcbbe', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 4, '2018-12-07 07:57:57'),
('9445bfe4', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 0, '2018-12-07 07:56:00'),
('97eca892', '4e34ed32-ae20-598f-97b7-cf9ee30ca492', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 8, '2018-12-07 07:56:45'),
('992109b8', '46b3821f-5717-5ba7-ad27-8f350e954f9d', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 8, '2018-12-07 18:46:26'),
('9d2bb494', '46b3821f-5717-5ba7-ad27-8f350e954f9d', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 6, '2018-12-07 07:29:25'),
('eb127946', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 0, '2018-12-07 07:53:42'),
('ee4c0340', '4e34ed32-ae20-598f-97b7-cf9ee30ca492', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 8, '2018-12-07 07:57:15'),
('f46f8ae8', 'bd1d04a7-9042-515f-9c50-8669e6c2bbff', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 0, '2018-12-07 07:54:16'),
('fc328c0f', '46b3821f-5717-5ba7-ad27-8f350e954f9d', '834709ea-d983-5f5e-a902-86ce3e57ecbf', 0, '2018-12-07 18:46:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencia`
--

CREATE TABLE `sugerencia` (
  `idsugerencia` varchar(36) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `audio` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sugerencia`
--

INSERT INTO `sugerencia` (`idsugerencia`, `imagen`, `audio`, `nombre`) VALUES
('11ffef32-c6c3-5524-995a-b80ad71704ba', 'Enchufe_sugerencia.png', 'Enchufe_sugerencia.wav', 'Enchufe_sugerencia'),
('16d274c1-7350-5035-ae2d-c4a58acd019f', 'Pollo_sugerencia.png', 'Pollo_sugerencia.wav', 'Pollo_sugerencia'),
('196af654-6444-5f07-8515-c895f6be7d69', 'Manzana_sugerencia.png', 'Manzana_sugerencia.wav', 'Manzana_sugerencia'),
('45a42df1-d24f-563a-835d-933ff970d0e9', 'Martillo_sugerencia.png', 'Martillo_sugerencia.wav', 'Martillo_sugerencia'),
('64380547-6904-5f61-a959-1960dfb8ca13', 'Lapiz_sugerencia.png', 'Lapiz_sugerencia.wav', 'Lapiz_sugerencia'),
('715fb5f5-07fc-58f0-a074-49d70b1be5e6', 'Pantalon_sugerencia.png', 'Pantalon_sugerencia.wav', 'Pantalon_sugerencia'),
('7944d046-8fb8-5133-bb69-54fbd3f782ea', 'Polera_sugerencia.png', 'Polera_sugerencia.wav', 'Polera_sugerencia'),
('839a1f3e-7f7b-5e28-9648-3f9556a1ccc1', 'Cafe_sugerencia.png', 'Cafe_sugerencia.wav', 'Cafe_sugerencia'),
('96ba4a31-1e96-5046-982a-3a681d2bfb7e', 'Zapatos_sugerencia.png', 'Zapatos_sugerencia.wav', 'Zapatos_sugerencia'),
('aed89953-31af-59ee-a442-3e9d94e018f0', 'Dinero_sugerencia.png', 'Dinero_sugerencia.wav', 'Dinero_sugerencia'),
('afe75c57-4d04-5fc8-b053-1f03cbb94ce5', 'Llaves_sugerencia.png', 'Llaves_sugerencia.wav', 'Llaves_sugerencia'),
('b14fdfc3-6d8f-5b6f-a0f1-4575aa32976e', 'Falda_sugerencia.png', 'Falda_sugerencia.wav', 'Falda_sugerencia'),
('baf369a1-841e-553d-906a-fa9966d55b97', 'Cuchillo_sugerencia.png', 'Cuchillo_sugerencia.wav', 'Cuchillo_sugerencia'),
('bc7ffb92-181f-50ad-b044-96b3d24780ef', 'Rosquilla_sugerencia.png', 'Rosquilla_sugerencia.wav', 'Rosquilla_sugerencia'),
('d46f0ed4-d277-5087-b356-f4cdc80d5a46', 'Blusa_sugerencia.png', 'Blusa_sugerencia.wav', 'Blusa_sugerencia'),
('f022ebb5-a26a-5edd-a15e-7df949c124e1', 'Cigarro_sugerencia.png', 'Cigarro_sugerencia.wav', 'Cigarro_sugerencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
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
  `id_usuario_responsable` varchar(36) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `email`, `password`, `fecha_nacimiento`, `creado`, `modificado`, `status`, `rol`, `id_usuario_responsable`) VALUES
('069b81e8-2b89-595c-99b6-d8654a13f7c3', 'Jhoel', 'Enriquez', 'jenriquez@gmail.com', '48c47c7e9772234be2c6e58c850cebe9045e8903f739bd4148131c3e9f847039babf53aaf9fddf4af9ac26bc30ca0ab47f120376c1e9a7a88e47fbeaec1e5334FLOmr4Qs/TEZL41zeitosIZ+vvKUDpRPb8tTg5J8MV4=', '2018-12-22', '2018-12-07 19:06:19', '2018-12-07 19:06:27', '1', 'adm', NULL),
('46a56b6c-82ca-5040-821e-8943df9248a1', 'Arturo', 'Elastinen', 'alan@men.com', '7f705b61668e8b680983b2eb67a06d80f96b4cb470426206ce7ea8c1e39c7162269defa9bb1234907b39a82db363aac3b7d22a6ba3982724c098c984d3c1867bFuvZ8y3w5IQdoEGCancARuchOe5vFOHIkkaFzxNYC6w=', '1997-12-11', '2018-12-07 10:41:09', '2018-12-11 17:45:35', '1', 'tut', NULL),
('49b37767-e172-5319-8fe5-76c7d590233e', 'Fede', 'Balazo', 'fade.balines@tesp.com', 'ce6127d2b98b7cf3e44c6e20415c735f5782650313c077ae4b436bde424e07fa37f452f2555adcab428eb9cab123adacde26daae91d606ba83936e8c4d16978cG2sP1Q4EC2Apht7EK0DWJjGxWlofNI1xJjv2MWU+yK8=', '2000-01-18', '2018-12-07 09:59:10', '2018-12-11 17:44:41', '1', 'pac', '46a56b6c-82ca-5040-821e-8943df9248a1'),
('834709ea-d983-5f5e-a902-86ce3e57ecbf', 'Carlos', 'Enriquez', 'alexandro.arce@outlook.com', 'ce7f0e1a73e41fcca649c5c8195d85c02608a58d386d403ab2b93a55d7c061f53bddc342830c5d17d7f5d2dea852943f7e8a5d2dcc27c54d1d4494d07ca3a292rj8PyaSTAeGlQIcwBTr49dG4herCyw22tQDMwpGLbbQ=', '1994-04-11', '2018-12-03 23:34:41', '2018-12-11 17:45:30', '1', 'pac', '46a56b6c-82ca-5040-821e-8943df9248a1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`idejercicio`),
  ADD KEY `fk_ejercicio_pk_etapa` (`id_etapa`);

--
-- Indices de la tabla `etapa`
--
ALTER TABLE `etapa`
  ADD PRIMARY KEY (`idetapa`);

--
-- Indices de la tabla `marcado`
--
ALTER TABLE `marcado`
  ADD PRIMARY KEY (`idmarcado`),
  ADD KEY `fk_marcado_pk_resultado` (`id_resultado`),
  ADD KEY `fk_marcado_pk_respuesta` (`id_respuesta`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idrespuesta`),
  ADD KEY `fk_respuesta_pk_ejercicio` (`id_ejercicio`),
  ADD KEY `fk_respuesta_pk_sugerencia` (`id_sugerencia`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`idresultado`),
  ADD KEY `fk_resultado_pk_etapa` (`id_etapa`),
  ADD KEY `fk_resultado_pk_usuario` (`id_usuario`);

--
-- Indices de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  ADD PRIMARY KEY (`idsugerencia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_responsable_pk_usuario` (`id_usuario_responsable`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcado`
--
ALTER TABLE `marcado`
  MODIFY `idmarcado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD CONSTRAINT `fk_ejercicio_pk_etapa` FOREIGN KEY (`id_etapa`) REFERENCES `etapa` (`idetapa`);

--
-- Filtros para la tabla `marcado`
--
ALTER TABLE `marcado`
  ADD CONSTRAINT `fk_marcado_pk_respuesta` FOREIGN KEY (`id_respuesta`) REFERENCES `respuesta` (`idrespuesta`),
  ADD CONSTRAINT `fk_marcado_pk_resultado` FOREIGN KEY (`id_resultado`) REFERENCES `resultado` (`idresultado`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `fk_respuesta_pk_ejercicio` FOREIGN KEY (`id_ejercicio`) REFERENCES `ejercicio` (`idejercicio`),
  ADD CONSTRAINT `fk_respuesta_pk_sugerencia` FOREIGN KEY (`id_sugerencia`) REFERENCES `sugerencia` (`idsugerencia`);

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `fk_resultado_pk_etapa` FOREIGN KEY (`id_etapa`) REFERENCES `etapa` (`idetapa`),
  ADD CONSTRAINT `fk_resultado_pk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_responsable_pk_usuario` FOREIGN KEY (`id_usuario_responsable`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
