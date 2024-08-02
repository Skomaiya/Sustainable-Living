-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 01:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `sustainable_living_db`
--

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
    `id` bigint(20) NOT NULL,
    `user_name` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS survey_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_id INT NOT NULL,
    user_id INT NOT NULL,
    q1 INT NOT NULL,
    q2 INT NOT NULL,
    q3 TEXT NOT NULL,
    q4 TEXT NOT NULL,
    q5 VARCHAR(50) NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--
-- Dumping data for table `user`
--

INSERT INTO
    `user` (
        `id`,
        `user_name`,
        `password`,
        `email`,
        `date`
    )
VALUES (
        1,
        'Abubakar',
        '$2y$10$qTZMcHxLdMYu3awKjut4wOPiXv3HU2EVPZDGZAnl8ChK2eyPJa/MS',
        'a.ahmed1@alustudent.com',
        '2024-07-28 22:49:28'
    ),
    (
        2,
        'Abubakar',
        '$2y$10$AVcI1SDeRs7EROBdDCQhwuanmH0HJCK90EsaU5rUPHfvyFFFe13lq',
        'a.ahmed1@alustudent.com',
        '2024-07-28 22:55:24'
    ),
    (
        3,
        'Samuel',
        '$2y$10$VheY.UgjOOXP5dTafBbct.qxvPNqLOkqFkjztWml892aNIJvs4qtm',
        'samuelkomaiya@gmail.com',
        '2024-07-28 23:04:23'
    ),
    (
        4,
        'Samuel',
        '$2y$10$eoPxYdm5KYoXQFNREGRdg.h0n3JHq4Wp/Ee67qC2Yy1JTA2zC4Tqi',
        'samuelkomaiya@gmail.com',
        '2024-07-28 23:04:25'
    ),
    (
        5,
        'Samuel',
        '$2y$10$kyFlOGbiJD.ZaJmHwFrQ/.7mEeGDsloZTxeIXFhJklpHKdmBCqLay',
        'samuelkomaiya@gmail.com',
        '2024-07-28 23:04:26'
    ),
    (
        6,
        'Samuel',
        '$2y$10$29aX9RXVLKXVpaSFrz9muuWMYF8eAb0Hks1NeHERyEBPspq/w38vm',
        'samuelkomaiya@gmail.com',
        '2024-07-28 23:04:35'
    ),
    (
        7,
        'Samuel',
        '$2y$10$KDb/8CTHB7B8Eei6vW79se6f/6/Fgl/CWSOgLRADrmgQK06SnNkzS',
        'samuelkomaiya@gmail.com',
        '2024-07-28 23:04:35'
    ),
    (
        8,
        'Samuel',
        '$2y$10$4re1EHglgwOIFHWgYeG1Wu26Q6RqAs2O9toW.ey9bDwjksh/OBLQO',
        'samuelkomaiya@gmail.com',
        '2024-07-28 23:04:35'
    ),
    (
        9,
        'Samuel',
        '$2y$10$2020cWmeZXjC4sGS8SQEFOu/bVd2P3HYVeBaVIjMLEI.YMGf1ek/m',
        'samuelkomaiya@gmail.com',
        '2024-07-28 23:08:27'
    ),
    (
        10,
        'Samuel',
        '$2y$10$csllq6ivfMMsw7HhRG1F1eUlDnqHMct.YvC2usCuas06qImvJ43kK',
        'samuelkomaiya@gmail.com',
        '2024-07-28 23:08:27'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 11;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;