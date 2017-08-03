-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Août 2017 à 03:59
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pharma`
--

-- --------------------------------------------------------

--
-- Structure de la table `annulation_vente`
--

CREATE TABLE IF NOT EXISTS `annulation_vente` (
  `CODE_ANNULATION` int(4) NOT NULL AUTO_INCREMENT,
  `CODE_VENTE` int(11) NOT NULL,
  `DATE_ANNULATION` date DEFAULT NULL,
  PRIMARY KEY (`CODE_ANNULATION`),
  KEY `FK_B2` (`CODE_VENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `banque`
--

CREATE TABLE IF NOT EXISTS `banque` (
  `CODE_BANQUE` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_BANQUE` text,
  `DESCRIPTION` text,
  PRIMARY KEY (`CODE_BANQUE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `banque`
--

INSERT INTO `banque` (`CODE_BANQUE`, `NUM_BANQUE`, `DESCRIPTION`) VALUES
(1, '854789655', 'UTB');

-- --------------------------------------------------------

--
-- Structure de la table `bordereau`
--

CREATE TABLE IF NOT EXISTS `bordereau` (
  `CODE_BORDEREAU` int(11) NOT NULL AUTO_INCREMENT,
  `NUMERO_BORDEREAU_COURSIER` text,
  `BENEFICIAIRE` text,
  PRIMARY KEY (`CODE_BORDEREAU`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `bordereau`
--

INSERT INTO `bordereau` (`CODE_BORDEREAU`, `NUMERO_BORDEREAU_COURSIER`, `BENEFICIAIRE`) VALUES
(1, 'AZR7854693PLO', 'Toto'),
(2, 'ERTG85479652', 'Gerant');

-- --------------------------------------------------------

--
-- Structure de la table `classe_produit`
--

CREATE TABLE IF NOT EXISTS `classe_produit` (
  `CODE_CLASSE` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_CLASS` text,
  `DESCRIPTION` text,
  PRIMARY KEY (`CODE_CLASSE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `classe_produit`
--

INSERT INTO `classe_produit` (`CODE_CLASSE`, `NUM_CLASS`, `DESCRIPTION`) VALUES
(1, NULL, 'bacterie'),
(2, NULL, 'Anti-biotique');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `CODE_CLI` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_COM` int(11) NOT NULL,
  `TITRE` text,
  `NOM_CLI` text,
  `PRENOM_CLI` text,
  `TYPE_PIECE` text,
  `NUM_PIECE` text,
  `DATE_PIECE` date DEFAULT NULL,
  `EMAIL` text,
  `ADRESSE` text,
  `TEL1` text,
  `TEL2` text,
  `STATUT` tinyint(1) DEFAULT NULL,
  `TOTAL_DU` float(8,2) DEFAULT NULL,
  `CREDIT_MAX` float(8,2) DEFAULT NULL,
  `DELAI_PAIEMENT` int(11) DEFAULT NULL,
  `REMISE` float DEFAULT NULL,
  `DROIT_CREDIT` tinyint(1) DEFAULT NULL,
  `DEPASSEMENT` float DEFAULT NULL,
  `DATE_CREATION` datetime DEFAULT NULL,
  PRIMARY KEY (`CODE_CLI`),
  KEY `FK_RABATTRE` (`CODE_COM`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`CODE_CLI`, `CODE_COM`, `TITRE`, `NOM_CLI`, `PRENOM_CLI`, `TYPE_PIECE`, `NUM_PIECE`, `DATE_PIECE`, `EMAIL`, `ADRESSE`, `TEL1`, `TEL2`, `STATUT`, `TOTAL_DU`, `CREDIT_MAX`, `DELAI_PAIEMENT`, `REMISE`, `DROIT_CREDIT`, `DEPASSEMENT`, `DATE_CREATION`) VALUES
(1, 1, 'monsieur', 'toto', 'tata', 'CNI', '989990ki7', '2017-07-05', 'yoyo@yaya.com', 'klikan', '90909090', '98989898', '1', 8900, 234456, 7, 20, 1, 10000, '2017-07-30 03:22:14'),
(3, 2, 'Mr', 'corbeau', 'yoann', 'CNI', '098889765', '2017-07-20', 'yoann@rookit.com', 'paris', '09988987', '90999988', '0', 0, 90000, 15, 30, 0, 1, NULL),
(4, 1, 'Mr', 'campus', 'bienvenue', 'PP', '12345678901', '2017-08-02', 'bienvenue@gmail.com', 'cite B campus', '97567456', '90856473', '0', 0, 5000, 15, 10, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commerciale`
--

CREATE TABLE IF NOT EXISTS `commerciale` (
  `CODE_COM` int(10) NOT NULL AUTO_INCREMENT,
  `NOM_COM` text,
  `PRENOM_COM` text,
  `DATE_EMB` date DEFAULT NULL,
  `TEL_COM` text,
  `TEL_URG` text,
  `ADRESSE` text,
  `EMAIL` text,
  `CHIFFRE` int(11) DEFAULT NULL,
  `POURCENTAGE` float DEFAULT NULL,
  PRIMARY KEY (`CODE_COM`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commerciale`
--

INSERT INTO `commerciale` (`CODE_COM`, `NOM_COM`, `PRENOM_COM`, `DATE_EMB`, `TEL_COM`, `TEL_URG`, `ADRESSE`, `EMAIL`, `CHIFFRE`, `POURCENTAGE`) VALUES
(1, 'Agbogan', 'oyoyo', '2017-07-05', '92593461', '98628723', 'telessou', 'scribe@scribe.tg', 0, 0.2),
(2, 'toto', 'baba', '2017-07-13', '97125812', '91486620', 'attiegou', 'atabre@gmail.com', 0, 0.5),
(4, 'nom', 'prenom', '2017-07-12', '91929394', '98979695', 'gta', 'id@domaine.com', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `compte_produit_`
--

CREATE TABLE IF NOT EXISTS `compte_produit_` (
  `CODE_C_FOURNISSEUR` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_FOURNISSEUR` int(11) NOT NULL,
  `CODE_USER` int(11) NOT NULL,
  `DATE_MAJ_COMPTE` date DEFAULT NULL,
  `MONTANT_MAJ_COMPTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODE_C_FOURNISSEUR`),
  KEY `FK_OPERER` (`CODE_FOURNISSEUR`),
  KEY `FK_SUIVRE` (`CODE_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE IF NOT EXISTS `connexion` (
  `CODE_CONNEXION` int(11) NOT NULL AUTO_INCREMENT,
  `LOGIN` text,
  `STATUT` tinyint(1) DEFAULT NULL,
  `IP` text,
  `DATE_CONNEXION` datetime DEFAULT NULL,
  `ACTION` text,
  PRIMARY KEY (`CODE_CONNEXION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

CREATE TABLE IF NOT EXISTS `depense` (
  `CODE_DEPENSE` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_USER` int(11) NOT NULL,
  `OBJET` text,
  `MONTANT` int(11) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `COMMENTAIRE` text,
  PRIMARY KEY (`CODE_DEPENSE`),
  KEY `FK_DEPENSER` (`CODE_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `encaissement`
--

CREATE TABLE IF NOT EXISTS `encaissement` (
  `CODE_ENCAISSEMENT` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_JOURNEE` int(11) NOT NULL,
  `CODE_PAIEMENT` int(11) NOT NULL,
  `CODE_VENTE` int(11) NOT NULL,
  `CODE_USER` int(11) NOT NULL,
  `TYPE` text,
  `DATE_ENCAISSEMENT` datetime DEFAULT NULL,
  `STATUT` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`CODE_ENCAISSEMENT`),
  KEY `FK_FAIRE` (`CODE_USER`),
  KEY `FK_JOURNALISER` (`CODE_JOURNEE`),
  KEY `FK_PAYER` (`CODE_PAIEMENT`),
  KEY `FK_RELATIONSHIP_2` (`CODE_VENTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `encaissement`
--

INSERT INTO `encaissement` (`CODE_ENCAISSEMENT`, `CODE_JOURNEE`, `CODE_PAIEMENT`, `CODE_VENTE`, `CODE_USER`, `TYPE`, `DATE_ENCAISSEMENT`, `STATUT`) VALUES
(1, 1, 1, 1, 1, 'Liquide', '2017-08-09 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `entree`
--

CREATE TABLE IF NOT EXISTS `entree` (
  `CODE_ENTREE` int(10) NOT NULL AUTO_INCREMENT,
  `DATE_ENTREE` date DEFAULT NULL,
  `NUMERO_FACTURE` text,
  `NUMERO_BORDEREAU` text,
  PRIMARY KEY (`CODE_ENTREE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `exploitant`
--

CREATE TABLE IF NOT EXISTS `exploitant` (
  `CODE_EXPLOITANT` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_EXPLOITANT` text,
  `LIBELLE` text,
  PRIMARY KEY (`CODE_EXPLOITANT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `exploitant`
--

INSERT INTO `exploitant` (`CODE_EXPLOITANT`, `NUM_EXPLOITANT`, `LIBELLE`) VALUES
(1, NULL, 'Dafra'),
(2, NULL, 'Medis');

-- --------------------------------------------------------

--
-- Structure de la table `famille_produit`
--

CREATE TABLE IF NOT EXISTS `famille_produit` (
  `CODE_FAMILLE` int(10) NOT NULL AUTO_INCREMENT,
  `NUM_FAMILLE` text,
  `NOM_FAMILLE` text,
  PRIMARY KEY (`CODE_FAMILLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `famille_produit`
--

INSERT INTO `famille_produit` (`CODE_FAMILLE`, `NUM_FAMILLE`, `NOM_FAMILLE`) VALUES
(1, NULL, 'Gellule'),
(2, NULL, 'Effervescent');

-- --------------------------------------------------------

--
-- Structure de la table `forme`
--

CREATE TABLE IF NOT EXISTS `forme` (
  `CODE_FORME` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_FORME` text,
  `NUM_FORME` text,
  PRIMARY KEY (`CODE_FORME`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `forme`
--

INSERT INTO `forme` (`CODE_FORME`, `NOM_FORME`, `NUM_FORME`) VALUES
(1, 'Ronde', NULL),
(2, 'Liquide', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `CODE_FOURNISSEUR` int(11) NOT NULL AUTO_INCREMENT,
  `RAISON_SOCIAL` text,
  `CONCTACT` text,
  `TEL` text,
  `TEL_URG` text,
  `EMAIL` text,
  `ADRESSE` text,
  `SOLDE_COMPTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODE_FOURNISSEUR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`CODE_FOURNISSEUR`, `RAISON_SOCIAL`, `CONCTACT`, `TEL`, `TEL_URG`, `EMAIL`, `ADRESSE`, `SOLDE_COMPTE`) VALUES
(1, 'Coaret', NULL, 'kristar@live.fr', 'Tosti rue 228 ', '7459633', '7459633', 0);

-- --------------------------------------------------------

--
-- Structure de la table `historique_modif`
--

CREATE TABLE IF NOT EXISTS `historique_modif` (
  `CODE_HISTORIQUE` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_VENTE` int(11) NOT NULL,
  `ANCIEN` int(11) DEFAULT NULL,
  `QTEANCAV` float DEFAULT NULL,
  `QTEANCAP` float DEFAULT NULL,
  `NOUVEAU` float DEFAULT NULL,
  `QTENOUVAV` float DEFAULT NULL,
  `QTENOUVAP` float DEFAULT NULL,
  `DATE_OPERATION` datetime DEFAULT NULL,
  `LOGIN` text,
  PRIMARY KEY (`CODE_HISTORIQUE`),
  KEY `FK_HISTORISER` (`CODE_VENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `journee`
--

CREATE TABLE IF NOT EXISTS `journee` (
  `CODE_JOURNEE` int(11) NOT NULL AUTO_INCREMENT,
  `DATE` date DEFAULT NULL,
  `DATE_OUVERTURE` datetime DEFAULT NULL,
  `DATE_FERMETURE` datetime DEFAULT NULL,
  `DATE_CLOTURE` datetime DEFAULT NULL,
  `STATUT` tinyint(1) DEFAULT NULL,
  `MONTANT_FERMETURE` float(8,2) DEFAULT NULL,
  `MONTANT_CLOTURE` float(8,2) DEFAULT NULL,
  `MONTANT_MANQUANT` float(8,2) DEFAULT NULL,
  `MONTANT_SURPLUS` float(8,2) DEFAULT NULL,
  `CODE_USER_OUVRIR`     int(11) not null,
  `CODE_USER_FERMER`     int(11),
  `CODE_USER_CLOTURER`   int(11),
  PRIMARY KEY (`CODE_JOURNEE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `journee`
--

INSERT INTO `journee` (`CODE_JOURNEE`, `DATE`, `DATE_OUVERTURE`, `DATE_FERMETURE`, `DATE_CLOTURE`, `STATUT`, `MONTANT_FERMETURE`, `MONTANT_CLOTURE`, `MONTANT_MANQUANT`, `MONTANT_SURPLUS`) VALUES
(1, '2017-08-09', '2017-08-09 00:00:00', '2017-08-16 00:00:00', '2017-08-10 00:00:00', 0, 250000.00, 254000.00, 0.00, 300.00);

-- --------------------------------------------------------

--
-- Structure de la table `laboratoire`
--

CREATE TABLE IF NOT EXISTS `laboratoire` (
  `CODE_LAB` int(10) NOT NULL AUTO_INCREMENT,
  `NUMERO_LAB` text,
  `NOM_LABORATOIRE` text,
  PRIMARY KEY (`CODE_LAB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `laboratoire`
--

INSERT INTO `laboratoire` (`CODE_LAB`, `NUMERO_LAB`, `NOM_LABORATOIRE`) VALUES
(1, NULL, 'Bio-Pharma'),
(2, NULL, 'Dietetique');

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE IF NOT EXISTS `localisation` (
  `CODE_LOCALISATION` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_LOCALISATION` text,
  `NOM_LOCALISATION` text,
  PRIMARY KEY (`CODE_LOCALISATION`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `localisation`
--

INSERT INTO `localisation` (`CODE_LOCALISATION`, `NUM_LOCALISATION`, `NOM_LOCALISATION`) VALUES
(1, NULL, 'Etagère 4'),
(2, NULL, 'Etagère 2');

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `CODE_LOG` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_USER` int(11) NOT NULL,
  `LOGIN` text,
  `HEURE` datetime DEFAULT NULL,
  `EVENEMENT` text,
  `STATUT` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`CODE_LOG`),
  KEY `FK_POSSEDER` (`CODE_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `mode_payement`
--

CREATE TABLE IF NOT EXISTS `mode_payement` (
  `CODE_PAIEMENT` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_BANQUE` int(11) DEFAULT NULL,
  `DESCRIPTION` text,
  `NUM_CHEQUE` int(11) DEFAULT NULL,
  `MONTANT` int(11) DEFAULT NULL,
  `DATE_CHEQUE` date DEFAULT NULL,
  PRIMARY KEY (`CODE_PAIEMENT`),
  KEY `FK_ASSOCIER` (`CODE_BANQUE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `mode_payement`
--

INSERT INTO `mode_payement` (`CODE_PAIEMENT`, `CODE_BANQUE`, `DESCRIPTION`, `NUM_CHEQUE`, `MONTANT`, `DATE_CHEQUE`) VALUES
(1, 1, 'UTB', 25478965, 30000, '2017-08-16');

-- --------------------------------------------------------

--
-- Structure de la table `motif`
--

CREATE TABLE IF NOT EXISTS `motif` (
  `CODE_MOTIF` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPTION` text,
  PRIMARY KEY (`CODE_MOTIF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `mouvement`
--

CREATE TABLE IF NOT EXISTS `mouvement` (
  `CODE_MOUVEMENT` int(10) NOT NULL AUTO_INCREMENT,
  `CODE_SORTIE` int(11) DEFAULT NULL,
  `CODE_ENTREE` int(11) DEFAULT NULL,
  `CODE_VENTE` int(11) DEFAULT NULL,
  `LIBELLE` text,
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`CODE_MOUVEMENT`),
  KEY `FK_MVE` (`CODE_ENTREE`),
  KEY `FK_MVS` (`CODE_SORTIE`),
  KEY `FK_MVV` (`CODE_VENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `operationcompte`
--

CREATE TABLE IF NOT EXISTS `operationcompte` (
  `CODE_COMPTE` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_CLI` int(11) NOT NULL,
  `SOLDE` float(8,2) DEFAULT NULL,
  `MONTANT_VERSE` float(8,2) DEFAULT NULL,
  `RESTE` float(8,2) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`CODE_COMPTE`),
  KEY `FK_LIER` (`CODE_CLI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `privileges`
--

CREATE TABLE IF NOT EXISTS `privileges` (
  `CODE_PRIVILEGE` int(11) NOT NULL AUTO_INCREMENT,
  `DESIGNATION` text,
  `LEVEL` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODE_PRIVILEGE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `privileges`
--

INSERT INTO `privileges` (`CODE_PRIVILEGE`, `DESIGNATION`, `LEVEL`) VALUES
(1, 'administrateur', 5);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `CODE_PRODUIT` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_FAMILLE` int(11) NOT NULL,
  `CODE_FORME` int(11) NOT NULL,
  `CODE_CLASSE` int(11) DEFAULT NULL,
  `CODE_EXPLOITANT` int(11) NOT NULL,
  `PRO_CODE_PRODUIT` int(11) DEFAULT NULL,
  `CODE_LOCALISATION` int(11) NOT NULL,
  `CODE_SPECIALITE` int(11) NOT NULL,
  `CODE_LAB` int(11) NOT NULL,
  `DESIGNATION` text,
  `DCI` text,
  `SOUMIS_TVA` tinyint(1) DEFAULT NULL,
  `DATE_COMMERCIALISATION` date DEFAULT NULL,
  `PHOTO` text,
  `DATE_ENREGISTREMENT` datetime DEFAULT NULL,
  `DATE_MJ` date DEFAULT NULL,
  `DATE_PEREMPTION` date DEFAULT NULL,
  `QTE_STOCK` int(11) DEFAULT NULL,
  `PRIX_PRODUIT` float DEFAULT NULL,
  `CIP` varchar(40) DEFAULT NULL,
  `CODE_BARRE` int(11) DEFAULT NULL,
  `TAUX_TVA` float(3) DEFAULT 0,
  PRIMARY KEY (`CODE_PRODUIT`),
  KEY `FK_APPARTENIR` (`CODE_FAMILLE`),
  KEY `FK_AVOIR_CLASSE` (`CODE_CLASSE`),
  KEY `FK_AVOIR_FORME` (`CODE_FORME`),
  KEY `FK_ETRE_GENERIQUE` (`PRO_CODE_PRODUIT`),
  KEY `FK_EXPLOITER` (`CODE_EXPLOITANT`),
  KEY `FK_FABRIQUER` (`CODE_LAB`),
  KEY `FK_LOCALISER` (`CODE_LOCALISATION`),
  KEY `FK_SPECIALISER` (`CODE_SPECIALITE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`CODE_PRODUIT`, `CODE_FAMILLE`, `CODE_FORME`, `CODE_CLASSE`, `CODE_EXPLOITANT`, `PRO_CODE_PRODUIT`, `CODE_LOCALISATION`, `CODE_SPECIALITE`, `CODE_LAB`, `DESIGNATION`, `DCI`, `SOUMIS_TVA`, `DATE_COMMERCIALISATION`, `PHOTO`, `DATE_ENREGISTREMENT`, `DATE_MJ`, `DATE_PEREMPTION`, `QTE_STOCK`, `PRIX_PRODUIT`, `CIP`, `CODE_BARRE`) VALUES
(1, 1, 1, 2, 2, NULL, 2, 1, 2, 'Efferlagant', 'H20', 1, '2017-06-15', NULL, '2017-07-09 00:00:00', '2017-07-15', '2017-12-22', 25, 2541, '', NULL),
(2, 2, 1, 2, 2, NULL, 1, 2, 2, 'Neopred', 'Molecule', 1, '2017-06-04', NULL, '2017-07-25 00:00:00', '2017-07-28', '2017-10-21', 30, 3652, '', NULL),
(5, 1, 2, NULL, 1, 2, 2, 2, 1, 'Agbapoumé', 'Molécule', 1, '2017-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 2, 1, 2, 1, 2, 2, 1, 'Gnanga po Ball', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `produit_entree_fournisseur`
--

CREATE TABLE IF NOT EXISTS `produit_entree_fournisseur` (
  `CODE_PRODUIT` int(11) NOT NULL,
  `CODE_ENTREE` int(11) NOT NULL,
  `CODE_FOURNISSEUR` int(11) NOT NULL,
  `NOMBRE_ENTREE` int(11) DEFAULT NULL,
  `QTE_ACHAT` int(11) DEFAULT NULL,
  `QTE_GRATUIT` int(11) DEFAULT NULL,
  `DATE_MAJ` date DEFAULT NULL,
  `MONTANT_DU` int(11) DEFAULT NULL,
  `ACHAT_CREDIT` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`CODE_PRODUIT`,`CODE_ENTREE`,`CODE_FOURNISSEUR`),
  KEY `FK_PRODUIT_ENTREE_FOURNISSEUR` (`CODE_FOURNISSEUR`),
  KEY `FK_PRODUIT_ENTREE_FOURNISSEUR3` (`CODE_ENTREE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit_sortie`
--

CREATE TABLE IF NOT EXISTS `produit_sortie` (
  `CODE_SORTIE` int(11) NOT NULL,
  `CODE_PRODUIT` int(11) NOT NULL,
  `QTE_SORTIE` int(11) DEFAULT NULL,
  `DATE_SORTIE` date DEFAULT NULL,
  PRIMARY KEY (`CODE_SORTIE`,`CODE_PRODUIT`),
  KEY `FK_PRODUIT_SORTIE` (`CODE_PRODUIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit_vendu`
--

CREATE TABLE IF NOT EXISTS `produit_vendu` (
  `CODE_PRODUIT` int(11) NOT NULL,
  `CODE_VENTE` int(11) NOT NULL,
  `NB_VENDU` int(11) DEFAULT NULL,
  `MONTANT_VENTE` float DEFAULT NULL,
  PRIMARY KEY (`CODE_PRODUIT`,`CODE_VENTE`),
  KEY `FK_PRODUIT_VENDU` (`CODE_VENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit_vendu`
--

INSERT INTO `produit_vendu` (`CODE_PRODUIT`, `CODE_VENTE`, `NB_VENDU`, `MONTANT_VENTE`) VALUES
(2, 1, 2, 2536);

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE IF NOT EXISTS `societe` (
  `CODE_SOCIETE` int(11) NOT NULL AUTO_INCREMENT,
  `RAISON_SOCIAL` text,
  `TEL1` text,
  `TEL2` text,
  `BP` text,
  `VILLE` text,
  `PAYS` text,
  `SITUATION_GEO` text,
  `COPYRIGHT` text,
  `LOGO` text,
  PRIMARY KEY (`CODE_SOCIETE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE IF NOT EXISTS `sortie` (
  `CODE_SORTIE` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_MOTIF` int(11) NOT NULL,
  `DATE_SORTIE` date DEFAULT NULL,
  PRIMARY KEY (`CODE_SORTIE`),
  KEY `FK_JUSTIFIER` (`CODE_MOTIF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `CODE_SPECIALITE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_SPECIALITE` text,
  `NUM_SPECIALITE` text,
  PRIMARY KEY (`CODE_SPECIALITE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`CODE_SPECIALITE`, `NOM_SPECIALITE`, `NUM_SPECIALITE`) VALUES
(1, 'Fièvre', NULL),
(2, 'Paludisme', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `travailler`
--

CREATE TABLE IF NOT EXISTS `travailler` (
  `CODE_USER` int(11) NOT NULL,
  `CODE_JOURNEE` int(11) NOT NULL,
  PRIMARY KEY (`CODE_USER`,`CODE_JOURNEE`),
  KEY `FK_TRAVAILLER` (`CODE_JOURNEE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `CODE_USER` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_PRIVILEGE` int(11) NOT NULL,
  `NOM_USER` text,
  `PRENOM_USER` text,
  `LOGIN` text,
  `PWD` text,
  `STATUT` tinyint(1) DEFAULT NULL,
  `DATE_ENREGISTREMENT` datetime DEFAULT NULL,
  PRIMARY KEY (`CODE_USER`),
  KEY `FK_AVOIR` (`CODE_PRIVILEGE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`CODE_USER`, `CODE_PRIVILEGE`, `NOM_USER`, `PRENOM_USER`, `LOGIN`, `PWD`, `STATUT`, `DATE_ENREGISTREMENT`) VALUES
(1, 1, 'cartelas', 'herve', 'admin', 'admin', NULL, '2017-07-28 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE IF NOT EXISTS `vente` (
  `CODE_VENTE` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_ANNULATION` int(11) DEFAULT NULL,
  `CODE_JOURNEE` int(11) NOT NULL,
  `CODE_CLI` int(11) NOT NULL,
  `CODE_ENCAISSEMENT` int(11) DEFAULT NULL,
  `CODE_USER` int(11) NOT NULL,
  `CODE_BORDEREAU` int(11) NOT NULL,
  `DATE_VENTE` date DEFAULT NULL,
  `POURCENTAGE` float DEFAULT NULL,
  `STATUT` tinyint(1) DEFAULT NULL,
  `HEURE_VENTE` time DEFAULT NULL,
  PRIMARY KEY (`CODE_VENTE`),
  KEY `FK_B` (`CODE_ANNULATION`),
  KEY `FK_CONTRACTER` (`CODE_CLI`),
  KEY `FK_EFFECTUER` (`CODE_USER`),
  KEY `FK_JV` (`CODE_JOURNEE`),
  KEY `FK_MATERIALISER` (`CODE_BORDEREAU`),
  KEY `FK_RELATIONSHIP_1` (`CODE_ENCAISSEMENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `vente`
--

INSERT INTO `vente` (`CODE_VENTE`, `CODE_ANNULATION`, `CODE_JOURNEE`, `CODE_CLI`, `CODE_ENCAISSEMENT`, `CODE_USER`, `CODE_BORDEREAU`, `DATE_VENTE`, `POURCENTAGE`, `STATUT`, `HEURE_VENTE`) VALUES
(1, NULL, 1, 1, NULL, 1, 1, '2017-08-03', 0, 0, '18:24:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annulation_vente`
--
ALTER TABLE `annulation_vente`
  ADD CONSTRAINT `FK_B2` FOREIGN KEY (`CODE_VENTE`) REFERENCES `vente` (`CODE_VENTE`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_RABATTRE` FOREIGN KEY (`CODE_COM`) REFERENCES `commerciale` (`CODE_COM`);

--
-- Contraintes pour la table `compte_produit_`
--
ALTER TABLE `compte_produit_`
  ADD CONSTRAINT `FK_SUIVRE` FOREIGN KEY (`CODE_USER`) REFERENCES `utilisateur` (`CODE_USER`),
  ADD CONSTRAINT `FK_OPERER` FOREIGN KEY (`CODE_FOURNISSEUR`) REFERENCES `fournisseur` (`CODE_FOURNISSEUR`);

--
-- Contraintes pour la table `depense`
--
ALTER TABLE `depense`
  ADD CONSTRAINT `FK_DEPENSER` FOREIGN KEY (`CODE_USER`) REFERENCES `utilisateur` (`CODE_USER`);

--
-- Contraintes pour la table `encaissement`
--
ALTER TABLE `encaissement`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`CODE_VENTE`) REFERENCES `vente` (`CODE_VENTE`),
  ADD CONSTRAINT `FK_FAIRE` FOREIGN KEY (`CODE_USER`) REFERENCES `utilisateur` (`CODE_USER`),
  ADD CONSTRAINT `FK_JOURNALISER` FOREIGN KEY (`CODE_JOURNEE`) REFERENCES `journee` (`CODE_JOURNEE`),
  ADD CONSTRAINT `FK_PAYER` FOREIGN KEY (`CODE_PAIEMENT`) REFERENCES `mode_payement` (`CODE_PAIEMENT`);

--
-- Contraintes pour la table `historique_modif`
--
ALTER TABLE `historique_modif`
  ADD CONSTRAINT `FK_HISTORISER` FOREIGN KEY (`CODE_VENTE`) REFERENCES `vente` (`CODE_VENTE`);

--
-- Contraintes pour la table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `FK_POSSEDER` FOREIGN KEY (`CODE_USER`) REFERENCES `utilisateur` (`CODE_USER`);

--
-- Contraintes pour la table `mode_payement`
--
ALTER TABLE `mode_payement`
  ADD CONSTRAINT `FK_ASSOCIER` FOREIGN KEY (`CODE_BANQUE`) REFERENCES `banque` (`CODE_BANQUE`);

--
-- Contraintes pour la table `mouvement`
--
ALTER TABLE `mouvement`
  ADD CONSTRAINT `FK_MVV` FOREIGN KEY (`CODE_VENTE`) REFERENCES `vente` (`CODE_VENTE`),
  ADD CONSTRAINT `FK_MVE` FOREIGN KEY (`CODE_ENTREE`) REFERENCES `entree` (`CODE_ENTREE`),
  ADD CONSTRAINT `FK_MVS` FOREIGN KEY (`CODE_SORTIE`) REFERENCES `sortie` (`CODE_SORTIE`);

--
-- Contraintes pour la table `operationcompte`
--
ALTER TABLE `operationcompte`
  ADD CONSTRAINT `FK_LIER` FOREIGN KEY (`CODE_CLI`) REFERENCES `client` (`CODE_CLI`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_SPECIALISER` FOREIGN KEY (`CODE_SPECIALITE`) REFERENCES `specialite` (`CODE_SPECIALITE`),
  ADD CONSTRAINT `FK_APPARTENIR` FOREIGN KEY (`CODE_FAMILLE`) REFERENCES `famille_produit` (`CODE_FAMILLE`),
  ADD CONSTRAINT `FK_AVOIR_CLASSE` FOREIGN KEY (`CODE_CLASSE`) REFERENCES `classe_produit` (`CODE_CLASSE`),
  ADD CONSTRAINT `FK_AVOIR_FORME` FOREIGN KEY (`CODE_FORME`) REFERENCES `forme` (`CODE_FORME`),
  ADD CONSTRAINT `FK_ETRE_GENERIQUE` FOREIGN KEY (`PRO_CODE_PRODUIT`) REFERENCES `produit` (`CODE_PRODUIT`),
  ADD CONSTRAINT `FK_EXPLOITER` FOREIGN KEY (`CODE_EXPLOITANT`) REFERENCES `exploitant` (`CODE_EXPLOITANT`),
  ADD CONSTRAINT `FK_FABRIQUER` FOREIGN KEY (`CODE_LAB`) REFERENCES `laboratoire` (`CODE_LAB`),
  ADD CONSTRAINT `FK_LOCALISER` FOREIGN KEY (`CODE_LOCALISATION`) REFERENCES `localisation` (`CODE_LOCALISATION`);

--
-- Contraintes pour la table `produit_entree_fournisseur`
--
ALTER TABLE `produit_entree_fournisseur`
  ADD CONSTRAINT `FK_PRODUIT_ENTREE_FOURNISSEUR3` FOREIGN KEY (`CODE_ENTREE`) REFERENCES `entree` (`CODE_ENTREE`),
  ADD CONSTRAINT `FK_PRODUIT_ENTREE_FOURNISSEUR` FOREIGN KEY (`CODE_FOURNISSEUR`) REFERENCES `fournisseur` (`CODE_FOURNISSEUR`),
  ADD CONSTRAINT `FK_PRODUIT_ENTREE_FOURNISSEUR2` FOREIGN KEY (`CODE_PRODUIT`) REFERENCES `produit` (`CODE_PRODUIT`);

--
-- Contraintes pour la table `produit_sortie`
--
ALTER TABLE `produit_sortie`
  ADD CONSTRAINT `FK_PRODUIT_SORTIE2` FOREIGN KEY (`CODE_SORTIE`) REFERENCES `sortie` (`CODE_SORTIE`),
  ADD CONSTRAINT `FK_PRODUIT_SORTIE` FOREIGN KEY (`CODE_PRODUIT`) REFERENCES `produit` (`CODE_PRODUIT`);

--
-- Contraintes pour la table `produit_vendu`
--
ALTER TABLE `produit_vendu`
  ADD CONSTRAINT `FK_PRODUIT_VENDU2` FOREIGN KEY (`CODE_PRODUIT`) REFERENCES `produit` (`CODE_PRODUIT`),
  ADD CONSTRAINT `FK_PRODUIT_VENDU` FOREIGN KEY (`CODE_VENTE`) REFERENCES `vente` (`CODE_VENTE`);

--
-- Contraintes pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD CONSTRAINT `FK_JUSTIFIER` FOREIGN KEY (`CODE_MOTIF`) REFERENCES `motif` (`CODE_MOTIF`);

--
-- Contraintes pour la table `travailler`
--
ALTER TABLE `travailler`
  ADD CONSTRAINT `FK_TRAVAILLER2` FOREIGN KEY (`CODE_USER`) REFERENCES `utilisateur` (`CODE_USER`),
  ADD CONSTRAINT `FK_TRAVAILLER` FOREIGN KEY (`CODE_JOURNEE`) REFERENCES `journee` (`CODE_JOURNEE`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_AVOIR` FOREIGN KEY (`CODE_PRIVILEGE`) REFERENCES `privileges` (`CODE_PRIVILEGE`);

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`CODE_ENCAISSEMENT`) REFERENCES `encaissement` (`CODE_ENCAISSEMENT`),
  ADD CONSTRAINT `FK_B` FOREIGN KEY (`CODE_ANNULATION`) REFERENCES `annulation_vente` (`CODE_ANNULATION`),
  ADD CONSTRAINT `FK_CONTRACTER` FOREIGN KEY (`CODE_CLI`) REFERENCES `client` (`CODE_CLI`),
  ADD CONSTRAINT `FK_EFFECTUER` FOREIGN KEY (`CODE_USER`) REFERENCES `utilisateur` (`CODE_USER`),
  ADD CONSTRAINT `FK_JV` FOREIGN KEY (`CODE_JOURNEE`) REFERENCES `journee` (`CODE_JOURNEE`),
  ADD CONSTRAINT `FK_MATERIALISER` FOREIGN KEY (`CODE_BORDEREAU`) REFERENCES `bordereau` (`CODE_BORDEREAU`);


ALTER TABLE `journee` 
  ADD CONSTRAINT `FK_FERMER_JOURNEE` FOREIGN KEY (`CODE_USER_FERMER`) REFERENCES `utilisateur` (`CODE_USER`),
  ADD CONSTRAINT `FK_OUVRIR_JOURNEE` FOREIGN KEY (`CODE_USER_OUVRIR`) REFERENCES `utilisateur` (`CODE_USER`),
  ADD CONSTRAINT `FK_CLOTURER_JOURNEE` FOREIGN KEY (`CODE_USER_CLOTURER`) REFERENCES `utilisateur` (`CODE_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
