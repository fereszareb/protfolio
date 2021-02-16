CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `porcentage` int(11) NOT NULL,
  `color` varchar(10) NOT NULL
);
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
