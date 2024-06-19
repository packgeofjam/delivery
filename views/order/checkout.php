<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$name = '';
$email = '';
$phone = '';
$delivery_type = '';
$address = '';
$comment = '';
$promo = '';
if (Yii::$app->session->hasFlash('checkout-data')) {
    $data = Yii::$app->session->getFlash('checkout-data');
    $name = Html::encode($data['name']);
    $email = Html::encode($data['email']);
    $phone = Html::encode($data['phone']);
    $delivery_type = Html::encode($data['phone']);
    $address = Html::encode($data['address']);
    $comment = Html::encode($data['comment']);
    $promo = Html::encode($data['promo']);
}
?>

<div class="site-main container">
    <h1>Оформление заказа</h1>
    <div id="checkout">
        <?php
        $success = false;
        if (Yii::$app->session->hasFlash('checkout-success')) {
            $success = Yii::$app->session->getFlash('checkout-success');
        }
        ?>

        <?php if (!$success): ?>
            <?php if (Yii::$app->session->hasFlash('checkout-errors')): ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close"
                            data-dismiss="alert" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>При заполнении формы допущены ошибки</p>
                    <?php $allErrors = Yii::$app->session->getFlash('checkout-errors'); ?>
                    <ul>
                        <?php foreach ($allErrors as $errors): ?>
                            <?php foreach ($errors as $error): ?>
                                <li><?= $error; ?></li>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php
            $form = ActiveForm::begin(
                ['id' => 'checkout-form', 'class' => 'form-horizontal']
            );
            echo $form->field($order, 'name')
                ->textInput(['value' => $name]);
            echo $form->field($order, 'email')
                ->input('email', ['value' => $email]);
            echo $form->field($order, 'phone')
                ->textInput(['value' => $phone]);
            echo $form->field($order, 'delivery_type')
                ->textInput(['value' => $delivery_type]);
            echo $form->field($order, 'address')
                ->textarea(['rows' => 2, 'value' => $address]);
            echo $form->field($order, 'comment')
                ->textarea(['rows' => 2, 'value' => $comment]);
            echo $form->field($order, 'promo')
                ->textInput(['value' => $promo]);
            echo Html::submitButton(
                'Оформить заказ',
                ['class' => 'btn btn-primary']
            );
            ActiveForm::end();
            ?>
        <?php else: ?>
            <p>Ваш заказ успешно оформлен, спасибо за покупку!</p>
            <p>Проверьте электронную почту и ждите звонка для подтверждения заказа</p>
            <a href="/../.." class="button basket-btn" style="width: fit-content">Вернуться на главную страницу</a>
        <?php endif; ?>
    </div>
</div>
<style>
    input, textarea {
        margin-bottom: 20px;
    }
    .help-block {
        color: brown;
        margin-bottom: 10px;
    }
</style>