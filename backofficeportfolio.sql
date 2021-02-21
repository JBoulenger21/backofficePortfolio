-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 21 fév. 2021 à 11:31
-- Version du serveur :  10.3.25-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `backofficeportfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `descra` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `contexte` varchar(255) NOT NULL,
  `choix` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `titre`, `descra`, `img`, `contexte`, `choix`) VALUES
(1, 'Explorateur de fichiers', 'Projet réalisé en groupe - Avec Laurine Herard.', 'explofichiers.PNG', 'Premier projet de Backend. L\'exercice visait de reproduire un explorateur de fichiers type Windows en PHP.', 'Avec Laurine, nous avons décidé de nous inspirer des explorateurs de fichiers connus, tel que celui de Windows. Niveau graphisme, nous avons choisi des couleurs pastels et chaudes, et des icones en flatdesign.'),
(2, 'Aglesia', 'Réalisé par lui-même', 'Oupsie.png', 'AGLESIA', 'azerty'),
(5, 'Aletwa', 'Réalisé par Aglesia et par Teph aussi (un peu)', 'Victory.png', 'Aletwa est trop fort', 'Super Bot en Python');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(2, 'Jboulenger21', 'boulenger.julie@gmail.com', '$2y$10$PW5E/Xvai.j.qPdgLdqfTe//UbJ7SrZtYwFurDrFog.7B1eSngzpG');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
