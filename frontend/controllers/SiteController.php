<?php
namespace frontend\controllers;

use common\modules\auth\models\frontend\LoginForm;
use common\modules\auth\models\User;
use common\modules\content\models\AboutSchool;
use common\modules\content\models\Commands;
use common\modules\content\models\Graduates;
use common\modules\content\models\Honors;
use common\modules\content\models\News;
use common\modules\content\models\Partners;
use common\modules\content\models\Photo;
use common\modules\content\models\Reviews;
use common\modules\content\models\Shop;
use common\modules\content\models\Video;
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
        $shop = Shop::getShopItems();
        $news = News::getAllNews();
        $commands = Commands::getAllCommands();
        $aboutSchool = AboutSchool::getAllTextAboutSchool();
        $photo = Photo::getAllPhotos();
        $video = Video::getAllVideos();
        $graduates = Graduates::getAllGraduates();
        $honors = Honors::getAllHonors();
        $reviews = Reviews::getAllReviews();
        $partners = Partners::getAllPartners();

        return $this->render('index', [
            'commands' => $commands,
            'shop' => $shop,
            'news' => $news,
            'aboutSchool' => $aboutSchool,
            'photo' => $photo,
            'video' => $video,
            'graduates' => $graduates,
            'honors' => $honors,
            'reviews' => $reviews,
            'partners' => $partners
        ]);
    }
}
