CREATE DATABASE sistema;

CREATE TABLE `setor` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cargo` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(150) NOT NULL,
    `setor_id` INT(11) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`setor_id`) REFERENCES `setor` (`id`)
) DEFAULT CHARSET=utf8mb4;