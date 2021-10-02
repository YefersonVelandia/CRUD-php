create database sistema;


	create table usuario(
		
		nombre varchar(30),
		correo varchar(40),
		clave varchar(30),
		primary key(correo)
	);