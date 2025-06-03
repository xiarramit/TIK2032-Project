CREATE DATABASE IF NOT EXISTS personal_web;
USE personal_web;

-- Tabel untuk blog
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts (title, content) VALUES
('Perkembangan Teknologi AI', 'AI semakin berkembang dengan pesat...'),
('Tips Belajar Pemrograman', 'Mulai belajar dengan bahasa...'),
('Olahraga untuk Kesehatan Mental', 'Olahraga dapat meningkatkan mood...');

-- Tabel untuk guestbook (contact)
CREATE TABLE IF NOT EXISTS guestbook (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
