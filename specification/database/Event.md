# Event
```sql
CREATE TABLE `event` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `code` VARCHAR (100) NULL,
    `building_id` INT NULL,
	`start_date` DATE NULL,
	`end_date` DATE NULL,
	`title` VARCHAR (255) NULL,
    `description` TEXT NULL,
    `status` TINYINT DEFAULT 1,
	PRIMARY KEY (`id`)
);
```