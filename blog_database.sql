CREATE DATABASE IF NOT EXISTS personal_web;
USE personal_web;

CREATE TABLE IF NOT EXISTS posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts (title, content) VALUES
('Perkembangan Teknologi AI', 'AI semakin berkembang dengan pesat, mulai dari chatbot hingga kecerdasan buatan yang dapat menulis kode.'),
('Tips Belajar Pemrograman', 'Mulai belajar dengan bahasa yang mudah dipahami, seperti Python atau JavaScript.'),
('Olahraga untuk Kesehatan Mental', 'Olahraga dapat meningkatkan mood dan mengurangi stres, terutama jika dilakukan secara rutin.');
