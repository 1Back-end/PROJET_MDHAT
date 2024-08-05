-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 août 2024 à 21:25
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
-- Base de données : `projet_mdhat`
--

-- --------------------------------------------------------

--
-- Structure de la table `tlbl_forgot_password`
--

CREATE TABLE `tlbl_forgot_password` (
  `id` varchar(255) NOT NULL,
  `id_personnel` varchar(255) NOT NULL,
  `token` int(10) DEFAULT NULL,
  `date_expiration` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_ajout` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tlbl_personnel`
--

CREATE TABLE `tlbl_personnel` (
  `id` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `role` int(10) NOT NULL DEFAULT 2,
  `password` varchar(255) NOT NULL,
  `is_active` int(10) NOT NULL DEFAULT 1,
  `is_deleted` int(10) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_ajout` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modification` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tlbl_forgot_password`
--
ALTER TABLE `tlbl_forgot_password`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_personnel` (`id_personnel`);

--
-- Index pour la table `tlbl_personnel`
--
ALTER TABLE `tlbl_personnel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tlbl_forgot_password`
--
ALTER TABLE `tlbl_forgot_password`
  ADD CONSTRAINT `tlbl_forgot_password_ibfk_1` FOREIGN KEY (`id_personnel`) REFERENCES `tlbl_personnel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
