CREATE DATABASE rolegame;


USE rolegame;


CREATE TABLE creature (
    idCreature INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    avatar VARCHAR(255),
    attackPower INT,
    lifeLevel INT,
    weapon VARCHAR(255)
);