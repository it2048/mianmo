CREATE TABLE IF NOT EXISTS `distributor` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `name` varchar(64) DEFAULT NULL COMMENT '姓名',
  `tel` varchar(18) NOT NULL COMMENT '电话',
  `weixin` varchar(64) DEFAULT NULL COMMENT '微信',
  `add` varchar(256) DEFAULT NULL COMMENT '收货地址',
  `desc` varchar(32) DEFAULT NULL COMMENT '身份证',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='经销商' AUTO_INCREMENT=1 ;