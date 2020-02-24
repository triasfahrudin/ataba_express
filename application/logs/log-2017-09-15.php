<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-15 00:02:11 --> Query error: Unknown column '-a.email' in 'field list' - Invalid query: SELECT `-a`.`email`, `a`.`id`, `a`.`nik`, `a`.`nama_lengkap`, `a`.`alamat_rumah`, `a`.`kab_kota`, `a`.`jk`, `a`.`nama_lembaga`, `a`.`program_studi`, `a`.`semester`, `a`.`ip_semester`, `a`.`status`, GROUP_CONCAT(CONCAT(c.nama, '|', `b`.`file_dokumen`, '|', `b`.`verifikasi`, '|', c.id) SEPARATOR ';') AS dokumen
FROM `pendaftar` `a`
LEFT JOIN `dokumen_pendaftar` `b` ON `a`.`id` = `b`.`pendaftar_id`
LEFT JOIN `jenis_dokumen` `c` ON `b`.`jenis_dokumen_id` = `c`.`id`
WHERE `kategori_id` = '6'
GROUP BY `a`.`id`
ERROR - 2017-09-15 00:02:11 --> ErrorException [ 1 ]: Error Number: 1054 / Unknown column '-a.email' in 'field list' / SELECT `-a`.`email`, `a`.`id`, `a`.`nik`, `a`.`nama_lengkap`, `a`.`alamat_rumah`, `a`.`kab_kota`, `a`.`jk`, `a`.`nama_lembaga`, `a`.`program_studi`, `a`.`semester`, `a`.`ip_semester`, `a`.`status`, GROUP_CONCAT(CONCAT(c.nama, '|', `b`.`file_dokumen`, '|', `b`.`verifikasi`, '|', c.id) SEPARATOR ';') AS dokumen
FROM `pendaftar` `a`
LEFT JOIN `dokumen_pendaftar` `b` ON `a`.`id` = `b`.`pendaftar_id`
LEFT JOIN `jenis_dokumen` `c` ON `b`.`jenis_dokumen_id` = `c`.`id`
WHERE `kategori_id` = '6'
GROUP BY `a`.`id` / Filename: modules/admin/models/Admin_model.php / Line Number: 39 ~ /home/trias/htdocs/beasiswa/application/modules/admin/models/Admin_model.php [ 39 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 3 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 84 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 1 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 91 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 2 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 95 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 2 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 97 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 3 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 84 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 1 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 91 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 2 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 95 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 2 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 97 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 3 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 84 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 2 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 95 ]
ERROR - 2017-09-15 00:03:16 --> ErrorException [ 8 ]: Undefined offset: 2 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 97 ]
ERROR - 2017-09-15 00:18:56 --> ErrorException [ 8 ]: Undefined offset: 3 ~ /home/trias/htdocs/beasiswa/application/modules/admin/views/pendaftar_mahasiswa.php [ 84 ]
ERROR - 2017-09-15 00:29:59 --> Severity: Error --> Using $this when not in object context /home/trias/htdocs/beasiswa/application/helpers/libs_helper.php 21
ERROR - 2017-09-15 00:30:17 --> ErrorException [ 8 ]: Array to string conversion ~ /home/trias/htdocs/beasiswa/system-3.1.5/database/DB_query_builder.php [ 683 ]
ERROR - 2017-09-15 00:30:17 --> Severity: Error --> Call to undefined method CI_DB_mysqli_driver::row_array() /home/trias/htdocs/beasiswa/application/helpers/libs_helper.php 22
