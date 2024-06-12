<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'delivery'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name);
$query = "SELECT * FROM catalog";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; 
    $row = mysqli_fetch_assoc($result);
    $data[] = $row);

?>
<div class="slider-container">
    <div class="covers">
        <div class="cover cheese container">
            <p>ЗАКАЖИ СОЧНЫЙ СЫРНЫЙ ОБЕД</p>
            <p class="st">20% скидка для новых клиентов</p>
            <button href="" class="button">Использовать промокод</button>
        </div>
        <div class="cover coffee container">
            <p>КОФЕ С СЫРНОЙ ПЕНКОЙ</p>
            <button href="" class="button">Перейти в каталог</button>
        </div>
    </div>
</div>
<button class="prev-button" type="button" aria-label="Посмотреть предыдущий слайд">&lt;</button>
<button class="next-button" type="button" aria-label="Посмотреть следующий слайд">&gt;</button>
<div class="catalog container">
    <div class="catalog-menu">
        <button class="menu menu1" data-category="popular">Популярное</button>
        <button class="menu" data-category="pizza">Пицца</button>
        <button class="menu" data-category="burgers"><img src="img/спорткар.svg" alt="">Бургеры</button>
        <button class="menu" data-category="snacks"><img src="img/премиум.svg" alt="">Снеки и соусы</button>
        <button class="menu" data-category="coffee"><img src="img/комфорт.svg" alt="">Кофе</button>
        <button class="menu" data-category="limonade"><img src="img/комфорт.svg" alt="">Лимонад</button>
        <button class="menu" data-category="milkshakes"><img src="img/комфорт.svg" alt="">Молочные коктейли</button>
    </div>
    <div class="catalog-list">
        <?php
        foreach ($data as $row) {
            echo '<div class="catalog-item '; 
            if ($row['popular'] == 1) {
                echo 'popular';
            };
            if ($row['category'] == 'pizza') {
                echo 'pizza';
            } elseif ($row['category'] == 'burgers') {
                echo 'burgers';
            } elseif ($row['category'] == 'snacks') {
                echo 'snacks';
            } elseif ($row['category'] == 'coffee') {
                echo 'coffee';
            } elseif ($row['category'] == 'limonade') {
                echo 'plimonade';
            } elseif ($row['category'] == 'milkshakes') {
                echo 'milkshakes';
            };
            echo '">
            <img src="img/'.$row['shortname'].'.png" alt="">
            <p class="name-item">'.$row['name'].'</p>
            <p>'.$row['price'].' рублей</p>
            <button class="button basket">В корзину</button>
            </div>';
        }
        ?>
        <script src="scripts/filter.js"></script>
    </div>
</div>
<script src="scripts/script.js"></script>
