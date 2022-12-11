drop database if exists kolokvij6;
create database kolokvij6;
use kolokvij6;

#c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\Home-practice\SQLhome\kolokvij6.sql

create table svekrva(
    sifra int not null primary key auto_increment,
    hlace varchar(50) not null,
    suknja varchar(50) not null,
    ogrlica int not null,
    treciputa datetime not null,
    dukserica varchar(50) not null,
    narukvica int not null,
    punac int
);

create table punac(
    sifra int not null primary key auto_increment,
    ekstoventno bit not null,
    suknja varchar(50) not null,
    majica varchar(50) not null,
    prviputa datetime not null
);

create table prijatelj(
    sifra int not null primary key auto_increment,
    haljina varchar(50),
    prstena int not null,
    introvertno bit,
    stilfrizura varchar(50) not null
);

create table brat(
    sifra int not null primary key auto_increment,
    nausnica int not null,
    treciputa datetime not null,
    narukvica int not null,
    hlace varchar(50),
    prijatelj int
);

create table zena(
    sifra int not null primary key auto_increment,
    novcica decimal (14,8) not null,
    narukvica int not null,
    dukserica varchar(50) not null,
    haljina varchar(40),
    hlace varchar(50),
    brat int not null
);

create table decko(
    sifra int not null primary key auto_increment,
    prviputa datetime,
    modelnaocala varchar(40),
    nausnica int,
    zena int not null
);

create table prijatelj_ostavljena(
    sifra int not null primary key auto_increment,
    prijatelj int not null,
    ostavljena int not null
);

create table ostavljena(
    sifra int not null primary key auto_increment,
    prviputa datetime not null,
    kratkamajica varchar(48) not null,
    drugiputa datetime,
    maraka decimal(14,10)
);

alter table svekrva add foreign key (punac) references punac(sifra);
alter table prijatelj_ostavljena add foreign key(prijatelj) references prijatelj(sifra);
alter table prijatelj_ostavljena add foreign key (ostavljena) references ostavljena(sifra);
alter table brat add foreign key (prijatelj) references prijatelj(sifra);
alter table zena add foreign key (brat) references brat(sifra);
alter table decko add foreign key(zena) references zena(sifra);

insert into prijatelj (prstena,stilfrizura)
values
(5,'kratka shade'),
(3,'duga dred'),
(6,'fade');

insert into ostavljena (prviputa,kratkamajica)
values 
('2022.02.22','puma'),
('2022.05.15','puma'),
('2022.06.29','puma');

insert into prijatelj_ostavljena (prijatelj,ostavljena)
values (1,3),(1,2),(3,1);

insert into brat (nausnica,treciputa,narukvica)
values
(4,'2022.11.07',1),
(3,'2022.10.07',3),
(1,'2022.11.17',3);

insert into zena (novcica,narukvica,dukserica,brat)
values
(59.99,2,'nike',2),
(149.99,1,'adidas',3),
(109.99,3,'umbro',1);

update  svekrva set suknja = 'Osijek';

delete from decko where modelnaocala < 'AB';

select narukvica from brat 
where treciputa is null;

select a.drugiputa, f.zena, e.narukvica 
from ostavljena a
inner join prijatelj_ostavljena b on a.sifra = b.ostavljena 
inner join prijatelj c on b.prijatelj = c.sifra 
inner join brat d on c.sifra = d.prijatelj
inner join zena e on d.sifra = e.brat 
inner join decko f on e.sifra = f.zena 
where d.treciputa is not null and c.prstena = 219
order by e.narukvica desc;

select a.prstena, a.introvertno
from prijatelj a
inner join prijatelj_ostavljena b on a.sifra = b.prijatelj 
where b.sifra is null