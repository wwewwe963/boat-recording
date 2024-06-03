CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


insert into users (name, email) values ('boat', 'boat', '1234', 'boat@info.co'), ('peach', 'peach', '1234', 'peach@info.co'),('madan', 'madan', '1234', 'madan@info.co');