-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 07:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinelibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` float NOT NULL,
  `recommended` tinyint(1) NOT NULL,
  `Category` varchar(3) NOT NULL,
  `Image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `Name`, `Description`, `Price`, `recommended`, `Category`, `Image`) VALUES
(1, 'Hands-On', 'Through a series of recent breakthroughs, deep learning has boosted the entire field of machine learning. Now, even programmers who know close to nothing about this technology can use simple, efficient tools to implement programs capable of learning from data. This practical book shows you how.', 55.77, 1, 'CS', 'https://images-na.ssl-images-amazon.com/images/I/51%2BkYprYK1L._SX379_BO1,204,203,200_.jpg'),
(4, 'The Innovators', 'Following his blockbuster biography of Steve Jobs, Walter Isaacson’s New York Times bestselling and critically acclaimed The Innovators is a “riveting, propulsive, and at times deeply moving” (The Atlantic) story of the people who created the computer and the Internet.\r\n\r\nWhat were the talents that allowed certain inventors and entrepreneurs to turn their visionary ideas into disruptive realities? What led to their creative leaps? Why did some succeed and others fail?', 120.27, 1, 'IT', 'https://images-na.ssl-images-amazon.com/images/I/41Q12OkmVrL._SX328_BO1,204,203,200_.jpg'),
(6, 'Computing', 'The history of computing could be told as the story of hardware and software, or the story of the Internet, or the story of “smart” hand-held devices, with subplots involving IBM, Microsoft, Apple, Facebook, and Twitter. In this concise and accessible account of the invention and development of digital technology, computer historian Paul Ceruzzi offers a broader and more useful perspective. He identifies four major threads that run throughout all of computing\'s technological development: digitization―the coding of information, computation, and control in binary form, ones and zeros; the convergence of multiple streams of techniques, devices, and machines, yielding more than the sum of their parts; the steady advance of electronic technology, as characterized famously by “Moore\'s Law”; and the human-machine interface.', 12.25, 1, 'IS', 'https://images-na.ssl-images-amazon.com/images/I/313Bu4aPfqL._SX361_BO1,204,203,200_.jpg'),
(10, 'Machine Learning', 'This book provides a great practical guide to get started and execute on ML within a few days without necessarily knowing much about ML apriori. The first five chapters are enough to get you started a', 45, 1, 'CS', 'https://images-na.ssl-images-amazon.com/images/I/41hnD5LLz5L._SX403_BO1,204,203,200_.jpg'),
(11, 'Probability and statistics', 'helps students understand fundamental concepts of Probability and Statistics, general methods of stochastic modeling, simulation, queuing, and statistical data analysis; make optimal decisions under uncertainty; model and evaluate computer systems; and prepare for advanced probability-based courses. Written in a lively style with simple language and now including R as well as MATLAB, this classroom-tested book can be used for one- or two-semester courses.', 56, 1, 'CS', '\r\nhttps://2u.pw/65yAN'),
(12, 'Computer graphics', 'Table of contents : Introduction  , Points and lines ,  2D - transformations , Windowing and clipping , 3D - object representations , 3D - geometric transformations , Visible surface detection, computer animation', 165, 0, 'CS', 'https://2u.pw/4I2SJ'),
(13, 'Digital computer basics', 'From Pixels to Programmable Graphics Hardware explores all major areas of modern computer graphics, starting from basic mathematics and algorithms and concluding with OpenGL and real-time graphics. It gives students a firm foundation in today’s high-performance graphics Up-to-Date Techniques, Algorithms, and API the book includes mathematical background on vectors and matrices as well as quaternions, splines, curves, and surfaces. It presents geometrical algorithms in 2D and 3D for spatial data structures using large data sets. Although the book is mainly based on OpenGL 3.3, it also covers tessellation in OpenGL 4.0, contains an overview of OpenGL ES 2.0, and discusses the new WebGL, which allows students to use OpenGL with shaders directly in their browser', 50, 0, 'IT', 'https://2u.pw/JtWit'),
(14, 'The interface ', 'This book covers a broad area of STEM (science, technology, engineering, and mathematics) disciplines, and is written for those interested in biophysics  biomechanics. It includes viscoelasticity, chemical kinetics, system analysis, muscle biology/biophysics and mechanics, analog and digital electronics, methods for interfacing experimental systems to a computer, and the mathematics needed for all of these. Only the bare essentials are given and many accessory elements are removed, so that it is easier to understand the concepts', 64, 0, 'IT ', 'https://2u.pw/y7TH6'),
(15, 'History of Modern Computing', 'This engaging history covers modern computing from the development of the first electronic digital computer through the dot-com crash. The author concentrates on five key moments of transition: the transformation of the computer in the late 1940s from a specialized scientific instrument to a commercial product; the emergence of small systems in the late 1960s; the beginning of personal computing in the 1970s; the spread of networking after 1985; and, in a chapter written for this edition, the period 1995-2001. The new material focuses on the Microsoft antitrust suit, the rise and fall of the dot-coms, and the advent of open source software, particularly Linux. Within the chronological narrative, the book traces several overlapping threads: the evolution of the computer\'s internal design; the effect of economic trends and the Cold War; the long-term role of IBM as a player and as a target for upstart entrepreneurs; the growth of software from a hidden element to a major character in the story of computing; and the recurring issue of the place of information and computing in a democratic society. The focus is on the United States (though Europe and Japan enter the story at crucial points), on computing per se rather than on applications such as artificial intelligence, and on systems that were sold commercially and installed in quantities.', 66, 1, 'IT', 'https://images-na.ssl-images-amazon.com/images/I/51BNdEgb1gL._SX331_BO1,204,203,200_.jpg'),
(17, 'Drug Information Handbook for Dentistry,', 'The Lexicomp Drug Information Handbook for Dentistry has been helping dental professionals enhance patient care for 25 years! Information is presented in an easy-to-use, two-column format, with medications alphabetically indexed by brand and generic names, as well as by index terms. Within individual drug monographs, dental-specific fields are highlighted in red, a timesaving feature within an information-rich resource. Drug content is complemented by special sections dedicated to medically compromised patients, specific oral conditions, and sample prescriptions.', 177, 0, 'IT', 'https://www.jarir.com/cdn-cgi/image/fit=contain,width=400,height=400/https://www.jarir.com/media//catalog/product/4/8/488008.jpg?1'),
(29, 'Study and Revision Guide‎', 'Providing guidance that helps students practice and troubleshoot their exam technique,these books send them into their exam with the confidence to aim for the best grades.\r\n\r\n- Enables students to avoid common misconceptions and mistakes by highlighting them throughout\r\n- Builds students\' skills constructing and writing answers as they progress through a range of practice questions\r\n- Allows students to mark their own responses and easily identify areas for improvement using the answers in the back of the book\r\n- Helps students target their revision and focus on important concepts and skills with key objectives at the beginning of every chapter\r\n- Ensures that students maximise their time in the exam by including examiner\'s tops and suggestions on how to approach the questions', 100, 0, 'CS', 'https://images-na.ssl-images-amazon.com/images/I/51eLSkRWRTL._SX351_BO1,204,203,200_.jpg'),
(34, 'Computer Science Principles', 'Computer science is the world\'s fastest growing field of study, and this growth is showing no signs of slowing down. As a new field, computer science can seem intimidating, but it should not be scary to learn or difficult to understand. If you have ever turned on a phone or surfed the Internet then you have used a computer and should have a basic understanding of what happens when you click the mouse or touch the screen—and how fast it happens! Computer Science Principles introduces the creative side of computing.  ', 45, 0, 'CS', 'https://images-na.ssl-images-amazon.com/images/I/41t0MdyBySL._SX331_BO1,204,203,200_.jpg'),
(61, 'Human + Machine', 'Look around you. Artificial intelligence is no longer just a futuristic notion. It\'s here right now--in software that senses what we need, supply chains that think in real time, and robots that respond to changes in their environment. Twenty-first-century pioneer companies are already using AI to innovate and grow fast. The bottom line is this: Businesses that understand how to harness AI can surge ahead. Those that neglect it will fall behind.', 16.49, 0, 'CS', 'https://images-na.ssl-images-amazon.com/images/I/41z%2B0h-eJBL._SX333_BO1,204,203,200_.jpg'),
(81, 'Computer science ', 'his introductory text includes an expanded treatment of collisions, agent based models, and insight into underlying system dynamics.  Lab assignments are accessible and carefully sequenced for maximum impact. Students are able to write their own code in building solutions and Python is used to minimize any language barrier for beginners Problems involving visualization are emphasized throughout with interactive graphics, image files, and plots of generated data.  This text aims to establish a core learning experience around which any number of other learning objectives could be included.  ', 323, 0, 'CS', 'https://images-na.ssl-images-amazon.com/images/I/41ikYS8yHwL._SX269_BO1,204,203,200_.jpg'),
(97, 'Through a series of recent breakthroughs', 'Through a series of recent breakthroughs, deep learning has boosted the entire field of machine learning. Now, even programmers who know close to nothing about this technology can use simple, efficient tools to implement programs capable of learning from data. This practical book shows you how.', 55, 0, 'CS', 'https://images-na.ssl-images-amazon.com/images/I/51%2BkYprYK1L._SX379_BO1,204,203,200_.jpg'),
(107, 'Architecture', 'provides IT professionals and students with the necessary understanding of computer hardware. It addresses the ongoing issues related to computer hardware and discusses the solutions supplied by the industry the book describes trends in computing solutions that led to the current available infrastructures, tracing the initial need for computers to recent concepts such as the Internet of Things. It covers computers’ data representation, explains how computer architecture and its underlying meaning changed over the years, and examines the implementations and performance enhancements of the central processing unit (CPU). It then discusses the organization, hierarchy, and performance considerations of computer memory as applied by the operating system and illustrates how cache memory significantly improves performance.', 76, 0, 'CS', 'https://2u.pw/Qjpiu\r\n\r\n'),
(109, 'Accounting Information Systems', 'For undergraduate and graduate courses in AIS\r\n \r\nThe market-leading text with the most comprehensive, flexible coverage of AIS available.\r\n\r\n This market-leading text delivers the most comprehensive and flexible coverage of the our major approaches to teaching AIS, while allowing instructors the flexibility to reorder chapters and focus the material to suit their individual course needs. This new edition has been updated to cover all of the most recent developments in AIS and to show AIS has changed the roles of an accountant.', 67, 0, 'IS', 'https://2u.pw/ocL5c'),
(110, 'Management Information Systems', 'In its Fourteenth Edition , Management Information Systems: Managing the Digital Firm continues to define courses in Management Information Systems. Designed for business school students, the text provides insight into how today\'s businesses leverage information technologies and systems to achieve corporate objectives.\r\n\r\n Providing comprehensive and integrative coverage of essential new technologies and information system applications, as well their impact on business models and managerial decision-making, Management Information Systems increases student engagement and enhances learning through vivid examples. In this new edition, students will find the most up-to-date, relevant information about information systems used by today’s businesses–capturing students’ attention no matter their industry or vertical of interest. With the help of this text, students will build skills sought after in today’s workplace. Later on, they will be able to understand, participate in, and eventually lead management discussions and drive decisions about their firm’s information systems.', 189, 0, 'IS', 'https://2u.pw/6ksen'),
(112, 'Advances in Neural Information Processing ', 'November 28-December 1, 1994, Denver, Colorado NIPS is the longest running annual meeting devoted to Neural Information Processing Systems. Drawing on such disparate domains as neuroscience, cognitive science, computer science, statistics, mathematics, engineering, and theoretical physics, the papers collected in the proceedings of NIPS7 reflect the enduring scientific and practical merit of a broad-based, inclusive approach to neural information processing. The primary focus remains the study of a wide variety of learning algorithms and architectures, for both supervised and unsupervised learning. The 139 contributions are divided into eight parts: Cognitive Science, Neuroscience, Learning Theory, Algorithms and Architectures, Implementations, Speech and Signal Processing, Visual Processing, and Applications.', 88, 0, 'IS', 'https://2u.pw/5tl7b'),
(121, 'Applied Artificial Intelligenc', 'A practical guide for business leaders who aim to leverage machine intelligence. Helps business executives drive innovation by combining data, technology, design and people to solve real problems.', 44, 0, 'IS', 'https://images-na.ssl-images-amazon.com/images/I/4148sSoxr5L._SX322_BO1,204,203,200_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cardNumber` varchar(16) NOT NULL,
  `recommendations` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `username`, `email`, `password`, `city`, `cardNumber`, `recommendations`) VALUES
('Admin', 'admin', 'admin@gmail.com', '12345678', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
