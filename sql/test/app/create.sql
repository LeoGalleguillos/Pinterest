CREATE TABLE `app` (
    `app_id` bigint unsigned NOT NULL,
    `app_secret` varchar(255) NOT NULL,
    `name` varchar(255) NOT NULL,
    `denied` tinyint(1) NOT NULL DEFAULT '0',
    PRIMARY KEY (`app_id`),
    INDEX `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
