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

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_name') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'photo') ?>
        <?= $form->field($model, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- from -->
