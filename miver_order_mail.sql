-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 11:33 AM
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
-- Database: `miver`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bannerImageLink` varchar(255) DEFAULT NULL,
  `bannertext` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `bannerImageLink`, `bannertext`) VALUES
(1, 'Graphics & Design', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'graphics-design', 'Designs to make you stand out.'),
(2, 'Digital Marketing', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'digital-marketing', 'Build your brand. Grow your business.'),
(3, 'Writing & Translation', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'writing-translation', 'Get your words across—in any language.'),
(4, 'Video & Animation', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'video-animation', 'Bring your story to life with creative videos.'),
(5, 'Music and Audio', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'music-audio', 'Don\'t miss a beat. Bring your sound to life.'),
(6, 'Programming & Tech', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'programming-tech', 'You think it. A programmer develops it.'),
(7, 'Business', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'business', 'Take your business to the next level.'),
(8, 'Lifestyle', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL, NULL),
(9, 'Photography', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'photography', 'Get the shot you need. Every time.\r\n\r\n\r\n'),
(10, 'End-to-End Projects', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL, NULL),
(11, 'Education', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_user`
--

CREATE TABLE `category_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_user`
--

INSERT INTO `category_user` (`id`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(2, 7, 2, '2023-07-11 23:47:10', '2023-07-11 23:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `faqs` text NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `faqs`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'What is graphic design?', 'Put simply, graphic design is the art and craft of creating visual content that communicates a concept, an idea or a brand message to the public. Logos, artworks, drawings, illustrations, cards, emails and a whole paraphernalia of designs are all around us. You can see them in print and digital media, in shops, restaurants and cafes, on billboards, books and magazines, in the apps we use, the sites we visit and the physical and digital products we buy. ', 1, NULL, NULL),
(2, 'How to hire top graphic designers?', 'A captivating visual presence is very important whether you’re a business or a non-commercial entity. Your potential audiences are already forming an opinion and deciding whether to interact with you based on what they see, long before you’ve had a chance to say or write something. So it’s imperative to carefully select the right freelancer to meet your needs and keep you within budget. There are many different areas in which graphic designers specialize so if you want to hire the right talent to meet the requirements of your particular project, here are some easy to follow tips and tricks. - Always research their portfolio on Fiverr and ask for more examples if necessary; - Carefully think about what your style and preferences are so you know what you like, what you don’t like and what you actually want (colors, graphics, images, etc); - Write a clear brief - depending on the size of the project your brief can be very short or contain a lot of detail. What’s important is to be clear on the important points; - Define a budget and be clear to yourself and the freelancer how far you can stretch it; - Form a clear agreement on deadlines and revisions and respect the work of the designer - if you are clear on the above points then there shouldn’t be any surprises; - Think long-term - a good designer will be able to help you holistically and develop an evolving long-term vision for your product or service.', 1, NULL, NULL),
(3, 'How much does it cost to hire a graphic designer', 'There is no simple answer to this question as graphic design is not a commodity or a product that has an exact way to be measured or priced. The great thing about Fiverr is that you can find a freelance graphic designer for any budget, starting from just $5 per gig and going up to hundreds or thousands of dollars for more complex and time and resource consuming requirements. However, there are a number of factors that will influence the final price of the project such as the level of experience of the seller (from novices to Top Rated and Pro Sellers), the number or service options included in the gig, delivery times, number of revisions and whether any extras might need to be added at some point. In fact, revisions can be a very tricky area for graphic design projects so it’s key for you to have very clear requirements to start with and also to agree with the seller what their output will be (e.g.how many initial versions they will offer) to avoid any misunderstandings or unwanted surprises on both sides. A more experienced designer will charge more, however, they can also help you define your requirements and save time (and money) in the long-run by keeping you on track for your goals. Alternatively, a new freelancer who’s perhaps less experienced or trying to build their reputation will be priced more competitively but might not have the skills or professional maturity of a seasoned creative director.', 1, NULL, NULL),
(4, 'What is digital marketing?', 'By definition digital marketing (aka online marketing) promotes a client’s brand, products and services via the internet or other digital channels. A digital marketing campaign is typically delivered via an electronic device, such as computer, tablet, phone or other medium, and leverages one or more channels, such as social media, search engines, websites, email and others, as chosen by the digital marketer based on your goals, to raise brand awareness amongst potential and current customers.', 2, NULL, NULL),
(5, 'What does a digital marketer do?', 'A digital marketer finds creative solutions to drive brand awareness and lead generation via free or paid digital channels, including email, search engines, social media, the company’s website and blog. The exact mix will depend on the client’s specific goals. The digital marketer focuses on relevant KPIs (key performance indicators) to measure performance and maximize revenue potential. Some companies have in-house digital marketers whilst others prefer to outsource, seeking different skills in agencies or freelancers, depending on their channel mix.', 2, NULL, NULL),
(6, 'How do digital campaigns work?', 'A well-planned and executed digital marketing campaign will target the right prospects for your products or services at the right time, which means they are more likely to buy or book what you offer. It’s more flexible, efficient, and cost-effective than many traditional marketing methods and it allows you to compete with the big guns in your industry even if you are only a small player. It also provides detailed analytics so you can measure everything from the number of visitors, to how long they spent on your page, whether or not they made a sale and so much more, including cost per click and ROI (return on investment)', 2, NULL, NULL),
(7, 'How should I choose a writer?', 'Great content is now a must for your business so finding the right writer is one of the keys to success. Clearly define your content goals before you even start looking for a freelancer, then choose the right category and research by reading reviews and looking at portfolios, skills, and experience before you shortlist a few writers. Contact the few sellers you have selected and directly ask them some questions to assess their level of knowledge and expertise.', 3, NULL, NULL),
(8, 'How can content help my business?', 'Content can make or break your business so it’s important that you use it in all your channels - website, social media, emails, adverts, etc. - in a way that helps and promotes your business. A good content writer will not only craft compelling text but will be able to ask the right questions beforehand so they can be sure to create an article or advert or microcopy that sells your brand in the right way to the right people.', 3, NULL, NULL),
(9, 'What is the difference between copywriting and content writing?', 'Storytelling is key for both copywriters and content writers, but it is used for different purposes. A copywriter aims to convert and sell a product or service with the story. Whereas a content writer is more about engagement and building commitment and it can take many detours before even remotely mentioning the brand or product. Copywriting commands the reader with a clear call to action, whereas content writers craft an intricate interaction through more prolonged conversation with the audience.', 3, NULL, NULL),
(10, 'Why does my business need videos?', 'In today\'s marketing strategies, nothing tops the power that videos have - 90% of customers say that videos help them decide whether to buy or not. They visually help showcase products and services that reach and attract new customers. Videos convey more information in less time and are much easier for the audience to become immersed in. They also help your business stand out from your competition by putting a face and name to your brand, instilling confidence and trustworthiness. And the fact that Google loves videos is just another reason to start making those business videos!', 4, NULL, NULL),
(11, 'What type of videos does my business need?', 'Depending on what type of product or service your business provides, there are a plethora of videos to choose from. Product videos are great for showing off your product\'s features and benefits in an engaging way. Explainer videos are also popular for teaching or explaining how to solve a problem or issue. They\'re also great for demonstrating how to use a product or solution. Onboarding, training, and company culture videos are fantastic for the inner working solutions in your business, and testimonial and promotional videos are perfect for promoting your business. And don\'t forget about those fun social videos that customers love to see!', 4, NULL, NULL),
(12, 'What are the elements of a great video?', 'To create a successful video, you should keep these tips in mind. First, keep it short. The rule of thumb for videos is the shorter the better, and keeping it under 2 minutes is essential. Next, you need an attention-grabbing intro. It doesn\'t matter how short your video is - if you can\'t grab your audience\'s attention in the first few seconds, they will move on. You should also take into consideration the background music, video lighting, adding captions, and smooth editing of your business video. And lastly, you should have a decisive call to action (CTA) to finish out strong.', 4, NULL, NULL),
(13, 'What are music & audio services?', 'These are services provided by professional musicians, singers, composers, producers, music technologists and other broad or narrow specialists. Whether you want to polish your new album, need a jingle for an advert or a voiceover for your course, it’s all in Music & Audio.', 5, NULL, NULL),
(14, 'How do I choose the right freelancer for my music project?', 'If you want a mixing engineer, voice over expert or a session musician, Fiverr has the right freelancer for your music project. Decide on your needs, deadlines & budget, browse through the list of professionals, view their portfolios and reviews and always contact the seller before ordering.', 5, NULL, NULL),
(15, 'What are the benefits of online music services?', 'Music & Audio experts are all in one place, available 24/7. With Fiverr you can scale your project up or down without lengthy contracts or negotiations, get the work done fast and change the provider or work with multiple freelancers according to your budget and timescale.', 5, NULL, NULL),
(16, 'What is Web programming?', 'Web programming or development use code to focus on the website functionality and ensure it works and is easy to use. It involves markup, writing, network security and coding which is client and server side. The most popular web programming languages are HTML, XML, JavaScript, PHP, ASP.Net and Python.', 6, NULL, NULL),
(17, 'How do I choose the right freelance programmer for my project?', 'With so many programming services, it’s a challenge to choose the right programmer. Formulate a clear brief, decide on a budget, deadlines and scope. Select a programmer based not only on their skills and experience but also on how well you might work and communicate.', 6, NULL, NULL),
(18, 'Do I need to prepare something for my programmer?', 'Yes, good documentation and a clear brief are crucial for the success of getting the desired result for your project. Formulate your initial high level idea and brainstorm it until you have a clear vision. Next, turn your idea into detailed functionality requirements for the backend programming and detail your technical requirements (platform, devices etc.) Also add non-functional requirements e.g. performance, security, load and clearly specify the scope of the project.', 6, NULL, NULL),
(19, 'What are the core services a business needs?', 'Every business is a system with an external environment. A business manager has to both steer internal processes and respond to that external environment. Consequently, you need services that facilitate your performance as a manager or business owner, such as virtual assistants and business, financial, and HR consulting. Furthermore, your business interacts with a wide range of external parties: customers, business partners, competitors, and legal authorities. For business success, you need to get to know your competitors by conducting market research. When you have a proposal to make, you need an excellent business plan and presentation to convince your business partners and stakeholders. Supply chain management, sales services, and customer care can all help you to deliver a brilliant product and keep your customers satisfied. Last but not least, having a legal consultant on your side is a must to protect your business.', 7, NULL, NULL),
(20, 'What business services do I need for my day-today business tasks?', 'First of all, your business needs to sell to generate revenue. Thus, you need sales services to help you acquire new customers. In addition, customer care services are critical for keeping existing clients loyal and convincing them to buy again. If you offer physical goods, you will probably also benefit from supply chain management services. For an online shop, you may want to consider e-commerce management to take care of any technical issues and marketing best practices. When your business grows, there are two major implications. First, you need someone to whom you can delegate daily routine management duties and assist with miscellaneous time-consuming tasks. You can hire project management and virtual assistant service providers who will work with you hand-in-hand to keep your business on the upright curve.', 7, NULL, NULL),
(21, 'What business services do I need for long-term planning?', 'Every business needs a long-term strategy. It starts with market research that helps you to identify attractive niches. Already at this stage, but especially during the consequent planning phase, you should consider business consulting and financial consulting services. Moreover, once you have a strategy, you can hire business plan and business presentation service providers to turn your freshly backed strategy into a roadmap. You also need these services for good visualization of your business idea and its proof of concept when negotiating with your business investors. Optionally, you may need to hire legal services to create a legal framework for your business idea. HR consulting services will help you to articulate your personnel needs and form a robust recruitment strategy.', 7, NULL, NULL),
(22, 'What are Fiverr photography services?', 'Photography services offered on Fiverr include portrait photography, events photography, real estate photography, food photography, and more. Beyond capturing photos, photographers on Fiverr offer other photography-related services, such as photo retouching, background removal, model casting, and styling. Best of all, you can choose from a variety of local photography services near your area that fit your budget and timeframe.', 9, NULL, NULL),
(23, 'Are Fiverr photography services offered in-person or remotely?', 'Fiverr photographers offer three types of services: in-person photography, which involves face-to-face interaction between the client and photographer; remote photography, where the photographer is sent to the client\'s location to do a photoshoot; and product photography, where the client ships the product to the photographer for a photo session and the photographer returns the photos and product to the client.', 9, NULL, NULL),
(24, 'What types of photographers can I hire on Fiverr?', 'There is a wide range of experts on Fiverr who specialize in different types of photography. You’ll find portrait photographers, event photographers, product photographers, aerial photographers, lifestyle & fashion photographers, real estate photographers, and food photographers. Some photographers specialize in niches such as macro and bird photography, photography for acting portfolios, and interior design photography', 9, NULL, NULL),
(25, 'What are the stages of a website development project?', 'Website development projects typically involve several stages, starting with planning and research to identify the website\'s purpose, target audience, and required features. The design stage follows, where wireframes, prototypes, and the website\'s layout and navigation are created. The website is then developed using programming languages like HTML, CSS, and JavaScript. Content is created or gathered for the site, and it is tested for bugs and other issues before launch. Once live, the site requires ongoing maintenance and updates to ensure it meets users\' needs.', 10, NULL, NULL),
(26, 'What kinds of projects need web design?', 'Any online project can require some amount of web design. This can include single landing pages and websites with multiple sub-sites. Even a simple web page design with single fields to collect email addresses is an example of web design.', 10, NULL, NULL),
(27, 'What kinds of projects need web design?', 'Any online project can require some amount of web design. This can include single landing pages and websites with multiple sub-sites. Even a simple web page design with single fields to collect email addresses is an example of web design.', 10, NULL, NULL),
(30, 'What does a digital marketer do?', 'A digital marketer finds creative solutions to drive brand awareness and lead generation via free or paid digital channels, including email, search engines, social media, the company’s website and blog. The exact mix will depend on the client’s specific goals. The digital marketer focuses on relevant KPIs (key performance indicators) to measure performance and maximize revenue potential. Some companies have in-house digital marketers whilst others prefer to outsource, seeking different skills in agencies or freelancers, depending on their channel mix.', 10, NULL, NULL),
(31, 'How do digital campaigns work?', 'A well-planned and executed digital marketing campaign will target the right prospects for your products or services at the right time, which means they are more likely to buy or book what you offer. It’s more flexible, efficient, and cost-effective than many traditional marketing methods and it allows you to compete with the big guns in your industry even if you are only a small player. It also provides detailed analytics so you can measure everything from the number of visitors, to how long they spent on your page, whether or not they made a sale and so much more, including cost per click and ROI (return on investment)', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gig_title` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sub_sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`id`, `gig_title`, `user_id`, `sub_sub_category_id`, `keyword`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'web design', 2, 1, 'development', 'sample_gig_1.jpg', '2023-07-31 03:03:02', '2023-07-31 03:03:02'),
(2, 'app development', 1, 2, 'development', 'sample_gig_2.jpg', '2023-07-31 00:45:25', '2023-07-31 00:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `guidesLink` varchar(255) NOT NULL,
  `imageLink` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `title`, `guidesLink`, `imageLink`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'The 4 main types of fonts & how to choose the right font for your brand and logo', '#', 'G & D 1', 1, NULL, NULL),
(2, 'The ultimate guide to choosing the right colors for your brand', '#', 'G & D 2', 1, NULL, NULL),
(3, 'How to illustrate a children\'s book: 9 steps to illustrate your book', '#', 'G & D 3', 1, NULL, NULL),
(4, 'How to illustrate a children\'s book: 9 steps to illustrate your book', '#', 'D & M 1', 2, NULL, NULL),
(5, 'How to create a YouTube channel, a step-by-step guide', '#', 'D & M 2', 2, NULL, NULL),
(6, '26 Marketing Ideas For Small Businesses', '#', 'D & M 3', 2, NULL, NULL),
(7, 'What is copywriting and what does a copywriter do?', '#', 'W & T 1', 3, NULL, NULL),
(8, 'So, You’ve Written a Book? Your Guide on How to Self-Publish a Book', '#', 'W & T 2', 3, NULL, NULL),
(9, '10 Content Marketing Trends for Small Businesses in 2023', '#', 'W & T 3', 3, NULL, NULL),
(10, 'How to create a promo video on a budget?', '#', 'V & A 1', 4, NULL, NULL),
(11, '10 Best Video Editing Softwares for YouTubers', '#', 'V & A 2', 4, NULL, NULL),
(12, 'The Complete Guide to Successful Video Advertising', '#', 'V & A 3', 4, NULL, NULL),
(13, 'What is voice-over? all you need to know (a complete guide)', '#', 'M & A 1', 5, NULL, NULL),
(14, 'How To Become a Songwriter in 2022', '#', 'M & A 2', 5, NULL, NULL),
(15, 'DJ Drops - Learn To Make Your Own', '#', 'M & A 3', 5, NULL, NULL),
(16, 'How to build a WordPress website for your small business', '#', 'P & T 1', 6, NULL, NULL),
(17, 'How to Find a Web Developer in 2023', '#', 'P & T 2', 6, NULL, NULL),
(18, '10 Best Website Builders for Small Business', '#', 'P & T 3', 6, NULL, NULL),
(19, 'What is a virtual assistant?', '#', 'B 1', 7, NULL, NULL),
(20, '28 Side Hustle Ideas to Work from Home', '#', 'B 2', 7, NULL, NULL),
(21, 'How to Hire Freelancers for Your Business Using Delegation in 2023', '#', 'B 3', 7, NULL, NULL),
(22, 'How to Hire Freelancers for Your Business Using Delegation in 2023', '#', 'P 1', 9, NULL, NULL),
(23, '10 Product Photography Ideas to Help You Stand Out', '#', 'P 2', 9, NULL, NULL),
(24, 'How to start a photography business in 9 steps', '#', 'P 3', 9, NULL, NULL),
(25, '10 Best Website Builders for Small Business', '#', 'E-E 1', 10, NULL, NULL),
(26, '15 ways to promote your business online', '#', 'E-E 2', 10, NULL, NULL),
(27, 'What is a brand style guide and how do you create one?', '#', 'E-E 3', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('0020db00-04aa-4680-82d5-7d4f03f64c71', 1, 3, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('04ea171e-43ce-4c7a-91d7-554a502f52c0', 5, 2, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('19a0ae8a-bf27-4c87-a9d1-627e0ef7f342', 3, 7, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('1bdb6911-163f-4f25-859b-cc7392ef1185', 1, 4, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('3a21c5ab-78c3-4887-8d75-be09a41c59d5', 5, 2, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('5476eb73-ce66-4689-b14f-276371ded135', 1, 4, 'Message 1 from User 1 to User 2.', NULL, 0, '2023-07-27 20:53:40', '2023-07-27 20:58:40'),
('568bd3bc-c574-419a-9af2-6d311f4f9173', 8, 3, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('5e7c7d42-a7dc-4b96-bd6d-dbe64945967e', 2, 4, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('676b278a-be6a-4f56-9008-0eff085be506', 3, 8, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('71f48fbb-a7a8-4953-9611-b1bd1523aaa1', 1, 2, 'Message 1 from User 1 to User 2.', NULL, 0, '2023-07-27 20:53:40', '2023-07-27 20:58:40'),
('848f7e49-29d5-46eb-863a-fc25cce35ddf', 2, 5, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('8688f6c2-d2c6-4f29-bdaf-b6d9a15641f3', 3, 8, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('926c2bbb-9798-4b27-8d5d-cda33e4fabb8', 2, 5, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('9f65550b-e796-40bc-8658-808e22c7f4cb', 8, 3, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('b7e6fcaa-89e4-4016-ac52-edc2e9b7dd8e', 1, 4, 'Message 2 from User 1 to User 2.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('b868693d-d709-45eb-a9fa-c3bafe70ee7f', 2, 4, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('c135935e-d6ec-4364-af40-e43a71ffd9db', 1, 3, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('c26b527c-179a-4c0d-950c-b6f4132e733d', 3, 7, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('c8469355-a405-4ead-8158-ed9fe2626574', 3, 1, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('d4bb27b9-c66e-4b7b-807f-4c9cf8943ce6', 3, 1, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('d626f40c-f4ae-42f2-8ca0-4c6cb47ee197', 2, 1, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('edb035d0-6eb8-4661-a9c2-a88adae234f3', 2, 1, 'Message 2 from User 1 to User 2.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_07_31_062139_create_gigs_table', 1),
(2, '2023_07_31_062538_create_packages_table', 2),
(3, '2023_07_31_080051_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `notification_text` text NOT NULL,
  `notification_date` timestamp NULL DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `notification_text`, `notification_date`, `is_read`, `created_at`, `updated_at`) VALUES
(2, 2, 'You have a new order, id:\'.ORD-2-1-1-20230731091402.', '2023-07-31 03:14:02', 0, '2023-07-31 03:14:02', '2023-07-31 03:14:02'),
(3, 1, 'You have placed a new order, id:\'.ORD-2-1-1-20230731091402.', '2023-07-31 03:14:02', 0, '2023-07-31 03:14:02', '2023-07-31 03:14:02'),
(4, 2, 'You have a new order, id:\'.ORD-2-1-1-20230731092736.', '2023-07-31 03:27:36', 0, '2023-07-31 03:27:36', '2023-07-31 03:27:36'),
(5, 1, 'You have placed a new order, id:\'.ORD-2-1-1-20230731092736.', '2023-07-31 03:27:36', 0, '2023-07-31 03:27:36', '2023-07-31 03:27:36'),
(6, 2, 'You have a new order, id:\'.ORD-2-1-1-20230731092849.', '2023-07-31 03:28:49', 0, '2023-07-31 03:28:49', '2023-07-31 03:28:49'),
(7, 1, 'You have placed a new order, id:\'.ORD-2-1-1-20230731092849.', '2023-07-31 03:28:49', 0, '2023-07-31 03:28:49', '2023-07-31 03:28:49'),
(8, 2, 'You have a new order, id:\'.ORD-2-1-1-20230731093016.', '2023-07-31 03:30:16', 0, '2023-07-31 03:30:16', '2023-07-31 03:30:16'),
(9, 1, 'You have placed a new order, id:\'.ORD-2-1-1-20230731093016.', '2023-07-31 03:30:16', 0, '2023-07-31 03:30:16', '2023-07-31 03:30:16'),
(10, 2, 'You have a new order, id:\'.ORD-2-1-1-20230731093143.', '2023-07-31 03:31:43', 0, '2023-07-31 03:31:43', '2023-07-31 03:31:43'),
(11, 1, 'You have placed a new order, id:\'.ORD-2-1-1-20230731093143.', '2023-07-31 03:31:43', 0, '2023-07-31 03:31:43', '2023-07-31 03:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `gig_id` bigint(20) UNSIGNED DEFAULT NULL,
  `buyer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `seller_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `gig_id`, `buyer_id`, `price`, `seller_id`, `created_at`, `updated_at`) VALUES
(1, 'ORD-2-1-1-20230731090337', 1, 1, 29.99, 2, '2023-07-31 03:03:37', '2023-07-31 03:03:37'),
(2, 'ORD-2-1-1-20230731091327', 1, 1, 29.99, 2, '2023-07-31 03:13:27', '2023-07-31 03:13:27'),
(3, 'ORD-2-1-1-20230731091402', 1, 1, 29.99, 2, '2023-07-31 03:14:02', '2023-07-31 03:14:02'),
(4, 'ORD-2-1-1-20230731092736', 1, 1, 29.99, 2, '2023-07-31 03:27:36', '2023-07-31 03:27:36'),
(5, 'ORD-2-1-1-20230731092849', 1, 1, 29.99, 2, '2023-07-31 03:28:49', '2023-07-31 03:28:49'),
(6, 'ORD-2-1-1-20230731093016', 1, 1, 29.99, 2, '2023-07-31 03:30:16', '2023-07-31 03:30:16'),
(7, 'ORD-2-1-1-20230731093143', 1, 1, 29.99, 2, '2023-07-31 03:31:43', '2023-07-31 03:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gig_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `delivery_time` int(11) NOT NULL,
  `delivery_details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `gig_id`, `name`, `price`, `delivery_time`, `delivery_details`, `created_at`, `updated_at`) VALUES
(1, 1, 'Basic', 29.99, 3, 'Sample delivery details for the Basic Package.', '2023-07-31 00:45:54', '2023-07-31 00:45:54'),
(2, 1, 'Standard', 39.99, 7, 'Sample delivery details for the Standard Package.', '2023-07-31 00:45:54', '2023-07-31 00:45:54'),
(3, 1, 'Premium', 49.99, 15, 'Sample delivery details for the Standard Package.', '2023-07-31 00:45:54', '2023-07-31 00:45:54'),
(4, 2, 'Basic', 50.99, 3, 'Sample delivery details for the Basic Package.', '2023-07-31 00:45:54', '2023-07-31 00:45:54'),
(5, 2, 'Standard', 79.99, 7, 'Sample delivery details for the Standard Package.', '2023-07-31 00:45:54', '2023-07-31 00:45:54'),
(6, 2, 'Premium', 90.99, 15, 'Sample delivery details for the Standard Package.', '2023-07-31 00:45:54', '2023-07-31 00:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `review_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `service_id`, `rating`, `comment`, `review_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, 'Great logo design, highly recommended!', '2023-07-11 23:47:10', '2023-07-11 23:47:10', '2023-07-11 23:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_description` text NOT NULL,
  `service_price` decimal(8,2) NOT NULL,
  `service_category` bigint(20) UNSIGNED NOT NULL,
  `delivery_time` datetime NOT NULL,
  `service_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `service_title`, `service_description`, `service_price`, `service_category`, `delivery_time`, `service_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Service 1', 'This is service 1 description', 10.99, 1, '2023-07-15 05:47:10', 'active', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(2, 2, 'Service 2', 'This is service 2 description', 15.99, 2, '2023-07-17 05:47:10', 'active', '2023-07-11 23:47:10', '2023-07-11 23:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imageName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `created_at`, `updated_at`, `imageName`) VALUES
(1, 1, 'Logo & Brand Identity', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'logo-brand-identity.png'),
(2, 1, 'Web & App Design', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'web-app-design.png'),
(3, 1, 'Art & Illustration', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'ArtIllustration.png'),
(4, 2, 'Social', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'Social.png'),
(5, 2, 'Search', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'Search.png'),
(6, 2, 'Methods & Techniques', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'MethodsTechniques.png'),
(7, 3, 'Content Writing', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'ContentWritingEditing.jpg'),
(8, 3, 'Translation & Transcription', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'TranslationTranscription.jpg'),
(9, 3, 'Business & Marketing Copy', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'BusinessCopy.jpg'),
(10, 4, 'Editing & Post-Production', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'VideoEditingPostProduction.jpg'),
(11, 4, 'Animation', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'Animation.jpg'),
(12, 4, 'Social & Marketing Videos', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'SocialMarketingVideos.jpg'),
(13, 5, 'Music Production & Writing', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'MusicProductionWriting.jpg'),
(14, 5, 'Audio Engineering & Post Production', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'AudioEngineeringPostProduction.png'),
(15, 5, 'Voice Over & Streaming', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'VoiceOverStreaming.jpg'),
(16, 6, 'Websites', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'WebsiteDevelopment.png'),
(17, 6, 'Website Platforms', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'WebsitePlatforms.png'),
(18, 6, 'Application Development', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'ApplicationDevelopment.png'),
(19, 7, 'Business Formation', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'BusinessFormation.jpg'),
(20, 7, 'General & Administrative', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'GeneralandAdministrative.jpg'),
(21, 7, 'Legal Services', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'LegalConsulting .jpg'),
(22, 8, 'Sub Category 1', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL),
(23, 8, 'Sub Category 2', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL),
(24, 8, 'Sub Category 3', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL),
(25, 9, 'Product', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'Product.jpg'),
(26, 9, 'People', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'People.jpg'),
(27, 9, 'Scenes', '2023-07-11 23:47:09', '2023-07-11 23:47:09', 'Misc.jpg'),
(28, 10, 'Sub Category 1', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL),
(29, 10, 'Sub Category 2', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL),
(30, 10, 'Sub Category 3', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL),
(31, 11, 'Sub Category 1', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL),
(32, 11, 'Sub Category 2', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL),
(33, 11, 'Sub Category 3', '2023-07-11 23:47:09', '2023-07-11 23:47:09', NULL),
(34, 1, '3D Design', NULL, NULL, '3DDesign.png'),
(35, 1, 'Marketing Design', NULL, NULL, 'Marketingdesign.png'),
(36, 3, 'Career Writing', NULL, NULL, 'CareerWriting.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `sub_category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Logo Design', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(2, 1, 'Brand Style Guides ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(3, 1, 'Business Cards & Stationery\r\n', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(4, 1, 'Fonts & Typography', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(5, 1, 'Sub-Sub Category 5', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(6, 2, 'Website Design ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(7, 2, 'App Design', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(8, 2, 'UX Design', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(9, 2, 'Landing Page Design ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(10, 2, 'Icon Design', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(11, 3, 'Illustration', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(12, 3, 'AI Artists', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(13, 3, 'NFT Art', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(14, 3, 'Pattern Design', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(15, 3, 'Storyboards', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(16, 4, 'Social Media Marketing', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(17, 4, 'Paid Social Media', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(18, 4, 'Influencer Marketing', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(19, 4, 'Sub-Sub Category 4', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(20, 4, 'Sub-Sub Category 5', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(21, 5, 'Search Engine Optimization (SEO)', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(22, 5, 'Search Engine Marketing (SEM)', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(23, 5, 'Local SEO', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(24, 5, 'E-Commerce SEO', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(25, 5, 'Video SEO', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(26, 6, 'Video Marketing', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(27, 6, 'E-Commerce Marketing', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(28, 6, 'Email marketing ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(29, 6, 'Affiliate Marketing', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(30, 6, 'Text Message Marketing', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(31, 7, 'Articles and Blog Posts', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(32, 7, 'Website Content', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(33, 7, 'Podcast Writing', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(34, 7, 'Scriptwriting', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(35, 7, 'Creative Writing', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(36, 8, 'Translation', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(37, 8, 'Localization', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(38, 8, 'Transcription', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(39, 8, 'Sub-Sub Category 4', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(40, 8, 'Sub-Sub Category 5', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(41, 9, 'Business Names & Slogans', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(42, 9, 'Brand Voice & Tone', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(43, 9, 'Product Descriptions', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(44, 9, 'Email Copy', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(45, 9, 'Social Media Copy', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(46, 10, 'Video Editing ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(47, 10, 'Visual Effects', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(48, 10, 'Subtitles and Captions', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(49, 10, 'Visual Effects', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(50, 10, 'Intro ad Outro videos', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(51, 11, 'Character Animation', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(52, 11, 'Logo Animation', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(53, 11, 'Animated Explainers ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(54, 11, 'NFT Animation ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(55, 11, 'Animation for Kids ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(56, 12, 'Music Videos ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(57, 12, 'Slideshow Videos', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(58, 12, 'Video Ads and Commercials ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(59, 12, 'Meditation Videos ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(60, 12, 'Corporate Videos', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(61, 13, 'Producers and Composers', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(62, 13, 'Songwriters', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(63, 13, 'Beat Making ', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(64, 13, 'Singers and Vocalists', '2023-07-11 23:47:09', '2023-07-11 23:47:09'),
(65, 13, 'Jingles and Intros', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(66, 14, 'Mixing and Mastering ', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(67, 14, 'Audio Editing ', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(68, 14, 'Vocal Editing ', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(69, 14, 'Audio Logo and Sonic Branding ', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(70, 14, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(71, 15, 'Voice Over', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(72, 15, 'Podcast Production', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(73, 15, 'Audiobook Production', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(74, 15, 'Audio Ads Production', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(75, 15, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(76, 16, 'Website Development ', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(77, 16, 'Website Maintenance', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(78, 16, 'Website Customization', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(79, 16, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(80, 16, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(81, 17, 'WordPress', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(82, 17, 'Shopify', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(83, 17, 'Wix', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(84, 17, 'Webflow', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(85, 17, 'Custom Websites', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(86, 18, 'Software Development', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(87, 18, 'Mobile App Development', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(88, 18, 'Desktop Development', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(89, 18, 'Game development', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(90, 18, 'Desktop Applications', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(91, 19, 'Business Registration', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(92, 19, 'Business Plans ', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(93, 19, 'Pitch Decks', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(94, 19, 'Market Research', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(95, 19, 'Startup Consulting', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(96, 20, 'Virtual Assistant ', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(97, 20, 'HR Cobsulting', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(98, 20, 'Project Management', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(99, 20, 'Business Consulting', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(100, 20, 'E-Commerce Management', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(101, 21, 'Applications and Registrations', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(102, 21, 'Legal Documents and Contracts', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(103, 21, 'Legal Consulting', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(104, 21, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(105, 21, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(106, 22, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(107, 22, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(108, 22, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(109, 22, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(110, 22, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(111, 23, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(112, 23, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(113, 23, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(114, 23, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(115, 23, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(116, 24, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(117, 24, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(118, 24, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(119, 24, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(120, 24, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(121, 25, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(122, 25, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(123, 25, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(124, 25, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(125, 25, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(126, 26, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(127, 26, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(128, 26, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(129, 26, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(130, 26, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(131, 27, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(132, 27, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(133, 27, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(134, 27, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(135, 27, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(136, 28, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(137, 28, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(138, 28, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(139, 28, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(140, 28, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(141, 29, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(142, 29, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(143, 29, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(144, 29, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(145, 29, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(146, 30, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(147, 30, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(148, 30, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(149, 30, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(150, 30, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(151, 31, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(152, 31, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(153, 31, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(154, 31, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(155, 31, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(156, 32, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(157, 32, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(158, 32, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(159, 32, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(160, 32, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(161, 33, 'Sub-Sub Category 1', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(162, 33, 'Sub-Sub Category 2', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(163, 33, 'Sub-Sub Category 3', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(164, 33, 'Sub-Sub Category 4', '2023-07-11 23:47:10', '2023-07-11 23:47:10'),
(165, 33, 'Sub-Sub Category 5', '2023-07-11 23:47:10', '2023-07-11 23:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_info` text NOT NULL,
  `registration_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_info`, `registration_date`, `created_at`, `updated_at`) VALUES
(1, 'Msr Nayeem', 'msrnayeem@gmail.com', '$2y$10$6syxBWQlhxAAuyZYPak2/uE.A9hZ/wRKO.Q2wqJowQWiBt8E3oVjC', 'I am a professional freelancer.', '2023-07-11 23:47:08', '2023-07-11 23:47:08', '2023-07-11 23:47:08'),
(2, 'Nayeem', 'mrtinm00@gmail.com', '$2y$10$TGCXM2jQkUynywcaTxf7l.cjKhpRNFX9Il83zUg9q/qygs5Z21AD6', 'Experienced graphic designer.', '2023-07-11 23:47:09', '2023-07-11 23:47:09', '2023-07-11 23:47:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_user`
--
ALTER TABLE `category_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_user_category_id_foreign` (`category_id`),
  ADD KEY `category_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_category_id_foreign` (`category_id`);

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gigs_user_id_foreign` (`user_id`),
  ADD KEY `gigs_sub_sub_category_id_foreign` (`sub_sub_category_id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guides_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_id_unique` (`order_id`),
  ADD KEY `orders_gig_id_foreign` (`gig_id`),
  ADD KEY `orders_buyer_id_foreign` (`buyer_id`),
  ADD KEY `orders_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `packages_gig_id_foreign` (`gig_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_service_id_foreign` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`),
  ADD KEY `services_service_category_foreign` (`service_category`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_sub_categories_sub_category_id_foreign` (`sub_category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_user`
--
ALTER TABLE `category_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_user`
--
ALTER TABLE `category_user`
  ADD CONSTRAINT `category_user_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `gigs`
--
ALTER TABLE `gigs`
  ADD CONSTRAINT `gigs_sub_sub_category_id_foreign` FOREIGN KEY (`sub_sub_category_id`) REFERENCES `sub_sub_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gigs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `guides`
--
ALTER TABLE `guides`
  ADD CONSTRAINT `guides_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_gig_id_foreign` FOREIGN KEY (`gig_id`) REFERENCES `gigs` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_gig_id_foreign` FOREIGN KEY (`gig_id`) REFERENCES `gigs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_category_foreign` FOREIGN KEY (`service_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD CONSTRAINT `sub_sub_categories_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
