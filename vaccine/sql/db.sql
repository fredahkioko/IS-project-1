USE immunize;
DROP TABLE IF EXISTS children;
CREATE TABLE IF NOT EXISTS children (
  childId bigint(12) NOT NULL AUTO_INCREMENT,
	firstname varchar(100) NOT NULL DEFAULT '',
	lastname varchar(50) NOT NULL DEFAULT '',
	hospitalname varchar(60) NOT NULL DEFAULT '',	
	dateofbirth varchar(60) NOT NULL DEFAULT '',
	gender varchar(60) NOT NULL DEFAULT '',
	PRIMARY KEY (childId)
);
