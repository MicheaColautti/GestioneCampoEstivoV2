-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: GestioneCampoEstivo
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alimentation`
--

DROP DATABASE IF EXISTS GestioneCampoEstivo;
CREATE DATABASE GestioneCampoEstivo;
USE GestioneCampoEstivo;
UNLOCK TABLES;


DROP TABLE IF EXISTS `alimentation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alimentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `eating_ability` enum('da solo','con aiuto','imboccare') NOT NULL,
  `drinking_ability` enum('da solo','con aiuto','imboccare') NOT NULL,
  `dentures` enum('nessuna','sopra','sotto','entrambe') NOT NULL,
  `thickener` enum('si','no') NOT NULL,
  `diet` varchar(40) DEFAULT NULL,
  `unadviced_food` varchar(40) DEFAULT NULL,
  `allergies` varchar(40) DEFAULT NULL,
  `alchool` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `alimentation_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alimentation`
--

/*!40000 ALTER TABLE `alimentation` DISABLE KEYS */;
INSERT INTO `alimentation` VALUES (1,4,'da solo','da solo','nessuna','no',NULL,NULL,NULL,NULL),(2,6,'da solo','da solo','nessuna','no',NULL,NULL,NULL,NULL),(3,8,'da solo','da solo','nessuna','no','Michea','Colautti',NULL,'Pier Francesco Mola 12');
/*!40000 ALTER TABLE `alimentation` ENABLE KEYS */;

--
-- Table structure for table `autocertificate`
--

DROP TABLE IF EXISTS `autocertificate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autocertificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idVolunteer` int(11) NOT NULL,
  `mother_phone` varchar(20) NOT NULL,
  `father_phone` varchar(20) NOT NULL,
  `legal_tutor` varchar(40) NOT NULL,
  `other_problems` varchar(50) DEFAULT NULL,
  `doctor` varchar(50) NOT NULL,
  `doctor_phone` varchar(30) NOT NULL,
  `form_placeAndDate` varchar(40) NOT NULL,
  `signature` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idVolunteer` (`idVolunteer`),
  CONSTRAINT `autocertificate_ibfk_1` FOREIGN KEY (`idVolunteer`) REFERENCES `person` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autocertificate`
--

LOCK TABLES `autocertificate` WRITE;
/*!40000 ALTER TABLE `autocertificate` DISABLE KEYS */;
/*!40000 ALTER TABLE `autocertificate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `belongs`
--

DROP TABLE IF EXISTS `belongs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `belongs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPerson` int(11) NOT NULL,
  `idCamp` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idPerson` (`idPerson`),
  KEY `idCamp` (`idCamp`),
  CONSTRAINT `belongs_ibfk_1` FOREIGN KEY (`idPerson`) REFERENCES `person` (`id`),
  CONSTRAINT `belongs_ibfk_2` FOREIGN KEY (`idCamp`) REFERENCES `camp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `belongs`
--

LOCK TABLES `belongs` WRITE;
/*!40000 ALTER TABLE `belongs` DISABLE KEYS */;
/*!40000 ALTER TABLE `belongs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `camp`
--

DROP TABLE IF EXISTS `camp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `camp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text DEFAULT NULL,
  `infos` text DEFAULT NULL,
  `edition` text DEFAULT NULL,
  `phtos_library` text DEFAULT NULL,
  `staff_instructions` text DEFAULT NULL,
  `history` text DEFAULT NULL,
  `news` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `camp`
--

LOCK TABLES `camp` WRITE;
/*!40000 ALTER TABLE `camp` DISABLE KEYS */;
INSERT INTO `camp` VALUES (1,'Campo estivo 2023','Per informazioni:\n alberto.mombelli@vitaserena.ch\n Tel. 091 857 59 03','Edizione 2023',NULL,'<span style=\'font-size: 1.25rem;\'>\n<span style=\'font-size: 1.125rem;\'>Cara volontaria, caro volontario,</span>\n</span>\n</p>\n<p>\n<span style=\'font-size: 1.125rem;\'>la buona riuscita del Campo è determinata dalla disponibilità, dalla collaborazione e dall’impegno di tutti. Per garantire i servizi fondamentali per l’Ospite e vivere questa esperienza nel migliore dei modi, ognuno di noi deve rispettare rigorosamente le seguenti indicazioni.</span>\n</p>\n<blockquote>\n<ul id=\'isPasted\' style=\'margin: 0px 0px 0px 10px; padding: 0px; caret-color: rgb(0, 0, 0); font-family: sunset, &quot;Nimbus Sans L&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif; font-size: 15.24px; font-style: normal; font-variant-caps: normal; font-weight: 100; letter-spacing: 1px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none;\'>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.25rem;\'>\n<span style=\'font-size: 1.125rem;\'>I medici e gli infermieri sono i responsabili delle terapie. Nessun medicamento deve essere somministrato senza il loro ordine. La dieta alimentare specifica di ogni Ospite deve essere rispettata. Il medico e gli infermieri sono sempre a disposizione per chiarire eventuali dubbi.</span>\n</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>Durante questo soggiorno è possibile che si venga a conoscenza di informazioni confidenziali che riguardano gli Ospiti; è nostro dovere rispettare il segreto professionale ed usare la massima discrezione.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>Non è permesso lasciare il Campo senza l’autorizzazione del capo Campo.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>Il personale del Campo è suddiviso in diversi servizi, ognuno gestito da un responsabile. Qualsiasi problema riguardante il servizio ed eventuali assenze sono da discutere con il responsabile.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>È generalmente vietato fumare durante tutte le attività del Campo. Eccezioni verranno concordate sul posto.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>È vietato il consumo di bevande alcoliche. Canapa e altre sostanze stupefacenti sono bandite nel modo più rigoroso. Il loro consumo comporta l’immediato allontanamento dal Campo.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>La formazione di forti legami personali fa parte delle belle esperienze che si possono vivere a Olivone. Ricordando che l’attenzione primaria è sempre rivolta all’Ospite, si esige da ogni Volontario un comportamento misurato e responsabile. Atti sessuali non sono compatibili con la vita al Campo.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>È indispensabile riservarsi un tempo sufficiente per il riposo notturno. Non sono tollerati eccessi in questo senso, poiché vanno a gravare sulla lucidità e la prontezza indispensabili alle delicate mansioni che ci competono durante il giorno.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>È fondamentale la puntualità nello svolgimento dei rispettivi turni di servizio.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>Le diverse attività ricreative hanno successo solo se ognuno di noi vi partecipa assieme agli Ospiti. L’esperienza ci insegna che ciò risulta più problematico durante l’animazione serale. Raccomandiamo di prestare particolare attenzione a quest’aspetto.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>Un’eccessiva audacia nell’abbigliamento (specialmente femminile) può facilmente urtare la sensibilità degli Ospiti e portare a situazioni spiacevoli. Si prega di considerarlo nella scelta dei vestiti da portare al Campo.</span>\n</li>\n<li style=\'margin: 0px 0px 0px 10px; padding: 0px;\'>\n<span style=\'font-size: 1.125rem;\'>Si raccomanda un uso moderato ed intelligente del cellulare per non ostacolare le relazioni con gli ospiti e compromettere la nostra disponibilità nei loro confronti.</span>\n</li>\n</ul>\n</blockquote>\n<p>\n<br>\n</p>\n<p id=\'isPasted\'>\n<span style=\'font-size: 1.125rem;\'>Vi informo che la lavanderia è principalmente al servizio degli Ospiti. Per rispondere anche alle necessità dei Volontari verrà stabilito un giorno alla settimana per lavare e stirare i propri indumenti.</span>\n</p>\n<p>\n<span style=\'font-size: 1.125rem;\'>La direzione non può garantire la sorveglianza dei Volontari e non si assume nessuna responsabilità per ogni attività estranea agli scopi del Campo, incluso l’utilizzo di veicoli privati.</span>\n</p>\n<p>\n<span style=\'font-size: 1.125rem;\'>Auguro a tutti di vivere questi momenti in maniera arricchente e gioiosa.</span>\n</p>','','Il campo 2020 è stato annullato a causa della pandemia.\n Il campo 2021 idem');
/*!40000 ALTER TABLE `camp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunication`
--

DROP TABLE IF EXISTS `comunication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comunication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `seeing` enum('normale','parziale','assente') NOT NULL,
  `hearing` enum('normale','parziale','assente') NOT NULL,
  `hearing_device` enum('si','no') NOT NULL,
  `glasses` enum('si','no') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `comunication_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunication`
--

LOCK TABLES `comunication` WRITE;
/*!40000 ALTER TABLE `comunication` DISABLE KEYS */;
INSERT INTO `comunication` VALUES (1,4,'normale','normale','no','si'),(2,6,'normale','normale','no','no'),(3,8,'normale','normale','no','no');
/*!40000 ALTER TABLE `comunication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idVolunteer` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `start` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#FFCC99',
  `isEvent` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idVolunteer` (`idVolunteer`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`idVolunteer`) REFERENCES `person` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,NULL,'Serata danzante','2023-03-30 00:00:00','2023-03-31 00:00:00','2023-04-13 14:52:10','2023-04-13 14:52:10','#FFCC99',1);
INSERT INTO `events` VALUES (2,NULL,'Serata canto','2023-04-12 00:00:00','2023-04-13 00:00:00','2023-04-13 14:52:10','2023-04-13 14:52:10','#FFCC99',1);
INSERT INTO `events` VALUES (3,NULL,'Teatro','2023-04-15 00:00:00','2023-04-16 00:00:00','2023-04-13 14:52:10','2023-04-13 14:52:10','#FFCC99',1);
INSERT INTO `events` VALUES (4,1,'Volontario1','2023-04-01 00:00:00','2023-04-31 00:00:00','2023-04-13 14:52:10','2023-04-13 14:52:10','#FF0000',0);
INSERT INTO `events` VALUES (5,7,'Michea','2023-04-05 00:00:00','2023-04-25 00:00:00','2023-04-13 14:52:10','2023-04-13 14:52:10','#00FF00',0);
INSERT INTO `events` VALUES (6,8,'Giovanni','2023-04-02 00:00:00','2023-04-28 00:00:00','2023-04-28 14:52:10','2023-04-13 14:52:10','#00FFFF',0);
INSERT INTO `events` VALUES (7,9,'Bruno','2023-04-01 00:00:00','2023-04-15 00:00:00','2023-04-15 14:52:10','2023-04-13 14:52:10','#FF00FF',0);
INSERT INTO `events` VALUES (8,9,'Bruno','2023-04-25 00:00:00','2023-04-31 00:00:00','2023-04-30 14:52:10','2023-04-13 14:52:10','#FF00FF',0);
INSERT INTO `events` VALUES (9,10,'Aldo','2023-04-12 00:00:00','2023-04-18 00:00:00','2023-04-18 14:52:10','2023-04-13 14:52:10','#0000FF',0);
INSERT INTO `events` VALUES (10,10,'Aldo','2023-04-24 00:00:00','2023-04-31 00:00:00','2023-04-30 14:52:10','2023-04-13 14:52:10','#0000FF',0);

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guestHyg`
--

DROP TABLE IF EXISTS `guestHyg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guestHyg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `washing_ab` enum('da solo','con aiuto','dipendente') NOT NULL,
  `dressing_ab` enum('da solo','con aiuto','dipendente') NOT NULL,
  `toilet_ab` enum('da solo','con aiuto','dipendente') NOT NULL,
  `urine_cont` enum('Continente','Incontinente') NOT NULL,
  `feces_cont` enum('Continente','Incontinente') NOT NULL,
  `catheter` enum('si','no') NOT NULL,
  `last_change_date` date DEFAULT NULL,
  `CV` varchar(40) DEFAULT NULL,
  `costipation` enum('si','no') NOT NULL,
  `manual_feces_ext` enum('si','no') NOT NULL,
  `decupitus` enum('si','no') NOT NULL,
  `where_decupitus` varchar(40) DEFAULT NULL,
  `prev_and_cure` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `guesthyg_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guestHyg`
--

LOCK TABLES `guestHyg` WRITE;
/*!40000 ALTER TABLE `guestHyg` DISABLE KEYS */;
INSERT INTO `guestHyg` VALUES (1,4,'da solo','da solo','da solo','Continente','Continente','no',NULL,NULL,'no','no','no',NULL,NULL),(2,6,'da solo','da solo','da solo','Continente','Continente','no',NULL,NULL,'no','no','no',NULL,NULL),(3,8,'da solo','da solo','da solo','Continente','Continente','no',NULL,NULL,'no','no','no','Colautti',NULL);
/*!40000 ALTER TABLE `guestHyg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guestInfo`
--

DROP TABLE IF EXISTS `guestInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guestInfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `marital_state` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `form_placeAndDate` varchar(40) NOT NULL,
  `signature` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `guestinfo_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guestInfo`
--

LOCK TABLES `guestInfo` WRITE;
/*!40000 ALTER TABLE `guestInfo` DISABLE KEYS */;
INSERT INTO `guestInfo` VALUES (1,4,'Sposato',54,170,'Mendriso 2023-04-13','Mic'),(2,6,'Celibe',11,111,'Mendrisio 2023-04-13','ahhhh'),(3,8,'Sposato',190,190,'Mendrisio 2023-04-13','Ahhhhh');
/*!40000 ALTER TABLE `guestInfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `healtIns`
--

DROP TABLE IF EXISTS `healtIns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `healtIns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `number` varchar(30) NOT NULL,
  `picture` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `healtins_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `healtIns`
--

LOCK TABLES `healtIns` WRITE;
/*!40000 ALTER TABLE `healtIns` DISABLE KEYS */;
INSERT INTO `healtIns` VALUES (1,4,'Helsana','756.1234.5678.90','HDD.png'),(2,6,'KPT','756.1234.5678.90','Font.png'),(3,8,'Helsana','756.1234.5678.90','MacDown.png');
/*!40000 ALTER TABLE `healtIns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `illness`
--

DROP TABLE IF EXISTS `illness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `illness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `illness`
--

LOCK TABLES `illness` WRITE;
/*!40000 ALTER TABLE `illness` DISABLE KEYS */;
INSERT INTO `illness` VALUES (1,'Diabete'),(2,'Emicrania'),(3,'Epilessia'),(4,'Pressione bassa'),(5,'Pressione alta'),(6,'Problemi respiratori (es: asma, ecc.)'),(7,'Problemi cardiaci (es: soffio, valvole calcificate, operazioni al cuore, ecc.)'),(8,'Problemi di coagulazione'),(9,'Problemi alle articolazioni'),(10,'Problemi motori'),(11,'Problemi psichci (es: depressione, bipolarismo, ecc.)');
/*!40000 ALTER TABLE `illness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lastRecover`
--

DROP TABLE IF EXISTS `lastRecover`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lastRecover` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `reason` varchar(40) DEFAULT NULL,
  `hospital` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `lastrecover_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lastRecover`
--

LOCK TABLES `lastRecover` WRITE;
/*!40000 ALTER TABLE `lastRecover` DISABLE KEYS */;
/*!40000 ALTER TABLE `lastRecover` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `livingSituation`
--

DROP TABLE IF EXISTS `livingSituation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `livingSituation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `livingState` enum('da solo','con il coniuge','in istituto','con i parenti') NOT NULL,
  `instituteNumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `livingsituation_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livingSituation`
--

LOCK TABLES `livingSituation` WRITE;
/*!40000 ALTER TABLE `livingSituation` DISABLE KEYS */;
INSERT INTO `livingSituation` VALUES (1,4,'da solo',NULL),(2,6,'in istituto',NULL),(3,8,'da solo',NULL);
/*!40000 ALTER TABLE `livingSituation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_03_01_140922_create_events_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movement`
--

DROP TABLE IF EXISTS `movement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `status_and_transport` enum('Indipendente','Semidipendente','Dipendente') NOT NULL,
  `aux_equipment` varchar(30) DEFAULT NULL,
  `arm_sx` enum('buona','ridotta','nessun movimento') NOT NULL,
  `arm_dx` enum('buona','ridotta','nessun movimento') NOT NULL,
  `leg_sx` enum('buona','ridotta','nessun movimento') NOT NULL,
  `leg_dx` enum('buona','ridotta','nessun movimento') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `movement_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movement`
--

LOCK TABLES `movement` WRITE;
/*!40000 ALTER TABLE `movement` DISABLE KEYS */;
INSERT INTO `movement` VALUES (1,4,'Indipendente',NULL,'buona','ridotta','buona','buona'),(2,6,'Indipendente',NULL,'buona','buona','buona','buona'),(3,8,'Indipendente',NULL,'buona','buona','buona','buona');
/*!40000 ALTER TABLE `movement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `occupied`
--

DROP TABLE IF EXISTS `occupied`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `occupied` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPerson` int(11) NOT NULL,
  `idRoom` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idPerson` (`idPerson`),
  KEY `idRoom` (`idRoom`),
  CONSTRAINT `occupied_ibfk_1` FOREIGN KEY (`idPerson`) REFERENCES `person` (`id`),
  CONSTRAINT `occupied_ibfk_2` FOREIGN KEY (`idRoom`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `occupied`
--

LOCK TABLES `occupied` WRITE;
/*!40000 ALTER TABLE `occupied` DISABLE KEYS */;
/*!40000 ALTER TABLE `occupied` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `CAP` varchar(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `type` enum('guest','volunteer','admin','reference') NOT NULL,
  `born_date` date NOT NULL,
  `regUserId` int(11) DEFAULT NULL,
  `userState` enum('suspended','approved') NOT NULL,
  `userMansion` enum('cooking','hospitality','washing','cafeteria','infirmary','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person`
--

LOCK TABLES `person` WRITE;
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` VALUES (1,'Volontariato','DaSempre','0041-12-345-67-89','Verdi 19','1234','Svizzera','volunteer','2000-01-01',1,'approved','cooking'),
(2,'Non','Fornito','Non fornito','Non fornito','Non fornito','Non fornito','reference','1979-07-09',NULL,'approved',''),
(3,'Admin','Super','0041-12-345-67-89','Admin','1234','Admin','admin','1979-07-09',2,'approved',''),
(4,'Ospite1Nome','Ospite1Cognome','0041-12-345-67-89','Mola 12','1234','Svizzera','guest','1934-04-13',4,'approved',''),
(5,'Mario','Botta','0041-12-345-67-12','Mola 12','1234','Svizzera','reference','1956-10-09',NULL,'approved',''),
(6,'Ospite2Nome','Opsite2Cognome','0041-12-345-67-89','Neri 15','9999','Svizzera','guest','1102-11-11',5,'approved',''),
(7,'Luigi','Botta','0041-12-345-77-99','Neri 15','7543','Svizzera','reference','2001-01-01',NULL,'approved',''),
(8,'Ospite3Nome','Ospite3Cognome','0039-12-345-67-89','Boh 9','4321','Svizzera','guest','1912-12-13',6,'approved',''),
(9,'Principessa','Peach','0041-12-667-67-12','Gluck','6666','Svizzera','reference','1933-10-09',NULL,'approved',''),
(10,'Michea','Inventato','0041-78-611-44-43','Pier Francesco Mola 12','6850','Mendrisio','volunteer','2003-10-09',7,'approved','hospitality'),
(11,'Nico','Guarisco','0041-79-656-03-53','Pier Francesco Mola 12','6850','Mendrisio','reference','1979-07-09',NULL,'approved',''),
(12,'Giovanni','Mela','0041-78-611-44-43','Pier Francesco Mola 12','6850','Mendrisio','volunteer','2003-10-09',8,'approved','washing'),
(13,'Giacomo','Leopardi','0041-79-656-03-53','Pier Francesco Mola 12','6850','Mendrisio','reference','1979-07-09',NULL,'approved',''),
(14,'Bruno','Vespa','0041-78-611-44-43','Pier Francesco Mola 12','6850','Mendrisio','volunteer','2003-10-09',9,'approved','cafeteria'),
(15,'Mauro','Corona','0041-79-656-03-53','Pier Francesco Mola 12','6850','Mendrisio','reference','1979-07-09',NULL,'approved',''),
(16,'Aldo','Baglio','0041-78-611-44-43','Pier Francesco Mola 12','6850','Mendrisio','volunteer','2003-10-09',10,'approved','infirmary'),
(17,'Marco','Polo','0041-79-656-03-53','Pier Francesco Mola 12','6850','Mendrisio','reference','1979-07-09',NULL,'approved','');
/*!40000 ALTER TABLE `person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `psySate`
--

DROP TABLE IF EXISTS `psySate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `psySate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `orientation` enum('Buono','Alterato','Molto alterato') NOT NULL,
  `memoria` enum('Buono','Alterato','Molto alterato') NOT NULL,
  `agitation_state` enum('si','no') NOT NULL,
  `depressed` enum('si','no') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `psysate_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `psySate`
--

LOCK TABLES `psySate` WRITE;
/*!40000 ALTER TABLE `psySate` DISABLE KEYS */;
INSERT INTO `psySate` VALUES (1,4,'Buono','Buono','no','no'),(2,6,'Buono','Buono','no','no'),(3,8,'Buono','Buono','no','no');
/*!40000 ALTER TABLE `psySate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referencePerson`
--

DROP TABLE IF EXISTS `referencePerson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referencePerson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `idReference` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  KEY `idReference` (`idReference`),
  CONSTRAINT `referenceperson_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`),
  CONSTRAINT `referenceperson_ibfk_2` FOREIGN KEY (`idReference`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referencePerson`
--

LOCK TABLES `referencePerson` WRITE;
/*!40000 ALTER TABLE `referencePerson` DISABLE KEYS */;
INSERT INTO `referencePerson` VALUES (1,1,2),(2,4,5),(3,6,7),(4,8,9),(5,10,11),(6,12,13),(7,14,15),(8,16,17);
/*!40000 ALTER TABLE `referencePerson` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(10) DEFAULT NULL,
  `block` int(11) DEFAULT NULL,
  `places` int(11) DEFAULT NULL,
  `campId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `campId` (`campId`),
  CONSTRAINT `room_ibfk_1` FOREIGN KEY (`campId`) REFERENCES `camp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sleep`
--

DROP TABLE IF EXISTS `sleep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sleep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGuest` int(11) NOT NULL,
  `sleep` enum('normale','parziale','assente') NOT NULL,
  `difficulty_getting_asleep` enum('si','no') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idGuest` (`idGuest`),
  CONSTRAINT `sleep_ibfk_1` FOREIGN KEY (`idGuest`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sleep`
--

LOCK TABLES `sleep` WRITE;
/*!40000 ALTER TABLE `sleep` DISABLE KEYS */;
INSERT INTO `sleep` VALUES (1,4,'normale','si'),(2,6,'normale','si'),(3,8,'normale','si');
/*!40000 ALTER TABLE `sleep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Volontario','volontario@gmail.com',NULL,'$2y$10$bskYojItBSyDImlAd5ixme3OeNOZ4zXflZAP.VtiYLNuHQ620kwju',NULL,NULL,NULL,NULL,'2023-04-05 06:57:36','2023-04-05 06:57:36'),
(2,'Admin','admin@gmail.com',NULL,'$2y$10$/wkbiWcavXJcz173L9JtUuOGLUdSS1j1M6QQ5ANBdBsnjaNbSVpXq',NULL,NULL,NULL,NULL,'2023-04-05 06:59:37','2023-04-05 06:59:37'),
(3,'Michea','michea.totto@gmail.com',NULL,'$2y$10$eskcRGKoiAKWCNFhOJK9H.kx9r6l8I3A0IekUwHeL.RKCafp3pYOi',NULL,NULL,NULL,NULL,'2023-04-05 10:03:41','2023-04-05 10:03:41'),
(4,'Ospite1','ospite@gmail.com',NULL,'$2y$10$DwrR0gvJO.RX12ruu89EoO7ZbX/RmUDzVKgzBxk1GuJ1PzJwXAi4u',NULL,NULL,NULL,NULL,'2023-04-13 12:26:01','2023-04-13 12:26:01'),
(5,'Ospite2','opsite2@gmail.com',NULL,'$2y$10$YP1iCLDrJ6NdFIRDXBY46OQy5EgY9Hs4N8dYVvYDpWuMEKdZ5K1Na',NULL,NULL,NULL,NULL,'2023-04-13 12:37:14','2023-04-13 12:37:14'),
(6,'Opsite2','opsite3@gmail.com',NULL,'$2y$10$S4SIw.C6a5MDPaskrDNAzuqS0HZOaMWUrOlJOBwVWRs2Gjf9LU4gS',NULL,NULL,NULL,NULL,'2023-04-13 12:40:04','2023-04-13 12:40:04'),
(7,'Volontario2','volontario2@gmail.com',NULL,'$2y$10$rqsexns48e46Wvt2Vky8G.mt9e3IF4/9K4.6Wi4cbPsmX0DjlfgHO',NULL,NULL,NULL,NULL,'2023-04-13 12:43:26','2023-04-13 12:43:26'),
(8,'Volontario3','volontario3@gmail.com',NULL,'$2y$10$rqsexns48e46Wvt2Vky8G.mt9e3IF4/9K4.6Wi4cbPsmX0DjlfgHO',NULL,NULL,NULL,NULL,'2023-04-13 12:43:26','2023-04-13 12:43:26'),
(9,'Volontario4','volontario4@gmail.com',NULL,'$2y$10$rqsexns48e46Wvt2Vky8G.mt9e3IF4/9K4.6Wi4cbPsmX0DjlfgHO',NULL,NULL,NULL,NULL,'2023-04-13 12:43:26','2023-04-13 12:43:26'),
(10,'Volontario5','volontario5@gmail.com',NULL,'$2y$10$rqsexns48e46Wvt2Vky8G.mt9e3IF4/9K4.6Wi4cbPsmX0DjlfgHO',NULL,NULL,NULL,NULL,'2023-04-13 12:43:26','2023-04-13 12:43:26');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteer_illness`
--

DROP TABLE IF EXISTS `volunteer_illness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteer_illness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idVolunteer` int(11) NOT NULL,
  `idIllness` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idVolunteer` (`idVolunteer`),
  KEY `idIllness` (`idIllness`),
  CONSTRAINT `volunteer_illness_ibfk_1` FOREIGN KEY (`idVolunteer`) REFERENCES `autocertificate` (`id`),
  CONSTRAINT `volunteer_illness_ibfk_2` FOREIGN KEY (`idIllness`) REFERENCES `illness` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteer_illness`
--

LOCK TABLES `volunteer_illness` WRITE;
/*!40000 ALTER TABLE `volunteer_illness` DISABLE KEYS */;
/*!40000 ALTER TABLE `volunteer_illness` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-13 16:46:11
