ALTER TABLE `bookings` ADD `is_return` enum('T','F') DEFAULT 'F' AFTER `return_id`;
ALTER TABLE `bookings` ADD `back_id` int(10) unsigned DEFAULT NULL AFTER `is_return`;
ALTER TABLE `bookings` ADD `return_date` date DEFAULT NULL AFTER `back_id`;
ALTER TABLE `bookings_seats` ADD `is_return` enum('T','F') DEFAULT 'F';
ALTER TABLE `bookings_seats` DROP PRIMARY KEY;
ALTER TABLE `bookings_seats` ADD PRIMARY KEY (`booking_id`, `seat_id`, `ticket_id`, `start_location_id`, `is_return`);
ALTER TABLE `bookings_tickets` ADD `is_return` enum('T','F') DEFAULT 'F';
ALTER TABLE `bookings_tickets` DROP PRIMARY KEY;
ALTER TABLE `bookings_tickets` ADD PRIMARY KEY (`booking_id`, `ticket_id`, `is_return`);
ALTER TABLE `prices` ADD `is_return` enum('T','F') DEFAULT 'F';
ALTER TABLE `prices` DROP PRIMARY KEY;
ALTER TABLE `prices` ADD PRIMARY KEY (`ticket_id`, `from_location_id`, `to_location_id`, `is_return`);

START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblReturn', 'backend', 'lblReturn', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return route', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblReturnTicket', 'backend', 'lblReturnTicket', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return ticket price', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_return_ticket', 'frontend', 'front_return_ticket', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return ticket', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_return_date', 'frontend', 'front_return_date', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return date', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblIsReturn', 'backend', 'lblIsReturn', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return ticket', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblReturnDate', 'backend', 'lblReturnDate', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return date', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_roundtrip_price', 'frontend', 'front_roundtrip_price', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Price', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_return_seats', 'frontend', 'front_return_seats', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return seats', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblPickupBooking', 'backend', 'lblPickupBooking', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Pickup booking', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblReturnBooking', 'backend', 'lblReturnBooking', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return booking', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblReturnBus', 'backend', 'lblReturnBus', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return bus', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblReturnSeats', 'backend', 'lblReturnSeats', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'Return seat(s)', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_no_return_bus_available', 'backend', 'front_no_return_bus_available', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::',  'title', 'There is no available bus for your return trip', 'script');

COMMIT;