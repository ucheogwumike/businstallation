
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblEditRouteDisabled', 'backend', 'Label / You have booking for this route and cannot edit it', 'script', '2015-10-21 07:53:45');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'You have booking for this route and cannot edit it.', 'script');

COMMIT;