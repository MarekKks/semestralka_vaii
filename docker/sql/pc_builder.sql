SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS `kategorias` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nazov` VARCHAR(50) NOT NULL,
    `popis` TEXT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `vyrobca` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nazov` VARCHAR(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `uzivatelia` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `meno` VARCHAR(100) NOT NULL,
    `email` VARCHAR(150) NOT NULL UNIQUE,
    `heslo_hash` VARCHAR(255) NOT NULL,
    `role` VARCHAR(20) NOT NULL DEFAULT 'user'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `komponents` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `kategoria_id` INT NOT NULL,
    `vyrobca_id` INT NOT NULL,
    `nazov` VARCHAR(255) NOT NULL,
    `popis` TEXT NULL,
    `cena` DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
    `patica` VARCHAR(20) NULL,
    `typ_pamate` VARCHAR(10) NULL,
    CONSTRAINT `fk_komponent_kategoria` FOREIGN KEY (`kategoria_id`) REFERENCES `kategorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `fk_komponent_vyrobca` FOREIGN KEY (`vyrobca_id`) REFERENCES `vyrobca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `kategorias` (`id`, `nazov`, `popis`) VALUES
    (1, 'Procesor', 'CPU'),
    (2, 'Základná doska', 'Mainboard'),
    (3, 'RAM', 'Operačná pamäť');

INSERT INTO `vyrobca` (`id`, `nazov`) VALUES
    (1, 'AMD'),
    (2, 'Intel'),
    (3, 'ASUS'),
    (4, 'Kingston');

INSERT INTO `komponents` (`kategoria_id`, `vyrobca_id`, `nazov`, `popis`, `cena`, `patica`, `typ_pamate`) VALUES
    (1, 1, 'AMD Ryzen 5 7600', '6-jadrový procesor AM5', 199.90, 'AM5', NULL),
    (2, 3, 'ASUS TUF Gaming B650-PLUS', 'Základná doska pre AM5', 185.00, 'AM5', 'DDR5'),
    (3, 4, 'Kingston Fury 16 GB DDR5', 'Pamäť RAM DDR5', 65.50, NULL, 'DDR5');