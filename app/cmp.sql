-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cmp
-- ------------------------------------------------------
-- Server version	5.5.58-0ubuntu0.14.04.1

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,27,1,'www',1506882086),(2,1,27,1,'asdfasf',1506882121),(3,1,27,1,'asdfasdf',1506882195),(4,1,27,1,'asdfasdf',1506882233),(5,1,27,1,'asdfasdf',1506882240),(6,1,27,1,'something new',1506882276),(7,1,27,1,'fff',1507015466),(8,1,28,1,'qweoqew[pqwerqwer',1507016034),(9,1,28,1,'f',1507016069),(10,1,28,1,'asdf',1507016089),(11,1,28,1,'f',1507016110),(12,1,28,1,'u',1507016129),(13,1,29,1,'ff',1507016418),(14,1,29,1,'Ð¹ÑƒÑ†ÐºÐ¹ÑƒÑ†Ðº',1507018296),(15,1,30,1,'qwerty',1507023588),(16,1,32,1,'qoiwerpoiqwporiqwr',1507024167),(17,1,32,1,'ASDFASDFEASDF',1507024173),(18,1,33,1,'Donec hendrerit dui a sapien viverra, ac ultrices velit blandit. Integer in vestibulum mi, aliquam dapibus nunc. Maecenas viverra metus sed tortor dignissim ultricies. Etiam lobortis non velit id dignissim. Pellentesque facilisis ipsum nisi, non dignissim dui accumsan quis. Suspendisse lacinia quis felis vel scelerisque. Donec in nisi velit. Ut imperdiet lectus eget dignissim venenatis.',1507024604),(19,1,33,1,'Sed pellentesque, velit vel congue auctor, eros lorem efficitur diam, in sodales nulla diam a mauris. Maecenas consequat egestas convallis. Maecenas sit amet augue vel eros accumsan mollis. Curabitur et est vulputate, viverra risus eu, tincidunt tortor. Curabitur posuere, eros vel efficitur dictum, lorem justo venenatis est, sit amet viverra lacus arcu eget neque. Donec eu elementum ipsum. Suspendisse et odio at mi dapibus lobortis eu ac metus. Curabitur at urna eu urna facilisis pulvinar. Maecenas tincidunt est id blandit accumsan.',1507024613),(20,1,33,1,'Praesent efficitur elit non luctus mattis. Integer venenatis magna lacus, at sodales ligula ultricies in. Aenean leo nibh, tempus a ante quis, maximus mattis lacus. Aliquam accumsan sagittis libero. Quisque ac leo eu nisi semper interdum. Aliquam erat volutpat. Nulla in magna eu ligula tempor placerat blandit eget enim. Maecenas laoreet venenatis velit finibus pulvinar. Sed urna mi, fringilla in auctor nec, dignissim nec metus.',1507024621),(21,1,33,1,'Phasellus elit est, porttitor vitae pretium eget, finibus tempor est. Sed varius blandit tempus. Suspendisse tristique nulla imperdiet gravida luctus. Vestibulum vel magna sit amet urna maximus accumsan. Maecenas vestibulum pretium eros vel bibendum. Proin ac ornare massa. Praesent consectetur dolor sed eleifend porttitor. Nam ultrices lacus a quam ornare ultrices. Integer ultricies dictum tristique. Donec venenatis turpis et hendrerit malesuada. Nunc iaculis nisl diam, eget convallis metus dapibus eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut dui sem, fermentum sit amet tristique non, auctor a tellus. Morbi mauris eros, lacinia a convallis id, auctor at ante. Mauris pellentesque pulvinar ante, at tempus nunc faucibus non.',1507024632),(22,1,33,1,'Phasellus tincidunt, justo a placerat pulvinar, orci nisl cursus quam, eget convallis nibh sem vehicula neque. Morbi suscipit eu tellus vitae rhoncus. Donec non sapien mollis, sollicitudin libero vel, elementum lorem. Sed tincidunt pretium egestas. Nullam convallis purus vitae fermentum sodales. Vestibulum sed magna turpis. Phasellus eu augue nulla. Nam facilisis velit eget risus efficitur cursus. Quisque non arcu nec lacus bibendum iaculis. Aenean pulvinar sed ligula eu ultricies. Aliquam quis bibendum augue, id facilisis augue. Fusce laoreet leo vitae ipsum consequat, id auctor est efficitur. Nunc non ligula dictum, aliquam elit sodales, mattis lacus. Nunc sollicitudin tincidunt bibendum. Pellentesque feugiat, enim eget tempor porttitor, justo ante sodales turpis, et suscipit orci diam sit amet lectus.',1507025344),(23,1,33,1,'Praesent lacus purus, iaculis non rhoncus et, bibendum et eros. Integer sit amet quam vel felis posuere imperdiet. Cras sagittis tempor dolor. Sed sed lacinia justo. Nulla vestibulum, ex et tempus ornare, urna ligula malesuada tortor, sed pretium orci quam et odio. Nulla et odio sed diam mollis laoreet. Vivamus non ligula volutpat, sollicitudin eros porttitor, maximus sapien. Vivamus sit amet mi dolor. Donec a faucibus ex. Aliquam consequat libero sit amet lacus imperdiet, vitae elementum purus aliquet. ',1507025359),(24,1,33,1,'Sed pellentesque, velit vel congue auctor, eros lorem efficitur diam, in sodales nulla diam a mauris. Maecenas consequat egestas convallis. Maecenas sit amet augue vel eros accumsan mollis. Curabitur et est vulputate, viverra risus eu, tincidunt tortor. Curabitur posuere, eros vel efficitur dictum, lorem justo venenatis est, sit amet viverra lacus arcu eget neque. Donec eu elementum ipsum. Suspendisse et odio at mi dapibus lobortis eu ac metus. Curabitur at urna eu urna facilisis pulvinar. Maecenas tincidunt est id blandit accumsan.',1507025380),(25,1,33,27,'Sed pellentesque, velit vel congue auctor, eros lorem efficitur diam, in sodales nulla diam a mauris. Maecenas consequat egestas convallis. Maecenas sit amet augue vel eros accumsan mollis. Curabitur et est vulputate, viverra risus eu, tincidunt tortor. ',1507026864),(26,1,33,27,'Sed pellentesque, velit vel congue auctor, eros lorem efficitur diam, in sodales nulla diam a mauris. Maecenas consequat egestas convallis. Maecenas sit amet augue vel eros accumsan mollis. Curabitur et est vulputate, viverra risus eu, tincidunt tortor. ',1507026876),(27,1,33,2,'Proin ac ornare massa. Praesent consectetur dolor sed eleifend porttitor. Nam ultrices lacus a quam ornare ultrices. Integer ultricies dictum tristique. Donec venenatis turpis et hendrerit malesuada. Nunc iaculis nisl diam, eget convallis metus dapibus eu.',1507026902),(28,1,33,2,'Nulla in magna eu ligula tempor placerat blandit eget enim. Maecenas laoreet venenatis velit finibus pulvinar. Sed urna mi, fringilla in auctor nec, dignissim nec metus.',1507026912),(29,1,32,2,'fff',1507028122),(30,1,33,1,'test',1507030843);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_user_id_creator` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,300,'test','test descr'),(2,300,'create rest','rest api, develop'),(7,300,'eeeeeeeee','hhhhhhhhhhhhh'),(17,300,'asdfasdfasdf','asdfasdfasdf'),(18,300,'asdfasdf','qweqwe'),(19,300,'asdfasdf','asdfasdfasdf'),(20,300,'zxcvzxcvzxc','zxcvzxcv');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `user_id_creator` int(11) NOT NULL,
  `user_id_assignee` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `task_date_creation` int(11) NOT NULL,
  `task_status` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (11,1,1,1,'bbbbbbbbb','cccc',1512252486,1),(12,1,1,1,'asdfad','asdfasdf',1512252498,2);
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `rights` int(11) NOT NULL,
  UNIQUE KEY `user_id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (27,'Garry','Garry@gmail.com','$2y$12$.Vo0/U6zLbdh0a92rQuYjOrrSq6pB842y4F6qaqeLd3uAitYVZHH6',15),(1,'Mars','mars@mars.ua','$2y$12$GA7WoL4cgkpsg24i7nUk0uN6vMpxiIPZvbh29J9wEw4W.T7RbtVy2',15),(2,'Bob','bob@ya.ru','$2y$12$vzJpwx6QJs/5qXZMqvl3qOkih11vkNE8Bm6LLRmOT2LyuOUprGFWC',15);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-03 18:22:26
