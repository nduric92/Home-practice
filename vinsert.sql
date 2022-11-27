drop database if exists vinsert;
create database vinsert;
use vinsert;

# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\Home-practice\vinsert.sql

create table dokument(
    sifra int not null primary key auto_increment,
    datum datetime not null,
    opis varchar(70),
    aktivan boolean
);

insert into dokument (sifra, datum, opis, aktivan)
values
(null, '2022-07-25', 'posiljka',true),
(null, '2022-08-12', 'narudzbenica',true),
(null, '2022-08-13', 'posiljka',false);

#5min