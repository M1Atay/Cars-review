-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 jan 2024 om 22:38
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--
CREATE DATABASE IF NOT EXISTS `healthone` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `healthone`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `autos`
--

DROP TABLE IF EXISTS `autos`;
CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `description` varchar(750) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `autos`
--

INSERT INTO `autos` (`id`, `name`, `brand`, `price`, `description`, `picture`, `category_id`) VALUES
(1, 'A45s AMG 4Matic+', 'Mercedes-Benz', 575.00, 'De Mercedes-AMG A45 S 4MATIC+ is een high-performance compacte sportwagen die de perfecte balans biedt tussen luxe en sportiviteit. Onder de motorkap schuilt een krachtige 2.0-liter viercilindermotor met indrukwekkende prestaties, ondersteund door de AMG Performance 4MATIC+ vierwielaandrijving voor optimale grip en wendbaarheid. Met een opvallend aerodynamisch ontwerp, sportieve accenten en luxueuze details in het interieur, biedt de A45 S AMG een verfijnde rijervaring. De geavanceerde technologie, hoogwaardige materialen en het kenmerkende AMG-geluid maken dit model een opvallende keuze voor autoliefhebbers die op zoek zijn naar ultieme prestaties en stijl.', 'cars/a45s.jpg', 1),
(2, 'Mercedes C63 AMG', 'Mercedes-Benz', 850.00, 'De Mercedes-AMG C63 is een high-performance sportwagen die de perfecte combinatie biedt van luxe en kracht. Onder de motorkap bevindt zich doorgaans een indrukwekkende V8-biturbomotor, die zorgt voor buitengewone snelheden en een krachtige prestatie. Met zijn sportieve design, geavanceerde technologie en hoogwaardige materialen in het interieur, straalt de C63 AMG klasse uit. Deze auto biedt een dynamische rijervaring, met indrukwekkende acceleratie en scherpe bochten, waardoor het een geliefde keuze is voor autoliefhebbers die op zoek zijn naar een compromisloze rijbeleving.', 'mercedes/c63.jpg', 1),
(3, 'Mercedes-AMG SL', 'Mercedes-Benz', 650.00, 'De Mercedes-AMG SL is een elegante sportwagen die de perfecte balans vindt tussen prestaties en luxe. Uitgerust met geavanceerde technologie en een krachtige motor, levert de SL AMG opwindende rijervaringen met indrukwekkende acceleratie. Het stijlvolle design, gecombineerd met hoogwaardige materialen in het interieur, straalt klasse en comfort uit. Met zijn opvouwbare hardtop biedt de SL AMG zowel een open-road sensatie als een gesloten, rustig rijcomfort, waardoor het een veelzijdige en prestigieuze keuze is voor autoliefhebbers.', 'mercedes/sl.jpg', 1),
(4, 'Mercedes-AMG SLS AMG', 'Mercedes-benz', 720.00, 'De Mercedes-AMG SLS is een iconische supersportwagen, bekend om zijn kenmerkende vleugeldeuren en compromisloze prestaties. Onder de motorkap schuilt doorgaans een krachtige V8-motor, die opwindende snelheden en een indrukwekkende acceleratie levert. Met zijn opvallende design, gestroomlijnde carrosserie en hoogwaardige afwerking straalt de SLS AMG pure sportiviteit uit. Het interieur is voorzien van luxe materialen en geavanceerde technologie, wat bijdraagt aan een exclusieve rijervaring. Deze bolide is een symbool van pure performance en automotive vakmanschap.', 'mercedes/sls.jpg', 1),
(5, 'Audi RS5', 'Audi', 725.00, 'De Audi RS5 belichaamt sportieve verfijning met zijn krachtige prestaties en stijlvol design. Onder de motorkap schuilt een krachtige V6-motor met dubbele turbo, wat resulteert in indrukwekkende acceleratie en dynamische rijervaringen. Het kenmerkende agressieve exterieurontwerp, gecombineerd met hoogwaardige materialen en geavanceerde technologie in het interieur, benadrukt de sportieve luxe van de RS5. Met Quattro vierwielaandrijving biedt deze sportcoupé niet alleen sensationele snelheden, maar ook uitstekende grip en controle, waardoor het een begerenswaardige keuze is voor liefhebbers van performance-auto\'s.', 'audi/rs5.jpg', 2),
(6, 'Audi RS7', 'Audi', 900.00, 'De Audi RS7 is een luxueuze sportback die prestaties en elegantie naadloos combineert. Onder de motorkap huist een krachtige V8-motor met dubbele turbo, wat resulteert in verbluffende acceleratie en dynamiek. Het gestroomlijnde exterieurontwerp, met kenmerkende RS-elementen, straalt sportiviteit uit. Binnenin biedt het hoogwaardige materialen, geavanceerde technologie en comfort. Met zijn indrukwekkende prestaties, ruime interieur en verfijnde esthetiek, vertegenwoordigt de Audi RS7 een perfecte symbiose van luxe en sportieve rijervaring voor veeleisende autoliefhebbers.', 'audi/rs7.jpg', 2),
(7, 'Audi S3', 'Audi', 700.00, 'De Audi S3 is een compacte sportauto die bekend staat om zijn uitstekende prestaties en verfijnde stijl. Onder de motorkap bevindt zich meestal een krachtige viercilinder turbomotor, waardoor de S3 indrukwekkende acceleratie en wendbaarheid biedt. Met een sportief exterieurdesign en kenmerkende Audi-details straalt de S3 een dynamische uitstraling uit. Het interieur combineert sportieve accenten met luxe materialen en geavanceerde technologie, waardoor het een aantrekkelijke keuze is voor liefhebbers van compacte, maar krachtige sportauto\'s.', 'audi/s3.jpg', 2),
(8, 'Audi RS6', 'Audi', 1100.00, 'De Audi RS6 is een high-performance sportwagen die de perfecte balans vindt tussen luxe en brute kracht. Onder de motorkap schuilt meestal een krachtige V8-motor met dubbele turbo, wat resulteert in opmerkelijke acceleratie en indrukwekkende prestaties. Het opvallende exterieurdesign met brede wielkasten en kenmerkende RS-details straalt sportiviteit uit. Binnenin biedt de RS6 een combinatie van premium materialen en geavanceerde technologie, wat zorgt voor een luxueuze en sportieve rijervaring. Met zijn veelzijdigheid en prestatiegerichte karakter is de Audi RS6 een iconische keuze voor autoliefhebbers.', 'audi/rs6.jpg', 2),
(9, 'Volkswagen GOLF 8 GTI', 'Volkswagen', 399.00, 'De Volkswagen Golf 8 GTI is een sportieve hatchback die de traditie van de GTI-serie voortzet. Met een krachtige viercilinder turbomotor onder de motorkap biedt de Golf 8 GTI opwindende prestaties en responsieve acceleratie. Het strakke exterieurdesign combineert sportieve lijnen met kenmerkende GTI-elementen, en het interieur is voorzien van moderne technologieën en hoogwaardige materialen. Met zijn uitstekende balans tussen prestaties en dagelijks comfort biedt de Golf 8 GTI een plezierige rijervaring voor autoliefhebbers die op zoek zijn naar sportiviteit in een compacte vormfactor.', 'volkswagen/golf8.jpg', 3),
(10, 'Volkswagen GOLF 7 GTI', 'Volkswagen', 300.00, 'De Volkswagen Golf 7 GTI is een sportieve hatchback die de GTI-traditie voortzet met opwindende prestaties en een kenmerkend design. Onder de motorkap bevindt zich een krachtige turbomotor, wat zorgt voor snelle acceleratie en dynamisch rijgedrag. Het exterieur combineert scherpe lijnen met GTI-specifieke accenten, terwijl het interieur comfortabel is en hoogwaardige materialen bevat. Met zijn perfecte balans tussen sportiviteit en dagelijks gebruiksgemak is de Golf 7 GTI een geliefde keuze voor autoliefhebbers die een veelzijdige en opwindende rijervaring waarderen.', 'volkswagen/golf7.jpg', 3),
(11, 'Volkswagen POLO GTI', 'Volkswagen', 250.00, 'De Volkswagen Polo GTI is een dynamische en sportieve variant van de populaire Polo-serie. Onder de motorkap bevindt zich een krachtige turbomotor, waardoor de GTI levendige prestaties en snelle acceleratie levert. Het compacte formaat van de Polo GTI, gecombineerd met zijn sportieve styling en kenmerkende GTI-elementen, maken het een opvallende hatchback. Het interieur biedt comfort en moderne technologieën, waardoor de Polo GTI een aantrekkelijke keuze is voor liefhebbers van compacte auto\'s met een sportieve inslag.', 'volkswagen/polo.jpg', 3),
(12, 'Volkswagen Arteon R', 'Volkswagen', 199.00, 'De Volkswagen Arteon R is een krachtige en stijlvolle sportwagen die de Arteon-serie naar een nieuw niveau tilt. Onder de motorkap schuilt een indrukwekkende krachtbron, doorgaans een krachtige turbomotor, wat zorgt voor opwindende prestaties en een dynamische rijervaring. Het exterieur kenmerkt zich door zijn gestroomlijnde en elegante vormgeving, terwijl het interieur luxe en geavanceerde technologie biedt. Met zijn sportieve kenmerken en hoogwaardige afwerking biedt de Arteon R een opwindende combinatie van prestaties en comfort voor veeleisende autoliefhebbers.', 'volkswagen/arteon.jpg', 3),
(13, 'BMW M3', 'BMW', 820.00, 'De BMW M3 is een high-performance sport sedan die synoniem staat voor kracht en rijplezier. Onder de motorkap bevindt zich meestal een krachtige zescilinder TwinPower Turbo-motor, wat resulteert in verbluffende acceleratie en wendbaarheid. Het kenmerkende exterieurdesign combineert agressieve lijnen met aerodynamische elementen, terwijl het interieur hoogwaardige materialen en geavanceerde technologieën biedt. Met zijn uitstekende prestaties, precisie in het rijgedrag en luxueuze details, belichaamt de BMW M3 de essentie van sportiviteit en rijplezier in het premium sedan-segment.', 'bmw/m3.jpg', 4),
(14, 'BMW M2', 'BMW', 380.00, 'De BMW M2 is een compacte high-performance sportcoupé die opwindende prestaties en wendbaarheid levert. Onder de motorkap bevindt zich meestal een krachtige zescilinder TwinPower Turbo-motor, wat resulteert in snelle acceleratie en een dynamische rijervaring. Het kenmerkende exterieurdesign straalt sportiviteit uit met gespierde vormen en karakteristieke M-details. Binnenin biedt de M2 een combinatie van luxe materialen en moderne technologieën. Met zijn compacte formaat en indrukwekkende prestaties biedt de BMW M2 een opwindende en doelgerichte rijbeleving voor liefhebbers van sportauto\'s.', 'bmw/m2.jpg', 4),
(15, 'BMW M5', 'BMW', 1550.00, 'De BMW M5 is een high-performance sportsedan die de perfecte combinatie biedt van luxe en kracht. Onder de motorkap bevindt zich doorgaans een indrukwekkende V8-motor met TwinPower Turbo-technologie, wat resulteert in verbluffende acceleratie en een indrukwekkende dynamiek. Het exterieur combineert stijlvolle lijnen met agressieve M-details, terwijl het interieur premium materialen en geavanceerde technologieën biedt. Met zijn uitstekende prestaties, verfijnde rijkwaliteit en luxe kenmerken belichaamt de BMW M5 de essentie van een krachtige, doch comfortabele sportsedan voor veeleisende autoliefhebbers.', 'bmw/m5.jpg', 4),
(16, 'BMW M4', 'BMW', 1800.00, 'De BMW M4 is een high-performance sportcoupé die opwindende prestaties en een indrukwekkend design biedt. Onder de motorkap huist meestal een krachtige zescilinder TwinPower Turbo-motor, wat zorgt voor snelle acceleratie en dynamisch rijgedrag. Het kenmerkende exterieurdesign combineert gespierde lijnen met aerodynamische elementen, terwijl het interieur luxe materialen en geavanceerde technologieën bevat. Met zijn sportieve karakter, wendbaarheid en uitmuntende prestaties, biedt de BMW M4 een meeslepende rijervaring voor autoliefhebbers die op zoek zijn naar een compromisloze sportcoupé.', 'bmw/m4.jpg', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `name`, `picture`, `description`) VALUES
(1, 'Mercedes-Benz', 'categories/mercedes.png', 'Een roeitrainer is een fitnessapparaat waarmee je het hele lichaam traint. Met een roeitrainer, ook wel roeitoestel of roeimachine, genoemd, boots je de roeibeweging op het water na. Je hebt daarbij voornamelijk je armen, benen en rugspieren nodig, waardoor het een complete workout is. Roeiapparaten zijn er in vele soorten en prijsklassen. '),
(2, 'Audi', 'categories/audi-logo.jpg', 'Een crosstrainer is een fitnessapparaat waarmee je jouw hele lichaam traint. Je maakt namelijk een beweging met zowel je benen als je armen. Daarnaast train je ook de spieren in je core (buik en onderrug), borst, rug en schouders. Zowel in sportscholen als bij thuisgebruik zijn crosstrainers (ook wel elliptical machine genoemd) al geruime tijd een van de populairste fitnessapparaten.'),
(3, 'Volkswagen', 'categories/volkswagen-logo.jpg', '\r\nEen hometrainer is het meest bekende fitnessapparaat voor thuisgebruik en staat ook wel bekend als fitness fiets. Wat is er nu prettiger dan thuis op je gemak te kunnen werken aan je conditie? Met een hometrainer kun je eenvoudig meerdere spiergroepen trainen en je uithoudingsvermogen verbeteren. Daarnaast bepaal je zelf het tempo, het trainingsniveau en het tijdstip van je training.'),
(4, 'BMW', 'categories/bmw-logo.jpg', 'Een loopband is een veelzijdig fitnessapparaat. Een loopband wordt gebruikt om conditie te verbeteren en vetpercentage te verlagen, maar kan ook ingezet worden voor revalidatie. Het voordeel van een loopband is dat je thuis kunt trainen wanneer het jou uitkomt. Heb je er genoeg van om ‘s avonds in het donker of door weer en wind te lopen, of zou je je spieren, pezen en botten willen ontlasten tijdens het (hard)lopen? Dan is een loopband voor jou de beste oplossing!');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `name`, `text`, `product_id`, `rating`, `subject`) VALUES
(1, 'mercedes', 'goeie auto', 1, '4', 'auto'),
(2, 'asa', 'asa', 1, '2', 'asas'),
(3, 'Arda', 'Hele fijne auto.', 1, '5', 'Mercedes A45s');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` enum('member','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(6, 'arda@gmail.com', 'a', 'a', 'a', 'member'),
(7, 'a@gmail.com', 'a', 'a', 'a', 'member'),
(8, 'aa2@gmail.com', 'a', 'a', 'a', 'member'),
(9, 'admin@gmail.com', 'admin', 'admin', 'a', 'admin'),
(12, 'aa3@gmail.com', 'a', 'aa', 'a', 'member'),
(13, 'sasa@gmail.com', '1', 'sasa', 'bloem', 'member');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `autos_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `autos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
