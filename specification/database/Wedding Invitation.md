# Wedding Invitation
```sql
CREATE TABLE `wedding_invitation` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `code` VARCHAR (100) NULL,
   	`home_background` VARCHAR (50) NULL,
	`groom_name` VARCHAR (255) NULL,
	`groom_image` VARCHAR (50) NULL,
	`groom_text` TEXT NULL,
	`groom_facebook_id` VARCHAR (255) NULL,
	`groom_twitter_id` VARCHAR (255) NULL,
	`groom_instagram_id` VARCHAR (255) NULL,
	`bride_name` VARCHAR (255) NULL,
	`bride_image` VARCHAR (50) NULL,
	`bride_text` TEXT NULL,
    `bride_facebook_id` VARCHAR (255) NULL,
	`bride_twitter_id` VARCHAR (255) NULL,
	`bride_instagram_id` VARCHAR (255) NULL,
    `main_ceremony_date` DATE NULL,
    `main_ceremony_time` VARCHAR (255) NULL,
    `main_ceremony_location` TEXT NULL,
    `main_ceremony_latitude` VARCHAR (50) NULL,
    `main_ceremony_longitude` VARCHAR (50) NULL,
	`wedding_date` VARCHAR (100) NULL,
    `wedding_time` VARCHAR (255) NULL,
    `wedding_location` TEXT NULL,
    `wedding_latitude` VARCHAR (50) NULL,
    `wedding_longitude` VARCHAR (50) NULL,
    `special_message` TEXT NULL,
    `special_message_by` VARCHAR (50) NULL,
    `status` TINYINT DEFAULT 1,
	PRIMARY KEY (`id`)
);
```