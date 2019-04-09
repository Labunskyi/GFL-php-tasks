CREATE TABLE user (
id INT(6)  AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
pwd VARCHAR(30) NOT NULL,
email VARCHAR(50)
);


INSERT INTO user (name,  pwd, email)
VALUES
('John',  '412314', 'john@example.com'),
('Sam',  '412rf4', 'Sam@example.com'),
('Anna',  '412314', 'john@example.com'),
('Rory',  '412314', 'Rory@example.com'),
('Ray',  '412314', 'Ray@example.com');


-- psql
CREATE TABLE user_pg (
id integer PRIMARY KEY,
name VARCHAR(30) NOT NULL,
pwd VARCHAR(30) NOT NULL,
email VARCHAR(50)
);


INSERT INTO user_pg (id, name,  pwd, email)
VALUES
(1, 'John',  '412314', 'john@example.com'),
(2, 'Sam',  '412rf4', 'Sam@example.com'),
(3, 'Anna',  '412314', 'john@example.com'),
(4, 'Rory',  '412314', 'Rory@example.com'),
(5, 'Ray',  '412314', 'Ray@example.com');
