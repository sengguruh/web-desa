<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-03 11:15:39 --> Unable to connect to the database
ERROR - 2023-09-03 18:16:44 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5015 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 D:\laragon\www\website-sengguruh\donjo-app\helpers\opensid_helper.php(236): GuzzleHttp\Client->post('https://pantau....', Array)
#15 D:\laragon\www\website-sengguruh\donjo-app\models\Track_model.php(145): httpPost('https://pantau....', Array)
#16 D:\laragon\www\website-sengguruh\donjo-app\models\Track_model.php(74): Track_model->kirim_data()
#17 D:\laragon\www\website-sengguruh\donjo-app\controllers\First.php(109): Track_model->track_desa('first')
#18 D:\laragon\www\website-sengguruh\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 D:\laragon\www\website-sengguruh\index.php(283): require_once('D:\\laragon\\www\\...')
#20 {main}
ERROR - 2023-09-03 19:43:26 --> Query error: Table 'opensidd.tweb_desa_pamong' doesn't exist - Invalid query: SHOW COLUMNS FROM `tweb_desa_pamong`
ERROR - 2023-09-03 12:43:26 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:27 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:27 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:27 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:27 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:27 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:27 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:27 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:28 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:28 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:28 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:28 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:28 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:28 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:28 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:29 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:29 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:29 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:29 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:30 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:30 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:30 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:31 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:31 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:31 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:31 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:31 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:31 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:31 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:32 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:32 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:32 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:32 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:32 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:33 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:33 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:33 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:33 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:33 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 19:43:37 --> Query error: Table 'opensidd.tweb_desa_pamong' doesn't exist - Invalid query: SHOW COLUMNS FROM `tweb_desa_pamong`
ERROR - 2023-09-03 19:43:38 --> Query error: Table 'opensidd.tweb_desa_pamong' doesn't exist - Invalid query: SHOW COLUMNS FROM `tweb_desa_pamong`
ERROR - 2023-09-03 19:43:38 --> Query error: Table 'opensidd.tweb_desa_pamong' doesn't exist - Invalid query: SHOW COLUMNS FROM `tweb_desa_pamong`
ERROR - 2023-09-03 19:43:39 --> Query error: Table 'opensidd.tweb_desa_pamong' doesn't exist - Invalid query: SHOW COLUMNS FROM `tweb_desa_pamong`
ERROR - 2023-09-03 12:43:39 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:39 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:39 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:39 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:39 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:39 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:40 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:40 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:40 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:40 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:40 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:40 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:40 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:41 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:41 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:41 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:41 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:41 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:41 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:42 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:43 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:43 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:43 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:43 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:43 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:43 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:44 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:44 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:44 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:44 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:44 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:44 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:44 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:45 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:45 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:45 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:45 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:45 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:45 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 19:43:49 --> Query error: Table 'opensidd.tweb_desa_pamong' doesn't exist - Invalid query: SHOW COLUMNS FROM `tweb_desa_pamong`
ERROR - 2023-09-03 12:43:50 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:50 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:50 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:50 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:50 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:50 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:50 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:51 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:51 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:51 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:51 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:51 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:51 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:51 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:52 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:52 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:52 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:52 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:53 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:53 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:53 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:54 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:54 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:54 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:54 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:54 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:54 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:54 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:55 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:55 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:55 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:55 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:55 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:55 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:56 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:43:56 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:00 --> Unable to connect to the database
ERROR - 2023-09-03 19:44:18 --> Query error: Table 'opensidd.tweb_desa_pamong' doesn't exist - Invalid query: SHOW COLUMNS FROM `tweb_desa_pamong`
ERROR - 2023-09-03 12:44:18 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:18 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:18 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:18 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:18 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:19 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:19 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:19 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:19 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:19 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:19 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:19 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:20 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:20 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:20 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:21 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:21 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:21 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:22 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:22 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:23 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:23 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:23 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:23 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:23 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:23 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:23 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:24 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:24 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:24 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:24 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:24 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:24 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:24 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:25 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:25 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:25 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
ERROR - 2023-09-03 12:44:25 --> Query error: Table 'opensidd.tweb_keluarga' doesn't exist - Invalid query: SELECT `no_kk`, COUNT(id) as jml
FROM `tweb_keluarga`
GROUP BY `no_kk`
HAVING `jml` > 1
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2009
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2010
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2009
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2011
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2012
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2010
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2011
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2012
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2101
NOTICE - 2023-09-03 19:55:05 --> Berhasil Jalankan migrasi_fitur_premium_2101
NOTICE - 2023-09-03 19:55:06 --> Berhasil Jalankan migrasi_fitur_premium_2102
NOTICE - 2023-09-03 19:55:06 --> Berhasil Jalankan migrasi_fitur_premium_2103
NOTICE - 2023-09-03 19:55:06 --> Berhasil Jalankan migrasi_2109_ke_2110
NOTICE - 2023-09-03 19:55:06 --> Berhasil Jalankan migrasi_fitur_premium_2102
NOTICE - 2023-09-03 19:55:06 --> Berhasil Jalankan migrasi_fitur_premium_2103
NOTICE - 2023-09-03 19:55:06 --> Berhasil Jalankan migrasi_2109_ke_2110
ERROR - 2023-09-03 19:55:07 --> Query error: Duplicate key name 'tag_id_card' - Invalid query: ALTER TABLE tweb_penduduk ADD UNIQUE tag_id_card (`tag_id_card`)
NOTICE - 2023-09-03 19:55:10 --> Berhasil Jalankan migrasi_fitur_premium_2104
NOTICE - 2023-09-03 19:55:10 --> Berhasil Jalankan migrasi_2110_ke_2111
NOTICE - 2023-09-03 19:55:15 --> Berhasil Jalankan migrasi_fitur_premium_2105
NOTICE - 2023-09-03 19:55:15 --> Berhasil Jalankan migrasi_2111_ke_2112
NOTICE - 2023-09-03 19:55:21 --> Berhasil Jalankan migrasi_fitur_premium_2106
NOTICE - 2023-09-03 19:55:21 --> Berhasil Jalankan migrasi_2112_ke_2201
NOTICE - 2023-09-03 19:55:25 --> Berhasil Jalankan migrasi_fitur_premium_2107
NOTICE - 2023-09-03 19:55:25 --> Berhasil Jalankan migrasi_2201_ke_2202
NOTICE - 2023-09-03 19:55:26 --> Berhasil Jalankan migrasi_fitur_premium_2108
NOTICE - 2023-09-03 19:55:26 --> Berhasil Jalankan migrasi_2202_ke_2203
NOTICE - 2023-09-03 19:55:30 --> Berhasil Jalankan migrasi_fitur_premium_2109
NOTICE - 2023-09-03 19:55:30 --> Berhasil Jalankan migrasi_2203_ke_2204
NOTICE - 2023-09-03 19:55:30 --> Berhasil Jalankan migrasi_fitur_premium_2110
NOTICE - 2023-09-03 19:55:30 --> Berhasil Jalankan migrasi_2204_ke_2205
NOTICE - 2023-09-03 19:55:33 --> Berhasil Jalankan migrasi_fitur_premium_2111
NOTICE - 2023-09-03 19:55:33 --> Berhasil Jalankan migrasi_2205_ke_2206
NOTICE - 2023-09-03 19:55:40 --> Berhasil Jalankan migrasi_fitur_premium_2112
NOTICE - 2023-09-03 19:55:40 --> Berhasil Jalankan migrasi_2206_ke_2207
NOTICE - 2023-09-03 19:55:43 --> Berhasil Jalankan migrasi_fitur_premium_2201
NOTICE - 2023-09-03 19:55:43 --> Berhasil Jalankan migrasi_2207_ke_2208
NOTICE - 2023-09-03 19:55:43 --> Berhasil Jalankan migrasi_foto_aparatur
NOTICE - 2023-09-03 19:55:51 --> Berhasil Jalankan migrasi_fitur_premium_2202
NOTICE - 2023-09-03 19:55:51 --> Berhasil Jalankan migrasi_2208_ke_2209
NOTICE - 2023-09-03 19:55:59 --> Berhasil Jalankan migrasi_fitur_premium_2203
NOTICE - 2023-09-03 19:55:59 --> Berhasil Jalankan migrasi_2209_ke_2210
NOTICE - 2023-09-03 19:56:04 --> Berhasil Jalankan migrasi_fitur_premium_2204
NOTICE - 2023-09-03 19:56:04 --> Berhasil Jalankan migrasi_2210_ke_2211
NOTICE - 2023-09-03 19:56:13 --> Berhasil Jalankan migrasi_fitur_premium_2205
NOTICE - 2023-09-03 19:56:13 --> Berhasil Jalankan migrasi_2211_ke_2212
NOTICE - 2023-09-03 19:56:19 --> Berhasil Jalankan migrasi_fitur_premium_2206
NOTICE - 2023-09-03 19:56:19 --> Berhasil Jalankan migrasi_2212_ke_2301
NOTICE - 2023-09-03 19:56:29 --> Berhasil Jalankan migrasi_fitur_premium_2207
NOTICE - 2023-09-03 19:56:29 --> Berhasil Jalankan migrasi_2301_ke_2302
NOTICE - 2023-09-03 19:56:30 --> Berhasil Jalankan migrasi_fitur_premium_2208
NOTICE - 2023-09-03 19:56:30 --> Berhasil Jalankan migrasi_2302_ke_2303
NOTICE - 2023-09-03 19:56:39 --> Berhasil Jalankan migrasi_fitur_premium_2209
NOTICE - 2023-09-03 19:56:39 --> Berhasil Jalankan migrasi_2303_ke_2304
NOTICE - 2023-09-03 19:56:45 --> Berhasil Jalankan migrasi_fitur_premium_2210
NOTICE - 2023-09-03 19:56:45 --> Berhasil Jalankan migrasi_2304_ke_2305
NOTICE - 2023-09-03 19:56:50 --> Berhasil Jalankan migrasi_fitur_premium_2211
NOTICE - 2023-09-03 19:56:50 --> Berhasil Jalankan migrasi_2305_ke_2306
NOTICE - 2023-09-03 19:56:57 --> Berhasil Jalankan migrasi_dtks
NOTICE - 2023-09-03 19:58:17 --> Berhasil Jalankan migrasi_fitur_premium_2212
NOTICE - 2023-09-03 19:58:17 --> Berhasil Jalankan migrasi_2306_ke_2307
NOTICE - 2023-09-03 19:58:19 --> Berhasil Jalankan migrasi_fitur_premium_2301
NOTICE - 2023-09-03 19:58:19 --> Berhasil Jalankan migrasi_2307_ke_2308
NOTICE - 2023-09-03 19:58:19 --> Berhasil Jalankan migrasi_layanan
NOTICE - 2023-09-03 19:58:20 --> Versi database sudah terbaru
ERROR - 2023-09-03 13:01:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
 LIMIT 1' at line 4 - Invalid query: SELECT `url`
FROM `setting_modul`
WHERE `aktif` = 1
AND `url` IN()
 LIMIT 1
ERROR - 2023-09-03 13:01:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
 LIMIT 1' at line 4 - Invalid query: SELECT `url`
FROM `setting_modul`
WHERE `aktif` = 1
AND `url` IN()
 LIMIT 1
ERROR - 2023-09-03 20:07:37 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5007 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 D:\laragon\www\website-sengguruh\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 D:\laragon\www\website-sengguruh\donjo-app\helpers\opensid_helper.php(236): GuzzleHttp\Client->post('https://pantau....', Array)
#15 D:\laragon\www\website-sengguruh\donjo-app\models\Track_model.php(145): httpPost('https://pantau....', Array)
#16 D:\laragon\www\website-sengguruh\donjo-app\models\Track_model.php(74): Track_model->kirim_data()
#17 D:\laragon\www\website-sengguruh\donjo-app\controllers\First.php(109): Track_model->track_desa('first')
#18 D:\laragon\www\website-sengguruh\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 D:\laragon\www\website-sengguruh\index.php(283): require_once('D:\\laragon\\www\\...')
#20 {main}
