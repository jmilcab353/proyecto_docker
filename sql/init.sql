CREATE DATABASE exampledb;
USE exampledb;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(255) NOT NULL
);

INSERT INTO productos (nombre, descripcion) VALUES
('TV', 'Televisión Sony 50 pulgadas'),
('Radio', 'Radio portátil'),
('PC', 'Acer Aspire 5'),
('PC', 'Dell Inspiron 15'),
('PC', 'HP Pavilion 15'),
('PC', 'Lenovo ThinkPad X1 Carbon');

COMMIT;