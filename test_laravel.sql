/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.21-MariaDB : Database - test_laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test_laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `test_laravel`;

/*Table structure for table `agamas` */

DROP TABLE IF EXISTS `agamas`;

CREATE TABLE `agamas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `agamas_name_agama_unique` (`name_agama`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `agamas` */

insert  into `agamas`(`id`,`name_agama`,`created_at`,`updated_at`) values 
(1,'Islam','2022-03-01 06:47:19','2022-03-01 06:47:19'),
(2,'kristen','2022-03-01 06:48:04','2022-03-01 06:48:04'),
(3,'Budha','2022-03-01 06:48:22','2022-03-01 06:48:22'),
(4,'Katolik','2022-03-01 06:48:34','2022-03-01 06:48:34'),
(5,'Konghucu','2022-03-01 06:48:48','2022-03-01 06:48:48');

/*Table structure for table `eselons` */

DROP TABLE IF EXISTS `eselons`;

CREATE TABLE `eselons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_eselon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eselons_name_eselon_unique` (`name_eselon`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `eselons` */

insert  into `eselons`(`id`,`name_eselon`,`created_at`,`updated_at`) values 
(1,'I','2022-03-01 06:50:16','2022-03-01 06:50:16'),
(2,'II','2022-03-01 06:50:25','2022-03-01 06:50:25'),
(3,'III','2022-03-01 06:50:31','2022-03-01 06:50:31'),
(4,'IV','2022-03-01 06:50:43','2022-03-01 06:50:43'),
(5,'V','2022-03-01 06:50:50','2022-03-01 06:50:50'),
(6,'VI','2022-03-01 06:50:59','2022-03-01 06:50:59'),
(7,'VII','2022-03-01 06:51:05','2022-03-01 06:51:05'),
(8,'VIII','2022-03-01 06:51:17','2022-03-01 06:51:17'),
(9,'IX','2022-03-01 06:51:28','2022-03-01 06:51:28'),
(10,'X','2022-03-01 06:51:36','2022-03-01 06:51:36');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `golongans` */

DROP TABLE IF EXISTS `golongans`;

CREATE TABLE `golongans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `golongans` */

insert  into `golongans`(`id`,`name_golongan`,`created_at`,`updated_at`) values 
(1,'I/a','2022-03-01 06:53:03','2022-03-01 06:53:03'),
(2,'I/b','2022-03-01 06:53:14','2022-03-01 06:53:14'),
(3,'I/c','2022-03-01 06:53:21','2022-03-01 06:53:21'),
(4,'I/d','2022-03-01 06:53:29','2022-03-01 06:53:29'),
(5,'I/e','2022-03-01 07:07:41','2022-03-01 07:07:41'),
(6,'II/a','2022-03-01 06:53:45','2022-03-01 06:53:45'),
(7,'II/b','2022-03-01 06:53:53','2022-03-01 06:53:53'),
(8,'II/c','2022-03-01 06:54:02','2022-03-01 06:54:02'),
(9,'II/d','2022-03-01 06:54:10','2022-03-01 06:54:10'),
(10,'II/e','2022-03-01 07:07:50','2022-03-01 07:07:50'),
(11,'III/a','2022-03-01 06:54:23','2022-03-01 06:54:23'),
(12,'III/b','2022-03-01 06:56:35','2022-03-01 06:56:35'),
(13,'III/c','2022-03-01 06:56:56','2022-03-01 06:56:56'),
(14,'III/d','2022-03-01 06:57:03','2022-03-01 06:57:03'),
(15,'III/e','2022-03-01 07:07:57','2022-03-01 07:07:57'),
(16,'IV/a','2022-03-01 06:57:23','2022-03-01 06:57:23'),
(17,'IV/b','2022-03-01 06:57:40','2022-03-01 06:57:40'),
(18,'IV/c','2022-03-01 06:57:46','2022-03-01 06:57:46'),
(19,'IV/d','2022-03-01 06:58:05','2022-03-01 06:58:05'),
(20,'IV/e','2022-03-01 07:08:06','2022-03-01 07:08:06');

/*Table structure for table `jabatans` */

DROP TABLE IF EXISTS `jabatans`;

CREATE TABLE `jabatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jabatans` */

insert  into `jabatans`(`id`,`name_jabatan`,`created_at`,`updated_at`) values 
(1,'Kepala Sekretariat Utama','2022-03-01 06:59:50','2022-03-01 06:59:50'),
(2,'Penyusun Laporan Keuangan','2022-03-01 07:00:18','2022-03-01 07:00:18'),
(3,'Surveyor Pemetaan Pertama','2022-03-01 07:00:50','2022-03-01 07:00:50'),
(4,'Analisa Data Survei Dan Pemetaan','2022-03-01 07:01:21','2022-03-01 07:01:21'),
(5,'Perancang per-UU-an Utama IV/e','2022-03-01 07:02:13','2022-03-01 07:02:13'),
(6,'Kepala Biro Perencanaan, Kepegawaian Dan Hukum','2022-03-01 07:02:50','2022-03-01 07:02:50'),
(7,'Widyaiswara Utama IV/e','2022-03-01 07:03:27','2022-03-01 07:03:27'),
(8,'Analisa Kepegawaian Madya IV/b','2022-03-01 07:03:50','2022-03-01 07:03:50'),
(9,'Kepala Sub Bidang Kerjasama Dan Pelayanan Riset, DKP','2022-03-01 07:04:32','2022-03-01 07:04:32'),
(10,'Analis Hukum','2022-03-01 07:05:08','2022-03-01 07:05:08'),
(11,'Peneliti Pertama III/b','2022-03-01 07:05:28','2022-03-01 07:05:28'),
(12,'Surveyor Pemetaan Muda','2022-03-01 07:05:50','2022-03-01 07:05:50'),
(13,'Analis Jabatan','2022-03-01 07:06:14','2022-03-01 07:06:14'),
(14,'Kepala Subbag Kepegawaian','2022-03-01 07:06:39','2022-03-01 07:06:39');

/*Table structure for table `jenis_kelamins` */

DROP TABLE IF EXISTS `jenis_kelamins`;

CREATE TABLE `jenis_kelamins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `jenis_kelamins_name_jenis_kelamin_unique` (`name_jenis_kelamin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jenis_kelamins` */

insert  into `jenis_kelamins`(`id`,`name_jenis_kelamin`,`created_at`,`updated_at`) values 
(1,'Pria','2022-03-01 06:46:33','2022-03-01 06:46:33'),
(2,'Wanita','2022-03-01 06:46:44','2022-03-01 06:46:44');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2022_02_28_001038_create_pegawais_table',1),
(6,'2022_03_01_044558_create_agamas_table',1),
(7,'2022_03_01_044731_create_jenis_kelamins_table',1),
(8,'2022_03_01_062959_create_jabatans_table',1),
(9,'2022_03_01_063150_create_golongans_table',1),
(10,'2022_03_01_064021_create_eselons_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pegawais` */

DROP TABLE IF EXISTS `pegawais`;

CREATE TABLE `pegawais` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_kelamin_id` bigint(20) unsigned NOT NULL,
  `agama_id` bigint(20) unsigned NOT NULL,
  `golongan_id` bigint(20) unsigned NOT NULL,
  `jabatan_id` bigint(20) unsigned NOT NULL,
  `eselon_id` bigint(20) unsigned NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_tugas` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_kerja` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pegawais_nip_unique` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pegawais` */

insert  into `pegawais`(`id`,`jenis_kelamin_id`,`agama_id`,`golongan_id`,`jabatan_id`,`eselon_id`,`nip`,`nama`,`tempat_lahir`,`alamat`,`tanggal_lahir`,`tempat_tugas`,`unit_kerja`,`no_hp`,`npwp`,`created_at`,`updated_at`) values 
(2,2,5,20,13,10,'001','Rosadi','Tangerang','Tangerang','15 Maret 1995','Jakarata-Indonesia','Programmer','085717667604','53464577','2022-03-01 08:30:41','2022-03-01 08:47:18');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`username`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Test2022','test2022','test2022@gmail.com',NULL,'$2y$10$359peFqvE5ARG3j.kOg3zOcSCMYvmjasIgCB5BE2ZEMRxtrvCe.au',NULL,'2022-03-01 06:45:18','2022-03-01 06:45:18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
