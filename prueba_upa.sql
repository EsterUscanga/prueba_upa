
DROP SCHEMA IF EXISTS `db_dep` ;

-- -----------------------------------------------------
-- Schema db_dep
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_dep` DEFAULT CHARACTER SET utf8 ;
USE `db_dep` ;

-- -----------------------------------------------------
-- Table `db_dep`.`maestros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_dep`.`maestros` ;

CREATE TABLE IF NOT EXISTS `db_dep`.`maestros` (
  `id_maestro` INT NOT NULL AUTO_INCREMENT,
  `nombre_maestro` TEXT NOT NULL,
  `apellido_maestro` TEXT NOT NULL,
  `correo_upa` VARCHAR(45) NOT NULL,
  `correo_personal` VARCHAR(45) NOT NULL,
  `grado_academico` TEXT NOT NULL,
  `especialidad` TEXT NOT NULL,
  PRIMARY KEY (`id_maestro`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_dep`.`materias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_dep`.`materias` ;

CREATE TABLE IF NOT EXISTS `db_dep`.`materias` (
  `id_materia` INT ZEROFILL NOT NULL,
  `nombre_materia` TEXT NOT NULL,
  PRIMARY KEY (`id_materia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_dep`.`carreras`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_dep`.`carreras` ;

CREATE TABLE IF NOT EXISTS `db_dep`.`carreras` (
  `id_carrera` INT ZEROFILL NOT NULL,
  `nombre_carrera` TEXT NOT NULL,
  PRIMARY KEY (`id_carrera`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_dep`.`grupos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_dep`.`grupos` ;

CREATE TABLE IF NOT EXISTS `db_dep`.`grupos` (
  `id_grupo` INT ZEROFILL NOT NULL,
  `nombre_grupo` VARCHAR(45) NOT NULL,
  `id_carrera` INT ZEROFILL NOT NULL,
  `materia_profesor_id_material_profesore` INT ZEROFILL NOT NULL,
  PRIMARY KEY (`id_grupo`),
  CONSTRAINT `fk_grupos_carreras`
    FOREIGN KEY (`id_carrera`)
    REFERENCES `db_dep`.`carreras` (`id_carrera`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `db_dep`.`edificios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_dep`.`edificios` ;

CREATE TABLE IF NOT EXISTS `db_dep`.`edificios` (
  `id_edificio` INT ZEROFILL NOT NULL,
  `nombre_edificio` TEXT NULL,
  PRIMARY KEY (`id_edificio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_dep`.`aulas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_dep`.`aulas` ;

CREATE TABLE IF NOT EXISTS `db_dep`.`aulas` (
  `id_aula` INT ZEROFILL NOT NULL,
  `nombre_aula` TEXT NOT NULL,
  `id_edificio` INT ZEROFILL NOT NULL,
  PRIMARY KEY (`id_aula`),
  CONSTRAINT `fk_aulas_edificios1`
    FOREIGN KEY (`id_edificio`)
    REFERENCES `db_dep`.`edificios` (`id_edificio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_dep`.`materia_profesor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_dep`.`materia_profesor` ;

CREATE TABLE IF NOT EXISTS `db_dep`.`materia_profesor` (
  `id_material_profesore` INT ZEROFILL NOT NULL,
  `id_materia` INT ZEROFILL NOT NULL,
  `id_maestro` INT NOT NULL,
  `id_aula` INT ZEROFILL NOT NULL,
  `id_grupo` INT ZEROFILL NOT NULL,
  PRIMARY KEY (`id_material_profesore`),
  CONSTRAINT `fk_materia_profesor_materias1`
    FOREIGN KEY (`id_materia`)
    REFERENCES `db_dep`.`materias` (`id_materia`),
  CONSTRAINT `fk_materia_profesor_maestros1`
    FOREIGN KEY (`id_maestro`)
    REFERENCES `db_dep`.`maestros` (`id_maestro`),
  CONSTRAINT `fk_materia_profesor_aulas1`
    FOREIGN KEY (`id_aula`)
    REFERENCES `db_dep`.`aulas` (`id_aula`),
  CONSTRAINT `fk_materia_profesor_grupos1`
    FOREIGN KEY (`id_grupo`)
    REFERENCES `db_dep`.`grupos` (`id_grupo`)
)
ENGINE = InnoDB;

