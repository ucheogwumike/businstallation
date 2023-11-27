
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'front_btn_close', 'frontend', 'Label / Close', 'script', '2018-03-07 07:45:34');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Close', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_round_trip_tickets_error', 'frontend', 'Label / Round trip select ticket error', 'script', '2018-03-07 07:46:58');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Number of tickets for round trip cannot be greater than number of tickets for one trip.', 'script');

COMMIT;