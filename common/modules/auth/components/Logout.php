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

        return Yii::$app->controller->goHome();
    }
}
