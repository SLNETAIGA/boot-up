SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE IF NOT EXISTS `articles` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `publicationDate` date NOT NULL,
  `categoryId` smallint(5) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


INSERT INTO `articles` (`id`, `publicationDate`, `categoryId`, `title`, `summary`, `content`) VALUES
(1, '2016-02-01', 0, 'Boot-Up cms working!', 'Yay!:)', '<b>Boot-Up</b> <span class="glyphicon glyphicon-cloud"></span>  cms is started and work!<br/>\r\nThank for using Boot-Up Blog CMS!<br/>\r\n<br/>\r\nRealesed under GNU lisence v.3.0.<br/>\r\n<br/>\r\n<b>Boot-Up CMS</b>. Copyright 2016. https://github.com/SLNETAIGA/boot-up');


CREATE TABLE IF NOT EXISTS `categories` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
