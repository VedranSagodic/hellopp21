#linija koja počne s znakom ljestve je zanemarena
#komentar
#otvori cmd
#c:\xampp\mysql\bin\mysql -uedunova -pedunova < d:\pp21_zavrsni_rad\app_login\nekretnine.sql


drop database if exists nekretnine;
create database nekretnine;
use nekretnine;

create table users (
id       int not null primary key auto_increment,
name       varchar(50) not null,
surname    varchar(50),
password   varchar(50),
e_mail 	   varchar(100),
phone	   int,
address	   varchar(100)
);

create table property(
id				int not null primary key auto_increment,
users			int not null,
category		int not null,
name			varchar(50),
location		varchar(50),
room_number		int,
bathroom_number int,
total_surface	varchar(10),
build_year		int,
condition_		varchar(50),
price			decimal(10,2),
description		text
);

create table category(
id int not null primary key auto_increment,
name varchar(50)
);

create table image(
id int not null primary key auto_increment,
property	int not null, 
image_files varchar(100)
);

create table review(
id int not null primary key auto_increment,
users		int not null,
property	int not null,
comment 	varchar(250),
grade 		int,
posted_date datetime
);

alter table property add foreign key (users) references users(id);
alter table property add foreign key (category) references category(id);

alter table image add foreign key (property) references property(id);

alter table review add foreign key (users) references users(id);
alter table review add foreign key (property) references property(id);