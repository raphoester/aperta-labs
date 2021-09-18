-- create database library;
-- grant all privileges on library.* to 'owasp'@'localhost' identified by 'password';
use library;
create table user (
id int unsigned not null auto_increment primary key,
firstname varchar(100) not null,
lastname varchar(100) not null, 
birthdate date null,
email varchar(200) not null,
password varchar(200) not null,
type varchar(20)
);

create table author(
id int unsigned not null auto_increment primary key,
firstname varchar(100) null,
lastname varchar(100) not null
);

create table book (
id int unsigned not null auto_increment primary key,
title varchar(200) not null,
releasedate int null,
cover varchar(500) null,
author int unsigned not null,
constraint fk_author
foreign key (author) 
	references author (id)
);

create table borrow (
id int unsigned not null auto_increment primary key,
book int unsigned not null, 
user int unsigned not null,
begindate date not null,
returned boolean not null default 0,
	foreign key fk_user (user) references user (id),
	foreign key fk_book (book) references book (id)
);

insert into user (firstname, lastname, birthdate, email, password, type)
values ("John", "Doe", "1985-12-07", "johndoe@gmail.com", "d8578edf8458ce06fbc5bb76a58c5ca4", "user"), 
("Jeanette", "Dampierre", "1963-01-29", "jeanette.dp@wanadoo.org", "c8b6664921a91e0266faa476dac34f75", "user"),
("Richard", "Van der Bielt", "1974-08-15", "richard-vanderbielt@yahoo.fr", "c33fea8d59b3ed083054991999429be3", "admin"),
("Carmen", "Del Sol", "1996-12-03", "carmen_del_sol@outlook.fr", "22ef78081100d5979bffb42f6d2b05e0", "user");

insert into author (firstname, lastname) values
("Friedrich", "Nietzsche"),
("Julio", "Cortazar"),
("Jacques", "Prévert"), 
("Sigmund", "Freud"),
("Fiodor", "Dostoievski"),
("Blaise", "Cendrars"),
("Marguerite", "Yourcenar"),
("Isaac", "Asimov"); 

insert into book (title, releasedate, author)
values ("L'or", 1925, 6), 
("Mémoires d'Hadrien", 1951, 7), 
("Zur Genealogie der Moral", 1887, 1),
("I, robot", 1950, 8), 
("Das Ich und das Es", 1923, 4), 
("Rayuela", 1963, 2), 
("Paroles", 1945, 3),
("Demons", 1973, 5);

insert into borrow (book, user, begindate, returned)
values (1, 2, "2021-08-08", false), 
(2, 3, "2021-03-17", true), 
(5, 3, "2021-05-04", true), 
(6, 1, "2021-07-21", false);


