CREATE TABLE IF NOT EXISTS authors (
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	name varchar(255) DEFAULT NULL);

CREATE TABLE IF NOT EXISTS ebooks (
  id  INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title varchar(255) DEFAULT NULL,
  price  float(10) DEFAULT NULL,
  author_id INT(11) NOT NULL
);

CREATE TABLE IF NOT EXISTS sales (
  id  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  ebook_id INT(11) NOT NULL
);

INSERT INTO authors VALUES(1, 'Darth Vader');
INSERT INTO authors VALUES(2, 'Ponei Colorido');
INSERT INTO authors VALUES(3, 'Luke Skywalker');

INSERT INTO ebooks VALUES(1, 'Destruindo a estrela da morte', '19.90' , 3);
INSERT INTO ebooks VALUES(2, 'Criando a estrela da morte', '29.90', 1);
INSERT INTO ebooks VALUES(3, 'Como destruir o império', '9.90', 3);
INSERT INTO ebooks VALUES(4, 'Eu sou seu pai, convida com isso!', '29.90', 1);
INSERT INTO ebooks VALUES(5, 'Vida e morte de um ponei feliz', '1.00' 2);

INSERT INTO sales VALUES(1, 1);
INSERT INTO sales VALUES(2, 1);
INSERT INTO sales VALUES(3, 5);
INSERT INTO sales VALUES(4, 3);
INSERT INTO sales VALUES(5, 3);
INSERT INTO sales VALUES(6, 1);
INSERT INTO sales VALUES(7, 3);
INSERT INTO sales VALUES(8, 4);
INSERT INTO sales VALUES(9, 3);
INSERT INTO sales VALUES(10, 2);