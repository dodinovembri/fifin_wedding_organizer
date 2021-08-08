# Wedding Guest Book
```sql
CREATE TABLE `wedding_guest_book` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `wedding_invitation_id` INT NULL,
	`name` VARCHAR (100) NULL,
    `message` TEXT NULL,
    `status` TINYINT DEFAULT 1,
	PRIMARY KEY (`id`)
);
```