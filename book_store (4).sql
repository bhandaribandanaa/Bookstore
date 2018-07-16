-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 03:25 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(6, 'interface', 'admin'),
(7, 'bookstore', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`cat_id`, `cat_title`) VALUES
(1, 'Fiction'),
(2, 'Non-Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `book_detail`
--

CREATE TABLE `book_detail` (
  `book_id` int(11) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_publisher` varchar(255) NOT NULL,
  `book_stock` varchar(255) NOT NULL,
  `publication_date` datetime NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_detail`
--

INSERT INTO `book_detail` (`book_id`, `isbn`, `book_title`, `cat_id`, `subcat_id`, `book_author`, `book_publisher`, `book_stock`, `publication_date`, `description`, `image`, `price`) VALUES
(2, '0099477467', 'BRAVE NEW WORLD', 1, 1, 'ALDOUS HUXLEY', 'Vintage Books USA', '240', '2018-07-04 00:00:00', 'Far in the future, the World Controllers have created the ideal society. Through clever use of genetic engineering, brainwashing and recreational sex and drugs all its members are happy consumers. Bernard Marx seems alone in feeling discontent. Harbouring an unnatural desire for solitude, and a perverse distaste for the pleasures of compulsory promiscuity, Bernard has an ill-defined longing to break free. A visit to one of the few remaining Savage Reservations where the old, imperfect life still continues, may be the cure for his distress-Huxley\'s ingenious fantasy of the future sheds a blazing light on the present and is considered to be his most enduring masterpiece.', 'JTbor6A6JKlbnk1AhAvs3.jpg', 576),
(3, '0735224293', 'Little Fires Everywhere', 1, 3, 'Celeste Ng', 'Penguin Press', '134', '2017-09-17 00:00:00', 'In Shaker Heights, a placid, progressive suburb of Cleveland, everything is meticulously planned – from the layout of the winding roads, to the colours of the houses, to the successful lives its residents will go on to lead. And no one embodies this spirit more than Elena Richardson, whose guiding principle is playing by the rules.  Enter Mia Warren – an enigmatic artist and single mother – who arrives in this idyllic bubble with her teenage daughter Pearl, and rents a house from the Richardsons. Soon Mia and Pearl become more than just tenants: all four Richardson children are drawn to the alluring mother-daughter pair. But Mia carries with her a mysterious past, and a disregard for the rules that threatens to upend this carefully ordered community.  When the Richardsons\' friends attempt to adopt a Chinese-American baby, a custody battle erupts that dramatically divides the town and puts Mia and Mrs. Richardson on opposing sides. Suspicious of Mia and her motives, Mrs. Richardson becomes determined to uncover the secrets in Mia\'s past. But her obsession will come at unexpected and devastating costs to her own family – and Mia\'s.  Little Fires Everywhere explores the weight of long-held secrets and the ferocious pull of motherhood-and the danger of believing that planning and following the rules can avert disaster, or heartbreak.', '342732361.jpg', 600),
(4, '0385542232', 'Rich People Problems', 1, 1, 'Kevin Kwan', 'Doubleday', '140', '2017-05-23 00:00:00', 'When Nicholas Young hears that his grandmother, Su Yi, is on her deathbed, he rushes to be by her bedside--but he\'s not alone. It seems the entire Shang-Young clan has convened from all corners of the globe, ostensibly to care for their matriarch but truly to stake claim on the massive fortune that Su Yi controls.   With each family member secretly fantasizing about getting the keys to Tyersall Park--a trophy estate on 64 prime acres in the heart of Singapore--the place becomes a hotbed of intrigue and Nicholas finds himself blocked from entering the premises.   As relatives claw over heirlooms, Astrid Leong is at the center of her own storm, desperately in love with her old sweetheart Charlie Wu, but tormented by his ex-wife--a woman hell bent on destroying Astrid\'s reputation and relationship. Meanwhile Kitty Pong, married to billionaire Jack Bing, finds a formidable opponent in his fashionista daughter, Colette.', '29864343.jpg', 540),
(5, '1449486797', 'The Sun and Her Flowers', 2, 4, 'Rupi Kaur', 'Andrews McMeel Publishing', '23', '2017-11-03 00:00:00', 'From Rupi Kaur, the #1 New York Times bestselling author of milk and honey, comes her long-awaited second collection of poetry. A vibrant and transcendent journey about growth and healing. Ancestry and honoring one’s roots. Expatriation and rising up to find a home within yourself.  Divided into five chapters and illustrated by Kaur, the sun and her flowers is a journey of wilting, falling, rooting, rising, and blooming. A celebration of love in all its forms.', '35606560.jpg', 365),
(6, '1423160932', 'The Ship of the Dead (Magnus Chase and the Gods of Asgard #3)', 1, 5, 'Rick Riordan', 'Disney-Hyperion', '108', '2017-10-03 00:00:00', 'Magnus Chase, a once-homeless teen, is a resident of the Hotel Valhalla and one of Odin\'s chosen warriors. As the son of Frey, the god of summer, fertility, and health, Magnus isn\'t naturally inclined to fighting. But he has strong and steadfast friends, including Hearthstone the elf, Blitzen the dwarf, and Samirah the Valkyrie, and together they have achieved brave deeds, such as defeating Fenris Wolf and battling giants for Thor\'s hammer, Mjolnir. Now Magnus and his crew must sail to the farthest borders of Jotunheim and Niflheim in pursuit of Asgard\'s greatest threat. Will they succeed in their perilous journey, or is Ragnarok lurking on the horizon?', '28006120.jpg', 470),
(7, '1408857901', 'A Court of Wings and Ruin (A Court of Thorns and Roses #3)', 1, 5, 'Sarah J. Maas', 'Bloomsbury Childrens Books', '34', '2017-05-02 00:00:00', 'Looming war threatens all Feyre holds dear in the third volume of the #1 New York Times bestselling A Court of Thorns and Roses series.  Feyre has returned to the Spring Court, determined to gather information on Tamlin\'s manoeuvrings and the invading king threatening to bring Prythian to its knees. But to do so she must play a deadly game of deceit – and one slip may spell doom not only for Feyre, but for her world as well.  As war bears down upon them all, Feyre must decide who to trust amongst the dazzling and lethal High Lords – and hunt for allies in unexpected places.   In this thrilling third book in the #1 New York Times bestselling series from Sarah J. Maas, the earth will be painted red as mighty armies grapple for power over the one thing that could destroy them all.', '23766634.jpg', 360);

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

CREATE TABLE `book_order` (
  `or_id` int(25) NOT NULL,
  `book_id` int(25) NOT NULL,
  `quantity` int(25) NOT NULL,
  `total_amount` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_subcategory`
--

CREATE TABLE `book_subcategory` (
  `subcat_id` int(11) NOT NULL,
  `category` varchar(11) NOT NULL,
  `subcat_title` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_subcategory`
--

INSERT INTO `book_subcategory` (`subcat_id`, `category`, `subcat_title`, `cat_id`) VALUES
(1, 'Fiction', 'Classic', 1),
(3, 'Fiction', 'Contemporary', 1),
(4, 'Non-Fiction', 'Poetry', 2),
(5, 'Fiction', 'Fantasy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `resetpassword` tinyint(1) NOT NULL,
  `token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `address`, `phone`, `username`, `password`, `image`, `email`, `status`, `resetpassword`, `token`) VALUES
(13, 'Arya', 'Kathmandu', 2147483647, 'aarya', '827ccb0eea8a706c4c34a16891f84e7b', 'eli3.jpg', 'aarya.kshetri@apexcollege.edu.np', 0, 0, 68604),
(14, 'Anubhav Pokhrel', 'Dhumbarahi', 2147483647, 'anubhav01', '827ccb0eea8a706c4c34a16891f84e7b', 'user_male2-512.png', 'anubhav.pokhrel8@gmail.com', 0, 0, 30209);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `cusor_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `or_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `email` text NOT NULL,
  `facebook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `name`, `description`, `image`, `email`, `facebook`) VALUES
(14, 'Sankita sigdel', 'She is good girl.', '19554914_1785533214804995_6329163443408517860_n.jpg', 'sankitasigdel@gmail.com', 'www.facebook.com/sankitasigdel'),
(28, 'bandana bhandari', 'bandana', 'bandana.jpg', 'bandana.bhandari@gmail.com', 'bandana'),
(29, 'aarya kshetri', 'aarya', 'arya.jpg', 'arya.kshetri@apexcollege.edu.np', 'aarya'),
(30, 'sajja shakya', 'sajja', 'sajja1.jpg', 'sajja.shakya@apexcollege.edu.np', 'sajja'),
(31, 'mihika shrestha', 'mihika', 'mihika.jpg', 'mihika.shrestha@apexcollege.edu.np', 'mihika'),
(32, 'manita shrestha', 'manita', 'manita.jpg', 'manita.shrestha@gmail.com', 'manita');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `title` text NOT NULL,
  `comment` longtext NOT NULL,
  `book_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `rate`, `title`, `comment`, `book_id`, `customer_id`) VALUES
(7, 4, 'This book is cool', 'smcbasmcb,masncacsn,msanc,manc,masncmcn', 2, 13),
(8, 5, 'Ok', 'camcbzxmcbaiuheiownckdnc,amc,manciwuhqiuescnjkwnjcnejcenekwjnwuec', 2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `s_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_text` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_text`, `image`) VALUES
(3, 'mmdnfksjdf', 'viber_image1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`w_id`, `cus_id`, `status`, `book_id`) VALUES
(10, 14, 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `book_detail`
--
ALTER TABLE `book_detail`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `subcat_id` (`subcat_id`);

--
-- Indexes for table `book_order`
--
ALTER TABLE `book_order`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book_subcategory`
--
ALTER TABLE `book_subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`cusor_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `or_id` (`or_id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_detail`
--
ALTER TABLE `book_detail`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book_order`
--
ALTER TABLE `book_order`
  MODIFY `or_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_subcategory`
--
ALTER TABLE `book_subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `cusor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_detail`
--
ALTER TABLE `book_detail`
  ADD CONSTRAINT `book_detail_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `book_category` (`cat_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `book_detail_ibfk_2` FOREIGN KEY (`subcat_id`) REFERENCES `book_subcategory` (`subcat_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `book_order`
--
ALTER TABLE `book_order`
  ADD CONSTRAINT `book_order_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_detail` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_subcategory`
--
ALTER TABLE `book_subcategory`
  ADD CONSTRAINT `book_subcategory_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `book_category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_order_ibfk_2` FOREIGN KEY (`or_id`) REFERENCES `book_order` (`or_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `share`
--
ALTER TABLE `share`
  ADD CONSTRAINT `share_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_detail` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `share_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book_detail` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
