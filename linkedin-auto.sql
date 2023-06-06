-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 04:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkedin-auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `link`) VALUES
(1, 'Government Representative 2 – Senior System Analyst (Posting #232-23)', 'Government Representative 2 Senior System Analyst (Posting #232-23) The New Jersey Department of Children and Families (DCF) seeks qualified individuals to fill five (5) Senior...', 'https://authenticjobs.com/job/23891/new-jersey-department-of-children-and-families-government-representative-2-senior-system-analyst-posting-232-23/'),
(2, 'Manager, Back-end Developer', 'Position: Back-end Developer (Manager) Location: Remote Employment type: Full-time, Exempt Reports to: Senior Web Developer &#160; Mission EdReports is at the forefront of the curriculum...', 'https://authenticjobs.com/job/24379/edreports-manager-back-end-developer/'),
(3, 'Product Manager', 'About Us Planning Center launched in 2006 and has grown to support over 70,000 churches around the world. We are independently owned, have no outside...', 'https://authenticjobs.com/job/24138/planning-center-product-manager/'),
(4, 'Manager of Web Development & Operations', 'Thank you for considering Farmingdale State College in your search. About Farmingdale State College Farmingdale State College is a recognized leader in applied learning. With...', 'https://authenticjobs.com/job/24151/farmingdale-state-college-suny-manager-of-web-development-operations/'),
(5, 'Lead Cloud Engineer', 'Discover your future as part of the IEEE team! The Lead Cloud Engineer oversees the daily activities of the Cloud Engineering team in providing cloud...', 'https://authenticjobs.com/job/23876/ieee-lead-cloud-engineer/'),
(6, 'Government Representative 2 – Senior Developer (Posting #231-23)', 'Government Representative 2 Senior Developer (Posting #231-23) The New Jersey Department of Children and Families (DCF) seeks qualified individuals to fill five (5) Senior Developer...', 'https://authenticjobs.com/job/23894/new-jersey-department-of-children-and-families-government-representative-2-senior-developer-posting-231-23/'),
(7, 'Director of the Office of Data Management and Reporting (Posting #262-23)', 'The Department of Children and Families seeks a visionary and experienced leader to serve as the Director of the Department’s new Office of Data Management...', 'https://authenticjobs.com/job/24272/new-jersey-department-of-children-and-families-director-of-the-office-of-data-management-and-reporting-posting-262-23/'),
(8, 'Application Engineer (10 positions)', 'Application Engineer (10 positions), Google LLC. Austin, TX: Design, develop, modify, and/or test software needed for various Google projects. Duties include: design, develop and implement...', 'https://authenticjobs.com/job/24085/google-llc-application-engineer-10-positions/'),
(9, 'Ambassador program', 'SafetyWing (YC W18) is looking for new Ambassadors to join its affiliate program and spread the word about building a global safety net and a...', 'https://authenticjobs.com/job/22907/safetywing-ambassador-program/'),
(10, 'Office Clerk', 'We are seeking to add a Data Entry/ Customer Service to our team! You will be responsible for accurate data entry, file maintenance, and record keeping. Responsibilities:*...', 'https://authenticjobs.com/job/23957/brb-ceramic-tile-marble-stone-inc-office-clerk/'),
(11, 'Data Visualisation Lead', '60 Decibels is a tech-powered impact measurement company that makes it easy to listen to the people who matter most. We&#8217;ve been in business as an...', 'https://authenticjobs.com/job/24170/60-decibels-data-visualisation-lead/'),
(12, 'WordPress Developer', 'As a WordPress Developer, you&#8217;re responsible for Making Stuff Go. You will build infrastructure to create new features, improve existing code, squash bugs, and help...', 'https://authenticjobs.com/job/22354/awesome-motive-wordpress-developer/'),
(13, '', '', ''),
(14, 'Applications Developer', 'The Information Technology Department of Arnold &#38; Porter has an opening for an Applications Developer.  This position may work 100% virtual/remote in a Firm approved...', 'https://authenticjobs.com/job/21655/arnold-porter-applications-developer/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
