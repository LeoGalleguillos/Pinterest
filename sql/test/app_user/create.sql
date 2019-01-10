CREATE TABLE `app_user` (
    `app_id` bigint unsigned not null,
    `user_id` bigint unsigned not null,
    `access_token` varchar(255) not null,
    PRIMARY KEY (`app_id`, `pinterest_user_id`)
) ENGINE=InnoDB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
