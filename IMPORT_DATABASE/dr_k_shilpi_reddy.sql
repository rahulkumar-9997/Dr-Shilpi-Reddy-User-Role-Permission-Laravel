-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 12:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr_k_shilpi_reddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `blog_description`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'MRS MOM Event 2023​', 'mrs-mom-event-2023', '<p>Pregnancy is a transformative stage in a woman’s life, and the Mrs. Mom event marks and celebrates this exceptional moment. The event ‘’Mrs. Mom 2023’’ took place at the four vivacious cities, namely Hyderabad, Bangalore, Chennai, and Vizag. The program moved away from the traditional and brought a novel mix of educational, entertaining and engaging</p><p>For 2023 Mrs. Mom 2023 was an event, but moreover, an experience, which embraced the complete body and soul of pregnancy as well as of a child’s upbringing. The event targeted from expert sessions on prenatal health towards interactive workshops on postnatal care towards equipping parents with the knowledge and support necessary for their forthcoming journey into parenthood. The idea of designer babies provided one of the main highlights during Mrs. Mom 2023. Famous specialists of genetics and reproductive science throw a light on the current technologies that grant parents to select intelligently their way of parenting and shape a good future with their little ones.<br>Mrs. Mom 2023 acknowledged that fathers are also part of those pregnancy happenings. It was an enjoyable occasion with exciting games where men were actively involved during pregnancy. A birth day fair covered by birthing and baby care workshops was conducted to develop relationships among couples and equip them for togetherness and parenting in future.</p><p>Healthy and Happy Pregnancy: A Guiding Light:<br>It is crucial that an expectant woman ensures physical and mental hygiene throughout her pregnancy period. The organization held yoga and meditation meetings, lectured about proper nutrition and prepared special fitness programs for expectant mothers called Mrs. Mom 2023. The holistic health approach was a key element in the event, creating an encouraging atmosphere for pregnancy.<br>It is worth noting that the event of Mrs. Mom 2023 took the pregnancy event industry to a new level. The event integrated education, entertainment, and inclusivity thereby over-exceeding expectations and arming couples with necessary items for a happy and healthy pregnancy. With the prospect of the future, Mrs. Mom is a yardstick in events celebrating the beauty of pregnancy and preparing couples for the incredible experience of parenthood. This is to the trip of a lifetime – the trip of parenting!</p>', 1, '2024-06-16 22:02:57', '2024-06-16 22:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_images`
--

CREATE TABLE `blogs_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs_images`
--

INSERT INTO `blogs_images` (`id`, `blog_image`, `blog_id`, `created_at`, `updated_at`) VALUES
(5, 'e10146bf-fe35-4d4a-9ed2-8a60b0d2de06_1718595177.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(6, '44992b46-e8eb-4fed-bcf0-7f8a066107cb_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(7, 'e1e51663-dbb9-4582-a619-89e91a02bf6a_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(8, 'b6622386-b822-408a-a979-0d6705cbebf9_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(9, '81203d69-3ffb-46c8-857b-9971fa527afd_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(10, 'c0c1f5ce-6f52-4257-8633-475e73f5fbad_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(11, 'ea889739-0cd1-4ee8-8b19-de2b7f04db70_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(12, '59b81caf-2e60-4c31-b852-2eb46e5c53f9_1718595178.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(13, 'a0b87702-c1d9-49d8-8b56-9ce540f9a310_1718595179.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(14, 'cc33b82f-e01b-4561-a180-d1a16dcfa124_1718595179.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(15, 'a528cbc3-bc49-47eb-8a5e-919cd2a048fd_1718595179.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(16, '725da829-565d-4283-91c9-a347c24134b7_1718595179.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(17, '8a6bb884-cde5-48f0-8abc-523d036c8f42_1718595179.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(18, '3d37c19f-1b20-431a-9843-8e0f9f3762cb_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(19, '55f3f164-aca3-4e39-88ad-1fde6827dae9_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(20, 'bff8140e-ffd3-4c3e-a21b-3398b5a2f80f_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(21, 'd75d83c8-1afd-405c-8e59-5d6b75a4510c_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(22, '1008ad1c-121a-40c9-ac19-b0aec9f1f1f9_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(23, '7b62ff15-584c-419f-ad6d-184679ac779e_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_in_logos`
--

CREATE TABLE `featured_in_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_in_logos`
--

INSERT INTO `featured_in_logos` (`id`, `img_title`, `img_file`, `user_id`, `created_at`, `updated_at`) VALUES
(10, NULL, 'Frame-53-1_1718360567.webp', 1, '2024-06-14 04:52:47', '2024-06-14 04:52:47'),
(11, NULL, 'Frame-52-2_1718360567.webp', 1, '2024-06-14 04:52:47', '2024-06-14 04:52:47'),
(12, NULL, 'Frame-48 (1)_1718360567.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(13, NULL, 'Frame-43-2 (1)_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(14, NULL, 'Frame-50_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(15, NULL, 'Frame-52_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(16, NULL, 'Frame-58-1_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(17, NULL, 'Frame-58_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(18, NULL, 'Frame-58-2_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(19, NULL, 'image-8_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(20, NULL, 'andhra-prabha_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(21, NULL, 'Frame-52-1_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(22, NULL, 'Frame-56_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(23, NULL, 'Frame-57_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(24, NULL, 'Frame-47_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(25, NULL, 'Frame-43-2_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(26, NULL, 'Frame-48_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(27, NULL, 'Frame-45-1_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(28, NULL, 'Frame-49_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(29, NULL, 'Frame-53_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `ibu_care`
--

CREATE TABLE `ibu_care` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibu_care`
--

INSERT INTO `ibu_care` (`id`, `title`, `slug`, `img_file`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Cosmetic Gynecology', 'cosmetic-gynecology', 'Cosmetic-Gynecology_1718775919.webp', '<h2>\r\n<a href=\"#\">In-Depth Consultation:</a>\r\n </h2>\r\n<p>We offer comprehensive consultations to discuss the various cosmetic gynecology options, addressing concerns and goals.</p>\r\n<h2>\r\n<a href=\"#\">Precision Techniques:</a>\r\n </h2>\r\n<p>Our skilled medical team specializes in cosmetic gynecology procedures, utilizing advanced techniques for optimal results.</p>\r\n<h2>\r\n<a href=\"#\">Aesthetic Harmony:</a>\r\n </h2>\r\n<p>Dr. Reddy’s expertise in aesthetic gynaecology ensures that aesthetic considerations are integrated into the procedures, promoting physical and emotional well-being.</p>\r\n<h2>\r\n<a href=\"#\">Personalized Solutions:</a>\r\n </h2>\r\n<p>We create tailored treatment plans that cater to each woman’s individual anatomy and aesthetic preferences.</p>\r\n<h2>\r\n<a href=\"#\">Emotional Support:</a>\r\n </h2>\r\n<p>We provide a supportive environment for women to express their feelings, concerns, and aspirations related to the procedures.</p>\r\n\r\n<h2>\r\n<a href=\"#\">Postoperative Care:</a>\r\n </h2>\r\n<p>Our care extends beyond the procedures. We offer postoperative support to ensure a smooth recovery, minimal discomfort, and optimal results.</p>', 1, '2024-06-19 00:15:20', '2024-06-19 00:15:20'),
(4, 'Adolescent Care', 'adolescent-care', 'Adolescent-Care_1718776014.webp', '<h2>Compassionate Counseling:</h2>\r\n   \r\n   <p>Adolescence can be a time of emotional turbulence. Our expert counselors provide a safe and confidential space for adolescents to discuss their feelings, concerns, and aspirations.</p>\r\n\r\n      <h2>Physical Well-being:</h2>\r\n   <p>We offer health check-ups, vaccinations, and screenings tailored to the needs of adolescents. Nutritional guidance and lifestyle advice are also provided to ensure optimal physical health.</p>\r\n\r\n      <h2>Aesthetic Gynaecology:</h2>\r\n   \r\n   <p>Dr. Reddy’s expertise in aesthetic gynaecology ensures that young individuals can receive specialized care for concerns related to body image, cosmetic procedures, and overall reproductive health.</p>\r\n\r\n      <h2>Sexual Health Education:</h2>\r\n  \r\n   <p>We provide accurate and age-appropriate information about sexual health, contraception, and STI prevention, empowering adolescents to make informed decisions.\r\n</p>\r\n\r\n      <h2>Mental Health Support:</h2>\r\n  \r\n   <p>Our clinic is committed to addressing mental health challenges that adolescents may face, including anxiety, depression, and stress. We offer therapeutic interventions to promote emotional well-being.</p>\r\n\r\n      <h2>Education and Guidance:</h2>\r\n   \r\n   <p>Dr. Reddy and her team offer guidance on educational choices, career paths, and reproductive health education, enabling adolescents to plan for a successful future.\r\n</p>\r\n\r\n      <h2>Preventive Care:</h2>\r\n   \r\n   <p>Regular check-ups, dental care, and vision assessments are part of our preventive care approach, promoting overall health and well-being.</p>\r\n\r\n      <h2>Technology and Cyberbullying Awareness:</h2>\r\n   \r\n   <p>We provide guidance on responsible technology use and coping strategies to deal with cyberbullying, fostering a safe online environment for adolescents.</p>', 1, '2024-06-19 00:16:54', '2024-06-19 00:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `media_image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'IMG-20210105-WA0012-768x432-2_1718523991.webp', 1, '2024-06-16 02:16:31', '2024-06-16 02:16:31'),
(2, NULL, 'WhatsApp-Image-2022-09-05-at-7.39.41-PM-1_1718523991.webp', 1, '2024-06-16 02:16:31', '2024-06-16 02:16:31'),
(3, NULL, '18850ab3-6c34-4d7a-966f-5ad233c4c1ee-1_1718523991.webp', 1, '2024-06-16 02:16:32', '2024-06-16 02:16:32'),
(4, NULL, 'IMG_8605-min-970x647-1_1718523992.webp', 1, '2024-06-16 02:16:32', '2024-06-16 02:16:32'),
(5, NULL, 'FB_IMG_1532337106815-min_1718523992.webp', 1, '2024-06-16 02:16:32', '2024-06-16 02:16:32'),
(6, NULL, 'image-53-6_1718523992.webp', 1, '2024-06-16 02:16:33', '2024-06-16 02:16:33'),
(7, NULL, '566f952c-1921-4e05-89be-f6e2187a22b0_1718523993.webp', 1, '2024-06-16 02:16:33', '2024-06-16 02:16:33'),
(8, NULL, 'image-53-8_1718523993.webp', 1, '2024-06-16 02:16:33', '2024-06-16 02:16:33'),
(9, NULL, 'IMG_7831-768x512-1 (1)_1718523993.webp', 1, '2024-06-16 02:16:33', '2024-06-16 02:16:33'),
(10, NULL, 'IMG_20180901_103955-min-1-970x728-1 (1)_1718523993.webp', 1, '2024-06-16 02:16:34', '2024-06-16 02:16:34'),
(11, NULL, 'IMG_7831-768x512-1_1718523994.webp', 1, '2024-06-16 02:16:34', '2024-06-16 02:16:34'),
(12, NULL, 'IMG_20180901_103955-min-1-970x728-1_1718523994.webp', 1, '2024-06-16 02:16:34', '2024-06-16 02:16:34'),
(13, NULL, '1a7c32bc-823c-4e8c-9fbc-12fba33f8f30_1718523994.webp', 1, '2024-06-16 02:16:34', '2024-06-16 02:16:34'),
(14, NULL, 'image-53-1_1718523994.webp', 1, '2024-06-16 02:16:35', '2024-06-16 02:16:35'),
(15, NULL, 'a82d4c99-af16-468f-99db-1e124889ebd6_1718523995.webp', 1, '2024-06-16 02:16:35', '2024-06-16 02:16:35'),
(16, NULL, 'IMG_0577-768x512-1_1718523995.webp', 1, '2024-06-16 02:16:35', '2024-06-16 02:16:35'),
(17, NULL, 'IMG_0581-768x512-1_1718523995.webp', 1, '2024-06-16 02:16:35', '2024-06-16 02:16:35'),
(19, 'Image Title 1', 'd13c550f-7ac6-4663-8228-cd79e590c3be_1718523995.webp', 1, '2024-06-16 02:16:36', '2024-06-16 03:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_03_060632_create_featured_in_logos_table', 1),
(6, '2024_06_04_095209_create_testimonials_table', 2),
(7, '2024_06_05_063729_create_our_works_table', 3),
(8, '2024_06_05_064154_create_our_works_image_table', 4),
(9, '2024_06_16_065513_create_media_table', 5),
(10, '2024_06_16_101709_create_blogs_table', 6),
(11, '2024_06_16_102203_create_blogs_images_table', 7),
(12, '2024_06_17_104152_create_ibu_care_table', 8),
(13, '2024_07_01_103237_create_permission_tables', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `our_works`
--

CREATE TABLE `our_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_work_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_works`
--

INSERT INTO `our_works` (`id`, `heading_name`, `slug`, `our_work_content`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Women\'s wings (RERF) Brahma Kumaris', 'womens-wings-rerf-brahma-kumaris', '<p>\r\nExperience a month brimming with inspiration and transformation! From July 30th to September 16th, 2023, witness a captivating journey dedicated to fostering harmonious families, empowering children, and uplifting women. Our focus encompasses promoting familial peace, happiness, and safety, while providing practical solutions to children’s behavioral challenges. We’re dedicated to advancing women’s education, health, and security, all while raising awareness about spirituality and the profound effects of meditation. Engage with captivating talks, immersive exhibitions, cultural presentations, audio-visual displays, and heartwarming competitions. This event, hosted by the Women’s Wing (RERF) Brahma Kumaris, Telangana, culminates in a grand Valedictory and Expo on September 16th, 2023, at Shanti Sarovar, Gachibowli, Hyderabad.\r\n\r\n</p><p>\r\n\r\nWomen and the family system form the foundation of our society. Their profound impact in shaping our society and shaping our future is immeasurable, driven by their nurturing love, inspiring guidance and boundless energy. Serving as the bedrock of our community, women skillfully manage and care for their families and instill valuable qualities and behaviors in their children. Families bring comfort, stability and mutual support. Women are crucial in building resilient and cohesive family units. Let us find inner peace, desirable values ​​and spiritual growth, and let us value and recognize family. Sincere thanks for organizing this program all over Telangana to spread this spiritual message.\r\n\r\n</p>', 1, '2024-06-15 00:49:50', '2024-06-15 04:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `our_works_image`
--

CREATE TABLE `our_works_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `our_work_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_work_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_works_image`
--

INSERT INTO `our_works_image` (`id`, `our_work_image`, `our_work_id`, `created_at`, `updated_at`) VALUES
(2, '9f014be2-0cd8-48fd-aa21-8e6bccceaab8_1718432390.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(3, 'f9a78696-417a-489d-98b9-23c4e25284eb_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(4, 'bff8140e-ffd3-4c3e-a21b-3398b5a2f80f_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(5, '1008ad1c-121a-40c9-ac19-b0aec9f1f1f9_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(6, '7b62ff15-584c-419f-ad6d-184679ac779e_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(7, '715c54c9-1d27-44f9-8778-aa0824a7bf3a_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(8, 'c0c1f5ce-6f52-4257-8633-475e73f5fbad_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(9, 'e1e51663-dbb9-4582-a619-89e91a02bf6a_1718432391.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(11, '7bc80d32-7de6-4870-9648-151731b8d840_1718432392.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(12, '81203d69-3ffb-46c8-857b-9971fa527afd_1718432392.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(13, 'b6622386-b822-408a-a979-0d6705cbebf9_1718432392.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(14, '0448a9d4-ca7e-4d16-9155-532a4d22e24d-1_1718432392.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(15, '23345484-b69f-46dd-9d92-a47a1a489504_1718432392.webp', 7, '2024-06-15 00:49:53', '2024-06-15 00:49:53'),
(16, 'a0b87702-c1d9-49d8-8b56-9ce540f9a310_1718432393.webp', 7, '2024-06-15 00:49:53', '2024-06-15 00:49:53'),
(17, 'ea889739-0cd1-4ee8-8b19-de2b7f04db70_1718432393.webp', 7, '2024-06-15 00:49:53', '2024-06-15 00:49:53'),
(19, '57e60c72-88d4-4622-9bb9-f88bfa3ef8ad_1718432393.webp', 7, '2024-06-15 00:49:53', '2024-06-15 00:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(14, 'dashboard', 'web', '2024-07-13 04:03:37', '2024-07-13 04:03:37'),
(15, 'login', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(16, 'forget.password', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(17, 'forget.password.post', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(18, 'reset.password.get', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(19, 'reset.password.post', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(20, 'logout', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(21, 'users', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(22, 'users.create', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(23, 'users.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(24, 'users.show', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(25, 'users.edit', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(26, 'users.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(27, 'roles.index', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(28, 'roles.create', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(29, 'roles.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(30, 'roles.show', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(31, 'roles.edit', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(32, 'roles.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(33, 'roles.destroy', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(34, 'permissions.index', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(35, 'permissions.create', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(36, 'permissions.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(37, 'permissions.show', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(38, 'permissions.edit', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(39, 'permissions.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(40, 'permissions.destroy', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(41, 'manage-profile', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(42, 'manage-profile.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(43, 'manage-feature-logo', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(44, 'manage-feature-logo.add', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(45, 'manage-feature-logo.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(46, 'manage-feature-logo.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(47, 'manage-testimonials', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(48, 'manage-testimonials.add', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(49, 'manage-testimonials.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(50, 'manage-testimonials.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(51, 'manage-our-work', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(52, 'manage-our-work.add', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(53, 'manage-our-work.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(54, 'manage-our-work.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(55, 'manage-media', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(56, 'manage-media.add', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(57, 'manage-media.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(58, 'manage-media.update', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(59, 'manage-blog', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(60, 'manage-blog.add', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(61, 'manage-blog.store', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(62, 'manage-blog.update', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(63, 'manage-ibucare', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(64, 'manage-ibucare.add', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(65, 'manage-ibucare.store', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(66, 'manage-ibucare.update', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(67, 'home', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(68, 'about-us', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(69, 'work', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(70, 'media', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(71, 'blog', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(72, 'contact-us', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(73, 'our-foundation', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(74, 'ibu-care', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(75, 'home-enquiry.store', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'web', '2024-07-07 03:21:28', '2024-07-07 03:21:28'),
(3, 'Webadmin', 'web', '2024-07-07 08:46:51', '2024-07-07 08:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(14, 2),
(14, 3),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 2),
(74, 2),
(75, 2);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonials_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `profile_image`, `testimonials_content`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Pragathi', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361302.webp', 'Thank you for being the dedicated, thoughtful, and compassionate doctor that you are! You always go above and beyond and work tirelessly towards a healthy outcome.You put me at ease and helped me gain confidence. I feel grateful to know you and have you as my doctor.', 1, '2024-06-14 05:05:03', '2024-06-14 05:05:03'),
(4, 'Naveena', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361371.webp', 'Hi all , my name is Naveena and I am 25 weeks pregnant. Congratulations to all of Us and special thanks to Shilpi Mam for giving everyone a  correct path for normal delivery . Seen for the first time taking extra care by conducting Exercise,Yoga,Zumba for Us . Once again Thank you so much Dr. Shilpi Mam . 💗', 1, '2024-06-14 05:06:11', '2024-06-14 05:06:11'),
(5, 'Divya Reddy', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361419.webp', 'I had the best experience under Dr Shilpi and her team\'s care and guidance. Dr. Shilpi and her team continuously work towards making the pregnancy journey natural for all the women and encourage the partner to be as much part of the journey. It\'s a fun journey when you are under this teams guidance.', 1, '2024-06-14 05:06:59', '2024-06-14 05:06:59'),
(6, 'Sravanthi', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361473.webp', 'Hello all, iam 25 weeks pregnant now. I waana share my experience and gratitude towards Shilpi mam. My previous doctor from a hospital near my house had suggested for stitches due to short cervix and she threatened me about miscarriage, then my friend suggested to Shilpi mam and mam said stitches is not required. Initially my family didn\'t support my decision to choose a dctr which is almost 40kms from my place. I have somehow convinced my mom just for one consultation. But after meeting Shilpi mam, my mom also got soo much confidance and she loved the way shilpi mam spoke. My blood levels also got improved because of mam. These days the only doctor whome we can trust blindly for Normal delivary is our Dr. SHILPI Mam.', 1, '2024-06-14 05:07:53', '2024-06-14 05:07:53'),
(7, 'Mounika', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361529.webp', 'Hi, my name is mounika. I\'m 27 weeks of pregnant. One of my cousins referred Dr. Shilpi reddy mam. We have been having wonderful experience with the mam since our first day. She has been giving excellent treatment in the right time. And clarifying all my doubts in this journey as this is my first pregnancy.  Thank you so much Dr. Shilpi Mam for everything you are doing for all of us. I\'m feeling very grateful in having you as my doctor.\r\n.', 1, '2024-06-14 05:08:49', '2024-06-14 05:08:49'),
(8, 'Uma', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361595.webp', 'Hello every one,am Uma 27 weeks of pregnant, First i met dr.shilpi mam in 6th week of pregnancy with covid she advises nd explain me everything about covid during pregnancy because of her advises am out of danger from covid without medicine. I thought Kim\'s is very expensive but now I realised everything is worth. Starting of my pregnancy i don\'t have any thoughts of normal delivery after motivation of shilpi mam now I came to fix for normal delivery.The presence of wonderful doctor like you is priceless Mam.Thank you soo much shilpi mam ❤️', 1, '2024-06-14 05:09:55', '2024-06-14 05:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(20) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_img`, `phone_number`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. K. Shilpi Reddy', 'rahulkumarmaurya464@gmail.com', 'profile-hospital_1718689619.jpg', '9878767845', NULL, '$2y$10$TofMzfGZF7WLKtP4iks2GegBoLkM76Lcg/J6yXMXBbaHa.HN9ebtS', 1, NULL, NULL, '2024-06-23 05:51:29'),
(2, 'Satish', 'satish@gmail.com', NULL, '8756458765', NULL, '$2y$10$DAB9Sa4JxmyOXb0DbmYYeOcP90GPKhCSXxhaLUr4lzSso/Y.1.s7y', 0, NULL, '2024-07-07 02:59:09', '2024-07-07 02:59:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `blogs_images`
--
ALTER TABLE `blogs_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_images_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featured_in_logos`
--
ALTER TABLE `featured_in_logos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `featured_in_logos_user_id_foreign` (`user_id`);

--
-- Indexes for table `ibu_care`
--
ALTER TABLE `ibu_care`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ibu_care_user_id_foreign` (`user_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `our_works`
--
ALTER TABLE `our_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `our_works_user_id_foreign` (`user_id`);

--
-- Indexes for table `our_works_image`
--
ALTER TABLE `our_works_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `our_works_image_our_work_id_foreign` (`our_work_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs_images`
--
ALTER TABLE `blogs_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_in_logos`
--
ALTER TABLE `featured_in_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ibu_care`
--
ALTER TABLE `ibu_care`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `our_works`
--
ALTER TABLE `our_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `our_works_image`
--
ALTER TABLE `our_works_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blogs_images`
--
ALTER TABLE `blogs_images`
  ADD CONSTRAINT `blogs_images_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`);

--
-- Constraints for table `featured_in_logos`
--
ALTER TABLE `featured_in_logos`
  ADD CONSTRAINT `featured_in_logos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ibu_care`
--
ALTER TABLE `ibu_care`
  ADD CONSTRAINT `ibu_care_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `our_works`
--
ALTER TABLE `our_works`
  ADD CONSTRAINT `our_works_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `our_works_image`
--
ALTER TABLE `our_works_image`
  ADD CONSTRAINT `our_works_image_our_work_id_foreign` FOREIGN KEY (`our_work_id`) REFERENCES `our_works` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
