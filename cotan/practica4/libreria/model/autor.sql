create table if not exists Autor(
	DNI varchar(64) primary key,
	nombre varchar(64),
	numLibrosPublicados int default 0
);

insert into Autor values ('111111111A', 'Carlos Ruiz Zafon', '100'),
	('111111111B', 'Laura Gallego', '200'),
	('111111111C', 'Dan Brown', '1000'),
	('111111111D', 'Francisco Jose Cotan Lopez', '0');
