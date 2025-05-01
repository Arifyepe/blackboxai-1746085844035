-- Create database
CREATE DATABASE IF NOT EXISTS sports_store;
USE sports_store;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category ENUM('soccer', 'futsal', 'running', 'badminton') NOT NULL,
    name VARCHAR(255) NOT NULL,
    brand VARCHAR(100) NOT NULL,
    type VARCHAR(50) NOT NULL,
    sizes VARCHAR(255) NOT NULL,
    quantity INT NOT NULL DEFAULT 0,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255),
    description TEXT,
    is_best_seller BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Orders table
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    shipping_address TEXT NOT NULL,
    payment_method ENUM('bca', 'bri', 'dana') NOT NULL,
    status ENUM('pending', 'confirmed', 'cancelled') DEFAULT 'pending',
    invoice_number VARCHAR(100) NOT NULL UNIQUE,
    total_amount DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Insert default admin user
INSERT INTO users (email, password, address, role) VALUES 
('admin@sportsstore.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin Address', 'admin');
-- Default password: password

-- Insert sample products
-- Soccer Products
INSERT INTO products (category, name, brand, type, sizes, quantity, price, description, is_best_seller) VALUES
('soccer', 'Nike Mercurial', 'Nike', 'shoe', '32,33,34,35,36,37,38,39,40,41,42,43,44,45', 50, 1500000, 'Professional Soccer Shoes', true),
('soccer', 'Indonesia Home Jersey', 'Nike', 'jersey', 'S,M,L,XL', 100, 750000, 'Indonesia National Team Home Jersey', true);

-- Futsal Products
INSERT INTO products (category, name, brand, type, sizes, quantity, price, description) VALUES
('futsal', 'Specs Accelerator', 'Specs', 'shoe', '32,33,34,35,36,37,38,39,40,41,42,43,44,45', 50, 1200000, 'Professional Futsal Shoes'),
('futsal', 'Vamos Mataram Jersey', 'Local', 'jersey', 'S,M,L,XL', 50, 450000, 'Vamos Mataram Team Jersey');

-- Running Products
INSERT INTO products (category, name, brand, type, sizes, quantity, price, description) VALUES
('running', 'Nike Air Zoom', 'Nike', 'shoe', '32,33,34,35,36,37,38,39,40,41,42,43,44,45', 50, 1800000, 'Professional Running Shoes'),
('running', 'Pro Runner Jersey', 'Nike', 'jersey', 'S,M,L,XL', 50, 350000, 'Professional Running Jersey');

-- Badminton Products
INSERT INTO products (category, name, brand, type, sizes, quantity, price, description) VALUES
('badminton', 'Yonex Power Cushion', 'Yonex', 'shoe', '36,37,38,39,40,41,42,43,44,45', 50, 1200000, 'Professional Badminton Shoes'),
('badminton', 'Indonesia Badminton Jersey', 'Yonex', 'jersey', 'S,M,L,XL', 50, 450000, 'Indonesia National Badminton Team Jersey');

-- Create indexes for better performance
CREATE INDEX idx_products_category ON products(category);
CREATE INDEX idx_orders_user_id ON orders(user_id);
CREATE INDEX idx_orders_status ON orders(status);
CREATE INDEX idx_orders_invoice ON orders(invoice_number);
