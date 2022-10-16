-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : sam. 15 oct. 2022 à 14:58
-- Version du serveur : 10.9.3-MariaDB-1:10.9.3+maria~ubu2204
-- Version de PHP : 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `data`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `user_id`, `header`, `text`, `time`) VALUES
(13, 15, 'HOW CLIMATE CHANGE IMPACTS WATER SCARCITY IN AFRICA', 'In the last 50 to 100 years the temperatures over Africa have increased by at least 0.5°C. According to the 5th IPCC Assessment Report Africa is particularly vulnerable to climate change. It has been prognosed that land temperatures over Africa will rise faster than the global average, particularly in the more arid regions such as Madagascar.\r\n\r\nIt is likely that extensive areas of Africa will exceed the 2°C temperature increase by 2080, when compared to the average temperature of the late 20th century. Depending on the climate scenario utilised in the modelling of predictions, temperatures may even rise by 3°C to 6°C by the end of this century.', '2022-10-15'),
(14, 15, 'Bitcoin et les cryptos, l’avenir de l’investissement ? Entretien avec Marcelo Sampaio (Hashdex)', 'Quelles thèses d’investissement suivre quand on gère les index crypto du NASDAQ et qu’on veut proposer des produits financiers structurés dédiés au Bitcoin et au Web3 aux plus grandes banques mondiales ? Suivez-nous le temps d’une discussion décontractée avec Marcelo Sampaio, fondateur d’Hashdex, groupe brésilien qui développe des index pour le marché des cryptomonnaies, gère près d’un milliard de dollars d’avoirs et s’est lancé sur les bourses européennes récemment.', '2022-10-15'),
(15, 15, 'Bitcoin’s Price Is Back Above $21,000 After Hitting 3-Month Low. Here’s What Investors Should Make of It', 'Bitcoin’s price rose back above $21,000 Friday — rallying from its drop below $19,000 on Tuesday, which was its lowest point since June.\r\n\r\nStill, some experts say September could be a tough month for the most popular and most valuable cryptocurrency. Economic challenges in the U.S. and abroad continue to throttle the stock market, which bitcoin and the crypto market have increasingly tracked in recent months.\r\n\r\nOne reason bitcoin continues to see rallies within the broader downward trend is that every move down is immediately met with large orders of bitcoin mainly from big wallet addresses, which are likely institutional investors, according to Martin Hiesboeck, head of blockchain and crypto research at Uphold. In other words, institutions are buying up bitcoin, while everyday investors are largely holding off.\r\n\r\n“Many investors are concerned the macro economic outlook won’t improve anytime soon, so they sell every price increase,” Hiesboeck says. “At the same time, institutions and savvy investors seem to think that bitcoin has formed a bottom and continues to accumulate. The fact it hasn’t dropped significantly over the past weeks as we digested some really bad news is a turning point.”', '2022-10-15');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL,
  `type` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(15, 'reewaz', '$2y$10$I1aZ4r2.NQQ2bncjpoyB9eeOZbeoKDbPvO1Uwaffl/33VxLowkJHS', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
