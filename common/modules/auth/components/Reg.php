<?php
namespace common\modules\auth\components;

use common\modules\auth\models\User;
use frontend\models\UserRegForm;
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
            $user_name = Yii::$app->request->post()['UserRegForm']['user_name'];
            $model = new User();
            if ($model::find()->where(['user_name' => $user_name])->one()) {
                return Yii::$app->controller->redirect($this->redirect);
            }
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
