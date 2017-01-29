<?php
namespace common\modules\auth\components;

use yii\base\Action;
use yii;

class Logout extends Action
{
    public $model;

    public function run()
    {
        Yii::$app->user->logout();
        if ($_SERVER['HTTP_REFERER'] == 'http://fc-stars.s-host.net/backend/web/index.php') {
            return Yii::$app->controller->redirect('http://fc-stars.s-host.net/backend/web/index.php');
        }

        return Yii::$app->controller->redirect('/');
    }
}
