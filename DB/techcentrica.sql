-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 05:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techcentrica`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `image_alt` text NOT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `category_id`, `sub_category_id`, `status`, `image`, `created_at`, `updated_at`, `image_alt`, `slug`) VALUES
(16, 11, 0, 1, '[\"uploads\\/banner\\/techcentrica_64ef02c129000.jpg\",\"uploads\\/banner\\/techcentrica_64ef02c129259.jpg\",\"uploads\\/banner\\/techcentrica_64ef02c12949f.jpg\"]', '2023-08-30 14:20:09', '0000-00-00 00:00:00', 'home banner', '#'),
(17, 12, 27, 1, '[\"uploads\\/banner\\/techcentrica_64ef0495b727d.jpg\"]', '2023-08-30 14:27:57', '0000-00-00 00:00:00', '', ''),
(18, 12, 28, 1, '[\"uploads\\/banner\\/techcentrica_64ef297f0652e.jpg\"]', '2023-08-30 17:05:27', '0000-00-00 00:00:00', 'Our Superheroes', '#'),
(19, 17, 51, 1, '[\"uploads\\/banner\\/techcentrica_64fb0d780435a.jpg\"]', '2023-09-08 17:32:51', '2023-09-08 18:10:25', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `filename` text NOT NULL,
  `image` text NOT NULL,
  `created_by` text NOT NULL,
  `file` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `subject`, `filename`, `image`, `created_by`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Sit modi quae vel n', 'safsadfsdf', 'uploads/campaign/techcentrica_651bc87af3ba7.xlsx', '17', '', '2023-10-03 13:23:30', '2023-10-04 18:17:15'),
(2, 'Sit modi quae vel n', 'asfasf', 'uploads/campaign/techcentrica_651d6053d1949.jpeg', '17', '', '2023-10-03 16:48:45', '2023-10-04 18:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(125) DEFAULT NULL,
  `slug` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Home', '', 1, '2023-08-30 13:53:55', '0000-00-00 00:00:00'),
(12, 'WHO WE ARE', '#', 1, '2023-08-30 13:54:39', '2023-09-15 11:38:53'),
(13, 'Design And Development', '#', 0, '2023-08-30 13:55:26', '2023-09-05 10:56:00'),
(14, 'Our Solutions', '#', 1, '2023-08-30 13:55:49', '0000-00-00 00:00:00'),
(15, 'OUR EXPERTISE', '#', 1, '2023-08-30 13:56:11', '2023-09-15 11:55:26'),
(16, 'Experience', '#', 1, '2023-08-30 13:56:29', '0000-00-00 00:00:00'),
(17, 'Contact Us', '#', 1, '2023-08-30 13:56:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `category_id` int(125) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `all_temp_data` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(1) NOT NULL,
  `meta_data` text NOT NULL,
  `og_image` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `category_id`, `sub_category_id`, `heading`, `description1`, `description2`, `all_temp_data`, `slug`, `status`, `meta_data`, `og_image`, `created_at`, `updated_at`) VALUES
(5, 12, 27, 'Get To Know Us Better', '<p>In TechCentrica, we keep our minds free from any boundaries so that they can imagine and conceive great ideas which can be loved by your clients. We know the value of your trust which you put on us and TechCentrica always do its best to safeguard that trust by going beyond than client&rsquo;s expectation.</p>\r\n\r\n<p>Techcentrica is driven under the leadership and guidance of two dynamic experts Mr. Pushap Narain Gupta (Founder) and Mr. Hemant Dobriyal (Co-Founder). Mr. Gupta is accountable for the Indian operation of TechCentrica. Mr. Gupta is the main architect of this company who laid the foundation of many advanced modern activities to heighten the growth of the company. Mr. Gupta is an engineer by profession and he has become well adept after having 14+ years of handful experience in IT industry.</p>\r\n\r\n<p>Working from the organization&#39;s Australia office, Mr. Dobriyal has been instrumental in taking the company to next level of excellence. He is MBA by profession &amp; fellow adherent of TechCentrica and the contribution of enormous business analytics has been bestowed upon him. He has 17+ years of hands on experience in the field of business and sales &amp; marketing.</p>\r\n\r\n<p>Our services include Website Development, Digital Marketing, Social Media Marketing, Reputation Management, Mobile App Marketing, along with Search Engine Marketing. The best part is, all of our services are provided by our team of professionals, who have been certified by Microsoft - Bing and Google. Our only goal is to provide our clients result oriented services and we thrive for perfection.</p>\r\n', '', '[{\"contentdescription\":\"<p><strong><span style=\\\"color:#2980b9\\\">The New Way To Success<\\/span><\\/strong><\\/p>\\r\\n\\r\\n<h2><strong>Government&nbsp;<span style=\\\"color:#ffda00\\\"><em>Collaborations<\\/em><\\/span><\\/strong><\\/h2>\\r\\n\\r\\n<p>We have worked in various government projects and helped them with our services. Our work module revolves around strategy, planning and build. This however, helps us to ensure, that we are providing services to our clients that prove to be fruitful not just for now, but for the longer run.<\\/p>\\r\\n\\r\\n<p>TechCentrica is all about providing quality work and help our clients with the same. We hope you start associating with us and enjoy our services.<\\/p>\\r\\n\\r\\n<p>We believe in long-term associations with our clients providing various flexible business procedures as well as delivery models. And this is probably the reason why we have managed to make customers happy from countries like India, Australia, Dubai, New Zealand and Indonesia.<\\/p>\\r\\n\",\"short_image_alt\":\"\",\"short_image\":\"uploads\\/company\\/kashi_64ef09ea83ad3.png\"},{\"contentdescription\":\"<h2><strong>Our Mission &amp; Vision<\\/strong><\\/h2>\\r\\n\\r\\n<p>&quot;To achieve our objectives in an environment of fairness, honesty, and courtesy towards our clients, employees, vendors and society at large.&quot;<\\/p>\\r\\n\\r\\n<p>&quot;To be a globally respected corporation that provides best-of-thought business solutions, leveraging technology, delivered by best-in-class professionals.&quot;<\\/p>\\r\\n\\r\\n<h2><strong>Core Values<\\/strong><\\/h2>\\r\\n\\r\\n<p>We are passionate, we believe in making genuine commitments and honest delivery of work. Our creative strength lies in the expertise and knowledge of our team. We work together by establishing trust and make sure that delivery is right on time.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Customer Satisfaction: To surpass customer expectations consistently.<\\/li>\\r\\n\\t<li>Leadership by Example: To set standards in our business and transactions and be an exemplar for the industry and ourselves.<\\/li>\\r\\n\\t<li>Integrity and Transparency: To be ethical, sincere and open in all our transactions.<\\/li>\\r\\n\\t<li>Pursuit of Excellence:To strive relentlessly, constantly improve ourselves, our teams, our services and products to become the best.<\\/li>\\r\\n<\\/ul>\\r\\n\",\"short_image_alt\":\"\",\"short_image\":\"uploads\\/company\\/kashi_64ef0a5f8057a.png\"},{\"contentdescription\":\"<h2><strong>Other&nbsp;<span style=\\\"color:#ffda00\\\"><em>Ventures<\\/em><\\/span><\\/strong><\\/h2>\\r\\n\\r\\n<p>The company HPR TECHCENTRICA PVT. LTD. has ventured recently into Real Estate. Mr. Dobriyal is an member of the Real Estate Institute of Victoria (REIV), Australia and plays a dynamic role in Indian community Melbourne. This made him to endeavour in the field of real estate for NRIs.<\\/p>\\r\\n\\r\\n<p>The&nbsp;<strong>NRI Home Buyers<\\/strong>&nbsp;is a platform that would give a golden chance to the Non Resident Indians to buy a home on their country land. This online platform will list out the available houses by different builders in different Indian cities, which can be purchased by NRIs with legal formalities. This would surely be a lifetime opportunity for those who wish to invest in their own country.<\\/p>\\r\\n\",\"short_image_alt\":\"Other\\u00a0Ventures\",\"short_image\":\"uploads\\/company\\/techcentrica_64ef0b7ca234c.jpg\"}]', 'about-us.html', 1, '{\"meta_title\":\"Aliquam et sit paria\",\"meta_keyword\":\"Aliquam et sit paria\",\"meta_description\":\"Enim consequatur co\",\"og_url\":\"Eos dolore sequi dol\",\"og_title\":\"Maxime quis sunt eum\",\"og_description\":\"Amet temporibus cup\",\"og_site_name\":\"Jordan Boyer\",\"canonical\":\"Quibusdam accusamus \"}', 'uploads/meta_image/kashi_64ef09ea836d6.jpeg', '2023-08-30 14:50:42', '2023-09-14 10:40:41'),
(6, 12, 28, 'Meet the Superheroes', '<p><span style=\"color:#2980b9\">With Great Power Comes Great Responsibility And Together We Can Do Something Wonderful.</span></p>\r\n\r\n<p>We&rsquo;re happy to present our growing team of young superheroes. We use everything within our reach to keep each other focused and inspired. These guys below are our creative explorers and creators.</p>\r\n', '', '[{\"contentdescription\":\"<h2><strong>Hemant<\\/strong><\\/h2>\\r\\n\\r\\n<p>He is currently directing the TechCentrica Business in Australia. He is the real&nbsp;Superman.&nbsp;He is a man with astounding vision.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>&nbsp;<strong>Designation<\\/strong> :&nbsp;Director, Australia<\\/li>\\r\\n\\t<li>&nbsp;<strong>Experience<\\/strong> :&nbsp;20+ year&#39;s<\\/li>\\r\\n<\\/ul>\\r\\n\",\"short_image_alt\":\"Hemant\",\"short_image\":\"uploads\\/company\\/techcentrica_64ef15565f8ef.png\"},{\"contentdescription\":\"<h2><strong>Rashmi<\\/strong><\\/h2>\\r\\n\\r\\n<p>She is the&nbsp;wonder woman&nbsp;of the team who plays the role of fearless &amp; energetic powerhouse. Moreover, she is perfect for making big plans.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>&nbsp;<strong>Designation<\\/strong> :&nbsp;Director, India<\\/li>\\r\\n\\t<li>&nbsp;Experience :&nbsp;15+ year&#39;s<\\/li>\\r\\n<\\/ul>\\r\\n\",\"short_image_alt\":\"Rashmi\",\"short_image\":\"uploads\\/company\\/techcentrica_64f6ba895864b.png\"},{\"contentdescription\":\"<h2><strong>Prachi<\\/strong><\\/h2>\\r\\n\\r\\n<p>Prachi needs no other introduction as she is simply the&nbsp;Incredible Hunk&nbsp;of the team. She empowers every soul and her charismatic charm brings revival to the team.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>&nbsp;<strong>Designation<\\/strong> :&nbsp;Operation Head<\\/li>\\r\\n\\t<li>&nbsp;<strong>Experience<\\/strong> :&nbsp;07+ year&#39;s<\\/li>\\r\\n<\\/ul>\\r\\n\",\"short_image_alt\":\"Prachi\",\"short_image\":\"uploads\\/company\\/techcentrica_64f6fbecbad74.png\"},{\"contentdescription\":\"<h2><strong>Pushap<\\/strong><\\/h2>\\r\\n\\r\\n<p>He is the maker and main custodian of TechCentrica India Division. What&nbsp;batman&nbsp;is for Gotham city , Pushap is for TechCentrica.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>&nbsp;<strong>Designation<\\/strong> :&nbsp;Marketing Head<\\/li>\\r\\n\\t<li>&nbsp;<strong>Experience<\\/strong> :&nbsp;15+ year&#39;s<\\/li>\\r\\n<\\/ul>\\r\\n\",\"short_image_alt\":\"Pushap\",\"short_image\":\"uploads\\/company\\/techcentrica_64f6fc3f9f0ed.png\"},{\"contentdescription\":\"<h2><strong>Sudhir<\\/strong><\\/h2>\\r\\n\\r\\n<p>He is known as&nbsp;Mr. Incredible&nbsp;and he looks after the finance department of the company. He maintains the financial health of the company.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>&nbsp;<strong>Designation<\\/strong> :&nbsp;Head, Finance<\\/li>\\r\\n\\t<li>&nbsp;<strong>Experience<\\/strong> :&nbsp;14+ year&#39;s<\\/li>\\r\\n<\\/ul>\\r\\n\",\"short_image_alt\":\"Sudhir\",\"short_image\":\"uploads\\/company\\/techcentrica_64f6fcbe23628.png\"},{\"contentdescription\":\"<h2><strong>Lokesh<\\/strong><\\/h2>\\r\\n\\r\\n<p>He bears a resemblance to&nbsp;Loki&nbsp;in terms of sagacity and insight but has never been indulged in any negative and cynical part like Loki. He is a marketing expert who generates the leads.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>&nbsp;<strong>Designation<\\/strong> :&nbsp;Team Lead, SEO<\\/li>\\r\\n\\t<li>&nbsp;<strong>Experience<\\/strong> :&nbsp;07+ year&#39;s<\\/li>\\r\\n<\\/ul>\\r\\n\",\"short_image_alt\":\"Lokesh\",\"short_image\":\"uploads\\/company\\/techcentrica_64f6fcec28e68.png\"},{\"contentdescription\":\"<h2><strong>Anshu<\\/strong><\\/h2>\\r\\n\\r\\n<p>Devoting himself to working in the world of digital marketing, Manish justifies that character of&nbsp;Robin&nbsp;and is successfully catering to different business needs of multiple clients across.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>&nbsp;Designation :&nbsp;Sr. SEO Executive<\\/li>\\r\\n\\t<li>&nbsp;<strong>Experience<\\/strong> :&nbsp;07+ year&#39;s<\\/li>\\r\\n<\\/ul>\\r\\n\",\"short_image_alt\":\"Anshu\",\"short_image\":\"uploads\\/company\\/techcentrica_64f6fd2c23ca3.png\"}]', 'superheroes.html', 1, '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-08-30 15:39:26', '2023-09-14 10:42:43'),
(7, 12, 29, 'What Are Our Capabilities?', '', '', '[{\"contentdescription\":\"<p>At TechCentrica, We Are Focused On Optimizing Our Customer&rsquo;s Investments In Information &amp; Technology. We Help Our Customers Envision And Shape Their Future Around The Key Drivers Of Technology, Productivity And Cost-Effectiveness.<\\/p>\\r\\n\\r\\n<p>Strength of the TechCentrica lives into various factors that differentiate us from our competitors. Led by a prudent and supportive management team, each individual has made significant contributions towards the up gradation of the organization, through leadership and comprehensive solutions that best meet the client and industry needs.<\\/p>\\r\\n\\r\\n<p>Led by a team of cohesive IT professionals, each leader at TechCentrica brings decades of experience and a history of success with him. Combining business acumen with technical savvy, these executives guide our talented employees to create innovative products and solutions that enable customers around the world.<\\/p>\\r\\n\",\"short_image_alt\":\"At TechCentrica\",\"short_image\":\"uploads\\/company\\/techcentrica_64ef15b3dbc99.jpg\"},{\"contentdescription\":\"<h2><strong>Quality&nbsp;Management<\\/strong><\\/h2>\\r\\n\\r\\n<p>Quality is a factor that is today taken as assumed. At TechCentrica, we do not take anything for granted. We are committed to creating value for customers through our services and products, and we assure this through the quality systems that we have built into our organization.<\\/p>\\r\\n\\r\\n<p>This is the way in which we have built global quality:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>We make decisions based on quality considerations.<\\/li>\\r\\n\\t<li>We have evolved quality measures for all life-cycle phases of services and products.<\\/li>\\r\\n\\t<li>We have set up systems, procedures and standards to minimise errors, defects and rework, and to continually improve quality levels.<\\/li>\\r\\n<\\/ul>\\r\\n\",\"short_image_alt\":\"Quality\\u00a0Management\",\"short_image\":\"uploads\\/company\\/techcentrica_64ef160c37fed.jpg\"}]', 'strength.html', 1, '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-08-30 15:40:59', '2023-09-14 11:04:27'),
(8, 12, 30, '', '', '', '[{\"contentdescription\":\"<p><span style=\\\"color:#2980b9\\\"><strong>At TechCentrica, We Challenge Ourselves To Move And Think Differently<\\/strong><\\/span><\\/p>\\r\\n\\r\\n<h1>THE PROMISE OF THE PREMISE<\\/h1>\\r\\n\\r\\n<p>With the appearance of mechanical developments and social discussions, TechCentrica have advanced to be firm devotees of being available on the web and drive commitment with their crowd. Seeing this adjustment of purchaser&#39;s assumptions, Mr. Pushap Narain Gupta established TechCentrica, an advanced showcasing office in 2012. Stepping on a solid conviction on how brands could impart viably from the viewpoint of a brand head, he states, &quot;I understood that my computerized accomplices were technologists and not planners with business understanding. While I worked with driving computerized and programming improvement firms as innovative head in India, I conveyed with myself a solid feeling of conviction that TechCentrica could be a stage where we could help give customers a much better effort of the brand&#39;s character in itself.&quot;<\\/p>\\r\\n\\r\\n<p>Techcentrica is driven under the authority and direction of two unique specialists Mr. Pushap Narain Gupta (Founder) and Mr. Hemant Dobriyal (Co-Founder). Mr. Gupta is responsible for the Indian &amp; Australian activity of TechCentrica.<\\/p>\\r\\n\",\"short_image_alt\":\"SASF\",\"short_image\":\"uploads\\/company\\/techcentrica_64ef16fc4273c.jpg\"},{\"contentdescription\":\"<p><span style=\\\"color:#2980b9\\\"><strong>Results Matter...<\\/strong><\\/span><\\/p>\\r\\n\\r\\n<h2>BRANDING THAT TURNS HEADS.<\\/h2>\\r\\n\\r\\n<p>TechCentrica has been supporting undertakings and brands in making effective stories with its leader administrations in different areas including Real Estate, medical care, Telecom, schooling, retail, on-request, excellence and health, business counseling, FMCG, framework, coordination&rsquo;s, assembling, programming and portability. Offering configuration centered advanced change; the administrations incorporate Branding and Identity, social media, Reputation Management, SEO, Web and App plan and building administrations.<\\/p>\\r\\n\\r\\n<p>&quot;Each brand anticipates a group that can be acceptable in execution. The DNA of TechCentrica is to hustle out. An office by definition, can&#39;t be knowledgeable right from portability to magnificence, yet the way in to our food with just about 90% customer consistency standard is that we are quick students and connectors,&quot; clarifies Pushap Narain Gupta.<\\/p>\\r\\n\\r\\n<p>50% of TechCentrica&#39;s clients are customary entrepreneurs who are currently in the adjusting phase of this advanced blast marks Pushap. The remainder of the firm is contributed by all around educated SME&#39;s and financed new businesses who understand how computerized strengthening affects their brands. Five years prior, he reviews the vulnerability to sell computerized medium as a state of commitment and deal, when the market was not as developed as the India&#39;s which at that point had more than 83% of web infiltration making a need to keep moving for each brand proprietor to be available on the web.<\\/p>\\r\\n\\r\\n<p>TechCentrica offers administrations at different value ranges and consistently keeps its customers educated on the methodology, execution modules and computerized spend to assist them with adjusting advanced space easily and certainty.<\\/p>\\r\\n\\r\\n<p>With the new blast of advanced showcasing necessities, the organizer attests that &quot;I as of late ran over a detail that denotes the normal number of commitment years among brands and organizations to have become 3 years plunging from 8 years in the course of the last 5-6 years&#39; time. At TechCentrica we have cherished craftsmanship, rationale, and numbers. Because of our past advanced and innovation experience to stir a lot of information and point out to trouble spots and afterward characterize answers for them. Our USP is that we comprehend business destinations and diagram functional and achievable long and transient procedures over focusing on inconsequential everyday extension.&quot;<\\/p>\\r\\n\\r\\n<p>With the new blast of advanced showcasing necessities, the organizer attests that &quot;I as of late ran over a detail that denotes the normal number of commitment years among brands and organizations to have become 3 years plunging from 8 years in the course of the last 5-6 years&#39; time. At TechCentrica we have cherished craftsmanship, rationale, and numbers. Because of our past advanced and innovation experience to stir a lot of information and point out to trouble spots and afterward characterize answers for them. Our USP is that we comprehend business destinations and diagram functional and achievable long and transient procedures over focusing on inconsequential everyday extension.&quot;<\\/p>\\r\\n\\r\\n<p>TechCentrica upholds impending new companies; SME&#39;s who are endeavoring to become quicker and ventures that need a twist to continue developing and adjusting. With its deliberate way to deal with consider brand character.<\\/p>\\r\\n\\r\\n<p>TechCentrica imagines the prerequisite of online standing administration and consistent stages for computerized ads at lower expenses and specially designed for Indian business sectors as the following enormous necessity for brands in India. &quot;We are venturing up the game for 2018, by dispatching our automatic purchasing stage to take accountable for 360O advertisement answers for our customers from one entryway consequently challenging the standard method of how computerized advertisers work.&quot; calls attention to Pushap on his future extension plans.<\\/p>\\r\\n\\r\\n<p>On TechCentrica&#39;s concentration and conviction framework, he checks, &quot;We have confidence in working with customers who share the perspective of anticipating a consistent development and consistency in their advanced excursion among the mind-boggling computerized mess. More often than not we are wary about our customers spend and propose designs just if the examination number backings. We are a group of 22+ individuals for plan and innovation working strong to give our customers a total computerized arrangement experience. Our specialty is Design, Digital (Web, Mobility, UI\\/UX), ORM, SEO and Social media Management.<\\/p>\\r\\n\",\"short_image_alt\":\"BRANDING\",\"short_image\":\"uploads\\/company\\/techcentrica_64ef17659d135.jpg\"}]', 'brand.html', 1, '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-08-30 15:46:28', '2023-09-14 11:04:15'),
(9, 12, 31, 'Business growth of any company depends on following factors: -', '<h3>Hiring the right employees for your business</h3>\r\n\r\n<p>Are there still acceptable quality representatives out there that need to work? This is a battle for some individuals since discovering individuals that need to work and dominate at their position isn&#39;t generally the least demanding. Getting the correct individuals in the right spots with an unmistakable and characterized comprehension of their needs is essential. In the event that an organization has the opportune individuals, they will move quicker and achieve more in a similar measure of time. When recruiting we will need to ensure these representatives fit the way of life of the business and are hoping to develop with you. I generally suggest being imaginative with the inquiries you pose during meetings and ensure you ask them what their drawn-out objective is with you.</p>\r\n\r\n<h3>Disciplined approach to their business: -</h3>\r\n\r\n<p>We figure out how to deal with their business, not simply in it. This includes arranging and, all the more critically, adjusting their kin to execute the business&#39; development plan. Once more, this is the place where it will assist with employing those people that affection working for you, trust in you and realize they feel esteemed. At the point when representatives know their self-esteem dependent on you, it goes far in the thing you will get from them. Eventually, include your whole group and cause them to feel like they are a piece of the organization!</p>\r\n\r\n<h3>The wise use of trusted outside providers: -</h3>\r\n\r\n<p>To have a development orientated business we need a methodical method of get-together and occasionally breaking down fundamental data about the business. Outside suppliers whom we trust can be important to playing out this sort of survey of their business. High-performing organizations have figured out how to enhance their interior skill by building confided involved with the re-evaluated faculty, this permits them to cost-viably purchase the measure of mastery. we need when we need it.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Quality Management: -</h3>\r\n\r\n<p>Quality is a factor that is today taken as expected. At TechCentrica, we don&#39;t underestimate anything. We are focused on making an incentive for clients through our administrations and items, and we guarantee this through the quality frameworks that we have incorporated into our association. We have developed quality measures for all life-cycle periods of administrations and items. We have set up frameworks, strategies and norms to limit mistakes, abandons and modify, and to consistently improve quality levels.</p>\r\n', '', '[]', 'business-growth.html', 1, '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-08-30 15:52:31', '2023-09-14 11:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `heading` text NOT NULL,
  `description` longtext NOT NULL,
  `card_data` longtext NOT NULL,
  `drop_resume` text NOT NULL,
  `solutions` text NOT NULL,
  `what_make_head` text NOT NULL,
  `what_make_para` text NOT NULL,
  `card_data2` longtext NOT NULL,
  `meta_data` text NOT NULL,
  `og_image` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `category_id`, `sub_category_id`, `title`, `heading`, `description`, `card_data`, `drop_resume`, `solutions`, `what_make_head`, `what_make_para`, `card_data2`, `meta_data`, `og_image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 17, 51, 'Openings at TechCentrica!', 'TechCentrica\'s Is The High Achievers Of Today And The Innovators Of Tomorrow.', '<p>One of the most valuable assets of TechCentrica is its human resources. In the push for improvement, an organization&rsquo;s biggest investment and its primary assets are its human capital.The company recruits, trains and retains responsible, dedicated and talented professionals. It sets high standards because it believes that by employing the right people, it can create a powerful and professional working environment.</p>\r\n\r\n<p>The core values of respect, openness, creativity, independence and simplicity form the foundation of our business. By combining personal motivation with a shared desire to succeed.</p>\r\n', '[{\"card_heading\":\"UI\\/UX Developer - 2-4 Year\'s Experience\",\"card_content\":\"<p>Develop intuitive, usable, and engaging interactions and visual designs for mobile &amp; web application. Stay abreast of UX trends and look for creative ideas and inspiration in parallel analogous worlds. Break any design problem down into viable actionable chunks and solve them with clarity and precision.<\\/p>\\r\\n\"},{\"card_heading\":\"Full-stack Developer (PHP) - 3-5 Year\'s Experience\",\"card_content\":\"<p>The primary responsibility of a Full Stack Developer includes designing user interactions on websites, developing servers and databases for website functionality and coding for mobile platforms.<\\/p>\\r\\n\\r\\n<p><strong>Particular responsibilities often include:<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>\\u25cf Developing front end website architecture.<\\/li>\\r\\n\\t<li>\\u25cf Designing user interactions on web pages.<\\/li>\\r\\n\\t<li>\\u25cf Developing back end website applications.<\\/li>\\r\\n\\t<li>\\u25cf Creating servers and databases for functionality.<\\/li>\\r\\n\\t<li>\\u25cf Ensuring cross-platform optimization for mobile phones.<\\/li>\\r\\n\\t<li>\\u25cf Ensuring responsiveness of applications.<\\/li>\\r\\n\\t<li>\\u25cf Working alongside graphic designers for web design features.<\\/li>\\r\\n\\t<li>\\u25cf Seeing through a project from conception to finished product.<\\/li>\\r\\n\\t<li>\\u25cf Designing and developing APIs.<\\/li>\\r\\n\\t<li>\\u25cf Meeting both technical and consumer needs.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p><strong>Technologies Skills Required:<\\/strong><\\/p>\\r\\n\\r\\n<p>The skills required for a Full Stack Developer will vary based on the responsibilities required and the type of organisation or task.<\\/p>\\r\\n\\r\\n<p>PHP, WordPress, Woo Commerce, Magneto, CakePHP Web Technologies: HTML5, CSS3, Responsive Design, XHTML, Sass, AngularJS, Angular 8, React JS, Bootstrap, JavaScript, jQuery, XML, JSON, Ajax, Bootstrap<br \\/>\\r\\n<br \\/>\\r\\n<strong>APIs:<\\/strong>&nbsp;Rest APIs, Google Maps, PayPal, Twitter, Facebook APIs<\\/p>\\r\\n\"},{\"card_heading\":\"SEO Executive, SEO Analyst, Senior SEO Executive\",\"card_content\":\"<p>We are looking for an SEO\\/SEM expert to manage all search engine optimization and marketing activities.<\\/p>\\r\\n\\r\\n<p>You will be responsible for managing all SEO activities such as content strategy, link building and keyword strategy to increase rankings on all major search networks. You will also manage all SEM campaigns on Google, Yahoo and Bing in order to maximize ROI.<\\/p>\\r\\n\\r\\n<p><strong>Responsibilities:<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>\\u25cf Execute tests, collect and analyze data and results, identify trends and insights in order to achieve maximum ROI in paid search campaigns.<\\/li>\\r\\n\\t<li>\\u25cf Track, report, and analyze website analytics and PPC initiatives and campaigns.<\\/li>\\r\\n\\t<li>\\u25cf Manage campaign expenses, staying on budget, estimating monthly costs and reconciling discrepancies.<\\/li>\\r\\n\\t<li>\\u25cf Optimize copy and landing pages for search engine marketing.<\\/li>\\r\\n\\t<li>\\u25cf Perform ongoing keyword discovery, expansion and optimization.<\\/li>\\r\\n\\t<li>\\u25cf Research and implement search engine optimization recommendations.<\\/li>\\r\\n\\t<li>\\u25cf Research and analyze competitor advertising links.<\\/li>\\r\\n\\t<li>\\u25cf Develop and implement link building strategy.<\\/li>\\r\\n\\t<li>\\u25cf Work with the development team to ensure SEO best practices are properly implemented on newly developed code.<\\/li>\\r\\n\\t<li>\\u25cf Work with editorial and marketing teams to drive SEO in content creation and content programming.<\\/li>\\r\\n\\t<li>\\u25cf Recommend changes to website architecture, content, linking and other factors to improve SEO positions for target keywords.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p><strong>Requirements:<\\/strong><\\/p>\\r\\n\\r\\n<p>Proven SEO experience.<\\/p>\\r\\n\\r\\n<p>Proven SEM experience managing PPC campaigns across Google, Yahoo and Bing.<\\/p>\\r\\n\\r\\n<p>Solid understanding of performance marketing, conversion, and online customer acquisition.<\\/p>\\r\\n\\r\\n<p>In-depth experience with website analytics tools (e.g, Google Analytics, NetInsight, Omniture, WebTrends).<\\/p>\\r\\n\\r\\n<p>Experience with bid management tools (e.g., Click Equations, Marin, Kenshoo, Search Ignite).<\\/p>\\r\\n\\r\\n<p>Knowledge of ranking factors and search engine algorithms.<\\/p>\\r\\n\"}]', '', '{\"digital_solutions\":\"325\",\"success_delivered\":\"2364\",\"manag_more\":\"06+\",\"drop_resume\":\"Drop Your Resume - career@techcentrica.com | Call : +91 9599 200 281\",\"growth_per_annum\":\"23%\"}', '', '', '[{\"head\":\"Truly Personalized and Customized Assistance every step of way\",\"para\":\"TechCentrica provides customized and personalized assistance to the client by optimizing and evaluating their concern and requirements.\"},{\"head\":\"Successfully managed to satisfy clients from 8 different countries.\",\"para\":\"In a small span of time, we have served numerous clients from countries like UAE, Australia, US, Indonesia, Canada, New Zealand etc.\"},{\"head\":\"9 Years of Experience in Web and Digital Marketing\",\"para\":\"Our experience says it all. In a span of 9 years, we have nurtured and developed this company as the leading digital marketing agency in NCR.\"},{\"head\":\"325+ Satisfied Customers\",\"para\":\"We believe in building the longtime relationship with our client. Disappointing even a single client is something which we consider our biggest failure.\"},{\"head\":\"The Expertise of Experienced and Certified Professionals\",\"para\":\"From Digital to web solution we have a team of skilled people who analyze your project and put their unmatchable efforts to bring your business right on track.\"},{\"head\":\"Dedicated Project Manager and Coordinator\",\"para\":\"We assign project coordinator for ground-level operations and project manager who is responsible for the project as the whole (its goals, deadlines etc).\"},{\"head\":\"Believe in Transparency\",\"para\":\"We make things quite crystal clear. We share weakly reports of our work activity to our clients and ask their feedbacks in order to improve our work. For our website and apps, we share every module design pattern to our clients.\"},{\"head\":\"Guaranteed Results\",\"para\":\"We bring our commitments to fruition. From boosting your business to bring up your keywords ranking right on the top page of Google search engine we do everything to please you.\"},{\"head\":\" Deal with the latest technologies to give you the best result\",\"para\":\"We use the latest frameworks and languages to develop our websites and apps. From UI\\/UX to strong backend functionality we focus on everything. We have modern digital marketing tools and technology to develop an environment which can support your business right from SEO to SMO.\"},{\"head\":\"24*7 Customer Support\",\"para\":\"TechCentrica knows how to serve a customer. If you need us then we will always be ready to help you out from any technical or business related solution. We have a 24*7 customer support service.\"}]', '{\"meta_title\":\"Quia aut itaque labo\",\"meta_keyword\":\"Quia aut itaque labo\",\"meta_description\":\"Voluptates animi eo\",\"og_url\":\"Irure doloremque ut \",\"og_title\":\"Consequuntur eius ea\",\"og_description\":\"Autem minus dolor vo\",\"og_site_name\":\"Joseph Vinson\",\"canonical\":\"Architecto asperiore\"}', '', 'Join-us.html', 1, '2023-09-08 10:31:36', '2023-09-14 13:02:43'),
(2, 17, 50, '', 'TechCentrica Contact Centre', '<p>Be it a service that you need, be it a position that you seek, or you just like what you have seen so far; do not hesitate to reach out. We&#39;re excited to start a conversation.</p>\r\n', '[{\"card_heading\":\"India Office\",\"card_content\":\"<p><strong>ISO 9001:2015 (QMS) - ISO 27001:2013 (ISM) CERTIFIED COMPANY<\\/strong><\\/p>\\r\\n\\r\\n<p><strong>GSTIN: 09AADCH4032M1ZH \\/ CIN: U73100DL2014PTC267126<\\/strong><\\/p>\\r\\n\\r\\n<p><strong>Address: H-73, Level 4, Sector 63 (Near Haldiram), Noida 201301<\\/strong><\\/p>\\r\\n\\r\\n<p>Sales Enquiry:- (91) 9654 221 960 \\/ 9599 200 280<\\/p>\\r\\n\\r\\n<p>Job Enquiry:- (91) 9599 200 281<\\/p>\\r\\n\\r\\n<p>General Enquiry:- (0120) 505 8863<\\/p>\\r\\n\\r\\n<p>Email:- sales@techcentrica.com<\\/p>\\r\\n\"},{\"card_heading\":\"Australia Office\",\"card_content\":\"<p>Address: 19 Flicka Boulevard Cranbourne West 3977 Melbourne, Australia<\\/p>\\r\\n\\r\\n<p>Make a Quick Enquiry:- +61 424-938-441<\\/p>\\r\\n\\r\\n<p>Email:- sales@techcentrica.com.au<\\/p>\\r\\n\"}]', '', '{\"digital_solutions\":\"\",\"success_delivered\":\"\",\"manag_more\":\"\",\"drop_resume\":\"\",\"growth_per_annum\":\"\"}', '', '', '[]', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 'contact-us.html', 1, '2023-09-08 15:29:56', '2023-09-14 13:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `design_dev`
--

CREATE TABLE `design_dev` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `head_para` longtext NOT NULL,
  `heading2` text NOT NULL,
  `description` longtext NOT NULL,
  `solutions` text NOT NULL,
  `topfoot_heading` text NOT NULL,
  `card_data` longtext NOT NULL,
  `status` int(1) NOT NULL,
  `slug` text NOT NULL,
  `meta_data` text NOT NULL,
  `og_image` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `design_dev`
--

INSERT INTO `design_dev` (`id`, `category_id`, `sub_category_id`, `head_para`, `heading2`, `description`, `solutions`, `topfoot_heading`, `card_data`, `status`, `slug`, `meta_data`, `og_image`, `created_at`, `updated_at`) VALUES
(4, 13, 32, '[{\"head\":\"\\u201cDesigning solutions for the people interacting with the brand\\u201d...\",\"para\":\"TechCentrica specializes in designing and developing web \\/ software solutions that are customer-centric. Our innate strength in blending the right strategy, technology and design ensures that we deliver a solution that is always way beyond the expectations of our customers. We offer a wide range of services to our customers in online web space.  Web presence has become an essential need in the contemporary world to keep your business rolling. Website is the true reflection of your business that offer not only the information of your business, but also let the users know about your style of working. Hence a website should be created with complete dedication and zeal, using the most technically advanced web development techniques.  Techcentria is a leading web development and designing company from where you can take along a fully-functional, modern website to strengthen your digital footprint. Website developed by us are able to give you a cutting-edge in the industry.  Our web development process span across creating a complete strategy, organizing design workshops with the client, constructing the complete map of the website, collecting information from the clients and designing interactive UI. With our capabilities, we are able to handle different domains from varied industries. Using W3C Standards and Client Hints Technology, we create dynamic website and web applications.\"}]', '', '<p><strong>Why Should I Use A Web Development Company?</strong></p>\r\n\r\n<p>When you are considering building a website for your company you can have many different options. From a freelancer to website builders like WIX people are hiring them in order to save time and money. They will provide you a website but just getting a website for your business in not the only thing.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>They lack so many key elements which must be essential to develop and escalate in to full-scale for your website. But a professional website agency like TechCentrica will not only develop an amazing website with great functionalities but also assists you by providing all kind of web solution like annual maintenance and consultancy.</p>\r\n\r\n<p><strong>Does My Website Need To Be Responsive And Mobile Friendly?</strong></p>\r\n\r\n<p>Yes, yes and yes again. Approximately 60% of traffic on search engines is from mobile devices like phone and tablets. If your website is not mobile friendly, you are keeping yourself away from many potential customers. The experts at TechCentrica can create a brand new website that is mobile friendly, full responsive and customized with examples of interface, experience, illustration.</p>\r\n\r\n<p><strong>How Do I Get My Website Evaluated?</strong></p>\r\n\r\n<p>Before we begin updating or revamping your current site or building a brand new one, TechCentrica needs to perform a detailed evaluation and analysis of your current site. We look at items such as page speed, security, mobile friendliness, search engine visibility and more.</p>\r\n\r\n<p><strong>How Long Do Web Design Project Take?</strong></p>\r\n\r\n<p>Every project is different so there is no set timeline. It totally depends on the scope of work. However, we try to get new website developed somewhere between one and two months. We assign a Project Coordinator for every project who will give you a detailed information about the project like activities we perform, deadline etc.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '', '', 1, 'Web-Solutions.html', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-09-05 11:31:56', '2023-09-14 11:43:57'),
(5, 13, 33, '[]', 'Your brand “looks” online.', '<p>Corporate website development is an essential part of today&rsquo;s business world. Over the past several years, corporate website has become crucial part to the success of all kinds of companies from small businesses to multinational corporations. Regardless of your product, services, or goals, companies can only foster growth when they&rsquo;re increasing their customer base &mdash; and the Internet is the best platform to use for growth.</p>\r\n\r\n<p>That&rsquo;s why corporate website development is so important in the business world, especially when it&rsquo;s combined with the right online marketing strategy. Suddenly, your company can engage clients from all over the world for a fraction of the cost of conventional advertising media like television or radio.</p>\r\n\r\n<p>As a leading corporate web designing company, TechCentrica specializes in growing the online presence of brands like yours. Our team includes talented and skilled specialists on the cutting edge of corporate website development who are ardent about building business websites from the ground up and tweaking them for optimized results. Best of all, our corporate web development team understands how to keep you ahead of your competition.</p>\r\n\r\n<p>To start, corporate website development demands that your web presence has a professional, up-to-date design that displays the attitude of your business. A sleek, instinctive layout makes your company visible more inviting and open to customer interaction.</p>\r\n\r\n<p>And it&rsquo;s not as easy as it may seem &mdash; corporate website requires specialist working hard to create an engaging, attractive, and intuitive composition. If it doesn&rsquo;t look good and it&rsquo;s not user-friendly, your website visitors could turn away before they even read a word about your company.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '', '', 1, 'Corporate-Website.html', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-09-05 11:35:04', '2023-09-14 11:54:27'),
(6, 13, 34, '[{\"head\":\"Martial Arts... Creative Web Masters...\",\"para\":\"A dynamic website is one that changes or customizes itself frequently and automatically, based on certain criteria, user interaction or as per the business logic. The main purpose of a dynamic website is automation of your business logic. A dynamic web page provides a live user experience by changing the content (text, images, form fields, etc.) in response to different contexts or conditions.  A web portal, presents information from diverse sources in a unified way. Apart from the standard search engine feature, web portals offer other services such as e-mail, news, stock prices, information, databases and entertainment. Two broad categorizations of portals are:\"},{\"head\":\"Custom Application Development:\",\"para\":\"Our expert in-house team uses cutting edge technologies to build custom web applications that are stunning, robust, secure and scalable and we follow agile development methodology to ensure flexibility and faster delivery.\"}]', 'Your brand “looks” online.', '<p><strong>PHP Development</strong></p>\r\n\r\n<ul>\r\n	<li>Laravel</li>\r\n	<li>CodeIgniter</li>\r\n	<li>Zend2</li>\r\n	<li>Symfony</li>\r\n	<li>CakePHP</li>\r\n	<li>Yii</li>\r\n</ul>\r\n\r\n<p><strong>Node JS Development</strong></p>\r\n\r\n<ul>\r\n	<li>Express.js</li>\r\n	<li>Koa.js</li>\r\n	<li>Meteor.js</li>\r\n	<li>Socket.io</li>\r\n	<li>Mean.js</li>\r\n	<li>Sails.js</li>\r\n</ul>\r\n\r\n<p><strong>Python Development</strong></p>\r\n\r\n<ul>\r\n	<li>Django</li>\r\n</ul>\r\n\r\n<p><strong>Ruby Development</strong></p>\r\n\r\n<ul>\r\n	<li>Rails</li>\r\n</ul>\r\n\r\n<p><strong>.Net Development</strong></p>\r\n\r\n<ul>\r\n	<li>ASP.NET</li>\r\n	<li>Windows Azure</li>\r\n	<li>Silverlight&nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>CMS:</strong></p>\r\n\r\n<p>We are experts at designing and creating content management systems for the web. We analyze and research the market trends and collaborate these with your business requirements to mold a perfect CMS framework for your business.</p>\r\n\r\n<ul>\r\n	<li>Wordpress</li>\r\n	<li>Joomla</li>\r\n	<li>Drupal</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Typo3</li>\r\n	<li>Umbraco</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>DotnetNuke</li>\r\n	<li>Kentiko</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '', '', 1, 'Dynamic-Website.html', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-09-05 11:39:49', '2023-09-14 11:54:51'),
(7, 13, 35, '[{\"head\":\"Make Your First Impression Count!\",\"para\":\"A website is also a part of your overall business strategy. And when the needs of the market change, your online strategies change too. Hence, a website redesigning\\/revamping is needed from time to time.\"}]', '', '<h3>A website could need redesigning/revamping for multiple reasons, they could be:</h3>\r\n\r\n<p>Our expert in-house team uses cutting edge technologies to build custom web applications that are stunning, robust, secure and scalable and we follow agile development methodology to ensure flexibility and faster delivery.</p>\r\n\r\n<ul>\r\n	<li>For and keeping your Web Site fresh and up-to-date with improved presence on the web.</li>\r\n	<li>For a new look as part of branding or rebranding exercises.</li>\r\n	<li>For a new look as part of branding or rebranding exercises.</li>\r\n	<li>For making your Web Site to appear constantly on search Engine sites-list.</li>\r\n	<li>For increasing the reputation of your Company, Product and services.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TechCentrica specializes in designing, developing and delivering fully customized web development service based on the client&#39;s requirements and their business goals. We implement Web redesign Workflow that works with your website to give it the fresh new professional look you have been waiting for. We can transform your current website into an electrifying one and give you a sophisticated, professional site that will better reflect your business image and the professionalism of your company.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '', '', 1, 'Website-Revamping.html', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-09-05 11:42:02', '2023-09-14 11:55:35'),
(8, 13, 36, '[{\"head\":\"Using just Pure Love & Passion...\",\"para\":\"An interactive website integrates software into the web page to engage visitors with a more relevant experience. Or you can say a website in which visitors can post their replies and comments to interact with someone behind the website to get solutions for their query in a more entertaining and efficacious manner. Instead of entering in the website and just clicking into a page full of words and boring pictures, visitors click into an exciting web design that immediately jumps off the screen to greet and acknowledge them.\"},{\"head\":\"Advantages of Interactive websites\",\"para\":\"Interactive websites are found to be more eminent than the other websites, because the users can connect better to the interactive website and finds it convivial.  It\\u2019s like you are going to an alien place and suddenly somebody greats you, then you will find yourself in a more comfortable situation.\"}]', 'LET’S EXPLORE THE REAL ADVANTAGES OF AN INTERACTIVE SITE.', '<ul>\r\n	<li>Connect with Customers in Meaningful Ways</li>\r\n	<li>Increase Trust through Customer Psychology</li>\r\n	<li>Increase Conversion Rates</li>\r\n	<li>Improve Personalization</li>\r\n	<li>Strengthen Your Brand Value</li>\r\n	<li>Strengthen Your Brand Value</li>\r\n	<li>Pull in More Quality Natural Backlinks for SEO</li>\r\n	<li>Increase Site Authority in the Eyes of Google</li>\r\n	<li>Gain a Clear Competitive Advantage</li>\r\n	<li>Get a Commitment &amp; Follow-Through</li>\r\n</ul>\r\n\r\n<p>TechCentrica, a leading Website designing Company in Delhi NCR specializes in Design &amp; Development of interactive websites to take your business to new heights.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '', '', 1, 'Interactive-Website.html', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-09-05 11:45:18', '2023-09-14 11:56:11'),
(9, 13, 37, '[{\"head\":\"Sustain Your Business Empire!\",\"para\":\"Website maintenance includes revising, editing, or otherwise changing existing web pages to keep your website up to date. TechCentrica Solutions Web Maintenance tasks fall in two categories.\"}]', '', '<p><strong>Keeping your website up-to-date under Annual Maintenance Cost (AMC)</strong></p>\r\n\r\n<ul>\r\n	<li>Modification and Addition of Website Content</li>\r\n	<li>Text/Images to PDF creation, editing and uploading/removing</li>\r\n	<li>Update announcements, articles, news, etc</li>\r\n	<li>Image Manipulation and Addition (client supplied images like On-site Progress Pictures &amp; Videos</li>\r\n	<li>Technical Troubleshoot and Support</li>\r\n	<li>Website Review and Performance Optimization.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Keeping your website up-to-date under New Development Work (NDW)</strong></p>\r\n\r\n<p>The periodic addition of new web pages and other new development updates over the website keeps the website alive and attracts the visitors, which shall include following tasks:</p>\r\n\r\n<ul>\r\n	<li>New Design or Upadte in Website Flash Movies / Flash Banners / Flash Intros / Flash Ads etc.</li>\r\n	<li>New Web-pages Development.</li>\r\n	<li>Electronic Direct Mailers (EDMs) Design &amp; Development.</li>\r\n	<li>Online Query Form(s) or Online Surveys Design &amp; Development.</li>\r\n	<li>New Design or Upadte Virtual Tours (via Flash / Java Script).</li>\r\n	<li>New Design or Upadte Interactive Master Plans./span&gt;</li>\r\n</ul>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '', '', 1, 'Website-Maintenance.html', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', '2023-09-05 12:23:02', '2023-09-14 11:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `digi_solution`
--

CREATE TABLE `digi_solution` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `solutions` text NOT NULL,
  `card_data` longtext NOT NULL,
  `bottom_heading` text NOT NULL,
  `bottom_description` longtext NOT NULL,
  `meta_data` text NOT NULL,
  `og_image` text NOT NULL,
  `status` int(11) NOT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `digi_solution`
--

INSERT INTO `digi_solution` (`id`, `category_id`, `sub_category_id`, `title`, `description`, `solutions`, `card_data`, `bottom_heading`, `bottom_description`, `meta_data`, `og_image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(2, 15, 42, 'Create a Connection with Pre-Qualified Customers…', '<p>Understanding Digital Marketing is quite easy nowadays, in any event, for any non-specialized individual. Digital Marketing is essentially a sort of special strategy that has been primarily utilized on digital devices. Lately, individuals are snared to PCs, workstations, tablets, and smartphones due to the accessibility of the web on this large number of devices. Various Users can now find and browse their preferable sites on any of these devices and that is the reason why Digital Marketing came into effect.</p>\r\n\r\n<p>Through Traditional Marketing techniques, you can advertise your products in newspapers, television, magazines, signboards, etc. That requires a lot of money and is a time-consuming activity. Thus, in straightforward terms, Digital Marketing is the most common way of publicizing any brand or item/service on digital platforms and is the most effective to generate leads and more user traffic for your business digitally.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"100%\"}', '[{\"card_heading\":\"Escalate Your Business Growth with a Fully-Fledged Digital Marketing Company\",\"card_description\":\"<p>TechCentrica is a fully-fledged&nbsp;<strong>Top Digital Marketing Company in Noida<\\/strong>&nbsp;that escalates your business growth online as well as supports you in building your brand impression.<\\/p>\\r\\n\",\"card_image_alt\":\"Escalate Your\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f97a3368ee5.png\"},{\"card_heading\":\"Financial Stability\",\"card_description\":\"<p>Digital Marketing is a reasonable choice when contrasted with customary advertising. Paper, TV, and radio advancement require gigantic arrangements and costs while showcasing your products\\/services through sites, web journals and online entertainment posts is a modest choice as it gives you financial stability and you can make more business investments.<\\/p>\\r\\n\",\"card_image_alt\":\"Financial Stability\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f98cf2ac6f0.jpg\"},{\"card_heading\":\"Easy to track overall performance\",\"card_description\":\"<p>TechCentrica gives whole transparency in&nbsp;<a href=\\\"https:\\/\\/www.techcentrica.com\\/Internet-Marketing.html\\\">advertising and marketing<\\/a>&nbsp;campaigns and permits you to track your overall marketing performance in real-time. We use Google Analytics to test the outcomes executed through virtual advertising and marketing, which additionally lets you understand and improve your overall performance.<\\/p>\\r\\n\",\"card_image_alt\":\"Easy to track\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f98d2539fd7.jpg\"},{\"card_heading\":\"Get Real-Time Results\",\"card_description\":\"<p>Digital marketing is a low-cost option, in comparison to conventional advertising. Newspaper, television, and radio advertising calls for massive setup and fees at the same time as advertising via websites, blogs, and social media posts are certainly reasonably-priced option that gives you real-time results.<\\/p>\\r\\n\",\"card_image_alt\":\"Get Real-Time\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f98d545eeba.jpg\"},{\"card_heading\":\"Global Exposure\",\"card_description\":\"<p>In conventional advertising and marketing, you may put it up for sale in a selected place or metropolis or can be in any other country; however, the fee will increase with the place covered. However, digital marketing services can give you global exposure in a cost-effective manner .<\\/p>\\r\\n\",\"card_image_alt\":\"Global Exposure\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f98d82c20cb.jpg\"},{\"card_heading\":\"Engage Your Customer\",\"card_description\":\"<p>Once the customers come to be your customers, you may be continuously in contact with them via social media, blogs, etc. This lets you have a straightforward patron base, and whenever you launch a new product, it will reach a lot of customers in a short duration.<\\/p>\\r\\n\",\"card_image_alt\":\"Engage Your Customer\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f98da90692b.jpg\"}]', 'Digital Marketing Tools We Use', '<p><img alt=\"Digital Marketing Companies in Noida\" src=\"https://www.techcentrica.com/images/marketing-certificates-2.svg\" /></p>\r\n', '{\"meta_title\":\"Aliquam et sit paria\",\"meta_keyword\":\"Aliquam et sit paria\",\"meta_description\":\"Enim consequatur co\",\"og_url\":\"Ut rem nisi est sed\",\"og_title\":\"Deserunt explicabo \",\"og_description\":\"Consequatur id nisi\",\"og_site_name\":\"Tarik Klein\",\"canonical\":\"Ut assumenda sed qui\"}', '', 1, 'Digital-Marketing.html', '2023-09-07 12:52:27', '2023-09-14 12:37:48'),
(3, 15, 43, 'Content That Is Relevant To Your Business.', '<p><strong>Use storytelling to connect with your audience more effectively.</strong></p>\r\n\r\n<p>We create the genuine, valuable and dependable content that users find good to read. Techcentrica believes that a delightful content is able to create several memories, hence we ensure our every piece of writing to be entertaining and informative till the end!</p>\r\n\r\n<p>Our Content Writing Services are developed in such a way that people gets engaged to every content we present. This is our way of connecting right people with your brand by touching their emotional nerve. We follow the strategy of promoting your business, presenting your journey in the form of a story that highlights the strong aspects of your business.</p>\r\n\r\n<p>The content we provide, is able to create a solid base for your customers, including each and every detail of your business.</p>\r\n\r\n<p><strong>Following are the content services we provide:</strong></p>\r\n\r\n<p><strong>Content Creation &ndash;</strong>&nbsp;We offer blog writing, article writing, social media posts and web content writing; in simple manner with rich content.</p>\r\n\r\n<p><strong>Content Promotion &ndash;</strong>&nbsp;Once the content is published, we promote the content using our expert digital marketing services.</p>\r\n\r\n<p><strong>Content Management &ndash;</strong>&nbsp;Our experts offer the content updating and maintenance services with full dedication.</p>\r\n\r\n<p>We not only write in words, we express through images and videos as well, so if you want a complete content strategist, we are here to help you!</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '[]', '', '', '{\"meta_title\":\"sd\",\"meta_keyword\":\"sd\",\"meta_description\":\"\",\"og_url\":\"sd\",\"og_title\":\"\",\"og_description\":\"sd\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'Content-Creation.html', '2023-09-07 14:32:13', '2023-09-14 12:38:27'),
(4, 15, 44, 'Enter The Social Hub And Make Your Presence Felt!', '<p><strong>Social media maketing is everything for continuous growth in the digital space.</strong></p>\r\n\r\n<p>Social Media Marketing is the process of generating public opinion through use of social media like online communities, websites and various other medium of communication over internet. It has proved to be a better way of attracting traffic to a website and getting the site optimized than Search Engine Optimization (SEO). It focuses on driving traffic from sources other than search engines and thus it gives improved search ranking. It harnesses a lot of free traffic and is much cheaper than&nbsp;<a href=\"https://www.techcentrica.com/SEO.html\">SEO</a>.</p>\r\n\r\n<p>In traditional marketing, advertising agencies used to publish the advertisements in newspapers, magazines etc. but with the advent of digital news websites, the techniques of marketing have also changed. So, in simple terms, digital marketing is the process of advertising any brand or product/services on digital devices.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"100%\"}', '[{\"card_heading\":\"Our Social Media Marketing Services Will Fuel The Growth Of Your Business\",\"card_description\":\"<p>Social media optimization is a great technique by which you can get more traffic and business for the website. If your website has huge traffic then you can earn by Google absence.<\\/p>\\r\\n\",\"card_image_alt\":\"Our Social Media\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f992c5adc81.png\"},{\"card_heading\":\"Social Consultancy\",\"card_description\":\"<p>Social media consultancy makes it possible to reach out to customers through social networking channels. With the best consultancy services, businesses can get increased traffic and exposure that generates leads and improves sales.<\\/p>\\r\\n\",\"card_image_alt\":\"Social Consultancy\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f993382be82.jpg\"},{\"card_heading\":\"Brand Management\",\"card_description\":\"<p>Brand management is a function that helps in introducing new products in the market. With a great appeal to the products or services, brands can easily get recognition in the market. Higher credibility makes it possible to increase sales.<\\/p>\\r\\n\",\"card_image_alt\":\"Brand Management\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f9935e1847d.jpg\"},{\"card_heading\":\"Social Tone & Nature\",\"card_description\":\"<p>Social Tone &amp; Nature go hand-in-hand and can often be used interchangeably. Using a friendly tone in positive manner, businesses can approach the target audience and elaborate their nature of business. In a warm and inspiring tone, customers can be easily approached.<\\/p>\\r\\n\",\"card_image_alt\":\"Social Tone & Nature\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f9937fd9bf8.jpg\"},{\"card_heading\":\"Social Media Monitoring\",\"card_description\":\"<p>Social Media Monitoring includes the tracking of online brands. With continuous monitoring, top ranking can be maintained for brands. The report on social media provides a chance to understand the points where you are lacking and how to improve.<\\/p>\\r\\n\",\"card_image_alt\":\"Social Media Monitoring\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f9939e5539c.jpg\"},{\"card_heading\":\"Creative Discussion\",\"card_description\":\"<p>Creative discussion is highly important for planning social media strategies. New hashtags, keywords, and content can be finalized through different creative ideas. After integrating them into a perfect piece of content, businesses can be promoted to the best level.<\\/p>\\r\\n\",\"card_image_alt\":\"Creative Discussion\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f993c2d4704.jpg\"}]', '', '', '{\"meta_title\":\"Aliquam et sit paria\",\"meta_keyword\":\"Aliquam et sit paria\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'SMO.html', '2023-09-07 14:37:17', '2023-09-14 12:39:22'),
(5, 15, 45, 'Letting everyone know ‘You Are Online’.', '<p><strong>Connect with pre-qualified customers&hellip;</strong></p>\r\n\r\n<p>For digital marketing, Mobile Application is a crucial area that allows you to interact with your customers. An app is a haven for your business through which your committed customer is always in contact with you, in single click. Mobile app is a fully customized user interface, as per your business needs. However, for most of the businesses, creating an app is not an issue, but the main issue is the app promotion.</p>\r\n\r\n<p>You must have invested a lot of time, in getting the app developed. But the last thing a business owner want to do is to simply through away the app, without even promoting it. There is a general rule of thumb that you must put as much time in promotion of your product as you spent in creating it. The more your app is popular, the more users will download it.</p>\r\n\r\n<p>Techcentrica brings together a complete strategy for promoting your mobile app for huge number of downloads. In this connected world, users are more into digital devices and here we harness the power of digital media to promote your product. We offer cutting-edge marketing techniques to promote your mobile app among the targeted users. Our process begins with aiming at the customers who would be interested in downloading your app and then we go on promoting your application through all means on digital media.</p>\r\n\r\n<p>If you want to experience the highly advanced and technically backed digital marketing services for your mobile app, call us today to check out how we do it!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"single-img-thirteen\" class=\"right\" src=\"https://www.techcentrica.com/images/Mobile-Marketing-Image.png\" style=\"float:left; height:35%; width:100%\" /></p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '[]', '', '', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'Mobile-Marketing.html', '2023-09-07 14:45:32', '2023-09-14 12:41:19'),
(6, 15, 46, 'Boost Your website’s organic traffic through SEO SERVICES .', '<p><strong>It&#39;s Good To Be On Top!</strong></p>\r\n\r\n<p>Search Engine Optimization(SEO) is a procedure that utilizes a mix of certain factors to assist your site with accomplishing higher rankings in significant web crawlers. Search Engine Optimization is a necessary piece of arising Search Engine Marketing or Internet Marketing methodologies that help with advancing your site so it might give you qualified leads, more business, and hence ideal development.</p>\r\n\r\n<p>TechCentrica is the&nbsp;<strong>Top SEO Company in Noida</strong>&nbsp;that represents a considerable specialization in performing all SEO services. Utilizing a philosophy in light of our experience, we distinguish the best blend of methodologies to achieve your particular business objectives - an economical solution, promoting arrangements as well as offering quality outcomes under the google algorithm.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>OUR METHODS FOR SEARCH ENGINE OPTIMIZATION</strong></p>\r\n\r\n<p>Firstly we do market research keeping your business in mind. We understand your target audience and optimize the website accordingly so that your business reaches the right customer at the right time. We work on optimizing a website through on-page, off-page, and technical&nbsp;<strong>SEO tactics</strong>&nbsp;on a continuous basis so that your website performs in an effective way offering the best user experience.</p>\r\n', '{\"digital_solutions\":\"11+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"100%\"}', '[{\"card_heading\":\"Identification of Relevant Keywords\",\"card_description\":\"<p>The success of search engine advertising in large part relies upon choosing the proper key phrases that might make your website description most accurate and relevant. This will help your website perform in a better way in a responsive manner to get higher traffic on your web pages.<\\/p>\\r\\n\",\"card_image_alt\":\"Identification of Relevant Keywords\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f99abe701b2.jpg\"},{\"card_heading\":\"Why Content is Vital in Digital Marketing?\",\"card_description\":\"<p>Search Engines and web crawlers always try to seek the information they found most relevant and important based on user search queries. Search Engines always prefer high-quality unique content with high-keyword density. The website will get more traffic if unique content is used on the website, as content plays a very important role for search engines.<\\/p>\\r\\n\",\"card_image_alt\":\"Why Content is Vital in Digital Marketing?\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f99aeb7047c.jpg\"},{\"card_heading\":\"Site Renaming Strategy\",\"card_description\":\"<p>Renaming the pages of the internet site in keeping with maximum searchable keywords. The higher the webpage&rsquo;s connection design, the better the progressions of web crawlers will search for more extraordinary pages of your site, hence guiding better visitors on your web pages.<\\/p>\\r\\n\",\"card_image_alt\":\"Site Renaming Strategy\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f99ba9197ba.jpg\"},{\"card_heading\":\"Submissions on Various Search Engines\",\"card_description\":\"<p>Submissions done on various search engines and online directories play a very vital role in getting high-quality backlinks for your website resulting in getting higher web traffic. It is a part of the SEO link-building technique that is very important for a website.<\\/p>\\r\\n\",\"card_image_alt\":\"Submissions on Various Search Engines\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f99bcaa25cd.jpg\"},{\"card_heading\":\"Tracking And Analyzing Results\",\"card_description\":\"<p>Though SEO is done on a continuous basis, from Day 1, it takes approximately a duration of 5-6 months to appear in search results. Once it appears, you can easily track and analyze your work efforts through the Google Analytics tool.<\\/p>\\r\\n\",\"card_image_alt\":\"Tracking And Analyzing Results\",\"card_image\":\"uploads\\/digi_solution\\/techcentrica_64f99beed72de.jpg\"}]', '', '', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'SEO.html', '2023-09-07 15:11:18', '2023-09-14 12:41:05'),
(7, 15, 47, 'The World is Online...', '<p><strong>Replies Faster Than A Speeding Bullet.</strong></p>\r\n\r\n<p>Are you aware of what your customers are saying about you? What about your ex-employees? What about your competitors? Information travels quickly across the internet. Are you listening to the online conversations about your brand? How are these conversations affecting how people view your organization?</p>\r\n\r\n<p>In today&rsquo;s technology driven world, one can easily do away with all kinds of negative comments and negative propaganda against one&rsquo;s business online. There are online reputation management tools and tips that can be implemented to manage your online reputation especially with a strong&nbsp;<a href=\"https://www.techcentrica.com/SEO.html\">SEO</a>&nbsp;team, who has been successful in promoting your website.</p>\r\n\r\n<p>TechCentrica&#39;s teams of experts work round-the-clock to successfully build, defend, shape and maintain your online reputation. They enhance the visibility and revive the online image of your website by managing consumer generated media. They help you in improving customer&#39;s satisfaction by gaining their feedback of a brand or website.</p>\r\n\r\n<p><strong>Our ORM Services Include:</strong></p>\r\n\r\n<ul>\r\n	<li>Reputation Monitoring</li>\r\n	<li>Search Protection</li>\r\n	<li>Review&#39;s Management</li>\r\n	<li>Listing &amp; Analysis</li>\r\n</ul>\r\n\r\n<h3><strong>Prevention is better than Cure</strong></h3>\r\n\r\n<p><img alt=\"single-img-thirteen\" src=\"https://www.techcentrica.com/images/ORM-Image.jpg\" style=\"height:30%; width:100%\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Online Reputation Management combines marketing and public relations with search engine marketing. Visibility and high rankings for good publicity are the ultimate goals, which will in turn push bad publicity down the search engine listings and out of public view. Statistics show that the general public rarely views more than two pages of search engine results for any search.</p>\r\n\r\n<p>We, at TechCentrica, with our Online Reputation Management services, ensure high rankings and indexing in the search engines for all positive associated web sites and corporate communications. The result is an increase in your overall positive web presence, which will help you own the top spots of the search engine rankings for your brand. Online Reputation Management enables you to protect and manage your reputation by becoming actively involved in the outcome of search engine results by creating online assets - assets that are owned and controlled by you.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '[]', '', '', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'ORM.html', '2023-09-07 15:22:42', '2023-09-14 12:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `image` text NOT NULL,
  `created_by` text NOT NULL,
  `file` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `filename`, `image`, `created_by`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'uploads/documents/techcentrica_6516c22f48d86.docx', '17', '', '2023-09-29 17:10:38', '2023-09-29 17:55:19'),
(2, 'Test11', 'uploads/documents/techcentrica_651bbd3c57059.xlsx', '17', '', '2023-09-29 17:10:44', '2023-10-03 12:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `id` int(11) NOT NULL,
  `bookmark` int(1) NOT NULL,
  `city` text DEFAULT NULL,
  `country` varchar(125) NOT NULL,
  `lead_ip` text NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `lead_owner` int(10) NOT NULL DEFAULT 0,
  `comments` text NOT NULL,
  `status` int(1) NOT NULL,
  `seen` int(1) NOT NULL,
  `source` int(1) NOT NULL,
  `service` int(10) NOT NULL,
  `followup_note` longtext NOT NULL,
  `enquery_type` int(1) NOT NULL,
  `enquery_mode` int(1) NOT NULL,
  `lead_quality` text NOT NULL,
  `followup_date` datetime DEFAULT current_timestamp(),
  `spam_Id` int(1) NOT NULL DEFAULT 0,
  `count_seen` int(125) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`id`, `bookmark`, `city`, `country`, `lead_ip`, `name`, `email`, `phone`, `lead_owner`, `comments`, `status`, `seen`, `source`, `service`, `followup_note`, `enquery_type`, `enquery_mode`, `lead_quality`, `followup_date`, `spam_Id`, `count_seen`, `created_at`, `updated_at`) VALUES
(43, 0, 'Noida', '', '103.44.53.133', 'Georgia Marquez', 'leza@mailinator.com', 'Nisi accusamus ad co', 1, 'Nihil repellendus N', 1, 1, 1, 0, '[{\"followup_note\":\"Spam Lead\",\"followup_date\":\"2023-09-22 15:52:09\",\"enquery_type\":\"7\",\"created_at\":\"2023-09-22 15:52:09\"}]', 7, 0, '', '2023-09-22 15:52:09', 1, 0, '2023-09-22 14:18:23', '2023-09-22 15:52:09'),
(44, 0, '', '', '', 'test', 'tcdigitalmarketing1@gmail.com', 'tcdigitalmarketing', 1, 'w43terertyg4e\r\n', 1, 1, 1, 0, '[{\"followup_note\":\"Spam Lead\",\"followup_date\":\"2023-09-22 15:51:47\",\"enquery_type\":\"7\",\"created_at\":\"2023-09-22 15:51:47\"}]', 7, 0, '', '2023-09-22 15:51:47', 1, 0, '2023-09-22 14:24:33', '2023-09-22 15:51:47'),
(45, 0, '', '', '', 'WilliamKem', 'gallyamova_galinka@mail.ru', '84957485577', 1, 'Source: \r\n \r\n- <a href=https://tf2loadout.com/kraken-sajt-magazin-ceny-onion-top.html>кракен сайт магазин цены onion top</a> \r\n \r\n \r\nкракен сайт магазин цены onion top', 1, 1, 1, 0, '[{\"followup_note\":\"Spam Lead\",\"followup_date\":\"2023-09-22 15:51:08\",\"enquery_type\":\"7\",\"created_at\":\"2023-09-22 15:51:08\"}]', 7, 0, '', '2023-09-22 15:51:08', 1, 0, '2023-09-22 15:49:44', '2023-09-22 15:51:08'),
(46, 0, '', '', '', 'Mr. Saurabh and Ms. Vinita', 'saurabh@ravyanshcreations.com and vinita@ravyanshcreations.com', '9818070496', 17, 'Proposal and reference websites has already been sent to the client yesterday and need to take follow-up.', 1, 1, 4, 0, '[{\"followup_note\":\"Need to take follow-up tomorrow.\",\"followup_date\":\"2023-09-23 11:00:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-22 16:00:55\"}]', 1, 0, '', '2023-09-23 11:00:00', 0, 0, '2023-09-22 15:58:11', '2023-09-22 16:00:55'),
(47, 0, '', '', '', 'Mr. Dinesh', 'marketing@lesolitairian.com', '8686607333', 17, 'Proposal and reference websites has already been sent to the client yesterday and need to take follow-up.', 1, 1, 1, 0, '[{\"followup_note\":\"Need to take Follow-up tomorrow.\",\"followup_date\":\"2023-09-23 11:05:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-22 16:05:10\"}]', 1, 0, '', '2023-09-23 11:05:00', 0, 0, '2023-09-22 16:04:14', '2023-09-22 16:05:10'),
(48, 0, '', '', '', 'Client', 'NA', '7838244505', 17, 'Client has too low budget and therefore cannot be taken further.', 1, 1, 2, 0, '[{\"followup_note\":\"Cannot continue further, as client has too low budget.\",\"followup_date\":\"2023-09-22 16:12:03\",\"enquery_type\":\"5\",\"created_at\":\"2023-09-22 16:12:03\"}]', 5, 0, '', '2023-09-22 16:12:03', 0, 0, '2023-09-22 16:10:41', '2023-09-22 16:12:03'),
(49, 0, '', '', '', 'Piyush', 'piyush@kelevosoftware.com', '9354597867', 17, 'Client has not picked up my calls and I have dropped message also, but he didn\'t respond.', 1, 1, 1, 0, '[{\"followup_note\":\"Client has not responded to calls and messages.\",\"followup_date\":\"2023-09-22 16:28:35\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-22 16:28:35\"}]', 2, 0, '', '2023-09-22 16:28:35', 0, 0, '2023-09-22 16:27:34', '2023-09-22 16:28:35'),
(50, 0, '', '', '', 'Mr. Ankit Aggarwal', 'agrawal.ankit@dalmiacement.com ', '9870900144', 17, 'Face to Face meeting has been done with the client, and MOM has also been sent to the client.', 1, 1, 1, 0, '[{\"followup_note\":\"Will take follow-up with the client tomorrow.\",\"followup_date\":\"2023-09-23 12:00:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-22 16:48:49\"}]', 1, 0, '', '2023-09-23 12:00:00', 0, 0, '2023-09-22 16:47:19', '2023-09-22 16:48:49'),
(51, 0, '', '', '', 'Mr. Nitin Chauhan', ' nitinchauhang@gmail.com', '9910515630', 17, 'Client has asked for scheduling a meeting, but team is unavailable at that time, so he has not proceed further.', 1, 1, 4, 0, '[{\"followup_note\":\"Client has asked for scheduling a meeting, but team is unavailable at that time, so he has not proceed further.\",\"followup_date\":\"2023-09-22 16:58:45\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-22 16:58:45\"}]', 2, 0, '', '2023-09-22 16:58:45', 0, 0, '2023-09-22 16:58:00', '2023-09-22 16:58:45'),
(52, 0, '', '', '', 'Alan', 'Alan@guest-post-service.com', '2032868663', 1, 'Hello,\r\nI just saw your article https://writeupcafe.com/seo-services-in-noida-seo-company-in-noida/\r\n and would like to know if you are looking for some more guest posts like that one. You could also forward this email to your current SEO company We\'ll partner to get the best results for your website.\r\nWe are looking forward to hearing from you.\r\n\r\nThanks\r\n\r\nAlan\r\n\r\nhttps://www.guest-post-service.com\r\n\r\nDon\'t want to receive any more email from us? Reply NO.\r\n', 1, 1, 1, 0, '[{\"followup_note\":\"Spam Lead\",\"followup_date\":\"2023-09-22 17:26:58\",\"enquery_type\":\"7\",\"created_at\":\"2023-09-22 17:26:58\"}]', 7, 0, '', '2023-09-22 17:26:58', 1, 0, '2023-09-22 17:10:14', '2023-09-22 17:26:58'),
(53, 0, '', '', '', 'Mr. Rudra Pratap Singh', 'marketing@flyingcolour.com and marketing1@flyingcolour.com', '971551683278', 17, 'SEO and digital marketing scope for Flying Colours', 1, 1, 4, 0, '[{\"followup_note\":\"Have taken meeting and have sent the SEO and website audit reports to the client today,  will take follow-up on Monday.\",\"followup_date\":\"2023-09-25 11:00:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-22 17:40:31\"},{\"followup_note\":\"I have been taking follow-up on the reports and proposal sent .\\r\\nand he replied that by this week he will inform us and will keep a meeting also to discuss.\",\"followup_date\":\"2023-10-06 12:00:00\",\"enquery_mode\":\"1\",\"enquery_type\":\"1\",\"created_at\":\"2023-10-04 13:08:58\"}]', 1, 1, '', '2023-10-06 12:00:00', 0, 0, '2023-09-22 17:39:08', '2023-10-04 13:08:58'),
(54, 0, '', '', '', 'Mr. Ashish Jain', 'creative.aashish@gmail.com', '9770066611', 17, 'Want to develop website and SEO, SMO too.', 1, 1, 1, 0, '[{\"followup_note\":\"I have sent the website and social media proposals but he said it is very costly.\",\"followup_date\":\"2023-09-22 17:46:18\",\"enquery_type\":\"5\",\"created_at\":\"2023-09-22 17:46:18\"}]', 5, 0, '', '2023-09-22 17:46:18', 0, 0, '2023-09-22 17:45:21', '2023-09-22 17:46:18'),
(55, 0, '', '', '', 'Mr. Peter', 'rexcaelimedcare@gmail.com', '8448132214', 17, 'Want website development for medical tourism.', 1, 1, 4, 0, '[{\"followup_note\":\"Have sent the proposal to the client today and will take follow-up by Monday.\",\"followup_date\":\"2023-09-25 12:00:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-22 17:51:22\"}]', 1, 0, '', '2023-09-25 12:00:00', 0, 0, '2023-09-22 17:49:55', '2023-09-22 17:51:22'),
(56, 0, '', '', '', 'Mr. Krishna Chaudhary', 'krishnagopalsingh@its.edu.in', '7223020168', 17, 'Want t redevelop their website for their university i.e. ITS Education Group.', 1, 1, 1, 0, '[{\"followup_note\":\"Have already sent the proposal and quote terms are also negotiated, and client had told that they are working on it and will inform ASAP.\",\"followup_date\":\"2023-09-26 12:00:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-22 17:58:07\"}]', 1, 0, '', '2023-09-26 12:00:00', 0, 0, '2023-09-22 17:55:46', '2023-09-22 17:58:07'),
(57, 0, '', '', '', 'Eric Jones', 'ericjonesmyemail@gmail.com', '555-555-1212', 1, 'To the techcentrica.com Webmaster! this is Eric and I ran across techcentrica.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bouncing around – what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment.\r\n\r\nHere’s an idea…\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your site…\r\n \r\nYou can –\r\n  \r\nWeb Visitors Into Leads is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE https://advanceleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nYou’ll be amazed - the difference between contacting someone within 5 minutes versus a half-hour or more later could increase your results 100-fold.\r\n\r\nIt gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation.\r\n  \r\nThat way, even if you don’t close a deal right away, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nPretty sweet – AND effective.\r\n\r\nCLICK HERE https://advanceleadgeneration.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://advanceleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://advanceleadgeneration.com/unsubscribe.aspx?d=techcentrica.com\r\n', 1, 0, 1, 0, '', 0, 0, '', '2023-09-23 04:43:49', 1, 0, '2023-09-23 04:43:49', '0000-00-00 00:00:00'),
(58, 0, '', '', '', 'Eric Jones', 'ericjonesmyemail@gmail.com', '555-555-1212', 1, 'Hello techcentrica.com Administrator. my name’s Eric and for just a second, imagine this…\r\n\r\n- Someone does a search and winds up at techcentrica.com.\r\n\r\n- They hang out for a minute to check it out.  “I’m interested… but… maybe…”\r\n\r\n- And then they hit the back button and check out the other search results instead. \r\n\r\n- Bottom line – you got an eyeball, but nothing else to show for it.\r\n\r\n- There they go.\r\n\r\nThis isn’t really your fault – it happens a LOT – studies show 7 out of 10 visitors to any site disappear without leaving a trace.\r\n\r\nBut you CAN fix that.\r\n\r\nWeb Visitors Into Leads is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know right then and there – enabling you to call that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE https://advanceleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nPlus, now that you have their phone number, with our new SMS Text With Lead feature you can automatically start a text (SMS) conversation… so even if you don’t close a deal then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nStrong stuff.\r\n\r\nCLICK HERE https://advanceleadgeneration.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://advanceleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://advanceleadgeneration.com/unsubscribe.aspx?d=techcentrica.com\r\n', 1, 0, 1, 0, '', 0, 0, '', '2023-09-23 08:41:59', 1, 0, '2023-09-23 08:41:59', '0000-00-00 00:00:00'),
(59, 0, '', '', '103.44.53.133', 'Pushap Gupta', 'pushapnaraingupta@gmail.com', '9654221960', 0, 'Test Enquiry Page', 1, 0, 1, 0, '', 0, 0, '', '2023-09-23 17:51:00', 1, 0, '2023-09-23 17:51:00', '0000-00-00 00:00:00'),
(60, 0, '', '', '103.44.53.133', 'Pushap Gupta', 'pushapnaraingupta@gmail.com', '9654221960', 0, 'Test Enquiry Page', 1, 0, 1, 0, '', 0, 0, '', '2023-09-23 17:51:07', 1, 0, '2023-09-23 17:51:07', '0000-00-00 00:00:00'),
(61, 0, '', '', '103.44.53.138', 'Suresh Sarkar', 'sureshsarkar201811@gmail.com', '+919511060074', 0, 'Test', 1, 0, 1, 0, '', 0, 0, '', '2023-09-23 17:53:30', 1, 0, '2023-09-23 17:53:30', '0000-00-00 00:00:00'),
(62, 0, '', '', '172.104.233.184', 'Batteriesllo', 'jfrey196974@gmail.com', '87682452948', 0, 'inventions of typography', 1, 1, 1, 0, '', 0, 0, '', '2023-09-23 17:54:43', 1, 0, '2023-09-23 17:54:43', '0000-00-00 00:00:00'),
(63, 0, '', '', '103.44.53.138', 'Suresh Sarkar', 'suresh.s@techcentrica.com', '9876547865', 0, 'Test', 1, 1, 1, 3, '', 0, 0, '', '2023-09-23 18:02:23', 1, 0, '2023-09-23 18:02:23', '0000-00-00 00:00:00'),
(64, 0, '', '', '108.54.67.10', 'Feedercdh', 'jj@hailusa.com', '88832252612', 0, '55 thousand Greek, 30 thousand Armenian', 1, 0, 1, 3, '', 0, 0, '', '2023-09-23 18:05:28', 1, 0, '2023-09-23 18:05:28', '0000-00-00 00:00:00'),
(65, 0, '', '', '103.44.53.138', 'test', 'tcdigitalmarketing1@gmail.com', '09654221960', 0, 'ok ', 1, 0, 1, 4, '', 0, 0, '', '2023-09-23 18:05:50', 1, 0, '2023-09-23 18:05:50', '0000-00-00 00:00:00'),
(66, 0, 'Delhi', '', '103.44.53.138', 'Suresh Sarkar', 'sureshsarkar2020@gmail.com', '+919511060074', 1, 'Test', 1, 1, 1, 7, '', 0, 0, '', '2023-09-23 18:11:37', 1, 0, '2023-09-23 18:11:37', '0000-00-00 00:00:00'),
(67, 0, '', '', '103.44.53.138', 'Suresh Sarkar', 'suresh.s@techcentrica.com', '9876547865', 1, 'test', 1, 0, 1, 9, '', 0, 0, '', '2023-09-23 18:14:51', 1, 0, '2023-09-23 18:14:51', '0000-00-00 00:00:00'),
(68, 0, '', '', '103.44.53.138', 'Suresh Sarkar', 'suresh.s@techcentrica.com', '9876547865', 1, 'test', 1, 0, 1, 9, '', 0, 0, '', '2023-09-23 18:15:03', 1, 0, '2023-09-23 18:15:03', '0000-00-00 00:00:00'),
(69, 0, '', '', '103.44.53.138', 'Suresh Sarkar', 'suresh.s@techcentrica.com', '9876547865', 1, 'test', 1, 0, 1, 9, '', 0, 0, '', '2023-09-23 18:15:57', 1, 0, '2023-09-23 18:15:57', '0000-00-00 00:00:00'),
(70, 0, 'Moscow', '', '152.89.198.45', 'Williamder', 'fjjfsjfjejrjejvfr@outlook.com', '84695956265', 0, '<a href=https://asapmarkets.org>asapmarkets.org </a> \r\nMarket Darknet asap \r\nonion darknet asap \r\nTo protect themselves from the dangers of the darknet market, individuals should avoid accessing these sites altogether. Using the Tor network or engaging in illegal activities can put individuals at risk of legal consequences and compromise their personal information. It is essential to prioritize online safety and adhere to the laws and regulations of the country in which one resides.', 1, 0, 1, 9, '', 0, 0, '', '2023-09-23 21:21:33', 1, 0, '2023-09-23 21:21:33', '0000-00-00 00:00:00'),
(71, 0, 'Mumbai', '', '172.105.50.156', 'Foamsuv', 'pklewis@hotmail.com', '82283672353', 0, 'written on the parchment was scratched out', 1, 1, 1, 9, '', 0, 0, '', '2023-09-23 22:32:18', 1, 0, '2023-09-23 22:32:18', '0000-00-00 00:00:00'),
(72, 0, '', '', '45.79.78.65', 'Glasspqh', 'meredith@sivick.net', '81614795568', 0, 'text carrier and protective', 1, 1, 1, 7, '', 0, 0, '', '2023-09-24 00:19:33', 1, 0, '2023-09-24 00:19:33', '0000-00-00 00:00:00'),
(73, 0, '', '', '188.126.79.27', 'Isabellasr', 'isabellasr@renouveauhome.com', '83685733491', 0, 'Hi!\r\nI\'vе notіced that manу guys рrеfer rеgulаr gіrlѕ.\r\nI арplаude thе mеn out there who hаd the ballѕ to enϳoy the lovе of manу women and chооsе the оne thаt he knew would be his beѕt friеnd durіng the bumрy and сrazу thing саlled lіfе.\r\nI wаnted tо bе thаt friend, nоt ϳust а ѕtablе, relіable and borіng hоusеwіfe.\r\nΙ am 23 уears оld, Iѕаbеllа, frоm thе Czеch Rерublіс, knоw Еngliѕh lаnguаgе аlѕо.\r\nΑnywаy, you сan find my рrоfilе hеrе: http://enelatrisatern.ml/idl-19737/ \r\n', 1, 0, 1, 4, '', 0, 0, '', '2023-09-24 01:18:40', 1, 0, '2023-09-24 01:18:40', '0000-00-00 00:00:00'),
(74, 0, '', '', '', 'Mr. Brajesh', 'brajesh@ikrispharmanetwork.com', '8178445695', 17, 'Website Development for their new project.', 1, 1, 1, 0, '[{\"followup_note\":\"When I shared proposal, they had a issue with budget. Later they told that they have chosen someone else from their boss reference. But we have their one project currently going on i.e. for SattvaShilp website.\",\"followup_date\":\"2023-09-25 10:20:31\",\"enquery_type\":\"5\",\"created_at\":\"2023-09-25 10:20:31\"}]', 5, 0, '', '2023-09-25 10:20:31', 0, 0, '2023-09-25 10:17:48', '2023-09-25 10:20:31'),
(75, 0, '', '', '', 'Mr. Akash', 'NA', '8093713509', 17, 'Website Development', 1, 1, 1, 0, '[{\"followup_note\":\"Have tried calling many times, but the number is going continuously switched off.\",\"followup_date\":\"2023-09-25 10:22:27\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-25 10:22:27\"}]', 2, 0, '', '2023-09-25 10:22:27', 0, 0, '2023-09-25 10:21:34', '2023-09-25 10:22:27'),
(76, 0, '', '', '', 'Mr. Har Prakash', 'harprakash.ijmcpl@gmail.com', '9971776080', 17, 'Want website development with frontend in next.js and backend in Django.', 1, 1, 1, 0, '[{\"followup_note\":\"As technologies asked by client is Django and next.js, it got remain in between.\",\"followup_date\":\"2023-09-25 11:01:04\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-25 11:01:04\"}]', 2, 0, '', '2023-09-25 11:01:04', 0, 0, '2023-09-25 10:58:54', '2023-09-25 11:01:04'),
(77, 0, '', '', '', 'Mr. Anurup', 'NA', '8076995083', 17, 'Website Development', 1, 1, 1, 0, '[{\"followup_note\":\"Client told to have virtual meeting, as they couldn\'t come for face to face meeting... but later they didn\'t provide any update even after taking follow-up.\",\"followup_date\":\"2023-09-25 11:06:49\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-25 11:06:49\"}]', 2, 0, '', '2023-09-25 11:06:49', 0, 0, '2023-09-25 11:02:58', '2023-09-25 11:06:49'),
(78, 0, '', '', '', 'Mr. Anirudh Ganguly', '1970.ganguly@gmail.com', '9711371052', 17, 'Website Development', 1, 1, 1, 0, '[{\"followup_note\":\"Client budget was too low then what was given in the proposal\",\"followup_date\":\"2023-09-25 11:16:06\",\"enquery_type\":\"5\",\"created_at\":\"2023-09-25 11:16:06\"}]', 5, 0, '', '2023-09-25 11:16:06', 0, 0, '2023-09-25 11:15:21', '2023-09-25 11:16:06'),
(79, 0, '', '', '', 'Mr. Arvind Yadav', 'arvindcipet93@gmail.com', '9116015124', 17, 'Multivendor e-commerce website development', 1, 1, 4, 0, '[{\"followup_note\":\"Need to send the proposal for multi vendor website in food and resturants.\",\"followup_date\":\"2023-09-25 12:09:37\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-25 12:09:37\"},{\"followup_note\":\"Have told the client about pricing, as he is just keen to know and enquire about the quote part.\",\"followup_date\":\"2023-09-29 13:31:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-25 13:31:35\"}]', 1, 0, '', '2023-09-29 13:31:00', 0, 0, '2023-09-25 12:08:32', '2023-09-25 13:31:35'),
(80, 0, '', '', '', 'Ms. Laxmi', 'info@myeducationwire.com', '9354979011', 17, 'Website Development', 1, 1, 1, 0, '[{\"followup_note\":\"Have called  client, but she has not picked up the call. Dropped the message for the same to get a suitable timing over the call.\\r\\nWill call once I will get any reply from client.\",\"followup_date\":\"2023-09-25 13:34:15\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-25 13:34:15\"}]', 4, 0, '', '2023-09-25 13:34:15', 0, 0, '2023-09-25 13:32:29', '2023-09-25 13:34:15'),
(81, 0, '', '', '', 'Mr. Ashok Sharma', 'ashoka9810412752@gmail.com', '9810412752', 17, 'SEO+SMO', 1, 1, 5, 0, '[{\"followup_note\":\"Have gathered the requirements and he wants SEO+SMO on all platforms, and he has too low budget for the same.\",\"followup_date\":\"2023-09-25 13:37:22\",\"enquery_type\":\"5\",\"created_at\":\"2023-09-25 13:37:22\"}]', 5, 0, '', '2023-09-25 13:37:22', 0, 0, '2023-09-25 13:35:55', '2023-09-25 13:37:22'),
(82, 0, '', '', '', 'Ms. Amrit Kaur', 'amritekas@gmail.com', '9871325160', 17, 'social media promotions', 1, 1, 5, 0, '[{\"followup_note\":\"Have called client and she has asked to call after 6 o\'clock in the evening.\",\"followup_date\":\"2023-09-25 13:38:58\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-25 13:38:58\"},{\"followup_note\":\"I have called her by 6 o\'clock, but she asked to call by herself.\",\"followup_date\":\"2023-09-25 18:05:30\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-25 18:05:30\"},{\"followup_note\":\"Haven\'t got any call from client end, after calling her many times.\",\"followup_date\":\"2023-09-27 11:16:00\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-29 11:16:57\"}]', 2, 0, '', '2023-09-27 11:16:00', 0, 0, '2023-09-25 13:38:13', '2023-09-29 11:16:57'),
(83, 0, '', '', '', 'Rajive Gognaa', 'rajive_gognaa@rediffmail.com', '9810138712', 17, 'SMO', 1, 1, 5, 0, '[{\"followup_note\":\"He is not picking up the calls.\",\"followup_date\":\"2023-09-26 11:07:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-25 18:07:51\"}]', 4, 0, '', '2023-09-26 11:07:00', 0, 0, '2023-09-25 18:06:34', '2023-09-25 18:07:51'),
(84, 0, '', '', '', 'Mr. Kuldeep', 'dalalk@ymail.com', '8813000373', 17, 'SEO', 1, 1, 5, 0, '[{\"followup_note\":\"He has cut my calls.\",\"followup_date\":\"2023-09-26 11:09:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-25 18:09:37\"}]', 4, 0, '', '2023-09-26 11:09:00', 0, 0, '2023-09-25 18:08:42', '2023-09-25 18:09:37'),
(85, 0, '', '', '', 'Mr. Sudish Sah', 'clipimagesmedia@gmail.com', '9960104292', 17, 'SEO', 1, 1, 5, 0, '[{\"followup_note\":\"His contact number is not reachable.\",\"followup_date\":\"2023-09-26 12:11:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-25 18:11:28\"}]', 4, 0, '', '2023-09-26 12:11:00', 0, 0, '2023-09-25 18:10:46', '2023-09-25 18:11:28'),
(86, 0, '', '', '', 'Mr. Rajeev Kumar', 'support@hrbs.in', '9873402310', 17, 'other', 1, 1, 5, 0, '[{\"followup_note\":\"He is not picking up the calls.\",\"followup_date\":\"2023-09-26 11:20:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-25 18:13:17\"}]', 4, 0, '', '2023-09-26 11:20:00', 0, 0, '2023-09-25 18:12:29', '2023-09-25 18:13:17'),
(87, 0, '', '', '', 'Mr. Tej Kumar', 'tejkumar19@gmail.com', '917042112346', 17, 'SEO', 1, 1, 5, 0, '[{\"followup_note\":\"He has asked to  call after sometime.\",\"followup_date\":\"2023-09-26 10:20:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-25 18:14:38\"}]', 4, 0, '', '2023-09-26 10:20:00', 0, 0, '2023-09-25 18:13:56', '2023-09-25 18:14:38'),
(88, 0, '', '', '', 'Mr. Ajay', 'ajaykumar1234@gmail.com', '918267856659', 17, 'other', 1, 1, 5, 0, '[{\"followup_note\":\"He has cut the calls.\",\"followup_date\":\"2023-09-26 10:23:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-25 18:16:22\"},{\"followup_note\":\"As he has cut all the calls, he is not interested.\",\"followup_date\":\"2023-09-29 11:22:00\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-29 11:22:24\"}]', 2, 0, '', '2023-09-29 11:22:00', 0, 0, '2023-09-25 18:15:42', '2023-09-29 11:22:24'),
(89, 0, '', '', '', 'SQC Certification Services Pvt. Ltd.', 'NA', '9990747758', 17, 'Website, SEO', 1, 1, 1, 0, '[{\"followup_note\":\"Meeting was done with client, but she has not updated anything after that on taking follow up.\",\"followup_date\":\"2023-09-25 18:18:54\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-25 18:18:54\"}]', 2, 0, '', '2023-09-25 18:18:54', 0, 0, '2023-09-25 18:17:47', '2023-09-25 18:18:54'),
(90, 0, 'Frankfurt am Main', 'DE', '172.104.233.184', 'Mr. Parth Yadav', 'NA', '9625151188', 17, 'Website Development', 1, 1, 1, 0, '[{\"followup_note\":\"Have not picked up the calls, dropped a message to have an appointment for discussing requirements, but got no reply.\",\"followup_date\":\"2023-09-25 18:21:27\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-25 18:21:27\"}]', 2, 0, '', '2023-09-25 18:21:27', 0, 0, '2023-09-25 18:19:48', '2023-09-25 18:21:27'),
(91, 0, '', '', '103.44.53.133', 'Suresh Sarkar', 'suresh.s@techcentrica.com', '9876547865', 1, 'Test', 1, 0, 1, 1, '', 0, 0, '', '2023-09-25 18:43:05', 1, 0, '2023-09-25 18:43:05', '0000-00-00 00:00:00'),
(92, 0, 'Delhi', 'IN', '103.44.53.133', 'Prachi', 'prachi@techcentrica.com', '9654221960', 0, 'Looking for Digital Services', 1, 1, 1, 2, '', 0, 0, '', '2023-09-25 18:44:05', 1, 0, '2023-09-25 18:44:05', '0000-00-00 00:00:00'),
(93, 0, '', '', '103.44.53.133', 'AKG PLASTICS PVT LTD (Formerly AKG Industries)', 'akggrouppipes@gmail.com', '8448793165', 1, 'SMO Test', 1, 0, 1, 5, '', 0, 0, '', '2023-09-25 18:46:47', 1, 0, '2023-09-25 18:46:47', '0000-00-00 00:00:00'),
(94, 0, 'Singapore', 'SG', '8.219.250.133', 'Hermantak', 'pghdk@course-fitness.com', '89367842569', 0, '滿天星娛樂城 STAR \r\n \r\n \r\n \r\nhttps://xn--uis74a0us56agwe20i.com/', 1, 1, 1, 4, '', 0, 0, '', '2023-09-26 01:39:58', 1, 0, '2023-09-26 01:39:58', '0000-00-00 00:00:00'),
(95, 0, 'Frankfurt am Main', 'DE', '45.95.39.212', 'Eric Jones', 'ericjonesmyemail@gmail.com', '555-555-1212', 0, 'Dear techcentrica.com Owner! \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with techcentrica.com definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nWeb Visitors Into Leads is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out techcentrica.com.\r\n\r\nCLICK HERE https://advanceleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE https://advanceleadgeneration.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://advanceleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://advanceleadgeneration.com/unsubscribe.aspx?d=techcentrica.com\r\n', 1, 1, 1, 2, '', 0, 0, '', '2023-09-26 05:20:34', 1, 0, '2023-09-26 05:20:34', '0000-00-00 00:00:00'),
(96, 0, 'Frankfurt am Main', 'DE', '172.104.233.184', 'Flashpaqgyl', 'prisonpulse@gmail.com', '85424191817', 0, 'ancient and medieval Latin,', 1, 1, 1, 5, '', 0, 0, '', '2023-09-26 13:22:12', 1, 0, '2023-09-26 13:22:12', '0000-00-00 00:00:00'),
(97, 0, '', '', '', 'Mr. Praveen Dogra', 'omadmark@gmail.com', '9810987702', 17, 'Website Development', 1, 1, 1, 0, '[{\"followup_note\":\"He has asked to call by tomorrow 10 AM.\",\"followup_date\":\"2023-09-27 10:00:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-26 14:56:51\"},{\"followup_note\":\"I called, but he didn\'t picked the call.\\r\\nNor I got any response on the message.\",\"followup_date\":\"2023-09-29 11:31:00\",\"enquery_type\":\"2\",\"created_at\":\"2023-09-29 11:31:19\"}]', 2, 0, '', '2023-09-29 11:31:00', 0, 0, '2023-09-26 14:55:59', '2023-09-29 11:31:19'),
(98, 0, '', '', '', 'Mr. Ankush Sihag', 'ankushsihag@gmail.com', '919991513999', 17, 'SMO', 1, 1, 5, 0, '[{\"followup_note\":\"He said he is busy and will call by himself.\",\"followup_date\":\"2023-09-27 11:00:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-26 14:59:13\"},{\"followup_note\":\"Haven\'t got any call yet, I also dropped a message to client on WhatsApp, but have not got any response.\",\"followup_date\":\"2023-10-02 11:21:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-29 11:21:05\"}]', 1, 0, '', '2023-10-02 11:21:00', 0, 0, '2023-09-26 14:58:05', '2023-09-29 11:21:05'),
(99, 0, 'Frankfurt am Main', 'DE', '172.104.233.184', 'Arnottssz', 'prisonpulse@gmail.com', '89919226925', 0, 'One of the most skilled calligraphers', 1, 0, 1, 5, '', 0, 0, '', '2023-09-26 16:06:54', 1, 0, '2023-09-26 16:06:54', '0000-00-00 00:00:00'),
(100, 0, '', '', '', 'Mr. Shubham', 'shubhamsingh52052@gmail.com', '9026728004', 17, 'Seo service proposal with website audit report', 1, 1, 1, 0, '[{\"followup_note\":\"Need to send the website audit report with SEO proposal.\",\"followup_date\":\"2023-09-27 13:37:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-26 16:37:55\"},{\"followup_note\":\"Have send all the reports and SEO proposal to them. Will take follow-up accordingly.\",\"followup_date\":\"2023-09-30 11:19:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-29 11:19:36\"},{\"followup_note\":\"Have taken follow-up from the client..he said that he has a accident and have cut the call.\\r\\nSo for now I am putting it in not interested..If I get any reply from client then I will change the status.\",\"followup_date\":\"2023-10-04 14:42:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"2\",\"created_at\":\"2023-10-05 14:42:14\"}]', 2, 0, '', '2023-10-04 14:42:00', 0, 0, '2023-09-26 16:36:51', '2023-10-05 14:42:14'),
(101, 0, '', '', '', 'ArtCulture', 'artgallery20191@gmail.com', '9521755820', 17, 'SEO+SMO', 1, 1, 4, 0, '[{\"followup_note\":\"Need to send the SEO and SMO audit report, after receiving from the team. \",\"followup_date\":\"2023-09-27 15:41:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-26 16:42:09\"},{\"followup_note\":\"Have send all the reports and seo proposal to them.\\r\\nWill take follow-up accordingly.\",\"followup_date\":\"2023-09-30 11:15:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-29 11:15:42\"}]', 1, 0, '', '2023-09-30 11:15:00', 0, 0, '2023-09-26 16:40:14', '2023-09-29 11:15:42'),
(102, 0, 'Moscow', 'RU', '46.8.56.63', 'Timothyjox', 'gallyamova_galinka@mail.ru', '81655119526', 1, 'Source: \r\n \r\n- <a href=https://ecoradius.ru/kraken-shop-zerkalo-kraken-ssylka-onion.html>кракен шоп зеркало kraken ssylka onion</a> \r\n \r\n \r\nкракен шоп зеркало kraken ssylka onion', 1, 0, 1, 3, '', 0, 0, '', '2023-09-26 19:05:11', 1, 0, '2023-09-26 19:05:11', '0000-00-00 00:00:00'),
(103, 0, 'Moscow', 'RU', '77.83.149.50', 'Lesliegow', 'pebueteltsu@mail.ru', '81274719515', 1, ' \r\n \r\nSource: \r\n \r\n- <a href=https://chriscunnie.com/kraken-sajt-zerkalo-rabochee.html>кракен сайт зеркало рабочее</a> \r\n \r\n \r\nкракен сайт зеркало рабочее', 1, 0, 1, 2, '', 0, 0, '', '2023-09-26 19:35:56', 1, 0, '2023-09-26 19:35:56', '0000-00-00 00:00:00'),
(104, 0, 'Moscow', 'RU', '46.8.213.80', 'JosephRop', 'hoptombeagmo@mail.ru', '85562827669', 1, ' \r\n \r\nSource: \r\n \r\n- <a href=https://ros-schetchik.ru/kraken-ssylka.html>кракен ссылка</a> \r\n \r\n \r\nкракен ссылка', 1, 0, 1, 8, '', 0, 0, '', '2023-09-26 19:36:11', 1, 0, '2023-09-26 19:36:11', '0000-00-00 00:00:00'),
(105, 0, 'Paris', 'FR', '172.233.240.118', 'Bluetoothnyp', 'prisonpulse@gmail.com', '88666586883', 1, 'Manuscript is a collective name for texts', 1, 0, 1, 7, '', 0, 0, '', '2023-09-26 23:37:35', 1, 0, '2023-09-26 23:37:35', '0000-00-00 00:00:00'),
(106, 0, 'Mumbai', 'IN', '170.187.251.176', 'Linksysihn', 'prisonpulse@gmail.com', '87633137425', 1, 'Since manuscripts are subject to deterioration', 1, 1, 1, 3, '', 0, 0, '', '2023-09-27 04:52:12', 1, 0, '2023-09-27 04:52:12', '0000-00-00 00:00:00'),
(107, 0, 'Morādābād', 'IN', '117.220.45.114', 'Archit singh', 'beyourself289@gmail.com', '8130904423', 17, 'Hello,We are looking for an E-commerce web designer team who could provide us all the essential services and support to run our website fluently and hassle free. A team which can understand our requirements and help us in understanding the E-com concept along the way. Firstly we would love to see any of your recent work and if you have made a Home decor website recently please share with us the link.Also share quotations for the initial Website designing(E-com) , domain preference, Payment gateways options, social media (if included), Promotion criteria and platforms where you will promote the website or what more you offer.Please share the initial package(incl. services) you provide first.kindly share the packages and websites you have designed (e-com) for Home decor or related to this.\r\n', 1, 1, 1, 1, '[{\"followup_note\":\"Have called, but the client hasn\'t picked up. I have dropped a message. Will call once I got any response from him.\",\"followup_date\":\"2023-09-29 11:14:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-29 11:14:00\"},{\"followup_note\":\"Client have asked to share some e-com websites references of the clients. I have shared the same.\\r\\nWill call for gathering requirements once got any response on the same.\",\"followup_date\":\"2023-09-29 11:33:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-29 11:33:18\"},{\"followup_note\":\"Have sent the proposal for e-com website development, SEO and SMO to client as asked.\\r\\nWill take follow-up accordingly.\",\"followup_date\":\"2023-10-03 11:00:00\",\"enquery_type\":\"1\",\"created_at\":\"2023-09-29 16:54:15\"},{\"followup_note\":\"Client has replied that he will update and discuss regarding the sent proposal by next week as client is out of station for this week.\",\"followup_date\":\"2023-10-09 11:10:00\",\"enquery_mode\":\"1\",\"enquery_type\":\"1\",\"created_at\":\"2023-10-04 13:06:51\"}]', 1, 1, '', '2023-10-09 11:10:00', 0, 0, '2023-09-27 12:00:00', '2023-10-04 13:06:51'),
(108, 0, 'Marseille', 'FR', '45.154.138.199', 'maximllCert', 'nod.v.a.ler.y888x.t.oma.t.c.h.s.tr.e.e.tb.ox.@gmail.com', '89725989147', 1, '', 1, 0, 1, 4, '', 0, 0, '', '2023-09-27 16:58:01', 1, 0, '2023-09-27 16:58:01', '0000-00-00 00:00:00'),
(109, 0, 'Prague', 'CZ', '195.181.161.21', 'Nataliadurf', 'nataliadurf@powerser.com', '84923258318', 1, 'Нi!\r\nΙ\'ve notіcеd that manу guys prеfеr regular girls.\r\nI аpрlaudе thе mеn out thеre who had the bаllѕ tо enϳоy thе lоve оf mаny wоmеn and сhооsе thе оnе that he knеw wоuld bе hіs bеѕt friend durіng the bumрy and сrаzу thing сallеd lіfе.\r\nΙ wanted to be that frіеnd, not juѕt a stаble, relіаble аnd bоrіng hоuѕеwіfе.\r\nΙ am 28 yeаrs old, Nаtаlіa, frоm thе Сzеch Rеpublіc, know Еnglіѕh languаge alsо.\r\nΑnywaу, you can fіnd mу рrofilе hеrе: http://tioreslebarbund.cf/idi-82767/ \r\n', 1, 1, 1, 5, '', 0, 0, '', '2023-09-28 02:02:10', 1, 0, '2023-09-28 02:02:10', '0000-00-00 00:00:00'),
(110, 0, 'Mumbai', 'IN', '103.225.200.108', 'Eric Jones', 'ericjonesmyemail@gmail.com', '555-555-1212', 1, 'Hi techcentrica.com Webmaster. my name is Eric and I’m betting you’d like your website techcentrica.com to generate more leads.\r\n\r\nHere’s how:\r\nWeb Visitors Into Leads is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you as soon as they say they’re interested – so that you can talk to that lead while they’re still there at techcentrica.com.\r\n\r\nWeb Visitors Into Leads – CLICK HERE http://advanceleadgeneration.com for a live demo now.\r\n\r\nAnd now that you’ve got their phone number, our new SMS Text With Lead feature enables you to start a text (SMS) conversation – answer questions, provide more info, and close a deal that way.\r\n\r\nIf they don’t take you up on your offer then, just follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE http://advanceleadgeneration.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nTry Web Visitors Into Leads and get more leads now.\r\n\r\nEric\r\nPS: The studies show 7 out of 10 visitors don’t hang around – you can’t afford to lose them!\r\nWeb Visitors Into Leads offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://advanceleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://advanceleadgeneration.com/unsubscribe.aspx?d=techcentrica.com\r\n', 1, 0, 1, 9, '', 0, 0, '', '2023-09-28 12:51:42', 1, 0, '2023-09-28 12:51:42', '0000-00-00 00:00:00'),
(111, 0, 'Delhi', 'IN', '42.111.120.85', 'Suresh Sarkar', 'sureshsarkar201811@gmail.com', '+919511060074', 1, 'Test', 1, 0, 1, 7, '', 0, 0, '', '2023-09-28 12:57:48', 1, 0, '2023-09-28 12:57:48', '0000-00-00 00:00:00'),
(112, 0, 'Moscow', 'RU', '45.134.181.26', 'Timothyjox', 'gallyamova_galinka@mail.ru', '86625767348', 1, 'Source: \r\n \r\n- https://vmo-krasnoselskoe.ru/novaja-ssylka-na-kraken.html                                                                                           \r\n \r\nновая ссылка на кракен', 1, 0, 1, 5, '', 0, 0, '', '2023-09-28 19:48:54', 1, 0, '2023-09-28 19:48:54', '0000-00-00 00:00:00'),
(113, 0, 'Moscow', 'RU', '45.134.181.26', 'JosephRop', 'hoptombeagmo@mail.ru', '88753366348', 1, ' \r\n \r\nSource: \r\n \r\n- https://ros-schetchik.ru/kupit-kokain-gashish-morfin-onlajn-zakladki-klady.html                                                                                           \r\n \r\nкупить кокаин гашиш морфин онлайн закладки клады', 1, 1, 1, 6, '', 0, 0, '', '2023-09-28 23:53:02', 1, 0, '2023-09-28 23:53:02', '0000-00-00 00:00:00'),
(114, 0, 'Moscow', 'RU', '77.83.149.50', 'Lesliegow', 'pebueteltsu@mail.ru', '81841287734', 1, ' \r\n \r\nSource: \r\n \r\n- https://rxcialisovercounteratwalmart.com/omg-sajt-darknet-ssylka.html                                                                                           \r\n \r\nomg сайт даркнет ссылка', 1, 0, 1, 3, '', 0, 0, '', '2023-09-29 00:06:59', 1, 0, '2023-09-29 00:06:59', '0000-00-00 00:00:00'),
(115, 0, 'Brussels', 'BE', '181.214.218.130', 'Mike Little\r\n', 'mikeAcropip@gmail.com', '85424183191', 1, 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\nThanks and regards \r\nMike Little\r\n', 1, 0, 1, 8, '', 0, 0, '', '2023-09-29 06:22:58', 1, 0, '2023-09-29 06:22:58', '0000-00-00 00:00:00'),
(116, 0, 'Delhi', 'IN', '103.44.53.138', 'soniya', 'accorinfra55@gmail.com', '7628935642', 1, 'Hello', 1, 0, 1, 3, '', 0, 0, '', '2023-09-29 10:33:56', 1, 0, '2023-09-29 10:33:56', '0000-00-00 00:00:00'),
(117, 0, 'New York City', 'US', '172.241.243.76', 'Michael Sinclair', 'msinclair.hivemailers@gmail.com', '02.47.43.33.46', 1, 'Hello,\r\n  \r\nI was looking at your site and wanted to ask if you would be interested in getting one-hundred thousand emails sent out within 48 hours for just $48 - we call it our 48-Special.\r\n \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n- We make changes to the list and content until we get results.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!!!! We will send one hundred thousand emails for just $48 \r\n  \r\nBook a 10 min call with me now: https://bit.ly/hive-48-special\r\n\r\nNOTE: To buy an email list and hire an in-house email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $48. So, you save over $3,450.\r\n\r\nThis offer is good for the first 20 clients, don’t miss out.  Book appointment now: https://bit.ly/hive-48-special\r\n\r\nSincerely,\r\nMichael', 1, 0, 1, 9, '', 0, 0, '', '2023-09-29 11:38:25', 1, 0, '2023-09-29 11:38:25', '0000-00-00 00:00:00'),
(118, 0, 'Singapore', 'SG', '8.219.76.117', 'GeorgeTuh', 'h7xqm@course-fitness.com', '89781689713', 17, 'HOYA娛樂城 \r\n \r\nhttps://xn--hoya-8h5gx1jhq2b.tw/', 1, 1, 1, 9, '[{\"followup_note\":\"It is a spam lead.\",\"followup_date\":\"2023-09-30 11:15:00\",\"enquery_type\":\"7\",\"created_at\":\"2023-09-30 11:15:52\"}]', 7, 0, '', '2023-09-30 11:15:00', 1, 0, '2023-09-29 21:51:12', '2023-09-30 11:15:52'),
(119, 0, 'Munich', 'DE', '91.17.34.110', 'Avalanchelac', 'a@gograymatter.com', '88288931399', 17, '(palimpsests). In the XIII-XV centuries in', 1, 1, 1, 8, '[{\"followup_note\":\"It is a spam lead\",\"followup_date\":\"2023-09-30 11:15:00\",\"enquery_type\":\"7\",\"created_at\":\"2023-09-30 11:15:09\"}]', 7, 0, '', '2023-09-30 11:15:00', 1, 0, '2023-09-30 04:37:06', '2023-09-30 11:15:09'),
(120, 0, 'Delhi', 'IN', '103.127.224.110', ' Rohan Moriya', '  info@myeducationwire.com', '9354979011', 17, 'Need help in Social Media Marketing and SEO for my website. \r\n\r\nPlease evaluate and email me the plan for promotion\r\n\r\nBelow are some of sample Post\r\n\r\nhttps://www.myeducationwire.com/\r\n\r\nhttps://www.myeducationwire.com/top-medical-colleges-in-india/\r\n\r\nhttps://www.myeducationwire.com/top-100-engineering-colleges-in-india/     ', 1, 1, 1, 4, '[{\"followup_note\":\"I have called the client, but he didn\'t picked up the call.\\r\\nHave dropped the message.\\r\\nwill call once got any revert on the same.\",\"followup_date\":\"2023-09-30 16:00:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-09-30 11:27:17\"},{\"followup_note\":\"Have sent the final follow-up mail to discuss the requirements and proceed further.\",\"followup_date\":\"2023-10-05 14:11:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-03 14:11:49\"}]', 4, 0, '', '2023-10-05 14:11:00', 0, 0, '2023-09-30 09:33:47', '2023-10-03 14:11:49'),
(121, 0, 'Nizhniy Novgorod', 'RU', '5.164.195.157', 'DonaldIG', 'eserteryty@gmail.com', '87937159219', 1, '', 1, 0, 1, 5, '', 0, 0, '', '2023-09-30 09:35:16', 1, 0, '2023-09-30 09:35:16', '0000-00-00 00:00:00'),
(122, 0, 'Delhi', 'IN', '103.44.53.133', 'Suresh Sarkar', 'sureshsarkar2020@gmail.com', '+919511060074', 0, 'Test', 1, 0, 1, 7, '', 0, 0, '', '2023-09-30 13:35:11', 1, 0, '2023-09-30 13:35:11', '0000-00-00 00:00:00'),
(123, 0, 'Frankfurt am Main', 'DE', '191.96.181.167', 'Eric Jones', 'ericjonesmyemail@gmail.com', '555-555-1212', 0, 'Hi, Eric here with a quick thought about your website techcentrica.com Administrator!\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nWeb Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://advanceleadgeneration.com to try out a Live Demo with Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://advanceleadgeneration.com to discover what Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://advanceleadgeneration.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://advanceleadgeneration.com/unsubscribe.aspx?d=techcentrica.com\r\n', 1, 1, 1, 9, '', 0, 0, '', '2023-09-30 13:44:22', 1, 0, '2023-09-30 13:44:22', '0000-00-00 00:00:00'),
(124, 0, 'New York City', 'US', '81.29.144.127', 'Dennis Mascarenhas', 'dennist6432@gmail.com', '(845) 875-4528', 0, 'Hello! \r\n\r\nGreetings of the day! \r\n\r\nI thought of sharing this amazing \'QuickFunnel Bundle,\' which allows you to launch blazing-fast loading funnels and websites in just 7 minutes with no tech hassles and no monthly fees ever.\r\n\r\nGet QuickFunnel with all the upgrades for 64% off and save over $950 when you grab this highly-discounted bundle deal. \r\n\r\nBelow are some of the examples of what you get with the limited-time QuickFunnel discounted bundle today.\r\n\r\n Create Unlimited Subdomains to Use Quick Funnel Elite for Multiple Business Creation\r\n Unlimited Custom Domains to Intensify Your Brand Presence\r\n Boost Sales & Skyrocket Conversions By Creating Unlimited Proven Converting Funnels\r\n Unlimited Bandwidth for Hosting\r\n Unlimited Page Visits\r\n Drive Unlimited Leads For Your Offers & Boost Sales and Conversions\r\n Unlimited A/B Testing for Landing Pages & Funnels To Choose The Best Performer\r\n 100 EXTRA Proven Converting, Mobile Responsive & Ready-to-Go Landing Page Templates\r\n Advanced Analytics Of Your Funnels & Pages To Have Clear Insight Of What\'s Working & What\'s Not To Boost ROI\r\n Download & Share funnels & templates with your team, clients & group.\r\n\r\nCheck out the complete features and everything you get with this irresistible product, which is helping thousands of companies.\r\n\r\nCheck \'QuickFunnel Bundle’ now-  https://t.ly/2d1tg\r\n\r\nBest regards, \r\nDennis Mascarenhas\r\nSenior Software Consultant\r\n(845) 875-4528\r\n', 1, 0, 1, 4, '', 0, 0, '', '2023-10-01 01:35:46', 1, 0, '2023-10-01 01:35:46', '0000-00-00 00:00:00'),
(125, 0, 'Irving', 'US', '70.120.158.82', 'Shehnaz', 'support@anjumkhan.com', '8800300056', 17, 'Our current website is built on Shopify platform. We want to mirror current website by geolocation that displays different prices, taxes, currency and payment methods. We want to mirror this website for another country. No changes to inventory or website content as such. \r\n\r\nKindly call me whatsapp - 8800300056', 1, 1, 1, 1, '[{\"followup_note\":\"As client\'s number is going switched off, so have dropped the mail and WhatsApp message for the same. Will process further once getting any reply from the client.\",\"followup_date\":\"2023-10-04 10:00:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-03 13:26:45\"},{\"followup_note\":\"She has not replied to any follow up message and email yet.\",\"followup_date\":\"2023-10-06 12:00:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-05 00:47:44\"}]', 4, 0, '', '2023-10-06 12:00:00', 0, 0, '2023-10-02 01:18:28', '2023-10-05 00:47:44');
INSERT INTO `enquery` (`id`, `bookmark`, `city`, `country`, `lead_ip`, `name`, `email`, `phone`, `lead_owner`, `comments`, `status`, `seen`, `source`, `service`, `followup_note`, `enquery_type`, `enquery_mode`, `lead_quality`, `followup_date`, `spam_Id`, `count_seen`, `created_at`, `updated_at`) VALUES
(126, 0, 'New York City', 'US', '23.81.61.181', 'Michael Sinclair', 'msinclair.hivemailers@gmail.com', '949 57 816', 17, 'Hello,\r\n  \r\nI was looking at your site and wanted to ask if you would be interested in getting one-hundred thousand emails sent out within 48 hours for just $48 - we call it our 48-Special.\r\n \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n- We make changes to the list and content until we get results.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!!!! We will send one hundred thousand emails for just $48 \r\n  \r\nBook a 10 min call with me now: https://bit.ly/hive-48-special\r\n\r\nNOTE: To buy an email list and hire an in-house email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $48. So, you save over $3,450.\r\n\r\nThis offer is good for the first 20 clients, don’t miss out.  Book appointment now: https://bit.ly/hive-48-special\r\n\r\nSincerely,\r\nMichael', 1, 1, 1, 7, '[{\"followup_note\":\"It is a spam lead\",\"followup_date\":\"2023-10-03 13:02:00\",\"enquery_type\":\"7\",\"created_at\":\"2023-10-03 13:02:07\"}]', 7, 0, '', '2023-10-03 13:02:00', 1, 0, '2023-10-02 07:21:04', '2023-10-03 13:02:07'),
(127, 0, 'Stockholm', 'SE', '196.245.187.253', 'Isidra Lapine', 'lapine.isidra@gmail.com', 'Px gdpceq Qni', 17, 'To the techcentrica.com Webmaster.\r\n\r\nThis is Isidra and I ran across techcentrica.com a few minutes ago.  \r\n\r\nSeems great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Browsing or just bouncing around – what happens next?  Do you get a lot of leads from your site, or at least enough to make you pleased?\r\n\r\nTruthfully, most business websites fall short when it comes to generating paying customers. Studies show that 70% of a site’s visitors vanish and are gone forever after just a moment.\r\n\r\nHere’s an idea…\r\n \r\nHow about making it really SIMPLE for every visitor who comes to get a personal phone call from you as soon as they hit your site…\r\n \r\nYou can –\r\n  \r\nWeb Visitors Into Leads is a software widget that’s works on your site, set to capture any visitor’s Name, Email address and Phone Number.  It alerts you the moment they tell you they’re interested – so that you can speak to that lead while they’re really looking over your site.\r\n\r\nCLICK HERE http://jumboleadmagnet.com to test a Live Demo with Web Visitors Into Leads now to see precisely how it works.\r\n\r\nYou’ll be surprised - the difference between contacting someone within 5 minutes versus a half-hour or more later could boost your results 100-fold.\r\n\r\nIt gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can instantly start a text (SMS) conversation.\r\n  \r\nThat way, even if you don’t close a deal instantly, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to develop a relationship.\r\n\r\nVery sweet – AND effective.\r\n\r\nCLICK HERE http://jumboleadmagnet.com to learn what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nIsidra\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://jumboleadmagnet.com to use Web Conversion now.\r\n\r\nIf you\'d like to unsubscribe click here http://jumboleadmagnet.com/unsubscribe.aspx?d=techcentrica.com\r\n\r\nSimply a rapid message - the identities and email utilized in this communication, Isidra and Lapine, are substitutes and not genuine contact details. We esteem transparency and wanted to ensure you are aware! In case you wish to make contact with the real entity responsible for this communication, kindly visit our site, and we’ll associate you with the appropriate person.\r\n', 1, 1, 1, 6, '[{\"followup_note\":\"It is a spam lead.\",\"followup_date\":\"2023-10-03 13:01:00\",\"enquery_type\":\"7\",\"created_at\":\"2023-10-03 13:01:39\"}]', 7, 0, '', '2023-10-03 13:01:00', 1, 0, '2023-10-02 23:51:34', '2023-10-03 13:01:39'),
(128, 0, 'San Jose', 'US', '23.105.110.223', 'Phillis Hume', 'hume.phillis@gmail.com', '218-333-5540', 17, 'Hi\r\n\r\nMy name is Phillis and I am an affiliate for ESTURA software company. I have found techcentrica.com on Twitter\r\n\r\nHave you ever hired a virtual assistant to scrape the internet for business contact details?\r\n\r\nWhat if I told you that there\'s a software that can scrape and collate business contact details from Google Maps, LinkedIn, Facebook, Instagram, Trustpilot, Yellow Pages, Google and many other platforms.\r\n\r\nWhat if I told you that we are so confident in our product that we are willing to give you a full access free trial.\r\n\r\nI am writing to help you to get more wholesale customers with a revolutionary data mining software.\r\n\r\nThe software has the capability to scrape the most popular internet platforms for business contact details and merge all results inside a single excel file.\r\n\r\nYou can then use the business contact details to contact your prospective clients.\r\n\r\nThis is by far a more efficient and reliable way of collecting business contact details than doing it manually with a virtual assistant. We have all been there and done that.\r\n\r\nThe software is pretty easy to use and would make a great addition to your office.\r\n\r\nPlease take a look at https://estura.co.uk/aff/344456555\r\n\r\nKind regards\r\n\r\nPhillis Hume\r\n\r\ndisclosure: I am an affiliate for ESTURA. Buying via my link will not cost you extra but I will make a living.', 1, 1, 1, 7, '[{\"followup_note\":\"It is a spam lead.\",\"followup_date\":\"2023-10-03 13:00:00\",\"enquery_type\":\"7\",\"created_at\":\"2023-10-03 13:00:44\"}]', 7, 0, '', '2023-10-03 13:00:00', 1, 0, '2023-10-03 05:06:22', '2023-10-03 13:00:44'),
(129, 0, 'Gurgaon', 'IN', '14.99.196.10', 'Raj ', 'kumar.raj@jenniferwebbcelebrant.com.au', '9192939495', 0, 'Hi,\r\n\r\nThis is Raj! We have an existing website https://www.jenniferwebbcelebrant.com.au/ that requires SEO optimization. Our primary goal is to increase organic traffic and improve our search engine rankings. Additionally, we require SEO services that focus on both on-page and off-page optimization. Please share your company details, a proposal for SEO and your contact details and I will call you if we find it attractive and within budget. \r\n\r\nRaj ', 1, 0, 1, 3, '', 0, 0, '', '2023-10-03 14:12:57', 1, 0, '2023-10-03 14:12:57', '0000-00-00 00:00:00'),
(130, 0, 'Gurgaon', 'IN', '14.99.196.10', 'Raj ', 'kumar.raj@jenniferwebbcelebrant.com.au', '9192939495', 0, 'Hi,\r\n\r\nThis is Raj! We have an existing website https://www.jenniferwebbcelebrant.com.au/ that requires SEO optimization. Our primary goal is to increase organic traffic and improve our search engine rankings. Additionally, we require SEO services that focus on both on-page and off-page optimization. Please share your company details, a proposal for SEO and your contact details and I will call you if we find it attractive and within budget. \r\n\r\nRaj ', 1, 1, 1, 3, '', 0, 0, '', '2023-10-03 14:12:57', 1, 0, '2023-10-03 14:12:57', '0000-00-00 00:00:00'),
(131, 0, 'Gurgaon', 'IN', '14.99.196.10', 'Raj ', 'kumar.raj@jenniferwebbcelebrant.com.au', '9192939495', 17, 'Hi,\r\n\r\nThis is Raj! We have an existing website https://www.jenniferwebbcelebrant.com.au/ that requires SEO optimization. Our primary goal is to increase organic traffic and improve our search engine rankings. Additionally, we require SEO services that focus on both on-page and off-page optimization. Please share your company details, a proposal for SEO and your contact details and I will call you if we find it attractive and within budget. \r\n\r\nRaj ', 1, 1, 1, 3, '[{\"followup_note\":\"I have called, but client didn\'t picked up the call.\\r\\nSo have dropped a message also to get a suitable appointment for the same.\\r\\nWill also call in sometime.\",\"followup_date\":\"2023-10-03 16:30:00\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-03 14:22:32\"},{\"followup_note\":\"Have called the client again but still no response.\\r\\nSo have dropped a mail regarding the same, will proceed once receiving any revert from client.\",\"followup_date\":\"2023-10-06 11:04:00\",\"enquery_mode\":\"1\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-04 13:04:32\"}]', 4, 1, '', '2023-10-06 11:04:00', 0, 0, '2023-10-09 14:12:59', '2023-10-04 13:04:32'),
(132, 0, 'Moscow', 'RU', '46.8.213.80', 'Darrellchict', 'pebueteltsu@mail.ru', '88335771552', 0, ' \r\n \r\nSource: \r\n \r\n- <a href=https://broccoli-food.com/ssylka-zerkalo-na-kraken-krmp-cc-onion.html>ссылка зеркало на kraken krmp.cc onion</a> \r\n \r\n \r\nссылка зеркало на kraken krmp.cc onion', 1, 1, 1, 4, '', 0, 0, '', '2023-10-03 20:13:53', 1, 0, '2023-10-03 20:13:53', '0000-00-00 00:00:00'),
(133, 0, NULL, '', '', 'Mr. Praveen Kumar', 'xpertpraveen@gmail.com', '8588922906', 17, 'SEO', 1, 1, 1, 0, '[{\"followup_note\":\"Meeting has been done with the client yesterday in office. Pushap sir is taking care of this lead further.\",\"followup_date\":\"2023-10-06 13:15:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"1\",\"created_at\":\"2023-10-04 13:15:10\"}]', 1, 0, '', '2023-10-06 13:15:00', 0, 0, '2023-10-04 13:13:57', '2023-10-04 13:15:10'),
(134, 0, 'Delhi', 'IN', '61.247.224.49', 'Amit', 'amit.srivastav@titanbiotechltd.com', '9625961694', 17, 'I want to promote our website globally ', 1, 1, 1, 3, '[{\"followup_note\":\"Client has cut the call for now..\\r\\nBut I have dropped the message to him and will also call in some time.\",\"followup_date\":\"2023-10-04 17:45:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-04 16:08:40\"},{\"followup_note\":\"Client have asked to call by tomorrow 10 am in the morning.\",\"followup_date\":\"2023-10-05 10:00:00\",\"enquery_mode\":\"1\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-05 00:46:42\"},{\"followup_note\":\"I had a call with client and he has asked to send him the proper proposal with the detailed plan, quote and keywords list.\",\"followup_date\":\"2023-10-06 12:00:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-05 10:47:48\"},{\"followup_note\":\"I have sent the detailed proposal along with the suggested keywords lists and client keywords ranking reference report. I have inform the client through WhatsApp also.\\r\\nWill take the follow-up accordingly.\",\"followup_date\":\"2023-10-09 11:10:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"1\",\"created_at\":\"2023-10-06 12:10:25\"}]', 1, 0, '', '2023-10-09 11:10:00', 0, 0, '2023-10-04 14:52:30', '2023-10-06 12:10:25'),
(135, 0, 'Madrid', 'ES', '185.189.67.73', 'Laura', 'Laura', '651690120', 0, '¡Hola! He querido escribirte porque veo una excelente oportunidad para que tu empresa sea el foco de una *entrevista* que tengo en mente que podríamos realizar.\r\nEsta entrevista no sólo sería una conversación enriquecedora, sino que además, *se publicaría en decenas de medios* y periódicos de gran reputación. Como beneficio adicional, enlazaremos tu sitio web en la entrevista, lo cual ayudará a mejorar su posicionamiento. El hecho de que aparezcas en una entrevista en medios confiables contribuirá a generar más confianza en tu negocio.\r\n\r\n¿Sería posible que me dieras un *número de teléfono* para discutir los detalles? Gracias.', 1, 1, 1, 2, '', 0, 0, '', '2023-10-04 15:11:33', 1, 0, '2023-10-21 18:11:33', '0000-00-00 00:00:00'),
(138, 0, NULL, '', '', 'ABHINAV CHITRANSH', 'chitranshabhinav90@gmail.com', '7077074213', 1, 'E-COMMERCE WEBSITE WITH PAYMENT GATEWAY', 1, 1, 1, 0, '[{\"followup_note\":\"I had a call with client  and gathered his requirements. Have forward SOW to technical team as well.. Will send the proposal after getting quote from Pushap sir.\",\"followup_date\":\"2023-10-06 14:00:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-05 12:07:31\"},{\"followup_note\":\"I have sent the website development proposal to the client and will take follow-up accordingly.\",\"followup_date\":\"2023-10-06 11:00:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"1\",\"created_at\":\"2023-10-05 17:49:30\"},{\"followup_note\":\"Test\",\"followup_date\":\"2023-10-31 23:08:00\",\"enquery_mode\":\"1\",\"enquery_type\":\"1\",\"created_at\":\"2023-10-30 18:08:14\"},{\"followup_note\":\"Veniam blanditiis e\",\"followup_date\":\"2021-02-03 03:54:00\",\"enquery_mode\":\"1\",\"lead_quality\":\"2\\/5\",\"enquery_type\":\"1\",\"created_at\":\"2023-10-30 18:13:15\"}]', 1, 1, '2/5', '2021-02-03 03:54:00', 0, 16, '2023-10-21 06:50:00', '2023-10-30 18:13:15'),
(139, 0, 'Lagos', 'NG', '105.112.177.245', 'sherita mccauley', 'sheritamccauley291@hotmail.com', '6508651801', 17, 'web design services is required', 1, 1, 1, 1, '[{\"followup_note\":\"As the contact number is not reachable, so have dropped a mail to get the exact SOW, once got any revert from the client I will share the proposal accordingly.\",\"followup_date\":\"2023-10-09 11:30:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-06 11:30:31\"}]', 4, 0, '', '2023-10-09 11:30:00', 1, 0, '2023-10-21 04:18:41', '2023-10-06 11:30:31'),
(141, 0, 'Noida', 'IN', '122.161.49.173', 'Vikram Singh Chauhan', 'vikram.chauhan@ledure.com', '8447364441', 461, 'Greeting from Ledure !\r\nI hope this email finds you well. We are Ledure Lightings Limited, a leading company in the lighting industry, known for our commitment to innovation and quality. As part of our ongoing efforts to enhance our online presence and provide our customers with the best possible experience, we are seeking your expertise in amending our website.\r\n\r\nWe have identified several key areas of improvement for our website, and we believe your agency is well-equipped to help us achieve our goals. Please find below a detailed brief for the project:\r\n\r\n1. Home Page Content:\r\n\r\nRevise and optimize the content on our home page to effectively communicate our brand message and offerings.\r\n\r\n \r\n\r\n2. Product Photos:\r\n\r\nAdd high-quality still photos and 360-degree view images for 65 of our products.\r\n\r\n \r\n\r\n3. Product Content:\r\n\r\nAdding content for the 65 products on our website.\r\n\r\n \r\n\r\n4. Technical Data Sheets:\r\n\r\nAdding technical data sheets for each of the 65 products, ensuring accuracy and completeness.\r\n\r\n \r\n\r\n5. Application Photos:\r\n\r\nInclude application photos that showcase how our products are used in various settings.\r\n\r\n6. Blogs:\r\n\r\nAdding  65 informative and engaging blog posts related to our industry and products.\r\n\r\n \r\n\r\n7. Infographics:\r\n\r\nAdding infographics for the 65 products to convey technical information effectively.\r\n\r\n \r\n\r\n8. Career Page:\r\n\r\nAdd a dedicated career page to our website, outlining our job openings and company culture.\r\n\r\n \r\n\r\n9. SEO Optimization:\r\n\r\nOptimize all content to be SEO-friendly, including meta tags, descriptions, and keyword integration.\r\n\r\n \r\n\r\n10. Annual Website Maintenance \r\n\r\nWe are looking for a comprehensive proposal that outlines your approach, timeline, and cost estimate for this project. Additionally, please provide examples of similar work you have completed for other clients.\r\n\r\nIf you are interested in partnering with us on this project, please submit your proposal. We will evaluate all proposals and select the agency that best aligns with our vision and goals.\r\n\r\nWe appreciate your consideration and look forward to the opportunity to collaborate on this important project. Should you have any questions or require further information, please do not hesitate to contact us.\r\n\r\nThank you for your time and expertise.', 1, 1, 1, 1, '[{\"followup_note\":\"Ut ducimus reiciend\",\"followup_date\":\"1985-01-10 01:38:00\",\"enquery_mode\":\"2\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-10 15:04:54\"},{\"followup_note\":\"Debitis impedit nul\",\"followup_date\":\"2020-05-01 17:21:00\",\"enquery_mode\":\"2\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-10 15:05:19\"}]', 4, 2, '', '2020-05-01 17:21:00', 1, 0, '2023-10-21 03:10:00', '2023-10-10 15:05:19'),
(143, 0, NULL, '', '', 'Mr. Satish Singh', 'acklema2021@gmail.com', '8750304757', 1, 'Website Development', 1, 1, 4, 0, '[{\"followup_note\":\"I have gathered all the requirements from client and will send the proposal also in sometime.\",\"followup_date\":\"2023-10-09 11:00:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"4\",\"created_at\":\"2023-10-06 12:51:39\"},{\"followup_note\":\"I have sent the proposal to him and inform on the WhatsApp also.\\r\\nWill take follow-up accordingly.\",\"followup_date\":\"2023-10-09 12:00:00\",\"enquery_mode\":\"0\",\"enquery_type\":\"1\",\"created_at\":\"2023-10-06 15:08:16\"},{\"followup_note\":\"Fugit esse deserun\",\"followup_date\":\"1988-03-13 12:55:00\",\"enquery_mode\":\"2\",\"enquery_type\":\"6\",\"created_at\":\"2023-10-10 16:23:39\"},{\"followup_note\":\"Omnis architecto lab\",\"followup_date\":\"2022-07-26 15:34:00\",\"enquery_mode\":\"2\",\"enquery_type\":\"3\",\"created_at\":\"2023-10-10 16:24:05\"},{\"followup_note\":\"Minim et et fuga Qu\",\"followup_date\":\"2022-01-25 14:19:00\",\"enquery_mode\":\"2\",\"enquery_type\":\"2\",\"created_at\":\"2023-10-10 16:24:37\"},{\"followup_note\":\"Test\",\"followup_date\":\"2023-10-23 15:40:00\",\"enquery_mode\":\"1\",\"enquery_type\":\"1\",\"created_at\":\"2023-10-23 11:40:34\"}]', 1, 1, '', '2023-10-23 15:40:00', 0, 0, '2023-10-21 02:50:00', '2023-10-23 11:40:34'),
(144, 0, NULL, '', '', 'Bree Bates', 'tywycikiga@mailinator.com', '909090909', 17, 'Quisquam similique d', 1, 1, 1, 0, '[]', 0, 0, '', '2023-10-18 11:23:58', 1, 0, '2023-10-21 01:00:00', '0000-00-00 00:00:00'),
(145, 0, NULL, '', '', 'Suresh sarkar', 'admin@gmail.com', '74878475848', 0, 'Test', 1, 1, 2, 0, '[]', 0, 0, '', '2023-10-31 12:19:14', 0, 0, '2023-10-31 12:19:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `solutions` text NOT NULL,
  `bottom_heading` text NOT NULL,
  `company_image` longtext NOT NULL,
  `image_alt` text NOT NULL,
  `meta_data` text NOT NULL,
  `og_image` text NOT NULL,
  `status` int(1) NOT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `category_id`, `sub_category_id`, `title`, `description`, `solutions`, `bottom_heading`, `company_image`, `image_alt`, `meta_data`, `og_image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(2, 16, 48, 'These are our happy, satisfied & thrilled clients. Wanna be happy? Choose Us!', '<p><strong>We&#39;d feel honored to give your project the love it deserves.</strong></p>\r\n\r\n<p>&quot;Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven&#39;t found it yet, keep looking. Don&#39;t settle. As with all matters of the heart, you&#39;ll know when you find it.&quot;</p>\r\n\r\n<p>The success of TechCentrica can only be measured by seeing the list of esteemed clients that it owns. The web and digital marketing solutions given by TechCentrica are loved by various organizations. Here are some of the names mentioned:-</p>\r\n', '{\"happy_customer\":\"325\",\"project_comleted\":\"321\",\"international_partner\":\"06+\",\"growth_per_annum\":\"23%\"}', '', '[\"uploads\\/experience\\/techcentrica_64f9a1ec589ed.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec59030.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec593d0.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec59744.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec59a10.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec59cb3.png\",\"uploads\\/experience\\/techcentrica_64f9a1ec59fab.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5a234.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5a493.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5a700.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5a95c.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5abe6.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5ae4d.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5b089.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5b2b7.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5b504.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5b7ad.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5b9e4.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5bc37.jpg\",\"uploads\\/experience\\/techcentrica_64f9a1ec5be84.jpg\"]', 'Client logo', '{\"meta_title\":\"sdds\",\"meta_keyword\":\"sdds\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'Clientele.html', '2023-09-07 15:41:56', '2023-09-14 12:57:08'),
(3, 16, 49, 'Passionate about crafting modern and usable design!', '<p><strong>Our online marketing work speaks for itself. We deliver an outstanding service custom-tailored to each and every one of our clients - big or small...</strong></p>\r\n\r\n<p>We operate around the world and work with businesses to solve their communication challenges. Believe in the potential of creative thinking to build your online reputation. We developed websites strictly adopting latest web standards &amp; technology delivering best possible solution for your brand in cyber world....</p>\r\n\r\n<h3><strong>Website &amp; Online Marketing</strong></h3>\r\n', '{\"happy_customer\":\"\",\"project_comleted\":\"\",\"international_partner\":\"\",\"growth_per_annum\":\"\"}', '', '[\"uploads\\/experience\\/techcentrica_64f9a9ff4dc3b.jpg\",\"uploads\\/experience\\/techcentrica_64f9a9ff4df3f.jpg\",\"uploads\\/experience\\/techcentrica_64f9a9ff4e1f2.jpg\",\"uploads\\/experience\\/techcentrica_64f9a9ff4e4a0.jpg\",\"uploads\\/experience\\/techcentrica_64f9a9ff4e71c.jpg\",\"uploads\\/experience\\/techcentrica_64f9a9ff4e963.jpg\",\"uploads\\/experience\\/techcentrica_64f9a9ff4eb79.jpg\",\"uploads\\/experience\\/techcentrica_64f9a9ff4ed95.jpg\"]', 'showcase', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'Showcase.html', '2023-09-07 16:16:23', '2023-09-14 12:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `marque_text` text NOT NULL,
  `get_tough` text NOT NULL,
  `heading1` text NOT NULL,
  `para1` text NOT NULL,
  `heading2` text NOT NULL,
  `card_data` longtext NOT NULL,
  `heading3` text NOT NULL,
  `para2` text NOT NULL,
  `images` text NOT NULL,
  `image_alt` text NOT NULL,
  `heading4` text NOT NULL,
  `para3` text NOT NULL,
  `status` int(11) NOT NULL,
  `meta_data` longtext NOT NULL,
  `slug` text NOT NULL,
  `og_image` text NOT NULL,
  `solutions` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `category_id`, `sub_category_id`, `marque_text`, `get_tough`, `heading1`, `para1`, `heading2`, `card_data`, `heading3`, `para2`, `images`, `image_alt`, `heading4`, `para3`, `status`, `meta_data`, `slug`, `og_image`, `solutions`, `created_at`, `updated_at`) VALUES
(1, 11, 0, '<p><a href=\"\">TechCentrica&reg; has achieved a Maturity Level 3 rating on the <strong>CMMI LEVEL</strong> </a> <a href=\"\">&quot;<strong>IIM Lucknow</strong> - Incubator Picked off By TechCentrica&quot;</a> <a href=\"\">&ldquo;TechCentrica Crowned <strong>IIMT</strong> Through Online Marketing&rdquo;</a> <a href=\"\">Association of Institute of <strong>Company Secretaries of India</strong> with TechCentrica prolongs.</a> <a href=\"\">TechCentrica&rsquo;s Heartful Thanks to <strong>India Infrastructure Finance Company Limited</strong> (A Govt. of India Enterprise).</a> <a href=\"\">&ldquo;Techcentrica <strong>Crosses the Road</strong> of Digital account&rdquo;</a> <a href=\"\">&ldquo;<strong>Arunanchal University</strong> Joins Its Hands With TechCentrica&rdquo;</a> <a href=\"\">&quot;TechCentrica To Boost Searches For <strong>Neptune</strong> On All Planets&quot;</a> <a href=\"\">&quot;TechCentrica To Publish &amp; Uplift <strong>AKG GROUP</strong> On Internet&quot;</a> <a href=\"\">Team TechCentrica would like to thanks <strong> Sam India</strong> for their trust and confidence on us for their website.</a> <a href=\"\"><strong>Teenager Bra</strong> selected TechCentrica for it&rsquo;s adaptive website development &amp; online presence. </a></p>\r\n', 'Our client relationships do not start at 9AM and end at 6PM — they stay with us to continually receive the quality service they deserve.', '<p>We&nbsp;<strong>Love design.</strong>&nbsp;We Love technology. But what we love most is creating the&nbsp;<strong>Brand &quot;You&quot;.</strong></p>\r\n', 'TechCentrica has emerged as one of the Leading Digital Marketing company which is based in Noida with presence in Melbourne, Australia. Specializing in high-end services in the spectrum of Web Design & Development, Digital Marketing, Search Engine Marketing & Online Reputation Management . TechCentrica believes in partnering with the customers over the long-term through flexible business procedure and delivery models.', 'What We Do!', '[{\"title\":\"DIGITAL MARKETING MANAGEMENT\",\"paragraph\":\"Understanding digital marketing is not difficult these days, even for a non-technical person. Digital marketing is basically a type of promotional technique that has been mainly employed on digital devices.\",\"button_text\":\"Eos rem aut dolores \",\"image\":\"uploads\\/home\\/techcentrica_650178e0c34bf.png\"},{\"title\":\"SEARCH ENGINE MANAGEMENT\",\"paragraph\":\"Search Engine Optimization is fundamental to success. Search Engine Optimization (SEO) is a technique that employs a combination of factors to help your website achieve higher rankings in major search engines.\",\"button_text\":\"Voluptatum labore ad\",\"image\":\"uploads\\/home\\/techcentrica_650178e0c371b.png\"},{\"title\":\"SOCIAL MEDIA MANAGEMENT\",\"paragraph\":\"Social Media Promotion is the process of generating public opinion through use of social media like online communities, websites and various other medium of communication over internet.\",\"button_text\":\"Commodo omnis fugit\",\"image\":\"uploads\\/home\\/techcentrica_650178e0c39bb.png\"},{\"title\":\"ONLINE REPUTATION MANAGEMENT\",\"paragraph\":\"In today\\u2019s technology driven world, one can easily do away with all kinds of negative comments and negative propaganda against one\\u2019s business online. So, Now it\'s time to get rid of all online negativity in one shot.\",\"button_text\":\"Eos rem aut dolores \",\"image\":\"uploads\\/home\\/techcentrica_650178e0c3bc9.png\"}]', 'Passionate about crafting modern and usable design!', 'Our web & online marketing work speaks for itself. We deliver an outstanding service custom-tailored to each and every one of our clients.', '[\"uploads\\/home\\/techcentrica_65017bbb0cd28.jpg\",\"uploads\\/home\\/techcentrica_65017bbb0cfcc.jpg\",\"uploads\\/home\\/techcentrica_65017bbb0d204.jpg\",\"uploads\\/home\\/techcentrica_65017bbb0d44e.jpg\",\"uploads\\/home\\/techcentrica_65017bbb0d702.jpg\",\"uploads\\/home\\/techcentrica_65017bbb0d945.jpg\",\"uploads\\/home\\/techcentrica_65017bbb0db60.jpg\",\"uploads\\/home\\/techcentrica_65017bbb0de36.jpg\"]', 'Voluptas est ullam ', 'Unveil The <span>Collaboration. </span>Let’s Work & Grow Together.', 'We @TechCentrica believe in serving the best experience to our clients with most intutive and most versatile experience , we aim at providing more than what is required.', 1, '{\"meta_title\":\"Ab iste molestias la\",\"meta_keyword\":\"Ab iste molestias la\",\"meta_description\":\"Sint et debitis nesc\",\"og_url\":\"Temporibus eius ad q\",\"og_title\":\"Amet omnis velit du\",\"og_description\":\"Nemo dicta dolorum u\",\"og_site_name\":\"Kylee Stephenson\",\"canonical\":\"In sit et quae sunt \"}', '', 'uploads/meta_image/techcentrica_650166050c159.png', '', '2023-09-13 11:21:35', '2023-09-13 14:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `imported_imquiry`
--

CREATE TABLE `imported_imquiry` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(125) NOT NULL,
  `phone` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `enquery_type` int(11) NOT NULL,
  `lead_owner` int(11) NOT NULL,
  `enquery_mode` int(11) NOT NULL,
  `platform` text NOT NULL,
  `preference` text NOT NULL,
  `campaign_name` text NOT NULL,
  `campaingn_date` date NOT NULL,
  `interested_for` text NOT NULL,
  `seen` int(1) NOT NULL,
  `followup_date` datetime DEFAULT NULL,
  `followup_note` longtext NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imported_imquiry`
--

INSERT INTO `imported_imquiry` (`id`, `name`, `email`, `phone`, `city`, `state`, `enquery_type`, `lead_owner`, `enquery_mode`, `platform`, `preference`, `campaign_name`, `campaingn_date`, `interested_for`, `seen`, `followup_date`, `followup_note`, `status`, `created_at`, `updated_at`) VALUES
(20, 'Deepak Tripathi', 'tripathideepak99@gmail.com', 'p:+919717160099', 'Ghaziabad', '', 0, 0, 0, 'fb', 'receive_a_call_back_', 'Country', '0000-00-00', 'villa_', 0, NULL, '', 1, '2023-09-25 16:30:28', '0000-00-00 00:00:00'),
(21, 'Brijesh Yadav', 'reena12y@gmail.com', 'p:+917042595332', 'Delhi', '', 0, 0, 0, 'fb', 'receive_a_call_back_', 'Country', '0000-00-00', 'studio_apartment', 0, NULL, '', 1, '2023-09-25 16:30:28', '0000-00-00 00:00:00'),
(64, 'full_name', 'email', 'phone_number', 'city', 'state', 0, 0, 0, 'platform', 'please_select_your_preferences', 'campaign_name', '0000-00-00', 'what_type_of_property_are_you_interested_in', 0, NULL, '', 1, '2023-10-30 18:48:54', '0000-00-00 00:00:00'),
(65, '', '', '999949894', '', '', 0, 0, 0, '', '', '', '0000-00-00', '', 0, NULL, '', 1, '2023-10-30 18:48:54', '0000-00-00 00:00:00'),
(66, '', '', '9678976543', '', '', 0, 0, 0, '', '', '', '0000-00-00', '', 0, NULL, '', 1, '2023-10-30 18:48:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_base`
--

CREATE TABLE `knowledge_base` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `image` text NOT NULL,
  `created_by` text NOT NULL,
  `file` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `knowledge_base`
--

INSERT INTO `knowledge_base` (`id`, `filename`, `image`, `created_by`, `file`, `created_at`, `updated_at`) VALUES
(5, 'pdf File', 'uploads/knowledge_base/techcentrica_6533d02a6e983.pdf', '1', '', '2023-10-21 18:50:42', '0000-00-00 00:00:00'),
(6, 'asasf', 'uploads/knowledge_base/techcentrica_6533d35e8c4d0.jpg', '1', '', '2023-10-21 19:04:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `our_solutions`
--

CREATE TABLE `our_solutions` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description1` longtext NOT NULL,
  `solutions` text NOT NULL,
  `card_data` longtext NOT NULL,
  `bottom_heading` text NOT NULL,
  `description2` longtext NOT NULL,
  `meta_data` text NOT NULL,
  `og_image` text NOT NULL,
  `status` int(11) NOT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_solutions`
--

INSERT INTO `our_solutions` (`id`, `category_id`, `sub_category_id`, `title`, `description1`, `solutions`, `card_data`, `bottom_heading`, `description2`, `meta_data`, `og_image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(6, 14, 38, 'Who Help Brands with Big Ideas', '<p>Over 9 years of experience in the IT sector has helped TechCentrica understand exactly how technology can help Real Estate businesses meet their needs. We can provide full life-cycle solutions starting from requirement analysis to maintenance. We have unrivalled software design and development services.</p>\r\n\r\n<p>We provide a broad range of software development services including application and systems level programming on leading technologies.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '[{\"card_heading\":\"TechCentrica - SALES CRM\",\"card_description\":\"<p>So How to manage &amp; nurture your sales leads to get positive outcome? We at TechCentrica know how hard it could be to handle your sales efficiency and team effective? So we have such an online\\/offline application which works on ever platform ( mobile, ipad&rsquo;s, tablets, pc&rsquo;s), whenever wherever however and gives possible outcome with expectations. We make it work as: Our CRM &ndash; API &ndash; Closed loop reporting &amp; Monitoring = better sales on time.<\\/p>\\r\\n\\r\\n<p>TechCentrica online CRM are a fast and simple online CRM, and can be hosted along with your website.<\\/p>\\r\\n\",\"card_image_alt\":\"SALES CRM\",\"card_image\":\"uploads\\/our_solution\\/kashi_64f70eda88701.jpg\"},{\"card_heading\":\"TechCentrica - Lead Management System\",\"card_description\":\"<p>Spending levels for marketing and sales department at each company varies. Statistics show that companies allot from 10% to 50% of their revenues to marketing and sales budget. The huge amount put forth to generate leads and,subsequently, increase profit margins. However, to run a successful marketing and sales campaign, you require an organized and strategic plan where a company doesn&rsquo;t only spend, rather can monitorits expenses with respect to sales &ndash;ratio conversion. In this proposal, TechCentrica presents Marketing Plan Analysis &amp; Solutions to make your marketing campaign more effective and efficient.<\\/p>\\r\\n\",\"card_image_alt\":\" Lead Management \",\"card_image\":\"uploads\\/our_solution\\/techcentrica_64f7121b1c7d7.jpg\"}]', '', '', '{\"meta_title\":\"sdsds\",\"meta_keyword\":\"sdsds\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'Software-Development.html', '2023-09-05 16:49:54', '2023-09-14 12:21:29'),
(7, 14, 39, 'We Are Experts In Designing Role-Based Portals', '<p>TechCentrica have pioneered the domain of portal development in the country with successful execution of top line portals that incorporate the latest technology and most interactive options to attract the users. A dynamic and an experienced team of professional, who understands the technicalities involved in the process of Portal Development, gives you customized products to fit your specific chucks.</p>\r\n\r\n<p>Integrating of latest technology with an attractive and user friendly navigation puts TechCentrica apart from its competitors.</p>\r\n\r\n<p>Web Portals primarily focus on online community building and get users to register and use the services on regular basis. The repeat factor of business is very important while designing and developing a portal for a client. Theme based portals have become very successful as they create a niche and target specific users for that community.</p>\r\n\r\n<h3>Our Web Portal Development services include:</h3>\r\n\r\n<ul>\r\n	<li>Customized application development</li>\r\n	<li>New web portal solutions</li>\r\n	<li>B2B portal solutions</li>\r\n	<li>B2C portal solutions</li>\r\n	<li>Integration of third party applications such as payment gateways, open source interactive modules etc.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our specialized services and unique blend of strategy, technology, design capability and quality implementation has helped us gain our clients&rsquo; confidence and excel in this domain of portal development.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '[]', '', '', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'Portal-Development.html', '2023-09-05 17:11:40', '2023-09-14 12:23:46'),
(8, 14, 40, 'Scale Your Business With An Online Store.', '<h3>Design is thinking made visual.</h3>\r\n\r\n<p>E-commerce is one of the best and low cost mediums to reach out to new markets, varied customer base and niche segments. If implemented successfully, e-commerce can provide exponential growth to your business and multiply sales and revenues for your organization.</p>\r\n\r\n<p>TechCentrica E-Commerce allows you to control a wide range of operations on your E-commerce website offering features like product management ,integrated customized shopping cart, credit card processing, integration of various shipping modules and order processing to boost your E-Commerce needs. Our advance on-line stock and inventory management system allows you to have real time information about various categories of products at any given point of time. We make shipping module and gateway integration very easy and most dependable.</p>\r\n\r\n<p>We provide you with active functionalities, enabling quick, easy and smooth transactions combined with a safe, convenient, gratifying &amp; secure shopping experience.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '[]', '', '', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'E-Commerce.html', '2023-09-05 17:13:43', '2023-09-14 12:25:00'),
(9, 14, 41, 'Your dream deserves more than a place in your imagination', '<h2>Unique Designs, Intuitive Experience</h2>\r\n\r\n<p>At TechCentrica, we provide affordable customized software services tailor-made to be a perfect &lsquo;fit&#39; with your requirements. We create designs and develop technology to deliver decisive results that directly boost your bottom line. After a FREE analysis of your unique needs and operations, we employ the right tools to boost your ROI (Return on Investment).</p>\r\n\r\n<p><strong>Application Development</strong></p>\r\n\r\n<p>We provide solutions to support, strengthen and manage a customer&#39;s application portfolio. We offer clients a range of development solutions in proven as well as emerging technologies. From consulting to smooth cutover, we provide customers with an end-to-end, integrated umbrella of solutions, followed by technical and functional support. TechCentrica provides solutions for the following segments:</p>\r\n\r\n<ul>\r\n	<li>Development of web and portal applications for both mobile and computers.</li>\r\n	<li>Development of middleware applications for ensuring end-to-end application and data integration.</li>\r\n	<li>Development of composite applications for making current applications ready for the future.</li>\r\n	<li>Development of mobile applications including design, support &amp; maintenance and verification.</li>\r\n</ul>\r\n\r\n<p>We apply a flexible approach throughout the development process to meet very specific needs of customers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Application Management</strong></p>\r\n\r\n<p>These times companies require their business applications to be managed 24x7 and remain secure, reliable and maintainable. They need solutions that can help them ensure high availability and performance of their applications and monitor their various components and troubleshoot production issues.</p>\r\n\r\n<p>We ensure a seamless transition of knowledge from the existing Maintenance / Development team to our maintenance team. We provide preventive, adaptive and corrective maintenance services. We engage with the client&#39;s business and IT teams for smooth transition of functional and technical enhancements into operational activities.</p>\r\n\r\n<p>These services include fixing bugs, diagnosing and correcting latent errors, assessing the impact of new releases, proposing improvements, maintaining technical and user documentation, monitoring applications for data integrity and performance, and maintaining and running a 24x7 Helpdesk.</p>\r\n\r\n<p>We ensure Continuous Productivity Improvement through our defined strategies, innovations and best practices.</p>\r\n\r\n<p><strong>Application Renewal</strong></p>\r\n\r\n<p>Speed, collaboration and innovation are key differentiators in the present-day economy. To keep pace with the dynamic marketplace, organisations need business applications that are highly flexible and easily accessible to internal and external stakeholders. As the technology changes old applications needs to be Reengineered to suit the current standards and work load. Reengineering typically involves moving to a totally new architecture and technology while retaining the business functionality of the existing legacy system intact in the new system.</p>\r\n', '{\"digital_solutions\":\"09+ Year\'s\",\"success_delivered\":\"321+ Project\'s\",\"manag_more\":\"200 Website\"}', '[]', '', '', '{\"meta_title\":\"\",\"meta_keyword\":\"\",\"meta_description\":\"\",\"og_url\":\"\",\"og_title\":\"\",\"og_description\":\"\",\"og_site_name\":\"\",\"canonical\":\"\"}', '', 1, 'Customized-Application-Development.html', '2023-09-05 17:16:27', '2023-09-14 12:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `sub_admin`
--

CREATE TABLE `sub_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `role` int(1) NOT NULL,
  `picture` text NOT NULL,
  `status` int(1) NOT NULL,
  `system_ip` text NOT NULL,
  `last_activity` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_admin`
--

INSERT INTO `sub_admin` (`id`, `name`, `email`, `phone`, `password`, `role`, `picture`, `status`, `system_ip`, `last_activity`, `last_login`, `last_logout`, `created_at`, `updated_at`) VALUES
(17, 'Isha Mehndiratta', 'isha.m@techcentrica.com', '9599200280', 'e10adc3949ba59abbe56e057f20f883e', 1, 'uploads/profile/isha.png', 1, '::1', '2023-11-21 10:21:31', '2023-11-21 10:04:40', '2023-11-21 10:21:31', '2023-09-15 20:15:54', '2023-09-15 20:20:43'),
(461, 'Suresh sarkar', 'suresh@techcentrica.com', '9511060074', 'e10adc3949ba59abbe56e057f20f883e', 1, 'uploads/profile/user.png', 1, '::1', '2023-10-14 18:15:52', '2023-10-14 18:15:45', '2023-10-14 18:15:52', '2023-09-29 18:34:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(125) NOT NULL,
  `sub_category_name` text NOT NULL,
  `heading` text NOT NULL,
  `card_data` longtext NOT NULL,
  `status` int(1) NOT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `sub_category_name`, `heading`, `card_data`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(27, 12, 'About TechCentrica', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eefe02c43cd.\"}]', 1, 'about-us.html', '2023-08-30 13:59:54', '2023-09-14 10:24:36'),
(28, 12, 'Our Superheroes', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eefe3e23b33.\"}]', 1, 'superheroes.html', '2023-08-30 14:00:54', '2023-09-14 10:42:29'),
(29, 12, 'Strengths', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eefe5cb8cce.\"}]', 1, 'strength.html', '2023-08-30 14:01:24', '2023-09-14 11:03:22'),
(30, 12, 'Our Brand Story', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eefe7052cd0.\"}]', 1, 'brand.html', '2023-08-30 14:01:44', '2023-09-14 11:03:32'),
(31, 12, 'Business Growth', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eefe8697cd3.\"}]', 1, 'business-growth.html', '2023-08-30 14:02:06', '2023-09-14 11:03:43'),
(32, 14, 'Website Development', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eeffb1da860.\"}]', 1, 'Web-Solutions.html', '2023-08-30 14:07:05', '2023-09-15 12:11:27'),
(33, 13, 'Corporate Website', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eeffc17741b.\"}]', 1, 'Corporate-Website.html', '2023-08-30 14:07:21', '2023-09-14 11:54:13'),
(34, 13, 'Dynamic Website', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eeffdc76e10.\"}]', 1, 'Dynamic-Website.html', '2023-08-30 14:07:48', '2023-09-14 11:55:03'),
(35, 13, 'Website Revamping', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eeffed23afd.\"}]', 1, 'Website-Revamping.html', '2023-08-30 14:08:05', '2023-09-14 11:55:28'),
(36, 13, 'Interactive Website', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64eefffc7223d.\"}]', 1, 'Interactive-Website.html', '2023-08-30 14:08:20', '2023-09-14 11:55:59'),
(37, 13, 'Website Maintenance', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef000c0b7e1.\"}]', 1, 'Website-Maintenance.html', '2023-08-30 14:08:36', '2023-09-14 11:56:44'),
(38, 14, 'Software Development', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef00289ba9a.\"}]', 1, 'Software-Development.html', '2023-08-30 14:09:04', '2023-09-14 12:21:53'),
(39, 14, 'Portal Development', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef003689117.\"}]', 1, 'Portal-Development.html', '2023-08-30 14:09:18', '2023-09-14 12:23:18'),
(40, 14, 'E-Commerce Website', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef0048974c2.\"}]', 1, 'E-Commerce.html', '2023-08-30 14:09:36', '2023-09-14 12:24:20'),
(41, 14, 'Application Development', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef00556d6d0.\"}]', 1, 'Customized-Application-Development.html', '2023-08-30 14:09:49', '2023-09-14 12:25:24'),
(42, 15, 'Digital Marketing', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef006ba735b.\"}]', 1, 'Digital-Marketing.html', '2023-08-30 14:10:11', '2023-09-14 12:37:20'),
(43, 15, 'Content Creation', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef00787c9cf.\"}]', 1, 'Content-Creation.html', '2023-08-30 14:10:24', '2023-09-14 12:38:15'),
(44, 15, 'Social Media Marketing', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef00b244ce1.\"}]', 1, 'SMO.html', '2023-08-30 14:11:22', '2023-09-14 12:39:08'),
(45, 15, 'Mobile App Marketing', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef01798e01b.\"}]', 1, 'Mobile-Marketing.html', '2023-08-30 14:14:41', '2023-09-14 12:39:59'),
(46, 15, 'Search Engine Optimization', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef01ab08a76.\"}]', 1, 'SEO.html', '2023-08-30 14:15:31', '2023-09-14 12:41:34'),
(47, 15, 'Online Reputation Management', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef020d54bd4.\"}]', 1, 'ORM.html', '2023-08-30 14:17:09', '2023-09-14 12:42:20'),
(48, 16, 'Our Clients', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef02248b3e6.\"}]', 1, 'Clientele.html', '2023-08-30 14:17:32', '2023-09-14 12:56:25'),
(49, 16, 'Showcase', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef0232695d9.\"}]', 1, 'Showcase.html', '2023-08-30 14:17:46', '2023-09-14 12:56:38'),
(50, 17, 'Contact Location', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef0258ad3f8.\"}]', 1, 'contact-us.html', '2023-08-30 14:18:24', '2023-09-14 13:01:20'),
(51, 17, 'Join Us', '', '[{\"card_image_alt\":\"\",\"card_step\":\"\",\"card_heading\":\"\",\"card_para\":\"\",\"card_image\":\"uploads\\/sub_category\\/techcentrica_64ef026266cd6.\"}]', 1, 'Join-us.html', '2023-08-30 14:18:34', '2023-09-14 13:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `topfooter`
--

CREATE TABLE `topfooter` (
  `id` int(11) NOT NULL,
  `work_heading` text NOT NULL,
  `card_data` longtext NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `company_logo` text NOT NULL,
  `heading` text NOT NULL,
  `blogdata` text NOT NULL,
  `created_at` datetime NOT NULL,
  `linkedin` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `sales_num` text NOT NULL,
  `job_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topfooter`
--

INSERT INTO `topfooter` (`id`, `work_heading`, `card_data`, `title`, `subtitle`, `company_logo`, `heading`, `blogdata`, `created_at`, `linkedin`, `facebook`, `twitter`, `instagram`, `sales_num`, `job_num`) VALUES
(4, 'How Do We Work Process?', '[{\"card_image_alt\":\"Analysis\",\"card_step\":\"STEP:1\",\"card_heading\":\"Analysis\",\"card_para\":\"In this, detailed analysis is performed such that all the necessary adjustments can be made. Further, it ensures that the functionality of the software works.\",\"card_image\":\"uploads\\/topfooter\\/techcentrica_64f810cfbdb99.png\"},{\"card_image_alt\":\"design\",\"card_step\":\"STEP:2\",\"card_heading\":\"Design\",\"card_para\":\"In this step, the architecture of the project is built in the right way. This step helps to remove any kind of flaws by setting up a standard and perhaps.\",\"card_image\":\"uploads\\/topfooter\\/techcentrica_64f810cfbe3d8.png\"},{\"card_image_alt\":\"Development\",\"card_step\":\"STEP:3\",\"card_heading\":\"Development\",\"card_para\":\"Our team of software developers starts the process of software development. Further, functionalities & component of the software is created in this stage.\",\"card_image\":\"uploads\\/topfooter\\/techcentrica_64f810cfbe8a2.png\"},{\"card_image_alt\":\"Testing\",\"card_step\":\"STEP:4\",\"card_heading\":\"Testing\",\"card_para\":\"In this stage, the software is assessed for document bugs & errors that might be present. Further, all the errors are removed.\",\"card_image\":\"uploads\\/topfooter\\/techcentrica_64f810cfbea90.png\"},{\"card_image_alt\":\"Implementation\",\"card_step\":\"STEP:5\",\"card_heading\":\"Implementation\",\"card_para\":\"In this stage, the software that is developed is assessed by the stakeholders. This ensures complete customer satisfaction.\",\"card_image\":\"uploads\\/topfooter\\/techcentrica_64f810cfbece9.png\"}]', 'Satisfied & Thrilled <span>Clients</span>', 'These Are Our Happy, Satisfied & Thrilled Clients. Wanna Be Happy? Choose Us!', '[\"uploads\\/topfooter\\/techcentrica_64f8255a0d037.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a0d2c8.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a0d4c6.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a0d712.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a0d92f.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a0db10.png\",\"uploads\\/topfooter\\/techcentrica_64f8255a141a5.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a14536.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a14823.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a14ac7.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a14d86.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a15103.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a153c0.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a15678.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a15931.jpg\",\"uploads\\/topfooter\\/techcentrica_64f8255a15c26.jpg\",\"uploads\\/topfooter\\/techcentrica_64f81c8b35c68.jpg\",\"uploads\\/topfooter\\/techcentrica_64f81c8b35fcc.jpg\",\"uploads\\/topfooter\\/techcentrica_64f81c8b3627e.jpg\",\"uploads\\/topfooter\\/techcentrica_64f81c8b36527.jpg\",\"uploads\\/topfooter\\/techcentrica_64f81c8b36792.jpg\",\"uploads\\/topfooter\\/techcentrica_64f81c8b36a09.jpg\",\"uploads\\/topfooter\\/techcentrica_64f81c8b36e2c.jpg\",\"uploads\\/topfooter\\/techcentrica_64f81c8b370cb.jpg\"]', 'You won’t get bored.  <span>Check our blogs</span>', '[{\"blogtitle\":\"Tips to do before going to a digital agency for online reputation\",\"blogcontent\":\"There are mainly two types of online reputation i.e. good and bad online reputation...\",\"blog_url\":\"#\"},{\"blogtitle\":\"Search engine optimization methods for food bloggers.\",\"blogcontent\":\"Keywords are the medium that people use to get to your blog. That\\u2019s why it\\u2019s essential to select the right phrases or the keywords.\",\"blog_url\":\"#\"},{\"blogtitle\":\"6 effective strategies to promote your new facebook page.\",\"blogcontent\":\"You\\u2019ve made a Facebook Page for your business. Now what? How can you begin to promote your new Facebook Page...\",\"blog_url\":\"#\"},{\"blogtitle\":\"Tips to do before going to a digital agency for online reputation\",\"blogcontent\":\"There are mainly two types of online reputation i.e. good and bad online reputation...\",\"blog_url\":\"#\"}]', '2023-09-13 15:11:53', 'https://www.linkedin.com/authwall?trk=bf&trkInfo=AQE2n7wTArgCoQAAAYqN6hV46mMW8X6dDYscJJsvS1-fJU2WJpw8mTUuPwo3wVKUh5o-qOWFh3JSB2x2rindQp307tpbA_ye9jUZI51zFx-duf7LNNdSjaMbprcL-D8KQWvQx4Y=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Ftech-centrica%2F%3ForiginalSubdomain%3Din', 'https://www.facebook.com/TechCentrica/', 'https://twitter.com/i/flow/login?redirect_after_login=%2FTech_Centrica', 'https://www.instagram.com/techcentrica/', ' +91 9654 221 960, +91 9599 200 280 ', '+91 9599 200 281');

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE `user_history` (
  `id` int(11) NOT NULL,
  `parent_id` int(125) DEFAULT NULL,
  `owner_name` varchar(125) NOT NULL,
  `system_ip` text NOT NULL,
  `city` varchar(125) NOT NULL,
  `owner_id` int(125) NOT NULL,
  `login_at` datetime NOT NULL,
  `logout_at` datetime NOT NULL,
  `logout_ip` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_history`
--

INSERT INTO `user_history` (`id`, `parent_id`, `owner_name`, `system_ip`, `city`, `owner_id`, `login_at`, `logout_at`, `logout_ip`, `status`, `created_at`, `updated_at`) VALUES
(53, 0, 'Suresh sarkar', '::1', '', 461, '2023-10-09 12:31:19', '2023-10-09 12:33:25', '', 0, '2023-10-09', '2023-10-09 12:33:25'),
(54, 53, 'Suresh sarkar', '::1', '', 461, '2023-10-09 12:33:43', '2023-10-09 12:33:54', '', 0, '2023-10-09', '2023-10-09 12:33:54'),
(55, 53, 'Suresh sarkar', '::1', '', 461, '2023-10-09 12:34:03', '2023-10-09 12:34:20', '', 0, '2023-10-09', '2023-10-09 12:34:20'),
(56, 0, 'Suresh sarkar', '::1', '', 461, '2023-10-10 12:39:03', '2023-10-10 12:39:09', '', 0, '2023-10-10', '2023-10-10 12:39:09'),
(57, 56, 'Suresh sarkar', '::1', '', 461, '2023-10-10 12:39:11', '2023-10-10 13:59:37', '', 0, '2023-10-10', '2023-10-10 13:59:37'),
(58, 56, 'Suresh sarkar', '::1', '', 461, '2023-10-10 15:03:15', '2023-10-10 17:03:14', '', 0, '2023-10-10', '2023-10-10 17:03:14'),
(59, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-10-14 16:29:30', '2023-10-14 16:31:15', '', 0, '2023-10-14', '2023-10-14 16:31:15'),
(60, 59, 'Isha Mehndiratta', '::1', '', 17, '2023-10-14 16:31:25', '2023-10-14 17:43:23', '', 0, '2023-10-14', '2023-10-14 17:43:23'),
(61, 0, 'Suresh sarkar', '::1', '', 461, '2023-10-14 18:15:45', '2023-10-14 18:15:52', '', 0, '2023-10-14', '2023-10-14 18:15:52'),
(62, 59, 'Isha Mehndiratta', '::1', '', 17, '2023-10-14 18:17:21', '0000-00-00 00:00:00', '', 0, '2023-10-14', NULL),
(63, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-10-16 09:57:01', '2023-10-16 10:33:24', '', 0, '2023-10-16', '2023-10-16 10:33:24'),
(64, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-10-18 11:02:33', '2023-10-18 12:45:15', '', 0, '2023-10-18', '2023-10-18 12:45:15'),
(65, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-10-19 14:19:33', '2023-10-19 14:48:06', '', 0, '2023-10-19', '2023-10-19 14:48:06'),
(66, 65, 'Isha Mehndiratta', '::1', '', 17, '2023-10-19 16:46:01', '2023-10-19 17:39:18', '', 0, '2023-10-19', '2023-10-19 17:39:18'),
(67, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-10-23 11:18:08', '0000-00-00 00:00:00', '', 0, '2023-10-23', NULL),
(68, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-10-25 10:25:07', '2023-10-25 10:42:06', '', 0, '2023-10-25', '2023-10-25 10:42:06'),
(69, 68, 'Isha Mehndiratta', '::1', '', 17, '2023-10-25 10:43:12', '2023-10-25 10:43:32', '', 0, '2023-10-25', '2023-10-25 10:43:32'),
(70, 68, 'Isha Mehndiratta', '::1', '', 17, '2023-10-25 16:29:11', '2023-10-25 16:38:46', '', 0, '2023-10-25', '2023-10-25 16:38:46'),
(71, 68, 'Isha Mehndiratta', '::1', '', 17, '2023-10-25 16:38:53', '2023-10-25 16:45:28', '', 0, '2023-10-25', '2023-10-25 16:45:28'),
(72, 68, 'Isha Mehndiratta', '::1', '', 17, '2023-10-25 16:45:34', '2023-10-25 17:25:17', '', 0, '2023-10-25', '2023-10-25 17:25:17'),
(73, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-10-26 09:55:34', '2023-10-26 10:07:43', '', 0, '2023-10-26', '2023-10-26 10:07:43'),
(74, 73, 'Isha Mehndiratta', '::1', '', 17, '2023-10-26 10:09:26', '2023-10-26 10:14:27', '', 0, '2023-10-26', '2023-10-26 10:14:27'),
(75, 73, 'Isha Mehndiratta', '::1', '', 17, '2023-10-26 10:18:29', '2023-10-26 10:26:40', '', 0, '2023-10-26', '2023-10-26 10:26:40'),
(76, 73, 'Isha Mehndiratta', '::1', '', 17, '2023-10-26 10:26:54', '2023-10-26 10:38:46', '', 0, '2023-10-26', '2023-10-26 10:38:46'),
(77, 73, 'Isha Mehndiratta', '::1', '', 17, '2023-10-26 10:39:21', '2023-10-26 11:02:04', '', 0, '2023-10-26', '2023-10-26 11:02:04'),
(78, 73, 'Isha Mehndiratta', '::1', '', 17, '2023-10-26 11:05:32', '2023-10-26 11:05:42', '172.105.50.156', 0, '2023-10-26', '2023-10-26 11:05:42'),
(79, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-10-28 12:28:29', '2023-10-28 17:00:26', '172.105.50.156', 0, '2023-10-28', '2023-10-28 17:00:26'),
(80, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-10-30 17:21:11', '2023-10-30 17:26:12', '172.105.50.156', 0, '2023-10-30', '2023-10-30 17:26:12'),
(81, 80, 'Isha Mehndiratta', '::1', '', 17, '2023-10-30 17:27:03', '2023-10-30 17:31:04', '172.105.50.156', 0, '2023-10-30', '2023-10-30 17:31:04'),
(82, 80, 'Isha Mehndiratta', '::1', '', 17, '2023-10-30 17:31:27', '2023-10-30 17:32:09', '103.44.53.133', 0, '2023-10-30', '2023-10-30 17:32:09'),
(83, 80, 'Isha Mehndiratta', '::1', '', 17, '2023-10-30 17:34:15', '2023-10-30 17:36:49', '103.44.53.133', 0, '2023-10-30', '2023-10-30 17:36:49'),
(84, 80, 'Isha Mehndiratta', '::1', '', 17, '2023-10-30 17:37:18', '2023-10-30 17:37:23', '172.105.50.156', 0, '2023-10-30', '2023-10-30 17:37:23'),
(85, 80, 'Isha Mehndiratta', '::1', '', 17, '2023-10-30 17:43:28', '2023-10-30 17:44:52', '::1', 0, '2023-10-30', '2023-10-30 17:44:52'),
(86, 80, 'Isha Mehndiratta', '::1', '', 17, '2023-10-30 17:48:43', '2023-10-30 18:20:06', '::1', 0, '2023-10-30', '2023-10-30 18:20:06'),
(87, 80, 'Isha Mehndiratta', '::1', '', 17, '2023-10-30 18:37:46', '2023-10-30 18:52:38', '::1', 0, '2023-10-30', '2023-10-30 18:52:38'),
(88, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-11-10 14:20:13', '2023-11-10 14:23:46', '::1', 0, '2023-11-10', '2023-11-10 14:23:46'),
(89, 0, 'Isha Mehndiratta', '::1', '', 17, '2023-11-21 10:04:40', '2023-11-21 10:21:31', '::1', 0, '2023-11-21', '2023-11-21 10:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `z_admin`
--

CREATE TABLE `z_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` text NOT NULL,
  `admin_type` varchar(10) NOT NULL,
  `name` varchar(125) NOT NULL,
  `phone` int(11) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `z_admin`
--

INSERT INTO `z_admin` (`id`, `email`, `password`, `admin_type`, `name`, `phone`, `role`) VALUES
(1, 'admin@techcentrica.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_dev`
--
ALTER TABLE `design_dev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digi_solution`
--
ALTER TABLE `digi_solution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imported_imquiry`
--
ALTER TABLE `imported_imquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_solutions`
--
ALTER TABLE `our_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_admin`
--
ALTER TABLE `sub_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topfooter`
--
ALTER TABLE `topfooter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_history`
--
ALTER TABLE `user_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `z_admin`
--
ALTER TABLE `z_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `design_dev`
--
ALTER TABLE `design_dev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `digi_solution`
--
ALTER TABLE `digi_solution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imported_imquiry`
--
ALTER TABLE `imported_imquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `our_solutions`
--
ALTER TABLE `our_solutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_admin`
--
ALTER TABLE `sub_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `topfooter`
--
ALTER TABLE `topfooter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_history`
--
ALTER TABLE `user_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `z_admin`
--
ALTER TABLE `z_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
