-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2014 at 11:29 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autorasevic`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `godiste` int(11) DEFAULT NULL,
  `snaga` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kilometraza` int(11) DEFAULT NULL,
  `gorivo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transmisija` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `boja` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cijena` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opis` text COLLATE utf8_unicode_ci,
  `u_dolasku` tinyint(1) DEFAULT NULL,
  `na_akciji` tinyint(1) DEFAULT NULL,
  `mark_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_car_mark_idx` (`mark_id`),
  KEY `fk_car_user1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=81 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `naslov`, `model`, `godiste`, `snaga`, `kilometraza`, `gorivo`, `transmisija`, `boja`, `cijena`, `opis`, `u_dolasku`, `na_akciji`, `mark_id`, `user_id`, `is_active`) VALUES
(39, 'Audi A4 2.0 TDI 2009/10. god', 'A4', 2009, '88', 157000, 'Dizel', 'Manuelna', 'Siva', '25900', '<p>Audi A4 2.0 TDI 2009/10 godina. Vozilo u odlicnom stanju, sva oprema, 4x el podizaci, el retrovizori, klima, parking senzori, maglenke, alu felge, naslon za ruku, ekran u boji, 6 brzina... start stop sistem...tek registrovan 16 05 2015 GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... Akcijske cijene... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 1, 2, 1, 1),
(40, 'Alfa Romeo 147 1.9 JTD 2005. god ', '147', 2005, '88', 109, 'Dizel', 'Manuelna', 'Siva', '8990', '<p>Alfa Romeo 147 1.9 JTD 2005. god. Vozilo u odlicnom stanju, redovno servisiran, servo, abs, esp, klima, el podizaci, el retrovizori, bord kompjuter, komande kod volana, cd-mp3, centralna brava, daljinsko zakljucavanje, 4 vrata... Cijena 8990 fixno za kes! GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 1, 1, 1),
(41, 'VW Passat 2.0 TDI 2006/07. god. COMMON RAIL ', 'Passat', 2006, '103', 225000, 'Dizel', 'Manuelna', 'Siva', '13990', '<p>VW Passat 2.0 TDI 2006/07. god. COMMON RAIL MOTOR Vozilo u odlicnom stanju, redovno servisirano. Sva oprema, el podizaci, el retrovizori, digitalna dvozonska klima, meta sistem alarm, 2 kljuca, grijaci sjedista, naslon za ruku, ESP... PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 11, 1, 1),
(42, 'VW Golf 6 2.0 TDI 2009. god', 'Golf 6', 2009, '81', 127000, 'Dizel', 'Manuelna', 'Crna', '19000', '<p>VW Golf 6 2.0 TDI 2009. godina. Vozilo u odlicnom stanju, klima, el podizaci, el retrovizori, abs, servo, cd mp3, 2 kljuca, servisna knjiga... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 Akcijska cijena...<br />\r\n&nbsp;</p>\r\n', 0, 0, 11, 1, 1),
(43, 'VW Golf 6 1.6 TDI 2010/11. god', 'Golf 6', 2010, '77', 134000, 'Dizel', 'Automatska', 'Crna', '18900', '<p>VW Golf 6 1.6 TDI 2010/11 god. Vozilo u odlicnom stanju,redovno servisiran, servo, abs, esp, tempomat, el podizaci, el retrovizori, klima, servisna knjiga, bord kompjuter, centralna brava, daljinsko zakljucavanje, dva kljuca, ispis servisa... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije.... zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777<br />\r\n&nbsp;</p>\r\n', 0, 0, 11, 1, 1),
(44, 'VW Passat 1.6 TDI 2010/11. god BLUEMOTION ', 'Passat', 2010, '73', 169000, 'Dizel', 'Manuelna', 'Siva', '24900', '<p>VW Passat 1.6 TDI 2010. godina BLUEMOTION. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, parking senzori i naprijed i nazad, maglenke, dnevna svjetla, alu felge, 2 kljuca, CHROME paket, alarm... Uradjen veliki servis! GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije.... zamjena moze po nasoj procjeni... Akcijske cijene... www.autorasevic.com 00387 65 219 777<br />\r\n&nbsp;</p>\r\n', 0, 0, 11, 1, 1),
(45, 'VW Golf 6 1.6 TDI 2010. god BLUEMOTION ', 'Golf 6', 2010, '77', 144000, 'Dizel', 'Manuelna', 'Bijela', '16990', '<p>VW Golf 6 1.6 TDI 2010. godina. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, abs, servo, cd, nove michelin gume, 2 kljuca, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 1, 11, 1, 1),
(46, 'VW Golf 5 1.9 TDI 2005/06. god 6 brzina ', 'Golf 5', 2005, '77', 163000, 'Dizel', 'Manuelna', 'Plava', '12700', '<p>VW Golf 5 1.9 TDI 2005. godina. Vozilo u odlicnom stanju, redovno servisirano. Digitalna dvozonska klima, el podizaci, el retrovizori, maglenke, alu felge, cobra alarm, 6 brzina. Bez dodatnih ulaganja! GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 11, 1, 1),
(47, 'VW Golf 6 1.6 TDI 2010/11. god BLUEMOTION', 'Golf 6', 2010, '77', 150000, 'Dizel', 'Manuelna', 'Siva', '19000', '<p>VW Golf 6 1.6 TDI 2010/11. godina BLUEMOTION! Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, 2 kljuca, servisna knjiga... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777<br />\r\n&nbsp;</p>\r\n', 0, 1, 11, 1, 1),
(48, 'VW Golf 6 1.6 TDI 2010/11 god.', 'Golf 6', 2010, '77', 133000, 'Dizel', 'Manuelna', 'Crna', '19900', '<p>VW Golf 6 1.6 TDI 2010/11 god. Vozilo u odlicnom stanju,redovno servisiran, servo, abs, esp, tempomat, el rezrovizori, el podizaci, el retrovizori, klima, servisna knjiga, bord kompjuter, centralna brava, daljinsko zakljucavanje, dva kljuca, ispis servisa... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 0, 11, 1, 1),
(49, 'Fiat Grande Punto 1.2 benzin', 'Grande Punto', 2008, '44', 79000, 'Benzin', 'Manuelna', 'Bijela', '9000', '<p>Fiat Grande Punto 1.2 benzin 2008. god. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, abs, servi+city, 2 kljuca, daljinsko zakljucavanje, cd mp3... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije.... zamjena moze po nasoj procjeni... Akcijske cijene... www.autorasevic.com 00387 65 219 777<br />\r\n&nbsp;</p>\r\n', 0, 0, 5, 1, 1),
(50, 'Citroen C5 2.0 HDI 2009/10. god ', 'C5', 2009, '103', 152000, 'Dizel', 'Manuelna', 'Plava', '18000', '<p>Citroen C5 2.0 HDI 2009/10. god. Vozilo u odli&Auml;nom stanju, redovno servisiran, servo, abs, esp, tempomat, el podizaci, el retrovizori, digitalna dvozonska klima, komande na volanu, bord kompjuter, cd-mp3, airbag, 6 brzina, hrom paket, maglenke, naslon za ruku, alu felge, servisna knjiga, dva kljuca, centralna brava, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 Akcijska cijena...</p>\r\n', 0, 0, 4, 1, 1),
(51, 'Citroen C3 1.4 HDI 2009. godina', 'C3', 2009, '50', 129000, 'Dizel', 'Manuelna', 'Bijela', '8900', '<p>Citroen C3 1.4 HDI 2009. god. Vozilo u odlicnom stanju, sva oprema,el podizaci, klima, servo, CD, komande kod volana, ABS, nove gume! Preporuka prodavca: VOZILO PREGLEDATI U OVLASTENOM SERVISU! GARANCIJA NA VOZILO I KILOMETRAZU!!! 00387 65 219 777 www.autorasevic.com</p>\r\n', 0, 1, 4, 1, 1),
(52, 'Renault Megane 1.5 DCI 2010. god ', 'Megane', 2010, '63', 104000, 'Dizel', 'Manuelna', 'Siva', '14300', '<p>9 Megane 1.5 DCi 2010. god. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, komande na volanu, cd mp3 sa komandama kod volana, tempomat, abs, servo, 2 kljuca... AKCIJSKA CIJENA ZA KE&Aring;&nbsp;! GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Navedena cijena za kes do registracije...zamjena moguca po nasoj procjeni... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 0, 9, 1, 1),
(53, 'Renault Megane SW 1.5 DCI 2010. god Euro 5 ', 'Megane SW', 2010, '78', 145000, 'Dizel', 'Manuelna', 'Siva', '14400', '<p>Renault Megane 1.5 DCI SW 2010. god. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, maglenke, alu felge, cd sa komandama kod volana, 2 kljuca... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 Akcijska cijena...</p>\r\n', 0, 0, 9, 1, 1),
(54, 'Citroen C4 1.6 HDI 2012. god. NOVI MODEL', 'C4', 2012, '68', 154000, 'Dizel', 'Manuelna', 'Bijela', '16990', '<p>Citroen C4 1.6 HDI 2012. god. NOVI MODEL...Vozilo u odlicnom stanju, sva oprema, 4x el podizaci, el retrovizori, digitalna dvozonska klima, maglenke, naslon za ruku, bord computer, CHROM paket, komande na volanu, tempomat, cd-mp3 sa komandama kod volana, nove gume, centralna brava, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 Akcijska cijena...</p>\r\n', 0, 0, 4, 1, 1),
(55, 'Renault Clio 1.5 DCI 2011. god ', 'Clio', 2011, '63', 157000, 'Dizel', 'Manuelna', 'Bijela', '10500', '<p>Renault Clio 1.5 DCI 2011 god. COMMON RAIL. Vozilo u odlicnom stanju, redovno servisiran, servo, abs, esp, tempomat, el podizaci, klima, bord kompjuter, airbag, komande kod volana, cd-mp3, servisna knjiga, centralna brava, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije,zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 1, 9, 1, 1),
(56, 'Renault Megane 1.5 DCI 2010. god ', 'Megane', 2010, '63', 132000, 'Dizel', 'Manuelna', 'Bijela', '13300', '<p>Renault Megane 1.5 dci 2010/11. godina. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, abs, servo, cd, komande kod volana,daljinsko zakljucavanje, GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! www.autorasevic.com 00387 65 219 777 navedena cijena za kes.. zamjena moze po nasoj procjeni....</p>\r\n', 0, 0, 9, 1, 1),
(57, 'Citroen C4 1.6 HDI 2010. god', 'C4', 2010, '66', 156000, 'Dizel', 'Manuelna', 'Bijela', '11990', '<p>Citroen C4 1.6 hdi 2010. godina. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, abs, servo, cd, komande na volanu... AKCIJSKA CIJENA ZA KES! GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! navedena cijena za kes... zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 0, 4, 1, 1),
(58, 'Renault Scenic 1.5 DCI 2008/09. god 6 brzina ', 'Scenic', 2008, '78', 154000, 'Dizel', 'Manuelna', 'Siva', '11500.00', '<p>Renault Scenic 1.5 dci 2008. godina 6 brzina. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, abs, servo, cd sa komandama kod volana, daljinsko zakljucavanje, alu felge... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! cijena do registracije...zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 1, 9, 1, 1),
(59, ' Citroen C3 1.4 HDI 2010/11 god. ', 'C3', 2010, '50', 147000, 'Dizel', 'Manuelna', 'Siva', '12500', '<p>Citroen C3 1.4 HDI 2010/11 god. Vozilo u odlicnom stanju,redovno servisiran, servo, abs, klima, el podizaci, el retrovizori, komande kod volane, centralna brava, daljinsko zakljucavanje, bord kompjuter, cd - mp3... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... Akcijska cijena fixno za kes! www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 1, 4, 1, 1),
(60, 'Citroen C4 1.6 HDI 2012. god NEW MODEL', 'C4', 2012, '68', 154000, 'Dizel', 'Manuelna', 'Bijela', '16990', '<p>Citroen C4 1.6 HDI 2012. god. NOVI MODEL...Vozilo u odlicnom stanju, sva oprema, 4x el podizaci, el retrovizori, digitalna dvozonska klima, maglenke, naslon za ruku, bord computer, CHROM paket, komande na volanu, tempomat, cd-mp3 sa komandama kod volana, nove gume, centralna brava, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 Akcijska cijena...</p>\r\n', 0, 0, 4, 1, 1),
(61, 'Renault Megane 1.5 DCI 2010/11 god.', 'Megane', 2011, '66', 120000, 'Dizel', 'Manuelna', 'Bijela', '13500.00', '<p>Renault Megane 1.5 dci 2011. godina. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, abs, servo, cd, komande kod volana,daljinsko zakljucavanje, dva kljuca... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! e5 motor 66kw www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 1, 9, 1, 1),
(62, 'Peugeot 308 1.6 HDI 2011 god.NOVI MODEL ', '308', 2011, '66', 158000, 'Dizel', 'Manuelna', 'Crna', '16990', '<p>Peugeot 308 1.6 HDI 2011/12 god.NOVI MODEL Vozilo u odlicnom stanju,redovno servisiran, sva oprema, servo, abs, esp, tempomat, el retrovizori, el podizaci, klima, maglenke, centralna brava, daljinsko zakljucavanje, servisna knjiga, bord kompjuter... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 0, 8, 1, 1),
(63, 'Renault Clio 1.5 DCI 2009/10 god. ', 'Clio ', 2009, '63', 133000, 'Dizel', 'Manuelna', 'Bijela', '9900.00', '<p>Renault Megane 1.5 DCI 2009/10 god. Vozilo u odlicnom stanju, redovno servisiran, servo,abs, komande kod volana, servisna knjiga, cd-mp3, klima, daljinsko zakljucavane, el retrovizori, el podizaci... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! navedena cijena za kes... zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 1, 9, 1, 1),
(64, 'Renault Megane 1.5 DCI 2011/12. god EURO 5 ', 'Megane ', 2011, '66', 144000, 'Dizel', 'Manuelna', 'Bijela', '13500', '<p>Renault Megane 1.5 DCI 2011. godina EURO 5 MOTOR! Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, abs, servo, tempomat, komande na volanu, cd mp3 sa komandama kod volana... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 Akcijska cijena...</p>\r\n', 0, 0, 9, 1, 1),
(65, 'Renault Megane SW 1.5 DCI 2010/11. god ', 'Megane', 2010, '78', 167000, 'Dizel', 'Manuelna', 'Siva', '13900.00', '<p>Renault Megane 1.5 DCI 2010/11 god. Vozilo u odlicnom stanju,redovno servisiran, servo, abs, esp, tempomat, 4x el podizaci, el retrovizori, klima, bord kompjuter, komande kod volana, centralna brava, daljinsko zakljucavanje, dva kljuca... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije,zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 1, 9, 1, 1),
(66, 'Renault Megane 1.5 DCI 2009/10 god. ', 'Megane ', 2009, '63', 135000, 'Dizel', 'Manuelna', 'Bijela', '12500', '<p>Renault Megane 1.5 DCI 2009/10 god. Vozilo u odlicnom stanju, redovno servisiran, servo, abs, tempomat, klima, el podizaci, el retrovizori, cd-mp3, bord kompjuter, komande kod volana, centralna brava, daljinsko zakljucavanje,dva kljuca... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije,zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 1, 9, 1, 1),
(67, 'Citroen C3 1.4 HDI 2010. god', 'C3', 2010, '50', 127000, 'Dizel', 'Manuelna', 'Siva', '11990', '<p>Citroen C3 1.4 HDI 2010. god. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, maglenke, abs, servo, cd sa komandama kod volana, centralna brava, daljinsko zakljucavanje, 2 kljuca... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena za kes...zamjena moze po nasoj procjeni... Akcijske cijene... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 0, 4, 1, 1),
(68, 'Peugeot 407 1.6 HDI 2005/06. god ', '407', 2005, '80', 193000, 'Dizel', 'Manuelna', 'Smedja', '9000', '<p>Peugeot 407 1.6 hdi 2005. godina. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, naslon za ruku, abs, servo, cd sa komandama kod volana, daljinsko zakljucavanje... PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije,zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 8, 1, 1),
(69, 'Renault Clio 3 1.5 DCI 2008/09. god', 'Clio', 2008, '50', 134000, 'Dizel', 'Manuelna', 'Siva', '9300', '<p>Renault Clio 3 1.5 DCI 2008/09. god. Vozilo u odlicnom stanju, redovno servisiran, servo, abs, esp, tempomat, el podizaci, el retrovizori, klima, bord kompjuter, airbag, komande kod volana, cd-mp3, servisna knjiga, centralna brava, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije,zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 9, 1, 1),
(70, 'Renault Clio 1.5 dci 2009/10. god ', 'Clio', 2009, '63', 176000, 'Dizel', 'Manuelna', 'Crvena', '10900.00', '<p>Renault Clio 1.5 dci 2010/11. god. Vozilo u odlicnom stanju, redovno servisiran, servo, abs, esp, tempomat, airbag, komande kod volana, el podizaci, klima, bord kompjuter, cd-mp3, krovni nosaci, servisna knjiga, centralna brava, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! uradjen veliki servis ns 163,000km Cijena do registracije,zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 1, 9, 1, 1),
(71, 'Peugeot 308 1.6 HDI 2009/10 god. ', '308', 2009, '66', 151000, 'Dizel', 'Manuelna', 'Bijela', '10990', '<p>Peugeot 308 1.6 HDI 2009/10 godina. Vozilo u odlicnom stanju, redovno servisiran, servo, abs, esp, tempomat, klima, el podizaci, el retrovizori, bord kompjuter, centralna brava, daljinsko zakljucavanje,servisna knjiga... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije,zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 8, 1, 1),
(72, 'Renault Clio 1.5 DCI 2008/09. god', 'Clio', 2008, '63', 164000, 'Dizel', 'Manuelna', 'Bijela', '8350', '<p>Renault Clio 1.5 DCI 2008/09 god. Vozilo u odlicnom stanju, redovno servisiran, servo, abs, esp, tempomat, el podizaci, klima, bord kompjuter, airbag, komande kod volana, cd-mp3, servisna knjiga, centralna brava, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije,zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 9, 1, 1),
(73, ' Citroen C3 1.4 HDI 2008/09. god ', 'C3', 2008, '50', 127000, 'Dizel', 'Manuelna', 'Bijela', '8700', '<p>Citroen C3 1.4 HDI 2008. godina. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, tempomat, cd sa komandama kod volana, 2 kljuca, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 Akcijska cijena...</p>\r\n', 0, 0, 4, 1, 1),
(74, ' Peugeot 308 1.6 HDI 2010/11. god EURO 5 ', '308', 2010, '82', 115000, 'Dizel', 'Manuelna', 'Siva', '14500', '<p>Peugeot 308 1.6 HDI 2010. godina. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, abs, servo, cd, daljinsko zakljucavanje, 6 brzina... EURO 5 MOTOR! GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije.... zamjena moze po nasoj procjeni... Akcijske cijene... www.autorasevic.com 00387 65 219 777</p>\r\n', 0, 0, 8, 1, 1),
(75, ' Citroen C4 1.6 HDI 2011. god EURO 5 ', 'C4', 2011, '68', 127000, 'Dizel', 'Manuelna', 'Bijela', '15500.00', '<p>Citroen C4 1.6 HDI 2011. god. Vozilo u odlicnom stanju, sva oprema, el podizaci, el retrovizori, klima, abs, servo, cd mp3, 2 kljuca, centralno daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 Akcijska cijena...</p>\r\n', 0, 1, 4, 1, 1),
(76, 'Peugeot 308 1.6 HDI 2011 god. COMMON RAIL ', '308', 2011, '68', 144000, 'Dizel', 'Manuelna', 'Bijela', '14500', '<p>Peugeot 308 1.6 HDI 2011god. COMMON RAIL. Vozilo u odlicnom stanju, redovno servisiran, servo, abs, esp, tempomat, el podizaci, el retrovizori, klima, airbag, bord kompjuter, naslon za ruku, cd-mp3, komande kod volana, servisna knjiga, centralna brava, daljinsko zakljucavanje, 4 vrata... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! cijena do registracije...zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 8, 1, 1),
(77, 'Peugeot 207 1.4 HDI 2010. god ', '207', 2010, '50', 159000, 'Dizel', 'Manuelna', 'Bijela', '10500', '<p>Peugeot 207 1.4 HDI 2010. godina. FACELIFT Vozilo u odlicnom stanju, redovno servisirano. El podizaci, klima, cd sa komandama kod volana, abs, servo, centralna brava, daljinsko zakljucavanje... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 Akcijska cijena...</p>\r\n', 0, 0, 8, 1, 1),
(78, 'Peugeot 308 1.6 e-HDi 2011/12. god ', '308', 2011, '82', 159000, 'Dizel', 'Manuelna', 'Bijela', '15500', '<p>Peugeot 308 1.6 e-HDI 2011/12 god.NOVI MODEL Vozilo u odlicnom stanju,redovno servisiran, sva oprema, servo, abs, esp, tempomat, el retrovizori, el podizaci, klima, maglenke, centralna brava, daljinsko zakljucavanje, servisna knjiga, bord kompjuter... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! Cijena do registracije, zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 8, 1, 1),
(79, 'Citroen C3 1.4 HDI 2008 god. ', 'C3', 2008, '50', 104000, 'Dizel', 'Manuelna', 'Bijela', '8500.00', '<p>Citroen C3 1.4 HDI 2008. god. Vozilo u odlicnom stanju, sva oprema,el podizaci, klima, servo, CD-mp3, komande kod volana, ABS, esp, centralna brava, daljinsko zakljucavanje... Preporuka prodavca: VOZILO PREGLEDATI U OVLASTENOM SERVISU! GARANCIJA NA VOZILO I KILOMETRAZU!!! navedena cijena do registracije za kes... zamjena moze po nasoj procjeni... 00387 65 219 777 www.autorasevic.com</p>\r\n', 0, 1, 4, 1, 1),
(80, 'Renault Megane 1.5 dci 2007/08. god ', 'Megane', 2007, '63', 140000, 'Dizel', 'Manuelna', 'Bijela', '7700', '<p>Renault Megane 1.5 dci 2007. godina. Vozilo u odlicnom stanju, abs, servo, tempomat, 2 kljuca, el podizaci, nove michelin gume... GARANCIJA NA VOZILO I KILOMETRAZU! PREPORUKA PRODAVCA: VOZILO PREGLEDATI U OVLASTENOM SERVISU! zamjena moze po nasoj procjeni... www.autorasevic.com 00387 65 219 777 AKCIJSKE CIJENE....</p>\r\n', 0, 0, 9, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `links` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `links`) VALUES
(1, 'Doo Rašević Pale', 'autorasevic@yahoo.com', '+387 65 219 777 	', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_id` int(11) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_image_car1_idx` (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=490 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `link`, `car_id`, `sort`) VALUES
(56, '1403032803-auto-rasevic-pale-1.jpg', 39, 1),
(57, '1403032804-auto-rasevic-pale-2.jpg', 39, 2),
(58, '1403032804-auto-rasevic-pale-3.jpg', 39, 3),
(59, '1403032805-auto-rasevic-pale-4.jpg', 39, 4),
(60, '1403032805-auto-rasevic-pale-5.jpg', 39, 5),
(61, '1403032806-auto-rasevic-pale-6.jpg', 39, 6),
(62, '1403032806-auto-rasevic-pale-7.jpg', 39, 7),
(63, '1403032807-auto-rasevic-pale-8.jpg', 39, 8),
(64, '1403032807-auto-rasevic-pale-9.jpg', 39, 9),
(65, '1403032808-auto-rasevic-pale-10.jpg', 39, 10),
(66, '1403032808-auto-rasevic-pale-11.jpg', 39, 11),
(67, '1403032809-auto-rasevic-pale-12.jpg', 39, 12),
(68, '1403032810-auto-rasevic-pale-13.jpg', 39, 13),
(69, '1403033039-auto-rasevic-pale-1.jpg', 40, 1),
(70, '1403033040-auto-rasevic-pale-2.jpg', 40, 2),
(71, '1403033040-auto-rasevic-pale-3.jpg', 40, 3),
(72, '1403033041-auto-rasevic-pale-4.jpg', 40, 4),
(73, '1403033041-auto-rasevic-pale-5.jpg', 40, 5),
(74, '1403033042-auto-rasevic-pale-6.jpg', 40, 6),
(75, '1403033042-auto-rasevic-pale-7.jpg', 40, 7),
(76, '1403033043-auto-rasevic-pale-8.jpg', 40, 8),
(77, '1403033043-auto-rasevic-pale-9.jpg', 40, 9),
(78, '1403033144-auto-rasevic-pale-1.jpg', 41, 1),
(79, '1403033144-auto-rasevic-pale-2.jpg', 41, 2),
(80, '1403033145-auto-rasevic-pale-3.jpg', 41, 3),
(81, '1403033145-auto-rasevic-pale-4.jpg', 41, 4),
(82, '1403033146-auto-rasevic-pale-5.jpg', 41, 5),
(83, '1403033146-auto-rasevic-pale-6.jpg', 41, 6),
(84, '1403033147-auto-rasevic-pale-7.jpg', 41, 7),
(85, '1403033147-auto-rasevic-pale-8.jpg', 41, 8),
(86, '1403033148-auto-rasevic-pale-9.jpg', 41, 9),
(87, '1403033148-auto-rasevic-pale-10.jpg', 41, 10),
(88, '1403033149-auto-rasevic-pale-11.jpg', 41, 11),
(89, '1403033149-auto-rasevic-pale-12.jpg', 41, 12),
(90, '1403033291-auto-rasevic-pale-1.jpg', 42, 1),
(91, '1403033292-auto-rasevic-pale-2.jpg', 42, 2),
(92, '1403033292-auto-rasevic-pale-3.jpg', 42, 3),
(93, '1403033293-auto-rasevic-pale-4.jpg', 42, 4),
(94, '1403033293-auto-rasevic-pale-5.jpg', 42, 5),
(95, '1403033294-auto-rasevic-pale-6.jpg', 42, 6),
(96, '1403033294-auto-rasevic-pale-7.jpg', 42, 7),
(97, '1403033294-auto-rasevic-pale-8.jpg', 42, 8),
(98, '1403033295-auto-rasevic-pale-9.jpg', 42, 9),
(99, '1403033295-auto-rasevic-pale-10.jpg', 42, 10),
(100, '1403033296-auto-rasevic-pale-11.jpg', 42, 11),
(101, '1403033296-auto-rasevic-pale-12.jpg', 42, 12),
(102, '1403033401-auto-rasevic-pale-1.jpg', 43, 1),
(103, '1403033401-auto-rasevic-pale-2.jpg', 43, 2),
(104, '1403033402-auto-rasevic-pale-3.jpg', 43, 3),
(105, '1403033403-auto-rasevic-pale-4.jpg', 43, 4),
(106, '1403033403-auto-rasevic-pale-5.jpg', 43, 5),
(107, '1403033404-auto-rasevic-pale-6.jpg', 43, 6),
(108, '1403033404-auto-rasevic-pale-7.jpg', 43, 7),
(109, '1403033405-auto-rasevic-pale-8.jpg', 43, 8),
(110, '1403033405-auto-rasevic-pale-9.jpg', 43, 9),
(111, '1403033406-auto-rasevic-pale-10.jpg', 43, 10),
(112, '1403033406-auto-rasevic-pale-11.jpg', 43, 11),
(113, '1403033407-auto-rasevic-pale-12.jpg', 43, 12),
(114, '1403033408-auto-rasevic-pale-13.jpg', 43, 13),
(115, '1403033528-auto-rasevic-pale-1.jpg', 44, 1),
(116, '1403033529-auto-rasevic-pale-2.jpg', 44, 2),
(117, '1403033530-auto-rasevic-pale-3.jpg', 44, 3),
(118, '1403033531-auto-rasevic-pale-4.jpg', 44, 4),
(119, '1403033532-auto-rasevic-pale-5.jpg', 44, 5),
(120, '1403033533-auto-rasevic-pale-6.jpg', 44, 6),
(121, '1403033534-auto-rasevic-pale-7.jpg', 44, 7),
(122, '1403033534-auto-rasevic-pale-8.jpg', 44, 8),
(123, '1403033535-auto-rasevic-pale-9.jpg', 44, 9),
(124, '1403033536-auto-rasevic-pale-10.jpg', 44, 10),
(125, '1403033537-auto-rasevic-pale-11.jpg', 44, 11),
(126, '1403033538-auto-rasevic-pale-12.jpg', 44, 12),
(127, '1403033539-auto-rasevic-pale-13.jpg', 44, 13),
(128, '1403033540-auto-rasevic-pale-14.jpg', 44, 14),
(129, '1403033541-auto-rasevic-pale-15.jpg', 44, 15),
(130, '1403034033-auto-rasevic-pale-1.jpg', 45, 1),
(131, '1403034033-auto-rasevic-pale-2.jpg', 45, 2),
(132, '1403034034-auto-rasevic-pale-3.jpg', 45, 3),
(133, '1403034034-auto-rasevic-pale-4.jpg', 45, 4),
(134, '1403034035-auto-rasevic-pale-5.jpg', 45, 5),
(135, '1403034035-auto-rasevic-pale-6.jpg', 45, 6),
(136, '1403034036-auto-rasevic-pale-7.jpg', 45, 7),
(137, '1403034036-auto-rasevic-pale-8.jpg', 45, 8),
(138, '1403034037-auto-rasevic-pale-9.jpg', 45, 9),
(139, '1403034145-auto-rasevic-pale-1.jpg', 46, 1),
(140, '1403034146-auto-rasevic-pale-2.jpg', 46, 2),
(141, '1403034146-auto-rasevic-pale-3.jpg', 46, 3),
(142, '1403034146-auto-rasevic-pale-4.jpg', 46, 4),
(143, '1403034147-auto-rasevic-pale-5.jpg', 46, 5),
(144, '1403034147-auto-rasevic-pale-6.jpg', 46, 6),
(145, '1403034147-auto-rasevic-pale-7.jpg', 46, 7),
(146, '1403034148-auto-rasevic-pale-8.jpg', 46, 8),
(147, '1403034148-auto-rasevic-pale-9.jpg', 46, 9),
(148, '1403034149-auto-rasevic-pale-10.jpg', 46, 10),
(149, '1403034149-auto-rasevic-pale-11.jpg', 46, 11),
(150, '1403034241-auto-rasevic-pale-1.jpg', 47, 1),
(151, '1403034241-auto-rasevic-pale-2.jpg', 47, 2),
(152, '1403034241-auto-rasevic-pale-3.jpg', 47, 3),
(153, '1403034242-auto-rasevic-pale-4.jpg', 47, 4),
(154, '1403034242-auto-rasevic-pale-5.jpg', 47, 5),
(155, '1403034243-auto-rasevic-pale-6.jpg', 47, 6),
(156, '1403034243-auto-rasevic-pale-7.jpg', 47, 7),
(157, '1403034243-auto-rasevic-pale-8.jpg', 47, 8),
(158, '1403034244-auto-rasevic-pale-9.jpg', 47, 9),
(159, '1403034244-auto-rasevic-pale-10.jpg', 47, 10),
(160, '1403034342-auto-rasevic-pale-1.jpg', 48, 1),
(161, '1403034343-auto-rasevic-pale-2.jpg', 48, 2),
(162, '1403034343-auto-rasevic-pale-3.jpg', 48, 3),
(163, '1403034344-auto-rasevic-pale-4.jpg', 48, 4),
(164, '1403034344-auto-rasevic-pale-5.jpg', 48, 5),
(165, '1403034345-auto-rasevic-pale-6.jpg', 48, 6),
(166, '1403034345-auto-rasevic-pale-7.jpg', 48, 7),
(167, '1403034651-auto-rasevic-pale-1.jpg', 49, 1),
(168, '1403034652-auto-rasevic-pale-2.jpg', 49, 2),
(169, '1403034652-auto-rasevic-pale-3.jpg', 49, 3),
(170, '1403034653-auto-rasevic-pale-4.jpg', 49, 4),
(171, '1403034653-auto-rasevic-pale-5.jpg', 49, 5),
(172, '1403034654-auto-rasevic-pale-6.jpg', 49, 6),
(173, '1403034654-auto-rasevic-pale-7.jpg', 49, 7),
(174, '1403034655-auto-rasevic-pale-8.jpg', 49, 8),
(175, '1403037503-auto-rasevic-pale-1.jpg', 79, 1),
(176, '1403037503-auto-rasevic-pale-2.jpg', 79, 2),
(177, '1403037504-auto-rasevic-pale-3.jpg', 79, 3),
(178, '1403037504-auto-rasevic-pale-4.jpg', 79, 4),
(179, '1403037505-auto-rasevic-pale-5.jpg', 79, 5),
(180, '1403037505-auto-rasevic-pale-6.jpg', 79, 6),
(181, '1403037506-auto-rasevic-pale-7.jpg', 79, 7),
(182, '1403037869-auto-rasevic-pale-1.jpg', 75, 1),
(183, '1403037869-auto-rasevic-pale-2.jpg', 75, 2),
(184, '1403037869-auto-rasevic-pale-3.jpg', 75, 3),
(185, '1403037870-auto-rasevic-pale-4.jpg', 75, 4),
(186, '1403037870-auto-rasevic-pale-5.jpg', 75, 5),
(187, '1403037870-auto-rasevic-pale-6.jpg', 75, 6),
(188, '1403037871-auto-rasevic-pale-7.jpg', 75, 7),
(189, '1403037871-auto-rasevic-pale-8.jpg', 75, 8),
(190, '1403037932-auto-rasevic-pale-1.jpg', 73, 1),
(191, '1403037933-auto-rasevic-pale-2.jpg', 73, 2),
(192, '1403037933-auto-rasevic-pale-3.jpg', 73, 3),
(193, '1403037934-auto-rasevic-pale-4.jpg', 73, 4),
(194, '1403037935-auto-rasevic-pale-5.jpg', 73, 5),
(195, '1403037936-auto-rasevic-pale-6.jpg', 73, 6),
(196, '1403037937-auto-rasevic-pale-7.jpg', 73, 7),
(197, '1403037938-auto-rasevic-pale-8.jpg', 73, 8),
(198, '1403037983-auto-rasevic-pale-1.jpg', 67, 1),
(199, '1403037984-auto-rasevic-pale-2.jpg', 67, 2),
(200, '1403037985-auto-rasevic-pale-3.jpg', 67, 3),
(201, '1403037986-auto-rasevic-pale-4.jpg', 67, 4),
(202, '1403037986-auto-rasevic-pale-5.jpg', 67, 5),
(203, '1403037987-auto-rasevic-pale-6.jpg', 67, 6),
(204, '1403037988-auto-rasevic-pale-7.jpg', 67, 7),
(205, '1403037989-auto-rasevic-pale-8.jpg', 67, 8),
(206, '1403038044-auto-rasevic-pale-1.jpg', 60, 1),
(207, '1403038044-auto-rasevic-pale-2.jpg', 60, 2),
(208, '1403038044-auto-rasevic-pale-3.jpg', 60, 3),
(209, '1403038045-auto-rasevic-pale-4.jpg', 60, 4),
(210, '1403038045-auto-rasevic-pale-5.jpg', 60, 5),
(211, '1403038046-auto-rasevic-pale-6.jpg', 60, 6),
(212, '1403038046-auto-rasevic-pale-7.jpg', 60, 7),
(213, '1403038047-auto-rasevic-pale-8.jpg', 60, 8),
(214, '1403038047-auto-rasevic-pale-9.jpg', 60, 9),
(215, '1403038047-auto-rasevic-pale-10.jpg', 60, 10),
(216, '1403038048-auto-rasevic-pale-11.jpg', 60, 11),
(227, '1403038288-auto-rasevic-pale-1.jpg', 59, 1),
(228, '1403038290-auto-rasevic-pale-2.jpg', 59, 2),
(229, '1403038291-auto-rasevic-pale-3.jpg', 59, 3),
(230, '1403038292-auto-rasevic-pale-4.jpg', 59, 4),
(231, '1403038357-auto-rasevic-pale-1.jpg', 57, 1),
(232, '1403038357-auto-rasevic-pale-2.jpg', 57, 2),
(233, '1403038357-auto-rasevic-pale-3.jpg', 57, 3),
(234, '1403038358-auto-rasevic-pale-4.jpg', 57, 4),
(235, '1403038358-auto-rasevic-pale-5.jpg', 57, 5),
(236, '1403038359-auto-rasevic-pale-6.jpg', 57, 6),
(237, '1403038359-auto-rasevic-pale-7.jpg', 57, 7),
(238, '1403038359-auto-rasevic-pale-8.jpg', 57, 8),
(239, '1403038360-auto-rasevic-pale-9.jpg', 57, 9),
(240, '1403038409-auto-rasevic-pale-1.jpg', 54, 1),
(241, '1403038410-auto-rasevic-pale-2.jpg', 54, 2),
(242, '1403038410-auto-rasevic-pale-3.jpg', 54, 3),
(243, '1403038410-auto-rasevic-pale-4.jpg', 54, 4),
(244, '1403038411-auto-rasevic-pale-5.jpg', 54, 5),
(245, '1403038411-auto-rasevic-pale-6.jpg', 54, 6),
(246, '1403038411-auto-rasevic-pale-7.jpg', 54, 7),
(247, '1403038412-auto-rasevic-pale-8.jpg', 54, 8),
(248, '1403038412-auto-rasevic-pale-9.jpg', 54, 9),
(249, '1403038459-auto-rasevic-pale-1.jpg', 51, 1),
(250, '1403038460-auto-rasevic-pale-2.jpg', 51, 2),
(251, '1403038460-auto-rasevic-pale-3.jpg', 51, 3),
(252, '1403038461-auto-rasevic-pale-4.jpg', 51, 4),
(253, '1403038461-auto-rasevic-pale-5.jpg', 51, 5),
(254, '1403038461-auto-rasevic-pale-6.jpg', 51, 6),
(255, '1403038462-auto-rasevic-pale-7.jpg', 51, 7),
(256, '1403038462-auto-rasevic-pale-8.jpg', 51, 8),
(257, '1403038463-auto-rasevic-pale-9.jpg', 51, 9),
(258, '1403038463-auto-rasevic-pale-10.jpg', 51, 10),
(259, '1403038463-auto-rasevic-pale-11.jpg', 51, 11),
(260, '1403038498-auto-rasevic-pale-1.jpg', 50, 1),
(261, '1403038498-auto-rasevic-pale-2.jpg', 50, 2),
(262, '1403038499-auto-rasevic-pale-3.jpg', 50, 3),
(263, '1403038499-auto-rasevic-pale-4.jpg', 50, 4),
(264, '1403038500-auto-rasevic-pale-5.jpg', 50, 5),
(265, '1403038500-auto-rasevic-pale-6.jpg', 50, 6),
(266, '1403038501-auto-rasevic-pale-7.jpg', 50, 7),
(267, '1403038501-auto-rasevic-pale-8.jpg', 50, 8),
(268, '1403038502-auto-rasevic-pale-9.jpg', 50, 9),
(269, '1403038502-auto-rasevic-pale-10.jpg', 50, 10),
(270, '1403038503-auto-rasevic-pale-11.jpg', 50, 11),
(271, '1403038503-auto-rasevic-pale-12.jpg', 50, 12),
(272, '1403038504-auto-rasevic-pale-13.jpg', 50, 13),
(273, '1403038568-auto-rasevic-pale-1.jpg', 80, 1),
(274, '1403038568-auto-rasevic-pale-2.jpg', 80, 2),
(275, '1403038569-auto-rasevic-pale-3.jpg', 80, 3),
(276, '1403038569-auto-rasevic-pale-4.jpg', 80, 4),
(277, '1403038569-auto-rasevic-pale-5.jpg', 80, 5),
(278, '1403038570-auto-rasevic-pale-6.jpg', 80, 6),
(279, '1403038570-auto-rasevic-pale-7.jpg', 80, 7),
(280, '1403038571-auto-rasevic-pale-8.jpg', 80, 8),
(281, '1403038571-auto-rasevic-pale-9.jpg', 80, 9),
(282, '1403038571-auto-rasevic-pale-10.jpg', 80, 10),
(283, '1403038645-auto-rasevic-pale-1.jpg', 72, 1),
(284, '1403038646-auto-rasevic-pale-2.jpg', 72, 2),
(285, '1403038646-auto-rasevic-pale-3.jpg', 72, 3),
(286, '1403038647-auto-rasevic-pale-4.jpg', 72, 4),
(287, '1403038648-auto-rasevic-pale-5.jpg', 72, 5),
(288, '1403038648-auto-rasevic-pale-6.jpg', 72, 6),
(289, '1403038649-auto-rasevic-pale-7.jpg', 72, 7),
(290, '1403038649-auto-rasevic-pale-8.jpg', 72, 8),
(291, '1403038650-auto-rasevic-pale-9.jpg', 72, 9),
(292, '1403038650-auto-rasevic-pale-10.jpg', 72, 10),
(293, '1403038651-auto-rasevic-pale-11.jpg', 72, 11),
(294, '1403038651-auto-rasevic-pale-12.jpg', 72, 12),
(295, '1403038774-auto-rasevic-pale-1.jpg', 70, 1),
(296, '1403038774-auto-rasevic-pale-2.jpg', 70, 2),
(297, '1403038775-auto-rasevic-pale-3.jpg', 70, 3),
(298, '1403038775-auto-rasevic-pale-4.jpg', 70, 4),
(299, '1403038776-auto-rasevic-pale-5.jpg', 70, 5),
(300, '1403038776-auto-rasevic-pale-6.jpg', 70, 6),
(301, '1403038777-auto-rasevic-pale-7.jpg', 70, 7),
(302, '1403038778-auto-rasevic-pale-8.jpg', 70, 8),
(303, '1403038778-auto-rasevic-pale-9.jpg', 70, 9),
(304, '1403038779-auto-rasevic-pale-10.jpg', 70, 10),
(305, '1403038779-auto-rasevic-pale-11.jpg', 70, 11),
(306, '1403038780-auto-rasevic-pale-12.jpg', 70, 12),
(307, '1403038780-auto-rasevic-pale-13.jpg', 70, 13),
(308, '1403038781-auto-rasevic-pale-14.jpg', 70, 14),
(309, '1403038885-auto-rasevic-pale-1.jpg', 69, 1),
(310, '1403038885-auto-rasevic-pale-2.jpg', 69, 2),
(311, '1403038886-auto-rasevic-pale-3.jpg', 69, 3),
(312, '1403038886-auto-rasevic-pale-4.jpg', 69, 4),
(313, '1403038887-auto-rasevic-pale-5.jpg', 69, 5),
(314, '1403038888-auto-rasevic-pale-6.jpg', 69, 6),
(315, '1403038888-auto-rasevic-pale-7.jpg', 69, 7),
(316, '1403038889-auto-rasevic-pale-8.jpg', 69, 8),
(317, '1403038889-auto-rasevic-pale-9.jpg', 69, 9),
(318, '1403038890-auto-rasevic-pale-10.jpg', 69, 10),
(319, '1403039063-auto-rasevic-pale-1.jpg', 66, 1),
(320, '1403039064-auto-rasevic-pale-2.jpg', 66, 2),
(321, '1403039064-auto-rasevic-pale-3.jpg', 66, 3),
(322, '1403039065-auto-rasevic-pale-4.jpg', 66, 4),
(323, '1403039065-auto-rasevic-pale-5.jpg', 66, 5),
(324, '1403039066-auto-rasevic-pale-6.jpg', 66, 6),
(325, '1403039066-auto-rasevic-pale-7.jpg', 66, 7),
(326, '1403039067-auto-rasevic-pale-8.jpg', 66, 8),
(327, '1403039067-auto-rasevic-pale-9.jpg', 66, 9),
(328, '1403039068-auto-rasevic-pale-10.jpg', 66, 10),
(329, '1403039155-auto-rasevic-pale-1.jpg', 65, 1),
(330, '1403039155-auto-rasevic-pale-2.jpg', 65, 2),
(331, '1403039156-auto-rasevic-pale-3.jpg', 65, 3),
(332, '1403039156-auto-rasevic-pale-4.jpg', 65, 4),
(333, '1403039157-auto-rasevic-pale-5.jpg', 65, 5),
(334, '1403039157-auto-rasevic-pale-6.jpg', 65, 6),
(335, '1403039158-auto-rasevic-pale-7.jpg', 65, 7),
(336, '1403039159-auto-rasevic-pale-8.jpg', 65, 8),
(337, '1403039159-auto-rasevic-pale-9.jpg', 65, 9),
(338, '1403039160-auto-rasevic-pale-10.jpg', 65, 10),
(339, '1403039217-auto-rasevic-pale-1.jpg', 64, 1),
(340, '1403039217-auto-rasevic-pale-2.jpg', 64, 2),
(341, '1403039218-auto-rasevic-pale-3.jpg', 64, 3),
(342, '1403039219-auto-rasevic-pale-4.jpg', 64, 4),
(343, '1403039220-auto-rasevic-pale-5.jpg', 64, 5),
(344, '1403039221-auto-rasevic-pale-6.jpg', 64, 6),
(345, '1403039222-auto-rasevic-pale-7.jpg', 64, 7),
(346, '1403039223-auto-rasevic-pale-8.jpg', 64, 8),
(347, '1403039223-auto-rasevic-pale-9.jpg', 64, 9),
(348, '1403039294-auto-rasevic-pale-1.jpg', 63, 1),
(349, '1403039294-auto-rasevic-pale-2.jpg', 63, 2),
(350, '1403039295-auto-rasevic-pale-3.jpg', 63, 3),
(351, '1403039296-auto-rasevic-pale-4.jpg', 63, 4),
(352, '1403039296-auto-rasevic-pale-5.jpg', 63, 5),
(353, '1403039296-auto-rasevic-pale-6.jpg', 63, 6),
(354, '1403039297-auto-rasevic-pale-7.jpg', 63, 7),
(355, '1403039298-auto-rasevic-pale-8.jpg', 63, 8),
(356, '1403039298-auto-rasevic-pale-9.jpg', 63, 9),
(357, '1403039299-auto-rasevic-pale-10.jpg', 63, 10),
(358, '1403039337-auto-rasevic-pale-1.jpg', 61, 1),
(359, '1403039337-auto-rasevic-pale-2.jpg', 61, 2),
(360, '1403039338-auto-rasevic-pale-3.jpg', 61, 3),
(361, '1403039338-auto-rasevic-pale-4.jpg', 61, 4),
(362, '1403039339-auto-rasevic-pale-5.jpg', 61, 5),
(363, '1403039340-auto-rasevic-pale-6.jpg', 61, 6),
(364, '1403039340-auto-rasevic-pale-7.jpg', 61, 7),
(365, '1403039341-auto-rasevic-pale-8.jpg', 61, 8),
(366, '1403039341-auto-rasevic-pale-9.jpg', 61, 9),
(367, '1403039342-auto-rasevic-pale-10.jpg', 61, 10),
(368, '1403039342-auto-rasevic-pale-11.jpg', 61, 11),
(369, '1403039343-auto-rasevic-pale-12.jpg', 61, 12),
(370, '1403039480-auto-rasevic-pale-1.jpg', 58, 1),
(371, '1403039480-auto-rasevic-pale-2.jpg', 58, 2),
(372, '1403039481-auto-rasevic-pale-3.jpg', 58, 3),
(373, '1403039481-auto-rasevic-pale-4.jpg', 58, 4),
(374, '1403039482-auto-rasevic-pale-5.jpg', 58, 5),
(375, '1403039482-auto-rasevic-pale-6.jpg', 58, 6),
(376, '1403039482-auto-rasevic-pale-7.jpg', 58, 7),
(377, '1403039483-auto-rasevic-pale-8.jpg', 58, 8),
(378, '1403039483-auto-rasevic-pale-9.jpg', 58, 9),
(379, '1403039483-auto-rasevic-pale-10.jpg', 58, 10),
(380, '1403039484-auto-rasevic-pale-11.jpg', 58, 11),
(381, '1403039484-auto-rasevic-pale-12.jpg', 58, 12),
(382, '1403039715-auto-rasevic-pale-1.jpg', 56, 1),
(383, '1403039716-auto-rasevic-pale-2.jpg', 56, 2),
(384, '1403039716-auto-rasevic-pale-3.jpg', 56, 3),
(385, '1403039716-auto-rasevic-pale-4.jpg', 56, 4),
(386, '1403039717-auto-rasevic-pale-5.jpg', 56, 5),
(387, '1403039717-auto-rasevic-pale-6.jpg', 56, 6),
(388, '1403039718-auto-rasevic-pale-7.jpg', 56, 7),
(389, '1403039718-auto-rasevic-pale-8.jpg', 56, 8),
(390, '1403039718-auto-rasevic-pale-9.jpg', 56, 9),
(391, '1403039719-auto-rasevic-pale-10.jpg', 56, 10),
(392, '1403039719-auto-rasevic-pale-11.jpg', 56, 11),
(393, '1403039772-auto-rasevic-pale-1.jpg', 55, 1),
(394, '1403039773-auto-rasevic-pale-2.jpg', 55, 2),
(395, '1403039773-auto-rasevic-pale-3.jpg', 55, 3),
(396, '1403039773-auto-rasevic-pale-4.jpg', 55, 4),
(397, '1403039774-auto-rasevic-pale-5.jpg', 55, 5),
(398, '1403039774-auto-rasevic-pale-6.jpg', 55, 6),
(399, '1403039775-auto-rasevic-pale-7.jpg', 55, 7),
(400, '1403039775-auto-rasevic-pale-8.jpg', 55, 8),
(401, '1403039775-auto-rasevic-pale-9.jpg', 55, 9),
(402, '1403039776-auto-rasevic-pale-10.jpg', 55, 10),
(403, '1403039903-auto-rasevic-pale-1.jpg', 53, 1),
(404, '1403039903-auto-rasevic-pale-2.jpg', 53, 2),
(405, '1403039904-auto-rasevic-pale-3.jpg', 53, 3),
(406, '1403039904-auto-rasevic-pale-4.jpg', 53, 4),
(407, '1403039905-auto-rasevic-pale-5.jpg', 53, 5),
(408, '1403039905-auto-rasevic-pale-6.jpg', 53, 6),
(409, '1403039906-auto-rasevic-pale-7.jpg', 53, 7),
(410, '1403039906-auto-rasevic-pale-8.jpg', 53, 8),
(411, '1403039907-auto-rasevic-pale-9.jpg', 53, 9),
(412, '1403039907-auto-rasevic-pale-10.jpg', 53, 10),
(413, '1403039908-auto-rasevic-pale-11.jpg', 53, 11),
(414, '1403039908-auto-rasevic-pale-12.jpg', 53, 12),
(415, '1403039908-auto-rasevic-pale-13.jpg', 53, 13),
(416, '1403039909-auto-rasevic-pale-14.jpg', 53, 14),
(417, '1403039910-auto-rasevic-pale-15.jpg', 53, 15),
(418, '1403039956-auto-rasevic-pale-1.jpg', 52, 1),
(419, '1403039957-auto-rasevic-pale-2.jpg', 52, 2),
(420, '1403039957-auto-rasevic-pale-3.jpg', 52, 3),
(421, '1403039958-auto-rasevic-pale-4.jpg', 52, 4),
(422, '1403039958-auto-rasevic-pale-5.jpg', 52, 5),
(423, '1403039958-auto-rasevic-pale-6.jpg', 52, 6),
(424, '1403039959-auto-rasevic-pale-7.jpg', 52, 7),
(425, '1403039959-auto-rasevic-pale-8.jpg', 52, 8),
(426, '1403039960-auto-rasevic-pale-9.jpg', 52, 9),
(427, '1403039960-auto-rasevic-pale-10.jpg', 52, 10),
(428, '1403039960-auto-rasevic-pale-11.jpg', 52, 11),
(429, '1403040048-auto-rasevic-pale-1.jpg', 78, 1),
(430, '1403040048-auto-rasevic-pale-2.jpg', 78, 2),
(431, '1403040049-auto-rasevic-pale-3.jpg', 78, 3),
(432, '1403040049-auto-rasevic-pale-4.jpg', 78, 4),
(433, '1403040050-auto-rasevic-pale-5.jpg', 78, 5),
(434, '1403040050-auto-rasevic-pale-6.jpg', 78, 6),
(435, '1403040051-auto-rasevic-pale-7.jpg', 78, 7),
(436, '1403040051-auto-rasevic-pale-8.jpg', 78, 8),
(437, '1403040052-auto-rasevic-pale-9.jpg', 78, 9),
(438, '1403040053-auto-rasevic-pale-10.jpg', 78, 10),
(439, '1403040087-auto-rasevic-pale-1.jpg', 77, 1),
(440, '1403040088-auto-rasevic-pale-2.jpg', 77, 2),
(441, '1403040089-auto-rasevic-pale-3.jpg', 77, 3),
(442, '1403040090-auto-rasevic-pale-4.jpg', 77, 4),
(443, '1403040091-auto-rasevic-pale-5.jpg', 77, 5),
(444, '1403040092-auto-rasevic-pale-6.jpg', 77, 6),
(445, '1403040092-auto-rasevic-pale-7.jpg', 77, 7),
(446, '1403040093-auto-rasevic-pale-8.jpg', 77, 8),
(447, '1403040094-auto-rasevic-pale-9.jpg', 77, 9),
(448, '1403040095-auto-rasevic-pale-10.jpg', 77, 10),
(449, '1403040096-auto-rasevic-pale-11.jpg', 77, 11),
(450, '1403040128-auto-rasevic-pale-1.jpg', 76, 1),
(451, '1403040178-auto-rasevic-pale-1.jpg', 74, 1),
(452, '1403040179-auto-rasevic-pale-2.jpg', 74, 2),
(453, '1403040179-auto-rasevic-pale-3.jpg', 74, 3),
(454, '1403040180-auto-rasevic-pale-4.jpg', 74, 4),
(455, '1403040181-auto-rasevic-pale-5.jpg', 74, 5),
(456, '1403040182-auto-rasevic-pale-6.jpg', 74, 6),
(457, '1403040183-auto-rasevic-pale-7.jpg', 74, 7),
(458, '1403040184-auto-rasevic-pale-8.jpg', 74, 8),
(459, '1403040184-auto-rasevic-pale-9.jpg', 74, 9),
(460, '1403040185-auto-rasevic-pale-10.jpg', 74, 10),
(461, '1403040186-auto-rasevic-pale-11.jpg', 74, 11),
(462, '1403040227-auto-rasevic-pale-1.jpg', 71, 1),
(463, '1403040227-auto-rasevic-pale-2.jpg', 71, 2),
(464, '1403040228-auto-rasevic-pale-3.jpg', 71, 3),
(465, '1403040228-auto-rasevic-pale-4.jpg', 71, 4),
(466, '1403040229-auto-rasevic-pale-5.jpg', 71, 5),
(467, '1403040229-auto-rasevic-pale-6.jpg', 71, 6),
(468, '1403040230-auto-rasevic-pale-7.jpg', 71, 7),
(469, '1403040230-auto-rasevic-pale-8.jpg', 71, 8),
(470, '1403040231-auto-rasevic-pale-9.jpg', 71, 9),
(471, '1403040231-auto-rasevic-pale-10.jpg', 71, 10),
(472, '1403040263-auto-rasevic-pale-1.jpg', 68, 1),
(473, '1403040263-auto-rasevic-pale-2.jpg', 68, 2),
(474, '1403040264-auto-rasevic-pale-3.jpg', 68, 3),
(475, '1403040264-auto-rasevic-pale-4.jpg', 68, 4),
(476, '1403040264-auto-rasevic-pale-5.jpg', 68, 5),
(477, '1403040265-auto-rasevic-pale-6.jpg', 68, 6),
(478, '1403040265-auto-rasevic-pale-7.jpg', 68, 7),
(479, '1403040265-auto-rasevic-pale-8.jpg', 68, 8),
(480, '1403040266-auto-rasevic-pale-9.jpg', 68, 9),
(481, '1403040293-auto-rasevic-pale-1.jpg', 62, 1),
(482, '1403040293-auto-rasevic-pale-2.jpg', 62, 2),
(483, '1403040293-auto-rasevic-pale-3.jpg', 62, 3),
(484, '1403040294-auto-rasevic-pale-4.jpg', 62, 4),
(485, '1403040294-auto-rasevic-pale-5.jpg', 62, 5),
(486, '1403040295-auto-rasevic-pale-6.jpg', 62, 6),
(487, '1403040295-auto-rasevic-pale-7.jpg', 62, 7),
(488, '1403040295-auto-rasevic-pale-8.jpg', 62, 8),
(489, '1403040296-auto-rasevic-pale-9.jpg', 62, 9);

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `name`, `link`) VALUES
(1, 'Alfa Romeo', NULL),
(2, 'Audi', NULL),
(3, 'BMW', NULL),
(4, 'Citroën', NULL),
(5, 'Fiat', NULL),
(6, 'Ford', NULL),
(7, 'Opel', NULL),
(8, 'Peugeot', NULL),
(9, 'Renault', NULL),
(10, 'Seat', NULL),
(11, 'Volkswagen', NULL),
(12, 'Škoda', NULL),
(13, 'Mercedes Benz', NULL),
(14, 'Nissan', NULL),
(17, 'Ostalo', NULL),
(18, 'GMC', NULL),
(19, 'Volvo', NULL),
(20, 'Toyota', NULL),
(24, 'Subaru', NULL),
(25, 'Smart', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `content`) VALUES
(1, 'O nama', '<p><strong>DOO RA&Scaron;EVIC PALE</strong></p>\r\n\r\n<p>PORODICNI BIZNIS</p>\r\n\r\n<p>Firma osnovana 1993. god. na Palama, bavila se iskljucivo ugostiteljstvom. Sada posjeduje u svom vlasnistvu hotel DVA GOLUBA, na atraktivnoj lokaciji (na ulazu u Pale,s desne strane). Hotel je Kategorije tri zvjezdice uz koji posluje i etno koliba, Kafe CONTACT na promenadi u centru grada i bavimo se uvozom automobila na veliko i malo-PJ 2 AUTO RASEVIC (plac sa autima se nalazi na ulazu u Pale s lijeve strane).</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1402668805),
('m140613_071053_initial', 1402668809),
('m140613_140721_insert', 1402668809),
('m140614_103303_insert_contact_and_about', 1402951709),
('m140616_204339_change_image_order_in_sort', 1402951879);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Golub', '1bed2e6bba53bf08328ab88464771d2c'),
(2, 'autorasevic', 'f81f1831a743382887e812b61549c745'),
(3, 'admin', 'bd02053b7e01041b640ddd4ea3d4098b');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `fk_car_mark` FOREIGN KEY (`mark_id`) REFERENCES `mark` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_car_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_car1` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
