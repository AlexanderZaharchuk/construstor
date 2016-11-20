<?php

namespace common\modules\content\controllers;

use yii\base\UnknownClassException;
use yii;
use yii\web\Controller;

/**
 * Class CrudController implements the CRUD actions for many model
 * @package backend\controllers
 */
class CrudController extends Controller
{
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
                ]
            ],
            'delete' => [
                'class' => 'common\modules\content\components\DeleteAction',
                'model' => $model,
            ],
            'update' => [
                'class' => 'common\modules\content\components\UpdateAction',
                'model' => $model,
            ],
            'create' => [
                'class' => 'common\modules\content\components\CreateAction',
                'model' => $model,
            ],
            'view' => [
                'class' => 'common\modules\content\components\ViewAction',
                'model' => $model,
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