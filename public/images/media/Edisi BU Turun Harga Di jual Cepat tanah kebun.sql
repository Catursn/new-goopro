-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 05:39 PM
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
-- Database: `db_goopro`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id_berita` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id_berita`, `judul`, `slug`, `foto`, `tanggal`, `deskripsi`, `kategori`, `author`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pemerintah Menurunkan Suku Bunga Properti', '/berita/Kebijakan Pemerintahpemerintah-menurunkan-suku-bunga-properti', '/Kebijakan Pemerintah/berita4.png', '2022-10-11', '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Indonesia terus bergerak untuk memasuki bonus demografi yang dicirikan dengan segmen kalangan produktif menjadi mayoritas. Untuk pasar properti hal ini tentunya sangat baik untuk mendorong kinerja bisnis karena kalangan produktif merupakan pasar utama yang akan membeli rumah.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Semoga artikel ini bermanfaat ya, GooProperter!</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Jika kamu sedang mencari rumah, apartemen, tanah atau yang lainnya di marketplace properti tepercaya dan aman, bisa mengunjungi laman goopro.id dan goopro.id/join untuk daftar sebagain bagian dari kami.</span><br></p>', 'Kebijakan Pemerintah', 'catur', 'aktif', '2022-10-25 23:53:19', '2022-10-30 08:19:26'),
(3, 'Pemerintah Menurunkan Suku Bunga Properti', '/berita/Kebijakan Pemerintahpemerintah-menurunkan-suku-bunga-properti', '/Kebijakan Pemerintah/berita3.png', '2022-10-11', '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Indonesia terus bergerak untuk memasuki bonus demografi yang dicirikan dengan segmen kalangan produktif menjadi mayoritas. Untuk pasar properti hal ini tentunya sangat baik untuk mendorong kinerja bisnis karena kalangan produktif merupakan pasar utama yang akan membeli rumah.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Semoga artikel ini bermanfaat ya, GooProperter!</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Jika kamu sedang mencari rumah, apartemen, tanah atau yang lainnya di marketplace properti tepercaya dan aman, bisa mengunjungi laman goopro.id dan goopro.id/join untuk daftar sebagain bagian dari kami.</span><br></p>', 'Kebijakan Pemerintah', 'catur', 'aktif', '2022-10-25 23:53:19', '2022-10-30 08:19:18'),
(4, 'Pemerintah Menurunkan Suku Bunga Properti', '/berita/Kebijakan Pemerintahpemerintah-menurunkan-suku-bunga-properti', '/Kebijakan Pemerintah/berita2.png', '2022-10-11', '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Indonesia terus bergerak untuk memasuki bonus demografi yang dicirikan dengan segmen kalangan produktif menjadi mayoritas. Untuk pasar properti hal ini tentunya sangat baik untuk mendorong kinerja bisnis karena kalangan produktif merupakan pasar utama yang akan membeli rumah.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Semoga artikel ini bermanfaat ya, GooProperter!</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Jika kamu sedang mencari rumah, apartemen, tanah atau yang lainnya di marketplace properti tepercaya dan aman, bisa mengunjungi laman goopro.id dan goopro.id/join untuk daftar sebagain bagian dari kami.</span><br></p>', 'Kebijakan Pemerintah', 'catur', 'aktif', '2022-10-25 23:53:19', '2022-10-30 08:19:07'),
(5, 'Pemerintah Menurunkan Suku Bunga Properti', '/berita/Kebijakan Pemerintahpemerintah-menurunkan-suku-bunga-properti', '/Kebijakan Pemerintah/berita1.png', '2022-10-11', '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Indonesia terus bergerak untuk memasuki bonus demografi yang dicirikan dengan segmen kalangan produktif menjadi mayoritas. Untuk pasar properti hal ini tentunya sangat baik untuk mendorong kinerja bisnis karena kalangan produktif merupakan pasar utama yang akan membeli rumah.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Semoga artikel ini bermanfaat ya, GooProperter!</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Jika kamu sedang mencari rumah, apartemen, tanah atau yang lainnya di marketplace properti tepercaya dan aman, bisa mengunjungi laman goopro.id dan goopro.id/join untuk daftar sebagain bagian dari kami.</span><br></p>', 'Kebijakan Pemerintah', 'catur', 'aktif', '2022-10-25 23:53:19', '2022-10-30 08:18:58'),
(6, 'Pemerintah Menurunkan Suku Bunga Properti', '/berita/Kebijakan Pemerintahpemerintah-menurunkan-suku-bunga-properti', '/Kebijakan Pemerintah/pemerintah.png', '2022-10-11', '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Indonesia terus bergerak untuk memasuki bonus demografi yang dicirikan dengan segmen kalangan produktif menjadi mayoritas. Untuk pasar properti hal ini tentunya sangat baik untuk mendorong kinerja bisnis karena kalangan produktif merupakan pasar utama yang akan membeli rumah.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Namun pada kenyataannya situasi pasar belum bergairah khususnya dari aktivitas kalangan milenial yang membeli rumah maupun produk properti lainnya. Pemahaman yang rendah hingga harga properti yang tidak sesuai dengan penghasilan mayoritas milenial kerap disebut segmen ini seperti abai akan kebutuhan papannya. Rumah subsidi adalah sebuah program kepemilikan rumah dari Pemerintah yang dikhususkan untuk masyarakat berpenghasilan rendah. Program ini bertujuan untuk menyediakan rumah layak huni bagi MBR agar bisa memiliki hunian yang nyaman. Namun, seperti yang kita ketahui bersama bahwa terdapat beberapa aturan jika ingin membeli serta menempati rumah subsidi, termasuk melakukan renovasi rumah. Bagi Anda yang ingin melakukan renovasi rumah subsidi, berikut 6 aturan yang mesti diperhatikan.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Semoga artikel ini bermanfaat ya, GooProperter!</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Jika kamu sedang mencari rumah, apartemen, tanah atau yang lainnya di marketplace properti tepercaya dan aman, bisa mengunjungi laman goopro.id dan goopro.id/join untuk daftar sebagain bagian dari kami.</span><br></p>', 'Kebijakan Pemerintah', 'catur', 'aktif', '2022-10-25 23:53:19', '2022-10-26 00:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_beritas`
--

CREATE TABLE `kategori_beritas` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_beritas`
--

INSERT INTO `kategori_beritas` (`id_kategori`, `kategori`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kebijakan Pemerintah', 'aktif', '2022-10-25 23:16:00', '2022-10-26 00:30:45'),
(3, 'Berita & Pasar Properti', 'aktif', '2022-10-26 00:26:31', '2022-10-26 00:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_hunians`
--

CREATE TABLE `kategori_hunians` (
  `id_hunian` int(10) UNSIGNED NOT NULL,
  `hunian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_hunians`
--

INSERT INTO `kategori_hunians` (`id_hunian`, `hunian`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Apartemen', '/kategoriproperti/apartemen.png', 'aktif', '2022-10-30 06:09:33', '2022-10-30 08:02:06'),
(3, 'Rumah', '/kategoriproperti/rumah.png', 'aktif', '2022-10-30 08:02:23', '2022-10-30 08:02:23'),
(4, 'Pabrik', '/kategoriproperti/pabrik.png', 'aktif', '2022-10-30 08:02:43', '2022-10-30 08:02:43'),
(5, 'Gedung Perkantoran', '/kategoriproperti/gedung.png', 'aktif', '2022-10-30 08:02:58', '2022-10-30 08:04:12'),
(6, 'Ruko', '/kategoriproperti/ruko.png', 'aktif', '2022-10-30 08:03:41', '2022-10-30 08:03:41'),
(7, 'Tanah', '/kategoriproperti/tanah.png', 'aktif', '2022-10-30 08:04:00', '2022-10-30 08:04:00'),
(8, 'Gudang', '/kategoriproperti/gudang.png', 'aktif', '2022-10-30 08:04:54', '2022-10-30 08:04:54'),
(9, 'Rukan', '/kategoriproperti/rukan.png', 'aktif', '2022-10-30 08:05:10', '2022-10-30 08:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_propertis`
--

CREATE TABLE `kategori_propertis` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `properti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_propertis`
--

INSERT INTO `kategori_propertis` (`id_kategori`, `properti`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Dijual', 'aktif', '2022-10-30 06:02:59', '2022-10-30 06:02:59'),
(4, 'Disewakan', 'aktif', '2022-10-30 08:44:15', '2022-10-30 08:44:15'),
(5, 'Properti Baru', 'aktif', '2022-10-30 08:44:25', '2022-10-30 08:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_10_26_060914_create_kategori_beritas_table', 2),
(10, '2022_10_26_063704_create_beritas_table', 3),
(11, '2022_10_26_080719_create_sliders_table', 4),
(12, '2022_10_26_090313_create_kategori_propertis_table', 5),
(13, '2022_10_30_125619_create_kategori_hunians_table', 6),
(15, '2022_10_30_133556_create_propertis_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propertis`
--

CREATE TABLE `propertis` (
  `id_properti` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hunian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tidur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mandi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengembang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bangunan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eksterior` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibuat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listrik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parkir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sarpras` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertis`
--

INSERT INTO `propertis` (`id_properti`, `judul`, `slug`, `kategori`, `hunian`, `tempat`, `harga`, `tidur`, `mandi`, `informasi`, `pengembang`, `perm`, `bangunan`, `tanah`, `interior`, `eksterior`, `lantai`, `sertifikat`, `dibuat`, `listing`, `listrik`, `parkir`, `sarpras`, `video`, `latitude`, `longitude`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `agen`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangann', 'rumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangann-2210301538-935', 'Properti Baru', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '1', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \r\n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangann1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'aktif', '2022-10-30 07:08:59', '2022-10-30 09:15:38'),
(2, 'Dijual Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangannn', 'dijual-rumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangannn-2210301544-706', 'Dijual', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '1', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \r\n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Dijual Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangannn1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'nonaktif', '2022-10-30 07:08:59', '2022-10-30 09:15:44'),
(3, 'Disewakan Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan', 'disewakan-rumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangan', 'Dijual', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '1', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'aktif', '2022-10-30 07:08:59', '2022-10-30 09:15:07'),
(4, 'Properti BaruRumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan', 'properti-barurumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangan', 'Disewakan', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '1', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Properti BaruRumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'aktif', '2022-10-30 07:08:59', '2022-10-30 09:15:22'),
(5, 'Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangann', 'rumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangann-2210301526-995', 'Disewakan', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '1', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangann1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'aktif', '2022-10-30 07:08:59', '2022-10-30 09:15:26'),
(6, 'Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangann', 'rumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangann', 'Dijual', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangann1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'aktif', '2022-10-30 07:08:59', '2022-10-30 09:15:12'),
(7, 'Dijual Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangannn', 'dijual-rumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangannn', 'Dijual', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '1', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Dijual Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangannn1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'nonaktif', '2022-10-30 07:08:59', '2022-10-30 09:15:03'),
(8, 'Disewakan Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan', 'disewakan-rumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangan-2210301518-671', 'Disewakan', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '1', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'aktif', '2022-10-30 07:08:59', '2022-10-30 09:15:18'),
(9, 'Properti BaruRumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan', 'properti-barurumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangan-2210301530-961', 'Properti Baru', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '1', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Properti BaruRumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'aktif', '2022-10-30 07:08:59', '2022-10-30 09:15:30'),
(10, 'Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangann', 'rumah-siap-huni-di-pusat-kota-bandung-cluster-parahyangann-2210301534-297', 'Properti Baru', 'Apartemen', 'Dago, Bandung', '350.000.000,00', '2', '1', 'Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama', 'N/A', '10.777.000', '58', '65', 'Tidak Berperabot', 'Ada', '1', 'SHM - Sertifikat Hak Milik', '1998', '187', '950', '2', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Keamanan 24 Jam</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Taman</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">AC</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Wifi</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Masjid</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Kolam Renang</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mSaxsQdE64g\" title=\"YouTube video player\" \n                        frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-6.950915171123783', '107.66563770279858', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangann1.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan2.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan3.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan4.png', '/Dijual/Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan5.png', 'catur', 'aktif', '2022-10-30 07:08:59', '2022-10-30 09:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id_slider` int(10) UNSIGNED NOT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id_slider`, `slider`, `status`, `created_at`, `updated_at`) VALUES
(2, '/slider/banner1.jpg', 'aktif', '2022-10-26 01:21:14', '2022-10-26 01:21:14'),
(3, '/slider/banner2.jpg', 'aktif', '2022-10-30 07:32:14', '2022-10-30 07:32:14'),
(4, '/slider/banner3.jpg', 'aktif', '2022-10-30 07:32:21', '2022-10-30 07:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `notelp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'catur', 'catursn@gmail.com', '12324353423', '$2y$10$sogmVcHJp/fYNTwharFIzeQGpmnO5u.cADET8Xf5MEaNYbltcPjDK', NULL, '2022-10-25 00:53:49', '2022-10-25 02:15:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori_beritas`
--
ALTER TABLE `kategori_beritas`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_hunians`
--
ALTER TABLE `kategori_hunians`
  ADD PRIMARY KEY (`id_hunian`);

--
-- Indexes for table `kategori_propertis`
--
ALTER TABLE `kategori_propertis`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `propertis`
--
ALTER TABLE `propertis`
  ADD PRIMARY KEY (`id_properti`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id_berita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_beritas`
--
ALTER TABLE `kategori_beritas`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_hunians`
--
ALTER TABLE `kategori_hunians`
  MODIFY `id_hunian` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_propertis`
--
ALTER TABLE `kategori_propertis`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propertis`
--
ALTER TABLE `propertis`
  MODIFY `id_properti` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id_slider` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
