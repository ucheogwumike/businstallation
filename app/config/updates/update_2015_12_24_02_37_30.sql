
START TRANSACTION;

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "lblBookingNotConfirmed");
UPDATE `multi_lang` SET `content` = 'The booking has been cancelled and cannot be printed.' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

COMMIT;