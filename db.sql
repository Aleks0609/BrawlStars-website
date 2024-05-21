CREATE TABLE `players` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `tag` VARCHAR(20) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `trophies` INT NOT NULL,
    `expLevel` INT NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `tag` (`tag`)
);