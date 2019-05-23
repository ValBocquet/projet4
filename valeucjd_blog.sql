-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 23 mai 2019 à 19:18
-- Version du serveur :  10.2.24-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `valeucjd_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_upload` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date_upload`) VALUES
(5, 'Un fou de la night', '<p><strong>lorem lorem lorem lor</strong>em lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p>', '2019-04-30 11:07:29'),
(7, 'Essai d\'un nouvel article', '<p>Salut, les enfants je suis un gentil monsieur...</p>', '2019-05-01 18:14:43'),
(9, 'Essai d\'article', '<p>Je suis un <strong>article</strong></p>', '2019-05-23 15:57:08');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_publish_comm` datetime NOT NULL,
  `article_referent` int(11) NOT NULL,
  `danger` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `name`, `message`, `date_publish_comm`, `article_referent`, `danger`) VALUES
(1, 'Valentin', 'Je suis un super commentaire', '2019-04-28 09:30:29', 5, 1),
(13, 'asas', 'dzdzdazd', '2019-05-23 15:56:55', 9, 1),
(14, 'coucou', 'dzlkdzdka ', '2019-05-23 16:52:14', 9, 1),
(7, 'Valou', 'Commentaire non signalé !', '2019-05-02 21:14:21', 5, 0),
(9, 'Guy', 'Je suis un nouveau commentaire.', '2019-05-05 09:42:03', 7, 1),
(8, 'Val', 'J\'adore cet article ! Bravo !', '2019-05-03 17:06:14', 7, 0),
(10, 'Valentin', 'Voici le premier commentaire de production !', '2019-05-12 18:03:56', 7, 0),
(11, 'Valentin', 'Dernier essai de post commentaire.', '2019-05-17 18:45:54', 5, 0),
(15, 'Valentin', 'Commentaire de ouf ', '2019-05-23 16:52:54', 9, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
