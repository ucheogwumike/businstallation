START TRANSACTION;

ALTER TABLE `bookings` MODIFY `cc_type` blob;
ALTER TABLE `bookings` MODIFY `cc_num` blob;
ALTER TABLE `bookings` MODIFY `cc_exp` blob;
ALTER TABLE `bookings` MODIFY `cc_code` blob;

COMMIT;