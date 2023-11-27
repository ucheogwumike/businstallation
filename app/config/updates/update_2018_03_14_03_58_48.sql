
START TRANSACTION;

INSERT INTO `options` (`foreign_id`, `key`, `tab_id`, `value`, `label`, `type`, `order`, `is_visible`, `style`) VALUES
(1, 'o_cancel_after_pending_time', 2, 'Yes|No::Yes', 'Yes|No', 'enum', 8, 1, NULL);

INSERT INTO `fields` VALUES (NULL, 'opt_o_cancel_after_pending_time', 'backend', 'Label / Cancelled After "Seats Pending Time"', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Cancelled After "Seats Pending Time"', 'script');

COMMIT;