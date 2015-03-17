-- MySQL Script generated by MySQL Workbench
-- 03/16/15 22:08:48
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema testesoftware
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema testesoftware
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `testesoftware` DEFAULT CHARACTER SET utf8 ;
USE `testesoftware` ;

-- -----------------------------------------------------
-- Table `testesoftware`.`visualizacoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testesoftware`.`visualizacoes` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_visto` DATE NOT NULL,
  `local_visto` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `com_quem` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `testesoftware`.`generos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testesoftware`.`generos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `testesoftware`.`paises`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testesoftware`.`paises` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `testesoftware`.`filmes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testesoftware`.`filmes` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `genero_id` INT(10) UNSIGNED NOT NULL,
  `pais_id` INT(10) UNSIGNED NOT NULL,
  `visualizacao_id` INT(10) UNSIGNED NULL DEFAULT NULL,
  `nome` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `nota` DOUBLE(8,2) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  INDEX `filmes_genero_id_foreign` (`genero_id` ASC),
  INDEX `filmes_pais_id_foreign` (`pais_id` ASC),
  INDEX `filmes_visualizacao_id_foreign` (`visualizacao_id` ASC),
  CONSTRAINT `filmes_visualizacao_id_foreign`
    FOREIGN KEY (`visualizacao_id`)
    REFERENCES `testesoftware`.`visualizacoes` (`id`),
  CONSTRAINT `filmes_genero_id_foreign`
    FOREIGN KEY (`genero_id`)
    REFERENCES `testesoftware`.`generos` (`id`),
  CONSTRAINT `filmes_pais_id_foreign`
    FOREIGN KEY (`pais_id`)
    REFERENCES `testesoftware`.`paises` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `testesoftware`.`comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testesoftware`.`comentarios` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comentario` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `filme_id` INT(10) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  INDEX `comentarios_filme_id_foreign` (`filme_id` ASC),
  CONSTRAINT `comentarios_filme_id_foreign`
    FOREIGN KEY (`filme_id`)
    REFERENCES `testesoftware`.`filmes` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `testesoftware`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testesoftware`.`migrations` (
  `migration` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `batch` INT(11) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `testesoftware`.`password_resets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testesoftware`.`password_resets` (
  `email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `token` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  INDEX `password_resets_email_index` (`email` ASC),
  INDEX `password_resets_token_index` (`token` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `testesoftware`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testesoftware`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `password` VARCHAR(60) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `remember_token` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
