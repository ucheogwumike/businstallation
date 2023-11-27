
START TRANSACTION;


INSERT INTO `fields` VALUES (NULL, 'front_one_way', 'frontend', 'Label / One way', 'script', '2016-06-27 10:08:47');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'One way', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_roundtrip', 'frontend', 'Label / Roundtrip', 'script', '2016-06-27 09:42:45');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Roundtrip', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_departing', 'frontend', 'Label / Departing', 'script', '2016-06-27 10:32:54');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Departing', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_returning', 'frontend', 'Label / Returning', 'script', '2016-06-27 10:33:13');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Returning', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_destinations', 'frontend', 'Label / Destinations', 'script', '2016-06-28 02:25:54');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Destinations', 'script');

COMMIT;