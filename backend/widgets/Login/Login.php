<?php
namespace backend\widgets\Login;

use yii\base\Widget;

class Login extends Widget
{
    public $model;
    public $action;
    
    public function run()
    {
        return $this->render('index', [
            'model' => $this->model,
            'action' => $this->action
        ]);
    }
}
