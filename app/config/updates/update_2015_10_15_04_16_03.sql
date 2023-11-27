
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblBookingNotConfirmed', 'backend', 'Label / The booking has not been confirmed yet.', 'script', '2015-10-15 04:14:24');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'The booking has not been confirmed yet.', 'script');

COMMIT;