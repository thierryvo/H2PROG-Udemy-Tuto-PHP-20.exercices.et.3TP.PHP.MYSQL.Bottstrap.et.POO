-- Structure de la table `type_de_cours`
DROP TABLE IF EXISTS `type_de_cours`;
CREATE TABLE IF NOT EXISTS `type_de_cours` (
  `idtype` int(4) NOT NULL AUTO_INCREMENT,
  `libelletype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idtype`),
  UNIQUE KEY `libelletype` (`libelletype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;

-- Structure de la table `cours`
DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idcours` int(4) NOT NULL AUTO_INCREMENT,
  `idtype` int(4) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `imageNom` varchar(100) DEFAULT NULL,
  `imageChemin` varchar(250) DEFAULT NULL,  
  PRIMARY KEY (`idCours`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;


-- DONNEES
INSERT INTO `type_de_cours` (`libelletype`) VALUES
('PHP'),
('JavaScript'),
('SQL'),
('NodeJs'),
('Laravel'),
('Symfony'),
('Angular'),
('Jeux web'),
('DB2'),
('UDBDB2'),
('CLP'),
('RPG-III'),
('RPG-IV'),
('RPGILE'),
('RPG-FREE'),
('SQL-RPG-ILE');
--
INSERT INTO `cours` (`idcours`, `idtype`, `libelle`, `description`, `imageNom`, `imageChemin`) VALUES
(1, 2, 'Les fondamentaux du Javascript et de NODE JS', 'Réaliser une application web complète avec les technologies HRML, CSS, JAVASCRIPT, NODE JS, et une architecture client/serveur.', 'javascript-fondamentaux.jpg', 'javascript-fondamentaux.jpg'),
(2, 2, 'Exercices JavaScript', 'Exercices JavaScript corrigés en vidéo (20 faciles, 7 moyens, 3 complexes) pour réviser variables, tableaux, objets...', 'javascript-exercices.jpg', 'javascript-exercices.jpg'),
(3, 1, 'Le PHP', '9 heures de pratique de PHP avec: PHP Data Objects (PDO), Bootstrap, MYSQL, et la Programmation Orientér Objets (POO)', 'PHP-cequientoure.jpg', 'PHP-cequientoure.jpg'),
(4, 1, 'La refonte d\'un site web déjà en ligne', 'D\'un site statique à un site dynamique, MVC, HTML/CSS/Bootstrap, PHP, JS/JQuery, MYSQL/PDO (MPD).', 'PHP-refontedunsite.jpg', 'PHP-refontedunsite.jpg'),
(5, 3, '100 requêtes pour maîtriser SQL', 'LE cours complet pour apprendre le langage SQL par la pratique au travers de 100 requêtes différentes sur MYSQL', 'SQL-100requetes.jpg', 'SQL-100requetes.jpg'),
(6, 8, 'CREER des jeux web avec Phaser', 'CREER des jeux JavaScript grâce à Phaser (version 3), piloté avec un serveur node.js ou avec Apache.', 'JEUX-WEB-creerdesjeux.jpg', 'JEUX-WEB-creerdesjeux.jpg');
--


-- Contraintes pour la table `cours`
ALTER TABLE `cours`
  ADD CONSTRAINT `FK_type_de_cours` FOREIGN KEY (`idtype`) REFERENCES `type_de_cours` (`idtype`);
COMMIT;