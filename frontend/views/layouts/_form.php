<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\content\models\Callback */
/* @var $form ActiveForm */
?>
<div class="form">

    <?php $form = ActiveForm::begin([
        'options' => ['onsubmit' => 'alert("Ваше сообщение было отправлено.")']
    ]); ?>

        <?= $form->field($callback, 'name')->label('Ваше имя:') ?>
        <?= $form->field($callback, 'email')->label('Ваш e-mail:') ?>
        <?= $form->field($callback, 'message')->textarea()->label('Ваше сообщение:') ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- _form -->
