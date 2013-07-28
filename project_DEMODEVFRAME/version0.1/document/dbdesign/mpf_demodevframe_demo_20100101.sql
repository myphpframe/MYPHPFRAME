-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 10 月 24 日 05:17
-- 服务器版本: 5.1.51
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: 'mpf_demodevframe_demo'
--

-- --------------------------------------------------------

--
-- 表的结构 'mpf_demo_user'
--

CREATE TABLE mpf_demo_user (
  uid int(10) unsigned NOT NULL AUTO_INCREMENT,
  lg_name varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  upass varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  user_status tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (uid)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 导出表中的数据 'mpf_demo_user'
--

INSERT INTO mpf_demo_user (uid, lg_name, upass, user_status) VALUES
(1, 'lgname1', 'f11', 1),
(2, 'lgname2', 'f12', 1),
(3, 'lgname3', 'f13', 1),
(4, 'lgname4', 'f14', 1);
