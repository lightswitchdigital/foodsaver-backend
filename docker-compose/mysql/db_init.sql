CREATE DATABASE foodsaver;

CREATE USER 'foodsaver'@'localhost' IDENTIFIED BY 'secret';

GRANT ALL PRIVILEGES ON *.* TO 'foodsaver'@'localhost';

FLUSH PRIVILEGES;


