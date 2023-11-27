
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'error_titles_ARRAY_AB10', 'arrays', 'error_titles_ARRAY_AB10', 'script', '2016-07-14 05:43:20');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Email not sent!', 'script');

INSERT INTO `fields` VALUES (NULL, 'error_bodies_ARRAY_AB10', 'arrays', 'error_bodies_ARRAY_AB10', 'script', '2016-07-14 05:44:14');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'The confirmation email has not been sent to the client successfully. Please try again.', 'script');

COMMIT;