drop database if exists userAccount;
create database userAccount;
use userAccount;

-- create table user(
--     -- Roll_no SMALLINT(5) not null default 0,
--     First_name char(128) default null,
--     last_name char(128)  default null,
--     Email char(128) default null,
--     Phone_no. int default null,
--     -- PRIMARY KEY (Roll_no)
-- );

create table user(
    Roll_no int not null AUTO_INCREMENT,
    First_name char(128) default null,
    last_name char(128) default null,
    Email char(128) default null,
    Phone_no int default null,
    PRIMARY KEY (Roll_no)
);