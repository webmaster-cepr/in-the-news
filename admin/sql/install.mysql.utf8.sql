DROP TABLE IF EXISTS `#__inthenews`;

CREATE TABLE `#__inthenews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `publication` varchar(255) NOT NULL,
  `italicized` tinyint(1) NOT NULL,
  `published` datetime DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `frontpage` tinyint(1) NOT NULL,
  `live` varchar(3) NOT NULL DEFAULT 'Yes',
  `copy` tinyint(1) NOT NULL,
  `team` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9672 ;

