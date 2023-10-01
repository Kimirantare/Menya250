-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 01 Octobre 2023 à 19:16
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `menya`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `names`, `username`, `password`) VALUES
(1, 'Manzi Yes', 'Manzi', 'qwerty'),
(2, 'Kirenga Smith', 'Kirenga', 'qwerty'),
(3, 'Hope Uwera', 'hope', 'qwerty'),
(4, 'Sue Iriho', 'Sue', 'qwerty'),
(5, 'Dusenge', 'dusenge', 'qwerty'),
(6, 'Gervais', 'gervais', 'qwerty');

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `classID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `class`
--

INSERT INTO `class` (`id`, `name`, `classID`) VALUES
(1, 'PRIMARY TWO', 'P2'),
(2, 'PRIMARY THREE', 'P3'),
(3, 'PRIMARY FIVE', 'P5'),
(4, 'PRIMARY SIX', 'P6'),
(5, 'PRIMARY ONE', 'P1');

-- --------------------------------------------------------

--
-- Structure de la table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lessonID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lesson`
--

INSERT INTO `lesson` (`id`, `name`, `lessonID`) VALUES
(1, 'Social Studies', 'SRS'),
(2, 'Science', 'SCI'),
(3, 'English', 'ENG'),
(4, 'Kinyarwanda', 'KINY'),
(5, 'Mathematics', 'MATH'),
(6, 'Sports', 'EPS');

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

CREATE TABLE `manager` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `manager`
--

INSERT INTO `manager` (`id`, `username`, `password`, `name`) VALUES
(1, 'manager', 'manager1', 'Head Teacher');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `Names`, `Email`, `Message`, `Feedback`) VALUES
(1, 'Dusenge Jean', 'dusengejeandelacroix@gmail.com', 'I like this for real!', 'on'),
(2, 'Dusenge Jean', 'dusengejeandelacroix@gmail.com', 'I like this for real!', 'on'),
(3, 'Manzi Yves', 'manziyp@gmail.com', 'Here we go!', 'I like this platform');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` int(255) NOT NULL,
  `lesson` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`id`, `lesson`, `title`, `class`, `description`, `content`, `images`, `links`, `owner`, `time`) VALUES
(1, 'Social Studies', 'test', 'P3', 'test', 'test', 'AS IS.JPG', 'www.test.com', 'UWIMANA Martha', '2023-08-29'),
(2, 'Social Studies', 'test', 'P3', 'test', 'test', 'AS IS.JPG', 'www.test.com', 'UWIMANA Martha', '2023-08-29'),
(3, 'Social Studies', 'test', 'P3', 'test', 'test', 'TO BE.JPG', 'www.test.com', 'UWIMANA Martha', '2023-08-29'),
(4, 'Social Studies', 'test', 'P3', 'test', 'test', '04.png', 'www.test.com', 'UWIMANA Martha', '2023-10-01');

-- --------------------------------------------------------

--
-- Structure de la table `stream`
--

CREATE TABLE `stream` (
  `id` int(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `stream`
--

INSERT INTO `stream` (`id`, `level`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `students`
--

INSERT INTO `students` (`id`, `names`, `username`, `email`, `phone`, `gender`, `class`, `stream`, `password`) VALUES
(1, 'Manzi Yves', 'manzi', 'manzi@gmail.com', 780950654, 'M', 'P3', 'A', 'qwerty'),
(2, 'Imfura Maurice', 'maurice', 'kagabo@gmail.com', 780950654, 'M', 'P3', 'A', 'qwerty1'),
(3, 'Hope Uwera', 'hope', 'hopewera@gmail.com', 780950654, 'F', 'P3', 'A', 'hope1'),
(7, 'Hirwa Chriss', 'chriss', 'chrishirwa@yahoo.com', 784526459, 'M', 'P5', 'B', 'qwerty'),
(10, 'test1', 'tes', 'manziyp@gmail.com', 780950654, 'M', 'P3', 'B', 'qwerty'),
(11, 'test2', 'tess', 'marieag@gmail.com', 782315467, 'F', 'P3', 'B', 'qwerty'),
(12, 'tes3', 'tesss', 'hope1@hotmail.com', 784546545, 'F', 'P3', 'B', 'qwerty'),
(13, 'tes4', 'tessss', 'chrishirwa@yahoo.com', 784526459, 'M', 'P3', 'B', 'qwerty'),
(14, 'test1', 'aaa', 'manziyp@gmail.com', 780950654, 'M', 'P6', 'A', 'qwerty'),
(15, 'test2', 'aaaa', 'marieag@gmail.com', 782315467, 'F', 'P6', 'A', 'qwerty'),
(16, 'tes3', 'aaaaa', 'hope1@hotmail.com', 784546545, 'F', 'P6', 'A', 'qwerty'),
(17, 'tes4', 'aaaab', 'chrishirwa@yahoo.com', 784526459, 'M', 'P6', 'A', 'qwerty'),
(18, 'kazungu', 'uwuw', 'kaz@gmail.com', 780950654, 'M', 'P2', 'A', 'qwerty'),
(19, 'kigali', 'uwuwee', 'kig@gmail.com', 78605412, 'F', 'P2', 'B', 'qwerty'),
(20, 'kazungu', 'hhdh', 'kaz@gmail.com', 780950654, 'M', 'P5', 'A', 'qwerty'),
(21, 'kigali', 'sss', 'kig@gmail.com', 78605412, 'F', 'P5', 'A', 'qwerty'),
(22, 'kazungu', 'ahhah', 'kaz@gmail.com', 780950654, 'M', 'P3', 'A', 'qwerty'),
(23, 'Karemera', 'gg', 'kaz@gmail.com', 780950655, 'F', 'P3', 'A', 'qwerty'),
(24, 'Tereza', 'nn', 'kaz@gmail.com', 780950656, 'M', 'P3', 'A', 'qwerty'),
(25, 'yuhu', 'nnn', 'kaz@gmail.com', 780950657, 'F', 'P3', 'A', 'qwerty'),
(26, 'yego', 'yego', 'yego@gmail.com', 780950654, 'M', 'P2', '', 'yego1'),
(27, 'oya', 'oya', 'oya@gmail.com', 780950654, 'F', 'P2', '', 'oya11'),
(28, 'ocyee', 'ocyee', 'yego@gmail.com', 780950654, 'M', 'P5', 'B', 'ocyee1'),
(29, 'sawa', 'sawa', 'oya@gmail.com', 780950654, 'F', 'P5', 'B', 'sawa1');

-- --------------------------------------------------------

--
-- Structure de la table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `lesson` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `teachers`
--

INSERT INTO `teachers` (`id`, `names`, `username`, `email`, `phone`, `gender`, `lesson`, `class`, `stream`, `password`) VALUES
(1, 'UWIMANA Martha', 'martha', 'uwimanamartha@gmail.com', 780950654, 'M', 'Social Studies', 'P3', 'A', 'qwerty'),
(2, 'Ishimwe Aime Marie', 'ishimwe', 'ishimwe@gmail.com', 780950654, 'F', 'Science', 'P5', 'B', 'ishimwe1'),
(3, 'Dusenge jean', 'jean', 'arnoldjames@yahoo.com', 780950654, 'M', 'Science', 'P3', 'A', 'qwerty');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `stream`
--
ALTER TABLE `stream`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
