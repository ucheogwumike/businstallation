
START TRANSACTION;

UPDATE `fields` SET `label`='Options / Merchant ID' WHERE `key`='opt_o_authorize_merchant_id';

COMMIT;