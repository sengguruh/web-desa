<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-31 11:04:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
LEFT JOIN `tweb_keluarga` `d` ON `u`.`id_kk` = `d`.`id`
LEFT JOIN `tweb_wil_cl' at line 23 - Invalid query: SELECT `u`.`id`, `u`.`nik`, `u`.`tanggallahir`, `u`.`tempatlahir`, `u`.`foto`, `u`.`status`, `u`.`status_dasar`, `u`.`id_kk`, `u`.`nama`, `u`.`nama_ayah`, `u`.`nama_ibu`, `u`.`alamat_sebelumnya`, `u`.`suku`, `u`.`bpjs_ketenagakerjaan`, `a`.`dusun`, `a`.`rw`, `a`.`rt`, `d`.`alamat`, `d`.`no_kk` AS `no_kk`, `u`.`kk_level`, `u`.`tag_id_card`, `u`.`created_at`, `u`.`sex` as `id_sex`, `u`.`negara_asal`, `u`.`tempat_cetak_ktp`, `u`.`tanggal_cetak_ktp`, `v`.`nama` AS `warganegara`, `l`.`inisial` as `bahasa`, `l`.`nama` as `bahasa_nama`, `u`.`ket`, `log`.`tgl_peristiwa`, `log`.`maksud_tujuan_kedatangan`, `log`.`tgl_lapor`, (CASE
				WHEN u.status_kawin IS NULL THEN ''
				WHEN u.status_kawin <> 2 THEN k.nama
				ELSE
					CASE
                    WHEN (u.akta_perkawinan IS NULL OR u.akta_perkawinan = '') AND u.tanggalperkawinan IS NULL THEN 'KAWIN BELUM TERCATAT'
                    ELSE 'KAWIN TERCATAT'
					END
			END) AS kawin, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(u.tanggallahir)), '%Y')+0) AS umur, (DATE_FORMAT(FROM_DAYS(TO_DAYS(log.tgl_peristiwa)-TO_DAYS(u.tanggallahir)), '%Y')+0) AS umur_pada_peristiwa, `x`.`nama` AS `sex`, `sd`.`nama` AS `pendidikan_sedang`, `n`.`nama` AS `pendidikan`, `p`.`nama` AS `pekerjaan`, `g`.`nama` AS `agama`, `m`.`nama` AS `gol_darah`, `hub`.`nama` AS `hubungan`, `b`.`no_kk` AS `no_rtm`, `b`.`id` AS `id_rtm`
FROM ((SELECT (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(u.tanggallahir)), '%Y')+0) AS umur, `u`.*
FROM `tweb_penduduk` `u`
LEFT JOIN `tweb_keluarga` `d` ON `u`.`id_kk` = `d`.`id`
LEFT JOIN `tweb_wil_clusterdesa` `a` ON `d`.`id_cluster` = `a`.`id`
LEFT JOIN `tweb_wil_clusterdesa` `a2` ON `u`.`id_cluster` = `a2`.`id`
LEFT JOIN (
              SELECT    MAX(id) max_id, id_pend
              FROM      log_penduduk
              GROUP BY  id_pend
          ) log_max ON `log_max`.`id_pend` = `u`.`id`
LEFT JOIN `log_penduduk` `log` ON `log_max`.`max_id` = `log`.`id`
WHERE `u`.`status_dasar` IN(1)
ORDER BY CONCAT(d.no_kk, `u`.`id_kk`, u.kk_level)
 LIMIT 50) as u)
LEFT JOIN `tweb_keluarga` `d` ON `u`.`id_kk` = `d`.`id`
LEFT JOIN `tweb_wil_clusterdesa` `a` ON `d`.`id_cluster` = `a`.`id`
LEFT JOIN `tweb_wil_clusterdesa` `a2` ON `u`.`id_cluster` = `a2`.`id`
LEFT JOIN `tweb_rtm` `b` ON `u`.`id_rtm` = `b`.`no_kk`
LEFT JOIN `tweb_penduduk_pendidikan_kk` `n` ON `u`.`pendidikan_kk_id` = `n`.`id`
LEFT JOIN `tweb_penduduk_pendidikan` `sd` ON `u`.`pendidikan_sedang_id` = `sd`.`id`
LEFT JOIN `tweb_penduduk_pekerjaan` `p` ON `u`.`pekerjaan_id` = `p`.`id`
LEFT JOIN `tweb_penduduk_kawin` `k` ON `u`.`status_kawin` = `k`.`id`
LEFT JOIN `tweb_penduduk_sex` `x` ON `u`.`sex` = `x`.`id`
LEFT JOIN `tweb_penduduk_agama` `g` ON `u`.`agama_id` = `g`.`id`
LEFT JOIN `tweb_penduduk_warganegara` `v` ON `u`.`warganegara_id` = `v`.`id`
LEFT JOIN `ref_penduduk_bahasa` `l` ON `u`.`bahasa_id` = `l`.`id`
LEFT JOIN `tweb_golongan_darah` `m` ON `u`.`golongan_darah_id` = `m`.`id`
LEFT JOIN `tweb_cacat` `f` ON `u`.`cacat_id` = `f`.`id`
LEFT JOIN `tweb_penduduk_hubungan` `hub` ON `u`.`kk_level` = `hub`.`id`
LEFT JOIN `tweb_sakit_menahun` `j` ON `u`.`sakit_menahun_id` = `j`.`id`
JOIN (
              SELECT    MAX(id) max_id, id_pend
              FROM      log_penduduk
              GROUP BY  id_pend
          ) log_max ON `log_max`.`id_pend` = `u`.`id`
JOIN `log_penduduk` `log` ON `log_max`.`max_id` = `log`.`id`
LEFT JOIN `ref_peristiwa` `ra` ON `ra`.`id` = `log`.`kode_peristiwa`
LEFT JOIN `covid19_pemudik` `c` ON `c`.`id_terdata` = `u`.`id`
LEFT JOIN `ref_status_covid` `cv` ON `cv`.`id` = `c`.`status_covid`
ORDER BY CONCAT(d.no_kk, `u`.`id_kk`, u.kk_level)
ERROR - 2023-07-31 05:04:04 --> Severity: error --> Exception: Cannot access private property Penduduk::$controller D:\laragon\www\OpenSID\donjo-app\core\MY_Controller.php 90
ERROR - 2023-07-31 05:04:07 --> Severity: error --> Exception: Cannot access private property Penduduk::$controller D:\laragon\www\OpenSID\donjo-app\core\MY_Controller.php 90
ERROR - 2023-07-31 05:17:57 --> Severity: error --> Exception: Cannot access private property Penduduk::$controller D:\laragon\www\OpenSID\donjo-app\core\MY_Controller.php 90
ERROR - 2023-07-31 05:33:06 --> Severity: error --> Exception: Cannot access private property Penduduk::$controller D:\laragon\www\OpenSID\donjo-app\core\MY_Controller.php 90
ERROR - 2023-07-31 13:17:37 --> GuzzleHttp\Exception\ConnectException: cURL error 28: SSL connection timeout (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 D:\laragon\www\OpenSID\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 D:\laragon\www\OpenSID\donjo-app\helpers\opensid_helper.php(236): GuzzleHttp\Client->post('https://pantau....', Array)
#15 D:\laragon\www\OpenSID\donjo-app\models\Track_model.php(145): httpPost('https://pantau....', Array)
#16 D:\laragon\www\OpenSID\donjo-app\models\Track_model.php(74): Track_model->kirim_data()
#17 D:\laragon\www\OpenSID\donjo-app\controllers\First.php(109): Track_model->track_desa('first')
#18 D:\laragon\www\OpenSID\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index('2')
#19 D:\laragon\www\OpenSID\index.php(283): require_once('D:\\laragon\\www\\...')
#20 {main}
