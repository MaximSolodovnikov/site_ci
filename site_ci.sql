-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 25 2015 г., 17:21
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `site_ci`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_art` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `title_url` varchar(150) NOT NULL,
  `description_art` text NOT NULL,
  `text_art` text NOT NULL,
  `mini_img_art` varchar(50) NOT NULL,
  `author_art` varchar(150) NOT NULL,
  `date_art` date NOT NULL,
  `keywords` text NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id_art`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_art`, `title`, `title_url`, `description_art`, `text_art`, `mini_img_art`, `author_art`, `date_art`, `keywords`, `category`) VALUES
(1, 'Карп на гриле', 'karp_gril_na_kostre', 'Пора пикников заставляет нас становится не только гурманами, но и весьма находчивыми поварами. Мясные шашлыки, даже самые вкусные, быстро надоедают и душа требует разнообразия. Тут на помощь приходит рыба. Вначале мы с радостью лакомимся замаринованными рыбными кусочками приготовленными на огне, но потом нас тянет на экзотику и начинаются эксперименты. В нашем очередном рецепте мы предложим Вам один из самых удачных кулинарнх тренингов - вашему вниманию предлагается запеченный карп. И даже больше, нашим героем станет не простой, а зеркальный карп - он сочнее, больше и менее костляв, что для гурманов не мало важно.', 'Родиной гриля по праву считаются США, а точнее Чикаго. Именно там в свое время подобный современному грилю прибор был придуман местным жителем по имени Джордж Стивен. Тогда, как и сегодня, было крайне модно готовить еду на открытом огне. Однако в этом случае Вы всегда зависите от погодных условий: силы и направления ветра, других факторов, которые не всегда благоприятствуют. Так было во времена наших предков с древнейших лет так осталось и сегодня - над природой мы не властны.\r\n\r\nА потому, однажды устав от ее капризов, находчивый Джордж решил ее перехитрить и распилил на двое обычный буй. В нижнюю его часть - поддон, он поместил угли и сделал прорезы для прохода воздуха, а сверху над ними расположил решетку для мяса. Верхняя часть разрезанного буйка использовалась в качестве крышки. Примерно так и выглядел первый в мире гриль аппарат. С тех пор все кто видел это сооружение в дворе находчивого изобретателя непременно требовали изготовить такое же и для себя. А по сему с того момента одна часть предприятия Стивена перестала выпускать буйки и стала заниматься производством грилей. Тогда то и началась славная история и самого прибора и блюд на нем приготовленных.\r\n\r\nТеперь самое врем поговорить о том чем же блюда на гриле так полезны и почему их неизменно любят взрослые и дети уже много поколений. Немного ранее мы уже обмолвились о том, что приготовленные таким образхом продукты способны сохранить почти все свои прелести и пользу. Так, абсолютно точно известно, что овощи прошедшие термическую обработку с помощью гриля не теряют антиоксиданты, сохраняющие наш организм молодым и здоровым долгие годы. Считается, что для правильного приготовления в гриле тоже есть несколько тонкостей, которые гарантируют Вам отличный результат.\r\n\r\n - прежде всего продукты, которые планируем готовить желательно замариновать, ососбенно когда речь идет о мясе или рыбе. Кстати, наш рецепт запеченного карпа, тоже предполагает процесс предварительной подготовки;\r\n\r\n - надо помнить, что при использовании слишком сухих сортов мясных и рыбных продуктов не лишним будет смазывать их в процессе жарки небольшим количеством растительного масла при помощи кисти;\r\n\r\n - ну и главное, не забывайте, что готовить блюда гриль следует с сипользвоанеи решетки, размещая их поверх нее так, чтобы они не томились в собственно соку или и того хуже жиру, а именно жарились на гриле избавляясь в процессе от лишнего.\r\nА теперь, прежде чем узнать рецепт приготовления карпа, считаем необходимым сказать пару слов не только о способе приготовления, но и самой рыбе, которую мы планируем сегодня готовить. Итак, карп - это одна из разновидностей рыбы, которая до XIV века произрастала только в Китае и называлась тогда сазаном. Зеркальный карп - это, как вы все уже поняли, одна из разновидностей этой породы, отличительной особенностью которой является неравномерное покрытие чешуей. У такой рыбы чешуйки очень крупные и располагаются они в основном только на брюшке и немного на спинке. Вес такого карпа чаще всего составляет от 2 до 2,5 кг. Что касается пользы, то она огромна и все потому, что состав самой рыбы очень схож со структурой человеческого тела. Поэтому употребляя рыбу в пищу, мы улучшаем качество и тканей, и жидкостей в своем организме. Кроме этого, всем отлично известно о том, что рыбы богата фосфором, а еще в ее составе не мало таких важных для организма белков, жиров и золы. Теперь становится понятно, что не имеет значения фаршируем мы карпа, варим на пару или готовим на гриле - и вкус, и польза будут неоценимы. Именно поэтому мы не станем Вас больше томить и прямо сейчас предложим свой рецепт карпа с фото.', '', 'Я', '2015-09-19', 'Карп', 'cooking'),
(2, 'Замена свечей на Skoda Fabia New', 'zamena_svechey_skoda_fabia', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.\r\nМногие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32', '', 'Lorem Ipsum', '2015-09-23', 'Lorem Ipsum', 'car_repair'),
(3, 'Плов по узбекски', 'plov_po_uzbekski', 'bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla-bla.', 'Some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text.', '', 'Some author', '2015-09-25', 'keywords some text', 'cooking');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_cat` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `title_url_cat` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_cat`, `title`, `title_url_cat`, `keywords`) VALUES
(1, 'Кулинария', 'cooking', 'Кулинария'),
(2, 'Авторемонт', 'car_repair', 'Ремонт Skoda Fabia new');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id_comm` tinyint(4) NOT NULL AUTO_INCREMENT,
  `author_comm` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `avatar_comm` varchar(50) NOT NULL,
  `title_url` varchar(50) NOT NULL,
  `date_comm` date NOT NULL,
  `time_comm` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id_comm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id_comm`, `author_comm`, `comment`, `avatar_comm`, `title_url`, `date_comm`, `time_comm`, `category`) VALUES
(4, 'Test', 'Test', '0', '', '2015-09-25', '16:18:49', ''),
(5, 'tbrtbrtb', 'srtbsrtbsrtb', '0', '', '2015-09-25', '16:27:46', ''),
(6, 'MAXIM', 'Very good article', '0', '', '2015-09-25', '16:48:24', ''),
(7, 'lololol', 'olololol', '0', '', '2015-09-25', '16:53:26', '');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id_page` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `title_url_page` varchar(100) NOT NULL,
  `text_page` text NOT NULL,
  `keywords` text NOT NULL,
  `hidden` varchar(10) NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id_page`, `title`, `title_url_page`, `text_page`, `keywords`, `hidden`) VALUES
(1, 'Главная', 'main', 'Добро пожаловать на главную страницу', 'Веб разработка, codeigniter', 'no'),
(2, 'Контакты', 'contacts', 'Страница контактов', 'Веб разработка, codeigniter', 'no'),
(3, 'Статьи', 'articles', 'articles', 'articles', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `tech_sections`
--

CREATE TABLE IF NOT EXISTS `tech_sections` (
  `id_tech` tinyint(4) NOT NULL AUTO_INCREMENT,
  `page_tech` varchar(100) NOT NULL,
  `title_tech` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id_tech`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` tinyint(4) NOT NULL AUTO_INCREMENT,
  `login_user` varchar(100) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `ip_user` varchar(50) NOT NULL,
  `status_user` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
