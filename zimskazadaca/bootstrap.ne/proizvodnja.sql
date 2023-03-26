drop database if exists proizvodnja;
create database proizvodnja;
use proizvodnja;

# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8mb4 < C:\Users\djuki\Documents\GitHub\Home-practice\zimskazadaca\bootstrap.ne\proizvodnja.sql

#alter database persefona_proizvodnja charset utf8mb4;

create table operator(
    id int not null primary key auto_increment,
    name varchar(50) not null,
    surname varchar (50) not null,
    email varchar(50) not null,
    password char (61) not null,
    role varchar(20) not null
);

insert into operator (name,surname,email,password,role)
values ('Nemanja','Duric','operater@oper.com',
'$2a$12$724E72m8fTBgl8EaMh31fObUiVMXUtKvgDuWE/XZ41QtX7VAw/tna','oper');

insert into operator (name,surname,email,password,role)
values ('Adam','Adamovic','adam@admin.com',
'$2a$12$daOIhiFEtalKWbMW/WfpkOs0DfmsJkpL2SxAwa5dcgj8jpP4.ZbPS','admin');

create table worker(
    id int not null primary key auto_increment,
    name varchar(50) not null,
    surname varchar(50) not null,
    oib char (11),
    contractnumber varchar(50),
    iban varchar(50)
);

create table shift(
    id int not null primary key auto_increment,
    name varchar(50),
    duration decimal(18,2)    
);

create table worker_shift(
    id int not null primary key auto_increment,
    worker int,
    shift int
);

create table worker_shift_product(
    worker_shift int,
    product int,
    amount int,
    date date
);

create table product(
    id int not null primary key auto_increment,
    name varchar(50) not null,
    color varchar(50),
    price decimal(18,2),
    customer varchar(50)
);


#poveznice izmedju tablica

alter table worker_shift add foreign key (worker) references worker(id);
alter table worker_shift add foreign key (shift) references shift(id);

alter table worker_shift_product add foreign key (worker_shift) references worker_shift(id);
alter table worker_shift_product add foreign key (product) references product(id);

#inserti u tablice
#radnik

insert into worker (name,surname)
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
insert into shift (name)
values 
('AdrianS'),    #1
('TobiasS'),    #2
('RonnyS');     #3

#worker_smjena
insert into worker_shift(worker,shift)
values
(1,1),
(2,2),
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
insert into product (name,color)
values
('VME 128','Gray'),
('VME 124','Gray'),
('VME 248','Yellow'),
('VME 202','Gray'),
('VME 186','Gray'),
('VME 321','Gray'),
('VME 320','Gray'),
('VME 420','Black'),
('VME 421','Black'),
('VME 160','Gray'),
('VME 154','Yellow'),
('VME 386','Red'),
('VME 212','Yellow'),
('VME 214','Gray'),
('VME 315','Yellow'),
('VME 314','Gray'),
('VME 317','Red'),
('VME 318','Gray'),
('VME 140','White'),
('VME 195','White'),
('VME 196','Black'),
('VME 197','Gray'),
('VME 198','Gray'),
('VME 201','Yellow'),
('VME 440','Yellow'),
('VME 441','Yellow'),
('VME 442','Gray'),
('VME 443','Black'),
('VME 444','Gray'),
('VME 459','Gray'),
('VME 460','Black'),
('VME 120','Gray'),
('VME 118','Gray'),
('VME 048','Black'),
('VME 050','Black'),
('NIBE 030','Gray'),
('NIBE 330','Gray'),
('NIBE 331','Gray'),
('NIBE 430','Gray'),
('NIBE 431','Gray'),
('NIBE 040','Gray'),
('NIBE 310','Gray'),
('PAXTER 031','Red'),
('PAXTER 032','White'),
('PAXTER 033','Red2'),
('PAXTER 041','Crvena'),
('PAXTER 042','White'),
('PAXTER 043','Red2');

#ostao insert na tablicu radnik_smjena_proizvod

insert into worker_shift_product(worker_shift,product,amount,date)
values
(1,1,40,'2022.08.14'),
(2,2,40,'2022.08.16'),
(5,2,40,'2022.08.10'),
(7,4,40,'2022.09.14'),
(5,5,40,'2022.10.14'),
(2,8,40,'2022.11.14'),
(12,11,40,'2022.11.15'),
(11,10,40,'2022.11.18'),
(21,6,40,'2022.11.20'),
(22,3,40,'2022.12.14');