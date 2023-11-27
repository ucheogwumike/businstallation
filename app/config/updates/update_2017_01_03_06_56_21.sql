
START TRANSACTION;

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "opt_o_email_confirmation_message_text");
UPDATE `multi_lang` SET `content` = '<u>Available Tokens:</u><br/><br/>{Title}<br/>{FirstName}<br/>{LastName}<br/>{Email}<br/>{Phone}<br/>{Notes}<br/>{Country}<br/>{City}<br/>{State}<br/>{Zip}<br/>{Address}<br/>{Company}<br/>{Date}<br/>{Time}<br/>{Bus}<br/>{Route}<br/>{Seats}<br/>{TicketTypesPrice}<br/>{UniqueID}<br/>{Total}<br/>{Tax}<br/>{PaymentMethod}<br/>{CCType}<br/>{CCNum}<br/>{CCExp}<br/>{CCSec}<br/>{PrintTickets}<br/>{CancelURL}<br/>' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "opt_o_email_payment_message_text");
UPDATE `multi_lang` SET `content` = '<u>Available Tokens:</u><br/><br/>{Title}<br/>{FirstName}<br/>{LastName}<br/>{Email}<br/>{Phone}<br/>{Notes}<br/>{Country}<br/>{City}<br/>{State}<br/>{Zip}<br/>{Address}<br/>{Company}<br/>{Date}<br/>{Time}<br/>{Bus}<br/>{Route}<br/>{Seats}<br/>{TicketTypesPrice}<br/>{UniqueID}<br/>{Total}<br/>{Tax}<br/>{PaymentMethod}<br/>{CCType}<br/>{CCNum}<br/>{CCExp}<br/>{CCSec}<br/>{PrintTickets}<br/>{CancelURL}<br/>' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "opt_o_email_cancel_message_text");
UPDATE `multi_lang` SET `content` = '<u>Available Tokens:</u><br/><br/>{Title}<br/>{FirstName}<br/>{LastName}<br/>{Email}<br/>{Phone}<br/>{Notes}<br/>{Country}<br/>{City}<br/>{State}<br/>{Zip}<br/>{Address}<br/>{Company}<br/>{Date}<br/>{Time}<br/>{Bus}<br/>{Route}<br/>{Seats}<br/>{TicketTypesPrice}<br/>{UniqueID}<br/>{Total}<br/>{Tax}<br/>{PaymentMethod}<br/>{CCType}<br/>{CCNum}<br/>{CCExp}<br/>{CCSec}<br/>{PrintTickets}<br/>{CancelURL}<br/>' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "lblEmailTokens");
UPDATE `multi_lang` SET `content` = '<u>Available Tokens:</u><br/><br/>{Title}<br/>{FirstName}<br/>{LastName}<br/>{Email}<br/>{Phone}<br/>{Notes}<br/>{Country}<br/>{City}<br/>{State}<br/>{Zip}<br/>{Address}<br/>{Company}<br/>{Date}<br/>{Seat}<br/>{Bus}<br/>{Route}<br/>{Time}<br/>{TicketTypesPrice}<br/>{UniqueID}<br/>{Total}<br/>{Tax}<br/>{PaymentMethod}<br/>{CCType}<br/>{CCNum}<br/>{CCExp}<br/>{CCSec}<br/>{CancelURL}<br/>' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "lblTemplateTokens");
UPDATE `multi_lang` SET `content` = '<u>Available Tokens:</u>\r\n<br/><br/>\r\n{Title}<br/>\r\n{FirstName}<br/>\r\n{LastName}<br/>\r\n{Email}<br/>\r\n{Phone}<br/>\r\n{Notes}<br/>\r\n{Country}<br/>\r\n{City}<br/>\r\n{State}<br/>\r\n{Zip}<br/>\r\n{Address}<br/>\r\n{Company}<br/>\r\n{Date}<br/>\r\n{Bus}<br/>\r\n{Route}<br/>\r\n{Seat}<br/>\r\n{Time}<br/>\r\n{From_Location}<br/>\r\n{To_Location}<br/>\r\n{Departure_Time}<br/>\r\n{Arrival_Time}<br/>\r\n{TicketType}<br/>\r\n{UniqueID}<br/>\r\n{Total}<br/>{Tax}<br/>\r\n{PaymentMethod}<br/>\r\n{CCType}<br/>\r\n{CCNum}<br/>\r\n{CCExp}<br/>\r\n{CCSec}<br/>\r\n{CancelURL}<br/>' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "opt_o_sms_confirmation_message_text");
UPDATE `multi_lang` SET `content` = '<u>Available Tokens:</u><br/><br/>{Title}<br/>{FirstName}<br/>{LastName}<br/>{Email}<br/>{Date}<br/>{TicketTypesPrice}<br/>{UniqueID}<br/>{Total}<br/>{Tax}<br/>{Phone}' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "opt_o_email_notify_message_text");
UPDATE `multi_lang` SET `content` = '<u>Available Tokens:</u><br/><br/>{Title}<br/>{FirstName}<br/>{LastName}<br/>{Email}<br/>{Phone}<br/>{Notes}<br/>{Country}<br/>{City}<br/>{State}<br/>{Zip}<br/>{Address}<br/>{Company}<br/>{Date}<br/>{Time}<br/>{Bus}<br/>{Route}<br/>{Seats}<br/>{TicketTypesPrice}<br/>{UniqueID}<br/>{Total}<br/>{Tax}<br/>{PaymentMethod}<br/>{CCType}<br/>{CCNum}<br/>{CCExp}<br/>{CCSec}<br/>{PrintTickets}<br/>{CancelURL}<br/>' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "opt_o_sms_payment_message_text");
UPDATE `multi_lang` SET `content` = '<u>Available Tokens:</u><br/><br/>{Title}<br/>{FirstName}<br/>{LastName}<br/>{Email}<br/>{Date}<br/>{TicketTypesPrice}<br/>{UniqueID}<br/>{Total}<br/>{Tax}<br/>{Phone}' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

COMMIT;