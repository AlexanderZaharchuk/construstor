<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\RegForm */
/* @var $form ActiveForm */
$this->registerJs('
    $(document).ready(function () {
        $(\'#w0\').val("");
    });
');
?>
<div class="from">

    <?php $form = ActiveForm::begin([
        'action' => $action
    ]); ?>

        <?= $form->field($model, 'user_name')
            ->textInput(['pattern' => '^[A-Za-z0-9_]{6,26}$', 'required' => '', 'title' => 'Разрешены символы: A-Z, a-z, 0-9, нижнее подчеркивание. От 6 до 26 символов.'])
            ->label('Ваш логин') ?>
        <?= $form->field($model, 'password')
            ->textInput(['pattern' => '^[A-Za-z0-9_]{6,26}$', 'required' => '', 'title' => 'Разрешены символы: A-Z, a-z, 0-9, нижнее подчеркивание. От 6 до 26 символов.'])
            ->label('Ваш пароль') ?>
        <?= $form->field($model, 'photo')
            ->fileInput(['required' => ''])
            ->label('Ваше фото') ?>
        <?= $form->field($model, 'name')
            ->textInput(['required' => '', 'title' => 'Поле, обязательно для заполнения.'])
            ->label('Ваше имя и фамилия') ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- from -->
