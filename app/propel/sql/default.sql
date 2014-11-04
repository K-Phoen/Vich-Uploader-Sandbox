
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- bike
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `bike`;

CREATE TABLE `bike`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- bike_image
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `bike_image`;

CREATE TABLE `bike_image`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `bike_id` INTEGER NOT NULL,
    `title` VARCHAR(255),
    `file_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `bike_image_FI_1` (`bike_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- car
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `car`;

CREATE TABLE `car`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `front_image_filename` VARCHAR(255),
    `back_image_filename` VARCHAR(255),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- image
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `image`;

CREATE TABLE `image`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255),
    `file_name` VARCHAR(255),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
