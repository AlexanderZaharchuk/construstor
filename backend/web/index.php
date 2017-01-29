<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
defined('YII_BACKEND') or define('YII_BACKEND', '@backend/web/');
defined('YII_BACKEND_WEB') or define('YII_BACKEND_WEB', '@backend/web/');
defined('BACKEND_IMG') or define('BACKEND_IMG', 'http://fc-stars.s-host.net/backend/web/files/');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/main.php'),
    require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/main-local.php')
);
function vd($var, $stop = true) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($stop) {
        die;
    }
}
$application = new yii\web\Application($config);
$application->run();
