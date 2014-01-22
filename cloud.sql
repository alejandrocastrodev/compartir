-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 27-03-2012 a las 08:34:53
-- Versión del servidor: 6.0.4
-- Versión de PHP: 6.0.0-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `mycloud`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `chat1`
-- 

CREATE TABLE `chat1` (
  `id_linea` int(5) NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `user_id` int(3) NOT NULL,
  `nombre_chat` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `id_mje_actual` int(4) NOT NULL,
  PRIMARY KEY (`id_linea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `chat1`
-- 

INSERT INTO `chat1` VALUES (21, 'jajajaja', 12, 'Marcos', '2012-02-08 10:03:42', 0);
INSERT INTO `chat1` VALUES (20, 'labura vaga ...', 12, 'Marcos', '2012-02-08 10:03:40', 0);
INSERT INTO `chat1` VALUES (19, 'estoy aburrida....', 5, 'PameB', '2012-02-08 10:02:21', 0);
INSERT INTO `chat1` VALUES (18, 'hola como va?????', 5, 'PameB', '2012-02-08 10:02:14', 0);
INSERT INTO `chat1` VALUES (16, 'sebas', 9, 'Don H', '2012-02-07 11:04:41', 0);
INSERT INTO `chat1` VALUES (17, 'holaaaaaaaaaa', 9, 'Don H', '2012-02-07 11:56:42', 0);
INSERT INTO `chat1` VALUES (15, '????', 9, 'Don H', '2012-02-07 11:01:07', 0);
INSERT INTO `chat1` VALUES (14, 'ale por que no hay internet', 9, 'Don H', '2012-02-07 11:00:49', 0);
INSERT INTO `chat1` VALUES (13, 'alguien sabe el numero 0800 de movistar', 9, 'Don H', '2012-02-07 11:00:02', 0);
INSERT INTO `chat1` VALUES (12, '......', 12, 'Marcos', '2012-02-07 10:44:37', 0);
INSERT INTO `chat1` VALUES (42, 'paso ', 10, 'Loree', '2012-03-22 11:48:12', 0);
INSERT INTO `chat1` VALUES (43, 'algo o solo me extra&ntilde;as...........', 10, 'Loree', '2012-03-22 11:48:23', 0);
INSERT INTO `chat1` VALUES (44, 'las dos cosas', 5, 'PameB', '2012-03-22 11:48:42', 0);
INSERT INTO `chat1` VALUES (45, 'si me extra&ntilde;as voy ya', 10, 'Loree', '2012-03-22 11:48:43', 0);
INSERT INTO `chat1` VALUES (46, 'sino tengo que terminar algo', 10, 'Loree', '2012-03-22 11:48:51', 0);
INSERT INTO `chat1` VALUES (47, 'listyo', 10, 'Loree', '2012-03-22 11:48:57', 0);
INSERT INTO `chat1` VALUES (48, 'pame te pase el archivo de renovacion febrero, con las terjetas que n estan, marcadas.', 12, 'Marcos', '2012-01-31 11:20:14', 0);
INSERT INTO `chat1` VALUES (49, 'Ya lo baje, gracias', 5, 'PameB', '2012-01-31 11:49:02', 0);
INSERT INTO `chat1` VALUES (0, 'hola', 9, 'Don H', '2012-01-31 11:53:40', 0);
INSERT INTO `chat1` VALUES (1, 'pame te pase el archivo nuevo de la constancia de baja', 12, 'Marcos', '2012-01-31 12:29:43', 0);
INSERT INTO `chat1` VALUES (11, 'no mentira', 12, 'Marcos', '2012-02-07 10:44:30', 0);
INSERT INTO `chat1` VALUES (10, 'soy pame', 12, 'Marcos', '2012-02-07 10:30:56', 0);
INSERT INTO `chat1` VALUES (9, 'ale venis por favor, la computadora se tildo', 12, 'Marcos', '2012-02-07 10:30:38', 0);
INSERT INTO `chat1` VALUES (8, 'holaaaaa', 9, 'Don H', '2012-02-06 13:48:39', 0);
INSERT INTO `chat1` VALUES (7, 'la captura de pantalla', 12, 'Marcos', '2012-02-06 10:43:43', 0);
INSERT INTO `chat1` VALUES (6, 'sebas mandame el archivo', 12, 'Marcos', '2012-02-06 10:43:28', 0);
INSERT INTO `chat1` VALUES (4, 'jajaja', 2, 'Ale', '2012-02-03 11:02:43', 0);
INSERT INTO `chat1` VALUES (5, 'ale podes venir un segundo, por favor.', 5, 'PameB', '2012-02-03 12:48:40', 0);
INSERT INTO `chat1` VALUES (3, 'en febrero', 2, 'Ale', '2012-02-03 11:02:42', 0);
INSERT INTO `chat1` VALUES (2, 'cuando cobra piafer??????', 9, 'Don H', '2012-02-01 13:45:35', 0);
INSERT INTO `chat1` VALUES (30, 'gracias mamaza!!!!', 1, 'Seba', '2012-03-13 09:40:51', 0);
INSERT INTO `chat1` VALUES (41, 'lore, cuando tengas un ratito veni', 5, 'PameB', '2012-03-22 11:48:03', 0);
INSERT INTO `chat1` VALUES (40, 'pame', 10, 'Loree', '2012-03-22 11:44:40', 0);
INSERT INTO `chat1` VALUES (39, 'lore me decis tu ultimo numero de nota, por favor', 5, 'PameB', '2012-03-22 09:17:40', 0);
INSERT INTO `chat1` VALUES (38, 'GRACIAS !!!!', 10, 'Loree', '2012-03-15 14:55:33', 0);
INSERT INTO `chat1` VALUES (37, 'TARDE PERO SEGURO', 10, 'Loree', '2012-03-15 14:53:42', 0);
INSERT INTO `chat1` VALUES (36, 'HELLO', 10, 'Loree', '2012-03-15 14:53:36', 0);
INSERT INTO `chat1` VALUES (35, 'avisame cuando terminassss', 2, 'Ale', '2012-03-15 10:24:53', 0);
INSERT INTO `chat1` VALUES (34, 'Loreeeeeeeeeeeeeeeeeeeeeeeeeee', 2, 'Ale', '2012-03-15 10:24:48', 0);
INSERT INTO `chat1` VALUES (33, 'seba ahi te mande el archivo', 11, 'Rodo', '2012-03-13 11:45:02', 0);
INSERT INTO `chat1` VALUES (32, 'aca estoyy', 2, 'Ale', '2012-03-13 10:51:08', 0);
INSERT INTO `chat1` VALUES (31, 'de nada capo', 11, 'Rodo', '2012-03-13 09:41:21', 0);
INSERT INTO `chat1` VALUES (22, 'me imprimis el archivo que te mande!!!', 12, 'Marcos', '2012-02-08 13:50:36', 0);
INSERT INTO `chat1` VALUES (23, 'ok', 5, 'PameB', '2012-03-02 10:13:26', 0);
INSERT INTO `chat1` VALUES (24, 'sebas la ultima actualizacion es la del 23 /2????', 12, 'Marcos', '2012-03-07 14:27:57', 0);
INSERT INTO `chat1` VALUES (25, 'Chicos el 2/3 fue la ultima actualizacion, sinceramente nose que pudo haber pasado.', 5, 'PameB', '2012-03-09 13:04:28', 0);
INSERT INTO `chat1` VALUES (26, 'Ah&iacute; va el control de asistenciaaa!!!!!!!!!', 1, 'Seba', '2012-03-12 14:06:59', 0);
INSERT INTO `chat1` VALUES (27, 'capo como se llama el archivo? tengo 15 tuyos', 11, 'Rodo', '2012-03-13 09:39:28', 0);
INSERT INTO `chat1` VALUES (28, 'COPIA DE DESAPARECIDOS 2012', 1, 'Seba', '2012-03-13 09:40:16', 0);
INSERT INTO `chat1` VALUES (29, 'recien te lo acabo de mandar', 1, 'Seba', '2012-03-13 09:40:31', 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `chat_control`
-- 

CREATE TABLE `chat_control` (
  `id_chat` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `id_mje_actual` int(2) NOT NULL,
  `max_lineas` int(2) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `id_fch_hora` int(4) NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `chat_control`
-- 

INSERT INTO `chat_control` VALUES ('chat1', 47, 50, '2012-03-22 11:48:57', 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `files`
-- 

CREATE TABLE `files` (
  `file_id` int(6) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `file_code` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `file_root_id` int(3) NOT NULL,
  `file_date` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `file_hour` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_ext` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=619 ;

-- 
-- Volcar la base de datos para la tabla `files`
-- 

INSERT INTO `files` VALUES (4, 'Nº DE REMITO.xls', '69v9fz3hep11goy1f5m0timqrr76s3a860a0donw', 13, '02/11/20', '14:05:50', 61952, 'xls');
INSERT INTO `files` VALUES (584, '2012-03-16.doc', '04nfs0t71v1zf54mmaj079snvc254epw2zq3e205', 6, '19/03/20', '08:25:07', 25600, 'doc');
INSERT INTO `files` VALUES (616, 'Cruce renovación Abril.xls', '2p3ffoe60223m528g0x0c5c6tx43atuaqww330ja', 1, '26/03/20', '10:14:21', 98304, 'xls');
INSERT INTO `files` VALUES (582, 'Datos TV 2012.xls', 'yfedwp69m1biml28pj03qq05iz02419crxgy8a8m', 10, '19/03/20', '07:31:02', 775680, 'xls');
INSERT INTO `files` VALUES (463, 'Nueva carpeta.rar', 'hamp9ojiur895153xq2gr0tip9734gc0xq42u8nr', 6, '26/01/20', '14:58:01', 859529, 'rar');
INSERT INTO `files` VALUES (23, 'RANKING PARA MEJORAS.xls', '79o0mn7e0oqq1892q1l6dewsk6z1245r42fcqsw1', 6, '04/11/20', '12:29:24', 356352, 'xls');
INSERT INTO `files` VALUES (583, 'RENOVACION marzo.xls', '251k23w3kp00203kr4nb3oju0d53599o5rhbv126', 12, '19/03/20', '07:34:26', 605696, 'xls');
INSERT INTO `files` VALUES (617, 'Luz y Hermanos.doc', '55f5xi8u739czk1h22312m12894o74977ti5444q', 9, '26/03/20', '12:20:20', 86528, 'doc');
INSERT INTO `files` VALUES (18, 'Datos TV seguro salud publico.xls', 'c99xv483h725gve3lhd4q9z5554n0uh0rm2w330s', 8, '04/11/20', '10:36:29', 680448, 'xls');
INSERT INTO `files` VALUES (29, 'Logos Pcia.doc', '7e9b990w02y06tf3ng644m02g2135266e1i7wxy5', 6, '04/11/20', '14:27:15', 34304, 'doc');
INSERT INTO `files` VALUES (30, 'RANKING PARA MEJORAS.xls', 'r0345z7p59o0l65sw85264hllyladh8uk1ek0gfs', 6, '04/11/20', '14:28:33', 356352, 'xls');
INSERT INTO `files` VALUES (597, 'Aplicaciones.rar', '751gw0hw0fk109fsp8k448v0351gasevh1p585fc', 1, '20/03/20', '08:57:46', 27259760, 'rar');
INSERT INTO `files` VALUES (46, 'Resumenes-Banco Ciudad.pdf', 'cxaw2txpw82lvxu187256a320oy0tcs75j30b176', 6, '11/11/20', '10:16:42', 5255775, 'pdf');
INSERT INTO `files` VALUES (130, 'control de asistencia COMPU LORE.xls', '81lq2nzjchj8ef3xe0619m9ndje653zgx311983b', 6, '17/11/20', '15:48:52', 410624, 'xls');
INSERT INTO `files` VALUES (580, 'CAMBIOS DE EQUIPO MARZO.doc', 'w3p98f5s3t90a7l6s8721y77bs07gx5032vk25t5', 6, '15/03/20', '11:21:14', 27136, 'doc');
INSERT INTO `files` VALUES (131, 'Cronograma EPTV Noviembre-Diciembre.doc', '25tylvt4r471814t566a6rct8a56z4sm76kz7jiy', 6, '18/11/20', '09:19:08', 39424, 'doc');
INSERT INTO `files` VALUES (609, 'RECLAMOS _BCG_Cuenta Cerrada Banco MARZO si.xls', 'd67h7dssz923rxba5sx431pi8yvm7wipvq94w038', 5, '22/03/20', '10:49:47', 461824, 'xls');
INSERT INTO `files` VALUES (241, 'logo subse.doc', 'gbn1tlj23e1nv9ts9nup36cxyc34jp3v489y876m', 6, '06/12/20', '13:45:47', 107520, 'doc');
INSERT INTO `files` VALUES (171, 'Anexo I y II LOBERIA MEJOR VIVIR 2.xls', 'wba48t9d4n92n17or39wtxov4n12pz4y803oa4mx', 14, '24/11/20', '11:56:05', 78848, 'xls');
INSERT INTO `files` VALUES (585, '2012-03-16.doc', 'j146162wb02v90y2ml2z4xvrpg416f9alo9f6z2j', 9, '19/03/20', '09:37:42', 27648, 'doc');
INSERT INTO `files` VALUES (448, 'CASOS URGENTES Y SALIDAS.xls', 'g25v4ft7j290qc9q0o51ji34321179702288r824', 21, '17/01/20', '11:15:39', 198144, 'xls');
INSERT INTO `files` VALUES (449, 'RENOVACION ENERO 2012.xls', 'p3l16q13e36fxd765w2j9g71v01699bq973y6272', 6, '17/01/20', '11:32:14', 69632, 'xls');
INSERT INTO `files` VALUES (446, 'clip_image002.jpg', '98a2689hfu5cg3445440t6j877xigpuk9w877hrf', 27, '17/01/20', '11:03:24', 4490, 'jpg');
INSERT INTO `files` VALUES (451, 'RENOVACION ENERO 2012.xls', '0v724v89a3n54i49o3kt0dc8r537f3wnk14ra870', 6, '20/01/20', '08:48:07', 71680, 'xls');
INSERT INTO `files` VALUES (436, 'CASOS URGENTES Y SALIDAS.xls', 'gk0meht63x0x5zvz5hsr0n5ru497px77e5u2g1rb', 21, '17/01/20', '09:52:26', 198144, 'xls');
INSERT INTO `files` VALUES (406, 'leo matioli.rar', '42ps61527g3v627fzym160jk2kc7o6m8j5fm48bm', 13, '11/01/20', '11:12:19', 79719054, 'rar');
INSERT INTO `files` VALUES (305, 'Diciembre 2011.rar', '4vc8d898jk7692gfpc20c7lde850o34r077r4a3v', 6, '19/12/20', '15:52:10', 984471, 'rar');
INSERT INTO `files` VALUES (164, 'vale HERRAMIENTA SUBSECRETARIA  20111111.xls', 'r69lh7a799nk4vg2p2y9bzii561dyf2b9g2w1oai', 17, '23/11/20', '14:50:47', 33199616, 'xls');
INSERT INTO `files` VALUES (586, 'Nuevo Documento de Microsoft Word.doc', '957f7bf86a13h2e4lj18w2sjh57s50862px83u52', 10, '19/03/20', '10:21:57', 26112, 'doc');
INSERT INTO `files` VALUES (79, 'MATERIALES PENDIENTES Y ENTREGADOS 20111115.xls', 'y5h6h4x6qn47sm55i109dgq79o0mn7e0oqq1892q', 18, '15/11/20', '11:08:57', 862208, 'xls');
INSERT INTO `files` VALUES (242, 'RENOVACION DICIEMBRE 2008.xls', 'lawhjoqi9m059nr824jvj98i1wyb4wiu87tg2gz1', 13, '06/12/20', '14:03:43', 2271232, 'xls');
INSERT INTO `files` VALUES (595, 'REUNION 23-03.doc', '00kfgt2dqj1vz5v0z10lkv68b4h9pps68dr54u9k', 6, '19/03/20', '13:36:24', 10752, 'doc');
INSERT INTO `files` VALUES (169, 'Cronograma Mas Vida 2012 Envios.xls', 'wf3c5wtnp4i7rwwsp7by0vr37ynpp7g4ec6sjr50', 6, '23/11/20', '15:35:25', 23040, 'xls');
INSERT INTO `files` VALUES (257, 'RENOVACION DICIEMBRE 2008.xls', 'vy95v61z032f1o29x1uw1x6u5n5m8sgrx25c3904', 6, '07/12/20', '15:45:17', 2355200, 'xls');
INSERT INTO `files` VALUES (328, 'CONSULTA MAS VIDA.ldb', '21d06bo505un04ps5k692gv87s7205hy7m1p6hz0', 8, '20/12/20', '12:17:06', 64, 'ldb');
INSERT INTO `files` VALUES (483, 'Constancia de baja plan+vida.xls', '450vquab560h8yxhl3jv96dq2r0l9a7b8o01796o', 12, '31/01/20', '11:29:23', 70144, 'xls');
INSERT INTO `files` VALUES (587, 'Datos TV 2012.xls', '539g4sg73cas1g0vmyy719p49xr4pqa67yh6i4hk', 10, '19/03/20', '10:42:16', 775680, 'xls');
INSERT INTO `files` VALUES (608, 'Quilmes_Buscador_Mar11.mdb', '8ez37spihv1fd1m7b5gsw7272ketx3ujr3x431f5', 5, '22/03/20', '10:48:23', 8458240, 'mdb');
INSERT INTO `files` VALUES (433, 'GATO NEGRO.jpg', 'h22gqm9460gv07v263l4248bm089d71vz24lt3po', 3, '17/01/20', '09:46:57', 146265, 'jpg');
INSERT INTO `files` VALUES (161, 'Cronograma EPTV Noviembre-Diciembre (2).doc', '7965ulnqs7q8eor9a6ms9t6w66ddzan3qs61k424', 6, '23/11/20', '10:32:15', 39424, 'doc');
INSERT INTO `files` VALUES (104, 'SEÑORES PADRES.doc', 'yk0u5n2c3m41ab5730f5f1d2fb1vdpyv7nh1uo9j', 18, '16/11/20', '15:00:39', 24064, 'doc');
INSERT INTO `files` VALUES (596, '2012-03-16.doc', '178gt158le9l04m63xc4y1m379kh4doxu3795mt2', 6, '19/03/20', '13:40:31', 27648, 'doc');
INSERT INTO `files` VALUES (246, 'Dibujo.bmp', 'r8da900s91524al21hlr8s313bv3h1r1m56f6253', 8, '06/12/20', '15:33:20', 783414, 'bmp');
INSERT INTO `files` VALUES (168, 'Nota Quilmes.doc', 'o6r22s514g3aacw56y8l15a4271l610aeq3anv9e', 6, '23/11/20', '15:35:11', 58880, 'doc');
INSERT INTO `files` VALUES (330, 'Certificado para TVT cooperativas.doc', '666nrss1laxis3zw236mvtv9f4c9b0g32jbwk12e', 6, '20/12/20', '13:16:12', 40960, 'doc');
INSERT INTO `files` VALUES (137, 'plantillas web.txt', '1269j79ctb3a0z5kahgb4s26093b5w297dsa35md', 0, '18/11/20', '11:59:32', 886, 'txt');
INSERT INTO `files` VALUES (148, 'agenda.xls', 'c75bfngz37kse17b5px7h7t49h00l0kf48r77h63', 18, '21/11/20', '09:54:10', 23040, 'xls');
INSERT INTO `files` VALUES (598, 'Quilmes_Altas_Abr (corregido).xls', 'bv0854jzsl233on60nu6ucwg104az148zbk3xq23', 5, '20/03/20', '10:26:43', 193822, 'xls');
INSERT INTO `files` VALUES (322, 'RENOVACION DICIEMBRE 2008.xls', 'w1wu60hw4m1u011i0s0emaoc8um80t5276nyries', 8, '20/12/20', '11:59:10', 2355200, 'xls');
INSERT INTO `files` VALUES (149, 'agenda.xls', 'afzt0ilt6481528olm3809x6h3j8t5me21ahm96z', 18, '21/11/20', '09:55:06', 23040, 'xls');
INSERT INTO `files` VALUES (150, 'agenda.xls', '6e4yq56g25v4ft7j290qc9q0o51ji34321179702', 18, '21/11/20', '09:56:18', 23040, 'xls');
INSERT INTO `files` VALUES (456, 'AJUARES sin retirar de  jul a DIC.xls', '42z723x3tjip5w93nrr1jnb97fy4p4c349fl2oc4', 6, '23/01/20', '12:19:01', 243200, 'xls');
INSERT INTO `files` VALUES (557, 'control de asistencia compu Lore 1.xls', 'qg8n610c65om4egm7t88ha12xtul265h2524j1qs', 10, '12/03/20', '10:59:00', 479744, 'xls');
INSERT INTO `files` VALUES (175, 'iNFORME.rar', 's45r5aypqy0dwv51y5i25tag5g48p7i9n0lezwng', 6, '24/11/20', '14:32:20', 63100774, 'rar');
INSERT INTO `files` VALUES (618, 'CAMBIO DE EQUIPO 30-03.doc', 'h582rtd01xy3lwy633995bpvwv71a3cp74398t4y', 10, '27/03/20', '07:27:53', 25600, 'doc');
INSERT INTO `files` VALUES (244, 'RENOVACION DICIEMBRE 2008.xls', '58g7b2t8mibipt80120vw7gi47h38dvoo6775aqt', 8, '06/12/20', '15:15:34', 2271232, 'xls');
INSERT INTO `files` VALUES (600, 'Taller de radio.xls', 'z512j0t0064tu9103657l6hn8sg1hl1lor70317w', 10, '20/03/20', '10:37:50', 50176, 'xls');
INSERT INTO `files` VALUES (601, 'Cruce Quilmes_No_Banc_Mar.xls', '17i0csn5dc09x679f2jh85qs4229ueb7scuy8s11', 2, '20/03/20', '12:47:18', 2312192, 'xls');
INSERT INTO `files` VALUES (602, 'ccd65_2012 reclamos - subsidio vitalicio TVV.doc', 'aa0y5b2y7t6aj888gbo1c26u6z84rex88nm70t49', 10, '22/03/20', '08:32:10', 65536, 'doc');
INSERT INTO `files` VALUES (603, 'Citación.doc', 'th17a0u14b4usduhq0r5847dh28y507rkqb06uq9', 6, '22/03/20', '08:54:11', 24576, 'doc');
INSERT INTO `files` VALUES (604, 'Declaración.doc', 'b60u0ac0pd59jrb0d3m26a5hpjxw81k7baur0874', 6, '22/03/20', '08:54:20', 26112, 'doc');
INSERT INTO `files` VALUES (605, 'planillas quilmes marzo.pdf', 'qc5980fsmq19241383u60b9sp33138v7wm93bx6o', 5, '22/03/20', '09:48:29', 16853520, 'pdf');
INSERT INTO `files` VALUES (329, 'CONSULTA MAS VIDA.mdb', 'o09773pfu3015603t1jmdl7k4jx7krql8b604j7l', 8, '20/12/20', '12:47:00', 64208896, 'mdb');
INSERT INTO `files` VALUES (198, 'Administración y Personal.rar', '1895m2rp76s986x2h08kz5lbq03za13y8pf6wgq9', 6, '25/11/20', '14:55:47', 276316, 'rar');
INSERT INTO `files` VALUES (199, 'ccd35_2011 reclamos leche y raciones.doc', '5m1h1k6522a26wcy085521e693rdyh8rzr4c721b', 6, '29/11/20', '15:17:42', 60416, 'doc');
INSERT INTO `files` VALUES (201, 'ccd330_2011 reclamo por refrigeración de la leche.doc', '4k0q9n8nx6xl0ta1b492u4k69re0hrad53r7njwp', 6, '29/11/20', '15:29:27', 55296, 'doc');
INSERT INTO `files` VALUES (262, 'Nueva carpeta.rar', '6q5zmq4ld8nn2zmys8b411b736fsdegz1kyif00m', 9, '13/12/20', '10:57:30', 4119212, 'rar');
INSERT INTO `files` VALUES (452, 'RENOVACION DICIEMBRE 2008.xls', 't1pkj77lrkvy3y7reb13xm97haqqbkd6z3178q4l', 6, '20/01/20', '08:48:49', 2271232, 'xls');
INSERT INTO `files` VALUES (592, 'vso_image_resizer_WarCry.rar', 'f1l2ev7992gvj2s6148a9tnv57j7u31qj171006a', 2, '19/03/20', '12:24:09', 3184778, 'rar');
INSERT INTO `files` VALUES (260, 'Videos.rar', '52yp2vmta5x9ne995nh5tg8k9efiy010k55j1o09', 9, '13/12/20', '10:45:16', 83399677, 'rar');
INSERT INTO `files` VALUES (594, 'Nueva carpeta.rar', '707d1u53b63bl39zzrb83i4ll084x6075t89027w', 1, '19/03/20', '13:08:15', 11506174, 'rar');
INSERT INTO `files` VALUES (214, 'P050210_16.05.jpg', '8egw6cznt4w48y5nq49i956s4c44081e2n47b81u', 9, '02/12/20', '11:34:14', 697441, 'jpg');
INSERT INTO `files` VALUES (215, 'Seguro Publico de Salud para Trabajadoras Vecinales Voluntarias y Comadres.doc', 'izp6582i3pwj40c5m0sm3e4a73d83148aler4ya0', 6, '02/12/20', '13:19:49', 26624, 'doc');
INSERT INTO `files` VALUES (216, 'sebastian.jpg', '84dk4l83qe8ua3ao3rbk597b18tgzh878v8hl346', 9, '02/12/20', '13:38:23', 68217, 'jpg');
INSERT INTO `files` VALUES (218, 'Quilmes_Dic10.mdb', '9n48c99ol85ouxbqwx1m456xhr2p1y73r18zsahc', 6, '02/12/20', '14:59:07', 12644352, 'mdb');
INSERT INTO `files` VALUES (230, 'KK(jwgkvsq.vmx removal).exe', 'xaz5j11u8tqxc53q8jxr98cu087twz522c1e894d', 2, '06/12/20', '11:10:44', 178442, 'exe');
INSERT INTO `files` VALUES (247, 'Dibujo.bmp', 'yz4200o8csmavu9k99s83959pq15o63k9u82mu4v', 8, '06/12/20', '15:34:18', 783414, 'bmp');
INSERT INTO `files` VALUES (453, 'Proceso de Liquidación del PLAN MAS VIDA 2012.doc', 'u5w95sice85fk8g00kfgt2dqj1vz5v0z10lkv68b', 6, '20/01/20', '09:28:31', 55296, 'doc');
INSERT INTO `files` VALUES (441, 'ADMISIONES URGENTES.xls', '4e9e8vb7u8yzw0l79fg8s91z9cx83kghu58y94q6', 21, '17/01/20', '10:24:51', 1162240, 'xls');
INSERT INTO `files` VALUES (342, 'Diciembre 2011.rar', '64d7g27t020390pekp20k57q5o8ut4gf6ctr9cb9', 6, '22/12/20', '09:52:02', 984471, 'rar');
INSERT INTO `files` VALUES (343, 'Celicacos Noviembre.rar', 'k38d847094o32f07o4xz6vx7218x1gk1cvje7omv', 6, '22/12/20', '11:44:04', 19927, 'rar');
INSERT INTO `files` VALUES (345, 'Exposicion.doc', '5lowp9yvgut8eotv106j91hhi3hi96n2rq67fdm6', 25, '22/12/20', '12:21:57', 111104, 'doc');
INSERT INTO `files` VALUES (346, 'Quilmes_dupli_Dic11.xls', 'wja838n87wvj826dkv8w1gbj72bjc6qpwe48un4u', 6, '22/12/20', '12:41:41', 407552, 'xls');
INSERT INTO `files` VALUES (490, 'Eliminar amvo.vbs', 'dl7k4jx7krql8b604j7lyg6h15ck79v55163hagr', 2, '03/02/20', '10:03:10', 8072, 'vbs');
INSERT INTO `files` VALUES (561, 'DATOS TVT ACTUALIZADOS LORE.xls', 'h1an54h0e27c932gonl3v51el01kex07tu719mxd', 10, '12/03/20', '13:58:56', 64000, 'xls');
INSERT INTO `files` VALUES (377, 'Planilla para envio de Galpon 27-6-2011.xls', 'ty67z76ny1t33arwaa195x0ix49sr37x6ldoo485', 18, '05/01/20', '12:49:57', 40960, 'xls');
INSERT INTO `files` VALUES (565, 'cambio de sist inform PMV.doc', 'hfvb355zj2m6z0lt0qf01wm32303z0qu04z4jnw0', 6, '13/03/20', '10:45:09', 20480, 'doc');
INSERT INTO `files` VALUES (563, 'cambio de sist inform PMV.doc', '251i4rj214981rrr0bho7kmh94053870u43s9a5d', 6, '13/03/20', '10:21:16', 24576, 'doc');
INSERT INTO `files` VALUES (564, 'Copia de Desaparecidos Febrero 2012 (1).xls', 'f827ax9m9afq6x69a30dr9e9lrt2015peehx6l78', 11, '13/03/20', '10:44:38', 33792, 'xls');
INSERT INTO `files` VALUES (393, 'Datos DE FIRMAS.xls', '4egm7t88ha12xtul265h2524j1qsphj7oo24bub4', 13, '10/01/20', '14:51:47', 857088, 'xls');
INSERT INTO `files` VALUES (606, 'planillas quilmes marzo.pdf', '441sfk6hxo9y369kg42kk67spza042ygwgg9566a', 5, '22/03/20', '09:49:30', 16853520, 'pdf');
INSERT INTO `files` VALUES (591, 'No bancarizados del mes de  febrero con reclamos y certificaciones.xls', '2j6nm466631cm9p5899uj18nv11ob84psyqk6147', 5, '19/03/20', '12:05:07', 886784, 'xls');
INSERT INTO `files` VALUES (607, 'CAMBIOS DE EQUIPO MARZO.doc', 'ht036zyns3933t8mg84613ltwdnj08o352fkbegi', 10, '22/03/20', '10:45:32', 25088, 'doc');
INSERT INTO `files` VALUES (467, 'Renovación Febrero 2012.xls', 'o2d1ejni419nhk2l2t19ga3r9ys40g894650sbr3', 6, '27/01/20', '08:30:33', 93696, 'xls');
INSERT INTO `files` VALUES (560, 'Datos TV 2012.xls', '3i8830z5c6s029vbt6bk1o18j38009yuz8d8xzfy', 10, '12/03/20', '13:58:19', 775680, 'xls');
INSERT INTO `files` VALUES (610, 'Certificacion de Identidad marzo si.xls', 'o8g46s5bz48k28yf1o534k53a1pe44k4p1ua1zm5', 5, '22/03/20', '10:49:54', 1196032, 'xls');
INSERT INTO `files` VALUES (611, 'Quilmes_Altas_Mar.xls', '3f2mf3sd97loi3e3c664aqs4890gi2i4e54v13b2', 10, '22/03/20', '11:06:09', 180736, 'xls');
INSERT INTO `files` VALUES (612, 'Quilmes_Banc_Mar.xls', 'o2tw0zctszl82ao83xdm8hy5la7897ibzjj9ln6g', 10, '22/03/20', '11:06:20', 4254720, 'xls');
INSERT INTO `files` VALUES (613, 'Quilmes_No_Banc_Mar.xls', '09974491n752yp2vmta5x9ne995nh5tg8k9efiy0', 10, '22/03/20', '11:06:27', 809472, 'xls');
INSERT INTO `files` VALUES (614, 'Nuevo Hoja de cálculo de Microsoft Excel.xls', 'g7kri028x5518bz2uhk050m280zm4z651s23ry54', 10, '22/03/20', '11:31:16', 35328, 'xls');
INSERT INTO `files` VALUES (573, 'Quilmes Jubilaciones 2012-2013.xls', '4tjsw3o944h19y2cen2ms9b0kxj602992656yw9p', 10, '15/03/20', '09:31:05', 25600, 'xls');
INSERT INTO `files` VALUES (572, 'Quilmes Jubilaciones 2012-2013.xls', 'lv6z8y0io2d1ejni419nhk2l2t19ga3r9ys40g89', 10, '15/03/20', '09:30:48', 25600, 'xls');
INSERT INTO `files` VALUES (481, 'Renovación Febrero 2012.xls', 'bp687836e4g0e80tk0ko6r22s514g3aacw56y8l1', 12, '31/01/20', '10:19:23', 95232, 'xls');
INSERT INTO `files` VALUES (497, 'Planilla MOD-INCLUSION.xls', 'p2609n806p8jog3q32do83y9q2nqq8p2n69506j2', 12, '07/02/20', '10:41:46', 78848, 'xls');
INSERT INTO `files` VALUES (498, 'Nota recategorizacion.doc', '4x914719ydg5vubxumj669wmzwi271n6oj1414z3', 6, '07/02/20', '10:57:52', 57856, 'doc');
INSERT INTO `files` VALUES (499, 'reuniones.doc', 'e9b990w02y06tf3ng644m02g2135266e1i7wxy53', 9, '07/02/20', '11:34:04', 37376, 'doc');
INSERT INTO `files` VALUES (501, 'correo a valeria.doc', 'ih1htoa74g9p0c74n9fd3k0jn39xrk74ok1w9cwv', 6, '07/02/20', '14:39:09', 25088, 'doc');
INSERT INTO `files` VALUES (503, 'ACTUALIZACION TV QUILMES.zip', '58oeqn43j5z757tcw75f1k2v0446mo9naom15e8f', 6, '08/02/20', '11:07:06', 279293, 'zip');
INSERT INTO `files` VALUES (504, 'EverestUlt5.3_www.descargasz.uni.cc.rar', '61t52g98b229tv3ldu9gzw80yuw58ir5mh0wni61', 2, '08/02/20', '11:15:29', 10391212, 'rar');
INSERT INTO `files` VALUES (505, 'escrituracion.doc', '774196h9sbao6pis4ay00b65c5fs31jl5r84n844', 12, '08/02/20', '12:50:09', 42496, 'doc');
INSERT INTO `files` VALUES (512, 'TypingMaster.exe', '6f4hk9eob273kxv32r2j1is0bp93q27vqa928qc5', 2, '14/02/20', '11:00:08', 3938204, 'exe');
INSERT INTO `files` VALUES (516, 'Para cruce.rar', '6gu6477k529btkc2718x2c16d052a7v47w8a9h27', 6, '15/02/20', '13:52:30', 1145652, 'rar');
INSERT INTO `files` VALUES (517, 'Quilmes_Altas_Mar.xls', '366lqj9u8sc674t7d3776btpdjo8gcy48969opj2', 6, '15/02/20', '14:02:11', 2086400, 'xls');
INSERT INTO `files` VALUES (518, 'Cruces.rar', '1871536hynnzdeabx19290ci0610zv8b4faf253g', 2, '15/02/20', '14:29:13', 401110, 'rar');
INSERT INTO `files` VALUES (519, 'fotos carmen.rar', 'b3y7t0f6opohit637gj76w31s3l1s5hu3z76mpll', 2, '17/02/20', '11:38:04', 2003873, 'rar');
INSERT INTO `files` VALUES (520, 'Curso Excel - Alejandro Castro.swf', 'k21x73ikn4kfp1117k3858qfz28wrj6q3yx2w73j', 2, '23/02/20', '10:10:39', 38691336, 'swf');
INSERT INTO `files` VALUES (521, 'MT.txt', '6sd7j530qe0811u9o3kdum61n2h6l40mkx5kcf8c', 2, '23/02/20', '11:31:11', 264, 'txt');
INSERT INTO `files` VALUES (522, 'ccd52_2012 reclamos - subsidio vitalicio TVV.doc', 'u0ac0pd59jrb0d3m26a5hpjxw81k7baur0874441', 10, '23/02/20', '11:39:09', 61952, 'doc');
INSERT INTO `files` VALUES (529, 'chat.rar', '8161kuys60ji36p73m46ge5uw58z929z2e6l4962', 2, '29/02/20', '11:57:10', 994382, 'rar');
INSERT INTO `files` VALUES (530, 'nota a la biblio.doc', 'pu308e0vogg1otmu546l20394349x0733zusn75x', 6, '29/02/20', '12:36:35', 22016, 'doc');
INSERT INTO `files` VALUES (534, 'JEFEFAM.xls', '327l9fu16ikjj33vuzl3rbj6u2vlw3ro6co6wgin', 2, '02/03/20', '10:18:44', 9426944, 'xls');
INSERT INTO `files` VALUES (535, 'control de asistencia compu Lore 1.xls', '59cv3pn2j2co4q6limv7u5l05623i59f9wk41lgu', 10, '02/03/20', '10:30:37', 475136, 'xls');
INSERT INTO `files` VALUES (536, 'horacio.rar', 'xumj669wmzwi271n6oj1414z349v2z837663r1hn', 9, '02/03/20', '11:46:30', 4125382, 'rar');
INSERT INTO `files` VALUES (540, '2012-03-02.doc', 'h0cui3qcgd9xx3v99razfwg7kri028x5518bz2uh', 10, '05/03/20', '14:31:03', 29184, 'doc');
INSERT INTO `files` VALUES (541, 'control de asistencia compu Lore 1.xls', 'a023sy9f0y54sta95d94j826t65hoio1no19j1yl', 10, '05/03/20', '14:47:46', 476160, 'xls');
INSERT INTO `files` VALUES (542, '2012-03-02.doc', 'i8787atq05acy13a2okd7p92d980ej7hq6kt1552', 6, '05/03/20', '14:56:25', 27648, 'doc');
INSERT INTO `files` VALUES (543, '2011-2014 ESMERALDA Alquiler prorroga.PDF', '78o9r30wc6w3738fl2608abtt48zwkuma450w5ym', 2, '07/03/20', '10:27:38', 193463, 'PDF');
INSERT INTO `files` VALUES (544, 'Ejercicios.xls', 'z4200o8csmavu9k99s83959pq15o63k9u82mu4vz', 2, '07/03/20', '11:19:24', 77312, 'xls');
INSERT INTO `files` VALUES (545, 'control de asistencia compu Lore 1.xls', 'nzxhu7y0t208db94uam53xiwr4ggl3ak4m31i4cb', 10, '08/03/20', '08:38:33', 477696, 'xls');
INSERT INTO `files` VALUES (547, 'JEFEFAM.DBF', 'n232t71036q5zmq4ld8nn2zmys8b411b736fsdeg', 2, '09/03/20', '09:05:08', 8333354, 'DBF');
INSERT INTO `files` VALUES (548, 'control de asistencia compu Lore 1.xls', '9140j3e5y239ll8c5727c8onto323p3u57lt1rh8', 10, '09/03/20', '11:25:14', 479744, 'xls');
INSERT INTO `files` VALUES (615, 'Nuevo Hoja de cálculo de Microsoft Excel (2).xls', 'b355zj2m6z0lt0qf01wm32303z0qu04z4jnw05x9', 10, '22/03/20', '11:45:51', 20480, 'xls');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `file_permission`
-- 

CREATE TABLE `file_permission` (
  `file_id` int(6) NOT NULL,
  `user_id` int(3) NOT NULL,
  PRIMARY KEY (`file_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `file_permission`
-- 

INSERT INTO `file_permission` VALUES (23, 14);
INSERT INTO `file_permission` VALUES (29, 14);
INSERT INTO `file_permission` VALUES (29, 15);
INSERT INTO `file_permission` VALUES (29, 16);
INSERT INTO `file_permission` VALUES (30, 15);
INSERT INTO `file_permission` VALUES (30, 16);
INSERT INTO `file_permission` VALUES (79, 17);
INSERT INTO `file_permission` VALUES (130, 10);
INSERT INTO `file_permission` VALUES (131, 10);
INSERT INTO `file_permission` VALUES (150, 22);
INSERT INTO `file_permission` VALUES (161, 10);
INSERT INTO `file_permission` VALUES (164, 19);
INSERT INTO `file_permission` VALUES (168, 10);
INSERT INTO `file_permission` VALUES (169, 10);
INSERT INTO `file_permission` VALUES (171, 6);
INSERT INTO `file_permission` VALUES (175, 10);
INSERT INTO `file_permission` VALUES (198, 10);
INSERT INTO `file_permission` VALUES (199, 10);
INSERT INTO `file_permission` VALUES (215, 7);
INSERT INTO `file_permission` VALUES (216, 6);
INSERT INTO `file_permission` VALUES (216, 7);
INSERT INTO `file_permission` VALUES (216, 8);
INSERT INTO `file_permission` VALUES (216, 10);
INSERT INTO `file_permission` VALUES (216, 11);
INSERT INTO `file_permission` VALUES (216, 13);
INSERT INTO `file_permission` VALUES (218, 1);
INSERT INTO `file_permission` VALUES (241, 10);
INSERT INTO `file_permission` VALUES (242, 6);
INSERT INTO `file_permission` VALUES (244, 11);
INSERT INTO `file_permission` VALUES (244, 13);
INSERT INTO `file_permission` VALUES (257, 8);
INSERT INTO `file_permission` VALUES (328, 13);
INSERT INTO `file_permission` VALUES (329, 13);
INSERT INTO `file_permission` VALUES (342, 1);
INSERT INTO `file_permission` VALUES (346, 1);
INSERT INTO `file_permission` VALUES (377, 19);
INSERT INTO `file_permission` VALUES (433, 21);
INSERT INTO `file_permission` VALUES (436, 3);
INSERT INTO `file_permission` VALUES (441, 3);
INSERT INTO `file_permission` VALUES (449, 1);
INSERT INTO `file_permission` VALUES (449, 10);
INSERT INTO `file_permission` VALUES (456, 1);
INSERT INTO `file_permission` VALUES (467, 13);
INSERT INTO `file_permission` VALUES (481, 5);
INSERT INTO `file_permission` VALUES (497, 5);
INSERT INTO `file_permission` VALUES (498, 5);
INSERT INTO `file_permission` VALUES (501, 5);
INSERT INTO `file_permission` VALUES (503, 1);
INSERT INTO `file_permission` VALUES (512, 1);
INSERT INTO `file_permission` VALUES (516, 2);
INSERT INTO `file_permission` VALUES (517, 2);
INSERT INTO `file_permission` VALUES (518, 6);
INSERT INTO `file_permission` VALUES (519, 19);
INSERT INTO `file_permission` VALUES (520, 1);
INSERT INTO `file_permission` VALUES (520, 5);
INSERT INTO `file_permission` VALUES (520, 6);
INSERT INTO `file_permission` VALUES (520, 7);
INSERT INTO `file_permission` VALUES (520, 8);
INSERT INTO `file_permission` VALUES (520, 9);
INSERT INTO `file_permission` VALUES (520, 10);
INSERT INTO `file_permission` VALUES (520, 11);
INSERT INTO `file_permission` VALUES (520, 12);
INSERT INTO `file_permission` VALUES (520, 13);
INSERT INTO `file_permission` VALUES (534, 5);
INSERT INTO `file_permission` VALUES (535, 1);
INSERT INTO `file_permission` VALUES (540, 6);
INSERT INTO `file_permission` VALUES (541, 1);
INSERT INTO `file_permission` VALUES (542, 10);
INSERT INTO `file_permission` VALUES (548, 1);
INSERT INTO `file_permission` VALUES (557, 1);
INSERT INTO `file_permission` VALUES (561, 1);
INSERT INTO `file_permission` VALUES (563, 5);
INSERT INTO `file_permission` VALUES (564, 1);
INSERT INTO `file_permission` VALUES (565, 5);
INSERT INTO `file_permission` VALUES (572, 5);
INSERT INTO `file_permission` VALUES (573, 5);
INSERT INTO `file_permission` VALUES (580, 10);
INSERT INTO `file_permission` VALUES (582, 1);
INSERT INTO `file_permission` VALUES (583, 6);
INSERT INTO `file_permission` VALUES (586, 5);
INSERT INTO `file_permission` VALUES (587, 5);
INSERT INTO `file_permission` VALUES (591, 2);
INSERT INTO `file_permission` VALUES (592, 1);
INSERT INTO `file_permission` VALUES (594, 6);
INSERT INTO `file_permission` VALUES (595, 10);
INSERT INTO `file_permission` VALUES (596, 10);
INSERT INTO `file_permission` VALUES (597, 10);
INSERT INTO `file_permission` VALUES (598, 2);
INSERT INTO `file_permission` VALUES (600, 5);
INSERT INTO `file_permission` VALUES (602, 5);
INSERT INTO `file_permission` VALUES (603, 10);
INSERT INTO `file_permission` VALUES (604, 10);
INSERT INTO `file_permission` VALUES (605, 8);
INSERT INTO `file_permission` VALUES (606, 9);
INSERT INTO `file_permission` VALUES (611, 6);
INSERT INTO `file_permission` VALUES (612, 6);
INSERT INTO `file_permission` VALUES (613, 6);
INSERT INTO `file_permission` VALUES (614, 5);
INSERT INTO `file_permission` VALUES (615, 5);
INSERT INTO `file_permission` VALUES (616, 5);
INSERT INTO `file_permission` VALUES (618, 5);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `users`
-- 

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `user_pass` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `user_nick` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `user_p1` int(1) NOT NULL,
  `user_p2` int(1) NOT NULL,
  `user_p3` int(1) NOT NULL,
  `user_ses_id` int(6) NOT NULL,
  `chat_nombre` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=28 ;

-- 
-- Volcar la base de datos para la tabla `users`
-- 

INSERT INTO `users` VALUES (1, 'sebastian', 'fiona', 'Sebastian Arias', 0, 0, 0, 822900, 'Seba');
INSERT INTO `users` VALUES (2, 'alejandro', 'nada', 'Alejandro David Castro', 1, 1, 1, 268969, 'Ale');
INSERT INTO `users` VALUES (3, 'jimena', '123456', 'Jimena Eliana Martinez', 0, 0, 0, 439120, 'Jime');
INSERT INTO `users` VALUES (4, 'pamelav', '123456', 'Pamela Anabel Viva', 0, 0, 0, 987365, 'PameV');
INSERT INTO `users` VALUES (5, 'pamelab', '30371293', 'Pamela Benczearki', 0, 0, 0, 287783, 'PameB');
INSERT INTO `users` VALUES (6, 'claudiap', '010311', 'Claudia Panizza', 0, 0, 0, 451644, 'ClauP');
INSERT INTO `users` VALUES (7, 'eugeniab', '123456', 'Eugenia Bellocq', 0, 0, 0, 147680, 'EugeB');
INSERT INTO `users` VALUES (8, 'eugeniac', '123456', 'Maria Eugenia Canessi', 0, 0, 0, 638192, 'EugeC');
INSERT INTO `users` VALUES (9, 'horacio', '161189', 'Horacio Garcia Perez', 0, 0, 0, 296463, 'Don H');
INSERT INTO `users` VALUES (10, 'lorena', '123456', 'Lorena Mariel Stefanow', 0, 0, 0, 787689, 'Loree');
INSERT INTO `users` VALUES (11, 'rodolfo', '123456', 'Rodolfo Albornoz', 0, 0, 0, 662554, 'Rodo');
INSERT INTO `users` VALUES (12, 'marcos', 'marckytos1703', 'Marcos Stuer', 0, 0, 0, 883407, 'Marcos');
INSERT INTO `users` VALUES (13, 'gisell', '123456', 'Gisell Roman', 0, 0, 0, 252792, 'Gise');
INSERT INTO `users` VALUES (14, 'gustavo', '123456', 'Gustavo Vega', 0, 0, 0, 140155, 'Gusti');
INSERT INTO `users` VALUES (15, 'mariela', '123456', 'Mariela Carabes', 0, 0, 0, 600399, 'Mari');
INSERT INTO `users` VALUES (16, 'carlos', '123456', 'Carlos Saucedo', 0, 0, 0, 130816, 'TuAmor');
INSERT INTO `users` VALUES (17, 'noelia', '123456', 'Noelia Ayala', 0, 0, 0, 616741, 'Noe');
INSERT INTO `users` VALUES (18, 'samanta', '123456', 'Monica Samanta Fernandez', 0, 0, 0, 532723, 'Samy');
INSERT INTO `users` VALUES (19, 'valeriad', '123456', 'Valeria Dal Bianco', 0, 0, 0, 768902, 'ValeDB');
INSERT INTO `users` VALUES (20, 'juan', '123456', 'Juan Jose Aranda', 0, 0, 0, 456321, 'Juanjo');
INSERT INTO `users` VALUES (21, 'narela', '123456', 'Narela Villalba', 0, 0, 0, 862808, 'Nare');
INSERT INTO `users` VALUES (22, 'erica', '123456', 'Erica Strosio', 0, 0, 0, 941360, 'Chingui');
INSERT INTO `users` VALUES (23, 'ariel', '123456', 'Ariel Perez Vazquez', 0, 0, 0, 124578, 'Ariel');
INSERT INTO `users` VALUES (24, 'melisa', '123456', 'Melisa Paola Gomez', 0, 0, 0, 372406, 'Mell');
INSERT INTO `users` VALUES (25, 'marcia', 'palorami', 'Marcia Trindade', 0, 0, 0, 354086, 'Marcia');
INSERT INTO `users` VALUES (26, 'raul', '123456', 'Raul Dotto', 0, 0, 0, 123, 'Raul');
INSERT INTO `users` VALUES (27, 'priscila', '123456', 'Priscila Sanz', 0, 0, 0, 305801, 'Pri');