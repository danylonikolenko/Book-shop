-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 29 2020 г., 20:05
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bookstore`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `available` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `tittle`, `date`, `text`, `author`, `image`, `price`, `available`) VALUES
(1, 'My Own Words', '2020-09-26', 'The New York Times bestselling book from Supreme Court Justice Ruth Bader Ginsburg-\"a comprehensive look inside her brilliantly analytical, entertainingly wry mind, revealing the fascinating life of one of our generation\'s most influential voices in both law and public opinion\" (Harper\'s Bazaar).', 'admin', 'uploads/j4Io5RxPodmMeQP6tYckWrDcWDPeBW0yNAb8pCO5.jpeg', 11.5, 0),
(2, 'MIDNIGHT SUN', '2020-09-26', 'It’s here! Number one bestselling author Stephenie Meyer makes a triumphant return to the world of Twilight with this highly-anticipated companion; the iconic love story of Bella and Edward told from the vampire’s point of view.\r\n\r\nWhen Edward Cullen and Bella Swan met in Twilight, an iconic love story was born. But until now, fans have heard only Bella’s side of the story. At last, readers can experience Edward’s version in the long-awaited companion novel, Midnight Sun.', 'admin', 'uploads/kcmnlvkjhrShm0DzZdxLrCgy55Aa0orUVSrzL5fI.jpeg', 6.99, 1),
(3, 'Killing For Company', '2020-09-26', 'Dennis Nilsen, who died in May 2018, murdered at least 15 people before his arrest in 1983. This groundbreaking criminal study of his killings was written with Nilsen\'s full cooperation, resulting in a fascinating - and horrifying - portrait of the man who worshipped death.', 'admin', 'uploads/fmpP6GZAoks4WEOO17RVifBYMqlI2fk8WEdwx7wI.jpeg', 14.67, 1),
(4, 'The Happy Pear', '2020-09-26', 'David and Stephen\'s recipe grids show you just how many different meals you can make using the same key ingredients and methods. This means you can start adapting your favourite dishes to your taste, to your budget or to whatever you have in the cupboard.\r\n\r\nTheir introductory chapters walk you through the fundamentals of taste and texture, teaching you the role of every ingredient you use. Once you understand this, you will have the confidence to swap ingredients in and out and even come up with recipes of your own.\r\n\r\nYou will find over 200 versions of plant-based recipes anyone can make, from fluffy coconut granola for breakfast, to home-made vegan pizza for lunch, to creamy broccoli pie for dinner to carrot cake with vegan cream cheese frosting for dessert.\r\n\r\nFrom the plant-based newbie to the experienced vegan, this approach will inspire you to become the best plant-based cook you can possibly be.\r\n\r\n\r\n\'These lovely boys always create incredibly tasty food\' Jamie Oliver\r\n\r\n\'Proper good food ... hearty, decent and delicious\' Russell Brand\r\n\r\n\'The poster boys for a healthy way of life!\' Sunday Times\r\n\r\n\'Their energy is almost tangible\' Dr Rangan Chatterjee\r\n\r\n\'A healthy-eating phenomenon\' Mail on Sunday\r\n\r\n\'Great people, unbelievable food\' Joe Wicks', 'admin', 'uploads/7Rzq0NUQc1jv8aLkfuC6igLSqVrfC0NjdskjBr2o.jpeg', 15, 1),
(5, 'Shuggie Bain', '2020-09-26', 'We were bowled over by this first novel, which creates an amazingly intimate, compassionate, gripping portrait of addiction, courage and love.\' The judges of the Booker Prize\r\n\r\n\'Douglas Stuart has written a first novel of rare and lasting beauty.\' Observer\r\n\r\nIt is 1981. Glasgow is dying and good families must grift to survive. Agnes Bain has always expected more from life. She dreams of greater things: a house with its own front door and a life bought and paid for outright (like her perfect, but false, teeth). But Agnes is abandoned by her philandering husband, and soon she and her three children find themselves trapped in a decimated mining town. As she descends deeper into drink, the children try their best to save her, yet one by one they must abandon her to save themselves. It is her son Shuggie who holds out hope the longest.\r\n\r\nShuggie is different. Fastidious and fussy, he shares his mother\'s sense of snobbish propriety. The miners\' children pick on him and adults condemn him as no\' right. But Shuggie believes that if he tries his hardest, he can be normal like the other boys and help his mother escape this hopeless place.\r\n\r\nDouglas Stuart\'s Shuggie Bain lays bare the ruthlessness of poverty, the limits of love, and the hollowness of pride. A counterpart to the privileged Thatcher-era London of Alan Hollinghurst\'s The Line of Beauty, it also recalls the work of Edouard Louis, Frank McCourt, and Hanya Yanagihara, a blistering debut by a brilliant writer with a powerful and important story to tell.', 'admin', 'uploads/6t2EKQjRapzzJEooMjby19V1PdA41VNWATtZV8Ds.jpeg', 10, 1),
(6, 'Who They Was', '2020-09-26', '\'A literary rendering of the Top Boy generation... I cannot conjure another work which captures this culture in such depth - or with such brutal honesty - as only lived experience can tell \' Graeme Armstrong, author of The Young Team\r\n\r\n\r\n\r\n\'An astonishingly powerful book\' Cathy Rentzenbrink, author of The Last Act of Love\r\n\r\n\r\n\r\nThis life is like being in an ocean. Some people keep swimming towards the bottom. Some people touch the bottom with one foot, or even both, and then push themselves off it to get back up to the top, where you can breathe. Others get to the bottom and decide they want to stay there. I don\'t want to get to the bottom because I\'m already drowning.\r\n\r\n\r\n\r\nThis is a story of a London you won\'t find in any guidebooks.', 'admin', 'uploads/HV6ow58ahgp2k5j3dSPhFJjXFA0qxJ9KfSIIKwyw.jpeg', 12.99, 1),
(7, 'Where the Crawdads Sing', '2020-09-26', 'For years, rumors of the \'Marsh Girl\' have haunted Barkley Cove, a quiet town on the North Carolina coast. So in late 1969, when handsome Chase Andrews is found dead, the locals immediately suspect Kya Clark, the so-called Marsh Girl. But Kya is not what they say. Sensitive and intelligent, she has survived for years alone in the marsh that she calls home, finding friends in the gulls and lessons in the sand. Then the time comes when she yearns to be touched and loved. When two young men from town become intrigued by her wild beauty, Kya opens herself to a new life - until the unthinkable happens.\r\n\r\n-------------------------------------------------\r\n\'[It] will reach a huge audience though the writer\'s old-fashioned talents for compelling character, plotting and landscape description\' The Guardian\r\n\'For sheer escapism pick up Where The Crawdads Sing . . . there is writing that takes your breath away\' The Times\r\n\'All is not as it seems in this heartbreaking coming-of-age bestseller\' The i newspaper', 'admin', 'uploads/nZCLfhcB6u3HDbuKddoz5vNxnSr1t8HeF8RCJY3K.jpeg', 13.99, 0),
(8, 'Girl, Woman, Other', '2020-09-26', 'This is Britain as you\'ve never read it.\r\nThis is Britain as it has never been told.\r\n\r\nFrom Newcastle to Cornwall, from the birth of the twentieth century to the teens of the twenty-first, Girl, Woman, Other follows a cast of twelve characters on their personal journeys through this country and the last hundred years. They\'re each looking for something - a shared past, an unexpected future, a place to call home, somewhere to fit in, a lover, a missed mother, a lost father, even just a touch of hope . . .', 'Dostoevskyi', 'uploads/izigrNpIyHdOjLuUq0KUK42DWL9ztldGfCY95wy5.jpeg', 11.05, 1),
(9, 'Before the Coffee Gets Cold', '2020-09-26', 'In a small back alley in Tokyo, there is a cafe which has been serving carefully brewed coffee for more than one hundred years. But this coffee shop offers its customers a unique experience: the chance to travel back in time.\r\n\r\nIn Before the Coffee Gets Cold, we meet four visitors, each of whom is hoping to make use of the cafe\'s time-travelling offer, in order to: confront the man who left them, receive a letter from their husband whose memory has been taken by early onset Alzheimer\'s, to see their sister one last time, and to meet the daughter they never got the chance to know.\r\n\r\nBut the journey into the past does not come without risks: customers must sit in a particular seat, they cannot leave the cafe, and finally, they must return to the present before the coffee gets cold . . .\r\n\r\nToshikazu Kawaguchi\'s beautiful, moving story - translated from Japanese by Geoffrey Trousselot - explores the age-old question: what would you change if you could travel back in time? More importantly, who would you want to meet, maybe for one last time?', 'Bulgakov', 'uploads/LVbXw7yJS3WRVYf8NvycbdplJS08GHUZ7CwedDOF.jpeg', 14.5, 1),
(10, 'The Art of War', '2020-09-29', 'Written in the 6th century BC, Sun Tzu\'s The Art of War is a Chinese military treatise that is still revered today as the ultimate commentary on war and military strategy. Focussing on the principle that one can outsmart your foe mentally by thinking very carefully about strategy before resorting to physical battle, this philosophy continues to be applied to the corporate and business world.\r\n\r\n\r\nSun Tzu\'s timeless appraisal of the different aspects of warfare are laid out in 13 chapters, including sections on `Laying Plans\', `Waging War\' and `Terrain\'. Words that are as resonant today in every aspect of our lives as they were when he wrote them.', 'Sun Tzu', 'uploads/0s15ZHWNpoLNOp2yvG7qmwu2GAjrM4WJeIcgOAsM.jpeg', 4.56, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `name` varchar(255) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `text_comment` text NOT NULL,
  `date_comments` date NOT NULL,
  `id_article_com` int(11) DEFAULT NULL,
  `id_user_com` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`name`, `id_comment`, `text_comment`, `date_comments`, `id_article_com`, `id_user_com`) VALUES
('danil', 1, 'Hello', '2020-09-29', 9, 3),
('danil', 2, 'Log in and write comments!', '2020-09-29', 9, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `name`, `email`, `number`, `id_book`) VALUES
(4, 'Danylo', 'nikolenkodanyl@gmail.com', '380999302216', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_user` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `email`, `password`, `number`, `date_user`) VALUES
(1, 'admin', 'nikolenkodanyl@gmail.com', '11111111', '38099930221601111', '2020-01-19'),
(3, 'danil', 'nikolenkodanyl@gmail.com', '111111111', '380999302216', '2020-09-29');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `page_id` (`id_comment`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
