<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\modules\content\models\Commands */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= $model->formName() ?>-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php foreach ($model::getFields() as $key => $item): ?>
        <?php switch ($item) {
            case 'string':
                echo $form->field($model, $key)->textInput(['maxlength' => true]);
                break;
            case 'text':
                echo $form->field($model, $key)->textarea(['maxlength' => true]);
                break;
            case 'CKEditor':
                echo $form->field($model, $key)->widget(CKEditor::className(), [
                    'options' => ['rows' => 6],
                    'preset' => 'basic'
                ]);
                break;
            case 'image':
                echo $form->field($model, $key)->fileInput();
                break;
        }?>
    <?php endforeach; ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
