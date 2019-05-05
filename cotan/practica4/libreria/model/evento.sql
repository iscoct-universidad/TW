create table if not exists Evento(
	id int primary key,
	rutaImagen varchar(64),
	titulo varchar(128),
	fecha date,
	descripcion varchar(256)
);

insert into Evento values ('0', './view/templates/img/eventos/zafon.jpg',
	'Firma de libros de Carlos Ruíz Zafón',
	'2019-3-15',
	'Viene Carlos Ruiz Zafón a firmar el libro La Sombra Del Viento'),
	('1', './view/templates/img/eventos/lauraGallego.jpg', 
	'Presentacion del libro de Laura Gallego', '2019-2-10', 
	'Presentacion del libro de Laura Gallego'), 
	('2', './view/templates/img/eventos/lecturaGrupal.jpg',
	'Lectura grupal', '2019-1-1',
	'Esta semana le toca leer a Francisco José Cotán López');
