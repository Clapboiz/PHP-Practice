CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    feedback TEXT DEFAULT '',
    date DATETIME
);

INSERT INTO feedback (email, password, feedback, date) VALUES
('clap@gmail.com', '1234567as', 'Oke, good!', CURRENT_TIMESTAMP()),
('king@gmail.com', '1234567as', 'Bad!', CURRENT_TIMESTAMP()),
('zoroo@gmail.com', '1234567as', 'Ok', CURRENT_TIMESTAMP());