# Order
```sql
CREATE TABLE `order` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`decoration_id` INT NOT NULL,
	`clothes_id` INT NOT NULL,
	`building_id` INT NOT NULL,
	`total_guest` INT NULL,
	`price` DOUBLE(18, 2) NULL,
    `status` TINYINT DEFAULT 1,
	PRIMARY KEY (`id`)
);
```
##
- [ ] Status
	- 1: Unpaid
	- 2: Paid