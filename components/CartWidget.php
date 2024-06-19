<?php

namespace app\components;
use app\models\Basket;
use Yii;
use yii\base\Widget;
use yii\helpers\Url;

class CartWidget extends Widget
{
    public function run() {
        $session = Yii::$app->session;
        $session->open();
        $basket = (new Basket())->getBasket();
        if (isset($basket['products']) && is_array($basket['products'])) {
            $sumCount = 0;
            $basket = (new Basket())->getBasket();
            if (isset($basket['products']) && is_array($basket)) {
                foreach ($basket['products'] as $item) {
                    $sumCount += $item['count'];
                }
            }
        }
        echo '<li><a href="'.Url::toRoute('/basket').'" type="submit" class="nav-link"><img class="basket-img" src="/css/img/shop.png" alt="">Корзина
        <span class="poductsinbasket">'.$sumCount.'</a></span></li>';
    }
}