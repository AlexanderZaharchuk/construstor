<?php
namespace common\modules\auth\components;

use yii\base\Action;
use yii;

class Reg extends Action
{
    public $model;
    public $view = '/';

    public function run()
    {
        if ($this->model->load(Yii::$app->request->post())) {
            if ($user = $this->model->reg()) {
                if (Yii::$app->getUser()->login($user)) {
                    Yii::$app->controller->view->registerJs('
                        alert("Вы успешно зарегестрированы! Пожалуйста, дождитесь одобрения администратора.");
                    ');
                }
            }
        }

        return Yii::$app->controller->render($this->view, [
            'model' => $this->model
        ]);
    }
}
