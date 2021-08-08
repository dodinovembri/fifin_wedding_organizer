# Decoration
```sql
CREATE TABLE `decoration` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(100) NULL,
	`name` VARCHAR(255) NULL,
    `image` VARCHAR(50) NULL,
	`description` TEXT NULL,
    `status` TINYINT DEFAULT 1,
	PRIMARY KEY (`id`)
);
```