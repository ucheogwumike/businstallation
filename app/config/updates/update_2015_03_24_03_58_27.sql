
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'error_titles_ARRAY_AS09', 'arrays', 'error_titles_ARRAY_AS09', 'script', '2015-03-24 03:51:36');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Missing parameters', 'script');

INSERT INTO `fields` VALUES (NULL, 'error_bodies_ARRAY_AS09', 'arrays', 'error_bodies_ARRAY_AS09', 'script', '2015-03-24 03:52:37');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'The list could not be loaded correctly because of missing parameters.', 'script');

COMMIT;