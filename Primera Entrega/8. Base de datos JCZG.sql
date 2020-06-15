create database rapto_de_helena;

	use rapto_de_helena;

	create table guerrero(

		id_guerrero int not null,
		nombre varchar(20) not null,
		apeliido varchar(20) not null,
		edad int not null,
		fuerza int not null,
		bando varchar(10) not null,
		estado boolean not null,
		roles_id_rol int not null,

		primary key(id_guerrero)
		);

	create table roles(

		id_rol int not null,
		desc_rol varchar(45) not null,
		estado_rol boolean not null,
		permisos_id_permiso int	not null,

		primary key(id_rol)
		);

	create table login(

		contrasena int not null,
		guerrero_id_guerrero int not null,
		);

	create table permisos(

		id_permiso int not null,
		desc_permiso varchar(45) not null,

		primary key(id_permiso)
		);


alter table guerrero add constraint guerrero_roles
foreign key (roles_id_rol) references roles(id_rol);

alter table roles add constraint roles_permisos
foreign key (permisos_id_permiso) references permisis(id_permisos);

alter table login add constraint login_guerrero
foreign key (guerrero_id_guerrero) references guerrero(id_guerrero);