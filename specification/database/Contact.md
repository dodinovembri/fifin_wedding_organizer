# Contact
```sql
CREATE TABLE `contact` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `email` VARCHAR (100) NULL,
	`facebook` VARCHAR (100) NULL,
	`twitter` VARCHAR (100) NULL,
	`instagram` VARCHAR (100) NULL,
	`phone` VARCHAR (100) NULL,
	`opening_hours` VARCHAR (255) NULL,
   	`address` TEXT NULL,
    `about_title` VARCHAR (255) NULL,
    `about_image` VARCHAR (50) NULL,
    `about` TEXT NULL,
    `status` TINYINT DEFAULT 1,
	PRIMARY KEY (`id`)
);
```