CREATE TABLE `projects` (
  `projectId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projectName` varchar(100) NOT NULL,
  `projectDesc` varchar(100) NOT NULL,
  `projectData` LONGTEXT NOT NULL,
  `ownerId` int(10) NOT NULL,
  PRIMARY KEY (`projectId`),
  UNIQUE KEY ownerId (`ownerId`)
  -- FOREIGN KEY (`owner`) REFERENCES user(`username`)
)