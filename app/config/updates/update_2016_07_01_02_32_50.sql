
START TRANSACTION;

ALTER TABLE `buses` ADD `discount` decimal(9,2) DEFAULT 0 AFTER `set_seats_count`;

INSERT INTO `fields` VALUES (NULL, 'lblDiscoutIfReturn', 'backend', 'Label / Discount if return ticket', 'script', '2016-07-01 02:31:02');
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Discount if return ticket', 'script');

COMMIT;