-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-01 14:47:06
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `public_benefit`
--

-- --------------------------------------------------------

--
-- 表的结构 `hoe_clist`
--

CREATE TABLE IF NOT EXISTS `hoe_clist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `text` varchar(2000) NOT NULL,
  `time` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `hoe_clist`
--

INSERT INTO `hoe_clist` (`id`, `title`, `img`, `text`, `time`) VALUES
(1, 'What？按摩也会中风？中风不是老年人的专利', './img/clist/1.jpg', '不当的按摩也会引起脑卒中，这可不是开玩笑，不信我们来看一个真实的例子。去年11月的傍晚，一个41岁青年小吴，突发头痛头晕伴左侧肢体麻木乏力4...', '2018-06-29 10:05:04更新'),
(2, '保护野生大熊猫 投资获10倍以上“暴利”', './img/clist/2.jpg', '年投入资金1亿—10多亿元的中国野生大熊猫保护，值吗？北京时间6月28日23时，国际《现代生物学》（CurrentBiology）杂志在线发...', '2018-06-29 09:39:57更新'),
(3, '安徽江苏等遭暴雨 华北高温“坚挺”将达40℃', './img/clist/3.jpg', '今（27日）明天强降雨带将转移至江淮地区，安徽、江苏等局地有暴雨，同时受冷涡影响，东北地区多雷雨天气。气温方面，未来几天高温势头“愈演愈烈”...', '2018-06-27 09:30:47更新'),
(4, '传统药材生物碱抗微生物活性系列谜题解开', './img/clist/4.jpg', '抗生素滥用，导致严重的副作用及多重耐药威胁着人类健康，因此源于植物的抗菌、抗真菌天然小分子研究备受瞩目。25日,来自中国科学院昆明植物研究所...', '2018-06-26 09:29:28更新'),
(5, '国际禁毒日：一位禁毒警察的剑胆琴心', './img/clist/5.jpg', '第一次见到彭刚，很难把他和“禁毒警察”联系在一起——温文尔雅的气质，言语间不疾不徐，让人看到这位一米八的男人背后的“铁汉柔情”。人们常说，禁...', '2018-06-26 09:24:44更新'),
(6, '孤独症康复技术发展及政策研讨国际论坛圆满举办', './img/clist/6.jpg', '2018年6月22日，由中国残疾人康复协会主办、爱佑慈善基金会联合主办的“孤独症康复技术发展及政策研讨国际论坛”在京圆满举办。', '2018-06-25 14:32:52更新'),
(7, '我国全面打响蓝天、碧水、净土三大保卫战', './img/clist/7.jpg', '24日公布的《中共中央国务院关于全面加强生态环境保护坚决打好污染防治攻坚战的意见》提出，坚决打赢蓝天保卫战，着力打好碧水保卫战，扎实推进净土...', '2018-06-25 09:22:20更新'),
(8, '国内首个儿童智库启动 洞见儿童教育未来', './img/clist/8.jpg', '现代智库，作为重要的智慧生产机构，是一个国家思想创新的泉源，也是一个国家软实力和国际话语权的重要标志。所有优秀的社会公共决策来源于专业而透彻', '2018-06-25 09:18:42更新'),
(9, '“我是乐天行动派”闪电演讲圆满落幕', './img/clist/9.jpg', '6月18日下午，北京大学乐天行动派公益沙龙年度特别专场“我是乐天行动派”闪电演讲在菊隐剧场举行。', '2018-06-22 15:31:11更新');

-- --------------------------------------------------------

--
-- 表的结构 `hoe_user`
--

CREATE TABLE IF NOT EXISTS `hoe_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `hoe_user`
--

INSERT INTO `hoe_user` (`userid`, `username`, `password`) VALUES
(1, '1', '1'),
(2, '2', 'da4b9237bacccdf19c0760cab7aec4a8359010b0'),
(11, '1234', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(12, '12345', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- 表的结构 `lejuan`
--

CREATE TABLE IF NOT EXISTS `lejuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `num` int(11) NOT NULL,
  `rc` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `lejuan`
--

INSERT INTO `lejuan` (`id`, `img`, `title`, `text`, `num`, `rc`) VALUES
(1, './img/lejuan/img1.jpg', '壹基金温暖包', '您的每一份爱心，都能帮助到一名受灾地区的困境儿童。', 16, 3),
(2, './img/lejuan/img2.jpg', '先心儿童的“心”生', '每人10元，1000人就能拯救一个先天性心脏病孩子的生命。', 2, 2),
(3, './img/lejuan/img3.jpg', '贫困白内障的光明', '每2000元，就可以让一名贫困白内障患者收获光明。', 2, 2),
(4, './img/lejuan/img4.jpg', '爱心包裹一对一圆梦', '每100元，送他们一个爱心包裹加一个多彩未来。', 5000000, 1),
(5, './img/lejuan/img5.jpg', '贫困孤儿助养', '1485元，为一名孤儿提供一年的生活和学习费用。', 2, 1),
(6, './img/lejuan/img6.jpg', '关怀贫困母亲', '200元，一个包含御寒保暖用品母亲邮包，冬天，让远方的母亲不寒冷。', 5000000, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
