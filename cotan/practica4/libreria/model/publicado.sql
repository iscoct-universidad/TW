create table if not exists Publicado(
	DNI varchar(64), 
	ISBN varchar(64),
		foreign key(DNI) references Autor(DNI),
		foreign key(ISBN) references Libro(ISBN),
		primary key(DNI, ISBN)
);
