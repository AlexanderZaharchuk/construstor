<?php
namespace backend\controllers;

use common\modules\auth\models\backend\RegForm;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\modules\auth\models\backend\LoginForm;

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
                'model' => new RegForm(),
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
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
