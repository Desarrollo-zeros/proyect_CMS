SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `account_data`
-- ----------------------------
DROP TABLE IF EXISTS `account_data`;
CREATE TABLE `account_data` (
  `id` int(11) NOT NULL,
  `vp` int(11) DEFAULT '0',
  `dp` int(11) DEFAULT '0',
  `location` varchar(255) DEFAULT NULL,
  `nickname` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headline` varchar(70) DEFAULT NULL,
  `content` text NOT NULL,
  `timestamp` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `comments` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'Welcome to your new Proyect powered website!', 'Your website has been successfully installed and we, the FusionCMS team, sincerely hope that you will have a nice time using it.<div><br></div><div>To proceed, log into the administrator panel using an administrator account and the security code you specified during the installation.</div><div><br></div><div>If you run into problems, please contact us via the <a href=\"http://fusion.raxezdev.com\" target=\"_blank\">FusionHub</a>.</div><div><br></div><div>Best regards,</div><div>the Proyect team</div>', '1344607279', '1', '', '-1');
