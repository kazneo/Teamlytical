CREATE TABLE `files`(
    `fileId` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `projectId` int NOT NULL,
    `timeStamp`datetime NOT NULL,
    `fileName` varchar NOT NULL,
    `file_path` varchar(255) NOT NULL,
    PRIMARY KEY ('fileId'),
    FOREIGN KEY ('projectId') REFERENCES projects('projectId')
)