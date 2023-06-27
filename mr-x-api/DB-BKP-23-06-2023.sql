# ************************************************************
# Antares - SQL Client
# Version 0.7.11
# 
# https://antares-sql.app/
# https://github.com/antares-sql/antares
# 
# Host: 127.0.0.1 ((Ubuntu) 8.0.33)
# Database: mr_x
# Generation time: 2023-06-23T17:05:28+06:00
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table abouts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `abouts`;

CREATE TABLE `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;

INSERT INTO `abouts` (`id`, `title`, `details`) VALUES
	(1, "My name is Start Bootstrap and I help brands grow.", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?");

/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fullName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id`, `fullName`, `email`, `phone`, `message`) VALUES
	(1, "Al-Amin Sarker", "alamin.php100@gmail.com", "alamin.php100@gmail.com", "Hi, This is good project with mr. sabbir"),
	(2, "Al-Amin Sarker", "alamin.php100@gmail.com", "alamin.php100@gmail.com", "Hi, This is good project with mr. sabbir"),
	(3, "Al-Amin Sarker", "alamin.php100gmail.com", "alamin.php100gmail.com", "Hi, This is good project with mr. sabbir"),
	(4, "Al-Amin Sarker", "alamin.php100#gmail.com", "alamin.php100#gmail.com", "Hi, This is good project with mr. sabbir"),
	(5, "Al-Amin Sarker", "alamin.php100@gmail.com", "alamin.php100@gmail.com", "Hi, This is good project with mr. sabbir");

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table educations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `educations`;

CREATE TABLE `educations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `duration` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institutionName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `educations` WRITE;
/*!40000 ALTER TABLE `educations` DISABLE KEYS */;

INSERT INTO `educations` (`id`, `duration`, `institutionName`, `address`, `field`, `details`) VALUES
	(1, "2015 - 2017", "Barnett College", "Fairfield, NY", " Master\'s Web Development", " Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga."),
	(2, "2011 - 2015", "ULA", "Los Angeles, CA", " Undergraduate Computer Science", " Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.");

/*!40000 ALTER TABLE `educations` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table experiences
# ------------------------------------------------------------

DROP TABLE IF EXISTS `experiences`;

CREATE TABLE `experiences` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `duration` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `experiences` WRITE;
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;

INSERT INTO `experiences` (`id`, `duration`, `title`, `designation`, `details`) VALUES
	(1, "2019 - Present", "Web Developer", "Stark Industries Los Angeles, CA", " Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga."),
	(2, "2017 - 2019", "SEM Specialist", "Wayne Enterprises Gotham City, NY", " Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.");

/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

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





# Dump of table heroprperties
# ------------------------------------------------------------

DROP TABLE IF EXISTS `heroprperties`;

CREATE TABLE `heroprperties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `keyLine` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `heroprperties` WRITE;
/*!40000 ALTER TABLE `heroprperties` DISABLE KEYS */;

INSERT INTO `heroprperties` (`id`, `keyLine`, `title`, `short_title`, `img`) VALUES
	(1, " Design · Development · Marketing", "I can help your business to", "Get online and grow fast", "https://github.com/rupomsoft/Laravel-Batch/blob/main/beginner-website-project-HTML-Template/assets/profile.png?raw=true");

/*!40000 ALTER TABLE `heroprperties` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table languages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;

INSERT INTO `languages` (`id`, `name`) VALUES
	(1, " HTML"),
	(2, "CSS"),
	(3, " JavaScript"),
	(4, "Python"),
	(5, "Ruby"),
	(6, " Node.js");

/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, "2014_10_12_000000_create_users_table", 1),
	(17, "2014_10_12_100000_create_password_reset_tokens_table", 1),
	(18, "2019_08_19_000000_create_failed_jobs_table", 1),
	(19, "2019_12_14_000001_create_personal_access_tokens_table", 1),
	(20, "2023_06_22_032255_create_heroprperties_table", 1),
	(21, "2023_06_22_032256_create_abouts_table", 1),
	(22, "2023_06_22_032257_create_contacts_table", 1),
	(23, "2023_06_22_032257_create_educations_table", 1),
	(24, "2023_06_22_032257_create_projects_table", 1),
	(25, "2023_06_22_032258_create_seoproperties_table", 1),
	(26, "2023_06_22_032258_create_socials_table", 1),
	(27, "2023_06_22_032259_create_experiences_table", 1),
	(28, "2023_06_22_032259_create_skills_table", 1),
	(29, "2023_06_22_032300_create_languages_table", 1),
	(30, "2023_06_22_032300_create_resumes_table", 1),
	(32, "2023_06_23_094612_add_address_to_educations", 2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table password_reset_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previewLink` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnailLink` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `title`, `previewLink`, `thumbnailLink`, `details`) VALUES
	(1, "Project Name 1", "https://google.com", "https://google.com", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!"),
	(2, "Project Name 2", "https://google.com", "https://google.com", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!");

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table resumes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resumes`;

CREATE TABLE `resumes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `downloadLink` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `resumes` WRITE;
/*!40000 ALTER TABLE `resumes` DISABLE KEYS */;

INSERT INTO `resumes` (`id`, `downloadLink`) VALUES
	(1, "https://github/alamin-php/resume");

/*!40000 ALTER TABLE `resumes` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table seoproperties
# ------------------------------------------------------------

DROP TABLE IF EXISTS `seoproperties`;

CREATE TABLE `seoproperties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pageName` enum('home','resume','projects','contact') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ogSiteName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ogUrl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ogTitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ogDescription` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ogImage` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





# Dump of table skills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;

INSERT INTO `skills` (`id`, `name`) VALUES
	(1, " SEO/SEM Marketing"),
	(2, " Statistical Analysis"),
	(3, " Web Development"),
	(4, " Network Security"),
	(5, " Adobe Software Suite"),
	(6, " User Interface Design");

/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table socials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `socials`;

CREATE TABLE `socials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `twitterLink` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `githubLink` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedinLink` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `socials` WRITE;
/*!40000 ALTER TABLE `socials` DISABLE KEYS */;

INSERT INTO `socials` (`id`, `twitterLink`, `githubLink`, `linkedinLink`) VALUES
	(1, "https://facebook.com", "https://github.com", "https://linkedin.com");

/*!40000 ALTER TABLE `socials` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





# Dump of views
# ------------------------------------------------------------

# Creating temporary tables to overcome VIEW dependency errors


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# Dump completed on 2023-06-23T17:05:29+06:00
