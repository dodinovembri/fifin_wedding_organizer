# Wedding Package
```sql
CREATE TABLE `wedding_package` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `code` VARCHAR (100) NULL,
	`name` VARCHAR (100) NULL,
	`price` VARCHAR (100) NULL,
    `image` VARCHAR (50) NULL,
    `type` TINYINT NULL,
    `description` TEXT NULL,
    `status` TINYINT DEFAULT 1,
	PRIMARY KEY (`id`)
);
```
## Type
| Code | Name |
| ---- | ---- |
| 0 | Normal |
| 1 | Featured |