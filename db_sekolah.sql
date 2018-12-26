-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql202.epizy.com
-- Generation Time: Dec 21, 2018 at 05:39 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_21331815_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` char(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `email`, `jurusan`, `gambar`, `jeniskelamin`) VALUES
(19, '161710548', 'Hasan Al Mujtaba', 'abatros@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a02f9c355272.jpg', 'Laki-Laki'),
(20, '161710553', 'Muhamad Taufik Lewenussa', 'olewenusa@gmail.com', 'Teknik Gambar Bangunan', '5a02429accd04.jpg', 'Laki-Laki'),
(22, '161710557', 'Nisa Alfiani', 'nisa@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a02431d6dfba.jpg', 'Perempuan'),
(24, '161710547', 'Firda Rosadi Febyani', 'firda@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a0241bf6a37c.jpg', 'Perempuan'),
(25, '161710554', 'Muhammad Iqbal Ramdana', 'iqbalcelalu@gmail.com', 'Teknik Kecantikan Kulit', '5a0242c4d1908.jpg', 'Laki-Laki'),
(26, '161710540', 'Angga Syahputra Utama', 'anggatamvan@gmail.com', 'Teknik Tata Boga', '5a024140aa526.jpg', 'Laki-Laki'),
(27, '161710546', 'Ferdy Dwiansyah', 'ferdi@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a0241ab22792.jpg', 'Laki-Laki'),
(28, '161710572', 'Wildan Firdaus', 'wildan@gmail.com', 'Teknik Penerbangan', 'img_5a48e35406f77_1514726228.jpg', 'Laki-Laki'),
(29, '161710539', 'Alfenia Rosyida Ashar', 'alpen@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a0241328602c.jpg', 'Perempuan'),
(30, '161710541', 'Arif Rahman', 'arifcelalu@gmail.com', 'Teknik Kecantikan Wajah', '5a024155a6df7.jpg', 'Laki-Laki'),
(31, '161710542', 'Channia Hasgat', 'candra875@gmail.com', 'Teknik Permesinan', '5a024161e064a.jpg', 'Perempuan'),
(32, '161710543', 'Dandy Satrya Nugraha', 'panjul08@gmail.com', 'Teknik Rangkap &amp; Perfotocopyan', '5a02417380807.jpg', 'Laki-Laki'),
(33, '161710544', 'Dwi Putri Febriyanti', 'dwi@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a02418b96821.jpg', 'Perempuan'),
(34, '161710545', 'Fany Riani', 'fani@gmail.com', 'Teknik Gambar Bangunan', '5a02419a58252.jpg', 'Perempuan'),
(35, '161710550', 'Irwansyah', 'irwan@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a02424cea4b9.jpg', 'Laki-Laki'),
(36, '161710551', 'Luthfiah Dewi Andini', 'luthfi@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a02426b0cacd.jpg', 'Perempuan'),
(37, '161710552', 'Muhamad Aldi Zein Rahmana', 'aldijuling@gmail.com', 'Teknik Gambar Bangunan', '5a024285d92e7.jpg', 'Laki-Laki'),
(38, '161710555', 'Muhammad Riza Firzatullah', 'rizaosis@gmail.com', 'Rekayasa Perangkat Lunak', '5a0242f4e5d8a.jpg', 'Laki-Laki'),
(39, '161710556', 'Muhammad Tulus Nurwadi', 'wokji@gmail.com', 'Teknik Kecantikan Kulit', '5a02430b3a72f.jpg', 'Laki-Laki'),
(40, '161710558', 'Nur Apriliyanti', 'yanto@gmail.com', 'Teknik Otomotif', '5a02433110e25.jpg', 'Perempuan'),
(41, '161710559', 'Pandu Karisma', 'pandu@gmail.com', 'Teknik Otomotif', '5a02f9edd2ab0.jpg', 'Laki-Laki'),
(42, '161710560', 'Pirda', 'pirdapakep@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a02fa099cf2f.jpg', 'Perempuan'),
(43, '161710561', 'R. Rani Suhaerani', 'rani@gmail.com', 'Teknik Kecantikan Kulit', '5a02fa253f8f5.jpg', 'Perempuan'),
(45, '161710563', 'Rafliansyah Mauji', 'pidoet08@gmail.com', 'Teknik Kehutanan', '5a02fa3749c06.jpg', 'Laki-Laki'),
(46, '161710564', 'Reva Maulana', 'jimmy@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a0a81a28b1b7.jpg', 'Laki-Laki'),
(47, '161710565', 'Rindiani Ayu Kinanti', 'jawa@gmail.com', 'Teknik Komputer &amp; Jaringan', '5a02fa61aa226.jpg', 'Perempuan'),
(48, '161710566', 'Rudi Hartono', 'bangrud@gmail.com', 'Teknik Otomotif', '5a02fa72b404d.jpg', 'Laki-Laki'),
(49, '161710567', 'Shella Hasanah', 'sela@gmail.com', 'Teknik Tata Boga', 'img_5a48e2facd375_1514726138.jpg', 'Perempuan'),
(50, '161710568', 'Siti Mariam', 'maryam@gmail.com', 'Teknik Kecantikan Kulit', 'img_5a48e30b268c8_1514726155.jpg', 'Perempuan'),
(51, '161710569', 'Siti Nursafitri', 'sitisafitri@gmail.com', 'Teknik Komputer &amp; Jaringan', 'img_5a48e31fed7e1_1514726175.jpg', 'Perempuan'),
(52, '161710570', 'Sri Haryati', 'jijray@gmail.com', 'Teknik Gambar Bangunan', 'img_5a48e33419f83_1514726196.jpg', 'Perempuan'),
(53, '161710571', 'Taufan Fadillah', 'taupan@gmail.com', 'Teknik Komputer &amp; Jaringan', 'img_5a48e34241d5a_1514726210.jpg', 'Laki-Laki'),
(54, '161710573', 'Wira Ade', 'wira@gmail.com', 'Teknik Tenaga Listrik', 'img_5a48e36244483_1514726242.jpg', 'Laki-Laki'),
(60, '161710549', 'Ihsan Nurul Habib', 'ihsan.inh@gmail.com', 'Teknik Informatika', 'img_5a0f7cc38ad86_1510964419.jpg', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(7, 'ihsan26', 'ihsan.inh@gmail.com', '$2y$10$6oVDN7o65qOvlnc9z2.OyeZ83hoxnhArzh3rT59ISdtdlESv8E8AK', 1),
(8, 'ihsanhabib', 'ihsan.n.habib@gmail.com', '$2y$10$91blSLvwcpVWUN/tclM8auPH.Tj8BUckwT5VIYz5n/UToQnQQ.zb2', 0),
(18, 'hhhh', 'hilmanfirdaus11@yahoo.com', '$2y$10$tTYbRxxKbPeqcBhE0ZOnQeVS8IIGWem41UABMHhAKAGZ0PK1eMgQG', 0),
(10, 'sandhikagalih', 'sandhikagalih@unpas.ac.id', '$2y$10$.7kJXaInu8KMVNki9LiureneQwOgMDFUTWcox/xsqr9eIBhmqzCim', 1),
(11, 'RickyIrawan', 'agataprogrammer@gmail.com', '$2y$10$yCK/T9lDwPoGaQhSVWSPpeoFH5OMVxM.ny1xUusnqG04Ih1/w8moW', 0),
(12, 'admin', 'aaa@g.com', '$2y$10$xUW2R47SHEgPebfYiWhFQ.Iymlha8ygjGAm5fYB.0YPey2WxwI8BO', 0),
(13, 'bugas', 'dianbugas@gmail.com', '$2y$10$BvPVLtSCXt7lBpFeBZlo4.9ym9uvNfw2R.gvhNSvGT3m.b9SxN3yW', 0),
(14, 'jon', 'jon@gmail.com', '$2y$10$oF931izEZxe8jddbG9TJQObCyGoRZBoGCpT9rziEcsc8YpoX3aQq6', 0),
(15, 'dian', 'dasd@gmail.com', '$2y$10$YpAbnczOzM7A4bEZ9dEame65IgYUpj7ikWGaphmNmNA1wZL/eJ.wG', 0),
(16, 'ryukendo', 'ryuken@gmail.com', '$2y$10$BUaS83PhHz0uDygoJVEMyudJi0Cw/Pys0.S0wToVliLy.D/VV.Ojq', 0),
(17, 'eka', 'taniokevas09@gmail.com', '$2y$10$nOvrJpuOUPQ1.C4VfbF4EuW24UxRfYYNKEAVC/mKSn4bX18jN2QeO', 0),
(19, 'Wihelmus', 'lupawolo@gmail.com', '$2y$10$Xy9yyYGnK/.9duG2Tls3v.vYkUnJyIzTrATNW/do14AhlterK2P4e', 0),
(20, '''or''''=''', 'wuyutur@letsmail9.com', '$2y$10$.gXSZV2YAQEN/8rMF9wWgejmoaxP4JSXv3CsIIqF32fkchOcVxdvK', 0),
(21, 'Rivan', 'vandika00@gmail.com', '$2y$10$XZdC5ElPgdORHJBFJ0W82uo4ctQ7NsnyeYUYU7CEoX3Fk0iu7xWwa', 0),
(22, 'aang', 'bontot.sukses@gmail.com', '$2y$10$yndppRisCHnucPoQxPWOyOL4yULp5HC5I4VMUDeyGSQ3L/rvMcVni', 0),
(23, 'dandy', '123@lol.com', '$2y$10$wZ0uWBOmE41/SoEUS1rAz.imYN5/MCm9u7D.C/1sLN4j3eagk6QPe', 0),
(24, 'POKOPOV', 'anggasyh21@gmail.com', '$2y$10$eAnU5Q8Zndp3XLyAnRp1WOJZKvcSTVz7Q0MfBrJBRrbqXQX0BTJU.', 0),
(25, 'ATN1905', 'atn1905@gmail.com', '$2y$10$eSKAiKspcAUSSYz1zxB1JuOkAO8snaYHmUV5TegXUt4EoKKcmqwge', 0),
(26, 'brayen', 'brayen.kenzi@gmail.com', '$2y$10$/wSUG8OD3x2aob9/VXVYsOHu1UHWfjBMQ6TeOATSaA1MwfzCjszTG', 0),
(27, 'sandhika', 'syahrulg66@yahoo.co.id', '$2y$10$oX8LOn21EP7r59fUZM58DOEJJxTobSVJ2xs5T8S3LIExkJpdhdUWu', 0),
(28, 'as', 'adaadaaja@gmail', '$2y$10$vt5uAXMG8bhvJRajo9GjGuLPk9JTBVc0hh0edryDZDkZcdLfB2amq', 0),
(29, 'leowahyu', 'rezsua6@gmail.com', '$2y$10$ljEIKCMFb2kWtW04E9J.NOeh3p4gLastx.Q3BH8zswQFzZf5bfzZC', 0),
(30, 'a', 'a@gmail.com', '$2y$10$ZcvYZtN/4n5bZlbRJgAMUOZXypFw/YMlQK2nfC1Tk7ic2DPJXy0qy', 0),
(31, 'Ani', 'ani@gmail.com', '$2y$10$hh9mUb/5hF2Zj3LYZqfyBuWmB5zWJzueT53IYlPdFOMrzQiwvGnaC', 0),
(32, 'yy', 'yy@gmail.com', '$2y$10$E3k76/avNbDAeBwHuvklk.2rnAIFHsn6VhjFgzzp/6zIAgKmP35gK', 0),
(33, 'tt', 'tt@gmail.com', '$2y$10$wHpF.azkkHqw7Ig6JBRvPORYgj9as2Q87.nlt3sOUvRBhyissnC8.', 0),
(34, 'aaa', 'ssss@gmail.com', '$2y$10$SheAzmBZEaE9B7qA1NLAJ.3WPPSpgwDbbVmP37mSj/Enu3HkedA7O', 0),
(35, 'mantap', 'mantap@gmail.com', '$2y$10$96EnYJzu.dk5MdLzRgLuzOspBX00bsvg6lzg9BO69dE5nhlXp/AJO', 0),
(36, 'aku', 'yahiko12@gmail.co.id', '$2y$10$5i1LwcKlJhwxmnd.QTyzduL3eljCMdavacIeGsO4Hz2Hb3PbGMPbu', 0),
(37, 'rioerlangga', 'itsrioerlangga@gmail.com', '$2y$10$lWYwibcSzlhPXiUGGy1UZ.EsjQyVn1otNE7VrfxlyflRdX7K8/Q9m', 0),
(38, 'bambang', 'bambangb086@gmail.com', '$2y$10$V9s51dAQxHU4DmUZGiT0guJ9CpcDWv5d4oLkRwl/.b/UdHvnfZrx2', 0),
(39, 'Jonilaskar', 'jonilaskar15@gmail.com', '$2y$10$E5KewD7KzFlLRR3VG5nQguod2bW4/OgFMbaOIMxxQx6zxMAeMjFdS', 0),
(40, 'asdfg', 'asdfg@gmail.com', '$2y$10$IA.twNhHyn.21e/Prexiq.c0LFsOq7uCAnjcNKJtLoFiUxfjYxEvG', 0),
(41, 'ronaldo', 'asd@gmail.com', '$2y$10$sLXSsPCBq8AvpJQc5jetouREGmMB.MqcCnbtGtDaS79hgoiFdl3mO', 0),
(42, 'hoho', 'koploprotokol@gmail.com', '$2y$10$vdjm.4ENAPDSI09fPXFilOd7b5cfhdGK6SvfKNTKPkSq//ddZ2c5m', 0),
(43, 'belajar', 'belajar@gmail.co.id', '$2y$10$Bp9kgFhJPcuC2CNpbFXOl.yiOsTxnfHuEZ9hc/WS9gpEomLD6phGu', 0),
(44, 'niki', 'nn@gmail.com', '$2y$10$FsHg2tD0J.6KpeBuVfE0Fu6TlDeCsRYQ07FulCYH9QVjHMqeshtFG', 0),
(45, '1', '2@gmail.com', '$2y$10$A/s/otqwaV0aUQ8rGBEH9ehHMyUnDydEYw6XWdMbQknF2QXw3t.eu', 0),
(46, 'opik', 'opik@gmail.com', '$2y$10$DC7HKUuHOO9SWRhO1WCmkuEOKFW..zJMdBK/3CwPBOK180BL36eAK', 0),
(47, 'xxx', 'xxx@gmail.com', '$2y$10$iR.p8/J.rFPwcbYc9bbU6OUd1t/VaLszs987dOLQm5HUIfSKQ.28C', 0),
(48, 'admin123', 'admin@gmail.com', '$2y$10$73tdytzf6TIqRNdd8sUioOSNYnSY5AIaCjGIl1IcN.mR9wngm2au6', 0),
(49, 'den', 'denir.modjo@gmail.com', '$2y$10$/22fuQvauNgFLMfcuCI2vO9E2sflGXYLtPIr2mgsriGhh5rT2Q2i.', 0),
(50, 'wakwak', 'wak@gmail.com', '$2y$10$By11ksX7kr9zMTBHe3R9pOOrB6dspWEOHy.b21zbPCPoHS8/cE.he', 0),
(51, 'User', 'user@gmail.com', '$2y$10$y.2aP0tX1IgUshhVAaSiTOyi2tqwNr.aKyeHD9aHYluPoH/7NdKY2', 0),
(52, 'hays', 'asdasd@asd', '$2y$10$8XAajMINLmrHWsUIMa/uA.AEBImwK6AlDHnUNYkdzv5i7x.N1RPGK', 0),
(53, 'jun', 'jun@gmail.com', '$2y$10$p.OIufxnwzD7kneZRtlV1u.UuKqiYCkYNY8u6yTgkXuJjHnmMAPHq', 0),
(54, 'anjay', 'ihsnnaha@jancoeg.com', '$2y$10$a9OkdFbDgHO7P8RmO3.j7OPrbvuQlIVgjqxhx5Lt.w3/vHBVKWlpS', 0),
(55, 'asd', 'asd@asd.cd', '$2y$10$114RsscGoHWsHdI8d6it5O8hqTaB3XA9RlQWJRamsDycqxl/yveMC', 0),
(56, 'y', 'y@g.com', '$2y$10$RrnZS5iebRTMpvUB1RITPeC2ONZjOElcIDfaIwe4IjxCwzaLs9GmO', 0),
(57, 'admin11sadasd', 'admin123@gmai.co.id', '$2y$10$6Mq27p7TRnsL09qSv65BSuSUDEJ8IOlyIvMN9t/a92Q7w2kkHJjoy', 0),
(58, 'arby', 'hermawanarby2@gmail.com', '$2y$10$OcsbYTsTTJOe/MFdT8X96.g4B0tVog1bc1bMsMdKagJogPdcbKCgG', 0),
(59, 'joko', 'jokobodo@gmail.com', '$2y$10$XwrJwyiGDFZ5mTNj9vW/iuuYIJyEnefwZsoWNp0vUqpVjo7JyZpRm', 0),
(60, 'Qw', 'qwfgg@gggg', '$2y$10$eORV.ax4zb3osmI3NeoK5OjIgXZ.Nut7Zi5c5bXWwIVkC8qlHWSLy', 0),
(61, 'otong', 'otong@otong.com', '$2y$10$LJP1VdmTunZj9pdzOzOdEu9DG7vDBBgN/bzNJnvFQTQR.aWqaxQi6', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
