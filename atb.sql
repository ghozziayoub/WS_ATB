SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `num_account` varchar(255) NOT NULL,
  `name_account` varchar(255) NOT NULL,
  `type_account` varchar(255) NOT NULL,
  `RIB` varchar(255) NOT NULL,
  `solde` varchar(255) NOT NULL,
  `devise_account` varchar(255) NOT NULL,
  `id_client` varchar(50) NOT NULL,
  PRIMARY KEY (`num_account`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

DROP TABLE IF EXISTS `historique`;
CREATE TABLE IF NOT EXISTS `historique` (
  `id` varchar(50) NOT NULL,
  `type_transaction` varchar(255) NOT NULL,
  `date_transaction` date NOT NULL,
  `montant` varchar(255) NOT NULL,
  `num_compte` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `num_compte` (`num_compte`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pass_account` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `encrypted_password` varchar(80) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;