<?php

namespace frontend\controllers;

use common\modules\auth\controllers\AuthController;
use common\modules\auth\models\LoginForm;
use common\modules\auth\models\RegForm;

class UserController extends AuthController
{
    public function actions()
    {
        return [
            'login' => [
                'class' => 'common\modules\auth\components\Login',
                'model' => new LoginForm(),
            ],
            'reg' => [
                'class' => 'common\modules\auth\components\Reg',
                'model' => new RegForm(),
            ],
            'logout' => [
                'class' => 'common\modules\auth\components\Logout',
            ],
        ];
    }
}
