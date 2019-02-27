-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2018. Feb 25. 11:08
-- Kiszolgáló verziója: 10.1.21-MariaDB
-- PHP verzió: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `rabitask`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `advertisements`
--

INSERT INTO `advertisements` (`id`, `userid`, `title`) VALUES
(1, 1, 'Cékla eladó'),
(2, 1, 'Répát vásárolnék'),
(3, 2, 'Nyaralót keresek'),
(4, 3, 'Kiadó apartman');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Béla'),
(3, 'Géza'),
(2, 'Pista');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`,`title`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `name` (`name`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
