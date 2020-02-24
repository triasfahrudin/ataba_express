<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-25 05:04:14 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 05:04:14 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 05:04:14 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 07:57:38 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 07:57:38 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 09:00:49 --> Query error: Unknown column '-a.tracking_code' in 'field list' - Invalid query: SELECT `-a`.`tracking_code`, `b`.`nama` AS `asal_paket`, `c`.`nama` AS `tujuan_paket`, CONCAT(a.pengirim, '<br />', `a`.`telp_pengirim`, '<br />', a.alamat_pengirim) AS pengirim, CONCAT(a.penerima, '<br />', `a`.`telp_penerima`, '<br />', a.alamat_penerima) AS penerima, CONCAT('Isi Paket:', `a`.`isi_paket`, '<br />Berat: ', `a`.`berat`, ' Kg', '<br />', a.catatan) AS detail
FROM `paket` `a`
LEFT JOIN `cabang` `b` ON `a`.`asal_id` = `b`.`id`
LEFT JOIN `cabang` `c` ON `a`.`tujuan_id` = `c`.`id`
WHERE `a`.`tracking_code` = 's'
ERROR - 2017-09-25 09:00:49 --> ErrorException [ 1 ]: Error Number: 1054 / Unknown column '-a.tracking_code' in 'field list' / SELECT `-a`.`tracking_code`, `b`.`nama` AS `asal_paket`, `c`.`nama` AS `tujuan_paket`, CONCAT(a.pengirim, '', `a`.`telp_pengirim`, '', a.alamat_pengirim) AS pengirim, CONCAT(a.penerima, '', `a`.`telp_penerima`, '', a.alamat_penerima) AS penerima, CONCAT('Isi Paket:', `a`.`isi_paket`, 'Berat: ', `a`.`berat`, ' Kg', '', a.catatan) AS detail
FROM `paket` `a`
LEFT JOIN `cabang` `b` ON `a`.`asal_id` = `b`.`id`
LEFT JOIN `cabang` `c` ON `a`.`tujuan_id` = `c`.`id`
WHERE `a`.`tracking_code` = 's' / Filename: modules/cabang/controllers/Cabang.php / Line Number: 152 ~ /home/trias/htdocs/ataba_express/application/modules/cabang/controllers/Cabang.php [ 152 ]
ERROR - 2017-09-25 09:00:54 --> Query error: Unknown column '-a.tracking_code' in 'field list' - Invalid query: SELECT `-a`.`tracking_code`, `b`.`nama` AS `asal_paket`, `c`.`nama` AS `tujuan_paket`, CONCAT(a.pengirim, '<br />', `a`.`telp_pengirim`, '<br />', a.alamat_pengirim) AS pengirim, CONCAT(a.penerima, '<br />', `a`.`telp_penerima`, '<br />', a.alamat_penerima) AS penerima, CONCAT('Isi Paket:', `a`.`isi_paket`, '<br />Berat: ', `a`.`berat`, ' Kg', '<br />', a.catatan) AS detail
FROM `paket` `a`
LEFT JOIN `cabang` `b` ON `a`.`asal_id` = `b`.`id`
LEFT JOIN `cabang` `c` ON `a`.`tujuan_id` = `c`.`id`
WHERE `a`.`tracking_code` = 'sb'
ERROR - 2017-09-25 09:00:54 --> ErrorException [ 1 ]: Error Number: 1054 / Unknown column '-a.tracking_code' in 'field list' / SELECT `-a`.`tracking_code`, `b`.`nama` AS `asal_paket`, `c`.`nama` AS `tujuan_paket`, CONCAT(a.pengirim, '', `a`.`telp_pengirim`, '', a.alamat_pengirim) AS pengirim, CONCAT(a.penerima, '', `a`.`telp_penerima`, '', a.alamat_penerima) AS penerima, CONCAT('Isi Paket:', `a`.`isi_paket`, 'Berat: ', `a`.`berat`, ' Kg', '', a.catatan) AS detail
FROM `paket` `a`
LEFT JOIN `cabang` `b` ON `a`.`asal_id` = `b`.`id`
LEFT JOIN `cabang` `c` ON `a`.`tujuan_id` = `c`.`id`
WHERE `a`.`tracking_code` = 'sb' / Filename: modules/cabang/controllers/Cabang.php / Line Number: 152 ~ /home/trias/htdocs/ataba_express/application/modules/cabang/controllers/Cabang.php [ 152 ]
ERROR - 2017-09-25 09:41:32 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 09:41:32 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 10:07:20 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 10:07:20 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 10:07:20 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 13:10:44 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 13:10:44 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-25 13:10:44 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
