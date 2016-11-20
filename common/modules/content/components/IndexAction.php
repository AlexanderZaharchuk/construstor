<?php

namespace common\modules\content\components;

use yii;
use yii\data\ActiveDataProvider;

/**
 * Class IndexAction
 * @package common\components
 */
class IndexAction extends CrudAction
{
    public $model;
    public $searchModel;
    public $params;
    
    /**
     * @return string
     */
    public function run()
    {
        $dataProvider = !isset($this->searchModel)
            ? new ActiveDataProvider($this->params)
            : $this->searchModel->search(Yii::$app->request->queryParams);
        return $this->controller->render('index', [
            'searchModel' => $this->searchModel,
            'dataProvider' => $dataProvider,
            'model' => $this->model
        ]);
    }
}
