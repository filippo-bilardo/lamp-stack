-- Crea tabella utenti
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Inserisci dati di esempio
INSERT INTO users (username, email) VALUES
    ('mario_rossi', 'mario@example.com'),
    ('laura_bianchi', 'laura@example.com'),
    ('giuseppe_verdi', 'giuseppe@example.com');

-- Crea tabella prodotti
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    stock INT DEFAULT 0
);

-- Inserisci prodotti di esempio
INSERT INTO products (name, price, stock) VALUES
    ('Laptop Dell', 899.99, 15),
    ('Mouse Logitech', 29.99, 50),
    ('Tastiera Meccanica', 149.99, 25);
