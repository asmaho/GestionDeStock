-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Avril 2016 à 12:36
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Homme'),
(4, 'Femme'),
(5, 'Enfant');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `quantite` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `factureNum` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `total` double NOT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`id`, `date`, `quantite`, `type`, `factureNum`, `description`, `prix`, `total`, `reference`, `adresse`) VALUES
(8, '2016-03-15', 12, 'Vente', 45, 'chaussure3', 60, 900, '13136azz', 'sousse'),
(10, '2015-01-01', 22, 'v', 2, 'aa', 1234, 4558, '123', 'kairouan'),
(11, '2015-01-01', 22, 'a', 2, 'aa', 1234, 4558, '123', 'sousse'),
(12, '2015-01-01', 12, 'Vente', 20, 'ff', 1235, 1587, '123', 'nabeul'),
(13, '2016-05-01', 12, 'Vente', 8, 'fd', 20, 1548, '123456', 'tunis'),
(14, '2011-01-01', 12, 'Achat', 1, 'produit', 20, 154023, '123', 'monastir');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(6, 'magasinier', 'magasinier', 'magasinier@mail.com', 'magasinier@mail.com', 1, '672yc5t0iaw48s8s4scogw0gogg408c', '$2y$13$672yc5t0iaw48s8s4scogut0qwG8nEGD.OQiBJSxqmv1epZWIdimu', '2016-04-13 13:26:09', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_MAGASINIER";}', 0, NULL),
(7, 'admin', 'admin', 'admin@mail.com', 'admin@mail.com', 1, 'lyhbup3tehw0co444s4w0cs0ksgw0cc', '$2y$13$lyhbup3tehw0co444s4w0OnF4GCdSY/cZLrka.afitgdqdklmAG.2', '2016-04-13 16:16:22', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(8, 'fournisseur', 'fournisseur', 'fournisseur@mail.com', 'fournisseur@mail.com', 1, '220nzlxvwhr4k4k4w4w4cssokk8ccos', '$2y$13$220nzlxvwhr4k4k4w4w4celGEdOu0Qb3qvcCU5CaUa2yt9xnB8yP6', '2016-04-14 12:16:46', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_FOURNISSEUR";}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_societe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nom`, `prenom`, `adresse`, `tel`, `sexe`, `nom_societe`) VALUES
(1, 'hassan', 'hasan', 'moknin', 22333777, 'Homme', 'BMB'),
(2, 'hassan', 'hasan', 'moknin', 23444666, 'Homme', 'BMB'),
(3, 'a', 'a', 'a', 1, 'Homme', 'za');

-- --------------------------------------------------------

--
-- Structure de la table `magasinier`
--

CREATE TABLE IF NOT EXISTS `magasinier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CIN` int(11) NOT NULL,
  `telephone` int(11) NOT NULL,
  `datenaissance` date NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `magasinier`
--

INSERT INTO `magasinier` (`id`, `nom`, `prenom`, `CIN`, `telephone`, `datenaissance`, `sexe`) VALUES
(1, 'houimel', 'asma', 11860493, 22775621, '1991-06-11', 'Femme'),
(2, 'abid', 'rimééé :D', 11860490, 54671471, '1991-06-11', 'Femme'),
(4, 'MAYEM', 'MAYEM', 6912044, 55678432, '2014-01-01', 'Homme'),
(5, 'houimel', 'asma', 8602302, 22775621, '1902-01-01', 'Femme');

-- --------------------------------------------------------

--
-- Structure de la table `point_de_vente`
--

CREATE TABLE IF NOT EXISTS `point_de_vente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Pv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gouvernorat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantiteStock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `point_de_vente`
--

INSERT INTO `point_de_vente` (`id`, `nom_Pv`, `gouvernorat`, `adress`, `tel`, `mail`, `quantiteStock`) VALUES
(1, 'shoes center kairouan', 'kairouan', 'rue commerciale', 77000111, 'kairouan@kairouan.com', 1230),
(2, 'shoes center moknin', 'moknin', 'rue commerciale', 73253254, 'moknin@moknin.com', 1254);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `barCode` int(11) NOT NULL,
  `quantiteStock` int(11) NOT NULL,
  `quantiteMin` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_29A5EC27BCF5E72D` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `categorie_id`, `nom`, `description`, `barCode`, `quantiteStock`, `quantiteMin`, `photo`) VALUES
(2, 4, 'bb', 'zezerez t ryrt tryrty', 123, 200, 10, 'zz'),
(3, 5, 'hhhhh', 'hgyjgjghn', 1235, 12, 6, 'ff'),
(6, 1, 'rim', 'fcdscsd', 1233, 45, 11, 'rr'),
(7, 5, 'asmeuuuu', 'fdsfqez', 1233, 15, 6, 'ff'),
(8, 5, 'asmeuuuuu', 'hgyjgjghn', 1235, 12, 6, 'ff'),
(9, 5, 'asmeuuuuu', 'hgyjgjghn', 1235, 12, 6, 'ff'),
(10, 5, 'rimaaaaaaaaaa', 'snkdnk', 123, 12, 2, 'bb'),
(11, 1, 'cc2', 'dhsqhdkjqsh', 123, 12, 1, 'bb2'),
(12, 1, 'fffff', 'fezfezf', 1223, 33, 11, 'fff'),
(13, 1, 'a', 'dgff', 12, 12, 5, 'a');

-- --------------------------------------------------------

--
-- Structure de la table `produit_facture`
--

CREATE TABLE IF NOT EXISTS `produit_facture` (
  `produit_id` int(11) NOT NULL,
  `facture_id` int(11) NOT NULL,
  PRIMARY KEY (`produit_id`,`facture_id`),
  KEY `IDX_7F05E86BF347EFB` (`produit_id`),
  KEY `IDX_7F05E86B7F2DEE08` (`facture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `produit_facture`
--

INSERT INTO `produit_facture` (`produit_id`, `facture_id`) VALUES
(2, 10),
(3, 13),
(6, 10),
(7, 13),
(8, 13),
(9, 13),
(10, 10),
(11, 10),
(12, 12),
(13, 10);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `produit_facture`
--
ALTER TABLE `produit_facture`
  ADD CONSTRAINT `FK_7F05E86B7F2DEE08` FOREIGN KEY (`facture_id`) REFERENCES `facture` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_7F05E86BF347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
