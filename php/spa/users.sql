CREATE TABLE `users` (
  `ncontrol` varchar(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ncontrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
SELECT * FROM test.users;