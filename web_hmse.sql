-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2024 pada 11.24
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `contact_id_pointer` varchar(255) NOT NULL,
  `sender_name` varchar(255) DEFAULT NULL,
  `sender_email` varchar(255) DEFAULT NULL,
  `message_body_content` longtext DEFAULT NULL,
  `contact_date` datetime DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact_submissions`
--

INSERT INTO `contact_submissions` (`contact_id_pointer`, `sender_name`, `sender_email`, `message_body_content`, `contact_date`, `is_read`) VALUES
('6SseNMBU4K6dof6h', 'Risna Ayu Lestari', 'someone@example.com', 'The Internet started in the 1960s as a way for government researchers to share information. Computers in the \'60s were large and immobile and in order to make use of information stored in any one computer, one had to either travel to the site of the computer or have magnetic computer tapes sent through the conventional postal system.\r\n\r\nAnother catalyst in the formation of the Internet was the heating up of the Cold War. The Soviet Union\'s launch of the Sputnik satellite spurred the U.S. Defense Department to consider ways information could still be disseminated even after a nuclear attack. This eventually led to the formation of the ARPANET (Advanced Research Projects Agency Network), the network that ultimately evolved into what we now know as the Internet. ARPANET was a great success but membership was limited to certain academic and research organizations who had contracts with the Defense Department. In response to this, other networks were created to provide information sharing.\r\n\r\nJanuary 1, 1983 is considered the official birthday of the Internet. Prior to this, the various computer networks did not have a standard way to communicate with each other. A new communications protocol was established called Transfer Control Protocol/Internetwork Protocol (TCP/IP). This allowed different kinds of computers on different networks to \"talk\" to each other. ARPANET and the Defense Data Network officially changed to the TCP/IP standard on January 1, 1983, hence the birth of the Internet. All networks could now be connected by a universal language.', '2024-03-19 16:22:09', 0),
('l2e6jATDZeGlCahh', 'Risna Ayu Lestari', 'xyz@email.com', 'The Internet started in the 1960s as a way for government researchers to share information. Computers in the \'60s were large and immobile and in order to make use of information stored in any one computer, one had to either travel to the site of the computer or have magnetic computer tapes sent through the conventional postal system.\r\n\r\nAnother catalyst in the formation of the Internet was the heating up of the Cold War. The Soviet Union\'s launch of the Sputnik satellite spurred the U.S. Defense Department to consider ways information could still be disseminated even after a nuclear attack. This eventually led to the formation of the ARPANET (Advanced Research Projects Agency Network), the network that ultimately evolved into what we now know as the Internet. ARPANET was a great success but membership was limited to certain academic and research organizations who had contracts with the Defense Department. In response to this, other networks were created to provide information sharing.\r\n\r\nJanuary 1, 1983 is considered the official birthday of the Internet. Prior to this, the various computer networks did not have a standard way to communicate with each other. A new communications protocol was established called Transfer Control Protocol/Internetwork Protocol (TCP/IP). This allowed different kinds of computers on different networks to \"talk\" to each other. ARPANET and the Defense Data Network officially changed to the TCP/IP standard on January 1, 1983, hence the birth of the Internet. All networks could now be connected by a universal language.', '2024-03-19 17:04:25', 0),
('qvMid2pH8KQZnHCt', 'Jajang Nurcahyo', 'jajangnurcahyo76@gmail.com', 'Lanjutkan! Semoga sukses ya...', '2024-03-20 18:59:39', 0),
('S0XKN8yRXIENVLwO', 'abc', 'abc@email.com', 'lorem ipsum', '2024-03-19 17:06:32', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dashboard_activities`
--

CREATE TABLE `dashboard_activities` (
  `activityId` varchar(255) NOT NULL,
  `imgLink` varchar(255) DEFAULT NULL,
  `activityCaption` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `hrefLink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `editor_users`
--

CREATE TABLE `editor_users` (
  `user_id` varchar(255) NOT NULL,
  `user_display_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `editor_users`
--

INSERT INTO `editor_users` (`user_id`, `user_display_name`, `user_password`) VALUES
('admin1', 'Administrator', '53B338502B450A1B730DC4B9C1A55FA8BF21CA2B');

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

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`news_url_id_pointer`, `newsTitle`, `newsBodyContent`, `newsDate`, `newsAuthor`, `newsMainThumbImg`) VALUES
('kegiatan-bootcamp-hmse-2024-sdmkmq22eaifj', 'Kegiatan Bootcamp HMSE 2024', 'Kegiatan ini diselenggarakan pada hari Minggu tanggal 25 Februari 2024 dan 3 Maret 2024 di gedung FB lantai 3.<br>\r\n<img src=\"http://localhost/web-hmse/img/projects/IMG_7738.JPG\" style=\"max-width:67%\"><br>\r\n<img src=\"http://localhost/web-hmse/img/projects/IMG_8805.jpg\" style=\"max-width:67%\"><br>\r\n<img src=\"http://localhost/web-hmse/img/projects/IMG_9638.JPG\" style=\"max-width:67%\"><br>', '2024-03-05 21:03:44', 'I Gusti Nyoman, Muhamad Luthfian, Marliyani Sutraliyana', 'http://localhost/web-hmse/img/projects/IMG_7738.JPG'),
('peresmian-hmse-13902194', 'HMSE Resmi Dilantik!', 'HMSE untuk pertama kalinya disahkan dan dilantik sebagai Himpunan Mahasiswa Software Engineering pertama di Universitas Insan Pembangunan Indonesia pada tanggal 07 Januari 2024 di Auditorium Saba Karya.\r\n\r\nHimpunan Mahasiswa Software Engineering (HMSE) adalah suatu organisasi di tingkat mahasiswa yang terfokus pada bidang keilmuan teknologi informasi dan rekayasa perangkat lunak. Organisasi ini bertujuan untuk meningkatkan pemahaman dan keterampilan mahasiswa dalam dunia software engineering melalui kegiatan pendidikan, pelatihan, serta kegiatan sosial dan kolaboratif.', '2024-01-07 10:59:21', 'I Gusti Nyoman, Muhamad Luthfian, Marliyani Sutraliyana', 'http://localhost/web-hmse/img/phist1.jpg');

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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`ann_url_id_pointer`) USING BTREE;

--
-- Indeks untuk tabel `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`contact_id_pointer`);

--
-- Indeks untuk tabel `dashboard_activities`
--
ALTER TABLE `dashboard_activities`
  ADD PRIMARY KEY (`activityId`);

--
-- Indeks untuk tabel `editor_users`
--
ALTER TABLE `editor_users`
  ADD PRIMARY KEY (`user_id`);

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
