START TRANSACTION;

  INSERT INTO `fields` VALUES (NULL, 'enum_arr_ARRAY_yes', 'arrays', 'enum_arr_ARRAY_yes', 'script', '2016-09-12 05:17:35');
  SET @id := (SELECT LAST_INSERT_ID());
  INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Yes', 'script');

  INSERT INTO `fields` VALUES (NULL, 'enum_arr_ARRAY_no', 'arrays', 'enum_arr_ARRAY_no', 'script', '2016-09-12 05:17:35');
  SET @id := (SELECT LAST_INSERT_ID());
  INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'No', 'script');

  INSERT INTO `fields` VALUES (NULL, 'enum_arr_ARRAY_1', 'arrays', 'enum_arr_ARRAY_1', 'script', '2016-09-12 05:17:35');
  SET @id := (SELECT LAST_INSERT_ID());
  INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Yes', 'script');

  INSERT INTO `fields` VALUES (NULL, 'enum_arr_ARRAY_2', 'arrays', 'enum_arr_ARRAY_2', 'script', '2016-09-12 05:17:35');
  SET @id := (SELECT LAST_INSERT_ID());
  INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'No', 'script');

  INSERT INTO `fields` VALUES (NULL, 'enum_arr_ARRAY_3', 'arrays', 'enum_arr_ARRAY_3', 'script', '2016-09-12 05:17:35');
  SET @id := (SELECT LAST_INSERT_ID());
  INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Yes (Required)', 'script');

COMMIT;