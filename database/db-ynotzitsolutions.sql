/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 8.0.27 : Database - ynotzitsolutions
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ynotzitsolutions` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `ynotzitsolutions`;

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `blogs` */

insert  into `blogs`(`id`,`title`,`description`,`content`,`image`,`created_at`,`updated_at`) values (1,'What is Web Development','Web development is the process of building websites and apps for the internet—or for a private network known as an intranet.','<h1>What is web development?<h1>\n            <p style=\"margin-top:15px;\">Web development is the process of building websites and apps for the internet—or for a private network known as an intranet. Web developers bring the design and functionality of a website to life, writing code that determines things like style, layout, and interactivity. From the most simple, static web pages to social media platforms and apps; from e-commerce websites to content management systems (like WordPress)—all the tools we use via the internet have been built by web developers. </p>\n\n            <p style=\"margin-top:20px;\">There are three different types (or layers) of web development: The frontend, the backend, and database technology. Frontend development, otherwise known as client-side scripting, encompasses all the elements of a website that the user experiences directly. Things like layout, font, colors, menus, and contact forms are all powered by the frontend.</p>','default-img.png','2023-05-29 12:43:18','2023-05-29 12:43:18'),(2,'What is Web Development','Web development is the process of building websites and apps for the internet—or for a private network known as an intranet.','<h1>What is web development?<h1>\n            <p style=\"margin-top:15px;\">Web development is the process of building websites and apps for the internet—or for a private network known as an intranet. Web developers bring the design and functionality of a website to life, writing code that determines things like style, layout, and interactivity. From the most simple, static web pages to social media platforms and apps; from e-commerce websites to content management systems (like WordPress)—all the tools we use via the internet have been built by web developers. </p>\n\n            <p style=\"margin-top:20px;\">There are three different types (or layers) of web development: The frontend, the backend, and database technology. Frontend development, otherwise known as client-side scripting, encompasses all the elements of a website that the user experiences directly. Things like layout, font, colors, menus, and contact forms are all powered by the frontend.</p>','default-img.png','2023-05-29 12:43:18','2023-05-29 12:43:18'),(3,'What is Web Development','Web development is the process of building websites and apps for the internet—or for a private network known as an intranet.','<h1>What is web development?<h1>\n            <p style=\"margin-top:15px;\">Web development is the process of building websites and apps for the internet—or for a private network known as an intranet. Web developers bring the design and functionality of a website to life, writing code that determines things like style, layout, and interactivity. From the most simple, static web pages to social media platforms and apps; from e-commerce websites to content management systems (like WordPress)—all the tools we use via the internet have been built by web developers. </p>\n\n            <p style=\"margin-top:20px;\">There are three different types (or layers) of web development: The frontend, the backend, and database technology. Frontend development, otherwise known as client-side scripting, encompasses all the elements of a website that the user experiences directly. Things like layout, font, colors, menus, and contact forms are all powered by the frontend.</p>','default-img.png','2023-05-29 12:43:18','2023-05-29 12:43:18');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_05_24_104838_create_blogs_table',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Muhammed Ali','ali@ynotzitsolutions.com','2023-05-29 12:43:18','$2y$10$ZBDRQ9cnIavjX5Vwi5xLhOGMKLSOnOLAqfq7STIAr5DAzCnItzLjq','0w1OTMdM7K','2023-05-29 12:43:18','2023-05-29 12:43:18'),(2,'Anjitha','anjitha@ynotzitsolutions.com','2023-05-29 12:43:18','$2y$10$NF10NWDroRi8m7FseJK2NOAhvLWjnJGMk5CLcItovVboESjeyTbLC','jecvjEIoDL','2023-05-29 12:43:18','2023-05-29 12:43:18'),(3,'Revathi','revathi@ynotzitsolutions.com','2023-05-29 12:43:18','$2y$10$iw/ChLMv.gf2UuqNKyWUWu4Q4YlYg0Rm3qcsI/fH95raveeXntnVe','8My9u8Ktev','2023-05-29 12:43:18','2023-05-29 12:43:18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
