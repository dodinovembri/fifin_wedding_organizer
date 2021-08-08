# Banner
```sql
CREATE TABLE `banner` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `image` VARCHAR (50) NULL,
	`description` TEXT NULL,
    `status` TINYINT DEFAULT 1,
	PRIMARY KEY (`id`)
);
```