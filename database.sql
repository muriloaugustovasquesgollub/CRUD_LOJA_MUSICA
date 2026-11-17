CREATE DATABASE loja_musica;
USE loja_musica;
 
CREATE TABLE instrumentos (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100),
tipo VARCHAR(50),
marca VARCHAR(50),
preco DECIMAL(10, 2),
estoque INT
);
 
INSERT INTO instrumentos (nome, tipo, marca, preco, estoque)
VALUES
('Guitarra Stratocaster', 'Guitarra', 'Fender', 3500.00, 5),
('Violão Clássico', 'Violão', 'Yamaha', 890.00, 8),
('Bateria Acústica', 'Bateria', 'Pearl', 4200.00, 2),
('Teclado Arranjador', 'Teclado', 'Casio', 1800.00, 4);
