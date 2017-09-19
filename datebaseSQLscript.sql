create database eternity;
use eternity;

CREATE TABLE galery (
  picture VARCHAR(255) NOT NULL,
  user_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(picture),
  INDEX galery_FKIndex1(user_id)
)
ENGINE=InnoDB;

CREATE TABLE users (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NULL,
  pass VARCHAR(20) NULL,
  email VARCHAR(255) NULL,
  PRIMARY KEY(id)
)
ENGINE=InnoDB;

