#linija koja počne s znakom ljestve je zanemarena
#komentar
#otvori cmd
#c:\xampp\mysql\bin\mysql -uedunova -pedunova < d:\pp21\skriptapp21.sql


drop database if exists edunovaapp21;
create database edunovaapp21;
use edunovaapp21;

create table smjer(
sifra       int not null primary key auto_increment,
naziv       varchar(50) not null,
opis        text,
cijena      decimal(18,2),
verificiran boolean
);

create table grupa(
sifra       int not null primary key auto_increment,
naziv       varchar(50) not null,
smjer       int not null,
predavac    int,
datumpocetka datetime
);

create table predavac(
sifra int not null primary key auto_increment,
osoba int not null,
iban varchar(50)
);

create table polaznik(
sifra int not null primary key auto_increment,
osoba int not null,
brojugovora varchar(50)
);

create table osoba(
sifra int not null primary key auto_increment,
ime varchar(50) not null,
prezime varchar(50) not null,
oib char(11),
email varchar(100)
);

create table clan(
    grupa int not null,
    polaznik int not null
);

#vanjski ključevi
alter table grupa add foreign key (smjer) references smjer(sifra);
alter table grupa add foreign key (predavac) references predavac(sifra);

alter table predavac add foreign key (osoba) references osoba(sifra);

alter table polaznik add foreign key (osoba) references osoba(sifra);

alter table clan add foreign key (grupa) references grupa(sifra);
alter table clan add foreign key (polaznik) references polaznik(sifra);


# select * from smjer;
# describe smjer;

# najlošiji način
# 1-> ovo mi je šifra 
insert into smjer values
(null,'PHP programiranje', null,null,null);

#malo bolji način
#2
insert into smjer(naziv,verificiran,cijena)
values('Java programiranje',true,null);

#primjer dobre prakse
#3-5
insert into smjer (naziv,cijena)values
('Web dizajner',4800.99),
('Serviser',5900),
('Njemački jezik',2500);

insert into osoba (prezime,ime,email) values
('Jakopec','Tomislav','tjakopec@gmail.com'),
('Ereš','Mirko','mirko.eres1@gmail.com'), 
('Filipović','Srđan','srdjanfilipovic991@gmail.com'), 
('Grbeša','Antonio','agrbesa995@gmail.com'), 
('Ivanšić','Ivan','ivan.ivansic@sdfgroup.com'), 
('Klarić','Ines','klaricnes@gmail.com'), 
('Kožić','Borna','borna.kozic2@gmail.com'), 
('Kožić','Sven','svenkozic@hotmail.com'), 
('Kucelj','Valentina','valentina.kucelj@gmail.com'), 
('Luketić','Darko','oninator@gmail.com'), 
('Mikić','Marijan','marijan.mikic@icloud.com'), 
('Raguž','Gabrijela','gabrijela.ragu@gmail.com'), 
('Lalić','Ivana','ilalic110@gmail.com');

#select*from osoba;

insert into osoba (prezime,ime,email) 
values ("O'Neal",'Shaquille','shaqui@gmail.com');

insert into predavac (osoba) values (1),(14);
#select*from predavac;
insert into polaznik (osoba) values (2),(3),(4),(5),(6),(7),(8),(9),(10),(11),(12), (13);
#select*from polaznik;


insert into grupa (naziv,smjer,predavac,datumpocetka)
values ('PP21',1,2,'2020-04-14 17:00:00'),
('JP22',2,1,'2020-04-14 19:00:00');
#select*from grupa;

#describe clan
insert into clan (grupa,polaznik) values
(2,1),(2,2),(2,3),(2,4),(2,5),(2,6);
#select*from clan;