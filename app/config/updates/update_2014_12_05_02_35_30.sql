
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'error_titles_ARRAY_ABT11', 'arrays', 'error_titles_ARRAY_ABT11', 'script', '2014-12-05 02:31:52');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'No permissions', 'script');

INSERT INTO `fields` VALUES (NULL, 'error_bodies_ARRAY_ABT11', 'arrays', 'error_bodies_ARRAY_ABT11', 'script', '2014-12-05 02:34:22');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Directory app/web/upload/bus_types has no permissions to upload seat maps. Please set permissions to 777.', 'script');

COMMIT;