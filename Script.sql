CREATE TABLE Treballador (
    id_treballador INT PRIMARY KEY,
    nom VARCHAR(255),
    cognoms VARCHAR(255),
    rol VARCHAR(255),
    data_incorporacio DATE
);

CREATE TABLE Maquina (
    id_maquina INT PRIMARY KEY,
    nom VARCHAR(255),
    descripcio TEXT
);

CREATE TABLE Errors (
    id_treballador INT,
    id_maquina INT,
    estat_error VARCHAR(255),
    tipus VARCHAR(255),
    descripcio TEXT,
    PRIMARY KEY (id_treballador, id_maquina),
    FOREIGN KEY (id_treballador) REFERENCES Treballador(id_treballador),
    FOREIGN KEY (id_maquina) REFERENCES Maquina(id_maquina)
);