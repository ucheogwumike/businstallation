
START TRANSACTION;

INSERT INTO `options` (`foreign_id`, `key`, `tab_id`, `value`, `label`, `type`, `order`, `is_visible`, `style`) VALUES
(1, 'o_theme', 99, 'theme1|theme2|theme3|theme4|theme5|theme6|theme7|theme8|theme9|theme10|theme11::theme1', 'Theme 1|Theme 2|Theme 3|Theme 4|Theme 5|Theme 6|Theme 7|Theme 8|Theme 9|Theme 10|Theme 11', 'enum', 5, 0, NULL);

COMMIT;