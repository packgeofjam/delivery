<?php
namespace app\controllers;

use app\models\Basket;
use app\models\Order;
use app\models\OrderItem;
use Yii;
use yii\web\Controller;

class OrderController extends Controller {
    public $defaultAction = 'checkout';

    public function actionCheckout() {
        $order = new Order();
        if ($order->load(Yii::$app->request->post())) {
            if ( ! $order->validate()) {
                Yii::$app->session->setFlash(
                    'checkout-success',
                    false
                );
                Yii::$app->session->setFlash(
                    'checkout-data',
                    [
                        'name' => $order->name,
                        'email' => $order->email,
                        'phone' => $order->phone,
                        'delivery_type' => $order->delivery_type,
                        'address' => $order->address,
                        'comment' => $order->comment,
                        'promo' => $order->promo,
                    ]
                );
                Yii::$app->session->setFlash(
                    'checkout-errors',
                    $order->getErrors()
                );
            } else {
                $basket = new Basket();
                $content = $basket->getBasket();
                $order->amount = $content['amount'];
                $order->insert();
                $order->addItems($content);

                $mail = Yii::$app->mailer->compose(
                    'order',
                    ['order' => $order]
                );
                $mail->setFrom(Yii::$app->params['senderEmail'])
                    ->setTo($order->email)
                    ->setSubject('Заказ в магазине № ' . $order->id)
                    ->send();

                $basket->clearBasket();
                Yii::$app->session->setFlash(
                    'checkout-success',
                    true
                );
            }
            return $this->refresh();
        }
        return $this->render('checkout', ['order' => $order]);
    }
}