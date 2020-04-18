/*
CREATION DES TABLES 	
*/
<meta charset="utf-8" />
CREATE DATABASE `ebayece`;

CREATE TABLE `ebayece`.`Humain` (`ID` INT(10) NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(50) NOT NULL , `Prenom` VARCHAR(50) NOT NULL , `Login` VARCHAR(50) NOT NULL , `Mot_de_passe` VARCHAR(50) NOT NULL ,  `Mail` VARCHAR(50) NOT NULL , `Nimage` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`Vendeur` ( `Humain` INT(10) NOT NULL , INDEX (`Humain`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`Admin` ( `Humain` INT(10) NOT NULL , INDEX (`Humain`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`objet art` ( `ID` INT(10) NOT NULL AUTO_INCREMENT, `Nom` VARCHAR(50) NOT NULL , `Description` VARCHAR(250) NOT NULL , `Categorie` VARCHAR(50) NOT NULL , `Type de vente` VARCHAR(50) NOT NULL , `Prix` INT(10) NOT NULL ,`Nimage` INT(10) NOT NULL ,PRIMARY KEY (`ID`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`client` ( `Humain` INT(10) NOT NULL , `N_Telephone` VARCHAR(10) NOT NULL ,`Pays` VARCHAR(50) NOT NULL , `Ville` VARCHAR(50) NOT NULL , `Code_Postal` VARCHAR(50) NOT NULL , `AdresseL1` VARCHAR(50) NOT NULL , `AdresseL2` VARCHAR(50) NOT NULL , `Type_de_carte` VARCHAR(50) NOT NULL , `Numero_de_carte` VARCHAR(20) NOT NULL,`Nomcarte` VARCHAR(50) NOT NULL,`Dateexpi` DATE NOT NULL,`Codesecu` VARCHAR(5) NOT NULL , INDEX (`Humain`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`panier` ( `Humain` INT(10) NOT NULL , `Objet` INT(10) NOT NULL , `Prix` VARCHAR(10) NOT NULL , INDEX `Humain` (`Humain`), INDEX `Objet art` (`Objet`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`objetvendu` ( `Objet` INT(10) NOT NULL , `IDclient` INT(10) NOT NULL ,`IDvendeur` INT(10) NOT NULL , `Prix` VARCHAR(10) NOT NULL , INDEX `Objet art` (`Objet`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`images` ( `ID` INT NOT NULL AUTO_INCREMENT , `Chemin1`VARCHAR(250) NOT NULL ,`Chemin2`VARCHAR(250) NOT NULL,`Chemin3`VARCHAR(250) NOT NULL,PRIMARY KEY (`ID`)) ENGINE = MyISAM; 
CREATE TABLE `ebayece`.`enchere` (  `IDobjet`  INT (10) NOT NULL , `IDclient` INT(10) NOT NULL ,`IDvendeur` INT(10) NOT NULL,`Prixactuel` INT(10) NOT NULL,`Prixmax` INT(10) NOT NULL,`Monoffre` INT(10) NOT NULL,`Finenchere` DATETIME NOT NULL); 
CREATE TABLE `ebayece`.`offre` (  `IDobjet`  INT (10) NOT NULL , `IDclient` VARCHAR(10) NOT NULL ,`IDvendeur` INT(10) NOT NULL,`Prixnouveau` VARCHAR(10) NOT NULL,`NombreProposition` INT(10) NOT NULL,`statut` VARCHAR(20) NOT NULL); 



INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `Mail`, `Nimage`) VALUES ('1', 'Gabriel', 'Pierre', 'leroux', PASSWORD('motdepasse'),  'pierre.gabriel@edu.ece.fr', '1');
INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `Mail`, `Nimage`) VALUES ('2', 'Michenaud ', 'Marine', 'MarineMch', PASSWORD('motdepasse'),  'marine.michenaud@edu.ece.fr', '2');
INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `Mail`, `Nimage`) VALUES ('3', 'Perrin ', 'Rayan', 'Num10', PASSWORD('motdepasse'),  'rayan.perrin@edu.ece.fr', '3');
INSERT INTO `ebayece`.`humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `Mail`, `Nimage`) VALUES ('4', 'Peralta', 'Jake', 'Brooklyn', PASSWORD('99'),  'jake.peralata@edu.ece.fr', '4');


INSERT INTO `ebayece`.`admin` (`Humain`) VALUES ('2');
INSERT INTO `ebayece`.`vendeur` (`Humain`) VALUES ('3');
INSERT INTO `ebayece`.`client` (`Humain`, `N_Telephone`,`Pays`,`Ville`, `Code_Postal`, `AdresseL1`, `AdresseL2`, `Type_de_carte`, `Numero_de_carte`,`Nomcarte`,`Dateexpi`,`Codesecu`) VALUES ('1','0648759628', 'France','Paris', '75011', '115 avenue Philippe Auguste', '', 'Mastercard', '751221596233659','Gabriel','2021-05-19','359');
INSERT INTO `ebayece`.`client` (`Humain`, `N_Telephone`,`Pays`,`Ville`, `Code_Postal`, `AdresseL1`, `AdresseL2`, `Type_de_carte`, `Numero_de_carte`,`Nomcarte`,`Dateexpi`,`Codesecu`) VALUES ('4','0648759628', 'France','Paris', '75011', '115 avenue Philippe Auguste', '', 'Mastercard', '751221596233659','Gabriel','2021-05-19','359');

INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('1', 'Bijoux de la reine Marie Tudor', 'Bijoux de la reine Marie Alisa bloody Mary', 'Bon pour le musee', 'Enchere', '450','4');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('2', '6 pieces or', 'Lot de 6 pieces de 20 francs en or coq de Chaplain de 1907 et une 1912', 'Ferraille ou Tresor', 'Enchere', '1500 ','1');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('3', 'Medaille Raspail', 'Medaille circulaire en bronze figurant Raspail "L ami du peuple" de profil. Diametre : 14 cm', 'Ferraille ou Tresor', 'Enchere', '15','2');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('4', '3 pieces Napoleon III', 'Lot de 3 piece de 20 francs en or Napoleon III dattant de 1853 1860 et 1862', 'Ferraille ou Tresor', 'Enchere', '550','3');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('5', '3 WEST COAST IPA de chez Northern Monk', 'Being the hop-heads we are, we were always going to brew an IPA, but to mix it up a bit from current trends we decided to revisit the piney, resinous bitterness of the west coast style. ', 'Bon pour le musee', 'Negociation', '30','5');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('6', 'DOOMSDAY DISCO  FRUITY IPA', 'LORD WHITNEY LEEDS’ VERY OWN ‘CONNOISSEURS OF MAKE-BELIEVE’ LOOK TO CREATE IMMERSIVE SENSORY EXPERIENCES THROUGH THEIR WORK. ', ' Accessoire VIP', 'Achat immediat', '550','6');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('7', 'Rolex en or 18 carat', 'Rolex avec bracelet en or 18 carats pour femme accompagnée de son boitier rond.', 'Accessoire VIP', 'Achat immediat', '2800','7');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('8', 'Rolex, montre bracelet Oyster en acier et or', 'Rolex, montre avec bracelet Oyster en acier et or datant de 1986 toujours en parfait état. Accompagné de sa boite', 'Accessoire VIP', 'Enchere', '1050','8');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('9', 'Duo de stylos Montblanc', 'Duo de stylo plume en or 18 carat et feutre fluo. Accompagné de l’étui d’origine.', 'Accessoire VIP', 'Negociation', '670','9');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('10', 'Sac de voyage Louis Vuitton', 'Sac de voyage en toile monogrammée 48x60 cm Louis Vuitton', 'Accessoire VIP', 'Negociation', '385','10');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('11', 'Valide rigide Louis Vuitton', 'Valide rigide en toile enduite monogrammée et cuire avec plateau et clé Louis Vuitton', 'Accessoire VIP', 'Enchere', '1900','11');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('12', 'Echarpe en cachemire Hermès', 'Echarpe à franges en cachemire noir dans sa boite d’origine Hermès', 'Accessoire VIP', 'Achat immediat', '150','12');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('13', 'Etole en cachemire Yves-Saint Laurent', 'Etole neuve en cachemire polychrome sur fond jaune 135x135 cm Yves-Saint Laurent', 'Accessoire VIP', 'Achat immediat', '180','13');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('14', 'Bague en or blanc et saphir jaune', 'Bague en or blanc et saphir jaune ovale 8.10 cts agrémenté de 41 diamants blancs', 'Accessoire VIP', 'Enchere', '1490','14');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('15', 'Bague en or blanc et rubis', 'Bague en or blanc et rubis ovale 2.11 cts entouré de 20 diamants 0.20 ct', 'Accessoire VIP', 'Negociation', '1650','15');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('16', 'Bracelet en or', 'Bracelet articulé à grosses mailles en or', 'Accessoire VIP', 'Enchere', '1000','16');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('17', 'Montre-bracelet Victorinox swiss', 'Montre bracelet pour homme accompagné de son boitier', 'Accessoire VIP', 'Negociation', '780','17');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('18', 'Tableau du XVIe siècle d’Ambroise Dubois', 'Tableau « Ecole Française » d’Ambroise Dubois du XVIe siecle. Toile 94x100', 'Bon pour le musee', 'Enchere', '5200','18');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('19', 'Tableau d’André Hambourg de 1962', 'Tableau « L’apres-midi, le vieux bassin, Honfleur » d’André Hambourg de 1962', 'Bon pour le musee', 'Negociation', '7250','19');
INSERT INTO `ebayece`.`objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`,`Nimage`) VALUES ('20', 'Vase du Japon du XIXe siecle', 'Vase en cuivre et émaux cloisonnées du Japon datant du XIXe siecle', 'Bon pour le musee', 'Enchere', '195','20');




INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('1','Images/Pieces1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('2','Images/Pieces3.1','Images/Pieces3.2','Images/Pieces3.3');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('3','Images/Pieces2.2','Images/Pieces2.1','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('4','Images/BijouxMt1','Images/BijouxMT2','Images/BijouxMt3');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('5','Images/Biere1','Images/Biere2','Images/Biere3');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('6','Images/Biere21','Images/Biere22','Images/Biere23');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('7','Images/VIP1.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('8','Images/VIP2.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('9','Images/VIP3.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('10','Images/VIP4.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('11','Images/VIP5.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('12','Images/VIP6.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('13','Images/VIP7.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('14','Images/VIP8.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('15','Images/VIP9.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('16','Images/VIP10.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('17','Images/VIP11.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('18','Images/Musee1.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('19','Images/Musee2.1','','');
INSERT INTO `ebayece`.`images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES ('20','Images/Musee3.1','','');


INSERT INTO `ebayece`.`offre` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixnouveau`,`NombreProposition`,`statut`) VALUES ('5','','3','','0','Vendeur');
INSERT INTO `ebayece`.`offre` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixnouveau`,`NombreProposition`,`statut`) VALUES ('9','','3','','0','Vendeur');
INSERT INTO `ebayece`.`offre` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixnouveau`,`NombreProposition`,`statut`) VALUES ('10','','3','','0','Vendeur');
INSERT INTO `ebayece`.`offre` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixnouveau`,`NombreProposition`,`statut`) VALUES ('15','','3','','0','Vendeur');
INSERT INTO `ebayece`.`offre` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixnouveau`,`NombreProposition`,`statut`) VALUES ('17','','3','','0','Vendeur');
INSERT INTO `ebayece`.`offre` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixnouveau`,`NombreProposition`,`statut`) VALUES ('19','','3','','0','Vendeur');

INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('1', '0', '5', '450', '450', '450', '2020-04-17 00:00:00');
INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('2', '0', '5', '1500', '1500', '1500', '2020-04-17 00:00:00');
INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('3', '0', '5', '15', '15', '15', '2020-04-17 00:00:00');
INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('4', '0', '5', '550', '550', '550', '2020-04-17 00:00:00');
INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('5', '0', '5', '30', '30', '30', '2020-04-17 00:00:00');
INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('8', '0', '5', '1050', '1050', '1050', '2020-04-17 00:00:00');
INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('11', '0', '5', '1900', '1900', '1900', '2020-04-17 00:00:00');
INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('14', '0', '5', '1490', '1490', '1490', '2020-04-17 00:00:00');
INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('16', '0', '5', '1000', '1000', '1000', '2020-04-17 00:00:00');
INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('18', '0', '5', '5200', '5200', '5200', '2020-04-17 00:00:00');
