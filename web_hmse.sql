-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2024 pada 05.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_hmse`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcement`
--

CREATE TABLE `announcement` (
  `ann_url_id_pointer` varchar(255) NOT NULL,
  `announcement_title` varchar(255) DEFAULT NULL,
  `announcement_body_content` longtext DEFAULT NULL,
  `announcement_date` datetime DEFAULT NULL,
  `announcement_author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `announcement`
--

INSERT INTO `announcement` (`ann_url_id_pointer`, `announcement_title`, `announcement_body_content`, `announcement_date`, `announcement_author`) VALUES
('lorem-ipsum-25605021', 'Lorem Ipsum', 'Here is the content body section. This section serves as the cornerstone of digital communication, encapsulating a diverse array of elements such as rich-text formatting, hyperlinks, multimedia integrations, and embeddings sourced from external platforms. <u>Through its dynamic nature, this section fosters engagement and enhances the user experience by providing a multifaceted approach to information dissemination.</u> <i>Rich-text formatting enables the conveyance of nuanced messages, facilitating emphasis, clarity, and aesthetic appeal.</i> <b>Whether through bolding, italicizing, or underlining, these formatting options empower content creators to craft narratives that resonate with their audience on a deeper level.</b>\r\n\r\n<img src=\"https://codyhouse.co/web/assets/img/posts/vertical-text-alignment-buttons-input.png\" width=\"25%\" height=\"25%\" alt=\"example of image.\"></img>\r\n\r\n<a href=\"\">Hyperlinks within the content body section</a> serve as gateways to a vast digital landscape, seamlessly connecting users to additional resources, further reading, or related content. These hyperlinks not only enrich the user experience by offering supplementary information but also foster interconnectivity across the digital realm. By strategically embedding hyperlinks, content creators can curate a holistic browsing experience, guiding users through a web of knowledge and exploration.\r\n\r\nMoreover, the integration of multimedia elements such as images, videos, and embeddings elevates the content body section to new heights of engagement and immersion. Visual stimuli in the form of images captivate attention, convey complex concepts succinctly, and evoke emotional responses. Similarly, videos bring content to life, enabling dynamic storytelling and enhancing comprehension through audiovisual cues. Embeddings from external sites further enrich the content body section by seamlessly incorporating interactive elements such as interactive maps, social media posts, or data visualizations, fostering a multimedia-rich experience that transcends traditional text-based communication.', '2018-08-14 21:25:00', 'Muhamad Luthfian'),
('test-image-only', 'Images-Only Page', 'abc<img src=\"https://i.pinimg.com/474x/af/d2/a7/afd2a7a306f23e006e48b5003aa14ba4.jpg\" max-width=\"67%\"><br>lorem ipsum\r\n<img src=\"https://i.pinimg.com/474x/9d/a5/90/9da59027ee845399392911d5447196d3.jpg\" max-width=\"67%\">\r\n<img src=\"https://i.pinimg.com/236x/57/e3/76/57e376bb2afd60f1627a0a008f345b65.jpg\" max-width=\"67%\">the quick brown fox jumps over the lazy dog', '2022-02-26 18:57:10', 'Suci Jannatun Anggraeni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dashboard-activities`
--

CREATE TABLE `dashboard-activities` (
  `activityId` varchar(255) NOT NULL,
  `imgLink` varchar(255) DEFAULT NULL,
  `activityCaption` varchar(255) DEFAULT NULL,
  `hrefLink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `news_url_id_pointer` varchar(255) NOT NULL,
  `newsTitle` varchar(255) DEFAULT NULL,
  `newsBodyContent` longtext DEFAULT NULL,
  `newsDate` datetime DEFAULT NULL,
  `newsAuthor` varchar(255) DEFAULT NULL,
  `newsMainThumbImg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule`
--

CREATE TABLE `schedule` (
  `sch_url_id_pointer` varchar(255) NOT NULL,
  `schedule_title` varchar(255) DEFAULT NULL,
  `body_content` longtext DEFAULT NULL,
  `schedule_venue_location` varchar(255) DEFAULT NULL,
  `schedule_venue_gmaps_link` varchar(255) DEFAULT NULL,
  `schedule_venue_datetime_start` datetime DEFAULT NULL,
  `schedule_venue_datetime_end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `schedule`
--

INSERT INTO `schedule` (`sch_url_id_pointer`, `schedule_title`, `body_content`, `schedule_venue_location`, `schedule_venue_gmaps_link`, `schedule_venue_datetime_start`, `schedule_venue_datetime_end`) VALUES
('bootcamp-hmse-2024-1', 'Bootcamp HMSE Day 1', '<img src=\"http://localhost/web-hmse/img/bootcamp-hmse-1.jpg\" style=\"max-width:67%\"></img>\r\n<br>\r\n<img src=\"http://localhost/web-hmse/img/bootcamp-hmse-2.jpg\" style=\"max-width:67%\"></img>\r\n<br>\r\n\r\nSoftware yang dibutuhkan:\r\n- XAMPP\r\n- MySQL\r\n- Navicat\r\n- ScriptCase', 'Gedung FB Lantai 3', 'https://maps.app.goo.gl/Fuv5WoEE4ioLyojq5', '2024-02-25 09:00:00', '2024-02-25 16:00:00'),
('bootcamp-hmse-2024-2', 'Bootcamp HMSE Day 2', '<img src=\"http://localhost/web-hmse/img/bootcamp-hmse-1.jpg\" style=\"max-width:67%\"></img>\r\n<br>\r\n<img src=\"http://localhost/web-hmse/img/bootcamp-hmse-2.jpg\" style=\"max-width:67%\"></img>\r\n<br>\r\n\r\nSelesaikan form_t_gudang, form_t_barang, form_t_pomst, dan form_t_podtl', 'Gedung FB Lantai 3', 'https://maps.app.goo.gl/Fuv5WoEE4ioLyojq5', '2024-02-25 09:00:00', '2024-03-03 16:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`ann_url_id_pointer`) USING BTREE;

--
-- Indeks untuk tabel `dashboard-activities`
--
ALTER TABLE `dashboard-activities`
  ADD PRIMARY KEY (`activityId`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_url_id_pointer`);

--
-- Indeks untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sch_url_id_pointer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;