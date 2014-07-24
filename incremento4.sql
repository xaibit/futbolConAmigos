ALTER TABLE `match` ADD COLUMN `instance` VARCHAR(100) NULL COMMENT 'acá va la fecha AFA o la ronda/instancia (primer aronda, octavos, etc) si es otro torneo'  AFTER `competition` ;

ALTER TABLE `competition` ADD COLUMN `image` VARCHAR(500) NULL  AFTER `name` ;

ALTER TABLE `competition` ADD COLUMN `status` INT NULL DEFAULT 1 COMMENT 'con 0 indicamos inactiva, con 1 activa'  AFTER `image` ;

ALTER TABLE `prediction` ADD COLUMN `create` DATE NULL COMMENT 'fecha de cuando fué creada'  AFTER `predictioncol` , ADD COLUMN `update` DATE NULL COMMENT 'última modificación'  AFTER `create` ;

ALTER TABLE `usergroup` ADD COLUMN `adminPending` INT NULL COMMENT 'el admin debe aprobar a un nuevo usuario \\n0 pendiente\\n1 aprobado'  AFTER `score` , ADD COLUMN `userPending` INT NULL COMMENT 'el usuario debe confirmar la inserción en un grupo\\n0 pendiente\\n1 aprobado'  AFTER `adminPending` ;

delete from question;

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,1);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,1);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,1);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,1);

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,2);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,2);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,2);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,2);

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,3);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,3);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,3);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,3);

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,4);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,4);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,4);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,4);

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,5);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,5);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,5);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,5);

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,6);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,6);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,6);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,6);

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,7);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,7);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,7);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,7);

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,8);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,8);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,8);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,8);

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,9);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,9);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,9);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,9);

INSERT INTO `question` (`text`,`answer1`,`answer2`, `score`,`bonus`,`match`) VALUES ('¿quien va meter el primer gol?','Local','Visitante',1,0,10);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿cuantas tarjetas amarillas habrá?','1 o 2','3 o 4','5 o 6','6 o más',1,0,10);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`score`,`bonus`,`match`) VALUES ('¿habrá algún expulsado?','SI','NO',1,0,10);
INSERT INTO `question` (`text`,`answer1`,`answer2`,`answer3`,`answer4`,`score`,`bonus`,`match`) VALUES ('¿Cuantos goles habrá?','1 o 2','3 o 4', '4 o 5', '6 o más',1,0,10);