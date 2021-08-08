# Wedding Package Detail
```sql
CREATE TABLE `wedding_package_detail` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `wedding_package_id` VARCHAR (100) NULL,
	`feature_id` VARCHAR (100) NULL,
	PRIMARY KEY (`id`)
);
```