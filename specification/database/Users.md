# Users
```sql
CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(50) NULL,
    `password` VARCHAR(50) NULL,
    `nama` VARCHAR(255) NULL,
    `gambar` VARCHAR(50) NULL,
   	`status` INT NOT NULL DEFAULT 1,
	PRIMARY KEY (`id`)
);
```