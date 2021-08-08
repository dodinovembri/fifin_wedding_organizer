# Wedding Photos
```sql
CREATE TABLE `wedding_photos` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `wedding_invitation_id` INT NULL,
	`image` VARCHAR (50) NULL,
    `description` VARCHAR (100) NULL,
    `status` TINYINT DEFAULT 1,
	PRIMARY KEY (`id`)
);
```