<?php
namespace common\modules\auth\components;

use yii\base\Action;
use yii;

class Login extends Action
{
    public $model;
    public $redirect = '/';
    public $view = '/site/login';

    public function run()
    {
        if ($this->model->load(Yii::$app->request->post()) && $this->model->login()) {
            return Yii::$app->controller->redirect($this->redirect);
        }

        return $this->controller->render($this->view, [
            'model' => $this->model
        ]);
    }
}
