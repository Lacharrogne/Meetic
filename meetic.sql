DROP DATABASE IF EXISTS meetic;
CREATE DATABASE meetic;

USE meetic;

DROP TABLE IF EXISTS user;

CREATE TABLE user (
    id              INT             NOT NULL AUTO_INCREMENT,
    lastname        VARCHAR(255)    NOT NULL,
    firstname       VARCHAR(255)    NOT NULL,
    birthdate       DATE            NOT NULL,
    gender          VARCHAR(255)    NOT NULL,
    city            VARCHAR(255)    NOT NULL,
    email           VARCHAR(255)    NOT NULL UNIQUE,
    pass            VARCHAR(255)    NOT NULL,
    loisir          VARCHAR(255)    NOT NULL,
    
    PRIMARY KEY (id)
);

INSERT INTO user
            (lastname,firstname,birthdate,gender,city,email,pass,loisir)
    VALUES  ('charron','maxime','2000-10-06','Homme','paris','max.char@gmail.com','verbub46+6','sport')