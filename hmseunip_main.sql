-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Sep 2024 pada 21.04
-- Versi server: 10.6.19-MariaDB-cll-lve
-- Versi PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmseunip_main`
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
('pendaftaran-anggota-baru-hmse-326488921', 'Pendaftaran Anggota Baru HMSE 2024', 'Silahkan buka link gform ini:<br><a href=\"https://forms.gle/BSj1wMQGfaEc6SHu9\">https://forms.gle/BSj1wMQGfaEc6SHu9</a>', '2024-06-16 15:11:38', 'Muhamad Luthfian');

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
('5gCo4zU8jx93Bwjs', 'Sucipto Basuki', 'ciptainsan@yahoo.com', 'Semoga ada tampilan menu download', '2024-05-20 09:38:27', 0),
('aReaI0voSj9JzmgT', 'Indah Febriyani', 'febriyaniindah27@gmail.com', 'Seneng sekali bisa ikut kegiatan bootcamp HMSE kemarin, acaranya seru dan sangat bermanfaat. semua panitia juga ramah dan saling membantu. sukses terus untuk HMSE, semoga semakin banyak kegiatan2 yang diadakan dan bisa diikuti bukan hanya untuk mahasiswa SE. ', '2024-04-03 21:19:58', 0),
('gci1cMVQncLtdfA8', 'Zaki Marufan Chandra', 'zaki.marufan@gmail.com', 'Hostingannya berjalan lancar cuy...', '2024-04-02 17:27:58', 0),
('Jhc0xBMJhLF5P3t6', 'Anonim', 'helloworld.dev@yahoo.com', 'Semangat 17... ðŸ‡®ðŸ‡©ðŸ‡®ðŸ‡©ðŸ‡®ðŸ‡©\r\nBerani coba, berani gagal, berani sukses!!!', '2024-08-16 20:37:17', 0),
('k1FxvkSqn91qmeeA', 'Husen', 'husen@gmail.com', 'Oke good job', '2024-06-07 13:24:49', 0),
('N22Lic4FGEIMTQiw', 'Samitra', 'samitra62@gmail.com', 'Gimana cara masuk di link ini', '2024-04-03 11:35:41', 0),
('oG9EnJUHfn2uA8f8', 'samitra', 'samitra62@gmail.com', 'Apa aja kegiatan di hmse', '2024-04-02 18:07:16', 0),
('s9ETVFhLOZUppxJd', 'Samitra', 'samitra62@gmail.com', '081539956893', '2024-04-02 18:05:11', 0);

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
  `newsHeadline` varchar(255) DEFAULT NULL,
  `newsBodyContent` longtext DEFAULT NULL,
  `newsDate` datetime DEFAULT NULL,
  `newsAuthor` varchar(255) DEFAULT NULL,
  `newsMainThumbImg` varchar(255) DEFAULT NULL,
  `showInGallery` tinyint(1) NOT NULL DEFAULT 0,
  `galleryTitle` varchar(255) DEFAULT NULL,
  `galleryDate` date DEFAULT NULL,
  `galleryThumbImg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`news_url_id_pointer`, `newsHeadline`, `newsBodyContent`, `newsDate`, `newsAuthor`, `newsMainThumbImg`, `showInGallery`, `galleryTitle`, `galleryDate`, `galleryThumbImg`) VALUES
('bukber-hmse-39gdmk2fp43', 'Acara Buka Bersama HMSE', 'Acara buka bersama ini dilaksanakan di rumah makan <b><a href=\"https://maps.app.goo.gl/NbkvhFADd81Q8C4N9\" style=\"text-decoration:none; color:inherit;\">Ayam Bakar Beda Rasa Teh Iis</a></b> pada hari Minggu, 31 Maret 2024.', '2024-03-31 17:31:09', 'Muhamad Dwi Ardiansyah, Muhamad Luthfian', 'https://hmse-unipi.or.id/img/bukber-thumb.jpeg', 1, '', '2024-03-31', ''),
('demo-himpunan-pkkmb-9305249', 'Demo Himpunan dan Departemen PKKMB 2024', '<p>Kegiatan Demo Himpunan HMSE untuk setiap gugus mahasiswa baru UNIPI.</p>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/IMG_5164.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/IMG_5099.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/IMG_5061.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/IMG_5056.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/IMG_5049.JPG\" style=\"width: 100%; height: auto;\"><br>', '2024-09-13 05:19:54', 'Muhamad Luthfian, Marliyani Sutraliyana', 'https://hmse-unipi.or.id/img/projects/IMG_5099.JPG', 1, NULL, '2024-09-06', NULL),
('fix-crowdstrike-bsod-3595928', 'Cara Memperbaiki Bluescreen di PC Windows yang Disebabkan oleh Pembaruan CrowdStrike yang Bermasalah', '<figure><img src=\"https://images.firstpost.com/uploads/2024/07/PC-stuck-on-Blue-Screen-of-Death-look-Heres-how-to-stop-it-from-spiralling-2024-07-972c7c1e102d20844df37dd907f77d97-1200x675.jpg\" style=\"width: 100%;\r\n  height: auto;\"><figcaption>Ilustrasi Blue Screen of Death (BSOD)</figcaption></figure>\r\nPemadaman Microsoft yang dimulai pada Kamis malam melumpuhkan maskapai penerbangan serta perusahaan di sektor keuangan, kesehatan, dan energi di seluruh dunia, menyebabkan banyak dari mereka mengalami <i>\"Blue Screen of Death\"</i> (BSOD) di komputer kerja mereka. Sebagai tanggapan, Microsoft pada hari Sabtu merilis alat pemulihan untuk membantu memperbaiki mesin Windows yang terkena bug tersebut, sehari setelah CrowdStrike memberikan instruksi tentang cara memperbaiki PC yang mengalami <i>crash</i>.\r\n\r\nCrowdStrike, sebuah perusahaan keamanan siber yang perangkat lunaknya melindungi bisnis kecil dan perusahaan besar dari serangan siber dan ancaman online lainnya, mengatakan bahwa mereka menyebabkan pemadaman tersebut ketika mengirimkan pembaruan perangkat lunak dengan kesalahan, yang menyebabkan komputer Windows yang menjalankan perangkat lunak perusahaan tersebut mengalami <i>crash</i>. Bug ini tidak mempengaruhi komputer Mac dan Linux. \"Kami memahami keseriusan situasi ini dan sangat menyesal atas ketidaknyamanan dan gangguan yang terjadi,\" kata perusahaan tersebut dalam sebuah pernyataan.\r\n\r\nDampaknya sangat besar. Para turis di bandara terjebak. Janji temu rumah sakit tertunda atau dibatalkan. Dan para karyawan tidak bisa bekerja, semua karena pembaruan perangkat lunak ini, yang menyebabkan BSOD yang terkenal di PC Windows dengan kesalahan dari CrowdStrike.\r\n\r\nSekarang, sementara kebanyakan orang hanya perlu menunggu masalah ini diselesaikan, jika Anda berada di sisi lain dari masalah ini, dan Anda yang menghadapi BSOD di PC Anda, ada solusinya, yang telah diposting oleh CrowdStrike di situs webnya.\r\n\r\n<h3><b>Cara memperbaiki PC Microsoft Windows Anda yang terkena bug CrowdStrike</b></h3>Microsoft pada hari Sabtu merilis di Pusat Unduhan Microsoftnya <a onclick=\"window.open(\\\'https://go.microsoft.com/fwlink/?linkid=2280386\\\');\" class=\"a\" style=\"cursor: pointer;\" target=\"_blank\">sebuah alat USB</a> yang dikatakan dapat membantu administrator IT dengan proses perbaikan. Alat ini mengharuskan Anda memiliki hak administratif dan kunci pemulihan BitLocker untuk setiap PC Windows. Microsoft juga memposting <a onclick=\"window.open(\\\'https://support.microsoft.com/en-us/topic/kb5042421-crowdstrike-issue-impacting-windows-endpoints-causing-an-0x50-or-0x7e-error-message-on-a-blue-screen-b1c700e0-7317-4e95-aeee-5d67dd35b92f\\\');\" class=\"a\" style=\"cursor: pointer;\" target=\"_blank\">langkah-langkah pemulihan</a> untuk memperbaiki PC yang terus-menerus restart karena pembaruan CrowdStrike yang salah.\r\n\r\nPada hari Jumat, CrowdStrike mengatakan telah mengidentifikasi masalah tersebut dan telah mengirimkan perbaikan. \"Kami merujuk pelanggan ke <a onclick=\"window.open(\\\'https://supportportal.crowdstrike.com/s/login/?ec=302&startURL=%2Fs%2Fget-help\\\');\" class=\"a\" style=\"cursor: pointer;\" target=\"_blank\">portal dukungan</a> untuk pembaruan terbaru dan akan terus memberikan pembaruan lengkap dan berkelanjutan di situs web kami.\"\r\n\r\nHal pertama yang harus Anda coba untuk mengatasi layar biru kematian adalah dengan me-restart komputer Windows Anda sampai perbaikan CrowdStrike selesai. CEO CrowdStrike, George Kurtz, pada hari Jumat muncul di acara <i>\"Today\"</i> NBC dan berkata, \"Banyak pelanggan yang mem-boot ulang sistem dan sistem tersebut beroperasi karena kami telah memperbaikinya.\"\r\n\r\nHal ini sebenarnya berhasil bagi banyak orang. <a onclick=\"window.open(\\\'https://x.com/_aarony/status/1814247617335075146?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed%7Ctwterm%5E1814247617335075146%7Ctwgr%5E3a5a0304950cd2fefad06f15ccedd56f6c93e17d%7Ctwcon%5Es1_&ref_url=https%3A%2F%2Fwww.pcmag.com%2Fnews%2Fmicrosofts-outage-tip-for-customers-try-rebooting-your-system-15-times\\\');\" class=\"a\" style=\"cursor: pointer;\" target=\"_blank\">Pengguna ini di X</a> berhasil setelah me-restart komputer mereka beberapa kali. Microsoft juga mengatakan bahwa mereka telah menerima umpan balik bahwa beberapa restart (sebanyak 15) telah efektif.\r\n\r\nNamun, jika Anda masih mengalami masalah bahkan setelah restart, CrowdStrike merekomendasikan untuk boot ke safe mode dan kemudian menghapus file yang terkorup.  Inilah yang dijelaskan perusahaan di situs web CrowdStrike:\r\n<ul style=\"line-height: 100%;\">\r\n<li>Boot komputer Windows Anda ke <i><b>Safe Mode</b></i> atau <i><b>Windows Recovery Environment.</b></i></li>\r\n<li>Arahkan ke direktori \"%WINDIR%\\\\System32\\\\drivers\\\\CrowdStrike\".</li>\r\n<li>Cari file yang cocok dengan \"C-00000291*.sys\" dan hapus.</li>\r\n<li>Boot host secara normal.</li></ul>\r\n<i>Catatan: Host terenkripsi Bitlocker mungkin memerlukan kunci pemulihan.</i>\r\n<i>Jika Anda berurusan dengan cloud publik atau lingkungan virtual lainnya, ada perbaikan berbeda yang direkomendasikan CrowdStrike, yang dapat Anda lihat di situs webnya.</i>', '2024-07-22 22:09:09', 'Zaki Ma&#39;rufan Chandra, CNET', 'https://images.firstpost.com/uploads/2024/07/PC-stuck-on-Blue-Screen-of-Death-look-Heres-how-to-stop-it-from-spiralling-2024-07-972c7c1e102d20844df37dd907f77d97-1200x675.jpg', 0, '', '2024-03-31', ''),
('galang-dana-hmse-364968745', 'Galang Dana HMSE', 'Penggalangan dana oleh BPH prodi SE untuk saudara kita Randi Syahputra yang terkena musibah berupa kebakaran rumah pada hari Sabtu tanggal 8 Juni 2024.\r\n\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.07.jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08.jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (1).jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (2).jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (3).jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (4).jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (5).jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (6).jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (7).jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (8).jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (9).jpeg\" style=\"width: 100%;\r\n  height: auto;\"><br>', '2024-06-11 13:02:31', 'Muhamad Luthfian, Marliyani Sutraliyana', 'https://hmse-unipi.or.id/img/WhatsApp Image 2024-06-16 at 12.14.08 (thumb).jpg', 1, NULL, NULL, ''),
('kegiatan-bootcamp-hmse-2024-sdmkmq22eaifj', 'Kegiatan Bootcamp HMSE 2024', 'Kegiatan ini diselenggarakan pada hari Minggu tanggal 25 Februari 2024 dan 3 Maret 2024 di gedung FB lantai 3.<br>\r\n<img src=\"http://hmse-unipi.or.id/img/projects/IMG_7738.JPG\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/projects/IMG_8805.jpg\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n<img src=\"http://hmse-unipi.or.id/img/projects/IMG_9638.JPG\" style=\"width: 100%;\r\n  height: auto;\"><br>', '2024-03-05 21:03:44', 'I Gusti Nyoman, Muhamad Luthfian, Marliyani Sutraliyana', 'http://hmse-unipi.or.id/img/projects/IMG_9638.JPG', 1, '', '0000-00-00', ''),
('kegiatan-gema-ramadhan-2024-unipi-2359369124', 'Gema Ramadhan UNIPI 2024', 'Kegiatan ini diselenggarakan pada hari Minggu tanggal 24 Maret 2024 menjelang buka puasa.\r\n\r\n<figure><img src=\"http://hmse-unipi.or.id/img/projects/IMG_1331.JPG\" style=\"width: 100%;\r\n  height: auto;\">\r\n</figure><figure>\r\n<img src=\"http://hmse-unipi.or.id/img/projects/IMG_1338.JPG\" style=\"width: 100%;\r\n  height: auto;\">\r\n<figcaption>Bagi-bagi Takjil</figcaption>\r\n</figure><figure><img src=\"http://hmse-unipi.or.id/img/projects/IMG_1927.JPG\" style=\"width: 100%;\r\n  height: auto;\">\r\n</figure><figure>\r\n<img src=\"http://hmse-unipi.or.id/img/projects/IMG_2075.JPG\" style=\"width: 100%;\r\n  height: auto;\">\r\n<figcaption>Foto Bersama di Auditorium Saba Karya</figcaption>\r\n</figure>', '2024-03-24 17:05:29', 'Muhamad Luthfian, Marliyani Sutraliyana', 'http://hmse-unipi.or.id/img/projects/IMG_2075.JPG', 1, '', '0000-00-00', ''),
('makrab-hmse-2024-9210493892', 'Acara Makrab HMSE 2024', '<p>Lokasi: Villa Viensay - Puncak, Bogor</p>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC05768.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC05777.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC05785.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC05788.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC05811.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC05865.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC05913.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC05922.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC05977.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC06073.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/DSC06083.JPG\" style=\"width: 100%; height: auto;\"><br>', '2024-06-03 09:18:15', 'Muhamad Luthfian, Marliyani Sutraliyana, Zaki Ma&apos;rufan Chandra', 'https://hmse-unipi.or.id/img/DSC05788.JPG', 1, '', '0000-00-00', ''),
('peresmian-hmse-13902194', 'HMSE Resmi Dilantik!', '<img src=\"http://hmse-unipi.or.id/img/phist1.jpg\" style=\"width: 100%; height: auto;\"><br>\r\nHMSE untuk pertama kalinya disahkan dan dilantik sebagai Himpunan Mahasiswa Software Engineering pertama di Universitas Insan Pembangunan Indonesia pada tanggal 07 Januari 2024 di Auditorium Saba Karya.\r\n\r\nHimpunan Mahasiswa Software Engineering (HMSE) adalah suatu organisasi di tingkat mahasiswa yang terfokus pada bidang keilmuan teknologi informasi dan rekayasa perangkat lunak. Organisasi ini bertujuan untuk meningkatkan pemahaman dan keterampilan mahasiswa dalam dunia software engineering melalui kegiatan pendidikan, pelatihan, serta kegiatan sosial dan kolaboratif.', '2024-01-07 10:59:21', 'I Gusti Nyoman, Muhamad Luthfian, Marliyani Sutraliyana', 'http://hmse-unipi.or.id/img/phist1.jpg', 1, '', '0000-00-00', ''),
('stand-puncak-pkkmb-49042084', 'Stand HMSE Hari Puncak PKKMB 2024', '<p>Stand ini disediakan pada hari-H PKKMB UNIPI 2024 di lapangan Pertamina Bitung untuk pendaftaran para mahasiswa baru menjadi anggota HMSE.</p>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/DSC_1011.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/DSC_0916.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/DSC_0906.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/DSC_0844.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/DSC_0831.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/DSC_0830.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/DSC_0815.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n<img src=\"https://hmse-unipi.or.id/img/projects/DSC_0801.JPG\" style=\"width: 100%; height: auto;\"><br>\r\n', '2024-09-13 05:32:03', 'Muhamad Luthfian', 'https://hmse-unipi.or.id/img/projects/DSC_0830.JPG', 1, NULL, '2024-09-08', NULL),
('workshop-data-warehouse-hmse-2024-232592036', 'Kegiatan Workshop Data Warehouse Management', 'Kegiatan ini diselenggarakan pada hari Minggu tanggal 14 Juli 2024 di ruang FK201.<br>\r\n<img src=\"http://hmse-unipi.or.id/img/IMG_6161.JPG\" style=\"width: 100%;\r\n  height: auto;\"><br>\r\n\r\nSilahkan unduh file untuk praktek disini:\r\n<a id=\"linkit\" onclick=\"window.open(document.getElementById(\\\'linkit\\\').textContent, \\\'_blank\\\');\" class=\"a\" style=\"cursor: pointer;\" target=\"_blank\">https:<wbr>//drive.google.com<wbr>/drive<wbr>/folders<wbr>/1bcN_TebV0Vl6ptPKMkZiwYymZe2u9GzV</a>', '2024-07-14 21:03:44', 'Vanessa Stefanny S.Kom M.Kom, Muhamad Luthfian, Marliyani Sutraliyana', 'http://hmse-unipi.or.id/img/IMG_6161_THUMB.JPG', 1, '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `rep_url_id_pointer` varchar(255) NOT NULL,
  `report_title` varchar(255) DEFAULT NULL,
  `report_date` datetime DEFAULT NULL,
  `report_category` varchar(30) DEFAULT NULL,
  `report_body_content` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule`
--

CREATE TABLE `schedule` (
  `sch_url_id_pointer` varchar(255) NOT NULL,
  `schedule_title` varchar(255) DEFAULT NULL,
  `body_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Indeks untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`rep_url_id_pointer`);

--
-- Indeks untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sch_url_id_pointer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;