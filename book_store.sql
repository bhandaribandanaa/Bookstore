-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 08:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'manita', '21232f297a57a5a743894a0e4a801fc3');

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
(7, 'Book'),
(8, 'Textbook'),
(9, 'Others'),
(10, 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `book_detail`
--

CREATE TABLE `book_detail` (
  `book_id` int(11) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `subcat_id` varchar(255) NOT NULL,
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
(10, '9781338109061', 'Fantastic Beasts', '4', '', 'J.K Rowling', 'Arthur a Levine', '247', '2016-02-10 00:00:00', '', 'download_(2).jpg', 500),
(11, '9781338099133', 'Harry Potter and the Cursed Child', '6', '', 'Jack Thorne , John Tiffany , Rownling J.K.', 'Hachette', '290', '2017-10-13 00:00:00', 'The Eighth Story. Nineteen Years Later.  Based on an original new story by J.K. Rowling, Jack Thorne and John Tiffany, a new play by Jack Thorne, Harry Potter and the Cursed Child is the eighth story in the Harry Potter series and the first official Harry Potter story to be presented on stage. The play will receive its world premiere in London’s West End on July 30, 2016.  It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children.  While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.', 'download_(3)1.jpg', 1000),
(12, ' 9780812995824', 'Rising Strong', '7', '', 'Brene Brown', 'Random House', '199', '2017-10-12 00:00:00', '////A powerful new book from Brené Brown, the international bestselling author of Daring Greatly, on how to have the courage to embrace fear, failure and vulnerability to create a life you love.  The physics of vulnerability is simple: If we are brave enough often enough, we will fall. This is a book about what it takes to get back up and how owning our stories of disappointment, failure, and heartbreak gives us the power to write a daring new ending. Struggle can be our greatest call to courage and rising strong, our clearest path to deeper meaning, wisdom and hope', 'download_(4)1.jpg', 800),
(13, ' 9781447263227', 'Fangirl', '8', '', 'Rainbow Rowell', 'Pan Macmillan', '300', '2017-10-11 00:00:00', 'The Simon Snow novels have taken the world by storm. Teenagers the world over have collected memorabilia and more, immortalizing their hero and his adventures in their hearts. Cath and her twin sister are no different, they have loved the Simon Snow books their entire lives. When they go to college, Wren slowly drifts away from the fandom and from Cath. However, Cath cannot let her affections for the fandom disappear, and she has to come to terms with it or her life will be a mix of escapism and reality, with no satisfaction in either medium. Populated with all the characters anyone who has been through college will recognize, this book tells Cath''s story and how she finds internet fandom through fan-fiction and how she finds, among other things, love.', 'download_(5)1.jpg', 700),
(14, '9781594202056', 'The Hindus', '9', '', 'Wendy Doniger', 'Penguin Books', '200', '2017-09-20 00:00:00', '', 'download_(6).jpg', 260),
(15, '9781444707861', 'IT', '10', '', 'Stephen King', 'Hodder & Stoughton', '300', '2016-12-02 00:00:00', '', 'download_(7).jpg', 700),
(16, ' 9788184006094', 'Adultery', '11', '', 'Paulo Coelho', 'Random House', '250', '2017-10-10 00:00:00', '', 'download_(8).jpg', 350),
(20, '8129115301', '2 States', '7', '', 'Chetan Bhagat', 'Hachette Book Publishing India', '32', '2014-06-10 00:00:00', '', 'uxkuR8Dg0dISYLVvuiBW.jpg', 252),
(24, '2343', '4353', '7', '', '4535', '435435', 'ewre', '2017-11-25 00:00:00', 'dfjgk', '8UXYFaAdmDsjKYl1IRp0.jpg', 354),
(25, ' 0143330829', 'PUFFIN LIVES: JAWAHARLAL NEHRU ', '7', '5', 'ADITI DE', 'Penguin Books India', '12', '2014-11-01 00:00:00', 'THE JEWEL OF INDIA - ADITI DE', 'vvHejjWSJMQx5CyOb0ME.jpg', 245),
(26, '8181320204', '101 GREAT ARTIST WHO SHAPED THE WORLD', '7', '5', 'B.ADYANAND NATH', 'Aitbs Publishers, India', '3', '2012-08-02 00:00:00', '101 GREAT ARTIST WHO SHAPED THE WORLD - B.ADYANAND NATH', 'sK2iZ8Z.jpg', 216),
(27, '9380032692', '54 TOOLS & TECHNIQUES FOR BUSINESS EXCELLENCE ', '7', '7', 'MIKE WASH', 'Westland', '1', '2011-11-17 00:00:00', '54 TOOLS & TECHNIQUES FOR BUSINESS EXCELLENCE - MIKE WASH ', 'CPTym68JEhzBLQZV8Ioj.jpg', 360),
(28, '1420068091', 'MASTERING THE RULES OF COMPETITIVE STRATEGY', '7', '7', 'NORTON PALEY', 'Auerbach Publications', '4', '2013-04-01 00:00:00', 'MASTERING THE RULES OF COMPETITIVE STRATEGY: A RESOURCE GUIDE FOR MANAGERS 01 EDITION - NORTON PALEY', 'SZvrJsSqF74okK42it5k.jpg', 857),
(29, '1419702238', 'CABIN FEVER (DIARY OF A WIMPY KID #6)', '7', '8', 'JEFF KINNEY', 'Puffin Books', '5', '1999-06-07 00:00:00', 'Greg Heffley is in big trouble. School property has been damaged, and Greg is the prime suspect. But the crazy thing is, he’s innocent. Or at least sort of.  The authorities are closing in, but when a surprise blizzard hits, the Heffley family is trapped indoors. Greg knows that when the snow melts he’s going to have to face the music, but could any punishment be worse than being stuck inside with your family for the holidays?', 'mDdEMuQOcrlAdILRVC8z.jpg', 432),
(30, '979823500E', 'ALCHI KUKUR', '7', '8', ' PRAKASH RANJIT', 'Amuse Communication Pvt. Ltd', '2', '2010-11-19 00:00:00', 'ALCHI KUKUR - PRAKASH RANJIT', 'jPF4TeUxDbWY44QHzATq.jpg', 115),
(31, '0399184511', 'THE MOTHERS', '7', '9', 'BRIT BENNETT ', 'Riverhead Books (Hardcover)', '4', '2016-11-12 00:00:00', 'Set within a contemporary black community in Southern California, Brit Bennett''s mesmerizing first novel is an emotionally perceptive story about community, love, and ambition. It begins with a secret.   All good secrets have a taste before you tell them, and if we''d taken a moment to swish this one around our mouths, we might have noticed the sourness of an unripe secret, plucked too soon, stolen and passed around before its season.  It is the last season of high school life for Nadia Turner, a rebellious, grief-stricken, seventeen-year-old beauty. Mourning her own mother''s recent suicide, she takes up with the local pastor''s son. Luke Sheppard is twenty-one, a former football star whose injury has reduced him to waiting tables at a diner. They are young; it''s not serious. But the pregnancy that results from this teen romance--and the subsequent cover-up--will have an impact that goes far beyond their youth. As Nadia hides her secret from everyone, including Aubrey, her God-fearing best friend, the years move quickly. Soon, Nadia, Luke, and Aubrey are full-fledged adults and still living in debt to the choices they made that one seaside summer, caught in a love triangle they must carefully maneuver, and dogged by the constant, nagging question: What if they had chosen differently? The possibilities of the road not taken are a relentless haunt.   In entrancing, lyrical prose, The Mothers asks whether a -what if- can be more powerful than an experience itself. If, as time passes, we must always live in servitude to the decisions of our younger selves, to the communities that have parented us, and to the decisions we make that shape our lives forever.', 'sK2iZ8Z1.jpg', 216),
(33, '0143423029', 'THIS LOVE THAT FEELS RIGHT', '8', '9', 'RAVINDER SINGH', 'Penguin Books India', '11', '2017-11-25 00:00:00', 'Share Life would have been easier had it been possible for us to plan falling in love more importantly avoid falling in love . . . Love is not for you she told herself. Inside just like any girl she desired to be loved. She had accepted her life the way it was till one day love showed up unannounced uninvited That s the thing with love. It doesn''t take permission. It s in its very nature to gatecrash into our lives. Standing face-to-face with love she finds herself asking Is this love right? The answer is not simple. It never was . . . This intense love story will shake every belief you''ve ever had about love.', 'KWpf0kA1Qxa2jhsqz1JY3.jpg', 123);

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

--
-- Dumping data for table `book_order`
--

INSERT INTO `book_order` (`or_id`, `book_id`, `quantity`, `total_amount`) VALUES
(1, 9, 1, 250),
(2, 9, 1, 250),
(3, 9, 1, 250),
(4, 9, 1, 250),
(5, 9, 1, 250),
(6, 10, 1, 500),
(7, 10, 1, 500),
(8, 11, 1, 1000),
(9, 11, 5, 5000),
(10, 33, 1, 123),
(11, 10, 1, 500),
(12, 11, 4, 4000),
(13, 12, 1, 800);

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
(7, 'Book', 'Bussiness&Economics', 7),
(8, 'Book', 'Children', 7),
(9, 'Book', 'Fiction', 7),
(17, 'Textbook', 'Accounting', 8),
(19, 'Textbook', 'Chemistry', 8),
(20, 'Textbook', 'Computer', 8),
(22, 'Others', 'Managa/comics', 9),
(23, 'Others', 'Cook Books', 9),
(27, 'Textbook', 'non-gothic', 8),
(28, 'Fiction', 'Romance', 10);

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
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `address`, `phone`, `username`, `password`, `image`, `email`, `status`) VALUES
(3, 'bandana', 'ktm', 984657865, 'bandana', 'abcde', '13177688_1302038213158039_1986197575712214146_n.jpg', '', 0),
(11, 'dsjflkj', 'kjdflj', 34, 'kfjdklj', 'fkdlj', 'Sadhguru.jpg', '', 0),
(12, 'sajja', 'djslkfjaskl', 3894098, 'sdklfjs', 'fjdslkgkj', '10401968_1027802160578108_5521130095765778067_n.jpg', '', 0),
(14, 'bandana', 'ktm', 87546, 'bandana', '81dc9bdb52d04dc20036dbd8313ed055', 'uP7j3T72WpFhXI0OG8zX1.jpg', '', 0),
(15, 'aarya', 'ktm', 856478546, 'aarya', '202cb962ac59075b964b07152d234b70', 'uP7j3T72WpFhXI0OG8zX2.jpg', '', 0),
(16, 'mihika123', 'ktm', 48364573, 'mihika', '827ccb0eea8a706c4c34a16891f84e7b', '28815371.jpg', '', 0),
(18, 'sankita', 'brt', 721398, 'sanku', 'bb200e3beb6b5ff235fa39e76b4bac5f', '050-sampling-theory-6-72813.jpg', '', 0),
(19, 'bandana', 'ktm', 493058495, 'bandanaa', '827ccb0eea8a706c4c34a16891f84e7b', 'viber_image1.jpg', '', 0),
(20, 'dfjdh', 'sddlkgjdlfk', 12, 'abcde', 'kfgkdfj', 'viber_image12.jpg', '', 0),
(21, 'Anubhav Pokhrel', 'Kathmandu', 2147483647, 'anubhav01', '827ccb0eea8a706c4c34a16891f84e7b', '1_18_98_92_6_18_14.png', '', 0);

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
-- Table structure for table `review_rate`
--

CREATE TABLE `review_rate` (
  `re_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_rate_cus`
--

CREATE TABLE `review_rate_cus` (
  `rrc_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `re_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_book`
--

CREATE TABLE `wishlist_book` (
  `wb_id` int(11) NOT NULL,
  `w_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_order`
--
ALTER TABLE `book_order`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `book_subcategory`
--
ALTER TABLE `book_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`cusor_id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_rate`
--
ALTER TABLE `review_rate`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `review_rate_cus`
--
ALTER TABLE `review_rate_cus`
  ADD PRIMARY KEY (`rrc_id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`s_id`);

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
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `wishlist_book`
--
ALTER TABLE `wishlist_book`
  ADD PRIMARY KEY (`wb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `book_detail`
--
ALTER TABLE `book_detail`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `book_order`
--
ALTER TABLE `book_order`
  MODIFY `or_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `book_subcategory`
--
ALTER TABLE `book_subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `cusor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `review_rate`
--
ALTER TABLE `review_rate`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review_rate_cus`
--
ALTER TABLE `review_rate_cus`
  MODIFY `rrc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wishlist_book`
--
ALTER TABLE `wishlist_book`
  MODIFY `wb_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
