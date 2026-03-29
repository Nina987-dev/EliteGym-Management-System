-- Script de création de la base de données EliteGym
-- Auteur : Celina CHEBALLAH
-- Date : Mars 2026

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Création de la base de données
CREATE DATABASE IF NOT EXISTS loginsystem;
USE loginsystem;

CREATE TABLE member (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `trainer` varchar(60) NOT NULL,
  PRIMARY KEY (`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO member (`fname`, `lname`, `email`, `contact`, `trainer`) VALUES
('Celina', 'CHEBALLAH', 'celina@gym-elite.fr', '122', '101'),
('Thomas', 'Durand', 't.durand@mail.com', '201', '101'),
('Sara', 'Louni', 'sara.l@outlook.com', '125', '102'),
('Lucas', 'Moreau', 'lucas.m@gmail.com', '202', '103'),
('Emma', 'Bernard', 'emma.b@yahoo.fr', '203', '104'),
('Adam', 'Petit', 'adam.p@gmail.com', '204', '102');

CREATE TABLE logintb (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO logintb (`username`, `password`) VALUES
('admin', 'pass123');

CREATE TABLE Package (
  `Package_id` varchar(40) NOT NULL,
  `Package_name` varchar(40) NOT NULL,
  `Amount` int(20) NOT NULL,
  PRIMARY KEY (`Package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO Package (`Package_id`, `Package_name`, `Amount`) VALUES
('121', 'Abonnement Platinium', 800),
('122', 'Abonnement VIP', 1500),
('123', 'Abonnement Gold', 1000);

CREATE TABLE Payment (
  `Payment_id` int(10) NOT NULL,
  `Amount` int(20) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  PRIMARY KEY (`Payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO Payment (`Payment_id`, `Amount`, `customer_id`, `customer_name`, `payment_type`) VALUES
(301, 1500, '122', 'Celina', 'Card'),
(302, 800, '201', 'Thomas', 'Cash'),
(303, 1000, '125', 'Sara', 'Cheque');

CREATE TABLE Trainer (
  `Trainer_id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL, -- Changé en VARCHAR pour les numéros de téléphone
  PRIMARY KEY (`Trainer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO Trainer (`Trainer_id`, `Name`, `phone`) VALUES
(101, 'Marc Lefebvre', '0601020304'),
(102, 'Julie Martin', '0711121314'),
(103, 'Kevin Roux', '0621222324'),
(104, 'Sophie Petit', '0631323334');

COMMIT;