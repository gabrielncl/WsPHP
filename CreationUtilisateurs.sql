DROP TABLE IF EXISTS utilisateurs ;
CREATE TABLE utilisateurs
(
id INT NOT NULL AUTO_INCREMENT,
pseudo VARCHAR (30) NOT NULL,
motDePasse VARCHAR (30) NOT NULL,
statutAdmin BOOLEAN DEFAULT 0,
PRIMARY KEY (id)
)
ENGINE = InnoDB ; -- Moteur de stockage
INSERT INTO utilisateurs (pseudo,motDePasse,statutAdmin)
VALUES
('Katare', 'toppot',0),
('Chap', 'elgnuj',0),
('Melon', 'middim',0),
('Wakz', 'adda',1),
('Caëlan', 'troppus',0);