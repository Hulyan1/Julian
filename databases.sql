-- creates the database and uses it
create database INM_Audio;
use INM_Audio;

-- create admin table
create table admin_accounts (
    admin_account_id int auto_increment primary key,
    username varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null
);

-- inserts default admin account
insert into admin_accounts (username, email, password) values ('admin', 'admin@gmail.com', 'admin');


-- creates user table
create table user_accounts (
    user_accounts_id int auto_increment primary key,
    firstname varchar(255) not null,
    lastname varchar(255) not null,
    email varchar(255) not null,
    phone_num int not null,
    password varchar(255) not null
);

    
-- creates large file storage table
create table products (
    product_id int auto_increment primary key,
    product varchar(255) not null,
    name varchar(255) not null,
    price decimal(10,2) not null,
    category varchar(255) not null
);

