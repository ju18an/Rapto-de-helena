create database rapto_de_helena;

	use rapto_de_helena;

	create table guerrero(

		id_guerrero varchar(20) not null,
		nombre varchar(20) not null,
		apeliido varchar(20) not null,
		edad int not null,
		fuerza int not null,
		bando varchar(10) not null,
		estado boolean not null,
		roles_id_rol varchar(20) not null,

		primary key(id_guerrero)
		);

	create table roles(

		id_rol varchar(20) not null,
		desc_rol varchar(45) not null,
		estado_rol boolean not null,
		permisos_id_permiso varchar(20)	not null,

		primary key(id_rol)
		);

	create table login(

		id_login int not null ,
		contrasena varchar(255) not null,
		guerrero_id_guerrero varchar(20) not null,
		primary key (id_login)
		);

	create table permisos(

		id_permiso varchar(20) not null,
		desc_permiso varchar(45) not null,

		primary key(id_permiso)
		);

	create table partidas(
		
		id_partida int not null AUTO_INCREMENT ,

		primary key(id_partida)
		);

	create table guerrero_has_partidas(

		guerrero_id_guerrero varchar (20) not null,
		partidas_id_partidas int not null,
		resultado varchar(45) not null,
		dano int not null
		);


alter table guerrero add constraint guerrero_roles
foreign key (roles_id_rol) references roles(id_rol);

alter table roles add constraint roles_permisos
foreign key (permisos_id_permiso) references permisos(id_permiso);

alter table login add constraint login_guerrero
foreign key (guerrero_id_guerrero) references guerrero(id_guerrero);

alter table guerrero_has_partidas add constraint guerrero_partidas
foreign key (guerrero_id_guerrero) references guerrero (id_guerrero);

alter table guerrero_has_partidas add constraint partidas_guerrero
foreign key (partidas_id_partidas) references partidas (id_partida);