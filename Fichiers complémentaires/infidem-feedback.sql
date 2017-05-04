-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Mai 2017 à 13:04
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `infidem-feedback`
--

-- --------------------------------------------------------

--
-- Structure de la table `acces`
--

CREATE TABLE `acces` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mandate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `acces`
--

INSERT INTO `acces` (`id`, `user_id`, `mandate_id`) VALUES
(1, 6, 2),
(2, 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `action_plan`
--

CREATE TABLE `action_plan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `target` varchar(100) DEFAULT NULL,
  `action` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `is_fixed` tinyint(4) DEFAULT NULL,
  `is_approved` tinyint(4) DEFAULT NULL,
  `mandate_id` int(11) DEFAULT NULL,
  `vuln_id` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `action_plan`
--

INSERT INTO `action_plan` (`id`, `name`, `target`, `action`, `date`, `comment`, `is_fixed`, `is_approved`, `mandate_id`, `vuln_id`) VALUES
(25, 'test', 'test', 'test', '2017-05-05', 'test', 0, 0, 2, 'test'),
(24, 'test', 'test', 'test', '2017-05-04', 'test', 1, 1, 2, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `code_review`
--

CREATE TABLE `code_review` (
  `id` int(11) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `mandate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `code_review`
--

INSERT INTO `code_review` (`id`, `url`, `mandate_id`) VALUES
(29, 'bonjour.com', 2);

-- --------------------------------------------------------

--
-- Structure de la table `mandates`
--

CREATE TABLE `mandates` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `contexte` varchar(500) NOT NULL,
  `besoin` varchar(500) NOT NULL,
  `external` tinyint(1) NOT NULL DEFAULT '0',
  `internal` tinyint(1) NOT NULL DEFAULT '0',
  `wireless` tinyint(1) NOT NULL DEFAULT '0',
  `web` tinyint(1) NOT NULL DEFAULT '0',
  `mobile` tinyint(1) NOT NULL DEFAULT '0',
  `review` tinyint(1) NOT NULL DEFAULT '0',
  `validation` tinyint(1) NOT NULL DEFAULT '0',
  `validation_state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mandates`
--

INSERT INTO `mandates` (`id`, `name`, `state`, `contexte`, `besoin`, `external`, `internal`, `wireless`, `web`, `mobile`, `review`, `validation`, `validation_state`) VALUES
(2, 'Test', 2, 'test', 'test', 1, 1, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Vendeur'),
(3, 'Testeur'),
(4, 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `compagny_name` varchar(150) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `image` blob,
  `role_id` int(11) NOT NULL,
  `password_reset_token` varchar(250) DEFAULT NULL,
  `hashval` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `compagny_name`, `email`, `image`, `role_id`, `password_reset_token`, `hashval`) VALUES
(6, 'pandastein', '$2y$10$JPn0oezoeq0wbyqAsiaeSOl/kfIOrmmaV/QngvdYHOSl7A.yAXLge', 'Name', 'Company', 'franck.jorge@hotmail.fr', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vuln_external`
--

CREATE TABLE `vuln_external` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `mandate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vuln_external`
--

INSERT INTO `vuln_external` (`id`, `ip`, `url`, `mandate_id`) VALUES
(69, 'Ext1', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `vuln_internal`
--

CREATE TABLE `vuln_internal` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `mandate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vuln_internal`
--

INSERT INTO `vuln_internal` (`id`, `ip`, `url`, `mandate_id`) VALUES
(71, 'Int1', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `vuln_mobile`
--

CREATE TABLE `vuln_mobile` (
  `id` int(11) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `mandate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vuln_mobile`
--

INSERT INTO `vuln_mobile` (`id`, `url`, `login`, `password`, `mandate_id`) VALUES
(68, 'Hey', 'lol', 'lol', 2);

-- --------------------------------------------------------

--
-- Structure de la table `vuln_web`
--

CREATE TABLE `vuln_web` (
  `id` int(11) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `mandate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vuln_web`
--

INSERT INTO `vuln_web` (`id`, `url`, `login`, `password`, `mandate_id`) VALUES
(69, 'franckj.com', 'pandastein', 'zeroshiki', 2);

-- --------------------------------------------------------

--
-- Structure de la table `vuln_wireless`
--

CREATE TABLE `vuln_wireless` (
  `id` int(11) NOT NULL,
  `ssid` varchar(50) NOT NULL,
  `mandate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vuln_wireless`
--

INSERT INTO `vuln_wireless` (`id`, `ssid`, `mandate_id`) VALUES
(107, 'Wl1', 2),
(108, 'Wl2', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acces`
--
ALTER TABLE `acces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `mandate_id` (`mandate_id`);

--
-- Index pour la table `action_plan`
--
ALTER TABLE `action_plan`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `code_review`
--
ALTER TABLE `code_review`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mandates`
--
ALTER TABLE `mandates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Index pour la table `vuln_external`
--
ALTER TABLE `vuln_external`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vuln_internal`
--
ALTER TABLE `vuln_internal`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vuln_mobile`
--
ALTER TABLE `vuln_mobile`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vuln_web`
--
ALTER TABLE `vuln_web`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vuln_wireless`
--
ALTER TABLE `vuln_wireless`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `acces`
--
ALTER TABLE `acces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `action_plan`
--
ALTER TABLE `action_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `code_review`
--
ALTER TABLE `code_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `mandates`
--
ALTER TABLE `mandates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `vuln_external`
--
ALTER TABLE `vuln_external`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT pour la table `vuln_internal`
--
ALTER TABLE `vuln_internal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT pour la table `vuln_mobile`
--
ALTER TABLE `vuln_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT pour la table `vuln_web`
--
ALTER TABLE `vuln_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT pour la table `vuln_wireless`
--
ALTER TABLE `vuln_wireless`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `acces`
--
ALTER TABLE `acces`
  ADD CONSTRAINT `acces_mandate_id` FOREIGN KEY (`mandate_id`) REFERENCES `mandates` (`id`),
  ADD CONSTRAINT `acces_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
