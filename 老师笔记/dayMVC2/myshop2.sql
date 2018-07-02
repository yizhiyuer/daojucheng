-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?06 �?26 �?15:55
-- 服务器版本: 5.5.53
-- PHP 版本: 5.5.38

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `myshop2`
--

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL DEFAULT '',
  `price` decimal(11,2) NOT NULL DEFAULT '0.00',
  `storenum` int(11) NOT NULL DEFAULT '1',
  `detail` text NOT NULL,
  `photos` varchar(500) NOT NULL DEFAULT '',
  `cid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `sname`, `price`, `storenum`, `detail`, `photos`, `cid`) VALUES
(1, 'iphone 6s', '1018.00', 1, '', '', 4),
(2, 'Lenovo/联想 Y7000', '6599.00', 1, '', '', 4),
(3, '华硕 静音鼠标', '17.00', 1, '', '', 4),
(4, '骑行裤内裤短裤rbtwin', '250.00', 1, '', '', 6),
(5, '太阳镜', '50.00', 1, '', '', 6),
(6, '西装X0001', '150.00', 1, '', '', 1),
(7, '连衣裙', '150.00', 1, '', '', 1),
(8, '奥拓', '14491.00', 1, '', '', 9),
(9, '奔驰S0007', '549001.00', 1, '', '', 9),
(10, 'smart', '149001.00', 1, '', '', 9),
(13, '钢笔', '16.00', 1, '', '', 10),
(14, '钢笔-德国制造', '160.00', 88, '钢笔-德国制造', '', 10),
(15, 'A4纸张', '60.00', 1, '很健康就好', '', 10),
(16, '国画宣纸', '601.00', 66, '', '', 10),
(17, '手工剪纸材料', '66.00', 88, '', '', 10),
(18, '劳力士', '16998.00', 1, '', '', 5),
(19, '学生电子表', '68.00', 180, '天才儿童手表，带定位，防失踪', '', 4),
(20, '卡西欧2', '661.00', 616, '卡西欧2卡西欧2卡西欧2卡西欧2卡西欧2', '', 5),
(22, '灵山荔枝', '2.50', 35, '很好吃', '', 7),
(23, '联想Z5', '1299.00', 35, '联想Z5 全面屏 4G+64G', '', 4),
(24, '小米8', '3599.00', 28, '小米8 双GPS精确定位', '', 4),
(25, 'iPhone X ', '6576.00', 30, 'iPhone X  有可能会爆炸', '', 4),
(28, '老板抽油烟机', '1300.00', 150, '老板抽油烟机老板抽油烟机老板抽油烟机老板抽油烟机', '', 8),
(29, 'vivo Nex', '2000.00', 88, '全面屏', '', 4),
(32, '华为手环', '125.00', 69, '华为手环华为手环华为手环华为手环', '', 4);

-- --------------------------------------------------------

--
-- 表的结构 `goods_cate`
--

CREATE TABLE IF NOT EXISTS `goods_cate` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL DEFAULT '0',
  `clev` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `goods_cate`
--

INSERT INTO `goods_cate` (`cid`, `cname`, `pid`, `clev`) VALUES
(1, '女装 / 男装 / 内衣', 0, 0),
(2, '鞋靴 / 箱包 / 配件', 0, 0),
(3, '童装玩具 / 孕产 / 用品', 0, 0),
(4, '家电 / 数码 / 手机', 0, 0),
(5, '珠宝 / 眼镜 / 手表', 0, 0),
(6, '运动 / 户外 / 乐器', 0, 0),
(7, '美食 / 生鲜 / 零食', 0, 0),
(8, '房产 / 装修 / 建材', 0, 0),
(9, '汽车 / 二手车 / 用品', 0, 0),
(10, '学习 / 卡券 / 本地服务', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `upasswd` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `uname`, `upasswd`) VALUES
(1, 'wes.luo', '111111'),
(2, 'cavin.chen', '111111'),
(3, 'jack.wang', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
