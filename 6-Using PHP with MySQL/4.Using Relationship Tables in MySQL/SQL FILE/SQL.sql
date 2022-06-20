
/*
 STEP 3  ADD THE COMAMMAND
 INSERT INTO `sizes` (`id`, `sizes`, `orders`)
 VALUES
 (1, 'Small', 10),
 (2, 'Medium', 20),
 (3, 'Large', 30),
 (4, 'X-Large', 40);
*/
 /*
 TO SOLVE THE PROBLEM  U  CAN'T ADD  OR UPDATE CHILD ROW
-- STEP 0 ADD   Product data
-- STEP 1
 - Every thing should be clear  without entire Data !
-- STEP 2 ADD THE FOLLOWING COMAMMAND
 */


CREATE TABLE `sizes` (
  `id` int(11)  NULL,
  `sizes` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orders` int(11) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `product_size`
( `product_sku` INT(11)  NULL ,
  `size_id` INT(11)  NULL
 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE `product_size` ADD FOREIGN KEY (`product_sku`) REFERENCES `product`(`sku`);

 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(101,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(101,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(101,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(101,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(102,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(102,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(102,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(102,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(103,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(103,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(103,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(103,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(104,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(104,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(104,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(104,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(105,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(105,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(105,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(105,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(106,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(106,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(106,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(106,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(107,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(107,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(107,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(107,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(108,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(108,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(108,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(108,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(109,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(109,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(109,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(109,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(110,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(110,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(110,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(110,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(111,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(111,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(111,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(111,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(112,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(112,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(112,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(112,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(113,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(113,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(113,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(113,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(114,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(114,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(114,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(114,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(115,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(115,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(115,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(115,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(116,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(116,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(116,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(116,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(117,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(117,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(117,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(117,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(118,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(118,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(118,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(118,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(119,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(119,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(119,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(119,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(120,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(120,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(120,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(120,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(121,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(121,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(121,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(121,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(122,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(122,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(122,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(122,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(123,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(123,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(123,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(123,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(124,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(124,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(124,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(124,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(125,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(125,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(125,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(125,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(126,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(126,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(126,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(126,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(127,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(127,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(127,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(127,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(128,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(128,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(128,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(128,4);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(129,1);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(129,2);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(129,3);
 INSERT INTO `product_size`(`product_sku`,`size_id`) VALUES(129,4);
