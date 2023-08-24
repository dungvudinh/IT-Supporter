-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 05:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it-supporter`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `account_name` char(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_name`, `password`) VALUES
(6, '0869370492', '144202'),
(7, '0869370952', '1'),
(9, '0869374865', '1'),
(10, '0813072111', '1'),
(11, '0355969145', '1'),
(12, '0355969146', '1'),
(13, '0345059570', '1');

-- --------------------------------------------------------

--
-- Table structure for table `app_form_client`
--

CREATE TABLE `app_form_client` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaKhoa` int(11) NOT NULL,
  `MaBan` int(11) NOT NULL,
  `note` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `unread` tinyint(1) NOT NULL,
  `sdt` char(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `isReceived` tinyint(1) NOT NULL,
  `isAccept` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `app_form_client`
--

INSERT INTO `app_form_client` (`id`, `full_name`, `MaKhoa`, `MaBan`, `note`, `create_at`, `unread`, `sdt`, `email`, `isReceived`, `isAccept`) VALUES
(1, 'Hoàng Thảo Mai', 1, 1, 'Bằng sự nhiệt huyết, em sẽ đóng góp và tạo ra   giá trị', '2023-06-05 07:00:00', 1, '0869370492', 'anhkho881@gmail.com', 1, 0),
(2, 'Nguyễn Thị Dung ', 2, 2, 'em sẽ cố gắng hết mình', '2023-06-18 00:00:00', 1, '0869370492', 'dung@gmail.com', 1, 1),
(3, 'Hoàng Văn Thắng ', 3, 3, 'Đồng hành cùng IT Supporter là 1 vinh dự đối với em', '2023-06-07 08:00:00', 1, '0869370492', 'hoang@gmail.com', 1, 1),
(4, 'Hoàng Thảo Linh', 1, 2, 'hihi', '2023-06-07 06:00:00', 1, '0869370492', 'linh@gmail.com', 1, NULL),
(5, 'Vũ Huy Công ', 1, 1, 'ádasdasd', '2023-08-10 06:27:35', 1, '123456789', 'congml@gmail.com', 0, NULL),
(6, 'Ducle1', 2, 2, '2221442', '2023-08-16 23:03:32', 1, '14142', '411441@gmail.com', 0, NULL),
(7, 'Vũ Huy Công ', 1, 1, 'abcd', '2023-08-19 14:49:35', 1, '0869370492', 'congml@gmail.com', 1, 1),
(8, 'Nguyễn Xuân Tú', 1, 1, 'em sẽ cố gắng phát huy ', '2023-08-22 14:12:34', 1, '0355969146', 'tunguyen@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `app_form_server`
--

CREATE TABLE `app_form_server` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `end_time` datetime NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `start_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_form_server`
--

INSERT INTO `app_form_server` (`id`, `title`, `content`, `end_time`, `image_url`, `create_at`, `start_time`) VALUES
(1, 'Tuyển Thành Viên  Mùa Thứ 15', 'Sân chơi dành cho các bạn có đam mê về quay phim, media, sửa chữa kĩ thuật phần mềm,  phần cứng', '2023-06-10 23:59:59', 'tech_img2.jpg', '2023-06-08 06:00:00', '2023-06-09 20:59:59'),
(2, 'Chương trình Tech Support ', 'Nhanh chân đến với chúng tớ.Chương trình chỉ diễn ra trong 2 ngày 23 và 29/5   ', '2023-06-12 23:59:59', 'tech_img.jpg\r\n', '2023-06-08 08:00:00', '2023-06-09 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ban`
--

CREATE TABLE `ban` (
  `MaBan` int(11) NOT NULL,
  `TenBan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ban`
--

INSERT INTO `ban` (`MaBan`, `TenBan`) VALUES
(1, 'Ban Sự Kiện'),
(2, 'Ban Truyền Thông'),
(3, 'Ban Kỹ Thuật');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `buudget_left` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`buudget_left`) VALUES
(4800000);

-- --------------------------------------------------------

--
-- Table structure for table `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `MaCV` int(11) NOT NULL,
  `TenCV` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chuc_vu`
--

INSERT INTO `chuc_vu` (`MaCV`, `TenCV`) VALUES
(1, 'Admin'),
(2, 'Thành Viên'),
(3, 'Thủ Quỹ'),
(4, 'CTV');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `id` int(11) NOT NULL,
  `content` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` double NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `unread` tinyint(1) NOT NULL,
  `isConfirmed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`id`, `content`, `payment`, `title`, `create_at`, `unread`, `isConfirmed`) VALUES
(1, 'mua hoa :300,000đ.mua băng keo:30,000đ.', 330000, 'chi tiêu ngày 14/06/2023', '2023-06-14 10:18:06', 1, 1),
(2, 'mua thiệp:250,000đ.mua pháo:520,000đ.', 770000, 'Sự  kiện chào đón tân sinh viên K17 (23/06/2022)', '2023-06-14 14:19:01', 1, 1),
(3, 'Mua hoa :100,000đ.Mua pháo :50,000đ.', 150000, 'Chi tiêu ngày  19-8 ', '2023-08-19 14:45:19', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_url`) VALUES
('346104065_1436663207137088_7737948052969564715_n.jpg'),
('346104065_1436663207137088_7737948052969564715_n.jpg'),
('346104065_1436663207137088_7737948052969564715_n.jpg'),
('346104065_1436663207137088_7737948052969564715_n.jpg'),
('Capture6.PNG'),
('Capture6.PNG'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
(''),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg'),
('999-Anh-Gai-Xinh-Viet-Nam-Hot-Girl-Cute-De (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` int(11) NOT NULL,
  `TenKhoa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`) VALUES
(1, 'Công Nghệ Thông Tin'),
(2, 'Kỹ Thuật Phần Mềm'),
(3, 'Khoa Học Máy Tính');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image_url`, `title`, `content`, `create_at`) VALUES
(9, '20230822130838.jpg', 'Cáp quang biển lại gặp sự cố mới', 'Một nhánh trên tuyến cáp biển APG, tuyến cáp có băng thông lớn nhất kết nối Việt Nam với thế giới, đã phát sinh lỗi gần trạm cập bờ Đà Nẵng, giữa lúc cả 5 tuyến cáp quang chưa sửa xong. Trong đó, tuyến AAE-1 đã mất toàn bộ dung lượng kết nối quốc tế từ Việt Nam đi Hong Kong và dự kiến được sửa từ ngày 2/5 đến 17/5. Sự cố này gây ra nhiều khó khăn cho việc truy cập Internet tại Việt Nam. Việt Nam đang đặt mục tiêu sẽ có 10 tuyến cáp quang biển trong hai năm tới, trong đó có ba tuyến do doanh nghiệp trong nước làm chủ để tránh tình trạng phụ thuộc vào các liên minh.', '2023-08-22 13:54:38'),
(10, '20230822130810.jpg', 'Musk cho rằng cần \'công tắc ngắt phần cứng AI\'', 'Elon Musk nói rằng các chính phủ nên có một số kế hoạch dự phòng và cách để tắt AI nếu nó vượt ngoài tầm kiểm soát.\r\nTrong phần hai chương trình Tucker Carlson Tonight của Fox News ngày 18/4, CEO Twitter cho rằng cơ quan quản lý nên can thiệp vào các trung tâm cung cấp năng lượng cho chương trình AI.\r\n\"Không cần phải cho nổ tung chúng, chỉ cần cắt điện\", ông nói. \"Nếu chúng ta lo ngại và không thể dừng AI bằng các lệnh phần mềm, chúng ta sẽ cần một số công tắc ngắt phần cứng\".\r\nKhi đồng sáng lập OpenAI năm 2015, Musk nói trí tuệ nhân tạo là \"mối đe dọa hiện hữu lớn nhất\" đối với nhân loại. Trong phần đầu chương trình Tucker Carlson Tonight, Musk nói \"không quan tâm việc họ đang làm\" khi nhắc đến OpenAI. CEO Twitter cho biết ông đã tham gia thành lập công ty do bất đồng quan điểm với Larry Page, nhà đồng sáng lập Google.\r\nTrong khi đó, Musk cũng đang có kế hoạch tạo ra một \"AI tìm kiếm sự thật để cố gắng hiểu bản chất của vũ trụ\". Ông dự định gọi nó là TruthGPT, ám chỉ bản chất trái ngư', '2023-08-22 13:55:10'),
(11, '20230822130851.jpg', 'Vi xử lý MediaTek Dimensity 9300 bị rò rỉ những thông tin đầu tiên', 'Leaker Digital Chat Station đã tuyên bố rằng, vi xử lý cao cấp nhất tiếp theo của MediaTek dự kiến sẽ được đặt tên là Dimensity 9300 và sẽ được sản xuất dựa trên tiến trình N4P của TSMC. Vivo cũng sẽ đồng phát triển và trang bị con chip này trên Vivo X100.\r\nTiến trình N4P hứa hẹn sẽ mang lại những cải tiến gồm có hiệu suất tăng 11% so với N5, cải thiện 6% so với N4, tiết kiệm 22% năng lượng sử dụng và tăng 6% mật độ bóng bán dẫn.\r\nVi xử lý MediaTek Dimensity 9300 được cho là sẽ có nhân siêu lớn Cortex X4, nhân lớn Cortex A715 và nhân nhỏ A515, bố cục này sẽ cho phép con chip xử lý hiệu quả, tối ưu hoá các tác vụ, công việc khác nhau.\r\nBên cạnh đó, tiến trình N4P còn cho phép cung cấp các bản cập nhật phần mềm dễ dàng hơn so với 5 nm, giảm chi phí R&D và tiết kiệm năng lượng.', '2023-08-22 13:55:51'),
(12, '20230822130822.jpg', 'Cảnh báo thủ đoạn mới nhằm chiếm đoạt \'dữ liệu khuôn mặt\'', 'Hình thức lừa đảo mới ở Việt Nam liên quan đến xác thực thông tin cá nhân gọi là KYC (Know Your Customer). Kẻ gian giả vờ là nhân viên hoặc người quen để thực hiện cuộc gọi video, yêu cầu nạn nhân thực hiện một số hành động nhất định. Trong khi ghi lại cuộc gọi video, kẻ gian có thể thu thập thông tin cá nhân của nạn nhân và sử dụng để mở tài khoản ngân hàng hoặc ví điện tử trên tên nạn nhân. Đặc biệt, thời gian gần đây, các trường hợp bị chiếm đoạt tài sản bằng hình thức sử dụng công nghệ Deepfake diễn biến phức tạp hơn. Deepfake là cụm từ được kết hợp từ \"deep learning\" và \"fake\", là phương thức sử dụng trí tuệ nhân tạo để tạo ra các sản phẩm công nghệ giả dưới dạng âm thanh (giọng nói), hình ảnh (khuôn mặt), thậm chí tạo ra video với mục đích giả giọng nói, khuôn mặt người quen của nạn nhân trên mạng xã hội... để lừa đảo chiếm đoạt tài sản. Mọi người cẩn trọng với các cuộc gọi video như vậy và không cung cấp thông tin cá nhân cho bất kỳ ai mà họ không biết. Nếu có hoạt động nghi ngờ', '2023-08-22 13:56:22'),
(13, '20230822130843.jpg', 'Công nghệ chống nhìn trộm trên laptop', 'Tính năng SureView do HP hợp tác với 3M giúp màn hình laptop gần như không thể xem được nội dung ở góc quá 70 độ.\r\nCác dòng laptop HP cao cấp ra mắt năm 2023 như EliteBook 1040 G10 được trang bị công nghệ SureView, có thể bật hoặc tắt nhanh bằng nút riêng trên bàn phím và mất khoảng một giây để màn hình chuyển chế độ hiển thị. Khi bật, chỉ người ngồi chính diện mới có thể quan sát nội dung. Từ góc hai bên, màn hình chỉ hiển thị một màu như bị bóng sáng.\r\nSureView là công nghệ do HP và 3M hợp tác sản xuất. Ở chế độ bật, màn hình tự giảm 95% độ sáng ở phạm vi góc nhìn lớn hơn 70 độ (35 độ sang mỗi bên nếu tính từ góc nhìn thẳng). Tuy nhiên, khi bật chống nhìn trộm, khả năng hiển thị của màn hình cũng bị giảm với người sử dụng chính. Trên các model mới, tình trạng này đã được cải tiến, cho phép tùy chỉnh độ sáng vùng khi bật.\r\nNgoài chống nhìn trộm, EliteBook 1040 G10 còn tích hợp giải pháp bảo mật HP Wolf Security hỗ trợ từ khóa BIOS đến việc sử dụng thông thường như trình duyệt web. Máy', '2023-08-22 13:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `repair_form`
--

CREATE TABLE `repair_form` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` char(10) NOT NULL,
  `tinh_trang` varchar(200) NOT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `unread` tinyint(1) NOT NULL,
  `repair_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repair_form`
--

INSERT INTO `repair_form` (`id`, `full_name`, `sdt`, `tinh_trang`, `mo_ta`, `create_at`, `unread`, `repair_status`) VALUES
(1, 'Nguyễn Thị Dung ', '0869370492', 'lap không lên nguồn', 'Mình đang dùng bình thường thì máy bị tắt nguồn. Mình đã cố gắng thử cắm sạc nhưng bất thành', '2023-06-06 07:00:00', 1, 1),
(2, 'Vũ Huy Công ', '0869370492', 'Máy hỏng ', 'abcd', '2023-08-19 14:43:18', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Content` text NOT NULL,
  `StarNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `Name`, `Content`, `StarNumber`) VALUES
(1, '353354', '533534', 5),
(5, '45646', '474747', 5),
(20, 'dydjyytrjytfyj', 'djjjjjjj322', 2),
(21, 'duc le', 'asgag', 4),
(22, 'dydjyytrjytfyj', 'wddww', 1),
(23, 'wegweag', 'gesgsegse', 4),
(24, 'Vũ Huy Công ', 'abcd', 1),
(25, 'Vũ Huy Công ', 'abcde', 5);

-- --------------------------------------------------------

--
-- Table structure for table `su_kien`
--

CREATE TABLE `su_kien` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `unread` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `su_kien`
--

INSERT INTO `su_kien` (`id`, `title`, `image_url`, `content`, `create_at`, `unread`) VALUES
(1, 'Sự kiện chào đón tân sinh viên khóa K17', '20230621160630.jpg', 'Chuỗi hoạt động chào mừng tân sinh viên khóa K17 được tổ chức tại cơ sở Hà Nam. Các trưởng ban chú ý phân công nhiệm vụ cho các thành viên.Đôn đốc để hoat động được diễn ra 1 cách tốt đẹp', '2023-06-05 14:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `account_id` int(11) NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `gender` bit(1) NOT NULL,
  `MaCV` int(1) NOT NULL COMMENT '1(Admin), 2(Member),3(Thủ quỹ), 4(CTV)))',
  `status` bit(1) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_of_joining` date NOT NULL DEFAULT current_timestamp(),
  `MaBan` int(1) NOT NULL COMMENT 'ban 1(sự kiện), ban 2(truyền thông), ban 3(kĩ thuật))',
  `address` varchar(200) NOT NULL,
  `MaKhoa` int(11) NOT NULL COMMENT '1(CNTT), 2(KTPM), 3(KHMT))',
  `phone_number` char(10) NOT NULL,
  `isPay` tinyint(1) NOT NULL,
  `age` int(11) NOT NULL,
  `num_of_noti` int(11) NOT NULL DEFAULT 0,
  `num_of_repair` int(11) NOT NULL DEFAULT 0,
  `num_of_budget` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`account_id`, `avatar`, `full_name`, `gender`, `MaCV`, `status`, `email`, `date_of_joining`, `MaBan`, `address`, `MaKhoa`, `phone_number`, `isPay`, `age`, `num_of_noti`, `num_of_repair`, `num_of_budget`) VALUES
(6, '20230621100653.jpg', 'Vũ Đình Dũng', b'0', 1, b'1', 'anhkho881@gmail.com', '2021-03-27', 2, 'Hải Dương', 2, '0869370492', 1, 21, 0, 0, 0),
(7, '20230615222035.jpg', 'Hoàng Thị Thương', b'0', 1, b'1', 'hoangthuong@gmail.com', '2020-06-03', 2, 'Hải Phòng ', 3, '0869370952', 1, 21, 0, 0, 1),
(8, '20230615222154.jpg', 'Nguyễn Thị Huyền', b'0', 2, b'0', 'huyennguyen@gmail.com', '2021-06-20', 2, 'Bắc Giang', 1, '0869374974', 0, 20, 11, 0, 1),
(9, '20230615222307.jpg', 'Đoàn Thảo Trang', b'0', 3, b'1', 'trangdoan@gmail.com', '2022-06-05', 3, 'Thái Bình', 2, '0869374865', 1, 22, 8, 0, 1),
(10, '', 'Lê Thu Thảo', b'0', 4, b'1', 'thaole@gmail.com', '2020-08-04', 2, 'Hà Nội', 1, '0813072111', 1, 21, 11, 0, 1),
(11, '20230824210807.webp', 'Vũ Huy Công ', b'0', 1, b'1', 'congvu@gmail.com', '2020-08-13', 1, 'Nam Định', 1, '0355969145', 0, 21, 0, 0, 0),
(12, '20230824210841.jpg', 'Vũ Mạnh Dũng', b'1', 4, b'1', 'dungvu@gmail.com', '2023-08-22', 3, 'Hà Nội', 1, '0355969146', 0, 0, 0, 0, 0),
(13, '20230824200819.jpg', 'Nguyễn Thùy Linh', b'0', 1, b'1', 'linhnguyen@gmail.com', '2023-08-24', 2, 'Thanh Hóa', 1, '0345059570', 0, 21, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_form_client`
--
ALTER TABLE `app_form_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_form_server`
--
ALTER TABLE `app_form_server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`MaBan`);

--
-- Indexes for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`MaCV`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repair_form`
--
ALTER TABLE `repair_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `su_kien`
--
ALTER TABLE `su_kien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `account_id_2` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `app_form_client`
--
ALTER TABLE `app_form_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `app_form_server`
--
ALTER TABLE `app_form_server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ban`
--
ALTER TABLE `ban`
  MODIFY `MaBan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `MaCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `MaKhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `repair_form`
--
ALTER TABLE `repair_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `su_kien`
--
ALTER TABLE `su_kien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
