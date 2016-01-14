CREATE TABLE IF NOT EXISTS `tb_boxes` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(120) COLLATE utf8_unicode_ci DEFAULT '',
  `thumb` varchar(88) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
