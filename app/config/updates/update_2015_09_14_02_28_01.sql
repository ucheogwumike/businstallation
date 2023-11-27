
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'cancel_err_ARRAY_5', 'arrays', 'cancel_err_ARRAY_5', 'script', '2015-09-14 02:25:41');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'You cannot cancel this booking because the bus already started.', 'script');

COMMIT;