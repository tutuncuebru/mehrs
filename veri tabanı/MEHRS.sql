-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Haz 2023, 01:31:23
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doktor`
--

CREATE TABLE `doktor` (
  `d_id` int(11) NOT NULL,
  `d_mail` varchar(100) NOT NULL,
  `d_ad` varchar(50) NOT NULL,
  `d_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `doktor`
--

INSERT INTO `doktor` (`d_id`, `d_mail`, `d_ad`, `d_password`) VALUES
(1, 'nurdan@mail.com', 'Nurdan Şatana', '123'),
(2, 'berfin@mail.com', 'Berfin Yakıcı', '456'),
(3, 'yaser@mail.com', 'Yaser Hasırcı', '789');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `k_login`
--

CREATE TABLE `k_login` (
  `TC` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `k_login`
--

INSERT INTO `k_login` (`TC`, `password`) VALUES
('12345678999', '81dc9bdb52d04dc20036dbd8313ed055'),
('12345678999', '827ccb0eea8a706c4c34a16891f84e7b'),
('12345678999', '81dc9bdb52d04dc20036dbd8313ed055'),
('12345678999', '81dc9bdb52d04dc20036dbd8313ed055'),
('14725836998', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `r_id` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `saat` varchar(20) NOT NULL,
  `il` varchar(50) NOT NULL,
  `hastane` varchar(50) NOT NULL,
  `poliklinik` varchar(50) NOT NULL,
  `doktor` varchar(50) NOT NULL,
  `h_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`r_id`, `tarih`, `saat`, `il`, `hastane`, `poliklinik`, `doktor`, `h_id`) VALUES
(1, '2023-06-15', '', 'Amasya', 'FSM', 'Nöroloji', 'YASER HASIRCI', '0'),
(2, '2023-06-14', '', 'Balıkesir', 'Süreyya', 'Kulak Burun Boğaz', 'YASER HASIRCI', '0'),
(3, '2023-06-22', '', 'Antalya', 'Avicenna', 'Kardiyoloji', 'BERFİN YAKICI', '0'),
(9, '2023-06-07', '', 'Ankara', 'Eren', 'Nöroloji', 'BERFİN YAKICI', '0'),
(10, '2023-06-09', '', 'Antalya', 'Süreyya', 'Nöroloji', 'BERFİN YAKICI', '0'),
(11, '2023-06-14', '', 'Artvin', 'FSM', 'Nöroloji', 'REZAN ACAR', '0'),
(12, '2023-06-15', '', 'Gümüşhane', 'Acıbadem', 'Nöroloji', 'REZAN ACAR', '0'),
(13, '2023-06-07', '', 'Antalya', 'FSM', 'Kulak Burun Boğaz', 'YASER HASIRCI', '0'),
(14, '2023-06-14', '', 'Antalya', 'Eren', 'Nöroloji', 'YASER HASIRCI', '0'),
(15, '2023-06-13', '', 'Aydın', 'Avicenna', 'Nöroloji', 'YASER HASIRCI', '0'),
(16, '2023-06-20', '', 'Antalya', 'FSM', 'Nöroloji', 'YASER HASIRCI', '0'),
(37, '2023-06-14', '15.45', 'Antalya', 'Acıbadem', 'Üroloji', 'YASER HASIRCI', ''),
(38, '2023-06-01', '10.30', 'Adana', 'Memorial', 'Dahiliye', 'NURDAN ŞATANA', ''),
(40, '2023-06-15', '13.00', 'Karaman', 'Süreyya', 'Ortopedi ve Travmatoloji', 'BERFİN YAKICI', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sign_up`
--

CREATE TABLE `sign_up` (
  `k_id` int(11) NOT NULL,
  `TC` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sign_up`
--

INSERT INTO `sign_up` (`k_id`, `TC`, `username`, `surname`, `password`) VALUES
(2, '14725836998', 'ebru', 'ttnc', '202cb962ac59075b964b07152d234b70'),
(3, '78945612336', 'ebru', 'mig2', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, '66666666666', 'deneme', 'deneme', '000'),
(6, '11111111111', 'ebru', 'ttnc', 'c6f057b86584942e415435ffb1fa93d4'),
(7, '88888888888', 'ebrus', 'ebruskaa', '789'),
(10, '225588336', 'ebruşka', 'ebrus', '000'),
(11, '11111111115', 'ebru', 'ttnc', '000'),
(12, '20210201023', 'ebru', 'mig', '123456789'),
(13, '12304567890', 'ebru', 'ttnc', '123'),
(14, '02136547898', 'ahmet', 'kaya', '123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `doktor`
--
ALTER TABLE `doktor`
  ADD PRIMARY KEY (`d_id`);

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`r_id`);

--
-- Tablo için indeksler `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`k_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `doktor`
--
ALTER TABLE `doktor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Tablo için AUTO_INCREMENT değeri `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
