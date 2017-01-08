<?php
use backend\widgets\Reg\Reg;
use common\modules\auth\models\backend\RegForm;
?>

<?php if(Yii::$app->params['registration']): ?>
    <?= Reg::widget([
        'model' => new RegForm(),
        'action' => 'index.php?r=site/reg'
    ]) ?>
<?php endif; ?>
