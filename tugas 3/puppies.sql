-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Okt 2018 pada 08.41
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puppies`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `animals`
--

CREATE TABLE `animals` (
  `ID` int(11) NOT NULL,
  `BreedID` int(11) DEFAULT NULL,
  `PuppyName` varchar(256) DEFAULT NULL,
  `Description` varchar(256) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Picture` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `animals`
--

INSERT INTO `animals` (`ID`, `BreedID`, `PuppyName`, `Description`, `Price`, `Picture`) VALUES
(1, 4, 'Jhonny', 'Good for a farm', '100.00', 'Jhonny.jpg'),
(2, 3, 'Bully', 'A fighter, excellent watchdog', '599.00', 'Bully.jpg'),
(3, 2, 'Bo-Bo', 'Suit sweet old lady', '150.00', 'Bo-Bo.jpg'),
(4, 6, 'Albert', 'Family dog', '20.00', 'Albert.jpg'),
(5, 1, 'Fritz', 'Watchdog', '129.00', 'Fritz.jpg'),
(6, 7, 'Sam', 'Good for nothing', '10.00', 'Sam.jpg'),
(7, 8, 'Teddy', 'Cuddly', '150.00', 'Teddy.jpg'),
(19, 3, 'gugugk', 'anak-an', '0.00', 'Jhonny.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `breeds`
--

CREATE TABLE `breeds` (
  `Breed` int(11) NOT NULL,
  `BreedName` varchar(45) DEFAULT NULL,
  `Temperament` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `breeds`
--

INSERT INTO `breeds` (`Breed`, `BreedName`, `Temperament`) VALUES
(1, 'Doberman', 'Aggressive'),
(2, 'Poodle', 'Nervous'),
(3, 'Pit Bull', 'Nasty'),
(4, 'Cattle Dog', 'Friendly'),
(5, 'Alsatian', 'Faithful'),
(6, 'Beagle', 'Smooches'),
(7, 'Schnauzer', 'Fluffy'),
(8, 'Jack Russell', 'Psychopathic'),
(9, 'Rat Terrier', 'Less Aggressive than Jack Russell');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_RELATIONSHIP_1` (`BreedID`);

--
-- Indexes for table `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`Breed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `breeds`
--
ALTER TABLE `breeds`
  MODIFY `Breed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`BreedID`) REFERENCES `breeds` (`Breed`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
