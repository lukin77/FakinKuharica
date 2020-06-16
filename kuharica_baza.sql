-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2020 at 11:49 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuharica_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vk_tip_korisnika` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vk_tip_korisnika` (`vk_tip_korisnika`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `username`, `password`, `vk_tip_korisnika`) VALUES
(1, 'Josip', 'Lukin', 'jlukin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Ana', 'Novokmet', 'anovokmet', '202cb962ac59075b964b07152d234b70', 2),
(4, 'Kralj', 'Jungle', 'aa', '4124bc0a9335c27f086f24ba207a4912', 2);

-- --------------------------------------------------------

--
-- Table structure for table `recept`
--

DROP TABLE IF EXISTS `recept`;
CREATE TABLE IF NOT EXISTS `recept` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naslov` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vk_autora` int(11) NOT NULL,
  `vk_vrsta_jela` int(11) NOT NULL,
  `datum_objavljivanja` date NOT NULL,
  `sastojci` varchar(500) COLLATE utf8_croatian_ci NOT NULL,
  `opis` varchar(500) COLLATE utf8_croatian_ci NOT NULL,
  `tekst_recepta` varchar(800) COLLATE utf8_croatian_ci NOT NULL,
  `ocjena` int(11) NOT NULL,
  `br_ocjena` int(11) NOT NULL,
  `br_pregleda` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vk_autora` (`vk_autora`),
  KEY `vk_vrsta_jela` (`vk_vrsta_jela`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `recept`
--

INSERT INTO `recept` (`id`, `naslov`, `vk_autora`, `vk_vrsta_jela`, `datum_objavljivanja`, `sastojci`, `opis`, `tekst_recepta`, `ocjena`, `br_ocjena`, `br_pregleda`) VALUES
(1, 'Spaghetti Carbonara ', 1, 2, '2020-05-04', 'Umak 250mL vrhnja za kuhanje, vrećica parmezana (usitnjenog sira za tjesteninu), jedan češanj češnjaka, peršin, žličica vegete, dva jaja, TJESTENINA 300g špageta, MESO 300g slanine za prženje / pancete / pršuta, ULJE maslinovo ulje, sol', 'Carbonara se jako brzo sprema, a o ukusu nema potrebe diskutovati, jedini problem je sto malo ko zeli podijeliti svoj provjereni recept, ali dosao je tome kraj! Uživajte. ', 'U lonac s vodom staviti malo soli i maslinovog ulja. Ubaciti špagete u lonac i kuhati dok ne budu gotovi.\r\nU međuvremenu pripremiti umak za špagete. U posudu izmješati vrhnje za kuhanje, usitnjeni sir, narezani češnjak, peršin, žličicu Vegete, malo soli i dva jaja. Dobro miješati dok ne bude ujednačeno. \r\nU tavu staviti maslinovog ulja i ubaciti narezane slanine/pancete/pršuta. Malo začiniti vegetom dok se peče i na kraju gotov sadržaj tave umiješati u smjesu sa vrhnjem za kuhanje.\r\nGotove špagete procijediti i izmješati sa smjesom od vrhnja. ', 11, 3, 155),
(2, 'Pileca jetrica na lovacki', 2, 1, '2020-06-09', '500 gr pilečih jetrica sa srcima,jedan luk i poriluk,jedna ribana mrkva i mali komad korjena celera, lovorov list ,peršin list, 2 rajčice sitno rezane, 2 dl crnog vina,sol, vegeta,papar i žličica crvene paprike, maslinovo ulje, krumpir, brašno i jaje za noklice', ' Meni najomiljeniji način spremanja pilećih iznutrica.', 'Na maslinovom ulju prvo ispirjati luk,poriluk, i izribano  korjenasto povrće.Povrće povući u jednu stranu i dodati prepolovljena pileća srca i pirjati dok srca ne omekšaju.I srca pogurati u kraj ,te dodati sjeckanu rajčicu i sve pirjati na tiho.\r\nDodati jetricu i naglo je popirjati,a potom sve sjediniti.Sad dodati crno vino, začine ,podliti s malo vode kad vino ispari i sve pirjati dok jetrica ne omekša.\r\nKrumpir izrezati na sitne kockice i staviti kuhati u posoljenu vodu i odmah kad voda proključa dodati noklice i zajedno kuhati.\r\nServirati uz mješanu salatu i čašu dobrog crnog vina i uživati u objedu.', 5, 1, 136),
(30, 'Salata Fantazija', 4, 4, '2020-06-11', '150 g zelene salate, 150 g radiča, 1 paprika, 2 mlada luka, 1 krastavac, 2 rajčice, 2 rotkvice, Za salatni preljev:100 ml vode, 1-2 žlice octa, 2 žlice ulja, 2 žličice Vegeta', 'Salata koja pristaje takoreći svakom jelu i sama može biti samostalan obrok, zar ne?', 'Zelenu salatu i radič očistite i operite. Papriku očistite od sjemenki i narežite na trake. Krastavce očistite od sjemenki i narežite na ploške. Mladi luk narežite na kolutiće, a rajčice i rotkvice na ploške. Sve sastojake posložite u zdjelu ili na tanjur. Pomiješajte Vegetu Natur salata s vodom i octom te ostavite neka odstoji oko 15 minuta. Zatim umiješajte ulje i preljev (dressing) prelijte preko salate neposredno prije posluživanja. ', 5, 1, 26),
(29, 'Mediteranske kiflice', 4, 3, '2019-06-11', '170 gr mladog sira, 3 cijela jaja, 100 g kiselog vrhnja ili milerama, malo soli, 1 dcl mineralne vode, 150 g kukuruznog brašna, 300-350 g mekog brašna, 1/2 vrećice praška za pecivo, Za premazati kiflice: malo maslaca, mediteranski začin, krupna morska sol, jaje', 'Ovo je pokušaj imitacije kiflica iz jednog lanca pekarnica. Vrlo su slične , svakako zaslužuju još koji pokušaj i doradu. Recept posvećujem AnaS, zna ona zašto. :) Pusa. ', 'Izmiksati sir, jaja, vrhnje, mineralnu vodu i sol. Dodati kukuruzno brašno i prašak za pecivo. Meko brašno dodavati postupno. Zamijesiti tijesto.Podijeliti tijesto na jednake loptice ( 20 -25 komada). Svaku lopticu razvaljati, premazati otopljenim maslacem, posuti mediteranskim začinom i zarolati. Saviti kao potkovicu i redati u tepsiju s papirom za pečenje. Premazati umućenim jajetom i posuti krupnom morskom solju.Peći na 180.200 C oko 15.20 minuta, da porumene. Staviti u zdjelu ili sl. Pokriti ih da se sporije hlade.', 30, 8, 35),
(34, 'Rižoto s tikvicama ', 1, 2, '2020-06-16', '500 g tikvica, 2 žlice maslinova ulja, 50 g luka, 1 češanj češnjaka, 160 g Riže arborio Zlato polje, 50 ml bijelog vina, sol, Vegeta Maestro crni papar, 50 ml vrhnja za kuhanje, 1-2 žličice Vegete Natur tekućeg dodatka, 100 g skute, 1 žlica popečenih listića badema', ' Na ljestvici popularnosti, rižoto zauzima visoko mjesto, a u kombinaciji s tikvicama, popularnost mu samo može porasti. ', ' Tikvice operite i naribajte. U široj tavi na zagrijanom maslinovu ulju popecite sitno narezani luk.  Dodajte protisnuti češnjak i rižu. Kratko popecite, uz miješanje dodajte tikvice, ulijte vino, a zatim i malo vode. Posolite i pospite mljevenim paprom.  Pirjajte na laganoj vatri povremeno podlijevajući vodom (oko 400 ml) i miješajući. Kad je riža gotovo kuhana, umiješajte vrhnje da dobijete kremastu strukturu. Dodajte Vegetu Natur tekući dodatak da zaokružite okus jela. ', 14, 3, 4),
(35, 'Tiho pecen paradajz sa belim lukom i oreganom', 1, 1, '2020-06-16', '6-10 zrelih paradajza (ja sam koristila šljivar, male duguljaste, koji imaju mnogo manje vode u sebi), 4-6 cesnjeva propasiranog belog luka, 1-2 kasike suvog oregana, 125 ml ekstra devicanskog maslinovog ulja, po ukusu morske soli i sveze mlevenog bibera, nekoliko listova svezeg bosiljka za serviranje', ' U petak sam kupila jednu malu knjigu recepata \"iz kuhinje moje mame\" i nadjem ovaj recept sa kojim sam se odusevila. Ovaj recept posvećujem mojoj dragoj cool priji CHOKODIVI, uživaj!! ', ' Zagrejati rernu na 150 do 160*C .  Opran i osusen paradajz iseci po duzini, ako je okrugao paradajz, onda seci popreko.  Staviti ih na pleh, na koji ste prethodno stavili papir za pecenje ( da imate manje posla kasnije).  U ciniju staviti propasirani beli luk, suvi oregano, soli, bibera i maslinovog ulja i dobro sve izmesajte. Cetkom za pecenje ili kasikom, premazati obilato svaku secenu stranu paradajza.  Peci oko 1 1/2 do 2 sata i povremeno proveriti da vam ne izgori, ako gori, smanjiti temperaturu.  Tiho peceni paradajz, mozete naslagati u teglicu, preliti maslinovim uljem i drzati u frizideru do upotrebe. ', 5, 1, 2),
(36, 'Salata s puretinom i narančama ', 4, 4, '2020-06-16', '\r\n    100 g matovilca\r\n    100 g rikule\r\n    100 g zelene salate kristalke\r\n    250 g dimljene puretine\r\n    2 naranče\r\n 2 žlice Vegeta Natur salata\r\n50 ml vode\r\n2-3 žlice limunova soka\r\n1 žličica aceta balsamica\r\n50 ml ulja ', ' Delikatesan obrok, cijeli ili tek uvod u slijed, salata je s dimljenom peradi. Tri vrste zelene salate i naranče! Teško je reći gdje počinje užitak. ', ' Matovilac, rikulu i zelenu salatu očistite i operite.  Za salatni preljev pomiješajte Vegetu Natur salata s vodom, limunovim sokom i acetom balsamicom. Ostavite neka odstoji oko 10 minuta, a zatim dodajte ulje.  Puretinu narežite na tanke ploške, a narančama ogulite koru, odvojite kriške i maknite kožice. ', 13, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

DROP TABLE IF EXISTS `tip`;
CREATE TABLE IF NOT EXISTS `tip` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip`
--

INSERT INTO `tip` (`id`, `naziv`) VALUES
(1, 'Slano'),
(2, 'Slatko'),
(3, 'Kiselo'),
(4, 'Gorko');

-- --------------------------------------------------------

--
-- Table structure for table `tip_korisnika`
--

DROP TABLE IF EXISTS `tip_korisnika`;
CREATE TABLE IF NOT EXISTS `tip_korisnika` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip_korisnika`
--

INSERT INTO `tip_korisnika` (`id`, `naziv`) VALUES
(1, 'admin'),
(2, 'korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `tip_recepta`
--

DROP TABLE IF EXISTS `tip_recepta`;
CREATE TABLE IF NOT EXISTS `tip_recepta` (
  `id_tip` int(10) UNSIGNED NOT NULL,
  `id_recept` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_tip`,`id_recept`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip_recepta`
--

INSERT INTO `tip_recepta` (`id_tip`, `id_recept`) VALUES
(2, 29),
(2, 34),
(2, 35),
(3, 30),
(3, 35),
(4, 30),
(4, 36),
(5, 30);

-- --------------------------------------------------------

--
-- Table structure for table `vrsta_jela`
--

DROP TABLE IF EXISTS `vrsta_jela`;
CREATE TABLE IF NOT EXISTS `vrsta_jela` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vrsta_jela`
--

INSERT INTO `vrsta_jela` (`id`, `naziv`) VALUES
(1, 'Predjelo'),
(2, 'Glavno jelo'),
(3, 'Desert'),
(4, 'Salata'),
(10, 'Toplo predjelo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
