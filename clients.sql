-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 avr. 2024 à 12:54
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clients`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`fname`, `lname`, `email`, `pass`) VALUES
('h', 'hh', 'a@gmail.com', '00'),
('h', 'hh', 'f@gmail.com', '22'),
('fedi', 'ksentini', 'fediksentini@gmail.com', '27064091'),
('fedi', 'hhghg', 'hhhg@gmail.com', '55555'),
('jj', 'jh', 'j@gmail.com', '22'),
('FEDI', 'kse', 't@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `truck`
--

CREATE TABLE `truck` (
  `idt` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `km` int(20) NOT NULL,
  `stock` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `truck`
--

INSERT INTO `truck` (`idt`, `type`, `price`, `km`, `stock`, `email`, `photo`) VALUES
(66, 'toy', 120000, 6000, 300, 'a@gmail.com', 'https://media.ed.edmunds-media.com/toyota/tacoma/2024/oem/2024_toyota_tacoma_crew-cab-pickup_limited_fq_oem_1_1600.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`idt`),
  ADD KEY `test` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
