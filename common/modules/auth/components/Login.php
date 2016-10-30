<?php
namespace common\modules\auth\components;

use yii\base\Action;
use yii;

class Login extends Action
{
    public $model;
    public $view = '/';

    public function run()
    {
        if ($this->model->load(Yii::$app->request->post()) && $this->model->login()) {
            Yii::$app->controller->view->registerJs('
                alert("Вы успешно вошли!");
            ');
        }

        return Yii::$app->controller->render($this->view, [
            'model' => $this->model
        ]);
    }
}
