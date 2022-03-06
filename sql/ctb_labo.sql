-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 06 mars 2022 à 22:32
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ctb_labo`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre_art` varchar(255) NOT NULL,
  `image_art` varchar(255) NOT NULL,
  `contenu_art` text NOT NULL,
  `date_pub_art` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre_art`, `image_art`, `contenu_art`, `date_pub_art`) VALUES
(7, 'Titre_article_essai_2', 'thumb-1920-724313.jpg', 'Nous nous engageons Ã  effectuer vos analyses dans le total respect des rÃ¨gles de bonne pratique de laboratoire et de confidentialitÃ©. Notre prioritÃ© est de vous fournir des rÃ©sultats fiables et dans les meilleurs dÃ©lais pour que vous puissiez recevoir le meilleur traitement. Par ailleurs, nous ferons en sorte que votre passage dans nos laboratoires se passe dans les meilleures conditions.\r\n\r\nA lâ€™accueil, vous serez reÃ§u par des secrÃ©taires souriantes et attentives, que vous soyez venus pour des analyses, pour rÃ©cupÃ©rer vos rÃ©sultats ou pour demander des renseignements. Dans la salle de prÃ©lÃ¨vement, vous serez prise en charge par un personnel qualifiÃ©. LÃ  aussi, vous pouvez poser les questions qui vous prÃ©occupent.', '2022-03-25'),
(6, 'Titre_article_essai_1', 'thumb-1920-412054.jpg', 'Nous nous engageons Ã  effectuer vos analyses dans le total respect des rÃ¨gles de bonne pratique de laboratoire et de confidentialitÃ©. Notre prioritÃ© est de vous fournir des rÃ©sultats fiables et dans les meilleurs dÃ©lais pour que vous puissiez recevoir le meilleur traitement. Par ailleurs, nous ferons en sorte que votre passage dans nos laboratoires se passe dans les meilleures conditions.\r\n\r\nA lâ€™accueil, vous serez reÃ§u par des secrÃ©taires souriantes et attentives, que vous soyez venus pour des analyses, pour rÃ©cupÃ©rer vos rÃ©sultats ou pour demander des renseignements. Dans la salle de prÃ©lÃ¨vement, vous serez prise en charge par un personnel qualifiÃ©. LÃ  aussi, vous pouvez poser les questions qui vous prÃ©occupent.', '2022-03-14'),
(8, 'Titre_article_essai_3', 'thumb-1920-524527.jpg', 'Il est possible de faire une demande de carte groupage au Centre Technique BiomÃ©dical, mais en respectant certaines conditions. Pour cela, il est obligatoire de procÃ©der Ã  une premiÃ¨re et une deuxiÃ¨me dÃ©termination du groupe sanguin de la personne. Les deux prÃ©lÃ¨vements devant Ãªtre effectuÃ©s en 2 jours diffÃ©rents le test effectuÃ© par 2 techniciens diffÃ©rents.', '2022-03-19'),
(9, 'Titre_article_essai_5', 'about.jpg', 'Vous pourrez ajouter un paragraphe ici. Voici un exemple de texte comme aperÃ§u de la longueur : Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.', '2022-04-01');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_identifiant` varchar(55) NOT NULL,
  `login_password` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `login_identifiant`, `login_password`) VALUES
(1, 'CTB_admin', 'CTB_admin_mdp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
