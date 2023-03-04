drop database if exists proizvodnja;
create database proizvodnja;
use proizvodnja;

# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8mb4 < C:\Users\djuki\Documents\GitHub\Home-practice\zimskazadaca\bootstrap.ne\proizvodnja.sql

create table operater(
    id int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar (50) not null,
    email varchar(50) not null,
    password char (61) not null,
    role varchar(20) not null
);

insert into operater (ime,prezime,email,password,role)
values ('Nemanja','Duric','nemanja.duric92@gmail.com',
'$2a$12$2daYLbps/sG.wr9/mrysmeGtvO1f6ViDqtq4QXun7K1i6Nyw85XPm','oper');

create table radnik(
    id int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char (11),
    brojugovora varchar(50),
    iban varchar(50)
);

create table smjena(
    id int not null primary key auto_increment,
    naziv varchar(50),
    trajanje decimal(18,2)    
);

create table radnik_smjena(
    id int not null primary key auto_increment,
    radnik int,
    smjena int
);

create table radnik_smjena_proizvod(
    radnik_smjena int,
    proizvod int,
    kolicina int
);

create table proizvod(
    id int not null primary key auto_increment,
    naziv varchar(50) not null,
    boja varchar(50),
    cijena decimal(18,2),
    narucitelj varchar(50)
);


#poveznice izmedju tablica

alter table radnik_smjena add foreign key (radnik) references radnik(id);
alter table radnik_smjena add foreign key (smjena) references smjena(id);

alter table radnik_smjena_proizvod add foreign key (radnik_smjena) references radnik_smjena(id);
alter table radnik_smjena_proizvod add foreign key (proizvod) references proizvod(id);

#inserti u tablice
#radnik

insert into radnik (ime,prezime)
values
('Igor','Đorđević'),
('Nemanja','Đurić'),
('Zoran','Milovanović'),
('Adrian','Krauze'),
('Kenneth','Ramsland'),
('Reidun','Kristiansen'),
('Trond Erik','Mjåvatn'),
('Tobias','Holsen'),
('Finn','Jensen'),
('Alija','Osmanovic'),
('Henok','Tekle'),
('Ronny','Ramsland'),
('Matija','Fužin'),
('Filip','Filipović'),
('Marko','Pavlović'),
('Andre','Kozin'),
('Filip','Sivrić'),
('Matej','Galić'),
('Gabriel','Drca'),
('Robert','Todić'),
('Robert','Tot'),
('Zeljko','Trbulin'),
('Nikola','Kurtovic'),
('Matej','Vujičić');

#smjena
insert into smjena (naziv)
values 
('AdrianS'),    #1
('TobiasS'),    #2
('RonnyS');     #3

#radnik_smjena
insert into radnik_smjena(radnik,smjena)
values
(1,1),
(1,2),
(3,1),
(4,1),
(5,1),
(6,2),
(7,2),
(8,2),
(9,2),
(10,1),
(11,1),
(12,1),
(13,3),
(14,1),
(15,3),
(16,3),
(17,3),
(18,3),
(19,2),
(20,3),
(21,3),
(22,2),
(23,3),
(24,2);

#proizvod
insert into proizvod (naziv,boja)
values
('VME 128','Siva'),
('VME 124','Siva'),
('VME 248','Zuta'),
('VME 202','Siva'),
('VME 186','Siva'),
('VME 321','Siva'),
('VME 320','Siva'),
('VME 420','Crna'),
('VME 421','Crna'),
('VME 160','Siva'),
('VME 154','Zuta'),
('VME 386','Crvena'),
('VME 212','Zuta'),
('VME 214','Siva'),
('VME 315','Zuta'),
('VME 314','Siva'),
('VME 317','Crvena'),
('VME 318','Siva'),
('VME 140','Bijela'),
('VME 195','Bijela'),
('VME 196','Crna'),
('VME 197','Siva'),
('VME 198','Siva'),
('VME 201','Zuta'),
('VME 440','Zuta'),
('VME 441','Zuta'),
('VME 442','Siva'),
('VME 443','Crna'),
('VME 444','Siva'),
('VME 459','Siva'),
('VME 460','Crna'),
('VME 120','Siva'),
('VME 118','Siva'),
('VME 048','Crna'),
('VME 050','Crna'),
('NIBE 030','Siva'),
('NIBE 330','Siva'),
('NIBE 331','Siva'),
('NIBE 430','Siva'),
('NIBE 431','Siva'),
('NIBE 040','Siva'),
('NIBE 310','Siva'),
('PAXTER 031','Crvena'),
('PAXTER 032','Bijela'),
('PAXTER 033','Crvena2'),
('PAXTER 041','Crvena'),
('PAXTER 042','Bijela'),
('PAXTER 043','Crvena2');

#ostao insert na tablicu radnik_smjena_proizvod