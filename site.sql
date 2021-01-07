-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 10:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `slug`, `author`, `created_at`, `updated_at`) VALUES
(4, 'پسته اکبری', 'پسته اکبری و توجیه اقتصادی کاشت پسته اکبری:\r\nپسته رقم اکبری به نام عبداللهی نیز در منطقه رفسنجان شناخته می شود\r\n\r\nدر روستای کشکوئیه رفسنجان شناسایی و انتخاب شده و از ارقام تجاری و شناخته شده در سراسر کشور است.\r\n\r\nرقم  اکبری به همراه ارقام اوحدی و کله قوچی بیشترین سطح زیر کشت را در کشور و همچنین استان کرمان دارد.\r\n\r\nاین رقم از ارقام غیربومی خراسان است و سابقه کشت آن در این استان بیشتر از بیست سال نیست.\r\n\r\nبه دلیل اینکه عملیات پیوند زنی این رقم با مشکلاتی همراه است\r\n\r\nعلیرغم پتانسیل مناسب برای کاشت و تولید محصول سطح زیر کشت گسترش قابل توجهی نداشته است.\r\n\r\nبرای خرید آنلاین پسته اکبری ،پسته اکبری ،پسته اکبری رفسنجان،پسته رقم اکبریاینجا را کلیک کنید.\r\n\r\nریخت شناسی:\r\nپسته رقم اکبری در گروه ارقام کم تا متوسط رشد قرار می گیرد،غالبیت انتهایی در آن ضعیف است و\r\n\r\nبه طور متوسط روی هر شاخه انتهایی 2 ساله ، 3 شاخه جانبی وجود داردعادت رشد درخت در این\r\n\r\nرقم نیمه عمومی تا آویز است وارتفاع آن در 20 سال پس از پیوند به حدود 2.5 متر می رسدرنگ تنه\r\n\r\nسفید مایل به خاکستری است بیشتر درصد برگ ها پنج برگچه ای است اندازه برگچه انتهایی در آن\r\n\r\nبزرگتر از برگچه های جانبی و شکل آن تخم مرغی نوکدار است سطح برگ این رقم زیاد می باشد و\r\n\r\nبر این اساس در گروه ارقام با سطح برگ بالا قرار می گیردرنگ برگها سبز روشن است  به علت استحکام\r\n\r\nچوب و تراکم بالای شاخه ها در برابر وزش بادهای شدید مقاوم بوده و تنه و شاخه ها در برابر باد خمیده\r\n\r\nنمی شوند.', '1609879709WhatsApp Image 2021-01-05 at 9.11.50 PM.jpeg', 'پسته-اکبری', 'admin', '2021-01-05 17:18:29', '2021-01-05 17:18:29'),
(5, 'ارزش غذایی زعفران', 'ارزش غذایی زعفران وچگونگی نوع کاشت طلای سرخ ایران\r\nزعفران چاشنی و رنگ دهنده با ارزشی می باشد که بو و عطر بی نظیری دارد و برای درمان برخی از بیماری ها مفید است. این گیاه در جنوب غربی آسیا، جنوب اسپانیا و جنوب اروپا می روید اما کشورمان نیز در تولید زعفران بسیار سرآمد است. در این بخش از نمناک درباره گیاه زعفران، ارزش غذایی و خواص آن بیشتر بخوانید.\r\n\r\nزعفران، گیاهی چند ساله است که دارای پیازی با غلاف قهوه ای رنگ است. این گیاه ساقه و شش گلبرگ بنفش رنگ و 3 رشته کلاله قرمز رنگ می باشد. از کلاله نارنجی رنگ، گل این گیاه برای مصرف استفاده می شود. کلاله زعفران چربی، املاح معدنی و موسیلاژ فراوان دارد. این گیاه توسط غده زیر زمینی بنه ( کورم ) تکثیرمی شود.', '1609879776پرورش-زغفران.jpg', 'ارزش-غذایی-زعفران', 'admin', '2021-01-05 17:19:36', '2021-01-05 17:19:36'),
(6, 'کود سه بیست NPK 20-20-20+TE', 'کود سه بیست گرانول (پودری) NPK 20-20-20 (کود ۲۰۲۰) شامل مواد درشت مغذی (ماکرو) ازت، فسفات و پتاس به اضافه‌ی مواد معدنی زیرمغذی (میکرو) بور، آهن، منگنز و روی می‌شود که در انواع کشت‌های باغی، فضای باز و گلخانه و مراحل رشد و نمو با قابلیت محلول‌پاشی و ریشه‌ای قابل استفاده است. کود ۲۰ ۲۰ ۲۰ به صورت پودری بوده و قسمت مهمی از احتیاجات کودی را تامین می‌کند. این کود با عناوین مختلفی مانند کود بیست بیست یا کود ۲۰۲۰ نیز شناخته می‌شود.', '16098798681-4.jpg', 'کود-سه-بیست-NPK-20-20-20+TE', 'admin', '2021-01-05 17:21:08', '2021-01-05 17:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'کاربر', 'email@email.com', 'عنوان تست', 'تست پیام جدید', '2021-01-05 14:24:14', '2021-01-05 14:24:14');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_01_04_201126_create_orders_table', 2),
(8, '2021_01_05_050211_create_blogs_table', 3),
(9, '2021_01_05_172357_create_contacts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product`, `qty`, `phone`, `address`, `approved`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, '0910203040', 'تهران11', 1, '2021-01-04 17:41:15', '2021-01-05 07:47:32');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$mP9eUg3AYs334ilSqindmuTRDhDouWfyy9PuyFbZ/GIHPPOVsGi5u', 'admin', NULL, '2021-01-04 14:00:20', '2021-01-04 14:00:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
