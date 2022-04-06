DROP DATABASE IF EXISTS ZEVENT;

CREATE DATABASE ZEVENT DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE ZEVENT;

CREATE TABLE ASSOCIATION (
	id_assoc INTEGER NOT NULL auto_increment,
	nom_assoc VARCHAR (25) NOT NULL,
	date_creation integer DEFAULT NULL,
	date_apparition integer DEFAULT NULL,
	PRIMARY KEY (id_assoc)
) ENGINE = innodb;

CREATE TABLE PARTICIPANTS (
	id_participant integer not null auto_increment,
	nom_participant varchar (50) not null,
	PRIMARY KEY (id_participant)
) ENGINE = innodb;

CREATE TABLE ANNEE (
	compte_participants integer auto_increment,
	participant integer,
	annee integer,
	PRIMARY KEY (compte_participants),
	FOREIGN KEY (participant) REFERENCES PARTICIPANTS (id_participant)
) ENGINE = innodb;

CREATE TABLE EVENEMENT (
	date_evenement varchar(15),
	annee_evenement integer NOT NULL,
	nombre_participant integer,
	assoc varchar(50),
	somme_recolte integer,
	PRIMARY KEY (date_evenement)
) ENGINE = innodb;

CREATE TABLE CONNEXION(
	id_user integer auto_increment not null,
	nom_utilisateur varchar (50) not null,
	Mdp varchar (15) not null,
	PRIMARY KEY (id_user)
) ENGINE =innodb;

	-- insert into association
INSERT INTO ASSOCIATION(nom_assoc, date_creation, date_apparition) value ("Save the Children", 1919, 2016);
INSERT INTO ASSOCIATION(nom_assoc, date_creation, date_apparition) value ("Croix-Rouge Française", 1864, 2017);
INSERT INTO ASSOCIATION(nom_assoc, date_creation, date_apparition) value ("Médecins sans frontières", 1971, 2018);
INSERT INTO ASSOCIATION(nom_assoc, date_creation, date_apparition) value ("Institut Pasteur", 1887, 2019);
INSERT INTO ASSOCIATION(nom_assoc, date_creation, date_apparition) value ("Amnesty International Fr", 1971, 2020);
INSERT INTO ASSOCIATION(nom_assoc, date_creation, date_apparition) value ("Action contre la faim", 1979, 2021);
	-- insert into participants
INSERT INTO PARTICIPANTS (nom_participant) value ("Aypierre");
INSERT INTO PARTICIPANTS (nom_participant) value ("Alderiate");
INSERT INTO PARTICIPANTS (nom_participant) value ("BlueLondon");
INSERT INTO PARTICIPANTS (nom_participant) value ("Dash");
INSERT INTO PARTICIPANTS (nom_participant) value ("DFG");
INSERT INTO PARTICIPANTS (nom_participant) value ("Doigby");
INSERT INTO PARTICIPANTS (nom_participant) value ("Domingo");
INSERT INTO PARTICIPANTS (nom_participant) value ("GoB");
INSERT INTO PARTICIPANTS (nom_participant) value ("Jeel");
INSERT INTO PARTICIPANTS (nom_participant) value ("Jiraya");
INSERT INTO PARTICIPANTS (nom_participant) value ("Lapi");
INSERT INTO PARTICIPANTS (nom_participant) value ("Lege");
INSERT INTO PARTICIPANTS (nom_participant) value ("LRB");
INSERT INTO PARTICIPANTS (nom_participant) value ("Narkuss");
INSERT INTO PARTICIPANTS (nom_participant) value ("Tweekz");
INSERT INTO PARTICIPANTS (nom_participant) value ("Xari");
INSERT INTO PARTICIPANTS (nom_participant) value ("ZeratoR");
INSERT INTO PARTICIPANTS (nom_participant) value ("Aayley");
INSERT INTO PARTICIPANTS (nom_participant) value ("AlphaCast");
INSERT INTO PARTICIPANTS (nom_participant) value ("Benzaie");
INSERT INTO PARTICIPANTS (nom_participant) value ("BestMarmotte");
INSERT INTO PARTICIPANTS (nom_participant) value ("Diabalzane");
INSERT INTO PARTICIPANTS (nom_participant) value ("Gius");
INSERT INTO PARTICIPANTS (nom_participant) value ("Hexakil");
INSERT INTO PARTICIPANTS (nom_participant) value ("ImSoFresh");
INSERT INTO PARTICIPANTS (nom_participant) value ("Kenny");
INSERT INTO PARTICIPANTS (nom_participant) value ("Laink");
INSERT INTO PARTICIPANTS (nom_participant) value ("Lutti");
INSERT INTO PARTICIPANTS (nom_participant) value ("Mamytwink");
INSERT INTO PARTICIPANTS (nom_participant) value ("MisterMV");
INSERT INTO PARTICIPANTS (nom_participant) value ("MoMaN");
INSERT INTO PARTICIPANTS (nom_participant) value ("Nono");
INSERT INTO PARTICIPANTS (nom_participant) value ("Sardoche");
INSERT INTO PARTICIPANTS (nom_participant) value ("Velahan");
INSERT INTO PARTICIPANTS (nom_participant) value ("Zankioh");
INSERT INTO PARTICIPANTS (nom_participant) value ("Zecharia");
INSERT INTO PARTICIPANTS (nom_participant) value ("Chap");
INSERT INTO PARTICIPANTS (nom_participant) value ("Gotaga");
INSERT INTO PARTICIPANTS (nom_participant) value ("Kameto");
INSERT INTO PARTICIPANTS (nom_participant) value ("Locklear");
INSERT INTO PARTICIPANTS (nom_participant) value ("Maghla");
INSERT INTO PARTICIPANTS (nom_participant) value ("Mickalow");
INSERT INTO PARTICIPANTS (nom_participant) value ("Mizu");
INSERT INTO PARTICIPANTS (nom_participant) value ("Nyo");
INSERT INTO PARTICIPANTS (nom_participant) value ("Terracid");
INSERT INTO PARTICIPANTS (nom_participant) value ("Trinity");
INSERT INTO PARTICIPANTS (nom_participant) value ("Wakz");
INSERT INTO PARTICIPANTS (nom_participant) value ("Aiekillu");
INSERT INTO PARTICIPANTS (nom_participant) value ("Antoine Daniel");
INSERT INTO PARTICIPANTS (nom_participant) value ("Baghera Jones");
INSERT INTO PARTICIPANTS (nom_participant) value ("Carl Jr");
INSERT INTO PARTICIPANTS (nom_participant) value ("Etoiles");
INSERT INTO PARTICIPANTS (nom_participant) value ("Gom4rt");
INSERT INTO PARTICIPANTS (nom_participant) value ("JDG");
INSERT INTO PARTICIPANTS (nom_participant) value ("Kotei");
INSERT INTO PARTICIPANTS (nom_participant) value ("LittleBigWhale");
INSERT INTO PARTICIPANTS (nom_participant) value ("Master Snakou");
INSERT INTO PARTICIPANTS (nom_participant) value ("Odemian");
INSERT INTO PARTICIPANTS (nom_participant) value ("Oono");
INSERT INTO PARTICIPANTS (nom_participant) value ("Squeezie");
INSERT INTO PARTICIPANTS (nom_participant) value ("Tio");
INSERT INTO PARTICIPANTS (nom_participant) value ("Wingobear");
INSERT INTO PARTICIPANTS (nom_participant) value ("Zack Nani");
INSERT INTO PARTICIPANTS (nom_participant) value ("DamDamLive");
INSERT INTO PARTICIPANTS (nom_participant) value ("Deujna");
INSERT INTO PARTICIPANTS (nom_participant) value ("Samuel Etienne");
INSERT INTO PARTICIPANTS (nom_participant) value ("jbzz");
INSERT INTO PARTICIPANTS (nom_participant) value ("JLAmaru");
INSERT INTO PARTICIPANTS (nom_participant) value ("JLTomy");
INSERT INTO PARTICIPANTS (nom_participant) value ("LeBouseuh");
INSERT INTO PARTICIPANTS (nom_participant) value ("LeStream");
INSERT INTO PARTICIPANTS (nom_participant) value ("Ultia");
INSERT INTO PARTICIPANTS (nom_participant) value ("O'GamingTV");
INSERT INTO PARTICIPANTS (nom_participant) value ("TPK");
INSERT INTO PARTICIPANTS (nom_participant) value ("Ponce");
INSERT INTO PARTICIPANTS (nom_participant) value ("Jean Massiet");
INSERT INTO PARTICIPANTS (nom_participant) value ("Alexclick");
INSERT INTO PARTICIPANTS (nom_participant) value ("Aminematue");
INSERT INTO PARTICIPANTS (nom_participant) value ("Angle Droit");
INSERT INTO PARTICIPANTS (nom_participant) value ("Befreesh");
INSERT INTO PARTICIPANTS (nom_participant) value ("Bob Lennon");
INSERT INTO PARTICIPANTS (nom_participant) value ("Camak");
INSERT INTO PARTICIPANTS (nom_participant) value ("Chowh1");
INSERT INTO PARTICIPANTS (nom_participant) value ("Inoxtag");
INSERT INTO PARTICIPANTS (nom_participant) value ("JLFake");
INSERT INTO PARTICIPANTS (nom_participant) value ("Michou");
INSERT INTO PARTICIPANTS (nom_participant) value ("Mynthos");
INSERT INTO PARTICIPANTS (nom_participant) value ("RebeuDeter");
INSERT INTO PARTICIPANTS (nom_participant) value ("Rivenzi");
	--insert into annee 
INSERT INTO ANNEE (participant, annee) value (1, 2016);
INSERT INTO ANNEE (participant, annee) value (1, 2018);
INSERT INTO ANNEE (participant, annee) value (1, 2019);
INSERT INTO ANNEE (participant, annee) value (2, 2017);
INSERT INTO ANNEE (participant, annee) value (2, 2018);
INSERT INTO ANNEE (participant, annee) value (2, 2019);
INSERT INTO ANNEE (participant, annee) value (2, 2020);
INSERT INTO ANNEE (participant, annee) value (3, 2016);
INSERT INTO ANNEE (participant, annee) value (4, 2016);
INSERT INTO ANNEE (participant, annee) value (4, 2017);
INSERT INTO ANNEE (participant, annee) value (5, 2016);
INSERT INTO ANNEE (participant, annee) value (5, 2017);
INSERT INTO ANNEE (participant, annee) value (5, 2018);
INSERT INTO ANNEE (participant, annee) value (5, 2019);
INSERT INTO ANNEE (participant, annee) value (5, 2020);
INSERT INTO ANNEE (participant, annee) value (5, 2021);
INSERT INTO ANNEE (participant, annee) value (6, 2016);
INSERT INTO ANNEE (participant, annee) value (6, 2017);
INSERT INTO ANNEE (participant, annee) value (6, 2018);
INSERT INTO ANNEE (participant, annee) value (6, 2019);
INSERT INTO ANNEE (participant, annee) value (6, 2020);
INSERT INTO ANNEE (participant, annee) value (6, 2021);
INSERT INTO ANNEE (participant, annee) value (7, 2016);
INSERT INTO ANNEE (participant, annee) value (7, 2017);
INSERT INTO ANNEE (participant, annee) value (7, 2018);
INSERT INTO ANNEE (participant, annee) value (7, 2019);
INSERT INTO ANNEE (participant, annee) value (7, 2020);
INSERT INTO ANNEE (participant, annee) value (7, 2021);
INSERT INTO ANNEE (participant, annee) value (8, 2016);
INSERT INTO ANNEE (participant, annee) value (8, 2017);
INSERT INTO ANNEE (participant, annee) value (8, 2018);
INSERT INTO ANNEE (participant, annee) value (8, 2019);
INSERT INTO ANNEE (participant, annee) value (8, 2020);
INSERT INTO ANNEE (participant, annee) value (8, 2021);
INSERT INTO ANNEE (participant, annee) value (9, 2016);
INSERT INTO ANNEE (participant, annee) value (9, 2017);
INSERT INTO ANNEE (participant, annee) value (9, 2018);
INSERT INTO ANNEE (participant, annee) value (9, 2019);
INSERT INTO ANNEE (participant, annee) value (9, 2020);
INSERT INTO ANNEE (participant, annee) value (9, 2021);
INSERT INTO ANNEE (participant, annee) value (10, 2016);
INSERT INTO ANNEE (participant, annee) value (10, 2017);
INSERT INTO ANNEE (participant, annee) value (10, 2018);
INSERT INTO ANNEE (participant, annee) value (10, 2019);
INSERT INTO ANNEE (participant, annee) value (10, 2020);
INSERT INTO ANNEE (participant, annee) value (10, 2021);
INSERT INTO ANNEE (participant, annee) value (11, 2016);
INSERT INTO ANNEE (participant, annee) value (11, 2018);
INSERT INTO ANNEE (participant, annee) value (12, 2016);
INSERT INTO ANNEE (participant, annee) value (12, 2018);
INSERT INTO ANNEE (participant, annee) value (13, 2016);
INSERT INTO ANNEE (participant, annee) value (13, 2018);
INSERT INTO ANNEE (participant, annee) value (14, 2016);
INSERT INTO ANNEE (participant, annee) value (14, 2018);
INSERT INTO ANNEE (participant, annee) value (14, 2019);
INSERT INTO ANNEE (participant, annee) value (15, 2016);
INSERT INTO ANNEE (participant, annee) value (15, 2017);
INSERT INTO ANNEE (participant, annee) value (15, 2018);
INSERT INTO ANNEE (participant, annee) value (15, 2019);
INSERT INTO ANNEE (participant, annee) value (16, 2016);
INSERT INTO ANNEE (participant, annee) value (16, 2017);
INSERT INTO ANNEE (participant, annee) value (16, 2018);
INSERT INTO ANNEE (participant, annee) value (16, 2019);
INSERT INTO ANNEE (participant, annee) value (16, 2020);
INSERT INTO ANNEE (participant, annee) value (16, 2021);
INSERT INTO ANNEE (participant, annee) value (17, 2016);
INSERT INTO ANNEE (participant, annee) value (17, 2017);
INSERT INTO ANNEE (participant, annee) value (17, 2018);
INSERT INTO ANNEE (participant, annee) value (17, 2019);
INSERT INTO ANNEE (participant, annee) value (17, 2020);
INSERT INTO ANNEE (participant, annee) value (17, 2021);
INSERT INTO ANNEE (participant, annee) value (18, 2017);
INSERT INTO ANNEE (participant, annee) value (18, 2018);
INSERT INTO ANNEE (participant, annee) value (19, 2017);
INSERT INTO ANNEE (participant, annee) value (19, 2018);
INSERT INTO ANNEE (participant, annee) value (19, 2019);
INSERT INTO ANNEE (participant, annee) value (19, 2020);
INSERT INTO ANNEE (participant, annee) value (19, 2021);
INSERT INTO ANNEE (participant, annee) value (20, 2017);
INSERT INTO ANNEE (participant, annee) value (21, 2017);
INSERT INTO ANNEE (participant, annee) value (21, 2018);
INSERT INTO ANNEE (participant, annee) value (21, 2019);
INSERT INTO ANNEE (participant, annee) value (22, 2017);
INSERT INTO ANNEE (participant, annee) value (22, 2018);
INSERT INTO ANNEE (participant, annee) value (22, 2019);
INSERT INTO ANNEE (participant, annee) value (23, 2017);
INSERT INTO ANNEE (participant, annee) value (23, 2018);
INSERT INTO ANNEE (participant, annee) value (23, 2019);
INSERT INTO ANNEE (participant, annee) value (23, 2020);
INSERT INTO ANNEE (participant, annee) value (23, 2021);
INSERT INTO ANNEE (participant, annee) value (24, 2017);
INSERT INTO ANNEE (participant, annee) value (24, 2018);
INSERT INTO ANNEE (participant, annee) value (24, 2019);
INSERT INTO ANNEE (participant, annee) value (25, 2017);
INSERT INTO ANNEE (participant, annee) value (26, 2017);
INSERT INTO ANNEE (participant, annee) value (26, 2018);
INSERT INTO ANNEE (participant, annee) value (26, 2019);
INSERT INTO ANNEE (participant, annee) value (26, 2020);
INSERT INTO ANNEE (participant, annee) value (26, 2021);
INSERT INTO ANNEE (participant, annee) value (27, 2017);
INSERT INTO ANNEE (participant, annee) value (27, 2018);
INSERT INTO ANNEE (participant, annee) value (28, 2017);
INSERT INTO ANNEE (participant, annee) value (28, 2018);
INSERT INTO ANNEE (participant, annee) value (28, 2019);
INSERT INTO ANNEE (participant, annee) value (29, 2017);
INSERT INTO ANNEE (participant, annee) value (30, 2017);
INSERT INTO ANNEE (participant, annee) value (30, 2018);
INSERT INTO ANNEE (participant, annee) value (30, 2019);
INSERT INTO ANNEE (participant, annee) value (30, 2020);
INSERT INTO ANNEE (participant, annee) value (30, 2021);
INSERT INTO ANNEE (participant, annee) value (31, 2017);
INSERT INTO ANNEE (participant, annee) value (31, 2018);
INSERT INTO ANNEE (participant, annee) value (31, 2019);
INSERT INTO ANNEE (participant, annee) value (31, 2020);
INSERT INTO ANNEE (participant, annee) value (31, 2021);
INSERT INTO ANNEE (participant, annee) value (32, 2017);
INSERT INTO ANNEE (participant, annee) value (32, 2018);
INSERT INTO ANNEE (participant, annee) value (32, 2019);
INSERT INTO ANNEE (participant, annee) value (33, 2017);
INSERT INTO ANNEE (participant, annee) value (33, 2018);
INSERT INTO ANNEE (participant, annee) value (33, 2019);
INSERT INTO ANNEE (participant, annee) value (33, 2020);
INSERT INTO ANNEE (participant, annee) value (33, 2021);
INSERT INTO ANNEE (participant, annee) value (34, 2017);
INSERT INTO ANNEE (participant, annee) value (35, 2017);
INSERT INTO ANNEE (participant, annee) value (35, 2018);
INSERT INTO ANNEE (participant, annee) value (35, 2019);
INSERT INTO ANNEE (participant, annee) value (36, 2017);
INSERT INTO ANNEE (participant, annee) value (37, 2018);
INSERT INTO ANNEE (participant, annee) value (37, 2019);
INSERT INTO ANNEE (participant, annee) value (37, 2020);
INSERT INTO ANNEE (participant, annee) value (37, 2021);
INSERT INTO ANNEE (participant, annee) value (38, 2018);
INSERT INTO ANNEE (participant, annee) value (38, 2019);
INSERT INTO ANNEE (participant, annee) value (38, 2020);
INSERT INTO ANNEE (participant, annee) value (38, 2021);
INSERT INTO ANNEE (participant, annee) value (39, 2018);
INSERT INTO ANNEE (participant, annee) value (39, 2019);
INSERT INTO ANNEE (participant, annee) value (39, 2020);
INSERT INTO ANNEE (participant, annee) value (39, 2021);
INSERT INTO ANNEE (participant, annee) value (40, 2018);
INSERT INTO ANNEE (participant, annee) value (40, 2019);
INSERT INTO ANNEE (participant, annee) value (40, 2020);
INSERT INTO ANNEE (participant, annee) value (40, 2021);
INSERT INTO ANNEE (participant, annee) value (41, 2018);
INSERT INTO ANNEE (participant, annee) value (41, 2019);
INSERT INTO ANNEE (participant, annee) value (41, 2020);
INSERT INTO ANNEE (participant, annee) value (41, 2021);
INSERT INTO ANNEE (participant, annee) value (42, 2018);
INSERT INTO ANNEE (participant, annee) value (42, 2019);
INSERT INTO ANNEE (participant, annee) value (42, 2020);
INSERT INTO ANNEE (participant, annee) value (43, 2018);
INSERT INTO ANNEE (participant, annee) value (44, 2018);
INSERT INTO ANNEE (participant, annee) value (44, 2019);
INSERT INTO ANNEE (participant, annee) value (45, 2018);
INSERT INTO ANNEE (participant, annee) value (46, 2018);
INSERT INTO ANNEE (participant, annee) value (46, 2019);
INSERT INTO ANNEE (participant, annee) value (46, 2020);
INSERT INTO ANNEE (participant, annee) value (46, 2021);
INSERT INTO ANNEE (participant, annee) value (47, 2018);
INSERT INTO ANNEE (participant, annee) value (47, 2019);
INSERT INTO ANNEE (participant, annee) value (47, 2020);
INSERT INTO ANNEE (participant, annee) value (47, 2021);
INSERT INTO ANNEE (participant, annee) value (48, 2019);
INSERT INTO ANNEE (participant, annee) value (48, 2020);
INSERT INTO ANNEE (participant, annee) value (48, 2021);
INSERT INTO ANNEE (participant, annee) value (49, 2019);
INSERT INTO ANNEE (participant, annee) value (50, 2019);
INSERT INTO ANNEE (participant, annee) value (51, 2019);
INSERT INTO ANNEE (participant, annee) value (51, 2020);
INSERT INTO ANNEE (participant, annee) value (51, 2021);
INSERT INTO ANNEE (participant, annee) value (52, 2019);
INSERT INTO ANNEE (participant, annee) value (52, 2020);
INSERT INTO ANNEE (participant, annee) value (52, 2021);
INSERT INTO ANNEE (participant, annee) value (53, 2019);
INSERT INTO ANNEE (participant, annee) value (53, 2020);
INSERT INTO ANNEE (participant, annee) value (53, 2021);
INSERT INTO ANNEE (participant, annee) value (54, 2019);
INSERT INTO ANNEE (participant, annee) value (54, 2020);
INSERT INTO ANNEE (participant, annee) value (54, 2021);
INSERT INTO ANNEE (participant, annee) value (55, 2019);
INSERT INTO ANNEE (participant, annee) value (55, 2020);
INSERT INTO ANNEE (participant, annee) value (55, 2021);
INSERT INTO ANNEE (participant, annee) value (56, 2019);
INSERT INTO ANNEE (participant, annee) value (57, 2019);
INSERT INTO ANNEE (participant, annee) value (57, 2020);
INSERT INTO ANNEE (participant, annee) value (58, 2019);
INSERT INTO ANNEE (participant, annee) value (59, 2019);
INSERT INTO ANNEE (participant, annee) value (59, 2020);
INSERT INTO ANNEE (participant, annee) value (59, 2021);
INSERT INTO ANNEE (participant, annee) value (60, 2019);
INSERT INTO ANNEE (participant, annee) value (60, 2020);
INSERT INTO ANNEE (participant, annee) value (61, 2019);
INSERT INTO ANNEE (participant, annee) value (62, 2019);
INSERT INTO ANNEE (participant, annee) value (63, 2020);
INSERT INTO ANNEE (participant, annee) value (63, 2021);
INSERT INTO ANNEE (participant, annee) value (63, 2021);
INSERT INTO ANNEE (participant, annee) value (64, 2020);
INSERT INTO ANNEE (participant, annee) value (64, 2021);
INSERT INTO ANNEE (participant, annee) value (65, 2020);
INSERT INTO ANNEE (participant, annee) value (65, 2021);
INSERT INTO ANNEE (participant, annee) value (66, 2020);
INSERT INTO ANNEE (participant, annee) value (67, 2020);
INSERT INTO ANNEE (participant, annee) value (67, 2021);
INSERT INTO ANNEE (participant, annee) value (68, 2020);
INSERT INTO ANNEE (participant, annee) value (68, 2021);
INSERT INTO ANNEE (participant, annee) value (69, 2020);
INSERT INTO ANNEE (participant, annee) value (69, 2021);
INSERT INTO ANNEE (participant, annee) value (70, 2020);
INSERT INTO ANNEE (participant, annee) value (71, 2020);
INSERT INTO ANNEE (participant, annee) value (71, 2021);
INSERT INTO ANNEE (participant, annee) value (72, 2020); 
INSERT INTO ANNEE (participant, annee) value (73, 2020);
INSERT INTO ANNEE (participant, annee) value (73, 2021);
INSERT INTO ANNEE (participant, annee) value (74, 2020);
INSERT INTO ANNEE (participant, annee) value (74, 2021);
INSERT INTO ANNEE (participant, annee) value (75, 2020);
INSERT INTO ANNEE (participant, annee) value (75, 2021);
INSERT INTO ANNEE (participant, annee) value (76, 2021);
INSERT INTO ANNEE (participant, annee) value (77, 2021);
INSERT INTO ANNEE (participant, annee) value (78, 2021); 
INSERT INTO ANNEE (participant, annee) value (79, 2021);
INSERT INTO ANNEE (participant, annee) value (80, 2021); 
INSERT INTO ANNEE (participant, annee) value (81, 2021);
INSERT INTO ANNEE (participant, annee) value (82, 2021);
INSERT INTO ANNEE (participant, annee) value (83, 2021);
INSERT INTO ANNEE (participant, annee) value (84, 2021);
INSERT INTO ANNEE (participant, annee) value (85, 2021);
INSERT INTO ANNEE (participant, annee) value (86, 2021);
INSERT INTO ANNEE (participant, annee) value (87, 2021);
INSERT INTO ANNEE (participant, annee) value (88, 2021);
INSERT INTO ANNEE (participant, annee) value (89, 2019);
	-- insert into evenement
INSERT INTO EVENEMENT (date_evenement, annee_evenement, nombre_participant, assoc, somme_recolte) value ("04/03 - 06/03", 2016, 16, "Save The Children", 170770);
INSERT INTO EVENEMENT (date_evenement, annee_evenement, nombre_participant, assoc, somme_recolte) value ("08/09 - 10/09", 2017, 33, "Croix-Rouge française", 451851); 
INSERT INTO EVENEMENT (date_evenement, annee_evenement, nombre_participant, assoc, somme_recolte) value ("09/11 - 11/11", 2018, 40, "Médecins sans frontières", 1094731 ); 
INSERT INTO EVENEMENT (date_evenement, annee_evenement, nombre_participant, assoc, somme_recolte) value ("20/09 - 23/09", 2019, 54, "Institut Pasteur", 3509878); 
INSERT INTO EVENEMENT (date_evenement, annee_evenement, nombre_participant, assoc, somme_recolte) value ("16/10 - 19/10", 2020, 55, "Amnesty International France", 5724377); 
INSERT INTO EVENEMENT (date_evenement, annee_evenement, nombre_participant, assoc, somme_recolte) value ("29/10 - 31/10", 2021, 54, "Action contre la faim", 10064480); 
 
 insert into connexion (nom_utilisateur, Mdp) value ('root', '123');
--  exemple commande affichage
select nom_participant, annee from annee INNER JOIN  participants ON annee.participant = participants.id_participant where annee = 2016 ORDER BY nom_participant;
	