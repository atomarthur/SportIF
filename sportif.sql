CREATE DATABASE sportif;
USE sportif;

CREATE TABLE usuario(
	id INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(100),
    senha VARCHAR(50),
    PRIMARY KEY (id)
);

INSERT INTO usuario(nome, senha)
VALUES("Arthur", "123");

CREATE TABLE modalidades (
    id_modalidade INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) UNIQUE NOT NULL
);

INSERT INTO modalidades (nome) VALUES
('Futebol'),
('Futsal'),
('Voleibol'),
('Basquete'),
('Handebol'),
('Xadrez');

CREATE TABLE equipes (
    id_time INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    sigla VARCHAR(3),
    id_modalidade INT NOT NULL,
    medalhas_ouro INT,
    medalhas_prata INT,
    medalhas_bronze INT,
    FOREIGN KEY (id_modalidade) REFERENCES modalidades(id_modalidade) ON DELETE CASCADE
);

CREATE TABLE jogos (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    equipe_a_id INT NOT NULL,
    equipe_b_id INT NOT NULL,
    modalidade_id INT NOT NULL,
    placar_equipe_a INT DEFAULT 0,
    placar_equipe_b INT DEFAULT 0,
    status_jogo ENUM('Agendado', 'Em Andamento', 'Finalizado'),
    FOREIGN KEY (equipe_a_id) REFERENCES equipes(id_time) ON DELETE CASCADE,
    FOREIGN KEY (equipe_b_id) REFERENCES equipes(id_time) ON DELETE CASCADE,
    FOREIGN KEY (modalidade_id) REFERENCES modalidades(id_modalidade) ON DELETE CASCADE,
    CONSTRAINT check_equipes_diferentes CHECK (equipe_a_id <> equipe_b_id)
);

CREATE TABLE notificacoes (
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
titulo VARCHAR (100),
mensagem VARCHAR(255)
);

CREATE TABLE estatisticas (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_jogo INT NOT NULL,
    estatistica_nome VARCHAR(100) NOT NULL,
    valor INT NOT NULL,
    FOREIGN KEY (id_jogo) REFERENCES jogos(id) ON DELETE CASCADE
);

CREATE TABLE mensagem(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
mensagem VARCHAR (255) NOT NULL
);
