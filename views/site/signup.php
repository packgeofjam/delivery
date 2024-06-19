<?php

/* @var $this yii\web\View */
/* @var $model app\models\SignupForm */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'Регистрация';
?>
<div class="site-main container">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Регистрация', ['class' => 'button btn-login', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>