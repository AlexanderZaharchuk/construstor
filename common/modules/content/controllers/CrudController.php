<?php

namespace common\modules\content\controllers;

use yii\base\UnknownClassException;
use yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Class CrudController implements the CRUD actions for many model
 * @package backend\controllers
 */
class CrudController extends Controller
{
    /**
     * @var array
     */
    public $allow = [];
    
    /**
     * @param yii\base\Action $action
     * @return bool
     */
    public function beforeAction($action)
    {
        if (!in_array($action->id, $this->allow)) {
            $this->redirect('error');
        }
        return true;
    }
    
    /**
     * @return array
     * @throws UnknownClassException
     */
    public function actions()
    {
        $model = $this->getModel();
        if (empty($model)) {
            throw new UnknownClassException('Class model is not found.');
        }
        return [
            'index' => [
                'class' => 'common\modules\content\components\IndexAction',
                'model' => $model,
                'params' => [
                    'query' => $model::find()
                ],
                'view' => '@common/modules/content/views/crud/index'
            ],
            'delete' => [
                'class' => 'common\modules\content\components\DeleteAction',
                'model' => $model,
            ],
            'update' => [
                'class' => 'common\modules\content\components\UpdateAction',
                'model' => $model,
                'view' => '@common/modules/content/views/crud/update'
            ],
            'create' => [
                'class' => 'common\modules\content\components\CreateAction',
                'model' => $model,
                'view' => '@common/modules/content/views/crud/create'
            ],
            'view' => [
                'class' => 'common\modules\content\components\ViewAction',
                'model' => $model,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    
    /**
     * @return null
     */
    public function getModel()
    {
        return null;
    }
}