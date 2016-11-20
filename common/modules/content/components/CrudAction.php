<?php

namespace common\modules\content\components;

use yii\base\Action;
use yii\web\NotFoundHttpException;

/**
 * Class CrudAction
 * @package common\components
 */
class CrudAction extends Action
{
    public $model = null;
    
    /**
     * @param $id
     * @return mixed
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        $model = $this->model;
        if ($this->model !== null && $model::findOne($id)) {
            return $model::findOne($id);
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
