/*
CREATION DES TABLES 	
*/
<meta charset="utf-8" />
CREATE DATABASE `ebayece`;

CREATE TABLE `ebayece`.`Humain` ( `ID` INT NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(50) NOT NULL , `Prenom` VARCHAR(50) NOT NULL , `Login` VARCHAR(50) NOT NULL , `Mot_de_passe` VARCHAR(50) NOT NULL , `N_Telephone` VARCHAR(10) NOT NULL , `Mail` VARCHAR(50) NOT NULL , `Media` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`Vendeur` ( `Humain` INT(10) NOT NULL , INDEX (`Humain`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`Admin` ( `Humain` INT(10) NOT NULL , INDEX (`Humain`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`objet d'art` ( `ID` INT(10) NOT NULL , `Nom` VARCHAR(50) NOT NULL , `Description` VARCHAR(250) NOT NULL , `Categorie` VARCHAR(50) NOT NULL , `Type de vente` VARCHAR(50) NOT NULL , `Prix` INT(10) NOT NULL ,`Cheminimg` VARCHAR(250) NOT NULL,PRIMARY KEY (`ID`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`client` ( `Humain` INT(10) NOT NULL , `Pays` VARCHAR(50) NOT NULL , `Ville` VARCHAR(50) NOT NULL , `Code_Postal` VARCHAR(50) NOT NULL , `AdresseL1` VARCHAR(50) NOT NULL , `AdresseL2` VARCHAR(50) NOT NULL , `Type_de_carte` VARCHAR(50) NOT NULL , `Numero_de_carte` VARCHAR(20) NOT NULL,`Nomcarte` VARCHAR(50) NOT NULL,`Dateexpi` DATE NOT NULL,`Codesecu` VARCHAR(5) NOT NULL , INDEX (`Humain`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`Panier` ( `Objet` INT(10) NOT NULL , `Prix`INT(10) NOT NULL, INDEX (`Objet`)) ENGINE = MyISAM; 

INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `N_Telephone`, `Mail`, `Media`) VALUES ('1', 'Gabriel', 'Pierre', 'leroux', PASSWORD('motdepasse'), '0648759628', 'pierre.gabriel@edu.ece.fr', '1');
INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `N_Telephone`, `Mail`, `Media`) VALUES ('2', 'Michenaud ', 'Marine', 'MarineMch', PASSWORD('motdepasse'), '0674859632', 'marine.michenaud@edu.ece.fr', '2');
INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `N_Telephone`, `Mail`, `Media`) VALUES ('3', 'Perrin ', 'Rayan', 'Num10', PASSWORD('motdepasse'), '0674859632', 'rayan.perrin@edu.ece.fr', '3');

INSERT INTO `ebayece`.`admin` (`Humain`) VALUES ('2');
INSERT INTO `ebayece`.`vendeur` (`Humain`) VALUES ('3');
INSERT INTO `ebayece`.`client` (`Humain`, `Pays`,`Ville`, `Code_Postal`, `AdresseL1`, `AdresseL2`, `Type_de_carte`, `Numero_de_carte`,`Nomcarte`,`Dateexpi`,`Codesecu`) VALUES ('1', 'France','Paris', '75011', '115 avenue Philippe Auguste', '', 'Mastercard', '751221596233659','Gabriel','2021-05-19','359');

INSERT INTO `ebayece`.`objet d'art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Cheminimg`) VALUES ('1', 'Bijoux de la reine Marie Tudor', 'Bijoux de la reine Marie Alisa bloody Mary', 'Bon pour le musee', 'Encheres', '450','');
INSERT INTO `ebayece`.`objet d'art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Cheminimg`) VALUES ('2', '6 pieces or', 'Lot de 6 pieces de 20 francs en or coq de Chaplain de 1907 et une 1912', 'Ferraille ou Tresor', 'Encheres', '1500 ','Images/Pieces1');
INSERT INTO `ebayece`.`objet d'art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Cheminimg`) VALUES ('3', 'Medaille Raspail', 'Medaille circulaire en bronze figurant Raspail "L ami du peuple" de profil. Diametre : 14 cm', 'Ferraille ou Tresor', 'Encheres', '15','Images/Pieces3.1');
INSERT INTO `ebayece`.`objet d'art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Cheminimg`) VALUES ('4', '3 pieces Napoleon III', 'Lot de 3 piece de 20 francs en or Napoleon III dattant de 1853 1860 et 1862', 'Ferraille ou Tresor', 'Encheres', '550','Images/Pieces2.2');