CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    body TEXT DEFAULT '',
    date DATETIME
);

INSERT INTO feedback (name, email, body, date) VALUES
('Clap', 'clap@gmail.com', 'Oke, good!', CURRENT_TIMESTAMP()),
('King', 'king@gmail.com', 'Bad!', CURRENT_TIMESTAMP()),
('Zoro', 'zoroo@gmail.com', 'Ok', CURRENT_TIMESTAMP());