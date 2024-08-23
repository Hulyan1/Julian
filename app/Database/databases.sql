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



-- -- other databases
-- -- Create the category table
-- CREATE TABLE category (
--   cat_id INT AUTO_INCREMENT PRIMARY KEY,
--   category VARCHAR(255) NOT NULL
-- );

-- -- Create the products table
-- CREATE TABLE products (
--   pro_id INT AUTO_INCREMENT PRIMARY KEY,
--   product VARCHAR(255) NOT NULL,
--   price DECIMAL(10, 2) NOT NULL,
--   quantity INT NOT NULL,
--   cat_id INT,
--   image VARCHAR(255), -- field for storing image path or URL
--   added_at DATETIME DEFAULT CURRENT_TIMESTAMP,
--   FOREIGN KEY (cat_id) REFERENCES category(cat_id)
-- );

-- -- Create the comments table
-- CREATE TABLE comments (
--   comment_id INT AUTO_INCREMENT PRIMARY KEY,
--   pro_id INT,
--   comments LONGTEXT,
--   datePosted DATETIME DEFAULT CURRENT_TIMESTAMP,
--   FOREIGN KEY (pro_id) REFERENCES products(pro_id)
-- );



-- -- orders table
-- CREATE TABLE orders (
--   order_id INT AUTO_INCREMENT PRIMARY KEY,

-- );