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
            if ($_SERVER['HTTP_REFERER'] == 'http://fc-stars.s-host.net/backend/web/index.php?r=site%2Flogin') {
                return Yii::$app->controller->redirect('http://fc-stars.s-host.net/backend/web/index.php');
            }
            return Yii::$app->controller->redirect($this->redirect);
        }
        if ($_SERVER['HTTP_REFERER'] == 'http://fc-stars.s-host.net/') {
            return Yii::$app->controller->redirect('http://fc-stars.s-host.net/');
        }

        return $this->controller->render($this->view, [
            'model' => $this->model
        ]);
    }
}
