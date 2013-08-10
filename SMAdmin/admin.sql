-- MySQL dump 10.13  Distrib 5.5.25, for Win32 (x86)
--
-- Host: localhost    Database: eshop
-- ------------------------------------------------------
-- Server version	5.5.25

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('arajula','335d552d2a947588f746551acaf6e9ac','Amit Rajula'),('asalvi','8cfce480456ad039e8484561eef4337c',NULL),('vmhapsekar','22b315dac57e200edb07a9ae8ced8fa3','Vinit Mhapsekar');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand` (
  `brandname` varchar(30) NOT NULL,
  `brandinfo` varchar(800) DEFAULT NULL,
  `brandimg` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`brandname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES ('Nike','Puma is a well known sports lifestyle firm famous for its trendy products and revolutionary designs. Amalgamation of Sports, Lifestyle and Fashion makes Puma one of the most desirable brands in the world today. This German sporting goods firm collaborates with renowned artists and designers like Hussein Chalayan, Philip Starck, Alexander McQueen, Jil Sander etc which gives it an edge over its rivals and is endorsed by famous sporting legends like Pele, Usain Bolt, Maradona and Ryan Giggs to name a few. The leaping Puma also symbolizes combination of speed, power, and elegance often exhibited by professional athletes.','Nike.jpg'),('pepe jeans','jfbdsjfjfdjsjdfdsm jdfjd jfjf d  jj j j j js jsj sd djjdn js sd s jj  jj dsj f','nike.jpg'),('Spykar','jfbdsjfjfdjsjdfdsm jdfjd jfjf d  jj j j j js jsj sd djjdn js sd s jj  jj dsj f','nike1.jpg');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES ('amit.rajula@gmail.com'),('amit.rajula@gmail.com'),('amit.rajula@gmail.com'),('amit.rajula@gmail.com'),('amit.rajula@gmail.com'),('amit.rajula@gmail.com');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credits`
--

DROP TABLE IF EXISTS `credits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credits` (
  `username` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `size` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credits`
--

LOCK TABLES `credits` WRITE;
/*!40000 ALTER TABLE `credits` DISABLE KEYS */;
INSERT INTO `credits` VALUES ('ranjan',400,'Narrow Pepe Jeans','used',7,'34'),('ranjan',400,'Spykar Casual Shirt','used',1,'medium'),('ranjan',400,'Narrow Pepe Jeans','not used',7,'34');
/*!40000 ALTER TABLE `credits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `username` varchar(30) DEFAULT NULL,
  `response` varchar(1000) DEFAULT NULL,
  `period` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES ('amit','Very good shopping site','2012-08-23'),('amit','sdgsgg','2012-09-07'),('amit','hgjhgjgfjhjhfgjh','2012-09-08'),('amit','aaa','2012-09-21'),('amit','','2012-09-21'),('amit','aaa','2012-10-21'),('amit','aaa','2012-10-23');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `look`
--

DROP TABLE IF EXISTS `look`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `look` (
  `lookid` int(10) NOT NULL,
  `lookname` varchar(1000) DEFAULT NULL,
  `pid` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`lookid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `look`
--

LOCK TABLES `look` WRITE;
/*!40000 ALTER TABLE `look` DISABLE KEYS */;
INSERT INTO `look` VALUES (1,'Casual','1,7,16,'),(2,'Formal','5,7,8,'),(3,'look3','11,12,13,');
/*!40000 ALTER TABLE `look` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `pid` int(11) NOT NULL DEFAULT '0',
  `pname` varchar(50) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `returnid` int(11) NOT NULL AUTO_INCREMENT,
  `flag` int(11) DEFAULT NULL,
  `finalAmt` int(11) DEFAULT NULL,
  `DOO` varchar(100) DEFAULT NULL,
  `totalprod` varchar(100) DEFAULT NULL,
  `billaddress` varchar(500) DEFAULT NULL,
  `billemail` varchar(100) DEFAULT NULL,
  `billcontact` varchar(500) DEFAULT NULL,
  `shipaddress` varchar(500) DEFAULT NULL,
  `shipemail` varchar(100) DEFAULT NULL,
  `shipcontact` varchar(500) DEFAULT NULL,
  `shipusername` varchar(100) DEFAULT NULL,
  `paymentmode` varchar(100) DEFAULT NULL,
  `mypointsdisc` varchar(50) DEFAULT NULL,
  `discountprice` varchar(50) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  PRIMARY KEY (`returnid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (7,'Narrow Pepe Jeans','34',400,'Amit Rajula','nikeshoes1.jpg',1,0,388,'2013/04/13 15:03','7,','70/Kharas Bldg.,N.M.Joshi Marg,Mumbai,Maharashtra,400013','amit.rajula@gmail.com','9773436955','a,a,a,Maharashtra,400013','vikas.tadi@gmail.com','1','a','nb','3%','388',2);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quant` int(11) DEFAULT NULL,
  `brand` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `info` varchar(800) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `img1` varchar(20) DEFAULT NULL,
  `img2` varchar(20) DEFAULT NULL,
  `img3` varchar(20) DEFAULT NULL,
  `img4` varchar(20) DEFAULT NULL,
  `img5` varchar(20) DEFAULT NULL,
  `subname` varchar(30) DEFAULT NULL,
  `discprice` int(10) DEFAULT NULL,
  `discountpercent` varchar(500) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Spyakr Casual Shirt','medium',50,5,'spykar','full sleeves','red','Name:nike-Size:10-Sole:Kkak-Material:soft-Stiching:stright','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','casual shirts',50,'0 % off','In Stock'),(2,'Tommy Hilfigure Shirt','medium',1500,6,'Tommy Hilfigure','half sleeves','black','Name: puma -Size:9-Sole:chota','clothing','nikeshoes1.jpg',NULL,NULL,NULL,NULL,'casual shirts',750,'50 % off','In Stock'),(3,'Espirit Shirt','large',400,1,'Espirit','full sleeves','blue','Name: Adidas-Size:10','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','casual shirts',NULL,NULL,'In Stock'),(4,'Spyakr Shirt','xl',300,2,'spykar','full sleeves','red','Name: Fila-Size:8-Sole:Rough','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','casual shirts',150,'50 % off','In Stock'),(5,'Arrow Formal Shirt','38',300,1,'arrow','half sleeves','red','Name: Arrow-Size:38-Fabric:cotton','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','formal shirts',300,'50 % off','In Stock'),(6,'Black Berry Formal Shirt ','40',1000,5,'black berry','full sleeves','blue','Name: Arrow-Size:38-Fabric:Cotton','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','formal shirts',1000,NULL,'In Stock'),(7,'Narrow Pepe Jeans','34',400,5,'pepe jeans','narrow fit','blue','Name: Narrow Pepe Jeans-Size:34-Fabric:Cotton','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','jeans',400,'0 % off','In Stock'),(9,'Narrow Black Berry Trouser','34',400,5,'Black Berry','narrow fit','black','Name: Narrow Black Berry Trouser-Size:34-Fabric:Cotton','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','trousers',200,'50 % off','In Stock'),(10,'Narrow Black Berry Trouser','34',400,5,'Black Berry','slim fit','blue','Name: Narrow Black Berry Trouser-Size:34-Fabric:Cotton','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','trousers',400,NULL,'In Stock'),(11,'Spykar Collar Tees','large',500,1,'spykar','collar','red','Name: Spykar Collar Tees-Size:Large-Fabric:Cotton','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','t-shirts',250,'50 % off','In Stock'),(12,'Spykar Collar Tees','medium',500,1,'spykar','collar','blue','Name: Spykar Collar Tees-Size:Large-Fabric:Cotton','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','t-shirts',500,NULL,'In Stock'),(13,'E-spirit Collar Tees','large',500,1,'Espirit','Collar','blue','Name: E-Spirit Collar Tees-Size:Large-Fabric:Cotton','clothing','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','t-shirts',250,'50 % off','In Stock'),(14,'Nike Shoes','8',500,1,'nike','cricket','blue','Name: Nike Shoes-Size:8','footwear','nikeshoes1.jpg','p1.jpg','p2.jpg','p3.jpg','p4.jpg','sportsshoes',250,'50 % off','In Stock'),(16,'Hollister Formal Shirt','36',1000,1,'Hollister','half sleeves','green','Name: Hollister Shirt','clothing','nikeshoes1.jpg','p2.jpg','p3.jpg','p4.jpg','p5.jpg','formal shirts',500,'50 % off','In Stock'),(17,'Hollister Formal Shirt','38',1000,1,'Hollister','half sleeves','blue','Name: Hollister Shirt','clothing','nikeshoes1.jpg','p2.jpg','p3.jpg','p4.jpg','p5.jpg','formal shirts',500,'50 % 0ff','In Stock');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `returns`
--

DROP TABLE IF EXISTS `returns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `returns` (
  `pid` int(11) DEFAULT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `returnid` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `oid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `returns`
--

LOCK TABLES `returns` WRITE;
/*!40000 ALTER TABLE `returns` DISABLE KEYS */;
/*!40000 ALTER TABLE `returns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `pid` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `desciption` mediumtext,
  `rating` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (14,'amit','ddd','qeccv','Pretty Good'),(10,'amit','wqas','nhtdfds','Excellent'),(7,'amit','exciting','good','Pretty Good'),(7,'amit','aaa','zzz','Excellent'),(7,'amit','aaa','zzz','Excellent'),(7,'amit','aaa','zzz','Excellent'),(7,'amit','aaa','zzz','Excellent'),(7,'amit','aaa','zzz','Excellent'),(7,'amit','aaa','zzz','Excellent'),(5,'amit','wsd','sdsa','Mediocre'),(1,'amit','','','Pretty Good'),(7,'Amit','aaa','aaa','Excellent');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `track`
--

DROP TABLE IF EXISTS `track`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `track` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `DOO` varchar(100) DEFAULT NULL,
  `totalprod` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `track`
--

LOCK TABLES `track` WRITE;
/*!40000 ALTER TABLE `track` DISABLE KEYS */;
INSERT INTO `track` VALUES (1,'dkfhdsfg','','',''),(2,'WIll Be Delivered in 24 hours','Amit Rajula','2013/04/13 15:03','7,'),(3,'WIll Be Delivered in 24 hours','Amit Rajula','2013/04/16 23:01','1,');
/*!40000 ALTER TABLE `track` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `trolley` varchar(5000) DEFAULT NULL,
  `history` varchar(8000) DEFAULT NULL,
  `mypoints` int(11) DEFAULT NULL,
  `sesid` varchar(100) DEFAULT NULL,
  `credits` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('aaa','594f803b380a41396ed63dca39503542',NULL,'aaaa123@gmail.com',NULL,NULL,500,'isnb9rotei39vgg7phi0862tp4','0','male',NULL),('aaaaa','3dbe00a167653a1aaee01d93e77e730e',NULL,'aaaaaa@gmail.com',NULL,NULL,500,'isnb9rotei39vgg7phi0862tp4','0','male',NULL),('Amit Rajula','47bce5c74f589f4867dbd57e9ca9f808','9773436955','amit.rajula@gmail.com','7,',NULL,6757,'4f395ipf5dmipvrp8lfc43g9g5','0','male','70/Kharas Bldg.,N.M.Joshi Marg,Mumbai,Maharashtra,400013'),('www','ad57484016654da87125db86f4227ea3',NULL,'www@gmail.com',NULL,NULL,500,'isnb9rotei39vgg7phi0862tp4','0','male',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vint`
--

DROP TABLE IF EXISTS `vint`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vint` (
  `uname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vint`
--

LOCK TABLES `vint` WRITE;
/*!40000 ALTER TABLE `vint` DISABLE KEYS */;
/*!40000 ALTER TABLE `vint` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-04-24  0:16:48
