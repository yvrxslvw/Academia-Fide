-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 16 2023 г., 17:33
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `academiafide`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'd5a2abe148a17857daa80d6b5212ecbc', '323af1b2e6eda58038395ee4116faa4c'),
(2, 'c1937b687795ce80be0ecf20e1811441', 'dfeacdebdd52607b78a0eca093c2ed7a');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ru` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `price`, `image`, `title`, `title_en`, `title_ru`, `text`, `text_en`, `text_ru`) VALUES
(1, 50, '/assets/uploads/shop1.png', 'Curso de Ajedrez Nivel I\r\n(1300 - 1600)', 'Chess Course Level I\r\n(1300 - 1600)', 'Уровень I\r\n(1300 - 1600)', 'Curso de 6 horas mensuales dedicado a quien quiere comenzar a jugar torneos de ajedrez.\r\nDurante el curso los alumnos comenzarán a preparar su primer repertorio de aperturas, estudiarán conceptos tácticos, estrategia y finales básicos\r\n\r\nPrecio:  50 euros', '6-hour monthly course dedicated to those who want to start playing chess tournaments.\r\nDuring the course the students will begin to prepare their first opening repertoire, they will study tactical concepts, strategy and basic endings.\r\n\r\nPrice: 50 euros', '6-часовой курс для игроков с уровнем I.\r\nДебюты, тактика, стратегия, финалы.\r\n\r\nЦена: 50 евро'),
(2, 60, '/assets/uploads/shop2.png', 'Curso de Ajedrez Nivel II\r\n(1700 - 1900)', 'Chess Course Level II\r\n(1700 - 1900)', 'Уровень II\r\n(1700 - 1900)', 'Curso de 6 horas mensuales dedicados al estudio aperturas, táctica intermedia, posiciones típicas de medio juego, finales \r\n\r\nPrecio mensual del curso: 60 euros', 'Course of 6 hours per month dedicated to the study of openings, intermediate tactics, typical middle game positions, finals\r\n\r\nMonthly price of the course: 60 euros', '6-часовой курс для игроков с уровнем II.\r\nДебюты, тактика, стратегия, финалы.\r\n\r\nЦена: 60 ​​евро'),
(3, 60, '/assets/uploads/shop3.png', 'Curso de Ajedrez Nivel III\r\n(2000 - 2200)', 'Chess Course Level III\r\n(2000 - 2200)', 'Уровень III\r\n(2000 - 2200)', 'Curso de 6 horas mensuales dedicados al estudio aperturas, táctica avanzada , posiciones típicas de medio juego, estrategia, calculo y toma de decisiones, estrategia en los finales , análisis de las propias partidas\r\n\r\nPrecio mensual del curso: 60 euros', '6-hour monthly course dedicated to the study of openings, advanced tactics, typical midgame positions, strategy, calculation and decision-making, endgame strategy, analysis of the games themselves\r\n\r\nMonthly price of the course: 60 euros', '6-часовой курс для игроков с уровнем III.\r\nДебюты, тактика, стратегия, финалы.\r\n\r\nЦена: 60 ​​евро'),
(4, 80, '/assets/uploads/shop4.png', 'Curso de alto rendimiento\r\n(2200 - 2400)', 'High performance course\r\n(2200 - 2400)', 'Продвинутый уровень\r\n(2200 - 2400)', 'Cursos avanzados dirigidos a jugadores que quieran alcanzar el título de Maestro Fide o Maestro Internacional \r\n\r\nPrecio mensual del curso: 80 euros', 'Advanced courses aimed at players who want to achieve the title of Master Fide or International Master\r\n\r\nMonthly price of the course: 80 euros', '6-часовой курс для продвинутых игроков.\r\nДебюты, тактика, стратегия, финалы.\r\n\r\nЦена: 80 евро');

-- --------------------------------------------------------

--
-- Структура таблицы `latest posts`
--

CREATE TABLE `latest posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(64) NOT NULL,
  `title` varchar(512) NOT NULL,
  `title_en` varchar(512) NOT NULL,
  `title_ru` varchar(512) NOT NULL,
  `title link` varchar(512) NOT NULL,
  `text` varchar(512) NOT NULL,
  `text_en` varchar(512) NOT NULL,
  `text_ru` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Footer latest posts';

--
-- Дамп данных таблицы `latest posts`
--

INSERT INTO `latest posts` (`id`, `image`, `title`, `title_en`, `title_ru`, `title link`, `text`, `text_en`, `text_ru`) VALUES
(1, '/assets/uploads/post1.png', 'Academia Fide da inicio al 2023 con sus cursos avanzados', 'Fide Academy starts 2023 with its advanced courses', 'Курсы для продвинутых игроков', '/classes', 'Tenemos el privilegio de contar con el reconocido entrenador y GM Reinaldo Vera\r\nLoss primeros cursos que impartirá el GM Reinaldo Vera estarán enfocados al estudio de aperturas  y a  cómo imponer ventajas de material, posicional o de ataque durante las partidas .\r\nEste curso estará dirigido a jugadores con un nivel avanzado.\r\nHoras de curso: 8 \r\nPrecio: 80 euros \r\n\r\nPara más información e inscripción:\r\nfideacademia@gmail.com', 'We have the privilege of having the renowned coach and GM Reinaldo Vera\r\nThe first courses that GM Reinaldo Vera will teach will be focused on the study of openings and how to impose material, positional or attack advantages during games.\r\nThis course will be aimed at players with an advanced level.\r\nCourse hours: 8\r\nPrice: 80 euro\r\nOnly spanish language!\r\n\r\nFor more information and registration:\r\nfideacademia@gmail.com', 'Курсы продвинутого уровня с гроссмейстером Reinaldo Vera.\r\nЧасов курса: 8\r\nЦена: 80 евро\r\nТолько на испанском языке!\r\n\r\nДля получения дополнительной информации и регистрации:\r\nfideacademia@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `admin` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `logs`
--

INSERT INTO `logs` (`id`, `admin`, `action`, `time`) VALUES
(1, 'yvrxslvw', 'Edited post ID: 1.', '2023-02-16 15:18:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `latest posts`
--
ALTER TABLE `latest posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `latest posts`
--
ALTER TABLE `latest posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
