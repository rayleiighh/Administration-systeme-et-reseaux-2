CREATE DATABASE IF NOT EXISTS woodytoys;
USE woodytoys;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_price VARCHAR(255) NOT NULL
);

INSERT INTO products (product_name, product_price) VALUES
    ('Set de 100 cubes multicolores', '50'),
    ('Yoyo', '10'),
    ('Circuit de billes', '75'),
    ('Arc à flèches', '20'),
    ('Maison de poupées', '150');