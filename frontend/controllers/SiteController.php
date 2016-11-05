<?php
namespace frontend\controllers;

use common\modules\auth\models\LoginForm;
use common\modules\auth\models\RegForm;
use frontend\models\UserRegForm;
use yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'reg', 'login'],
                'rules' => [
                    [
                        'actions' => ['reg', 'login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'login' => [
                'class' => 'common\modules\auth\components\Login',
                'model' => new LoginForm(),
                'view' => '/site/index'
            ],
            'reg' => [
                'class' => 'common\modules\auth\components\Reg',
                'model' => new UserRegForm(),
                'view' => '/site/index'
            ],
            'logout' => [
                'class' => 'common\modules\auth\components\Logout',
            ],
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
