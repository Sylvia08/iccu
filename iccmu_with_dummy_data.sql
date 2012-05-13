-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2012 at 11:36 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iccmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', 'admin', NULL, 'N;'),
('Admin', '1', NULL, 'N;'),
('Guest', '3', NULL, 'N;'),
('Authenticated', '2', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Guest', 2, NULL, NULL, 'N;'),
('dashboard access', 0, 'admin dashboard', NULL, 'N;'),
('create post', 0, 'create new posts', NULL, 'N;'),
('view post', 0, 'view post', NULL, 'N;'),
('delete post', 0, 'delete post', NULL, 'N;'),
('post management', 1, 'post management', NULL, 'N;'),
('update post', 0, 'update post', NULL, 'N;'),
('create user', 0, 'create new user', NULL, 'N;'),
('update user', 0, 'update an user account', NULL, 'N;'),
('delete user', 0, 'remove an user from system', NULL, 'N;'),
('view user', 0, 'view an user''s information', NULL, 'N;'),
('user management', 1, 'user management task: create, update, delete', NULL, 'N;'),
('list user', 0, 'list all users', NULL, 'N;'),
('list post', 0, 'list all posts', NULL, 'N;'),
('User.User.Index', 0, NULL, NULL, 'N;'),
('User.Admin.*', 1, NULL, NULL, 'N;'),
('User.Default.*', 1, NULL, NULL, 'N;'),
('User.User.*', 1, NULL, NULL, 'N;'),
('User.Admin.Admin', 0, NULL, NULL, 'N;'),
('User.Admin.View', 0, NULL, NULL, 'N;'),
('User.Admin.Create', 0, NULL, NULL, 'N;'),
('User.Admin.Update', 0, NULL, NULL, 'N;'),
('User.Admin.Delete', 0, NULL, NULL, 'N;'),
('User.User.View', 0, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('post management', 'create post'),
('post management', 'delete post'),
('post management', 'list post'),
('post management', 'update post'),
('post management', 'view post'),
('user management', 'create user'),
('user management', 'delete user'),
('user management', 'list user'),
('user management', 'update user'),
('user management', 'view user');

-- --------------------------------------------------------

--
-- Table structure for table `commentmeta`
--

CREATE TABLE IF NOT EXISTS `commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `commentmeta`
--


-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_approved` (`comment_approved`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--


-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `links`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu_adjacency`
--

CREATE TABLE IF NOT EXISTS `menu_adjacency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(2) NOT NULL,
  `tooltip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` int(1) NOT NULL,
  `task` varchar(64) CHARACTER SET latin1 DEFAULT NULL,
  `options` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_parent` (`parent_id`),
  KEY `task` (`task`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Dumping data for table `menu_adjacency`
--

INSERT INTO `menu_adjacency` (`id`, `parent_id`, `title`, `position`, `tooltip`, `url`, `visible`, `task`, `options`) VALUES
(36, NULL, 'Home', 0, 'Home', '/', 1, '', ''),
(39, NULL, 'Community', 0, '', '/posts/category/For+Community', 1, '', ''),
(40, 39, 'What is ICU?', 0, '', '/posts/24', 1, '', ''),
(41, 39, 'ICU Locations', 1, '', '/hospital', 1, '', ''),
(42, 39, 'Patient Conditions', 2, '', '/posts/category/Patient+Conditions', 1, '', ''),
(43, 39, 'Patient & Family', 3, '', '/posts/category/Patient+%26+Family', 1, '', ''),
(44, NULL, 'Clinicians', 0, '', '/posts/category/For+Clinicians', 1, '', ''),
(46, 39, 'Patient Treatment', 5, '', '/posts/category/Patient+Treatment', 1, '', ''),
(47, 39, 'ICU Equipment', 6, '', '/posts/category/ICU+Equipment', 1, '', ''),
(48, 39, 'ICU FAQ', 8, '', '/posts/category/ICU+FAQ', 1, '', ''),
(49, 44, 'Clinicians News', 0, '', '/posts/category/Clinicians+News', 1, '', ''),
(50, 44, 'ICUConnect', 1, '', '/posts/category/ICUConnect', 1, '', ''),
(51, 44, 'Education in ICU', 2, '', '/posts/category/Education+in+ICU', 1, '', ''),
(52, 44, 'Seminars & Conference', 3, '', '/event', 1, '', ''),
(53, 44, 'ICU Careers', 4, '', '/posts/category/ICU+Careers', 1, '', ''),
(54, 44, 'Critical Care Links', 5, '', '#', 1, '', ''),
(55, 44, 'Quality & Safety Research', 6, '', '/posts/category/Quality+%26+Safety+Research', 1, '', ''),
(56, 44, 'NSW ICU Reporting', 7, '', '#', 1, '', ''),
(57, 44, 'ICCIS', 8, '', '#', 1, '', ''),
(58, NULL, 'Guidelines Library', 0, '', '/posts/category/Guidelines+Library', 1, '', ''),
(59, 58, 'ICCMU Guidelines', 0, '', '#', 1, '', ''),
(60, 58, 'Statewide Guidelines', 1, '', '#', 1, '', ''),
(61, 58, 'Guidelines by Types', 2, '', '#', 1, '', ''),
(62, 58, 'Guidelines Forum', 4, '', '#', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `migration_module_p3media`
--

CREATE TABLE IF NOT EXISTS `migration_module_p3media` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration_module_p3media`
--

INSERT INTO `migration_module_p3media` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1336710077),
('m110719_000000_init', 1336710080);

-- --------------------------------------------------------

--
-- Table structure for table `p3_media`
--

CREATE TABLE IF NOT EXISTS `p3_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `description` text,
  `type` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `md5` varchar(32) DEFAULT NULL,
  `originalName` varchar(128) DEFAULT NULL,
  `mimeType` varchar(128) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `info` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `p3_media`
--

INSERT INTO `p3_media` (`id`, `title`, `description`, `type`, `path`, `md5`, `originalName`, `mimeType`, `size`, `info`) VALUES
(2, 'about-us.jpg', NULL, 1, '1\\about-us.jpg', 'fd4e36c7ccfd959fffe85cb5b0cb6089', 'about-us.jpg', 'image/jpeg', 23874, '{"0":705,"1":260,"2":2,"3":"width=\\"705\\" height=\\"260\\"","bits":8,"channels":3,"mime":"image\\/jpeg"}'),
(3, 'blacktown_3.jpg', NULL, 1, '1\\blacktown_3.jpg', '7fc623d6dd91e6a456e311673cd3f2c0', 'blacktown_3.jpg', 'image/jpeg', 31190, '{"0":345,"1":257,"2":2,"3":"width=\\"345\\" height=\\"257\\"","bits":8,"channels":3,"mime":"image\\/jpeg"}'),
(4, 'clinician.jpg', NULL, 1, '1\\clinician.jpg', '88ceef1d5afde3642643fa50bf90fca4', 'clinician.jpg', 'image/jpeg', 4540, '{"0":165,"1":65,"2":2,"3":"width=\\"165\\" height=\\"65\\"","bits":8,"channels":3,"mime":"image\\/jpeg"}'),
(5, 'community.jpg', NULL, 1, '1\\community.jpg', '9b3313d00f920d5bc9d06afcab913f95', 'community.jpg', 'image/jpeg', 3599, '{"0":160,"1":65,"2":2,"3":"width=\\"160\\" height=\\"65\\"","bits":8,"channels":3,"mime":"image\\/jpeg"}'),
(6, 'guide.jpg', NULL, 1, '1\\guide.jpg', 'bf82237ae3ab5e23c6bb4257b77713f2', 'guide.jpg', 'image/jpeg', 3710, '{"0":160,"1":65,"2":2,"3":"width=\\"160\\" height=\\"65\\"","bits":8,"channels":3,"mime":"image\\/jpeg"}'),
(7, 'seminar.jpg', NULL, 1, '1\\seminar.jpg', 'c34a87705bd2166fe26992b6f6a7070d', 'seminar.jpg', 'image/jpeg', 3052, '{"0":160,"1":65,"2":2,"3":"width=\\"160\\" height=\\"65\\"","bits":8,"channels":3,"mime":"image\\/jpeg"}');

-- --------------------------------------------------------

--
-- Table structure for table `p3_media_meta`
--

CREATE TABLE IF NOT EXISTS `p3_media_meta` (
  `id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `language` varchar(8) DEFAULT NULL,
  `treeParent_id` int(11) DEFAULT NULL,
  `treePosition` int(11) DEFAULT NULL,
  `begin` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `keywords` text,
  `customData` text,
  `label` int(11) DEFAULT NULL,
  `owner` varchar(64) DEFAULT NULL,
  `checkAccessCreate` varchar(256) DEFAULT NULL,
  `checkAccessRead` varchar(256) DEFAULT NULL,
  `checkAccessUpdate` varchar(256) DEFAULT NULL,
  `checkAccessDelete` varchar(256) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(64) DEFAULT NULL,
  `modifiedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifiedBy` varchar(64) DEFAULT NULL,
  `guid` varchar(64) DEFAULT NULL,
  `ancestor_guid` varchar(64) DEFAULT NULL,
  `model` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_p3_media_meta_treeParent_id` (`treeParent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p3_media_meta`
--

INSERT INTO `p3_media_meta` (`id`, `status`, `type`, `language`, `treeParent_id`, `treePosition`, `begin`, `end`, `keywords`, `customData`, `label`, `owner`, `checkAccessCreate`, `checkAccessRead`, `checkAccessUpdate`, `checkAccessDelete`, `createdAt`, `createdBy`, `modifiedAt`, `modifiedBy`, `guid`, `ancestor_guid`, `model`) VALUES
(2, 30, NULL, 'en_us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'Admin', '2012-05-12 07:29:52', '1', '0000-00-00 00:00:00', NULL, NULL, NULL, 'P3Media'),
(3, 30, NULL, 'en_us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'Admin', '2012-05-12 07:29:52', '1', '0000-00-00 00:00:00', NULL, NULL, NULL, 'P3Media'),
(4, 30, NULL, 'en_us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'Admin', '2012-05-12 07:29:54', '1', '0000-00-00 00:00:00', NULL, NULL, NULL, 'P3Media'),
(5, 30, NULL, 'en_us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'Admin', '2012-05-12 07:29:55', '1', '0000-00-00 00:00:00', NULL, NULL, NULL, 'P3Media'),
(6, 30, NULL, 'en_us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'Admin', '2012-05-12 07:29:55', '1', '0000-00-00 00:00:00', NULL, NULL, NULL, 'P3Media'),
(7, 30, NULL, 'en_us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'Admin', '2012-05-12 07:29:56', '1', '0000-00-00 00:00:00', NULL, NULL, NULL, 'P3Media');

-- --------------------------------------------------------

--
-- Table structure for table `postmeta`
--

CREATE TABLE IF NOT EXISTS `postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `postmeta`
--


-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(20) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` text NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(9, 1, '2012-05-09 08:55:49', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<h3>\r\n	Promoting excellence in Intensive Care Services across NSW through:</h3>\r\n<ul>\r\n	<li>\r\n		Efficient use of Intensive Care resources</li>\r\n	<li>\r\n		Collaboration through communication</li>\r\n	<li>\r\n		Effective Statewide Intensive Care service</li>\r\n</ul>\r\n<h3>\r\n	Background</h3>\r\n<p>\r\n	<img alt="" src="http://intensivecare.hsnet.nsw.gov.au/images/blacktown_3.jpg" style="margin-right: 10px; margin-bottom: 10px; margin-top: 5px; float: left; width: 345px; height: 257px; " /></p>\r\n<p>\r\n	Over 1 million people are treated as in-patients each year in NSW hospitals. More than 36,000 adult patients are treated in intensive care units annually. This represents a substantial proportion of the acute care budget.<br />\r\n	<br />\r\n	Accessibility to intensive care is vital to the acute care system and the health of the community at large. The intensive care unit is a pivotal component of the acute hospital and, in a broader sense, the critical care system. A broad spectrum of patients with critical illness rely on access to ICU including patients with trauma, organ transplant, burns, complex medical and surgical problems and planned major surgery.<br />\r\n	<br />\r\n	There are in excess of 40 intensive care/high dependency units in NSW public hospitals. The Intensive Care Implementation Group (now known as NSW Intensive Care Taskforce) recognised the need for a structured overview of intensive care services,which resulted in the formation of an Adult Intensive Care Coordination and Monitoring Unit (ICCMU). ICCMU is postioned between clinicians and NSW Health<br />\r\n	<br />\r\n	ICCMU was established in 2003. It was anticipated that its role would include &lsquo;monitoring intensive care activity and ability of system to meet demand, research into patterns of demand and staffing, central data repository for Area Health Service benchmarking and other quality activities&rsquo;.<br />\r\n	<br />\r\n	Since that time a clear role for ICCMU has evolved which is wider than the original conception. This role is expressed through the following aims.<br />\r\n	AIMS of ICCMU:</p>\r\n<ol>\r\n	<li>\r\n		Fostering communication across all key stakeholders including NSW Health, expert groups, clinicians and consumers at state, national and international levels.</li>\r\n	<li>\r\n		Facilitating an understanding of Intensive Care service provision including resources, workforce, patterns of demand including access issues, and other factors that may impact on the effective delivery of intensive care service in NSW.</li>\r\n	<li>\r\n		Promoting excellence in the standard of care in all NSW ICUs by:\r\n		<ul>\r\n			<li>\r\n				Clinical networking, promotion and dissemination of evidence based practice.</li>\r\n			<li>\r\n				Providing a forum for the systematic analysis and assessment of information regarding the quality of care in NSW intensive care units.</li>\r\n		</ul>\r\n	</li>\r\n</ol>\r\n', 'About Us', 'Promoting excellence in Intensive Care Services across New South Wales through efficient use of Intensive Care resources, collaboration through communication and effective Statewide Intensive Care service.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(10, 1, '2012-05-09 09:16:43', '0000-00-00 00:00:00', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis libero tellus. In sed est enim, sit amet sagittis eros. Ut accumsan, magna id tempor imperdiet, ipsum tellus faucibus risus, id lacinia lacus turpis ut leo. Aenean varius erat eu ante ultrices vel suscipit odio bibendum. In tempus tortor nec nisl imperdiet eu sagittis orci venenatis. Quisque augue nunc, dictum eget fringilla nec, posuere vel felis. Cras vitae elit ipsum. Vivamus eu aliquet mi. Morbi non mauris metus, ut consectetur sapien. Ut enim justo, tincidunt ac congue consectetur, viverra eget mi.</p>\r\n<p>\r\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla tristique congue tortor nec ornare. Praesent vel orci mi, elementum ornare purus. Donec commodo lacinia libero, in venenatis dui sollicitudin id. Cras ut magna augue. Proin fermentum, sem at mattis rhoncus, est nulla ultricies odio, eu blandit orci leo eget mauris. Curabitur hendrerit, enim quis sodales fermentum, magna nisl imperdiet felis, eget lobortis leo tellus sit amet erat.</p>\r\n<p>\r\n	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam quis magna ligula. Phasellus sed mi risus, et pharetra elit. Integer fermentum adipiscing enim, vel ultrices nunc tempor eu. Nulla massa odio, feugiat non commodo vel, condimentum quis leo. Curabitur ac urna leo. Donec purus enim, venenatis vitae commodo eu, fringilla eu leo. In hac habitasse platea dictumst. Morbi cursus aliquam nisl, ut ornare tortor pharetra ut. Proin malesuada urna ut arcu ullamcorper vestibulum.</p>\r\n<p>\r\n	Aliquam erat volutpat. Etiam porta, sem vitae auctor hendrerit, nisi magna tempor magna, nec gravida odio erat tristique arcu. Pellentesque venenatis purus eu diam imperdiet ac euismod lorem gravida. Nullam vel justo lacus. Nulla aliquet, ipsum ut sagittis facilisis, erat sem cursus nisi, lacinia scelerisque sapien eros mattis lectus. Aenean vel ante non felis fringilla eleifend. Fusce sit amet enim a tortor sollicitudin viverra nec et metus. Maecenas a augue elit, vitae eleifend odio. Maecenas ut lacus ac velit molestie elementum. Mauris sollicitudin rhoncus odio, ut sodales libero adipiscing vitae. Cras vulputate ligula at velit feugiat mollis at a dui. Quisque nisl felis, egestas quis auctor at, convallis et quam. Nulla a tempus nulla. Quisque magna justo, euismod vel ultrices eu, dapibus in est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non odio eget eros adipiscing auctor.</p>\r\n<p>\r\n	Curabitur tincidunt tincidunt orci sed fermentum. Integer congue, lorem non gravida mattis, mi erat molestie ligula, eget tristique lacus dui vel mi. Donec felis tortor, tempus vitae fermentum vitae, bibendum sed nibh. Curabitur et porttitor lorem. Maecenas eget suscipit lorem. Pellentesque facilisis gravida odio, tincidunt blandit erat dictum sed. Praesent id ante vel justo lacinia sagittis. Donec varius neque feugiat turpis aliquam ornare. Aliquam pharetra luctus arcu non tempor. Ut tincidunt gravida lectus a blandit. Sed adipiscing feugiat diam, vitae aliquet mauris dictum eu. Fusce auctor, nulla eget mollis consequat, neque metus accumsan erat, quis varius nisl nisl nec velit. Mauris non eros enim. Duis in neque in justo varius viverra a non lorem.</p>\r\n', 'CCRS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis libero tellus. In sed est enim, sit amet sagittis eros. Ut accumsan, magna id tempor imperdiet, ipsum tellus faucibus risus, id lacinia lacus turpis ut leo. Aenean varius erat eu ante ultrices vel suscipit odio bibendum. In tempus tortor nec nisl imperdiet eu sagittis orci venenatis. Quisque augue nunc, dictum eget fringilla nec, posuere vel felis. Cras vitae elit ipsum. Vivamus eu aliquet mi. Morbi non mauris metus, ut consectetur sapien. Ut enim justo, tincidunt ac congue consectetur, viverra eget mi.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(24, 1, '2012-05-12 16:50:11', '0000-00-00 00:00:00', '<p>\r\n	There are several different types of Units in hospitals that offer care to those patients that are seriously ill. You will hear terms such as &#39;Intensive Care Units&#39;, &#39;Coronary Care Units&#39;, High Dependency Units&#39; and even &#39;Specialised Intensive Care Units&#39;. Indeed some units combine these functions.</p>\r\n<p>\r\n	This page aims to eliminate some of the confusion that might result from these different terms. Please click on the links below to answer the following questions:</p>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			<a href="#Whatisicu">What is an Intensive Care Unit (ICU)?</a></li>\r\n		<li>\r\n			<a href="#TheCardiothoracicIntensiveCareUnitCICU">What is a Cardiothoracic Intensive Care Unit (CICU)?</a></li>\r\n		<li>\r\n			<a href="#TheNeurosurgicalIntensiveCareUnitNICU">What is a Neurosurgical Intensive Care Unit (NICU)?</a></li>\r\n		<li>\r\n			<a href="#WhatisaCoronaryCareUnitCCU">What is a Coronary Care Unit (CCU)?</a></li>\r\n		<li>\r\n			<a href="#WhatisaHighDependencyUnitHDU">What is a High Dependency Unit (HDU)?</a></li>\r\n	</ul>\r\n</div>\r\n<h3>\r\n	<a name="Whatisicu"></a>What is an Intensive Care Unit?</h3>\r\n<p>\r\n	Each year in New South Wales, thousands of patients are admitted into Intensive Care Units (ICUs). These units are designed to deliver the highest of medical and nursing care to the sickest of patients. Some smaller rural and urban hospitals do not have intensive care units while larger metropolitan hospitals may have a number of specialised intensive care units.</p>\r\n<h4>\r\n	History</h4>\r\n<p>\r\n	During the 1960&rsquo;s and early 1970&rsquo;s doctors recognised the life-saving potential of placing patients into specialised areas called Intensive Care Units. The purpose of the units was to provide more intensive management for patients following major injury, illness or after major surgery.</p>\r\n<h4>\r\n	First Impressions of an Intensive Care Unit</h4>\r\n<p>\r\n	Physically, most ICUs are large areas with a concentration of specialised, technical equipment and monitors needed to care for the critically ill. Access to the unit is often limited, not only to families but also to other non-ICU staff members. The ICU has a larger ratio of doctors and nurses to patients than found in other areas of the hospital.</p>\r\n<p>\r\n	Every patient in ICU has a&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/bedside-monitors">monitor (a television-like screen)</a>&nbsp;that can monitor the patient&#39;s heart rate and rhythm, blood pressure, temperature, breathing and many other things. Most patients will have powerful drugs given to them continuously through intravenous infusions (&lsquo;I.V&rsquo; or &lsquo;drip&rsquo;). Patients may also be assisted in their breathing by a&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/ventilators-breathing-machines">machine (ventilator)</a>. They are attached to the machine by a&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/endotracheal-tube-ett-or-breathing-tube">tube (ETT)</a>&nbsp;inserted into the trachea (windpipe).</p>\r\n<p>\r\n	For most families of ICU patients there is no previous knowledge of intensive care equipment and procedures. The visitor can be confronted by a lot of activity and noise which can make the environment alien and frightening. One of the most concerning aspects of being in the ICU are the alarms as they seem to go off regularly and come from all around. Almost all ICU equipment uses alarms. However, it is important to remember that most alarms do not signal an emergency, but rather, they assist staff in providing better care by letting the staff know that the patient needs closer attention.</p>\r\n<h4>\r\n	Visiting Family in the Intensive Care Unit</h4>\r\n<p>\r\n	<a href="http://intensivecare.hsnet.nsw.gov.au/visiting-a-loved-one-in-intensive-care">Visiting</a>&nbsp;in most units is restricted in the interests of both patient and family safety and to allow staff to continue the high intensity care required. Children of the patient may be allowed to visit. We recommend discussion with a senior registered nurse or a social worker as to how this visit may affect your child. Visiting hours are usually during the daytime with some units having a &lsquo;quiet-time&rsquo; (no visitors) during the middle of the day. Exceptions to these general rules may be made in consultation with senior ICU nursing and medical staff. At times there may be some special requirements to control infection.</p>\r\n<h3>\r\n	<a name="TheCardiothoracicIntensiveCareUnitCICU" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; outline-width: 0px; outline-style: initial; outline-color: initial; " title="TheCardiothoracicIntensiveCareUnitCICU"></a>The Cardiothoracic Intensive Care Unit (CICU)</h3>\r\n<p>\r\n	The Cardiothoracic ICU (CICU) cares for patients who need heart (cardiac) and chest (thoracic) surgery. Surgical procedures may include operations on the heart, the heart&rsquo;s blood vessels, the chest or the lungs.</p>\r\n<p>\r\n	The cardiothoracic patient will require continuous monitoring of the heart and may require insertion of a&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/pulmonary-artery-catheters">PA Catheter</a>&nbsp;(Pulmonary Artery Catheter or Swan-Ganz Catheter) or an&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/intra-aortic-balloon-pump-iabp">Intra-Aortic Balloon Pump (IABP)</a>.</p>\r\n<p>\r\n	Some cardiothoracic patients, for a short time after their operation, will require a&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/ventilators-breathing-machines">ventilator (breathing machine)</a>&nbsp;to assist their breathing. This means they will be attached to the machine by a tube in the patient&rsquo;s mouth (or nose) to the windpipe (trachea).</p>\r\n<p>\r\n	Most cardiothoracic patients are only in the CICU for 1 &ndash; 3 days. Some patients may need a longer stay. A few patients may not improve as quickly and may require transfer to the general ICU for further management.</p>\r\n<p>\r\n	There are no cardiothoracic intensive care units in the rural areas of NSW. Patients requiring cardiothoracic surgery will be transferred to a major teaching (tertiary) hospital in Sydney.</p>\r\n<p>\r\n	In Sydney, CICUs can be separate units or combined with a general ICU.</p>\r\n<h3>\r\n	<a name="TheNeurosurgicalIntensiveCareUnitNICU" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; outline-width: 0px; outline-style: initial; outline-color: initial; " title="TheNeurosurgicalIntensiveCareUnitNICU"></a>The Neurosurgical Intensive Care Unit (NICU)</h3>\r\n<p>\r\n	The Neurosurgical Intensive Care Unit cares for patients with brain or spinal cord conditions and occasionally other medical or surgical problems.</p>\r\n<p>\r\n	Many hospitals combine the specialised care of neurosurgical patients with that of seriously ill trauma patients and manage the patients in the Intensive Care Unit. However, some hospitals separate patients who have had neurosurgery into a specific area.</p>\r\n<p>\r\n	Reasons for admission to a NICU include conditions such as:</p>\r\n<ul>\r\n	<li>\r\n		<a href="http://intensivecare.hsnet.nsw.gov.au/traumatic-brain-injury" target="_blank">head injuries</a><a href="http://intensivecare.hsnet.nsw.gov.au/current/conditions/traumatic_brain_injury">&nbsp;</a>(from traumas such as car accidents, assaults, falls)</li>\r\n	<li>\r\n		<a href="http://intensivecare.hsnet.nsw.gov.au/stroke">strokes&nbsp;</a>(cerebrovascular accident or CVA)</li>\r\n	<li>\r\n		vascular (blood vessel) surgery, e.g. aneurysm (weakness or bulging of an artery) repairs and infections</li>\r\n</ul>\r\n<p>\r\n	The Neurosurgical ICU and Intensive Care Units that have neurosurgical services provide brain and spinal cord monitoring and treatments that are specific for the neurosurgical patient. For example, continuous<a href="http://intensivecare.hsnet.nsw.gov.au/eeg-electroencephalography">electroencephalogram (EEG)</a>&nbsp;monitoring,&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/intracranial-pressure-monitoring">intracranial pressure (ICP)</a>&nbsp;monitoring and special spinal cord stabilization techniques are available.</p>\r\n<p>\r\n	In rural hospitals, many patients with head injuries that do not require surgery are cared for in the local hospital&rsquo;s ICU. Those patients with a severe neurosurgical condition that is likely to need surgery will require transfer to a major teaching (tertiary) hospital in Sydney. Some rural hospitals close to other state-borders, may transfer these patients to Canberra, Melbourne, Brisbane or Adelaide.</p>\r\n<h3>\r\n	<a name="WhatisaCoronaryCareUnitCCU" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; outline-width: 0px; outline-style: initial; outline-color: initial; " title="WhatisaCoronaryCareUnitCCU"></a>What is a Coronary Care Unit (CCU) ?</h3>\r\n<p>\r\n	The Coronary Care Unit or CCU cares for patients who have heart disease and occasionally other medical or surgical problems.</p>\r\n<p>\r\n	Conditions such as&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/acute-myocardial-infarction">myocardial infarction (heart attack)</a>, angina (chest pain),&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/heart-failure">congestive heart failure (CCF)</a>&nbsp;and<a href="http://intensivecare.hsnet.nsw.gov.au/arrhythmias-cardiovascular-conditions">arrhythmias</a>&nbsp;(abnormal heart beats) are common reasons to be admitted to CCU.</p>\r\n<p>\r\n	Patients may come to this unit following procedures such as cardiac angioplasty or the placement of stents in their coronary blood vessels.</p>\r\n<p>\r\n	The CCU provides the ability to monitor the heart&rsquo;s rhythm continuously and to use specialized treatment such as thrombolytic therapy (medication that dissolves or breaks-up blood clots). Some tests such as&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/electrocardiogram-ecg">electrocardiography (ECG)</a>&nbsp;may also be performed within the CCU.</p>\r\n<p>\r\n	Most patients within the CCU can breath without the assistance of a&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/ventilators-breathing-machines">machine (ventilator)</a>&nbsp;&ndash; though most will require oxygen (either by nasal prongs or mask). Some may require special masks that assist breathing and oxygenation (<a href="http://intensivecare.hsnet.nsw.gov.au/bipap-bi-level-positive-air-pressure">CPAP or BiPAP machine)</a>.</p>\r\n<p>\r\n	In most rural hospitals the Coronary Care Unit is often combined with the Intensive Care Unit and the High Dependency Unit to form a Critical Care Unit. In Sydney, Coronary Care Units are specialised units usually separate from the Intensive Care Unit.</p>\r\n<p>\r\n	If a patient in CCU requires an operation on their heart or heart vessels (cardiac surgery), the patient will be transferred to the Intensive Care Unit (ICU) or Cardiothoracic Intensive Care Unit (CICU) after surgery. In the rural centres, this means the patient will generally need to be transferred to a metropolitan unit prior to surgery.</p>\r\n<h3>\r\n	<a name="WhatisaHighDependencyUnitHDU" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; outline-width: 0px; outline-style: initial; outline-color: initial; " title="WhatisaHighDependencyUnitHDU"></a>What is a High Dependency Unit (HDU) ?</h3>\r\n<p>\r\n	Patients admitted into the hospital may require a level of care that cannot be provided on a general ward but does not require admission into an Intensive Care Unit. This area is often referred to as the High Dependency Unit (HDU).</p>\r\n<p>\r\n	At the same time, patients in the Intensive Care Unit who have had an improvement in their condition may also require a stay in the High Dependency Unit (HDU) before admission to a general ward.</p>\r\n<p>\r\n	The HDU is similar to ICU except that patients admitted to the HDU are usually less ill or beginning to recover from their operation. There may be fewer nurses and doctors than in the ICU because the patient is not as ill and does not require as much treatment.&nbsp;<br />\r\n	Similar to the ICU, patients in the HDU are monitored frequently, assessed daily and the need for continued HDU care is continuously re-evaluated.</p>\r\n<p>\r\n	In most rural hospitals the HDU is a part of the ICU. In Sydney, the HDU can either be a part of the ICU or a separate unit altogether.</p>\r\n<p>\r\n	The guidelines, policies and protocols contained within this library are provided as REFERENCE material and are not to be viewed as patient care directives. Before using this material users are directed to read the full&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/disclaimer" target="_blank">DISCLAIMER</a>&nbsp;which outlines the conditions of use.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<h4>\r\n	Publication</h4>\r\n<ul>\r\n	<li>\r\n		Version 1.1</li>\r\n	<li>\r\n		First published June 2004</li>\r\n	<li>\r\n		This version published January 2009</li>\r\n	<li>\r\n		Reviewer: Kaye Rolls CNC ICCMU</li>\r\n</ul>\r\n', 'What is ICU?', 'There are several different types of Units in hospitals that offer care to those patients that are seriously ill. You will hear terms such as ''Intensive Care Units'', ''Coronary Care Units'', High Dependency Units'' and even ''Specialised Intensive Care Units''. Indeed some units combine these functions.\r\nThis page aims to eliminate some of the confusion that might result from these different terms.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(12, 1, '2012-05-12 07:23:47', '0000-00-00 00:00:00', '<p>\r\n	<img alt="" src="/iccu/p3media/file/image/id/3/preset/default" style="margin-left: 5px; margin-right: 5px; margin-top: 5px; margin-bottom: 5px; float: left; " />Cras feugiat tellus nec arcu pretium id <a href="#" rel="tooltip" title="A tooltip">malesuada</a> velit rhoncus. Sed et feugiat felis. Suspendisse potenti. Sed eu lorem tortor, et viverra metus. Fusce lacinia pulvinar felis, eu lacinia est porta vitae. Sed et libero eu mauris vestibulum tincidunt molestie ac felis. Vestibulum quis lacus augue, et fermentum elit. Suspendisse facilisis sollicitudin sem id porttitor. Vivamus quam massa, dapibus at dignissim nec, rhoncus a odio. Sed et metus at nisl imperdiet ultricies. Suspendisse potenti. Morbi ac lectus dolor, nec porttitor nisi. Nulla nisl risus, mattis id tincidunt adipiscing, ultrices eu metus. Fusce ut ipsum mauris. Curabitur ut massa tortor. Fusce non facilisis lectus.</p>\r\n<p>\r\n	<a href="#" rel="tooltip" title="Another tooltip">Curabitur fringilla facilisis suscipit</a>. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas, velit vel consectetur semper, risus leo bibendum augue, sed elementum nulla erat quis velit. Nullam ante tortor, consectetur ut pharetra ultrices, fermentum at tellus. Integer ut lorem turpis. Integer mollis, ante nec interdum fringilla, lacus nisi dictum ante, at ornare sem sem quis enim. Integer nec enim vel ante varius tempor non sed arcu. Pellentesque non eros nisl. Phasellus in libero eget tellus mollis pretium. Mauris facilisis ante sed sapien blandit elementum. Aenean id turpis velit. Morbi suscipit felis vel diam ultricies quis faucibus felis eleifend. Morbi consequat ornare purus eu pretium.</p>\r\n<p>\r\n	Donec vulputate tempor magna. In hac habitasse platea dictumst. Nullam magna nisi, pellentesque at tincidunt rutrum, tristique a magna. Praesent at ligula quis augue facilisis convallis. Aliquam eget massa semper nulla congue dapibus non vitae mauris. Sed iaculis mollis nunc, eu condimentum diam commodo id. Cras id urna tellus, nec porta libero. Ut fermentum vestibulum volutpat. Maecenas vitae lorem nec dui commodo venenatis. In vulputate, metus sed viverra facilisis, risus turpis mattis lacus, a aliquam enim risus vitae ante. Integer vestibulum augue quis turpis consectetur quis feugiat velit elementum. Cras blandit varius turpis id ornare. Sed eget accumsan magna. Nam ut mi magna. Morbi scelerisque faucibus auctor.</p>\r\n<p>\r\n	Ut tortor libero, condimentum sed interdum id, pretium ac risus. Quisque tristique ipsum metus. Donec nec ligula vel enim lacinia eleifend vel at leo. Maecenas id dui quis nunc viverra fermentum vitae eget orci. Maecenas non tellus eu augue posuere consectetur id vel orci. Integer ut pellentesque elit. Duis nec magna vitae felis fringilla cursus. Aliquam sapien diam, consectetur quis luctus id, bibendum vel ante. Sed cursus ipsum at tellus lobortis dignissim. Fusce pulvinar quam quis sem euismod ac tincidunt ligula bibendum. Cras ac consequat erat. Aliquam sit amet dui sit amet mauris facilisis laoreet in id orci.</p>\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci magna, euismod vel ultricies in.', 'Curabitur fringilla facilisis suscipit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas, velit vel consectetur semper, risus leo bibendum augue, sed elementum nulla erat quis velit. Nullam ante tortor, consectetur ut pharetra ultrices, fermentum at tellus. Integer ut lorem turpis. Integer mollis, ante nec interdum fringilla, lacus nisi dictum ante, at ornare sem sem quis enim. Integer nec enim vel ante varius tempor non sed arcu. Pellentesque non eros nisl. Phasellus in libero eget tellus mollis pretium. Mauris facilisis ante sed sapien blandit elementum. ', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(13, 1, '2012-05-12 08:20:27', '0000-00-00 00:00:00', '<p>\r\n	Aenean in nunc sit amet nibh dignissim mollis. Donec suscipit magna in nunc egestas at auctor nunc faucibus. In convallis, est at pellentesque ullamcorper, quam quam pellentesque massa, at sollicitudin arcu tellus eget eros. Nam auctor leo eu magna luctus ut luctus lectus suscipit. Integer in justo et lectus cursus mollis. Sed congue diam in magna malesuada id tempor enim imperdiet. Aliquam eu elit diam, sed dapibus metus. Vestibulum condimentum dui nec dui sodales eu tempus nunc convallis. Nam et eros quam, sit amet sodales turpis. Suspendisse potenti. Sed tempus eleifend quam, id luctus erat pretium rutrum. Morbi vel dolor massa. Vestibulum venenatis aliquam ullamcorper. Ut eu blandit nisl. Nunc dapibus vulputate urna non malesuada. Nullam congue tristique pharetra.</p>\r\n<p>\r\n	Suspendisse blandit ultricies mi non pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce consequat vulputate sem, et ultrices justo pharetra id. Donec at orci nec sapien feugiat feugiat non elementum ipsum. Pellentesque ut ante nibh, ac consequat dui. Quisque quis odio venenatis sem aliquet mattis et ac sem. Praesent sollicitudin nisi id mauris venenatis ultricies. Proin in erat nisi. Vivamus molestie vehicula metus eu consequat. Nunc faucibus, tellus vitae venenatis sodales, mauris magna tincidunt diam, in porttitor velit massa nec dolor. Morbi velit tellus, volutpat sit amet sollicitudin sit amet, rhoncus in nulla. Etiam hendrerit arcu eget purus iaculis id egestas tortor malesuada. Phasellus magna libero, consectetur eu laoreet a, luctus sit amet lacus. Nunc vel massa non eros commodo tincidunt. Mauris a quam ut nisl congue condimentum ac eu lorem.</p>\r\n', 'Neque porro quisquam est qui dolorem', 'Aenean in nunc sit amet nibh dignissim mollis. Donec suscipit magna in nunc egestas at auctor nunc faucibus. In convallis, est at pellentesque ullamcorper, quam quam pellentesque massa, at sollicitudin arcu tellus eget eros. Nam auctor leo eu magna luctus ut luctus lectus suscipit. Integer in justo et lectus cursus mollis. Sed congue diam in magna malesuada id tempor enim imperdiet. ', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(14, 1, '2012-05-12 08:46:17', '0000-00-00 00:00:00', '<p>\r\n	Ut massa ante, eleifend id feugiat at, pharetra eu tortor. Ut in lacus at est faucibus condimentum. Duis non quam augue. Nulla ut est ut quam gravida pellentesque id a turpis. Donec in tincidunt risus. Suspendisse arcu nibh, aliquet sit amet mattis quis, ultricies lobortis est. Aenean venenatis nunc eu risus tincidunt at tincidunt dui aliquam. Curabitur ornare porta tortor a dictum. Pellentesque convallis ante ante, sit amet ornare magna. Suspendisse fermentum diam ut quam molestie convallis congue metus faucibus. Aliquam volutpat egestas facilisis. Nam vel convallis nibh. Maecenas dapibus molestie purus eu varius. Nullam consequat tincidunt nisi quis lobortis. Ut et molestie dui. Vivamus sollicitudin felis ut turpis blandit vitae dignissim neque sollicitudin.</p>\r\n<p>\r\n	Cras feugiat tellus nec arcu pretium id malesuada velit rhoncus. Sed et feugiat felis. Suspendisse potenti. Sed eu lorem tortor, et viverra metus. Fusce lacinia pulvinar felis, eu lacinia est porta vitae. Sed et libero eu mauris vestibulum tincidunt molestie ac felis. Vestibulum quis lacus augue, et fermentum elit. Suspendisse facilisis sollicitudin sem id porttitor. Vivamus quam massa, dapibus at dignissim nec, rhoncus a odio. Sed et metus at nisl imperdiet ultricies. Suspendisse potenti. Morbi ac lectus dolor, nec porttitor nisi. Nulla nisl risus, mattis id tincidunt adipiscing, ultrices eu metus. Fusce ut ipsum mauris. Curabitur ut massa tortor. Fusce non facilisis lectus.</p>\r\n<p>\r\n	Curabitur fringilla facilisis suscipit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas, velit vel consectetur semper, risus leo bibendum augue, sed elementum nulla erat quis velit. Nullam ante tortor, consectetur ut pharetra ultrices, fermentum at tellus. Integer ut lorem turpis. Integer mollis, ante nec interdum fringilla, lacus nisi dictum ante, at ornare sem sem quis enim. Integer nec enim vel ante varius tempor non sed arcu. Pellentesque non eros nisl. Phasellus in libero eget tellus mollis pretium. Mauris facilisis ante sed sapien blandit elementum. Aenean id turpis velit. Morbi suscipit felis vel diam ultricies quis faucibus felis eleifend. Morbi consequat ornare purus eu pretium.</p>\r\n<p>\r\n	Donec vulputate tempor magna. In hac habitasse platea dictumst. Nullam magna nisi, pellentesque at tincidunt rutrum, tristique a magna. Praesent at ligula quis augue facilisis convallis. Aliquam eget massa semper nulla congue dapibus non vitae mauris. Sed iaculis mollis nunc, eu condimentum diam commodo id. Cras id urna tellus, nec porta libero. Ut fermentum vestibulum volutpat. Maecenas vitae lorem nec dui commodo venenatis. In vulputate, metus sed viverra facilisis, risus turpis mattis lacus, a aliquam enim risus vitae ante. Integer vestibulum augue quis turpis consectetur quis feugiat velit elementum. Cras blandit varius turpis id ornare. Sed eget accumsan magna. Nam ut mi magna. Morbi scelerisque faucibus auctor.</p>\r\n<p>\r\n	Ut tortor libero, condimentum sed interdum id, pretium ac risus. Quisque tristique ipsum metus. Donec nec ligula vel enim lacinia eleifend vel at leo. Maecenas id dui quis nunc viverra fermentum vitae eget orci. Maecenas non tellus eu augue posuere consectetur id vel orci. Integer ut pellentesque elit. Duis nec magna vitae felis fringilla cursus. Aliquam sapien diam, consectetur quis luctus id, bibendum vel ante. Sed cursus ipsum at tellus lobortis dignissim. Fusce pulvinar quam quis sem euismod ac tincidunt ligula bibendum. Cras ac consequat erat. Aliquam sit amet dui sit amet mauris facilisis laoreet in id orci.</p>\r\n', 'Ut massa ante, eleifend id feugiat at, pharetra eu tortor', 'Donec vulputate tempor magna. In hac habitasse platea dictumst. Nullam magna nisi, pellentesque at tincidunt rutrum, tristique a magna. Praesent at ligula quis augue facilisis convallis.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(15, 1, '2012-05-12 08:47:36', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Duis eu eros dolor. Nulla sit amet lacus felis, dapibus fringilla leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis non leo nunc, eu varius erat. Donec pretium lobortis vulputate. Aenean leo justo, cursus tempor malesuada id, tincidunt sed lacus. Sed egestas ligula placerat felis dignissim venenatis rhoncus dolor pretium. Mauris a adipiscing elit. Vestibulum dui purus, iaculis sit amet commodo eu, rhoncus ut arcu. Nam est metus, pretium a varius eget, ultricies non libero. Sed non lacus sapien, eu sodales mi. Quisque rhoncus mattis odio ac dictum.</p>\r\n<p>\r\n	Duis eu sem sem. Quisque nulla justo, ornare eget mollis sit amet, facilisis at enim. In posuere facilisis tempor. Morbi nisl velit, volutpat eu porta ac, scelerisque hendrerit libero. Suspendisse viverra sem sit amet ante accumsan sit amet accumsan urna euismod. Pellentesque dolor velit, ultricies eget congue at, porttitor ut erat. Vivamus eleifend, est fermentum varius dignissim, diam est facilisis enim, id feugiat leo tellus eget elit. Morbi ut porta sem. Ut nibh nibh, elementum a suscipit quis, mattis nec libero. Duis pharetra consectetur erat sit amet faucibus. Sed venenatis tempor felis vel lacinia. Cras convallis, massa eget tempus blandit, arcu felis hendrerit lorem, sit amet aliquet nisi magna nec ante. Maecenas ut est magna. Maecenas in nisi nisl, vel consectetur risus.</p>\r\n<p>\r\n	Nunc et eros nisl. Maecenas aliquam pulvinar magna non rhoncus. Etiam egestas ultricies interdum. Sed mattis imperdiet mauris, bibendum facilisis lorem aliquam sed. Proin in diam sed dui interdum tincidunt. Morbi orci sem, ullamcorper non cursus at, auctor nec libero. Praesent erat massa, vestibulum sed scelerisque in, vulputate sit amet ipsum. Cras sollicitudin magna non augue gravida a mollis nisl tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla molestie, ante vel rhoncus venenatis, justo felis pharetra arcu, vitae vulputate est massa id nibh. Vestibulum massa lacus, iaculis vehicula rutrum vitae, aliquet at ipsum. Suspendisse ligula odio, lacinia vitae ullamcorper in, gravida vitae leo. Phasellus vel dignissim turpis. Aenean congue porta sapien, ut pharetra sem rutrum vel. Curabitur ultrices urna eu mauris dapibus fringilla.</p>\r\n<p>\r\n	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sit amet lorem lacus. Vivamus tellus orci, accumsan at aliquam a, cursus sit amet nisi. Sed ac felis sit amet nulla eleifend convallis. Donec nec ante mollis tortor rhoncus adipiscing quis eget dolor. Sed et nibh nibh. Quisque nibh arcu, tincidunt sit amet pellentesque vel, pretium ut lectus. Integer tristique suscipit massa. Nulla bibendum orci erat, eget malesuada augue. Pellentesque id nisl eu enim faucibus aliquet. Maecenas tempus ultrices viverra.</p>\r\n<p>\r\n	Nulla dolor nisi, commodo eu varius eu, suscipit id turpis. Integer non felis vel lectus rhoncus tristique sed vel eros. Mauris mattis bibendum velit non sodales. Mauris id mauris quam. Fusce bibendum tempus iaculis. Nulla consequat varius diam. Cras venenatis nisl quis quam pellentesque molestie. Aliquam suscipit faucibus orci sed aliquam. Fusce porta commodo nisl, eget aliquam elit convallis eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc cursus felis sed velit viverra sodales at hendrerit neque.</p>\r\n<p>\r\n	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur id neque sagittis arcu accumsan varius quis vitae quam. Cras sed mi a dui malesuada elementum. Aliquam non tellus quis est porttitor imperdiet. Etiam eget sapien sapien. Cras mi ante, porta at auctor a, feugiat sed odio. Mauris eleifend, felis vel ornare lobortis, ipsum felis ullamcorper lacus, sit amet laoreet nunc erat in eros. Vivamus imperdiet auctor blandit. Mauris ut leo sed massa ultricies cursus in ac urna. Phasellus scelerisque, metus vitae lobortis convallis, diam leo interdum ligula, eget consequat lectus lectus eu ante.</p>\r\n', 'Donec vulputate tempor magna', 'Curabitur fringilla facilisis suscipit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas, velit vel consectetur semper, risus leo bibendum augue, sed elementum nulla erat quis velit. Nullam ante tortor, consectetur ut pharetra ultrices, fermentum at tellus. Integer ut lorem turpis. Integer mollis, ante nec interdum fringilla, lacus nisi dictum ante, at ornare sem sem quis enim. Integer nec enim vel ante varius tempor non sed arcu. Pellentesque non eros nisl. Phasellus in libero eget tellus mollis pretium. Mauris facilisis ante sed sapien blandit elementum. Aenean id turpis velit. Morbi suscipit felis vel diam ultricies quis faucibus felis eleifend. Morbi consequat ornare purus eu pretium.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(16, 1, '2012-05-12 08:48:10', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sit amet lorem lacus. Vivamus tellus orci, accumsan at aliquam a, cursus sit amet nisi. Sed ac felis sit amet nulla eleifend convallis. Donec nec ante mollis tortor rhoncus adipiscing quis eget dolor. Sed et nibh nibh. Quisque nibh arcu, tincidunt sit amet pellentesque vel, pretium ut lectus. Integer tristique suscipit massa. Nulla bibendum orci erat, eget malesuada augue. Pellentesque id nisl eu enim faucibus aliquet. Maecenas tempus ultrices viverra.</p>\r\n<p>\r\n	Nulla dolor nisi, commodo eu varius eu, suscipit id turpis. Integer non felis vel lectus rhoncus tristique sed vel eros. Mauris mattis bibendum velit non sodales. Mauris id mauris quam. Fusce bibendum tempus iaculis. Nulla consequat varius diam. Cras venenatis nisl quis quam pellentesque molestie. Aliquam suscipit faucibus orci sed aliquam. Fusce porta commodo nisl, eget aliquam elit convallis eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc cursus felis sed velit viverra sodales at hendrerit neque.</p>\r\n<p>\r\n	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur id neque sagittis arcu accumsan varius quis vitae quam. Cras sed mi a dui malesuada elementum. Aliquam non tellus quis est porttitor imperdiet. Etiam eget sapien sapien. Cras mi ante, porta at auctor a, feugiat sed odio. Mauris eleifend, felis vel ornare lobortis, ipsum felis ullamcorper lacus, sit amet laoreet nunc erat in eros. Vivamus imperdiet auctor blandit. Mauris ut leo sed massa ultricies cursus in ac urna. Phasellus scelerisque, metus vitae lobortis convallis, diam leo interdum ligula, eget consequat lectus lectus eu ante.</p>\r\n', 'Integer vitae augue quis eros posuere ullamcorper sit amet dignissim lacus', 'Suspendisse nec tortor urna. Mauris vel venenatis nunc. Nullam tincidunt, lorem non tristique rutrum, arcu dui varius odio, consectetur euismod dolor urna a mi. Integer pretium urna vitae erat porta ullamcorper. Nulla quis urna vitae ligula commodo dignissim. Cras molestie condimentum felis, non vehicula justo aliquet in. Morbi dignissim, leo vitae mollis faucibus, quam mauris mollis urna, a tincidunt augue magna eu quam. Quisque accumsan lacinia erat sed vehicula.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(17, 1, '2012-05-12 08:48:46', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur id neque sagittis arcu accumsan varius quis vitae quam. Cras sed mi a dui malesuada elementum. Aliquam non tellus quis est porttitor imperdiet. Etiam eget sapien sapien. Cras mi ante, porta at auctor a, feugiat sed odio. Mauris eleifend, felis vel ornare lobortis, ipsum felis ullamcorper lacus, sit amet laoreet nunc erat in eros. Vivamus imperdiet auctor blandit. Mauris ut leo sed massa ultricies cursus in ac urna. Phasellus scelerisque, metus vitae lobortis convallis, diam leo interdum ligula, eget consequat lectus lectus eu ante.</p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	Integer vitae augue quis eros posuere ullamcorper sit amet dignissim lacus. Suspendisse nec tortor urna. Mauris vel venenatis nunc. Nullam tincidunt, lorem non tristique rutrum, arcu dui varius odio, consectetur euismod dolor urna a mi. Integer pretium urna vitae erat porta ullamcorper. Nulla quis urna vitae ligula commodo dignissim. Cras molestie condimentum felis, non vehicula justo aliquet in. Morbi dignissim, leo vitae mollis faucibus, quam mauris mollis urna, a tincidunt augue magna eu quam. Quisque accumsan lacinia erat sed vehicula.</p>\r\n', 'Ut bibendum, metus vitae ornare vulputate', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sit amet lorem lacus. Vivamus tellus orci, accumsan at aliquam a, cursus sit amet nisi. Sed ac felis sit amet nulla eleifend convallis. Donec nec ante mollis tortor rhoncus adipiscing quis eget dolor. Sed et nibh nibh. Quisque nibh arcu, tincidunt sit amet pellentesque vel, pretium ut lectus. Integer tristique suscipit massa. Nulla bibendum orci erat, eget malesuada augue. Pellentesque id nisl eu enim faucibus aliquet. Maecenas tempus ultrices viverra.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(18, 1, '2012-05-12 08:49:15', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur id neque sagittis arcu accumsan varius quis vitae quam. Cras sed mi a dui malesuada elementum. Aliquam non tellus quis est porttitor imperdiet. Etiam eget sapien sapien. Cras mi ante, porta at auctor a, feugiat sed odio. Mauris eleifend, felis vel ornare lobortis, ipsum felis ullamcorper lacus, sit amet laoreet nunc erat in eros. Vivamus imperdiet auctor blandit. Mauris ut leo sed massa ultricies cursus in ac urna. Phasellus scelerisque, metus vitae lobortis convallis, diam leo interdum ligula, eget consequat lectus lectus eu ante.</p>\r\n<p>\r\n	Integer vitae augue quis eros posuere ullamcorper sit amet dignissim lacus. Suspendisse nec tortor urna. Mauris vel venenatis nunc. Nullam tincidunt, lorem non tristique rutrum, arcu dui varius odio, consectetur euismod dolor urna a mi. Integer pretium urna vitae erat porta ullamcorper. Nulla quis urna vitae ligula commodo dignissim. Cras molestie condimentum felis, non vehicula justo aliquet in. Morbi dignissim, leo vitae mollis faucibus, quam mauris mollis urna, a tincidunt augue magna eu quam. Quisque accumsan lacinia erat sed vehicula.</p>\r\n<p>\r\n	Ut bibendum, metus vitae ornare vulputate, neque orci malesuada massa, a euismod sem libero non sem. Curabitur aliquet porta nibh et malesuada. Vestibulum ipsum dolor, sollicitudin at imperdiet eget, vulputate sed mauris. Ut lacinia, orci id congue tristique, felis dolor venenatis turpis, vel sagittis ligula nunc ut dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur non convallis metus. Phasellus rhoncus nunc at lorem ultrices rhoncus. Morbi eget condimentum lectus. Donec arcu eros, eleifend non porta a, pretium ac risus. Donec sed metus sem, eget accumsan leo. Pellentesque eget metus vitae justo semper suscipit. Cras iaculis, magna eget varius dictum, tortor urna ultricies eros, ut vehicula velit nulla eget risus.</p>\r\n', 'Phasellus ipsum tortor, volutpat at auctor ac, pellentesque lobortis erat.', 'Sed laoreet, urna sed sollicitudin rutrum, ipsum quam dapibus odio, quis pretium odio augue nec nisi. Proin rhoncus lobortis lorem, ut ornare ligula cursus et. Fusce id leo libero. Duis vestibulum auctor dictum. Cras nec varius quam. Integer semper rhoncus dictum. Donec ipsum dolor, eleifend eget varius in, blandit ut purus. Integer sit amet nibh vitae mauris feugiat porta vel vitae leo. Suspendisse eu lacinia turpis. Cras rhoncus faucibus interdum.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(19, 1, '2012-05-12 08:50:01', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Suspendisse eget enim at quam fermentum auctor eget ac ipsum. Duis a elit nec urna tincidunt ullamcorper sed eu ligula. In at nisi id metus scelerisque auctor. Praesent tempus neque quis ante interdum pharetra condimentum quam convallis. Nam sollicitudin ullamcorper sapien a mattis. Sed sed felis dolor, sit amet malesuada justo. In id est tellus.</p>\r\n<p>\r\n	Phasellus ipsum tortor, volutpat at auctor ac, pellentesque lobortis erat. Sed laoreet, urna sed sollicitudin rutrum, ipsum quam dapibus odio, quis pretium odio augue nec nisi. Proin rhoncus lobortis lorem, ut ornare ligula cursus et. Fusce id leo libero. Duis vestibulum auctor dictum. Cras nec varius quam. Integer semper rhoncus dictum. Donec ipsum dolor, eleifend eget varius in, blandit ut purus. Integer sit amet nibh vitae mauris feugiat porta vel vitae leo. Suspendisse eu lacinia turpis. Cras rhoncus faucibus interdum.</p>\r\n<p>\r\n	Maecenas dictum consectetur odio vitae hendrerit. Nulla sed lectus quam, ut placerat turpis. Nam nibh purus, tempor id semper eu, pretium eget justo. Fusce lectus mauris, adipiscing vitae mollis quis, rutrum sit amet purus. Maecenas vitae nunc odio, non pellentesque est. Phasellus nulla diam, tempus imperdiet vulputate eu, varius a libero. Ut consequat, lacus sed auctor vestibulum, eros ligula dignissim ipsum, vel euismod lorem mauris sit amet massa. Mauris imperdiet consectetur varius. Nunc sollicitudin, est eget tristique euismod, massa sem sagittis felis, sed fringilla diam elit eget magna. Praesent nisi purus, rutrum ut posuere ac, sodales at purus. Fusce augue urna, mollis nec blandit eget, pretium vel sem. Mauris euismod tortor nec diam mattis et accumsan tortor fringilla.</p>\r\n', 'Nullam augue mi, consectetur eget consequat in, aliquam et mauris.', 'Suspendisse sed mauris nec augue placerat faucibus. Ut venenatis, ipsum ac rhoncus malesuada, ipsum sem ultrices est, eu placerat justo mi nec velit. Pellentesque ac dapibus nisi. Nulla eu elit a libero pretium vehicula. Pellentesque eleifend molestie iaculis. Donec est diam, tempus at hendrerit vitae, vehicula sed odio. Phasellus id elementum mauris. Donec condimentum iaculis odio, eu convallis purus vestibulum commodo. Curabitur at imperdiet tortor. Donec odio dolor, vestibulum eu consectetur a, luctus aliquet dolor.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0);
INSERT INTO `posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(20, 1, '2012-05-12 08:50:32', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Nullam augue mi, consectetur eget consequat in, aliquam et mauris. Suspendisse sed mauris nec augue placerat faucibus. Ut venenatis, ipsum ac rhoncus malesuada, ipsum sem ultrices est, eu placerat justo mi nec velit. Pellentesque ac dapibus nisi. Nulla eu elit a libero pretium vehicula. Pellentesque eleifend molestie iaculis. Donec est diam, tempus at hendrerit vitae, vehicula sed odio. Phasellus id elementum mauris. Donec condimentum iaculis odio, eu convallis purus vestibulum commodo. Curabitur at imperdiet tortor. Donec odio dolor, vestibulum eu consectetur a, luctus aliquet dolor.</p>\r\n<p>\r\n	Suspendisse eget enim at quam fermentum auctor eget ac ipsum. Duis a elit nec urna tincidunt ullamcorper sed eu ligula. In at nisi id metus scelerisque auctor. Praesent tempus neque quis ante interdum pharetra condimentum quam convallis. Nam sollicitudin ullamcorper sapien a mattis. Sed sed felis dolor, sit amet malesuada justo. In id est tellus.</p>\r\n<p>\r\n	Phasellus ipsum tortor, volutpat at auctor ac, pellentesque lobortis erat. Sed laoreet, urna sed sollicitudin rutrum, ipsum quam dapibus odio, quis pretium odio augue nec nisi. Proin rhoncus lobortis lorem, ut ornare ligula cursus et. Fusce id leo libero. Duis vestibulum auctor dictum. Cras nec varius quam. Integer semper rhoncus dictum. Donec ipsum dolor, eleifend eget varius in, blandit ut purus. Integer sit amet nibh vitae mauris feugiat porta vel vitae leo. Suspendisse eu lacinia turpis. Cras rhoncus faucibus interdum.</p>\r\n', 'Pellentesque eget metus vitae justo semper suscipit. ', 'Ut bibendum, metus vitae ornare vulputate, neque orci malesuada massa, a euismod sem libero non sem. Curabitur aliquet porta nibh et malesuada. Vestibulum ipsum dolor, sollicitudin at imperdiet eget, vulputate sed mauris. Ut lacinia, orci id congue tristique, felis dolor venenatis turpis, vel sagittis ligula nunc ut dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur non convallis metus. Phasellus rhoncus nunc at lorem ultrices rhoncus. Morbi eget condimentum lectus. Donec arcu eros, eleifend non porta a, pretium ac risus. Donec sed metus sem, eget accumsan leo', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(21, 1, '2012-05-12 08:51:04', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Maecenas dictum consectetur odio vitae hendrerit. Nulla sed lectus quam, ut placerat turpis. Nam nibh purus, tempor id semper eu, pretium eget justo. Fusce lectus mauris, adipiscing vitae mollis quis, rutrum sit amet purus. Maecenas vitae nunc odio, non pellentesque est. Phasellus nulla diam, tempus imperdiet vulputate eu, varius a libero. Ut consequat, lacus sed auctor vestibulum, eros ligula dignissim ipsum, vel euismod lorem mauris sit amet massa. Mauris imperdiet consectetur varius. Nunc sollicitudin, est eget tristique euismod, massa sem sagittis felis, sed fringilla diam elit eget magna. Praesent nisi purus, rutrum ut posuere ac, sodales at purus. Fusce augue urna, mollis nec blandit eget, pretium vel sem. Mauris euismod tortor nec diam mattis et accumsan tortor fringilla.</p>\r\n<p>\r\n	Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ac ipsum tortor, eu sollicitudin libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in dui ac dui condimentum faucibus. Suspendisse adipiscing, ipsum ut suscipit blandit, dolor dui scelerisque tellus, a sodales diam est ut tellus. Aenean rutrum dignissim magna, mattis placerat orci commodo non. Cras tincidunt augue et dui tempus aliquet. Integer vel suscipit leo. Pellentesque eget blandit lacus. Nulla commodo eleifend nisl eget placerat. Etiam porta ornare tincidunt. Donec tempus dapibus odio, nec mollis tellus venenatis id. Aenean nec metus at dui porta suscipit luctus non sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ut sagittis diam. Etiam ac enim massa, ac blandit lacus.</p>\r\n<p>\r\n	Nam id dolor vitae lacus cursus elementum. Sed tincidunt, mauris in sodales lacinia, nisi tellus congue felis, eget fringilla erat elit sed orci. Phasellus non risus risus. Donec rhoncus dignissim fringilla. Cras sit amet tortor vitae ante tempus ullamcorper id nec elit. Pellentesque imperdiet augue at nisl gravida sed placerat justo venenatis. Sed imperdiet tortor eu tellus pretium a auctor dui malesuada. Proin at varius enim. Ut luctus, erat nec aliquet aliquet, enim augue pulvinar sapien, ut interdum lectus arcu eget diam. Aenean sit amet sapien odio. Sed accumsan vehicula pharetra. Nullam condimentum leo nec lacus consectetur at pretium turpis tempus. Pellentesque nibh metus, tincidunt id mattis a, venenatis ac massa. Etiam laoreet, metus eget laoreet gravida, nisi eros consectetur felis, nec tincidunt lectus risus nec metus. Donec in orci quam. Proin congue fringilla lectus ac sagittis.</p>\r\n', 'Aliquam ac ipsum eget justo eleifend mattis a eget purus.', 'Aliquam ac ipsum eget justo eleifend mattis a eget purus. Integer rutrum dolor nec purus feugiat ac consectetur odio lacinia. Sed bibendum odio sed enim ultricies tempor. Etiam metus dolor, euismod in vulputate sed, iaculis vel orci. Donec at massa sit amet mauris iaculis tempus. Aliquam accumsan elementum risus, sit amet feugiat elit sagittis sed. Sed sit amet rutrum leo. Donec ac elit sapien, vel aliquet purus.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(22, 1, '2012-05-12 08:51:35', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Aliquam ac ipsum eget justo eleifend mattis a eget purus. Integer rutrum dolor nec purus feugiat ac consectetur odio lacinia. Sed bibendum odio sed enim ultricies tempor. Etiam metus dolor, euismod in vulputate sed, iaculis vel orci. Donec at massa sit amet mauris iaculis tempus. Aliquam accumsan elementum risus, sit amet feugiat elit sagittis sed. Sed sit amet rutrum leo. Donec ac elit sapien, vel aliquet purus.</p>\r\n<p>\r\n	Nulla sodales nisl vitae erat luctus et mollis elit hendrerit. Proin vehicula enim in ipsum bibendum in posuere lorem porttitor. Curabitur et magna augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla cursus, eros eu vestibulum rhoncus, lectus sapien congue tortor, eu suscipit nulla massa eget est. Quisque lectus augue, rhoncus eu scelerisque vitae, pretium et nunc. Nulla odio orci, pulvinar eu iaculis quis, tristique eu tellus. Pellentesque dictum aliquam erat, et cursus sem malesuada sit amet. Suspendisse potenti. Integer dolor nisi, consectetur non molestie at, imperdiet sed tortor. Vivamus vitae nulla mauris, nec rhoncus orci. Nunc nec neque vel leo sagittis vestibulum ut blandit magna. Duis molestie, velit quis consequat laoreet, sem justo tempus tellus, vulputate fermentum augue orci sit amet nisl. Curabitur posuere sollicitudin felis, quis faucibus massa convallis id.</p>\r\n', 'Nulla sodales nisl vitae erat luctus et mollis elit hendrerit. ', 'Nam id dolor vitae lacus cursus elementum. Sed tincidunt, mauris in sodales lacinia, nisi tellus congue felis, eget fringilla erat elit sed orci. Phasellus non risus risus.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(23, 1, '2012-05-12 08:52:35', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Maecenas dictum consectetur odio vitae hendrerit. Nulla sed lectus quam, ut placerat turpis. Nam nibh purus, tempor id semper eu, pretium eget justo. Fusce lectus mauris, adipiscing vitae mollis quis, rutrum sit amet purus. Maecenas vitae nunc odio, non pellentesque est. Phasellus nulla diam, tempus imperdiet vulputate eu, varius a libero. Ut consequat, lacus sed auctor vestibulum, eros ligula dignissim ipsum, vel euismod lorem mauris sit amet massa. Mauris imperdiet consectetur varius. Nunc sollicitudin, est eget tristique euismod, massa sem sagittis felis, sed fringilla diam elit eget magna. Praesent nisi purus, rutrum ut posuere ac, sodales at purus. Fusce augue urna, mollis nec blandit eget, pretium vel sem. Mauris euismod tortor nec diam mattis et accumsan tortor fringilla.</p>\r\n<p>\r\n	Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ac ipsum tortor, eu sollicitudin libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in dui ac dui condimentum faucibus. Suspendisse adipiscing, ipsum ut suscipit blandit, dolor dui scelerisque tellus, a sodales diam est ut tellus. Aenean rutrum dignissim magna, mattis placerat orci commodo non. Cras tincidunt augue et dui tempus aliquet. Integer vel suscipit leo. Pellentesque eget blandit lacus. Nulla commodo eleifend nisl eget placerat. Etiam porta ornare tincidunt. Donec tempus dapibus odio, nec mollis tellus venenatis id. Aenean nec metus at dui porta suscipit luctus non sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ut sagittis diam. Etiam ac enim massa, ac blandit lacus.</p>\r\n<p>\r\n	Nam id dolor vitae lacus cursus elementum. Sed tincidunt, mauris in sodales lacinia, nisi tellus congue felis, eget fringilla erat elit sed orci. Phasellus non risus risus. Donec rhoncus dignissim fringilla. Cras sit amet tortor vitae ante tempus ullamcorper id nec elit. Pellentesque imperdiet augue at nisl gravida sed placerat justo venenatis. Sed imperdiet tortor eu tellus pretium a auctor dui malesuada. Proin at varius enim. Ut luctus, erat nec aliquet aliquet, enim augue pulvinar sapien, ut interdum lectus arcu eget diam. Aenean sit amet sapien odio. Sed accumsan vehicula pharetra. Nullam condimentum leo nec lacus consectetur at pretium turpis tempus. Pellentesque nibh metus, tincidunt id mattis a, venenatis ac massa. Etiam laoreet, metus eget laoreet gravida, nisi eros consectetur felis, nec tincidunt lectus risus nec metus. Donec in orci quam. Proin congue fringilla lectus ac sagittis.</p>\r\n', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos', 'Sed ac ipsum tortor, eu sollicitudin libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in dui ac dui condimentum faucibus. Suspendisse adipiscing, ipsum ut suscipit blandit, dolor dui scelerisque tellus, a sodales diam est ut tellus. Aenean rutrum dignissim magna, mattis placerat orci commodo non. Cras tincidunt augue et dui tempus aliquet. Integer vel suscipit leo. Pellentesque eget blandit lacus. ', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(25, 1, '2012-05-13 04:48:11', '0000-00-00 00:00:00', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	The Intensive Care team consists of many different, highly trained staff, working together, caring for seriously ill patients to ensure the best possible outcome for the patient. It is likely that you will meet many of these health professionals during the ICU stay. Please refer to the full&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/disclaimer" target="_blank">disclaimer.</a></p>\r\n<ul>\r\n	<li>\r\n		<a href="http://intensivecare.hsnet.nsw.gov.au/the-intensive-care-team#nurse">Intensive Care Nurses</a></li>\r\n	<li>\r\n		<a href="http://intensivecare.hsnet.nsw.gov.au/the-intensive-care-team#doctor">Intensive Care Doctors</a></li>\r\n	<li>\r\n		<a href="http://intensivecare.hsnet.nsw.gov.au/the-intensive-care-team#other">Other ICU team members</a></li>\r\n	<li>\r\n		<a href="http://intensivecare.hsnet.nsw.gov.au/the-intensive-care-team#allied">Allied Health Professionals</a></li>\r\n	<li>\r\n		<a href="http://intensivecare.hsnet.nsw.gov.au/the-intensive-care-team#support">Hospital Support Professionals</a></li>\r\n</ul>\r\n<h4>\r\n	<br />\r\n	<a name="nurse" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; " title="nurse"></a>Intensive Care Nurses</h4>\r\n<p>\r\n	Intensive Care nurses are responsible for the coordination and implementation of treatment and care for critically ill patients. Many have special experience, education and training in caring for critically ill and injured patients.ICU nurses&#39; provide continuous bedside patient care and the constant monitoring allows for early identification of changes in a patient&#39;s condition.They are skilled in caring for and implementing treatment for critical illnesses and injuries.</p>\r\n<p>\r\n	Depending on the size of the ICU there will be a combination of nursing positions. Specific nursing positions in ICU include</p>\r\n<ul>\r\n	<li>\r\n		Registered nurses (RN) and clinical nurse specialists (CNS) care for patients at the bedside</li>\r\n	<li>\r\n		Nursing unit managers (NUM) are responsible for staffing and coordination of care in the ICU</li>\r\n	<li>\r\n		Clinical Nurse Consultants (CNC)who are responsible for clinical support, education and research</li>\r\n	<li>\r\n		Nurse educators (NE) and clinical nurse educators (CNE) who are responsible for the professional development of the intensive care nursing staff</li>\r\n	<li>\r\n		Research nurses who coordinate research in the ICU</li>\r\n	<li>\r\n		ICU Liaison Nurses who follow-up patients after they are discharged to ward areas</li>\r\n	<li>\r\n		Equipment nurses who maintain the intensive care equipment</li>\r\n	<li>\r\n		Student nurses from local universities undertaking clinical experience</li>\r\n</ul>\r\n<h4>\r\n	<a name="doctor" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; " title="doctor"></a>Intensive Care Doctors</h4>\r\n<p>\r\n	There are three levels of ICU in NSW depending on the size of the hospital. Each unit is staffed according to the complexity of patients who are admitted there. All units will have a specialist doctor in charge</p>\r\n<ul>\r\n	<li>\r\n		The Intensive Care doctor is also referred to as the Intensivist or ICU Consultant.</li>\r\n	<li>\r\n		They are responsible for coordination of patient care in the ICU and will consult with other specialists.</li>\r\n	<li>\r\n		Intensivists are specialists who have completed advanced training in intensive care medicine or a related speciality such as anaesthetics, cardiology or emergency medicine.</li>\r\n	<li>\r\n		They are skilled in diagnosing and treating critical illnesses and injuries.</li>\r\n	<li>\r\n		The Intensivist is experienced in the use of heart monitoring equipment, breathing machines (ventilators) and other high technology health equipment.</li>\r\n</ul>\r\n<p>\r\n	Many larger intensive care units are staffed with a team of intensivists who come under the leadership of the Intensive Care Director. Depending on the size of the hospital and ICU there will be other ICU doctors who are undertaking training. These doctors include:</p>\r\n<ul>\r\n	<li>\r\n		Senior registrars - these doctors have almost completed their advanced training in intensive care and will have a lot of care and responsibility delegated to them by the intensivists</li>\r\n	<li>\r\n		Registrars - these doctors have already completed several years of experience as doctors and are now undertaking training in intensive care or a related speciality area such as anaesthetics, emergency medicine or cardiology.</li>\r\n	<li>\r\n		Residents (RMOs) and interns are junior doctors are gaining experience caring for critically ill patients.</li>\r\n	<li>\r\n		Medical students from clinical schools undertaking clinical experience</li>\r\n</ul>\r\n<p>\r\n	When patients are admitted to hospital they are admitted under a physician or surgeon who is given ongoing responsibility for the management of the patient. When patients are admitted to ICU this responsibility is negotiated between the ICU doctors and the physician or surgeon. These specialities include:</p>\r\n<ul>\r\n	<li>\r\n		Brain (NEUROSURGERY or NEUROLOGY)</li>\r\n	<li>\r\n		Heart/chest (CARDIOTHORACIC or CARDIOLOGY)</li>\r\n	<li>\r\n		Abdomen (GENERAL SURGERY)</li>\r\n	<li>\r\n		Trauma (EMERGENCY)</li>\r\n	<li>\r\n		Bone (ORTHOPAEDIC)</li>\r\n	<li>\r\n		Spine (NEUROLOGY or ORTHOPAEDIC)</li>\r\n	<li>\r\n		Kidney (RENAL)</li>\r\n	<li>\r\n		Lungs (RESPIRATORY)</li>\r\n	<li>\r\n		Cancer (ONCOLOGY)</li>\r\n	<li>\r\n		Infectious Diseases</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n<h4>\r\n	<a name="other" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; " title="other"></a>Other Intensive Care Team Members</h4>\r\n<p>\r\n	Secretary / Ward Clerk provide administrative assistance for the ICU team Orderly / Wardsperson / patient care assistant - these staff assist nurses with patient care including turns and mobility as well as transfers to other areas of the hospital.</p>\r\n<h4>\r\n	<a name="allied" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; " title="allied"></a>Allied Health Professionals</h4>\r\n<p>\r\n	The ICU team cannot care for the ICU patient without the help of other health care professionals.Within the ICU you may also meet other staff such as</p>\r\n<ul>\r\n	<li>\r\n		Physiotherapists are responsible for providing physical therapy for patients such as mobility assistance and chest physiotherapy</li>\r\n	<li>\r\n		Pharmacists attend ward rounds and assist doctors and nurses with advice regarding medications as well as ensuring a supply of medication for patients.</li>\r\n	<li>\r\n		Social Workers are available at most large hospitals. They provide invaluable support for families of critically ill including counselling and assistance with financial matters such Centrelink</li>\r\n	<li>\r\n		Occupational therapists evaluate the ability of the patient to carry out everyday activiites of daily leaving and develop treatment plans to improve the patient&#39;s abilities</li>\r\n	<li>\r\n		Speech therapists evaluate the speech and swallowing of patients.</li>\r\n	<li>\r\n		Dietitians provide advice on the best nutrition for patients</li>\r\n	<li>\r\n		Radiography technicians</li>\r\n</ul>\r\n<h4>\r\n	<a name="support" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; " title="support"></a>Support Professionals</h4>\r\n<p>\r\n	Other staff assisting in the work of the unit may also include the:</p>\r\n<ul>\r\n	<li>\r\n		Biomedical Engineer</li>\r\n	<li>\r\n		Clergy</li>\r\n</ul>\r\n', 'The ICU Team', 'The Intensive Care team consists of many different, highly trained staff, working together, caring for seriously ill patients to ensure the best possible outcome for the patient. It is likely that you will meet many of these health professionals during the ICU stay.', '1', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `lastname`, `firstname`, `birthday`) VALUES
(1, 'Admin', 'Administrator', '0000-00-00'),
(2, 'Demo', 'Demo', '0000-00-00'),
(3, 'quach', 'nathan', '1987-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `profiles_fields`
--

CREATE TABLE IF NOT EXISTS `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `profiles_fields`
--

INSERT INTO `profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'birthday', 'Birthday', 'DATE', 0, 0, 2, '', '', '', '', '0000-00-00', 'UWjuidate', '{"ui-theme":"redmond"}', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rights`
--


-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(3, 'category', 'category', 1),
(4, 'tag', 'tag', 2);

-- --------------------------------------------------------

--
-- Table structure for table `term_relationships`
--

CREATE TABLE IF NOT EXISTS `term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term_relationships`
--

INSERT INTO `term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(13, 46, 0),
(12, 41, 0),
(11, 0, 0),
(10, 41, 0),
(9, 0, 0),
(14, 46, 0),
(15, 46, 0),
(16, 46, 0),
(17, 46, 0),
(18, 46, 0),
(19, 46, 0),
(20, 46, 0),
(21, 46, 0),
(22, 46, 0),
(23, 46, 0),
(24, 44, 0),
(25, 44, 0);

-- --------------------------------------------------------

--
-- Table structure for table `term_taxonomy`
--

CREATE TABLE IF NOT EXISTS `term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  `excerpt` text NOT NULL,
  `feature_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `term_taxonomy`
--

INSERT INTO `term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`, `excerpt`, `feature_order`) VALUES
(47, 3, 'Patient Conditions', '<ul>\r\n	<li>\r\n		The objective of these pages is to provide a straight forward explanation of common conditions or critical illnesses experienced by patients in an Adult Intensive Care Unit.&nbsp;</li>\r\n	<li>\r\n		Every attempt has been made to strip these explanations of medical and nursing jargon that can often obscure the meaning from the patient in ICU or the visitor to ICU.&nbsp;</li>\r\n	<li>\r\n		Each explanation includes a broad description of normal and abnormal function for the body system affected followed by a more detailed description of what happens with a particular condition.</li>\r\n	<li>\r\n		The pages have been written by the members of the Consumer Webpage Working Party (CWPWP). This is a group of senior nursing and medical intensive care clinicians as well as consumer, legal and allied health representatives.&nbsp;Please note that these pages contain general information only and may not reflect an individual patient&#39;s condition or experience.</li>\r\n</ul>\r\n', 44, 0, 'The objective of these pages is to provide a straight forward explanation of common conditions or critical illnesses experienced by patients in an Adult Intensive Care Unit. ', 1),
(53, 3, 'Seminar & Conference', '<p>\r\n	Upcoming events</p>\r\n', 45, 0, 'Upcoming events', 0),
(44, 3, 'For Community', '<p>\r\n	Looking for basic facts about the functions and operations of an ICU or have questions about Intensive Care Units (ICU)? Here you can find information for families of Intensive Care (ICU) patients. These pages are designed to be printer friendly.</p>\r\n', 0, 0, 'Looking for basic facts about the functions and operations of an ICU or have questions about Intensive Care Units (ICU)? Here you can find information for families of Intensive Care (ICU) patients.', 0),
(46, 3, 'Patient & Family', '<p>\r\n	Intensive Care Units (ICUs) are intimidating places to visit. The aim of these pages is to provide information on a range of issues and questions often asked by ICU visitors.</p>\r\n', 44, 0, 'Intensive Care Units (ICUs) are intimidating places to visit. The aim of these pages is to provide information on a range of issues and questions often asked by ICU visitors.', 2),
(45, 3, 'For Clinicians', 'Welcome to the Clinicians section of the ICCMU Web Site. This section contains a broad range of information for intensive care clinicians.', 0, 0, '', 0),
(41, 3, 'Clinicians News', '<p>\r\n	ICCMU bimonthly newsletter, NSWHealth bulletin, NSWHealth Intensive Care Task Force, Specialist Services</p>\r\n', 45, 0, 'ICCMU bimonthly newsletter, NSWHealth bulletin, NSWHealth Intensive Care Task Force, Specialist Services', 0),
(48, 3, 'Visiting a loved one in IC', '<p>\r\n	Intensive Care Units (ICUs) are intimidating places to visit. The aim of these pages is to provide information on a range of issues and questions often asked by ICU visitors.</p>\r\n', 44, 0, 'Intensive Care Units (ICUs) are intimidating places to visit. The aim of these pages is to provide information on a range of issues and questions often asked by ICU visitors.', 3),
(49, 3, 'Patient Treatment', '<p>\r\n	The purpose of these pages is to provide simple explanations of everyday treatment and tests which patients may experience in an ICU. They have been writtern by experienced critical care clinicians and are edited by the members of the&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/acknowledgements" mce_href="/acknowledgements">CWPWP</a>.</p>\r\n<p>\r\n	There is a long list of procedures which are carried out on intensive care patients. However it is beyond the capacity of this site to list and describe them all. The information contained on these pages is general in nature and therefore cannot reflect individual patient circumstances. If you are concerned or unsure about any procedures please ask the medical and nursing staff caring for&nbsp; the patient to explain them.</p>\r\n<p>\r\n	Please refer to the full&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/disclaimer" mce_href="/disclaimer">disclaimer</a></p>\r\n', 44, 0, 'The purpose of these pages is to provide simple explanations of everyday treatment and tests which patients may experience in an ICU.', 4),
(50, 3, 'ICU Equipment', '<p>\r\n	Equipment used in the ICU varies from the familiar, such as devices to measure blood pressure, to very specialized devices, such as bedside monitors or dialysis machines. These pages are designed to give a lay-persons description of each piece of equipment, the information provided includes an explanation of how it works, when and for how long it is generally used, and possible complications. These pages were authored by members of the&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/acknowledgements">Consumer Webpage Working Party (CWPWP)</a>&nbsp;which is comprised of senior nurisng and medical clinicians from NSW intensive and critical care units as well as consumer, allied health and legal representative. The majority of pages were first posted in June 2004.</p>\r\n', 44, 0, 'Equipment used in the ICU varies from the familiar, such as devices to measure blood pressure, to very specialized devices, such as bedside monitors or dialysis machines. These pages are designed to give a lay-persons description of each piece of equipment, the information provided includes an explanation of how it works, when and for how long it is generally used, and possible complications.', 5),
(51, 3, 'ICU FAQ', '<p>\r\n	<strong>Questions you should ask?&nbsp;</strong>This is a list of some of the questions you may need to ask when visiting an Intensive Care Unit. Please refer to the full&nbsp;<a href="http://intensivecare.hsnet.nsw.gov.au/disclaimer" target="_blank">disclaimer.</a></p>\r\n', 44, 0, 'Questions you should ask? This is a list of some of the questions you may need to ask when visiting an Intensive Care Unit.', 6),
(52, 3, 'ICU Locations', '<p>\r\n	General information &amp; locations of NSW ICUs</p>\r\n', 44, 0, 'General information & locations of NSW ICUs.', 0),
(54, 3, 'Guidelines Library', '<p>\r\n	The central purpose of these pages is to share clinical practice guidelines, facilitating a collaborative network across the Intensive Care units of NSW. You will find a wide range of clinical practice guidelines stored here. This includes policies, protoccols, procedures and guidelines from ICUs across NSW.</p>\r\n<p>\r\n	<strong>Please note that these documents cannot be housed at any other website without the express permission of the copyright owner. This includes online document sites.</strong></p>\r\n', 0, 0, 'The central purpose of these pages is to share clinical practice guidelines, facilitating a collaborative network across the Intensive Care units of NSW. You will find a wide range of clinical practice guidelines stored here. This includes policies, protoccols, procedures and guidelines from ICUs across NSW.', 0),
(55, 3, 'Education in ICU', '<p>\r\n	Ongoing professional development is integral to intensive care clinical practise.&nbsp;If there are any resources that you would like to see added to this page please feel free to email ICCMU and make a suggestion.</p>\r\n', 45, 0, 'Ongoing professional development is integral to intensive care clinical practise.', 2),
(56, 3, 'Education Resource Library', '<p>\r\n	The purpose of the Education Resource Library is to&nbsp;provide visitors with a broad range of educational material.</p>\r\n<ul>\r\n	<li>\r\n		The educational resources at this Website have been supplied in good faith on the understanding that all users will use them in an appropriate professional manner.</li>\r\n	<li>\r\n		The author and area health service of origin retains copyright.</li>\r\n	<li>\r\n		<strong>The package should be referenced</strong>&nbsp;according to a known method with the ICCMU website address and date accessed added to these details.</li>\r\n	<li>\r\n		However if you wish to use significant portions of any document you must contact the author and obtain permission. However you must&nbsp;<strong>acknowledge this fact in the front of your document.</strong></li>\r\n	<li>\r\n		Please remember that to not follow these steps is plagiarism and theft of intellectual property.</li>\r\n</ul>\r\n', 55, 0, 'The purpose of the Education Resource Library is to provide visitors with a broad range of educational material.', 0),
(57, 3, 'ICU Careers', '<h4>\r\n	Submit a Position for inclusion at this Site:&nbsp;</h4>\r\n<p>\r\n	Please email&nbsp;<a href="mailto:iccmu@wahs.nsw.gov.au" target="_blank">ICCMU</a>&nbsp;with job ad attached as word or pdf document. You will be contacted by email when details are lodged on this page.</p>\r\n', 45, 0, 'Employment Available in Critical Care Areas.', 3),
(58, 3, 'Quality & Safety Research', '<p>\r\n	Please note that any ICCMU documents cannot be housed at any other website without the express permission of the copyright owner. This includes online document sites.</p>\r\n', 45, 0, 'One of ICCMU''s main aims is to work with clinicians and key organisations to identify, address, and improve quality and safety issues in NSW ICUs. These webpages will highlight some of the current quality and safety (Q&S) issues that have been identified and are being addressed via various projects. ', 4),
(59, 3, 'Guidelines on the Web', '<p>\r\n	The links on this page will connect you to a number of online resources which have evidence based practice guidelines. ICCMU provides these links as a resource only not a recommendation. (please refer to the full<a href="http://intensivecare.hsnet.nsw.gov.au/disclaimer" target="_blank">disclaimer</a>)</p>\r\n', 54, 0, 'The links on this page will connect you to a number of online resources which have evidence based practice guidelines.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1336873881, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 1336484975, 0, 1),
(3, 'nathan', 'e99a18c428cb38d5f260853678922e03', 'nghiaqh@gmail.com', 'd47aeb895354314c9b9fc277f4fd7337', 1336272436, 1336484962, 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p3_media_meta`
--
ALTER TABLE `p3_media_meta`
  ADD CONSTRAINT `fk_p3_media_id` FOREIGN KEY (`id`) REFERENCES `p3_media` (`id`),
  ADD CONSTRAINT `fk_p3_media_meta_treeParent_id` FOREIGN KEY (`treeParent_id`) REFERENCES `p3_media_meta` (`id`);
