-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2022 at 04:25 AM
-- Server version: 5.7.37
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devrath_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title_one` varchar(255) NOT NULL,
  `content_one` mediumtext NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `title_two` varchar(255) NOT NULL,
  `content_two` mediumtext NOT NULL,
  `file_path_two` varchar(255) NOT NULL,
  `page_breadcrumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title_one`, `content_one`, `file_path`, `title_two`, `content_two`, `file_path_two`, `page_breadcrumb`) VALUES
(1, 'About Devrath', '<p style=\"text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"line-height:115%\">Organize your wedding event and make it memorable by exchanging wedding vows at our resort. We offer majestic and splendid weddings framed by our expert staff. &nbsp; Devrath &quot;The Big Bite&quot; &nbsp;expanded its horizon into a banquet hall along with a restaurant, it starts organizing weddings and other events in the banquet hall by endeavoring hard to make recognition in the realm of hospitality. &nbsp; It started its journey as a restaurant and by acquiring, the experience of one year it stepped into the niche of the banquet hall.<br />\nDevrath is a banquet hall that has the mission of changing the vision of people into reality.</span></span></p>\n', 'c1dd6-img_0682.jpg', ' Why Guest Choose Devrath ?', '<p style=\"margin-bottom: 13px; text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"line-height:115%\">You will have plenty of space to host your wedding, reception, sangeet, mehndi, Haldi, and engagement here. The staff is available for overnight functions and make all the arrangements according to your expectations. &nbsp;We have staff that is professionals and skilled in their relative realm. They can implement well according to your ideas and expectations The Food is tempting and give satisfaction to your palate. You can exhilarate the guests with flavorful culinary delights prepared by our expert master chefs. The host of the event doesn&#39;t need to take the stress of any kind of their guests who are coming from far away, this place provides the feeling of comfort like home.<br />\nThis lovely wedding venue is located very close to the highway in Meerut It is one of the leading luxury resorts in Meerut. It encompasses the accommodation with the beautiful ambiance of splendid interior and heritage appearance of the royal palace. Our resort is the personification of royal hospitality, sophistication, and exquisite aspect of comfort. We orchestrate the event by minutely considering all the elements and endeavor to replenish it with all the flavors.</span></span></p>\n', '093ae-img_0616.jpeg', '058f0-gallery.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banquet`
--

CREATE TABLE `banquet` (
  `id` int(11) NOT NULL,
  `title_one` varchar(255) NOT NULL,
  `content_one` text NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `title_two` varchar(255) NOT NULL,
  `content_two` text NOT NULL,
  `file_path_two` varchar(255) NOT NULL,
  `contact_background` varchar(255) NOT NULL,
  `whatsapp_no` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `page_breadcrumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banquet`
--

INSERT INTO `banquet` (`id`, `title_one`, `content_one`, `file_path`, `title_two`, `content_two`, `file_path_two`, `contact_background`, `whatsapp_no`, `mobile_number`, `page_breadcrumb`) VALUES
(1, 'About Banquet', '<p style=\"margin-bottom: 13px; text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span sans-serif=\"\" style=\"font-family:Calibri,\"><span style=\"background:white\"><span style=\"color:#272727\">Devrath, &nbsp;banquet hall is located in the city of Meerut. It is an epic of aesthetic beauty which possesses the intricate architecture and decor enlightened by the ancient dynasty and royal essence of yore. Devrath banquet hall is an embodiment of the rich culture, history, and grandeur of the heritage look. This resort is an extraordinary combination of rich traditional architecture and heritage look with various amenities. Its oeuvre in the domain of hospitality Offers the best services in the entire state, The Big Bite is acclaimed for its hospitality business. It appears majestic due to its heritage look and offers a panoramic view from every single window and balcony of the hotel. You will get the experience that will never diminish but always nourish in the mind whenever you recall those moments. The memories you acquire give you the most eternal and beautiful experience ever.&nbsp;</span></span></span></span></span></p>\n', '05865-img_8486.jpeg', 'Banquet Hall', '<p style=\"margin-bottom: 8px; text-align: justify;\">Since it is quite precisely the personification of splendor, Devrath Banquet Hall is the perfect destination wedding venue. It&#39;s a way of welcoming guests with warm maneuver, &nbsp;won&#39;t be able to resist you to consider it for any event or wedding occasion in the lap of luxury. The hotel is adorned with green carpets of lawn all around making the area spacious which facilitates you to host outdoor functions grandly in an open sky and that will leave you utterly spellbound. &nbsp;The spaces are of large capacities and can hold more than a thousand guests.</p>\n', 'e35ea-img_0816.jpeg', '', '+91 9876543210', '+91 9876543210', '4dbfb-banquets.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banquet_gallery`
--

CREATE TABLE `banquet_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banquet_gallery`
--

INSERT INTO `banquet_gallery` (`id`, `title`, `description`, `file_path`, `class`, `sort`) VALUES
(11, 'Banquet', 'Banquet', '24031-img_0824.jpeg', 'Banquet', 2),
(12, 'Banquet', 'Banquet', '2f04d-img_0827.jpeg', 'Banquet', 3),
(13, 'Banquet', 'Banquet', '70d5d-img_0832.jpeg', 'Banquet', 4),
(14, 'Banquet', 'Banquet', '3102d-img_0829.jpeg', 'Banquet', 5),
(15, 'Banquet', 'Banquet', '3c2c4-img_8372.jpeg', 'Banquet', 6),
(16, 'Banquet', 'Banquet', '68359-img_8486.jpeg', 'Banquet', 7),
(17, 'Banquet', 'Banquet', '88f5a-img_0597.jpeg', 'Banquet', 1),
(18, 'Banquet', 'Banquet', 'da250-img_0799.jpeg', 'Banquet', 8),
(19, 'Banquet', 'Banquet', '7ef30-img_1282.jpeg', 'Banquet', 9),
(20, 'Banquet', 'Banquet', '64b08-img_1276.jpeg', 'Banquet', 10),
(21, 'Banquet', 'Banquet', 'a9d81-img_1277.jpeg', 'Banquet', 11),
(22, 'Banquet', 'Banquet', 'e9e7d-img_1284.jpeg', 'Banquet', 12),
(23, 'Banquet', 'Banquet', '737ce-img_8372.jpeg', 'Banquet', 13),
(24, 'Banquet', 'Banquet', 'b23b7-img_8382.jpeg', 'Banquet', 14),
(25, 'Banquet', 'Banquet', 'c25d8-img_8385.jpeg', 'Banquet', 15),
(26, 'Banquet', 'Banquet', 'a974a-img_8389.jpeg', 'Banquet', 16),
(27, 'Banquet', 'Banquet', 'd64be-img_8416.jpeg', 'Banquet', 17),
(28, 'Banquet', 'Banquet', 'e9422-img_8427.jpeg', 'Banquet', 18),
(29, 'Banquet', 'Banquet', '3a104-img_8458.jpeg', 'Banquet', 19),
(30, 'Banquet', 'Banquet', '11e1f-img_8482.jpeg', 'Banquet', 20);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `seourl` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `blog_home` varchar(200) NOT NULL,
  `content` mediumtext NOT NULL,
  `metatags` text,
  `type` enum('blog','page') NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `author` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `pid`, `seourl`, `title`, `short`, `file_path`, `blog_home`, `content`, `metatags`, `type`, `status`, `author`, `created`) VALUES
(7, 0, 'appropriately-productize-fully', 'Appropriately productize fully', 'Some quick example text to build on the card title and make up the bulk.', 'c222e-breadcrumb-bg.jpg', 'd9b30-6b281-gallery-img1.jpg', '<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.</p>\n\n<p>&nbsp;</p>\n\n<p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean shorts fixie consequat flexitarian four loko.</p>\n\n<p>&nbsp;</p>\n\n<blockquote>\n<p>To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.</p>\n\n<footer>Amanda Pollock, Google Inc.</footer>\n</blockquote>\n\n<p>&nbsp;</p>\n\n<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', NULL, 'blog', 'active', 'Codewife', '2020-07-11 14:52:49'),
(8, 0, 'quickly-formulate-backend', 'Quickly formulate backend', 'Synergistically engage effective ROI after customer directed partnerships.', 'f118f-breadcrumb-bg.jpg', '152da-7e59f-gallery-img2.jpg', '<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.</p>\n\n<p>&nbsp;</p>\n\n<p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean shorts fixie consequat flexitarian four loko.</p>\n\n<p>&nbsp;</p>\n\n<blockquote>\n<p>To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.</p>\n\n<footer>Amanda Pollock, Google Inc.</footer>\n</blockquote>\n\n<p>&nbsp;</p>\n\n<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>\n\n<p>&nbsp;</p>\n', NULL, 'blog', 'active', 'Codewife', '2020-07-12 13:17:44'),
(10, 0, 'object-communicate-business', 'Object communicate business', 'Provides perfectly stable output even under severe conditions of unbalanced voltage conditions.', 'db1e3-breadcrumb-bg.jpg', '76fea-blog1.jpg', '<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.</p>\n\n<p>&nbsp;</p>\n\n<p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean shorts fixie consequat flexitarian four loko.</p>\n\n<p>&nbsp;</p>\n\n<blockquote>\n<p>To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.</p>\n\n<footer>Amanda Pollock, Google Inc.</footer>\n</blockquote>\n\n<p>&nbsp;</p>\n\n<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>\n', NULL, 'blog', 'active', 'Codewife', '2020-07-12 13:19:01'),
(11, 0, 'about-us', 'About us', 'Interactively develop timely niche markets before extensive imperatives. Professionally repurpose interoperable growth strategies before effective core competencies.', 'cde4d-breadcrumb-bg.jpg', '', '<!-- SUB BANNER -->\n<section class=\"section-sub-banner bg-9\">\n<div class=\"awe-overlay\"><img alt=\"\" src=\"images/about/img-1.jpg\" /></div>\n</section>\n\n<section class=\"section-about\">\n<div class=\"container\">\n<div class=\"about\">\n<div class=\"about-item\">\n<div class=\"text\">\n<h2 class=\"heading\">ABOUT lotus</h2>\n\n<div class=\"desc\">\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <b>The point of using Lorem Ipsum is that it has a more-or-less normal</b> distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing<br />\npackages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>\n&nbsp;\n\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\n</div>\n</div>\n</div>\n<!-- END / ITEM --><!-- ITEM -->\n\n<div class=\"about-item about-right\">\n<div class=\"img\"><img alt=\"\" src=\"images/about/img-1.jpg\" /></div>\n\n<div class=\"text\">\n<h2 class=\"heading\">WHY GUEST CHOOSE lotus HOTEL?</h2>\n\n<div class=\"desc\">\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, <b>sometimes by accident, sometimes on purpose</b> (injected humour and the like).</p>\n</div>\n</div>\n</div>\n<!-- END / ITEM --></div>\n</div>\n</section>\n<!-- END / ABOUT --><!-- HOTEL STATISTICS -->\n\n<section class=\"section-statistics bg-10\">\n<div class=\"awe-overlay\">&nbsp;</div>\n\n<div class=\"container\">\n<div class=\"statistics\">\n<h2 class=\"heading white text-center\">Hotel statistics</h2>\n\n<div class=\"statistics_content\">\n<div class=\"row\"><!-- ITEM -->\n<div class=\"col-xs-6 col-md-3\">\n<div class=\"statistics_item\"><span class=\"count\">768</span> <span>Guest Stay</span></div>\n</div>\n<!-- END ITEM --><!-- ITEM -->\n\n<div class=\"col-xs-6 col-md-3\">\n<div class=\"statistics_item\"><span class=\"count\">632</span> <span>BOOK ROOM</span></div>\n</div>\n<!-- END ITEM --><!-- ITEM -->\n\n<div class=\"col-xs-6 col-md-3\">\n<div class=\"statistics_item\"><span class=\"count\">1024</span> <span>MEMBER STAY</span></div>\n</div>\n<!-- END ITEM --><!-- ITEM -->\n\n<div class=\"col-xs-6 col-md-3\">\n<div class=\"statistics_item\"><span class=\"count\">256</span> <span>MEALS SERVED</span></div>\n</div>\n<!-- END ITEM --></div>\n</div>\n</div>\n</div>\n</section>\n<!-- END / HOTEL STATISTICS --><!-- TEAM -->\n\n<section class=\"section-team\">\n<div class=\"container\">\n<div class=\"team\">\n<h2 class=\"heading text-center\">Team Member</h2>\n\n<p class=\"sub-heading text-center\">Lorem Ipsum is simply dummy text of the printing</p>\n\n<div class=\"team_content\">\n<div class=\"row\"><!-- ITEM -->\n<div class=\"col-xs-6 col-md-3\">\n<div class=\"team_item text-center\">\n<div class=\"img\"><a href=\"\"><img alt=\"\" src=\"images/team/img-1.jpg\" /></a></div>\n\n<div class=\"text\">\n<h2>JESSICA ALBA</h2>\n<span>Manager lotus Hotel</span>\n\n<p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>\n\n<div class=\"team-share\">&nbsp;</div>\n</div>\n</div>\n</div>\n<!-- END / ITEM --><!-- ITEM -->\n\n<div class=\"col-xs-6 col-md-3\">\n<div class=\"team_item text-center\">\n<div class=\"img\"><a href=\"\"><img alt=\"\" src=\"images/team/img-1.jpg\" /></a></div>\n\n<div class=\"text\">\n<h2>Robet WILIAM</h2>\n<span>Founder Hotel</span>\n\n<p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>\n\n<div class=\"team-share\">&nbsp;</div>\n</div>\n</div>\n</div>\n<!-- END / ITEM --><!-- ITEM -->\n\n<div class=\"col-xs-6 col-md-3\">\n<div class=\"team_item text-center\">\n<div class=\"img\"><a href=\"\"><img alt=\"\" src=\"images/team/img-1.jpg\" /></a></div>\n\n<div class=\"text\">\n<h2>Adam</h2>\n<span>Lorem lipsum</span>\n\n<p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>\n\n<div class=\"team-share\">&nbsp;</div>\n</div>\n</div>\n</div>\n<!-- END / ITEM --><!-- ITEM -->\n\n<div class=\"col-xs-6 col-md-3\">\n<div class=\"team_item text-center\">\n<div class=\"img\"><a href=\"\"><img alt=\"\" src=\"images/team/img-1.jpg\" /></a></div>\n\n<div class=\"text\">\n<h2>David Gari</h2>\n<span>Lorem lipsum</span>\n\n<p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>\n\n<div class=\"team-share\">&nbsp;</div>\n</div>\n</div>\n</div>\n<!-- END / ITEM --></div>\n</div>\n</div>\n</div>\n</section>\n<!-- END / TEAM -->', NULL, 'page', 'active', 'Codewife', '2020-07-19 10:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `navid` int(11) DEFAULT NULL,
  `catname` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `flag` enum('1','0') NOT NULL DEFAULT '1',
  `file_path` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contactabout`
--

CREATE TABLE `contactabout` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `map` text NOT NULL,
  `page_breadcrumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactabout`
--

INSERT INTO `contactabout` (`id`, `title`, `content`, `map`, `page_breadcrumb`) VALUES
(1, 'Contact About Section', '<p>Please take a moment to share your need, desire, problem or any information you want from us by completing the below form so that we can refer the right information to you.</p>\n', '<iframe width=\"1920\" height=\"480\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Big%20Bite%20Resort,%20NH-58,%20Meerut%20Bypass%20Rd,%20opposite%20BIT%20college,%20Partapur,%20Meerut,%20Uttar%20Pradesh%20250103&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><\n', '817dc-contact-us.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created`) VALUES
(43, 'Ram', 'er.akshay@gmail.com', '07906409291', 'dsdsd', 'sdsdsd', '2021-12-03 02:36:06'),
(44, 'Akshay Kumar', 'er.akshay@gmail.com', '07906409291', 'M kya batau khud soch lo', 'cssdsd', '2021-12-03 04:29:11'),
(45, 'Akshay Kumar', 'er.akshay@gmail.com', '07906409291', 'M kya batau khud soch lo', 'eefwe', '2021-12-03 05:19:02'),
(46, 'Akshay Kumar', 'er.akshay@gmail.com', '07906409291', 'M kya batau khud soch lo', 'eefwe', '2021-12-03 05:19:08'),
(47, 'Akshay Kumar', 'er.akshay@gmail.com', '07906409291', 'M kya batau khud soch lo', 'eefwe', '2021-12-03 05:19:12'),
(48, 'Akshay Kumar', 'er.akshay@gmail.com', '07906409291', 'M kya batau khud soch loefe', 'frrrfrfr', '2021-12-03 05:20:03'),
(49, 'Akshay Kumar', 'er.akshay@gmail.com', '07906409291', 'M kya batau khud soch lo', 'sfdfhs', '2021-12-03 05:29:08'),
(50, 'Akshay Kumar', 'er.akshay@gmail.com', '07906409291', 'dsdds', 'sdsd', '2021-12-03 05:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `value` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `title`, `value`, `icon`, `sort`) VALUES
(1, 'GUEST STAY', 768, 'icon icon-clock stat-icon', 1),
(2, 'BOOK ROOM', 638, 'icon icon-profile-male stat-icon', 2),
(3, 'MEMBER STAY', 1024, 'icon icon-lightbulb stat-icon', 3),
(4, 'MEALS SERVED', 256, 'icon icon-trophy stat-icon', 4);

-- --------------------------------------------------------

--
-- Table structure for table `counters_background`
--

CREATE TABLE `counters_background` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counters_background`
--

INSERT INTO `counters_background` (`id`, `title`, `file`) VALUES
(1, 'Statics Background', 'bed51-1920x361.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `file`, `sort`) VALUES
(2, 'Free Wifi', '1e22b-free-wifi.png', 1),
(3, 'Car Parking', '1b3e7-car-parking.png', 2),
(4, 'Room Service', '8fc9a-room-service.png', 3),
(5, 'Accomodation', '603ce-accomodation.png', 4),
(7, 'Fine Dining', '9658e-fine-dining.png', 5),
(8, 'Wedding', 'd2de7-wedding.png', 7),
(9, 'D2H', 'a6017-d2h.png', 6),
(10, 'MICE', '4d94c-mice.png', 8);

-- --------------------------------------------------------

--
-- Table structure for table `footer_background`
--

CREATE TABLE `footer_background` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_background`
--

INSERT INTO `footer_background` (`id`, `title`, `file`) VALUES
(1, 'footer', 'e6f8c-1920x361.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `footer_map`
--

CREATE TABLE `footer_map` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `iframe_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_map`
--

INSERT INTO `footer_map` (`id`, `title`, `iframe_text`) VALUES
(1, 'Map', '<p><iframe frameborder=\"0\" height=\"200\" id=\"gmap_canvas\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\" src=\"https://maps.google.com/maps?q=sharda%20palace,%20meerut&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" width=\"250\"></iframe></p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `footer_menu_one`
--

CREATE TABLE `footer_menu_one` (
  `id` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `flag` enum('1','0') NOT NULL DEFAULT '1',
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_menu_one`
--

INSERT INTO `footer_menu_one` (`id`, `catname`, `link`, `flag`, `sort`) VALUES
(1, 'About Us', 'about-us', '1', 1),
(2, 'Gallery', 'gallery', '1', 2),
(3, 'Restaurant ', 'restaurant', '1', 3),
(4, 'Banquets', 'banquets', '1', 4),
(5, 'Rooms', 'rooms', '1', 5),
(7, 'Contact Us', 'contact-us', '1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `catid` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `class` varchar(200) NOT NULL,
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `catid`, `title`, `description`, `file_path`, `class`, `sort`) VALUES
(22, 3, 'Banquets', 'Banquets', '8e249-img_0828.jpeg', '', 1),
(23, 3, 'Banquets', 'Banquets', 'c3ee2-img_0822.jpeg', '', 2),
(24, 3, 'Banquets', 'Banquets', 'd7cce-img_0829.jpeg', '', 3),
(25, 3, 'Banquets', 'Banquets', '27d91-img_0663.jpeg', '', 4),
(26, 3, 'Banquets', 'Banquets', 'db81f-img_0616.jpeg', '', 5),
(27, 1, 'Restaurant', 'Restaurant', 'abb6b-img_0902-min.jpg', '', 11),
(28, 1, 'Restaurant', 'Restaurant', '09000-img_0945-min.jpg', '', 12),
(29, 1, 'Restaurant', 'Restaurant', '4d3f0-img_0979-min.jpg', '', 13),
(30, 1, 'Restaurant', 'Restaurant', 'ea2af-img_0977-min.jpg', '', 14),
(31, 1, 'Restaurant', 'Restaurant', '4ffec-img_1047-min.jpg', '', 15),
(32, 2, 'Rooms', 'Rooms', '4603d-img_0695-min.jpg', '', 16),
(33, 2, 'Rooms', 'Rooms', 'dda54-img_0702-min.jpg', '', 17),
(34, 3, 'Banquets', 'Banquets', '7e3c5-img_0669.jpeg', '', 6),
(35, 3, 'Banquets', 'Banquets', 'af893-img_0799.jpeg', '', 7),
(36, 3, 'Banquets', 'Banquets', 'b8a0c-img_8382.jpeg', '', 8),
(37, 3, 'Banquets', 'Banquets', 'b4322-img_8486.jpeg', '', 9),
(38, 1, 'Restaurant', 'Restaurant', '4facd-img_1017.jpeg', '', 10),
(39, 1, 'Restaurant', 'Restaurant', 'b3b0f-img_1015.jpeg', '', 11),
(40, 2, 'Rooms', 'Rooms', 'ae0c6-img_0709.jpg', '', 19),
(41, 2, 'Rooms', 'Rooms', '80992-6a478-img_1.jpg', '', 20),
(42, 2, 'Rooms', 'Rooms', '13f26-img_13.jpg', '', 21),
(43, 2, 'Rooms', 'Rooms', '1c55a-6ac40-img_1001.jpg', '', 22);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_breadcrumb`
--

CREATE TABLE `gallery_breadcrumb` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `page_breadcrumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_breadcrumb`
--

INSERT INTO `gallery_breadcrumb` (`id`, `title`, `page_breadcrumb`) VALUES
(1, 'New Breadcrumb', '0b173-gallery.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `id` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`id`, `catname`, `link`, `sort`) VALUES
(1, 'Restaurant', 'restaurant', 5),
(2, 'Rooms', 'rooms', 2),
(3, 'Banquets', 'banquets', 3);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_about`
--

CREATE TABLE `inquiry_about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `page_breadcrumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry_about`
--

INSERT INTO `inquiry_about` (`id`, `title`, `page_breadcrumb`) VALUES
(1, 'New Breadcrumb', '940c2-send-enquiry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20171017120422);

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `flag` enum('1','0') NOT NULL DEFAULT '1',
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `catname`, `link`, `flag`, `sort`) VALUES
(1, 'About us', 'about-us', '1', 2),
(8, 'Gallery', 'gallery', '1', 6),
(9, 'Home', 'home', '1', 1),
(10, 'Dining', 'restaurant', '1', 3),
(11, 'Banquets', 'banquet', '1', 4),
(12, 'Accommodation', 'rooms', '1', 5),
(13, 'Write to us', 'send-inquiry', '1', 7),
(14, 'Contact Us', 'contact-us', '1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `parallex_image`
--

CREATE TABLE `parallex_image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parallex_image`
--

INSERT INTO `parallex_image` (`id`, `name`, `file`) VALUES
(2, 'Testimonials Background', '1dfc9-1920x422.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `file_path`, `sort`) VALUES
(1, '33700-partners-logo3.png', 1),
(2, '6e813-partners-logo3.png', 2),
(3, '28710-partners-logo3.png', 3),
(4, '31532-partners-logo3.png', 4),
(5, '912ee-partners-logo3.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `title_one` varchar(255) NOT NULL,
  `content_one` text NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `title_two` varchar(255) NOT NULL,
  `content_two` text NOT NULL,
  `file_path_two` varchar(255) NOT NULL,
  `contact_background` varchar(255) NOT NULL,
  `whatsapp_no` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `page_breadcrumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `title_one`, `content_one`, `file_path`, `title_two`, `content_two`, `file_path_two`, `contact_background`, `whatsapp_no`, `mobile_number`, `page_breadcrumb`) VALUES
(1, 'About Restaurant', '<p style=\"margin-bottom: 8px; text-align: justify;\"><span style=\"font-size:12pt\"><span style=\"background:white\"><span style=\"line-height:14.4pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"font-size:11.0pt\"><span calibri=\"\" style=\"font-family:\"><span style=\"color:black\">Delicious food is served by the professional caterers present here. We provide you with the flavors of various places, continental or non-continental according to your requirements. Our catering offers amazing multicuisine. We never compromise on taste and flavors.<br />\nAn amazing dining experience is integral to a luxurious experience. Therefore, at Devrath, you will find in-house multi-cuisine restaurants, cafes, and lounges that are the talk of the town and serve the finest Indian delicacies. Mesmerizing ambiance, high-quality ingredients, the country&rsquo;s best chefs and service staff, and stunning views, Devrath have left no stone unturned to create the best dining experiences for its esteemed guests.&nbsp;</span></span></span></span></span></span></span></p>\n', '0620e-2021-08-25-1-.jpg', '', '<p style=\"text-align: justify;\"><span style=\"font-size:12pt\"><span style=\"background:white\"><span style=\"line-height:14.4pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"font-size:11.0pt\"><span calibri=\"\" style=\"font-family:\"><span style=\"color:black\">Devrath&rsquo;s restaurant is consistent with the design and decor of the modern and ultra luxuries dining experience continues forward the legendary Devrath obsession with quality and hospitality. Each meal is prepared with love, care, affection, and attention to detail to ensure real taste and authenticity. When you eat a meal at our in-house restaurants, we ensure it becomes an experience for a lifetime so that you visit frequently at Devrath. Our renowned chefs ensure that dining at Devrath is a wholesome experience. A lavish spread of dishes and drinks is prepared for our guests. The chefs also welcome meal customizations of the guests and help them relish the masterfully crafted culinary delights.</span></span></span></span></span></span></span></p>\n', '9255b-img_1015.jpg', '', '+91 9012160606', '+91 9012160606', 'cfd27-gallery.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_gallery`
--

CREATE TABLE `restaurant_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant_gallery`
--

INSERT INTO `restaurant_gallery` (`id`, `title`, `description`, `file_path`, `class`, `sort`) VALUES
(1, 'Restaurant', 'Restaurant', '33432-img_0867-min.jpg', 'Restaurant', 1),
(2, 'Restaurant', 'Restaurant', 'd4696-img_0902-min.jpg', 'Restaurant', 2),
(3, 'Restaurant', 'Restaurant', 'f1b94-img_0904-min.jpg', 'Restaurant', 3),
(4, 'Restaurant', 'Restaurant', '3ce1b-img_0918-min.jpg', 'Restaurant', 4),
(5, 'Restaurant', 'Restaurant', '32660-img_0920-min.jpg', 'Restaurant', 5),
(6, 'Restaurant', 'Restaurant', '89be8-img_0935-min.jpg', 'Restaurant', 6),
(7, 'Restaurant', 'Restaurant', '24269-img_0945-min.jpg', 'Restaurant', 7),
(10, 'Restaurant', 'Restaurant', '42a17-img_0979-min.jpg', 'Restaurant', 10);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `seourl` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `room_home` varchar(200) NOT NULL,
  `max_person` varchar(200) NOT NULL,
  `bed` varchar(200) NOT NULL,
  `view` varchar(200) NOT NULL,
  `room_size` varchar(200) NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `metatags` text,
  `category` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `author` varchar(255) NOT NULL,
  `page_breadcrumb` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `pid`, `seourl`, `title`, `short`, `file_path`, `room_home`, `max_person`, `bed`, `view`, `room_size`, `bedroom`, `content`, `metatags`, `category`, `status`, `author`, `page_breadcrumb`, `created`) VALUES
(31, 1, 'club-rooms', 'Club Rooms', 'These spacious rooms have been carefully designed with your comfort and convenience in mind. Stretch out on your king size bed, catch up on work at your oak writing desk or call for in room dining and enjoy hand crafted delicacies beside wonderful views. ', '6a478-img_1.jpg', 'ad41d-img_2.jpg', '2', 'King-size or twin beds', 'Ocean', '35 M2', '2', '<p>Each room is furnished with king size or twin beds, a spacious well-appointed bathroom complete with a in-bathroom TV and a walk-in shower cubicle, walk-in closets and it also offers a heated aromatherapy Jacuzzi. The luxury rooms are easily accessible to the 24 hour Caf&eacute; 24, swimming pool area as well as many other amenities at the Della property.</p>\n\n<p>These spacious rooms have been carefully designed with your comfort and convenience in mind. Stretch out on your king size bed, catch up on work at your oak writing desk or call for in room dining and enjoy hand crafted delicacies beside wonderful views. Premier Plus Rooms have the added benefit of complimentary access to the exclusive Residents&rsquo; Lounge. A stay in our Premier Plus Room includes daily breakfast and two way airport transfer.</p>\n', NULL, 'Club Rooms', 'active', 'Admin', '22380-img_9.jpg', '2021-10-25 07:09:20'),
(32, 2, 'suite-rooms', 'Suite Rooms', 'We believe apart from daily life routine when it comes to holiday or attending any event of our nearest and dearest one our expectations with the stays become also very high because at Devrath we believe your stays should be comfortable with quality and w', '6ac40-img_1001.jpg', '29071-img_1008.jpg', '2', 'King-size or twin beds', 'Ocean', '35 M2', '1', '<p><span style=\"font-size:12pt\"><span style=\"background:white\"><span style=\"line-height:14.4pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span calibri=\"\" style=\"font-family:\"><span style=\"color:black\">During weddings it becomes a eternal part to provide best hospitality to your guests and their stays become worry free and should not be less than a experience of staying at luxury hotel. Stays at Devrath is a wonderfull and memorable experience with the plethora of hospitality services with the professional and experienced staff to make you comfortable and enjoy your journey. You&rsquo;re all the expectations regarding a stay will be fulfilled with Devrath. During a comfortable stay whatever your expectations are everything will be fulfilled at Devrath because our staff is always ready to serve you on their toes so that without wasting your precious time our esteemed guests get the quality which they are looking for.</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:12pt\"><span style=\"background:white\"><span style=\"line-height:14.4pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span calibri=\"\" style=\"font-family:\"><span style=\"color:black\">We believe apart from daily life routine when it comes to holiday or attending any event of our nearest and dearest one our expectations with the stays become also very high because at Devrath we believe your stays should be comfortable with quality and worry free. </span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:12pt\"><span style=\"background:white\"><span style=\"line-height:14.4pt\"><span style=\"tab-stops:76.4pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></span></span></p>\n', NULL, 'Suite Rooms', 'active', 'Admin', '1899e-img_1001.jpg', '2021-10-26 05:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `id` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`id`, `catname`, `link`, `sort`) VALUES
(1, 'Club Rooms', 'club-rooms', 1),
(2, 'Suite Room', 'suite-room', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room_gallery`
--

CREATE TABLE `room_gallery` (
  `id` int(11) NOT NULL,
  `catid` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_gallery`
--

INSERT INTO `room_gallery` (`id`, `catid`, `title`, `description`, `file_path`, `class`, `sort`) VALUES
(1, 1, 'Club Rooms', 'Club Rooms', 'ad591-img_1.jpg', '', 1),
(2, 1, 'Club Rooms', 'Club Rooms', 'a48d1-img_2.jpg', '', 2),
(3, 1, 'Club Rooms', 'Club Rooms', 'f372c-img_3.jpg', '', 3),
(4, 1, 'Club Rooms', 'Club Rooms', '51512-img_4.jpg', '', 4),
(5, 1, 'Club Rooms', 'Club Rooms', '81aa2-img_6.jpg', '', 5),
(11, 1, 'Club Rooms', 'Club Rooms', '7c25d-img_7.jpg', '', 6),
(12, 1, 'Club Rooms', 'Club Rooms', '0b574-img_8.jpg', '', 7),
(13, 2, 'Suite Room', 'Suite Room', 'd1483-img_12.jpg', '', 8),
(14, 2, 'Suite Room', 'Suite Room', 'ef6dd-img_13.jpg', '', 9),
(15, 2, 'Suite Room', 'Suite Room', '76a31-img_0996.jpg', '', 10),
(16, 2, 'Suite Room', 'Suite Room', '0a6de-img_1000.jpg', '', 11),
(17, 2, 'Suite Room', 'Suite Room', 'e703e-img_1001.jpg', '', 12),
(18, 2, 'Suite Room', 'Suite Room', '04a72-img_1008.jpg', '', 13),
(19, 2, 'Suite Room', 'Suite Room', 'ebe4c-img_1012.jpg', '', 14);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `established` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `founder` varchar(100) NOT NULL,
  `slogan` varchar(500) NOT NULL,
  `footer_about` text NOT NULL,
  `footer_map` text NOT NULL,
  `footer_copyright` text NOT NULL,
  `site_icon` varchar(255) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `mobile_logo` varchar(255) NOT NULL,
  `footer_logo` varchar(200) NOT NULL,
  `footer_background` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `cre_or_up_by` varchar(50) NOT NULL,
  `cre_or_up_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `reg`, `established`, `address`, `founder`, `slogan`, `footer_about`, `footer_map`, `footer_copyright`, `site_icon`, `file_path`, `mobile_logo`, `footer_logo`, `footer_background`, `email`, `contact`, `cre_or_up_by`, `cre_or_up_date`, `status`) VALUES
(1, 'Devrath By Bigbite', '12345678', '2019-09-16', 'Bye Pass Road, National Highway 52, Partapur Meerut City, Uttar Pradesh, India 250003', 'Mr  Konark Bansal', 'The origin Devrath defines something holy and sacred', 'Devrath is The most wonderful, luxurious, pleasant, and impressive banquet hall for all your significant events in the Meerut. ', '<iframe width=\"260\" height=\"\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Big%20Bite%20Resort,%20NH-58,%20Meerut%20Bypass%20Rd,%20opposite%20BIT%20college,%20Partapur,%20Meerut,%20Uttar%20Pradesh%20250103&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>', '© 2017 Devrath. All rights reserved. Design and developed by <a href=\"revopions.com\">Revopions Technologies.</a>', 'f130e-512x512-icon-devrath.png', 'd61e0-logo-new-1-.png', 'a1d23-logo-black.png', '9fb61-logo-new-1-.png', 'b83d8-1920x422-b.jpg', 'info@devrath.in', '+91 9012160606', '1', '2021-12-06 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `logo_file_path` varchar(200) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sort` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `file_path`, `logo_file_path`, `sub_title`, `name`, `description`, `link`, `created`, `sort`) VALUES
(5, '36787-sliders-4-.jpg', 'ae6fd-dev-logo.png', 'welcome to', 'Welcome To Devrath', 'Welcome', '/about-us', '2020-12-26 14:37:06', 1),
(6, '0b847-slide03.jpg', '58916-dev-logo.png', 'Best in', 'Welcome To Devrath', 'hotel', '/about-us', '2020-12-26 14:54:04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `fa_icon` varchar(220) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `fa_icon`, `name`, `link`, `created`) VALUES
(1, 'fa fa-facebook', 'Facebook', 'https://www.facebook.com/BigBiteResort', '2020-07-13 00:55:37'),
(3, 'fa fa-instagram', 'Instagram', 'https://www.instagram.com/devrathbybigbite/', '2020-07-25 13:27:05'),
(5, 'fa fa-whatsapp', 'Whatsapp', 'https://api.whatsapp.com/send?phone=+919012160606', '2021-12-03 11:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `sort` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `file_path`, `description`, `facebook`, `instagram`, `twitter`, `sort`) VALUES
(1, 'JESSICA ALBA', 'Manager lotus Hotel', '4d73f-arpita-circle.png', 'Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.', '#', '#', '#', 1),
(2, 'JESSICA ALBA', 'Manager lotus Hotel', '4d73f-arpita-circle.png', 'Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.', '#', '#', '#', 2),
(3, 'JESSICA ALBA', 'Manager lotus Hotel', '4d73f-arpita-circle.png', 'Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.', '#', '#', '#', 3),
(4, 'JESSICA ALBA', 'Manager lotus Hotel', '4d73f-arpita-circle.png', 'Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.', '#', '#', '#', 4);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `short_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `address`, `file_path`, `short_desc`) VALUES
(1, 'Shubham Sharma', 'Ghaziabad', '74085-testimonials1.png', 'The resort was very nice. Environment and ambience of the place was also good. Food arrangement and quality was best. Place was very spacious for any kind of function. It is on the main road and can be easily located.'),
(2, 'Annu chaoudhary', 'Meerut', '06ca0-testimonials2.png', 'I would like to start off by saying ”Thank You So Much” to everyone at Devrath for making our Wedding Day everything we could ever dream of! It'),
(3, 'Rohan', 'Baghpat', 'd22bd-testimonials3.png', 'We celebrated our moms-grandmas 90th birthday at Devrath and we are so grateful for making that celebration a very memorable.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `file_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `file_path`) VALUES
(1, '127.0.0.1', 'admin', '$2y$12$sX2ch4EMCICqX.49sERU5eb0Nz7yPFfMte9AhaZlDRbu8wHq4oWjq', 'er.akshayone@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 2020, 2022, 1, 'Admin', 'istrator', 'ADMIN', '01851334578', 'assets/images/user/1593895157.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(9, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banquet`
--
ALTER TABLE `banquet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banquet_gallery`
--
ALTER TABLE `banquet_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navid` (`navid`);

--
-- Indexes for table `contactabout`
--
ALTER TABLE `contactabout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters_background`
--
ALTER TABLE `counters_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_background`
--
ALTER TABLE `footer_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_map`
--
ALTER TABLE `footer_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_menu_one`
--
ALTER TABLE `footer_menu_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_breadcrumb`
--
ALTER TABLE `gallery_breadcrumb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry_about`
--
ALTER TABLE `inquiry_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parallex_image`
--
ALTER TABLE `parallex_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_gallery`
--
ALTER TABLE `restaurant_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_gallery`
--
ALTER TABLE `room_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banquet`
--
ALTER TABLE `banquet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banquet_gallery`
--
ALTER TABLE `banquet_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactabout`
--
ALTER TABLE `contactabout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counters_background`
--
ALTER TABLE `counters_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `footer_background`
--
ALTER TABLE `footer_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_map`
--
ALTER TABLE `footer_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_menu_one`
--
ALTER TABLE `footer_menu_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `gallery_breadcrumb`
--
ALTER TABLE `gallery_breadcrumb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiry_about`
--
ALTER TABLE `inquiry_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `parallex_image`
--
ALTER TABLE `parallex_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurant_gallery`
--
ALTER TABLE `restaurant_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_gallery`
--
ALTER TABLE `room_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_navid` FOREIGN KEY (`navid`) REFERENCES `navigation` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`pid`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
