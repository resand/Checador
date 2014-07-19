SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `bd_checador`.`Area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_checador`.`Area` ;

CREATE TABLE IF NOT EXISTS `bd_checador`.`Area` (
  `id_area` INT NOT NULL AUTO_INCREMENT,
  `nombre_area` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`id_area`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_checador`.`Personal`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_checador`.`Personal` ;

CREATE TABLE IF NOT EXISTS `bd_checador`.`Personal` (
  `id_personal` INT NOT NULL AUTO_INCREMENT,
  `clave` VARCHAR(45) NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `curp` VARCHAR(18) NOT NULL,
  `rfc` VARCHAR(10) NOT NULL,
  `id_area` INT NOT NULL,
  PRIMARY KEY (`id_personal`),
  INDEX `fk_Personal_Area_idx` (`id_area` ASC),
  CONSTRAINT `fk_Personal_Area`
    FOREIGN KEY (`id_area`)
    REFERENCES `bd_checador`.`Area` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_checador`.`Personal-Horario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_checador`.`Personal-Horario` ;

CREATE TABLE IF NOT EXISTS `bd_checador`.`Personal-Horario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `hora_entrada` DATETIME NOT NULL,
  `hora_salida` DATETIME NOT NULL,
  `id_personal` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Personal-Horario_Personal1_idx` (`id_personal` ASC),
  CONSTRAINT `fk_Personal-Horario_Personal1`
    FOREIGN KEY (`id_personal`)
    REFERENCES `bd_checador`.`Personal` (`id_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_checador`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_checador`.`Usuarios` ;

CREATE TABLE IF NOT EXISTS `bd_checador`.`Usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contrasenia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_checador`.`Horarios-Checados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_checador`.`Horarios-Checados` ;

CREATE TABLE IF NOT EXISTS `bd_checador`.`Horarios-Checados` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `horario_entrada` DATETIME NOT NULL,
  `horario_salida` VARCHAR(45) NULL DEFAULT '0000-00-00',
  `id_personal` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Horarios-Checados_Personal1_idx` (`id_personal` ASC),
  CONSTRAINT `fk_Horarios-Checados_Personal1`
    FOREIGN KEY (`id_personal`)
    REFERENCES `bd_checador`.`Personal` (`id_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_checador`.`Faltas-Personal`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_checador`.`Faltas-Personal` ;

CREATE TABLE IF NOT EXISTS `bd_checador`.`Faltas-Personal` (
  `id_falta` INT NOT NULL AUTO_INCREMENT,
  `registro_falta` INT NULL DEFAULT 0,
  `fecha_falta` DATETIME NOT NULL,
  `id_personal` INT NOT NULL,
  PRIMARY KEY (`id_falta`),
  INDEX `fk_Faltas-Personal_Personal1_idx` (`id_personal` ASC),
  CONSTRAINT `fk_Faltas-Personal_Personal1`
    FOREIGN KEY (`id_personal`)
    REFERENCES `bd_checador`.`Personal` (`id_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
