<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\Login\Login;
use common\modules\auth\models\frontend\LoginForm;
use frontend\widgets\Reg\Reg;
use frontend\models\UserRegForm;
use common\modules\auth\models\User;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title>FC STARS</title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body style="background-color: #2e6309">
<?php $this->beginBody() ?>

        <?= Alert::widget() ?>

        <?= $content ?>

<?php $this->registerJsFile('js/ajaxPopup.js', ['depends' => [\yii\web\JqueryAsset::className()]]); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
