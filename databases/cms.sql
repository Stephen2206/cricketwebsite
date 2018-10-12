-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2018 at 11:10 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `batsman`
--

DROP TABLE IF EXISTS `batsman`;
CREATE TABLE IF NOT EXISTS `batsman` (
  `player_idbt` int(11) NOT NULL,
  `Balls played` int(11) DEFAULT NULL,
  `Runs scored` int(11) DEFAULT NULL,
  `fours` int(11) DEFAULT NULL,
  `sixes` int(11) DEFAULT NULL,
  PRIMARY KEY (`player_idbt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bowler`
--

DROP TABLE IF EXISTS `bowler`;
CREATE TABLE IF NOT EXISTS `bowler` (
  `player_idbw` int(11) NOT NULL,
  `Overs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `maidens` int(11) DEFAULT NULL,
  `runs conceded` int(11) DEFAULT NULL,
  PRIMARY KEY (`player_idbw`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(100) NOT NULL,
  `DATE` date NOT NULL,
  `Venue` varchar(100) NOT NULL,
  `Runs in 1st innings` int(11) DEFAULT NULL,
  `Runs in 2nd innings` int(11) DEFAULT NULL,
  `Wickets in 1st innings` int(11) DEFAULT NULL,
  `Wickets in 2nd innings` int(11) DEFAULT NULL,
  `Overs  in 1st innings` int(11) DEFAULT NULL,
  `Overs in 1st innings` int(11) DEFAULT NULL,
  `best_player` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`match_id`),
  KEY `best_player` (`best_player`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `player_id` int(100) NOT NULL,
  `fk_team_Id` int(11) DEFAULT NULL,
  `Player name` varchar(100) NOT NULL,
  `Runs` int(11) NOT NULL,
  `debut` date NOT NULL,
  `wicktets` int(11) NOT NULL,
  `Date of birth` date NOT NULL,
  PRIMARY KEY (`player_id`),
  KEY `fk_team_Id` (`fk_team_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `match_st` int(11) NOT NULL,
  `Winning_team_id` int(11) DEFAULT NULL,
  `losing_team_id` int(11) DEFAULT NULL,
  `Won by no of runs/wickets` int(11) DEFAULT NULL,
  `Lost by no of runs/wickets` int(11) DEFAULT NULL,
  KEY `Winning_team_id` (`Winning_team_id`),
  KEY `losing_team_id` (`losing_team_id`),
  KEY `match_st` (`match_st`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `team_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `match_id` int(11) NOT NULL,
  PRIMARY KEY (`team_id`),
  UNIQUE KEY `team_id` (`team_id`,`match_id`),
  KEY `match_id` (`match_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
