-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 07, 2021 alle 12:34
-- Versione del server: 10.4.17-MariaDB
-- Versione PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alternanza_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `aziende`
--

CREATE TABLE `aziende` (
  `PartitaIva` varchar(11) NOT NULL,
  `RagioneSociale` varchar(50) NOT NULL,
  `RappresentanteLegale` varchar(50) NOT NULL,
  `IndirizzoAzienda` varchar(100) NOT NULL,
  `Comune` varchar(50) NOT NULL,
  `Prov` varchar(50) NOT NULL,
  `TelefonoAzienda` varchar(15) NOT NULL,
  `MailAzienda` varchar(100) NOT NULL,
  `TutorAziendale` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `aziende`
--

INSERT INTO `aziende` (`PartitaIva`, `RagioneSociale`, `RappresentanteLegale`, `IndirizzoAzienda`, `Comune`, `Prov`, `TelefonoAzienda`, `MailAzienda`, `TutorAziendale`) VALUES
('00004810545', 'Gaggioli Auto', 'Gaggioli Nazareno', 'Viale Parini Trestina', 'Città di Castello', 'PG', '075-854224', 'nazzareno.gaggioli@tin.it', 'Gaggioli Nadia'),
('00267800514', 'Comune di Pieve Santo Stefano', 'Bragagni Albano', 'Piazza Plinio Pellegrini, 1', 'Pieve Santo Stefano', 'AR', '0575-797737', 'compieve@technet.it', 'Tempestini Mara'),
('00326380540', 'L\'Abbondanza S.r.l', 'Landini Mauro', 'Loc. Cinquemiglia, 47', 'Città di Castello', 'Pg', '075-8642470', 'lorenzo.piombini@labbondanza.it  e riccardo.palleri@labbondanza.it', 'Piombini Lorenzo'),
('00357650415', 'Comune Apecchio', 'Vittorio Alberto Nicolucci', 'Largo Avis, 1', 'Apecchio', 'Pu', '0722-989004', 'comune.apecchio@provincia.ps.it', 'Patrizia Fratini'),
('00360410419', 'Comune Piobbico', 'Giorgio Mochi', 'Via del Caduti ', 'Piobbico', 'Pu', '0722-986225', 'servizi.sociali@comune.piobbico.pu.it  e  o comune.piobbico@provincia.ps.it', 'Alessandroni Marilisa'),
('00372420547', 'Comune di Città di Castello', 'Bacchetta Luciano', 'Piazza Gabriotti 1', 'Città di Castello', 'PG', '075-8529239', 'valentina.ugolini@cittadicastello.gov.it; giuseppe.rossi@cittadicastello.gov.it', 'Baldacci Lucio'),
('00408580546', 'Comune Montone', 'Mirco Rinaldi', 'Via Caseti, 21', 'Montone', 'Pg', ' 075-9306427 ', 'sindaco@montone.org e segreteria@montone.org', 'Rustici Ambra'),
('00448140541', 'Comune San Giustino', 'Fratini Paolo', 'Piazza del Municipio, 17', 'San Giustino', 'PG', '075-8618411', 'no lettera', 'Brizi Antonella'),
('00463970541', 'Comune di Citerna', 'Falaschi Giuliana', 'Corso Giuseppe Garibaldi', 'Citerna', 'PG', '075-8592119', 'regina.fusco@citerna.net', 'Fusco Regina'),
('00587630542', 'Scuola Radio Elettra', 'Corazzi Mauro', 'Via Carla Marx 24 - Cerbara', 'Città di Castello', 'PG', '075-85151', 'paolo.rampacci@scuolaradioelettra.it', 'Rampacci Paolo'),
('00644150542', 'RENZACCI', 'Ing. Renzacci Gabrio', 'Via Rodolfo Morandi, 13,', 'Città di Castello', 'PG', '397 586 2961', 'madmax@renzacci.net', 'Marconi Massimo'),
('01279840415', 'BB Elettronica snc', 'Bologna Maurizio', '16/A Localita\' La Valle,', 'Apecchio', 'Pu', '0722-900003 ', 'bbelettronica@yahoo.it', 'Bologna Lorenzo'),
('01476930548', 'SOGEPU', 'Goracci Cristian', 'Via E. Vittorini 27 - Cerbara', 'Città di Castello', 'PG', '075-852391', 'alice.chiatti@sogepu.com', 'Chiatti Alice'),
('01655750519', 'MEG@SERVICE', 'Bondoni Paolo', 'Via della Verna 63', 'Pieve Santo Stefano', 'AR', '0575-797387', 'info@mega-service.net', 'Bondoni Paolo'),
('01704430519', 'ABOCA spa', 'Mercati Valentino', 'Località Aboca 20', 'Sansepolcro', 'AR', '05757461', '', 'Alessandro Buzzini'),
('01760890515', 'IPKOM', 'Piccini Michele', 'Via Malpasso 42', 'Sansepolcro', 'AR', '0575-1710400', 'laura.mercati@ipkom.com', 'Mercati Laura'),
('01826350546', 'SCACF SpA', 'Caldari Fabrizio', 'Via Mattei 43', 'San Giustino', 'Pg', '075-8555401', 'capo@uniservices.it', 'Caldari Fabrizio'),
('02083700548', 'CIPS Informatica', 'Signori Silvio', 'Sede legale via Marconi 18', 'Città di Castello', 'PG', '075-521413', 'mario.menichetti@cips.it', 'Signori Silvio'),
('02607970544', 'ID WEB', 'Milli Marco', 'Viale Romagna 69/a ', 'Città di Castello', 'PG', '075-8511473', 'marco.milli@idweb.it', 'Milli Marco'),
('02905300543', 'Informatica 95 ', 'Cecchetti Sabrina', 'Via Garibaldi, 64', 'Umbertide', 'Pg', '075-9417850', 'sabrina.cecchetti@informatica95.net', 'Cecchetti Sabrina'),
('03045770546', 'STOA s.r.l.', 'Laura Gaburri', 'Via Treves, 12', 'Città di Castello', 'Pg', '075-8510961', 'stoa@stoasoftware.it', 'Laura Gaburri'),
('03093910549', 'Informatica 99', 'Renzini Laura', 'Via Ferrer 19/A ', 'Città di Castello', 'Pg', '758510255', ' laura@i99.it', 'Renzini Laura'),
('03178480541', 'TIBER LAMIERE ', 'Ilaria Maestri', 'Via Piave 14', 'SANGIUSTINO ', 'PG', '075-8569950', 'amministrazione@tiberlamiere.com', 'Ilaria Maestri'),
('03301860544', 'USL 1', 'Casciari Andrea', 'Via G. Guerra  21', 'Perugia', 'PG', '075-85091', 'marta.montedori@uslumbria1.it', 'Montedori Marta'),
('03411740545', 'ATV Report', 'Francesco Polchi', 'Via Cacciatori del Tevere, 3', 'Città di Castello', 'PG', '0758554351', 'redazione@atvreport.it francesco', 'Carlo Stocchi'),
('03469160547', 'ETI3 srl', 'Marco Salvelli', 'Via Luca della Robbia, 17', 'Città di Castello', 'PG', '3346992802', 'roberto.battistelli@eti3.it', 'Anna Gabbolini'),
('03471760540', 'Phone Lab', 'Tanesescu Cristian', 'Via dei Malatesta, 56H', 'Sansepolcro ', 'AR', '389 125 3599', 'repair.cdc@gmail.com', 'Tanesescu Cristian'),
('03519530541', 'Bernardini Auto', 'Alice Banelli', 'Via D.Donini 41/a Cinquemiglia', 'Città di Castello', 'Pg', '334-9116292', '', 'Alice Banelli'),
('07823550962', 'MMBB srl', 'Bega Marco', 'V.LE Orlando Vittorio Emanuele 24/bis', 'Città di Castello', 'PG', '0758556335', 'amministrazione@mmbb.it', 'Pierotti Paolo'),
('07946271008', 'GB software ', 'Bagiacchi Luca', 'Via Biturgense, 100', 'Città di Castello', 'PG', '', 'daniele@gbsoftware.it', 'Migliorati Simon'),
('0861640514', 'TRATOS', 'Albano Bragagni', 'Via dello stadio 2', 'Pieve santo stefano', 'AR', '0575 794251', 'massimo.marri@tratos.it', 'Gravina Francesco'),
('1474940515', 'Data Proget', 'Fabrizi Marco', 'Via campo sportivo 6', 'Sansepolcro', 'AR', '0575-736218', 'm.boninsegni@dataproget.it', 'Fabbriciani Luca'),
('2082300548', 'Grafiche SABBIONI', 'Sabbioni Roberto', 'Breccione - Trestina', 'Città di Castello', 'PG', '075.854 186', 'info@grafichesabbioni.it', 'Ottaviani Paola');

-- --------------------------------------------------------

--
-- Struttura della tabella `classi`
--

CREATE TABLE `classi` (
  `Anno` int(11) NOT NULL,
  `Sezione` varchar(1) NOT NULL,
  `AnnoScolastico` varchar(9) NOT NULL,
  `fk_descrizione` varchar(50) NOT NULL,
  `fkid_tutorscolastico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `classi`
--

INSERT INTO `classi` (`Anno`, `Sezione`, `AnnoScolastico`, `fk_descrizione`, `fkid_tutorscolastico`) VALUES
(3, 'D', '2018/2019', 'Informatica', 1),
(4, 'D', '2019/2020', 'Informatica', 1),
(4, 'D', '2020/2021', 'Informatica', 2),
(5, 'D', '2020/2021', 'Informatica', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `disponibilita`
--

CREATE TABLE `disponibilita` (
  `fk_partitaIVA` varchar(11) NOT NULL,
  `annoScolastico` varchar(9) NOT NULL,
  `disp3` int(11) NOT NULL,
  `disp4` int(11) NOT NULL,
  `disp5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `disponibilita`
--

INSERT INTO `disponibilita` (`fk_partitaIVA`, `annoScolastico`, `disp3`, `disp4`, `disp5`) VALUES
('00004810545', '2021', 2, 1, 2),
('01476930548', '2021', 0, 3, 2),
('01704430519', '2021', 1, 2, 1),
('03519530541', '2020', 2, 2, 2),
('03519530541', '2021', 2, 2, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `frequenta`
--

CREATE TABLE `frequenta` (
  `id_frequenta` int(11) NOT NULL,
  `fk_matricola` int(11) NOT NULL,
  `fk_anno` int(11) NOT NULL,
  `fk_sezione` varchar(1) NOT NULL,
  `fk_annoscolastico` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `frequenta`
--

INSERT INTO `frequenta` (`id_frequenta`, `fk_matricola`, `fk_anno`, `fk_sezione`, `fk_annoscolastico`) VALUES
(1, 1, 5, 'D', '2020/2021'),
(2, 2, 5, 'D', '2020/2021'),
(3, 3, 5, 'D', '2020/2021');

-- --------------------------------------------------------

--
-- Struttura della tabella `indirizzi`
--

CREATE TABLE `indirizzi` (
  `Descrizione` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `indirizzi`
--

INSERT INTO `indirizzi` (`Descrizione`) VALUES
('Informatica');

-- --------------------------------------------------------

--
-- Struttura della tabella `stage`
--

CREATE TABLE `stage` (
  `fk_matricola` int(11) NOT NULL,
  `fk_partitaIva` varchar(11) NOT NULL,
  `Inizio` date NOT NULL,
  `Fine` date NOT NULL,
  `id_stage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `stage`
--

INSERT INTO `stage` (`fk_matricola`, `fk_partitaIva`, `Inizio`, `Fine`, `id_stage`) VALUES
(1, '02905300543', '2021-01-14', '2021-01-21', 1),
(2, '02607970544', '2021-01-14', '2021-01-21', 2),
(1, '01476930548', '2021-01-28', '2021-01-31', 3),
(2, '00644150542', '2021-01-28', '2021-01-31', 4),
(1, '02083700548', '2021-01-18', '2021-01-25', 5),
(2, '02083700548', '2021-01-18', '2021-01-25', 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `studenti`
--

CREATE TABLE `studenti` (
  `Matricola` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `DataNascita` date NOT NULL,
  `ComuneNascita` varchar(50) NOT NULL,
  `ProvinciaNascita` varchar(50) NOT NULL,
  `Sesso` varchar(1) NOT NULL,
  `Indirizzo` varchar(100) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `studenti`
--

INSERT INTO `studenti` (`Matricola`, `Nome`, `Cognome`, `DataNascita`, `ComuneNascita`, `ProvinciaNascita`, `Sesso`, `Indirizzo`, `Mail`, `Telefono`) VALUES
(1, 'Cristiano', 'Aloigi', '2002-07-12', 'Perugia', 'Perugia', 'M', 'via case sparse 39', 'aloigi.cristiano@franchettisalviani.net', '3911180250'),
(2, 'Lorenzo', 'Ciaccini', '2002-05-02', 'Perugia', 'Perugia', 'M', 'via bella a tutti 10', 'ciaccini.lorenzo@franchettisalviani.net', '3473789713'),
(3, 'Lucia', 'Delle Site', '2002-05-06', 'Roma', 'Roma', 'F', 'via triestina 10', 'dellesite.lucia@franchettisalviani.net', '3911190250');

-- --------------------------------------------------------

--
-- Struttura della tabella `tutorscolastici`
--

CREATE TABLE `tutorscolastici` (
  `id_tutorscolastico` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `tutorscolastici`
--

INSERT INTO `tutorscolastici` (`id_tutorscolastico`, `Nome`, `Cognome`) VALUES
(1, 'Francesco', 'Tassi'),
(2, 'Francesco', 'Fratini'),
(3, 'Filippo', 'Falleri'),
(4, 'Mauro', 'Raspini'),
(5, 'Sabrina', 'Savini');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `aziende`
--
ALTER TABLE `aziende`
  ADD PRIMARY KEY (`PartitaIva`);

--
-- Indici per le tabelle `classi`
--
ALTER TABLE `classi`
  ADD PRIMARY KEY (`Anno`,`Sezione`,`AnnoScolastico`) USING BTREE,
  ADD KEY `fkid_tutorscolastico` (`fkid_tutorscolastico`),
  ADD KEY `fk_descrizione` (`fk_descrizione`);

--
-- Indici per le tabelle `disponibilita`
--
ALTER TABLE `disponibilita`
  ADD PRIMARY KEY (`fk_partitaIVA`,`annoScolastico`);

--
-- Indici per le tabelle `frequenta`
--
ALTER TABLE `frequenta`
  ADD PRIMARY KEY (`id_frequenta`),
  ADD KEY `fk_matricola` (`fk_matricola`),
  ADD KEY `fk_anno` (`fk_anno`);

--
-- Indici per le tabelle `indirizzi`
--
ALTER TABLE `indirizzi`
  ADD PRIMARY KEY (`Descrizione`);

--
-- Indici per le tabelle `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id_stage`),
  ADD KEY `fk_matricola` (`fk_matricola`),
  ADD KEY `fk_partitaIva` (`fk_partitaIva`);

--
-- Indici per le tabelle `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`Matricola`),
  ADD UNIQUE KEY `Telefono` (`Telefono`);

--
-- Indici per le tabelle `tutorscolastici`
--
ALTER TABLE `tutorscolastici`
  ADD PRIMARY KEY (`id_tutorscolastico`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `frequenta`
--
ALTER TABLE `frequenta`
  MODIFY `id_frequenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `stage`
--
ALTER TABLE `stage`
  MODIFY `id_stage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `tutorscolastici`
--
ALTER TABLE `tutorscolastici`
  MODIFY `id_tutorscolastico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `classi`
--
ALTER TABLE `classi`
  ADD CONSTRAINT `classi_ibfk_1` FOREIGN KEY (`fkid_tutorscolastico`) REFERENCES `tutorscolastici` (`id_tutorscolastico`),
  ADD CONSTRAINT `classi_ibfk_2` FOREIGN KEY (`fk_descrizione`) REFERENCES `indirizzi` (`Descrizione`);

--
-- Limiti per la tabella `disponibilita`
--
ALTER TABLE `disponibilita`
  ADD CONSTRAINT `disponibilita_ibfk_1` FOREIGN KEY (`fk_partitaIVA`) REFERENCES `aziende` (`PartitaIva`);

--
-- Limiti per la tabella `frequenta`
--
ALTER TABLE `frequenta`
  ADD CONSTRAINT `frequenta_ibfk_1` FOREIGN KEY (`fk_matricola`) REFERENCES `studenti` (`Matricola`),
  ADD CONSTRAINT `frequenta_ibfk_2` FOREIGN KEY (`fk_anno`) REFERENCES `classi` (`Anno`);

--
-- Limiti per la tabella `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `stage_ibfk_1` FOREIGN KEY (`fk_matricola`) REFERENCES `studenti` (`Matricola`),
  ADD CONSTRAINT `stage_ibfk_2` FOREIGN KEY (`fk_partitaIva`) REFERENCES `aziende` (`PartitaIva`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
