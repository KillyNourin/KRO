-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2025 at 05:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korin`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `seri` varchar(50) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `merk` varchar(50) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `spesifikasi` longtext DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `harga` decimal(11,0) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `seri`, `slug`, `merk`, `kategori`, `deskripsi`, `spesifikasi`, `stok`, `harga`, `gambar`) VALUES
(1, 'Asus TUF Gaming A15', 'asus-tuf-a15', 'ASUS', 'Laptop', '', NULL, 50, 24000000, NULL),
(2, 'ROG STRIX G16', 'rog-strix-g16', 'ASUS', 'Laptop', 'ASUS ROG Strix G16 adalah laptop gaming dengan prosesor Intel Core i9 Gen 13 dan GPU RTX 4070. Dilengkapi layar 16” FHD 165Hz, sistem pendingin ROG Intelligent Cooling, dan desain RGB futuristik.', '<h3 style=\"margin-bottom: 10px;\">NVIDIA GeForce RTX 5060 Laptop GPU 8GB GDDR7</h3>\r\n<p><em>- Powering Advance AI -</em></p>\r\n\r\n<p><strong>ROG Strix G16 G614PM</strong><br>\r\nSKU : G614PM-R9N56C6G-HM</p>\r\n\r\n<ul style=\"line-height: 1.7;\">\r\n  <li><strong>Grafis:</strong> NVIDIA GeForce RTX 5060 Laptop GPU, ROG Boost: 1610MHz at 115W (1560MHz Boost Clock+50MHz OC, 100W+15W Dynamic Boost), 8GB GDDR7</li>\r\n  <li><strong>Prosesor:</strong> AMD Ryzen 9 8940HX, 2.4GHz (80MB Cache, up to 5.3GHz, 16 cores, 32 Threads)</li>\r\n  <li><strong>Sistem Operasi:</strong> Windows 11 Home</li>\r\n  <li><strong>Office:</strong> Microsoft Office Home 2024 + Microsoft 365 Basic</li>\r\n  <li><strong>Memori:</strong> 16GB DDR5-5200 SO-DIMM (Max 64GB)</li>\r\n  <li><strong>Penyimpanan:</strong> 1TB PCIe 4.0 NVMe M.2 SSD</li>\r\n  <li><strong>Expansion Slots:</strong> 2x DDR5 SO-DIMM, 2x M.2 PCIe</li>\r\n  <li><strong>Layar:</strong> 16\" 2.5K (2560x1600) ROG Nebula Display, IPS-level, anti-glare, DCI-P3 100%, 240Hz, 3ms, G-Sync, Dolby Vision, MUX Switch</li>\r\n  <li><strong>Keyboard & Touchpad:</strong> Backlit Chiclet 4-Zone RGB, Copilot key</li>\r\n  <li><strong>Kamera:</strong> FHD 1080p@30FPS</li>\r\n  <li><strong>Wi-Fi & Bluetooth:</strong> Wi-Fi 6E (Triple band) + Bluetooth 5.3</li>\r\n  <li><strong>Audio:</strong> Dolby Atmos, AI Noise Cancel, Hi-Res, 2 Speaker Smart Amp, Mic Built-in</li>\r\n  <li><strong>Port I/O:</strong>\r\n    <ul style=\"margin-left: 16px;\">\r\n      <li>1x 3.5mm Combo Audio Jack</li>\r\n      <li>1x HDMI 2.1 FRL</li>\r\n      <li>2x USB 3.2 Gen 2 Type-A</li>\r\n      <li>1x RJ45 LAN port</li>\r\n      <li>2x USB 4.0 Type-C (DisplayPort / G-SYNC / Power Delivery)</li>\r\n    </ul>\r\n  </li>\r\n  <li><strong>Baterai:</strong> 90WHrs, 4-cell Li-ion</li>\r\n  <li><strong>Adaptor:</strong> 240W (20V DC, 12A)</li>\r\n  <li><strong>Garansi:</strong> 2 Tahun Global Warranty (1st Year Perfect Warranty)</li>\r\n</ul>\r\n', 40, 25999000, 'image/laptop/rog-strix.png'),
(3, 'Asus TUF A16', 'asus-tuf-16', 'ASUS', 'Laptop', 'Siap Tempur, Siap Menang!\r\nASUS TUF Gaming A16 Advantage Edition hadir sebagai laptop tangguh yang dirancang untuk para gamer dan kreator yang menginginkan performa ekstrem dalam bodi yang kokoh dan stylish. Ditenagai prosesor AMD Ryzen 9 7940HS dan grafis AMD Radeon RX 7600S, laptop ini siap melibas game AAA modern maupun tugas multitasking berat dengan mudah.\r\n\r\nDengan layar 16 inci beresolusi tinggi dan refresh rate 165Hz, pengalaman gaming kamu jadi lebih mulus, detail, dan imersif. Dukungan Dolby Atmos dan teknologi pendingin canggih memastikan performa tetap stabil dalam sesi gaming panjang.\r\n\r\nDesainnya yang minimalis dengan standar militer MIL-STD-810H menjadikan TUF A16 tak hanya bertenaga, tapi juga tahan banting. Laptop ini juga dilengkapi RAM DDR5, SSD PCIe Gen 4, Wi-Fi 6, serta keyboard RGB yang responsif.', '<h3 style=\"margin-bottom: 10px;\">AMD Radeon RX 7600S 8GB GDDR6</h3>\r\n<p><em>- Tangguh dan Andal untuk Gaming dan Produktivitas -</em></p>\r\n\r\n<p><strong>ASUS TUF Gaming A16 Advantage Edition (FA617XS)</strong><br>\r\nSKU : FA617XS-R9RX76S-16G1T-W11</p>\r\n\r\n<ul style=\"line-height: 1.7;\">\r\n  <li><strong>Grafis:</strong> AMD Radeon RX 7600S, 8GB GDDR6, SmartShift, SmartAccess Graphics</li>\r\n  <li><strong>Prosesor:</strong> AMD Ryzen 9 7940HS, 8-core/16-thread, up to 5.2GHz, 16MB L3 Cache</li>\r\n  <li><strong>Sistem Operasi:</strong> Windows 11 Home</li>\r\n  <li><strong>Office:</strong> Microsoft Office Home & Student 2021</li>\r\n  <li><strong>Memori:</strong> 16GB DDR5-4800 SO-DIMM (2x 8GB, Dual Channel, up to 32GB)</li>\r\n  <li><strong>Penyimpanan:</strong> 1TB PCIe 4.0 NVMe M.2 SSD</li>\r\n  <li><strong>Expansion Slots:</strong> 2x DDR5 SO-DIMM, 2x M.2 PCIe 4.0</li>\r\n  <li><strong>Layar:</strong> 16\" FHD+ (1920x1200) 16:10, IPS-level, Anti-Glare, 165Hz, Adaptive-Sync, 100% sRGB</li>\r\n  <li><strong>Keyboard & Touchpad:</strong> Backlit Chiclet Keyboard, 1-Zone RGB</li>\r\n  <li><strong>Kamera:</strong> HD 720p Webcam with Privacy Shutter</li>\r\n  <li><strong>Wi-Fi & Bluetooth:</strong> Wi-Fi 6 (802.11ax) + Bluetooth 5.2</li>\r\n  <li><strong>Audio:</strong> Dolby Atmos, AI Noise Cancellation, DTS:X Ultra, Dual Speaker, Built-in Mic</li>\r\n  <li><strong>Port I/O:</strong>\r\n    <ul style=\"margin-left: 16px;\">\r\n      <li>1x 3.5mm Combo Audio Jack</li>\r\n      <li>1x HDMI 2.1</li>\r\n      <li>2x USB 3.2 Gen 1 Type-A</li>\r\n      <li>2x USB 3.2 Gen 2 Type-C (DisplayPort, Power Delivery)</li>\r\n      <li>1x RJ45 LAN port</li>\r\n    </ul>\r\n  </li>\r\n  <li><strong>Baterai:</strong> 90WHrs, 4-cell Li-ion</li>\r\n  <li><strong>Adaptor:</strong> 240W AC Adapter</li>\r\n  <li><strong>Garansi:</strong> 2 Tahun Global Warranty (1 Tahun Perfect Warranty di Indonesia)</li>\r\n</ul>\r\n', 25, 19799000, 'image/laptop/tuf-a16.png'),
(4, 'Zenbook', 'zenbook-a14', 'ASUS', 'Laptop', 'Tipis, Ringan, dan Kuat!\r\nASUS Zenbook A14 OLED hadir dengan desain ultra-ringan dan elegan, ideal untuk profesional dan pelajar yang butuh perangkat stylish dan powerful. Dengan layar OLED 14 inci 2.8K yang memukau dan prosesor Intel Core Ultra 7 generasi terbaru, Zenbook ini memastikan pengalaman multitasking, produktivitas, dan hiburan jadi lebih maksimal.\r\n\r\nDilengkapi AI Boost, grafis Intel Arc, serta daya tahan baterai seharian, Zenbook A14 siap menemani kamu di mana pun, kapan pun. Laptop ini juga punya build quality tangguh berstandar militer dan audio Harman/Kardon berkualitas tinggi. Keyboard ErgoSense dan touchpad luas memberikan kenyamanan mengetik sepanjang hari.', '<h3 style=\"margin-bottom: 10px;\">Intel Core Ultra 7 + Layar ASUS Lumina OLED 2.8K</h3>\r\n<p><em>- Laptop AI Super Ringan dan Stylish -</em></p>\r\n\r\n<p><strong>ASUS Zenbook A14 OLED UX3405</strong><br>\r\nSKU: UX3405MA-OLEDS7552</p>\r\n\r\n<ul style=\"line-height: 1.7;\">\r\n  <li><strong>Prosesor:</strong> Intel Core Ultra 7 155H (16-core, up to 4.8GHz, AI Boost, 24MB Cache)</li>\r\n  <li><strong>Grafis:</strong> Intel Arc Graphics (Integrated, Mendukung AI workloads)</li>\r\n  <li><strong>Sistem Operasi:</strong> Windows 11 Home</li>\r\n  <li><strong>Office:</strong> Microsoft Office Home & Student 2021</li>\r\n  <li><strong>Memori:</strong> 16GB LPDDR5X onboard (non-upgradable)</li>\r\n  <li><strong>Penyimpanan:</strong> 1TB M.2 NVMe PCIe 4.0 SSD</li>\r\n  <li><strong>Layar:</strong> 14” 2.8K (2880 x 1800) ASUS Lumina OLED, 16:10, 120Hz, 0.2ms, 100% DCI-P3, PANTONE Validated, VESA DisplayHDR True Black 600, TÜV Rheinland Certified</li>\r\n  <li><strong>Kamera:</strong> FHD IR Camera with Windows Hello + AI Noise Canceling</li>\r\n  <li><strong>Keyboard:</strong> Backlit ErgoSense Keyboard + Touchpad with NumberPad 2.0</li>\r\n  <li><strong>Audio:</strong> Stereo speakers by Harman/Kardon, Dolby Atmos, Smart Amp</li>\r\n  <li><strong>Wi-Fi & Bluetooth:</strong> Wi-Fi 6E (802.11ax) + Bluetooth 5.3</li>\r\n  <li><strong>Port I/O:</strong>\r\n    <ul style=\"margin-left: 16px;\">\r\n      <li>2x Thunderbolt 4 (USB-C, PD, DisplayPort)</li>\r\n      <li>1x USB 3.2 Gen 1 Type-A</li>\r\n      <li>1x HDMI 2.1 (TMDS)</li>\r\n      <li>1x 3.5mm Audio Combo Jack</li>\r\n    </ul>\r\n  </li>\r\n  <li><strong>Baterai:</strong> 75WHrs, 3-cell Li-ion, up to 15 jam pemakaian</li>\r\n  <li><strong>Berat:</strong> 1.2 kg</li>\r\n  <li><strong>Ketebalan:</strong> 14.9 mm</li>\r\n  <li><strong>Material:</strong> Aluminum Alloy Chassis, Military Grade MIL-STD-810H</li>\r\n  <li><strong>Garansi:</strong> 2 Tahun Garansi Global + 1 Tahun Perfect Warranty</li>\r\n</ul>\r\n', 25, 15299000, 'image/laptop/zenbook-a14.png'),
(5, 'Legion 5', 'legion5-g10', 'Lenovo', 'Laptop', 'Kuasai Semua Game dengan Performa Brutal!\r\nLenovo Legion 5 Gen 10 hadir sebagai laptop gaming tangguh yang menggabungkan performa tinggi, efisiensi termal, dan desain minimalis. Ditenagai Intel Core i7-14650HX dan NVIDIA GeForce RTX 4060 8GB, Legion 5 siap menangani semua game AAA dan tugas berat seperti rendering atau editing.\r\n\r\nDengan layar 16 inci WQXGA 165Hz, keyboard TrueStrike, dan sistem pendingin Legion ColdFront 5.0, laptop ini memastikan kenyamanan dan keunggulan kompetitif di setiap sesi gaming. Tak hanya itu, kamu juga mendapat port I/O lengkap dan bodi tangguh berdesain profesional.', '<h3 style=\"margin-bottom: 10px;\">Intel Core i7 + GeForce RTX 4060 8GB</h3>\r\n<p><em>- Siap Tempur untuk Gaming & Editing -</em></p>\r\n\r\n<p><strong>Lenovo Legion 5 16IRX9H Gen 10</strong><br>\r\nSKU: 83DG002QID</p>\r\n\r\n<ul style=\"line-height: 1.7;\">\r\n  <li><strong>Prosesor:</strong> Intel Core i7-14650HX (24-core, up to 5.2GHz, 30MB Cache)</li>\r\n  <li><strong>Grafis:</strong> NVIDIA GeForce RTX 4060 8GB GDDR6, TGP up to 140W</li>\r\n  <li><strong>Sistem Operasi:</strong> Windows 11 Home</li>\r\n  <li><strong>Office:</strong> Microsoft Office Home & Student 2021</li>\r\n  <li><strong>Memori:</strong> 16GB DDR5-5600MHz (2x 8GB SO-DIMM, Max 32GB)</li>\r\n  <li><strong>Penyimpanan:</strong> 1TB PCIe Gen 4 SSD (M.2 2280)</li>\r\n  <li><strong>Layar:</strong> 16” WQXGA (2560 x 1600), IPS, 165Hz, 300 nits, sRGB 100%, Dolby Vision, G-Sync, Anti-glare, 16:10</li>\r\n  <li><strong>Keyboard:</strong> RGB Backlit TrueStrike Keyboard (4-Zone RGB)</li>\r\n  <li><strong>Kamera:</strong> 1080p FHD + E-Shutter</li>\r\n  <li><strong>Wi-Fi & Bluetooth:</strong> Wi-Fi 6E (802.11ax) + Bluetooth 5.3</li>\r\n  <li><strong>Audio:</strong> 2 x 2W Stereo Speaker, Nahimic Audio by SteelSeries</li>\r\n  <li><strong>Port I/O:</strong>\r\n    <ul style=\"margin-left: 16px;\">\r\n      <li>1x USB 3.2 Gen 1 Type-C (DisplayPort 1.4)</li>\r\n      <li>1x USB 3.2 Gen 2 Type-C (PD 140W + DisplayPort)</li>\r\n      <li>3x USB 3.2 Gen 1 Type-A</li>\r\n      <li>1x HDMI 2.1</li>\r\n      <li>1x RJ45 LAN</li>\r\n      <li>1x Audio Jack 3.5mm</li>\r\n      <li>1x DC-in (Power Port)</li>\r\n    </ul>\r\n  </li>\r\n  <li><strong>Baterai:</strong> 80WHr, up to 8 jam (Rapid Charge supported)</li>\r\n  <li><strong>Adaptor:</strong> 300W Slim Tip</li>\r\n  <li><strong>Berat:</strong> ±2.4 kg</li>\r\n  <li><strong>Material:</strong> Aluminum + Polycarbonate Blend (tahan lama)</li>\r\n  <li><strong>Garansi:</strong> 3 Tahun Premium Care + Accidental Damage Protection</li>\r\n</ul>\r\n', 25, 13500000, 'image/laptop/legion5.png'),
(6, 'Ideapad', 'ideapad-5i', 'Lenovo', 'Laptop', 'Laptop Tipis, Bertenaga, dan Bergaya!\r\nLenovo IdeaPad 5i hadir sebagai solusi ideal untuk pelajar, pekerja kantoran, dan pengguna harian yang membutuhkan laptop stylish dengan performa mumpuni. Ditenagai Intel Core i5 Generasi ke-13 dan didukung SSD NVMe super cepat serta layar IPS FHD 14 inci, IdeaPad 5i memberikan kombinasi performa dan mobilitas yang seimbang.\r\n\r\nDengan desain premium berbahan metal, keyboard nyaman untuk mengetik, serta baterai tahan lama dengan Rapid Charge, IdeaPad 5i cocok untuk produktivitas dan hiburan di mana saja.', '<h3 style=\"margin-bottom: 10px;\">Intel Core i5-1335U + SSD 512GB</h3>\r\n<p><em>- Ringan, Cepat, dan Modern -</em></p>\r\n\r\n<p><strong>Lenovo IdeaPad 5i 14IRU8</strong><br>\r\nSKU: 82XD005NID</p>\r\n\r\n<ul style=\"line-height: 1.7;\">\r\n  <li><strong>Prosesor:</strong> Intel Core i5-1335U (10-core, up to 4.6GHz, 12MB Cache)</li>\r\n  <li><strong>Grafis:</strong> Intel Iris Xe Graphics (Integrated)</li>\r\n  <li><strong>Sistem Operasi:</strong> Windows 11 Home</li>\r\n  <li><strong>Office:</strong> Microsoft Office Home & Student 2021</li>\r\n  <li><strong>Memori:</strong> 16GB LPDDR5 4800MHz (onboard, dual-channel)</li>\r\n  <li><strong>Penyimpanan:</strong> 512GB SSD PCIe Gen 4 (M.2 2242)</li>\r\n  <li><strong>Layar:</strong> 14” Full HD (1920 x 1080), IPS, 100% sRGB, Anti-glare, 300 nits, 60Hz</li>\r\n  <li><strong>Keyboard:</strong> Backlit Keyboard + Touchpad Precision</li>\r\n  <li><strong>Kamera:</strong> FHD 1080p with Privacy Shutter</li>\r\n  <li><strong>Wi-Fi & Bluetooth:</strong> Wi-Fi 6 + Bluetooth 5.1</li>\r\n  <li><strong>Audio:</strong> Stereo Speaker 2x 2W dengan Dolby Audio</li>\r\n  <li><strong>Port I/O:</strong>\r\n    <ul style=\"margin-left: 16px;\">\r\n      <li>1x USB-C 3.2 Gen 1 (PD + DisplayPort)</li>\r\n      <li>2x USB-A 3.2 Gen 1</li>\r\n      <li>1x HDMI 1.4b</li>\r\n      <li>1x 3.5mm Combo Audio Jack</li>\r\n      <li>1x SD Card Reader</li>\r\n    </ul>\r\n  </li>\r\n  <li><strong>Baterai:</strong> 56.6WHr, hingga 10 jam (Rapid Charge Boost)</li>\r\n  <li><strong>Adaptor:</strong> 65W USB-C Charger</li>\r\n  <li><strong>Berat:</strong> ±1.4 kg</li>\r\n  <li><strong>Material:</strong> Aluminum Top Cover + PC-ABS Bottom</li>\r\n  <li><strong>Fitur Tambahan:</strong> Fingerprint Power Button, Dolby Audio, Privacy Shutter</li>\r\n  <li><strong>Garansi:</strong> 2 Tahun Resmi Lenovo Indonesia</li>\r\n</ul>\r\n', 40, 10499999, 'image/laptop/ideapad5i.png'),
(7, 'Thinkpad', 'thinkpad-t14', 'Lenovo', 'Laptop', 'Kelas Bisnis yang Tangguh dan Profesional\r\nLenovo ThinkPad T14 Gen 4 adalah laptop premium untuk kalangan profesional yang mengutamakan keamanan, daya tahan, dan performa tinggi. Diperkuat dengan prosesor Intel Core i7 Generasi ke-13, serta desain tangguh berstandar militer MIL-STD-810H, ThinkPad T14 siap mendampingi pekerjaan multitasking dan mobile kamu sepanjang hari.\r\n\r\nDilengkapi dengan fitur keamanan ThinkShield, sensor sidik jari, dan Privacy Shutter, serta keyboard ThinkPad legendaris yang nyaman, T14 adalah pilihan tepat untuk enterprise maupun pengguna profesional individu.', '<h3 style=\"margin-bottom: 10px;\">Intel Core i7-1355U + 16GB RAM + SSD 512GB</h3>\r\n<p><em>- Performa Premium untuk Profesional Modern -</em></p>\r\n\r\n<p><strong>Lenovo ThinkPad T14 Gen 4</strong><br>\r\nSKU: 21HD004VID</p>\r\n\r\n<ul style=\"line-height: 1.7;\">\r\n  <li><strong>Prosesor:</strong> Intel Core i7-1355U (10-core, 12 threads, up to 5.0GHz, 12MB Cache)</li>\r\n  <li><strong>Grafis:</strong> Intel Iris Xe Graphics</li>\r\n  <li><strong>Sistem Operasi:</strong> Windows 11 Pro</li>\r\n  <li><strong>Memori:</strong> 16GB DDR4 3200MHz (8GB onboard + 8GB SO-DIMM, upgradable to 40GB)</li>\r\n  <li><strong>Penyimpanan:</strong> 512GB PCIe Gen 4 NVMe SSD</li>\r\n  <li><strong>Layar:</strong> 14” FHD (1920x1080) IPS, Anti-glare, 300 nits, 45% NTSC</li>\r\n  <li><strong>Keyboard:</strong> ThinkPad Backlit Keyboard with TrackPoint</li>\r\n  <li><strong>Kamera:</strong> Full HD 1080p with Privacy Shutter</li>\r\n  <li><strong>Audio:</strong> Dolby Audio Speaker System + Dual Far-Field Mics</li>\r\n  <li><strong>Wi-Fi & Bluetooth:</strong> Wi-Fi 6E + Bluetooth 5.1</li>\r\n  <li><strong>Keamanan:</strong> Fingerprint Reader, TPM 2.0, IR Camera Optional, Privacy Shutter</li>\r\n  <li><strong>Port I/O:</strong>\r\n    <ul style=\"margin-left: 16px;\">\r\n      <li>2x USB-C (1x Thunderbolt 4)</li>\r\n      <li>2x USB-A 3.2 Gen 1</li>\r\n      <li>1x HDMI 2.0</li>\r\n      <li>1x RJ45 LAN</li>\r\n      <li>1x 3.5mm Audio Combo Jack</li>\r\n      <li>1x MicroSD Card Reader</li>\r\n    </ul>\r\n  </li>\r\n  <li><strong>Baterai:</strong> 52.5WHr, hingga 13 jam penggunaan</li>\r\n  <li><strong>Adaptor:</strong> 65W USB-C Rapid Charge</li>\r\n  <li><strong>Material:</strong> Aluminium Top + Polycarbonate Bottom</li>\r\n  <li><strong>Berat:</strong> ±1.47 kg</li>\r\n  <li><strong>Sertifikasi:</strong> MIL-STD-810H (Tahan benturan, getaran, suhu ekstrem)</li>\r\n  <li><strong>Garansi:</strong> 3 Tahun Lenovo Premier Support</li>\r\n</ul>\r\n', 45, 25400000, 'image/laptop/thinkpad-t14.png'),
(8, 'Victus 15T', 'victus-15t', 'HP', 'Laptop', 'Laptop Gaming Serius dengan Harga Bersahabat\r\nHP Victus 15t hadir untuk para gamer dan kreator yang mencari performa tinggi dengan harga kompetitif. Ditenagai prosesor Intel Core i7 Generasi ke-13 dan GPU NVIDIA GeForce RTX 4060, Victus 15t menyuguhkan visual yang tajam, gameplay mulus, dan produktivitas maksimal dalam desain ramping dan stylish.\r\n\r\nDidukung layar FHD 144Hz, sistem pendingin dual fan, serta keyboard backlit bergaya gaming, Victus 15t adalah solusi ideal untuk bermain, bekerja, dan berkreasi tanpa batas.', '<h3 style=\"margin-bottom: 10px;\">Intel Core i7-13700H + RTX 4060 + 144Hz Display</h3>\r\n<p><em>- Gaming, Editing, and Streaming Powerhouse -</em></p>\r\n\r\n<p><strong>HP Victus 15t-fa100</strong><br>\r\nSKU: 7Z3Y3AV_1</p>\r\n\r\n<ul style=\"line-height: 1.7;\">\r\n  <li><strong>Prosesor:</strong> Intel Core i7-13700H (14-core, up to 5.0 GHz, 24MB Cache)</li>\r\n  <li><strong>Grafis:</strong> NVIDIA GeForce RTX 4060 Laptop GPU, 8GB GDDR6, 140W TGP</li>\r\n  <li><strong>Sistem Operasi:</strong> Windows 11 Home 64-bit</li>\r\n  <li><strong>Memori:</strong> 16GB DDR4 3200MHz (2x8GB, Dual Channel, upgradable)</li>\r\n  <li><strong>Penyimpanan:</strong> 1TB PCIe Gen 4 NVMe M.2 SSD</li>\r\n  <li><strong>Layar:</strong> 15.6” FHD (1920x1080), IPS, Anti-glare, 144Hz, 9ms, 300 nits</li>\r\n  <li><strong>Keyboard:</strong> Full-size backlit keyboard dengan numeric pad</li>\r\n  <li><strong>Kamera:</strong> HP TrueVision 720p HD dengan dual array mics</li>\r\n  <li><strong>Audio:</strong> Dual speakers by B&O, DTS:X Ultra</li>\r\n  <li><strong>Wi-Fi & Bluetooth:</strong> Wi-Fi 6 + Bluetooth 5.3</li>\r\n  <li><strong>Sistem Pendingin:</strong> Dual fan cooling dengan wide rear vent</li>\r\n  <li><strong>Port I/O:</strong>\r\n    <ul style=\"margin-left: 16px;\">\r\n      <li>1x USB Type-C (10Gbps)</li>\r\n      <li>2x USB Type-A (5Gbps)</li>\r\n      <li>1x HDMI 2.1</li>\r\n      <li>1x RJ-45 Ethernet</li>\r\n      <li>1x 3.5mm Audio Combo Jack</li>\r\n      <li>1x SD Card Reader</li>\r\n    </ul>\r\n  </li>\r\n  <li><strong>Baterai:</strong> 70WHr, 4-cell Li-ion, hingga 6 jam penggunaan gaming</li>\r\n  <li><strong>Adaptor:</strong> 230W Smart AC Power Adapter</li>\r\n  <li><strong>Berat:</strong> ±2.3 kg</li>\r\n  <li><strong>Warna:</strong> Mica Silver</li>\r\n  <li><strong>Garansi:</strong> 2 Tahun Resmi HP Indonesia</li>\r\n</ul>\r\n', 50, 14900000, 'image/laptop/victus-15t.png'),
(9, 'Pavilion 16t', 'pavilion-16t', 'HP', 'Laptop', 'Visual Luas, Performa Serius\r\nHP Pavilion 16t menghadirkan pengalaman gaming dan multimedia yang lebih immersive lewat layar 16.1 inci FHD 144Hz. Ditenagai Intel Core i7 Generasi ke-12 dan NVIDIA GeForce RTX 3050 Ti, laptop ini memberikan performa solid untuk gaming, content creation, hingga multitasking berat. Dengan desain modern dan sistem pendingin efisien, Pavilion 16t cocok untuk gamer dan profesional muda.', '<h3 style=\"margin-bottom: 10px;\">Intel Core i7-12700H + RTX 3050 Ti + 144Hz Display</h3>\r\n<p><em>- Work Hard, Play Hard -</em></p>\r\n\r\n<p><strong>HP Pavilion 16t-d100</strong><br>\r\nSKU: 6P7S4AV_1</p>\r\n\r\n<ul style=\"line-height: 1.7;\">\r\n  <li><strong>Prosesor:</strong> Intel Core i7-12700H (14-core, up to 4.7 GHz)</li>\r\n  <li><strong>Grafis:</strong> NVIDIA GeForce RTX 3050 Ti Laptop GPU, 4GB GDDR6</li>\r\n  <li><strong>Sistem Operasi:</strong> Windows 11 Home</li>\r\n  <li><strong>Memori:</strong> 16GB DDR4 3200MHz (2x8GB)</li>\r\n  <li><strong>Penyimpanan:</strong> 1TB PCIe Gen 4 NVMe SSD</li>\r\n  <li><strong>Layar:</strong> 16.1” FHD (1920x1080), IPS, 144Hz, Anti-glare</li>\r\n  <li><strong>Audio:</strong> Dual speakers by B&O, HP Audio Boost</li>\r\n  <li><strong>Kamera:</strong> HP Wide Vision 720p HD</li>\r\n  <li><strong>Keyboard:</strong> Full-size backlit keyboard with numeric pad</li>\r\n  <li><strong>Wi-Fi & Bluetooth:</strong> Intel Wi-Fi 6 AX201 + Bluetooth 5.2</li>\r\n  <li><strong>Port I/O:</strong>\r\n    <ul style=\"margin-left: 16px;\">\r\n      <li>1x USB Type-C</li>\r\n      <li>2x USB Type-A</li>\r\n      <li>1x HDMI 2.1</li>\r\n      <li>1x RJ-45 LAN</li>\r\n      <li>1x Audio Combo Jack</li>\r\n    </ul>\r\n  </li>\r\n  <li><strong>Baterai:</strong> 70WHr, hingga 6 jam penggunaan</li>\r\n  <li><strong>Adaptor:</strong> 150W Smart AC Adapter</li>\r\n  <li><strong>Berat:</strong> ±2.45 kg</li>\r\n  <li><strong>Warna:</strong> Shadow Black / Ceramic White</li>\r\n  <li><strong>Garansi:</strong> 2 Tahun Resmi HP Indonesia</li>\r\n</ul>\r\n', 50, 17599000, 'image/laptop/pavilion-16t.png'),
(10, 'Probook 460', 'probook-460', 'HP', 'Laptop', 'Kinerja Andal untuk Profesional Modern\r\nHP ProBook 460 G10 dirancang untuk memenuhi kebutuhan bisnis modern. Dibekali prosesor Intel Core i5/i7 Generasi ke-13, laptop ini menawarkan performa cepat, keamanan kelas enterprise, dan daya tahan tinggi. Cocok untuk kerja kantoran, rapat daring, hingga remote working dengan mobilitas tinggi dan build berkualitas.', '<h3 style=\"margin-bottom: 10px;\">Intel Core i5/i7 Gen 13 + 16GB RAM + FHD Anti-Glare</h3>\r\n<p><em>- Powerful. Secure. Business-Ready. -</em></p>\r\n\r\n<p><strong>HP ProBook 460 G10</strong><br>\r\nSKU: 8B8H3PA</p>\r\n\r\n<ul style=\"line-height: 1.7;\">\r\n  <li><strong>Prosesor:</strong> Intel Core i5-1335U / i7-1355U (10-core, up to 5.0 GHz)</li>\r\n  <li><strong>Grafis:</strong> Intel Iris Xe Graphics</li>\r\n  <li><strong>Sistem Operasi:</strong> Windows 11 Pro</li>\r\n  <li><strong>Memori:</strong> 16GB DDR4 3200MHz (2x8GB, upgradable to 32GB)</li>\r\n  <li><strong>Penyimpanan:</strong> 512GB PCIe NVMe SSD</li>\r\n  <li><strong>Layar:</strong> 16” FHD (1920x1080), IPS, Anti-glare, 250 nits</li>\r\n  <li><strong>Keamanan:</strong> TPM 2.0, Fingerprint Reader, BIOS Protection</li>\r\n  <li><strong>Keyboard:</strong> Spill-resistant full-size keyboard</li>\r\n  <li><strong>Kamera:</strong> 720p HD with privacy shutter</li>\r\n  <li><strong>Audio:</strong> Dual speakers, AI Noise Reduction</li>\r\n  <li><strong>Port I/O:</strong>\r\n    <ul style=\"margin-left: 16px;\">\r\n      <li>1x USB Type-C (Power + Display)</li>\r\n      <li>2x USB Type-A</li>\r\n      <li>1x HDMI 2.1</li>\r\n      <li>1x RJ-45 Ethernet</li>\r\n      <li>1x SD Card Reader</li>\r\n      <li>1x Audio Combo Jack</li>\r\n    </ul>\r\n  </li>\r\n  <li><strong>Wi-Fi & Bluetooth:</strong> Wi-Fi 6E + Bluetooth 5.3</li>\r\n  <li><strong>Baterai:</strong> 51WHr, Fast Charge support</li>\r\n  <li><strong>Berat:</strong> ±1.74 kg</li>\r\n  <li><strong>Garansi:</strong> 3 Tahun On-Site Warranty</li>\r\n</ul>\r\n', 50, 11687000, 'image/laptop/probook-460.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_orders`
--

CREATE TABLE `detail_orders` (
  `id_det` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_satuan` decimal(11,0) NOT NULL,
  `subtotal` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_orders`
--

INSERT INTO `detail_orders` (`id_det`, `id_order`, `id_barang`, `type`, `jumlah`, `harga_satuan`, `subtotal`) VALUES
(1, 1, 1, 'Laptop', 1, 24000000, 24000000),
(2, 12, 2, 'Laptop', 1, 25999000, 25999000),
(3, 13, 2, 'Laptop', 1, 25999000, 25999000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_07_29_133849_add_slug_to_barang_table', 1),
(2, '2025_07_29_135556_add_spesifikasi_to_barang_table', 2),
(3, '2025_07_30_120237_add_gambar_to_barang_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(11) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_users`, `tgl`, `status`, `total`) VALUES
(1, 1, '2025-07-24', 'paid', 24000000),
(12, 1, '2025-08-01', 'menunggu', 25999000),
(13, 1, '2025-08-01', 'paid', 25999000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone`) VALUES
(1, 'kor', '$2y$12$tltBWRkXQkXwEIsEso0fkeQpMqU.HsWcnUO999WvyHrMoZIaId15a', 21987);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD PRIMARY KEY (`id_det`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_orders`
--
ALTER TABLE `detail_orders`
  MODIFY `id_det` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD CONSTRAINT `detail_orders_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `detail_orders_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
