CREATE TABLE `Users` (
  `ID`                 int(10) NOT NULL AUTO_INCREMENT, 
  `FirstName`          varchar(255) NOT NULL, 
  `LastName`           varchar(255) NOT NULL, 
  `Mail`               varchar(255) NOT NULL, 
  `UserName`           varchar(255) NOT NULL, 
  `Password`           varchar(255) NOT NULL, 
  `BirthDate`          datetime NOT NULL, 
  `LastConnectionDate` datetime NOT NULL, 
  `CreationDate`       datetime NOT NULL, 
  `Avatar`             varchar(255) NOT NULL, 
  `CitiesID`           int(10) NOT NULL, 
  `CountriesID`        int(10) NOT NULL, 
  PRIMARY KEY (`ID`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `Languages` (
  `ID`   int(10) NOT NULL AUTO_INCREMENT, 
  `Name` int(10) NOT NULL, 
  PRIMARY KEY (`ID`), 
  INDEX (`Name`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `Messages` (
  `ID`            int(10) NOT NULL AUTO_INCREMENT, 
  `MessageTypeID` int(10) NOT NULL, 
  `UsersID`       int(10) NOT NULL, 
  `ChainId`       varchar(255) NOT NULL, 
  `Date`          datetime NOT NULL, 
  PRIMARY KEY (`ID`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `UsedLanguages` (
  `UsersID`     int(10) NOT NULL, 
  `LanguagesID` int(10) NOT NULL, 
  `Date`        datetime NOT NULL, 
  PRIMARY KEY (`UsersID`, 
  `LanguagesID`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `wantedLanguages` (
  `UsersID`     int(10) NOT NULL, 
  `LanguagesID` int(10) NOT NULL, 
  `Date`        datetime NOT NULL, 
  PRIMARY KEY (`UsersID`, 
  `LanguagesID`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `Dislikes` (
  `MessagesID` int(10) NOT NULL, 
  `UsersID`    int(10) NOT NULL, 
  `Date`       datetime NOT NULL, 
  PRIMARY KEY (`MessagesID`, 
  `UsersID`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `likes` (
  `MessagesID` int(10) NOT NULL, 
  `UsersID`    int(10) NOT NULL, 
  `Date`       datetime NOT NULL, 
  PRIMARY KEY (`MessagesID`, 
  `UsersID`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `Bookmarks` (
  `MessagesID` int(10) NOT NULL, 
  `UsersID`    int(10) NOT NULL, 
  `Date`       datetime NOT NULL, 
  PRIMARY KEY (`MessagesID`, 
  `UsersID`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `Reporting` (
  `MessagesID` int(10) NOT NULL, 
  `UsersID`    int(10) NOT NULL, 
  `Date`       datetime NOT NULL, 
  PRIMARY KEY (`MessagesID`, 
  `UsersID`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `Viewed` (
  `MessagesID` int(10) NOT NULL, 
  `UsersID`    int(10) NOT NULL, 
  `Date`       datetime NOT NULL, 
  PRIMARY KEY (`MessagesID`, 
  `UsersID`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `Countries` (
  `ID`   int(10) NOT NULL AUTO_INCREMENT, 
  `Name` int(10) NOT NULL, 
  `Code` int(10) NOT NULL, 
  PRIMARY KEY (`ID`), 
  INDEX (`Name`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `Cities` (
  `ID`          int(10) NOT NULL AUTO_INCREMENT, 
  `Name`        int(10) NOT NULL, 
  `CountriesID` int(10) NOT NULL, 
  `Code`        int(10) NOT NULL, 
  PRIMARY KEY (`ID`), 
  INDEX (`Name`)) type=InnoDB CHARACTER SET UTF8;
CREATE TABLE `MessageType` (
  `ID`       int(10) NOT NULL AUTO_INCREMENT, 
  `TypeName` int(10), 
  PRIMARY KEY (`ID`)) type=InnoDB CHARACTER SET UTF8;
ALTER TABLE `UsedLanguages` ADD INDEX `FKUsedLangua112238` (`UsersID`), ADD CONSTRAINT `FKUsedLangua112238` FOREIGN KEY (`UsersID`) REFERENCES `Users` (`ID`);
ALTER TABLE `UsedLanguages` ADD INDEX `FKUsedLangua85892` (`LanguagesID`), ADD CONSTRAINT `FKUsedLangua85892` FOREIGN KEY (`LanguagesID`) REFERENCES `Languages` (`ID`);
ALTER TABLE `wantedLanguages` ADD INDEX `UserLanguages` (`UsersID`), ADD CONSTRAINT `UserLanguages` FOREIGN KEY (`UsersID`) REFERENCES `Users` (`ID`);
ALTER TABLE `wantedLanguages` ADD INDEX `FKwantedLang318904` (`LanguagesID`), ADD CONSTRAINT `FKwantedLang318904` FOREIGN KEY (`LanguagesID`) REFERENCES `Languages` (`ID`);
ALTER TABLE `Messages` ADD INDEX `FKMessages118180` (`UsersID`), ADD CONSTRAINT `FKMessages118180` FOREIGN KEY (`UsersID`) REFERENCES `Users` (`ID`);
ALTER TABLE `Dislikes` ADD INDEX `Dislikes` (`MessagesID`), ADD CONSTRAINT `Dislikes` FOREIGN KEY (`MessagesID`) REFERENCES `Messages` (`ID`);
ALTER TABLE `Dislikes` ADD INDEX `FKDislikes520045` (`UsersID`), ADD CONSTRAINT `FKDislikes520045` FOREIGN KEY (`UsersID`) REFERENCES `Users` (`ID`);
ALTER TABLE `likes` ADD INDEX `Likes` (`MessagesID`), ADD CONSTRAINT `Likes` FOREIGN KEY (`MessagesID`) REFERENCES `Messages` (`ID`);
ALTER TABLE `likes` ADD INDEX `FKlikes542952` (`UsersID`), ADD CONSTRAINT `FKlikes542952` FOREIGN KEY (`UsersID`) REFERENCES `Users` (`ID`);
ALTER TABLE `Bookmarks` ADD INDEX `Bookmarks` (`MessagesID`), ADD CONSTRAINT `Bookmarks` FOREIGN KEY (`MessagesID`) REFERENCES `Messages` (`ID`);
ALTER TABLE `Bookmarks` ADD INDEX `FKBookmarks755940` (`UsersID`), ADD CONSTRAINT `FKBookmarks755940` FOREIGN KEY (`UsersID`) REFERENCES `Users` (`ID`);
ALTER TABLE `Reporting` ADD INDEX `Reporting` (`MessagesID`), ADD CONSTRAINT `Reporting` FOREIGN KEY (`MessagesID`) REFERENCES `Messages` (`ID`);
ALTER TABLE `Reporting` ADD INDEX `FKReporting752896` (`UsersID`), ADD CONSTRAINT `FKReporting752896` FOREIGN KEY (`UsersID`) REFERENCES `Users` (`ID`);
ALTER TABLE `Viewed` ADD INDEX `Viewed` (`MessagesID`), ADD CONSTRAINT `Viewed` FOREIGN KEY (`MessagesID`) REFERENCES `Messages` (`ID`);
ALTER TABLE `Viewed` ADD INDEX `FKViewed197403` (`UsersID`), ADD CONSTRAINT `FKViewed197403` FOREIGN KEY (`UsersID`) REFERENCES `Users` (`ID`);
ALTER TABLE `Cities` ADD INDEX `FKCities365168` (`CountriesID`), ADD CONSTRAINT `FKCities365168` FOREIGN KEY (`CountriesID`) REFERENCES `Countries` (`ID`);
ALTER TABLE `Users` ADD INDEX `FKUsers293537` (`CountriesID`), ADD CONSTRAINT `FKUsers293537` FOREIGN KEY (`CountriesID`) REFERENCES `Countries` (`ID`);
ALTER TABLE `Users` ADD INDEX `FKUsers598857` (`CitiesID`), ADD CONSTRAINT `FKUsers598857` FOREIGN KEY (`CitiesID`) REFERENCES `Cities` (`ID`);
ALTER TABLE `Messages` ADD INDEX `FKMessages603811` (`MessageTypeID`), ADD CONSTRAINT `FKMessages603811` FOREIGN KEY (`MessageTypeID`) REFERENCES `MessageType` (`ID`);
