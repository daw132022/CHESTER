-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2023 a las 21:23:30
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chestertfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `texto` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `noticia_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `texto`, `user_id`, `noticia_id`, `created_at`, `updated_at`) VALUES
(2, '565y56y', 1, 1, '2023-05-25 06:49:01', '2023-05-25 06:49:01'),
(3, 'rrrrrr', 1, 1, '2023-05-25 06:49:06', '2023-05-28 17:20:53'),
(5, 'ewqwr', 2, 1, '2023-05-25 14:33:13', '2023-05-25 14:33:13'),
(6, 'ggggg', 1, 4, '2023-05-25 14:47:51', '2023-05-25 14:47:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image_juegos`
--

CREATE TABLE `image_juegos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `juego_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `image_juegos`
--

INSERT INTO `image_juegos` (`id`, `image`, `juego_id`, `created_at`, `updated_at`) VALUES
(1, '1923 Cotton Club-image-1684923703145.jpg', 1, '2023-05-24 08:21:43', '2023-05-24 08:21:43'),
(2, '1923 Cotton Club-image-1684923703996.jpg', 1, '2023-05-24 08:21:43', '2023-05-24 08:21:43'),
(3, '1923 Cotton Club-image-1684923703921.jpg', 1, '2023-05-24 08:21:43', '2023-05-24 08:21:43'),
(4, '1923 Cotton Club-image-1684923703332.jpg', 1, '2023-05-24 08:21:43', '2023-05-24 08:21:43'),
(5, '1923 Cotton Club-image-1684923703372.jpg', 1, '2023-05-24 08:21:43', '2023-05-24 08:21:43'),
(6, 'Bandida-image-1684924075186.jpg', 2, '2023-05-24 08:27:55', '2023-05-24 08:27:55'),
(7, 'Bandida-image-1684924075917.jpg', 2, '2023-05-24 08:27:55', '2023-05-24 08:27:55'),
(8, 'Bandida-image-1684924075200.jpg', 2, '2023-05-24 08:27:55', '2023-05-24 08:27:55'),
(9, 'Bandida-image-168492407558.jpg', 2, '2023-05-24 08:27:55', '2023-05-24 08:27:55'),
(14, '1684924365_BOOMERANG_AUSTRALIA.jpg', 3, '2023-05-24 08:32:45', '2023-05-24 08:32:45'),
(15, '1684924365_BOOMERANG_AUSTRALIA_DETALLE_1.JPG', 3, '2023-05-24 08:32:45', '2023-05-24 08:32:45'),
(16, '1684924365_BOOMERANG_AUSTRALIA_DETALLE_2.JPG', 3, '2023-05-24 08:32:45', '2023-05-24 08:32:45'),
(17, '1684924365_BOOMERANG_AUSTRALIA_DETALLE_3.JPG', 3, '2023-05-24 08:32:45', '2023-05-24 08:32:45'),
(18, '1684924365_BOOMERANG_AUSTRALIA_DETALLE_4.JPG', 3, '2023-05-24 08:32:45', '2023-05-24 08:32:45'),
(19, '1684924365_BOOMERANG_AUSTRALIA_DETALLE_5.JPG', 3, '2023-05-24 08:32:45', '2023-05-24 08:32:45'),
(20, 'Cascadia-image-1684925033994.jpg', 4, '2023-05-24 08:43:53', '2023-05-24 08:43:53'),
(21, 'Cascadia-image-1684925033864.jpg', 4, '2023-05-24 08:43:53', '2023-05-24 08:43:53'),
(22, 'Cascadia-image-16849250339.jpg', 4, '2023-05-24 08:43:53', '2023-05-24 08:43:53'),
(23, 'Cascadia-image-1684925033990.jpg', 4, '2023-05-24 08:43:53', '2023-05-24 08:43:53'),
(24, '1684925579_DINNER_IN_PARIS.jpg', 5, '2023-05-24 08:52:59', '2023-05-24 08:52:59'),
(25, '1684925579_DINNER_IN_PARIS_DETALLE_1.JPG', 5, '2023-05-24 08:52:59', '2023-05-24 08:52:59'),
(26, '1684925579_DINNER_IN_PARIS_DETALLE_2.JPG', 5, '2023-05-24 08:52:59', '2023-05-24 08:52:59'),
(27, '1684925579_DINNER_IN_PARIS_DETALLE_3.JPG', 5, '2023-05-24 08:52:59', '2023-05-24 08:52:59'),
(28, '1684925579_DINNER_IN_PARIS_DETALLE_4.JPG', 5, '2023-05-24 08:52:59', '2023-05-24 08:52:59'),
(29, 'Disney Villainous-image-1684926262134.png', 6, '2023-05-24 09:04:22', '2023-05-24 09:04:22'),
(30, 'Disney Villainous-image-1684926262213.jpg', 6, '2023-05-24 09:04:22', '2023-05-24 09:04:22'),
(31, 'Disney Villainous-image-168492626226.jpg', 6, '2023-05-24 09:04:22', '2023-05-24 09:04:22'),
(32, 'Disney Villainous-image-168492626240.jpg', 6, '2023-05-24 09:04:22', '2023-05-24 09:04:22'),
(33, 'Disney Villainous-image-1684926262282.jpg', 6, '2023-05-24 09:04:22', '2023-05-24 09:04:22'),
(34, 'Darwin\'s Journey-image-1684926605379.jpg', 7, '2023-05-24 09:10:05', '2023-05-24 09:10:05'),
(35, 'Darwin\'s Journey-image-1684926605262.jpg', 7, '2023-05-24 09:10:05', '2023-05-24 09:10:05'),
(36, 'Darwin\'s Journey-image-1684926605539.jpg', 7, '2023-05-24 09:10:05', '2023-05-24 09:10:05'),
(37, 'Darwin\'s Journey-image-1684926605700.jpg', 7, '2023-05-24 09:10:05', '2023-05-24 09:10:05'),
(38, 'Darwin\'s Journey-image-1684926605368.jpg', 7, '2023-05-24 09:10:05', '2023-05-24 09:10:05'),
(39, 'Darwin\'s Journey-image-1684926605553.jpg', 7, '2023-05-24 09:10:05', '2023-05-24 09:10:05'),
(40, 'El mortal-image-168492682228.jpg', 8, '2023-05-24 09:13:42', '2023-05-24 09:13:42'),
(41, 'El mortal-image-1684926822984.jpg', 8, '2023-05-24 09:13:42', '2023-05-24 09:13:42'),
(42, 'Exploding kittens-image-1684927766346.jpg', 9, '2023-05-24 09:29:26', '2023-05-24 09:29:26'),
(43, 'Exploding kittens-image-1684927766606.jpg', 9, '2023-05-24 09:29:26', '2023-05-24 09:29:26'),
(44, 'Exploding kittens-image-1684927766194.jpg', 9, '2023-05-24 09:29:26', '2023-05-24 09:29:26'),
(45, 'Exploding kittens-image-1684927766360.jpg', 9, '2023-05-24 09:29:26', '2023-05-24 09:29:26'),
(46, 'Fertility-image-1684928163654.jpg', 10, '2023-05-24 09:36:03', '2023-05-24 09:36:03'),
(47, 'Fertility-image-1684928163876.jpg', 10, '2023-05-24 09:36:03', '2023-05-24 09:36:03'),
(48, 'Fertility-image-1684928163733.jpg', 10, '2023-05-24 09:36:03', '2023-05-24 09:36:03'),
(49, 'Fertility-image-168492816321.jpg', 10, '2023-05-24 09:36:03', '2023-05-24 09:36:03'),
(50, 'Fertility-image-1684928163513.jpg', 10, '2023-05-24 09:36:03', '2023-05-24 09:36:03'),
(51, 'Jamaica-image-1684928508916.jpg', 11, '2023-05-24 09:41:48', '2023-05-24 09:41:48'),
(52, 'Jamaica-image-1684928508983.jpg', 11, '2023-05-24 09:41:48', '2023-05-24 09:41:48'),
(53, 'Jamaica-image-1684928508696.jpg', 11, '2023-05-24 09:41:48', '2023-05-24 09:41:48'),
(54, 'Jamaica-image-1684928508643.jpg', 11, '2023-05-24 09:41:48', '2023-05-24 09:41:48'),
(55, 'Jamaica-image-1684928508123.jpg', 11, '2023-05-24 09:41:48', '2023-05-24 09:41:48'),
(61, '1684934980_JURASSIC_WORLD_THE_BOARDGAME.jpg', 12, '2023-05-24 11:29:40', '2023-05-24 11:29:40'),
(62, '1684934980_JURASSIC_WORLD_THE_BOARDGAME_DETALLE_1.JPG', 12, '2023-05-24 11:29:40', '2023-05-24 11:29:40'),
(63, '1684934980_JURASSIC_WORLD_THE_BOARDGAME_DETALLE_2.JPG', 12, '2023-05-24 11:29:40', '2023-05-24 11:29:40'),
(64, '1684934980_JURASSIC_WORLD_THE_BOARDGAME_DETALLE_3.JPG', 12, '2023-05-24 11:29:40', '2023-05-24 11:29:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image_noticias`
--

CREATE TABLE `image_noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `noticia_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `image_noticias`
--

INSERT INTO `image_noticias` (`id`, `image`, `noticia_id`, `created_at`, `updated_at`) VALUES
(5, '1684935922_NOTICIA_1.jpg', 1, '2023-05-24 11:45:22', '2023-05-24 11:45:22'),
(6, '1684935922_NOTICIA_2.jpeg', 1, '2023-05-24 11:45:22', '2023-05-24 11:45:22'),
(7, '1684935922_NOTICIA_3.jpeg', 1, '2023-05-24 11:45:22', '2023-05-24 11:45:22'),
(8, '1684935922_NOTICIA_4.jpeg', 1, '2023-05-24 11:45:22', '2023-05-24 11:45:22'),
(9, 'TORNEO CAN´T STOP-image-16849363197.jpg', 2, '2023-05-24 11:51:59', '2023-05-24 11:51:59'),
(10, 'EBRO SCAPE-image-1684937373555.jpg', 3, '2023-05-24 12:09:33', '2023-05-24 12:09:33'),
(11, 'll JORNADAD DE OCIO ALTERNATIVO-image-1684937696196.jpg', 4, '2023-05-24 12:14:56', '2023-05-24 12:14:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo_juego` varchar(255) NOT NULL,
  `max_jugadores` int(11) NOT NULL,
  `min_jugadores` int(11) NOT NULL,
  `tiempo_juego` int(11) NOT NULL,
  `descripccion` varchar(4000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `titulo_juego`, `max_jugadores`, `min_jugadores`, `tiempo_juego`, `descripccion`, `created_at`, `updated_at`) VALUES
(1, '1923 Cotton Club', 4, 2, 60, 'En 1923, el contrabandista Owney Madden adquirió un establecimiento en Harlem, Nueva York, y lo llamó \"Cotton Club\". Su idea era usarlo como tapadera para vender alcohol durante la Prohibición, pero el lugar creció en popularidad y artistas talentosos como Duke Ellington, Louis Armstrong, Ethel Waters y Cab Calloway lo convirtieron en la meca del jazz.  En 1923 Cotton Club , supervisarás un club durante los tiempos complejos de la Prohibición. Para contrabandear alcohol tendrás que buscar socios en el mundo criminal e invertir dinero para contratar artistas y mejorar tu club. Todo para atraer a las celebridades más importantes e influyentes de la época...  1923 Cotton Club se juega en un máximo de seis rondas en las que los jugadores pueden utilizar tres peones para seleccionar entre diferentes acciones: hacer mejoras, pedir un préstamo, obtener un chivatazo, asociarse con mafiosos, contrabando, contratar artistas y atraer celebridades . ¡Todo para acumular más reputación que todos los demás clubes de Nueva York! El jugador con más puntos de reputación al final gana.', '2023-05-24 08:21:43', '2023-05-24 08:21:43'),
(2, 'Bandida', 4, 1, 15, '¿Cansado de ver a Bandido siempre escapando? Cuidado, un nuevo gángster llega a la ciudad... ¿ Qué lado elegirás esta vez: jugarás a ser policía y tratarás de evitar que Bandida se escape, o te unirás al lado salvaje y la ayudarás? En este nuevo juego de Pocket, encontrarás todas las cosas que amabas de Bandido y más. Tres formas diferentes de jugar y cooperar juntas brindan aún más diversión.  Se puede combinar con la precuela, Bandido .', '2023-05-24 08:27:55', '2023-05-24 08:27:55'),
(3, 'Boomerang', 2, 4, 30, '¡Explora las increíbles tierras de Australia en la nueva versión de este juego de \"redactar y escribir\"! Visita los lugares más bellos de Australia. Mientras recorre, conocerá animales locales y disfrutará de actividades turísticas, como caminatas, natación o simplemente tomar hermosas fotografías. Pero no olvide que este viaje no es solo por placer, ¡todos compiten para ser el mejor visitante y descubrir la mayor parte de Australia!  Boomerang: Australia presenta una combinación única de colección de conjuntos y dibujo de cartas con la sensación accesible de un juego de rodar y escribir. Selecciona ubicaciones de todo el continente australiano mientras recopilas conjuntos de actividades y avistamientos de animales para ganar la mayor cantidad de puntos.', '2023-05-24 08:32:16', '2023-05-24 08:33:38'),
(4, 'Cascadia', 4, 1, 45, 'Cascadia es un juego de rompecabezas de colocación de fichas y fichas que presenta los hábitats y la vida silvestre del noroeste del Pacífico.  En el juego, te turnas para construir tu propia área de terreno y poblarla con vida silvestre. Empiezas con tres fichas de hábitat hexagonales (con los cinco tipos de hábitat del juego), y en un turno eliges una nueva ficha de hábitat que está emparejada con una ficha de vida silvestre, luego colocas esa ficha junto a las otras y colocas la ficha de vida silvestre. en un hábitat apropiado. (Cada mosaico representa de 1 a 3 tipos de vida silvestre de los cinco tipos del juego, y puede colocar como máximo un mosaico en un hábitat). Se muestran cuatro mosaicos, y cada mosaico se empareja al azar con una ficha de vida silvestre, por lo que debe aprovechar al máximo lo que está disponible, a menos que tenga una ficha de naturaleza para gastar, de modo que pueda elegir su elección de cada artículo.  Idealmente, puede colocar mosaicos de hábitat para crear un terreno coincidente que reduzca la fragmentación y cree corredores de vida silvestre, principalmente porque obtiene el área más grande de cada tipo de hábitat al final del juego, con una bonificación si su grupo es más grande que el de los demás jugadores. Al mismo tiempo, desea colocar fichas de vida silvestre para que pueda maximizar la cantidad de puntos que obtienen, con los objetivos de vida silvestre determinados al azar por una de las cuatro tarjetas de puntuación para cada tipo de vida silvestre. Tal vez los halcones quieran estar separados de otros halcones, mientras que los zorros quieren muchos animales diferentes a su alrededor y los osos quieren estar en parejas. Puedes hacer que eso pase?', '2023-05-24 08:43:53', '2023-05-24 08:43:53'),
(5, 'Dinner in Paris', 2, 4, 60, 'El sector de la restauración en París está en ebullición tras la inauguración de una nueva plaza peatonal en un barrio muy popular entre parisinos y turistas de todo el mundo. Es una oportunidad de oro para ustedes, propietarios de restaurantes, abrir una de las direcciones que contribuirá a la diversidad culinaria y la reputación de la capital francesa. Sin embargo, no hay espacio para todos y tus oponentes podrían arruinar tus engranajes.', '2023-05-24 08:52:24', '2023-05-24 09:03:09'),
(6, 'Disney Villainous', 6, 2, 50, 'En Villainous , cada jugador toma el control de uno de los seis personajes de Disney, cada uno de los cuales es un villano en una película de Disney diferente. Cada jugador tiene su propio mazo de villano, mazo de destino, tablero de jugador y personaje 3D.  En un turno, el jugador activo mueve su personaje a una ubicación diferente en su tablero de jugador, realiza una o más de las acciones visibles en ese espacio (a menudo jugando cartas de su mano) y luego vuelve a llenar su mano con cuatro cartas. Las cartas son aliados, objetos, efectos, condiciones y (para algunos personajes) maldiciones. Debe usar sus tarjetas para cumplir con su condición única de ganar.  Una de las acciones te permite elegir a otro jugador, robar dos cartas del mazo de destino de ese jugador y luego jugar una de ellas en el tablero de ese jugador, cubriendo dos de los cuatro espacios de acción en una de las ubicaciones de ese jugador. El mazo de destino contiene héroes, elementos y efectos de la película de ese villano, y estas cartas permiten que otros jugadores se metan con ese villano en particular.', '2023-05-24 09:04:22', '2023-05-24 09:04:22'),
(7, 'Darwin\'s Journey', 4, 1, 120, 'Cuando lo único que puedes identificar en el horizonte durante largos días es la línea que separa el mar del cielo, el atisbo de una lejana orilla que aparece ante ti te hará estremecer al comprender que la aventura está por comenzar.  Te encuentras asombrado, aterrizando en la costa que será el origen de una extensa exploración a través de Galápagos, un lugar mágico de inconcebible belleza y una biodiversidad infinita. Allí reunirás repertorios y ampliarás tus conocimientos de las ciencias naturales. Tus ojos aprenderán a detectar las especies escondidas en el bosque tropical, contemplando los innumerables colores y texturas de la naturaleza. Después de horas de estudio inspiradoras y de llegar a conclusiones esclarecedoras, descansará bajo un cielo resplandeciente, admirando la asombrosa complejidad del reino animal.  Darwin\'s Journey es un Eurogame de colocación de trabajadores en el que los jugadores rememoran los recuerdos de Charles Darwin de su aventura por las islas Galápagos, que contribuyó al desarrollo de su teoría de la evolución.  Con el innovador sistema de progresión de trabajadores del juego, cada trabajador deberá estudiar las disciplinas que son un requisito previo para realizar varias acciones en el juego, como exploración, correspondencia, recopilación y envío de repertorios encontrados en la isla a museos para contribuir. al conocimiento humano de la biología. El juego dura cinco rondas y, gracias a varios objetivos a corto y largo plazo, cada acción que realices otorgará puntos de victoria de diferentes maneras.', '2023-05-24 09:10:05', '2023-05-24 09:10:05'),
(8, 'El mortal', 6, 2, 20, 'Juego de cartas en el que debes evitar la muerte. ¡Un juego divertido, rápido y original!  Preparamos la baraja de cartas de tal manera que haya cartas de \"muerte\". Un jugador debe evitar acumular muertes a lo largo del juego utilizando trucos y estrategias para el jugador contrario. Gana el jugador que acumule menos muertes.', '2023-05-24 09:13:42', '2023-05-24 09:13:42'),
(9, 'Exploding kittens', 5, 2, 15, 'Exploding Kittens es una versión de la ruleta rusa impulsada por gatitos. Los jugadores se turnan para sacar cartas hasta que alguien saca un gatito que explota y pierde el juego. El mazo se compone de cartas que te permiten evitar explotar al mirar las cartas antes de robar, obligar a tu oponente a robar varias cartas o barajar el mazo.  El juego se vuelve más y más intenso con cada carta que robas porque quedan menos cartas en el mazo, lo que significa una mayor probabilidad de robar el gatito y explotar en una bola de fuego de hipérbole felina.', '2023-05-24 09:29:26', '2023-05-24 09:29:26'),
(10, 'Fertility', 4, 2, 45, 'Eres un Nomarca en el Antiguo Egipto. El Faraón te puso a cargo de una Metrópolis y su región. La crecida del Nilo está llegando a su fin y las tierras del Valle están listas para ofrecer sus riquezas. Organice la recolección de recursos, construya distritos con las tiendas más lucrativas, suministre bienes y gane la mayor cantidad de Debens para la gloria del faraón. El jugador que haga el mejor uso de los recursos del Valle del Nilo ganará el juego.  Fertility es un sencillo juego de gestión de recursos que plantea decisiones difíciles de tomar. Cada turno, recolectas algunas de las riquezas del Valle del Nilo e inmediatamente decides cómo usarlas: suministra una de tus Tiendas para ganar dinero, o gástalas para construir nuevos distritos, ofreciéndote nuevas oportunidades. Sea sabio porque sus elecciones son irreversibles. Ninguno de los recursos ya almacenados en sus tiendas se puede mover o reutilizar hasta el final del juego. Pero cualquier recurso no gastado al final de tu turno se perderá definitivamente. Optimiza tus turnos y elecciones si quieres ganar.  El turno de un jugador pasa por tres pasos rápidos y sencillos. Comienzan colocando una de sus losetas de Valle en el tablero central para recolectar recursos: alabastro, bovinos, flores de papiro, uvas o trigo. Luego tienen la oportunidad de gastar estos recursos para construir una nueva loseta de Distrito en su tablero de Metropolis, para abrir nuevas oportunidades. Por último, abastecen sus Tiendas en su Metrópolis almacenando los recursos restantes. Cualquier recurso que un jugador haya dejado sin usar al final de su turno se pierde. Entonces, el objetivo es recolectar tantos recursos como sea posible, pero aún más para poder optimizar cómo usarlos. El juego termina después de 9 turnos y cada Tienda totalmente abastecida vale dinero para su dueño. El jugador con la mayor cantidad de dinero es el ganador.', '2023-05-24 09:36:03', '2023-05-24 09:36:03'),
(11, 'Jamaica', 2, 6, 60, 'Resumen:', '2023-05-24 09:41:48', '2023-05-24 09:43:15'),
(12, 'Jurassic World: The boardgame', 6, 2, 90, 'Jurassic World es un juego en el que los jugadores trabajan juntos para gestionar un parque de dinosaurios. Cada jugador elige a un empleado para que le ayude a cuidar el parque. Los empleados tienen varias habilidades que les permiten colocar edificios y crear dinosaurios, por ejemplo. Usted difunde información sobre el parque entreteniendo a sus visitantes. Sin embargo, ¡cuidado! Cuantos más dinosaurios contenga el parque, mayor será la posibilidad de brotes con consecuencias espantosas.  Jurassic World es un juego de mesa cooperativo de 2 a 6 jugadores. Es una combinación de tomar las decisiones correctas con tus compañeros de equipo y algo de suerte tirando los dados. Los jugadores comienzan su turno juntos colocando sus estandartes estratégicamente en la fase de preparación. En la fase de acción, los jugadores realizan acciones en función de dónde colocaron su estandarte en la fase anterior. En la fase de acción, los jugadores toman acciones, por ejemplo: desenterrar dinosaurios, investigar dinosaurios,', '2023-05-24 11:27:47', '2023-05-24 11:29:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego_favs`
--

CREATE TABLE `juego_favs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `juego_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `juego_favs`
--

INSERT INTO `juego_favs` (`id`, `user_id`, `juego_id`, `created_at`, `updated_at`) VALUES
(1, 1, 11, '2023-05-24 09:52:07', '2023-05-24 09:52:07'),
(2, 2, 4, '2023-05-25 14:33:30', '2023-05-25 14:33:30'),
(3, 1, 4, '2023-05-25 14:48:04', '2023-05-25 14:48:04'),
(5, 1, 6, '2023-05-25 16:08:37', '2023-05-25 16:08:37'),
(6, 1, 1, '2023-05-28 17:21:07', '2023-05-28 17:21:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_01_132023_create_juego_table', 1),
(6, '2023_04_01_132617_create_noticia_table', 1),
(7, '2023_04_01_142128_create_comentario_table', 1),
(8, '2023_04_03_162010_create_image_noticia_table', 1),
(9, '2023_04_03_162021_create_image_juego_table', 1),
(10, '2023_05_11_153646_create_juego_fav_table', 1),
(11, '2023_05_22_142742_create_pdf_juego_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo_noticia` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `texto_noticia` varchar(4000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo_noticia`, `fecha`, `categoria`, `texto_noticia`, `created_at`, `updated_at`) VALUES
(1, 'Un paraíso para los amantes de los juegos de mesa: El bar El Chester ofrece más de 400 opciones', '2023-03-05', 'NOTICIA', 'Cruzar sus puertas es un viaje hasta los años 80 y 90. Una máquina de arcade a la derecha y a la izquierda el popular guepardo Chester -imagen de la marca de aperitivos salados Cheetos- saluda y da la bienvenida a este curioso local de la plaza Fermín Gurbindo, que resulta todo un paraíso para amantes de los juegos de mesa. El Chester es, también, el nombre de este atípico bar, una fusión de los nombres de su pareja de propietarios, José Luis Sáez \'Che\' y María Esther Arnedo.  En total, pueden disfrutarse de unos 400 juegos de mesa, como comenta su dueña. Los hay para todos los gustos y números de jugadores, desde colectivos hasta \"grupos de uno\", como ella misma los define. Unas estanterías  que se van llenando y ampliando con tableros, tanto comprados por ella misma como donados por su clientela o por locales como La Frikilería o Juguetecas. La afición de Esther Arnedo por los juegos de mesa fue creciendo a raíz de la pandemia, como cuenta. Anteriormente, en un local más pequeño de la calle Mayor, vio en estos una alternativa \"entretenida y segura\" de diversión que dar a su clientela, para que, debido a las restricciones sanitarias, permaneciera sentada. Entre tanto que elegir, la pareja destaca el gran éxito que están teniendo juegos cooperativos como The Island, pero también competitivos como El Strike.   Y ¿qué quedaron de aquellos juegos que marcaron a toda una generación de jóvenes en los 80? \"Tenemos el Imperio Cobra\", destaca José Luis. Si bien remarca que este sirvió \"para tener todo esto que hay ahora\", pues este es \"muy denso y largo\". \"Tengo mucha novedad\", añade Esther. \"Me informo muchísimo veo todos los programas que hay de novedades, cuándo salen, de qué van...\", comenta con entusiasmo.   Y es que, más allá de instrucciones sencillas, El Chester recoge juegos cuyos manuales son complejos por lo que, atenta a ello, Esther ofrece a quienes reserven la posibilidad de mandar las instrucciones por mensaje con el objetivo de que, cuando lleguen a su local, puedan disfrutar directamente de la partida.  \"Vamos a comenzar a abrir los domingos, una vez al mes,  a las 16:00, para hacer torneos\", añade. Así, han disputado un concurso de FIFA, mientras que el siguiente será de Teken y el próximo ya versará sobre juegos de mesa. Todo ello amenizado por videoclips de música rock, de la que ambos se declaran amantes. Los diversos dibujos que decoran las paredes del bar han sido pintados a mano por José Luis.  Tras ocho años en La Mayor, Esther y \'Che\' agradecen el apoyo de su clientela, que acude al barrio Madre de Dios para continuar jugando. Una clientela compuesta en su mayoría por grupos de amigos adultos y jóvenes. \"Una guardería para adultos\", como se definen en sus redes sociales. \"Nos van siguiendo, como si fuéramos una familia, hemos ido creciendo juntos, en cuanto a familias con niños, sobre todo tenemos antiguos clientes que ya han tenido hijos\", agradece Esther. \"Todos los clientes que tenemos siguen viniendo, es guay\", enfatiza.  El teléfono para reservar una mesa no para de sonar, y , entre partida y revancha, las hambuerguesas del Chester son su gran reclamo para el estómago. \"No es congelado, lo hacemos todo nosotros, mi marido es el que cocina\". Un paraíso para amantes de los juegos de mesa en los que los móviles y las pantallas no monopolizan la diversión. \"No sueles ver a nadie con el móvil, estamos todos jugando con todos\".', '2023-05-24 11:42:26', '2023-05-24 11:45:21'),
(2, 'TORNEO CAN´T STOP', '2023-05-01', 'TORNEO', 'Inauguramos los torneos de juegos de mesa con uno muy sencillo y divertido: Can\'t Stop. El torneo y el premio están patrocinados por @malditogames y se celebrará el 7 de Mayo. Inscripciones en el grupo de Telegram de el Chester.', '2023-05-24 11:51:59', '2023-05-24 11:51:59'),
(3, 'EBRO SCAPE', '2023-02-09', 'SCAPE', 'Proximamente os daremos más detalles.', '2023-05-24 12:09:33', '2023-05-24 12:09:33'),
(4, 'll JORNADAD DE OCIO ALTERNATIVO', '2022-08-20', 'OCIO', 'Los días 2,3 y 4 de Septiembre se realizará la segunda edición de estas jornadas en el Polideportivo de Centenario. No os quedéis sin entrada!', '2023-05-24 12:14:56', '2023-05-24 12:14:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdf_juegos`
--

CREATE TABLE `pdf_juegos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `juego_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pdf_juegos`
--

INSERT INTO `pdf_juegos` (`id`, `pdf`, `juego_id`, `created_at`, `updated_at`) VALUES
(1, '1923 Cotton Club-pdf-1684923703172.pdf', 1, '2023-05-24 08:21:43', '2023-05-24 08:21:43'),
(2, 'Bandida-pdf-168492407520.pdf', 2, '2023-05-24 08:27:55', '2023-05-24 08:27:55'),
(3, 'Boomerang Australia-pdf-1684924336958.pdf', 3, '2023-05-24 08:32:16', '2023-05-24 08:32:16'),
(4, 'Cascadia-pdf-1684925033924.pdf', 4, '2023-05-24 08:43:53', '2023-05-24 08:43:53'),
(5, '1684925638_Dinner_in_Paris_-_Marie_Solo_Automa_V2.pdf', 5, '2023-05-24 08:53:58', '2023-05-24 08:53:58'),
(6, 'Disney Villainous-pdf-1684926262857.pdf', 6, '2023-05-24 09:04:22', '2023-05-24 09:04:22'),
(7, 'Darwin\'s Journey-pdf-1684926605254.pdf', 7, '2023-05-24 09:10:05', '2023-05-24 09:10:05'),
(8, 'Exploding kittens-pdf-1684927766927.pdf', 9, '2023-05-24 09:29:26', '2023-05-24 09:29:26'),
(9, 'Fertility-pdf-168492816331.pdf', 10, '2023-05-24 09:36:03', '2023-05-24 09:36:03'),
(10, '1684928595_Jamaica_v1.2.pdf', 11, '2023-05-24 09:43:15', '2023-05-24 09:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `roll_id` int(11) NOT NULL DEFAULT 2,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellidos`, `nombre_usuario`, `telefono`, `direccion`, `email`, `email_verified_at`, `password`, `roll_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aurora', 'Tejada Cordón', 'aurora_15', 622396480, 'Avenida Madrid', 'aurora_15@gmail.com', NULL, '$2y$10$OWsLYD5TZD/RsO1Eamv6cOOTZ/bpeaLW/KB9y73TxPz3uOCc4QO4y', 1, NULL, '2023-05-24 08:20:26', '2023-05-25 16:09:11'),
(2, 'Juan', 'Sanz Torbado', 'juan_92', 789456123, 'Calle Paz', 'juan@gmail.com', NULL, '$2y$10$8ofFyGCh7N1IscrlFkpPreCCbRlAXWoNfz.vJoTitfeo8h.eiTjEa', 2, NULL, '2023-05-25 14:32:48', '2023-05-25 14:32:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_user_id_foreign` (`user_id`),
  ADD KEY `comentarios_noticia_id_foreign` (`noticia_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `image_juegos`
--
ALTER TABLE `image_juegos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_juegos_juego_id_foreign` (`juego_id`);

--
-- Indices de la tabla `image_noticias`
--
ALTER TABLE `image_noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_noticias_noticia_id_foreign` (`noticia_id`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juego_favs`
--
ALTER TABLE `juego_favs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `juego_favs_user_id_foreign` (`user_id`),
  ADD KEY `juego_favs_juego_id_foreign` (`juego_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pdf_juegos`
--
ALTER TABLE `pdf_juegos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pdf_juegos_juego_id_foreign` (`juego_id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `image_juegos`
--
ALTER TABLE `image_juegos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `image_noticias`
--
ALTER TABLE `image_noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `juego_favs`
--
ALTER TABLE `juego_favs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pdf_juegos`
--
ALTER TABLE `pdf_juegos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_noticia_id_foreign` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `image_juegos`
--
ALTER TABLE `image_juegos`
  ADD CONSTRAINT `image_juegos_juego_id_foreign` FOREIGN KEY (`juego_id`) REFERENCES `juegos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `image_noticias`
--
ALTER TABLE `image_noticias`
  ADD CONSTRAINT `image_noticias_noticia_id_foreign` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `juego_favs`
--
ALTER TABLE `juego_favs`
  ADD CONSTRAINT `juego_favs_juego_id_foreign` FOREIGN KEY (`juego_id`) REFERENCES `juegos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `juego_favs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pdf_juegos`
--
ALTER TABLE `pdf_juegos`
  ADD CONSTRAINT `pdf_juegos_juego_id_foreign` FOREIGN KEY (`juego_id`) REFERENCES `juegos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
