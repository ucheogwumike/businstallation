
START TRANSACTION;

INSERT INTO `options` (`foreign_id`, `key`, `tab_id`, `value`, `label`, `type`, `order`, `is_visible`, `style`) VALUES
(1, 'o_sms_payment_message', 3, '', NULL, 'text', 3, 1, NULL);

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "opt_o_sms_confirmation_message");
UPDATE `multi_lang` SET `content` = 'New booking SMS confirmation' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

INSERT INTO `fields` VALUES (NULL, 'opt_o_sms_payment_message', 'backend', 'Options / SMS confirmation sent after payment', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'SMS confirmation sent after payment', 'script');

INSERT INTO `fields` VALUES (NULL, 'opt_o_sms_payment_message_text', 'backend', 'Options / SMS confirmation sent after payment', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', '<u>Available Tokens:</u><br/><br/>{Title}<br/>{FirstName}<br/>{LastName}<br/>{Email}<br/>{Date}<br/>{TicketTypesPrice}<br/>{UniqueID}<br/>{Total}<br/>{Phone}', 'script');

COMMIT;