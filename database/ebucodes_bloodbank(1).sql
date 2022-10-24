-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2022 at 11:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebucodes_bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `address`, `state`, `lga`, `email`, `phone`, `created_at`) VALUES
(1, 'High Rocks Laboratory', '38, Afariogun street Oshodi', 'Lagos', 'Oshodi-Isolo', 'None', '08032343130', '2022-07-03 23:58:13'),
(2, 'Dialyzer Medical Center', '60, Arowojobe Street, Oshodi', 'Lagos', 'Oshodi-Isolo', 'None', '08108935658 , 08023046830', '2022-07-04 00:00:36'),
(3, 'Chevron Medical Hospital', '23/25, Soluyi Estate, Gbagada', 'Lagos', 'Kosofe', 'None', '012772222, 08033285222', '2022-07-04 00:01:26'),
(4, 'St. Dan’s Blood Bank', '14, Oduduwa Street, Car Wash B/Stop, Oworoshoki.', 'Lagos', 'Kosofe', 'None', '08023231111', '2022-07-04 00:03:45'),
(5, 'Rehoboth  Diagnostic Laboratory', '65 Ikosi Road Ketu', 'Lagos', 'Kosofe', 'None', '08023468304', '2022-07-04 00:04:24'),
(6, 'Peak Diagnostic Service', '9, Church Street, Gbagada.', 'Lagos', 'Kosofe', 'None', '08033311033', '2022-07-04 00:05:03'),
(7, 'Excel-T Diagnostic Service', '7, Ijagbemi Street, Popoola, Bariga', 'Lagos', 'Bariga', 'None', '08028329238 ; 08055110528', '2022-07-04 00:17:51'),
(8, 'Hoare’s Memorial Methodist Clinic.', '321, Herbert Macaulay way, Sabo, Yaba, Lagos', 'Lagos', 'Yaba', 'None', '08136706828; 013424707', '2022-07-04 00:19:00'),
(9, 'Praise Medical Diagnostics Services', '109, Isolo Road, Mushin, Lagos', 'Lagos', 'Mushin', 'None', '08062487104', '2022-07-04 00:20:04'),
(10, 'Alberto Medical Laboratory Ltd', '30/34, Ishaga Road, Surulere, Mushin', 'Lagos', 'Mushin', 'None', '08022240932 ;  08074142274', '2022-07-04 00:20:47'),
(11, 'CrestMark Diagnostic LTD', '15, Oyegbola Street, off Kayode Street, Onipanu, Lagos.', 'Lagos', 'Mushin', 'None', '07031321491', '2022-07-04 00:21:24'),
(12, 'Ati-Gab Medical Laboratory', '122, Mushin Road, Opp Isolo General Hospital. Isolo', 'Lagos', 'Oshodi-Isolo', 'None', '08033459235', '2022-07-04 00:23:41'),
(13, 'Gantez Medical Laboratory', '32, Okota Road, Opp Gideon B/Stop, Isolo', 'Lagos', 'Oshodi-Isolo', 'None', '08023027408', '2022-07-04 00:25:43'),
(14, 'Krista Medical Laboratories', '128, Mushin Road,Isolo', 'Lagos', 'Oshodi-Isolo', 'None', '08037234497', '2022-07-04 00:26:27'),
(15, 'Othniel Consortium Diagnostic Ltd', '30, Enitan Str. Adetola B/S, Aguda, Surulere', 'Lagos', 'Surulere', 'None', '08038404270', '2022-07-04 17:09:57'),
(16, 'Baston Laboratory', '93 Ojuelegba Road, Surulere, Lagos', 'Lagos', 'Surulere', 'None', '08034088568', '2022-07-04 17:30:32'),
(17, 'Havanna Hospital', '115 Akerele Extension, Surulere', 'Lagos', 'Surulere', 'None', '08027272727', '2022-07-04 17:38:28'),
(18, 'Q-Med Diagnostic Center', '3 Adeniran Ogunsanya Street Surulere', 'Lagos', 'Surulere', 'None', '08033002946', '2022-07-04 17:39:21'),
(19, 'Curelink Diagnostics', '42, Coker Road, Coker Village, Orile Iganmu', 'Lagos', 'Surulere', 'None', '08033224438 ; 08033259244', '2022-07-04 17:40:28'),
(20, 'Ideal Solace Diagnostic Centre', '1 Adeyemi Street off Abu street Orile Iganmu', 'Lagos', 'Surulere', 'None', '08033486395', '2022-07-04 17:41:16'),
(21, 'D-Precise Medical Laboratories', '70, Adetola Street, Aguda, Surulere', 'Lagos', 'Surulere', 'None', '08033475240', '2022-07-04 17:42:06'),
(22, 'Bimade Diagnostic Services', '23/25 Ijora Causeway  Ijora', 'Lagos', 'Apapa', 'None', '08037144281, 08033770797', '2022-07-04 17:42:53'),
(23, 'Lagoon Hospital', '8, Marine Road, Apapa', 'Lagos', 'Apapa', 'None', '08068384870, 08033248067', '2022-07-04 18:43:55'),
(24, 'Cardinal Point Medical Lab Centre', '4, Wilmer Crescent, opp. Abayomi Plaza\r\nOlodi-Apapa, Lagos', 'Lagos', 'Apapa', 'None', '08024679881', '2022-07-04 18:44:47'),
(25, 'St. Nicholas Hospital', '57, Campbell Street, Lagos Island', 'Lagos', 'Lagos Island', 'None', '08035251295', '2022-07-04 18:45:26'),
(27, 'Alliance Hospital Abuja', 'No 1 - 5 Malumfashi Close, Off Emeka Anyaoku Street, Area 11,Garki', 'Abuja', 'Municipal Area Council', 'info@alliancehospitalabj.com', '08097142623; 08123865741', '2022-07-07 20:07:37'),
(28, 'NHIS ', 'Plot 181 Gado Nasko Road, Opposite Abattoir Kubwa', 'Abuja', 'Bwari', 'N/A', 'N/A', '2022-07-07 20:10:56'),
(30, 'Federal Teaching Hospital ', '265 Independence Avenue, Abuja', 'Abuja', 'Municipal Area Council', 'N/A', 'N/A', '2022-07-07 20:14:52'),
(31, 'Garki General Hospital', 'Tafawa Balewa way Area 3, Garki, Abuja', 'Abuja', 'Municipal Area Council', 'N/A', 'N/A', '2022-07-07 20:16:54'),
(32, 'Federal Medical Centre, Umuahia, Abia State, Nigeria', 'Opposite Guaranty Trust Bank Plc, Umuahia, Nigeria', 'Abia', 'Umuahia North', 'fmcumuahia@fmc-umuahia.com.ng', '0803 808 9468', '2022-07-07 20:20:08'),
(33, 'Abia State University Teaching Hospital (ABSUTH)', 'Umueze Rd, 453115, Aba', 'Abia', 'Aba South', 'N/A', '0706 616 6857; 0706 616 6857', '2022-07-07 20:22:51'),
(34, 'Federal Medical Centre Yola.', 'Lamido Zubairu Road, P.M.B. 2017, Yola Bye-Pass, Yola-Town', 'Adamawa', 'Yola South', ' info@fmcyola.gov.ng', '08035618600; 08036255557', '2022-07-07 20:27:14'),
(35, 'University of Uyo Teaching Hospital', 'University Of Uyo Teaching Hospital, Abak Road, Uyo\r\n[ before Ekom Iman junction ], Uyo', 'AkwaIbom', 'Uyo', 'info@uuthuyo.net', '08060645028; 08033086930;  08060111771', '2022-07-07 20:29:40'),
(36, 'Nnamdi Azikiwe Teaching Hospital', '2WG7+4VC College of Health Science, 434116, Nnewi, \r\nNnewi Onitsha Old Road,Anambra State, Nigeria', 'Anambra', 'Nnewi South', 'info@nauthnnewi.org.ng', '0908 389 5285; 0803 087 5716', '2022-07-07 20:34:24'),
(37, 'General Hospital Onitsha', 'Awka Rd, GRA, Onitsha, Onitsha North, Anambra, Nigeria.', 'Anambra', 'Onitsha North', 'None', '0816 908 6619', '2022-07-07 20:37:03'),
(38, 'Chukwuemeka Odumegwu Ojukwu University Teaching Hospital', 'Amaku , Awka, Nigeria', 'Anambra', 'Awka South', 'https://www.coouth.com', '0817 770 1456', '2022-07-07 20:39:25'),
(39, 'Abubakar Tafawa-Balewa University Teaching Hospital (ABUTH)', 'Hospital Road Off Yandoka Street, Hospital Road, Bauchi', 'Bauchi', 'Bauchi', 'info@atbuth.ng', 'N/A', '2022-07-07 20:42:10'),
(40, ' Bauchi State Specialist Hospital', '5, Hospital Road, Shadawanka, Bauchi, Bauchi, Nigeria', 'Bauchi', 'Damban', 'N/A', '08075671223', '2022-07-07 20:43:42'),
(41, 'Federal Medical Centre Azare', 'No. 5 Sule Katagum Road P.M.B 005 Azare, Bauchi State - Nigeria', 'Bauchi', 'Bauchi', 'fmcazare2000@gmail.com; fmcazare2000@yahoo.co.uk', '08036161249', '2022-07-07 20:46:19'),
(42, 'Federal Medical Centre, Yenagoa. Bayelsa State. Nigeria', 'Hospital Road, Ovom, Yenagoa, Bayelsa State, Nigeria', 'Bayelsa', 'Yenagoa', 'info@ardfmcyenagoa.com ', '08068518108', '2022-07-07 20:48:54'),
(43, ' Benue State University Teaching Hospital', 'Kilometer 3, Makurdi-Gboko Road, Makurdi, Benue State Nigeria', 'Benue', 'Makurdi', 'http://www.bsuth.org.ng/', '08134889931; 08066841838', '2022-07-07 20:51:46'),
(44, ' University of Maiduguri Teaching Hospital', 'Bama Road, Maiduguri, Borno State Nigeria', 'Borno', 'Maiduguri', 'N/A', '+234 76 232375', '2022-07-07 20:53:58'),
(45, 'National Blood Transfusion Service (NBTS)', 'No.2 Edibe Street, Calabar', 'Cross River', 'Calabar', 'N/A', 'N/A', '2022-07-07 20:58:51'),
(46, 'University of Calabar Teaching Hospital', 'University of Calabar Teaching Hospital, University of Calabar 540281, Calabar', 'Cross River', 'Calabar', 'info@ucthcalabar.gov.ng', '08066722346; 08024310194; 08025966923; 08021236801', '2022-07-07 21:02:26'),
(47, 'Delta State University Teaching Hospital', 'Otefe Road, off Benin-Warri Express Way,\r\nOghara, Delta State\r\n\r\nP.O.Box: 07 Delta State', 'Delta', 'Ethiope West', 'info@delsuth.com.ng', '+2348167482415', '2022-07-07 21:06:41'),
(48, 'Federal Medical Center, Asaba', 'Nnebisi Road, Isieke, Asaba, Delta, Nigeria. ', 'Delta', 'Asaba', 'info@fmcasaba.org ', '0817 177 7722; 0805 555 4759; 0701 113 3354;  0903 332 6334', '2022-07-07 21:12:15'),
(49, ' Central Hospital - Warri', '1 Mabiaku road Npa, Warri, Delta state', 'Delta', 'Warri South', 'N/A', 'N/A', '2022-07-07 21:15:37'),
(50, 'Central Hospital - Agbor', 'Old Lagos-Asaba express Road, Ika Agbor, Delta State Nigeria', 'Delta', 'Ika South', 'N/A', '0803 475 1413', '2022-07-07 21:18:06'),
(51, 'State Secretariat Clinic Asaba', 'Sumit Jesus Saves, Asaba, Nigeria', 'Delta', 'Asaba', 'N/A', 'N/A', '2022-07-07 21:20:08'),
(52, 'National Blood Transfusion Service (NBTS)', 'Ogbe Nursing Home, Chief Osawaru Igbinedion Rd. G.R.A, Benin City', 'Edo', 'Benin', 'nbtsbenin@yahoo.com', '0807 900 8443', '2022-07-07 21:22:12'),
(53, 'Igbinedion University Teaching Hospital, Nigeria', 'P.O Box 11, Ovia North East L.G.A., Edo State, Nigeria. Okada, Nigeria', 'Edo', 'Ovia North-East', 'iuthokada@gmail.com', '0806 300 7065', '2022-07-07 21:24:20'),
(54, 'University of Benin Teaching Hospital', 'PMB1111, Benin Lagos Express Road, Bénin, Nigeria', 'Edo', 'Benin', 'info@ubth.org', '+234 814 777 2992', '2022-07-07 21:26:41'),
(55, 'National Blood Transfusion Service (NBTS)', 'Oke-lla Road Hospital Bus Stop Fajuyi park Ado Ekiti', 'Ekiti', 'Ado Ekiti', 'N/A', 'N/A', '2022-07-07 21:29:20'),
(56, 'University of Nigeria Teaching Hospital', 'Port Harcourt - Enugu Expy, 402109, Ozalla', 'Enugu', 'Nsukka', 'info@unth.edu.ng; cmdunth2019@gmail.com', '08033458010', '2022-07-07 21:35:16'),
(57, 'Enugu State University Teaching Hospital ', 'ESUT TEACHING HOSPITAL PARKLANE G.R.A ENUGU ,\r\nP.M.B 1030 ', 'Enugu', 'Enugu South', 'info@esuth.org.ng ', '+234 7031573484;  +234 8030739206; +234 9013008199', '2022-07-07 21:37:19'),
(58, 'Bishop Shanahan Hospital - Nsukka', 'Nsukka, 9 Enugu Road, Enugu', 'Enugu', 'Nsukka', 'N/A', 'N/A', '2022-07-07 21:39:39'),
(59, 'National Blood Transfusion Service (NBTS)', '5, Ridgeway, G.R.A, Enugu', 'Enugu', 'Enugu South', 'N/A', 'N/A', '2022-07-07 21:40:34'),
(60, 'Gombe State University Teaching Hospital', 'Ashaka Bajago Rd, 760253, Gombe', 'Gombe', 'Gombe', 'N/A', 'N/A', '2022-07-07 21:44:04'),
(61, 'National Blood Transfusion Service (NBTS)', 'Federal Medical Center Owerri Orlu Road', 'Imo', 'Owerri West', 'N/A', 'N/A', '2022-07-07 21:44:54'),
(62, 'Imo State University Teaching Hospital', '234 Orlu, Nigeria', 'Imo', 'Orlu', 'N/A', 'N/A', '2022-07-07 21:46:25'),
(63, 'National Blood Transfusion Service (NBTS)', 'NBTS Kaduna Opposite Ranchers Bees Stadium by Independence Way, Kaduna', 'Kaduna', 'Kaduna North', 'N/A', 'N/A', '2022-07-07 21:50:05'),
(64, 'General Hospital, Kaduna', 'Zaria/Funtua Express Way Gusau, Zaria', 'Kaduna', 'Zaria', 'N/A', 'N/A', '2022-07-07 21:51:18'),
(65, 'Ahmadu Bello University Teaching Hospital Zaria', 'Sokoto Road, Samaru-Zaria, Kaduna', 'Kaduna', 'Zaria', 'N/A', 'N/A', '2022-07-07 22:04:54'),
(66, 'Barau Dikko Specialist Hospital, Kaduna', 'Lafia Road, City Center', 'Kaduna', 'Kaduna South', 'N/A', 'N/A', '2022-07-07 22:05:31'),
(67, 'Aminu Kano University Teaching Hospital, Kano', 'Ungwa Uku, Kano', 'Kano', 'Kano Municipal', 'N/A', 'N/A', '2022-07-07 22:06:15'),
(68, 'National Blood Transfusion Service (NBTS)', 'HSDP Building, General Hospital Kastina', 'Katsina', 'Katsina', 'N/A', 'N/A', '2022-07-07 22:06:46'),
(69, 'Federal Medical Center, Katsina', 'P.M.B 2121 Murtala Muhammad Way, Kastina', 'Katsina', 'Katsina', 'N/A', 'N/A', '2022-07-07 22:07:21'),
(70, 'General Hospital, Kogi', 'Okengwe street, Itakpe Okene, Kogi State', 'Kogi', 'Okene', 'N/A', 'N/A', '2022-07-07 22:08:22'),
(71, 'National Blood Transfusion Service (NBTS)', 'GP 1266 Ganaja Housing Estate, Ajaokuta Road, Lokoja', 'Kogi', 'Ajaokuta', 'N/A', 'N/A', '2022-07-07 22:09:02'),
(72, 'Federal Medical Center, Lokoja', 'Lokoja-Ankpa Road, Lokoja', 'Kogi', 'Lokoja', 'N/A', '+234 58 220 020', '2022-07-07 22:10:02'),
(73, 'General Hospital, Kwara', '65, Bamigboye Way, Omu-Aran, Irepodun, Kwara', 'Kwara', 'Irepodun', 'N/A', 'N/A', '2022-07-07 22:10:44'),
(74, 'University of Illorin Teaching Hospital', 'UITH Road, Kwara', 'Kwara', 'Ilorin South', 'N/A', 'N/A', '2022-07-07 22:11:16'),
(75, 'Federal Medical Center, Nasarawa', 'Opposite Keffi Motor Park, Keffi', 'Nasarawa', 'Keffi', 'N/A', 'N/A', '2022-07-07 22:12:02'),
(76, 'General Hospital Suleja', 'General hospital, Suleja, Niger State.', 'Niger', 'Suleja', 'N/A', 'N/A', '2022-07-07 22:12:42'),
(77, 'Lafia Kowa Specialist Hospital', '122, Ejirin Road, Ijebu Ode, Ogun', 'Ogun', 'Ijebu Ode', 'N/A', 'N/A', '2022-07-07 22:13:41'),
(78, 'National Blood Transfusion Service (NBTS)', 'General Hospital Ibrekodo, Abeokuta, Ogun State', 'Ogun', 'Abeokuta South', 'N/A', 'N/A', '2022-07-07 22:14:30'),
(79, 'Babcock University Teaching Hospital', 'LLishan-Remo, Ikenne, Ogun State', 'Ogun', 'Ikenne', 'N/A', 'N/A', '2022-07-07 22:14:58'),
(80, 'State Specialist Hospital, Ondo', 'Hospital Road, Akure', 'Ondo', 'Akure South', 'N/A', 'N/A', '2022-07-07 22:15:36'),
(81, 'Obafemi Awolowo University Teaching Hospital', 'Ilesha Road, Ile-Ife', 'Osun', 'Iwo', 'N/A', 'N/A', '2022-07-07 22:16:13'),
(82, 'Molete Diagnostic Center', '270 Obafemi Awolowo Way, Molete, Ibadan South West, Oyo', 'Oyo', 'Ibadan South-West', 'N/A', 'N/A', '2022-07-07 22:17:00'),
(83, 'General Hospital Oyo', 'Oyo Road Iseyin Town, Iseyin, Oyo, Nigeria', 'Oyo', 'Iseyin', 'N/A', 'N/A', '2022-07-07 22:17:30'),
(84, 'Kejide Specialist Hospital', 'Elewura Street Challenge, Ibadan South East, Oyo', 'Oyo', 'Ibadan South-East', 'N/A', 'N/A', '2022-07-07 22:18:51'),
(85, 'National Blood Transfusion Service (NBTS)', 'Qtrs 854, Queen Elizabeth Road, Opp. K.S Motel by Total Garden, Ibadan', 'Oyo', 'Ibadan North', 'N/A', 'N/A', '2022-07-07 22:19:20'),
(86, 'Lautech Teaching Hospital', 'Ogbomoso/Illorin Road, Oyo', 'Oyo', 'Ogbomosho South', 'N/A', 'N/A', '2022-07-07 22:20:01'),
(87, 'University College Hospital', 'Layi Ayanniyi Street, Ibadan', 'Oyo', 'Ibadan South-West', 'N/A', 'N/A', '2022-07-07 22:20:35'),
(88, 'National Blood Transfusion Service (NBTS)', 'Hospital, Old Bukuru Road, Jos', 'Plateau', 'Jos South', 'N/A', 'N/A', '2022-07-07 22:21:09'),
(89, 'Bingham University Teaching Hospital', '23 Zaria Bypass, 930105, Jos', 'Plateau', 'Jos North', 'N/A', '0703 699 3176', '2022-07-07 22:22:01'),
(90, 'Jos University Teaching Hospital', '930105, Katon Rikkos', 'Plateau', 'Jos North', 'N/A', '0909 305 0548', '2022-07-07 22:23:02'),
(91, 'National Blood Transfusion Service (NBTS)', 'General Hospital, Nangere-Potiskum, Yobe', 'Yobe', 'Nangere', 'N/A', 'N/A', '2022-07-07 22:24:08'),
(92, 'National Blood Transfusion Service (NBTS)', 'New Commissioners Quarters. Near Presidential Lodge, Jalingo', 'Taraba', 'Jalingo', 'N/A', 'N/A', '2022-07-07 22:24:36'),
(93, 'Usmanu Danfodiyo University Teaching Hospital', 'Usmanu Danfodiyo University, Garba Nadama Rd, Sokoto', 'Sokoto', 'Sokoto North', 'N/A', '0907 695 0242', '2022-07-07 22:25:55'),
(94, 'National Blood Transfusion Service (NBTS)', 'Adjacent State Specialist Hospital, Sultan Abubakar Road, Sokoto', 'Sokoto', 'Sokoto North', 'N/A', 'N/A', '2022-07-07 22:26:22'),
(95, 'National Blood Transfusion Service (NBTS)', 'NBTS Armed Force Center, Military Hospital, Aba-Road, Port-Harcourt', 'Rivers', 'Port Harcourt', 'N/A', 'N/A', '2022-07-07 22:26:59'),
(96, 'Braithewaite Memorial Hospital', 'Port-Harcourt', 'Rivers', 'Port Harcourt', 'N/A', '07036598133', '2022-07-07 22:28:51'),
(97, 'University of Port Harcourt Teaching Hospital', 'East-West Road, Port-Harcourt', 'Rivers', 'Port Harcourt', 'N/A', '0806 861 2954', '2022-07-07 22:31:12'),
(98, 'Prime Diagnostic  Service', '211, Kirikiri Road, Olodi Apapa', 'Lagos', 'Ajeromi-Ifelodun', 'N/A', '08023004974', '2022-07-07 22:50:13'),
(99, 'Excellent Medical Diagnostic Services', '27, Turner Street, off Mosafejo Road, Amukoko', 'Lagos', 'Ajeromi-Ifelodun', 'N/A', '08056270300', '2022-07-07 22:51:09'),
(100, 'Tolu Medical Centre', '25 Amodu Tijani Street Olodi -Apapa.Ajegunle', 'Lagos', 'Ajeromi-Ifelodun', 'N/A', '08035056039;  08060040060', '2022-07-07 22:52:37'),
(101, 'Mass -Tag Diagnostic', '3A Bakare – Faro Street, Mosafejo Amukoko', 'Lagos', 'Ajeromi-Ifelodun', 'N/A', '08023310449', '2022-07-07 22:54:45'),
(102, 'Options Medical Diagnostics', '201, Ojo Rd, Ajegunle, Ajeromi Ifelodun', 'Lagos', 'Ajeromi-Ifelodun', 'N/A', '08023067174', '2022-07-07 22:55:29'),
(103, 'Funtom Specialist Med. Diagnostic', '19B, Iganmu Road Sari Iganmu', 'Lagos', 'Ajeromi-Ifelodun', 'N/A', '08034108366', '2022-07-07 22:56:26'),
(104, 'Waxlab Diagnostic Service', '2, Isiaka Olorunfemi Street, Off Lasu-Isheri Road, Igando', 'Lagos', 'Alimosho', 'N/A', '08023278126 , 08170251200', '2022-07-07 22:57:38'),
(105, 'Pons Medical Diagnostix', '11,Egbeda R0ad  Lab. B/stop Isheri-Idimu.', 'Lagos', 'Alimosho', 'N/A', '08034542000', '2022-07-07 22:58:15'),
(106, 'G.G Able Medical Diagnostic  Centre', '218 Ijegun Road Ikotun Igando, Lagos', 'Lagos', 'Alimosho', 'N/A', '08037131100', '2022-07-07 22:58:57'),
(107, 'Juta Medical Diagnostics', '361, Ikotun Road, Opp St. Peter Anglican Church,\r\nIsheri Olofin, Lagos.', 'Lagos', 'Alimosho', 'N/A', '08032910496', '2022-07-07 22:59:38'),
(108, 'Life Care Medical Laboratory', '1, Idimu Road, Opp Con-Oil, Ikotun', 'Lagos', 'Alimosho', 'N/A', '08037227723', '2022-07-07 23:00:48'),
(109, 'Adrebs Medical Laboratory	', '1 Orelope Road Shop 18B Amori Shopping  Orelope,  Egbeda', 'Lagos', 'Alimosho', 'N/A', '08058416889', '2022-07-07 23:01:37'),
(110, 'Joas Medical Diagnostic', '2, Okesuna St, Ikotun	', 'Lagos', 'Alimosho', 'N/A', '08033535729 , 08032509975', '2022-07-07 23:02:25'),
(111, 'Sul-ak Medical Laboratory Services', '28B Association Avenue Governor Road, Ikotun.', 'Lagos', 'Alimosho', 'N/A', '08033326650', '2022-07-07 23:03:06'),
(112, 'Soulcare Medical Laboratory', 'Blk C, shop 541, Akeja Market, 65, Isolo Road, ile –iwe B/Stop, Ikotun	', 'Lagos', 'Alimosho', 'N/A', '08034676220', '2022-07-07 23:03:47'),
(113, 'Bio assay Laboratory	', '165 Isolo Road Egbe	', 'Lagos', 'Alimosho', 'N/A', '08033542417', '2022-07-07 23:04:25'),
(114, 'God’s Own Diagnostics Services	', '4, Isaiah Shonekan Street Oluwaga ,Ipaja Ayobo', 'Lagos', 'Alimosho', 'N/A', '08034714941', '2022-07-07 23:05:22'),
(115, 'Healing Virtues Medical Diag. centre', '21, Odubakin Street, Abule Egun, Baruwa, Ipaja.	', 'Lagos', 'Alimosho', 'N/A', '08033340375 , 08065600183', '2022-07-07 23:06:13'),
(116, 'Sofeymed Diagnostic Medical Lab.	', '6,Sunny Alebiosu Street, Iyana-Ipaja.	', 'Lagos', 'Alimosho', 'N/A', '08023305632 , 08186138038', '2022-07-07 23:07:08'),
(117, 'O.A.U Medical Diagnostic Centre', '577, Lagos Abeokuta, Expressway, Awori	', 'Lagos', 'Alimosho', 'N/A', '07065270777, 08064986271', '2022-07-07 23:07:45'),
(118, 'Latma Int’l Medical Diagnostics	', '44B Agbelekale Bus stop Ekoro  Road   Abule Egba.	', 'Lagos', 'Alimosho', 'N/A', '08023129909 , 08067047000', '2022-07-07 23:08:53'),
(119, 'Ahmadiyya Muslim Hospital	', 'Km 27, Lagos Abeokuta Express way Ahmadiyya / Stop Ojokoro	', 'Lagos', 'Ifako-Ijaiye', 'N/A', '08039550921', '2022-07-07 23:10:17'),
(120, 'Constant Care  Medical Laboratories	', '1, Fabola Street, Jankara Road,  Ijaiye Ojokoro, Lagos.	', 'Lagos', 'Ifako-Ijaiye', 'N/A', '08034546950', '2022-07-07 23:11:11'),
(121, 'R-Jolad Hospital Laboratory	', '1, Akindele Street, Gbagada, Lagos.	', 'Lagos', 'Shomolu', 'N/A', '08033282983 , 08052704298', '2022-07-07 23:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `name`, `created_at`) VALUES
(1, 'A+', '2022-07-05 20:47:44'),
(2, 'A-', '2022-07-05 20:47:51'),
(3, 'B+', '2022-07-05 20:48:00'),
(4, 'B-', '2022-07-05 20:48:06'),
(5, 'O+', '2022-07-05 20:48:16'),
(6, 'O-', '2022-07-05 20:48:23'),
(7, 'AB+', '2022-07-05 20:48:32'),
(8, 'AB-', '2022-07-05 20:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `age` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `donation_date` date NOT NULL,
  `weight` bigint(20) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `identification_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `donor_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `firstname`, `lastname`, `gender`, `dob`, `age`, `address`, `state`, `lga`, `email`, `phone`, `blood_group`, `donation_date`, `weight`, `volume`, `identification_type`, `status`, `donor_id`, `user_id`, `created_at`) VALUES
(1, 'Donor', 'One', 'Female', '0000-00-00', 23, 'Ama Hausa', 'Yobe', 'Geidam', 'test@mail.com', '08023027408', 'O+', '2022-07-27', 70, '35', 'Voter\'s Card', 'Donated', 'DONOR-630952', 'Guest', '2022-07-06 18:44:24'),
(2, 'Test', 'One', 'Female', '0000-00-00', 40, 'No 1 - 5 Malumfashi Close, Off Emeka Anyaoku Street, Area 11,Garki', 'Abuja', 'Bwari', 'test@mail.com', '08023027408', 'AB-', '2022-07-13', 0, '0', 'Pending', 'Pending', 'DONOR-615708', 'Guest', '2022-07-13 09:16:26'),
(3, 'Test', 'Two', 'Male', '0000-00-00', 47, 'No 1 - 5 Malumfashi Close, Off Emeka Anyaoku Street, Area 11,Garki', 'Borno', 'Chibok', 'test@mail.com', '07031321491', 'B-', '2022-07-13', 0, '0', 'Pending', 'Pending', 'DONOR-874512', 'Guest', '2022-07-13 09:19:43'),
(4, 'Test', 'One', 'Male', '0000-00-00', 34, 'Ama Hausa', 'Imo', 'Orsu', 'test@mail.com', '07031321491', 'B+', '2022-07-13', 0, '0', 'Pending', 'Pending', 'DONOR-150298', 'Guest', '2022-07-13 09:22:48'),
(5, 'Test', 'One', 'Female', '0000-00-00', 46, 'Ama Hausa', 'Benue', 'Makurdi', 'test@mail.com', '08023468304', 'B-', '2022-07-13', 0, '0', 'Pending', 'Pending', 'DONOR-237589', 'Guest', '2022-07-13 09:24:44'),
(6, 'Manager', 'Admin', 'Male', '0000-00-00', 56, 'Ama Hausa', 'CrossRiver', 'Ikom', 'admin@example.com', '08023027408', 'A+', '2022-07-13', 0, '0', 'Pending', 'Pending', 'DONOR-467951', 'Guest', '2022-07-13 10:32:29'),
(7, 'High Rocks Laboratory', 'One', 'Male', '0000-00-00', 67, 'Ama Hausa', 'Rivers', 'Etche', 'ebukaohaji@gmail.com', '08023027408', 'B+', '2022-07-13', 0, '0', 'Pending', 'Pending', 'DONOR-917354', 'Guest', '2022-07-13 10:34:36'),
(9, 'User', 'One', 'Female', '2000-08-02', 0, 'Ama Hausa', 'Taraba', 'Ibi', 'staff1@example.com', '08023027408', 'O-', '2022-07-13', 0, '0', 'Pending', 'Pending', 'DONOR-371205', '1', '2022-07-13 15:50:12'),
(10, 'User', 'One', 'Female', '2000-08-02', 0, 'Ama Hausa', 'Taraba', 'Ibi', 'staff1@example.com', '08023027408', 'O-', '2022-07-13', 0, '0', 'Pending', 'Pending', 'DONOR-610854', '1', '2022-07-13 15:50:15'),
(11, 'User', 'One', 'Female', '2000-08-02', 0, 'Ama Hausa', 'Taraba', 'Ibi', 'staff1@example.com', '08023027408', 'O-', '2022-07-13', 60, '400', 'Voter\'s Card', 'Donated', 'DONOR-745019', '1', '2022-07-13 15:54:28'),
(12, 'User', 'One', 'Female', '2000-08-02', 21, 'Ama Hausa', 'Taraba', 'Ibi', 'staff1@example.com', '08023027408', 'O-', '2022-07-13', 0, '0', 'Pending', 'Pending', 'DONOR-523061', '1', '2022-07-13 16:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `gender`, `dob`, `address`, `state`, `lga`, `blood_group`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'User', 'One', 'Female', '2000-08-02', 'Ama Hausa', 'Taraba', 'Ibi', 'O-', 'staff1@example.com', '08023027408', '08112b7c7216e6b7f94331e486668aec', '2022-07-13 14:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Main', 'Admin', 'admin@example.com', 'e64c7d89f26bd1972efa854d13d7dd61', 'Admin', '2022-07-02 12:39:50', NULL),
(2, 'Manager', 'One', 'manager1@example.com', '5eed086e73cf277bee5591ad279af2a0', 'Manager', '2022-07-03 13:16:27', NULL),
(3, 'Staff', 'One', 'staff1@example.com', '08112b7c7216e6b7f94331e486668aec', 'Staff', '2022-07-03 13:17:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
