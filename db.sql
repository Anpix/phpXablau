CREATE TABLE IF NOT EXISTS `thing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `what` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `thing` (`id`, `what`) VALUES
(1, 'uma coisa'),
(2, 'outra coisa');
