-- @block
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT UNIQUE,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(100) NOT NULL,
);

-- @block
CREATE TABLE sessions (
    token VARCHAR(255) NOT NULL UNIQUE PRIMARY KEY,
    expire DATETIME,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);