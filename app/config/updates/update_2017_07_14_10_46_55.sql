
START TRANSACTION;

ALTER TABLE `bookings` ADD `bus_departure_date` date DEFAULT NULL AFTER `booking_date`;

COMMIT;