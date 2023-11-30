-- สร้างฐานข้อมูลการลงทะเบียนและการเข้าสู่ระบบ

CREATE TABLE user (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username varchar(100) NOT NULL,
    firstname varchar(100) NOT NULL,
    lastname varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    phone varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    userlevel VARCHAR(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=uft8;


-- สร้างฐานข้อมูลอาหาร

CREATE TABLE `food` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- เพิ่มข้อมูลอาหาร
INSERT INTO `food` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'ไก่ทอดเกาหลี', '946831', 'food/koren-fried-chicken-24.jpg', 59.00),
(2, 'ชีสบอล', '748157', 'food/ID_21763_590051e97e8d1.jpg', 49.00),
(3, 'ครัวซองค์', '875461', 'food/37a6ec5e-712d-462c-9e2d-6b63c39e9777.jpg', 79.00),
(4, 'ต้มยำกุ้งน้ำข้น', '366784', 'food/Tomyum.jpg', 129.00);