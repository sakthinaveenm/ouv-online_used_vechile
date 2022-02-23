`Custid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Passwd` varchar(20) NOT NULL


  CREATE TABLE `ouv_shopping_db`.`seller` ( `sellerID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `Username` VARCHAR(20) NOT NULL , `emailId` VARCHAR(30) NOT NULL , `Passwd` VARCHAR(30) NOT NULL , `Aadhaar` VARCHAR(30) NOT NULL ) ENGINE = InnoDB;