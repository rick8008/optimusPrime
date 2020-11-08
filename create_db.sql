
use portal;

CREATE TABLE `horarios` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `nome_prof` varchar(45) DEFAULT NULL,
   `dia_off` varchar(45) DEFAULT NULL,
   `nome_materia` varchar(45) DEFAULT NULL,
   `carga` varchar(45) DEFAULT NULL,
   PRIMARY KEY (`id`)
 ) ;
 CREATE TABLE `resultado` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `dia` varchar(45) DEFAULT NULL,
   `periodo` varchar(45) DEFAULT NULL,
   `id_materia` varchar(45) DEFAULT NULL,
   PRIMARY KEY (`id`)
 ) ;