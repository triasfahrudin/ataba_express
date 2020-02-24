<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-17 00:02:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%to%' OR jk -LIKE '%to%' OR nama_lembaga -LIKE '%to%' OR program_studi -LI' at line 4 - Invalid query: SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap`
FROM `pendaftar`
WHERE `kategori_id` = '5'
AND (kab_kota -LIKE '%to%' OR jk -LIKE '%to%' OR nama_lembaga -LIKE '%to%' OR program_studi -LIKE '%to%' OR akreditasi -LIKE '%to%' OR semester -LIKE '%to%' OR ip_semester -LIKE '%to%' )
ORDER BY `nama_lengkap` ASC
 LIMIT 10
ERROR - 2017-09-17 00:02:04 --> ErrorException [ 1 ]: Error Number: 1064 / You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%to%' OR jk -LIKE '%to%' OR nama_lembaga -LIKE '%to%' OR program_studi -LI' at line 4 / SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap`
FROM `pendaftar`
WHERE `kategori_id` = '5'
AND (kab_kota -LIKE '%to%' OR jk -LIKE '%to%' OR nama_lembaga -LIKE '%to%' OR program_studi -LIKE '%to%' OR akreditasi -LIKE '%to%' OR semester -LIKE '%to%' OR ip_semester -LIKE '%to%' )
ORDER BY `nama_lengkap` ASC
 LIMIT 10 / Filename: libraries/Datatables.php / Line Number: 354 ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 354 ]
ERROR - 2017-09-17 00:03:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%ton%' OR jk -LIKE '%ton%' OR nama_lembaga -LIKE '%ton%' OR program_studi ' at line 4 - Invalid query: SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '5'
AND (kab_kota -LIKE '%ton%' OR jk -LIKE '%ton%' OR nama_lembaga -LIKE '%ton%' OR program_studi -LIKE '%ton%' OR akreditasi -LIKE '%ton%' OR semester -LIKE '%ton%' OR ip_semester -LIKE '%ton%' )
ORDER BY `nama_lengkap` ASC
 LIMIT 10
ERROR - 2017-09-17 00:03:12 --> ErrorException [ 1 ]: Error Number: 1064 / You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%ton%' OR jk -LIKE '%ton%' OR nama_lembaga -LIKE '%ton%' OR program_studi ' at line 4 / SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '5'
AND (kab_kota -LIKE '%ton%' OR jk -LIKE '%ton%' OR nama_lembaga -LIKE '%ton%' OR program_studi -LIKE '%ton%' OR akreditasi -LIKE '%ton%' OR semester -LIKE '%ton%' OR ip_semester -LIKE '%ton%' )
ORDER BY `nama_lengkap` ASC
 LIMIT 10 / Filename: libraries/Datatables.php / Line Number: 354 ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 354 ]
ERROR - 2017-09-17 02:16:34 --> ErrorException [ 8 ]: Undefined index:  ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 331 ]
ERROR - 2017-09-17 02:16:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%y%' OR `kab_kota` LIKE '%y%' OR `jk` LIKE '%y%' OR `nama_lembaga` LIKE '%' at line 4 - Invalid query: SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '3'
AND ( LIKE '%y%' OR `kab_kota` LIKE '%y%' OR `jk` LIKE '%y%' OR `nama_lembaga` LIKE '%y%' OR `program_studi` LIKE '%y%' OR `akreditasi` LIKE '%y%' OR `semester` LIKE '%y%' OR `ip_semester` LIKE '%y%' OR `nama_lengkap` LIKE '%y%' OR `email` LIKE '%y%' )
 LIMIT 10
ERROR - 2017-09-17 02:16:34 --> ErrorException [ 1 ]: Error Number: 1064 / You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%y%' OR `kab_kota` LIKE '%y%' OR `jk` LIKE '%y%' OR `nama_lembaga` LIKE '%' at line 4 / SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '3'
AND ( LIKE '%y%' OR `kab_kota` LIKE '%y%' OR `jk` LIKE '%y%' OR `nama_lembaga` LIKE '%y%' OR `program_studi` LIKE '%y%' OR `akreditasi` LIKE '%y%' OR `semester` LIKE '%y%' OR `ip_semester` LIKE '%y%' OR `nama_lengkap` LIKE '%y%' OR `email` LIKE '%y%' )
 LIMIT 10 / Filename: libraries/Datatables.php / Line Number: 354 ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 354 ]
ERROR - 2017-09-17 02:16:39 --> ErrorException [ 8 ]: Undefined index:  ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 331 ]
ERROR - 2017-09-17 02:16:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%ya%' OR `kab_kota` LIKE '%ya%' OR `jk` LIKE '%ya%' OR `nama_lembaga` LIKE' at line 4 - Invalid query: SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '3'
AND ( LIKE '%ya%' OR `kab_kota` LIKE '%ya%' OR `jk` LIKE '%ya%' OR `nama_lembaga` LIKE '%ya%' OR `program_studi` LIKE '%ya%' OR `akreditasi` LIKE '%ya%' OR `semester` LIKE '%ya%' OR `ip_semester` LIKE '%ya%' OR `nama_lengkap` LIKE '%ya%' OR `email` LIKE '%ya%' )
 LIMIT 10
ERROR - 2017-09-17 02:16:39 --> ErrorException [ 1 ]: Error Number: 1064 / You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%ya%' OR `kab_kota` LIKE '%ya%' OR `jk` LIKE '%ya%' OR `nama_lembaga` LIKE' at line 4 / SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '3'
AND ( LIKE '%ya%' OR `kab_kota` LIKE '%ya%' OR `jk` LIKE '%ya%' OR `nama_lembaga` LIKE '%ya%' OR `program_studi` LIKE '%ya%' OR `akreditasi` LIKE '%ya%' OR `semester` LIKE '%ya%' OR `ip_semester` LIKE '%ya%' OR `nama_lengkap` LIKE '%ya%' OR `email` LIKE '%ya%' )
 LIMIT 10 / Filename: libraries/Datatables.php / Line Number: 354 ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 354 ]
ERROR - 2017-09-17 02:16:46 --> ErrorException [ 8 ]: Undefined index:  ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 331 ]
ERROR - 2017-09-17 02:16:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%yad%' OR `kab_kota` LIKE '%yad%' OR `jk` LIKE '%yad%' OR `nama_lembaga` L' at line 4 - Invalid query: SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '3'
AND ( LIKE '%yad%' OR `kab_kota` LIKE '%yad%' OR `jk` LIKE '%yad%' OR `nama_lembaga` LIKE '%yad%' OR `program_studi` LIKE '%yad%' OR `akreditasi` LIKE '%yad%' OR `semester` LIKE '%yad%' OR `ip_semester` LIKE '%yad%' OR `nama_lengkap` LIKE '%yad%' OR `email` LIKE '%yad%' )
 LIMIT 10
ERROR - 2017-09-17 02:16:46 --> ErrorException [ 1 ]: Error Number: 1064 / You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%yad%' OR `kab_kota` LIKE '%yad%' OR `jk` LIKE '%yad%' OR `nama_lembaga` L' at line 4 / SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '3'
AND ( LIKE '%yad%' OR `kab_kota` LIKE '%yad%' OR `jk` LIKE '%yad%' OR `nama_lembaga` LIKE '%yad%' OR `program_studi` LIKE '%yad%' OR `akreditasi` LIKE '%yad%' OR `semester` LIKE '%yad%' OR `ip_semester` LIKE '%yad%' OR `nama_lengkap` LIKE '%yad%' OR `email` LIKE '%yad%' )
 LIMIT 10 / Filename: libraries/Datatables.php / Line Number: 354 ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 354 ]
ERROR - 2017-09-17 02:18:12 --> ErrorException [ 8 ]: Undefined index:  ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 331 ]
ERROR - 2017-09-17 02:18:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%ya%' OR `kab_kota` LIKE '%ya%' OR `jk` LIKE '%ya%' OR `nama_lembaga` LIKE' at line 4 - Invalid query: SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '3'
AND ( LIKE '%ya%' OR `kab_kota` LIKE '%ya%' OR `jk` LIKE '%ya%' OR `nama_lembaga` LIKE '%ya%' OR `program_studi` LIKE '%ya%' OR `akreditasi` LIKE '%ya%' OR `semester` LIKE '%ya%' OR `ip_semester` LIKE '%ya%' OR `nama_lengkap` LIKE '%ya%' OR `email` LIKE '%ya%' )
 LIMIT 10
ERROR - 2017-09-17 02:18:12 --> ErrorException [ 1 ]: Error Number: 1064 / You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%ya%' OR `kab_kota` LIKE '%ya%' OR `jk` LIKE '%ya%' OR `nama_lembaga` LIKE' at line 4 / SELECT CONCAT('tr_', id) AS DT_RowId, `id` AS `pendaftar_id`, `nik`, `email`, `kab_kota`, `jk`, `nama_lembaga`, `program_studi`, `akreditasi`, `semester`, `ip_semester`, `nama_lengkap` AS `nama_pendaftar`
FROM `pendaftar`
WHERE `kategori_id` = '3'
AND ( LIKE '%ya%' OR `kab_kota` LIKE '%ya%' OR `jk` LIKE '%ya%' OR `nama_lembaga` LIKE '%ya%' OR `program_studi` LIKE '%ya%' OR `akreditasi` LIKE '%ya%' OR `semester` LIKE '%ya%' OR `ip_semester` LIKE '%ya%' OR `nama_lengkap` LIKE '%ya%' OR `email` LIKE '%ya%' )
 LIMIT 10 / Filename: libraries/Datatables.php / Line Number: 354 ~ /home/trias/htdocs/beasiswa/application/libraries/Datatables.php [ 354 ]
