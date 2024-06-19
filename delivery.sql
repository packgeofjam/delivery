-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2024 г., 23:33
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `delivery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `shortname` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `price` int NOT NULL,
  `category` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `popular` tinyint(1) NOT NULL DEFAULT '0',
  `discount` tinyint(1) NOT NULL DEFAULT '0',
  `old-price` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `shortname`, `description`, `price`, `category`, `availability`, `popular`, `discount`, `old-price`) VALUES
(1, 'Сырные палочки', 'cheesesticks', 'Пять палочек сыра маасдам, обжаренные в хрустящей панировке, оригинальный рецепт', 219, 'snacks', 1, 1, 1, 249),
(2, 'Картофельные шарики', 'potatoballs', 'Семь шариков с начинкой из картошки и сыра моцарелла, насыщенные и хрустящие', 249, 'snacks', 1, 1, 0, NULL),
(3, 'Луковые кольца', 'onionrings', 'Классические семь хрустящих колечек, обжаренные в масле и панировке', 179, 'snacks', 1, 1, 0, NULL),
(4, 'Пицца 4 сыра', 'pizza4cheese', 'Моцарелла, дорблю, чеддер, пармезан, сливочный соус, прованские травы, 30см', 699, 'pizza', 1, 0, 0, NULL),
(5, 'Пицца 6 сыров', 'pizza6cheese', 'Моцарелла, гауда, дорблю, брынза, чеддер, пармезан, сливочный соус, прованские травы, 30см', 799, 'pizza', 1, 1, 0, NULL),
(6, 'Пицца сливочный цыплёнок', 'pizzacreamychicken', 'Моцарелла, фирменный сливочный соус, оливковое масло, куриное бедро маринованное в авторском соусе, помидоры черри, сыр фета, брокколи, 30см', 659, 'pizza', 1, 0, 0, NULL),
(7, 'Пицца Цезарь', 'Cezar', 'Соус цезарь, сыр моцарелла, курица, листья салата, сыр пармезан, 30см', 639, 'pizza', 1, 0, 0, NULL),
(8, 'Пицца Овощная', 'vegetablepizza', 'Моцарелла, кабачки цукини, томаты свежие, перец болгарский, маслины, брокколи, 30см', 599, 'pizza', 1, 0, 0, NULL),
(9, 'Пицца Барбекю', 'barbeku', 'Моцарелла, мясное ассорти, томаты свежие, огурцы маринованные, лук репчатый, перец халапеньо маринованый, соус барбекю, 30см', 629, 'pizza', 1, 0, 0, NULL),
(10, 'Пицца Пеперони', 'peperoni', 'Моцарелла, колбаса пепперони, сливочный соус, 30см', 529, 'pizza', 1, 0, 0, NULL),
(11, 'Сырфырс бургер фирменный', 'cshashcburger', 'Бургер по фирменному рецепту с котлетой из свиного фарша и сыра моцарелла', 359, 'burger', 1, 1, 0, NULL),
(12, 'Сырфырс бургер джуниор', 'cshashcburgerj', 'Тот самый фирменный бургер, но поменьше', 299, 'burger', 1, 0, 0, NULL),
(13, 'Настоящий чизбургер', 'therealcheeseburger', 'Сумасшедший бургер с 20 слоями сыра. Легенда для безумных любителей сыра', 329, 'burger', 1, 1, 1, 389),
(14, 'Овощной бургер', 'vegetableburger', 'Бургер по фирменному рецепту с котлетой из овощей и фарша, булочкой с отрубями и диетическим соусом', 359, 'burger', 1, 0, 0, NULL),
(15, 'Омлеттер', 'omeletter', 'Бургер по фирменному рецепту с сырной мягкой булочкой, яйцом и беконом, отличный завтрак', 369, 'burger', 1, 0, 0, NULL),
(16, 'Бургер с картошкой', 'potatoburger', 'Бургер по фирменному рецепту с котлетой из картошки и фарша, сытный и вкусный, отличный обед', 369, 'burger', 1, 0, 0, NULL),
(17, 'Чизбургер', 'cheeseburger', 'Обычный небольшой бургер с говяжей котлетой, просто и вкусно', 119, 'burger', 1, 0, 0, NULL),
(18, 'Чикенбургер', 'chickenburger', 'Обычный небольшой бургер с курицей, просто и вкусно', 99, 'burger', 1, 0, 0, NULL),
(19, 'Сырные наггетсы', 'nuggets', 'Шесть куриных наггетсов с плавленным тянущимся маасдамом внутри', 199, 'snacks', 1, 0, 0, NULL),
(20, 'Картошка фри', 'fries', 'Небольшая порция классической картошки фри, 150г', 99, 'snacks', 1, 0, 0, NULL),
(21, 'Овощной сет', 'vegetableset', 'Полезные свежие овощи на закуску: помидоры, огурцы, перец болгарский, морковь, 200г', 139, 'snacks', 1, 0, 0, NULL),
(22, 'Соус сырный', 'cheesesauce', NULL, 29, 'snacks', 1, 0, 0, NULL),
(23, 'Соус кисло-сладкий', 'sweetandsoursauce', NULL, 29, 'snacks', 1, 0, 0, NULL),
(24, 'Лепёшка ветчина-сыр', 'cheesepita', 'Свежеиспечёная лепёшка со сливочным сыром и ветчиной', 69, 'other', 1, 0, 0, NULL),
(25, 'Сендвич-лаваш', 'sandwichpita', 'Сытный перекус в лаваше', 89, 'other', 1, 0, 0, NULL),
(26, 'Латте', 'latte', 'Молочный кофе с нежной сырной пенкой 320мл', 219, 'coffee', 1, 1, 0, NULL),
(27, 'Американо', 'americano', 'Классический кофе, но со сгущёной сырной пенкой 320мл', 179, 'coffee', 1, 0, 0, NULL),
(28, 'Моккачино', 'mokkachino', 'Молочный кофе с добавлением шоколада и сгущёной сырной пенки 320мл', 259, 'coffee', 1, 0, 1, 289),
(29, 'Раф', 'raf', 'Нежный молочный кофе с воздушной сырной пенкой 320мл', 289, 'coffee', 1, 0, 0, NULL),
(30, 'Айс кофе', 'icecoffee', 'Холодный кофе со льдом, в жаркую погоду 320мл', 179, 'coffee', 1, 0, 1, 199),
(31, 'Лимонад классический', 'classiclimonade', 'Классический напиток из лимона, апельсина и лайма со льдом 400мл', 219, 'limonade', 1, 0, 0, NULL),
(32, 'Лимонад ваниль лаванда', 'vanillimonade', 'Ванильный сладкий лимонад с нотками лаванды 400мл', 289, 'limonade', 1, 1, 1, 259),
(33, 'Лимонад клубника базилик', 'strawberrylimonade', 'Насыщенный клубничный лимонад с листьями базилика 400мл', 249, 'limonade', 1, 0, 0, NULL),
(34, 'Лимонад манго апельсин', 'mangolimonade', 'Апельсиновый лимонад с кусочками манго 400мл', 249, 'limonade', 1, 0, 0, NULL),
(35, 'Лимонад мохито', 'moxito', 'Вкусный классический лимонад с кусочками лимона и лайма 400мл', 219, 'limonade', 1, 0, 0, NULL),
(36, 'Яблочный фреш', 'applefresh', 'Охлаждающий напиток из мякоти яблока 400мл', 249, 'limonade', 1, 0, 0, NULL),
(37, 'Молочный коктейль ванильный', 'vanilmilk', '400мл', 179, 'milkshake', 1, 0, 0, NULL),
(38, 'Молочный коктейль клубничный', 'strawberrymilk', '400мл', 179, 'milkshake', 1, 0, 0, NULL),
(39, 'Молочный коктейль малиновый', 'raspberrymilk', '400мл', 179, 'milkshake', 1, 0, 0, NULL),
(40, 'Молочный коктейль манго персик', 'mangomilk', '400мл', 199, 'milkshake', 1, 0, 0, NULL),
(41, 'Молочный коктейль слива абрикос', 'plumapricotmilk', '400мл', 199, 'milkshake', 1, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1718828553),
('m240522_205332_create_user_table', 1718828557),
('m240612_200911_catalog_table', 1718828557),
('m240613_123812_add_products', 1718828557),
('m240619_135636_orders', 1718828557);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int NOT NULL,
  `user_id` int NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `delivery_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'Доставка',
  `promo` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `amount` int NOT NULL,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  `status` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `order_item`
--

CREATE TABLE `order_item` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `status` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin', 'KYwfWcXHmj042hqTCzcRDJcEJDTbOyZv', '$2y$13$3pLtDhfLWdy1iK9uX2v5T.6m0ytIXAlBsdf3DPKHiF2ANc7UJkJYm', NULL, 'proninaelizaveta2006@gmail.com', 1718828918, 1718828918, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shortname` (`shortname`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
