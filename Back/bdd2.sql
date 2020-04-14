
CREATE TABLE Humain(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Nom varchar(50) NOT NULL,Prenom varchar(50) NOT NULL,Login varchar(50) NOT NULL,Mot_de_passe varchar(50) NOT NULL,N_Telephonne varchar(10) NOT NULL,Mail varchar(50) NOT NULL,media int NOT NULL,Statut FOREIGN KEY(media) REFERENCES media(Id));

CREATE TABLE Client(FOREIGN KEY(Humain) REFERENCES Humain(Id),Pays varchar(50), Ville varchar(50), Code_postal varchar(5),AdresseL1 varchar(50), AdresseL2(varchar(50),Type_de_carte varchar(50), Numéro_de_carte varchar(50));

CREATE TABLE Vendeur(people int NOT NULL, FOREIGN KEY(Humain) REFERENCES people(Humain));

CREATE TABLE Admin(Humain int NOT NULL, FOREIGN KEY(Humain) REFERENCES people(Id));


CREATE TABLE Objet(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, Nom varchar(50) NOT NULL, Description varchar(50) NOT NULL, Type de vente varchar(50), Catégorie varchar(50), Prix int NOT NULL);



INSERT INTO Humain(Nom, Prenom, Login,Mail, Mot_De_Passe, N_Telephonne,Mail,media) VALUES( 'Gabriel', 'Pierre', 'Leroux', 'pierre.gabriel@edu.ece.fr','0648759628','password',1);
INSERT INTO Humain(Nom, Prenom, Login,Mail, Mot_De_Passe, N_Telephonne,Mail,media) VALUES( 'Perrin', 'Ryan', 'Ryry', 'ryan.perrin@edu.ece.fr','0678549871','password',1);
INSERT INTO Humain(Nom, Prenom, Login,Mail, Mot_De_Passe, N_Telephonne,Mail,media) VALUES( 'Michenaud', 'Marine', 'M_Mch', 'marine.michenaud@edu.ece.fr','0678549871',1);


INSERT INTO Client(Humain,Pays,Ville,Code_postal,AdresseL1,AdresseL2,Type_de_carte,Numéro_de_carte) VALUES('1','France','Paris','75011','115 avenue','Philippe Auguste','Mastercard','9167033534171478');

INSERT INTO Vendeur(Humain)  Values(2);

INSERT INTO Admin(people) VALUES(3);



