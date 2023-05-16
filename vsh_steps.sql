-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Новая категория',
  `desc` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categories` (`id`, `title`, `desc`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'C#',	'Все курсы по C#',	NULL,	'2023-04-06 20:58:41',	'2023-04-06 20:58:41'),
(2,	'Java',	'Курсы на языке Java',	NULL,	'2023-04-06 21:16:33',	'2023-04-06 21:16:33'),
(3,	'PHP',	'Курсы по PHP для нас',	'2023-04-08 01:39:05',	'2023-04-07 01:07:24',	'2023-04-08 01:39:05'),
(4,	'PHP',	'Курсы на языке PHP',	NULL,	'2023-04-12 17:40:02',	'2023-04-12 17:40:02');

CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Новый курс',
  `info` text COLLATE utf8mb4_unicode_ci,
  `imagelink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image',
  `courl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'course_url',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `stat_duration` time DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_author_idx` (`author_id`),
  KEY `course_category_idx` (`category_id`),
  CONSTRAINT `course_author_fk` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  CONSTRAINT `course_category_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `courses` (`id`, `category_id`, `title`, `info`, `imagelink`, `courl`, `is_active`, `stat_duration`, `deleted_at`, `created_at`, `updated_at`, `author_id`) VALUES
(2,	4,	'php',	'php first',	'course1681764382.jpg',	'course1681764382',	1,	NULL,	NULL,	'2023-04-17 17:46:22',	'2023-04-22 17:05:26',	1),
(3,	1,	'C# первые программки',	'Самые простые программы на C#',	'course1681764663.png',	'course1681764663',	1,	NULL,	NULL,	'2023-04-17 17:51:03',	'2023-04-22 17:12:27',	1);

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `imagesteps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `steps_id` bigint unsigned NOT NULL DEFAULT '1',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `info` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imagesteps_steps_idx` (`steps_id`),
  CONSTRAINT `imagesteps_steps_fk` FOREIGN KEY (`steps_id`) REFERENCES `steps` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `lessons` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_course_idx` (`course_id`),
  CONSTRAINT `post_course_fk` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `lessons` (`id`, `course_id`, `title`, `info`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	2,	'Вводный урок',	'Вводный урок про PHP и инструменты для работы',	0,	NULL,	'2023-04-23 10:36:28',	'2023-04-23 10:36:28');

CREATE TABLE `linksteps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `steps_id` bigint unsigned NOT NULL DEFAULT '1',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `info` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `linksteps_steps_idx` (`steps_id`),
  CONSTRAINT `linksteps_steps_fk` FOREIGN KEY (`steps_id`) REFERENCES `steps` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `linksteps` (`id`, `steps_id`, `link`, `info`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	4,	'https://www.php.net/',	'Официальный сайт php',	NULL,	'2023-05-15 22:45:56',	'2023-05-15 22:45:56'),
(2,	5,	'https://www.php.net/manual/ru/faq.general.php',	'Русскоязычный ресурс php',	NULL,	'2023-05-15 22:53:04',	'2023-05-15 22:53:04');

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(97,	'2014_10_12_000000_create_users_table',	1),
(98,	'2014_10_12_100000_create_password_resets_table',	1),
(99,	'2019_08_19_000000_create_failed_jobs_table',	1),
(100,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(101,	'2023_04_06_173153_create_courses_table',	1),
(102,	'2023_04_06_173251_create_categories_table',	1),
(103,	'2023_04_06_173306_create_lessons_table',	1),
(104,	'2023_04_06_173327_create_steps_table',	1),
(105,	'2023_04_06_173355_create_videosteps_table',	1),
(106,	'2023_04_06_173416_create_imagesteps_table',	1),
(107,	'2023_04_06_173438_create_teststeps_table',	1),
(108,	'2023_04_06_173602_create_queststeps_table',	1),
(109,	'2023_04_06_182627_create_textsteps_table',	1),
(110,	'2023_04_06_182711_create_linksteps_table',	1),
(111,	'2023_04_11_200836_create_roles_table',	2),
(112,	'2023_04_11_200953_create_user_roles_table',	2),
(113,	'2023_04_15_183528_add_column_autor_to_course_table',	3),
(114,	'2023_04_15_184305_add_column_categoryforeign_to_course_table',	4),
(115,	'2023_04_22_212513_create_sessions_table',	5),
(116,	'2023_04_30_145343_create_types_table',	6);

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `queststeps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `steps_id` bigint unsigned NOT NULL DEFAULT '1',
  `answer` text COLLATE utf8mb4_unicode_ci,
  `is_true` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `queststeps_steps_idx` (`steps_id`),
  CONSTRAINT `queststeps_steps_fk` FOREIGN KEY (`steps_id`) REFERENCES `steps` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `title`, `info`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'Администратор',	'Администратор меняет настройки сайта',	NULL,	NULL),
(2,	'teacher',	'Учитель',	'Учитель создает курсы под своим авторством, может редактировать, удалять уроки своих курсов',	NULL,	NULL),
(3,	'user',	'Пользователь',	'Пользователь является учеником, имеет право проходить курсы, на которые подписан, оценивать чужие курсы',	NULL,	NULL);

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `steps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lesson_id` bigint unsigned NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'quest',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_lesson_idx` (`lesson_id`),
  CONSTRAINT `post_lesson_fk` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `steps` (`id`, `lesson_id`, `title`, `info`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	1,	'М1',	'ммм1',	'Video',	NULL,	'2023-04-30 17:49:37',	'2023-04-30 17:49:37'),
(2,	1,	'Задание для самостоятельной работы',	'Вы просмотрели видео. Теперь ответьте на вопрос:',	'Quest',	NULL,	'2023-05-02 15:54:04',	'2023-05-02 15:54:04'),
(3,	1,	'V2',	'Видео об инструментах',	'Video',	NULL,	'2023-05-09 17:14:23',	'2023-05-09 17:14:23'),
(4,	1,	'Ссылка на ресурс',	'Ссылка на ресурс',	'Link',	NULL,	'2023-05-09 17:17:41',	'2023-05-09 17:17:41'),
(5,	1,	'Link2',	'Link № 2',	'Link',	NULL,	'2023-05-10 00:41:09',	'2023-05-10 00:41:09'),
(6,	1,	'текст',	'текст 1',	'Image',	NULL,	'2023-05-10 00:55:30',	'2023-05-10 00:55:30'),
(7,	1,	'Код программы на php',	'Вот код программы на php. Изучите его и проверьте на соответствие psr-12',	'Text',	NULL,	'2023-05-15 23:00:23',	'2023-05-15 23:00:23');

CREATE TABLE `teststeps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `steps_id` bigint unsigned NOT NULL DEFAULT '1',
  `answer` text COLLATE utf8mb4_unicode_ci,
  `is_true` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teststeps_steps_idx` (`steps_id`),
  CONSTRAINT `teststeps_steps_fk` FOREIGN KEY (`steps_id`) REFERENCES `steps` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `textsteps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `steps_id` bigint unsigned NOT NULL DEFAULT '1',
  `info` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `textsteps_steps_idx` (`steps_id`),
  CONSTRAINT `textsteps_steps_fk` FOREIGN KEY (`steps_id`) REFERENCES `steps` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `textsteps` (`id`, `steps_id`, `info`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	7,	'<?php\r\n// Предположим, что текущей датой является 10 марта 2001, 5:16:18 вечера,\r\n// и мы находимся в часовом поясе Mountain Standard Time (MST)\r\n\r\n$today = date(\"F j, Y, g:i a\");                 // March 10, 2001, 5:16 pm\r\n$today = date(\"m.d.y\");                         // 03.10.01\r\n$today = date(\"j, n, Y\");                       // 10, 3, 2001\r\n$today = date(\"Ymd\");                           // 20010310\r\n$today = date(\'h-i-s, j-m-y, it is w Day\');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01\r\n$today = date(\'\\i\\t \\i\\s \\t\\h\\e jS \\d\\a\\y.\');   // it is the 10th day.\r\n$today = date(\"D M j G:i:s T Y\");               // Sat Mar 10 17:16:18 MST 2001\r\n$today = date(\'H:m:s \\m \\i\\s\\ \\m\\o\\n\\t\\h\');     // 17:03:18 m is month\r\n$today = date(\"H:i:s\");                         // 17:16:18\r\n$today = date(\"Y-m-d H:i:s\");                   // 2001-03-10 17:16:18 (формат MySQL DATETIME)\r\n?>',	NULL,	'2023-05-15 23:11:54',	'2023-05-15 23:11:54');

CREATE TABLE `types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'new',
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `types` (`id`, `title`, `info`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Video',	'Видео',	NULL,	NULL,	NULL),
(2,	'Quest',	'Задание',	NULL,	NULL,	NULL),
(3,	'Image',	'Изображение',	NULL,	NULL,	NULL),
(4,	'Test',	'Тест',	NULL,	NULL,	NULL),
(5,	'Link',	'Ссылка',	NULL,	NULL,	NULL),
(6,	'Text',	'Текст',	NULL,	NULL,	NULL);

CREATE TABLE `user_roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_role_user_idx` (`user_id`),
  KEY `user_role_role_idx` (`role_id`),
  CONSTRAINT `user_role_role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `user_role_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1,	1,	2,	NULL,	NULL);

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Евгений Витольдович',	'ev@mail.ru',	NULL,	'$2y$10$cKUnIGOwPgFceafbV9HUH.eGObQmr7AVU00E5U5F/t24qirq8LmxW',	NULL,	'2023-04-11 17:03:50',	'2023-04-11 17:03:50'),
(2,	'Валерий Жданов',	'becwal@yandex.ru',	NULL,	'$2y$10$6WyK2dSG7smOvoQxfnxky.tyP77S.Poam/YMfG2EdUxj9LfuGPnte',	NULL,	'2023-04-25 17:43:18',	'2023-04-25 17:43:18');

CREATE TABLE `videosteps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `steps_id` bigint unsigned NOT NULL DEFAULT '1',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `info` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `videosteps_steps_idx` (`steps_id`),
  CONSTRAINT `videosteps_steps_fk` FOREIGN KEY (`steps_id`) REFERENCES `steps` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `videosteps` (`id`, `steps_id`, `link`, `info`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	1,	'I21e_mHjEjs',	'234',	NULL,	'2023-05-02 16:19:48',	'2023-05-02 16:19:48'),
(2,	3,	'4_LWtwjaHEg',	'инструменты разработчика',	NULL,	'2023-05-09 17:15:15',	'2023-05-09 17:15:15');

-- 2023-05-16 02:13:46
