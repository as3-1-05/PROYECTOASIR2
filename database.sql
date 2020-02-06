create database usuarios;

use usuarios;

CREATE TABLE login (
  id int(9) NOT NULL auto_increment,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL,  
  PRIMARY KEY  (id)
) ENGINE=InnoDB;

