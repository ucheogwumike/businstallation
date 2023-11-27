
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblPendingBookingCannotPrint', 'backend', 'Label / Reservation should be confirmed to print the ticket(s).', 'script', '2016-07-14 05:49:58');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Reservation should be confirmed to print the ticket(s).', 'script');

COMMIT;