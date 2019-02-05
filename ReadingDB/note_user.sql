CREATE TABLE note_user(
    id SERIAL,
    username VARCHAR(225),
    password VARCHAR(225),
    PRIMARY KEY (id)
);
CREATE TABLE note(
   id SERIAL,
   userId INT NOT NULL,
   content TEXT,
   PRIMARY KEY(id),
   FOREIGN KEY (userId) REFERENCES note_user(id)
);
--Insert data into note_user table
INSERT INTO note_user(username, password) VALUES ('Freddy', 'mypassword');
INSERT INTO note_user(username, password) VALUES ('Michael', 'michpassword');
INSERT INTO note_user(username, password) VALUES ('Paulie', 'pauliespassword');
--Insert data into note the second table
INSERT INTO note(userId, content) VALUES(1, 'This is Freddy');
INSERT INTO note(userId, content) VALUES(1, 'This is Freddy encore');
INSERT INTO note(userId, content) VALUES(2, 'This is Michael');
INSERT INTO note(userId, content) VALUES(3, 'This is Paulie');
