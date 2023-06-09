CREATE TABLE photos(
    photoId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    path VARCHAR(255) NOT NULL,
    userId INT NOT NULL,
    FOREIGN KEY (userId) REFERENCES users(userId)
) ENGINE=INNODB;

ALTER TABLE users
ADD COLUMN photo VARCHAR(255);