<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-29 07:12:06 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-29 07:12:06 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-29 07:12:06 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-29 07:30:57 --> ErrorException [ 8 ]: Undefined variable: data ~ /home/trias/htdocs/ataba_express/application/modules/cabang/controllers/Cabang.php [ 134 ]
ERROR - 2017-09-29 07:30:57 --> ErrorException [ 8 ]: Undefined variable: page_name ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 07:30:57 --> ErrorException [ 2 ]: include(.php): failed to open stream: No such file or directory ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 07:30:57 --> ErrorException [ 2 ]: include(): Failed opening '.php' for inclusion (include_path='.:/opt/lampp/lib/php') ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 07:31:09 --> ErrorException [ 8 ]: Undefined variable: page_name ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 07:31:09 --> ErrorException [ 2 ]: include(.php): failed to open stream: No such file or directory ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 07:31:09 --> ErrorException [ 2 ]: include(): Failed opening '.php' for inclusion (include_path='.:/opt/lampp/lib/php') ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 07:31:38 --> ErrorException [ 8 ]: Undefined variable: page_name ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 07:31:38 --> ErrorException [ 2 ]: include(.php): failed to open stream: No such file or directory ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 07:31:38 --> ErrorException [ 2 ]: include(): Failed opening '.php' for inclusion (include_path='.:/opt/lampp/lib/php') ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 07:52:13 --> Query error: Unknown column 'a.tracking_code' in 'field list' - Invalid query: SELECT `a`.`tracking_code`, `b`.`nama` AS `tujuan`, CONCAT(a.pengirim, '<br />', a.telp_pengirim) AS pengirim, CONCAT(a.penerima, '<br />', `a`.`telp_pengirim`, '<br />', a.alamat_penerima) AS penerima
FROM `paket`
LEFT JOIN `cabang` `b` ON `a`.`tujuan_id` = `b`.`id`
WHERE `asal_id` = '4'
ERROR - 2017-09-29 07:52:13 --> ErrorException [ 1 ]: Error Number: 1054 / Unknown column 'a.tracking_code' in 'field list' / SELECT `a`.`tracking_code`, `b`.`nama` AS `tujuan`, CONCAT(a.pengirim, '', a.telp_pengirim) AS pengirim, CONCAT(a.penerima, '', `a`.`telp_pengirim`, '', a.alamat_penerima) AS penerima
FROM `paket`
LEFT JOIN `cabang` `b` ON `a`.`tujuan_id` = `b`.`id`
WHERE `asal_id` = '4' / Filename: modules/cabang/controllers/Cabang.php / Line Number: 144 ~ /home/trias/htdocs/ataba_express/application/modules/cabang/controllers/Cabang.php [ 144 ]
ERROR - 2017-09-29 08:56:34 --> ErrorException [ 8 ]: Undefined variable: cabang ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/cetak_resi.php [ 35 ]
ERROR - 2017-09-29 09:00:12 --> ErrorException [ 8 ]: Undefined index: nama_pengirim ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/cetak_resi.php [ 77 ]
ERROR - 2017-09-29 09:08:19 --> ErrorException [ 8 ]: Undefined variable: page_name ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 09:08:19 --> ErrorException [ 2 ]: include(.php): failed to open stream: No such file or directory ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 09:08:19 --> ErrorException [ 2 ]: include(): Failed opening '.php' for inclusion (include_path='.:/opt/lampp/lib/php') ~ /home/trias/htdocs/ataba_express/application/modules/cabang/views/master.php [ 152 ]
ERROR - 2017-09-29 09:12:51 --> Query error: Unknown column '-a.id' in 'field list' - Invalid query: SELECT `-a`.`id`, `a`.`tracking_code`, `b`.`nama` AS `tujuan`, `c`.`nama` AS `asal`, CONCAT(a.pengirim, '<br />', `a`.`telp_pengirim`, '<br />', a.alamat_pengirim) AS pengirim, CONCAT(a.penerima, '<br />', `a`.`telp_pengirim`, '<br />', a.alamat_penerima) AS penerima
FROM `paket` `a`
LEFT JOIN `cabang` `b` ON `a`.`tujuan_id` = `b`.`id`
LEFT JOIN `cabang` `c` ON `a`.`asal_id` = `c`.`id`
WHERE `b`.`kantor_pusat` = '4'
ERROR - 2017-09-29 09:12:51 --> ErrorException [ 1 ]: Error Number: 1054 / Unknown column '-a.id' in 'field list' / SELECT `-a`.`id`, `a`.`tracking_code`, `b`.`nama` AS `tujuan`, `c`.`nama` AS `asal`, CONCAT(a.pengirim, '', `a`.`telp_pengirim`, '', a.alamat_pengirim) AS pengirim, CONCAT(a.penerima, '', `a`.`telp_pengirim`, '', a.alamat_penerima) AS penerima
FROM `paket` `a`
LEFT JOIN `cabang` `b` ON `a`.`tujuan_id` = `b`.`id`
LEFT JOIN `cabang` `c` ON `a`.`asal_id` = `c`.`id`
WHERE `b`.`kantor_pusat` = '4' / Filename: modules/cabang/controllers/Cabang.php / Line Number: 171 ~ /home/trias/htdocs/ataba_express/application/modules/cabang/controllers/Cabang.php [ 171 ]
ERROR - 2017-09-29 09:20:33 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-29 09:20:33 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-29 09:20:33 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-29 11:14:05 --> ErrorException [ 2 ]: file_put_contents(/home/trias/htdocs/ataba_express/uploads/barcode/resi.png): failed to open stream: No such file or directory ~ /home/trias/htdocs/ataba_express/application/libraries/Barcode/drawer/BCGDrawPNG.php [ 65 ]
ERROR - 2017-09-29 06:14:05 --> ErrorException [ 1 ]: URL yang anda submit memiliki karakter yang tidak diijinkan. ~  [ 0 ]
ERROR - 2017-09-29 11:14:09 --> ErrorException [ 2 ]: file_put_contents(/home/trias/htdocs/ataba_express/uploads/barcode/resi.png): failed to open stream: No such file or directory ~ /home/trias/htdocs/ataba_express/application/libraries/Barcode/drawer/BCGDrawPNG.php [ 65 ]
ERROR - 2017-09-29 12:21:53 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-29 12:21:53 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
ERROR - 2017-09-29 12:21:53 --> ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /home/trias/htdocs/ataba_express/application/controllers/Thumb.php:283) ~ /home/trias/htdocs/ataba_express/system-3.1.5/core/Common.php [ 570 ]
