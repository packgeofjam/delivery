<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-main container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'shortname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'availability')->checkbox() ?>
    <?= $form->field($model, 'popular')->checkbox() ?>
    <?= $form->field($model, 'discount')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'button basket-btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
