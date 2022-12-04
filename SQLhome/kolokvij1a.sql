drop database if exists kolokvij1a;
create database kolokvij1a;
use kolokvij1a;

# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\Home-practice\SQLhome\kolokvij1a.sql

create table prijatelj(
    sifra int not null primary key auto_increment,
    modelnaocala varchar(37),
    treciputa datetime not null,
    ekstroventno bit not null,
    prviputa datetime,
    svekar int
);

create table svekar(
    sifra int not null primary key auto_increment,
    stilfrizura varchar(48),
    ogrlica int not null,
    asocijalno bit not null
);

create table decko(
    sifra int not null primary key auto_increment,
    indiferentno bit,
    vesta varchar(34),
    asocijalno bit not null
);

create table decko_zarucnica(
    sifra int not null primary key auto_increment,
    decko int not null,
    zarucnica int not null
);

create table zarucnica(
    sifra int not null primary key auto_increment,
    narukvica int,
    bojakose varchar(37) not null,
    novcica decimal(15,9),
    lipa decimal(15,8) not null,
    indiferentno bit not null
);

create table cura(
    sifra int not null primary key auto_increment,
    haljina varchar(33) not null,
    drugiputa datetime not null,
    suknja varchar(38),
    narukvica int,
    majica varchar(40) not null,
    decko int
);

create table neprijatelj(
    sifra int not null primary key auto_increment,
    majica varchar(32),
    haljina varchar(43) not null,
    lipa decimal(16,8),
    modelnaocala varchar(49) not null,
    kuna decimal(12,6) not null,
    jmbag char (11),
    cura int
);

create table brat(
    sifra int not null primary key auto_increment,
    suknja varchar(47),
    ogrlica int not null,
    asocijalno bit not null,
    neprijatelj int not null
);

alter table prijatelj add foreign key (svekar) references svekar(sifra);

alter table decko_zarucnica add foreign key (zarucnica) references zarucnica(sifra);
alter table decko_zarucnica add foreign key (decko) references decko(sifra);

alter table cura add foreign key (decko) references decko(sifra);

alter table neprijatelj add foreign key(cura) references cura (sifra);
alter table brat add foreign key (neprijatelj) references neprijatelj(sifra);

#1
insert into neprijatelj (haljina,modelnaocala,kuna)
values 
('duga crna','police',599.40),
('kratka crna','ray ban',799.70),
('svila crna','prada',999.30);

insert into cura (haljina,drugiputa,majica)
values
('svila plava','2022.10.14','marvel'),
('lateks crna','2022.11.24','dc'),
('pamuk crna','2022.07.31','adidas');

insert into decko (asocijalno)
values
(true),
(true),
(false);

insert into zarucnica (bojakose,lipa,indiferentno)
values
('crna',534.22,true),
('smedja',199.89,false),
('plava',454.32,false);

insert into decko_zarucnica (sifra,decko,zarucnica)
values
(null,1,3),
(null,2,1),
(null,3,2);

#2
update prijatelj set treciputa= '2020.04.30';

#3
delete from brat where ogrlica != 14;

#4
select suknja from cura where drugiputa = null;

#5
select a.novcica ,f.neprijatelj , e.haljina 
from zarucnica a
inner join decko_zarucnica b on a.sifra = b.zarucnica 
inner join decko c on b.decko = c.sifra 
inner join cura d on c.sifra = d.decko 
inner join neprijatelj e on d.sifra =e.cura 
inner join brat f on e.sifra = f.neprijatelj
where d.drugiputa = null and c.vesta like '%ba%'
order by e.haljina desc;

#6
select vesta, asocijalno from decko a
inner join decko_zarucnica b on a.sifra = b.decko 
where b.decko = null;

#sat vremena