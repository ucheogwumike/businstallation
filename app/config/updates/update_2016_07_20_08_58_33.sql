
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'menuInstallPreview', 'backend', 'Menu / Install & Preview', 'script', '2016-07-20 02:21:09');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Install & Preview', 'script');

COMMIT;