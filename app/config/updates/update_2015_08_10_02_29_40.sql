
START TRANSACTION;

ALTER TABLE `bookings` ADD COLUMN `stop_datetime` datetime DEFAULT NULL AFTER `booking_datetime`;

COMMIT;