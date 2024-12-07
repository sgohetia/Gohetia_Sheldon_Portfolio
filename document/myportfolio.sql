-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2024 at 06:23 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `submitted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `phone_num` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `message`, `submitted_at`, `phone_num`) VALUES
(1, '.Person 1.', '.sheldongohetia.ca@gmail.com.', '.Testing 1.', '2024-11-20 17:17:51', NULL),
(3, '.Person 2.', '.mgohetia737@gmail.com.', '.Testing 3.', '2024-11-20 17:21:34', NULL),
(4, 'Person 4 ', 'namikazee737@gmail.com', 'Testing 4', '2024-11-20 17:31:38', NULL),
(5, 'Person 5 ', 's_gohetia@fanshaweonline.ca', 'Testing number 5', '2024-11-21 03:27:13', NULL),
(6, 'Person 6 ', 'sheldongohetia.ca@gmail.com', 'Testing 6', '2024-11-21 03:38:27', NULL),
(8, 'Ryan Reynolds ', 'ryan@gmail.com', 'Testing number 2 from Portfolio form', '2024-12-06 00:52:22', '647-123-456'),
(9, 'Marco De Luca ', 'mdeluca@gmail.com', 'Testing number 3 from portfolio form.', '2024-12-06 05:54:53', '123-456-789'),
(10, 'Keith ', 'keith@gmail.com', 'Testing from portfolio form.', '2024-12-06 19:40:44', '123-456-789');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `media_id` int NOT NULL AUTO_INCREMENT,
  `project_id` int DEFAULT NULL,
  `media_type` varchar(50) DEFAULT NULL,
  `media_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`media_id`),
  KEY `fk_project` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `project_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `problem_statement` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `concepts` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `design_process` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `final_deliverable` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `data_category` varchar(255) DEFAULT NULL,
  `tools` varchar(255) DEFAULT NULL,
  `case_description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `class_animation` varchar(255) DEFAULT NULL,
  `hero_image` varchar(255) DEFAULT NULL,
  `2nd_paragraph` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `designconcept_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deliverable_img` varchar(255) DEFAULT NULL,
  `role_description` varchar(2000) DEFAULT NULL,
  `dprocess_img1` varchar(255) DEFAULT NULL,
  `dprocess_img2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `description`, `created_at`, `project_image`, `problem_statement`, `role`, `concepts`, `design_process`, `final_deliverable`, `title`, `data_category`, `tools`, `case_description`, `class_animation`, `hero_image`, `2nd_paragraph`, `designconcept_img`, `deliverable_img`, `role_description`, `dprocess_img1`, `dprocess_img2`) VALUES
(1, 'Industry Night 2025', 'This project is a website that showcase the work of our IDP3 and UED students. Experience their passion and talent across diverse disciplines!', '2024-10-01 04:00:00', 'work-1.jpg', 'The Interactive Media Design Program needs a centralized platform to showcase the exceptional talent and projects of its students. The current lack of a dedicated digital space makes it challenging to celebrate the top performers from hackathons, highlight standout projects like The Brothers in Arms, and provide an accessible portfolio repository for all students. Without a user-friendly, engaging interface, the program risks missing opportunities to effectively promote student work, foster networking, and engage with industry professionals.', 'UX and Web Developer', 'The Interactive Media Design Showcase website serves as a dynamic platform to celebrate and highlight the exceptional work of students in the program. Designed to be more than just a portfolio repository, the site features a modern, interactive layout with smooth animations that create an engaging user experience. The website dynamically displays student portfolios using JavaScript array logic, with an intuitive filter system enabling users to explore specific disciplines like Backend Development, UI/UX, or Motion Design. By combining functionality with creativity, the platform not only showcases student talent but also fosters connections between students, industry professionals, and peers, ensuring their work receives the recognition it deserves.', '', 'The final deliverable for this project is a fully functional, interactive website that showcases the portfolios of Interactive Media Design students. The site features a dynamic layout with smooth scrolling animations, designed for an engaging and user-friendly experience. It includes a robust portfolio display system, where student projects are dynamically populated using JavaScript array logic. A filter functionality is also integrated, allowing users to easily sort portfolios by categories such as Backend Development, UI/UX, and Motion Design. The website is visually polished, responsive, and optimized for both desktop and mobile devices, offering a professional platform to highlight student talent and foster industry connections.', 'Web Development', 'design', 'HTML CSS SASS JS', 'Join us for an exciting showcase highlighting the exceptional work of our IDP3 and UED students, featuring impressive portfolios that reflect their dedication and creativity. This event will also include Spotlight presentations on the engaging \"Brothers in Arms\" project, offering insights into the collaborative efforts and innovative thinking behind the work.', 'p-web', 'hero-industry.jpg', 'This project addresses the need for a dynamic and interactive website that brings these portfolios to life. By incorporating smooth animations using GSAP scroll and a dynamic filtering system powered by JavaScript, the platform will allow users to explore portfolios based on specific interests, such as Backend Development, UI/UX, or Motion Design. This ensures an immersive and efficient user experience while empowering students to present their work in a professional and impactful way, bridging the gap between academic accomplishments and industry recognition.', 'industry-c.jpg', 'industry-final.jpg', 'In this project, my role was to design and code the overall website layout and functionality, ensuring a seamless and visually engaging user experience. I implemented the array logic to dynamically display students\' portfolios, making the content flexible and interactive. Additionally, I developed a robust filtering system that allows users to sort portfolios based on specific categories such as Backend Development, UI/UX, or Motion Design. To enhance the site\'s interactivity, I incorporated smooth scrolling animations across all sections using GSAP, creating a polished and immersive browsing experience.', 'industry-dp.jpg', 'industry-dp2.jpg'),
(2, '3D Model Earbuds', 'Created in Cinema 4D, this model features mirrored detailing for each earbud, highlighting both functionality and aesthetic appeal. Perfect for showcasing high-quality audio accessories in a visually striking way.', '2024-08-01 04:00:00', 'work-2.jpg', 'In the competitive audio accessory market, consumers seek high-performance earbuds that seamlessly blend functionality with style. However, many existing products fail to deliver an engaging and visually appealing presentation that resonates with modern users. Traditional marketing materials and static product renders often lack the dynamic impact needed to stand out, particularly in digital platforms where first impressions matter most. This gap in compelling visual representation not only limits user engagement but also hinders the product’s ability to communicate its innovative features effectively.', 'Motion Designer', 'This 3D earbuds project brings a sleek, triangular design to life, blending aesthetics and functionality with a black-and-green color scheme and color variations in white, red, and yellow. Featuring green silicone tips, a breathing green logo, and a futuristic Bluetooth LED light, the design emphasizes style and usability. After refining initial sketches, I moved forward to create detailed 3D renders, capturing the unique vision and appeal of these earbuds.', NULL, 'The final deliverable is a high-quality 3D model of the earbuds, showcasing their unique triangular design, breathing logo effect, and Bluetooth LED light in an aesthetically striking black-and-green color scheme with variations in white, red, and yellow. The model is rendered with realistic textures and lighting in Cinema 4D, ready for use in promotional materials, animations, and interactive presentations to highlight the earbuds’ modern design and functionality.', 'Motion Design', 'motion', 'Cinema4D Photoshop', 'This 3D model of gaming earbuds captures the essence of immersive sound and ergonomic design, offering both visual appeal and functionality. Modeled meticulously in Cinema 4D, each earbud showcases fine detailing with a mirrored design, creating a sense of balance and symmetry that enhances their sleek, modern look. ', 'p-motion', 'hero-earbuds.jpg', 'To address this challenge, the project focuses on creating a 3D model of earbuds with dynamic visuals tailored for modern marketing strategies. By incorporating advanced rendering techniques and visually striking animations, the project aims to enhance the overall presentation of the earbuds. The use of realistic textures, interactive designs, and captivating transitions will allow potential buyers to experience the product virtually, bridging the gap between physical interaction and digital marketing. This approach seeks to redefine how audio accessories are showcased in the market, ensuring a memorable impression and fostering consumer interest.', 'earbuds-dprocess.jpg', 'earbuds-final.jpg', 'In this project, my role encompassed both digital artistry and motion design. As a digital artist, I conceptualized the earbuds\' design, creating detailed sketches in Procreate to refine their unique triangular shape, color schemes, and features. Transitioning into motion design, I brought these concepts to life by rendering the 3D model in Cinema 4D, adding intricate details like the breathing logo effect, Bluetooth LED lights, and realistic textures. This dual role allowed me to merge creativity and technical expertise, ensuring a seamless transformation from concept to a visually compelling 3D representation.', 'er-d1.jpg', 'er-d2.jpg'),
(3, 'Windows GUI', 'A project focused on updating and integrating a Windows GUI graphics driver tailored for a specific ATM machine model. This work optimized display functionality, ensuring smooth operation and compatibility with the selected Windows version.', '2023-02-01 05:00:00', 'work-6.jpg', 'The existing Windows GUI graphics driver for the ATM machine model faced performance and compatibility issues, hindering the system\'s ability to deliver a smooth and optimized user interface. The challenge was to update and integrate a custom graphics driver that would enhance display performance, ensuring compatibility with the selected Windows version. The goal was to create a visually optimized and seamless interface that would improve the overall user experience and increase the operational efficiency of the ATM machine, addressing the need for enhanced system performance and a more reliable user interface.', 'Hardware Firmware System Integration Engineer', 'This project involved the development and integration of a custom Windows GUI graphics driver specifically designed for an ATM machine model to enhance its display performance and ensure compatibility with the selected Windows version. The primary objective was to update the existing driver to fix performance issues, resolve bugs, and optimize the visual interface for a smoother user experience. By working closely with the NCR, I was tasked with recreating and updating the graphics driver to align with the specific requirements of the ATM’s hardware and software setup. The updated driver was thoroughly tested in an actual ATM machine environment, using C# and XML to implement the necessary updates and modifications. This project aimed to improve both the operational efficiency of the ATM machine and its overall user interface, ensuring a reliable and visually optimized experience for users.', NULL, 'The final deliverable for this project is the updated and fully functional graphics driver for the ATM machine, designed to optimize display performance and ensure compatibility with the selected Windows version. This includes a detailed report documenting the entire process, from initial analysis and bug identification to the code development using C# and XML. The driver has been rigorously tested on actual ATM machines in the NCR Cebu lab, ensuring that all graphical glitches and performance issues have been resolved. The final version of the driver, along with the accompanying documentation, has been successfully handed over for deployment, ready for integration into NCR’s ATM network.', 'Backend Development', 'backend', 'C# XML PHP', 'This project centered on updating and integrating a custom Windows GUI graphics driver specifically for an ATM machine model, enhancing display performance and system compatibility. The objective was to create a seamless, visually optimized interface that would align with the selected Windows version, improving both the user experience and operational efficiency.', 'p-backend', 'hero-wgui.jpg', 'For this project, I used C# and XML to develop and test the driver updates. Once the updates were implemented, I conducted test runs on an actual ATM machine located in our lab at NCR Cebu, Philippines, to verify the driver\'s performance and ensure seamless integration. My work involved not only coding and troubleshooting but also testing the driver in a real-world setting to guarantee optimal display performance and system compatibility for the ATM machines.', 'wgui-c.jpg', 'wgui-final.jpg', 'In my role as a Hardware Firmware System Integration Engineer at NCR ATLEOS, I was responsible for addressing bugs, updating, and adding features to the ATM drivers, specifically focusing on the Windows graphics interface. I was assigned the task of recreating and updating a custom graphics driver tailored to a specific ATM machine model and its Windows version. The driver was provided by the NCR branch in Dundee, and my role involved ensuring its compatibility and functionality with the ATM\'s hardware and software environment.', 'wgui-d2.jpg', 'wgui-d.jpg'),
(4, 'Paynamics Payment Portal', 'In this project, I developed an API/plugin for merchants, enabling seamless integration with our payment portal. This solution streamlined connectivity, providing merchants with efficient access to our payment services.', '2015-08-01 04:00:00', 'work-5.jpg', 'The problem addressed by this project was the complex and time-consuming process of integrating merchants with payment channels. Merchants often faced challenges in ensuring secure and efficient transactions due to varying system architectures and technical barriers. The solution was to develop an API/plugin that streamlined the integration process, improving security and reliability while enhancing the overall transaction flow. By simplifying the onboarding experience, the API/plugin enabled merchants to seamlessly connect to the payment platform, ensuring smoother payment processing and empowering businesses to leverage the platform more effectively.', 'Web Developer and CISS', 'The project aimed to enhance the payment processing experience for merchants and their customers by developing an API and corresponding plugins for popular platforms like WordPress, WooCommerce, and Shopify. The solution was designed to simplify the integration process, allowing merchants to seamlessly connect to our payment portal with minimal technical effort. Alongside the API, I created a unified webpage that showcased all available payment channels, ensuring that the page\'s design mirrored the branding of the merchants\' websites for a consistent and familiar user experience during checkout. The project focused on streamlining transactions, improving security, and offering a reliable connection between merchants and payment services, ultimately making the onboarding process faster and more efficient for businesses.', NULL, 'The project delivered a seamless payment integration solution designed to enhance the transaction experience for merchants and their customers. It featured a custom API that simplified the connection to the payment portal, along with plugins for platforms like WordPress, WooCommerce, and Shopify to streamline the integration process. Additionally, a unified webpage showcasing all available payment channels was created, designed to mirror each merchant’s branding for a consistent and professional user experience during checkout. Prioritizing ease of use, security, and reliability, the solution improved onboarding efficiency and strengthened the connection between merchants and payment services, offering a smooth and cohesive experience for all stakeholders.', 'Backend Development', 'backend', 'C# ASP.NET PHP', 'The API/plugin was engineered to streamline transactions, enhance security, and ensure a reliable, efficient link between merchants and our payment channels. By simplifying integration, the solution improved the merchant onboarding experience and facilitated a smoother payment processing flow, empowering businesses to leverage our platform effectively.', 'p-backend2', 'hero-pti.jpg', 'A significant part of my role also involved designing a dedicated webpage that showcased all the payment channels we offered, ensuring the design and branding of the page matched the merchants\' websites for a seamless user experience during checkout. This helped eliminate confusion for customers when they were redirected to the payment page.', 'pti-c.jpg', 'pti-final.jpg', 'During my time at Paynamics from 2015 to 2019, I played a key role as a web developer and customer integration system support. My main responsibility was to enhance and develop the API that enabled our merchants to securely connect to our payment portal, facilitating smoother transactions. Additionally, I created plugins that acted as a \"plug-and-play\" solution, making it easier for merchants using popular platforms like WordPress, WooCommerce, and Shopify to integrate with our system without needing extensive technical knowledge. ', 'pti-dp2.jpg', 'pti-dp.jpg'),
(5, 'Task Management System', 'This project is to create a webpage that will manage your task or make a list of your projects to manage.', '2024-10-02 04:00:00', 'work-3.jpg', 'In today’s fast-paced environment, individuals often struggle to manage their tasks and projects efficiently due to a lack of intuitive and accessible tools. Many existing solutions are either overly complex or fail to provide a seamless user experience, leading to frustration and inefficiency. Users need a simple, user-friendly platform that enables them to organize their tasks, track progress, and adapt to changing priorities effortlessly. Without such a tool, staying productive and on top of projects becomes a significant challenge, particularly for individuals juggling multiple responsibilities.', 'UI/UX Designer', 'This project focuses on developing a user-friendly task and project management webpage to help individuals organize and track their responsibilities efficiently. Designed with a clean and intuitive interface, the platform allows users to seamlessly add, edit, and delete tasks, promoting productivity and effective time management. The webpage features a custom-designed UI/UX styled with CSS to create a visually appealing and responsive layout adaptable to various devices. To enhance interactivity, JavaScript animations are incorporated, providing a dynamic and engaging user experience. By emphasizing simplicity and usability, this front-end-only project delivers a practical solution for managing tasks without the need for backend integration.', NULL, 'The final deliverable is a fully functional task and project management webpage created to meet the requirements of a class assignment. This front-end-only project features a clean and intuitive interface that allows users to seamlessly add, edit, and delete tasks, helping them stay organized and productive. Designed with a custom UI/UX styled using CSS, the webpage is visually appealing, responsive across devices, and enhanced with JavaScript animations for a dynamic and engaging user experience. Developed entirely within the scope of the assignment\'s criteria, this project highlights front-end development skills by delivering a polished, practical solution without backend integration.', 'UI/UX Design', 'design', 'HTML CSS JS', 'This project involves creating a user-friendly webpage designed to help individuals manage their tasks and organize their project lists efficiently. The webpage features a clean and intuitive interface that allows users to easily add, edit, and delete tasks, enabling them to track their progress and stay organized.', 'p-design', 'hero-task.jpg', NULL, 'task-c.jpg', 'task-final.jpg', 'As the Front-End Developer for this project, I was responsible for designing and implementing a visually appealing and intuitive user interface to help individuals efficiently manage their tasks and project lists. I created the UI/UX design, focusing on user-friendliness and simplicity to ensure an engaging and accessible experience. Using CSS, I styled the webpage to achieve a clean and modern aesthetic while ensuring responsiveness across devices. Additionally, I incorporated animations using JavaScript to enhance interactivity and provide a seamless, dynamic user experience. This project exclusively involved front-end development, showcasing my expertise in crafting functional and visually polished web solutions.', 'task-dp1.jpg', 'task-dp2.jpg'),
(6, '3D Model and Branding', 'This project involves developing a new brand concept for Burple, encompassing logo design, flavor profiles, thematic elements, and product concepts.', '2024-10-01 04:00:00', 'work-4.jpg', 'Burple, an existing but underrecognized brand, faces challenges in establishing a strong presence and identity in the competitive marketplace. Its current branding lacks the distinctiveness and appeal needed to capture the attention of target consumers. Without a cohesive brand narrative, recognizable logo, or enticing flavor profiles, Burple struggles to resonate with its audience and communicate its unique value effectively. This project seeks to address these issues by rebranding Burple to create a fresh, engaging identity that aligns with modern consumer expectations and meets the requirements of the class rubric.', 'Motion Designer', 'This project focuses on rebranding Burple, an underrecognized brand, to create a stronger and more cohesive identity that resonates with its target audience while meeting class rubric requirements. The rebranding effort includes designing a new logo that reflects the brand\'s essence, crafting thematic elements to tell a compelling story, and developing a responsive, visually engaging website with features like an \"Add to Cart\" system. Additionally, promotional materials such as mockups and posters were created to reinforce the brand’s visual identity. By integrating design, functionality, and strategy, this project aims to give Burple a fresh, modern edge in the marketplace.', NULL, 'The final deliverables for this rebranding project include a fully redesigned logo that captures Burple’s unique identity, a responsive and visually appealing website with an integrated \"Add to Cart\" feature for enhanced usability, and promotional materials such as mockups and posters to support the brand’s marketing efforts. The website layout and promotional assets align with the new brand vision, creating a cohesive and engaging user experience. By combining modern design, functionality, and strategic branding, the project delivers a complete rebranding package that revitalizes Burple\'s presence in the marketplace and meets the requirements of the class rubric.', 'Motion Design', 'motion', 'Cinema4D Figma Photoshop Adobe XD', 'This project focuses on developing a comprehensive new brand concept for Burple, aiming to establish a unique identity in the marketplace. The initiative includes designing a distinctive logo that reflects the brand\'s essence, alongside crafting diverse flavor profiles that resonate with target consumers. Additionally, thematic elements are being created to align with the overall brand vision, ensuring a cohesive and engaging narrative.', 'p-motion2', 'hero-burple.jpg', 'I also produced promotional materials, including mockups and posters created in Photoshop, to support the brand’s marketing efforts. My role emphasized front-end development and graphic design, bringing the brand\'s vision to life through a polished and professional digital presence, while my partner handled 3D modeling, motion design, and project management tasks, including preparing brand guidelines and essential project documentation.', 'burple-c.jpg', 'burple-final.jpg', 'As a Front-End and Graphic Designer for this team-based rebranding project, I focused on creating the overall design and layout for the Burple brand website, ensuring it was visually appealing, user-friendly, and fully responsive across devices. I implemented features such as a functional \"Add to Cart\" system to enhance user interaction. Additionally, I contributed to the brand\'s visual identity by collaborating on the logo design, combining sketches and ideas to craft a distinctive and cohesive logo.', 'burple-dp1.jpg', 'burple-dp2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projectskills`
--

DROP TABLE IF EXISTS `projectskills`;
CREATE TABLE IF NOT EXISTS `projectskills` (
  `project_id` int NOT NULL,
  `skill_id` int NOT NULL,
  PRIMARY KEY (`project_id`,`skill_id`),
  KEY `fk_skill_id` (`skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projectskills`
--

INSERT INTO `projectskills` (`project_id`, `skill_id`) VALUES
(3, 1),
(4, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `skill_id` int NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(255) NOT NULL,
  `tools` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_name`, `tools`) VALUES
(1, 'Backend Developer', 'PHP, CSharp'),
(2, 'UI/UX Designer', 'html, CSS, SASS, JS, FIGMA'),
(3, 'Motion Designer', 'Blender, Cinema4D, After Effects');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `fk_project` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE CASCADE;

--
-- Constraints for table `projectskills`
--
ALTER TABLE `projectskills`
  ADD CONSTRAINT `fk_project_id` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_skill_id` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`skill_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
