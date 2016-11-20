<?php

namespace common\modules\content\components;

use yii;

/**
 * Class CreateAction
 * @package common\components
 */
class CreateAction extends CrudAction
{
    public $model;
    public $htmlClass;
    public $view = 'create';

    /**
     * @return string|yii\web\Response
     */
    public function run()
    {
        if ($this->model->load(Yii::$app->request->post()) && $this->model->save()) {
            return $this->controller->redirect(['index']);
        }
        return $this->controller->render($this->view, [
            'model' => $this->model,
            'class' => $this->model->formName()
        ]);
    }
}
