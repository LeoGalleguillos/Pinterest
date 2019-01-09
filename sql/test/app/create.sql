CREATE TABLE `app` (
    `app_id` bigint unsigned,
    `app_secret` varchar(255) default null,
    PRIMARY KEY (`app_id`)
) ENGINE=InnoDB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
