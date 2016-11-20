<?php

namespace common\modules\content\components;

use yii;

/**
 * Class UpdateAction
 * @package common\components
 */
class UpdateAction extends CrudAction
{
    public $model;
    public $htmlClass;
    
    /**
     * @return string|yii\web\Response
     * @throws yii\web\NotFoundHttpException
     */
    public function run()
    {
        $id = Yii::$app->request->get('id');
        $this->model = $this->findModel($id);
        if ($this->model->load(Yii::$app->request->post()) && $this->model->save()) {
            return $this->controller->redirect(['index']);
        }

        return $this->controller->render('update', [
            'model' => $this->model,
            'class' => $this->model->formName()
        ]);
    }
}
