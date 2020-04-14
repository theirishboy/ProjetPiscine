/*
CREATION DES TABLES 	
*/
CREATE DATABASE `ebayece`;

CREATE TABLE `ebayece`.`Humain` ( `ID` INT NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(50) NOT NULL , `Prenom` VARCHAR(50) NOT NULL , `Login` VARCHAR(50) NOT NULL , `Mot_de_passe` VARCHAR(50) NOT NULL , `N_Telephone` VARCHAR(10) NOT NULL , `Mail` VARCHAR(50) NOT NULL , `Media` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`Vendeur` ( `Humain` INT(10) NOT NULL , INDEX (`Humain`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`Admin` ( `Humain` INT(10) NOT NULL , INDEX (`Humain`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`objet d'art` ( `ID` INT(10) NOT NULL , `Nom` VARCHAR(50) NOT NULL , `Description` VARCHAR(50) NOT NULL , `Catégorie` VARCHAR(50) NOT NULL , `Type de vente` VARCHAR(50) NOT NULL , `Prix` INT(10) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`client` ( `Humain` INT(10) NOT NULL , `Pays` VARCHAR(50) NOT NULL , `Code_Postal` VARCHAR(50) NOT NULL , `AdresseL1` VARCHAR(50) NOT NULL , `AdresseL2` VARCHAR(50) NOT NULL , `Type_de_carte` VARCHAR(50) NOT NULL , `Numéro_de_carte` VARCHAR(20) NOT NULL , INDEX (`Humain`)) ENGINE = MyISAM; 

INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `N_Telephone`, `Mail`, `Media`) VALUES ('1', 'Gabriel', 'Pierre', 'leroux', PASSWORD('motdepasse'), '0648759628', 'pierre.gabriel@edu.ece.fr', '1');
INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `N_Telephone`, `Mail`, `Media`) VALUES ('2', 'Michenaud ', 'Marine', 'MarineMch', PASSWORD('motdepasse'), '0674859632', 'marine.michenaud@edu.ece.fr', '2');
INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `N_Telephone`, `Mail`, `Media`) VALUES ('3', 'Perrin ', 'Ryan', 'Num10', PASSWORD('motdepasse'), '0674859632', 'ryan.perrin@edu.ece.fr', '3');

INSERT INTO `ebayece`.`admin` (`Humain`) VALUES ('2');
INSERT INTO `ebayece`.`vendeur` (`Humain`) VALUES ('3');
INSERT INTO `ebayece`.`client` (`Humain`, `Pays`, `Code_Postal`, `AdresseL1`, `AdresseL2`, `Type_de_carte`, `Numéro_de_carte`) VALUES ('1', 'France', '75011', '115 avenue Philippe Auguste', '', 'Mastercard', '751221596233659');

INSERT INTO `ebayece`.`objet d'art` (`ID`, `Nom`, `Description`, `Catégorie`, `Type de vente`, `Prix`) VALUES ('1', 'Bijoux de la reine Marie Tudor', 'Bijoux de la reine Marie Alisa bloody Mary', 'Bon pour le musée', 'Enchères', '450');