-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 22 Mars 2018 à 09:55
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog-alaska`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `user`, `password`) VALUES
(1, 'admin', '$2y$10$eEKW0IkRd6nmZAj07KrcouA/UxglHWShnDbULdGQGSt9TxPd1MZGG');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `article` text NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `intro`, `article`, `post_date`) VALUES
(1, 'L\'aventure commence !', 'Et les galères aussi...', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum eget tortor vel eleifend. Duis convallis porta interdum. Vivamus sollicitudin efficitur sem. Vestibulum luctus, urna et ultricies tempus, nunc velit rutrum velit, at sagittis ipsum lacus vitae turpis. Pellentesque pharetra, ex eu pharetra lobortis, metus enim vestibulum ligula, non bibendum risus nisl at nisi. Sed vestibulum posuere orci non dapibus. Cras metus diam, cursus sed finibus eget, lobortis vitae dolor. Pellentesque ante lorem, eleifend a dolor sed, ornare lacinia quam. Duis posuere, libero at facilisis placerat, ex magna rhoncus nulla, et rhoncus risus ipsum at neque. Vestibulum in mattis augue, at tristique dui. Praesent ut rhoncus odio, non sodales metus. Aenean vehicula elit in diam congue, sed porta quam euismod.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Vivamus vestibulum sagittis lectus, suscipit dapibus nisi hendrerit non. Donec condimentum, sem id convallis bibendum, elit lacus euismod lectus, ac accumsan sem dolor at magna. Fusce placerat nibh et neque interdum, nec fermentum sem venenatis. Phasellus fringilla nibh id ligula placerat, molestie tincidunt felis facilisis. Sed mattis justo in eros condimentum egestas. Nulla sed enim a ex accumsan ullamcorper in in enim. Pellentesque vel magna ut eros bibendum auctor ut a quam. Aenean vulputate nulla et leo scelerisque, eu condimentum libero congue. Morbi facilisis rutrum turpis vitae sollicitudin. Curabitur dignissim purus nec nibh pharetra malesuada. Integer viverra venenatis placerat. Vestibulum semper tincidunt sem, sed efficitur risus ultrices quis.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Integer facilisis nisi diam, quis congue lacus finibus et. Suspendisse faucibus ante mattis, condimentum risus non, malesuada diam. Sed at suscipit enim, ut sagittis lectus. Etiam pretium consectetur cursus. Mauris risus neque, vulputate vel dolor quis, tincidunt faucibus tortor. Nullam felis lectus, commodo non placerat a, pretium sed turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam molestie orci in risus tempor mattis. Nullam sit amet sapien fringilla, imperdiet dolor at, condimentum mauris. Proin blandit ullamcorper odio, eget luctus nisl condimentum sit amet. Curabitur id congue urna. Cras finibus neque mauris, nec ullamcorper odio ultricies ac. Ut mattis fringilla nibh, venenatis sodales mauris fringilla non. Morbi at tellus ut nisl consectetur mollis ac quis nulla.</p>', '2018-03-14'),
(2, 'La route est pleine d\'embuches...', '... Mais il y a toujours un moyen de les contourner.', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum eget tortor vel eleifend. Duis convallis porta interdum. Vivamus sollicitudin efficitur sem. Vestibulum luctus, urna et ultricies tempus, nunc velit rutrum velit, at sagittis ipsum lacus vitae turpis. Pellentesque pharetra, ex eu pharetra lobortis, metus enim vestibulum ligula, non bibendum risus nisl at nisi. Sed vestibulum posuere orci non dapibus. Cras metus diam, cursus sed finibus eget, lobortis vitae dolor. Pellentesque ante lorem, eleifend a dolor sed, ornare lacinia quam. Duis posuere, libero at facilisis placerat, ex magna rhoncus nulla, et rhoncus risus ipsum at neque. Vestibulum in mattis augue, at tristique dui. Praesent ut rhoncus odio, non sodales metus. Aenean vehicula elit in diam congue, sed porta quam euismod.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Vivamus vestibulum sagittis lectus, suscipit dapibus nisi hendrerit non. Donec condimentum, sem id convallis bibendum, elit lacus euismod lectus, ac accumsan sem dolor at magna. Fusce placerat nibh et neque interdum, nec fermentum sem venenatis. Phasellus fringilla nibh id ligula placerat, molestie tincidunt felis facilisis. Sed mattis justo in eros condimentum egestas. Nulla sed enim a ex accumsan ullamcorper in in enim. Pellentesque vel magna ut eros bibendum auctor ut a quam. Aenean vulputate nulla et leo scelerisque, eu condimentum libero congue. Morbi facilisis rutrum turpis vitae sollicitudin. Curabitur dignissim purus nec nibh pharetra malesuada. Integer viverra venenatis placerat. Vestibulum semper tincidunt sem, sed efficitur risus ultrices quis.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Integer facilisis nisi diam, quis congue lacus finibus et. Suspendisse faucibus ante mattis, condimentum risus non, malesuada diam. Sed at suscipit enim, ut sagittis lectus. Etiam pretium consectetur cursus. Mauris risus neque, vulputate vel dolor quis, tincidunt faucibus tortor. Nullam felis lectus, commodo non placerat a, pretium sed turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam molestie orci in risus tempor mattis. Nullam sit amet sapien fringilla, imperdiet dolor at, condimentum mauris. Proin blandit ullamcorper odio, eget luctus nisl condimentum sit amet. Curabitur id congue urna. Cras finibus neque mauris, nec ullamcorper odio ultricies ac. Ut mattis fringilla nibh, venenatis sodales mauris fringilla non. Morbi at tellus ut nisl consectetur mollis ac quis nulla.</p>', '2018-03-16'),
(3, 'Les montagnes se dessinent à l\'horizon.', 'Le froid commence à se faire ressentir.', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum eget tortor vel eleifend. Duis convallis porta interdum. Vivamus sollicitudin efficitur sem. Vestibulum luctus, urna et ultricies tempus, nunc velit rutrum velit, at sagittis ipsum lacus vitae turpis. Pellentesque pharetra, ex eu pharetra lobortis, metus enim vestibulum ligula, non bibendum risus nisl at nisi. Sed vestibulum posuere orci non dapibus. Cras metus diam, cursus sed finibus eget, lobortis vitae dolor. Pellentesque ante lorem, eleifend a dolor sed, ornare lacinia quam. Duis posuere, libero at facilisis placerat, ex magna rhoncus nulla, et rhoncus risus ipsum at neque. Vestibulum in mattis augue, at tristique dui. Praesent ut rhoncus odio, non sodales metus. Aenean vehicula elit in diam congue, sed porta quam euismod.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Vivamus vestibulum sagittis lectus, suscipit dapibus nisi hendrerit non. Donec condimentum, sem id convallis bibendum, elit lacus euismod lectus, ac accumsan sem dolor at magna. Fusce placerat nibh et neque interdum, nec fermentum sem venenatis. Phasellus fringilla nibh id ligula placerat, molestie tincidunt felis facilisis. Sed mattis justo in eros condimentum egestas. Nulla sed enim a ex accumsan ullamcorper in in enim. Pellentesque vel magna ut eros bibendum auctor ut a quam. Aenean vulputate nulla et leo scelerisque, eu condimentum libero congue. Morbi facilisis rutrum turpis vitae sollicitudin. Curabitur dignissim purus nec nibh pharetra malesuada. Integer viverra venenatis placerat. Vestibulum semper tincidunt sem, sed efficitur risus ultrices quis.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Integer facilisis nisi diam, quis congue lacus finibus et. Suspendisse faucibus ante mattis, condimentum risus non, malesuada diam. Sed at suscipit enim, ut sagittis lectus. Etiam pretium consectetur cursus. Mauris risus neque, vulputate vel dolor quis, tincidunt faucibus tortor. Nullam felis lectus, commodo non placerat a, pretium sed turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam molestie orci in risus tempor mattis. Nullam sit amet sapien fringilla, imperdiet dolor at, condimentum mauris. Proin blandit ullamcorper odio, eget luctus nisl condimentum sit amet. Curabitur id congue urna. Cras finibus neque mauris, nec ullamcorper odio ultricies ac. Ut mattis fringilla nibh, venenatis sodales mauris fringilla non. Morbi at tellus ut nisl consectetur mollis ac quis nulla.</p>', '2018-03-17'),
(4, 'La toundra glacée.', 'Une sacrée épreuve.', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum eget tortor vel eleifend. Duis convallis porta interdum. Vivamus sollicitudin efficitur sem. Vestibulum luctus, urna et ultricies tempus, nunc velit rutrum velit, at sagittis ipsum lacus vitae turpis. Pellentesque pharetra, ex eu pharetra lobortis, metus enim vestibulum ligula, non bibendum risus nisl at nisi. Sed vestibulum posuere orci non dapibus. Cras metus diam, cursus sed finibus eget, lobortis vitae dolor. Pellentesque ante lorem, eleifend a dolor sed, ornare lacinia quam. Duis posuere, libero at facilisis placerat, ex magna rhoncus nulla, et rhoncus risus ipsum at neque. Vestibulum in mattis augue, at tristique dui. Praesent ut rhoncus odio, non sodales metus. Aenean vehicula elit in diam congue, sed porta quam euismod.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Vivamus vestibulum sagittis lectus, suscipit dapibus nisi hendrerit non. Donec condimentum, sem id convallis bibendum, elit lacus euismod lectus, ac accumsan sem dolor at magna. Fusce placerat nibh et neque interdum, nec fermentum sem venenatis. Phasellus fringilla nibh id ligula placerat, molestie tincidunt felis facilisis. Sed mattis justo in eros condimentum egestas. Nulla sed enim a ex accumsan ullamcorper in in enim. Pellentesque vel magna ut eros bibendum auctor ut a quam. Aenean vulputate nulla et leo scelerisque, eu condimentum libero congue. Morbi facilisis rutrum turpis vitae sollicitudin. Curabitur dignissim purus nec nibh pharetra malesuada. Integer viverra venenatis placerat. Vestibulum semper tincidunt sem, sed efficitur risus ultrices quis.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Integer facilisis nisi diam, quis congue lacus finibus et. Suspendisse faucibus ante mattis, condimentum risus non, malesuada diam. Sed at suscipit enim, ut sagittis lectus. Etiam pretium consectetur cursus. Mauris risus neque, vulputate vel dolor quis, tincidunt faucibus tortor. Nullam felis lectus, commodo non placerat a, pretium sed turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam molestie orci in risus tempor mattis. Nullam sit amet sapien fringilla, imperdiet dolor at, condimentum mauris. Proin blandit ullamcorper odio, eget luctus nisl condimentum sit amet. Curabitur id congue urna. Cras finibus neque mauris, nec ullamcorper odio ultricies ac. Ut mattis fringilla nibh, venenatis sodales mauris fringilla non. Morbi at tellus ut nisl consectetur mollis ac quis nulla.</p>', '2018-03-18'),
(5, 'J\'atteins enfin le mont Arreat.', 'Ses neiges éternelles sont merveilleuses.', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum eget tortor vel eleifend. Duis convallis porta interdum. Vivamus sollicitudin efficitur sem. Vestibulum luctus, urna et ultricies tempus, nunc velit rutrum velit, at sagittis ipsum lacus vitae turpis. Pellentesque pharetra, ex eu pharetra lobortis, metus enim vestibulum ligula, non bibendum risus nisl at nisi. Sed vestibulum posuere orci non dapibus. Cras metus diam, cursus sed finibus eget, lobortis vitae dolor. Pellentesque ante lorem, eleifend a dolor sed, ornare lacinia quam. Duis posuere, libero at facilisis placerat, ex magna rhoncus nulla, et rhoncus risus ipsum at neque. Vestibulum in mattis augue, at tristique dui. Praesent ut rhoncus odio, non sodales metus. Aenean vehicula elit in diam congue, sed porta quam euismod.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Vivamus vestibulum sagittis lectus, suscipit dapibus nisi hendrerit non. Donec condimentum, sem id convallis bibendum, elit lacus euismod lectus, ac accumsan sem dolor at magna. Fusce placerat nibh et neque interdum, nec fermentum sem venenatis. Phasellus fringilla nibh id ligula placerat, molestie tincidunt felis facilisis. Sed mattis justo in eros condimentum egestas. Nulla sed enim a ex accumsan ullamcorper in in enim. Pellentesque vel magna ut eros bibendum auctor ut a quam. Aenean vulputate nulla et leo scelerisque, eu condimentum libero congue. Morbi facilisis rutrum turpis vitae sollicitudin. Curabitur dignissim purus nec nibh pharetra malesuada. Integer viverra venenatis placerat. Vestibulum semper tincidunt sem, sed efficitur risus ultrices quis.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Integer facilisis nisi diam, quis congue lacus finibus et. Suspendisse faucibus ante mattis, condimentum risus non, malesuada diam. Sed at suscipit enim, ut sagittis lectus. Etiam pretium consectetur cursus. Mauris risus neque, vulputate vel dolor quis, tincidunt faucibus tortor. Nullam felis lectus, commodo non placerat a, pretium sed turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam molestie orci in risus tempor mattis. Nullam sit amet sapien fringilla, imperdiet dolor at, condimentum mauris. Proin blandit ullamcorper odio, eget luctus nisl condimentum sit amet. Curabitur id congue urna. Cras finibus neque mauris, nec ullamcorper odio ultricies ac. Ut mattis fringilla nibh, venenatis sodales mauris fringilla non. Morbi at tellus ut nisl consectetur mollis ac quis nulla.</p>', '2018-03-19'),
(6, 'Des crevasses énormes.', 'Je doit constamment être attentif.', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum eget tortor vel eleifend. Duis convallis porta interdum. Vivamus sollicitudin efficitur sem. Vestibulum luctus, urna et ultricies tempus, nunc velit rutrum velit, at sagittis ipsum lacus vitae turpis. Pellentesque pharetra, ex eu pharetra lobortis, metus enim vestibulum ligula, non bibendum risus nisl at nisi. Sed vestibulum posuere orci non dapibus. Cras metus diam, cursus sed finibus eget, lobortis vitae dolor. Pellentesque ante lorem, eleifend a dolor sed, ornare lacinia quam. Duis posuere, libero at facilisis placerat, ex magna rhoncus nulla, et rhoncus risus ipsum at neque. Vestibulum in mattis augue, at tristique dui. Praesent ut rhoncus odio, non sodales metus. Aenean vehicula elit in diam congue, sed porta quam euismod.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Vivamus vestibulum sagittis lectus, suscipit dapibus nisi hendrerit non. Donec condimentum, sem id convallis bibendum, elit lacus euismod lectus, ac accumsan sem dolor at magna. Fusce placerat nibh et neque interdum, nec fermentum sem venenatis. Phasellus fringilla nibh id ligula placerat, molestie tincidunt felis facilisis. Sed mattis justo in eros condimentum egestas. Nulla sed enim a ex accumsan ullamcorper in in enim. Pellentesque vel magna ut eros bibendum auctor ut a quam. Aenean vulputate nulla et leo scelerisque, eu condimentum libero congue. Morbi facilisis rutrum turpis vitae sollicitudin. Curabitur dignissim purus nec nibh pharetra malesuada. Integer viverra venenatis placerat. Vestibulum semper tincidunt sem, sed efficitur risus ultrices quis.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Integer facilisis nisi diam, quis congue lacus finibus et. Suspendisse faucibus ante mattis, condimentum risus non, malesuada diam. Sed at suscipit enim, ut sagittis lectus. Etiam pretium consectetur cursus. Mauris risus neque, vulputate vel dolor quis, tincidunt faucibus tortor. Nullam felis lectus, commodo non placerat a, pretium sed turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam molestie orci in risus tempor mattis. Nullam sit amet sapien fringilla, imperdiet dolor at, condimentum mauris. Proin blandit ullamcorper odio, eget luctus nisl condimentum sit amet. Curabitur id congue urna. Cras finibus neque mauris, nec ullamcorper odio ultricies ac. Ut mattis fringilla nibh, venenatis sodales mauris fringilla non. Morbi at tellus ut nisl consectetur mollis ac quis nulla.</p>', '2018-03-21'),
(7, 'L\'organisation n\'est pas à prendre à la légère.', 'Je crois que je commence à manquer de vivres...', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum eget tortor vel eleifend. Duis convallis porta interdum. Vivamus sollicitudin efficitur sem. Vestibulum luctus, urna et ultricies tempus, nunc velit rutrum velit, at sagittis ipsum lacus vitae turpis. Pellentesque pharetra, ex eu pharetra lobortis, metus enim vestibulum ligula, non bibendum risus nisl at nisi. Sed vestibulum posuere orci non dapibus. Cras metus diam, cursus sed finibus eget, lobortis vitae dolor. Pellentesque ante lorem, eleifend a dolor sed, ornare lacinia quam. Duis posuere, libero at facilisis placerat, ex magna rhoncus nulla, et rhoncus risus ipsum at neque. Vestibulum in mattis augue, at tristique dui. Praesent ut rhoncus odio, non sodales metus. Aenean vehicula elit in diam congue, sed porta quam euismod.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Vivamus vestibulum sagittis lectus, suscipit dapibus nisi hendrerit non. Donec condimentum, sem id convallis bibendum, elit lacus euismod lectus, ac accumsan sem dolor at magna. Fusce placerat nibh et neque interdum, nec fermentum sem venenatis. Phasellus fringilla nibh id ligula placerat, molestie tincidunt felis facilisis. Sed mattis justo in eros condimentum egestas. Nulla sed enim a ex accumsan ullamcorper in in enim. Pellentesque vel magna ut eros bibendum auctor ut a quam. Aenean vulputate nulla et leo scelerisque, eu condimentum libero congue. Morbi facilisis rutrum turpis vitae sollicitudin. Curabitur dignissim purus nec nibh pharetra malesuada. Integer viverra venenatis placerat. Vestibulum semper tincidunt sem, sed efficitur risus ultrices quis.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Integer facilisis nisi diam, quis congue lacus finibus et. Suspendisse faucibus ante mattis, condimentum risus non, malesuada diam. Sed at suscipit enim, ut sagittis lectus. Etiam pretium consectetur cursus. Mauris risus neque, vulputate vel dolor quis, tincidunt faucibus tortor. Nullam felis lectus, commodo non placerat a, pretium sed turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam molestie orci in risus tempor mattis. Nullam sit amet sapien fringilla, imperdiet dolor at, condimentum mauris. Proin blandit ullamcorper odio, eget luctus nisl condimentum sit amet. Curabitur id congue urna. Cras finibus neque mauris, nec ullamcorper odio ultricies ac. Ut mattis fringilla nibh, venenatis sodales mauris fringilla non. Morbi at tellus ut nisl consectetur mollis ac quis nulla.</p>', '2018-03-22');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `reported` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `reported`) VALUES
(26, 1, 'Tom', 'L\'aventure commence plutot bien.\r\nPourvu que ça dure ! :D', '2018-03-15 19:41:29', 0),
(27, 1, 'Arthur', 'J\'ai hate de voir ce que donne la suite.... C\'est intriguant !', '2018-03-17 10:40:02', 0),
(28, 1, 'Antoine', 'Oui, la suite, la suite, la suite !!', '2018-03-18 14:22:39', 0),
(29, 2, 'Patrick', 'Ouha, je pensais pas m\'attacher autant au personnage...', '2018-03-20 04:17:23', 0),
(30, 2, 'Bob', 'Passionnant. Quelle plume !', '2018-03-20 12:22:25', 0);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `message` text NOT NULL,
  `message_date` datetime NOT NULL,
  `viewed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `username`, `email`, `message`, `message_date`, `viewed`) VALUES
(4, 'Tom', 'tom.binch@gmail.com', 'Salut,\r\nCa va toi?\r\nTrop cool le bouqin.\r\nJe suis moi-même un vrai mordu de lecture. ;)', '2018-03-16 09:51:49', 1),
(5, 'Antoine', 'antoinou54@gmail.com', 'Coucou !\r\nJ\'adore ton livre. Je peux avoir une dédicasse?\r\nCordialement', '2018-03-22 09:54:03', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
