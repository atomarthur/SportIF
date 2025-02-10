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
    status_jogo ENUM('agendado', 'em andamento', 'finalizado'),
    FOREIGN KEY (equipe_a_id) REFERENCES equipes(id_time) ON DELETE CASCADE,
    FOREIGN KEY (equipe_b_id) REFERENCES equipes(id_time) ON DELETE CASCADE,
    FOREIGN KEY (modalidade_id) REFERENCES modalidades(id_modalidade) ON DELETE CASCADE,
    CONSTRAINT check_equipes_diferentes CHECK (equipe_a_id <> equipe_b_id)
);

INSERT INTO jogos(equipe_a_id, equipe_b_id, modalidade_id, placar_equipe_a, placar_equipe_b, status) 
VALUES (1, 2, 1, 1, 7, "finalizado") ;

SELECT 
    jogos.id,
    equipe_a.nome AS equipe_a,
    equipe_b.nome AS equipe_b,
    modalidades.nome AS modalidade,
    jogos.placar_equipe_a,
    jogos.placar_equipe_b,
    jogos.status_jogo
FROM jogos
JOIN equipes AS equipe_a ON jogos.equipe_a_id = equipe_a.id_time
JOIN equipes AS equipe_b ON jogos.equipe_b_id = equipe_b.id_time
JOIN modalidades ON jogos.modalidade_id = modalidades.id_modalidade;



