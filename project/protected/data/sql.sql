
drop table if exists `AuthAssignment`;
drop table if exists `AuthItemChild`;
drop table if exists `AuthItem`;

create table `AuthItem`
(
   `name`                 varchar(64) not null,
   `type`                 integer not null,
   `description`          text,
   `bizrule`              text,
   `data`                 text,
   primary key (`name`)
) engine InnoDB;

create table `AuthItemChild`
(
   `parent`               varchar(64) not null,
   `child`                varchar(64) not null,
   primary key (`parent`,`child`),
   foreign key (`parent`) references `AuthItem` (`name`) on delete cascade on update cascade,
   foreign key (`child`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;

create table `AuthAssignment`
(
   `itemname`             varchar(64) not null,
   `userid`               varchar(64) not null,
   `bizrule`              text,
   `data`                 text,
   primary key (`itemname`,`userid`),
   foreign key (`itemname`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;

CREATE TABLE IF NOT EXISTS `rs_admin` (
  `username` varchar(24) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `tel` varchar(16) DEFAULT NULL COMMENT '电话',
  `email` varchar(32) DEFAULT NULL COMMENT 'email',
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rs_admin`
--

CREATE TABLE IF NOT EXISTS `rs_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `time` int(11) NOT NULL COMMENT '创建时间',
  `ip` varchar(16) NOT NULL COMMENT '用户IP',
  `number` int(11) NOT NULL COMMENT '数量',
  `money` varchar(64) NOT NULL COMMENT '钱',
  `beizhu` text NOT NULL COMMENT '备注',
  `zone` varchar(128) NOT NULL COMMENT '备注',
  `address` varchar(1024) NOT NULL COMMENT '备注',
  `name` varchar(64) NOT NULL COMMENT '备注',
  `mobilephone` varchar(32) NOT NULL COMMENT '备注',
  `postcode` varchar(32) DEFAULT NULL COMMENT '备注',
  `phone` varchar(32) DEFAULT NULL COMMENT '备注',
  `pay_type` int(11) NOT NULL COMMENT '支付类型。1，2 支付宝，到付',
  `pay_status` int(11) NOT NULL COMMENT '付款成功，1，2 没付款，已付款',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='订单表' AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `rs_order`
--

INSERT INTO `rs_order` (`id`, `time`, `ip`, `number`, `money`, `beizhu`, `zone`, `address`, `name`, `mobilephone`, `postcode`, `phone`) VALUES
(2, 1418490212, '127.0.0.1', 2, '298.00', '请在此填写您对订单或商品的特殊要求或说明，最多300字', '北京', '625 Jersey Ave Unit 8', 'JSJSCOOL CFTM', '18228041350', '08901', '7326131400');

