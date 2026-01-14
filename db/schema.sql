CREATE DATABASE IF NOT EXISTS personal_site;
USE personal_site;

-- Personal Information table
CREATE TABLE IF NOT EXISTS personal_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    title VARCHAR(255),
    bio TEXT,
    email VARCHAR(255),
    github_url VARCHAR(255),
    youtube_url VARCHAR(255),
    steam_url VARCHAR(255),
    profile_pic VARCHAR(255)
);

-- Posts table
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type_id INT COMMENT '1: Blog, 2: Project, 3: Achievement',
    nome VARCHAR(255) NOT NULL,
    categoria VARCHAR(100),
    mês VARCHAR(20),
    ano INT,
    content TEXT,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Comments table
CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT,
    user_email VARCHAR(255) NOT NULL,
    comment_text TEXT NOT NULL,
    is_authorized BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
);

-- Seed Initial Personal Info
INSERT INTO personal_info (name, title, bio, email, github_url, youtube_url, steam_url) 
VALUES ('Seu Nome', 'Desenvolvedor Full Stack', 'Uma breve biografia sobre você e seus objetivos.', 'seuemail@exemplo.com', 'https://github.com/', 'https://youtube.com/', 'https://steamcommunity.com/');

-- Seed initial post
INSERT INTO posts (type_id, nome, categoria, mês, ano, content)
VALUES (1, 'Meu Primeiro Post', 'Geral', 'Janeiro', 2026, 'Este é o conteúdo do primeiro post do meu novo site!');
