CREATE TABLE `user` (
 `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(100) NOT NULL,
 `username` varchar(50) NOT NULL,
 `email` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 `phoneNum` varchar(20) NOT NULL,
 `aboutMe` varchar NOT NULL,
 PRIMARY KEY (`userid`),
 UNIQUE KEY 'email' ('email'),
 UNIQUE KEY 'username' ('username')
);

INSERT INTO user VALUES
 (1, 'Kazuki Neo', 'neok', 'neok@rpi.edu', 'neok', '', ''),
 (2, 'Terry Lin', 'lint18', 'lint18@rpi.edu', 'lint18', '', ''),
 (3, 'Isabel Batem', 'batemi', 'batemi@rpi.edu', 'batemi', '', '')