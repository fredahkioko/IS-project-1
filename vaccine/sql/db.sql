USE immunize;
DROP TABLE IF EXISTS children;
CREATE TABLE IF NOT EXISTS articles (
  childId bigint(12) NOT NULL AUTO_INCREMENT,
	Firstname varchar(100) NOT NULL DEFAULT '',
	Lastname varchar(50) NOT NULL DEFAULT '',
	Hospital varchar(60) NOT NULL DEFAULT '',	
	DateofBirth varchar(60) NOT NULL DEFAULT '',
	Gender varchar(60) NOT NULL DEFAULT '',
	PRIMARY KEY (childId)
);
