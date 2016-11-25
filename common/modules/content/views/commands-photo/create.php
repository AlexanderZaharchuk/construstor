<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\content\models\CommandsPhoto */

$this->title = Yii::t('app', 'Create Commands Photo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Commands Photos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commands-photo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
