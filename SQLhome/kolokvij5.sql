drop database if exists kolokvij5;
create database kolokvij5;
use kolokvij5;

#c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\Home-practice\SQLhome\kolokvij5.sql

create table mladic(
    sifra int not null primary key auto_increment,
    kratkamajica varchar(50) not null,
    haljina varchar(30) not null,
    asocijalno bit,
    zarucnik int
);

create table zarucnik(
    sifra int not null primary key auto_increment,
    jmbag char (11),
    lipa decimal(12,8),
    indeferentno bit not null
);

create table svekar(
    sifra int not null primary key auto_increment,
    bojakose varchar(33),
    majica varchar(31),
    carape varchar(31) not null,
    haljina varchar(43),
    narukvica int,
    eura decimal(14,5) not null
);

create table punac(
    sifra int not null primary key auto_increment,
    dukserica varchar(33),
    prviputa datetime not null,
    majica varchar(36),
    svekar int not null
);

create table cura(
    sifra int not null primary key auto_increment,
    carape varchar(41) not null,
    maraka decimal(17,10) not null,
    asocijalno bit,
    vesta varchar(47) not null
);

create table svekar_cura(
    sifra int not null primary key auto_increment,
    svekar int not null,
    cura int not null
);

create table punica(
    sifra int not null primary key auto_increment,
    hlace varchar(43) not null,
    nausnica int not null,
    ogrlica int,
    vesta varchar(49)not null,
    modelnaocala varchar(31) not null,
    treciputa datetime not null,
    punac int not null
);

create table ostavljena(
    sifra int not null primary key auto_increment,
    majica varchar(33),
    ogrlica int not null,
    carape varchar(44),
    stilfrizura varchar(42),
    punica int not null
);

alter table ostavljena add foreign key(punica) references punica(sifra);
alter table punica add foreign key(punac) references punac (sifra);
alter table punac add foreign key (svekar) references svekar (sifra);
alter table svekar_cura add foreign key(svekar) references svekar(sifra);
alter table svekar_cura add foreign key (cura) references cura(sifra);
alter table mladic add foreign key (zarucnik) references zarucnik(sifra);

insert into cura (carape,maraka,vesta)
values
('bijele lidl',9.99,'plava vuna'),
('bijele umbro',12.99,'crna vuna'),
('crne puma',11.50,'crna pamuk');

insert into svekar (carape,eura)
values
('bijele',4.99),
('crne',3.99),
('sarene',3.50);

insert into svekar_cura (svekar,cura)
values
(1,2),(2,3),(3,1);

insert into punac (prviputa,svekar)
values
('2021.07.31',3),
('2021.08.21',1),
('2021.10.15',2);

insert into punica (hlace,nausnica,vesta,modelnaocala,treciputa,punac)
values
('teksas',2,'dugi rukav','guess','2022.05.14',1),
('lateks',4,'kratki rukav','police','2022.06.24',3),
('pamuk',3,'duga crna','ray ban','2022.07.28',2);

update mladic set haljina = 'Osijek';

delete from ostavljena where ogrlica = 17;

select majica from punac where prviputa = null;

select a.asocijalno, f.stilfrizura, e.nausnica 
from cura a 
inner join svekar_cura b on b.cura = a.sifra 
inner join svekar c on b.svekar = c.sifra 
inner join punac d on c.sifra = d.svekar 
inner join punica e on d.sifra = e.punac 
inner join ostavljena f on f.punica = e.sifra
where d.prviputa is null and c.majica like '%ba%'
order by e.nausnica desc;

select a.majica, a.carape
from svekar a
inner join svekar_cura b on a.sifra = b.svekar 
where b.sifra is null;