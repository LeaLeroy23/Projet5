CREATE TABLE IF NOT EXISTS `mydb`.`agent` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(20) NULL,
  `email` VARCHAR(45) NOT NULL,
  `function` VARCHAR(45) NULL,
  `autorisation` VARCHAR(20) NOT NULL,
  `description` VARCHAR(255) NULL,
  `avatar` VARCHAR(255) NULL,
  `password` VARCHAR(45) NOT NULL,
  `token` VARCHAR(45) NULL,
  `status` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;