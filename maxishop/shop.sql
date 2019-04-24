DROP DATABASE IF EXISTS shop;
CREATE DATABASE shop;
USE shop;

CREATE TABLE item(
  name VARCHAR(20),
  kosten INTEGER,
  beschreibung VARCHAR(100),
  gewicht INTEGER,
  menge INTEGER,
  imgsrc VARCHAR(20),
  PRIMARY KEY(name)
)ENGINE=INNODB;

CREATE TABLE user (
  uname VARCHAR(20),
  vname VARCHAR(20),
  nname VARCHAR(20),
  email VARCHAR(100),
  pw VARCHAR(20),
  isAdmin BOOLEAN,
  PRIMARY KEY (uname)
)ENGINE=INNODB;

GRANT ALL ON shop.* TO 'insy3'@'localhost';
