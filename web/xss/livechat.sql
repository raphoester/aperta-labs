-- create database library;
-- grant all privileges on library.* to 'owasp'@'localhost' identified by 'password';
use chatroom;
create table user (
id int unsigned not null auto_increment primary key,
name varchar(100) not null,
);

create table message (
id int unsigned not null auto_increment primary key,
content varchar(100) not null,
senderid int unsigned not null,
constraint fk_sender
foreign key (senderid) 
	references user (id)
);

insert into user (name)
values ("John"), 
("Luke"),
("Daniel"),
("Matthieu"), 
("Sandra"), 
("Suzanne");

insert into message (content, senderid, constraint)
values ("This barbecue is gonna be awesome !", 1), 
("I'll bring the sausages", 6), 
("Someone has to take care of the the charcoals", 6),
("Gotchu", 2), 
("Matthieu could you please set this tricount thing up ?", 3), 
("Thats already done actually", 4),
("Check your emails you should have recieved an invitation", 4) 
("Oh i forgot to ask", 1),
("Any vegans here ?", 1),
("Yeah, me ! Glad you asked", 5),
("<strong>Sandra has been removed from the group</strong>", 1)



