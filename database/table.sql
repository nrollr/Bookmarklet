CREATE TABLE `bookmarks` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`hash` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
	`url` text COLLATE utf8_unicode_ci NOT NULL,
	`title` text COLLATE utf8_unicode_ci NOT NULL,
	`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	UNIQUE KEY `hash` (`hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
