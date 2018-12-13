-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2018 a las 17:04:29
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina_web_bell`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL COMMENT 'llave primaria de la tabla',
  `titulo` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'titulo del evento',
  `contenido` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'contenido del evento',
  `nombre_imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL COMMENT 'imagen del evento',
  `fecha_creacion` datetime NOT NULL COMMENT 'fecha de creacion',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'fecha de modificacion',
  `estatus` tinyint(1) NOT NULL COMMENT 'estatus del evento',
  `id_usuario_creador` int(2) NOT NULL COMMENT 'usuario creador'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `contenido`, `nombre_imagen`, `fecha_creacion`, `fecha_modificacion`, `estatus`, `id_usuario_creador`) VALUES
(1, 'prueba 1', 'prueba uno da<br/>d<br/>ad<br/>a<br/>da<br/>da<br/>da<br/>d', '8b21200fc4a9966551c74e151ce23dad.jpg', '2018-12-06 15:12:34', '2018-12-10 16:12:15', 0, 1),
(2, 'prueba comillas', '\"jose\",d.f,.sf,s.,f.sd,fsd', '03e80123100379c783e9f292c7ca15e6.jpg', '2018-12-06 15:12:10', NULL, 0, 1),
(5, 'trubutario', 'patakdlkgdk dk ddj l<br/>d\'gffd\'gfd\'g<br/>\"\"LM\"KN\"KN\"K\"K\"NK\"', '113f7d23dade595a14b2eec183052875.jpg', '2018-12-06 16:12:59', '2018-12-10 16:12:16', 0, 1),
(6, 'maquinas', 'Nos dedicamos a brindar apoyo integral a nuestros clientes en todas sus necesidades de Sistemas de InspecciÃ³n, VerificaciÃ³n de Peso, TecnologÃ­a de CÃ³digos de Barras, Marcaje de Productos con Suministros Asociados y Sistemas de AutomatizaciÃ³n para las Industrias de Alimentos, FarmacÃ©uticas y Textiles, asÃ­ como Desempolvadores, BlÃ­steadoras, Tableteadoras para el Sector FarmacÃ©utico.<br/><br/>Para el Sistema de InspecciÃ³n y Control de Calidad en lÃ­nea contamos con nuestra representada exclusiva Inglesa Loma Systems, con aplicaciones para detecciÃ³n de metales o partÃ­culas contaminantes, de igual manera verificaciÃ³n de peso en lÃ­nea con sus respectivos sistemas de rechazos.<br/><br/>Para el caso de codificaciÃ³n e impresiÃ³n a tinta continua, nuestra representada exclusiva Linx Printing technologies ofrece equipos de alta calidad, robustos y confiables para todo tipo de aplicaciones industriales e insumos o consumibles garantizados.', '0c76950ee768801018fa006a8b03af79.jpg', '2018-12-06 17:12:11', '2018-12-10 16:12:13', 0, 1),
(7, 'Josef MartÃ­nez tuvo un final de pelÃ­cula con Atlanta', 'El aÃ±o inolvidable de Josef MartÃ­nez en la Mayor League Soccer de Estados Unidos culminÃ³ con un final de pelÃ­cula. El delantero venezolano completÃ³ el cÃ­rculo como el hÃ©roe que fue durante toda la temporada. AnotÃ³ el primer gol y dio la asistencia para el segundo que sellÃ³ el triunfo 2-0 sobre los Timbers de Portland, y le dio al Atlanta United el primer tÃ­tulo de su naciente historia.<br/><br/>DespuÃ©s de ganar el BotÃ­n de Oro al imponer rÃ©cord de 31 goles en una campaÃ±a y ser elegido como Jugador MÃ¡s Valioso de la temporada, al artillero de 25 aÃ±os solo le faltaba conquistar la Copa MLS con Atlanta, al equipo de expansiÃ³n que lo fichÃ³ la temporada pasada por peticiÃ³n del prestigioso tÃ©cnico argentino Gerardo â€œTataâ€ Martino.<br/><br/>Josef se encargÃ³ de llevar a Atlanta hasta el tÃ­tulo en otra noche memorable. En el primer tiempo (m. 34) se avivÃ³ en el Ã¡rea para interceptar un pase en el Ã¡rea rival. Se sacÃ³ a un defensa, driblÃ³ al arquero con su velocidad infernal para extender a 35 su rÃ©cord de goles para un aÃ±o y abrir la fiesta. TambiÃ©n participÃ³ en el segundo tanto al peinar un centro que el argentino Franco Escobar rematÃ³ a los 54 minutos.', '28ecc47a82872f7aa40dc4831b004e7b.jpg', '2018-12-10 16:12:06', '2018-12-10 16:12:11', 1, 1),
(8, 'Publicaron precios de pasajes en terminales', 'El Sistema Integral de Transporte Superficial S.A. (Sitssa), estableciÃ³ nuevas tarifas en los pasajes desde el Terminal de La Bandera y Oriente. La estaciÃ³n de autobuses de La Bandera informÃ³ en su cuenta Twitter, que el precio hasta destinos como Barinas es de Bs.S 222, Barquisimeto 127, Biscucuy 186, San Fernando de Apure 156, Guanare 166, Coro es de Bs.S 203, Maracay 45, Maracaibo (San Francisco) 232, Punto Fijo 236, San CristÃ³bal 367, Trujillo 214, BoconÃ³ 209 y Valera 249.<br/><br/>Por su parte Sitssa publicÃ³ las tarifas del Terminal de Oriente â€œAntonio JosÃ© de Sucreâ€, para destinos como Anaco Bs.S 190, Boca de Uchire 71, Cariaco 190, CarÃºpano 209, CumanÃ¡ 134, El Tigre 220, Guiria 261, MaturÃ­n 197, Puerto La Cruz 117, Puerto Ordaz 257, San FÃ©lix 307, Tucupita 280, entre otros.', 'ea6381eac535a6ca4e9123df5813c500.jpg', '2018-12-10 16:12:12', '2018-12-10 16:12:10', 1, 1),
(9, 'Cuatro detenidos por robar pertenencias de Valbuena y Castillo tras el accidente en el que fallecieron', 'El gobernador de Yaracuy, Julio LeÃ³n Heredia, informÃ³ la detenciÃ³n de cuatro sujetos seÃ±alados de robar pertenencias de los beisbolistas Luis Valbuena y JosÃ© Castillo, fallecidos en un accidente de trÃ¡nsito en la autopista CimarrÃ³n Andresote, la madrugada del viernes.<br/><br/>El robo se produjo una vez ocurrido el siniestro vial, segÃºn se desprende de lo declarado por el mandatario.<br/><br/>â€œSerÃ¡n puestos a la orden de las instituciones con competencia en la materiaâ€, escribiÃ³ LeÃ³n Heredia en su cuenta de Twitter desde donde seÃ±alÃ³ que el vehÃ­culo donde venÃ­an los peloteros volcÃ³ â€œtras esquivar un objeto en la vÃ­aâ€¦â€.<br/><br/>Por su parte, la Liga Venezolana de BÃ©isbol Profesional dijo lamentar â€œel trÃ¡gico fallecimiento de Castillo y Valbuenaâ€. Decretaron tres dÃ­as de duelo y suspendieron los tres juegos de este viernes.', '4f87ae08c7d1e40f4760b17907bee7a0.jpg', '2018-12-10 16:12:06', NULL, 0, 1),
(10, 'Capturan a dos personas dedicadas al hurto en el Metro de Caracas', 'Funcionarios de la Gerencia de ProtecciÃ³n y Seguridad del capturaron a dos personas que se dedicaban al hurto y comercio ilÃ­cito de materiales estratÃ©gicos pertenecientes al Metro de Caracas, informÃ³ su presidente, CÃ©sar Vega.<br/><br/>IndicÃ³ que las personas fueron capturadas in fraganti por los funcionarios, que trabajaron en articulaciÃ³n con efectivos de la Guardia Nacional Bolivariana (GNB) y la PolicÃ­a Nacional Bolivariana (PNB), especÃ­ficamente a la altura de la Y ubicada entre las estaciones Mamera y Caricuao, de la lÃ­nea 2, reseÃ±a nota de prensa del Metro de Caracas.<br/><br/>â€œEl hurto de estos cables nos estaba causando grandes daÃ±os porque originaban fallas en los trenes durante su desplazamiento e impedÃ­an que prestÃ¡ramos un servicio de calidad a los usuarios del Metro en la lÃ­nea 2â€, expresÃ³.<br/><br/>DetallÃ³ que los antisociales sustrajeron una caja inductiva y un segmento de cable de 5 metros, con componentes de cobre que desconectaron de la vÃ­a fÃ©rrea en ese tramo de la lÃ­nea 2.<br/><br/>Los delincuentes fueron identificados como JosÃ© Alejandro GonzÃ¡lez MartÃ­nez y Ronaikel RenÃ© Sequera Vivas. Ambos fueron puestos a las Ã³rdenes de la DivisiÃ³n Contra la Propiedad, Hurto, TrÃ¡fico y Comercio IlÃ­cito de Recursos o Materiales EstratÃ©gicos del Cuerpo de Investigaciones CientÃ­ficas, Penales y CriminalÃ­sticas (Cicpc) y el Ministerio PÃºblico (MP).', '8603dd7b72d6e3ad1f14744068d5c48e.jpg', '2018-12-10 16:12:52', '2018-12-10 16:12:15', 1, 1),
(4, 'perris', 'Wikipedia es una enciclopedia libre,nota 2â€‹ polÃ­glota, editada de manera colaborativa. Es administrada por la FundaciÃ³n Wikimedia, una organizaciÃ³n sin Ã¡nimo de lucro cuya financiaciÃ³n estÃ¡ basada en donaciones. Sus mÃ¡s de 48 millones de artÃ­culos en 300 idiomas han sido redactados en conjunto por voluntarios de todo el mundo,5â€‹ lo que suma mÃ¡s de 2000 millones de ediciones, y permite que cualquier persona pueda sumarse al proyecto6â€‹ para editarlos, salvo que la pÃ¡gina se encuentre protegida contra vandalismos para evitar problemas y/o trifulcas.<br/><br/>Fue creada el 15 de enero de 2001 por Jimmy Wales y Larry Sanger,7â€‹ es la mayor y mÃ¡s popular obra de consulta en Internet.8â€‹9â€‹10â€‹ Desde su fundaciÃ³n, Wikipedia no solo ha ganado en popularidad â€”se encuentra entre los 10 sitios web mÃ¡s populares del mundoâ€”,11â€‹12â€‹ sino que su Ã©xito ha propiciado la apariciÃ³n de proyectos hermanos: Wikcionario, Wikilibros, Wikiversidad, Wikiquote, Wikinoticias, Wikisource, Wikiespecies y Wikiviajes.<br/><br/>No obstante, tiene numerosos detractores. Entre ellos, algunos la han acusado de parcialidad sistÃ©mica y de inconsistencias,13â€‹ con crÃ­ticas centradas sobre lo que algunos, como Larry Sanger, han convenido en llamar Â«antielitismoÂ»,14â€‹ y que no es otra cosa que la polÃ­tica del proyecto enciclopÃ©dico de favorecer el consenso sobre las credenciales en su proceso editorial.15â€‹ Otras crÃ­ticas han estado centradas en su susceptibilidad de ser vandalizada y en la apariciÃ³n de informaciÃ³n espuria o falta de verificaciÃ³n,16â€‹ aunque estudios eruditos sugieren que el vandalismo en general es deshecho con prontitud.17â€‹18â€‹<br/><br/>Hay controversia sobre su fiabilidad y precisiÃ³n.19â€‹ La revista cientÃ­fica Nature declarÃ³ en diciembre de 2005 que la Wikipedia en inglÃ©s era casi tan exacta en artÃ­culos cientÃ­ficos como la Encyclopaedia Britannica.20â€‹ El estudio se realizÃ³ comparando 42 artÃ­culos de ambas obras por un comitÃ© de expertos sin que estos supieran de cuÃ¡l de las dos enciclopedias provenÃ­an. El resultado fue que Wikipedia tenÃ­a casi el mismo nivel de precisiÃ³n que la Enciclopedia BritÃ¡nica, pero tenÃ­a un promedio de un error mÃ¡s por artÃ­culo.21â€‹<br/><br/>Por otro lado, y segÃºn consta en un reportaje publicado en junio de 2009 por el periÃ³dico espaÃ±ol El PaÃ­s, un estudio de 2007, dirigido por el periodista francÃ©s Pierre Assouline y realizado por un grupo de alumnos del mÃ¡ster de Periodismo del Instituto de Estudios PolÃ­ticos de ParÃ­s para analizar la fiabilidad del proyecto, se materializÃ³ en el libro La revoluciÃ³n Wikipedia (Alianza Editorial) cuyas conclusiones eran bastante crÃ­ticas. Entre otras cosas, afirmaba que el estudio de Nature fue poco estricto y sesgado, asÃ­ como que, segÃºn su propio estudio, la Britannica continuaba siendo un 24 % mÃ¡s fiable que la Wikipedia.22â€‹<br/><br/>De las 300 ediciones, quince superan el 1 000 000 de artÃ­culos: inglÃ©s, cebuano, sueco, alemÃ¡n, francÃ©s, neerlandÃ©s, ruso, italiano, espaÃ±ol, polaco, samareÃ±o, vietnamita, japonÃ©s, chino y portuguÃ©s.<br/><br/>La versiÃ³n en alemÃ¡n ha sido distribuida en DVD-ROM, y se tiene la intenciÃ³n de hacer una versiÃ³n inglesa en DVD con mÃ¡s de 2000 artÃ­culos.23â€‹ Muchas de sus ediciones han sido replicadas a travÃ©s de Internet â€”mediante Â«espejosÂ»â€” y han dado origen a enciclopedias derivadas â€”bifurcacionesâ€” en otros sitios web.24â€‹', '156f0556a90a557682f281029c853d4b.jpg', '2018-12-06 15:12:24', '2018-12-10 16:12:18', 0, 1),
(11, 'Se fugaron 7 de los detenidos en Curazao', 'Siete de los detenidos por la Guardia Costera de Curazao, localizados en una embarcaciÃ³n, que pretendÃ­a llegar a Curazao en forma ilegal, se escaparon la madrugada de este miÃ©rcoles, reportaron autoridades.<br/><br/>Los 37 venezolanos pretendÃ­an ingresar a la isla en forma ilegal, entre los cuales se encontraba un menor de edad.<br/><br/>Las autoridades costeras de Curazao detectaron al grupo la madrugada de este lunes, al este de la isla, cuando la embarcaciÃ³n se encontraba a la deriva y hacÃ­a la travesÃ­a a la isla.<br/><br/>SegÃºn trascendiÃ³, la embarcaciÃ³n tipo Yola, es falconiana. El grupo de venezolanos habrÃ­a salido de las costas de FalcÃ³n. Fueron detectados por las unidades Frisc, de la Marina Real, y el Metal Shark, de la Guardia Costera de Curazao, quienes entregaron a los indocumentados a las autoridades, migratorias a eso de las 4 am.<br/><br/>Los venezolanos fueron detenidos y puestos a la orden de migraciÃ³n; pero ayer se confirmÃ³ que siete de ellos se habÃ­an dado a la fuga en la isla.<br/>La embarcaciÃ³n habÃ­a sido interceptada por las autoridades curazoleÃ±as en alta mar y remolcada y llevada hasta la estaciÃ³n de Parera. Todo el procedimiento fue puesto a la orden de las autoridades de migraciÃ³n de la isla.<br/><br/>En enero de este aÃ±o, cuatro venezolanos perecieron cuando la embarcaciÃ³n donde pretendÃ­an llegar de forma clandestina a la isla, naufragÃ³.<br/>En esa oportunidad otros 20 venezolanos se registraron como desaparecidos. Posteriormente lograron rescatar algunos cuerpos.', '0a4ae5731471e2d17ab069a66eec2493.jpg', '2018-12-10 16:12:49', '2018-12-10 16:12:14', 1, 1),
(12, 'La Faes desmantelÃ³ 501 grupos delictivos', 'La Fuerza de Acciones Especiales (Faes) de la PolicÃ­a Nacional Bolivariana (PNB) desmantelÃ³ durante este aÃ±o un total de 501 organizaciones delictivas, informÃ³ Carlos PÃ©rez Ampueda, director del organismo de seguridad.<br/><br/>PÃ©rez Ampueda ofreciÃ³ este martes una rueda de prensa donde refiriÃ³ que la Faes es un mecanismo de articulaciÃ³n para combatir la delincuencia que depende del Comando EstratÃ©gico Operacional de la Fuerza Armada Nacional Bolivariana (Ceofanb).<br/><br/>IndicÃ³ que estÃ¡n desplegados en 213 cuadrantes de paz de los 2.159 que existen en el paÃ­s. Dijo que â€œsomos libresâ€ de realizar despliegues porque â€œno tenemos ningÃºn pacto con lÃ­deres negativosâ€.<br/><br/>En ese andar realizaron 2.289 procedimientos durante este aÃ±o, mediante los cuales detuvieron a 1.841 personas de los cuales 756 estaban solicitados y concretamente 123 implicados en el delito de homicidio.<br/><br/>El jefe de la PNB destacÃ³ que en las 48 semanas que suma este aÃ±o incautaron 1.492 armas de fuego y recuperaron 222 vehÃ­culos.<br/><br/>PÃ©rez Ampueda reconociÃ³ que durante los procedimientos, se han cometido irregularidades por lo cual hay 296 funcionarios de la PNB privados de libertad, mientras que 89 integrantes del Faes estÃ¡n bajo investigaciÃ³n y 11 imputados.<br/><br/>â€œCualquier denuncia pueden hacerla a travÃ©s del 012-7688900â€, informÃ³ PÃ©rez Ampueda quien al finalizar la rueda de prensa compartiÃ³ una comida navideÃ±a con los comunicadores sociales', 'd65f9e8519b71fb7b13583fc3c4e72c0.jpg', '2018-12-10 16:12:42', '2018-12-10 16:12:11', 1, 1),
(13, 'Doblete de Messi comandÃ³ goleada del Barcelona', 'El Barcelona se adueÃ±Ã³ 0-4 del derbi contra el Espanyol en el RCDE Stadium con un monÃ³logo que iniciÃ³ y cerrÃ³ Leo Messi de falta y al que contribuyeron DembelÃ© y el uruguayo Luis SuÃ¡rez.<br/><br/>Al descanso los blanquiazules ya perdÃ­an por un contundente 0-3 y en la reanudaciÃ³n no pudieron sobreponerse. De hecho, fueron varios los aficionados pericos que abandonaron su asiento. El resultado catapultÃ³ de nuevo al Barcelona al primer lugar en la Liga de EspaÃ±a.', '038de2e55e507808fa8ffffcf1b77d79.jpg', '2018-12-10 16:12:45', '2018-12-10 16:12:13', 1, 1),
(14, 'Barcelona busca ser referencia ecolÃ³gica', 'Una caminata y carrera de 5 kilÃ³metros, en el marco del plan piloto de reciclaje â€œTodo se transformaâ€, se realizarÃ¡ este domingo 2 de diciembre en Barcelona.<br/><br/>La actividad, promovida por la alcaldÃ­a del municipio SimÃ³n BolÃ­var, busca crear conciencia y sensibilizar a las comunidades sobre la importancia del saneamiento de los espacios y generar recursos para convertir a las comunidades en economÃ­as sustentables.<br/><br/>El alcalde Luis JosÃ© Marcano explicÃ³ que las inscripciones se realizan en un punto ecolÃ³gico en el centro comercial Puente Real. Pueden pagar con dinero o con 5 kg de material aprovechable, como plÃ¡stico, cartÃ³n y vidrio.<br/><br/>Hay mÃ¡s de mil 200 inscritos. AsegurÃ³ esta primera carrera-caminata demostrarÃ¡ que â€œexisten nuevas maneras de unirnos para realizar actividades masivas, novedosas y divertidas en la que todos podemos participarâ€.<br/><br/>Marcano indicÃ³ que la partida de â€œ5K de vÃ­a por 5k de vidaâ€ serÃ¡ a las 6 am, desde el cerro Venezuela y la llegada en el sector Las Bateas de Maurica.<br/><br/>La ruta seÃ±ala serÃ¡ la avenida Costanera y estarÃ¡ marcada por kilÃ³metros. El 1K en residencias Bissau, el 2K en el conjunto residencial Villas Oriente; el 3K frente a la sede al Comando Nacional AntiextorsiÃ³n y Secuestro de la GNB; los 4K en el conjunto residencial Mar Oriente y el 5K la meta.<br/><br/>El alcalde garantizÃ³ seguridad y logÃ­stica con el apoyo de los organismos de seguridad y de prevenciÃ³n.', '6be03b6a6f022bc12b09768aba7f7c33.jpg', '2018-12-10 16:12:02', '2018-12-10 16:12:37', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL COMMENT 'id del usuario',
  `usuario` varchar(100) NOT NULL COMMENT 'usuario',
  `password` varchar(200) NOT NULL COMMENT 'contraseña del usuario',
  `nombre` text NOT NULL COMMENT 'nombre del usuario',
  `apellido` text NOT NULL COMMENT 'apellido del usuario',
  `rol` int(2) NOT NULL COMMENT 'rol del usuario',
  `actividad` tinyint(1) DEFAULT NULL,
  `fecha_ultima_conexion` date DEFAULT NULL,
  `hora_ultima_conexion` time DEFAULT NULL,
  `ip_equipo_conexion` varchar(20) DEFAULT NULL,
  `estatus_logico` tinyint(1) NOT NULL COMMENT 'estatus logico'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que define los usuarios del sistema';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido`, `rol`, `actividad`, `fecha_ultima_conexion`, `hora_ultima_conexion`, `ip_equipo_conexion`, `estatus_logico`) VALUES
(1, 'admin', '123456', 'admin', 'admin', 1, 0, '2018-12-10', '16:12:45', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria de la tabla', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del usuario', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
