SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `autorasevic` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `autorasevic` ;

-- -----------------------------------------------------
-- Table `autorasevic`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `autorasevic`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autorasevic`.`mark`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `autorasevic`.`mark` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(120) NULL,
  `link` VARCHAR(120) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autorasevic`.`car`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `autorasevic`.`car` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `naslov` VARCHAR(120) NULL,
  `model` VARCHAR(120) NULL,
  `godiste` INT NULL,
  `snaga` VARCHAR(45) NULL,
  `kilometraza` INT NULL,
  `gorivo` VARCHAR(45) NULL,
  `transmisija` VARCHAR(45) NULL,
  `boja` VARCHAR(45) NULL,
  `cijena` VARCHAR(45) NULL,
  `opis` TEXT NULL,
  `u_dolasku` TINYINT(1) NULL,
  `na_akciji` TINYINT(1) NULL,
  `mark_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `is_active` TINYINT(1) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_car_mark_idx` (`mark_id` ASC),
  INDEX `fk_car_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_car_mark`
    FOREIGN KEY (`mark_id`)
    REFERENCES `autorasevic`.`mark` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_car_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `autorasevic`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autorasevic`.`image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `autorasevic`.`image` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `order` INT NULL,
  `link` VARCHAR(255) NULL,
  `car_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_image_car1_idx` (`car_id` ASC),
  CONSTRAINT `fk_image_car1`
    FOREIGN KEY (`car_id`)
    REFERENCES `autorasevic`.`car` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autorasevic`.`page`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `autorasevic`.`page` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `content` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autorasevic`.`contact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `autorasevic`.`contact` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(90) NULL,
  `phone` VARCHAR(45) NULL,
  `links` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
