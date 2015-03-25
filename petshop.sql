-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Ian 2015 la 21:04
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `atribut_rasa`
--

CREATE TABLE IF NOT EXISTS `atribut_rasa` (
  `ID_caracteristici` int(11) NOT NULL,
  `Rasa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `atribut_rasa`
--

INSERT INTO `atribut_rasa` (`ID_caracteristici`, `Rasa`) VALUES
(1, 'Birmaneza'),
(1, 'Bulldog'),
(1, 'Bulldog'),
(1, 'Caras Auriu'),
(1, 'Ciobanesc German'),
(1, 'Husky'),
(1, 'Labrador Retriever'),
(1, 'Perus'),
(1, 'Terrier'),
(2, 'Husky'),
(2, 'Ciobanesc German'),
(2, 'Bulldog'),
(2, 'Siameza'),
(3, 'Persana'),
(3, 'Terrier'),
(3, 'Siameza'),
(4, 'Bulldog'),
(4, 'Ciobanesc German'),
(4, 'Labrador Retriever'),
(4, 'Terrier'),
(5, 'Sfinx'),
(5, 'Neon'),
(5, 'Scalar'),
(5, 'Caras Auriu'),
(5, 'Canar'),
(5, 'Piranha'),
(6, 'Perus'),
(6, 'Canar'),
(6, 'Ciobanesc German'),
(7, 'Neon'),
(7, 'Nimfa'),
(7, 'Sfinx'),
(7, 'Piranha'),
(8, 'Ciobanesc German'),
(8, 'Labrador Retriever'),
(8, 'Bulldog'),
(9, 'Siameza'),
(9, 'Nimfa'),
(9, 'Neon'),
(10, 'Nimfa'),
(10, 'Sfinx'),
(10, 'Birmaneza');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `caini`
--

CREATE TABLE IF NOT EXISTS `caini` (
  `ID` int(11) NOT NULL,
  `Rasa` varchar(20) NOT NULL,
  `Varsta` int(11) NOT NULL,
  `Greutate` int(11) NOT NULL,
  `Dimensiuni` int(11) NOT NULL,
  `Culoare` varchar(20) NOT NULL,
  `Sex` enum('M','F','','') NOT NULL DEFAULT 'F',
  `Imagine` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `caini`
--

INSERT INTO `caini` (`ID`, `Rasa`, `Varsta`, `Greutate`, `Dimensiuni`, `Culoare`, `Sex`, `Imagine`) VALUES
(0, 'Terrier', 8, 12, 44, 'negru', 'M', 'images/terrier.JPG'),
(11, 'Labrador Retriever', 3, 27, 55, 'negru', 'F', 'images/labrador.jpg'),
(12, 'Ciobanesc German', 4, 18, 40, 'negru', 'M', 'images/ciobanesc.jpg'),
(13, 'Bulldog', 7, 22, 35, 'portocaliu', 'F', 'images/bulldog.jpg'),
(14, 'Husky', 2, 12, 55, 'alb', 'F', 'images/husky.jpg'),
(15, 'Terrier', 5, 9, 40, 'negru', 'M', 'images/terrier.jpg'),
(16, 'Ciobanesc German', 7, 25, 63, 'megru', 'M', 'images/ciobanesc.jpg'),
(17, 'Husky', 10, 27, 60, 'alb', 'M', 'images/husky.jpg'),
(18, 'Ciobanesc German', 7, 30, 60, 'megru', 'F', 'images/ciobanesc.jpg'),
(19, 'Bulldog', 3, 20, 32, 'alb', 'M', 'images/bulldog.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `caracteristici`
--

CREATE TABLE IF NOT EXISTS `caracteristici` (
`id` int(11) NOT NULL,
  `caracteristica` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Salvarea datelor din tabel `caracteristici`
--

INSERT INTO `caracteristici` (`id`, `caracteristica`) VALUES
(1, 'energic'),
(2, 'prietenos'),
(3, 'afectiv'),
(4, 'usor de dresat'),
(5, 'docil'),
(6, 'zgomotos'),
(7, 'necesita curatare'),
(8, 'protector'),
(9, 'lenes'),
(10, 'somn indelungat');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Salvarea datelor din tabel `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(2, 'user', 'parola');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `pasari`
--

CREATE TABLE IF NOT EXISTS `pasari` (
`ID` int(11) NOT NULL,
  `Rasa` varchar(30) NOT NULL,
  `Varsta` int(11) DEFAULT NULL,
  `Dimensiuni` int(11) DEFAULT NULL,
  `Culoare` varchar(20) DEFAULT NULL,
  `Sex` enum('M','F') DEFAULT NULL,
  `Imagine` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Salvarea datelor din tabel `pasari`
--

INSERT INTO `pasari` (`ID`, `Rasa`, `Varsta`, `Dimensiuni`, `Culoare`, `Sex`, `Imagine`) VALUES
(1, 'Perus', 2, 12, 'albastru', 'M', 'images/perus.jpg'),
(2, 'Nimfa', 9, 35, 'albastru', 'M', 'images/nimfa.jpg'),
(3, 'Perus', 4, 8, 'albastru', 'F', 'images/perus.jpg'),
(4, 'Perus', 4, 13, 'verde', 'M', 'images/perus.jpg'),
(5, 'Canar', 1, 9, 'albastru', 'M', 'images/canar.jpg'),
(6, 'Canar', 5, 14, 'albastru', 'F', 'images/canar.jpg'),
(7, 'Nimfa', 12, 37, 'albastru', 'F', 'images/nimfa.jpg'),
(8, 'Perus', 7, 15, 'alb', 'M', 'images/perus.jpg'),
(10, 'Canar', 2, 11, 'auriu', 'M', 'images/canar.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `pesti`
--

CREATE TABLE IF NOT EXISTS `pesti` (
`ID` int(11) NOT NULL,
  `Rasa` varchar(20) DEFAULT NULL,
  `Varsta` int(11) DEFAULT NULL,
  `Dimensiuni` int(11) DEFAULT NULL,
  `Culoare` varchar(20) DEFAULT NULL,
  `Imagine` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Salvarea datelor din tabel `pesti`
--

INSERT INTO `pesti` (`ID`, `Rasa`, `Varsta`, `Dimensiuni`, `Culoare`, `Imagine`) VALUES
(1, 'Caras Auriu', 3, 10, 'auriu', 'images/caras-auriu.jpg'),
(2, 'Neon', 0, 2, 'albastru', 'images/neon.jpg'),
(3, 'Scalar', 1, 10, 'verde', 'images/scalar.jpg'),
(4, 'Caras Auriu', 7, 20, 'auriu', 'images/caras-auriu.jpg'),
(5, 'Piranha', 2, 20, 'gri', 'images/piranha.jpg'),
(6, 'Neon', 1, 2, 'albastru', 'images/neon.jpg'),
(7, 'Neon', 1, 3, 'rosu', 'images/neon.jpg'),
(8, 'Scalar', 2, 13, 'portocaliu', 'images/scalar.jpg'),
(10, 'Piranha', 2, 23, 'negru', 'images/piranha.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `pisici`
--

CREATE TABLE IF NOT EXISTS `pisici` (
`ID` int(10) unsigned NOT NULL,
  `Rasa` varchar(20) DEFAULT NULL,
  `Varsta` int(11) DEFAULT NULL,
  `Greutate` int(11) DEFAULT NULL,
  `Dimensiuni` int(11) DEFAULT NULL,
  `Culoare` varchar(20) DEFAULT NULL,
  `Sex` enum('M','F') DEFAULT NULL,
  `Imagine` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Salvarea datelor din tabel `pisici`
--

INSERT INTO `pisici` (`ID`, `Rasa`, `Varsta`, `Greutate`, `Dimensiuni`, `Culoare`, `Sex`, `Imagine`) VALUES
(1, 'Persana', 4, 4, 32, 'alb', 'F', 'images/persana.jpg'),
(2, 'Birmaneza', 2, 4, 40, 'alb-gri', 'M', 'images/birmaneza.jpg'),
(3, 'Persana', 8, 4, 40, 'gri', 'F', 'images/persana.jpg'),
(4, 'Siameza', 1, 2, 28, 'alb', 'F', 'images/siameza.jpg'),
(5, 'Persana', 1, 1, 22, 'portocaliu', 'M', 'images/persana.jpg'),
(6, 'Sfinx', 7, 4, 30, 'alb', 'F', 'images/sfinx.jpg'),
(7, 'Birmaneza', 10, 3, 43, 'gri', 'M', 'images/birmaneza.jpg'),
(8, 'Sfinx', 2, 1, 26, 'alb', 'M', 'images/sfinx.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `specii`
--

CREATE TABLE IF NOT EXISTS `specii` (
  `Specie` varchar(20) NOT NULL,
  `Durata_de_viata` int(11) DEFAULT NULL,
  `Dimensiune_medie` int(11) DEFAULT NULL,
  `Comentarii` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `specii`
--

INSERT INTO `specii` (`Specie`, `Durata_de_viata`, `Dimensiune_medie`, `Comentarii`) VALUES
('Birmaneza', 16, 45, 'Pisica birmaneza este foarte curioasa, ii place compania oamenilor si manifesta multa afectiune fata de om. Nu este zgomotoasa, deci este recomadata celor care iubesc linistea si calmul.Inteligenta, atasata si blajina. Un animal de apartament minunat, care iubeste compania oamenilor si a animalelor. Daca animalul este lasat singur in timpul zilei, e bine sa-i aduceti o alta pisica sa-i tina tovarasie.'),
('Bulldog', 10, 35, 'Acest caine se dovedeste vioi si jucaus in primii sai ani de viata, spontan, curajos si amuzant. Firea blanda, sensibila, il deosebeste mult de stramosii si gladiatori. Este un animal credincios si supus in relatia cu stapanul sau si se comporta permisiv si grijuliu cu copiii.  Daca este insa provocat sau agresat, poate riposta foarte dur, intrucat este puternic si are o foarte inalta rezistenta la durere. La maturitate devine foarte sedentar, comod si greoi.'),
('Canar', 18, 20, 'Canarul este pasarea de colivie cea mai putin pretentioasa s'),
('Caras Auriu', 10, 30, 'Despre carasi se spune ca nu sunt pretentiosi. Perfect adevarat, insa asta nu inseamna ca nu necesita atentie si indeplinirea unor conditii esentiale pentru o buna dezvoltare. In primul rand necesita spatiu. Imaginea clasica de peste in bol este gresita si nu face decat sa taie firul vietii a multor pesti. Pentru a se dezvolta corect si a creste in dimensiuni un caras tanar necesita cel putin 40- 50 de  litri. Pe masura ce creste spatiul trebuie suplimentat.'),
('Ciobanesc German', 13, 40, 'Cainele ciobanesc german este un caine inteligent, echilibrat si deosebit de devotat, cu un temperament puternic, dar usor adaptabil oricaror conditii. Perseverent, agil, indraznet si muncitor, cainele isi duce mereu la bun sfarsit sarcina. Folosit in diverse activitati, cainele isi arata capacitatea de a invata repede si de a ajuta. Chiar daca prezinta un aer dominant, dresat intr-un mediu iubitor, ciobanescul german devine un bun caine de companie si pentru copii. Vioi si plin de energie poate fi un bun tovaras de joaca.'),
('Husky', 15, 60, 'Husky Siberian este un caine nobil si prietenos, insa in acelasi timp indraznet si alert. Nu are sub nici o forma calitatile unui caine de paza si aparare, nu este suspicios fata de straini si nici agresiv cu alti caini. Cainele matur este rezervat, are o atitudine demna, inteligenta si un caracter energic. Intotdeauna este dispus la munca sau la joaca, ceea ce il recomanda ca un bun caine de companie. Nu se simte bine singur, fiind un caine de haita.'),
('Labrador Retriever', 13, 58, 'Labradorul Retriever este o rasa de caini originara din Canada. Acest patruped era folosit de pescari la prinderea pestelui deoarece labradorul este o rasa de caini carora le place sa se scalde in apa si sa inoate. Dupa cum si spune numele "retriever" este si un caine de aport.'),
('Neon', 2, 4, 'Pestele neon are un corp intens colorat, cu o linie albastra'),
('Nimfa', 20, 40, 'Când creasta este ridicat?, papagalul este atent la ceva. Câ'),
('Persana', 12, 40, 'Nefiind o pisic? foarte activ?, necesit? circa 70 kcal/kg/zi'),
('Perus', 10, 18, 'Meiul este hrana de baza pentru papagalii perusi. In petshop-uri se gasesc diverse amestecuri de seminte speciale pentru perusi.Hrana se lasa in vase la dispozitia perusilor pe tot parcursul zilei.'),
('Piranha', 10, 25, 'Piranha este denumirea sub care sunt cunoscute speciile de p'),
('Scalar', 8, 12, 'Este potrivit pentru acvariile mari care au un continut medi'),
('Sfinx', 11, 35, 'La prima vedere, pisica Sfinx poate parea ca produsul unui e'),
('Siameza', 15, 30, 'Siameza este cunoscuta mai ales datorita reputatiei de galag'),
('Terrier', 15, 40, 'Terrierii sunt un grup de rase de caini, crescuti initial pentru vanatoarea si uciderea animalelor daunatoare. De obicei mici, acesti caini sunt curajosi si bravi, avand o personalitate vioaie, energica, hiperactiva.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atribut_rasa`
--
ALTER TABLE `atribut_rasa`
 ADD KEY `ID_caracteristici` (`ID_caracteristici`), ADD KEY `Rasa` (`Rasa`);

--
-- Indexes for table `caini`
--
ALTER TABLE `caini`
 ADD PRIMARY KEY (`ID`), ADD KEY `Rasa` (`Rasa`);

--
-- Indexes for table `caracteristici`
--
ALTER TABLE `caracteristici`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasari`
--
ALTER TABLE `pasari`
 ADD PRIMARY KEY (`ID`), ADD KEY `Rasa` (`Rasa`);

--
-- Indexes for table `pesti`
--
ALTER TABLE `pesti`
 ADD PRIMARY KEY (`ID`), ADD KEY `Rasa` (`Rasa`);

--
-- Indexes for table `pisici`
--
ALTER TABLE `pisici`
 ADD PRIMARY KEY (`ID`), ADD KEY `Rasa` (`Rasa`);

--
-- Indexes for table `specii`
--
ALTER TABLE `specii`
 ADD PRIMARY KEY (`Specie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caracteristici`
--
ALTER TABLE `caracteristici`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pasari`
--
ALTER TABLE `pasari`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pesti`
--
ALTER TABLE `pesti`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pisici`
--
ALTER TABLE `pisici`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `atribut_rasa`
--
ALTER TABLE `atribut_rasa`
ADD CONSTRAINT `atribut_rasa_ibfk_1` FOREIGN KEY (`ID_caracteristici`) REFERENCES `caracteristici` (`id`),
ADD CONSTRAINT `atribut_rasa_ibfk_2` FOREIGN KEY (`Rasa`) REFERENCES `specii` (`Specie`);

--
-- Restrictii pentru tabele `caini`
--
ALTER TABLE `caini`
ADD CONSTRAINT `caini_ibfk_1` FOREIGN KEY (`Rasa`) REFERENCES `specii` (`Specie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `pasari`
--
ALTER TABLE `pasari`
ADD CONSTRAINT `pasari_ibfk_1` FOREIGN KEY (`Rasa`) REFERENCES `specii` (`Specie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `pesti`
--
ALTER TABLE `pesti`
ADD CONSTRAINT `pesti_ibfk_1` FOREIGN KEY (`Rasa`) REFERENCES `specii` (`Specie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `pisici`
--
ALTER TABLE `pisici`
ADD CONSTRAINT `pisici_ibfk_1` FOREIGN KEY (`Rasa`) REFERENCES `specii` (`Specie`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
