create database msgboard;
use table account(
    idno int primary key auto_increment;
    name varchar(64) not null
);
insert into account set name="user";