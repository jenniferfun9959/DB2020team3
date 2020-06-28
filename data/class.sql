CREATE TABLE IF NOT EXISTS `hostel` (
  `ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `tel` varchar(10) COLLATE utf8_bin NOT NULL,
  `city` varchar(10) COLLATE utf8_bin NOT NULL,
  `addr` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `typeofroom` (
  `ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `typeofroom_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `total_room` numeric(8,0) NOT NULL,
  `price` numeric(10,0)  CHECK (price > 0) NOT NULL,
  PRIMARY KEY (`ID`,`typeofroom_ID`),
  FOREIGN KEY (`ID`) REFERENCES hostel(`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `occupied_room` (
  `ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `typeofroom_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `date` varchar(20) COLLATE utf8_bin NOT NULL,
  `surplus_room` numeric(12,2) CHECK (price >= 0) NOT NULL,
  PRIMARY KEY (`ID`,`typeofroom_ID`,`date`),
  FOREIGN KEY (`ID`) REFERENCES hostel(`ID`),
  FOREIGN KEY (`typeofroom_ID`) REFERENCES typeofroom_ID(`typeofroom_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `order` (
  `order_ID` varchar(15) COLLATE utf8_bin NOT NULL,
  `order_date` varchar(7) COLLATE utf8_bin NOT NULL,
  `customer_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `surplus_room` numeric(12,2) CHECK (price >= 0) NOT NULL,
  PRIMARY KEY (`order_ID`),
  FOREIGN KEY (`customer_ID`) REFERENCES customerData(`customer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `customerData` (
  `customer_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `customer_phone` char(10) COLLATE utf8_bin NOT NULL,
  `customer_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `customer_email` varchar(30) COLLATE utf8_bin NOT NULL,
  `customer_password` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`customer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `hotelMeneger` (
  `meneger_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `meneger_password` char(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`meneger_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;