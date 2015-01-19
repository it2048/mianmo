-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 年 01 月 19 日 10:29
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mianmo`
--

-- --------------------------------------------------------

--
-- 表的结构 `rs_slide`
--

CREATE TABLE IF NOT EXISTS `rs_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(128) NOT NULL COMMENT '标题',
  `content` text COMMENT '文档内容',
  `img_url` varchar(128) NOT NULL COMMENT '图片地址',
  `redirect_url` varchar(128) DEFAULT NULL COMMENT '跳转地址',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `add_user` varchar(64) NOT NULL COMMENT '创建人',
  `status` int(11) NOT NULL COMMENT '状态 0上线，1下线',
  `type` int(11) NOT NULL COMMENT '类型 0固定，1不固定',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='幻灯片表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `rs_slide`
--

INSERT INTO `rs_slide` (`id`, `title`, `content`, `img_url`, `redirect_url`, `add_time`, `add_user`, `status`, `type`) VALUES
(1, '幻灯5', NULL, '/public/upload/1421659304.21232f297a57a5a743894a0e4a801fc3.jpg', 'http://www.showplus.cc/index.php/home/showplus#pori5', 1421659304, 'admin', 0, 0),
(2, '幻灯4', NULL, '/public/upload/1421659291.21232f297a57a5a743894a0e4a801fc3.jpg', 'http://www.showplus.cc/index.php/home/showplus#pori4', 1421659291, 'admin', 0, 0),
(3, '幻灯3', NULL, '/public/upload/1421658737.21232f297a57a5a743894a0e4a801fc3.jpg', 'http://www.showplus.cc/index.php/home/showplus#pori3', 1421658738, 'admin', 0, 0),
(4, '幻灯2', NULL, '/public/upload/1421659279.21232f297a57a5a743894a0e4a801fc3.jpg', 'http://www.showplus.cc/index.php/home/showplus#pori2', 1421659279, 'admin', 0, 0),
(5, '幻灯1', NULL, '/public/upload/1421659266.21232f297a57a5a743894a0e4a801fc3.jpg', 'http://www.showplus.cc/index.php/home/showplus#pori1', 1421659266, 'admin', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
