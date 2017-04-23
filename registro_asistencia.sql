-- MySQL Script generated by MySQL Workbench
-- 09/14/16 19:32:43
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Registro_asistencia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Registro_asistencia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Registro_asistencia` DEFAULT CHARACTER SET utf8 ;
USE `Registro_asistencia` ;

-- -----------------------------------------------------
-- Table `Registro_asistencia`.`loguin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Registro_asistencia`.`loguin` (
  `id_loguin` INT NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(20) NOT NULL,
  `Pasword` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_loguin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Registro_asistencia`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Registro_asistencia`.`usuario` (
  `codigo` INT NOT NULL,
  `primer_nombre` VARCHAR(45) NOT NULL,
  `segundo_nombre` VARCHAR(45) NOT NULL,
  `primer_apellido` VARCHAR(45) NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `loguin_id_loguin` INT NOT NULL,
  PRIMARY KEY (`codigo`, `loguin_id_loguin`),
  INDEX `fk_usuario_loguin1_idx` (`loguin_id_loguin` ASC),
  CONSTRAINT `fk_usuario_loguin1`
    FOREIGN KEY (`loguin_id_loguin`)
    REFERENCES `Registro_asistencia`.`loguin` (`id_loguin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Registro_asistencia`.`Role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Registro_asistencia`.`Role` (
  `id_role` INT NOT NULL,
  `role` VARCHAR(45) NULL,
  `loguin_id_loguin` INT NOT NULL,
  PRIMARY KEY (`id_role`, `loguin_id_loguin`),
  INDEX `fk_Role_loguin_idx` (`loguin_id_loguin` ASC),
  CONSTRAINT `fk_Role_loguin`
    FOREIGN KEY (`loguin_id_loguin`)
    REFERENCES `Registro_asistencia`.`loguin` (`id_loguin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Registro_asistencia`.`Asignatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Registro_asistencia`.`Asignatura` (
  `id_asignatura` INT NOT NULL,
  `nombre_asign` VARCHAR(45) NOT NULL,
  `creditos` VARCHAR(10) NOT NULL,
  `usuario_codigo` INT NOT NULL,
  `usuario_loguin_id_loguin` INT NOT NULL,
  PRIMARY KEY (`id_asignatura`, `usuario_codigo`, `usuario_loguin_id_loguin`),
  INDEX `fk_Asignatura_usuario1_idx` (`usuario_codigo` ASC, `usuario_loguin_id_loguin` ASC),
  CONSTRAINT `fk_Asignatura_usuario1`
    FOREIGN KEY (`usuario_codigo` , `usuario_loguin_id_loguin`)
    REFERENCES `Registro_asistencia`.`usuario` (`codigo` , `loguin_id_loguin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Registro_asistencia`.`Bitacora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Registro_asistencia`.`Bitacora` (
  `id_bitacora` INT NOT NULL AUTO_INCREMENT,
  `fecha_inicio` DATE NOT NULL,
  `fecha_fin` DATE NOT NULL,
  `codigo` VARCHAR(20) NOT NULL,
  `descripcion` LONGTEXT NULL,
  `asistencia` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id_bitacora`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Registro_asistencia`.`Bitacora_has_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Registro_asistencia`.`Bitacora_has_usuario` (
  `Bitacora_id_bitacora` INT NOT NULL,
  `usuario_codigo` INT NOT NULL,
  `usuario_loguin_id_loguin` INT NOT NULL,
  PRIMARY KEY (`Bitacora_id_bitacora`, `usuario_codigo`, `usuario_loguin_id_loguin`),
  INDEX `fk_Bitacora_has_usuario_usuario1_idx` (`usuario_codigo` ASC, `usuario_loguin_id_loguin` ASC),
  INDEX `fk_Bitacora_has_usuario_Bitacora1_idx` (`Bitacora_id_bitacora` ASC),
  CONSTRAINT `fk_Bitacora_has_usuario_Bitacora1`
    FOREIGN KEY (`Bitacora_id_bitacora`)
    REFERENCES `Registro_asistencia`.`Bitacora` (`id_bitacora`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Bitacora_has_usuario_usuario1`
    FOREIGN KEY (`usuario_codigo` , `usuario_loguin_id_loguin`)
    REFERENCES `Registro_asistencia`.`usuario` (`codigo` , `loguin_id_loguin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;