<?php
namespace common\modules\auth\components;

use yii\base\Action;
use yii;

class Reg extends Action
{
    public $model;
    public $redirect = '/';
    public $view = '/site/reg';

    public function run()
    {
        if ($this->model->load(Yii::$app->request->post())) {
            if ($user = $this->model->reg()) {
                if (Yii::$app->getUser()->login($user)) {
                    return Yii::$app->controller->redirect($this->redirect);
                }
            }
        }

        return $this->controller->render($this->view, [
            'model' => $this->model
        ]);
    }
}
