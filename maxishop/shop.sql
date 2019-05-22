DROP DATABASE IF EXISTS shop;
CREATE DATABASE shop;
USE shop;

CREATE TABLE user (
  uid INT auto_increment,
  uname VARCHAR(20),
  email VARCHAR(100),
  psw VARCHAR(20), -- bitte NUR hash SIMON!!!!



  -- VVVVVVVVVVVVVVVVVVVVVVVVVV
  -- V Wenn du noch spaß hast V
  -- VVVVVVVVVVVVVVVVVVVVVVVVVV

  -- description varchar(2200),

  -- location varchar(10),
  -- tel varchar(100),
  -- vname varchar(100),
  -- nname varchar(100),

  -- created datetime,
  -- modified datetime,
  -- permission int,




  PRIMARY KEY (uid)
)ENGINE=INNODB;

CREATE TABLE post(
  pid INT auto_increment,
  uid INT,
  title VARCHAR(20),
  preis VARCHAR(20),
  description VARCHAR(100),
  gewicht INT,
  anzahl INT NOT NULL,
  einheit VARCHAR(20),
  imgsrc VARCHAR(20),
  bestellt VARCHAR(20),
  
  featured boolean Default false, 
  primary key (pid),
  foreign key (uid) references user(uid) on update cascade on delete cascade
)ENGINE=INNODB;

create table vote(

  pid integer,
  vote tinyint,
  uid integer,
  
  primary key (pid, uid),
  foreign key (uid) references user(uid) on delete cascade,
  foreign key (pid) references post(pid) on delete cascade
)engine = innodb;

create table liked(
  
  pid integer,
  uid integer,
  
  primary key (pid, uid),
  foreign key (uid) references user(uid) on delete cascade,
  foreign key (pid) references post(pid) on delete cascade
)engine = innodb;

create table comment(
  
  cid integer auto_increment,
  pid integer,
  uid integer,

  titel varchar(100),
  descreption varchar(2200),
  
  primary key (cid),
  foreign key (uid) references user(uid) on delete cascade,
  foreign key (pid) references post(pid) on delete cascade
)engine = innodb;




