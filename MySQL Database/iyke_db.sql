-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 04, 2015 at 03:36 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `feedback`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `batch_master`
-- 

CREATE TABLE `batch_master` (
  `batch_id` int(20) NOT NULL auto_increment,
  `batch_name` varchar(255) NOT NULL,
  `feedback_no` int(2) NOT NULL,
  PRIMARY KEY  (`batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `batch_master`
-- 

INSERT INTO `batch_master` (`batch_id`, `batch_name`, `feedback_no`) VALUES 
(2, 'Aug08', 1),
(3, 'September, 2009', 2),
(4, 'Oct10', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `branch_master`
-- 

CREATE TABLE `branch_master` (
  `b_id` int(20) NOT NULL auto_increment,
  `b_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `branch_master`
-- 

INSERT INTO `branch_master` (`b_id`, `b_name`) VALUES 
(6, 'Maths & Computer Science'),
(7, 'Agric ENGR');

-- --------------------------------------------------------

-- 
-- Table structure for table `division_master`
-- 

CREATE TABLE `division_master` (
  `id` int(10) NOT NULL auto_increment,
  `division` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `division_master`
-- 

INSERT INTO `division_master` (`id`, `division`) VALUES 
(1, 'Class A'),
(2, 'Class B'),
(4, 'Class C');

-- --------------------------------------------------------

-- 
-- Table structure for table `faculty_master`
-- 

CREATE TABLE `faculty_master` (
  `f_id` int(20) NOT NULL auto_increment,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `b_id` int(20) NOT NULL,
  PRIMARY KEY  (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `faculty_master`
-- 

INSERT INTO `faculty_master` (`f_id`, `f_name`, `l_name`, `full_name`, `b_id`) VALUES 
(9, 'Ofor', 'Ifeanyi', 'Ofor Ifeanyi', 6),
(13, 'Chizzy', 'Ugboaja', 'Ugboaja Chizzy', 7);

-- --------------------------------------------------------

-- 
-- Table structure for table `feedback_master`
-- 

CREATE TABLE `feedback_master` (
  `feed_id` int(20) NOT NULL auto_increment,
  `roll_no` varchar(255) NOT NULL,
  `b_id` int(20) NOT NULL,
  `batch_id` int(20) NOT NULL,
  `feedback_no` int(20) NOT NULL,
  `sem_id` int(20) NOT NULL,
  `f_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `division_id` int(10) NOT NULL,
  `ans1` int(20) NOT NULL,
  `ans2` int(20) NOT NULL,
  `ans3` int(20) NOT NULL,
  `ans4` int(20) NOT NULL,
  `ans5` int(20) NOT NULL,
  `ans6` int(20) NOT NULL,
  `ans7` int(20) NOT NULL,
  `ans8` int(20) NOT NULL,
  `ans9` int(20) NOT NULL,
  `remark` text NOT NULL,
  `feed_date` date NOT NULL,
  PRIMARY KEY  (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

-- 
-- Dumping data for table `feedback_master`
-- 

INSERT INTO `feedback_master` (`feed_id`, `roll_no`, `b_id`, `batch_id`, `feedback_no`, `sem_id`, `f_id`, `sub_id`, `division_id`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans9`, `remark`, `feed_date`) VALUES 
(75, 'MOUAU/07/10127', 6, 3, 2, 1, 13, 0, 0, 3, 4, 1, 1, 1, 1, 1, 1, 1, '', '2014-12-21'),
(76, 'MOUAU/07/10127', 6, 3, 2, 1, 9, 0, 0, 5, 9, 1, 1, 1, 1, 1, 9, 1, '', '2014-12-21');

-- --------------------------------------------------------

-- 
-- Table structure for table `feedback_para`
-- 

CREATE TABLE `feedback_para` (
  `para_id` int(1) NOT NULL,
  `batch_id` int(10) NOT NULL,
  `b_id` int(10) NOT NULL,
  `sem_id` int(10) NOT NULL,
  `division_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `feedback_para`
-- 

INSERT INTO `feedback_para` (`para_id`, `batch_id`, `b_id`, `sem_id`, `division_id`) VALUES 
(1, 3, 6, 1, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `feedback_ques_master`
-- 

CREATE TABLE `feedback_ques_master` (
  `q_id` int(20) NOT NULL auto_increment,
  `ques` varchar(255) NOT NULL,
  `one_word` varchar(255) NOT NULL,
  PRIMARY KEY  (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `feedback_ques_master`
-- 

INSERT INTO `feedback_ques_master` (`q_id`, `ques`, `one_word`) VALUES 
(1, 'How Punctual is the Teacher in Class?', 'Punctual'),
(2, 'How well is the Teacher Prepared for Classes?', 'Well_prepared'),
(3, 'How good is the Teacher''s communication skills?', 'Communication'),
(4, 'How good was Teacher''s Teaching methodology?', 'Methodology '),
(5, 'To what extent does the teacher defined the objectives of each class?', 'Objectives'),
(6, 'How adequately cleared was my doubts after the teacher''s class?', 'Doubts'),
(7, 'How does the teacher treat me with respect and aided in my learning?', 'Respected'),
(8, 'How instrumental was the teacher in the value addition process?', 'Instrumental'),
(9, 'How Aged and Vibrant is the teacher?', 'Age');

-- --------------------------------------------------------

-- 
-- Table structure for table `members`
-- 

CREATE TABLE `members` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `members`
-- 

INSERT INTO `members` (`username`, `password`) VALUES 
('admin', 'iyke');

-- --------------------------------------------------------

-- 
-- Table structure for table `semester_master`
-- 

CREATE TABLE `semester_master` (
  `sem_id` int(20) NOT NULL auto_increment,
  `sem_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`sem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `semester_master`
-- 

INSERT INTO `semester_master` (`sem_id`, `sem_name`) VALUES 
(1, 'I'),
(2, 'II');

-- --------------------------------------------------------

-- 
-- Table structure for table `students`
-- 

CREATE TABLE `students` (
  `stu_id` int(11) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(150) NOT NULL,
  PRIMARY KEY  (`stu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `students`
-- 

INSERT INTO `students` (`stu_id`, `username`, `reg_no`, `password`, `department`) VALUES 
(3, 'legend', 'MOUAU/07/10127', 'legend', 'Maths & Computer Science');

-- --------------------------------------------------------

-- 
-- Table structure for table `subject_master`
-- 

CREATE TABLE `subject_master` (
  `sub_id` int(20) NOT NULL auto_increment,
  `sub_name` varchar(300) NOT NULL,
  `sem_id` int(20) NOT NULL,
  `f_id` int(20) NOT NULL,
  `batch_id` int(20) NOT NULL,
  `division_id` int(10) NOT NULL,
  PRIMARY KEY  (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `subject_master`
-- 

INSERT INTO `subject_master` (`sub_id`, `sub_name`, `sem_id`, `f_id`, `batch_id`, `division_id`) VALUES 
(11, 'Computer Preparation', 1, 9, 2, 1);
