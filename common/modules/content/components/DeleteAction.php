<?php

namespace common\modules\content\components;

use yii;

/**
 * Class DeleteAction
 * @package common\components
 */
class DeleteAction extends CrudAction
{
    public $model;

    /**
     * @return yii\web\Response
     * @throws yii\web\NotFoundHttpException
     */
    public function run()
    {
        $id = Yii::$app->request->get('id');
        $this->findModel($id)->delete();
        return $this->controller->redirect(['index']);
    }
}
