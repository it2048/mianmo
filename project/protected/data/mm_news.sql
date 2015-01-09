CREATE TABLE IF NOT EXISTS `mm_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(128) NOT NULL COMMENT '标题',
  `content` varchar(2048) NOT NULL COMMENT '内容',
  `link` varchar(256) NOT NULL COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=1 ;