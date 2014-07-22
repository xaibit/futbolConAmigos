CREATE TABLE `competition` (
  `idCompetition` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idCompetition`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='torneo, competición.\nLa idea es poner cosas como apertura, naciaonal B, copa argentina, etc, etc.'$$


ALTER TABLE `futbolconamigos`.`match` ADD COLUMN `competition` INT NULL  AFTER `visitantGoals` , 
  ADD CONSTRAINT `competitionFK`
  FOREIGN KEY (`competition` )
  REFERENCES `futbolconamigos`.`competition` (`idCompetition` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `competitionFK_idx` (`competition` ASC) ;

delimiter $$



INSERT INTO `futbolconamigos`.`competition` (`idCompetition`, `name`) VALUES ('1', 'Torneo Transición');
INSERT INTO `futbolconamigos`.`competition` (`idCompetition`, `name`) VALUES ('2', 'Copa Argentina');

INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('1', 'Arsenal');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('2', 'Atlético Rafaela');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('3', 'Banfield');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('4', 'Belgrano');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('5', 'Boca');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('6', 'Defensa y Justicia');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('7', 'Estudiantes');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('8', 'Gimnasia y Esgrima LP');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('9', 'Godoy Cruz');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('10', 'Independiente');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('11', 'Lanús');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('12', 'Newells Old Boys');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('13', 'Olimpo');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('14', 'Quilmes');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('15', 'Racing');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('16', 'River');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('17', 'Rosario Central');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('18', 'San Lorenzo');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('19', 'Tigre');
INSERT INTO `futbolconamigos`.`team` (`idTeam`, `name`) VALUES ('20', 'Vélez');


INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (5,12,'2014-08-03',1,1);
INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (17,14,'2014-08-03',1,1);
INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (9,3,'2014-08-03',1,1);
INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (6,15,'2014-08-03',1,1);
INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (8,16,'2014-08-03',1,1);
INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (18,13,'2014-08-03',1,1);
INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (19,20,'2014-08-03',1,1);
INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (1,7,'2014-08-03',1,1);
INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (10,2,'2014-08-03',1,1);
INSERT INTO `futbolconamigos`.`match` (`localTeam`,`visitantTeam`,`date`,`afaDate`,`competition`) VALUES (11,4,'2014-08-03',1,1);





