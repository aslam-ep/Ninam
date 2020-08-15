/*
SQLyog Community Edition- MySQL GUI v8.03 
MySQL - 5.5.5-10.3.16-MariaDB : Database - ninam
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`ninam` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ninam`;

/*Table structure for table `tbl_doner` */

DROP TABLE IF EXISTS `tbl_doner`;

CREATE TABLE `tbl_doner` (
  `D_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `lid` int(11) NOT NULL,
  `district` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`D_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_doner` */

insert  into `tbl_doner`(`D_id`,`name`,`email`,`phone_no`,`gender`,`blood_group`,`lid`,`district`,`status`) values (1,'Rahul','rahululleri.007@gmail.com','8156864925','Male','B+ve',1,'Malappuram',1),(2,'Aslam','aslamepnd7@gmail.com','2147483647','Male','O+ve',2,'Malappuram',1);

/*Table structure for table `tbl_hospital` */

DROP TABLE IF EXISTS `tbl_hospital`;

CREATE TABLE `tbl_hospital` (
  `h_id` int(5) NOT NULL AUTO_INCREMENT,
  `hospital` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `district` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_hospital` */

insert  into `tbl_hospital`(`h_id`,`hospital`,`phone`,`district`,`email`) values (1,'HMS',1234554321,'Malappuram','hms@gmail.com');

/*Table structure for table `tbl_login` */

DROP TABLE IF EXISTS `tbl_login`;

CREATE TABLE `tbl_login` (
  `uname` char(25) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_login` */

insert  into `tbl_login`(`uname`,`pass`,`user_type`,`login_id`) values ('rahululleri.007@gmail.com','123456','donor',1),('aslamepnd7@gmail.com','654321','donor',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
