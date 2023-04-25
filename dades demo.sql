INSERT INTO Treballador (id_treballador, nom, cognoms, rol, data_incorporacio)
VALUES (1, 'Joan', 'Perez', 'Operari', '2020-01-01');

INSERT INTO Treballador (id_treballador, nom, cognoms, rol, data_incorporacio)
VALUES (2, 'Maria', 'Garcia', 'Supervisor', '2019-05-01');

INSERT INTO Maquina (id_maquina, nom, descripcio)
VALUES (1, 'Maquina 1', "Maquina d'estampació");

INSERT INTO Maquina (id_maquina, nom, descripcio)
VALUES (2, 'Maquina 2', 'Maquina de tall');

INSERT INTO Errors (id_treballador, id_maquina, estat_error, tipus, descripcio)
VALUES (1, 1, 'Pendent', 'Error de configuració', 'La velocitat de la màquina és massa elevada');

INSERT INTO Errors (id_treballador, id_maquina, estat_error, tipus, descripcio)
VALUES (2, 2, 'Resolt', 'Error mecànic', "La taula de tall s'ha desviat de la posició correcta");
