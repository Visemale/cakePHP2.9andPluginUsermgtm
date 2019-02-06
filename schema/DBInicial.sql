/*
SQLyog Community v13.0.1 (32 bit)
MySQL - 10.1.34-MariaDB : Database - pruebas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pruebas` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pruebas`;

/*Table structure for table `login_tokens` */

DROP TABLE IF EXISTS `login_tokens`;

CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `login_tokens` */

/*Table structure for table `user_details` */

DROP TABLE IF EXISTS `user_details`;

CREATE TABLE `user_details` (
  `id_user_details` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_estados` int(11) NOT NULL,
  `edad` int(11) NOT NULL DEFAULT '0',
  `id_delegacion_municipio` int(11) NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `genero` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `ganador` tinyint(4) NOT NULL DEFAULT '0',
  `como_se_entero` varchar(50) CHARACTER SET utf8 NOT NULL,
  `unidad` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user_details`),
  KEY `fk_detalle_usuarios_users1_idx` (`id_users`),
  KEY `fk_user_details_estados1_idx` (`id_estados`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='utf8_spanish2_ci';

/*Data for the table `user_details` */

/*Table structure for table `user_group_permissions` */

DROP TABLE IF EXISTS `user_group_permissions`;

CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

/*Data for the table `user_group_permissions` */

insert  into `user_group_permissions`(`id`,`user_group_id`,`controller`,`action`,`allowed`) values 
(1,1,'Pages','display',1),
(2,2,'Pages','display',1),
(3,3,'Pages','display',1),
(4,1,'UserGroupPermissions','index',1),
(5,2,'UserGroupPermissions','index',0),
(6,3,'UserGroupPermissions','index',0),
(7,1,'UserGroupPermissions','update',1),
(8,2,'UserGroupPermissions','update',0),
(9,3,'UserGroupPermissions','update',0),
(10,1,'UserGroups','index',1),
(11,2,'UserGroups','index',0),
(12,3,'UserGroups','index',0),
(13,1,'UserGroups','addGroup',1),
(14,2,'UserGroups','addGroup',0),
(15,3,'UserGroups','addGroup',0),
(16,1,'UserGroups','editGroup',1),
(17,2,'UserGroups','editGroup',0),
(18,3,'UserGroups','editGroup',0),
(19,1,'UserGroups','deleteGroup',1),
(20,2,'UserGroups','deleteGroup',0),
(21,3,'UserGroups','deleteGroup',0),
(22,1,'Users','index',1),
(23,2,'Users','index',1),
(24,3,'Users','index',1),
(25,1,'Users','viewUser',1),
(26,2,'Users','viewUser',0),
(27,3,'Users','viewUser',0),
(28,1,'Users','myprofile',1),
(29,2,'Users','myprofile',1),
(30,3,'Users','myprofile',0),
(31,1,'Users','login',1),
(32,2,'Users','login',1),
(33,3,'Users','login',1),
(34,1,'Users','logout',1),
(35,2,'Users','logout',1),
(36,3,'Users','logout',1),
(37,1,'Users','register',1),
(38,2,'Users','register',1),
(39,3,'Users','register',1),
(40,1,'Users','changePassword',1),
(41,2,'Users','changePassword',1),
(42,3,'Users','changePassword',0),
(43,1,'Users','changeUserPassword',1),
(44,2,'Users','changeUserPassword',0),
(45,3,'Users','changeUserPassword',0),
(46,1,'Users','addUser',1),
(47,2,'Users','addUser',0),
(48,3,'Users','addUser',0),
(49,1,'Users','editUser',1),
(50,2,'Users','editUser',0),
(51,3,'Users','editUser',0),
(52,1,'Users','dashboard',1),
(53,2,'Users','dashboard',1),
(54,3,'Users','dashboard',0),
(55,1,'Users','deleteUser',1),
(56,2,'Users','deleteUser',0),
(57,3,'Users','deleteUser',0),
(58,1,'Users','makeActive',1),
(59,2,'Users','makeActive',0),
(60,3,'Users','makeActive',0),
(61,1,'Users','accessDenied',1),
(62,2,'Users','accessDenied',1),
(63,3,'Users','accessDenied',1),
(64,1,'Users','userVerification',1),
(65,2,'Users','userVerification',1),
(66,3,'Users','userVerification',1),
(67,1,'Users','forgotPassword',1),
(68,2,'Users','forgotPassword',1),
(69,3,'Users','forgotPassword',1),
(70,1,'Home','index',1),
(71,2,'Home','index',1),
(72,3,'Home','index',1),
(73,4,'Home','index',1),
(74,1,'Home','recuperar_clave',1),
(75,2,'Home','recuperar_clave',1),
(76,3,'Home','recuperar_clave',1),
(77,4,'Home','recuperar_clave',1),
(78,1,'Home','login_incorrecto',1),
(79,2,'Home','login_incorrecto',1),
(80,3,'Home','login_incorrecto',1),
(81,4,'Home','login_incorrecto',1),
(82,1,'Participantes','registro_usuario',0),
(83,2,'Participantes','registro_usuario',0),
(84,3,'Participantes','registro_usuario',1),
(85,4,'Participantes','registro_usuario',0),
(86,1,'Participantes','get_coreo',0),
(87,2,'Participantes','get_coreo',0),
(88,3,'Participantes','get_coreo',1),
(89,4,'Participantes','get_coreo',0),
(90,1,'Participantes','perfil',0),
(91,2,'Participantes','perfil',0),
(92,3,'Participantes','perfil',0),
(93,4,'Participantes','perfil',1),
(94,1,'Rompecabezas','juega',0),
(95,2,'Rompecabezas','juega',0),
(96,3,'Rompecabezas','juega',0),
(97,4,'Rompecabezas','juega',1),
(98,1,'Rompecabezas','save_ticket',0),
(99,2,'Rompecabezas','save_ticket',0),
(100,3,'Rompecabezas','save_ticket',0),
(101,4,'Rompecabezas','save_ticket',1),
(102,1,'Rompecabezas','get_ticket',0),
(103,2,'Rompecabezas','get_ticket',0),
(104,3,'Rompecabezas','get_ticket',0),
(105,4,'Rompecabezas','get_ticket',1),
(106,1,'Rompecabezas','random_rompecabeza',0),
(107,2,'Rompecabezas','random_rompecabeza',0),
(108,3,'Rompecabezas','random_rompecabeza',0),
(109,4,'Rompecabezas','random_rompecabeza',1),
(110,1,'Rompecabezas','save_juego',0),
(111,2,'Rompecabezas','save_juego',0),
(112,3,'Rompecabezas','save_juego',0),
(113,4,'Rompecabezas','save_juego',1),
(114,1,'Participaciones','ranking',0),
(115,2,'Participaciones','ranking',0),
(116,3,'Participaciones','ranking',1),
(117,4,'Participaciones','ranking',1),
(118,4,'Users','userVerification',0),
(119,4,'Users','accessDenied',0),
(120,1,'Alertas','index',1),
(121,2,'Alertas','index',0),
(122,3,'Alertas','index',1),
(123,4,'Alertas','index',1),
(124,1,'Bases','index',0),
(125,2,'Bases','index',0),
(126,3,'Bases','index',1),
(127,4,'Bases','index',1),
(128,1,'AvisoDePrivacidad','index',1),
(129,2,'AvisoDePrivacidad','index',1),
(130,3,'AvisoDePrivacidad','index',1),
(131,4,'AvisoDePrivacidad','index',1),
(132,1,'Users','activatePassword',0),
(133,2,'Users','activatePassword',0),
(134,3,'Users','activatePassword',1),
(135,4,'Users','activatePassword',0),
(136,1,'Participantes','get_municipio',0),
(137,2,'Participantes','get_municipio',0),
(138,3,'Participantes','get_municipio',1),
(139,4,'Participantes','get_municipio',0),
(140,1,'PreguntasFrecuentes','index',1),
(141,2,'PreguntasFrecuentes','index',1),
(142,3,'PreguntasFrecuentes','index',1),
(143,4,'PreguntasFrecuentes','index',1),
(144,1,'Participantes','sendVerificationMail',0),
(145,2,'Participantes','sendVerificationMail',0),
(146,3,'Participantes','sendVerificationMail',1),
(147,4,'Participantes','sendVerificationMail',0),
(148,1,'Participantes','get_ticket',0),
(149,2,'Participantes','get_ticket',0),
(150,3,'Participantes','get_ticket',0),
(151,4,'Participantes','get_ticket',1),
(152,1,'Rompecabezas','valid_respuesta',0),
(153,2,'Rompecabezas','valid_respuesta',0),
(154,3,'Rompecabezas','valid_respuesta',0),
(155,4,'Rompecabezas','valid_respuesta',1),
(156,1,'Rompecabezas','procesa_respuesta_user',0),
(157,2,'Rompecabezas','procesa_respuesta_user',0),
(158,3,'Rompecabezas','procesa_respuesta_user',0),
(159,4,'Rompecabezas','procesa_respuesta_user',1),
(160,1,'Rompecabezas','reset_niveles_users',0),
(161,2,'Rompecabezas','reset_niveles_users',0),
(162,3,'Rompecabezas','reset_niveles_users',0),
(163,4,'Rompecabezas','reset_niveles_users',1),
(164,1,'Ganadores','index',1),
(165,2,'Ganadores','index',1),
(166,3,'Ganadores','index',1),
(167,4,'Ganadores','index',1),
(168,1,'Rompecabezas','counter_premios_footer',1),
(169,2,'Rompecabezas','counter_premios_footer',1),
(170,3,'Rompecabezas','counter_premios_footer',1),
(171,4,'Rompecabezas','counter_premios_footer',1),
(172,1,'Rompecabezas','practicar',1),
(173,2,'Rompecabezas','practicar',1),
(174,3,'Rompecabezas','practicar',1),
(175,4,'Rompecabezas','practicar',1),
(176,1,'Rompecabezas','valid_respuesta_practica',0),
(177,2,'Rompecabezas','valid_respuesta_practica',0),
(178,3,'Rompecabezas','valid_respuesta_practica',0),
(179,4,'Rompecabezas','valid_respuesta_practica',1),
(180,1,'Crones','irSiguenteNivel',1),
(181,2,'Crones','irSiguenteNivel',0),
(182,3,'Crones','irSiguenteNivel',1),
(183,4,'Crones','irSiguenteNivel',1),
(184,1,'Crones','envia_correo_cambio_nivel2',1),
(185,2,'Crones','envia_correo_cambio_nivel2',0),
(186,3,'Crones','envia_correo_cambio_nivel2',1),
(187,4,'Crones','envia_correo_cambio_nivel2',1),
(188,1,'Crones','reset_usuarios_diarios',1),
(189,2,'Crones','reset_usuarios_diarios',0),
(190,3,'Crones','reset_usuarios_diarios',1),
(191,4,'Crones','reset_usuarios_diarios',0),
(192,1,'Crones','reset_usuarios_semanales',1),
(193,2,'Crones','reset_usuarios_semanales',0),
(194,3,'Crones','reset_usuarios_semanales',1),
(195,4,'Crones','reset_usuarios_semanales',0),
(196,1,'Juego','index',1),
(197,2,'Juego','index',1),
(198,3,'Juego','index',1),
(199,4,'Juego','index',1),
(200,5,'Juego','index',1),
(201,1,'Juego','board',1),
(202,2,'Juego','board',1),
(203,3,'Juego','board',1),
(204,4,'Juego','board',1),
(205,5,'Juego','board',1),
(206,1,'Users','buscar',1),
(207,2,'Users','buscar',1),
(208,3,'Users','buscar',1),
(209,4,'Users','buscar',1),
(210,5,'Users','buscar',1),
(211,4,'Users','index',1),
(212,5,'Users','index',1),
(213,4,'Users','login',1),
(214,5,'Users','login',1),
(215,5,'AvisoDePrivacidad','index',1),
(216,1,'Game','index',1),
(217,2,'Game','index',1),
(218,3,'Game','index',1),
(219,4,'Game','index',1),
(220,5,'Game','index',1),
(221,1,'Game','board',1),
(222,2,'Game','board',1),
(223,3,'Game','board',1),
(224,4,'Game','board',1),
(225,5,'Game','board',1),
(226,1,'Ranking','index',1),
(227,2,'Ranking','index',1),
(228,3,'Ranking','index',1),
(229,4,'Ranking','index',1),
(230,5,'Ranking','index',1),
(231,1,'TerminosYCondiciones','index',1),
(232,2,'TerminosYCondiciones','index',1),
(233,3,'TerminosYCondiciones','index',1),
(234,4,'TerminosYCondiciones','index',1),
(235,5,'TerminosYCondiciones','index',1),
(236,5,'Ganadores','index',1),
(237,5,'Home','index',1),
(238,5,'Home','recuperar_clave',1),
(239,5,'Home','login_incorrecto',1),
(240,5,'PreguntasFrecuentes','index',1);

/*Table structure for table `user_groups` */

DROP TABLE IF EXISTS `user_groups`;

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `user_groups` */

insert  into `user_groups`(`id`,`name`,`alias_name`,`allowRegistration`,`created`,`modified`) values 
(1,'Admin','Admin',0,'2016-12-19 11:11:07','2016-12-19 11:11:07'),
(2,'User','User',1,'2016-12-19 11:11:07','2016-12-19 11:11:07'),
(3,'Publico','Guest',0,'2016-12-19 11:11:07','2016-12-19 11:11:07');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `fk_users_user_groups_idx` (`user_group_id`),
  CONSTRAINT `fk_users_user_groups` FOREIGN KEY (`user_group_id`) REFERENCES `user_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

/*Data for the table `users` */

insert  into `users`(`id`,`user_group_id`,`username`,`password`,`email`,`name`,`middle_name`,`last_name`,`created`,`modified`,`active`) values 
(1,1,'admin@admin.com','e10adc3949ba59abbe56e057f20f883e','admin@admin.com','Admin','Admin','Admin','2019-02-06 12:20:04','2019-02-06 12:20:07',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
