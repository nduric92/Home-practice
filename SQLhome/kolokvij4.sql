drop database if exists kolokvij4;
create database kolokvij4;
use kolokvij4;

#c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\Home-practice\SQLhome\kolokvij4.sql


create table punac(
    sifra int not null primary key auto_increment,
    treciputa datetime,
    majica varchar(46),
    jmbag char (11) not null,
    novcica decimal(18,7) not null,
    maraka decimal(12,6) not null,
    ostavljen int not null
);

create table ostavljen(
    sifra int not null primary key auto_increment,
    modelnaocala varchar(43),
    introvertno bit,
    kuna decimal(14,10)
);

create table snasa(
    sifra int not null primary key auto_increment,
    introvertno bit,
    treciputa datetime,
    haljina varchar(44) not null,
    zena int not null
);

create table zena(
    sifra int not null primary key auto_increment,
    suknja varchar(39) not null,
    lipa decimal(18,7),
    prstena int not null
);

create table zena_mladic(
    sifra int not null primary key auto_increment,
    zena int not null,
    mladic int not null
);

create table mladic(
    sifra int not null primary key auto_increment,
    kuna decimal(15,9),
    lipa decimal(18,5),
    nausnica int,
    stilfrizura varchar(49),
    vesta varchar(34) not null
);

create table becar(
    sifra int not null primary key auto_increment,
    novcica decimal(14,8),
    kratkamajica varchar(48) not null,
    bojaociju varchar(36) not null,
    snasa int not null
);

create table prijatelj(
    sifra int not null primary key auto_increment,
    eura decimal (16,9),
    prstena int not null,
    gustoca decimal(16,5),
    jmbag char (11) not null,
    suknja varchar(47) not null,
    becar int not null
);

alter table punac add foreign key (ostavljen) references ostavljen(sifra);
alter table zena_mladic add foreign key (zena) references zena (sifra);
alter table zena_mladic add foreign key (mladic) references mladic(sifra);

alter table snasa add foreign key (zena) references zena(sifra);
alter table becar add foreign key (snasa) references snasa(sifra);
alter table prijatelj add foreign key (becar) references becar(sifra);


insert into mladic  (vesta)
values
('duks'),
('adidas'),
('puma');

insert into zena (suknja,prstena)
values
('uska crvena',3),
('siroka crvena',6),
('plava svila',4);

insert into zena_mladic (zena,mladic)
values
(1,1),
(2,1),
(3,2);

insert  into snasa (haljina,zena)
values
('plava',3),
('crvena',1),
('zuta',2);

insert into becar (kratkamajica,bojaociju,snasa)
values
('puma','plava',2),
('nike','smedja',3),
('adidas','zelena',1);

update punac set majica = 'Osijek' where sifra > 0;

delete from prijatelj where prstena > 17;

select haljina from snasa where treciputa is null;

select a.nausnica, f.jmbag , e.kratkamajica 
from mladic a 
inner join zena_mladic b on a.sifra =b.mladic 
inner join zena c on b.zena = c.sifra 
inner join snasa d on c.sifra = d.zena 
inner join becar e on e.snasa = d.sifra 
inner join  prijatelj f on e.sifra = f.becar
where d.treciputa is null and c.lipa !=29
order by becar desc ;

select a.lipa, a.prstena
from zena a
inner join zena_mladic b on a.sifra = b.zena 
where b.sifra is null;