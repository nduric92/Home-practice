drop database if exists postolar;
create database postolar;
use postolar;

# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\Home-practice\SQLhome\postolar.sql

create table postolar(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11)
);

create table segrt(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11)
);

create table korisnik(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    email varchar(50)
);

create table popravak(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    cijena decimal(18,2),
    postolar int,
    segrt int
);

create table komadobuce(
    sifra int not null primary key auto_increment,
    materijal varchar(50),
    boja varchar(50),
    korisnik int
);

create table komadobuce_popravak(
    komadobuce int,
    popravak int
);

alter table popravak add foreign key(postolar) references postolar(sifra);
alter table popravak add foreign key(segrt) references segrt (sifra);

alter table komadobuce add foreign key(korisnik) references korisnik(sifra);

alter table komadobuce_popravak add foreign key(komadobuce) references komadobuce(sifra);
alter table komadobuce_popravak add foreign key(popravak) references popravak(sifra);


#unos podatakak u tablice
insert into postolar(sifra, ime, prezime, oib)
values
(null,'Filip','Filipovic',null),    #1
(null, 'Ivan','Ivanovic',null);     #2

insert into segrt(sifra,ime,prezime,oib)
values
(null,'Josip','Josipovic',null),    #1
(null,'Nikola','Nikolic',null);     #2

insert into korisnik(sifra,ime,prezime,email)
values
(null,'Nikola','Peric','nikola.peric@gmail.com'),           #1
(null,'Drazen','Soldo',null),                               #2
(null,'Zlatan','Ibrahimovic','zlatan.lion@outlook.com');    #3

insert into popravak (sifra,naziv,cijena,postolar,segrt)
values
(null,'popravak djona',199.99,1,2),     #1
(null,'zamjena djona',349.99,1,2),      #2
(null,'promjena uloska',99.49,2,1),     #3
(null,'promjena uloska',199.99,1,1);    #4

insert into komadobuce(sifra,materijal,boja,korisnik)
values
(null,'Koza','Crna',3),                 #1
(null,'Umjetna koza','Crna',1),         #2
(null,'Guma','Zelena',2),               #3
(null,'Umjetna koza','Crvena',3);       #4

insert into komadobuce_popravak(komadobuce,popravak)
values (1,1),(1,3),(1,2),(1,4);

