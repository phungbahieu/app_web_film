-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2021 lúc 01:28 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `happyfiled`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `com`
--

CREATE TABLE `com` (
  `com_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `film_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `com`
--

INSERT INTO `com` (`com_id`, `name`, `film_id`, `com`, `created_at`, `updated_at`) VALUES
(11, 'nam', '10', 'phim hay', NULL, NULL),
(12, 'nam1', '10', 'namhajjdad', NULL, NULL),
(13, 'nam', '9', 'phim hay lắm', NULL, NULL),
(14, 'nam1', '12', 'phim dỡ', NULL, NULL),
(15, 'namn', '13', 'phim khá hay', NULL, NULL),
(16, 'nam', '7', 'phim kha hay', NULL, NULL),
(17, 'nam', '6', 'dffd', NULL, NULL),
(18, 'nam', '9', 'hi', NULL, NULL),
(19, 'nam', '14', 'phim hay', NULL, NULL),
(23, 'nam', '20', 'hay', NULL, NULL),
(24, 'nam', '21', 'hhhhh', NULL, NULL),
(25, 'nam', '23', 'hay', NULL, NULL),
(26, 'tho', '26', 'phim', NULL, NULL),
(27, 'nam phan văn năm', '20', 'ass', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `danhgia_id` int(10) UNSIGNED NOT NULL,
  `film_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`danhgia_id`, `film_id`, `danhgia`, `created_at`, `updated_at`) VALUES
(9, '7', '3', NULL, NULL),
(10, '7', '3', NULL, NULL),
(11, '7', '3', NULL, NULL),
(12, '7', '4', NULL, NULL),
(13, '7', '3', NULL, NULL),
(14, '7', '3', NULL, NULL),
(15, '7', '3', NULL, NULL),
(16, '7', '10', NULL, NULL),
(17, '4', '1', NULL, NULL),
(18, '4', '10', NULL, NULL),
(19, '6', '5', NULL, NULL),
(20, '6', '3', NULL, NULL),
(21, '6', '1', NULL, NULL),
(22, '6', '1', NULL, NULL),
(23, '6', '1', NULL, NULL),
(24, '12', '1', NULL, NULL),
(25, '9', '5', NULL, NULL),
(26, '9', '2', NULL, NULL),
(27, '9', '3', NULL, NULL),
(28, '11', '1', NULL, NULL),
(29, '13', '2', NULL, NULL),
(30, '20', '5', NULL, NULL),
(31, '20', '2', NULL, NULL),
(32, '20', '3', NULL, NULL),
(33, '20', '5', NULL, NULL),
(34, '22', '4', NULL, NULL),
(35, '19', '5', NULL, NULL),
(36, '19', '4', NULL, NULL),
(37, '19', '1', NULL, NULL),
(39, '23', '2', NULL, NULL),
(40, '23', '3', NULL, NULL),
(41, '26', '3', NULL, NULL),
(42, '20', '2', NULL, NULL),
(43, '21', '5', NULL, NULL),
(44, '27', '2', NULL, NULL),
(45, '27', '2', NULL, NULL),
(46, '25', '4', NULL, NULL),
(47, '29', '3', NULL, NULL),
(48, '29', '2', NULL, NULL),
(49, '29', '2', NULL, NULL),
(50, '28', '3', NULL, NULL),
(51, '20', '3', NULL, NULL),
(52, '20', '4', NULL, NULL),
(53, '20', '4', NULL, NULL),
(54, '22', '1', NULL, NULL),
(55, '28', '2', NULL, NULL),
(56, '28', '5', NULL, NULL),
(57, '28', '5', NULL, NULL),
(58, '28', '5', NULL, NULL),
(59, '28', '5', NULL, NULL),
(60, '28', '5', NULL, NULL),
(61, '28', '5', NULL, NULL),
(62, '28', '5', NULL, NULL),
(63, '28', '1', NULL, NULL),
(64, '28', '1', NULL, NULL),
(65, '28', '1', NULL, NULL),
(66, '28', '1', NULL, NULL),
(67, '28', '1', NULL, NULL),
(68, '28', '1', NULL, NULL),
(69, '24', '1', NULL, NULL),
(70, '21', '1', NULL, NULL),
(71, '21', '1', NULL, NULL),
(72, '24', '2', NULL, NULL),
(73, '24', '2', NULL, NULL),
(74, '24', '4', NULL, NULL),
(75, '24', '4', NULL, NULL),
(76, '23', '5', NULL, NULL),
(77, '23', '5', NULL, NULL),
(78, '21', '3', NULL, NULL),
(79, '28', '3', NULL, NULL),
(80, '21', '3', NULL, NULL),
(81, '21', '5', NULL, NULL),
(82, '21', '5', NULL, NULL),
(83, '21', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `film`
--

CREATE TABLE `film` (
  `film_id` int(10) UNSIGNED NOT NULL,
  `film_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `quocgia_id` int(11) NOT NULL,
  `link1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link3` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `film_tacgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `film_dienvien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `film_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `film`
--

INSERT INTO `film` (`film_id`, `film_ten`, `theloai_id`, `year_id`, `quocgia_id`, `link1`, `link2`, `link3`, `film_tacgia`, `film_dienvien`, `time`, `film_content`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(20, 'Sát Thủ John Wick 2', 8, 8, 4, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/YyamDu7OezA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe class=\"video\" width=\"695\" height=\"390\" src=\"https://www.fembed.com/v/8e8-la8w5gjj66e#John.Wick.Chapter.2.2017.1080p.BluRay.x264-[YTS.AG].mp4\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe class=\"video\" width=\"100%\" height=\"390\" src=\"https://s2.gdrive-player.com/video/TcULaVFHN1qJBuT/\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>', 'Chad Stahelski', 'Keanu Reeves, Riccardo Scamarcio, Ian McShane', '122 Phút', '<p>&lt;p&gt;&lt;big&gt;John Wick l&amp;agrave; một s&amp;aacute;t thủ kh&amp;eacute;t tiếng trong giới x&amp;atilde; hội đen. Những kẻ trong nghề thường truyền tai nhau rằng: &amp;ldquo;Hắn kh&amp;ocirc;ng phải l&amp;agrave; &amp;aacute;c quỷ. Hắn l&amp;agrave; người được cử đi để giết &amp;aacute;c quỷ&amp;rdquo;. Phần hai của John Wick bắt đầu khi nh&amp;acirc;n vật s&amp;aacute;t thủ m&amp;aacute;u lạnh của Keanu Reeves đặt ch&amp;acirc;n tới th&amp;agrave;nh phố Rome, Italy v&amp;agrave; kh&amp;ocirc;ng may đụng độ với một g&amp;atilde; gangster kh&amp;eacute;t tiếng tại đất nước n&amp;agrave;y...&lt;/big&gt;&lt;/p&gt;</p>', '10.jpg', 1, NULL, NULL),
(21, 'Biệt Đội Cún Cưng', 9, 9, 5, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/qJTuvua2I_U\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe class=\"video\" width=\"695\" height=\"390\" src=\"https://www.fembed.com/v/5q8-ncdn26x080q#(2018) Show Dogs.mp4\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe class=\"video\" width=\"100%\" height=\"390\" src=\"https://s2.gdrive-player.com/video/GqvJRUaq1LqemHO/\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>', 'Raja Gosnell', 'Will Arnett, Ludacris, Natasha Lyonne', '92 Phút', '<p>&lt;p&gt;&lt;big&gt;Max &amp;ndash; một ch&amp;uacute; ch&amp;oacute; cảnh s&amp;aacute;t v&amp;agrave; cộng sự l&amp;agrave; con người đang điều tra về một nh&amp;oacute;m tội phạm. Ch&amp;uacute;ng lợi dụng 1 chương tr&amp;igrave;nh về ch&amp;oacute; để thực hiện phi vụ phi ph&amp;aacute;p của m&amp;igrave;nh.&lt;/big&gt;&lt;/p&gt;</p>', 'show-dog9858.jpg', 1, NULL, NULL),
(22, 'Chàng Mù Số Nhọ', 5, 9, 4, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/2iVYI99VGaw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe class=\"video\" width=\"695\" height=\"390\" src=\"https://www.fembed.com/v/z8rxpsj-w5nx2zp#(2018) Chàng Mù Số Nhọ - Andhadhun.mkv\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe class=\"video\" width=\"100%\" height=\"500px\" src=\"https://s2.gdrive-player.com/video/9aJMXjWwmSZLYyR/\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>', 'Sriram Raghavan', 'Tabu, Ayushmann Khurrana, Radhika Aptev', '139 Phút', '<p>&lt;p&gt;Đột nhi&amp;ecirc;n, một loạt c&amp;aacute;c vụ &amp;aacute;n mạng li&amp;ecirc;n tiếp xảy ra đều c&amp;oacute; mối li&amp;ecirc;n hệ với ch&amp;agrave;ng m&amp;ugrave; ấy. Liệu tội &amp;aacute;c đ&amp;oacute; c&amp;oacute; được phơi b&amp;agrave;y ra &amp;aacute;nh s&amp;aacute;ng hay sẽ bị ch&amp;ocirc;n v&amp;ugrave;i theo đ&amp;ocirc;i mắt của người nghệ sĩ m&amp;ugrave;?&amp;nbsp;&lt;/p&gt;</p>', 'andhadhun85.jpg', 1, NULL, NULL),
(23, 'Chú Hề Ma Quái 2', 9, 9, 5, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/qblBGRBtmU0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/qblBGRBtmU0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/qblBGRBtmU0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Andy Muschietti', 'Jessica Chastain, James McAvoy, Bill Hader', '169 Phút', '<p>&lt;p&gt;&lt;big&gt;Mặc d&amp;ugrave; c&amp;oacute; thể cả nh&amp;oacute;m đ&amp;atilde; trưởng th&amp;agrave;nh v&amp;agrave; kh&amp;ocirc;n ngoan hơn, cuộc chiến của họ với Pennywise vẫn c&amp;ograve;n đ&amp;oacute; những hậu quả bất ngờ, thậm ch&amp;iacute; khiến một số th&amp;agrave;nh vi&amp;ecirc;n phải trải qua đau đớn đến tột c&amp;ugrave;ng.&lt;/big&gt;&lt;/p&gt;</p>', 'it-chapter-256.jpg', 1, NULL, NULL),
(24, 'Người Nhện: Xa Nhà', 9, 9, 5, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/sx8v7_TpSnM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe class=\"video\"  width=\"695\" height=\"390\" src=\"https://www.fembed.com/v/8e8-la8zk00w604#(2019) Người Nhện: Xa Nhà - Spider Man Far From Home.mkv\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe class=\"video\" width=\"100%\" height=\"390\" src=\"https://s2.gdrive-player.com/video/FPTIo5A99RG950o/\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>', 'Jon Watts', 'Tom Holland, Samuel L. Jackson, Jake Gyllenhaal', '134 Phút', '<p>dgds</p>', 'spider-man-far-from-home26.jpg', 1, NULL, NULL),
(25, 'Dị Nhân 8: Phượng Hoàng Bóng Tối', 9, 9, 5, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/6E5fisz-fL4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/6E5fisz-fL4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/6E5fisz-fL4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Simon Kinberg', 'Simon Kinberg', '113 Phút', '<p>&lt;p&gt;&lt;big&gt;X-Men: Dark Phoenix l&amp;agrave; phần mở rộng của vũ trụ X-Men khi Jean Grey thức tỉnh v&amp;agrave; lĩnh hội được Phoenix Force (Thế Lực Phượng Ho&amp;agrave;ng) - đại diện cho tổng năng lượng, sức mạnh của vạn thể đ&amp;atilde; v&amp;agrave; lu&amp;ocirc;n tồn tại. Nguồn sức mạnh v&amp;ocirc; tận đem lại cho Jean Grey năng lực khủng khiếp nhưng mặt tối của sức mạnh cũng thức tỉnh theo. Liệu nh&amp;oacute;m X-Men sẽ l&amp;agrave;m g&amp;igrave; để ngăn chặn sự diệt vong của nh&amp;acirc;n loại do Jean Grey c&amp;ugrave;ng Phoenix Force g&amp;acirc;y ra?&lt;/big&gt;&lt;/p&gt;</p>', 'x-men-8-dark-phoenix67.jpg', 1, NULL, NULL),
(26, 'Chúa Tể Godzilla: Đế Vương Bất Tử', 9, 9, 5, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/zLR-qtRfY2Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/zLR-qtRfY2Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/zLR-qtRfY2Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Michael Dougherty', 'Kyle Chandler, Vera Farmiga, Millie Bobby Brown', '131 Phút', '<p>rc;̀u Ghidorah trỗi dậy k&amp;eacute;o theo sự</p>', 'godzilla-king-of-monster68.jpg', 1, NULL, NULL),
(27, 'Đẳng Cấp Thú Cưng 2', 9, 9, 5, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/u73LnlLaWWk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/u73LnlLaWWk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/u73LnlLaWWk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Chris Renaud', 'Chris Renaud', '97 Phút', '<p>&lt;p&gt;&lt;big&gt;Cũng như bao th&amp;uacute; cưng kh&amp;aacute;c, khi đến ph&amp;ograve;ng kh&amp;aacute;m Max đ&amp;atilde; kh&amp;ocirc;ng giấu nổi vẻ &amp;acirc;u lo tr&amp;ecirc;n khu&amp;ocirc;n mặt. Đ&amp;atilde; vậy, ch&amp;uacute; ch&amp;oacute; tội nghiệp c&amp;ograve;n gặp th&amp;ecirc;m nhiều người bạn đồng loại v&amp;ocirc; c&amp;ugrave;ng bất b&amp;igrave;nh thường. Đầu ti&amp;ecirc;n l&amp;agrave; ch&amp;uacute; m&amp;egrave;o x&amp;aacute;m th&amp;acirc;n thiện bắt chuyện với Max, trấn an cậu rằng b&amp;aacute;c sĩ th&amp;uacute; y ở đ&amp;acirc;y rất giỏi nhất ng&amp;agrave;nh về chữa trị chứng&amp;hellip; rối loạn cư xử. V&amp;agrave; rồi th&amp;igrave; ch&amp;uacute; m&amp;egrave;o bắt đầu &amp;ldquo;nổi đ&amp;oacute;a&amp;rdquo; c&amp;agrave;o cấu chủ. Lần lượt sau đ&amp;oacute; Max được gặp ch&amp;uacute; chuột hamster x&amp;aacute;m đi&amp;ecirc;n cuồng &amp;ldquo;chạy bộ&amp;rdquo; giảm c&amp;acirc;n, một ch&amp;uacute; ch&amp;oacute; n&amp;acirc;u lu&amp;ocirc;n ph&amp;acirc;n v&amp;acirc;n rằng liệu m&amp;igrave;nh c&amp;oacute; đủ ngoan, lại c&amp;ograve;n cả một cặp m&amp;egrave;o sinh đ&amp;ocirc;i c&amp;oacute; nụ cười v&amp;ocirc; c&amp;ugrave;ng qu&amp;aacute;i dị. Tr&amp;aacute;nh vỏ dưa lại gặp vỏ dừa, Max vốn đ&amp;atilde; &amp;acirc;u lo lại c&amp;agrave;ng trở n&amp;ecirc;n sợ sệt hơn với cuộc thăm kh&amp;aacute;m trước mắt.&lt;/big&gt;&lt;/p&gt;</p>', 'jurrassic-world-24.jpg', 1, NULL, NULL),
(28, 'sds', 6, 9, 5, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/XwA4a3oqEGg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/XwA4a3oqEGg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/XwA4a3oqEGg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'phan năm', 'phan năm', '120p', '<p>Ch&agrave;o c&aacute;c bạn! H&ocirc;m nay m&igrave;nh xin giới thiệu c&aacute;ch hiển thị gợi &yacute; khi t&igrave;m kiếm trong laravel bằng ajax, m&igrave;nh xin chia th&agrave;nh 2 b&agrave;i.</p>', 'a-dog-way-home82.jpg', 1, NULL, NULL),
(29, 'Doraemon: Nobita Và Chuyến Thám Hiểm Mặt Trăng', 5, 3, 9, '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/O61aTrlHJRA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/O61aTrlHJRA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/O61aTrlHJRA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Jeong-beom Lee, Shinnosuke Yakuwa', 'Wasabi Mizuta, Sang Hyun Uhm, Jung-jae Lee', '110 Phút', '<p>Doraemon: Nobita&#39;s Chronicle Of The Moon Exploration</p>', 'doraemon-moon-exloration84.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filmyeuthich`
--

CREATE TABLE `filmyeuthich` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_09_030837_create_tbl_admin_table', 1),
(5, '2020_12_09_042510_create_tbl_danhmuc_sanpham', 1),
(6, '2020_12_11_030307_create_tbl_thuonghieu_sanpham', 1),
(7, '2020_12_12_133358_create_tbl_sanpham', 1),
(8, '2020_12_20_151027_create_theloai', 2),
(9, '2020_12_20_160158_create_quocgia', 3),
(10, '2020_12_20_160315_create_year', 3),
(11, '2020_12_21_140136_create_film', 4),
(12, '2020_12_21_143354_create_film', 5),
(13, '2020_12_21_154838_create_film', 6),
(14, '2020_12_21_160105_create_film', 7),
(15, '2020_12_22_022640_create_film', 8),
(16, '2020_12_28_085601_create_comment', 9),
(17, '2020_12_28_092733_create_danhgia', 9),
(18, '2021_01_04_101952_create_quangcao', 10),
(19, '2021_01_06_183448_create_com', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quangcao_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quangcao_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`id`, `quangcao_ten`, `quangcao_link`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(3, 'fff', 'https://www.pt1668.com/vn/#/', '136043.gif', 1, NULL, NULL),
(4, 'sffsdfdwf', 'https://www.youtube.com/results?search_query=banner+qu%E1%BA%A3ng+c%C3%A1o+%C6%B0eb+laravel', 'banner-left89.png', 1, NULL, NULL),
(5, 'trutrtur', 'ẻyery', '13604391.gif', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

CREATE TABLE `quocgia` (
  `quocgia_id` int(10) UNSIGNED NOT NULL,
  `quocgia_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quocgia_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`quocgia_id`, `quocgia_ten`, `quocgia_status`, `created_at`, `updated_at`) VALUES
(2, 'mỹ', 1, NULL, NULL),
(3, 'Anh', 1, NULL, NULL),
(4, 'Viet Nam', 1, NULL, NULL),
(5, 'Trung Quoc', 1, NULL, NULL),
(6, 'Phap', 1, NULL, NULL),
(7, 'Nga', 1, NULL, NULL),
(8, 'Indonesia', 1, NULL, NULL),
(9, 'Nhât bản', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'phanvannam0303@gmail.com', '123456', 'nam', '1111111111', NULL, NULL),
(15, 'pvnam.19it4@sict.udn.vn', '123456789', 'Năm Đẹp Trai', '0898700272', '2020-12-27 19:50:43', '2020-12-27 19:50:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `theloai_id` int(10) UNSIGNED NOT NULL,
  `theloai_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`theloai_id`, `theloai_ten`, `theloai_status`, `created_at`, `updated_at`) VALUES
(3, 'phim thuyết minh', 1, NULL, NULL),
(4, 'Phim Bộ', 1, NULL, NULL),
(5, 'Phim Lẻ', 1, NULL, NULL),
(6, 'Phim Hài', 1, NULL, NULL),
(7, 'Phim Kinh Dị', 1, NULL, NULL),
(8, 'Phim Võ Thuật', 1, NULL, NULL),
(9, 'Phim Kinh Dị', 1, NULL, NULL),
(10, 'x', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `year`
--

CREATE TABLE `year` (
  `year_id` int(10) UNSIGNED NOT NULL,
  `year_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `year`
--

INSERT INTO `year` (`year_id`, `year_ten`, `year_status`, `created_at`, `updated_at`) VALUES
(2, '2016', 1, NULL, NULL),
(3, '2017', 0, NULL, NULL),
(4, '2018', 1, NULL, NULL),
(5, '2019', 1, NULL, NULL),
(6, '2020', 1, NULL, NULL),
(7, '2015', 1, NULL, NULL),
(8, '2014', 1, NULL, NULL),
(9, '2013', 1, NULL, NULL),
(10, 'pkkkkk', 0, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`danhgia_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`film_id`);

--
-- Chỉ mục cho bảng `filmyeuthich`
--
ALTER TABLE `filmyeuthich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`quocgia_id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_email` (`admin_email`),
  ADD KEY `admin_email_2` (`admin_email`),
  ADD KEY `admin_name` (`admin_name`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`theloai_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `com`
--
ALTER TABLE `com`
  MODIFY `com_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `danhgia_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `film`
--
ALTER TABLE `film`
  MODIFY `film_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `filmyeuthich`
--
ALTER TABLE `filmyeuthich`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  MODIFY `quocgia_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `theloai_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
