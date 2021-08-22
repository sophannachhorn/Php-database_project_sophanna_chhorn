-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 06:03 PM
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
-- Database: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `name`) VALUES
(1, 'coffee'),
(2, 'farming'),
(3, 'gear');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `userID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `title`, `description`, `image`, `date`, `userID`, `categoryID`) VALUES
(6, 'Zen and the art of natural coffee for best espresso', 'A coffee break in the United States and elsewhere is a short mid-morning rest period granted to employees in business and industry. An afternoon coffee break, or afternoon tea, often occurs as well. The coffee break originated in the late 19th century in Stoughton, Wisconsin, with the wives of Norwegian immigrants. The city celebrates this every year with the Stoughton.', 'ultimate-guide-coffee-gear.jpg', '2021-08-20', 1, 3),
(8, 'Zen And The  of natural coffee for best espresso', 'A coffee break in the United States and elsewhere is a short mid-morning rest period granted to employees in business and industry. An afternoon coffee break, or afternoon tea, often occurs as well. The coffee break originated in the late 19th century in Stoughton, Wisconsin, with the wives of Norwegian immigrants. The city celebrates this every year with the Stoughton.', 'coffee.jpg', '2021-08-21', 1, 1),
(9, 'Harry Porter', 'The term subsequently became popular through a Pan-American Coffee Bureau ad campaign of 1952 which urged consumers, “Give yourself a Coffee-Break – and Get What Coffee Gives to You” John B. Watson, a behavioral psychologist who worked with Maxwell House later in his career, helped to popularize coffee breaks within the American culture.\r\nCoffee cups and happy spirits\r\nCoffee breaks usually last from 10 to 20 minutes and frequently occur at the end of the first third of the work shift.', 'Drinks_Coffee_Chocolate_488059.jpg', '2021-08-22', 1, 1),
(10, 'Single serve espresso revolution industry change.', 'In some companies and some civil service, the coffee break may be observed formally at a set hour. In some places, a cart with hot and cold beverages and cakes, breads and pastries arrives at the same time morning and afternoon, an employer may contract with an outside caterer for daily service, or coffee breaks may take place away from the actual work-area in a designated cafeteria or tea room.\r\n\r\nMore generally, the phrase “coffee break” has also come to denote any break from work. Coffee was initially used for spiritual reasons. At least 1,100 years ago, traders brought coffee across the Red Sea.\r\n\r\nAt first, the Arabians made wine from the pulp of the fermented coffee berries. This beverage was known as qishr (kisher in modern usage) and was used during religious ceremonies.\r\n\r\nCoffee drinking was prohibited by jurists and scholars meeting in Mecca in 1511, but the subject of whether it was intoxicating was hotly debated over the next 30 years until the ban was finally overturned in the mid-16th century. Use in religious rites among the Sufi branch of Islam led to coffee’s being put on trial in Mecca: it was accused of being a heretical substance, and its production and consumption were briefly repressed.', '12f9c8c26289e14f9df66416b42c0215-700.jpg', '2021-08-21', 1, 1),
(11, 'Coffee is the world’s second most valuable commodity', 'Whether the coffee seed was a legume and therefore prohibited for Passover. Upon petition from coffeemaker Maxwell House, the coffee seed was classified in 1923 as a berry rather than a seed by orthodox Jewish rabbi Hersch Kohn, and therefore kosher for Passover.', 'La Gabriela Plantation (2).jpg', '2021-08-21', 1, 2),
(12, 'The world consumes close to 2.25B cups of coffee daily', 'Coffee, regarded as a Muslim drink, was prohibited by Ethiopian Orthodox Christians until as late as 1889; it is now considered a national drink of Ethiopia for people of all faiths. Its early association in Europe with rebellious political activities led to Charles II outlawing coffeehouses from January 1676. Frederick the Great banned it in Prussia in 1777 for nationalistic and economic reasons.', 'Drinks_Coffee_Chocolate_488059.jpg', '2021-08-21', 1, 1),
(13, 'Try out these non toxic,', 'A coffee break in the United States and elsewhere is a short mid-morning rest period granted to employees in business and industry. An afternoon coffee break, or afternoon tea, often occurs as well.\r\n\r\nThe coffee break originated in the late 19th century in Stoughton, Wisconsin, with the wives of Norwegian immigrants. The city celebrates this every year with the Stoughton Coffee Break Festival. In 1951, Time noted tha', 'M21Junior_special_offer_600x600@2x.jpg', '2021-08-22', 1, 3),
(14, 'The pact to eradicate coffee farms slave labor', 'A coffee break in the United States and elsewhere is a short mid-morning rest period granted to employees in business and industry. An afternoon coffee break, or afternoon tea, often occurs as well.\r\n\r\nThe coffee break originated in the late 19th century in Stoughton, Wisconsin, with the wives of Norwegian immigrants. The city celebrates this every year with the Stoughton Coffee Break Festival. In 1951, Time noted that', 'Costa-Rica-Prints-18.jpg', '2021-08-21', 1, 2),
(15, 'how to clean your coffee grinder properly', 'A coffee break in the United States and elsewhere is a short mid-morning rest period granted to employees in business and industry. An afternoon coffee break, or afternoon tea, often occurs as well.\r\nThe coffee break originated in the late 19th century in Stoughton, Wisconsin, with the wives of Norwegian immigrants. The city celebrates this every year with the Stoughton Coffee Break Festival. In 1951, Time noted that', '30-696x453[1].jpg', '2021-08-22', 1, 3),
(16, 'Try out these non toxic, plastic free coffee makers', 'The term subsequently became popular through a Pan-American Coffee Bureau ad campaign of 1952 which urged consumers, “Give yourself a Coffee-Break – and Get What Coffee Gives to You” John B. Watson, a behavioral psychologist who worked with Maxwell House later in his career, helped to popularize coffee breaks within the American culture.', '28-696x453[1].jpg', '2021-08-22', 1, 3),
(19, 'Coffee is the world’s second most valuable commodity', 'sddhfhgdyrdcb', 'coffee.jpg', '2021-08-22', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `profile` varchar(150) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `profile`, `email`) VALUES
(1, 'sophanna', '$2y$10$sobAGb2Eg38OB/4TemMsseirLZEIdzBHjrp4tbGn2zSnzQ7r.BNga', 'https://demo.tagdiv.com/newspaper_blog_coffee/wp-content/uploads/2018/01/29-696x453.jpg', 'sophannachhorn@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
