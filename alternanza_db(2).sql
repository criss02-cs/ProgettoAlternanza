-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 30, 2020 alle 19:09
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.11

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
  `TelefonoAzienda` varchar(10) NOT NULL,
  `MailAzienda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `aziende`
--

INSERT INTO `aziende` (`PartitaIva`, `RagioneSociale`, `RappresentanteLegale`, `IndirizzoAzienda`, `TelefonoAzienda`, `MailAzienda`) VALUES
('07946271009', 'GBsoftware S.p.A', 'Valentini Daniele', 'via B.Oriani 153 Roma', '0697626328', 'info@gbsoftware.it'),
('613516551', 'Faist', 'Paolo Bianchi', 'Northern & Shell Building, 10 Lower Thames Street', '2074840522', 'info@faistholdings.com');

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
-- Struttura della tabella `frequenta`
--

CREATE TABLE `frequenta` (
  `fk_anno` int(11) NOT NULL,
  `fk_sezione` varchar(1) NOT NULL,
  `fk_annoscolastico` varchar(9) NOT NULL,
  `fk_matricola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `frequenta`
--

INSERT INTO `frequenta` (`fk_anno`, `fk_sezione`, `fk_annoscolastico`, `fk_matricola`) VALUES
(5, 'D', '2020/2021', 1),
(5, 'D', '2020/2021', 2);

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
(1, '07946271009', '2021-01-24', '2021-02-05', 1),
(2, '613516551', '2021-01-24', '2021-02-05', 2);

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
(2, 'Lorenzo', 'Ciaccini', '2002-05-02', 'Perugia', 'Perugia', 'M', 'via bella a tutti 10', 'ciaccini.lorenzo@franchettisalviani.net', '3473789713');

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
(2, 'Francesco', 'Fratini');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `aziende`
--
ALTER TABLE `aziende`
  ADD PRIMARY KEY (`PartitaIva`),
  ADD UNIQUE KEY `TelefonoAzienda` (`TelefonoAzienda`),
  ADD UNIQUE KEY `MailAzienda` (`MailAzienda`);

--
-- Indici per le tabelle `classi`
--
ALTER TABLE `classi`
  ADD PRIMARY KEY (`Anno`,`Sezione`,`AnnoScolastico`) USING BTREE,
  ADD KEY `fkid_tutorscolastico` (`fkid_tutorscolastico`),
  ADD KEY `fk_descrizione` (`fk_descrizione`);

--
-- Indici per le tabelle `frequenta`
--
ALTER TABLE `frequenta`
  ADD PRIMARY KEY (`fk_anno`,`fk_sezione`,`fk_annoscolastico`,`fk_matricola`),
  ADD KEY `fk_matricola` (`fk_matricola`);

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
-- AUTO_INCREMENT per la tabella `stage`
--
ALTER TABLE `stage`
  MODIFY `id_stage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `tutorscolastici`
--
ALTER TABLE `tutorscolastici`
  MODIFY `id_tutorscolastico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Limiti per la tabella `frequenta`
--
ALTER TABLE `frequenta`
  ADD CONSTRAINT `frequenta_ibfk_2` FOREIGN KEY (`fk_matricola`) REFERENCES `studenti` (`Matricola`),
  ADD CONSTRAINT `frequenta_ibfk_3` FOREIGN KEY (`fk_anno`) REFERENCES `classi` (`Anno`);

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
