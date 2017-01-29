<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\LoginForm */
/* @var $action string */
/* @var $form ActiveForm */
?>
<div class="site-login">

    <?php $form = ActiveForm::begin([
        'action' => $action
    ]); ?>

        <?= $form->field($model, 'user_name')
            ->textInput(['pattern' => '^[A-Za-z0-9_]{6,26}$', 'required' => '', 'title' => 'Разрешены символы: A-Z, a-z, 0-9, нижнее подчеркивание. От 6 до 26 символов.'])
            ->label('Ваш логин') ?>
        <?= $form->field($model, 'password')
            ->textInput(['pattern' => '^[A-Za-z0-9_]{6,26}$', 'required' => '', 'title' => 'Разрешены символы: A-Z, a-z, 0-9, нижнее подчеркивание. От 6 до 26 символов.'])
                ->label('Ваш пароль') ?>

    <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-login -->
