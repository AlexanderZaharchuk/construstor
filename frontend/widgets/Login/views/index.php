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

        <?= $form->field($model, 'user_name')->label('Ваш логин') ?>
        <?= $form->field($model, 'password')->label('Ваш пароль') ?>

    <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-login -->
