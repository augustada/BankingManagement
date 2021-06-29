-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Ara 2020, 12:21:21
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bank`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `harcama`
--

CREATE TABLE `harcama` (
  `id` int(11) NOT NULL,
  `isim` varchar(150) NOT NULL,
  `durum` varchar(50) NOT NULL,
  `tutar` int(50) NOT NULL,
  `tarih` date NOT NULL DEFAULT current_timestamp(),
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `harcama`
--

INSERT INTO `harcama` (`id`, `isim`, `durum`, `tutar`, `tarih`, `kategori`) VALUES
(7, 'Hastane', 'Gelir', 450, '2020-12-25', 'Sağlık'),
(8, 'Bim', 'Gider', 155, '2020-11-25', 'Market'),
(9, 'Şok', 'Gider', 265, '2020-11-25', 'Market'),
(10, 'Devlet Hastanesi', 'Gider', 100, '2020-11-25', 'Sağlık'),
(11, 'Örümcek Adam', 'Gider', 50, '2020-12-02', 'Eğlence'),
(12, 'Benzin', 'Gider', 250, '2020-12-08', 'Akaryakıt'),
(13, 'Cips', 'Gider', 20, '2020-12-05', 'Market'),
(14, 'Çiçek ', 'Gider', 150, '2020-12-10', 'Hediye'),
(15, 'Kalem', 'Gider', 50, '2020-12-25', 'Market'),
(16, 'Yemek', 'Gider', 100, '2020-12-25', 'Restoran'),
(17, 'İade ', 'Gelir', 90, '2020-12-25', 'Eğlence'),
(18, 'Çiçek', 'Gider', 20, '2020-12-25', 'Hediye'),
(19, 'Kağıt Kalem', 'Gelir', 32, '2020-12-25', 'Hediye'),
(20, 'Kontör', 'Gelir', 55, '2020-12-25', 'Ulaşım'),
(21, 'iTunes', 'Gelir', 30, '2020-12-25', 'Eğlence'),
(22, 'Havale', 'Gelir', 150, '2020-12-27', 'Eğlence'),
(23, 'Noodle', 'Gider', 30, '2020-12-27', 'Market');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesap`
--

CREATE TABLE `hesap` (
  `hesap_id` int(11) NOT NULL,
  `hesap_isim` varchar(50) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_repeat` varchar(50) NOT NULL,
  `hesap_tipi` varchar(50) NOT NULL,
  `miktar` int(150) NOT NULL,
  `birim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hesap`
--

INSERT INTO `hesap` (`hesap_id`, `hesap_isim`, `username`, `mail`, `password`, `password_repeat`, `hesap_tipi`, `miktar`, `birim`) VALUES
(1, 'Ziraat', 'admin', 'admin@gmail.com', '12345', '12345', 'Nakit', 1002, 'TRY'),
(2, 'Maximum', 'admin', 'admin@gmail.com', '12345', '12345', 'Kart', 1000, 'EUR'),
(6, 'DenizBank', 'admin', 'admin@gmail.com', '12345', '12345', 'Nakit', 1000, 'EUR'),
(7, 'Garanti', 'admin', 'admin@gmail.com', '12345', '12345', 'Kart', 1000, 'GBP'),
(16, 'deneme', 'admin', 'admin@gmail.com', '12345', '12345', 'Nakit', 2000, 'TRY'),
(17, 'deneme2', 'admin', 'admin@gmail.com', '12345', '12345', 'Kart', 0, 'TRY'),
(18, 'deneme3', 'admin', 'admin@gmail.com', '12345', '12345', 'Nakit', 1000, 'USD');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `password_repeat` varchar(30) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`id`, `username`, `mail`, `password`, `password_repeat`, `created`, `updated`) VALUES
(1, 'admin', 'admin@gmail.com', '12345', '12345', '2020-12-19 11:51:45', '2020-12-27 19:01:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye_log`
--

CREATE TABLE `uye_log` (
  `islem_id` int(11) NOT NULL,
  `islem_tipi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `islem_kisi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `islem_zaman` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `islem_ip` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `uye_log`
--

INSERT INTO `uye_log` (`islem_id`, `islem_tipi`, `islem_kisi`, `islem_zaman`, `islem_ip`) VALUES
(48, 'Giriş yapıldı.', 'özge ünal', '20.12.2020 13:48:44', '127.0.0.1'),
(49, 'Giriş yapıldı.', 'özge ünal', '20.12.2020 13:49:35', '127.0.0.1'),
(50, 'Profil Sayfası Açıldı.', 'özge ünal', '20.12.2020 13:49:38', '127.0.0.1'),
(51, 'Profil Sayfası Açıldı.', 'özge ünal', '20.12.2020 13:50:44', '127.0.0.1'),
(52, 'Profil Sayfası Açıldı.', 'özge ünal', '20.12.2020 14:12:25', '127.0.0.1'),
(53, 'Çıkış yapıldı.', 'özge ünal', '20.12.2020 14:15:45', '127.0.0.1'),
(54, 'Giriş yapıldı.', 'özlem ünal', '20.12.2020 14:15:53', '127.0.0.1'),
(55, 'Giriş yapıldı.', 'özge ünal', '20.12.2020 14:32:37', '127.0.0.1'),
(56, 'Çıkış yapıldı.', 'özge ünal', '20.12.2020 14:37:10', '127.0.0.1'),
(57, 'Giriş yapıldı.', 'özlem', '20.12.2020 14:37:41', '127.0.0.1'),
(58, 'Profil Bilgileri Düzenlendi.', 'özlem ünal', '20.12.2020 14:40:49', '127.0.0.1'),
(59, 'Çıkış yapıldı.', 'özlem', '20.12.2020 14:43:48', '127.0.0.1'),
(79, 'Giriş yapıldı.', 'özge ünal', '22.12.2020 20:34:35', '127.0.0.1'),
(80, 'Çıkış yapıldı.', 'özge ünal', '22.12.2020 20:37:04', '127.0.0.1'),
(81, 'Giriş yapıldı.', 'özlem ünal', '22.12.2020 20:37:14', '127.0.0.1'),
(82, 'Giriş yapıldı.', 'özge ünal', '22.12.2020 20:46:01', '127.0.0.1'),
(83, 'Giriş yapıldı.', 'özge ünal', '25.12.2020 15:43:04', '127.0.0.1'),
(84, 'Çıkış yapıldı.', 'özge ünal', '27.12.2020 22:00:45', '127.0.0.1'),
(85, 'Giriş yapıldı.', 'admin', '27.12.2020 22:04:11', '127.0.0.1'),
(86, 'Giriş yapıldı.', 'admin', '29.12.2020 14:08:53', '127.0.0.1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `harcama`
--
ALTER TABLE `harcama`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hesap`
--
ALTER TABLE `hesap`
  ADD PRIMARY KEY (`hesap_id`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uye_log`
--
ALTER TABLE `uye_log`
  ADD PRIMARY KEY (`islem_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `harcama`
--
ALTER TABLE `harcama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `hesap`
--
ALTER TABLE `hesap`
  MODIFY `hesap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `uye_log`
--
ALTER TABLE `uye_log`
  MODIFY `islem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
