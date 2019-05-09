DROP DATABASE IF EXISTS shop;
CREATE DATABASE shop;
USE shop;

CREATE TABLE item(
  name VARCHAR(20),
  kosten VARCHAR(20),
  beschreibung VARCHAR(100),
  gewicht VARCHAR(20),
  menge VARCHAR(20),
  imgsrc VARCHAR(20),
  bestellt VARCHAR(20),
  PRIMARY KEY(name)
)ENGINE=INNODB;

INSERT INTO item VALUES ('apfel','1,50€','Ein Apfel (grün)','0,25 Kilo','10','/img/apfel.jpg','5');

CREATE TABLE user (
  uname VARCHAR(20),
  vname VARCHAR(20),
  nname VARCHAR(20),
  email VARCHAR(100),
  pw VARCHAR(20),
  isAdmin BOOLEAN,
  PRIMARY KEY (uname)
)ENGINE=INNODB;
