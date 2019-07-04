CREATE TABLE manifesto.asinantes (
	id INT NOT NULL auto_increment primary key,
	`data` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
	tipo INT NOT NULL,
	nome varchar(100) NOT NULL,
	apelidos varchar(300) NOT NULL,
	email varchar(100) NOT NULL,
	profesion varchar(100) NULL,
	concello varchar(100) NULL
);
