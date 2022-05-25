-- tabla users
CREATE TABLE `users` (
  `ncontrol` varchar(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ncontrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
SELECT * FROM test.users;

-- tabla usuarios_pass
CREATE TABLE `usuarios_pass` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
