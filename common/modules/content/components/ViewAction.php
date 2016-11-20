<?php

namespace common\modules\content\components;

use yii;

/**
 * Class ViewAction
 * @package common\components
 */
class ViewAction extends CrudAction
{
    public $model;
    public $translate;
    public $htmlClass;

    /**
     * @return string
     * @throws yii\web\NotFoundHttpException
     */
    public function run()
    {
        $id = Yii::$app->request->get('id');
        return $this->controller->render('view', [
            'model' => $this->findModel($id),
            'translate' => $this->model->formName(),
            'class' => $this->model->formName()
        ]);
    }
}
