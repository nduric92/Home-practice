#kolokvij8
drop database if exists vjezba1;
create database vjezba1;
use vjezba1;

#c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\Home-practice\SQLhome\vjezba1.sql

create table prijateljica(
    sifra int not null primary key auto_increment,
    vesta varchar(50),
    nausnica int not null,
    introvertno bit not null
);

create table cura(
    sifra int not null primary key auto_increment,
    nausnica int not null,
    indiferentno bit,
    ogrlica int not null,
    gustoca decimal(18,2),
    drugiputa datetime,
    vesta varchar(48),
    prijateljica int
);

create table decko(
    sifra int not null primary key auto_increment,
    kuna decimal(18,2),
    lipa decimal(18,2),
    bojakose varchar(49),
    treciputa datetime not null,
    ogrlica int not null,
    ekstoventno bit not null
);

create table muskarac_decko(
    sifra int not null primary key auto_increment,
    muskarac int not null,
    decko int not null
);

create table muskarac(
    sifra int not null primary key auto_increment,
    haljina varchar(49),
    drugiputa datetime not null,
    treciputa datetime
);

create table becar(
    sifra int not null primary key auto_increment,
    eura decimal(15,10) not null,
    treciputa datetime,
    prviputa datetime,
    muskarac int not null
);

create table neprijatelj(
    sifra int not null primary key auto_increment,
    kratkamajica varchar(49),
    introvertno bit,
    indiferentno bit,
    ogrlica int not null,
    becar int not null
);

create table brat(
    sifra int not null primary key auto_increment,
    introvertno bit,
    novcica decimal(18,2) not null,
    treciputa datetime,
    neprijatelj int
);

alter table cura add foreign key (prijateljica) references prijateljica(sifra);
alter table muskarac_decko add foreign key (decko) references decko(sifra);
alter table muskarac_decko add foreign key (muskarac) references muskarac(sifra);
alter table becar add foreign key (muskarac) references muskarac(sifra);
alter table neprijatelj add foreign key (becar) references becar (sifra);
alter table brat add foreign key (neprijatelj) references neprijatelj(sifra);


insert into decko (treciputa,ogrlica,ekstoventno)
values
('2022.10.09',2,true),
('2022.11.19',2,false),
('2022.11.29',2,true);

insert into muskarac (drugiputa)
values ('2022.08.23'),('2022.08.13'),('2022.07.23');

insert into muskarac_decko (muskarac,decko)
values (3,2),(1,3),(2,1);

insert into becar (eura,muskarac)
values
('199.49',1),
('149.49',2),
('159.49',3);

insert into neprijatelj (ogrlica,becar)
values
(3,1),(1,2),(4,3);

update cura set indiferentno = false;

delete from brat where novcica != '12.75';

select prviputa from becar
where treciputa = null;

select a.bojakose,f.neprijatelj,e.introvertno 
from decko a
inner join muskarac_decko b on a.sifra = b.decko 
inner join muskarac c on b.muskarac = c.sifra 
inner join becar d on c.sifra = d.muskarac 
inner join neprijatelj e on e.becar = d.sifra 
inner join brat f on e.sifra = f.neprijatelj 
where d.treciputa is not null and c.drugiputa is not null 
order by e.introvertno desc;

select a.drugiputa, a.treciputa
from muskarac a
left join muskarac_decko b on a.sifra = b.muskarac 
where a.sifra is null;