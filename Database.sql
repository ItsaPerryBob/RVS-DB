-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2016 at 08:57 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1124239_rvsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `a1124239_rvsdb`
--

CREATE TABLE `a1124239_rvsdb` (
  `Modell` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `Maskinnavn/Merke` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `Serienummer` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `Etternavn` varchar(14) COLLATE latin1_general_ci DEFAULT NULL,
  `Fornavn` varchar(18) COLLATE latin1_general_ci DEFAULT NULL,
  `Klasse` varchar(4) COLLATE latin1_general_ci DEFAULT NULL,
  `Tyveringsmerke` int(11) NOT NULL,
  `Utlevert` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serienummer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `a1124239_rvsdb`
--

INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11004', 'SMP08GK8A', 'Hansen', 'Patrick Alexander', '1TPB', 5621, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11014', 'SMP08GKAR', 'Stiansen', 'John Gunnar', '1STB', 5631, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11046', 'SMP08GPM9', 'Radgowski', 'Mateusz', '1STA', 5663, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11076', 'SMP08GV9R', 'Breimyr', 'Benjamin', '1TPA', 5693, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11118', 'SMP08GVHX', 'Brynemo', 'Martin Hansen', '1TPB', 5735, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11021', 'SMP08GWLG', 'Lindstøl', 'Johanna Berger', '1STB', 5638, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11000', 'SMP08GX50', 'Vestervik', 'Mathias', '1STB', 5617, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11067', 'SMP08GXSM', 'Ingvaldsen', 'Håkon Vika', '1TPA', 5684, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11111', 'SMP08GXSQ', 'Henriksen', 'Håkon', '1TPB', 5728, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11032', 'SMP08GXZ1', 'Stenersen', 'Marthe Kals', '1STB', 5649, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11028', 'SMP08GY1F', 'Vindfjell', 'Leander', '1STB', 5645, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11055', 'SMP08GY4C', 'Kvesetmoen', 'Martine O', '1STA', 5672, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11016', 'SMP08GY4G', 'Østebø', 'Sander', '1TPB', 5633, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11033', 'SMP08GY4V', 'Ovanesyan', 'Vanesa Ovanes', '1STB', 5650, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11002', 'SMP08GY8J', 'Eskarkhanova', 'Iman', '1STB', 5619, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11052', 'SMP08GY8P', 'Ødegaard', 'Birk Langand', '1ELA', 5669, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11003', 'SMP08GY8T', 'Gustavsen', 'Camilla Dørsdal', '1STB', 5620, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11048', 'SMP08GYA7', 'Halvorsen', 'Tellef', '1STA', 5665, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11031', 'SMP08GYA9', 'Thorvaldsen', 'Ylva', '1STB', 5648, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11049', 'SMP08GYBP', 'Anundsen', 'Sindre Sundsdal', '1TPA', 5666, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11020', 'SMP08GYBQ', 'Akselsen', 'Mats Lunden', '1STB', 5637, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11019', 'SMP08GYBR', 'Røvik', 'Øystein Andre', '1STB', 5636, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11061', 'SMP08GYBS', 'Arndt', 'Dina Breilid', '1STA', 5678, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11018', 'SMP08GYBW', 'Dahl', 'Jøran Bowen', '1TPB', 5635, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11045', 'SMP08GYC0', 'Bitter', 'Sören', '1STA', 5662, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11007', 'SMP08GYCA', 'Gåskjenn', 'Vegar', '1ELA', 5624, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11030', 'SMP08GYCG', 'Andersen', 'Andrea Madeleine', '1SSA', 5647, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11027', 'SMP08GYCR', 'Hansen', 'Maiken L Solvang', '1STB', 5644, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11057', 'SMP08GYFK', 'Gjerde', 'Josefine', '1STA', 5674, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11024', 'SMP08GYFZ', 'Andresen', 'Torvald', '1STB', 5641, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11058', 'SMP08GYG4', 'Gullhav', 'Preben', '1STA', 5675, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11088', 'SMP08GYG7', 'Veivåg', 'Joachim Lund', '1STA', 5705, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11013', 'SMP08GYGC', 'Winterkjær', 'Inger Såghus', '1STB', 5630, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11034', 'SMP08GYGE', 'Pedersen', 'Helene', '1STB', 5651, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11025', 'SMP08GYGH', 'Westad', 'Chris Remi', '1STB', 5642, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11001', 'SMP08GYGV', 'Songe', 'Mathias Lillestø', '1STB', 5618, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11006', 'SMP08GYH3', 'Nalepa', 'Paulina', '1STB', 5623, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11053', 'SMP08GYHD', 'Johnsen', 'Martine', '1STA', 5670, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11012', 'SMP08GYJX', 'Raschwitz', 'Theresa M', '1STB', 5629, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11017', 'SMP08GYRW', 'Bertheussen', 'Ida Agnes E E', '1DHA', 5634, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11009', 'SMP08GYS3', 'Heistad', 'Juliane Frøyna', '1SSA', 5626, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11005', 'SMP08GYS5', 'Vollum', 'Magnar Tamlag', '1TPB', 5622, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11010', 'SMP08GYS7', 'Dalen', 'Maren Ingrid', '1SSA', 5627, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11029', 'SMP08GYS9', 'Eikeland', 'Mathias Hovde', '1STB', 5646, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11054', 'SMP08GYSH', 'Tveide', 'Mathilde Pedersen', '1STA', 5671, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11026', 'SMP08GYSX', 'Hansen', 'Jakob', '1STB', 5643, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11008', 'SMP08GYT1', 'Kristiansen', 'Per-Arne Dahl', '1SSA', 5625, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11023', 'SMP08GYT7', 'Larsen', 'Espen', '1STB', 5640, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11062', 'SMP08GYUG', 'Mollestad', 'Mathias', '1STA', 5679, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11064', 'SMP08GYUS', 'Mykland', 'Sander Pettersen', '1STA', 5681, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11060', 'SMP08GYUV', 'Eie', 'Marcel Gerritsen', '1STA', 5677, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11063', 'SMP08GZ1L', 'Blandford', 'Thor William H', '1STA', 5680, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11044', 'SMP08GZ1N', 'Raahauge', 'Lars Eckhoff', '1STA', 5661, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11037', 'SMP08GZ1R', 'Reinemo', 'Lucas Bævre', '1SSA', 5654, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11056', 'SMP08GZ27', 'Alfsen', 'Amund Frøyna', '1STA', 5673, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11059', 'SMP08GZ2G', 'Aanonsen', 'Inger Johanne F', '1STA', 5676, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11015', 'SMP08GZ79', '', '', '', 5632, 0);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11043', 'SMP08GZ8X', 'Bartolo', 'Sindre De', '1SSA', 5660, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11079', 'SMP08GZAG', 'Flaten', 'Sten Leander', '1TPA', 5696, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11109', 'SMP08GZDB', 'Johansen', 'Kristoffer A', '1TPB', 5726, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11115', 'SMP08GZDV', 'Perrin', 'Philip Andersen', '1TPB', 5732, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11120', 'SMP08GZDZ', 'Bråten', 'Arnt T Swinburne', '1ELA', 5737, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11039', 'SMP08GZE4', 'Selåsvassenden', 'Silje', '1SSA', 5656, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11091', 'SMP08GZEE', 'Shee', 'Ta Mla', '1TPA', 5708, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11103', 'SMP08GZKR', 'Langmyrlia', 'Magnus', '1ELA', 5720, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11102', 'SMP08GZKT', 'Halvorsen', 'Bjørn Frode', '1ELA', 5719, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11101', 'SMP08GZN8', 'Myre', 'Tom André Slåen', '1ELA', 5718, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11098', 'SMP08GZNR', 'Gjernes', 'Henrik Olsen', '1ELA', 5715, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11104', 'SMP08GZUH', 'Munch-Olsen', 'Emelie', '1DHA', 5721, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11075', 'SMP08GZVP', 'Mostad', 'Trym', '1STB', 5692, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11078', 'SMP08GZVR', 'Aasbø', 'Erling', '1TPA', 5695, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11119', 'SMP08GZVZ', 'Fjukstad', 'Olav Christoffer', '1TPB', 5736, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11081', 'SMP08GZW0', 'Bjørklid', 'Kristoffer S', '1STB', 5698, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11074', 'SMP08GZW6', 'Foss', 'Amalie Pedersen', '1STA', 5691, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11080', 'SMP08GZW7', 'Brekka', 'Tor Inge', '1STB', 5697, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11123', 'SMP08GZW8', 'Kjærefjord', 'Oddvind E', '1TPB', 5740, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11071', 'SMP08GZWA', 'Holte', 'Ragnhild Emblem', '1STB', 5688, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11106', 'SMP08GZWC', 'Ausland', 'Emma Iren Eide', '1DHA', 5723, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11117', 'SMP08GZWE', 'Frøyna', 'Marita', '1DHA', 5734, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11040', 'SMP08GZWR', 'Fauglied', 'Edvin', '1SSA', 5657, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11114', 'SMP08GZWS', '', '', '', 5731, 0);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11068', 'SMP08GZXD', 'Selåsvassenden', 'Jannicke Eikeland', '1TPA', 5685, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11090', 'SMP08GZXS', 'Tabuse', 'Olga', '1STA', 5707, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11069', 'SMP08GZXV', 'Engeland', 'Nicolai', '1TPA', 5686, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11105', 'SMP08GZXY', 'Flaten', 'Tora Iren Haugland', '1DHA', 5722, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11070', 'SMP08GZY7', 'Walla', 'Sofie', '1STB', 5687, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11108', 'SMP08GZYN', 'Amundsen', 'Martin', '1TPB', 5725, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11113', 'SMP08GZZ3', '', '', '', 5730, 0);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11124', 'SMP08GZZB', 'Hoksvold', 'Nicolas Stiven', '1ELA', 5741, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11112', 'SMP08GZZH', '', '', '', 5729, 0);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11066', 'SMP08H001', 'Okbazige', 'Tedros Kidane', '1TPA', 5683, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11110', 'SMP08H00Z', 'Heistad', 'Sondre Kogstad', '1TPB', 5727, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11022', 'SMP08H01T', 'Henriksen', 'Siri', '1SSA', 5639, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11065', 'SMP08H05F', 'Shinwary', 'Zalmai', '1TPB', 5682, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11122', 'SMP08H05M', 'Torjesen', 'Harald K R', '1TPB', 5739, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11077', 'SMP08H06E', 'Flotve', 'Fredrik', '1STA', 5694, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11038', 'SMP08H07T', 'Sandåker', 'Jenny', '1SSA', 5655, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11099', 'SMP08H082', 'Aadland', 'Odin', '1ELA', 5716, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11116', 'SMP08H08L', 'Mortensen', 'Daniel', '1ELA', 5733, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11073', 'SMP08H08W', 'Refsland', 'Hanna', '1STA', 5690, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11051', 'SMP08H093', 'Olsen', 'Margrethe', '1STA', 5668, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11042', 'SMP08H09L', 'Espeland', 'Anders', '1SSA', 5659, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11072', 'SMP08H0A5', 'Chai', 'Say Kpaw', '1STB', 5689, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11100', 'SMP08H0CN', 'Sandblost', 'Halvor Holt', '1ELA', 5717, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11107', 'SMP08H0E1', 'Jeppestøl', 'Kristine', '1DHA', 5724, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11011', 'SMP08H0E4', 'Gundersen', 'Ina', '1STB', 5628, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11121', 'SMP08H0EM', 'Helgesen', 'Martin Bråtveit', '1TPB', 5738, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11041', 'SMP08H0EX', 'Kristensen', 'Jostein', '1SSA', 5658, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11050', 'SMP08H11D', 'Flåt', 'Merethe', '1STA', 5667, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11047', 'SMP08H11P', 'Stebekk', 'Eirik', '1STA', 5664, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11083', 'SMP08H12H', 'Eiker', 'Preben Bjorvatten', '1STA', 5700, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11082', 'SMP08H12U', 'Stifoss', 'Henning', '1TPA', 5699, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11036', 'SMP08H13Q', 'Ibsen', 'Jostein Holen', '1STA', 5653, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11095', 'SMP08H14H', 'Kristiansen', 'Tobias', '1ELA', 5712, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11084', 'SMP08H15A', 'Altaravicius', 'Mindaugas', '1TPA', 5701, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11093', 'SMP08H15H', 'Eriksen', 'Paul Roger', '1TPA', 5710, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11085', 'SMP08H15L', 'Fone', 'Amund', '1TPA', 5702, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11097', 'SMP08H15R', 'Fone', 'Erlend Wasler', '1ELA', 5714, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11092', 'SMP08H15X', 'Solheim', 'Tallak', '1TPA', 5709, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11094', 'SMP08H164', 'Arndt', 'Benjamin Breilid', '1ELA', 5711, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11089', 'SMP08H18U', 'Sigurdsøn', 'Astrid', '1STA', 5706, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11035', 'SMP08H18W', 'Hansen', 'Erica Andersen', '1SSA', 5652, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11086', 'SMP08H1DN', 'Ellefsen', 'Frank', '1TPA', 5703, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11087', 'SMP08H1DW', 'Lindseth', 'Eirik André', '1STA', 5704, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('E31', 'RVS11096', 'SMP08H1DZ', 'Fone', 'Torbjørn', '1ELA', 5713, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11133', 'SR90GEDK9', 'Feltstykket', 'Julie Nordmo', '1MKA', 5750, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11140', 'SR90GEDKB', 'Aslaksen', 'Anne Elisabeth', '1MKA', 5757, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11139', 'SR90GEDKD', 'Slavova', 'Emiliya Ivanova', '1MKA', 5756, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11128', 'SR90GEDKF', '', '', '', 5745, 0);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11132', 'SR90GEDKX', 'Skogsholm', 'Gutierrez Allan', '1MKA', 5749, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11135', 'SR90GEDLA', 'Andersen', 'Marie Bordal', '1MKA', 5752, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11129', 'SR90GEDLE', 'Gjevestad', 'Herman', '1MKA', 5746, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11138', 'SR90GEDLJ', 'Råbu', 'Vilde Torp', '1MKA', 5755, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11131', 'SR90GEDLT', 'Thomas', 'Sebastian', '1MKA', 5748, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11137', 'SR90GEDLV', 'Bulman', 'Kristofer', '1MKA', 5754, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11126', 'SR90GEDM1', 'Øia', 'Mette', '1MKA', 5743, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11130', 'SR90GEDM4', 'Cuckovic', 'Andrej', '1MKA', 5747, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11127', 'SR90GEDMH', 'Nyberg', 'Selma P J Voss', '1MKA', 5744, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11134', 'SR90GEDN0', 'Høgetveit', 'Joakim Roskifte', '1MKA', 5751, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11136', 'SR90GEDN2', 'Lien', 'Maria Johanne', '1MKA', 5753, 2015);
INSERT INTO `a1124239_rvsdb` VALUES('T550', 'RVS11125', 'SR9JGEDKS', 'Lunde', 'Teodor Anfinsen', '1MKA', 5742, 2015);
