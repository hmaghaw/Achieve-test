CREATE DATABASE achieve3000
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

CREATE TABLE votes (
  votes_id int(11) DEFAULT NULL,
  city varchar(255) DEFAULT NULL,
  color_id int(11) DEFAULT NULL,
  votes int(11) DEFAULT NULL
);
CREATE TABLE colors (
  color_id int(11) NOT NULL AUTO_INCREMENT,
  color varchar(255) DEFAULT NULL,
  PRIMARY KEY (color_id)
);
INSERT INTO achieve3000.colors( color) VALUES ('Red');
INSERT INTO achieve3000.colors( color) VALUES ('Orange');
INSERT INTO achieve3000.colors( color) VALUES ('Yellow');
INSERT INTO achieve3000.colors( color) VALUES ('Green');
INSERT INTO achieve3000.colors( color) VALUES ('Blue');
INSERT INTO achieve3000.colors( color) VALUES ('Indigo');
INSERT INTO achieve3000.colors( color) VALUES ('Violet');

INSERT INTO achieve3000.votes (city ,color_id ,votes) VALUES ('Anchorage',5 ,10000 );
INSERT INTO achieve3000.votes (city ,color_id ,votes) VALUES ('Anchorage',2 ,15000 );
INSERT INTO achieve3000.votes (city ,color_id ,votes) VALUES ('Brooklyn',1 ,100000 );
INSERT INTO achieve3000.votes (city ,color_id ,votes) VALUES ('Brooklyn',5 ,250000 );
INSERT INTO achieve3000.votes (city ,color_id ,votes) VALUES ('Detroit',1 ,160000 );
INSERT INTO achieve3000.votes (city ,color_id ,votes) VALUES ('Selma',2 ,15000 );
INSERT INTO achieve3000.votes (city ,color_id ,votes) VALUES ('Selma',7 ,5000 );