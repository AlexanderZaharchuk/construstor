<?php
use backend\widgets\Login\Login;
use common\modules\auth\models\backend\LoginForm;
?>

<?= Login::widget([
    'model' => new LoginForm(),
    'action' => '/site/login'
]) ?>
