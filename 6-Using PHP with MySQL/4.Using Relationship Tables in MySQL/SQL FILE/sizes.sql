
CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `sizes` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `sizes` (`id`, `sizes`, `orders`)
VALUES
(1, 'Small', 10),
(2, 'Medium', 20),
(3, 'Large', 30),
(4, 'X-Large', 40);

ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
*/
