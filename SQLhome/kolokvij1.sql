drop database if exists kolokvij1;
create database kolokvij1;
use kolokvij1;

#c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\Home-practice\SQLhome\kolokvij1.sql

create table prijateljica(
    sifra int not null primary key auto_increment,
    vesta varchar(50),
    nausnica int not null,
    introvertno bit
);

create table cura(
    sifra int not null primary key auto_increment,
    nausnica int not null,
    indiferentno bit,
    ogrlica int not null,
    gustoca decimal(15,5),
    drugiputa datetime,
    vesta varchar(50),
    prijateljica int
);

create table becar(
    sifra int not null primary key auto_increment,
    eura decimal(15,10) not null,
    treciputa datetime,
    prviputa datetime,
    muskarac int not null
);

create table muskarac(
    sifra int not null primary key auto_increment,
    haljina varchar(50),
    drugiputa datetime not null,
    treciputa datetime
);

create table neprijatelj(
    sifra int not null primary key auto_increment,
    kratkamajica varchar(50),
    introvertno bit,
    indiferentno bit,
    ogrlica int not null,
    becar int not null
);

create table muskarac_decko(
    sifra int not null primary key auto_increment,
    muskarac int not null,
    decko int not null
);

create table decko(
    sifra int not null primary key auto_increment,
    kuna decimal (12,7),
    lipa decimal (12,7),
    bojakose varchar(50),
    treciputa datetime not null,
    ogrlica int not null,
    ekstoventno bit not null
);

create table brat(
    sifra int not null primary key auto_increment,
    introvertno bit,
    novcica decimal(14,7) not null,
    treciputa datetime,
    neprijatelj int
);

alter table cura add foreign key (prijateljica) references prijateljica(sifra);
alter table brat add foreign key (neprijatelj) references neprijatelj(sifra);
alter table neprijatelj add foreign key(becar) references becar(sifra);
alter table becar add foreign key (muskarac) references muskarac (sifra);
alter table muskarac_decko add foreign key (muskarac) references muskarac(sifra);
alter table muskarac_decko add foreign key (decko) references decko(sifra);

insert into decko (treciputa,ogrlica,ekstoventno)
values
('2022.11.15',2,true),
('2022.10.15',3,true),
('2022.12.15',1,false);

insert into muskarac (drugiputa)
values('2022.05.25'),('2022.04.21'),('2022.03.15');

insert into muskarac_decko (muskarac,decko)
values (1,2),(3,2),(2,1);

update cura set indiferentno = false;

delete from brat where novcica !='12.75';

select prviputa from becar
where treciputa is null;

select a.bojakose, f.neprijatelj, e.introvertno 
from decko a
inner join muskarac_decko b on a.sifra = b.decko 
inner join muskarac c on c.sifra = b.muskarac 
inner join becar d on c.sifra = d.muskarac 
inner join neprijatelj e on d.sifra = e.becar 
inner join brat f on e.sifra = f.neprijatelj 
where d.treciputa is not null and c.drugiputa is not null 
order by e.introvertno desc;

select a.drugiputa, a.treciputa
from muskarac a
inner join muskarac_decko b on a.sifra = b.muskarac 
where a.sifra is null;