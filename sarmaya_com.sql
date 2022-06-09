-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 01:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarmaya.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `notif_id` bigint(20) UNSIGNED NOT NULL,
  `notification_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entre_id` bigint(20) DEFAULT NULL,
  `investor_id` bigint(20) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`notif_id`, `notification_content`, `type`, `entre_id`, `investor_id`, `status`, `created_at`, `updated_at`) VALUES
(39, 'Business Account has Submited his Application Form', 'Business', 25, NULL, 'read', '2021-01-28 19:42:33', '2021-01-28 19:42:33'),
(40, 'Business Account has Submited his Application Form', 'Business', 25, NULL, 'read', '2021-01-28 19:42:33', '2021-01-28 19:42:33'),
(41, 'Business Account has Submited his Application Form', 'Business', 26, NULL, NULL, '2021-01-30 06:52:30', '2021-01-30 06:52:30'),
(42, 'Business Account has Submited his Application Form', 'Business', 26, NULL, NULL, '2021-01-30 06:52:31', '2021-01-30 06:52:31'),
(43, 'Business Account has Submited his Application Form', 'Business', 26, NULL, NULL, '2021-01-30 07:05:00', '2021-01-30 07:05:00'),
(44, 'Business Account has Submited his Application Form', 'Business', 25, NULL, NULL, '2021-01-30 10:17:38', '2021-01-30 10:17:38'),
(45, 'Business Account has Submited his Application Form', 'Business', 25, NULL, NULL, '2021-01-30 12:06:51', '2021-01-30 12:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` bigint(20) NOT NULL,
  `author` bigint(20) DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_feture_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_reg_date` date DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_catagory` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_close_date` date DEFAULT NULL,
  `partner_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_website_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_catagory` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `author`, `blog_title`, `blog_feture_img`, `blog_content`, `slug`, `tags`, `blog_reg_date`, `type`, `job_catagory`, `job_location`, `job_type`, `job_close_date`, `partner_name`, `partner_logo`, `partner_website_link`, `partner_catagory`, `created_at`, `updated_at`) VALUES
(3, 1, 'What does Sarmayah do?', 'public/blog/LYB7uH2ec4ffTVuybAVQ7mNLg1dQ8xWxtve8p1tR.png', '<p style=\"text-align: left;\"><span style=\"font-weight: 400;\">Sarmayah.com is the first investment matchmaking platform that helps investors and entrepreneurs to connect with each other systematically with just a click. There would be numerous investors and potentially growable businesses registered on the platform. The entrepreneurs will be seeking investment for the business establishment or expansion while the investors are exploring the platform to find potentially growable businesses to invest in. There would be separate registration processes for both investors and startups to join the platform. As a user, you have to register using a valid email address, with a follow-up email verification process. When you are done with the verification, you will be able to access the platform for completing your business profile.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-weight: 400;\">&nbsp;</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-weight: 400;\">Sarmayah.com is like a bridge to connect entrepreneurs with investors to help them with access to finance problem for thier business establishment and expansion. Sarmayah.com facilitates the entrepreneur and investors to find each other easily, share their resources, and build partnerships for mutual interests. By this, we want to discover and link the most promising Afghan investment opportunities with investors to arm them with the needed support for establishing and running sustainable businesses. By joining this platform, access to finance won&rsquo;t be the barriers for entrepreneurs as well as those who have stagnant financial resources won&rsquo;t be confused about how and where to invest. We aim to gather entrepreneurs and investors in a virtual platform, in which they could connect with each other, and reach a partnership to establish or expand a business for mutual profits.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-weight: 400;\">&nbsp;</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-weight: 400;\">Sarmayah.com, the only free of charge investment matchmaking platform in the country to help you with finding the most innovative businesses to invest in and promising investors who are willing to invest in your business.</span></p>\r\n<p style=\"text-align: center;\"><strong>Register now, it is free!!!</strong></p>\r\n<p style=\"text-align: center;\"><strong>Sarmayah.com is a platform that connects investors and entrepreneurs!</strong></p>', 'what-does-sarmayah-do', 'asdasasd,asd,asdasndas;d,sadnasasd', '2020-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 'Why should you invest?', 'public/blog/eDsJcNvBGmZf795BRTeGEv87mm1iPBwhyTwHuA3m.png', '<p><span style=\"font-weight: 400;\">Being an investor, dozens of businesses at different stages are approaching you pitching about&nbsp; their businesses trying to convince you in investing on their businesses&nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\">Sarmayah.com as the first free of charge investment matchmaking platform provides you with the facility to explore investment opportunities in most creative and innovative industries as well as the most viable ones. As the first step, you have to register using your email that enables you previewing all the available investment opportunities. Following a verification email, you will be able&nbsp; to complete your investment preferences including interested industries, selection criteria, and&nbsp; available investment portfolio. Using this information, Sarmayah.com will share with you the matched investment opportunities on a continuous basis.</span></p>\r\n<p><span style=\"font-weight: 400;\">By having an investor account on Sarmayah.com, you will have access to a variety of high caliber businesses in different stages of idea, startup, and growth.</span></p>\r\n<p><strong>Want to find commercially viable businesses? Register Now, It Is free!!!</strong></p>\r\n<p><strong>Find your favorite investment opportunities and invest today!</strong></p>', 'why-should-you-invest', 'Investor,Sarmayah,Guide', '2020-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 'How Can You Get an Investment?', 'public/blog/hhWKKjnskJFnTjKRehDoltedeovH9GWJkKHJisli.jpeg', '<p><span style=\"font-weight: 400;\">Sarmayah.com is a free of charge investment matchmaking platform established to connect entrepreneurs with investors. As the first step towards securing investment for your business, you have to register using your email account. Your account will be verified by Sarmayah.com and you will be directed to a page where you will complete your business profile inserting information about your business including business model, product/service model, market analysis, competitive advantages, financial analysis, and investment management. Using this information, Sarmayah.com will share your business information with interested investors on a continuous basis.</span></p>\r\n<p><span style=\"font-weight: 400;\">You can have your entrepreneur account on the platform based on your business age. The business are classified into three categories of Idea, Startup, and Growth Phases.The platform is designed in a way which will keep you informed if an investor is interested to invest on your business.</span></p>\r\n<p><span style=\"font-weight: 400;\">Sarmayah.com bridges entrepreneurs and investors for solving the access to finance problem. We facilitate entrepreneurs and investors to find each other easily, share their resources, and build a partnership for mutual interests.&nbsp;</span></p>\r\n<p style=\"text-align: center;\"><strong>Want to secure investment for your business? Register Now, It Is Free!!!</strong></p>\r\n<p style=\"text-align: center;\"><strong>A destination where we bridge the gap of connecting the investors to entrepreneurs.</strong></p>', 'how-can-you-get-an-investment', 'Entrepreneurs,about', '2020-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 'The Platform Functionalities', 'public/blog/XO0xo2YIP8Qc0HaOwGYOKT3k1d1Aw8rjGkP7NAGq.jpeg', '<ol>\r\n<li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Investment Matchmaking: we are connecting investors with entrepreneurs to bridge the gap of access to finance.</span></li>\r\n<li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Simplifying for you to invest smarter: we collect enough information about the businesses through which you can make smart decisions.</span></li>\r\n<li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Connect you with like-minded entrepreneurs: By having an investor account in Sarmayah.com, you will have access to a variety of high caliber businesses in different stages of idea, startup and growth.</span></li>\r\n</ol>', 'the-platform-functionalities', 'Sarmayah,Functionalities,Entrepreneurs', '2020-12-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 1, 'Software Developer Andriod', NULL, '<p><span>Sarmayah, is a platform that exists to serve people from all backgrounds and experiences without any descrimination. We are always actively looking for technical and skilled individuals to join our team and help us easily achieve our ultimate goals. We work to provide a platform for entrepreneurs to meet their new visions. Join us in this exciting journey!</span></p>', 'software-developer-andriod', 'ICT,Software Developement', '2021-01-28', 'career', 'Software Developement', 'Afghanistan Kabul', 'Full Time', '2021-01-01', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 1, 'Communication Officer Women', 'assets//zNVyMg2Bg5IT4YOTHaUiU3xGwQUJlniuSppEwOPJ.png', '<p><span>Sarmayah, is a platform that exists to serve people from all backgrounds and experiences without any descrimination. We are always actively looking for technical and skilled individuals to join our team and help us easily achieve our ultimate goals. We work to provide a platform for entrepreneurs to meet their new visions. Join us in this exciting journey!</span></p>', 'communication-officer-women', 'HR', '2021-01-28', 'career', 'Human Resource', 'Afghanistan Kabul', 'Full Time', '2021-01-16', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1, 'First Top salam', 'assets//3QaqMgVQ4aoX6Brpt0qLgds3ewY4dFV0xExgmhlr.jpeg', '<p>Of course, you can change \"example-app\" in this URL to anything you like. The Laravel application\'s directory will be created within the directory you execute the command from.</p>\r\n<p>After the project has been created, you can navigate to the application directory and start Laravel Sail. Laravel Sail provides a simple command-line interface for interacting with Laravel\'s default Docker configuration:</p>\r\n<p>Of course, you can change \"example-app\" in this URL to anything you like. The Laravel application\'s directory will be created within the directory you execute the command from.</p>\r\n<p>After the project has been created, you can navigate to the application directory and start Laravel Sail. Laravel Sail provides a simple command-line interface for interacting with Laravel\'s default Docker configuration:</p>', 'first-top-salam', 'asdsa,ewrwt', '2021-01-28', 'news', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1, 'First Top salam First Top salam', 'public/blog/imODPN5bsY6Sm7nb7Ro3PPPUfORzcyxgeJDmfGD7.png', '<p><strong>Note:</strong><span> </span>Route caching does not work with Closure based routes. To use route caching, you must convert any Closure routes to use controller classes.</p>\r\n<p>If your application is exclusively using controller based routes, you should take advantage of Laravel\'s route cache. Using the route cache will drastically decrease the amount of time it takes to register all of your application\'s routes. In some cases, your route registration may even be up to 100x faster! To generate a route cache, just execute the<span> </span><code>route:cache</code><span> </span>Artisan command:</p>\r\n<pre class=\" language-php\"><code class=\" language-php\">php artisan route<span class=\"token punctuation\">:</span>cache</code></pre>\r\n<p>That\'s all there is to it! Your cached routes file will now be used instead of your<span> </span><code>app/Http/routes.php</code><span> </span>file. Remember, if you add any new routes you will need to generate a fresh route cache. Because of this, you should only run the<span> </span><code>route:cache</code><span> </span>command during your project\'s deployment.</p>\r\n<p>To remove the cached routes file without generating a new cache, use the<span> </span><code>route:clear</code><span> </span>command:</p>', 'first-top-salam-first-top-salam', 'asdasd,sdasd,dfgdfg', '2021-01-28', 'news', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 1, NULL, NULL, NULL, NULL, NULL, '2021-01-28', 'partner', NULL, NULL, NULL, NULL, 'ICC', 'public/partners/SLW7ftoDI4uX2J73jIjHRmvJRK779mw2RIotbXCE.jpeg', 'https://youtube.af', 'Financial Institutions', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_view`
--

CREATE TABLE `business_view` (
  `view_id` bigint(50) NOT NULL,
  `entre_id` bigint(20) NOT NULL,
  `investor_id` bigint(50) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `getBrowser` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `business_view`
--

INSERT INTO `business_view` (`view_id`, `entre_id`, `investor_id`, `ip_address`, `os`, `getBrowser`, `Date`) VALUES
(1, 11, 2, '::1', 'Windows 10', 'Chrome', '2021-01-13 10:55:00'),
(2, 13, 2, '::1', 'Windows 10', 'Chrome', '2021-01-13 10:55:26'),
(3, 8, 2, '::1', 'Windows 10', 'Chrome', '2021-01-13 11:13:44'),
(4, 24, 2, '::1', 'Windows 10', 'Chrome', '2021-01-21 09:24:02'),
(6, 25, 2, '::1', 'Windows 10', 'Chrome', '2021-01-25 11:23:38'),
(7, 26, 2, '::1', 'Windows 10', 'Chrome', '2021-01-29 16:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `busniess_model_convas`
--

CREATE TABLE `busniess_model_convas` (
  `busniess_c_id` bigint(100) NOT NULL,
  `entre_id` int(11) DEFAULT NULL,
  `Key_Partners` text DEFAULT NULL,
  `Key_Activities` text DEFAULT NULL,
  `Value_Propositions` text DEFAULT NULL,
  `Customer_Relationships` text DEFAULT NULL,
  `Customer_Segments` text DEFAULT NULL,
  `Key_Resources` text DEFAULT NULL,
  `Channels` text DEFAULT NULL,
  `Cost_Structure` text DEFAULT NULL,
  `Revenue_Streams` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `busniess_model_convas`
--

INSERT INTO `busniess_model_convas` (`busniess_c_id`, `entre_id`, `Key_Partners`, `Key_Activities`, `Value_Propositions`, `Customer_Relationships`, `Customer_Segments`, `Key_Resources`, `Channels`, `Cost_Structure`, `Revenue_Streams`) VALUES
(37, 24, '<p></p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.</p>', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!As the first step of completing your registration process, please verify your email using the link sent to your inbox.</p>', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!As the first step of completing your registration process, please verify your email using the link sent to your inbox.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\"></span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>'),
(38, 25, '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>'),
(64, 26, '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `busniess_trends`
--

CREATE TABLE `busniess_trends` (
  `busniess_trends_id` int(11) NOT NULL,
  `entre_id` bigint(20) NOT NULL,
  `busniess_trends` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `busniess_trends`
--

INSERT INTO `busniess_trends` (`busniess_trends_id`, `entre_id`, `busniess_trends`) VALUES
(38, 24, '\n                                  \n                                  \n                                     <thead>\n                                     <tr align=\"center\">\n                                         <th rowspan=\"2\" style=\"vertical-align:baseline\" class=\"font-weight-bold\"> Impact</th>\n                                         <th colspan=\"5\" class=\"font-weight-bold\">Trends</th>\n                                     </tr>\n                                     <tr>\n                                         <th class=\"font-weight-bold\"> Social</th>\n                                         <th class=\"font-weight-bold\">Political</th>\n                                         <th class=\"font-weight-bold\">Security</th>\n                                         <th class=\"font-weight-bold\">Technological</th>\n                                         <th class=\"font-weight-bold\">Economical</th>\n                                     </tr>\n                                     </thead>\n                                     <tbody>\n   \n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">Favourable</th>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">SAD</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">ASDAS</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">ASDAS</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">s</td>\n\n                                    </tr><!--End tr -->\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">Unfavourable</th>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n\n                                    </tr><!--End tr -->\n                                     <tr>\n                                        <th id=\"table-custom__id\">Further Analsis</th>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n\n                                    </tr><!--End tr -->\n                               \n                                     </tbody>\n                                                                                                     '),
(39, 25, '\n                                  \n                                  \n                                  \n                                     <thead>\n                                     <tr align=\"center\">\n                                         <th rowspan=\"2\" style=\"vertical-align:baseline\" class=\"font-weight-bold\"> Impact</th>\n                                         <th colspan=\"5\" class=\"font-weight-bold\">Trends</th>\n                                     </tr>\n                                     <tr>\n                                         <th class=\"font-weight-bold\"> Social</th>\n                                         <th class=\"font-weight-bold\">Political</th>\n                                         <th class=\"font-weight-bold\">Security</th>\n                                         <th class=\"font-weight-bold\">Technological</th>\n                                         <th class=\"font-weight-bold\">Economical</th>\n                                     </tr>\n                                     </thead>\n                                     <tbody>\n   \n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">Favourable</th>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">2002</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">asdfg</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">sdfg</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n\n                                    </tr><!--End tr -->\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">Unfavourable</th>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">asdsad</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n\n                                    </tr><!--End tr -->\n                                     <tr>\n                                        <th id=\"table-custom__id\">Further Analsis</th>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n\n                                    </tr><!--End tr -->\n                               \n                                     </tbody>\n                                                                                                                                       '),
(64, 26, '\n                                  \n                                  \n                                  \n                                  \n                                     <thead>\n                                     <tr align=\"center\">\n                                         <th rowspan=\"2\" style=\"vertical-align:baseline\" class=\"font-weight-bold\"> Impact</th>\n                                         <th colspan=\"5\" class=\"font-weight-bold\">Trends</th>\n                                     </tr>\n                                     <tr>\n                                         <th class=\"font-weight-bold\"> Social</th>\n                                         <th class=\"font-weight-bold\">Political</th>\n                                         <th class=\"font-weight-bold\">Security</th>\n                                         <th class=\"font-weight-bold\">Technological</th>\n                                         <th class=\"font-weight-bold\">Economical</th>\n                                     </tr>\n                                     </thead>\n                                     <tbody>\n   \n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">Favourable</th>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">asd</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">asdasdda</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n\n                                    </tr><!--End tr -->\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">Unfavourable</th>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">asdasdasdasdasds</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\">sdasdasdasd</td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"><br></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n\n                                    </tr><!--End tr -->\n                                     <tr>\n                                        <th id=\"table-custom__id\">Further Analsis</th>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n                                        <td contenteditable=\"true\" placeholder=\"Insert Text\"></td>\n\n                                    </tr><!--End tr -->\n                               \n                                     </tbody>\n                                                                                                                                                                         ');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_request`
--

CREATE TABLE `cancel_request` (
  `cancel_id` bigint(20) NOT NULL,
  `entre_id` bigint(30) NOT NULL,
  `investor_id` bigint(30) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cancel_request`
--

INSERT INTO `cancel_request` (`cancel_id`, `entre_id`, `investor_id`, `summary`) VALUES
(2, 17, 2, 'some reason'),
(3, 17, 2, 'some'),
(4, 17, 2, 'hgjghj'),
(5, 17, 2, 'y'),
(6, 24, 2, 'sdasdsadhjsdnsd\r\nsdnsadkasdsadsa\r\ndsadsadsad'),
(7, 24, 2, 'SomeReason');

-- --------------------------------------------------------

--
-- Table structure for table `compititive_advantage`
--

CREATE TABLE `compititive_advantage` (
  `advantage_id` bigint(20) NOT NULL,
  `entre_id` bigint(20) NOT NULL,
  `advan_1` text DEFAULT NULL,
  `advan_2` text DEFAULT NULL,
  `advan_3` text DEFAULT NULL,
  `advan_4` text DEFAULT NULL,
  `advan_5` text DEFAULT NULL,
  `comp_1` text DEFAULT NULL,
  `comp_2` text DEFAULT NULL,
  `comp_3` text DEFAULT NULL,
  `comp_4` text DEFAULT NULL,
  `comp_5` text DEFAULT NULL,
  `ad_1` varchar(5) DEFAULT NULL,
  `ad_2` varchar(5) DEFAULT NULL,
  `ad_3` varchar(100) DEFAULT NULL,
  `ad_4` varchar(5) DEFAULT NULL,
  `ad_5` varchar(5) DEFAULT NULL,
  `ad_6` varchar(5) DEFAULT NULL,
  `ad_7` varchar(5) DEFAULT NULL,
  `ad_8` varchar(5) DEFAULT NULL,
  `ad_9` varchar(5) DEFAULT NULL,
  `ad_10` varchar(5) DEFAULT NULL,
  `ad_11` varchar(5) DEFAULT NULL,
  `ad_12` varchar(5) DEFAULT NULL,
  `ad_13` varchar(5) DEFAULT NULL,
  `ad_14` varchar(5) DEFAULT NULL,
  `ad_15` varchar(5) DEFAULT NULL,
  `ad_16` varchar(5) DEFAULT NULL,
  `ad_17` varchar(5) DEFAULT NULL,
  `ad_18` varchar(5) DEFAULT NULL,
  `ad_19` varchar(5) DEFAULT NULL,
  `ad_20` varchar(5) DEFAULT NULL,
  `ad_21` varchar(5) DEFAULT NULL,
  `ad_22` varchar(5) DEFAULT NULL,
  `ad_23` varchar(5) DEFAULT NULL,
  `ad_24` varchar(5) DEFAULT NULL,
  `ad_25` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compititive_advantage`
--

INSERT INTO `compititive_advantage` (`advantage_id`, `entre_id`, `advan_1`, `advan_2`, `advan_3`, `advan_4`, `advan_5`, `comp_1`, `comp_2`, `comp_3`, `comp_4`, `comp_5`, `ad_1`, `ad_2`, `ad_3`, `ad_4`, `ad_5`, `ad_6`, `ad_7`, `ad_8`, `ad_9`, `ad_10`, `ad_11`, `ad_12`, `ad_13`, `ad_14`, `ad_15`, `ad_16`, `ad_17`, `ad_18`, `ad_19`, `ad_20`, `ad_21`, `ad_22`, `ad_23`, `ad_24`, `ad_25`) VALUES
(37, 24, 'salaam', 's', NULL, NULL, NULL, 'BBBBBB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 25, 'qwe', NULL, NULL, NULL, NULL, 'qweqwe', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 26, 'salaam', NULL, NULL, NULL, NULL, 'asd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country_names`
--

CREATE TABLE `country_names` (
  `id_country` int(11) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_names`
--

INSERT INTO `country_names` (`id_country`, `country`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Anguilla'),
(7, 'Antigua & Barbuda'),
(8, 'Argentina'),
(9, 'Armenia'),
(10, 'Australia'),
(11, 'Austria'),
(12, 'Azerbaijan'),
(13, 'Bahamas'),
(14, 'Bahrain'),
(15, 'Bangladesh'),
(16, 'Barbados'),
(17, 'Belarus'),
(18, 'Belgium'),
(19, 'Belize'),
(20, 'Benin'),
(21, 'Bermuda'),
(22, 'Bhutan'),
(23, 'Bolivia'),
(24, 'Bosnia & Herzegovina'),
(25, 'Botswana'),
(26, 'Brazil'),
(27, 'Brunei Darussalam'),
(28, 'Bulgaria'),
(29, 'Burkina Faso'),
(30, 'Myanmar/Burma'),
(31, 'Burundi'),
(32, 'Cambodia'),
(33, 'Cameroon'),
(34, 'Canada'),
(35, 'Cape Verde'),
(36, 'Cayman Islands'),
(37, 'Central African Repu'),
(38, 'Chad'),
(39, 'Chile'),
(40, 'China'),
(41, 'Colombia'),
(42, 'Comoros'),
(43, 'Congo'),
(44, 'Costa Rica'),
(45, 'Croatia'),
(46, 'Cuba'),
(47, 'Cyprus'),
(48, 'Czech Republic'),
(49, 'Democratic Republic '),
(50, 'Denmark'),
(51, 'Djibouti'),
(52, 'Dominican Republic'),
(53, 'Dominica'),
(54, 'Ecuador'),
(55, 'Egypt'),
(56, 'El Salvador'),
(57, 'Equatorial Guinea'),
(58, 'Eritrea'),
(59, 'Estonia'),
(60, 'Ethiopia'),
(61, 'Fiji'),
(62, 'Finland'),
(63, 'France'),
(64, 'French Guiana'),
(65, 'Gabon'),
(66, 'Gambia'),
(67, 'Georgia'),
(68, 'Germany'),
(69, 'Ghana'),
(70, 'Great Britain'),
(71, 'Greece'),
(72, 'Grenada'),
(73, 'Guadeloupe'),
(74, 'Guatemala'),
(75, 'Guinea'),
(76, 'Guinea-Bissau'),
(77, 'Guyana'),
(78, 'Haiti'),
(79, 'Honduras'),
(80, 'Hungary'),
(81, 'Iceland'),
(82, 'India'),
(83, 'Indonesia'),
(84, 'Iran'),
(85, 'Iraq'),
(86, 'Israel and the Occup'),
(87, 'Italy'),
(88, 'Ivory Coast (Cote d\''),
(89, 'Jamaica'),
(90, 'Japan'),
(91, 'Jordan'),
(92, 'Kazakhstan'),
(93, 'Kenya'),
(94, 'Kosovo'),
(95, 'Kuwait'),
(96, 'Kyrgyz Republic (Kyr'),
(97, 'Laos'),
(98, 'Latvia'),
(99, 'Lebanon'),
(100, 'Lesotho'),
(101, 'Liberia'),
(102, 'Libya'),
(103, 'Liechtenstein'),
(104, 'Lithuania'),
(105, 'Luxembourg'),
(106, 'Republic of Macedoni'),
(107, 'Madagascar'),
(108, 'Malawi'),
(109, 'Malaysia'),
(110, 'Maldives'),
(111, 'Mali'),
(112, 'Malta'),
(113, 'Martinique'),
(114, 'Mauritania'),
(115, 'Mauritius'),
(116, 'Mayotte'),
(117, 'Mexico'),
(118, 'Moldova, Republic of'),
(119, 'Monaco'),
(120, 'Mongolia'),
(121, 'Montenegro'),
(122, 'Montserrat'),
(123, 'Morocco'),
(124, 'Mozambique'),
(125, 'Namibia'),
(126, 'Nepal'),
(127, 'Netherlands'),
(128, 'New Zealand'),
(129, 'Nicaragua'),
(130, 'Niger'),
(131, 'Nigeria'),
(132, 'Korea, Democratic Re'),
(133, 'Norway'),
(134, 'Oman'),
(135, 'Pacific Islands'),
(136, 'Pakistan'),
(137, 'Panama'),
(138, 'Papua New Guinea'),
(139, 'Paraguay'),
(140, 'Peru'),
(141, 'Philippines'),
(142, 'Poland'),
(143, 'Portugal'),
(144, 'Puerto Rico'),
(145, 'Qatar'),
(146, 'Reunion'),
(147, 'Romania'),
(148, 'Russian Federation'),
(149, 'Rwanda'),
(150, 'Saint Kitts and Nevi'),
(151, 'Saint Lucia'),
(152, 'Saint Vincent\'s & Gr'),
(153, 'Samoa'),
(154, 'Sao Tome and Princip'),
(155, 'Saudi Arabia'),
(156, 'Senegal'),
(157, 'Serbia'),
(158, 'Seychelles'),
(159, 'Sierra Leone'),
(160, 'Singapore'),
(161, 'Slovak Republic (Slo'),
(162, 'Slovenia'),
(163, 'Solomon Islands'),
(164, 'Somalia'),
(165, 'South Africa'),
(166, 'Korea, Republic of ('),
(167, 'South Sudan'),
(168, 'Spain'),
(169, 'Sri Lanka'),
(170, 'Sudan'),
(171, 'Suricountry'),
(172, 'Swaziland'),
(173, 'Sweden'),
(174, 'Switzerland'),
(175, 'Syria'),
(176, 'Tajikistan'),
(177, 'Tanzania'),
(178, 'Thailand'),
(179, 'Timor Leste'),
(180, 'Togo'),
(181, 'Trinidad & Tobago'),
(182, 'Tunisia'),
(183, 'Turkey'),
(184, 'Turkmenistan'),
(185, 'Turks & Caicos Islan'),
(186, 'Uganda'),
(187, 'Ukraine'),
(188, 'United Arab Emirates'),
(189, 'United States of Ame'),
(190, 'Uruguay'),
(191, 'Uzbekistan'),
(192, 'Venezuela'),
(193, 'Vietnam'),
(194, 'Virgin Islands (UK)'),
(195, 'Virgin Islands (US)'),
(196, 'Yemen'),
(197, 'Zambia'),
(198, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneurs`
--

CREATE TABLE `entrepreneurs` (
  `entrepreneurs_id` bigint(20) UNSIGNED NOT NULL,
  `varify_status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entre_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tazkira` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entre_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entre_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enter_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entre_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startup_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_minimum_viable_product` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `high_level_product_specifications` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_needs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `develop_product_plan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trademark_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registred_entity` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_identification_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establishment_date` date DEFAULT NULL,
  `ent_industry_sector` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_size` int(11) DEFAULT NULL,
  `pitch_video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incobation_program_center` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_date` date DEFAULT NULL,
  `kind_of_investment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busniess_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busniess_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pitch_presentation` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mainimum_amount_looking` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round_invest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_hear_ab_us` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elavator_picth` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problem_sulotion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solution` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `risk_analysis` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `product_upgrading` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `entrepreneurs`
--

INSERT INTO `entrepreneurs` (`entrepreneurs_id`, `varify_status`, `slug`, `login_status`, `admin_status`, `catagory`, `entre_name`, `tazkira`, `gender`, `entre_last_name`, `entre_email`, `enter_password`, `entre_phone`, `country`, `startup_name`, `business_minimum_viable_product`, `high_level_product_specifications`, `product_needs`, `develop_product_plan`, `trademark_name`, `license_number`, `company_name`, `registred_entity`, `tax_identification_number`, `company_address`, `website_url`, `facebook_url`, `linkedin_url`, `instagram_url`, `establishment_date`, `ent_industry_sector`, `team_size`, `pitch_video_link`, `incobation_program_center`, `graduation_date`, `kind_of_investment`, `company_profile`, `logo`, `profile_pic`, `busniess_license`, `busniess_plan`, `pitch_presentation`, `mainimum_amount_looking`, `round_invest`, `how_hear_ab_us`, `elavator_picth`, `problem_sulotion`, `solution`, `risk_analysis`, `created_at`, `product_upgrading`, `updated_at`) VALUES
(24, 'varifyed', 'afghanistan-afghan-air-port', NULL, 'Approved', 'SME', 'Musayeb', 'public/tazkira//1X5IBsXVBSNA7fTLsX2U3CcAxHqdLO0cNVMkGwNI.jpg', 'Male', 'afzali', 'musayeb@asaraglobal.com', '$2y$10$QG3B2FMqMkIH0KGQqi7NkehsR09qDW9jRh68x8UjE.ghVUSD.fZq6', '+93783970373', 'Afghanistan', NULL, '\n                   <thead>\n                        <tr>\n                            <th align=\"center\">Objectives</th>\n                            <th class=\"font-big\">How specifically does your minimum viable business product meet this objective?</th>\n                        </tr>\n                    </thead>\n                    <tbody>\n                        <!-- tr -->\n                        <tr>\n                            <td id=\"table-custom__id\" class=\"font-big\">Value: Provides consistent value to end user</td>\n                            <td class=\"font-big \" contenteditable=\"true\">d</td>\n                        </tr><!--End tr -->\n                        <!-- tr -->\n                        <tr>\n                            <td id=\"table-custom__id\" class=\"font-big\">Pay: Prove that the economic buyer will pay something for the product placement</td>\n                            <td class=\"font-big\" contenteditable=\"true\">d</td>\n                        </tr><!--End tr -->\n                        <!-- tr -->\n                        <tr class=\"font-big\">\n                            <td id=\"table-custom__id\" class=\"font-big\">Feedback: Creates meaningful feedback loop with customer (end user, economic buyer and champion)</td>\n                            <td class=\"font-big\" contenteditable=\"true\">s</td>\n                        </tr><!--End tr -->\n     \n                    </tbody>\n                                    ', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc<br />Sarmayah, Inc</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\r\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '\n\n                                \n\n                                <thead>\n                    <tr>\n                        <th id=\"table-custom__id\">#</th>\n                        <th>Feature/ Function</th>\n                        <th>Benefit</th>\n                        <th>For whom?  End user, economic buyer</th>\n                        <th>Hoe does it leverage your core?</th>\n                        <th>Priority</th>\n                        <th>Estimated resources</th>\n                    </tr>\n                </thead>\n                <tbody>\n                    <!-- tr -->\n                    <tr>\n                        <td id=\"table-custom__id\">1</td>\n                        <td contenteditable=\"true\">SALAAM</td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                    </tr><!--End tr -->\n                    <!-- tr -->\n                    <tr>\n                        <td id=\"table-custom__id\">2</td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                    </tr><!--End tr -->\n                    <!-- tr -->\n                    <tr>\n                        <td id=\"table-custom__id\">3</td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                    </tr><!--End tr -->\n                    <!-- tr -->\n                    <tr>\n                        <td id=\"table-custom__id\">4</td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                    </tr><!--End tr -->\n                </tbody>\n                                 \n                \n             \n                                 \n                \n            ', 'Click', '230-3903-2', 'Afghanistan Afghan Air port', 'asd', '12312', NULL, 'https://salaam.com', 'https://facebook.com/musayeb', NULL, 'https://instagram.com/click.af', '2021-01-21', '15', NULL, 'https://www.youtube.com/watch?v=rkKuyrcafBw', NULL, NULL, NULL, 'public/companyprofile//TAHACdls69yANND1k3xiAdjrS5jpQSsyrk7GCj8G.pdf', 'public/bussnessLogo//LANM5Akg29KyfMiaczUhgY9xMh0sYmTQm7kdyjBh.png', 'public/bussnessprofile_pic//hmbKq9LsUJJpewwZEMgiD4iPuVRvrqmMDTN5j9Cx.jpg', 'public/busniess_license//EuBeIH97DrhL3JJ9VEGXMyFj45LnkIMc9WAIJ7X0.pdf', 'public/busniess_plan//SuUnByPSTDpkTYGCIxBUBgVe8jv85k0rDcTjzPrT.pdf', 'public/presentation//fsVuZu1XXxBuBJB1HBA4tPX4aCGgGZhmIURBn986.pdf', '2000.00', 'Three', 'Search Engines', '<p>asds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsa</p>', NULL, NULL, NULL, '2021-01-20 10:55:39', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', '2021-01-20 10:55:39');
INSERT INTO `entrepreneurs` (`entrepreneurs_id`, `varify_status`, `slug`, `login_status`, `admin_status`, `catagory`, `entre_name`, `tazkira`, `gender`, `entre_last_name`, `entre_email`, `enter_password`, `entre_phone`, `country`, `startup_name`, `business_minimum_viable_product`, `high_level_product_specifications`, `product_needs`, `develop_product_plan`, `trademark_name`, `license_number`, `company_name`, `registred_entity`, `tax_identification_number`, `company_address`, `website_url`, `facebook_url`, `linkedin_url`, `instagram_url`, `establishment_date`, `ent_industry_sector`, `team_size`, `pitch_video_link`, `incobation_program_center`, `graduation_date`, `kind_of_investment`, `company_profile`, `logo`, `profile_pic`, `busniess_license`, `busniess_plan`, `pitch_presentation`, `mainimum_amount_looking`, `round_invest`, `how_hear_ab_us`, `elavator_picth`, `problem_sulotion`, `solution`, `risk_analysis`, `created_at`, `product_upgrading`, `updated_at`) VALUES
(25, 'varifyed', 'teezpa-jan', NULL, 'Approved', 'STARTUP', 'Musayeb', 'public/tazkira//usFIzojenlEJxnHKWlK27POyLyFsLAO03YK8FRgy.png', 'Male', 'afzali', 'afzaliafzali673@gmail.com', '$2y$10$/.JONQcSqLlgP0S5mFskEeNyvEHu7OfkFv451dlbMD5mio2z6Th92', '+93782970273', 'Afghanistan', 'Teezpa jan', '\n                   <thead>\n                        <tr>\n                            <th align=\"center\">Objectives</th>\n                            <th class=\"font-big\">How specifically does your minimum viable business product meet this objective?</th>\n                        </tr>\n                    </thead>\n                    <tbody>\n                        <!-- tr -->\n                        <tr>\n                            <td id=\"table-custom__id\" class=\"font-big\">Value: Provides consistent value to end user</td>\n                            <td class=\"font-big \" contenteditable=\"true\">qasda</td>\n                        </tr><!--End tr -->\n                        <!-- tr -->\n                        <tr>\n                            <td id=\"table-custom__id\" class=\"font-big\">Pay: Prove that the economic buyer will pay something for the product placement</td>\n                            <td class=\"font-big\" contenteditable=\"true\">asdasd</td>\n                        </tr><!--End tr -->\n                        <!-- tr -->\n                        <tr class=\"font-big\">\n                            <td id=\"table-custom__id\" class=\"font-big\">Feedback: Creates meaningful feedback loop with customer (end user, economic buyer and champion)</td>\n                            <td class=\"font-big\" contenteditable=\"true\">dasdasd</td>\n                        </tr><!--End tr -->\n     \n                    </tbody>\n                                    ', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\"><o:p></o:p></span></p>\n<p><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></p>', '\n\n                                \n\n                                <thead>\n                    <tr>\n                        <th id=\"table-custom__id\">#</th>\n                        <th>Feature/ Function</th>\n                        <th>Benefit</th>\n                        <th>For whom?  End user, economic buyer</th>\n                        <th>Hoe does it leverage your core?</th>\n                        <th>Priority</th>\n                        <th>Estimated resources</th>\n                    </tr>\n                </thead>\n                <tbody>\n                    <!-- tr -->\n                    <tr>\n                        <td id=\"table-custom__id\">1</td>\n                        <td contenteditable=\"true\">asd</td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\">asd</td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\">asdasd</td>\n                        <td contenteditable=\"true\">SD</td>\n                    </tr><!--End tr -->\n                    <!-- tr -->\n                    <tr>\n                        <td id=\"table-custom__id\">2</td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                    </tr><!--End tr -->\n                    <!-- tr -->\n                    <tr>\n                        <td id=\"table-custom__id\">3</td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                    </tr><!--End tr -->\n                    <!-- tr -->\n                    <tr>\n                        <td id=\"table-custom__id\">4</td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                        <td contenteditable=\"true\"></td>\n                    </tr><!--End tr -->\n                </tbody>\n                                 \n                \n                 \n                                 \n                \n                ', 'Click', '230-3903-2', NULL, NULL, NULL, NULL, 'https://salaam.com', 'https://facebook.com/musayeb', NULL, 'https://instagram.com/click.af', '2021-01-15', '7', NULL, 'https://www.youtube.com/watch?v=rkKuyrcafBw', NULL, NULL, NULL, 'public/companyprofile//jiandoGrYflM6w1NVGHAp4ccjcG2Eh47osuMALhN.pdf', 'public/bussnessLogo//GD4MOvt0UpDiFyYRKNcBoBV29wwtbrh56mRYfCFx.png', NULL, 'public/busniess_license//6OWrStfOOFYj5Nncu8dcLym4zodKssVltXfgyPvX.pdf', 'public/busniess_plan//ZAAK2pQ1PW89ydyK3Af6oGGiFGKMJ29iICEHeh6B.pdf', 'public/presentation//qCTzApEubE3MydMvPORTWgiJdihG2uDEh813ziuV.pdf', '2000.00', 'Two', 'Social Media', '<p>asds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsaasds sdsd sdsds sdsds sdss dsds ds ds sd s ds d sd sd s s ds d sad asdas das das d asd as das dsakld asdasdsa</p>', NULL, NULL, NULL, '2022-05-21 13:21:54', NULL, '2021-01-21 13:21:54'),
(26, 'varifyed', 'electronic-school-jan', NULL, 'Approved', 'IDEA', 'Musayeb', 'public/tazkira//3vjT6V9T9fccLClsyn5MuNlnaTqbA5y4NxOdJX1m.jpg', 'Male', 'afzali', '', '$2y$10$R7Nu9V6Rxu4Z9mFcNRL43usPwG32E7DnBKPqsms4zn3e1xVtS//lO', '+93782970273', 'Afghanistan', 'Electronic School jan', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-15', '7', 20, 'https://www.youtube.com/watch?v=rkKuyrcafBw', NULL, NULL, NULL, NULL, 'public/bussnessLogo//cWlZVjHO8g3taaH65GqmQ6uj9LDujcwnHV3imCda.jpeg', NULL, NULL, NULL, 'public/presentation//ZVH6qbK1DC6sScvRGpHuN4go0JXyE43N6vYvZqIp.pdf', '23000.00', 'One', 'Search Engines', '<p style=\"margin-bottom: 0in; line-height: normal; background: white;\">Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\">Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\">Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.</p>', NULL, '2021-01-25 11:57:13', NULL, '2021-01-25 11:57:13'),
(27, NULL, NULL, NULL, 'Draft', 'STARTUP', 'Musayeb', NULL, 'Rather not say', 'Afzali', 'musayeb.afzali1998@gmail.com', '$2y$10$LpOTaVBSAD68woWCYvPVduR2nnbgwenVxhHYMb4qxmiwAdfg8lB6.', '+93747533673', 'Algeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Incubation Programs', NULL, NULL, NULL, NULL, '2021-03-08 14:33:11', NULL, '2021-03-08 14:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `entre_delete`
--

CREATE TABLE `entre_delete` (
  `entrepreneurs_id` bigint(20) UNSIGNED NOT NULL,
  `varify_status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entre_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entre_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entre_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enter_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entre_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startup_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_minimum_viable_product` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `high_level_product_specifications` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_needs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `develop_product_plan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trademark_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registred_entity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_identification_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establishment_date` date DEFAULT NULL,
  `ent_industry_sector` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_size` int(11) DEFAULT NULL,
  `pitch_video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incobation_program_center` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_date` date DEFAULT NULL,
  `kind_of_investment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busniess_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busniess_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pitch_presentation` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `market_positon_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mainimum_amount_looking` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round_invest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_hear_ab_us` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elavator_picth` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problem_sulotion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solution` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `risk_analysis` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `product_upgrading` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Key_Partners` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Key_Activities` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Value_Propositions` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Customer_Relationships` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Customer_Segments` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Key_Resources` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Channels` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cost_Structure` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Revenue_Streams` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_f` int(10) DEFAULT NULL,
  `plotical_f` int(10) DEFAULT NULL,
  `security_f` int(10) DEFAULT NULL,
  `technology_f` int(10) DEFAULT NULL,
  `economic_f` int(10) DEFAULT NULL,
  `social_u` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plotical_u` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_u` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technology_u` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `economic_u` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_fa` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plotical_fa` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_fa` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technology_fa` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `economic_fa` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entre_financial`
--

CREATE TABLE `entre_financial` (
  `entre_financial_id` bigint(20) UNSIGNED NOT NULL,
  `entre_id` bigint(20) DEFAULT NULL,
  `intial_payroll` bigint(20) DEFAULT NULL,
  `intial_operation_cost` bigint(20) DEFAULT NULL,
  `intial_technology` bigint(20) DEFAULT NULL,
  `intial_machinery` bigint(20) DEFAULT NULL,
  `intial_online_presence` bigint(20) DEFAULT NULL,
  `intial_other1` bigint(20) DEFAULT NULL,
  `intial_other2` bigint(20) DEFAULT NULL,
  `intial_other3` bigint(20) DEFAULT NULL,
  `raised_r1` bigint(20) DEFAULT NULL,
  `raised_r2` bigint(20) DEFAULT NULL,
  `raised_r3` bigint(20) DEFAULT NULL,
  `operation_payroll` bigint(20) DEFAULT NULL,
  `operation_operation_cost` bigint(20) DEFAULT NULL,
  `operation_technology` bigint(20) DEFAULT NULL,
  `operation_machinery` bigint(20) DEFAULT NULL,
  `operation_marketing` bigint(20) DEFAULT NULL,
  `operation_other1` bigint(20) DEFAULT NULL,
  `operation_other2` bigint(20) DEFAULT NULL,
  `operation_other3` bigint(20) DEFAULT NULL,
  `current_revenue` bigint(20) DEFAULT NULL,
  `other_name1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_name2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_name3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_name4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_name5` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_name6` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statustab1` int(10) DEFAULT NULL,
  `statustab2` int(10) DEFAULT NULL,
  `statustab3` int(10) DEFAULT NULL,
  `statustab4` int(10) DEFAULT NULL,
  `f_number_of_products_sold` bigint(20) DEFAULT NULL,
  `f_price_per_sale_unit` bigint(20) DEFAULT NULL,
  `f_number_of_customers` bigint(20) DEFAULT NULL,
  `f_total_sales_Revenue` bigint(20) DEFAULT NULL,
  `s_number_of_products_sold` int(11) DEFAULT NULL,
  `s_price_per_sale_unit` int(11) DEFAULT NULL,
  `s_number_of_customers` int(11) DEFAULT NULL,
  `s_total_sales_Revenue` int(11) DEFAULT NULL,
  `t_number_of_products_sold` int(11) DEFAULT NULL,
  `t_price_per_sale_unit` int(11) DEFAULT NULL,
  `t_number_of_customers` int(11) DEFAULT NULL,
  `t_total_sales_Revenue` int(11) DEFAULT NULL,
  `f_fixed_cost_per_unit` bigint(20) DEFAULT NULL,
  `f_profit_margin_per_unit` bigint(20) DEFAULT NULL,
  `f_amount_of_sales_annually` bigint(20) DEFAULT NULL,
  `f_variable_cost_per_unit` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `f_price_per_unit` bigint(20) DEFAULT NULL,
  `f_total_cost_per_unit` bigint(20) DEFAULT NULL,
  `f_total_sales_revenue_annually` bigint(20) DEFAULT NULL,
  `s_fixed_cost_per_unit` bigint(20) DEFAULT NULL,
  `s_profit_margin_per_unit` bigint(20) DEFAULT NULL,
  `s_amount_of_sales_annually` bigint(20) DEFAULT NULL,
  `s_variable_cost_per_unit` bigint(20) DEFAULT NULL,
  `s_price_per_unit` bigint(20) DEFAULT NULL,
  `s_total_cost_per_unit` bigint(20) DEFAULT NULL,
  `s_total_sales_revenue_annually` bigint(20) DEFAULT NULL,
  `t_fixed_cost_per_unit` bigint(20) DEFAULT NULL,
  `t_profit_margin_per_unit` bigint(20) DEFAULT NULL,
  `t_amount_of_sales_annually` bigint(20) DEFAULT NULL,
  `t_variable_cost_per_unit` bigint(20) DEFAULT NULL,
  `t_price_per_unit` bigint(20) DEFAULT NULL,
  `t_total_cost_per_unit` bigint(20) DEFAULT NULL,
  `t_total_sales_revenue_annually` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entre_financial`
--

INSERT INTO `entre_financial` (`entre_financial_id`, `entre_id`, `intial_payroll`, `intial_operation_cost`, `intial_technology`, `intial_machinery`, `intial_online_presence`, `intial_other1`, `intial_other2`, `intial_other3`, `raised_r1`, `raised_r2`, `raised_r3`, `operation_payroll`, `operation_operation_cost`, `operation_technology`, `operation_machinery`, `operation_marketing`, `operation_other1`, `operation_other2`, `operation_other3`, `current_revenue`, `other_name1`, `other_name2`, `other_name3`, `other_name4`, `other_name5`, `other_name6`, `statustab1`, `statustab2`, `statustab3`, `statustab4`, `f_number_of_products_sold`, `f_price_per_sale_unit`, `f_number_of_customers`, `f_total_sales_Revenue`, `s_number_of_products_sold`, `s_price_per_sale_unit`, `s_number_of_customers`, `s_total_sales_Revenue`, `t_number_of_products_sold`, `t_price_per_sale_unit`, `t_number_of_customers`, `t_total_sales_Revenue`, `f_fixed_cost_per_unit`, `f_profit_margin_per_unit`, `f_amount_of_sales_annually`, `f_variable_cost_per_unit`, `created_at`, `f_price_per_unit`, `f_total_cost_per_unit`, `f_total_sales_revenue_annually`, `s_fixed_cost_per_unit`, `s_profit_margin_per_unit`, `s_amount_of_sales_annually`, `s_variable_cost_per_unit`, `s_price_per_unit`, `s_total_cost_per_unit`, `s_total_sales_revenue_annually`, `t_fixed_cost_per_unit`, `t_profit_margin_per_unit`, `t_amount_of_sales_annually`, `t_variable_cost_per_unit`, `t_price_per_unit`, `t_total_cost_per_unit`, `t_total_sales_revenue_annually`, `updated_at`) VALUES
(46, 24, 3000, 30000, 150000, 56000, 540000, NULL, NULL, NULL, NULL, NULL, NULL, 360000, 30000, 50000, 3000, 45000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 100, 100, 100, 10000, 100, 100, 100, 10000, 100, 100, 1000, 10000, 100, 100, NULL, 100, NULL, 300, 200, NULL, 100, 100, NULL, 100, 300, 200, NULL, 100, 100, NULL, 100, 300, 200, NULL, NULL),
(47, 25, 3000, 30000, 150000, 56000, 540000, NULL, NULL, NULL, NULL, NULL, NULL, 2, 222, 222, 2222, 222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 222, 222, 22, 49284, 222, 222, 22222, 49284, 2222, 2222, 222, 4937284, 2222, 2222, NULL, 2222, NULL, 6666, 4444, NULL, 2222, 222, NULL, 2222, 4666, 4444, NULL, 2222, 222, NULL, 222, 2666, 2444, NULL, NULL),
(72, 26, 3000, 30000, 150000, 56000, 540000, NULL, NULL, NULL, NULL, NULL, NULL, 60000, 30000, 50000, 3000, 45000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 20, 200, 20, 4000, 200, 2000, 200, 400000, 200, 200, 200, 40000, 200, 1000, NULL, 1300, NULL, 2500, 1500, NULL, 2000, 1500, NULL, 1300, 4800, 3300, NULL, 1300, 1200, NULL, 7000, 9500, 8300, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_busniess`
--

CREATE TABLE `feature_busniess` (
  `feature_id` bigint(20) NOT NULL,
  `entre_id` bigint(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feature_busniess`
--

INSERT INTO `feature_busniess` (`feature_id`, `entre_id`, `month`, `year`) VALUES
(7, 13, '01', '2021'),
(11, 11, '01', '2021'),
(12, 8, '01', '2021'),
(13, 13, '01', '2021'),
(14, 17, '06', '2021'),
(15, 17, '01', '2021'),
(16, 24, '01', '2021'),
(17, 24, '07', '2021'),
(18, 24, '03', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `implement_phase`
--

CREATE TABLE `implement_phase` (
  `implement_id` bigint(20) NOT NULL,
  `phase_first` longtext DEFAULT NULL,
  `phase_second` longtext DEFAULT NULL,
  `phase_third` longtext DEFAULT NULL,
  `number_1` bigint(10) DEFAULT NULL,
  `number_2` bigint(10) DEFAULT NULL,
  `number_3` bigint(10) DEFAULT NULL,
  `type_1` varchar(50) DEFAULT NULL,
  `type_2` varchar(50) DEFAULT NULL,
  `type_3` varchar(50) DEFAULT NULL,
  `entre_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `implement_phase`
--

INSERT INTO `implement_phase` (`implement_id`, `phase_first`, `phase_second`, `phase_third`, `number_1`, `number_2`, `number_3`, `type_1`, `type_2`, `type_3`, `entre_id`) VALUES
(28, '<p>s</p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>', '<p>fgfdgdfg</p>', 2, 1, 4, 'Month', 'Month', 'Month', 26);

-- --------------------------------------------------------

--
-- Table structure for table `investment_manage`
--

CREATE TABLE `investment_manage` (
  `manage_id` int(11) NOT NULL,
  `define_your_investment_terms` text DEFAULT NULL,
  `plan_for_management_of__investment` text DEFAULT NULL,
  `breakdown_the_costs` text DEFAULT NULL,
  `entre_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `investment_manage`
--

INSERT INTO `investment_manage` (`manage_id`, `define_your_investment_terms`, `plan_for_management_of__investment`, `breakdown_the_costs`, `entre_id`) VALUES
(37, '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', 24),
(38, '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>\n<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>\n<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>\n<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>\n<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>\n<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>\n<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>\n<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>\n<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>\n<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.</p>\n<p>To complete your registration process, please verify your account through the link sent to your email inbox.</p>\n<p>Kindly check your spam folder in case the email is not found in your inbox.</p>\n<p>If you did not receive an email, please contact support@sarmayah.com.</p>\n<p>Regards,</p>\n<p>Sarmayah LLC</p>', 25),
(63, '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process,please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.</p>', '<p style=\"text-align: justify;\">Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process,please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\">Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process,please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.</p>', 26);

-- --------------------------------------------------------

--
-- Table structure for table `investment_processes`
--

CREATE TABLE `investment_processes` (
  `invest_process_id` bigint(20) UNSIGNED NOT NULL,
  `investor_id` int(11) NOT NULL,
  `entrepreneurs_id` int(11) NOT NULL,
  `investment_ammount` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment_processes`
--

INSERT INTO `investment_processes` (`invest_process_id`, `investor_id`, `entrepreneurs_id`, `investment_ammount`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 21, 233, 'Matched', '2021-01-12 19:30:00', '2020-10-28 19:30:00'),
(3, 2, 22, 2000, 'Matched', '2021-01-19 10:13:02', '2021-01-19 10:13:02'),
(4, 2, 17, 2000, 'Matched', '2021-01-19 11:01:28', '2021-01-19 11:01:28'),
(5, 2, 23, 2000, NULL, '2021-01-25 11:41:40', '2021-01-25 11:41:40'),
(6, 2, 24, 2000, 'Matched', '2021-01-30 06:50:18', '2021-01-30 06:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `investor_id` bigint(20) UNSIGNED NOT NULL,
  `env_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `env_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_hear_ab_us` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `env__email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `env_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `env_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investment_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `env_protfolio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_busniess_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_busniess_sector` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_invest_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_invest_amount` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intersted_sector` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `env_suits` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intial_startup_criteria` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_status` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`investor_id`, `env_name`, `env_last_name`, `gender`, `how_hear_ab_us`, `env__email`, `env_password`, `env_phone`, `country`, `investment_amount`, `env_protfolio`, `port_busniess_name`, `port_busniess_sector`, `port_invest_date`, `port_invest_amount`, `results`, `intersted_sector`, `env_suits`, `intial_startup_criteria`, `account_status`, `admin_status`, `created_at`, `updated_at`) VALUES
(2, 'Musayeb', 'afzali', 'Female', 'Search Engines', 'Musayeb.afzali1998@gmail.comm', '$2y$10$6Ajb87khWGE0OHJcXJVk6uGPiW7t5WsY7g5NKPyDUTct0VJ7Hc6Om', '+93782970273', 'Afghanistan', '2,000.00', NULL, '123123', 'Economic', '2021-01-14', '1,239.64', 'dfsdfsdfsdfsdf', 'Agriculture', NULL, 'Innovation', 'varifyed', 'Approved', '2021-01-02 07:35:16', '2021-01-02 07:35:16'),
(3, 'Musayeb', 'afzali', 'Male', 'Social Media', 'afzali.af2020@gmail.com', '$2y$10$3f6nwdAOJiychCzG00unw.x7nr..3lv76XFs6fPjISMFGD38sk3Dm', '+93747533673', 'Afghanistan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'varifyed', 'Draft', '2021-01-25 12:33:51', '2021-01-25 12:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `invite_friend`
--

CREATE TABLE `invite_friend` (
  `invite_id` bigint(30) NOT NULL,
  `inviter_email` varchar(100) NOT NULL,
  `inviter_name` varchar(100) NOT NULL,
  `receiver_email` varchar(100) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invite_friend`
--

INSERT INTO `invite_friend` (`invite_id`, `inviter_email`, `inviter_name`, `receiver_email`, `receiver_name`, `date`) VALUES
(1, 'Musayeb.afzali1998@gmail.com', 'Musayeb', 'faisal@asaraglobal.com', 'Angaar', '2021-01-06'),
(2, 'Musayeb.afzali1998@gmail.com', 'Musayeb', 'angaaramadfaisal@gmail.com', 'Angaar', '2021-01-13'),
(3, 'Musayeb.afzali1998@gmail.com', 'Musayeb', 'Angaarahmadfaisal@gmail.com', 'Angaar', '2021-01-06'),
(4, 'musayeb@asaraglobal.com', 'Musayeb', 'ebadullah@asaraglobal.com', 'Ebadullah', '2021-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `ip_block`
--

CREATE TABLE `ip_block` (
  `block_id` bigint(20) NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `Author` bigint(20) NOT NULL,
  `Registred_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_block`
--

INSERT INTO `ip_block` (`block_id`, `ip_add`, `description`, `Author`, `Registred_date`) VALUES
(4, '123.0.0.1', 'ASDAS\r\nD\r\nASD\r\nSAD', 1, '2021-01-02'),
(5, '', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `market_id` bigint(20) NOT NULL,
  `entre_id` bigint(20) DEFAULT NULL,
  `calculate_the_cost` longtext DEFAULT NULL,
  `segment1` varchar(1000) DEFAULT NULL,
  `segment2` varchar(1000) DEFAULT NULL,
  `segment3` varchar(1000) DEFAULT NULL,
  `segment4` varchar(1000) DEFAULT NULL,
  `b_head_qu1` varchar(20) DEFAULT NULL,
  `b_head_qu2` varchar(20) DEFAULT NULL,
  `b_head_qu3` varchar(20) DEFAULT NULL,
  `b_head_qu4` varchar(20) DEFAULT NULL,
  `b_head_qu5` varchar(20) DEFAULT NULL,
  `b_head_qu6` varchar(20) DEFAULT NULL,
  `beachhead_summary` text DEFAULT NULL,
  `total_available_market_size` text DEFAULT NULL,
  `full_life_cycle_user_case` text DEFAULT NULL,
  `expansion_plan` text DEFAULT NULL,
  `executive_summary` text DEFAULT NULL,
  `swot_analysis_strength` text DEFAULT NULL,
  `swot_analysis_weaknesses` text DEFAULT NULL,
  `swot_analysis_opportunities` text DEFAULT NULL,
  `swot_analysis_threats` varchar(255) DEFAULT NULL,
  `target_market` mediumtext DEFAULT NULL,
  `market_study` text DEFAULT NULL,
  `tech_resource` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`market_id`, `entre_id`, `calculate_the_cost`, `segment1`, `segment2`, `segment3`, `segment4`, `b_head_qu1`, `b_head_qu2`, `b_head_qu3`, `b_head_qu4`, `b_head_qu5`, `b_head_qu6`, `beachhead_summary`, `total_available_market_size`, `full_life_cycle_user_case`, `expansion_plan`, `executive_summary`, `swot_analysis_strength`, `swot_analysis_weaknesses`, `swot_analysis_opportunities`, `swot_analysis_threats`, `target_market`, `market_study`, `tech_resource`) VALUES
(12, 24, '<p>Dear Musayeb afzali,</p>\n<p> </p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven’t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p> </p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven’t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p> </p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven’t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', '\n                                   \n                                    cc<span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-color: white; text-align: justify;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background: white;\"><span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background: white;\"><br></p>', '\n                                    cc<span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-color: white; text-align: justify;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background: white;\"><span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background: white;\"><br></p>', '\n                                    cc<span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-color: white; text-align: justify;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background: white;\"><span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background: white;\"><br></p>', '\n                                    cc<span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-color: white; text-align: justify;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background: white;\"><span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background: white;\"><br></p>', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '<p>Dear Musayeb afzali,</p>\n<p> </p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven’t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p> </p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven’t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p> </p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven’t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', '\n                                 \n                                 \n                                                                <thead>\n                                    <tr>\n                                        <th id=\"table-custom__id\">#</th>\n                                        <th>Feature/ Function</th>\n                                        <th contenteditable=\"true\"><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></th>\n                                        <th>Source/based on:</th>\n                                        <th contenteditable=\"true\"><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></th>\n                                    </tr>\n                                </thead>\n                                <tbody>\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">1</th>\n                                        <th>Total # of end users in the broad market segment</th>\n                                        <td contenteditable=\"true\"><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\">dThank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></td>\n                                    </tr><!--End tr -->\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">2</th>\n                                        <th>Total # of end user in the targeted subsegment of your Beachhead Market</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">3</th>\n                                        <th>Annual monetizable revenue pre end user</th>\n                                        <td contenteditable=\"true\"><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></td>\n                                    </tr><!--End tr -->\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">4</th>\n                                        <th class=\"th-big\">Estimate of top-down TAM(line 2 times line 3)</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">5</th>\n                                        <th class=\"th-big\">Estimate of range of profitability for your product</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">6</th>\n                                        <th class=\"th-big\">Estimated Compound Annual Growth Rate(CAGR)</th>\n                                        <td contenteditable=\"true\"><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></td>\n                                    </tr><!--End tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">7</th>\n                                        <th class=\"th-big\">Estimate time to achieve 20 percent market share</th>\n                                        <td contenteditable=\"true\"><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"><p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p></td>\n                                    </tr><!--End tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">8</th>\n                                        <th class=\"th-big\">Anticipated market shares achieved if you are reasonably successful</th>\n                                        <td contenteditable=\"true\">asdsad</td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\">asdasdasd</td>\n                                    </tr><!--End tr -->\n                                   \n                                    \n                                      <tr>\n                                        <th id=\"table-custom__id\">9</th>\n                                        <th class=\"th-big\">What are the three top assumptions that could affect the attractiveness of the Beachhead market for your product(besides the product itself)</th>\n                                        <td colspan=\"3\" contenteditable=\"true\">\n                                            <p>1:<span style=\"font-family: Roboto; font-size: 12pt; text-align: justify;\">Thank you for signing up and welcome to\nSarmayah.com’s community of entrepreneurs and businesses.</span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please\nverify your account through the link sent to your email inbox.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email\nis not found in your inbox.</span><span style=\"font-size:12.0pt;font-family:\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact\nsupport@sarmayah.com.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",serif;=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\n                                            <p>2:</p>\n                                            <p>3:</p>\n                                        </td>\n                                        \n                                      </tr>            \n                                </tbody>\n                                                                                                                                                                                    ', '\n                      \n                                        <thead>\n                        <tr>\n                            <th>Stage#</th>\n                            <th>1</th>\n                            <th>2</th>\n                            <th>3</th>\n                            <th>4</th>\n                            <th>5</th>\n                            <th>6</th>\n                            <th>7</th>\n                            <th>8</th>\n                            <th>9</th>\n                            <th>10</th>\n                        </tr>\n                         <!-- tr -->\n                    </thead>\n                    <tbody>\n                        <tr>\n                            <th>Action</th>\n                            <th>How do they determine need, and what is their catalyst to take action?</th>\n                            <th>How do they find out about their options?</th>\n                            <th>How do they analyze their options?</th>\n                            <th>How do they acquire your products?</th>\n                            <th>How do they pay for your products?</th>\n                            <th>How they install or set up your products?</th>\n                            <th>How do they use and get value out of your products?</th>\n                            <th>How to they determine the value they gain from your products?</th>\n                            <th>How do they buy more of your products?</th>\n                            <th>How do they tell others about your products?</th>\n                        </tr><!--End tr -->\n                        <!-- tr -->\n                        <tr>\n                            <th>Who is involved</th>\n                            <td contenteditable=\"true\">salaam</td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                           \n                        </tr><!--End tr -->\n                        <!-- tr -->\n                        <tr>\n                            <th>When</th>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n\n                        </tr><!--End tr -->\n                        <!-- tr -->\n                        <tr>\n                            <th>Where</th>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n\n\n                        </tr><!--End tr -->\n                        <tr>\n                            <th>How</th>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n                            <td contenteditable=\"true\"></td>\n\n                        </tr><!--End tr -->\n                    </tbody>\n                                                                        ', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br><br>As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br><br></p>', '<ul class=\"pl-5\">\n                                        <li></li><li>&nbsp;&nbsp;</li><li>&nbsp; &nbsp; &nbsp; &nbsp; return response()-&gt;json( $request-&gt;weakness);</li><li>&nbsp; &nbsp; &nbsp; &nbsp; exit;</li>\n                                    </ul>', '<ul class=\"pl-5\">\n                                        <li>a</li>\n                                        <li>b</li>\n                                        <li>c</li>\n                                        <li>d</li>\n                                    </ul>', 'salaam', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>');
INSERT INTO `market` (`market_id`, `entre_id`, `calculate_the_cost`, `segment1`, `segment2`, `segment3`, `segment4`, `b_head_qu1`, `b_head_qu2`, `b_head_qu3`, `b_head_qu4`, `b_head_qu5`, `b_head_qu6`, `beachhead_summary`, `total_available_market_size`, `full_life_cycle_user_case`, `expansion_plan`, `executive_summary`, `swot_analysis_strength`, `swot_analysis_weaknesses`, `swot_analysis_opportunities`, `swot_analysis_threats`, `target_market`, `market_study`, `tech_resource`) VALUES
(13, 25, '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">If you did not receive an email, please contact support@sarmayah.com.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Regards,</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Sarmayah LLC</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">If you did not receive an email, please contact support@sarmayah.com.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Regards,</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Sarmayah LLC</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">If you did not receive an email, please contact support@sarmayah.com.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Regards,</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Sarmayah LLC</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">If you did not receive an email, please contact support@sarmayah.com.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Regards,</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Sarmayah LLC</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>', '\n                                   \n                                    cfghj<div>fhgjbk</div>                                    ', 'Sd', 'ASD', 'DFAD', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '<p class=\"MsoNormal\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; box-sizing: border-box; margin: 0px 0px 0in; padding: 0px; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12pt; line-height: normal; font-family: Roboto; margin: 0px; padding: 0px; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12pt; line-height: normal; font-family: \'Times New Roman\', serif; margin: 0px; padding: 0px;\"><o:p style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Gilroy, Gilroy-Medium; margin: 0px; padding: 0px;\"></o:p></span></p>\n<p class=\"MsoNormal\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; box-sizing: border-box; margin: 0px 0px 0in; padding: 0px; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12pt; line-height: normal; font-family: Roboto; margin: 0px; padding: 0px; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration </span><span style=\"color: #212529; font-family: Roboto; font-size: 12pt;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p>\n<p class=\"MsoNormal\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; box-sizing: border-box; margin: 0px 0px 0in; padding: 0px; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12pt; line-height: normal; font-family: Roboto; margin: 0px; padding: 0px; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration </span><span style=\"color: #212529; font-family: Roboto; font-size: 12pt;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p>\n<p class=\"MsoNormal\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; box-sizing: border-box; margin: 0px 0px 0in; padding: 0px; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12pt; line-height: normal; font-family: Roboto; margin: 0px; padding: 0px; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration </span><span style=\"color: #212529; font-family: Roboto; font-size: 12pt;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p>\n<p class=\"MsoNormal\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; box-sizing: border-box; margin: 0px 0px 0in; padding: 0px; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12pt; line-height: normal; font-family: Roboto; margin: 0px; padding: 0px; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration </span><span style=\"color: #212529; font-family: Roboto; font-size: 12pt;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p>\n<p class=\"MsoNormal\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; box-sizing: border-box; margin: 0px 0px 0in; padding: 0px; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12pt; line-height: normal; font-family: Roboto; margin: 0px; padding: 0px; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration </span></p>', '\n                                 \n                                                                <thead>\n                                    <tr>\n                                        <th id=\"table-custom__id\">#</th>\n                                        <th>Feature/ Function</th>\n                                        <th contenteditable=\"true\"></th>\n                                        <th>Source/based on:</th>\n                                        <th contenteditable=\"true\"></th>\n                                    </tr>\n                                </thead>\n                                <tbody>\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">1</th>\n                                        <th>Total # of end users in the broad market segment</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">2</th>\n                                        <th>Total # of end user in the targeted subsegment of your Beachhead Market</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">3</th>\n                                        <th>Annual monetizable revenue pre end user</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <!-- tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">4</th>\n                                        <th class=\"th-big\">Estimate of top-down TAM(line 2 times line 3)</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">5</th>\n                                        <th class=\"th-big\">Estimate of range of profitability for your product</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">6</th>\n                                        <th class=\"th-big\">Estimated Compound Annual Growth Rate(CAGR)</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">7</th>\n                                        <th class=\"th-big\">Estimate time to achieve 20 percent market share</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                    <tr>\n                                        <th id=\"table-custom__id\">8</th>\n                                        <th class=\"th-big\">Anticipated market shares achieved if you are reasonably successful</th>\n                                        <td contenteditable=\"true\"></td>\n                                        <th>Source/based on:</th>\n                                        <td contenteditable=\"true\"></td>\n                                    </tr><!--End tr -->\n                                   \n                                    \n                                      <tr>\n                                        <th id=\"table-custom__id\">9</th>\n                                        <th class=\"th-big\">What are the three top assumptions that could affect the attractiveness of the Beachhead market for your product(besides the product itself)</th>\n                                        <td colspan=\"3\" contenteditable=\"true\">\n                                            <p>1:</p>\n                                            <p>2:A<span style=\"font-family: Roboto; font-size: 12pt; text-align: justify;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><br></p><p class=\"MsoNormal\" style=\"color: rgb(0, 0, 0); font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration&nbsp;</span><span style=\"color: rgb(33, 37, 41); font-family: Roboto; font-size: 12pt;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p><p class=\"MsoNormal\" style=\"color: rgb(0, 0, 0); font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration&nbsp;</span><span style=\"color: rgb(33, 37, 41); font-family: Roboto; font-size: 12pt;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p><p class=\"MsoNormal\" style=\"color: rgb(0, 0, 0); font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration&nbsp;</span><span style=\"color: rgb(33, 37, 41); font-family: Roboto; font-size: 12pt;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p><p class=\"MsoNormal\" style=\"color: rgb(0, 0, 0); font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration&nbsp;</span><span style=\"color: rgb(33, 37, 41); font-family: Roboto; font-size: 12pt;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p><p class=\"MsoNormal\" style=\"color: rgb(0, 0, 0); font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration&nbsp;</span></p>\n                                        </td>\n                                        \n                                      </tr>            \n                                </tbody>\n                                                                                                                        ', '\n                          \n                                                <thead>\n                            <tr>\n                                <th>Stage#</th>\n                                <th>1</th>\n                                <th>2</th>\n                                <th>3</th>\n                                <th>4</th>\n                                <th>5</th>\n                                <th>6</th>\n                                <th>7</th>\n                                <th>8</th>\n                                <th>9</th>\n                                <th>10</th>\n                            </tr>\n                             <!-- tr -->\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <th>Action</th>\n                                <th>How do they determine need, and what is their catalyst to take action?</th>\n                                <th>How do they find aout about their options?</th>\n                                <th>How do they analyze their options?</th>\n                                <th>how do they acquire your products?</th>\n                                <th>How do they pay for your products?</th>\n                                <th>How they install or set up your products?</th>\n                                <th>How do they use and get value out of your products?</th>\n                                <th>How to they determine the value they gain from your products?</th>\n                                <th>How do they buy more of your products?</th>\n                                <th>How do they tell others about your products?</th>\n                            </tr><!--End tr -->\n                            <!-- tr -->\n                            <tr>\n                                <th>Who is involved</th>\n                                <td contenteditable=\"true\">asdasdasd</td>\n                                <td contenteditable=\"true\">asdasd</td>\n                                <td contenteditable=\"true\"><p class=\"MsoNormal\" style=\"color: rgb(0, 0, 0); font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; margin-bottom: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"color: rgb(33, 37, 41); font-size: 12px; text-align: start;\">sadsad</span><br></p></td>\n                                <td contenteditable=\"true\">sadsad</td>\n                                <td contenteditable=\"true\">sad</td>\n                                <td contenteditable=\"true\">asdasdas</td>\n                                <td contenteditable=\"true\">dsad</td>\n                                <td contenteditable=\"true\">sadsad</td>\n                                <td contenteditable=\"true\">asdsa</td>\n                                <td contenteditable=\"true\">dsad</td>\n                               \n                            </tr><!--End tr -->\n                            <!-- tr -->\n                            <tr>\n                                <th>When</th>\n                                <td contenteditable=\"true\">asd</td>\n                                <td contenteditable=\"true\">dsadsa</td>\n                                <td contenteditable=\"true\">das</td>\n                                <td contenteditable=\"true\">das</td>\n                                <td contenteditable=\"true\">sadsa</td>\n                                <td contenteditable=\"true\">dasdsa</td>\n                                <td contenteditable=\"true\">dsadsa</td>\n                                <td contenteditable=\"true\">dsad</td>\n                                <td contenteditable=\"true\">asdas</td>\n                                <td contenteditable=\"true\">asdas</td>\n\n                            </tr><!--End tr -->\n                            <!-- tr -->\n                            <tr>\n                                <th>Where</th>\n                                <td contenteditable=\"true\">asd</td>\n                                <td contenteditable=\"true\">das</td>\n                                <td contenteditable=\"true\">sadsa</td>\n                                <td contenteditable=\"true\">das</td>\n                                <td contenteditable=\"true\">sad</td>\n                                <td contenteditable=\"true\">das</td>\n                                <td contenteditable=\"true\">asdsa</td>\n                                <td contenteditable=\"true\">sad</td>\n                                <td contenteditable=\"true\">sad</td>\n                                <td contenteditable=\"true\">dasd</td>\n\n\n                            </tr><!--End tr -->\n                            <tr>\n                                <th>How</th>\n                                <td contenteditable=\"true\">sad</td>\n                                <td contenteditable=\"true\">dasd</td>\n                                <td contenteditable=\"true\">asd</td>\n                                <td contenteditable=\"true\">dasdasd</td>\n                                <td contenteditable=\"true\">sad</td>\n                                <td contenteditable=\"true\">dasd</td>\n                                <td contenteditable=\"true\">dsad</td>\n                                <td contenteditable=\"true\">asdsadsa</td>\n                                <td contenteditable=\"true\">dasd</td>\n                                <td contenteditable=\"true\">asdas</td>\n\n                            </tr><!--End tr -->\n                        </tbody>\n                                                                                        ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `market_positionning`
--

CREATE TABLE `market_positionning` (
  `market_position_id` bigint(20) NOT NULL,
  `entre_id` bigint(20) NOT NULL,
  `market_positon_file` text DEFAULT NULL,
  `the_market` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `market_positionning`
--

INSERT INTO `market_positionning` (`market_position_id`, `entre_id`, `market_positon_file`, `the_market`) VALUES
(36, 24, 'public/market_position/B6vaQ0lX9EChrsJc3IJLQF0oUeA3EnuWyxr3FMlw.pdf', '<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>\n<p>Dear Musayeb afzali,</p>\n<p>&nbsp;</p>\n<p>Welcome to the Sarmayah.com community of entrepreneurs and businesses, thank you for signing up!<br /><br />As the first step of completing your registration process, please verify your email using the link sent to your inbox.<br /><br />To make sure you received the email, along with your inbox, please also check your spam folder.<br /><br />If you haven&rsquo;t received any email, please contact our support team at support@sarmayah.com or call us: +93 792 991 991</p>\n<p><br /><br />Regards,<br />Sarmayah, Inc</p>'),
(37, 25, 'public/market_position/RpSBcP8raxdSyS3mDyjJO8FDHCdjGcX6ZWGdYA0v.pdf', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">If you did not receive an email, please contact support@sarmayah.com.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Regards,</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Sarmayah LLC</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p>v<span style=\"color: #212529; font-family: Roboto; font-size: 12pt; text-align: justify;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact support@sarmayah.com.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Regards,</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Sarmayah LLC</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span><span style=\"color: #212529; font-family: Roboto; font-size: 12pt; text-align: justify;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">If you did not receive an email, please contact support@sarmayah.com.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Regards,</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12pt; font-family: Roboto; color: #212529; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Sarmayah LLC</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">To complete your registration process, please verify your account through the link sent to your email inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Kindly check your spam folder in case the email is not found in your inbox.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-align: justify; line-height: normal; background: white;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">If you did not receive an email, please contact support@sarmayah.com.</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Regards,</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: Roboto; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #212529; background: white;\">Sarmayah LLC</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><o:p></o:p></span></p>'),
(62, 26, 'public/market_position/9C43SPSpy1p1VVHxvQDkM1yC22Y6gAwMthuWaRQm.pdf', '<p>Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.Thank you for signing up and welcome to Sarmayah.com&rsquo;s community of entrepreneurs and businesses.To complete your registration process, please verify your account through the link sent to your email inbox.Kindly check your spam folder in case the email is not found in your inbox.If you did not receive an email, please contact support@sarmayah.com.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_10_02_031444_create_entrepreneurs_catagories_table', 1),
(7, '2020_10_02_033421_create_sessions_table', 1),
(8, '2020_10_02_112052_create_entrepreneurs_table', 1),
(9, '2020_10_14_094300_create_investors_table', 2),
(10, '2020_10_18_050922_create_sectors_table', 3),
(11, '2020_10_25_182219_create_investment_processes_table', 4),
(12, '2020_10_26_121505_create_notifications_table', 5),
(13, '2020_11_12_110850_create_entre_financial_table', 6),
(14, '2020_11_12_114406_create_entre_financial_table', 7),
(15, '2020_11_24_142023_create_page_contents_table', 8),
(16, '2021_01_20_092520_create_admin_notifications_table', 9),
(17, '2021_01_29_215720_create_notifications_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `not_id` bigint(20) UNSIGNED NOT NULL,
  `investor_id` bigint(20) DEFAULT NULL,
  `entreprenure_id` bigint(20) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `html_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`not_id`, `investor_id`, `entreprenure_id`, `description`, `html_description`, `created_at`, `status`, `updated_at`) VALUES
(117, NULL, 26, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, NULL, '1', NULL),
(118, NULL, 26, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, NULL, '1', NULL),
(119, NULL, 1, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, NULL, NULL, NULL),
(120, NULL, 1, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, NULL, NULL, NULL),
(121, NULL, 1, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, NULL, NULL, NULL),
(122, NULL, 26, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, NULL, '1', NULL),
(123, 2, NULL, 'Thank you for your interest to invest in the selected business\n                    Your request registered successfully please wait for the system to match \n                    You with selected entrepreneur.', NULL, '2021-01-29 19:12:29', '1', '2021-01-29 19:12:29'),
(124, 2, NULL, 'Thank you for your interest to invest in the selected business\n                    Your request registered successfully please wait for the system to match \n                    You with selected entrepreneur.', NULL, '2021-01-30 06:50:07', '1', '2021-01-30 06:50:07'),
(125, NULL, 24, 'Thank you for being an active user of sarmayah.com\n                We glade to inform you a potential investor has showed interested to invest on your business \n                please wait for an email and system notification to match you with the interested investor', NULL, '2021-01-30 06:50:18', '1', '2021-01-30 06:50:18'),
(126, NULL, 26, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, '2021-01-30 06:52:30', '1', '2021-01-30 06:52:30'),
(127, NULL, 26, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, '2021-01-30 06:52:31', '1', '2021-01-30 06:52:31'),
(128, NULL, 26, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, '2021-01-30 06:54:04', '1', '2021-01-30 06:54:04'),
(129, NULL, 26, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, '2021-01-30 06:54:05', '1', '2021-01-30 06:54:05'),
(134, NULL, 26, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ', NULL, NULL, '1', NULL),
(135, NULL, 26, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ', NULL, NULL, '1', NULL),
(137, NULL, 25, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, '2021-01-30 10:17:38', '1', '2021-01-30 10:17:38'),
(138, 2, NULL, 'Your account is approved', NULL, '2021-01-30 10:32:17', '1', '2021-01-30 10:32:17'),
(139, 2, NULL, 'Your account is approved', NULL, '2021-01-30 10:32:21', '1', '2021-01-30 10:32:21'),
(140, 2, NULL, 'Your account is approved', NULL, '2021-01-30 10:32:25', '1', '2021-01-30 10:32:25'),
(141, 2, NULL, 'Your account is approved', NULL, '2021-01-30 10:36:40', '1', '2021-01-30 10:36:40'),
(142, 2, NULL, 'Your account is approved', NULL, '2021-01-30 10:36:56', '1', '2021-01-30 10:36:56'),
(143, 2, NULL, 'Your account is approved', NULL, '2021-01-30 10:36:59', '1', '2021-01-30 10:36:59'),
(161, NULL, 25, 'Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.', NULL, '2021-01-30 12:06:51', NULL, '2021-01-30 12:06:51'),
(162, NULL, 24, 'Your account is approved', NULL, '2021-01-31 12:00:28', '1', '2021-01-31 12:00:28'),
(163, NULL, 24, 'Your account is approved', NULL, '2021-01-31 12:01:30', '1', '2021-01-31 12:01:30'),
(164, NULL, 24, 'Your account is approved', NULL, '2021-01-31 12:01:44', '1', '2021-01-31 12:01:44'),
(165, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:05:07', '1', '2021-01-31 12:05:07'),
(166, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:05:38', '1', '2021-01-31 12:05:38'),
(167, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:05:42', '1', '2021-01-31 12:05:42'),
(168, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:05:45', '1', '2021-01-31 12:05:45'),
(169, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:05:49', '1', '2021-01-31 12:05:49'),
(170, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:05:53', '1', '2021-01-31 12:05:53'),
(171, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:05:58', '1', '2021-01-31 12:05:58'),
(172, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:01', '1', '2021-01-31 12:06:01'),
(173, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:05', '1', '2021-01-31 12:06:05'),
(174, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:09', '1', '2021-01-31 12:06:09'),
(175, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:13', '1', '2021-01-31 12:06:13'),
(176, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:16', '1', '2021-01-31 12:06:16'),
(177, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:20', '1', '2021-01-31 12:06:20'),
(178, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:23', '1', '2021-01-31 12:06:23'),
(179, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:27', '1', '2021-01-31 12:06:27'),
(180, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:31', '1', '2021-01-31 12:06:31'),
(181, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:34', '1', '2021-01-31 12:06:34'),
(182, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:35', '1', '2021-01-31 12:06:35'),
(183, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:39', '1', '2021-01-31 12:06:39'),
(184, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:44', '1', '2021-01-31 12:06:44'),
(185, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:48', '1', '2021-01-31 12:06:48'),
(186, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:52', '1', '2021-01-31 12:06:52'),
(187, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:06:56', '1', '2021-01-31 12:06:56'),
(188, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:07:00', '1', '2021-01-31 12:07:00'),
(189, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:07:04', '1', '2021-01-31 12:07:04'),
(190, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:07:08', '1', '2021-01-31 12:07:08'),
(191, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:07:12', '1', '2021-01-31 12:07:12'),
(192, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:07:17', '1', '2021-01-31 12:07:17'),
(193, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:07:34', '1', '2021-01-31 12:07:34'),
(194, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:07:36', '1', '2021-01-31 12:07:36'),
(195, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:08:31', '1', '2021-01-31 12:08:31'),
(196, NULL, 26, 'Your account is approved', NULL, '2021-01-31 12:30:51', NULL, '2021-01-31 12:30:51'),
(197, NULL, 24, 'Your account is approved', NULL, '2021-01-31 12:36:30', '1', '2021-01-31 12:36:30'),
(198, NULL, 24, 'Your account is approved', NULL, '2021-01-31 12:36:33', '1', '2021-01-31 12:36:33'),
(199, NULL, 24, 'Your account is approved', NULL, '2021-01-31 12:36:35', '1', '2021-01-31 12:36:35'),
(200, NULL, 25, 'Your account is approved', NULL, '2021-01-31 12:36:52', NULL, '2021-01-31 12:36:52'),
(201, NULL, 25, 'Your busniess catagory has changed', NULL, '2021-01-31 12:37:04', NULL, '2021-01-31 12:37:04'),
(202, NULL, 25, 'Your busniess catagory has changed', NULL, '2021-01-31 12:37:07', NULL, '2021-01-31 12:37:07'),
(203, NULL, 24, 'Your busniess catagory has changed', NULL, '2021-01-31 12:54:38', '1', '2021-01-31 12:54:38'),
(204, NULL, 24, 'Your account is approved', NULL, '2021-02-03 11:22:14', '1', '2021-02-03 11:22:14'),
(205, NULL, 26, 'Your account is approved', NULL, '2021-02-06 09:42:10', NULL, '2021-02-06 09:42:10'),
(206, NULL, 25, 'Your account is approved', NULL, '2021-02-06 13:16:10', NULL, '2021-02-06 13:16:10'),
(207, 2, NULL, '', '<p>Dear <b>Musayeb afzali, </b> \r\n                 <br>Thanks for your interest to invest.<br> This link contains the selected entrepreneur\'s full information including contact details.<br>\r\n                    <a href=http://localhost/Sarmaya.com/matched-business>Link</a>\r\n                    </p>', '2021-03-29 13:45:46', NULL, '2021-03-29 13:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `notificationss`
--

CREATE TABLE `notificationss` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `page_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`page_id`, `page_name`, `page_content`, `autor`, `created_at`, `updated_at`) VALUES
(1, 'Investors Relationship', '<h3><span style=\"color: rgb(38, 50, 56); font-family: Roboto, sans-serif; font-size: 13px;\">We are actively looking to expand Sarmayah’s operation locally and globally, if you are interested in investing on the Sarmayah.com platform itself, please contact&nbsp;</span><a rel=\"nofollow noreferrer noopener\" target=\"_blank\" href=\"mailto:invest@sarmayah.com\" class=\"Xx\" tabindex=\"-1\" dir=\"ltr\" data-display=\"invest@sarmayah.com\" data-sanitized=\"mailto:invest@sarmayah.com\" style=\"background-color: rgb(255, 255, 255); unicode-bidi: isolate; color: rgb(38, 50, 56); font-family: Roboto, sans-serif; font-size: 13px;\">invest@sarmayah.com</a><span style=\"color: rgb(38, 50, 56); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;and submit your expression of interest.&nbsp;</span><br></h3>', 1, '2021-01-26 22:51:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('musayeb.afzali1998@gmail.comm', '$2y$10$KOSq3a8SYhappGbBMuJnFe1rmup4fjsEDjTLlvGjN1rabVHazRu.W', '2020-11-20 08:21:31'),
('Musayeb.afzali1998@gmail.com', '$2y$10$E4bL8hq3nXryiN4CBcirm./yYsqPOwvB.dZNSe1CxGCh8cfvtMvVW', '2021-02-03 04:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popular_serach`
--

CREATE TABLE `popular_serach` (
  `popular_id` int(11) NOT NULL,
  `sector_id` bigint(100) NOT NULL,
  `value` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `popular_serach`
--

INSERT INTO `popular_serach` (`popular_id`, `sector_id`, `value`) VALUES
(1, 16, 7);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `progress_id` bigint(10) NOT NULL,
  `entre_id` bigint(20) NOT NULL,
  `team_p` int(10) DEFAULT NULL,
  `first_info_p` int(10) DEFAULT NULL,
  `elavator_p` int(10) DEFAULT NULL,
  `solution_p` int(10) DEFAULT NULL,
  `problem_p` int(10) DEFAULT NULL,
  `model_p` int(10) DEFAULT NULL,
  `position_file_p` int(10) DEFAULT NULL,
  `position_file_market_p` int(10) DEFAULT NULL,
  `trends_p` int(10) DEFAULT NULL,
  `risk_p` int(10) DEFAULT NULL,
  `advan_p` int(10) DEFAULT NULL,
  `invest_terms_p` int(10) DEFAULT NULL,
  `invest_plan_p` int(10) DEFAULT NULL,
  `breakdown_p` int(10) DEFAULT NULL,
  `implement_p` int(10) DEFAULT NULL,
  `viable_product_p` int(10) DEFAULT NULL,
  `high_level_p` int(10) DEFAULT NULL,
  `customer_need_p` int(10) DEFAULT NULL,
  `product_plan_p` int(10) DEFAULT NULL,
  `calculate_cost_p` int(10) DEFAULT NULL,
  `segmentation_p` int(10) DEFAULT NULL,
  `beachhead_q_p` int(10) DEFAULT NULL,
  `beachhead_sum_p` int(10) DEFAULT NULL,
  `available_market_p` int(10) DEFAULT NULL,
  `life_cycle_p` int(10) DEFAULT NULL,
  `expansion_plan_p` int(10) DEFAULT NULL,
  `executive_summary_p` int(10) DEFAULT NULL,
  `target_market_p` int(10) DEFAULT NULL,
  `market_study_p` int(10) DEFAULT NULL,
  `product_upgrading_p` int(10) DEFAULT NULL,
  `required_technical_p` int(10) DEFAULT NULL,
  `f_1_p` int(10) DEFAULT NULL,
  `f_2_p` int(10) DEFAULT NULL,
  `f_3_p` int(10) DEFAULT NULL,
  `f_4_p` int(10) DEFAULT NULL,
  `logo_p` int(10) DEFAULT NULL,
  `deck_p` int(10) DEFAULT NULL,
  `business_profile_p` int(10) DEFAULT NULL,
  `plan_p` int(10) DEFAULT NULL,
  `license_p` int(10) DEFAULT NULL,
  `tazkira_p` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reminder_email_log`
--

CREATE TABLE `reminder_email_log` (
  `reminer_id` bigint(20) NOT NULL,
  `total_business` int(20) NOT NULL,
  `author` int(10) NOT NULL,
  `date` date NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reminder_email_log`
--

INSERT INTO `reminder_email_log` (`reminer_id`, `total_business`, `author`, `date`, `date_time`) VALUES
(3, 1, 1, '2021-02-15', '2021-02-15 06:22:28'),
(4, 2, 1, '2021-02-15', '2021-02-15 06:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `saved_business`
--

CREATE TABLE `saved_business` (
  `saved_id` bigint(30) NOT NULL,
  `entre_id` bigint(20) NOT NULL,
  `investor_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saved_business`
--

INSERT INTO `saved_business` (`saved_id`, `entre_id`, `investor_id`) VALUES
(2, 17, 2),
(4, 21, 2),
(5, 22, 2),
(7, 24, 2),
(12, 25, 2),
(13, 26, 2);

-- --------------------------------------------------------

--
-- Table structure for table `saved_business_log`
--

CREATE TABLE `saved_business_log` (
  `saved_log_id` bigint(30) NOT NULL,
  `entre_id` bigint(30) NOT NULL,
  `investor_id` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saved_business_log`
--

INSERT INTO `saved_business_log` (`saved_log_id`, `entre_id`, `investor_id`) VALUES
(50, 17, 2),
(51, 21, 2),
(52, 22, 2),
(53, 24, 2),
(54, 25, 2),
(55, 26, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `sector_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` int(10) NOT NULL,
  `sector_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sector_photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`sector_id`, `slug`, `autor`, `sector_name`, `sector_photo`, `created_at`, `updated_at`) VALUES
(7, 'economic', 1, 'Economic', 'public/sectors_photo/nzFfEujCBW70etbUy9DK19mdDnI7aERJAba8pQbh.png', '2020-11-01', '2021-01-29 19:30:00'),
(8, 'ict', 1, 'ICT', 'public/sectors_photo/yA2KnYU6ZI1NptrrkPb3azcfA2zB2whrmcdgmsxJ.png', '2020-12-28', '2021-01-29 19:30:00'),
(9, 'transport', 1, 'Transport', 'public/sectors_photo/QpnYI8ZmaOzLkHHMOTVxWLRmZordail9j6CcmN3f.png', '2020-12-28', '2021-01-29 19:30:00'),
(14, 'shopping', 1, 'shopping', 'public/sectors_photo/6rD6hys38LE1AyaD30OOBw147DUqJUQtbMK2xKaa.png', '2020-12-29', '2021-01-29 19:30:00'),
(15, 'agriculture', 1, 'Agriculture', 'public/sectors_photo/KrST5txEFOZipx9oaVvNqziRl9qA8qqq0evEIZZg.png', '2021-01-13', '2021-01-29 19:30:00'),
(16, 'information-and-communication-technology', 1, 'Information and Communication Technology', 'public/sectors_photo/VHHkWTIUqzbuOfJJxh94Kq1klogpzFuwz6u0Qhat.png', '2021-01-29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('csPFh0vYr23nzRH9AZKAMoxngO5LEqGHuywQulMy', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZW93dHVnRzZlT3FxaW4yMm1TN2tZVVRWVTh6aDJ2dFhEQUJ0T0JhNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly9sb2NhbGhvc3QvU2FybWF5YS5jb20vZW50ZXJwcmVuZXVyX3JlZ2lzdHJhdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1627842089),
('ppLPq8eT3Xy92YRlBlWEFr7t4StPveAYayGmFPOE', NULL, '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnVCUUdPRTlFZlRpR3RyQ2FsQmNBcDlHMkN3VFFEcEx2SnpIdHJ4MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly9sb2NhbGhvc3QvU2FybWF5YS5jb20vZW50ZXJwcmVuZXVyX3JlZ2lzdHJhdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1637340979),
('zUPT9ejwtrHXDFwmutvYbycvzoWCcBKPLTB45qFE', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMkpIbXBvMkxZV2EwQldGa0daVGlVcDYxczE5M3RFVmJKY0JGNkFJdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvU2FybWF5YS5jb20vYnVzaW5lc3NlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1638872243);

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `team_id` bigint(20) NOT NULL,
  `entre_id` bigint(20) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `position` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`team_id`, `entre_id`, `full_name`, `position`, `summary`, `photo`) VALUES
(3, 21, 'afzali musayeb', 'Founder', '<p>testskdksadmsakdsadsadlksad</p>', 'public/members_photo/kZ7UIRZ9ZgUvsy8M7fF2z4OqbsM5uCS89VoBTfEM.jpeg'),
(5, 24, 'afzali musayeb', 'Founder', '<p>x</p>', 'public/members_photo/0zvktUSQxtoQWfYqU9D0KDRVbZecm99d2koVN5o2.jpeg'),
(6, 25, 'afzali musayeb', 'Co-Founder', '<p>saldsad</p>', 'public/members_photo/IWURD2Cc81ddMfFyT8vOBYjjIyyaqwl9xjsCPi2Y.jpeg'),
(8, 23, 'afzali musayeb', 'Founder', '<p>dsadasddsadasd</p>\r\n<p>asd</p>', 'public/members_photo/2eDgvBtBYsIJq8ePtdU6CUm9JVGzINmFsRwbhPOi.jpeg'),
(9, 26, 'Afzali Musayeb', 'Co-Founder', '<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; font-size: 16px; line-height: 24px; text-align: justify;\">Even though the Arab-Israeli conflict is a major motif in this hostile discourse, there is no saying whether a settling of the conflict would open Arab public discourse to the international understanding of the Holocaust and its universal messages of tolerance and anti-racism. Howeve</p>', 'public/members_photo/j9kmiZf7SF702lnoKCVoJZ62XU5xpgZnBTmTuZxT.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Musayeb jan', 'Musayeb.afzali1998@gmail.com', NULL, '$2y$10$QuwGwhu4csmVbujP/gnIPOoCXbEd2PrEaEk.95S7ReMhnc/wr326G', NULL, NULL, '', NULL, 'public/usersProfile/bb41yXLPL2dKnItB54u4XUtoOof7rWFhEur2SwDb.png', '2020-10-15 00:53:44', '2021-02-04 05:43:23'),
(2, 'salaam jan', 'musayeb.afzali1998@gmail.comm', NULL, '', NULL, NULL, NULL, NULL, 'public/usersProfile/12vNnOkDGijN48mtXTMNBioPQDo9KOs7pnGKvA4v.png', '2020-10-20 05:54:04', '2020-10-20 07:26:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `business_view`
--
ALTER TABLE `business_view`
  ADD PRIMARY KEY (`view_id`);

--
-- Indexes for table `busniess_model_convas`
--
ALTER TABLE `busniess_model_convas`
  ADD PRIMARY KEY (`busniess_c_id`);

--
-- Indexes for table `busniess_trends`
--
ALTER TABLE `busniess_trends`
  ADD PRIMARY KEY (`busniess_trends_id`);

--
-- Indexes for table `cancel_request`
--
ALTER TABLE `cancel_request`
  ADD PRIMARY KEY (`cancel_id`);

--
-- Indexes for table `compititive_advantage`
--
ALTER TABLE `compititive_advantage`
  ADD PRIMARY KEY (`advantage_id`);

--
-- Indexes for table `country_names`
--
ALTER TABLE `country_names`
  ADD PRIMARY KEY (`id_country`);

--
-- Indexes for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  ADD PRIMARY KEY (`entrepreneurs_id`),
  ADD UNIQUE KEY `entre_email` (`entre_email`),
  ADD UNIQUE KEY `entre_email_2` (`entre_email`);

--
-- Indexes for table `entre_delete`
--
ALTER TABLE `entre_delete`
  ADD PRIMARY KEY (`entrepreneurs_id`),
  ADD UNIQUE KEY `entre_email` (`entre_email`),
  ADD UNIQUE KEY `entre_email_2` (`entre_email`);

--
-- Indexes for table `entre_financial`
--
ALTER TABLE `entre_financial`
  ADD PRIMARY KEY (`entre_financial_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_busniess`
--
ALTER TABLE `feature_busniess`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `implement_phase`
--
ALTER TABLE `implement_phase`
  ADD PRIMARY KEY (`implement_id`);

--
-- Indexes for table `investment_manage`
--
ALTER TABLE `investment_manage`
  ADD PRIMARY KEY (`manage_id`);

--
-- Indexes for table `investment_processes`
--
ALTER TABLE `investment_processes`
  ADD PRIMARY KEY (`invest_process_id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`investor_id`);

--
-- Indexes for table `invite_friend`
--
ALTER TABLE `invite_friend`
  ADD PRIMARY KEY (`invite_id`);

--
-- Indexes for table `ip_block`
--
ALTER TABLE `ip_block`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`market_id`);

--
-- Indexes for table `market_positionning`
--
ALTER TABLE `market_positionning`
  ADD PRIMARY KEY (`market_position_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`not_id`);

--
-- Indexes for table `notificationss`
--
ALTER TABLE `notificationss`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notificationss_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `popular_serach`
--
ALTER TABLE `popular_serach`
  ADD PRIMARY KEY (`popular_id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `reminder_email_log`
--
ALTER TABLE `reminder_email_log`
  ADD PRIMARY KEY (`reminer_id`);

--
-- Indexes for table `saved_business`
--
ALTER TABLE `saved_business`
  ADD PRIMARY KEY (`saved_id`);

--
-- Indexes for table `saved_business_log`
--
ALTER TABLE `saved_business_log`
  ADD PRIMARY KEY (`saved_log_id`),
  ADD UNIQUE KEY `entre_id` (`entre_id`,`investor_id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`sector_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `notif_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `business_view`
--
ALTER TABLE `business_view`
  MODIFY `view_id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `busniess_model_convas`
--
ALTER TABLE `busniess_model_convas`
  MODIFY `busniess_c_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `busniess_trends`
--
ALTER TABLE `busniess_trends`
  MODIFY `busniess_trends_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `cancel_request`
--
ALTER TABLE `cancel_request`
  MODIFY `cancel_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `compititive_advantage`
--
ALTER TABLE `compititive_advantage`
  MODIFY `advantage_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `country_names`
--
ALTER TABLE `country_names`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  MODIFY `entrepreneurs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `entre_delete`
--
ALTER TABLE `entre_delete`
  MODIFY `entrepreneurs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entre_financial`
--
ALTER TABLE `entre_financial`
  MODIFY `entre_financial_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_busniess`
--
ALTER TABLE `feature_busniess`
  MODIFY `feature_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `implement_phase`
--
ALTER TABLE `implement_phase`
  MODIFY `implement_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `investment_manage`
--
ALTER TABLE `investment_manage`
  MODIFY `manage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `investment_processes`
--
ALTER TABLE `investment_processes`
  MODIFY `invest_process_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `investor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invite_friend`
--
ALTER TABLE `invite_friend`
  MODIFY `invite_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ip_block`
--
ALTER TABLE `ip_block`
  MODIFY `block_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `market_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `market_positionning`
--
ALTER TABLE `market_positionning`
  MODIFY `market_position_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `not_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popular_serach`
--
ALTER TABLE `popular_serach`
  MODIFY `popular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `progress_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reminder_email_log`
--
ALTER TABLE `reminder_email_log`
  MODIFY `reminer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saved_business`
--
ALTER TABLE `saved_business`
  MODIFY `saved_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `saved_business_log`
--
ALTER TABLE `saved_business_log`
  MODIFY `saved_log_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `sector_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `team_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
