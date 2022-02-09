CREATE TABLE users (
user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(20) NOT NULL,
password VARCHAR(20) NOT NULL,
status INT(11) NOT NULL
);

create table trip(
  id_trip int NOT NULL AUTO_INCREMENT,
  amount_people varchar(20) not null,
  dt_trip DATETIME not null,
  comments varchar(500) null,
  food BOOLEAN not null,
  foodMusalim BOOLEAN not null,
  PRIMARY KEY (id_trip)
);

INSERT INTO users (username, password, status)
VALUES ('root', '172757', 1);
