/*
SQLyog Community v13.0.1 (32 bit)
MySQL - 10.1.34-MariaDB : Database - wikinimbus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wikinimbus` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;

USE `wikinimbus`;

/*Table structure for table ` multimedia` */

DROP TABLE IF EXISTS ` multimedia`;

CREATE TABLE ` multimedia` (
  `id_multimedia` bigint(20) NOT NULL AUTO_INCREMENT,
  `src_multimedia` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_multimedia` tinyint(1) NOT NULL COMMENT '1=img, 2=video',
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_multimedia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table ` multimedia` */

/*Table structure for table `articulos` */

DROP TABLE IF EXISTS `articulos`;

CREATE TABLE `articulos` (
  `id_articulos` bigint(20) NOT NULL AUTO_INCREMENT,
  `titulo_articulo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `cuerpo_articulo` tinyint(1) NOT NULL,
  `id_users_autor` int(10) NOT NULL,
  `src_imagen_destacada` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_multimedia` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `id_subcategoria` int(10) NOT NULL,
  `tags` text COLLATE utf8_spanish2_ci,
  `visitas` bigint(20) DEFAULT NULL,
  `id_reactions_users` int(10) DEFAULT NULL,
  `id_comentarios_users` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_articulos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `articulos` */

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id_categorias` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `friendly` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` blob,
  `status` tinyint(1) DEFAULT NULL,
  `id_users_create` int(10) NOT NULL,
  `src_img_destadaca` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `categorias` */

insert  into `categorias`(`id_categorias`,`nombre_categoria`,`friendly`,`descripcion`,`status`,`id_users_create`,`src_img_destadaca`) values 
(1,'Nimbus','','Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',1,1,''),
(2,'ssaascsBGRN KVJEA VRH VJH ','ssaascsbgrn_kvjea_vrh_vjh_','What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',1,1,''),
(3,'juju','juju','Where can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',1,1,''),
(4,'fsfssd','fsfssd','Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',1,1,'');

/*Table structure for table `documentaciones` */

DROP TABLE IF EXISTS `documentaciones`;

CREATE TABLE `documentaciones` (
  `id_documentaciones` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_documentaciones` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` blob,
  `id_multimedia` int(10) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id_documentaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `documentaciones` */

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `login_tokens` */

insert  into `login_tokens`(`id`,`user_id`,`token`,`duration`,`used`,`created`,`expires`) values 
(1,1,'3e63776a7c140b2ab7694872a463bb22','2 weeks',0,'2018-12-26 14:42:52','2019-01-09 14:42:52'),
(2,1,'0386904654771d25959b067b5a4c7801','2 weeks',1,'2018-12-26 18:30:24','2019-01-09 18:30:24'),
(3,1,'8b1afa17e809d87884919eedd96d5766','2 weeks',0,'2018-12-27 15:53:34','2019-01-10 15:53:34'),
(4,1,'2b54033e3bf83c14fd034bc849c83ef6','2 weeks',1,'2018-12-27 14:18:06','2019-01-10 14:18:06'),
(5,1,'101a34df298c56a74e5010ea3dd53069','2 weeks',1,'2019-01-02 16:37:56','2019-01-16 16:37:56'),
(6,1,'9c42f583f286a8b9890b4598137e9549','2 weeks',0,'2019-01-02 16:37:56','2019-01-16 16:37:56'),
(7,1,'431838282eb601dff4873506f67a6da0','2 weeks',0,'2019-01-02 20:42:36','2019-01-16 20:42:36');

/*Table structure for table `subcategorias` */

DROP TABLE IF EXISTS `subcategorias`;

CREATE TABLE `subcategorias` (
  `id_subcategorias` int(10) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(10) NOT NULL,
  `nombre_subcategoria` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `friendly` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `id_users_create` int(10) DEFAULT NULL,
  `src_img_destacada` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_subcategorias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `subcategorias` */

/*Table structure for table `user_group_permissions` */

DROP TABLE IF EXISTS `user_group_permissions`;

CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

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
(23,2,'Users','index',0),
(24,3,'Users','index',0),
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
(70,1,'Home','index',0),
(71,2,'Home','index',0),
(72,3,'Home','index',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user_groups` */

insert  into `user_groups`(`id`,`name`,`alias_name`,`allowRegistration`,`created`,`modified`) values 
(1,'Admin','Admin',0,'2018-12-20 09:32:56','2018-12-20 09:32:56'),
(2,'User','User',1,'2018-12-20 09:32:56','2018-12-20 09:32:56'),
(3,'Guest','Guest',0,'2018-12-20 09:32:56','2018-12-20 09:32:56');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `active` varchar(3) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `ult_conx` datetime DEFAULT NULL,
  `permisos_cat_view` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`user_group_id`,`username`,`password`,`email`,`name`,`active`,`created`,`modified`,`ult_conx`,`permisos_cat_view`) values 
(1,1,'admin','e10adc3949ba59abbe56e057f20f883e','admin@admin.com','Admin','1','2018-12-20 09:32:55','2018-12-20 09:32:55',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
