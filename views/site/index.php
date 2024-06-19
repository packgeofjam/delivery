<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';

?>
<div class="slider-container">
    <div class="covers">
        <div class="cover cheese-cover container">
            <p>ЗАКАЖИ СОЧНЫЙ СЫРНЫЙ ОБЕД</p>
            <p class="st">20% скидка для новых клиентов</p>
            <a href="" class="button">Использовать промокод</a>
        </div>
        <div class="cover coffee-cover container">
            <p>КОФЕ С СЫРНОЙ ПЕНКОЙ</p>
            <a class="coffee-button button" href="#catalog" class="button" data-category="coffee">Перейти в каталог</a>
        </div>
        <div class="cover pizza-cover container">
            <p>Скидка 10% на всю пиццу</p>
            <p class="st">не суммируется с другими акциями</p>
            <a href="" class="button">Использовать промокод</a>
        </div>
    </div>
</div>
<div class="slide">
    <button class="prev-button" type="button" aria-label="Посмотреть предыдущий слайд">&lt;</button>
    <button class="next-button" type="button" aria-label="Посмотреть следующий слайд">&gt;</button>
</div>
<div class="catalog container" id="catalog">
    <div class="catalog-menu">
        <button class="menu button-active" data-category="popular">Популярное</button>
        <button class="menu" data-category="pizza">Пицца</button>
        <button class="menu" data-category="burger">Бургеры</button>
        <button class="menu" data-category="snacks">Снеки и соусы</button>
        <button class="menu" data-category="other">Другое</button>
        <button class="menu" data-category="coffee">Кофе</button>
        <button class="menu" data-category="limonade">Лимонад</button>
        <button class="menu" data-category="milkshake">Молочные коктейли</button>
    </div>
    <div class="catalog-list">
        <?php
        foreach ($data as $row) {
            echo '<div class="catalog-item ';
            if ($row['popular'] == 1) {
                echo 'popular ';
            };
            if ($row['category'] == 'pizza') {
                echo 'pizza';
            } elseif ($row['category'] == 'burger') {
                echo 'burger';
            } elseif ($row['category'] == 'snacks') {
                echo 'snacks';
            } elseif ($row['category'] == 'other') {
                echo 'other';
            } elseif ($row['category'] == 'coffee') {
                echo 'coffee';
            } elseif ($row['category'] == 'limonade') {
                echo 'limonade';
            } elseif ($row['category'] == 'milkshake') {
                echo 'milkshake';
            };
            echo '">
            <img src="css/img/'.$row['shortname'].'.png" alt="">
            <div class="product">
            <p>'.$row['name'].'</p>
            <p class="desc">'.$row['description'].'</p>
            <div class="price-box">';
            echo '<p>'.$row['price'].' ₽</p>';
                if ($row['discount'] == 1) {
                    echo '<p class="old-price">'.$row['old-price'].' ₽</p>';
                }
            echo '</div>
            <form method="post" action="'.Url::toRoute(['basket/add']).'">
                                        <input type="hidden" name="id"
                                               value="'.$row['id'].'">'.Html::hiddenInput(
                                            Yii::$app->request->csrfParam,
                                            Yii::$app->request->csrfToken).
                                        '<button type="submit" class="button basket-btn">
                                            Добавить в корзину
                                        </button>
                                    </form>
            </div>
            </div>';
        }
        ?>
        <script src="scripts/filter.js"></script>
        <script src="scripts/coffee-button.js"></script>
    </div>
</div>
<script src="scripts/script.js"></script>

