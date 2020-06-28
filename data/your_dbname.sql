CREATE DATABASE IF NOT EXISTS `team3` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `team3`;


CREATE TABLE IF NOT EXISTS `typeofroom` (
  `ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `typeofroom_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `total_room` numeric(8,0) NOT NULL,
  `price` numeric(10,0) NOT NULL,
  PRIMARY KEY (`ID`,`typeofroom_ID`),
  FOREIGN KEY (`ID`) REFERENCES hostel(`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `occupied_room` (
  `ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `typeofroom_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `date` varchar(20) COLLATE utf8_bin NOT NULL,
  `surplus_room` numeric(12,2) NOT NULL,
  PRIMARY KEY (`ID`,`typeofroom_ID`,`date`),
  FOREIGN KEY (`ID`) REFERENCES hostel(`ID`),
  FOREIGN KEY (`ID`,`typeofroom_ID`) REFERENCES typeofroom(`ID`,`typeofroom_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `customerData` (
  `customer_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `customer_phone` varchar(10) COLLATE utf8_bin NOT NULL,
  `customer_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `customer_email` varchar(30) COLLATE utf8_bin NOT NULL,
  `customer_password` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `order` (
  `order_ID` varchar(15) COLLATE utf8_bin NOT NULL,
  `order_date` varchar(8) COLLATE utf8_bin NOT NULL,
  `customer_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `typeofroom_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `date` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`order_ID`),
  FOREIGN KEY (`customer_ID`) REFERENCES customerData(`customer_ID`),
  FOREIGN KEY (`ID`,`typeofroom_ID`,`date`) REFERENCES occupied_room(`ID`,`typeofroom_ID`,`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


CREATE TABLE IF NOT EXISTS `hotelMeneger` (
  `meneger_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `meneger_password` char(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`meneger_ID`),
  FOREIGN KEY (`meneger_ID`) REFERENCES `hostel`(`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 插入資料
hotelmeneger