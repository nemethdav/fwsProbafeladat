-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Júl 29. 18:36
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `fwsprobafeladat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `establishments`
--

CREATE TABLE `establishments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `establishment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `establishments`
--

INSERT INTO `establishments` (`id`, `establishment`, `created_at`, `updated_at`) VALUES
(1, 'PRÓBAHELY', NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fire_extinguishers`
--

CREATE TABLE `fire_extinguishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `establishmentsID` bigint(20) UNSIGNED NOT NULL,
  `insideID` int(11) NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeID` bigint(20) UNSIGNED NOT NULL,
  `serialNumber` int(11) NOT NULL,
  `productionDate` date NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `fire_extinguishers`
--

INSERT INTO `fire_extinguishers` (`id`, `establishmentsID`, `insideID`, `place`, `typeID`, `serialNumber`, `productionDate`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'fawer', 3, 345, '2021-07-17', 'this.comment', '2021-07-19 09:02:04', '2021-07-19 09:02:04'),
(2, 1, 456437, 'eghdj', 1, 673567, '2021-07-15', 'dgjk', '2021-07-20 15:31:47', '2021-07-20 15:31:47'),
(3, 1, 537356, 'dfjsdj', 2, 34673567, '2021-07-15', 'sjzstzj', '2021-07-20 16:22:32', '2021-07-20 16:22:32'),
(4, 1, 5387, 'jktfg', 2, 348, '2021-07-22', 'dktgk', '2021-07-20 16:33:49', '2021-07-20 16:33:49'),
(5, 1, 5387, 'jktfg', 2, 348, '2021-07-22', 'dktgk', '2021-07-20 16:33:49', '2021-07-20 16:33:49'),
(6, 1, 5387, 'jktfg', 2, 348, '2021-07-22', 'dktgk', '2021-07-20 16:33:50', '2021-07-20 16:33:50'),
(7, 1, 73567, 'dghj', 4, 56875, '2021-07-15', NULL, '2021-07-20 17:24:51', '2021-07-20 17:24:51'),
(8, 1, 73567, 'dghj', 4, 56875, '2021-07-15', NULL, '2021-07-20 17:24:51', '2021-07-20 17:24:51'),
(9, 1, 57856, 'sdjhets', 7, 5687, '2021-07-23', 'dgjg', '2021-07-23 07:50:13', '2021-07-23 07:50:13'),
(10, 1, 356735, 'dghj', 6, 4756, '2021-07-23', 'djhsdghmk', '2021-07-23 08:07:08', '2021-07-23 08:07:08'),
(11, 1, 356735, 'dghj', 6, 4756, '2021-07-23', 'djhsdghmk', '2021-07-23 08:07:08', '2021-07-23 08:07:08'),
(12, 1, 356735, 'dghj', 6, 4756, '2021-07-23', 'djhsdghmk', '2021-07-23 08:07:08', '2021-07-23 08:07:08'),
(13, 1, 356735, 'dghj', 6, 4756, '2021-07-23', 'djhsdghmk', '2021-07-23 08:07:08', '2021-07-23 08:07:08');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fire_extinguisher_types`
--

CREATE TABLE `fire_extinguisher_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fire_extinguisher_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `fire_extinguisher_types`
--

INSERT INTO `fire_extinguisher_types` (`id`, `fire_extinguisher_type`, `created_at`, `updated_at`) VALUES
(1, 'Cervinka P2 (8 A, 55 B)', NULL, NULL),
(2, 'Cervinka P4 CE (13 A, 70 B, C)', NULL, NULL),
(3, 'Cervinka P6 Ce (34A, 183 B, C)', NULL, NULL),
(4, 'Fire Stop P 12 TTBT (55 A, 233 B,C)', NULL, NULL),
(5, 'Fire Stop P 12 TTBT (43 A, 233 B, C)', NULL, NULL),
(6, 'GAZ-TECH GP-2x ABC (13 A, 89 B, C)', NULL, NULL),
(7, 'GAZ-TECH GP-6x ABC (34 A)', NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `maintenances`
--

CREATE TABLE `maintenances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fireExtinguisherID` bigint(20) UNSIGNED NOT NULL,
  `maintenanceType` bigint(20) UNSIGNED NOT NULL,
  `maintenanceDate` date NOT NULL,
  `maintenanceComment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `maintenance_types`
--

CREATE TABLE `maintenance_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maintenanceType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `maintenance_types`
--

INSERT INTO `maintenance_types` (`id`, `maintenanceType`, `created_at`, `updated_at`) VALUES
(1, 'Alapkarbantartás', NULL, NULL),
(2, 'Üzemeltetői ellenőrzés', NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_07_13_135934_create_maintenance_types_table', 1),
(2, '2021_07_13_140034_create_fire_extinguisher_types_table', 1),
(3, '2021_07_13_140050_create_establishments_table', 1),
(4, '2021_07_13_140100_create_fire_extinguishers_table', 1),
(5, '2021_07_13_140133_create_maintenances_table', 1);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `establishments`
--
ALTER TABLE `establishments`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `fire_extinguishers`
--
ALTER TABLE `fire_extinguishers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fire_extinguishers_typeid_foreign` (`typeID`),
  ADD KEY `fire_extinguishers_establishmentsid_foreign` (`establishmentsID`);

--
-- A tábla indexei `fire_extinguisher_types`
--
ALTER TABLE `fire_extinguisher_types`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenances_fireextinguisherid_foreign` (`fireExtinguisherID`),
  ADD KEY `maintenances_maintenancetype_foreign` (`maintenanceType`);

--
-- A tábla indexei `maintenance_types`
--
ALTER TABLE `maintenance_types`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `establishments`
--
ALTER TABLE `establishments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `fire_extinguishers`
--
ALTER TABLE `fire_extinguishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT a táblához `fire_extinguisher_types`
--
ALTER TABLE `fire_extinguisher_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `maintenance_types`
--
ALTER TABLE `maintenance_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `fire_extinguishers`
--
ALTER TABLE `fire_extinguishers`
  ADD CONSTRAINT `fire_extinguishers_establishmentsid_foreign` FOREIGN KEY (`establishmentsID`) REFERENCES `establishments` (`id`),
  ADD CONSTRAINT `fire_extinguishers_typeid_foreign` FOREIGN KEY (`typeID`) REFERENCES `fire_extinguisher_types` (`id`);

--
-- Megkötések a táblához `maintenances`
--
ALTER TABLE `maintenances`
  ADD CONSTRAINT `maintenances_fireextinguisherid_foreign` FOREIGN KEY (`fireExtinguisherID`) REFERENCES `fire_extinguishers` (`id`),
  ADD CONSTRAINT `maintenances_maintenancetype_foreign` FOREIGN KEY (`maintenanceType`) REFERENCES `maintenance_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
