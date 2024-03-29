-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `goods_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品編號',
  `goods_title` varchar(255) NOT NULL COMMENT '商品名稱',
  `goods_content` text NOT NULL COMMENT '商品說明',
  `goods_price` mediumint(8) unsigned NOT NULL COMMENT '商品價錢',
  `goods_counter` smallint(5) unsigned NOT NULL COMMENT '人氣',
  `goods_date` datetime NOT NULL COMMENT '上架日期',
  PRIMARY KEY (`goods_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 2019-11-21 08:11:40
