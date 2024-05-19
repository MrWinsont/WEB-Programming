create database web;
create table web.ad
(
    id int auto_increment unique,
    email varchar(255) not null,
    title varchar(255) not null,
    description text not null,
    category varchar(255) not null,
    created datetime not null default NOW(),
    constraint  ad_pk
        primary key(id)
);