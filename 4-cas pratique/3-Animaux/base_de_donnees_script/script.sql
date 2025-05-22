-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 05 août 2019 à 09:25
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `animaux`
--

-- --------------------------------------------------------
--
-- Structure de la table `type_d_animal`
CREATE TABLE `type_d_animal` (
  `idtype` int(11) NOT NULL AUTO_INCREMENT,
  `libelletype` varchar(30) NOT NULL,
  PRIMARY KEY (`idtype`),
  UNIQUE KEY `libelletype` (`libelletype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;
-- Déchargement des données de la table `type`
INSERT INTO `type_d_animal` (`idtype`, `libelletype`) VALUES
(1, 'chien'),
(2, 'chat');


--
-- Structure de la table `animal`
CREATE TABLE `animal` (
  `idAnimal` int(11) NOT NULL AUTO_INCREMENT,
  `idtype` int(11) NOT NULL
  `nom` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  PRIMARY KEY (`idAnimal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;
-- Déchargement des données de la table `animal`
INSERT INTO `animal` (`idAnimal`, `nom`, `age`, `sexe`, `idtype`) VALUES
(1, 'Tya', 7, 0, 2),
(2, 'Milo', 3, 1, 2),
(3, 'Mina', 2, 0, 1),
(4, 'Felicia', 4, 0, 2),
(5, 'Lili', 1, 0, 2),
(6, 'Hoquet', 7, 1, 1);
-- Index pour la table `animal`
ALTER TABLE `animal`
  ADD KEY `FK_TYPE` (`idtype`);
  -- Contraintes pour la table `animal` ------------------------------------------------
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_TYPE_d_ANIMAL` FOREIGN KEY (`idtype`) REFERENCES `type_d_animal` (`idtype`);
-- -------------------------------------------------------------------------------------


--
-- Structure de la table `image`
CREATE TABLE `image` (
  `idImage` int(11) NOT NULL AUTO_INCREMENT,
  `imageNom` varchar(30) NOT NULL,
  `imageChemin` varchar(100) NOT NULL,
  PRIMARY KEY (`idImage`);
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;
-- Déchargement des données de la table `image`
INSERT INTO `image` (`idImage`, `imageNom`, `imageChemin`) VALUES
(1, 'Lili photo 1', 'Lili/Lili.jpg'),
(2, 'Lili photo 2', 'Lili/Lili2.jpg'),
(3, 'Lili photo 3', 'Lili/Lili3.jpg'),
(4, 'Milo photo 1', 'Milo/Milo.jpg'),
(5, 'Milo photo 2', 'Milo/Milo2.jpg'),
(6, 'Tya photo 1', 'Tya/Tya.jpg'),
(7, 'Tya photo 2', 'Tya/Tya2.jpg'),
(8, 'Tya photo 3', 'Tya/Tya3.jpg'),
(9, 'Felicia photo 1', 'Felicia/Felicia.jpg'),
(10, 'Mina Photo 1', 'Mina/Mina.jpg'),
(11, 'Mina Photo 2', 'Mina/Mina2.jpg'),
(12, 'Hoquet image 1', 'Hoquet/Hoquet.jpg');
-- --------------------------------------------------------


--
-- Structure de la table `image_animal`                   double-clé  : idAnimal,idImage
CREATE TABLE `image_animal` (
  `idAnimal` int(11) NOT NULL,
  `idImage` int(11) NOT NULL,
  PRIMARY KEY (`idAnimal`,`idImage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;
-- Déchargement des données de la table `image_animal`
INSERT INTO `image_animal` (`idAnimal`, `idImage`) VALUES
(1, 6),
(1, 7),
(1, 8),
(2, 4),
(2, 5),
(3, 10),
(3, 11),
(4, 9),
(5, 1),
(5, 2),
(5, 3),
(6, 12);
--  --------------------------------------------------------
-- Contraintes pour la table `image_animal`
ALTER TABLE `image_animal`
  ADD CONSTRAINT `FK_ANIMAL` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`idAnimal`),
  ADD CONSTRAINT `FK_IMAGE` FOREIGN KEY (`idImage`) REFERENCES `image` (`idImage`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
