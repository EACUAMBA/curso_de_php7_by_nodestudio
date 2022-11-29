create database if not exists curso_php7_by_nodestudio character set 'utf8';
use curso_php7_by_nodestudio;

create table if not exists `cliente`
(
    id        bigint       not null auto_increment primary key,
    nome      varchar(255) not null,
    sobrenome varchar(255) not null,
    email     varchar(255) null unique,
    idade     int(3)       null
);

