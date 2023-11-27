START TRANSACTION;

ALTER TABLE `bookings_seats` DROP PRIMARY KEY;
ALTER TABLE `bookings_seats` ADD `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);
ALTER TABLE `bookings_seats` CHANGE `booking_id` `booking_id` INT(10) NULL;
ALTER TABLE `bookings_seats` CHANGE `seat_id` `seat_id` INT(10) NULL;
ALTER TABLE `bookings_seats` CHANGE `ticket_id` `ticket_id` INT(10) NULL;
ALTER TABLE `bookings_seats` CHANGE `start_location_id` `start_location_id` INT(10) NULL;
ALTER TABLE `bookings_seats` ADD UNIQUE(`booking_id`, `seat_id`, `ticket_id`, `start_location_id`);

ALTER TABLE `bookings_tickets` DROP PRIMARY KEY;
ALTER TABLE `bookings_tickets` DROP INDEX `booking_id`;
ALTER TABLE `bookings_tickets` ADD `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);
ALTER TABLE `bookings_tickets` CHANGE `booking_id` `booking_id` INT(10) NULL;
ALTER TABLE `bookings_tickets` CHANGE `ticket_id` `ticket_id` INT(10) NULL;
ALTER TABLE `bookings_tickets` ADD UNIQUE(`booking_id`, `ticket_id`);

ALTER TABLE `route_details` DROP PRIMARY KEY;
ALTER TABLE `route_details` DROP INDEX `route_id`;
ALTER TABLE `route_details` ADD `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);
ALTER TABLE `route_details` CHANGE `route_id` `route_id` INT(10) UNSIGNED NULL;
ALTER TABLE `route_details` CHANGE `from_location_id` `from_location_id` INT(10) NULL;
ALTER TABLE `route_details` CHANGE `to_location_id` `to_location_id` INT(10) NULL;
ALTER TABLE `route_details` ADD UNIQUE(`route_id`, `from_location_id`, `to_location_id`);

ALTER TABLE `buses_dates` DROP PRIMARY KEY;
ALTER TABLE `buses_dates` DROP INDEX `bus_id`;
ALTER TABLE `buses_dates` ADD `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);
ALTER TABLE `buses_dates` CHANGE `bus_id` `bus_id` INT(10) UNSIGNED NULL;
ALTER TABLE `buses_dates` CHANGE `date` `date` DATE NULL;
ALTER TABLE `buses_dates` ADD UNIQUE(`bus_id`, `date`);

ALTER TABLE `prices` DROP PRIMARY KEY;
ALTER TABLE `prices` DROP INDEX `ticket_id`;
ALTER TABLE `prices` ADD `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);
ALTER TABLE `prices` CHANGE `ticket_id` `ticket_id` INT(10) UNSIGNED NULL;
ALTER TABLE `prices` CHANGE `from_location_id` `from_location_id` INT(10) NULL;
ALTER TABLE `prices` CHANGE `to_location_id` `to_location_id` INT(10) NULL;
ALTER TABLE `prices` ADD UNIQUE(`ticket_id`, `from_location_id`, `to_location_id`);

ALTER TABLE `buses_locations` DROP PRIMARY KEY;
ALTER TABLE `buses_locations` DROP INDEX `bus_id`;
ALTER TABLE `buses_locations` ADD `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);
ALTER TABLE `buses_locations` CHANGE `bus_id` `bus_id` INT(10) UNSIGNED NULL;
ALTER TABLE `buses_locations` CHANGE `location_id` `location_id` INT(10) UNSIGNED NULL;
ALTER TABLE `buses_locations` ADD UNIQUE(`bus_id`, `location_id`);

ALTER TABLE `routes_cities` DROP PRIMARY KEY;
ALTER TABLE `routes_cities` DROP INDEX `route_id`;
ALTER TABLE `routes_cities` ADD `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);
ALTER TABLE `routes_cities` CHANGE `route_id` `route_id` INT(10) UNSIGNED NULL;
ALTER TABLE `routes_cities` CHANGE `city_id` `city_id` INT(10) UNSIGNED NULL;
ALTER TABLE `routes_cities` CHANGE `order` `order` TINYINT(3) NULL;
ALTER TABLE `routes_cities` ADD UNIQUE(`route_id`, `city_id`, `order`);

COMMIT;