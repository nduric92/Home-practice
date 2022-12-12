drop database if exists kolokvij;
create database kolokvij;
use kolokvij;

#kolokvij7
#c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\Home-practice\SQLhome\kolokvij.sql

create table punica(
    sifra int not null primary key auto_increment,
    majica varchar(50),
    eura decimal(12,6) not null,
    prstena int,
    cura int not null
);

create table cura(
    sifra int not null primary key auto_increment,
    lipa decimal (12,9) not null,
    introvertno bit,
    modelnaocala varchar(40),
    narukvica int,
    treciputa datetime,
    kuna decimal(14,9)
);

alter table punica add foreign key (cura) references cura(sifra);

create table sestra(
    sifra int not null primary key auto_increment,
    bojakose varchar(40) not null,
    hlace varchar (40) not null,
    lipa decimal(18,2),
    stilfrizura varchar(40) not null,
    maraka decimal (18,2) not null,
    prijateljica int
);

create table prijateljica(
    sifra int not null primary key auto_increment,
    haljina varchar(40),
    gustoca decimal(15,10) not null,
    ogrlica int,
    novcica decimal(12,5),
    ostavljen int
);

create table ostavljen(
    sifra int not null primary key auto_increment,
    lipa decimal (15,2),
    introvertno bit not null,
    kratkamajica varchar(40) not null,
    prstena int not null,
    zarucnik int
);

create table zarucnik(
    sifra int not null primary key auto_increment,
    vesta varchar(40),
    asocijalno bit not null,
    modelnaocala varchar(40),
    narukvica int not null,
    novcica decimal(14,6) not null
);

create table zarucnik_mladic(
    sifra int not null primary key auto_increment,
    zarucnik int not null,
    mladic int not null
);

create table mladic(
    sifra int not null primary key auto_increment,
    prstena int,
    lipa decimal (14,6) not null,
    narukvica int not null,
    drugiputa datetime not null
);

alter table sestra add foreign key (prijateljica) references prijateljica(sifra);
alter table prijateljica add foreign key (ostavljen) references ostavljen(sifra);
alter table ostavljen add foreign key (zarucnik) references zarucnik (sifra);
alter table zarucnik_mladic add foreign key (zarucnik) references zarucnik(sifra);
alter table zarucnik_mladic add foreign key (mladic) references mladic(sifra);

insert into mladic (lipa,narukvica,drugiputa)
values
(59.99,5,'2022.11.25'),
(159.99,1,'2022.10.15'),
(109.99,2,'2022.01.23');

insert into zarucnik (asocijalno,narukvica,novcica)
values
(true,4,599.14),
(false,2,499.38),
(false,7,89.17);

insert into zarucnik_mladic (zarucnik,mladic)
values (1,2),(2,3),(3,1);

insert  into ostavljen (introvertno,kratkamajica,prstena)
values
(true,'puma',2),
(false,'adidas',1),
(true,'umbro',2);

insert into prijateljica (gustoca)
values ('50.14'),('40.49'),('14.25');

update punica set eura = 15.77;

delete from sestra where hlace < 'AB';

select kratkamajica from ostavljen where introvertno is null;

select a.narukvica, f.stilfrizura, e.gustoca 
from mladic a
inner join zarucnik_mladic b on b.mladic = a.sifra 
inner join zarucnik c on c.sifra = b.zarucnik 
inner join ostavljen d on d.zarucnik = c.sifra 
inner join prijateljica e on e.ostavljen = d.sifra 
inner join sestra f on f.prijateljica = f.sifra 
where d.introvertno is not null and c.asocijalno is not null 
order by e.gustoca desc;

select a.asocijalno ,a.modelnaocala 
from zarucnik a
inner join zarucnik_mladic b on a.sifra = b.zarucnik 
where a.sifra is null;