CREATE TABLE `app` (
    `app_id` bigint unsigned not null,
    `app_secret` varchar(255) not null,
    `name` varchar(255) not null,
    PRIMARY KEY (`app_id`),
    INDEX `name` (`name`)
) ENGINE=InnoDB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
