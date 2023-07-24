-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: pokedex
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pokemon` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `imagenLink` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `habilidad` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pokemon`
--

LOCK TABLES `pokemon` WRITE;
/*!40000 ALTER TABLE `pokemon` DISABLE KEYS */;
INSERT INTO `pokemon` VALUES (1,1,'Bulbasaur','Planta','001.png','Bulbasaur es un Pokémon cuadrúpedo de color verde y manchas más oscuras de formas geométricas. Su cabeza representa cerca de un tercio de su cuerpo.\r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        ','HidroBomba'),(2,2,'Ivysaur','Planta','002.png','Una planta\r\n                        ','HidroB'),(3,3,'Venusaur','Planta','003.png','                        ',''),(4,4,'Charmander','Fuego','004.png','',''),(5,5,'Charmeleon','Fuego','005.png','',''),(6,6,'Charizard','Fuego','006.png','',''),(7,7,'Squirtle','Agua','007.png','',''),(8,8,'Wartortle','Agua','008.png','',''),(9,9,'Blastoise','Agua','009.png','',''),(10,10,'Caterpie','Bicho','010.png','',''),(11,11,'Metapod','Bicho','011.png','',''),(12,12,'Butterfree','Bicho','012.png','',''),(13,13,'Weedle','Bicho','013.png','',''),(14,14,'Kakuna','Bicho','014.png','',''),(15,15,'Beedrill','Bicho','015.png','',''),(16,16,'Pidgey','Normal','016.png','',''),(17,17,'Pidgeotto','Normal','017.png','',''),(18,18,'Pidgeot','Normal','018.png','',''),(19,19,'Rattata','Normal','019.png','',''),(20,20,'Raticate','Normal','020.png','',''),(21,21,'Spearow','Normal','021.png','',''),(22,22,'Fearow','Normal','022.png','',''),(23,23,'Ekans','Veneno','023.png','',''),(24,24,'Arbok','Veneno','024.png','',''),(25,25,'Pikachu','Electrico','025.png','',''),(26,26,'Raichu','Electrico','026.png','',''),(27,27,'Sandshrew','Tierra','027.png','',''),(28,28,'Sandslash','Tierra','028.png','',''),(29,29,'Nidoran?','Veneno','029.png','',''),(30,30,'Nidorina','Veneno','030.png','',''),(31,31,'Nidoqueen','Veneno','031.png','',''),(32,32,'Nidoran?','Veneno','032.png','',''),(33,33,'Nidorino','Veneno','033.png','',''),(34,34,'Nidoking','Veneno','034.png','',''),(35,35,'Clefairy','Hada','035.png','',''),(36,36,'Clefable','Hada','036.png','',''),(37,37,'Vulpix','Fuego','037.png','',''),(38,38,'Ninetales','Fuego','038.png','',''),(39,39,'Jigglypuff','Normal','039.png','',''),(40,40,'Wigglytuff','Normal','040.png','',''),(41,41,'Zubat','Veneno','041.png','',''),(42,42,'Golbat','Veneno','042.png','',''),(43,43,'Oddish','Planta','043.png','',''),(44,44,'Gloom','Planta','044.png','',''),(45,45,'Vileplume','Planta','045.png','',''),(46,46,'Paras','Bicho','046.png','',''),(47,47,'Parasect','Bicho','047.png','',''),(48,48,'Venonat','Bicho','048.png','',''),(49,49,'Venomoth','Bicho','049.png','',''),(50,50,'Diglett','Tierra','050.png','',''),(51,51,'Dugtrio','Tierra','051.png','',''),(52,52,'Meowth','Normal','052.png','',''),(53,53,'Persian','Normal','053.png','',''),(54,54,'Psyduck','Agua','054.png','',''),(55,55,'Golduck','Agua','055.png','',''),(56,56,'Mankey','Lucha','056.png','',''),(57,57,'Primeape','Lucha','057.png','',''),(58,58,'Growlithe','Fuego','058.png','',''),(59,59,'Arcanine','Fuego','059.png','',''),(60,60,'Poliwag','Agua','060.png','',''),(61,61,'Poliwhirl','Agua','061.png','',''),(62,62,'Poliwrath','Agua','062.png','',''),(63,63,'Abra','Psiquico','063.png','',''),(64,64,'Kadabra','Psiquico','064.png','',''),(65,65,'Alakazam','Psiquico','065.png','',''),(66,66,'Machop','Lucha','066.png','',''),(67,67,'Machoke','Lucha','067.png','',''),(68,68,'Machamp','Lucha','068.png','',''),(69,69,'Bellsprout','Planta','069.png','',''),(70,70,'Weepinbell','Planta','070.png','',''),(71,71,'Victreebel','Planta','071.png','',''),(72,72,'Tentacool','Agua','072.png','',''),(73,73,'Tentacruel','Agua','073.png','',''),(74,74,'Geodude','Roca','074.png','',''),(75,75,'Graveler','Roca','075.png','',''),(76,76,'Golem','Roca','076.png','',''),(77,77,'Ponyta','Fuego','077.png','',''),(78,78,'Rapidash','Fuego','078.png','',''),(79,79,'Slowpoke','Agua','079.png','',''),(80,80,'Slowbro','Agua','080.png','',''),(81,81,'Magnemite','Electrico','081.png','',''),(82,82,'Magneton','Electrico','082.png','',''),(83,83,'Farfetch d','Normal','083.png','',''),(84,84,'Doduo','Normal','084.png','',''),(85,85,'Dodrio','Normal','085.png','',''),(86,86,'Seel','Agua','086.png','',''),(87,87,'Dewgong','Agua','087.png','',''),(88,88,'Grimer','Veneno','088.png','',''),(89,89,'Muk','Veneno','089.png','',''),(90,90,'Shellder','Agua','090.png','',''),(91,91,'Cloyster','Agua','091.png','',''),(92,92,'Gastly','Fantasma','092.png','',''),(93,93,'Haunter','Fantasma','093.png','',''),(94,94,'Gengar','Fantasma','094.png','',''),(95,95,'Onix','Roca','095.png','',''),(96,96,'Drowzee','Psiquico','096.png','',''),(97,97,'Hypno','Psiquico','097.png','',''),(98,98,'Krabby','Agua','098.png','',''),(99,99,'Kingler','Agua','099.png','',''),(100,100,'Voltorb','Electrico','100.png','',''),(101,101,'Electrode','Electrico','101.png','',''),(102,102,'Exeggcute','Planta','102.png','',''),(103,103,'Exeggutor','Planta','103.png','',''),(104,104,'Cubone','Tierra','104.png','',''),(105,105,'Marowak','Tierra','105.png','',''),(106,106,'Hitmonlee','Lucha','106.png','',''),(107,107,'Hitmonchan','Lucha','107.png','',''),(108,108,'Lickitung','Normal','108.png','',''),(109,109,'Koffing','Veneno','109.png','',''),(110,110,'Weezing','Veneno','110.png','',''),(111,111,'Rhyhorn','Tierra','111.png','',''),(112,112,'Rhydon','Tierra','112.png','',''),(113,113,'Chansey','Normal','113.png','',''),(114,114,'Tangela','Planta','114.png','',''),(115,115,'Kangaskhan','Normal','115.png','',''),(116,116,'Horsea','Agua','116.png','',''),(117,117,'Seadra','Agua','117.png','',''),(118,118,'Goldeen','Agua','118.png','',''),(119,119,'Seaking','Agua','119.png','',''),(120,120,'Staryu','Agua','120.png','',''),(121,121,'Starmie','Agua','121.png','',''),(122,122,'Mr. Mime','Psiquico','122.png','',''),(123,123,'Scyther','Bicho','123.png','',''),(124,124,'Jynx','Hielo','124.png','',''),(125,125,'Electabuzz','Electrico','125.png','',''),(126,126,'Magmar','Fuego','126.png','',''),(127,127,'Pinsir','Bicho','127.png','',''),(128,128,'Tauros','Normal','128.png','',''),(129,129,'Magikarp','Agua','129.png','',''),(130,130,'Gyarados','Agua','130.png','',''),(131,131,'Lapras','Agua','131.png','',''),(132,132,'Ditto','Normal','132.png','',''),(133,133,'Eevee','Normal','133.png','',''),(134,134,'Vaporeon','Agua','134.png','',''),(135,135,'Jolteon','Electrico','135.png','',''),(136,136,'Flareon','Fuego','136.png','',''),(137,137,'Porygon','Normal','137.png','',''),(138,138,'Omanyte','Roca','138.png','',''),(139,139,'Omastar','Roca','139.png','',''),(140,140,'Kabuto','Roca','140.png','',''),(141,141,'Kabutops','Roca','141.png','',''),(142,142,'Aerodactyl','Roca','142.png','',''),(143,143,'Snorlax','Normal','143.png','',''),(144,144,'Articuno','Hielo','144.png','',''),(145,145,'Zapdos','Electrico','145.png','',''),(146,146,'Moltres','Fuego','146.png','',''),(147,147,'Dratini','Dragon','147.png','',''),(148,148,'Dragonair','Dragon','148.png','',''),(149,149,'Dragonite','Dragon','149.png','',''),(150,150,'Mewtwo','Psiquico','150.png','',''),(151,151,'Mew','Psiquico','151.png','',''),(152,152,'Chikorita','Planta','152.png','','');
/*!40000 ALTER TABLE `pokemon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `nick` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin@gmail.com','admin'),(2,'Nahuel','nnahuelgamarra@gmail.com','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-24 16:11:42
